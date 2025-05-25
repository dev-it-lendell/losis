<?php
    include '../../connect.php';
    include '../checking.php';

    if (isset($_POST['sendreportdc_poc'])) {
        $endoid = $_POST['endoid'];  
        $endodesc = $_POST['endodesc'];  
        $endocode = $_POST['endocode'];  
        $endodate = $_POST['endodate'];  
        $endorsedto = $_POST['endorsedto'];  
        $endorsedby = $_POST['endorsedby'];  
        $turnarounddate = $_POST['turnarounddate'];  
        $endoservices = $_POST['endoservices'];  
        $fname = $_POST['fname'];  
        $mname = $_POST['mname'];  
        $lname = $_POST['lname'];
        $suffix = $_POST['suffix'];
        $birthdate = $_POST['birthdate'];  
        $verification_status = $_POST['verification_status'];  
        $verification_code = $_POST['verification_code'];  
        $endo_remarks = $_POST['endo_remarks'];  
        $clientuserid = $_POST['clientuserid'];  
        $result_ = 'Database Check - '.$endocode;

        $conn->query("INSERT INTO tbl_endo_criminal_reports SET endo_id = '$endoid', endo_desc = '$endodesc', endo_code = '$endocode', endo_date = '$endodate', endo_status = '4', client_id = '$clientuserid', site_id = '$endorsedby', endorsed_to = '$endorsedto', endo_submitted = NOW(), turn_around_date = '$turnarounddate', endo_services = '$endoservices', fname = '$fname', mname = '$mname', lname = '$lname', suffix = '$suffix', birthdate = '$birthdate', verification_status = '$verification_status', remarks = '$endo_remarks', verification_code = '$verification_code'");
        $conn->query("UPDATE tbl_dc_assigned_analyst SET is_distributed =  '1' WHERE endo_code = '$endocode'");
        $conn->query("INSERT INTO tbl_dc_assigned_supervisor SET endo_code = '$endocode', assigned_by = '".$_SESSION["user_id"]."', assigned_supervisor = '$endorsedto', is_distributed = '0', assigned_to = '$team_one'");
        $conn->query("UPDATE tbl_endorsement_dc_process SET review_supervisor = '$endorsedto', percentage_ = '80', datetime_updated = NOW() WHERE endo_code ='$endocode'"); 
        $conn->query("UPDATE tbl_endo_criminal SET endo_status = '3', is_for_review = '1' WHERE endo_code = '$endocode'");
        $conn->query("INSERT INTO endorsement_logs SET client_id = '$clientuserid', endo_code = '$endocode', endo_action = 'Sending of Report to Supervisor', assigned_poc = '$endorsedto', assigned_operations = '".$_SESSION["user_id"]."', assigned_team = '$team_one',datetime_added = NOW()");
        $conn->query("INSERT INTO tbl_notifications SET notif_subject = '$result_', notif_text = 'Sending of Report to Supervisor', notif_details = 'Success Sending of Endorsement Report', notif_status = '0', notif_datetime = NOW(), notif_to = '$endorsedto', notif_from = '". $_SESSION["user_id"]."'");
        $sql = "INSERT INTO tbl_operations_history_logs SET
                user_id = '". $_SESSION['user_id'] ."',
                x_module = 'Distribute Endorsement (DC - Analyst)',
                x_module_action = 'Sending of Endorsement Report'";
        $res = $conn->query($sql);                           
        if ($res) {
            $last_return_id = mysqli_insert_id($conn);
            if ($last_return_id) {
                $logsid = rand(10000000,99999999);
                $logsuserid = "LOG-".$logsid."-".$last_return_id;
                $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                $resquery = $conn->query($logsquery);
            }
        }
        $sql1 = "INSERT INTO tbl_operations_history_logs SET
                user_id = '". $_SESSION['user_id'] ."',
                x_module = 'Distribute Endorsement',
                x_module_action = 'View Distribute Endorsement (DC - Analyst)'";
        $res1 = $conn->query($sql1);                           
        if ($res1) {
            $last_return_id = mysqli_insert_id($conn);
            if ($last_return_id) {
                $logsid = rand(10000000,99999999);
                $logsuserid = "LOG-".$logsid."-".$last_return_id;
                $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                $resquery = $conn->query($logsquery);
            }
        }
        $qstring = '?sendrepdcda=succsend';
    } else {
        $qstring = '?sendrepdcda=errsend';
    }
    header("Location: ../endorsements_dc_da.php".$qstring);
?>