<?php
    include '../../connect.php';
    include '../checking.php';

        if(isset($_POST['verifydc'])){
         
            // Count total files
            $verifydc_endocode = $_POST['verifydc_endocode'];
            $verifydc_clientcode = $_POST['verifydc_clientcode'];
            $endorsementcode = $_POST['endocode'];
            $countfiles = count($_FILES['files']['name']);
            $temp_name = $_FILES['files']['tmp_name'];
            $supervisorid = $_POST['supervisorid'];
            $result_ = 'Database Check - '.$endorsementcode;
            $checkboxcmap = $_POST['dc_cmap'];
            $checkboxofac = $_POST['dc_ofac'];
            $checkboxoig = $_POST['dc_oig'];
            $checkboxgsa = $_POST['dc_gsa'];
            $resultscmap = $_POST['txt_cmap_dcresults'];
            $resultsofac = $_POST['txt_ofac_dcresults'];
            $resultsoig = $_POST['txt_oig_dcresults'];
            $resultsgsa = $_POST['txt_gsa_dcresults'];
            $clientuserid = $_POST['clientuserid'];
            $supervisorid = $_POST['supervisorid'];
            $assigned_team = $_POST['assigned_team'];
            
            for($i=0;$i<$countfiles;$i++){
                $conn->query("UPDATE tbl_endo_support_dc SET verify_status = '1', verifier_ = '".$supportuser_id."', cmap_ = '".$checkboxcmap."', cmap_results = '".$resultscmap."', ofac_  = '".$checkboxofac."', ofac_results = '".$resultsofac."', oig_ = '".$checkboxoig."', oig_results = '".$resultsoig."', gsa_ = '".$checkboxgsa."', gsa_results = '".$resultsgsa."', endo_folder = '".$verifydc_endocode."', datetime_done = NOW() WHERE endo_code = '".$verifydc_endocode."'");
                $conn->query("UPDATE tbl_endo_criminal SET endo_status = '2' WHERE endo_code = '".$verifydc_endocode."'");
                $conn->query("UPDATE tbl_endorsement_dc_process SET percentage_ = '40', assigned_support = '".$supportuser_id."' WHERE endo_code = '".$verifydc_endocode."'");
                $endofiles = $_FILES['files']['name'][$i];
                $target_dir = "../verification_checking/database_chk/{$year}/{$verifydc_clientcode}/{$verifydc_endocode}/";
                mkdir($target_dir, 0777, true);
                move_uploaded_file($_FILES['files']['tmp_name'][$i],"$target_dir/".$endofiles);
            }
            $conn->query("INSERT INTO tbl_notifications (notif_subject, notif_text, notif_details, notif_status, notif_datetime, notif_to, notif_from) VALUES ('".$result_."', 'Verification Result', 'Success Verification of Endorsement', '0', NOW(), '".$supervisorid."', '".$supportuser_id."')");
            $conn->query("INSERT INTO endorsement_logs (client_id, endo_code, endo_action, assigned_poc, assigned_support, assigned_team, datetime_added) VALUES ('".$clientuserid."', '".$verifydc_endocode."', 'Verification of Endorsement', '".$supervisorid."', '".$supportuser_id."', '".$assigned_team."', NOW())");
            $sql = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Verify Endorsement - Database Check',
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
                    x_module_action = 'View Verify Endorsement - Database Check'";
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
            $qstring = '?verfdc=succverdc';
        } else {
            $qstring = '?verfdc=errverdc';
        }
        
    header("Location: ../verify_endo_dc.php".$qstring);

?>