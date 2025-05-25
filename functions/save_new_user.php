<?php
    include '../connect.php';

    if (isset($_POST['newuser'])) {
		if ($_FILES['userprofileimg']['name']!="") {
			$time = rand(10000000,99999999);
			$year = date("Y");
			$userID = 'LOSIS'.'-'.'0'.$year.'-'.$time;
    		$target_dir = mkdir("../profilepictures_/$userID/");
            $profileimg = $_FILES['userprofileimg']['name'];
        	$useremail = $_POST['useremail'];
        	$userpass = $_POST['userpass'];
        	$userfname = $_POST['userfname'];
        	$usermname = $_POST['usermname'];
        	$userlname = $_POST['userlname'];
        	$usersuffix = $_POST['usersuffix'];
        	$userteam = $_POST['userteam'];
        	$userdateofbirth = $_POST['userdateofbirth'];
        	$userage = $_POST['userage'];
        	$usergender = $_POST['usergender'];
        	$usercontact = $_POST['usercontact'];
        	$userpositionname = $_POST['userpositionname'];
        	$useraddress = $_POST['useraddress'];
        	$usercompany = $_POST['usercompany'];
        	$userposition = $_POST['userposition'];
        	$usersite = $_POST['usersite'];
        	$temp_name = $_FILES['userprofileimg']['tmp_name'];

			$conn->query("INSERT INTO tbl_client SET user_id = '".$userID."', team_ = '".$userteam."', fname = '".$userfname."', mname = '".$usermname."', lname = '".$userlname."', suffix = '".$usersuffix."', date_of_birth = '".$userdateofbirth."', user_age = '".$userage."', gender_ = '".$usergender."', contact_no = '".$usercontact."', full_address = '".$useraddress."', user_image = '".$profileimg."', company_name = '".$usercompany."', user_position = '".$userposition."'");
			$conn->query("INSERT INTO tbl_users SET user_id = '".$userID."', useremail_ = '".$useremail."', userpass_ = '".$userpass."', userpass_ = '" . md5($userpass) ."', usertype_ = '0', userstatus_ = '1', accountstatus_ = '0', messagestatus = '0', is_blacklisted = '0'");
			mkdir($target_dir, 0777, true);
			move_uploaded_file($temp_name,"../profilepictures_/$userID/".$profileimg);
            
        	$qstring = '?newaccnt=succ';
        	
		} else {
        	$qstring = '?newaccnt=err';
		}
		header("Location: ../signup.php".$qstring);
    }
?>