<?php
	include 'connect.php';

	if (isset($_POST['signin'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM tbl_users WHERE useremail_ = '". $email ."' AND userpass_ = '". $password ."' AND userstatus_ = '1'";
		$res = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($res);
		if ($count > 0) {
			while ($row = mysqli_fetch_assoc($res)) {
				// REMEMBER ME //
				if ($row) {
					if(!empty($_POST["loginrem"])) {
						setcookie ("login_email",$_POST["email"],time()+ (10 * 365 * 24 * 60 * 60));
						setcookie ("login_password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
					} else {
						if(isset($_COOKIE["login_email"])) {
							setcookie ("login_email","");
						}
						if(isset($_COOKIE["login_password"])) {
							setcookie ("login_password","");
						}
					}
				}
				$_SESSION['user_id'] = $row['user_id'];
	            $_SESSION['useremail'] = $row['useremail_'];
	            $_SESSION['userpass'] = $row['userpass_'];
	            $conn->query("INSERT INTO tbl_user_logs (user_id,login_dateTime) VALUES ('".$_SESSION["user_id"]."',NOW())");
	            $conn->query("UPDATE tbl_users SET messagestatus_ = '1' WHERE user_id = '".$_SESSION["user_id"]."'");

			    if ($row['usertype_'] == '0') {
					$sql = "INSERT INTO tbl_admin_history_logs SET
							user_id = '". $_SESSION['user_id'] ."',
							x_module = 'Login Page',
							x_module_action = 'Logging in of Account'";
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
		                    x_module = 'Dashboard',
		                    x_module_action = 'View Dashboard'";
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
				 	echo "<script type='text/javascript'> document.location = 'admin_/dashboard.php'; </script>";
			    }
			    elseif ($row['usertype_'] == '1') {   
					$sql = "INSERT INTO tbl_client_history_logs SET
							user_id = '". $_SESSION['user_id'] ."',
							x_module = 'Login Page',
							x_module_action = 'Logging in of Account'";
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
		                    x_module = 'Dashboard',
		                    x_module_action = 'View Dashboard'";
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
				 	echo "<script type='text/javascript'> document.location = 'client_/dashboard.php'; </script>";
			    }
			    elseif ($row['usertype_'] == '2') {
					$sql = "INSERT INTO tbl_supervisor_history_logs SET
							user_id = '". $_SESSION['user_id'] ."',
							x_module = 'Login Page',
							x_module_action = 'Logging in of Account'";
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
		                    x_module = 'Dashboard',
		                    x_module_action = 'View Dashboard'";
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
				 	echo "<script type='text/javascript'> document.location = 'supervisor_/dashboard.php'; </script>";
			    }
			    elseif ($row['usertype_'] == '3') {
					$sql = "INSERT INTO tbl_operations_history_logs SET
							user_id = '". $_SESSION['user_id'] ."',
							x_module = 'Login Page',
							x_module_action = 'Logging in of Account'";
					$res = $conn->query($sql);                                
					if ($res) {
						$last_return_id = mysqli_insert_id($conn);
						if ($last_return_id) {
							$logsid = rand(10000000,99999999);
							$logsuserid = "LOG-".$logsid."-".$last_return_id;
							$logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
							$resquery = $conn->query($logsquery);
						}
					}
		            $sql1 = "INSERT INTO tbl_operations_history_logs SET
		                    user_id = '". $_SESSION['user_id'] ."',
		                    x_module = 'Dashboard',
		                    x_module_action = 'View Dashboard'";
		            $res1 = $conn->query($sql1);                                

		            if ($res1) {
		                $last_return_id = mysqli_insert_id($conn);
		                if ($last_return_id) {
		                    $logsid = rand(10000000,99999999);
		                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
		                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
		                    $resquery = $conn->query($logsquery);
		                }
		            }
				 	echo "<script type='text/javascript'> document.location = 'operations_/dashboard.php'; </script>";
			    }
			    elseif ($row['usertype_'] == '4') {
					$sql = "INSERT INTO tbl_support_history_logs SET
							user_id = '". $_SESSION['user_id'] ."',
							x_module = 'Login Page',
							x_module_action = 'Logging in of Account'";
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
		                    x_module = 'Dashboard',
		                    x_module_action = 'View Dashboard'";
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
				 	echo "<script type='text/javascript'> document.location = 'support_/dashboard.php'; </script>";
			    }
			    elseif ($row['usertype_'] == '6' && $row['userexclusivity_'] == '1') {   
					$sql = "INSERT INTO tbl_client_history_logs SET
							user_id = '". $_SESSION['user_id'] ."',
							x_module = 'Login Page',
							x_module_action = 'Logging in of Account'";
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
		                    x_module = 'Dashboard',
		                    x_module_action = 'View Dashboard'";
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
				 	echo "<script type='text/javascript'> document.location = 'clientAdmin_/dashboard.php'; </script>";
			    }
			    elseif ($row['usertype_'] == '7' && $row['userexclusivity_'] == '1') {   
					$sql = "INSERT INTO tbl_client_history_logs SET
							user_id = '". $_SESSION['user_id'] ."',
							x_module = 'Login Page',
							x_module_action = 'Logging in of Account'";
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
		                    x_module = 'Dashboard',
		                    x_module_action = 'View Dashboard'";
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
				 	echo "<script type='text/javascript'> document.location = 'clientUser_/dashboard.php'; </script>";
			    }
			    else {
					$sql = "INSERT INTO tbl_developer_history_logs SET
							user_id = '". $_SESSION['user_id'] ."',
							x_module = 'Login Page',
							x_module_action = 'Logging in of Account'";
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
		                    x_module = 'Dashboard',
		                    x_module_action = 'View Dashboard'";
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
				 	echo "<script type='text/javascript'> document.location = 'developer_/dashboard.php'; </script>";
			    }
			}
		} else {
	  		echo "<script>alert('Invalid Login Details');</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lendell Online Standards and Integrated System - Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
	<meta name="author" content="WrapTheme, design by: ThemeMakker.com">
	<link rel="icon" href="images/lendell/sm-logo.png" type="image/x-icon">
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
</head>
<body data-theme="light" class="font-nunito">
	<div id="wrapper" class="theme-green" style="background-image: linear-gradient(to bottom, rgba(144, 238, 144), white);  background-size: cover; max-width:100%; height:auto;">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle auth-main realestate">
				<div class="auth-box" style="margin: auto;">
					<div class="card">
						<div class="header">
							<div class="top">
								<img src="images/lendell/LOSIS with-words.png" alt="Iconic" style="height: 70px; width: auto; margin-left: 40px;">
							</div>
						</div>
						<div class="body" style="margin-top: -40px;">
							<form class="form-auth-small" method="POST">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
										</div>
										<input type="email" class="form-control" id="signin-email" name="email" placeholder="Email" required autocomplete="off" value="<?php if(isset($_COOKIE["login_email"])) { echo $_COOKIE["login_email"]; } ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend" onclick="showPassword();" style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Show Password">
											<span class="input-group-text"><i class="fa fa-eye"></i></span>
										</div>
										<input type="password" class="form-control" id="signin-password" name="password" placeholder="Password" required autocomplete="off" value="<?php if(isset($_COOKIE["login_password"])) { echo $_COOKIE["login_password"]; } ?>">
									</div>
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox" id="signin-remember" name="loginrem" <?php if(isset($_COOKIE["login_email"])) { ?> checked <?php } ?> />
										<span>Remember me</span>
									</label>
								</div>
								<input class="btn btn-success btn-lg btn-block" name="signin" id="signin" type="submit" value="LOGIN">
								<div class="bottom">
									<span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="forgot_password.php" style="color: #000;">Forgot password?</a></span>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	function showPassword() {
		var x = document.getElementById("signin-password");
		if (x.type === "password") {
	    	x.type = "text";
		} else {
	    	x.type = "password";
		}
	}
</script>