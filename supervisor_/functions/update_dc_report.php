<?php

    include '../../connect.php';
    include '../checking.php';

    if(isset($_POST['updateReport'])){
         
        $endoid = $_POST['endoid'];  
        $endocode = $_POST['endocode'];  
        $clientid = $_POST['clientid'];  
        $verificationstatus = $_POST['verificationstatus'];  
        $verificationcode = $_POST['verificationcode'];  
        $verificationremarks = $_POST['verificationremarks'];  
        $result_ = 'Database Check - '.$endocode;

        $sql = "UPDATE tbl_endo_criminal_reports SET verification_status = '$verificationstatus', verification_code = '$verificationcode', remarks = '$verificationremarks' WHERE endo_id = '$endoid'";
        $res = mysqli_query($conn,$sql);
        $sql1 = "INSERT INTO tbl_notifications SET notif_subject = '$result_', notif_text = 'Editing of Final Report for Client', notif_details = 'Success of Editing Final Report', notif_status = '0', notif_datetime = NOW(), notif_to = '$clientid', notif_from = '". $_SESSION["user_id"]."'";
        mysqli_query($conn,$sql1);
        $sql2 = "INSERT INTO endorsement_logs SET client_id = '$clientid' , endo_code = '$endocode', endo_action = 'Editing of Final Report for Client', assigned_poc = '". $_SESSION["user_id"]."', assigned_team = '$team_', datetime_added = NOW()";
        mysqli_query($conn,$sql2);        
        $sql3 = "INSERT INTO tbl_supervisor_history_logs SET
                user_id = '". $_SESSION['user_id'] ."',
                x_module = 'Review Endorsement - Background Investigation',
                x_module_action = 'Editing of Final Report'";
        $res3 = $conn->query($sql3);                           
        if ($res3) {
            $last_return_id = mysqli_insert_id($conn);
            if ($last_return_id) {
                $logsid = rand(10000000,99999999);
                $logsuserid = "LOG-".$logsid."-".$last_return_id;
                $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                $resquery = $conn->query($logsquery);
            }
        }
        $sql4 = "INSERT INTO tbl_supervisor_history_logs SET
                user_id = '". $_SESSION['user_id'] ."',
                x_module = 'Review Endorsement',
                x_module_action = 'View Review Endorsement - Database Investigation'";
        $res4 = $conn->query($sql4);                                
        if ($res4) {
            $last_return_id = mysqli_insert_id($conn);
            if ($last_return_id) {
                $logsid = rand(10000000,99999999);
                $logsuserid = "LOG-".$logsid."-".$last_return_id;
                $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                $resquery = $conn->query($logsquery);
            }
        }
        $qstring = '?editreport=succ';
    } else {
        $qstring = '?editreport=err';
    }
    header("Location: ../review_endo_dc.php".$qstring);
?>