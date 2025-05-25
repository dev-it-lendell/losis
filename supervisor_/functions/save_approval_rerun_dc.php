<?php
    include '../../connect.php';
    include '../checking.php';

    if (isset($_POST['savenewpkgdc'])) {
        $dc_endocode = $_POST['dc_endocode'];
        $dc_currentpkg = $_POST['dc_currentpkg'];
        $dc_newpkg = $_POST['dc_newpkg'];
        $dc_rerunstatus = $_POST['dc_rerunstatus'];
        $dc_rerunremarks = $_POST['dc_rerunremarks'];
        $clientid = $_POST['clientid'];

		$conn->query("UPDATE tbl_endo_criminal SET change_package = '2', package_desc = '".$dc_newpkg."' WHERE endo_code = '".$dc_endocode."'");
		$conn->query("UPDATE tbl_dc_rerun_endorsement SET approval_ = '".$dc_rerunstatus."', remarks_ = '".$dc_rerunremarks."' WHERE endo_code = '".$dc_endocode."'");
        $sql2 = "INSERT INTO endorsement_logs SET
					client_id = '".$clientid."',
					endo_code = '". $dc_endocode ."',
					endo_action = 'Approval of New Package - DC',
					assigned_poc = '". $_SESSION['user_id'] ."',
					assigned_team = '$team_',
					datetime_added = NOW()";
		$res2 = $conn->query($sql2);    
		$sql3 = "INSERT INTO tbl_notifications SET
					notif_subject = 'Database Check - $dc_endocode',
					notif_text = 'Rerun of Package',
					notif_details = 'Success Approving of Package',
					notif_status = '0',
					notif_datetime = NOW(),
					notif_to = '". $clientid."',
					notif_from =    '". $_SESSION["user_id"]."'";   
		$res3 = $conn->query($sql3); 
		$sql4 = "INSERT INTO tbl_supervisor_history_logs SET
					user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Rerun Endorsement',
                    x_module_action = 'View Rerun Endorsement - Database Check'";;
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
        $qstring = '?approvaldc=succ';
    } else {
        $qstring = '?approvaldc=err';
    }
    header("Location: ../rerun_endo_dc.php".$qstring);