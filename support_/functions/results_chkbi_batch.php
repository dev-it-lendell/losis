<?php
// Update include paths to use absolute paths from the document root
include $_SERVER['DOCUMENT_ROOT'] . '/LOSIS/connect.php';
include $_SERVER['DOCUMENT_ROOT'] . '/LOSIS/support_/checking.php';


   if (isset($_POST['verifybi_batch'])) {
    // Get all selected endorsement codes
    $endorsement_codes = $_POST['selected_endorsements'] ?? [];
    
    foreach ($endorsement_codes as $endorsementcode) {
        // First, fetch all required data for this endorsement code
        $stmt = $conn->prepare("SELECT 
            a.client_id,
            a.endorsed_to AS supervisor_id,
            b.assigned_team,
            c.company_name,
            c.site_id,
            d.acronym_
            FROM tbl_endo a
            LEFT JOIN tbl_supervisor b ON a.endorsed_to = b.user_id
            LEFT JOIN tbl_client c ON a.client_id = c.user_id
            LEFT JOIN client_list d ON a.client_id = d.client_id
            WHERE a.endo_code = ?");
            
        if ($stmt === false) {
            die('Prepare failed: ' . $conn->error);
        }
        
        $stmt->bind_param("s", $endorsementcode);
        if (!$stmt->execute()) {
            die('Execute failed: ' . $stmt->error);
        }
        $stmt->bind_result($client_id, $supervisor_id, $assigned_team, $company_name, $site_id, $acronym_);
        $stmt->fetch();
        $stmt->close();
        
        // Get verification details from form
        $checkboxcmap = $_POST['bi_cmap'] ?? '0';
        $checkboxofac = $_POST['bi_ofac'] ?? '0';
        $checkboxoig = $_POST['bi_oig'] ?? '0';
        $checkboxgsa = $_POST['bi_gsa'] ?? '0';
        $resultscmap = $_POST['txt_cmap_biresults'] ?? '';
        $resultsofac = $_POST['txt_ofac_biresults'] ?? '';
        $resultsoig = $_POST['txt_oig_biresults'] ?? '';
        $resultsgsa = $_POST['txt_gsa_biresults'] ?? '';

        // Update tbl_endo_support_bi
        $stmt = $conn->prepare("UPDATE tbl_endo_support_bi SET 
            verify_status = '1',
            verifier_ = ?,
            cmap_ = ?,
            cmap_results = ?,
            ofac_ = ?,
            ofac_results = ?,
            oig_ = ?,
            oig_results = ?,
            gsa_ = ?,
            gsa_results = ?,
            endo_folder = ?,
            datetime_done = NOW()
            WHERE endo_code = ?");
            
        $stmt->bind_param("sssssssssss", // Changed from "ssssssssssss" (removed one 's')
            $supervisor_id,
            $checkboxcmap,
            $resultscmap,
            $checkboxofac,
            $resultsofac,
            $checkboxoig,
            $resultsoig,
            $checkboxgsa,
            $resultsgsa,
            $endorsementcode,
            $endorsementcode
        );
        $stmt->execute();

        // Update tbl_endo status
        $stmt = $conn->prepare("UPDATE tbl_endo SET endo_status = '2' WHERE endo_code = ?");
        $stmt->bind_param("s", $endorsementcode);
        $stmt->execute();

        // Update tbl_endorsement_bi_process
        $stmt = $conn->prepare("UPDATE tbl_endorsement_bi_process SET 
            percentage_ = '40',
            assigned_support = ?
            WHERE endo_code = ?");
        $stmt->bind_param("ss", $supervisor_id, $endorsementcode);
        $stmt->execute();

        // Insert notification
        $result_ = 'Background Investigation - ' . $endorsementcode;
        $stmt = $conn->prepare("INSERT INTO tbl_notifications 
            (notif_subject, notif_text, notif_details, notif_status, notif_datetime, notif_to, notif_from)
            VALUES (?, 'Verification Result', 'Success Verification of Endorsement', '0', NOW(), ?, ?)");
        $stmt->bind_param("sss", $result_, $supervisor_id, $_SESSION['user_id']);
        $stmt->execute();

        // Insert endorsement log
        $stmt = $conn->prepare("INSERT INTO endorsement_logs 
            (client_id, endo_code, endo_action, assigned_poc, assigned_support, assigned_team, datetime_added)
            VALUES (?, ?, 'Verification of Endorsement', ?, ?, ?, NOW())");
        $stmt->bind_param("sssss", 
            $client_id,
            $endorsementcode,
            $supervisor_id,
            $_SESSION['user_id'],
            $assigned_team
        );
        $stmt->execute();

        // Handle file uploads
        if (!empty($_FILES['files']['name'][0])) {
            $acronym_ = $endorsement_data['acronym_'];
            $year = date('Y');
            $target_dir = "../verification_checking/background_inv/{$year}/{$acronym_}/{$endorsementcode}/";
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }

            foreach ($_FILES['files']['name'] as $i => $filename) {
                if ($_FILES['files']['error'][$i] === UPLOAD_ERR_OK) {
                    move_uploaded_file(
                        $_FILES['files']['tmp_name'][$i],
                        $target_dir . basename($filename)
                    );
                }
            }
        }
    }

    // Insert support history log
    $stmt = $conn->prepare("INSERT INTO tbl_support_history_logs 
        (logs_id, user_id, x_module, x_module_action)
        VALUES (?, ?, 'Verify Endorsement - Background Investigation', 'Verification of Endorsement')");
    
    $logsid = 'LOG-' . rand(10000000, 99999999) . '-' . time();
    $stmt->bind_param("ss", $logsid, $_SESSION['user_id']);
    $stmt->execute();

    $qstring = '?verfbi=succverbi';
} else {
    $qstring = '?verfbi=errverbi';
}

header("Location: ../verify_endo_bi.php" . $qstring);
?>
