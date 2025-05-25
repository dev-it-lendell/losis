<?php
    include '../../connect.php';
    include '../checking.php';

	if (isset($_POST['approveReq'])) {
       	if ($requeststatus == '1') {
		        $requeststatus = $_POST['requeststatus'];
		        $req_code = $_POST['req_code'];
		        $rep_opscode = $_POST['rep_opscode'];
		        $rep_borrowdatefrom = $_POST['rep_borrowdatefrom'];
		        $rep_borrowdateto = $_POST['rep_borrowdateto'];
		        $rep_poccode = $_POST['rep_poccode'];

				$conn->query("UPDATE tbl_supervisor_member_request SET request_status = '".$requeststatus."', poc_request_approver = '".$_SESSION["user_id"]."', datetime_approved = NOW() WHERE request_id = '".$req_code."'");
				$conn->query("INSERT INTO tbl_supervisor_approved_members SET request_id = '".$req_code."', operations_id = '".$rep_opscode."', requesting_team = '$team_', borrow_date_from = '".$rep_borrowdatefrom."', borrow_date_to = '".$rep_borrowdateto."', datetime_approved = 'NOW()'");
				$sql = "INSERT INTO tbl_supervisor_history_logs SET
							user_id = '". $_SESSION['user_id'] ."',
		                    x_module = 'Operations - Approval of Operations',
		                    x_module_action = 'Approve Requesting of Member'";
				$res = $conn->query($sql);                                
				if ($res) {
					$last_return_id = mysqli_insert_id($conn);
					if ($last_return_id) {
						$logsid = rand(10000000,99999999);
						$logsuserid = "LOG-".$logsid."-".$last_return_id;
						$logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
						$resquery = $conn->query($logsquery);
					}
				}
				$sql = "INSERT INTO tbl_supervisor_history_logs SET
							user_id = '". $_SESSION['user_id'] ."',
		                    x_module = 'Operations',
		                    x_module_action = 'View Operations - Approval of Operations'";
				$res = $conn->query($sql);                                
				if ($res) {
					$last_return_id = mysqli_insert_id($conn);
					if ($last_return_id) {
						$logsid = rand(10000000,99999999);
						$logsuserid = "LOG-".$logsid."-".$last_return_id;
						$logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
						$resquery = $conn->query($logsquery);
					}
				}
				$sql2 = "INSERT INTO tbl_notifications SET
		                    notif_subject = 'Approval of Operations',
		                    notif_text = 'Approval of Member - Operations',
		                    notif_details = 'Success Approval of Request',
							notif_status = '0',
							notif_datetime = NOW(),
							notif_to = '".$rep_poccode."',
							notif_from =    '". $_SESSION["user_id"]."'";   
				$res2 = $conn->query($sql2);
				$qstring = '?status=succ';
	            header("Location: ../approval_ops.php".$qstring);

       	} else {
		        $requeststatus = $_POST['requeststatus'];
		        $req_denyremarks = $_POST['req_denyremarks'];
		        $req_code = $_POST['req_code'];
		        $rep_opscode = $_POST['rep_opscode'];

				$conn->query("UPDATE tbl_supervisor_member_request SET request_status = '".$requeststatus."', poc_request_disapprover = '".$_SESSION["user_id"]."', deny_request_remarks = '".$req_denyremarks."', datetime_disapproved = NOW()");
				$sql = "INSERT INTO tbl_supervisor_history_logs SET
							user_id = '". $_SESSION['user_id'] ."',
		                    x_module = 'Operations - Approval of Operations',
		                    x_module_action = 'Disapprove Request of Member'";
				$res = $conn->query($sql);                                
				if ($res) {
					$last_return_id = mysqli_insert_id($conn);
					if ($last_return_id) {
						$logsid = rand(10000000,99999999);
						$logsuserid = "LOG-".$logsid."-".$last_return_id;
						$logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
						$resquery = $conn->query($logsquery);
					}
				}
				$sql = "INSERT INTO tbl_supervisor_history_logs SET
							user_id = '". $_SESSION['user_id'] ."',
		                    x_module = 'Operations',
		                    x_module_action = 'View Operations - Approval of Operations'";
				$res = $conn->query($sql);                                
				if ($res) {
					$last_return_id = mysqli_insert_id($conn);
					if ($last_return_id) {
						$logsid = rand(10000000,99999999);
						$logsuserid = "LOG-".$logsid."-".$last_return_id;
						$logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
						$resquery = $conn->query($logsquery);
					}
				}
				$sql2 = "INSERT INTO tbl_notifications SET
		                    notif_subject = 'Approval of Operations',
		                    notif_text = 'Disapproval of Member - Operations',
		                    notif_details = 'Success Disapproval of Request',
							notif_status = '0',
							notif_datetime = NOW(),
							notif_to = '".$rep_poccode."',
							notif_from =    '". $_SESSION["user_id"]."'";   
				$res2 = $conn->query($sql2);
				$qstring = '?status=succ';
	            header("Location: ../approval_ops.php".$qstring);
       	}
	}	
?>