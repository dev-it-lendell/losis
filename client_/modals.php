<!-- APPLICATIONS -->
<div class="modal" id="mdlapplications" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
    				<h6 class="title">Application - VIEW</h6>
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
											<label class="d-block text-muted mb-1">Applicant ID</label>
											<p style="font-size: 13px; font-weight: bold;" id="application_id"></p>
										</div>
									</div>
									<div class="row text-center mt-2 border-bottom pb-2">
										<div class="col-md-6 border-right">
											<label class="d-block text-muted mb-1">Application Date</label>
											<p style="font-size: 13px; font-weight: bold;" id="application_date"></p>
										</div>
										<div class="col-md-6">
											<label class="d-block text-muted mb-1">Application Code</label>
											<p style="font-size: 13px; font-weight: bold;" id="application_code"></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-8 col-md-12 col-sm-12">
							<div class="card">
								<div class="header">
									<h2><strong>Application</strong> Details</h2>
								</div>
								<div class="body">
									<div class="row">
										<div class="col-md-12">
											<small class="text-muted">Application Name: </small>
												<p id="application_applname"></p>
											<hr>
											<small class="text-muted">Email Address: </small>
												<p id="application_eaddress"></p>
											<hr>
											<small class="text-muted">Mobile Number: </small>
												<p id="application_mobileno"></p>
											<hr>
											<small class="text-muted">Application Status: </small>
												<p id="application_status" style="font-weight: bold;"></p>
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

<!-- MANAGE ENDORSEMENTS -->
<div class="modal" id="mdlupgradepkg" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title">Package - UPDATE</h6>
			</div>
			<div class="modal-body">
				<div id="wrapper" class="theme-green">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="header">
									<h2><strong>Upgrade</strong> Package</h2>
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6">
													<p style="font-size: 13px;">Current <strong>Package</strong></p>
												</div>
												<div class="col-md-6">
													<p style="font-size: 13px; font-weight: bold; text-align: right;" id="packagedesc_"></p>
												</div>
											</div>
										</div>
									</div>
									<hr style="margin-top: -7px;">
								</div>
								<div class="body" style="margin-top: -40px;">
									<div class="row">
										<div class="col-md-12">
											<input type="text" id="endocode_" style="display: none;">
											<input type="text" id="pocid" style="display: none;">
											<small class="text-muted" style="font-size: 13px;">Updated package: </small>
											<textarea class="form-control" rows="3" maxlength="200" id="updatedpkg" name="updatedpkg" style="resize: none;" placeholder="Type Package Here" autocomplete="off"></textarea>
											<div id="pkg_feedback"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-info" onclick="savererunbi();" id="pkgbi" style="display: none;"><i class="fa fa-save"></i> UPDATE</button>
				<button type="button" class="btn btn-sm btn-info" onclick="savererundc();" id="pkgdc" style="display: none;"><i class="fa fa-save"></i> UPDATE</button>
				<button type="button" class="btn btn-sm btn-danger" onclick="clearpkg();"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="mdlpocreturnendo" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
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
													<p style="font-size: 13px; font-weight: bold; text-align: left; margin-top: -18px;" id="pocapplicant"></p>
												</div>
												<div class="col-md-6">
													<p style="font-size: 13px;">Assigned <strong>Supervisor</strong></p>
													<p style="font-size: 13px; font-weight: bold; text-align: left; margin-top: -18px;" id="pocsupervisor"></p>
												</div>
											</div>
										</div>
									</div>
									<hr style="margin-top: -7px;">
								</div>
								<div class="body" style="margin-top: -40px;">
									<div class="row">
										<div class="col-md-12">
											<input type="text" id="pocendocode" style="display: none;">
											<input type="text" id="poccode" style="display: none;">
											<small class="text-muted" style="font-size: 13px;">Endorsement remarks: </small>
											<textarea class="form-control" rows="3" maxlength="200" id="returnendopoc" name="returnendobipoc" style="resize: none;" placeholder="Type Remarks Here" autocomplete="off"></textarea>
											<div id="retnedo_feedback"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-info" onclick="savereturnpocbi();" id="returnbi" style="display: none;"><i class="fa fa-undo"></i> RETURN</button>
				<button type="button" class="btn btn-sm btn-info" onclick="savereturnpocdc();" id="returndc" style="display: none;"><i class="fa fa-undo"></i> RETURN</button>
				<button type="button" class="btn btn-sm btn-danger" onclick="clearpocreturnendo();"><i class="fa fa-times-circle-o"></i> CLOSE</button>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="mdlviewendo" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
		<div class="modal-content"> 
			<div class="modal-header">
				<h6 class="title" id="bititle" style="display: none;">Background Investigation - VIEW</h6>
				<h6 class="title" id="dctitle" style="display: none;">Database Check - VIEW</h6>
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
											<p style="font-size: 13px; font-weight: bold;" id="endorsement_name"></p>
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

<div id="myModal1" class="modal hide" tabindex="-1" role="dialog">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3>User Agreement</h3>
    </div>
    <div class="modal-body">

      <div id="agreement" style="height:1000px;">
        A very long agreement
      </div>

    </div>
    <div class="modal-footer">
      <button id="closeBtn" class="btn btn-primary" data-dismiss="modal" aria-hidden="true" disabled>I Accept</button>
    </div>
 </div>
