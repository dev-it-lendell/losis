<?php
include '../../connect.php';
include '../checking.php';

if ($ops_type == '1') {
	if (($_FILES['customFile1']['name'] != "")) {
		$user_id = $_SESSION["user_id"];
		$target_dir = "../../profilepictures_/$user_id/";
		$file = $_FILES['customFile1']['name'];
		$path = pathinfo($file);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['customFile1']['tmp_name'];

		$conn->query("UPDATE tbl_operations SET user_image = '$file' WHERE user_id = '" . $_SESSION["user_id"] . "'");
		if (file_exists("../../profilepictures_/$user_id/" . $file)) {
			echo "Sorry, file already exists.";
		} else {
			unlink("../../profilepictures_/$user_id/" . $ops_userimage);
			move_uploaded_file($temp_name, "../../profilepictures_/$user_id/" . $file);
		}
	}
	if (isset($_POST['updateuser'])) {
		$opsemail = $_POST['opsemail'];
		$opspass = $_POST['opspass'];
		$opsfname = $_POST['opsfname'];
		$opsmname = $_POST['opsmname'];
		$opslname = $_POST['opslname'];
		$opssuffix = $_POST['opssuffix'];
		$opscontact = $_POST['opscontact'];
		$opsdateofbirth = $_POST['opsdateofbirth'];
		$opsage = $_POST['opsage'];
		$opsgender = $_POST['opsgender'];
		$opsaddress = $_POST['opsaddress'];

		$conn->query("UPDATE tbl_operations SET fname = '$opsfname', mname = '$opsmname', lname = '$opslname', suffix = '$opssuffix', contact_no = '$opscontact', date_of_birth = '$opsdateofbirth', user_age = '$opsage', gender_ = '$opsgender', full_address = '$opsaddress' WHERE user_id = '" . $_SESSION["user_id"] . "'");
		$conn->query("UPDATE specialist_list SET fname = '$opsfname', mname = '$opsmname', lname = '$opslname', suffix = '$opssuffix' WHERE specialist_id = '$speid'");
		$conn->query("UPDATE operations_list SET fname = '$opsfname', mname = '$opsmname', lname = '$opslname', suffix = '$opssuffix' WHERE operations_id = '$ops_id'");
		$conn->query("UPDATE tbl_users SET useremail_ = '$opsemail', userpass_ = '$opspass', userpass_hash = '" . md5($opspass) . " WHERE user_id = '" . $_SESSION["user_id"] . "'");
		$sql = "INSERT INTO tbl_operations_history_logs SET
						user_id = '" . $_SESSION['user_id'] . "',
						x_module = 'User Profile',
						x_module_action = 'Updated User Account Details'";
		$res = $conn->query($sql);
		if ($res) {
			$last_return_id = mysqli_insert_id($conn);
			if ($last_return_id) {
				$logsid = rand(10000000, 99999999);
				$logsuserid = "LOG-" . $logsid . "-" . $last_return_id;
				$logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '" . $logsuserid . "' WHERE id = '" . $last_return_id . "'";
				$resquery = $conn->query($logsquery);
			}
		}
		$sql1 = "INSERT INTO tbl_operations_history_logs SET
						user_id = '" . $_SESSION['user_id'] . "',
						x_module = 'User Profile',
						x_module_action = 'View User Profile'";
		$res1 = $conn->query($sql1);
		if ($res1) {
			$last_return_id = mysqli_insert_id($conn);
			if ($last_return_id) {
				$logsid = rand(10000000, 99999999);
				$logsuserid = "LOG-" . $logsid . "-" . $last_return_id;
				$logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '" . $logsuserid . "' WHERE id = '" . $last_return_id . "'";
				$resquery = $conn->query($logsquery);
			}
		}
		$qstring = '?updateaccnt=succ';
	} else {
		$qstring = '?updateaccnt=err';
	}
	header("Location: ../user_profile.php" . $qstring);
} else if ($ops_type == '2') {
	if (($_FILES['customFile1']['name'] != "")) {
		$user_id = $_SESSION["user_id"];
		$target_dir = "../../profilepictures_/$user_id/";
		$file = $_FILES['customFile1']['name'];
		$path = pathinfo($file);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['customFile1']['tmp_name'];

		$conn->query("UPDATE tbl_operations SET user_image = '$file' WHERE user_id = '" . $_SESSION["user_id"] . "'");
		if (file_exists("../../profilepictures_/$user_id/" . $file)) {
			echo "Sorry, file already exists.";
		} else {
			unlink("../../profilepictures_/$user_id/" . $ops_userimage);
			move_uploaded_file($temp_name, "../../profilepictures_/$user_id/" . $file);
		}
	}
	if (isset($_POST['updateuser'])) {
		$opsemail = $_POST['opsemail'];
		$opspass = $_POST['opspass'];
		$opsfname = $_POST['opsfname'];
		$opsmname = $_POST['opsmname'];
		$opslname = $_POST['opslname'];
		$opssuffix = $_POST['opssuffix'];
		$opscontact = $_POST['opscontact'];
		$opsdateofbirth = $_POST['opsdateofbirth'];
		$opsage = $_POST['opsage'];
		$opsgender = $_POST['opsgender'];
		$opsaddress = $_POST['opsaddress'];

		$conn->query("UPDATE tbl_operations SET fname = '$opsfname', mname = '$opsmname', lname = '$opslname', suffix = '$opssuffix', contact_no = '$opscontact', date_of_birth = '$opsdateofbirth', user_age = '$opsage', gender_ = '$opsgender', full_address = '$opsaddress' WHERE user_id = '" . $_SESSION["user_id"] . "'");
		$conn->query("UPDATE analyst_list SET fname = '$opsfname', mname = '$opsmname', lname = '$opslname', suffix = '$opssuffix' WHERE analyst_id = '$daid'");
		$conn->query("UPDATE operations_list SET fname = '$opsfname', mname = '$opsmname', lname = '$opslname', suffix = '$opssuffix' WHERE operations_id = '$ops_id'");
		$conn->query("UPDATE tbl_users SET useremail_ = '$opsemail', userpass_ = '$opspass', userpass_hash = '" . md5($opspass) . " WHERE user_id = '" . $_SESSION["user_id"] . "'");
		$sql = "INSERT INTO tbl_operations_history_logs SET
						user_id = '" . $_SESSION['user_id'] . "',
						x_module = 'User Profile',
						x_module_action = 'Updated User Account Details'";
		$res = $conn->query($sql);
		if ($res) {
			$last_return_id = mysqli_insert_id($conn);
			if ($last_return_id) {
				$logsid = rand(10000000, 99999999);
				$logsuserid = "LOG-" . $logsid . "-" . $last_return_id;
				$logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '" . $logsuserid . "' WHERE id = '" . $last_return_id . "'";
				$resquery = $conn->query($logsquery);
			}
		}
		$sql1 = "INSERT INTO tbl_operations_history_logs SET
						user_id = '" . $_SESSION['user_id'] . "',
						x_module = 'User Profile',
						x_module_action = 'View User Profile'";
		$res1 = $conn->query($sql1);
		if ($res1) {
			$last_return_id = mysqli_insert_id($conn);
			if ($last_return_id) {
				$logsid = rand(10000000, 99999999);
				$logsuserid = "LOG-" . $logsid . "-" . $last_return_id;
				$logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '" . $logsuserid . "' WHERE id = '" . $last_return_id . "'";
				$resquery = $conn->query($logsquery);
			}
		}
		$qstring = '?updateaccnt=succ';
	} else {
		$qstring = '?updateaccnt=err';
	}
	header("Location: ../user_profile.php" . $qstring);
} else {
	if (($_FILES['customFile1']['name'] != "")) {
		$user_id = $_SESSION["user_id"];
		$target_dir = "../../profilepictures_/$user_id/";
		$file = $_FILES['customFile1']['name'];
		$path = pathinfo($file);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['customFile1']['tmp_name'];

		$conn->query("UPDATE tbl_operations SET user_image = '$file' WHERE user_id = '" . $_SESSION["user_id"] . "'");
		if (file_exists("../../profilepictures_/$user_id/" . $file)) {
			echo "Sorry, file already exists.";
		} else {
			unlink("../../profilepictures_/$user_id/" . $ops_userimage);
			move_uploaded_file($temp_name, "../../profilepictures_/$user_id/" . $file);
		}
	}
	if (isset($_POST['updateuser'])) {
		$opsemail = $_POST['opsemail'];
		$opspass = $_POST['opspass'];
		$opsfname = $_POST['opsfname'];
		$opsmname = $_POST['opsmname'];
		$opslname = $_POST['opslname'];
		$opssuffix = $_POST['opssuffix'];
		$opscontact = $_POST['opscontact'];
		$opsdateofbirth = $_POST['opsdateofbirth'];
		$opsage = $_POST['opsage'];
		$opsgender = $_POST['opsgender'];
		$opsaddress = $_POST['opsaddress'];

		$conn->query("UPDATE tbl_operations SET fname = '$opsfname', mname = '$opsmname', lname = '$opslname', suffix = '$opssuffix', contact_no = '$opscontact', date_of_birth = '$opsdateofbirth', user_age = '$opsage', gender_ = '$opsgender', full_address = '$opsaddress' WHERE user_id = '" . $_SESSION["user_id"] . "'");
		$conn->query("UPDATE field_list SET fname = '$opsfname', mname = '$opsmname', lname = '$opslname', suffix = '$opssuffix' WHERE field_id = '$fldid'");
		$conn->query("UPDATE operations_list SET fname = '$opsfname', mname = '$opsmname', lname = '$opslname', suffix = '$opssuffix' WHERE operations_id = '$ops_id'");
		$conn->query("UPDATE tbl_users SET useremail_ = '$opsemail', userpass_ = '$opspass', userpass_hash = '" . md5($opspass) . " WHERE user_id = '" . $_SESSION["user_id"] . "'");
		$sql = "INSERT INTO tbl_operations_history_logs SET
						user_id = '" . $_SESSION['user_id'] . "',
						x_module = 'User Profile',
						x_module_action = 'Updated User Account Details'";
		$res = $conn->query($sql);
		if ($res) {
			$last_return_id = mysqli_insert_id($conn);
			if ($last_return_id) {
				$logsid = rand(10000000, 99999999);
				$logsuserid = "LOG-" . $logsid . "-" . $last_return_id;
				$logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '" . $logsuserid . "' WHERE id = '" . $last_return_id . "'";
				$resquery = $conn->query($logsquery);
			}
		}
		$sql1 = "INSERT INTO tbl_operations_history_logs SET
						user_id = '" . $_SESSION['user_id'] . "',
						x_module = 'User Profile',
						x_module_action = 'View User Profile'";
		$res1 = $conn->query($sql1);
		if ($res1) {
			$last_return_id = mysqli_insert_id($conn);
			if ($last_return_id) {
				$logsid = rand(10000000, 99999999);
				$logsuserid = "LOG-" . $logsid . "-" . $last_return_id;
				$logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '" . $logsuserid . "' WHERE id = '" . $last_return_id . "'";
				$resquery = $conn->query($logsquery);
			}
		}
		$qstring = '?updateaccnt=succ';
	} else {
		$qstring = '?updateaccnt=err';
	}
	header("Location: ../user_profile.php" . $qstring);
}
?>