<?php
    include '../../connect.php';
    include '../checking.php';

    if (isset($_POST['sendreporttoclient'])) {
        $endo_id = $_POST['endoid']; 
        $clientid = $_POST['clientid'];

        $sql = "SELECT endo_id, endo_code, endorsed_to FROM tbl_endo WHERE endo_id = '$endo_id'";
        $query = $conn->query($sql);
        while ($row = mysqli_fetch_array($query)) {
            extract($row);
            $endoCode = $row['endo_code'];
            $endorsedTo = $row['endorsed_to'];
            $endo_id = $_POST['endoid'];     
            $acronym = $_POST['acronym'];     
            $result_ = 'Background Investigation - '.$endoCode;
            $filename   = $endoCode;
            $extension  = pathinfo( $_FILES["files"]["name"], PATHINFO_EXTENSION ); 
            $basename   = $filename . "." . $extension; 
            $file_loc = $_FILES['files']['tmp_name'];
            $file_size = $_FILES['files']['size'];
            $file_type = $_FILES['files']['type'];
            $source       = $_FILES["files"]["tmp_name"];
            $destination  = "../../supervisor_/da_to_poc_files/{$year}/{$endo_code}/{$basename}";
            $mkdir = "../../client_/final_report/{$endo_code}";
            $mkdirpartial = "../../client_/partial_report/{$endo_code}";

            if (move_uploaded_file( $source, $destination )) {
                $sql = "UPDATE tbl_bi_assigned_analyst SET is_distributed =  '1' WHERE endo_code = '$endoCode'";
                mysqli_query($conn,$sql);
                $sql1 = "INSERT INTO tbl_bi_assigned_supervisor SET endo_code = '$endoCode', assigned_by = '".$_SESSION["user_id"]."', assigned_supervisor = '$supervisorid', is_distributed = '0', assigned_to = '$team_one'";
                mysqli_query($conn,$sql1);
                $sql2 = "UPDATE tbl_endorsement_bi_process SET review_supervisor = '$supervisorid', percentage_ = '90', datetime_updated = NOW() WHERE endo_code ='$endoCode'";
                mysqli_query($conn,$sql2);
                $sql3 = "INSERT INTO tbl_notifications SET notif_subject = '$receivedbi_', notif_text = 'Sending of Report to Supervisor', notif_details = 'Success Sending of Endorsement Report', notif_status = '0', notif_datetime = NOW(), notif_to = '$supervisorid', notif_from = '". $_SESSION["user_id"]."'";
                mysqli_query($conn,$sql3);
                $sql4 = "UPDATE tbl_endo SET endo_status = '3', is_for_review = '1' WHERE endo_code = '$endoCode'";
                mysqli_query($conn,$sql4);
                $sql5 = "INSERT INTO endorsement_logs SET client_id = '$clientid', endo_code = '$endoCode', endo_action = 'Sending of Report to Supervisor', assigned_poc = '$supervisorid', assigned_operations = '". $_SESSION["user_id"]."', assigned_team = '$team_one', datetime_added = NOW()";
                mysqli_query($conn,$sql5);
                $sql6 = "UPDATE create_report_options SET assigned_da = '".$_SESSION["user_id"]."' WHERE endorsement_code = '$endoCode'";
                mysqli_query($conn,$sql6);
                mkdir($mkdir, 0777, true);
                mkdir($mkdirpartial, 0777, true);
                $sql7 = "INSERT INTO tbl_operations_history_logs SET
                        user_id = '". $_SESSION['user_id'] ."',
                        x_module = 'Endorsements - Background Investigation',
                        x_module_action = 'Sending of Endorsement Report'";
                $res7 = $conn->query($sql7);                           
                if ($res7) {
                    $last_return_id = mysqli_insert_id($conn);
                    if ($last_return_id) {
                        $logsid = rand(10000000,99999999);
                        $logsuserid = "LOG-".$logsid."-".$last_return_id;
                        $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                        $resquery = $conn->query($logsquery);
                    }
                }
                $qstring = '?sendfinrep=succ';
            } else {
                $qstring = '?sendfinrep=err';
            }
        }
    }
    header("Location: ../endorsements_bi_da.php");
?>