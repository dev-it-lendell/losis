<?php
	include 'checking.php';

	$status = "0";
	$sql = "SELECT id, user_id, login_dateTime, logout_dateTime FROM tbl_user_logs WHERE user_id = '".$_SESSION["user_id"]."' AND logout_dateTime IS NULL";
	$res = $conn->query($sql);
	$row = mysqli_fetch_array($res);
	$userlogid = $row['id'];
	$sql1 = "UPDATE tbl_user_logs SET logout_dateTime = NOW() WHERE id = '$userlogid'";
	$res1 = $conn->query($sql1);
	$row1 = mysqli_fetch_array($res1);
	$conn->query("UPDATE tbl_users SET messagestatus_ = '$status' WHERE user_id = '".$_SESSION["user_id"]."'");  
	$sql2 = "INSERT INTO tbl_support_history_logs SET
				user_id = '". $_SESSION['user_id'] ."',
				x_module = 'Supervisor Portal',
				x_module_action = 'Logging out of Account'";
	$res2 = $conn->query($sql2);                                
	if ($res2) {
		$last_return_id = mysqli_insert_id($conn);
		if ($last_return_id) {
			$logsid = rand(10000000,99999999);
			$logsuserid = "LOG-".$logsid."-".$last_return_id;
			$logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
			$resquery = $conn->query($logsquery);
		}
	}
	$sql3 = "INSERT INTO tbl_support_history_logs SET
			user_id = '". $_SESSION['user_id'] ."',
			x_module = 'Login Page',
			x_module_action = 'View Login Page'";
	$res3 = $conn->query($sql3);                                
	if ($res3) {
		$last_return_id = mysqli_insert_id($conn);
		if ($last_return_id) {
			$logsid = rand(10000000,99999999);
			$logsuserid = "LOG-".$logsid."-".$last_return_id;
			$logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
			$resquery = $conn->query($logsquery);
		}
	}
	session_destroy(); 
	unset($_SESSION["user_id"]);
	unset($_SESSION["useremail"]);
	unset($_SESSION["userpass"]);
	$_SESSION["user_id"] = "";
	header('Location: ../signin.php');
	exit;
?>