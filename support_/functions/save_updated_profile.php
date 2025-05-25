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

		$conn->query("UPDATE tbl_support SET user_image = '$file' WHERE user_id = '".$_SESSION["user_id"]."'");
        if (file_exists("../../profilepictures_/$user_id/".$file)) {
            echo "Sorry, file already exists.";
        } else {
			unlink("../../profilepictures_/$user_id/".$sup_userimage);
            move_uploaded_file($temp_name,"../../profilepictures_/$user_id/".$file);
        }
    }
    if (isset($_POST['updateuser'])) {
        $supemail = $_POST['supemail'];
        $suppass = $_POST['suppass'];
        $supfname = $_POST['supfname'];
        $supmname = $_POST['supmname'];
        $suplname = $_POST['suplname'];
        $supsuffix = $_POST['supsuffix'];
        $supcontact = $_POST['supcontact'];
        $supdateofbirth = $_POST['supdateofbirth'];
        $supage = $_POST['supage'];
        $supgender = $_POST['supgender'];
        $supaddress = $_POST['supaddress'];

		$conn->query("UPDATE tbl_support SET fname = '$supfname', mname = '$supmname', lname = '$suplname', suffix = '$supsuffix', contact_no = '$supcontact', date_of_birth = '$supdateofbirth', user_age = '$supage', gender_ = '$supgender', full_address = '$supaddress' WHERE user_id = '".$_SESSION["user_id"]."'");
		$conn->query("UPDATE itsupport_list SET fname = '$supfname', mname = '$supmname', lname = '$suplname', suffix = '$supsuffix' WHERE mngt_id = '$adm_id'");
		$conn->query("UPDATE tbl_users SET useremail_ = '$supemail', userpass_ = '$suppass', userpass_hash = '" . md5($suppass) ." WHERE user_id = '".$_SESSION["user_id"]."'");
		$sql = "INSERT INTO tbl_support_history_logs SET
					user_id = '". $_SESSION['user_id'] ."',
					x_module = 'User Profile',
					x_module_action = 'Updated User Account Details'";
		$res = $conn->query($sql);                                
		if ($res) {
			$last_return_id = mysqli_insert_id($conn);
			if ($last_return_id) {
				$logsid = rand(10000000,99999999);
				$logsuserid = "LOG-".$logsid."-".$last_return_id;
				$logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
				$resquery = $conn->query($logsquery);
	        }
	    }
		$sql1 = "INSERT INTO tbl_support_history_logs SET
					user_id = '". $_SESSION['user_id'] ."',
					x_module = 'User Profile',
					x_module_action = 'View User Profile'";
		$res1 = $conn->query($sql1);                                
		if ($res1) {
			$last_return_id = mysqli_insert_id($conn);
			if ($last_return_id) {
				$logsid = rand(10000000,99999999);
				$logsuserid = "LOG-".$logsid."-".$last_return_id;
				$logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
				$resquery = $conn->query($logsquery);
	        }
	    }
		$qstring = '?updateaccnt=succ';
    } else {
		$qstring = '?updateaccnt=err';
    }
	header("Location: ../user_profile.php".$qstring);
?>