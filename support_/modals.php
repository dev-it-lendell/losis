<!-- TICKETING -->
<div class="modal" id="mdladdticket" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">Ticket - NEW</h6>
			</div>
			<div class="modal-body">
				<div id="wrapper" class="theme-green">
					<div class="row clearfix">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="col-md-12 mt-3">
									<ul class="nav nav-tabs-new2 customtab" role="tablist">
		                                <li class="nav-item">
		                                    <a class="nav-link active" data-toggle="tab" href="#ticketform" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;TICKET FORM</a>
		                                    <div class="slide"></div>
		                                </li>
		                                <li class="nav-item">
		                                    <a class="nav-link" data-toggle="tab" href="#ticketmonitor" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;MONITOR TICKETS</a>
		                                    <div class="slide"></div>
		                                </li>
									</ul>
									<div class="tab-content br-n pn">
										<div id="ticketform" class="tab-pane p-3 active">
											<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-8">
															<small class="text-muted">Ticket Schedule: </small>
  															<div class="input-daterange input-group" data-provide="datepicker" data-date-format="yyyy-mm-dd">
																<input type="text" class="input-sm form-control" id="start_date" name="start_date">
																<span class="input-group-text">to</span>
																<input type="text" class="input-sm form-control" id="end_date" name="end_date">
															</div>
														</div>
														<div class="col-md-4">
															<small class="text-muted">Ticket Type: </small>
                                                            <select class="form-control" id="tick_type" name="tick_type">
																<option>-- Select --</option>
																<option value="0">Software</option>
																<option value="1">Hardware</option>
																<option value="2">Software & Hardware</option>
                                                            </select>
														</div>
													</div>
													<br>
													<small class="text-muted">Tasks: </small>
													<textarea class="form-control" rows="5" id="tick_tasks" name="tick_tasks" style="resize: none;" autocomplete="off" maxlength="200"></textarea>
		                                            <div id="tickettype_feedback"></div>
												</div>
											</div>
										</div>
										<div id="ticketmonitor" class="tab-pane p-3">
											<div class="row">
												<div class="col-md-12">
													<div id="ticketstatus"></div>
													<div class="table-responsive">
														<table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
															<thead class="thead-dark">
		                                                        <tr>
		                                                            <th></th>
		                                                            <th>REFERENCE CODE</th>
		                                                            <th>SCHEDULE</th>
		                                                            <th>STATUS</th>
		                                                            <th style="text-align: center;">ACTIONS</th>
		                                                        </tr>  
															</thead>
															<tbody>
																<?php
																	$sql = "SELECT a.ticket_id, a.reference_number, a.requestor, a.ticket_status, a.date_created, a.start_date, a.end_date, b.user_id, CONCAT(b.fname, ' ', b.mname, ' ', b.lname, ' ', b.suffix) AS fullname, b.user_image FROM tbl_tickets AS a LEFT JOIN tbl_support AS b ON a.requestor = b.user_id WHERE MONTH(a.date_created) = MONTH(NOW()) AND YEAR(a.date_created) = YEAR(NOW()) AND a.requestor = '".$_SESSION["user_id"]."'";
																	$result = $conn->query($sql);
																	if ($result->num_rows > 0) {
																		while ($row = $result->fetch_assoc()) {
		                                                                    $start_date = $row['start_date'];
		                                                                    $newDateStart = date("F j, Y", strtotime($start_date));
		                                                                    $end_date = $row['end_date'];
		                                                                    $newDateEnd = date("F j, Y", strtotime($end_date));

							                                                if ($row['ticket_status'] == '0') {
							                                                    $ticketstatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
							                                                } else if ($row['ticket_status'] == '1') {
							                                                    $ticketstatus = '<span class="badge badge-danger" style="font-weight: bold;">On Process</span>';
							                                                } else if ($row['ticket_status'] == '2') {
							                                                    $ticketstatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
							                                                } else {
							                                                    $ticketstatus = "";
							                                                }

							                                                ?>
							                                                	<tr>
							                                                		<td><div class="feeds-left"><img src="../images/icons/ticket.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
							                                                		<td style="font-weight: bold;"><?php echo $row['reference_number']; ?></td>
							                                                		<td><?php echo $newDateStart. ' to ' .$newDateEnd; ?></td>
							                                                		<td><?php echo $ticketstatus; ?></td>
							                                                		<td style="text-align: center;">
							                                                			<a class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="fa fa-file-text-o"></i></a>
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
			<div class="modal-footer">
				<button type="button" class="btn btn-info" onclick="saveticket();"><i class="fa fa-check-circle-o"></i> CREATE</button>
				<button type="button" class="btn btn-danger" onclick="clearticket();"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="mdlstartticket" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title" id="titlestarttick">Ticket - START</h6>
				<h6 class="title" id="titleextendtick">Ticket - START</h6>
			</div>
			<div class="modal-body">
				<div id="wrapper" class="theme-green">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="header">
									<h2><strong>Ticket</strong> Details</h2>
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6">
													<p style="font-size: 13px;">Reference <strong>Number</strong></p>
													<p style="font-size: 13px; font-weight: bold; text-align: left; margin-top: -18px;" id="ticketno"></p>
												</div>
												<div class="col-md-6">
													<p style="font-size: 13px;">Date <strong>Created</strong></p>
													<p style="font-size: 13px; font-weight: bold; text-align: left; margin-top: -18px;" id="datecreated"></p>
												</div>
											</div>
											<p style="font-size: 13px;">Tasks <strong>List</strong></p>
											<p style="font-size: 13px; font-weight: bold; text-align: left;" id="taskslist"></p>
											<input type="text" id="referencecode" style="display: none;">
										</div>
									</div>
									<div class="row" id="enddate_" style="display: none;">
										<div class="col-md-6">
											<label>End Date</label>
												<div class="input-group mb-3">
												<input data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-autoclose="true" class="form-control" id="end_date_extended">
											</div>
										</div>
									</div>
									<hr style="margin-top: -7px;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" onclick="startticket();" id="startticket" style="display: none;"><i class="fa fa-check-circle-o"></i> START</button>
				<button type="button" class="btn btn-info" onclick="extendticket();" id="extendticket" style="display: none;"><i class="fa fa-clock-o"></i> EXTEND</button>
				<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>