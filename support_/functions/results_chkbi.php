<?php
    include '../../connect.php';
    include '../checking.php';

        if(isset($_POST['verifybi'])){
         
            $verifybi_endocode = $_POST['verifybi_endocode'];
            $verifybi_clientcode = $_POST['verifybi_clientcode'];
            $endorsementcode = $_POST['endocode'];
            $countfiles = count($_FILES['files']['name']);
            $temp_name = $_FILES['files']['tmp_name'];
            $supervisorid = $_POST['supervisorid'];
            $result_ = 'Background Investigation - '.$endorsementcode;
            $checkboxcmap = $_POST['bi_cmap'];
            $checkboxofac = $_POST['bi_ofac'];
            $checkboxoig = $_POST['bi_oig'];
            $checkboxgsa = $_POST['bi_gsa'];
            $resultscmap = $_POST['txt_cmap_biresults'];
            $resultsofac = $_POST['txt_ofac_biresults'];
            $resultsoig = $_POST['txt_oig_biresults'];
            $resultsgsa = $_POST['txt_gsa_biresults'];
            $clientuserid = $_POST['clientuserid'];
            $supervisorid = $_POST['supervisorid'];
            $assigned_team = $_POST['assigned_team'];

            for($i=0;$i<$countfiles;$i++){
                $conn->query("UPDATE tbl_endo_support_bi SET verify_status = '1', verifier_ = '".$supid."', cmap_ = '".$checkboxcmap."', cmap_results = '".$resultscmap."', ofac_  = '".$checkboxofac."', ofac_results = '".$resultsofac."', oig_ = '".$checkboxoig."', oig_results = '".$resultsoig."', gsa_ = '".$checkboxgsa."', gsa_results = '".$resultsgsa."', endo_folder = '".$verifybi_endocode."', datetime_done = NOW() WHERE endo_code = '".$verifybi_endocode."'");
                $conn->query("UPDATE tbl_endo SET endo_status = '2' WHERE endo_code = '".$verifybi_endocode."'");
                $conn->query("UPDATE tbl_endorsement_bi_process SET percentage_ = '40', assigned_support = '".$supid."' WHERE endo_code = '".$verifybi_endocode."'");
                $endofiles = $_FILES['files']['name'][$i];
                $target_dir = "../verification_checking/background_inv/{$year}/{$verifybi_clientcode}/{$verifybi_endocode}/";
                mkdir($target_dir, 0777, true);
                move_uploaded_file($_FILES['files']['tmp_name'][$i],"$target_dir/".$endofiles);
            }
            $conn->query("INSERT INTO tbl_notifications (notif_subject, notif_text, notif_details, notif_status, notif_datetime, notif_to, notif_from) VALUES ('".$result_."', 'Verification Result',  'Success Verification of Endorsement' , '0', NOW(), '".$supervisorid."', '".$supid."')");
            $conn->query("INSERT INTO endorsement_logs (client_id, endo_code, endo_action, assigned_poc, assigned_support, assigned_team, datetime_added) VALUES ('".$clientuserid."', '".$endorsementcode."', 'Verification of Endorsement', '".$supervisorid."', '".$supid."', '".$assigned_team."', NOW())");
            $sql = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Verify Endorsement - Background Investigation',
                    x_module_action = 'Verification of Endorsement'";
            $res = $conn->query($sql);                                
            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            $sql1 = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Verify Endorsement',
                    x_module_action = 'View Background Investigation'";
            $res1 = $conn->query($sql1);                                
            if ($res1) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            $qstring = '?verfbi=succverbi';
        } else {
            $qstring = '?verfbi=errverbi';
        }

    header("Location: ../verify_endo_bi.php".$qstring);
?>