<?php
    include '../../connect.php';
    include '../checking.php';

    if (($_FILES['customFile1']['name']!="")) {
        $user_id = $_SESSION["user_id"];
        $target_dir = "../../profilepictures_/$user_id/";
        $file = $_FILES['customFile1']['name'];
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['customFile1']['tmp_name'];

		$conn->query("UPDATE tbl_supervisor SET user_image = '$file' WHERE user_id = '".$_SESSION["user_id"]."'");
        if (file_exists("../../profilepictures_/$user_id/".$file)) {
            echo "Sorry, file already exists.";
        } else {
			unlink("../../profilepictures_/$user_id/".$spv_userimage);
            move_uploaded_file($temp_name,"../../profilepictures_/$user_id/".$file);
        }
    }
    if (isset($_POST['updateuser'])) {
        $pocemail = $_POST['pocemail'];
        $pocpass = $_POST['pocpass'];
        $pocfname = $_POST['pocfname'];
        $pocmname = $_POST['pocmname'];
        $poclname = $_POST['poclname'];
        $pocsuffix = $_POST['pocsuffix'];
        $poccontact = $_POST['poccontact'];
        $pocdateofbirth = $_POST['pocdateofbirth'];
        $pocage = $_POST['pocage'];
        $pocgender = $_POST['pocgender'];
        $pocaddress = $_POST['pocaddress'];

		$conn->query("UPDATE tbl_supervisor SET fname = '$pocfname', mname = '$pocmname', lname = '$poclname', suffix = '$pocsuffix', contact_no = '$poccontact', date_of_birth = '$pocdateofbirth', user_age = '$pocage', gender_ = '$pocgender', full_address = '$pocaddress' WHERE user_id = '".$_SESSION["user_id"]."'");
		$conn->query("UPDATE supervisor_list SET fname = '$pocfname', mname = '$pocmname', lname = '$poclname', suffix = '$pocsuffix' WHERE supervisor_id = '$spv_id'");
		$conn->query("UPDATE tbl_users SET useremail_ = '$pocemail', userpass_ = '$pocpass', userpass_hash = '" . md5($pocpass) ." WHERE user_id = '".$_SESSION["user_id"]."'");
		$sql = "INSERT INTO tbl_supervisor_history_logs SET
					user_id = '". $_SESSION['user_id'] ."',
					x_module = 'User Profile',
					x_module_action = 'Updated User Account Details'";
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
		$sql1 = "INSERT INTO tbl_supervisor_history_logs SET
					user_id = '". $_SESSION['user_id'] ."',
					x_module = 'User Profile',
					x_module_action = 'View User Profile'";
		$res1 = $conn->query($sql1);                                
		if ($res1) {
			$last_return_id = mysqli_insert_id($conn);
			if ($last_return_id) {
				$logsid = rand(10000000,99999999);
				$logsuserid = "LOG-".$logsid."-".$last_return_id;
				$logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
				$resquery = $conn->query($logsquery);
	        }
	    }
		$qstring = '?updateaccnt=succ';
    } else {
		$qstring = '?updateaccnt=err';
    }
	header("Location: ../user_profile.php".$qstring);
?>