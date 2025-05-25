<!-- ENDORSEMENTS -->
<div class="modal" id="mdlendorsements" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">Endorsement - VIEW</h6>
			</div>
			<div class="modal-body">
				<div id="wrapper" class="theme-green">
					<div class="row clearfix">
						<div class="col-lg-12 col-md-12 col-sm-12" id="biprocess" style="display: none;">
							<div class="row">
								<div class="col-lg-3 col-md-12 col-sm-12">
									<div class="card top_counter">
										<div class="body">
											<div class="icon text-dark"><i class="fa fa-user"></i> </div>
											<div class="content">
												<div class="text">Assigned Support</div>
												<p class="number" id="assignsupport" style="font-size: 12px; font-weight: bold;"></p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-12 col-sm-12">
									<div class="card top_counter">
										<div class="body">
											<div class="icon text-dark"><i class="fa fa-user"></i> </div>
											<div class="content">
												<div class="text">Assigned Supervisor</div>
												<p class="number" id="assignsupervisor" style="font-size: 12px; font-weight: bold;"></p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-12 col-sm-12">
									<div class="card top_counter">
										<div class="body">
											<div class="icon text-dark"><i class="fa fa-user"></i> </div>
											<div class="content">
												<div class="text">Assigned Tele Verifier</div>
												<p class="number" id="assignedtele" style="font-size: 12px; font-weight: bold;"></p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-12 col-sm-12">
									<div class="card top_counter">
										<div class="body">
											<div class="icon text-dark"><i class="fa fa-user"></i> </div>
											<div class="content">
												<div class="text">Assigned Analyst</div>
												<p class="number" id="assignedanalyst" style="font-size: 12px; font-weight: bold;"></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12" id="dcprocess" style="display: none;">
							<div class="row">
								<div class="col-lg-4 col-md-12 col-sm-12">
									<div class="card top_counter">
										<div class="body">
											<div class="icon text-dark"><i class="fa fa-user"></i> </div>
											<div class="content">
												<div class="text">Assigned Support</div>
												<p class="number" id="assignsupportdc" style="font-size: 12px; font-weight: bold;"></p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-12 col-sm-12">
									<div class="card top_counter">
										<div class="body">
											<div class="icon text-dark"><i class="fa fa-user"></i> </div>
											<div class="content">
												<div class="text">Assigned Supervisor</div>
												<p class="number" id="assignsupervisordc" style="font-size: 12px; font-weight: bold;"></p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-12 col-sm-12">
									<div class="card top_counter">
										<div class="body">
											<div class="icon text-dark"><i class="fa fa-user"></i> </div>
											<div class="content">
												<div class="text">Assigned Analyst</div>
												<p class="number" id="assignedanalystdc" style="font-size: 12px; font-weight: bold;"></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="card member-card">
								<div class="pw_img" style="margin-top: 70px;">
									<img class="img-fluid" src="../images/backgrounds/bg-5.png" alt="About the image">
								</div>
								<div class="member-img">
									<a href="javascript:void(0);"><img src="../images/icons/endorsement.png" class="rounded-circle" alt="profile-image"></a>
								</div>
								<div class="body">
									<div class="row text-center border-bottom pb-2">
										<div class="col-md-12">
											<label class="d-block text-muted mb-1">Applicant Name</label>
											<p style="font-size: 13px; font-weight: bold;" id="endorsement_applname"></p>
										</div>
									</div>
									<div class="row text-center mt-2 border-bottom pb-2">
										<div class="col-md-6 border-right">
											<label class="d-block text-muted mb-1">Endorsement Date</label>
											<p style="font-size: 13px; font-weight: bold;" id="endorsement_date"></p>
										</div>
										<div class="col-md-6">
											<label class="d-block text-muted mb-1">Endorsement Code</label>
											<p style="font-size: 13px; font-weight: bold;" id="endorsement_code"></p>
										</div>
									</div>
									<div class="row text-center border-bottom pb-2 mt-2">
										<div class="col-md-12">
											<a href="download_informations.php?applicationCode=<?php echo $row['application_code'] ?>" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-8 col-md-12 col-sm-12">
							<div class="card">
								<div class="header">
									<h2><strong>Endorsement</strong> Details</h2>
								</div>
								<div class="body">
									<div class="row">
										<div class="col-md-12">
											<small class="text-muted">Batch ID: </small>
												<p id="endorsement_desc"></p>
											<hr>
											<small class="text-muted">Turn Around Date: </small>
												<p id="endorsement_tadate"></p>
											<hr>
											<small class="text-muted">Endorsement Requestor: </small>
												<p id="endorsement_requestor"></p>
											<hr>
											<small class="text-muted">Company Name - Site: </small>
												<p id="endorsement_company" style="font-weight: bold;"></p>
											<hr>
											<small class="text-muted">Package Description: </small>
												<p id="endorsement_pkgdesc"></p>
											<hr>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>	
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="mdlreturnendorsement" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">ENDORSEMENT - RETURN</h6>
			</div>
			<div class="modal-body">
				<div id="wrapper" class="theme-green">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="header">
									<h2><strong>Endorsement</strong> Details</h2>
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6">
													<p style="font-size: 13px;">Applicant <strong>Name</strong></p>
													<p style="font-size: 13px; font-weight: bold; text-align: left; margin-top: -18px;" id="applicantname"></p>
												</div>
												<div class="col-md-6">
													<p style="font-size: 13px;">Assigned <strong>Analyst</strong></p>
													<p style="font-size: 13px; font-weight: bold; text-align: left; margin-top: -18px;" id="analystname"></p>
												</div>
											</div>
										</div>
									</div>
									<hr style="margin-top: -7px;">
								</div>
								<div class="body" style="margin-top: -40px;">
									<div class="row">
										<div class="col-md-12">
											<input type="text" id="endorsementcode" style="display: none;">
											<input type="text" id="supervisorcode" style="display: none;">
											<input type="text" id="analystcode" style="display: none;">
											<input type="text" id="clientcode" style="display: none;">
											<small class="text-muted" style="font-size: 13px;">Endorsement remarks: </small>
											<textarea class="form-control" rows="3" maxlength="200" id="returnremarks" name="returnremarks" style="resize: none;" placeholder="Type Remarks Here" autocomplete="off"></textarea>
											<div id="return_feedback"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" onclick="returnedendobi();" id="returnendobi" style="display: none;"><i class="fa fa-undo"></i> RETURN</button>
				<button type="button" class="btn btn-info" onclick="returnedendodc();" id="returnendo_dc" style="display: none;"><i class="fa fa-undo"></i> RETURN</button>
				<button type="button" class="btn btn-danger" onclick="clearreturnendo();"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="mdlreturnendodetails" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">Returned Endorsement - VIEW</h6>
			</div>
			<div class="modal-body">
				<div id="wrapper" class="theme-green">
					<div class="row clearfix">
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="card member-card">
								<div class="pw_img" style="margin-top: 70px;">
									<img class="img-fluid" src="../images/backgrounds/bg-5.png" alt="About the image">
								</div>
								<div class="member-img">
									<a href="javascript:void(0);"><img src="../images/icons/endorsement.png" class="rounded-circle" alt="profile-image"></a>
								</div>
								<div class="body">
									<div class="row text-center border-bottom pb-2">
										<div class="col-md-12">
											<label class="d-block text-muted mb-1">Applicant Name</label>
											<p style="font-size: 13px; font-weight: bold;" id="returnendo_name"></p>
										</div>
									</div>
									<div class="row text-center mt-2 border-bottom pb-2">
										<div class="col-md-6 border-right">
											<label class="d-block text-muted mb-1">Endorsement Date</label>
											<p style="font-size: 13px; font-weight: bold;" id="returnendo_date"></p>
										</div>
										<div class="col-md-6">
											<label class="d-block text-muted mb-1">Endorsement Code</label>
											<p style="font-size: 13px; font-weight: bold;" id="returnendo_code"></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-8 col-md-12 col-sm-12">
							<div class="card">
								<div class="header">
									<h2><strong>Return Endorsement</strong> Details</h2>
								</div>
								<div class="body">
									<div class="row">
										<div class="col-md-12">
											<small class="text-muted">Return Remarks: </small>
												<p id="returnendo_remarks"></p>
											<hr>
											<small class="text-muted">Assigned Supervisor: </small>
												<p id="returnendo_poc"></p>
											<hr>
											<small class="text-muted" style="display: none;" id="verifiertitle">Assigned Verifier: </small>
												<p id="returnendo_tele" style="display: none;"></p>
											<small class="text-muted" style="display: none;" id="analysttitle">Assigned Analyst: </small>
												<p id="returnendo_analyst" style="display: none;"></p>
											<small class="text-muted" style="display: none;" id="clienttitle">Assigned Client Requestor: </small>
												<p id="returnendo_client" style="display: none;"></p>
											<hr>
											<small class="text-muted">Date and Time Returned: </small>
												<p id="returnendo_datetime"></p>
											<hr>
											<small class="text-muted">Company Name - Site: </small>
												<p id="returnendo_company" style="font-weight: bold;"></p>
											<hr>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>	
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="mdlreturnhistory" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">Returned Endorsement History - VIEW</h6>
			</div>
			<div class="modal-body">
				<div id="wrapper" class="theme-green">
					<div class="row clearfix">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="header">
									<h2><strong>Return Endorsement</strong> Details</h2>
								</div>
								<div class="body">
									<div class="row">
										<div class="col-md-12">
											<small class="text-muted">Endorsement Code: </small>
												<p id="returnhistendo_code"></p>
											<hr>
											<small class="text-muted">Return Remarks: </small>
												<p id="returnhistendo_remarks"></p>
											<hr>
											<small class="text-muted">Assigned Supervisor: </small>
												<p id="returnhistendo_poc"></p>
											<hr>
											<small class="text-muted" style="display: none;" id="telehisttitle">Assigned Verifier: </small>
												<p id="returnhistendo_tele" style="display: none;"></p>
											<small class="text-muted" style="display: none;" id="analysthisttitle">Assigned Analyst: </small>
												<p id="returnhistendo_analyst" style="display: none;"></p>
											<small class="text-muted" style="display: none;" id="clienthisttitle">Assigned Client Requestor: </small>
												<p id="returnhistendo_client" style="display: none;"></p>
											<hr>
											<small class="text-muted">Date and Time Returned: </small>
												<p id="returnhistendo_retdatetime"></p>
											<hr>
											<small class="text-muted">Date and Time Cleared: </small>
												<p id="returnhistendo_clrdatetime"></p>
											<hr>
											<small class="text-muted">Company Name - Site: </small>
												<p id="returnhistendo_company" style="font-weight: bold;"></p>
											<hr>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>	
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>

<!-- OPERATIONS -->

<!-- REQUEST OPERATIONS -->
<div class="modal" id="mdlrequestops" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">Request Operations</h6>
			</div>
			<div class="modal-body">
				<div id="wrapper" class="theme-green">
					<div class="row clearfix">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="header">
									<h2><strong>Request</strong> Form</h2>
								</div>
								<div class="body">
									<div class="row">
										<div class="col-md-12">
											<small class="text-muted">Teams: </small>
												<div class="input-group">
													<select class="form-control" id="req_teams" name="req_teams" onchange="displayopmembers();"></select>
												</div>   
											<hr>
											<small class="text-muted">Operations: </small>
												<div class="input-group">
													<select class="form-control" id="req_ops" name="req_ops" onchange="displayopsclients();"></select>
												</div>   
											<hr>
											<small class="text-muted">Clients: </small>
												<div class="input-group">
													<select class="form-control" id="req_clients" name="req_clients"></select>
												</div>   
											<hr>
											<small class="text-muted">Borrowed Dates: </small>
											<div class="input-daterange input-group" data-provide="datepicker" data-date-format="yyyy-mm-dd">
												<input type="text" class="input-sm form-control" id="req_borrowdatefrom" name="req_borrowdatefrom" placeholder="Borrow Date From">
												<button class="btn btn-outline-secondary" type="button" disabled style="border-radius: none;">to</button>
												<input type="text" class="input-sm form-control" id="req_borrowdateto" name="req_borrowdateto" placeholder="Borrow Date To">
											</div>
											<hr>
											<small class="text-muted">Remarks: </small>
											<textarea class="form-control" rows="5" id="req_remarks" name="req_remarks" style="resize: none;" autocomplete="off" maxlength="200"></textarea>
                                            <div id="opsremarks_feedback"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>	
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-info" onclick="savecreatedrequest();"><i class="fa fa-check-circle-o"></i> CREATE</button>
				<button type="button" class="btn btn-sm btn-danger" onclick="clearrequestops();"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>

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
																	$sql = "SELECT a.ticket_id, a.reference_number, a.requestor, a.ticket_status, a.date_created, a.start_date, a.end_date, b.user_id, CONCAT(b.fname, ' ', b.mname, ' ', b.lname, ' ', b.suffix) AS fullname, b.user_image FROM tbl_tickets AS a LEFT JOIN tbl_supervisor AS b ON a.requestor = b.user_id WHERE MONTH(a.date_created) = MONTH(NOW()) AND YEAR(a.date_created) = YEAR(NOW()) AND a.requestor = '".$_SESSION["user_id"]."'";
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