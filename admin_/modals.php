<!-- DASHBOARD -->
<div class="modal" id="mdladmholidays" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">Holidays - VIEW</h6>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
						<thead class="thead-dark">
							<tr>
								<th></th>
								<th>NAME</th>
								<th>DATE</th>
								<th>TYPE</th>
								<th>STATUS</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql = "SELECT * FROM tbl_holiday ORDER BY holiday_date ASC";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										$holiday_date = $row['holiday_date'];
										$newDateHoliday = date('F d, Y', strtotime($holiday_date));

										// TYPE // 
										if ($row['_type'] == '1') {
											$holidaytype = '<span class="badge badge-default" style="font-weight: bold;">Regular</span>';
										} else if ($row['_type'] == '2') {
											$holidaytype = '<span class="badge badge-default" style="font-weight: bold;">Special Non-Working</span>';
										} else if ($row['_type'] == '3') {
											$holidaytype = '<span class="badge badge-default" style="font-weight: bold;">Special Working</span>';
										} else {
											$holidaytype = "";
										}

										// IS DONE //
										if ($row['is_done'] == '0') {
											$holidayisdone = '<span class="badge badge-danger" style="font-weight: bold;">Not Done</span>';
										} else if ($row['is_done'] == '1') {
											$holidayisdone = '<span class="badge badge-success" style="font-weight: bold;">Done</span>';
										} else {
											$holidayisdone = "";
										}

										?>
											<tr>
												<td><div class="feeds-left"><img src="../images/icons/flag.png" class="rounded-circle width35" alt="" style="width: 30px; margin-top: -2px; margin-left: 5px;"></div></td>
												<td style="font-weight: bold;"><?php echo $row['holiday_name']; ?></td>
												<td><?php echo $newDateHoliday; ?></td>
												<td><?php echo $holidaytype; ?></td>
												<td><?php echo $holidayisdone; ?></td>
											</tr>
										<?php
									}
								}
							?>	
						</tbody>
					</table>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="mdladminmngt" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">Top Management - VIEW</h6>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
						<thead class="thead-dark">
							<tr>
								<th></th>
								<th>NAME</th>
								<th>POSITION</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql = "SELECT a.user_id, a.fname, a.mname, a.lname, a.suffix, a.user_image, b.mngt_id, b.fname, b.mname, b.lname, b.suffix, b.position_ FROM tbl_admin AS a LEFT JOIN management_list AS b ON CONCAT(a.fname , ' ' , a.mname,  ' ' , a.lname , ' ' , a.suffix) = CONCAT(b.fname , ' ' , b.mname,  ' ' , b.lname , ' ' , b.suffix)";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										$user_id = $row['user_id'];
										$user_image = $row['user_image'];

										?>
											<tr>
            									<td>
            										<?php
            											echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 30px; margin-top: -2px; margin-left: 5px;"></div>';
            										?>
            									</td>
												<td style="font-weight: bold;"><?php echo $row['fname'].' '.$row['lname']. ' ' .$row['suffix']; ?></td>
												<td><?php echo $row['position_']; ?></td>											
											</tr>
										<?php
									}
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="mdladminteams" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">Teams - VIEW</h6>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
						<thead class="thead-dark">
							<tr>
								<th></th>
								<th>TEAM NAME</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql = "SELECT * FROM team_list";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										?>
											<tr>
												<td><div class="feeds-left"><img src="../images/icons/team.png" class="rounded-circle width35" alt="" style="width: 30px; margin-top: -2px; margin-left: 5px;"></div></td>
												<td style="font-weight: bold;">Team <?php echo $row['team_name']; ?></td>
											</tr>
										<?php
									}
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>

<!-- USER MANAGEMENT -->

<!-- MANAGE USERS -->
<div class="modal" id="mdlblacklistaccount" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">Blacklist Account</h6>
			</div>
			<div class="modal-body">
				<div id="wrapper" class="theme-green">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="header">
									<h2><strong>Blacklist</strong> Account</h2>
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6">
													<p style="font-size: 13px;">Full <strong>Name</strong></p>
												</div>
												<div class="col-md-6">
													<p style="font-size: 13px; font-weight: bold; text-align: right;" id="userfullname"></p>
												</div>
											</div>
										</div>
									</div>
									<hr style="margin-top: -7px;">
								</div>
								<div class="body" style="margin-top: -40px;">
									<div class="row">
										<div class="col-md-12">
											<input type="text" id="useroffid" style="display: none;">
											<input type="text" id="userfname" style="display: none;">
											<input type="text" id="usermname" style="display: none;">
											<input type="text" id="userlname" style="display: none;">
											<input type="text" id="usersuffix" style="display: none;">
											<input type="text" id="userposition" style="display: none;">
											<input type="text" id="usertype" style="display: none;">
											<small class="text-muted" style="font-size: 13px;">Account remarks: </small>
											<textarea class="form-control" rows="3" maxlength="200" id="blacklistremarks" name="blacklistremarks" style="resize: none;" placeholder="Type Remarks Here" autocomplete="off"></textarea>
											<div id="blacklist_feedback"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-success" onclick="saveblacklistaccount();"><i class="fa fa-save"></i> SAVE</button>
				<button type="button" class="btn btn-sm btn-danger" onclick="clearblacklistremarks();"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="mdlclientdelete" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">Delete Account</h6>
			</div>
			<div class="modal-body">
				<div id="wrapper" class="theme-green">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="header">
									<h2><strong>Delete</strong> Account</h2>
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6">
													<p style="font-size: 13px;">Full <strong>Name</strong></p>
												</div>
												<div class="col-md-6">
													<p style="font-size: 13px; font-weight: bold; text-align: right;" id="clientfullname"></p>
												</div>
											</div>
										</div>
									</div>
									<hr style="margin-top: -7px;">
								</div>
								<div class="body" style="margin-top: -40px;">
									<div class="row">
										<div class="col-md-12">
											<input type="text" id="clientoffid" style="display: none;">
											<input type="text" id="clientfname" style="display: none;">
											<input type="text" id="clientmname" style="display: none;">
											<input type="text" id="clientlname" style="display: none;">
											<input type="text" id="clientsuffix" style="display: none;">
											<input type="text" id="clientposition" style="display: none;">
											<input type="text" id="clienttype" style="display: none;">
											<small class="text-muted" style="font-size: 13px;">Account remarks: </small>
											<textarea class="form-control" rows="3" maxlength="200" id="clientdeleteremarks" name="clientdeleteremarks" style="resize: none;" placeholder="Type Remarks Here" autocomplete="off"></textarea>
											<div id="clientdelete_feedback"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-success" onclick="savedeletedclient();"><i class="fa fa-save"></i> SAVE</button>
				<button type="button" class="btn btn-sm btn-danger" onclick="clearclientdelete();"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="mdlsupervisordelete" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">Delete Account</h6>
			</div>
			<div class="modal-body">
				<div id="wrapper" class="theme-green">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="header">
									<h2><strong>Delete</strong> Account</h2>
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6">
													<p style="font-size: 13px;">Full <strong>Name</strong></p>
												</div>
												<div class="col-md-6">
													<p style="font-size: 13px; font-weight: bold; text-align: right;" id="supervisorfullname"></p>
												</div>
											</div>
										</div>
									</div>
									<hr style="margin-top: -7px;">
								</div>
								<div class="body" style="margin-top: -40px;">
									<div class="row">
										<div class="col-md-12">
											<input type="text" id="supervisoroffid" style="display: none;">
											<input type="text" id="supervisorfname" style="display: none;">
											<input type="text" id="supervisormname" style="display: none;">
											<input type="text" id="supervisorlname" style="display: none;">
											<input type="text" id="supervisorsuffix" style="display: none;">
											<input type="text" id="supervisorposition" style="display: none;">
											<input type="text" id="supervisortype" style="display: none;">
											<small class="text-muted" style="font-size: 13px;">Account remarks: </small>
											<textarea class="form-control" rows="3" maxlength="200" id="supervisordeleteremarks" name="supervisordeleteremarks" style="resize: none;" placeholder="Type Remarks Here" autocomplete="off"></textarea>
											<div id="supervisordelete_feedback"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-success" onclick="savedeletedsupervisor();"><i class="fa fa-save"></i> SAVE</button>
				<button type="button" class="btn btn-sm btn-danger" onclick="clearsupervisordelete();"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="mdloperationsdelete" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">Delete Account</h6>
			</div>
			<div class="modal-body">
				<div id="wrapper" class="theme-green">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="header">
									<h2><strong>Delete</strong> Account</h2>
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6">
													<p style="font-size: 13px;">Full <strong>Name</strong></p>
												</div>
												<div class="col-md-6">
													<p style="font-size: 13px; font-weight: bold; text-align: right;" id="operationsfullname"></p>
												</div>
											</div>
										</div>
									</div>
									<hr style="margin-top: -7px;">
								</div>
								<div class="body" style="margin-top: -40px;">
									<div class="row">
										<div class="col-md-12">
											<input type="text" id="operationsoffid" style="display: none;">
											<input type="text" id="operationsfname" style="display: none;">
											<input type="text" id="operationsmname" style="display: none;">
											<input type="text" id="operationslname" style="display: none;">
											<input type="text" id="operationssuffix" style="display: none;">
											<input type="text" id="operationsposition" style="display: none;">
											<input type="text" id="operationstype" style="display: none;">
											<small class="text-muted" style="font-size: 13px;">Account remarks: </small>
											<textarea class="form-control" rows="3" maxlength="200" id="operationsdeleteremarks" name="operationsdeleteremarks" style="resize: none;" placeholder="Type Remarks Here" autocomplete="off"></textarea>
											<div id="operationsdelete_feedback"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-success" onclick="savedeletedoperations();"><i class="fa fa-save"></i> SAVE</button>
				<button type="button" class="btn btn-sm btn-danger" onclick="clearoperationsdelete();"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="mdlsupportdelete" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">Delete Account</h6>
			</div>
			<div class="modal-body">
				<div id="wrapper" class="theme-green">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="header">
									<h2><strong>Delete</strong> Account</h2>
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6">
													<p style="font-size: 13px;">Full <strong>Name</strong></p>
												</div>
												<div class="col-md-6">
													<p style="font-size: 13px; font-weight: bold; text-align: right;" id="supportfullname"></p>
												</div>
											</div>
										</div>
									</div>
									<hr style="margin-top: -7px;">
								</div>
								<div class="body" style="margin-top: -40px;">
									<div class="row">
										<div class="col-md-12">
											<input type="text" id="supportoffid" style="display: none;">
											<input type="text" id="supportfname" style="display: none;">
											<input type="text" id="supportmname" style="display: none;">
											<input type="text" id="supportlname" style="display: none;">
											<input type="text" id="supportsuffix" style="display: none;">
											<input type="text" id="supportposition" style="display: none;">
											<input type="text" id="supporttype" style="display: none;">
											<small class="text-muted" style="font-size: 13px;">Account remarks: </small>
											<textarea class="form-control" rows="3" maxlength="200" id="supportdeleteremarks" name="supportdeleteremarks" style="resize: none;" placeholder="Type Remarks Here" autocomplete="off"></textarea>
											<div id="supportdelete_feedback"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-success" onclick="savedeletedsupport();"><i class="fa fa-save"></i> SAVE</button>
				<button type="button" class="btn btn-sm btn-danger" onclick="clearsupportdelete();"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="mdladmindelete" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">Delete Account</h6>
			</div>
			<div class="modal-body">
				<div id="wrapper" class="theme-green">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="header">
									<h2><strong>Delete</strong> Account</h2>
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6">
													<p style="font-size: 13px;">Full <strong>Name</strong></p>
												</div>
												<div class="col-md-6">
													<p style="font-size: 13px; font-weight: bold; text-align: right;" id="adminfullname"></p>
												</div>
											</div>
										</div>
									</div>
									<hr style="margin-top: -7px;">
								</div>
								<div class="body" style="margin-top: -40px;">
									<div class="row">
										<div class="col-md-12">
											<input type="text" id="adminoffid" style="display: none;">
											<input type="text" id="adminfname" style="display: none;">
											<input type="text" id="adminmname" style="display: none;">
											<input type="text" id="adminlname" style="display: none;">
											<input type="text" id="adminsuffix" style="display: none;">
											<input type="text" id="adminposition" style="display: none;">
											<input type="text" id="admintype" style="display: none;">
											<small class="text-muted" style="font-size: 13px;">Account remarks: </small>
											<textarea class="form-control" rows="3" maxlength="200" id="admindeleteremarks" name="admindeleteremarks" style="resize: none;" placeholder="Type Remarks Here" autocomplete="off"></textarea>
											<div id="admindelete_feedback"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-success" onclick="savedeletedadmin();"><i class="fa fa-save"></i> SAVE</button>
				<button type="button" class="btn btn-sm btn-danger" onclick="clearadmindelete();"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="mdldeveloperdelete" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">Delete Account</h6>
			</div>
			<div class="modal-body">
				<div id="wrapper" class="theme-green">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="header">
									<h2><strong>Delete</strong> Account</h2>
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6">
													<p style="font-size: 13px;">Full <strong>Name</strong></p>
												</div>
												<div class="col-md-6">
													<p style="font-size: 13px; font-weight: bold; text-align: right;" id="developerfullname"></p>
												</div>
											</div>
										</div>
									</div>
									<hr style="margin-top: -7px;">
								</div>
								<div class="body" style="margin-top: -40px;">
									<div class="row">
										<div class="col-md-12">
											<input type="text" id="developeroffid" style="display: none;">
											<input type="text" id="developerfname" style="display: none;">
											<input type="text" id="developermname" style="display: none;">
											<input type="text" id="developerlname" style="display: none;">
											<input type="text" id="developersuffix" style="display: none;">
											<input type="text" id="developerposition" style="display: none;">
											<input type="text" id="developertype" style="display: none;">
											<small class="text-muted" style="font-size: 13px;">Account remarks: </small>
											<textarea class="form-control" rows="3" maxlength="200" id="developerdeleteremarks" name="developerdeleteremarks" style="resize: none;" placeholder="Type Remarks Here" autocomplete="off"></textarea>
											<div id="developerdelete_feedback"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-success" onclick="savedeleteddeveloper();"><i class="fa fa-save"></i> SAVE</button>
				<button type="button" class="btn btn-sm btn-danger" onclick="cleardeveloperdelete();"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="mdlreactivateaccount" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">Reactivate Account</h6>
			</div>
			<div class="modal-body">
				<div id="wrapper" class="theme-green">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="header">
									<h2><strong>Reactivate</strong> Account</h2>
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6">
													<p style="font-size: 13px;">Full <strong>Name</strong></p>
												</div>
												<div class="col-md-6">
													<p style="font-size: 13px; font-weight: bold; text-align: right;" id="user_full_name"></p>
												</div>
											</div>
										</div>
									</div>
									<hr style="margin-top: -7px;">
								</div>
								<div class="body" style="margin-top: -40px;">
									<div class="row">
										<div class="col-md-12">
											<input type="text" id="user_full_id" style="display: none;">
											<small class="text-muted" style="font-size: 13px;">Account remarks: </small>
											<textarea class="form-control" rows="3" maxlength="200" id="userremarks" name="userremarks" style="resize: none;" placeholder="Type Remarks Here" autocomplete="off"></textarea>
											<div id="user_feedback"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-success" onclick="updateactiveaccount();"><i class="fa fa-save"></i> SAVE</button>
				<button type="button" class="btn btn-sm btn-danger" onclick="updateactiveaccount();"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>

<!-- MEMBER REQUESTS -->
<div class="modal" id="mdlmemberrequest" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">Member Request - VIEW</h6>
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
									<a href="javascript:void(0);"><img src="../images/icons/request.png" class="rounded-circle" alt="profile-image"></a>
								</div>
								<div class="body">
									<div class="row text-center border-bottom pb-2">
										<div class="col-md-12">
											<label class="d-block text-muted mb-1">Requesting Operations</label>
											<p style="font-size: 13px; font-weight: bold;" id="memreq_opsname"></p>
										</div>
									</div>
									<div class="row text-center mt-2 border-bottom pb-2">
										<div class="col-md-6 border-right">
											<label class="d-block text-muted mb-1">Date and Time Created</label>
											<p style="font-size: 13px; font-weight: bold;" id="memreq_datetimecreated"></p>
										</div>
										<div class="col-md-6">
											<label class="d-block text-muted mb-1">Request<br>Code</label>
											<p style="font-size: 13px; font-weight: bold;" id="memreq_code"></p>
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
											<small class="text-muted">Requesting Team: </small>
												<p id="memreq_reqteam"></p>
											<hr>
											<small class="text-muted">Assigned Account: </small>
												<p id="memreq_account" style="font-weight: bold;"></p>
											<hr>
											<small class="text-muted">Borrowed Date From and To: </small>
												<p id="memreq_borroweddates"></p>
											<hr>
											<small class="text-muted">Request Remarks: </small>
												<p id="memreq_reqremarks"></p>
											<hr>
											<small class="text-muted">Supervisor Creator: </small>
												<p id="memreq_poccreator"></p>
											<hr>
											<small class="text-muted">Supervisor Approver: </small>
												<p id="memreq_pocapprv"></p>
											<hr>
											<small class="text-muted">Supervisor Disapprover: </small>
												<p id="memreq_pocdisapprv"></p>
											<hr>
											<small class="text-muted">Deny Remarks: </small>
												<p id="memreq_denyremarks"></p>
											<hr>
											<small class="text-muted">Date and Time Approved: </small>
												<p id="memreq_datetimeapproved"></p>
											<hr>
											<small class="text-muted">Date and Time Disapproved: </small>
												<p id="memreq_datetimedisapproved"></p>
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

<!-- TEAM MANAGEMENT -->
<div class="modal" id="mdlchangeteam" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">Change Team</h6>
			</div>
			<div class="modal-body">
				<div id="wrapper" class="theme-green">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="header">
									<h2><strong>Change</strong> Team</h2>
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6">
													<p style="font-size: 13px;">Full <strong>Name</strong></p>
												</div>
												<div class="col-md-6">
													<p style="font-size: 13px; font-weight: bold; text-align: right;" id="fullname_user"></p>
													<p style="font-size: 13px; font-weight: bold; text-align: right; display: none;" id="userid_one"></p>
													<p style="font-size: 13px; font-weight: bold; text-align: right; display: none;" id="userid_two"></p>
													<p style="font-size: 13px; font-weight: bold; text-align: right; display: none;" id="usertype_"></p>
													<p style="font-size: 13px; font-weight: bold; text-align: right; display: none;" id="opstype_"></p>
												</div>
											</div>
										</div>
									</div>
									<hr style="margin-top: -7px;">
								</div>
								<div class="body" style="margin-top: -40px;">
									<div class="row">
										<div class="col-md-12">
											<select class="form-control form-control" name="team_list" id="team_list"></select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-success" onclick="saveupdatedteampoc();" id="supervisorbtn"><i class="fa fa-save"></i> SAVE</button>
				<button type="button" class="btn btn-sm btn-success" onclick="saveupdatedteamops();" id="operationsbtn"><i class="fa fa-save"></i> SAVE</button>
				<button type="button" class="btn btn-sm btn-success" onclick="saveupdatedteamsupp();" id="supportbtn"><i class="fa fa-save"></i> SAVE</button>
				<button type="button" class="btn btn-sm btn-danger" onclick="clearchangeteam();"><i class="fa fa-times-circle-o"></i> CLOSE</button>
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
													<div id="admticketstatus"></div>
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
																	$sql = "SELECT a.ticket_id, a.reference_number, a.requestor, a.ticket_status, a.date_created, a.start_date, a.end_date, b.user_id, CONCAT(b.fname, ' ', b.mname, ' ', b.lname, ' ', b.suffix) AS fullname, b.user_image FROM tbl_tickets AS a LEFT JOIN tbl_admin AS b ON a.requestor = b.user_id WHERE MONTH(a.date_created) = MONTH(NOW()) AND YEAR(a.date_created) = YEAR(NOW()) AND a.requestor = '".$_SESSION["user_id"]."'";
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