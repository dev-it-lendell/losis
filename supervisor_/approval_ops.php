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
						<h2>Approval of Operations</h2>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
							<li class="breadcrumb-item">Operations</li>
							<li class="breadcrumb-item active">Approval of Operations</li>
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
											<h4 class="media-heading">Approval of Member Request</h4>
												Please check the following request(s) for approval.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="body">
                            <div class="table-responsive">
                            	<form method='POST' action=''>
	                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list" id="tblbackgroundinv">
	                                    <thead class="thead-dark">
	                                        <tr>
												<th>POC</th>
												<th>OPS</th>
												<th>REQUESTING TEAM</th>
												<th>REQUESTING DATES</th>
												<th style="text-align: center;">ACTIONS</th>
	                                        </tr>
	                                	</thead>
	                                    <tbody>
	                                    	<?php
	                                    		$sql = "SELECT a.id, a.request_id, a.req_operations_id, a.req_operations_team, a.requesting_team, a.assigned_account, a.borrow_date_from, a.borrow_date_to, a.remarks_, a.request_status, a.poc_request_creator, a.poc_request_approver, a.poc_request_disapprover, a.deny_request_remarks, a.datetime_approved, a.datetime_disapproved, a.datetime_created, b.user_id, CONCAT(b.user_id) AS operationsid, CONCAT(b.fname, ' ', b.mname, ' ', b.lname, ' ', b.suffix) AS operationsname, b.user_image, CONCAT(b.user_image) AS opsimg, c.team_no, c.team_name, d.user_id, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS clientname, d.company_name, d.user_position, d.site_id, e.client_id, e.client_name, e.acronym_, e.site_, f.user_id, CONCAT(f.user_id) AS supervisorid, CONCAT(f.fname,  ' ', f.mname, ' ', f.lname, ' ', f.suffix) AS supervisorname, f.user_image, CONCAT(f.user_image) AS spvimg FROM tbl_supervisor_member_request AS a LEFT JOIN tbl_operations AS b ON a.req_operations_id = b.user_id LEFT JOIN team_list AS c ON a.requesting_team = c.team_no LEFT JOIN tbl_client AS d ON a.assigned_account = d.user_id LEFT JOIN client_list AS e ON d.site_id = e.client_id LEFT JOIN tbl_supervisor AS f ON a.poc_request_creator = f.user_id WHERE a.req_operations_team = '$team_' AND a.request_status = '0' ORDER BY a.id DESC";
	                                    		$result = $conn->query($sql);
	                                    		if ($result->num_rows > 0) {
	                                    			while ($row = $result->fetch_assoc()) {
														$operationsid = $row['operationsid'];
														$opsimg = $row['opsimg'];
														$operationsname = $row['operationsname'];
														$supervisorid = $row['supervisorid'];
														$spvimg = $row['spvimg'];
														$supervisorname = $row['supervisorname'];
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
																<td style="width: 1px;">
																	<?php
																		echo '<div class="feeds-left"><img src="../profilepictures_/'.$supervisorid.'/'.$spvimg.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$supervisorname.'"></div>'
																	?>
																</td>
																<td style="width: 1px;">
																	<?php
																		echo '<div class="feeds-left"><img src="../profilepictures_/'.$operationsid.'/'.$opsimg.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$operationsname.'"></div>'
																	?>
																</td>
																<td>TEAM <?php echo $row['team_name']; ?></td>
																<td style="font-weight: bold;" data-toggle="tooltip" data-placement="left" title='<?php echo $daysno; ?>'><?php echo $newBorrowDateFrom;?> to <?php echo $newBorrowDateTo; ?></td>
																<td style="text-align: center;"><a onclick="savepocviewapprovalrequest();" href="approve_request.php?reqCode=<?php echo $row['request_id'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Approve Request"><i class="fa fa-check-circle-o"></i></a></td>
															</tr>
														<?php
	                                    			}
	                                    		}
	                                    	?>
	                                	</tbody>
	                        		</table>
                            	</form>
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