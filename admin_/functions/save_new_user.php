<?php
    include '../../connect.php';
    include '../checking.php';

    if (isset($_POST['newuser'])) {
		$usertype = $_POST['usertype'];
		if ($usertype == '0') {
			if ($_FILES['userprofileimg']['name']!="") {
				$time = rand(10000000,99999999);
				$year = date("Y");
				// $userID = 'LOSIS'.'-'.'0'.$year.'-'.$time;
				$AdminuserID = 'LOSI'.'-'.'0'.$year.'-'.'MG'.'-'.$time;
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
	        	$temp_name = $_FILES['userprofileimg']['tmp_name'];
	        	
	        	// Fetch the last inserted code from the database
                $sqluserID = "SELECT `user_id` FROM `tbl_users` ORDER BY `id` DESC LIMIT 1";
                $result = $conn->query($sqluserID);
                
                // Check if the query returned a result
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $lastCode = $row['user_id'];  // Example: LOSIS-000075
                
                    // Extract the numeric part from the code
                    $numericPart = substr($lastCode, strrpos($lastCode, '-') + 1);
                
                    // Increment the numeric part
                    $nextNumber = (int)$numericPart + 1;
                
                    // Format the next number as a 6-digit number with leading zeros
                    $nextFormattedNumber = str_pad($nextNumber, 6, '0', STR_PAD_LEFT);
                
                    // Combine it with the prefix to create the new code
                    $userID = "LOSIS-" . $nextFormattedNumber;
                
                    echo "Next code: " . $newCode;  // Output: LOSIS-000076 (for example)
                } else {
                    // If no records exist, start from LOSIS-000001
                    $userID = "LOSIS-000001";
                }
                
                $target_dir = "../../profilepictures_/$userID/";

				$conn->query("INSERT INTO tbl_admin SET user_id = '".$userID."', team_ = '".$userteam."', fname = '".$userfname."', mname = '".$usermname."', lname = '".$userlname."', suffix = '".$usersuffix."', date_of_birth = '".$userdateofbirth."', user_age = '".$userage."', gender_ = '".$usergender."', contact_no = '".$usercontact."', full_address = '".$useraddress."', user_image = '".$profileimg."'");
				$conn->query("INSERT INTO management_list SET mngt_id = '".$AdminuserID."', fname = '".$userfname."', mname = '".$usermname."', lname = '".$userlname."', suffix = '".$usersuffix."', position_ = '".$userpositionname."', team_ = '".$userteam."'");
				$conn->query("INSERT INTO tbl_users SET user_id = '".$userID."', useremail_ = '".$useremail."', userpass_ = '".$userpass."', userpass_hash = '" . md5($userpass) ."', usertype_ = '0', userstatus_ = '1', accountstatus_ = '0', messagestatus_ = '0', is_blacklisted = '0'");
				mkdir($target_dir, 0777, true);
				move_uploaded_file($temp_name,"../../profilepictures_/$userID/".$profileimg);
	            $sql = "INSERT INTO tbl_admin_history_logs SET
	                    user_id = '". $_SESSION['user_id'] ."',
	                    x_module = 'User Management - New User',
	                    x_module_action = 'Created New User Account'";
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
	                    x_module = 'User Management',
	                    x_module_action = 'View User Management - Manage Users'";
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
            	$qstring = '?newaccnt=succ';
			} else {
            	$qstring = '?newaccnt=err';
			}
    		header("Location: ../manage_users.php".$qstring);
		} else if ($usertype == '1') {
			if ($_FILES['userprofileimg']['name']!="") {
				$time = rand(10000000,99999999);
				$year = date("Y");
				// $userID = 'LOSIS'.'-'.'0'.$year.'-'.$time;
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
	        	
	        	// Fetch the last inserted code from the database
                $sqluserID = "SELECT `user_id` FROM `tbl_users` ORDER BY `id` DESC LIMIT 1";
                $result = $conn->query($sqluserID);
                
                // Check if the query returned a result
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $lastCode = $row['user_id'];  // Example: LOSIS-000075
                
                    // Extract the numeric part from the code
                    $numericPart = substr($lastCode, strrpos($lastCode, '-') + 1);
                
                    // Increment the numeric part
                    $nextNumber = (int)$numericPart + 1;
                
                    // Format the next number as a 6-digit number with leading zeros
                    $nextFormattedNumber = str_pad($nextNumber, 6, '0', STR_PAD_LEFT);
                
                    // Combine it with the prefix to create the new code
                    $userID = "LOSIS-" . $nextFormattedNumber;
                
                    echo "Next code: " . $newCode;  // Output: LOSIS-000076 (for example)
                } else {
                    // If no records exist, start from LOSIS-000001
                    $userID = "LOSIS-000001";
                }
                
                $target_dir = "../../profilepictures_/$userID/";

				$conn->query("INSERT INTO tbl_client SET user_id = '".$userID."', team_ = '".$userteam."', fname = '".$userfname."', mname = '".$usermname."', lname = '".$userlname."', suffix = '".$usersuffix."', date_of_birth = '".$userdateofbirth."', user_age = '".$userage."', gender_ = '".$usergender."', contact_no = '".$usercontact."', full_address = '".$useraddress."', user_image = '".$profileimg."', company_name = '".$usercompany."', user_position = '".$userposition."', site_id = '".$usersite."'");
				$conn->query("INSERT INTO tbl_users SET user_id = '".$userID."', useremail_ = '".$useremail."', userpass_ = '".$userpass."', userpass_hash = '" . md5($userpass) ."', usertype_ = '1', userstatus_ = '1', accountstatus_ = '0', messagestatus_ = '0', is_blacklisted = '0'");
				mkdir($target_dir, 0777, true);
				move_uploaded_file($temp_name,"../../profilepictures_/$userID/".$profileimg);
	            $sql = "INSERT INTO tbl_admin_history_logs SET
	                    user_id = '". $_SESSION['user_id'] ."',
	                    x_module = 'User Management - New User',
	                    x_module_action = 'Created New User Account'";
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
	                    x_module = 'User Management',
	                    x_module_action = 'View User Management - Manage Users'";
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
            	$qstring = '?newaccnt=succ';
			} else {
            	$qstring = '?newaccnt=errdito';
			}
    		header("Location: ../manage_users.php".$qstring);
		} else if ($usertype == '2') {
			if ($_FILES['userprofileimg']['name']!="") {
				$time = rand(10000000,99999999);
				$year = date("Y");
				// $userID = 'LOSIS'.'-'.'0'.$year.'-'.$time;
				$POCuserID = 'LOSI'.'-'.'0'.$year.'-'.'SPV'.'-'.$time;
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
	        	$temp_name = $_FILES['userprofileimg']['tmp_name'];
	        	
	        	// Fetch the last inserted code from the database
                $sqluserID = "SELECT `user_id` FROM `tbl_users` ORDER BY `id` DESC LIMIT 1";
                $result = $conn->query($sqluserID);
                
                // Check if the query returned a result
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $lastCode = $row['user_id'];  // Example: LOSIS-000075
                
                    // Extract the numeric part from the code
                    $numericPart = substr($lastCode, strrpos($lastCode, '-') + 1);
                
                    // Increment the numeric part
                    $nextNumber = (int)$numericPart + 1;
                
                    // Format the next number as a 6-digit number with leading zeros
                    $nextFormattedNumber = str_pad($nextNumber, 6, '0', STR_PAD_LEFT);
                
                    // Combine it with the prefix to create the new code
                    $userID = "LOSIS-" . $nextFormattedNumber;
                
                    echo "Next code: " . $newCode;  // Output: LOSIS-000076 (for example)
                } else {
                    // If no records exist, start from LOSIS-000001
                    $userID = "LOSIS-000001";
                }
                
                $target_dir = "../../profilepictures_/$userID/";

				$conn->query("INSERT INTO tbl_supervisor SET user_id = '".$userID."', assigned_team = '".$userteam."', fname = '".$userfname."', mname = '".$usermname."', lname = '".$userlname."', suffix = '".$usersuffix."', date_of_birth = '".$userdateofbirth."', user_age = '".$userage."', gender_ = '".$usergender."', contact_no = '".$usercontact."', full_address = '".$useraddress."', user_image = '".$profileimg."'");
				$conn->query("INSERT INTO supervisor_list SET supervisor_id = '".$POCuserID."', fname = '".$userfname."', mname = '".$usermname."', lname = '".$userlname."', suffix = '".$usersuffix."', position_ = '".$userpositionname."', team_ = '".$userteam."'");
				$conn->query("INSERT INTO tbl_users SET user_id = '".$userID."', useremail_ = '".$useremail."', userpass_ = '".$userpass."', userpass_hash = '" . md5($userpass) ."', usertype_ = '2', userstatus_ = '1', accountstatus_ = '0', messagestatus_ = '0', is_blacklisted = '0'");
				mkdir($target_dir, 0777, true);
				move_uploaded_file($temp_name,"../../profilepictures_/$userID/".$profileimg);
	            $sql = "INSERT INTO tbl_admin_history_logs SET
	                    user_id = '". $_SESSION['user_id'] ."',
	                    x_module = 'User Management - New User',
	                    x_module_action = 'Created New User Account'";
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
	                    x_module = 'User Management',
	                    x_module_action = 'View User Management - Manage Users'";
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
            	$qstring = '?newaccnt=succ';
			} else {
            	$qstring = '?newaccnt=err';
			}
    		header("Location: ../manage_users.php".$qstring);
		} else if ($usertype == '3') {
			$useropstype = $_POST['useropstype'];
			if ($useropstype == '1') {
				if ($_FILES['userprofileimg']['name']!="") {
					$time = rand(10000000,99999999);
					$year = date("Y");
				// 	$userID = 'LOSIS'.'-'.'0'.$year.'-'.$time;
					$OpsuserID = 'LOSI'.'-'.'0'.$year.'-'.'OPS'.'-'.$time;
					$OpsTeleuserID = 'LOSI'.'-'.'0'.$year.'-'.'SPE'.'-'.$time;
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
		        	$temp_name = $_FILES['userprofileimg']['tmp_name'];
		        	
		        	// Fetch the last inserted code from the database
                    $sqluserID = "SELECT `user_id` FROM `tbl_users` ORDER BY `id` DESC LIMIT 1";
                    $result = $conn->query($sqluserID);
                    
                    // Check if the query returned a result
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $lastCode = $row['user_id'];  // Example: LOSIS-000075
                    
                        // Extract the numeric part from the code
                        $numericPart = substr($lastCode, strrpos($lastCode, '-') + 1);
                    
                        // Increment the numeric part
                        $nextNumber = (int)$numericPart + 1;
                    
                        // Format the next number as a 6-digit number with leading zeros
                        $nextFormattedNumber = str_pad($nextNumber, 6, '0', STR_PAD_LEFT);
                    
                        // Combine it with the prefix to create the new code
                        $userID = "LOSIS-" . $nextFormattedNumber;
                    
                        echo "Next code: " . $newCode;  // Output: LOSIS-000076 (for example)
                    } else {
                        // If no records exist, start from LOSIS-000001
                        $userID = "LOSIS-000001";
                    }
                    
                    $target_dir = "../../profilepictures_/$userID/";

					$conn->query("INSERT INTO tbl_operations SET user_id = '".$userID."', assigned_team_one = '".$userteam."', fname = '".$userfname."', mname = '".$usermname."', lname = '".$userlname."', suffix = '".$usersuffix."', date_of_birth = '".$userdateofbirth."', user_age = '".$userage."', gender_ = '".$usergender."', contact_no = '".$usercontact."', full_address = '".$useraddress."', user_image = '".$profileimg."'");
					$conn->query("INSERT INTO operations_list SET operations_id = '".$OpsuserID."', fname = '".$userfname."', mname = '".$usermname."', lname = '".$userlname."', suffix = '".$usersuffix."', position_ = '".$userpositionname."', team_one = '".$userteam."', operations_type = '1'");
					$conn->query("INSERT INTO specialist_list SET specialist_id = '".$OpsTeleuserID."', fname = '".$userfname."', mname = '".$usermname."', lname = '".$userlname."', suffix = '".$usersuffix."', position_ = '".$userpositionname."', team_one = '".$userteam."'");
					$conn->query("INSERT INTO tbl_users SET user_id = '".$userID."', useremail_ = '".$useremail."', userpass_ = '".$userpass."', userpass_hash = '" . md5($userpass) ."', usertype_ = '3', userstatus_ = '1', accountstatus_ = '0', messagestatus_ = '0', is_blacklisted = '0'");
					mkdir($target_dir, 0777, true);
					move_uploaded_file($temp_name,"../../profilepictures_/$userID/".$profileimg);
		            $sql = "INSERT INTO tbl_admin_history_logs SET
		                    user_id = '". $_SESSION['user_id'] ."',
		                    x_module = 'User Management - New User',
		                    x_module_action = 'Created New User Account'";
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
		                    x_module = 'User Management',
		                    x_module_action = 'View User Management - Manage Users'";
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
	            	$qstring = '?newaccnt=succ';
				} else {
	            	$qstring = '?newaccnt=err';
				}
	    		header("Location: ../manage_users.php".$qstring);
			} else if ($useropstype == '2') {
			if ($useropstype == '1') {
				if ($_FILES['userprofileimg']['name']!="") {
					$time = rand(10000000,99999999);
					$year = date("Y");
				// 	$userID = 'LOSIS'.'-'.'0'.$year.'-'.$time;
					$OpsuserID = 'LOSI'.'-'.'0'.$year.'-'.'OPS'.'-'.$time;
					$OpsDAuserID = 'LOSI'.'-'.'0'.$year.'-'.'DA'.'-'.$time;
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
		        	$temp_name = $_FILES['userprofileimg']['tmp_name'];
		        	
		        	// Fetch the last inserted code from the database
                    $sqluserID = "SELECT `user_id` FROM `tbl_users` ORDER BY `id` DESC LIMIT 1";
                    $result = $conn->query($sqluserID);
                    
                    // Check if the query returned a result
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $lastCode = $row['user_id'];  // Example: LOSIS-000075
                    
                        // Extract the numeric part from the code
                        $numericPart = substr($lastCode, strrpos($lastCode, '-') + 1);
                    
                        // Increment the numeric part
                        $nextNumber = (int)$numericPart + 1;
                    
                        // Format the next number as a 6-digit number with leading zeros
                        $nextFormattedNumber = str_pad($nextNumber, 6, '0', STR_PAD_LEFT);
                    
                        // Combine it with the prefix to create the new code
                        $userID = "LOSIS-" . $nextFormattedNumber;
                    
                        echo "Next code: " . $newCode;  // Output: LOSIS-000076 (for example)
                    } else {
                        // If no records exist, start from LOSIS-000001
                        $userID = "LOSIS-000001";
                    }
                    
                    $target_dir = "../../profilepictures_/$userID/";

					$conn->query("INSERT INTO tbl_operations SET user_id = '".$userID."', assigned_team_one = '".$userteam."', fname = '".$userfname."', mname = '".$usermname."', lname = '".$userlname."', suffix = '".$usersuffix."', date_of_birth = '".$userdateofbirth."', user_age = '".$userage."', gender_ = '".$usergender."', contact_no = '".$usercontact."', full_address = '".$useraddress."', user_image = '".$profileimg."'");
					$conn->query("INSERT INTO operations_list SET operations_id = '".$OpsuserID."', fname = '".$userfname."', mname = '".$usermname."', lname = '".$userlname."', suffix = '".$usersuffix."', position_ = '".$userpositionname."', team_one = '".$userteam."', operations_type = '2'");
					$conn->query("INSERT INTO analyst_list SET analyst_id = '".$OpsDAuserID."', fname = '".$userfname."', mname = '".$usermname."', lname = '".$userlname."', suffix = '".$usersuffix."', position_ = '".$userpositionname."', team_one = '".$userteam."'");
					$conn->query("INSERT INTO tbl_users SET user_id = '".$userID."', useremail_ = '".$useremail."', userpass_ = '".$userpass."', userpass_hash = '" . md5($userpass) ."', usertype_ = '3', userstatus_ = '1', accountstatus_ = '0', messagestatus_ = '0', is_blacklisted = '0'");
					mkdir($target_dir, 0777, true);
					move_uploaded_file($temp_name,"../../profilepictures_/$userID/".$profileimg);
		            $sql = "INSERT INTO tbl_admin_history_logs SET
		                    user_id = '". $_SESSION['user_id'] ."',
		                    x_module = 'User Management - New User',
		                    x_module_action = 'Created New User Account'";
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
		                    x_module = 'User Management',
		                    x_module_action = 'View User Management - Manage Users'";
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
	            	$qstring = '?newaccnt=succ';
				} else {
	            	$qstring = '?newaccnt=err';
				}
	    		header("Location: ../manage_users.php".$qstring);
			} else {
				if ($_FILES['userprofileimg']['name']!="") {
					$time = rand(10000000,99999999);
					$year = date("Y");
				// 	$userID = 'LOSIS'.'-'.'0'.$year.'-'.$time;
					$OpsuserID = 'LOSI'.'-'.'0'.$year.'-'.'OPS'.'-'.$time;
					$OpsFielduserID = 'LOSI'.'-'.'0'.$year.'-'.'FLD'.'-'.$time;
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
		        	$temp_name = $_FILES['userprofileimg']['tmp_name'];
		        	
		        	// Fetch the last inserted code from the database
                    $sqluserID = "SELECT `user_id` FROM `tbl_users` ORDER BY `id` DESC LIMIT 1";
                    $result = $conn->query($sqluserID);
                    
                    // Check if the query returned a result
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $lastCode = $row['user_id'];  // Example: LOSIS-000075
                    
                        // Extract the numeric part from the code
                        $numericPart = substr($lastCode, strrpos($lastCode, '-') + 1);
                    
                        // Increment the numeric part
                        $nextNumber = (int)$numericPart + 1;
                    
                        // Format the next number as a 6-digit number with leading zeros
                        $nextFormattedNumber = str_pad($nextNumber, 6, '0', STR_PAD_LEFT);
                    
                        // Combine it with the prefix to create the new code
                        $userID = "LOSIS-" . $nextFormattedNumber;
                    
                        echo "Next code: " . $newCode;  // Output: LOSIS-000076 (for example)
                    } else {
                        // If no records exist, start from LOSIS-000001
                        $userID = "LOSIS-000001";
                    }
                    
                    $target_dir = "../../profilepictures_/$userID/";

					$conn->query("INSERT INTO tbl_operations SET user_id = '".$userID."', assigned_team_one = '".$userteam."', fname = '".$userfname."', mname = '".$usermname."', lname = '".$userlname."', suffix = '".$usersuffix."', date_of_birth = '".$userdateofbirth."', user_age = '".$userage."', gender_ = '".$usergender."', contact_no = '".$usercontact."', full_address = '".$useraddress."', user_image = '".$profileimg."'");
					$conn->query("INSERT INTO operations_list SET operations_id = '".$OpsuserID."', fname = '".$userfname."', mname = '".$usermname."', lname = '".$userlname."', suffix = '".$usersuffix."', position_ = '".$userpositionname."', team_one = '".$userteam."', operations_type = '3'");
					$conn->query("INSERT INTO field_list SET field_id = '".$OpsFielduserID."', fname = '".$userfname."', mname = '".$usermname."', lname = '".$userlname."', suffix = '".$usersuffix."', position_ = '".$userpositionname."', team_one = '".$userteam."'");
					$conn->query("INSERT INTO tbl_users SET user_id = '".$userID."', useremail_ = '".$useremail."', userpass_ = '".$userpass."', userpass_hash = '" . md5($userpass) ."', usertype_ = '3', userstatus_ = '1', accountstatus_ = '0', messagestatus_ = '0', is_blacklisted = '0'");
					mkdir($target_dir, 0777, true);
					move_uploaded_file($temp_name,"../../profilepictures_/$userID/".$profileimg);
		            $sql = "INSERT INTO tbl_admin_history_logs SET
		                    user_id = '". $_SESSION['user_id'] ."',
		                    x_module = 'User Management - New User',
		                    x_module_action = 'Created New User Account'";
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
		                    x_module = 'User Management',
		                    x_module_action = 'View User Management - Manage Users'";
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
	            	$qstring = '?newaccnt=succ';
				} else {
	            	$qstring = '?newaccnt=err';
				}
	    		header("Location: ../manage_users.php".$qstring);
			}
		} else if ($usertype == '4') {
			if ($_FILES['userprofileimg']['name']!="") {
				$time = rand(10000000,99999999);
				$year = date("Y");
				// $userID = 'LOSIS'.'-'.'0'.$year.'-'.$time;
				$ITuserID = 'LOSI'.'-'.'0'.$year.'-'.'ITS'.'-'.$time;
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
	        	$temp_name = $_FILES['userprofileimg']['tmp_name'];
	        	
	        	// Fetch the last inserted code from the database
                $sqluserID = "SELECT `user_id` FROM `tbl_users` ORDER BY `id` DESC LIMIT 1";
                $result = $conn->query($sqluserID);
                
                // Check if the query returned a result
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $lastCode = $row['user_id'];  // Example: LOSIS-000075
                
                    // Extract the numeric part from the code
                    $numericPart = substr($lastCode, strrpos($lastCode, '-') + 1);
                
                    // Increment the numeric part
                    $nextNumber = (int)$numericPart + 1;
                
                    // Format the next number as a 6-digit number with leading zeros
                    $nextFormattedNumber = str_pad($nextNumber, 6, '0', STR_PAD_LEFT);
                
                    // Combine it with the prefix to create the new code
                    $userID = "LOSIS-" . $nextFormattedNumber;
                
                    echo "Next code: " . $newCode;  // Output: LOSIS-000076 (for example)
                } else {
                    // If no records exist, start from LOSIS-000001
                    $userID = "LOSIS-000001";
                }
                
                $target_dir = "../../profilepictures_/$userID/";

				$conn->query("INSERT INTO tbl_support SET user_id = '".$userID."', assigned_team = '".$userteam."', fname = '".$userfname."', mname = '".$usermname."', lname = '".$userlname."', suffix = '".$usersuffix."', date_of_birth = '".$userdateofbirth."', user_age = '".$userage."', gender_ = '".$usergender."', contact_no = '".$usercontact."', full_address = '".$useraddress."', user_image = '".$profileimg."'");
				$conn->query("INSERT INTO itsupport_list SET itsupp_id = '".$ITuserID."', fname = '".$userfname."', mname = '".$usermname."', lname = '".$userlname."', suffix = '".$usersuffix."', position_ = '".$userpositionname."', team_one = '".$userteam."'");
				$conn->query("INSERT INTO tbl_users SET user_id = '".$userID."', useremail_ = '".$useremail."', userpass_ = '".$userpass."', userpass_hash = '" . md5($userpass) ."', usertype_ = '4', userstatus_ = '1', accountstatus_ = '0', messagestatus_ = '0', is_blacklisted = '0'");
				mkdir($target_dir, 0777, true);
				move_uploaded_file($temp_name,"../../profilepictures_/$userID/".$profileimg);
	            $sql = "INSERT INTO tbl_admin_history_logs SET
	                    user_id = '". $_SESSION['user_id'] ."',
	                    x_module = 'User Management - New User',
	                    x_module_action = 'Created New User Account'";
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
	                    x_module = 'User Management',
	                    x_module_action = 'View User Management - Manage Users'";
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
            	$qstring = '?newaccnt=succ';
			} else {
            	$qstring = '?newaccnt=err';
			}
    		header("Location: ../manage_users.php".$qstring);
		} else {
			if ($_FILES['userprofileimg']['name']!="") {
				$time = rand(10000000,99999999);
				$year = date("Y");
				// $userID = 'LOSIS'.'-'.'0'.$year.'-'.$time;
				$DEVuserID = 'LOSI'.'-'.'0'.$year.'-'.'DEV'.'-'.$time;
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
	        	$temp_name = $_FILES['userprofileimg']['tmp_name'];
	        	
	        	// Fetch the last inserted code from the database
                $sqluserID = "SELECT `user_id` FROM `tbl_users` ORDER BY `id` DESC LIMIT 1";
                $result = $conn->query($sqluserID);
                
                // Check if the query returned a result
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $lastCode = $row['user_id'];  // Example: LOSIS-000075
                
                    // Extract the numeric part from the code
                    $numericPart = substr($lastCode, strrpos($lastCode, '-') + 1);
                
                    // Increment the numeric part
                    $nextNumber = (int)$numericPart + 1;
                
                    // Format the next number as a 6-digit number with leading zeros
                    $nextFormattedNumber = str_pad($nextNumber, 6, '0', STR_PAD_LEFT);
                
                    // Combine it with the prefix to create the new code
                    $userID = "LOSIS-" . $nextFormattedNumber;
                
                    echo "Next code: " . $newCode;  // Output: LOSIS-000076 (for example)
                } else {
                    // If no records exist, start from LOSIS-000001
                    $userID = "LOSIS-000001";
                }
                
                $target_dir = "../../profilepictures_/$userID/";

				$conn->query("INSERT INTO tbl_developer SET user_id = '".$userID."', assigned_team = '".$userteam."', fname = '".$userfname."', mname = '".$usermname."', lname = '".$userlname."', suffix = '".$usersuffix."', date_of_birth = '".$userdateofbirth."', user_age = '".$userage."', gender_ = '".$usergender."', contact_no = '".$usercontact."', full_address = '".$useraddress."', user_image = '".$profileimg."'");
				$conn->query("INSERT INTO developer_list SET dev_id = '".$DEVuserID."', fname = '".$userfname."', mname = '".$usermname."', lname = '".$userlname."', suffix = '".$usersuffix."', position_ = '".$userpositionname."', team_one = '".$userteam."'");
				$conn->query("INSERT INTO tbl_users SET user_id = '".$userID."', useremail_ = '".$useremail."', userpass_ = '".$userpass."', userpass_hash = '" . md5($userpass) ."', usertype_ = '5', userstatus_ = '1', accountstatus_ = '0', messagestatus_ = '0', is_blacklisted = '0'");
				mkdir($target_dir, 0777, true);
				move_uploaded_file($temp_name,"../../profilepictures_/$userID/".$profileimg);
	            $sql = "INSERT INTO tbl_admin_history_logs SET
	                    user_id = '". $_SESSION['user_id'] ."',
	                    x_module = 'User Management - New User',
	                    x_module_action = 'Created New User Account'";
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
	                    x_module = 'User Management',
	                    x_module_action = 'View User Management - Manage Users'";
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
            	$qstring = '?newaccnt=succ';
			} else {
            	$qstring = '?newaccnt=err';
			}
    		header("Location: ../manage_users.php".$qstring);
		} 
    }
}
?>