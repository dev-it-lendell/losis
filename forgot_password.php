<?php
	include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lendell Online Standards and Integrated System - Forgot Password</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
	<meta name="author" content="WrapTheme, design by: ThemeMakker.com">
	<link rel="icon" href="images/lendell/logo.png" type="image/x-icon">
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
										<input type="email" class="form-control" id="signin-email" name="email" placeholder="Email" required autocomplete="off">
									</div>
								</div>
								<input class="btn btn-success btn-lg btn-block" name="forgotemail" id="forgotemail" type="submit" value="SUBMIT">
								<input class="btn btn-danger btn-lg btn-block" name="backtomain" id="backtomain" value="BACK" onclick="backtologin();">
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
    function backtologin() {
        window.location.href = 'signin.php';
    }	
</script>