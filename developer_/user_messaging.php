<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';
?>

<link rel="stylesheet" href="../assets/css/messaging.css">

<div id="wrapper" class="theme-green">
	<div id="main-content">
		<div class="container-fluid">
			<div class="block-header">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<h2>Messaging</h2>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
							<li class="breadcrumb-item">Messaging</li>
						</ul>	
					</div>
				</div>
			</div>
			<div class="wrapper">
				<section class="users">
					<header>
						<div class="content">
							<?php
								$sql = mysqli_query($conn, "SELECT a.user_id, CONCAT(a.fname, ' ', a.lname, ' ', a.suffix) AS username, a.team_, a.user_image, b.client_id, b.client_name, b.acronym_, b.site_, b.supervisor_, b.team_, c.user_id, c.messagestatus_, d.supervisor_id, CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) AS userfullname, d.team_ FROM tbl_client AS a LEFT JOIN client_list AS b ON a.team_ = b.team_ LEFT JOIN tbl_users AS c ON a.user_id = c.user_id LEFT JOIN supervisor_list AS d ON b.team_ = d.team_ WHERE b.team_ = '$team_' AND a.user_id != '".$_SESSION["user_id"]."' GROUP BY a.user_id UNION ALL SELECT a.user_id, CONCAT(a.fname, ' ', a.lname, ' ', a.suffix) AS username, a.assigned_team, a.user_image, b.client_id, b.client_name, b.acronym_, b.site_, b.supervisor_, b.team_, c.user_id, c.messagestatus_, d.supervisor_id, CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) AS userfullname, d.team_ FROM tbl_supervisor AS a LEFT JOIN client_list AS b ON a.assigned_team = b.team_ LEFT JOIN tbl_users AS c ON a.user_id = c.user_id LEFT JOIN supervisor_list AS d ON b.supervisor_ = d.supervisor_id WHERE b.team_ = '$team_' AND a.user_id != '".$_SESSION["user_id"]."' GROUP BY a.user_id UNION ALL SELECT a.user_id, CONCAT(a.fname, ' ', a.lname, ' ', a.suffix) AS username, a.assigned_team_one, a.user_image, b.client_id, b.client_name, b.acronym_, b.site_, b.supervisor_, b.team_, c.user_id, c.messagestatus_, d.operations_id, CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) AS userfullname, d.team_one FROM tbl_operations AS a LEFT JOIN client_list AS b ON a.assigned_team_one = b.team_ LEFT JOIN tbl_users AS c ON a.user_id =  c.user_id LEFT JOIN operations_list AS d ON CONCAT(a.fname, ' ', a.lname, ' ', a.suffix) = CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) WHERE b.team_ = '$team_' AND a.user_id != '".$_SESSION["user_id"]."' GROUP BY a.user_id");
								if (mysqli_num_rows($sql) > 0) {
									$row = mysqli_fetch_assoc($sql);
								}
							?>
			                <?php 
			                    echo '<img src="../profilepictures_/'.$devid.'/'.$dev_userimage.'" /alt="">';
			                ?>
			                <div class="details">
					            <span><?php echo $dev_name; ?></span>
					            <p><?php echo $devmsgstatus; ?></p>
			                </div>
						</div>
					</header>
					<div class="search">
				        <span class="text">Select an user to start chat</span>
				        <input type="text" placeholder="Enter name to search...">
				        <button><i class="fa fa-search"></i></button>	
					</div>
					<div class="users-list"></div>
				</section>
			</div>
		</div>
	</div>
</div>

<script src="messaging/script/users.js"></script>