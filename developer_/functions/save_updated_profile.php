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

		$conn->query("UPDATE tbl_developer SET user_image = '$file' WHERE user_id = '".$_SESSION["user_id"]."'");
        if (file_exists("../../profilepictures_/$user_id/".$file)) {
            echo "Sorry, file already exists.";
        } else {
			unlink("../../profilepictures_/$user_id/".$dev_userimage);
            move_uploaded_file($temp_name,"../../profilepictures_/$user_id/".$file);
        }
    }
    if (isset($_POST['updateuser'])) {
        $devemail = $_POST['devemail'];
        $devpass = $_POST['devpass'];
        $devfname = $_POST['devfname'];
        $devmname = $_POST['devmname'];
        $devlname = $_POST['devlname'];
        $devsuffix = $_POST['devsuffix'];
        $devcontact = $_POST['devcontact'];
        $devdateofbirth = $_POST['devdateofbirth'];
        $devage = $_POST['devage'];
        $devgender = $_POST['devgender'];
        $devaddress = $_POST['devaddress'];

		$conn->query("UPDATE tbl_developer SET fname = '$devfname', mname = '$devmname', lname = '$devlname', suffix = '$devsuffix', contact_no = '$devcontact', date_of_birth = '$devdateofbirth', user_age = '$devage', gender_ = '$devgender', full_address = '$devaddress' WHERE user_id = '".$_SESSION["user_id"]."'");
		$conn->query("UPDATE developer_list SET fname = '$devfname', mname = '$devmname', lname = '$devlname', suffix = '$devsuffix' WHERE dev_id = '$dev_id'");
		$conn->query("UPDATE tbl_users SET useremail_ = '$devemail', userpass_ = '$devpass', userpass_hash = '" . md5($devpass) ." WHERE user_id = '".$_SESSION["user_id"]."'");
		$sql = "INSERT INTO tbl_developer_history_logs SET
					user_id = '". $_SESSION['user_id'] ."',
					x_module = 'User Profile',
					x_module_action = 'Updated User Account Details'";
		$res = $conn->query($sql);                                
		if ($res) {
			$last_return_id = mysqli_insert_id($conn);
			if ($last_return_id) {
				$logsid = rand(10000000,99999999);
				$logsuserid = "LOG-".$logsid."-".$last_return_id;
				$logsquery = "UPDATE tbl_developer_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
				$resquery = $conn->query($logsquery);
	        }
	    }
		$sql1 = "INSERT INTO tbl_developer_history_logs SET
					user_id = '". $_SESSION['user_id'] ."',
					x_module = 'User Profile',
					x_module_action = 'View User Profile'";
		$res1 = $conn->query($sql1);                                
		if ($res1) {
			$last_return_id = mysqli_insert_id($conn);
			if ($last_return_id) {
				$logsid = rand(10000000,99999999);
				$logsuserid = "LOG-".$logsid."-".$last_return_id;
				$logsquery = "UPDATE tbl_developer_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
				$resquery = $conn->query($logsquery);
	        }
	    }
		$qstring = '?updateaccnt=succ';
    } else {
		$qstring = '?updateaccnt=err';
    }
	header("Location: ../user_profile.php".$qstring);
?>