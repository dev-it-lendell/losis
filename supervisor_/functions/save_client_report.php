<?php
include '../../connect.php';
include '../checking.php';

if (isset($_POST['sendreporttoclient'])) {
	$endo_id = $_POST['endoid'];
	$clientid = $_POST['clientid'];
	$clientemail = $_POST['clientemail'];
	$applicantname = $_POST['applicantname'];

	$sql = "SELECT endo_id, endo_code, endorsed_to FROM tbl_endo WHERE endo_id = '$endo_id'";
	$query = $conn->query($sql);
	while ($row = mysqli_fetch_array($query)) {
		extract($row);
		$endoCode = $row['endo_code'];
		$endorsedTo = $row['endorsed_to'];
		$endo_id = $_POST['endoid'];
		$acronym = $_POST['acronym'];
		$result_ = 'Background Investigation - ' . $endoCode;
		$filename   = $endoCode;

		//Patial Report
		$filenameP   = $endoCode . ' - ' . 'Partial Report';
		$extensionP  = pathinfo($_FILES["files"]["name"], PATHINFO_EXTENSION);
		$basenameP   = $filenameP . "." . $extensionP;
		$sourceP       = $_FILES["files"]["tmp_name"];
		$destinationP  = "../../client_/partial_report/{$endoCode}/{$basenameP}";

		//Complete Report
		$extension  = pathinfo($_FILES["files"]["name"], PATHINFO_EXTENSION);
		$basename   = $filename . "." . $extension;
		$file_loc = $_FILES['files']['tmp_name'];
		$file_size = $_FILES['files']['size'];
		$file_type = $_FILES['files']['type'];
		$source       = $_FILES["files"]["tmp_name"];
		$destination  = "../../client_/final_report/{$endoCode}/{$basename}";

		//Patial Report
		if ($_POST['reporttype'] == '0') {
			if (move_uploaded_file($sourceP, $destinationP)) {
				$sql1 = "UPDATE tbl_endo SET is_sent_partial = '1', closure_date = NOW() WHERE endo_code = '$endoCode'";
				mysqli_query($conn, $sql1);
				$sql2 = "INSERT INTO tbl_notifications SET notif_subject = '$result_', notif_text = 'Sending of Partial Report to Client', notif_details = 'Success of Sending Partial Report', notif_status = '0', notif_datetime = NOW(), notif_to = '$clientid', notif_from = '" . $_SESSION["user_id"] . "'";
				mysqli_query($conn, $sql2);
				$sql3 = "INSERT INTO endorsement_logs SET client_id = '$clientid' , endo_code = '$endoCode', endo_action = 'Sending of Final Report to Client', assigned_poc = '" . $_SESSION["user_id"] . "', assigned_team = '$team_', datetime_added = NOW()";
				mysqli_query($conn, $sql3);
				$sql4 = "INSERT INTO tbl_supervisor_history_logs SET
                            user_id = '" . $_SESSION['user_id'] . "',
                            x_module = 'Endorsements - Background Investigation',
                            x_module_action = 'Sending of Partial Report'";
				$res7 = $conn->query($sql4);
				if ($res7) {
					$last_return_id = mysqli_insert_id($conn);
					if ($last_return_id) {
						$logsid = rand(10000000, 99999999);
						$logsuserid = "LOG-" . $logsid . "-" . $last_return_id;
						$logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '" . $logsuserid . "' WHERE id = '" . $last_return_id . "'";
						$resquery = $conn->query($logsquery);
					}
				}
				$sql8 = "INSERT INTO tbl_supervisor_history_logs SET
                            user_id = '" . $_SESSION['user_id'] . "',
                            x_module = 'Endorsements',
                            x_module_action = 'View Background Investigation'";
				$res8 = $conn->query($sql8);
				if ($res8) {
					$last_return_id = mysqli_insert_id($conn);
					if ($last_return_id) {
						$logsid = rand(10000000, 99999999);
						$logsuserid = "LOG-" . $logsid . "-" . $last_return_id;
						$logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '" . $logsuserid . "' WHERE id = '" . $last_return_id . "'";
						$resquery = $conn->query($logsquery);
					}
				}

				// //comment - Send email to supervisor if success.
				// if($res7) {
				// // comment - confirm smtp
				// // comment - ini_set("SMTP", "smtpout.secureserver.net"); 
				//     $to = $clientemail;
				//     // $to = 'jmarvin.peralta@lendell.ph';
				//     $subject = "Partial Report for ".$applicantname;
				//     $message = "Hello ".$row_email['fname'].', '."We have a new endorsement/s.".''." Thank you!" ;
				//     $from = $spv_useremail;
				//     $headers = "From: $from";
				//     mail($to,$subject,$message,$headers);
				// }

				$qstring = '?sendfinrep=succ';
				$response = [
					'success' => true,
					'message' => 'Report successfully uploaded',
					'redirect' => $qstring
				];
			} else {
				$qstring = '?sendfinrep=err';

				$response = [
					'success' => false,
					'message' => 'Report failed to upload',
					'redirect' => $qstring,
				];
			}
		}
		// Complete Report
		elseif ($_POST['reporttype'] == '1') {
			if (move_uploaded_file($source, $destination)) {
				$sql9 = "INSERT INTO tbl_bi_final_reports SET endo_id =  '$endo_id', file_name = '$basename', report_datetime = NOW()";

				mysqli_query($conn, $sql9);
				$sql1 = "UPDATE tbl_bi_assigned_supervisor SET is_distributed =  '1' WHERE endo_code = '$endoCode'";
				mysqli_query($conn, $sql1);
				$sql2 = "UPDATE tbl_endo SET endo_status = '4', is_done = '1', closure_date = NOW() WHERE endo_code = '$endoCode'";
				mysqli_query($conn, $sql2);
				$sql3 = "INSERT INTO tbl_bi_assigned_client SET endo_code = '$endoCode', assigned_by = '" . $_SESSION["user_id"] . "', assigned_client = '$clientid', assigned_to = '$team_', is_distributed = '0', is_returned = '0'";
				mysqli_query($conn, $sql3);
				$sql4 = "UPDATE tbl_endorsement_bi_process SET assigned_client = '$clientid', datetime_completed = NOW(), percentage_ = '100', datetime_updated = NOW() WHERE endo_code = '$endoCode'";
				mysqli_query($conn, $sql4);
				$sql5 = "INSERT INTO tbl_notifications SET notif_subject = '$result_', notif_text = 'Sending of Final Report to Client', notif_details = 'Success of Sending Final Report', notif_status = '0', notif_datetime = NOW(), notif_to = '$clientid', notif_from = '" . $_SESSION["user_id"] . "'";
				mysqli_query($conn, $sql5);
				$sql6 = "INSERT INTO endorsement_logs SET client_id = '$clientid' , endo_code = '$endoCode', endo_action = 'Sending of Final Report to Client', assigned_poc = '" . $_SESSION["user_id"] . "', assigned_team = '$team_', datetime_added = NOW()";
				mysqli_query($conn, $sql6);
				$sql7 = "INSERT INTO tbl_supervisor_history_logs SET
                            user_id = '" . $_SESSION['user_id'] . "',
                            x_module = 'Endorsements - Background Investigation',
                            x_module_action = 'Sending of Final Report'";
				$res7 = $conn->query($sql7);
				if ($res7) {
					$last_return_id = mysqli_insert_id($conn);
					if ($last_return_id) {
						$logsid = rand(10000000, 99999999);
						$logsuserid = "LOG-" . $logsid . "-" . $last_return_id;
						$logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '" . $logsuserid . "' WHERE id = '" . $last_return_id . "'";
						$resquery = $conn->query($logsquery);
					}
				}
				$sql8 = "INSERT INTO tbl_supervisor_history_logs SET
                            user_id = '" . $_SESSION['user_id'] . "',
                            x_module = 'Endorsements',
                            x_module_action = 'View Background Investigation'";
				$res8 = $conn->query($sql8);
				if ($res8) {
					$last_return_id = mysqli_insert_id($conn);
					if ($last_return_id) {
						$logsid = rand(10000000, 99999999);
						$logsuserid = "LOG-" . $logsid . "-" . $last_return_id;
						$logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '" . $logsuserid . "' WHERE id = '" . $last_return_id . "'";
						$resquery = $conn->query($logsquery);
					}
				}
				$qstring = '?sendfinrep=succ';

				$response = [
					'success' => true,
					'message' => 'Report successfully uploaded',
					'redirect' => $qstring,
				];
			} else {
				$qstring = '?sendfinrep=err';

				$response = [
					'success' => false,
					'message' => 'Report failed to upload',
					'redirect' => $qstring,
				];
			}
		}
	}
} else {
	$qstring = '?sendfinrep=err';
}


echo json_encode($response);
// header("Location: ../endorsement_bi.php" . $qstring);
// exit;