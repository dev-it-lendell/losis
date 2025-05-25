<?php 
    include '../../connect.php';
    include '../checking.php';
    
    $endoCode = $_POST["endoCode"];

    if(isset($_POST['uploaddocs'])){
        $acronymclient = $_POST['acronymclient'];
        $endorsedpoc = $_POST['endorsedpoc'];
        $educationdocs = "0";
        $applicationCode = $_POST['application_code'];
        $employmentdocs = $_POST['employmentdocs'];
        $otherdocs = $_POST['otherdocs'];
        $educdocremarks = $_POST['educdocremarks'];
        $empdocremarks = $_POST['empdocremarks'];
        $othdocremarks = $_POST['othdocremarks'];
        $countedufiles = count($_FILES['edufile']['name']);
        $countempfiles = count($_FILES['empfile']['name']);
        $countotherfiles = count($_FILES['otherfile']['name']);
        $eductemp_name = $_FILES['edufile']['tmp_name'];
        $emptemp_name = $_FILES['empfile']['tmp_name'];
        $othtemp_name = $_FILES['otherfile']['tmp_name'];
        for($i=0;$i<$countedufiles;$i++){
            $conn->query("UPDATE tbl_endo SET supporting_documents = '".$educationdocs."', supporting_documents_remarks = '".$educdocremarks."' WHERE endo_code = '$endoCode'");
            $edufiles = $_FILES['edufile']['name'][$i];
            $target_dir = "../../application_documents/{$year}/{$acronymclient}/{$applicationCode}";
    
            move_uploaded_file($_FILES['edufile']['tmp_name'][$i],"$target_dir/".$edufiles);
        }
        // for($i=0;$i<$countempfiles;$i++){
        //     $conn->query("UPDATE tbl_endo SET document_status_employment = '".$employmentdocs."', remarks_employment = '".$empdocremarks."' WHERE endo_code = '$endoCode'");
        //     $empfiles = $_FILES['empfile']['name'][$i];
        //     $target_dir = "../documents/{$year}/{$acronymclient}/{$endoCode}/EmploymentDocuments";
    
        //     move_uploaded_file($_FILES['empfile']['tmp_name'][$i],"$target_dir/".$empfiles);
        // }
        // for($i=0;$i<$countotherfiles;$i++){
        //     $conn->query("UPDATE tbl_endo SET document_status_others = '".$otherdocs."', remarks_others = '".$othdocremarks."'  WHERE endo_code = '$endoCode'");
        //     $otherfiles = $_FILES['otherfile']['name'][$i];
        //     $target_dir = "../documents/{$year}/{$acronymclient}/{$endoCode}/OtherDocuments";
    
        //     move_uploaded_file($_FILES['otherfile']['tmp_name'][$i],"$target_dir/".$otherfiles);
        // }
        $sql2 = "INSERT INTO endorsement_logs SET
                client_id = '". $_SESSION['user_id'] ."',
                endo_code = '". $_POST['endoCode'] ."',
                endo_action = 'Uploading of Documents - BI',
                assigned_poc = '". $_POST['endorsedpoc'] ."',
                assigned_team = '$team_',
                datetime_added = NOW()";
        $res2 = $conn->query($sql2);    
        $sql3 = "INSERT INTO tbl_notifications SET
                notif_subject = 'Background Investigation - $endoCode',
                notif_text = 'Uploading of Documents',
                notif_details = 'Success of Uploaded Documents',
                notif_status = '0',
                notif_datetime = NOW(),
                notif_to = '". $_POST["endorsedpoc"]."',
                notif_from =    '". $_SESSION["user_id"]."'";   
        $res3 = $conn->query($sql3); 
        $sql4 = "INSERT INTO tbl_client_history_logs SET
                user_id = '". $_SESSION['user_id'] ."',
                x_module = 'Manage Endorsements - Background Investigation',
                x_module_action = 'Uploading of Documents'";
        $res4 = $conn->query($sql4);                           
        if ($res4) {
            $last_return_id = mysqli_insert_id($conn);
            if ($last_return_id) {
                $logsid = rand(10000000,99999999);
                $logsuserid = "LOG-".$logsid."-".$last_return_id;
                $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                $resquery = $conn->query($logsquery);
            }
        }
        $sql5 = "INSERT INTO tbl_client_history_logs SET
                user_id = '". $_SESSION['user_id'] ."',
                x_module = 'Manage Endorsements',
                x_module_action = 'View Manage Endorsements - Background Investigation'";
        $res5 = $conn->query($sql5);                           
        if ($res5) {
            $last_return_id = mysqli_insert_id($conn);
            if ($last_return_id) {
                $logsid = rand(10000000,99999999);
                $logsuserid = "LOG-".$logsid."-".$last_return_id;
                $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                $resquery = $conn->query($logsquery);
            }
        }
        $qstring = '?docs=succupld';
    } else {
        $qstring = '?docs=errupld';
    }
    header("Location: ../manage_bi_endo.php".$qstring);
?>