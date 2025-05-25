<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';
?>

<div id="wrapper" class="theme-green">
	<div id="main-content">
		<div class="container-fluid">
			<div class="block-header">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<h2>Team Management</h2>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
							<li class="breadcrumb-item active">Team Management</li>
						</ul>	
					</div>
				</div>
			</div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="header">
                            <div class="card" style="height: 85px;">
                                <div class="card-body">
                                    <div class="media mleft">
                                        <div class="media-left">
                                            <p style="font-size: 36px; margin-top: -7px;">
                                                <i class="fa fa-info-circle text-success"></i>
                                            </p>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Team Management</h4>
                                                Lendell Outsourcing Solutions Inc.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs-new2 customtab" role="tablist">
	                            <li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#spvr" role="tab"><i class="icofont-database"></i>&nbsp;&nbsp;Supervisor</a>
									<div class="slide"></div>
	                            </li>
	                            <li class="nav-item">
	                                <a class="nav-link" data-toggle="tab" href="#ops" role="tab"><i class="icofont-files-stack"></i>&nbsp;&nbsp;Operations</a>
	                                <div class="slide"></div>
	                            </li>
	                            <li class="nav-item">
	                                <a class="nav-link" data-toggle="tab" href="#supp" role="tab"><i class="icofont-ui-check"></i>&nbsp;&nbsp;Support</a>
	                                <div class="slide"></div>
	                            </li>                                   
                            </ul>
                            <div class="tab-content br-n pn">
                                <div id="spvr" class="tab-pane p-3 active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
															<th></th>
															<th>NAME</th>
															<th>POSITION</th>
															<th>TEAM</th>
															<th>ACTIONS</th>
                                                        </tr>
                                                    </thead>
		                        					<tbody>
														<?php
															$sql = "SELECT a.user_id, a.fname, CONCAT(a.fname) AS fname_, a.mname, a.lname, CONCAT(a.lname) AS lname_, a.suffix, a.user_image, a.assigned_team, b.team_no, b.team_name, c.supervisor_id, c.fname, c.mname, c.lname, c.suffix, c.position_, d.user_id, d.userstatus_, d.usertype_ FROM tbl_supervisor AS a LEFT JOIN team_list AS b ON a.assigned_team = b.team_no LEFT JOIN supervisor_list AS c ON CONCAT(a.fname , ' ' , a.mname, ' ' , a.lname , ' ' , a.suffix) = CONCAT(c.fname , ' ' , c.mname, ' ' , c.lname , ' ' , c.suffix) LEFT JOIN tbl_users AS d ON a.user_id = d.user_id WHERE d.userstatus_ = '1' ORDER BY lname_, fname_ ASC";
															$result = $conn->query($sql);
															if ($result->num_rows > 0) {
																while ($row = $result->fetch_assoc()) {
																	$user_id = $row['user_id'];
																	$user_image = $row['user_image'];
																	$fullname = strtoupper($row['lname']). ', ' .$row['fname']. ' ' .$row['suffix'];

																	?>	
																		<tr>
																			<td>
																				<?php
					                                                            	echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div>'
																				?>
																			</td>
																			<td style="font-weight: bold;"><?php echo $fullname; ?></td>
																			<td><?php echo $row['position_']; ?></td>
																			<td><?php echo $row['team_name']; ?></td>
																			<td style="text-align: center;">
																				<button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Change Team" onclick="viewchangeteampoc('<?php echo $fullname; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['supervisor_id']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewchangeteam();"><i class="fa fa-user"></i></button>
																			</td>
																		</tr>
																	<?php
																}
															}
														?>
		                        					</tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="ops" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
															<th></th>
															<th>NAME</th>
															<th>POSITION</th>
															<th>TEAM</th>
															<th>ACTIONS</th>
                                                        </tr>
                                                    </thead>
		                        					<tbody>
														<?php
															$sql = "SELECT a.user_id, a.user_image, a.fname, CONCAT(a.fname) AS fname_, a.mname, a.lname, CONCAT(a.lname) AS lname_, a.suffix, a.assigned_team_one, b.team_no, b.team_name, c.operations_id, c.fname, c.mname, c.lname, c.suffix, c.position_, c.operations_type, d.user_id, d.userstatus_, d.usertype_, e.specialist_id, e.fname, e.mname, e.lname, e.suffix FROM tbl_operations AS a LEFT JOIN team_list AS b ON a.assigned_team_one = b.team_no LEFT JOIN operations_list AS c ON CONCAT(a.fname , ' ' , a.mname, ' ' , a.lname , ' ' , a.suffix) = CONCAT(c.fname , ' ' , c.mname, ' ' , c.lname , ' ' , c.suffix) LEFT JOIN tbl_users AS d ON a.user_id = d.user_id LEFT JOIN specialist_list AS e ON CONCAT(c.fname , ' ' , c.mname, ' ' , c.lname , ' ' , c.suffix) = CONCAT(e.fname , ' ' , e.mname, ' ' , e.lname , ' ' , e.suffix) WHERE d.userstatus_ = '1' AND c.operations_type = '1' UNION ALL SELECT a.user_id, a.user_image, a.fname, CONCAT(a.fname) AS fname_, a.mname, a.lname, CONCAT(a.lname) AS lname_, a.suffix, a.assigned_team_one, b.team_no, b.team_name, c.operations_id, c.fname, c.mname, c.lname, c.suffix, c.position_, c.operations_type, d.user_id, d.userstatus_, d.usertype_, e.analyst_id, e.fname, e.mname, e.lname, e.suffix FROM tbl_operations AS a LEFT JOIN team_list AS b ON a.assigned_team_one = b.team_no LEFT JOIN operations_list AS c ON CONCAT(a.fname , ' ' , a.mname, ' ' , a.lname , ' ' , a.suffix) = CONCAT(c.fname , ' ' , c.mname, ' ' , c.lname , ' ' , c.suffix) LEFT JOIN tbl_users AS d ON a.user_id = d.user_id LEFT JOIN analyst_list AS e ON CONCAT(c.fname , ' ' , c.mname, ' ' , c.lname , ' ' , c.suffix) = CONCAT(e.fname , ' ' , e.mname, ' ' , e.lname , ' ' , e.suffix) WHERE d.userstatus_ = '1' AND c.operations_type = '2' UNION ALL SELECT a.user_id, a.user_image, a.fname, CONCAT(a.fname) AS fname_, a.mname, a.lname, CONCAT(a.lname) AS lname_, a.suffix, a.assigned_team_one, b.team_no, b.team_name, c.operations_id, c.fname, c.mname, c.lname, c.suffix, c.position_, c.operations_type, d.user_id, d.userstatus_, d.usertype_, e.field_id, e.fname, e.mname, e.lname, e.suffix FROM tbl_operations AS a LEFT JOIN team_list AS b ON a.assigned_team_one = b.team_no LEFT JOIN operations_list AS c ON CONCAT(a.fname , ' ' , a.mname, ' ' , a.lname , ' ' , a.suffix) = CONCAT(c.fname , ' ' , c.mname, ' ' , c.lname , ' ' , c.suffix) LEFT JOIN tbl_users AS d ON a.user_id = d.user_id LEFT JOIN field_list AS e ON CONCAT(c.fname , ' ' , c.mname, ' ' , c.lname , ' ' , c.suffix) = CONCAT(e.fname , ' ' , e.mname, ' ' , e.lname , ' ' , e.suffix) WHERE d.userstatus_ = '1' AND c.operations_type = '3' ORDER BY lname_, fname_ ASC";
															$result = $conn->query($sql);
															if ($result->num_rows > 0) {
																while ($row = $result->fetch_assoc()) {
																	$user_id = $row['user_id'];
																	$user_image = $row['user_image'];
																	$fullname = strtoupper($row['lname']). ', ' .$row['fname']. ' ' .$row['suffix'];

																	?>	
																		<tr>
																			<td>
																				<?php
					                                                            	echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div>'
																				?>
																			</td>
																			<td style="font-weight: bold;"><?php echo $fullname; ?></td>
																			<td><?php echo $row['position_']; ?></td>
																			<td><?php echo $row['team_name']; ?></td>
																			<td style="text-align: center;">
																				<button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Change Team" onclick="viewchangeteamops('<?php echo $fullname; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['operations_id']; ?>', '<?php echo $row['usertype_']; ?>', '<?php echo $row['operations_type']; ?>'); saveadmviewchangeteam();"><i class="fa fa-user"></i></button>
																			</td>
																		</tr>
																	<?php
																}
															}
														?>
		                        					</tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="supp" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
															<th></th>
															<th>NAME</th>
															<th>POSITION</th>
															<th>TEAM</th>
															<th>ACTIONS</th>
                                                        </tr>
                                                    </thead>
		                        					<tbody>
														<?php
															$sql = "SELECT a.user_id, a.fname, CONCAT(a.fname) AS fname_, a.mname, a.lname, CONCAT(a.lname) AS lname_, a.suffix, a.user_image, a.assigned_team, b.team_no, b.team_name, c.itsupp_id, c.fname, c.mname, c.lname, c.suffix, c.position_, d.user_id, d.userstatus_, d.usertype_ FROM tbl_support AS a LEFT JOIN team_list AS b ON a.assigned_team = b.team_no LEFT JOIN itsupport_list AS c ON CONCAT(a.fname , ' ' , a.mname, ' ' , a.lname , ' ' , a.suffix) = CONCAT(c.fname , ' ' , c.mname, ' ' , c.lname , ' ' , c.suffix) LEFT JOIN tbl_users AS d ON a.user_id = d.user_id WHERE d.userstatus_ = '1' ORDER BY lname_, fname_ ASC";
															$result = $conn->query($sql);
															if ($result->num_rows > 0) {
																while ($row = $result->fetch_assoc()) {
																	$user_id = $row['user_id'];
																	$user_image = $row['user_image'];
																	$fullname = strtoupper($row['lname']). ', ' .$row['fname']. ' ' .$row['suffix'];

																	?>	
																		<tr>
																			<td>
																				<?php
					                                                            	echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div>'
																				?>
																			</td>
																			<td style="font-weight: bold;"><?php echo $fullname; ?></td>
																			<td><?php echo $row['position_']; ?></td>
																			<td><?php echo $row['team_name']; ?></td>
																			<td style="text-align: center;">
																				<button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Change Team" onclick="viewchangeteamsupp('<?php echo $fullname; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['itsupp_id']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewchangeteam();"><i class="fa fa-user"></i></button>
																			</td>
																		</tr>
																	<?php
																}
															}
														?>
		                        					</tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

<?php
    include 'modals.php';
    include 'script.php';
?>