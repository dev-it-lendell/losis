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

		$conn->query("UPDATE tbl_client SET user_image = '$file' WHERE user_id = '".$_SESSION["user_id"]."'");
        if (file_exists("../../profilepictures_/$user_id/".$file)) {
            echo "Sorry, file already exists.";
        } else {
			unlink("../../profilepictures_/$user_id/".$clnt_userimage);
            move_uploaded_file($temp_name,"../../profilepictures_/$user_id/".$file);
        }
    }
    if (isset($_POST['updateuser'])) {
        $clntemail = $_POST['clntemail'];
        $clntpass = $_POST['clntpass'];
        $clntfname = $_POST['clntfname'];
        $clntmname = $_POST['clntmname'];
        $clntlname = $_POST['clntlname'];
        $clntsuffix = $_POST['clntsuffix'];
        $clntcontact = $_POST['clntcontact'];
        $clntdateofbirth = $_POST['clntdateofbirth'];
        $clntage = $_POST['clntage'];
        $clntgender = $_POST['clntgender'];
        $clntaddress = $_POST['clntaddress'];

		$conn->query("UPDATE tbl_client SET fname = '$clntfname', mname = '$clntmname', lname = '$clntlname', suffix = '$clntsuffix', contact_no = '$clntcontact', date_of_birth = '$clntdateofbirth', user_age = '$clntage', gender_ = '$clntgender', full_address = '$clntaddress' WHERE user_id = '".$_SESSION["user_id"]."'");
		$conn->query("UPDATE tbl_users SET useremail_ = '$clntemail', userpass_ = '$clntpass', userpass_hash = '" . md5($clntpass) ." WHERE user_id = '".$_SESSION["user_id"]."'");
		$sql = "INSERT INTO tbl_client_history_logs SET
					user_id = '". $_SESSION['user_id'] ."',
					x_module = 'User Profile',
					x_module_action = 'Updated User Account Details'";
		$res = $conn->query($sql);                                
		if ($res) {
			$last_return_id = mysqli_insert_id($conn);
			if ($last_return_id) {
				$logsid = rand(10000000,99999999);
				$logsuserid = "LOG-".$logsid."-".$last_return_id;
				$logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
				$resquery = $conn->query($logsquery);
	        }
	    }
		$sql1 = "INSERT INTO tbl_client_history_logs SET
					user_id = '". $_SESSION['user_id'] ."',
					x_module = 'User Profile',
					x_module_action = 'View User Profile'";
		$res1 = $conn->query($sql1);                                
		if ($res1) {
			$last_return_id = mysqli_insert_id($conn);
			if ($last_return_id) {
				$logsid = rand(10000000,99999999);
				$logsuserid = "LOG-".$logsid."-".$last_return_id;
				$logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
				$resquery = $conn->query($logsquery);
	        }
	    }
		$qstring = '?updateaccnt=succ';
    } else {
		$qstring = '?updateaccnt=err';
    }
	header("Location: ../user_profile.php".$qstring);
?>