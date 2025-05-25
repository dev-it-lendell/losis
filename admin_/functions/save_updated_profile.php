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
			unlink("../../profilepictures_/$user_id/".$adm_userimage);
            move_uploaded_file($temp_name,"../../profilepictures_/$user_id/".$file);
        }
    }
    if (isset($_POST['updateuser'])) {
        $admemail = $_POST['admemail'];
        $admpass = $_POST['admpass'];
        $admfname = $_POST['admfname'];
        $admmname = $_POST['admmname'];
        $admlname = $_POST['admlname'];
        $admsuffix = $_POST['admsuffix'];
        $admcontact = $_POST['admcontact'];
        $admdateofbirth = $_POST['admdateofbirth'];
        $admage = $_POST['admage'];
        $admgender = $_POST['admgender'];
        $admaddress = $_POST['admaddress'];

		$conn->query("UPDATE tbl_admin SET fname = '$admfname', mname = '$admmname', lname = '$admlname', suffix = '$admsuffix', contact_no = '$admcontact', date_of_birth = '$admdateofbirth', user_age = '$admage', gender_ = '$admgender', full_address = '$admaddress' WHERE user_id = '".$_SESSION["user_id"]."'");
		$conn->query("UPDATE management_list SET fname = '$admfname', mname = '$admmname', lname = '$admlname', suffix = '$admsuffix' WHERE mngt_id = '$adm_id'");
		$conn->query("UPDATE tbl_users SET useremail_ = '$admemail', userpass_ = '$admpass', userpass_hash = '" . md5($admpass) ." WHERE user_id = '".$_SESSION["user_id"]."'");
		$sql = "INSERT INTO tbl_admin_history_logs SET
					user_id = '". $_SESSION['user_id'] ."',
					x_module = 'User Profile',
					x_module_action = 'Updated User Account Details'";
		$res = $conn->query($sql);                                
		if ($res) {
			$last_return_id = mysqli_insert_id($conn);
			if ($last_return_id) {
				$logsid = rand(10000000,99999999);
				$logsuserid = "LOG-".$logsid."-".$last_return_id;
				$logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
				$resquery = $conn->query($logsquery);
	        }
	    }
		$sql1 = "INSERT INTO tbl_admin_history_logs SET
					user_id = '". $_SESSION['user_id'] ."',
					x_module = 'User Profile',
					x_module_action = 'View User Profile'";
		$res1 = $conn->query($sql1);                                
		if ($res1) {
			$last_return_id = mysqli_insert_id($conn);
			if ($last_return_id) {
				$logsid = rand(10000000,99999999);
				$logsuserid = "LOG-".$logsid."-".$last_return_id;
				$logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
				$resquery = $conn->query($logsquery);
	        }
	    }
		$qstring = '?updateaccnt=succ';
    } else {
		$qstring = '?updateaccnt=err';
    }
	header("Location: ../user_profile.php".$qstring);
?>