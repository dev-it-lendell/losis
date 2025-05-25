<?php
include '../connect.php'; // Ensure this file establishes a database connection

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get the selected endorsement codes from the POST request
$selectedEndorsements = isset($_POST['endo_codes']) ? $_POST['endo_codes'] : []; // Assuming 'endo_codes' is the name of the checkbox array

// Modify the SQL query to filter by selected endorsement codes
if (!empty($selectedEndorsements)) {
    $placeholders = implode(',', array_fill(0, count($selectedEndorsements), '?')); // Create placeholders for prepared statement
    $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.package_desc, a.endo_code, 
                   CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, 
                   a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, 
                   a.folder_name, a.document_status_others, a.remarks_others, 
                   a.document_status_employment, a.remarks_employment, 
                   a.document_status_education, a.remarks_education, a.endorsed_to, 
                   a.turn_around_date, a.endo_services, a.client_id, a.site_id, 
                   a.endo_requestor, a.change_package, a.importance, a.bi_id, 
                   a.closure_date, a.account, a.initiation_date,
                   b.verify_status, b.verifier_, b.cmap_, b.cmap_results, 
                   b.ofac_, b.ofac_results, b.oig_, b.oig_results, 
                   b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, b.datetime_done,
                   CONCAT(c.user_id) AS clientuserid, 
                   CONCAT(c.fname, ' ', c.mname, ' ', c.lname, ' ', c.suffix) AS clientname,
                   c.company_name, c.user_position, c.site_id, c.team_,
                   CONCAT(d.user_id) AS supervisorid, d.assigned_team,
                   CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname,
                   e.client_name, e.acronym_, e.site_
            FROM tbl_endo AS a 
            LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code 
            LEFT JOIN tbl_client AS c ON a.client_id = c.user_id 
            LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id 
            LEFT JOIN client_list AS e ON a.site_id = e.client_id 
            WHERE a.endo_status = '1' AND b.verify_status = '0' 
            AND a.endo_code IN ($placeholders)";
} else {
    echo json_encode(['error' => 'No endorsement codes selected']);
    exit;
}

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    echo json_encode(['error' => 'Failed to prepare statement: ' . $conn->error]);
    exit;
}

// Bind the selected endorsement codes to the prepared statement
$stmt->bind_param(str_repeat('s', count($selectedEndorsements)), ...$selectedEndorsements); // Assuming the codes are strings

if (!$stmt->execute()) {
    echo json_encode(['error' => 'Failed to execute statement: ' . $stmt->error]);
    exit;
}

// Bind the result variables
$stmt->bind_result(
    $id, $endo_id, $endo_desc, $package_desc, $endo_code, $applicantname, 
    $birthdate, $endo_date, $endo_status, $is_for_review, $is_done, 
    $folder_name, $document_status_others, $remarks_others, 
    $document_status_employment, $remarks_employment, 
    $document_status_education, $remarks_education, $endorsed_to, 
    $turn_around_date, $endo_services, $client_id, $site_id, 
    $endo_requestor, $change_package, $importance, $bi_id, 
    $closure_date, $account, $initiation_date,
    $verify_status, $verifier_, $cmap_, $cmap_results, 
    $ofac_, $ofac_results, $oig_, $oig_results, 
    $gsa_, $gsa_results, $endo_folder, $datetime_added, $datetime_done,
    $clientuserid, $clientname, $company_name, $user_position, $site_id_client, 
    $team_, $supervisorid, $assigned_team, $supervisorname,
    $client_name, $acronym_, $site_
);

$output = '';
while ($stmt->fetch()) {
    $newDateEndo = date('F d, Y', strtotime($endo_date));
    $newDateTurnAround = date('F d, Y', strtotime($turn_around_date));
    $clientfullname = htmlspecialchars($company_name) . ' - ' . htmlspecialchars($site_);

    $output .= '<div class="application-details mb-4">';
    // Add client ID
    $output .= '<p><strong>Client ID:</strong> ' . htmlspecialchars($clientuserid) . '</p>';
    $output .= '<p><strong>Applicant Name:</strong> ' . htmlspecialchars($applicantname) . '</p>';
    $output .= '<p><strong>Endorsement Code:</strong> ' . htmlspecialchars($endo_code) . '</p>';
    $output .= '<p><strong>Endorsement Date:</strong> ' . $newDateEndo . '</p>';
    $output .= '<p><strong>Turnaround Date:</strong> ' . $newDateTurnAround . '</p>';
    $output .= '<p><strong>Company Name - Site:</strong> ' . $clientfullname . '</p>';
    $output .= '<p><strong>Assigned Team:</strong> ' . htmlspecialchars($assigned_team) . '</p>';
    $output .= '<p><strong>Supervisor Name:</strong> ' . htmlspecialchars($supervisorname) . '</p>';
    $output .= '<p><strong>Package Description:</strong> ' . htmlspecialchars($package_desc) . '</p>';
    $output .= '<p><strong>SupervisorID:</strong> ' . htmlspecialchars($supervisorid) . '</p>';
    $output .= '</div><hr>';
}

if (empty($output)) {
    echo json_encode(['error' => 'No applications found']);
} else {
    echo $output;
}

$stmt->close();
$conn->close();
?>
