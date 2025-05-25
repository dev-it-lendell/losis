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
						<h2>Request of Operations</h2>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
							<li class="breadcrumb-item">Operations</li>
							<li class="breadcrumb-item active">Request of Operations</li>
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
											<h4 class="media-heading">Requesting of Operations</h4>
											<p style="font-size: 15px;">Create request of borrowing other team member(s).</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-sm btn-success" style="margin-bottom: 15px; margin-left: 25px;" onclick="displayrequestops(); savepocviewform();"><i class="fa fa-user"></i>&nbsp;Request Operations</button>
							</div>
						</div>
						<div class="body">
							<ul class="nav nav-tabs-new2">
								<li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#pendingrequests">Pending</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#approvedrequests">Approved</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#deniedrequests">Denied</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane show active" id="pendingrequests">
									<table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
										<thead class="thead-dark">
											<tr>
												<th></th>
												<th>CODE</th>
												<th>BORROWED DATES</th>
												<th style="text-align: center;">ACTIONS</th>
											</tr>
										</thead>
										<tbody>
											<?php
												$sql = "SELECT a.id, a.request_id, a.req_operations_id, a.req_operations_team, a.requesting_team, a.assigned_account, a.borrow_date_from, a.borrow_date_to, a.remarks_, a.request_status, a.poc_request_creator, a.poc_request_approver, a.poc_request_disapprover, a.deny_request_remarks, a.datetime_approved, a.datetime_disapproved, a.datetime_created, b.request_id, b.team_code, b.datetime_created, c.client_id, c.client_name, c.acronym_, c.site_, d.team_no, d.team_name, e.user_id, CONCAT(e.user_id) AS operationsid, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS operationsname, e.user_image, f.user_id, CONCAT(f.user_id) AS supervisorid, CONCAT(f.fname,  ' ', f.mname, ' ', f.lname, ' ',f.suffix) AS supervisorname FROM tbl_supervisor_member_request AS a LEFT JOIN tbl_supervisor_to_request AS b ON a.request_id = b.request_id LEFT JOIN client_list AS c ON a.assigned_account = c.client_id LEFT JOIN team_list AS d ON a.requesting_team = d.team_no LEFT JOIN tbl_operations AS e ON a.req_operations_id = e.user_id LEFT JOIN tbl_supervisor AS f ON a.poc_request_creator = f.user_id WHERE a.request_status = '0' AND a.poc_request_creator = '".$_SESSION["user_id"]."' ORDER BY a.id DESC";
												$result = $conn->query($sql);
												if ($result->num_rows > 0) {
													while ($row = $result->fetch_assoc()) {
														$operationsid = $row['operationsid'];
														$user_image = $row['user_image'];
														$operationsname = $row['operationsname'];
														$borrow_date_from = $row['borrow_date_from'];
														$borrow_date_to = $row['borrow_date_to'];
														$newBorrowDateFrom = date('F d, Y', strtotime($borrow_date_from));
														$newBorrowDateTo = date('F d, Y', strtotime($borrow_date_to));
														$new2BorrowDateFrom = date('Y-m-d', strtotime($borrow_date_from));
														$new2BorrowDateTo = date('Y-m-d', strtotime($borrow_date_to));
														$date1 = strtotime($new2BorrowDateTo);
														$date2 = strtotime($new2BorrowDateFrom);
														$diff = $date1 - $date2;
														$daysno = floor($diff / (60 * 60 * 24)). " days";

														?>
															<tr>
																<td>
																	<?php
																		echo '<div class="feeds-left"><img src="../profilepictures_/'.$operationsid.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$operationsname.'"></div>'
																	?>
																</td>
																<td><?php echo $row['request_id']; ?></td>
																<td style="font-weight: bold;" data-toggle="tooltip" data-placement="left" title='<?php echo $daysno; ?>'><?php echo $newBorrowDateFrom;?> to <?php echo $newBorrowDateTo; ?></td>
																<td style="text-align: center;"><a onclick="savepocviewrequest();" href="view_request.php?reqCode=<?php echo $row['request_id'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Request"><i class="fa fa-file-text-o"></i></a></td>
															</tr>
														<?php
													}
												}
											?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane" id="approvedrequests">
									<table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
										<thead class="thead-dark">
											<tr>
												<th></th>
												<th>CODE</th>
												<th>BORROWED DATES</th>
												<th style="text-align: center;">ACTIONS</th>
											</tr>
										</thead>
										<tbody>
											<?php
												$sql = "SELECT a.id, a.request_id, a.req_operations_id, a.req_operations_team, a.requesting_team, a.assigned_account, a.borrow_date_from, a.borrow_date_to, a.remarks_, a.request_status, a.poc_request_creator, a.poc_request_approver, a.poc_request_disapprover, a.deny_request_remarks, a.datetime_approved, a.datetime_disapproved, a.datetime_created, b.request_id, b.team_code, b.datetime_created, c.client_id, c.client_name, c.acronym_, c.site_, d.team_no, d.team_name, e.user_id, CONCAT(e.user_id) AS operationsid, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS operationsname, e.user_image, f.user_id, CONCAT(f.user_id) AS supervisorid, CONCAT(f.fname,  ' ', f.mname, ' ', f.lname, ' ',f.suffix) AS supervisorname FROM tbl_supervisor_member_request AS a LEFT JOIN tbl_supervisor_to_request AS b ON a.request_id = b.request_id LEFT JOIN client_list AS c ON a.assigned_account = c.client_id LEFT JOIN team_list AS d ON a.requesting_team = d.team_no LEFT JOIN tbl_operations AS e ON a.req_operations_id = e.user_id LEFT JOIN tbl_supervisor AS f ON a.poc_request_creator = f.user_id WHERE a.request_status = '1' AND a.poc_request_creator = '".$_SESSION["user_id"]."' ORDER BY a.id DESC";
												$result = $conn->query($sql);
												if ($result->num_rows > 0) {
													while ($row = $result->fetch_assoc()) {
														$operationsid = $row['operationsid'];
														$user_image = $row['user_image'];
														$operationsname = $row['operationsname'];
														$borrow_date_from = $row['borrow_date_from'];
														$borrow_date_to = $row['borrow_date_to'];
														$newBorrowDateFrom = date('F d, Y', strtotime($borrow_date_from));
														$newBorrowDateTo = date('F d, Y', strtotime($borrow_date_to));
														$new2BorrowDateFrom = date('Y-m-d', strtotime($borrow_date_from));
														$new2BorrowDateTo = date('Y-m-d', strtotime($borrow_date_to));
														$date1 = strtotime($new2BorrowDateTo);
														$date2 = strtotime($new2BorrowDateFrom);
														$diff = $date1 - $date2;
														$daysno = floor($diff / (60 * 60 * 24)). " days";

														?>
															<tr>
																<td>
																	<?php
																		echo '<div class="feeds-left"><img src="../profilepictures_/'.$operationsid.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$operationsname.'"></div>'
																	?>
																</td>
																<td><?php echo $row['request_id']; ?></td>
																<td style="font-weight: bold;" data-toggle="tooltip" data-placement="left" title='<?php echo $daysno; ?>'><?php echo $newBorrowDateFrom;?> to <?php echo $newBorrowDateTo; ?></td>
																<td style="text-align: center;"><a onclick="savepocviewrequest();" href="view_request.php?reqCode=<?php echo $row['request_id'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Request"><i class="fa fa-file-text-o"></i></a></td>
															</tr>
														<?php
													}
												}
											?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane" id="deniedrequests">
									<table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
										<thead class="thead-dark">
											<tr>
												<th></th>
												<th>CODE</th>
												<th>BORROWED DATES</th>
												<th style="text-align: center;">ACTIONS</th>
											</tr>
										</thead>
										<tbody>
											<?php
												$sql = "SELECT a.id, a.request_id, a.req_operations_id, a.req_operations_team, a.requesting_team, a.assigned_account, a.borrow_date_from, a.borrow_date_to, a.remarks_, a.request_status, a.poc_request_creator, a.poc_request_approver, a.poc_request_disapprover, a.deny_request_remarks, a.datetime_approved, a.datetime_disapproved, a.datetime_created, b.request_id, b.team_code, b.datetime_created, c.client_id, c.client_name, c.acronym_, c.site_, d.team_no, d.team_name, e.user_id, CONCAT(e.user_id) AS operationsid, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS operationsname, e.user_image, f.user_id, CONCAT(f.user_id) AS supervisorid, CONCAT(f.fname,  ' ', f.mname, ' ', f.lname, ' ',f.suffix) AS supervisorname FROM tbl_supervisor_member_request AS a LEFT JOIN tbl_supervisor_to_request AS b ON a.request_id = b.request_id LEFT JOIN client_list AS c ON a.assigned_account = c.client_id LEFT JOIN team_list AS d ON a.requesting_team = d.team_no LEFT JOIN tbl_operations AS e ON a.req_operations_id = e.user_id LEFT JOIN tbl_supervisor AS f ON a.poc_request_creator = f.user_id WHERE a.request_status = '2' AND a.poc_request_creator = '".$_SESSION["user_id"]."' ORDER BY a.id DESC";
												$result = $conn->query($sql);
												if ($result->num_rows > 0) {
													while ($row = $result->fetch_assoc()) {
														$operationsid = $row['operationsid'];
														$user_image = $row['user_image'];
														$operationsname = $row['operationsname'];
														$borrow_date_from = $row['borrow_date_from'];
														$borrow_date_to = $row['borrow_date_to'];
														$newBorrowDateFrom = date('F d, Y', strtotime($borrow_date_from));
														$newBorrowDateTo = date('F d, Y', strtotime($borrow_date_to));
														$new2BorrowDateFrom = date('Y-m-d', strtotime($borrow_date_from));
														$new2BorrowDateTo = date('Y-m-d', strtotime($borrow_date_to));
														$date1 = strtotime($new2BorrowDateTo);
														$date2 = strtotime($new2BorrowDateFrom);
														$diff = $date1 - $date2;
														$daysno = floor($diff / (60 * 60 * 24)). " days";

														?>
															<tr>
																<td>
																	<?php
																		echo '<div class="feeds-left"><img src="../profilepictures_/'.$operationsid.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$operationsname.'"></div>'
																	?>
																</td>
																<td><?php echo $row['request_id']; ?></td>
																<td style="font-weight: bold;" data-toggle="tooltip" data-placement="left" title='<?php echo $daysno; ?>'><?php echo $newBorrowDateFrom;?> to <?php echo $newBorrowDateTo; ?></td>
																<td style="text-align: center;"><a onclick="savepocviewrequest();" href="view_request.php?reqCode=<?php echo $row['request_id'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Request"><i class="fa fa-file-text-o"></i></a></td>
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

<?php
    include 'modals.php';
    include 'script.php';
?>