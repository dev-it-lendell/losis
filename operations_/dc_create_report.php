<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, a.fname, a.mname, a.lname, a.suffix, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.endo_code, b.assigned_by, b.assigned_da, b.assigned_to, b.is_distributed, b.is_returned, c.client_id, c.client_name, c.acronym_, c.site_, d.user_id, CONCAT(d.user_id) AS clientuserid, CONCAT(d.fname, ' ', d.mname,  ' ', d.lname, ' ', d.suffix) AS clientname, d.site_id, d.company_name, e.user_id, CONCAT(e.user_id) AS supervisorid, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.user_id, CONCAT(f.fname, ' ', f.mname, ' ', f.lname, ' ', f.suffix) AS operationsname FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_analyst AS b ON a.endo_code = b.endo_code LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_client AS d ON a.client_id = d.user_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_operations AS f ON b.assigned_by = f.user_id WHERE a.endo_code = '".$_GET["endoCode"]."'";
    $query = $conn->query($sql);
    while($row = mysqli_fetch_array($query)) { 
        extract($row);
        $endo_id = $row['endo_id'];
        $endo_desc = $row['endo_desc'];
        $endoCode = $row['endo_code'];
        $applicantname = $row['applicantname'];
        $company_name = $row["company_name"].' - '.$row["site_"];
        $turn_around_date = $row['turn_around_date'];
        $newTurnAroundDate = date("F j, Y", strtotime($turn_around_date));
        $supervisorname = $row['supervisorname'];
        $endorsementcode = $row['endo_code'];
        $endo_id = $row['endo_id'];
        $endo_date = $row['endo_date'];
        $newDateEndo = date('F d, Y', strtotime($endo_date));
		$turnaround_date = $row['turn_around_date'];
		$newDateTurnAround = date('F d, Y', strtotime($turnaround_date));        
        $clientfullname = $row['company_name'].' - '.$row['site_'];
        $clientname = $row['clientname'];
        $endo_desc = $row['endo_desc'];
        $folder_name = $row['folder_name'];
        $applicantname = $row['applicantname'];
		$endo_services = $row['endo_services'];
		$endo_status = $row['endo_status'];
		$endorsed_by = $row['client_id'];
        $fname = $row['fname'];
        $mname = $row['mname'];
        $lname = $row['lname'];
        $suffix = $row['suffix'];
        $account = $row['account'];
        $supervisorid = $row['supervisorid'];
        $package_desc = $row['package_desc'];
        $clientuserid = $row['clientuserid'];
    } 

        $sql1 = "SELECT * FROM tbl_endo_support_dc WHERE endo_code = '".$_GET["endoCode"]."'";
        $result1 = $conn->query($sql1);
        $row1 = $result1->fetch_assoc();
        
        if($row1['cmap_results'] == '1'){
			$cmapResult = 'Positive';   
		} else {
			$cmapResult = 'Negative';
		}
            
		if($row1['ofac_results'] == '1'){
			$ofacResult = 'Positive';   
		} else {
			$ofacResult = 'Negative';
		}
            
		if($row1['oig_results'] == '1'){
			$oigResult = 'Positive';   
		} else {
			$oigResult = 'Negative';
		}
            
		if($row1['gsa_results'] == '1'){
			$gsaResult = 'Positive';   
		} else {
			$gsaResult = 'Negative';
		}   
?>

<div id="wrapper" class="theme-green">
	<div id="main-content">
		<div class="container-fluid">
			<div class="block-header">
				<div class="row">
					<div class="col-lg-8 col-md-6 col-sm-12">
						<h2>Send Report</h2>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
							<li class="breadcrumb-item">Endorsements</li>
							<li class="breadcrumb-item">Database Check</li>
							<li class="breadcrumb-item active">Send Report</li>
						</ul>	
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12">
					<div class="card planned_task">
						<div class="row">
							<div class="col-md-12">
								<button type="button" class="btn btn-danger" style="float: right; margin-right: 25px; margin-top: 15px;" onclick="back_endorsements_dc_da(); saveendorsementdcanalyst();"><i class="fa fa-arrow-left"></i> Back</button>
							</div>
						</div>
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
											<h4 class="media-heading">For Sending of Report</h4>
												Checking and validation of report
										</div>
									</div>
								</div>
							</div>
						</div>
						<form class="form" method="POST" enctype="multipart/form-data" action="functions/save_report_dc.php">
							<div class="body">
								<div id="wrapper" class="theme-green">
									<div class="row clearfix">
										<div class="col-lg-5 col-md-12 col-sm-12">
											<div class="card member-card">
												<div class="pw_img" style="margin-top: 70px;">
													<img class="img-fluid" src="../images/backgrounds/bg-5.png" alt="About the image">
												</div>
												<div class="member-img">
													<a href="javascript:void(0);"><img src="../images/icons/endorsement.png" class="rounded-circle"alt="profile-image"></a>
												</div>
												<div class="body">
													<div class="row text-center mt-2 border-bottom pb-2">
														<div class="col-md-12">
															<label class="d-block text-muted mb-1" style="font-size: 14px;">Applicant Name</label>
															<p id="biendorsement_name" style="font-size: 13px; font-weight: bold;"><?php echo $applicantname; ?></php6>
														</div>
													</div>
													<div class="row text-center mt-2 border-bottom pb-2">
														<div class="col-md-6 border-right">
															<label class="d-block text-muted mb-1">Endorsement Date</label>
															<p style="font-size: 13px; font-weight: bold;" id="biendorsement_date"><?php echo $newDateEndo; ?></p>
														</div>
														<div class="col-md-6">
															<label class="d-block text-muted mb-1">Endorsement Code</label>
															<p style="font-size: 13px; font-weight: bold;" id="biendorsement_code"><?php echo $endorsementcode; ?></p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-7 col-md-12 col-sm-12">
											<div class="card">
												<div class="header">
													<h2><strong>Endorsement</strong> Details</h2>
												</div>
												<div class="body">
													<div class="row">
														<div class="col-md-12">
															<input type="hidden" class="form-control"  id="endocode" name="endocode" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $endorsementcode; ?>">
															<input type="hidden" class="form-control"  id="endoid" name="endoid" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $endo_id; ?>">
															<input type="hidden" class="form-control"  id="endodate" name="endodate" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $endo_date; ?>">
															<input type="hidden" class="form-control"  id="turnarounddate" name="turnarounddate" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $turn_around_date; ?>">
															<input type="hidden" class="form-control"  id="endodesc" name="endodesc" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $endo_desc; ?>">
															<input type="hidden" class="form-control"  id="endoservices" name="endoservices" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="DC">
															<input type="hidden" class="form-control"  id="endorsedby" name="endorsedby" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $endorsed_by; ?>">
															<input type="hidden" class="form-control"  id="fname" name="fname" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $fname; ?>">
															<input type="hidden" class="form-control"  id="mname" name="mname" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $mname; ?>">
															<input type="hidden" class="form-control"  id="lname" name="lname" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $lname; ?>">
															<input type="hidden" class="form-control"  id="suffix" name="suffix" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $suffix; ?>">
															<input type="hidden" class="form-control"  id="account" name="account" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $account; ?>">
															<input type="hidden" class="form-control"  id="endorsedto" name="endorsedto" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $supervisorid; ?>">
															<input type="hidden" class="form-control"  id="packagetype" name="packagetype" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $package_desc; ?>">
															<input type="hidden" class="form-control"  id="birthdate" name="birthdate" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $birthdate; ?>">
															<input type="hidden" class="form-control"  id="clientuserid" name="clientuserid" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $clientuserid; ?>">
															<div class="row">
																<div class="col-md-6">
																	<small class="text-muted">Batch ID: </small>
																		<p><?php echo $endo_desc; ?></p>
																	<hr>
																</div>
																<div class="col-md-6">
																	<small class="text-muted">Turn Around Date: </small>
																		<p><?php echo $newDateTurnAround; ?></p>
																	<hr>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-6">
																	<small class="text-muted">Endorsement Requestor: </small>
																		<p><?php echo $clientname; ?></p>
																	<hr>
																</div>
																<div class="col-md-6">
																	<small class="text-muted">Assigned Supervisor: </small>
																		<p><?php echo $supervisorname; ?></p>
																	<hr>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<small class="text-muted">Company Name - Client Code: </small>
																<p><?php echo $clientfullname; ?></p>
															<hr>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row clearfix">
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="card">
												<div class="header">
													<h2><strong>Support</strong> Verification Result</h2>
												</div>
												<div class="body">
	                                                <?php if($row1['cmap_'] == '1'){?>
													<small class="text-muted">CMAP Result: </small>
														<p><?php echo $cmapResult; ?></p>
													<hr>
	            									<?php }
	            									if($row1['ofac_'] == '1'){ ?>
													<small class="text-muted">OFAC Result: </small>
														<p><?php echo $ofacResult; ?></p>
													<hr>
	            									<?php } ?>
	            									<?php if($row1['oig_'] == '1'){?>
													<small class="text-muted">OIG Result: </small>
														<p><?php echo $oigResult; ?></p>
													<hr>
	            									<?php } ?>
	            									<?php if($row1['gsa_'] == '1'){?>
													<small class="text-muted">GSA Result: </small>
														<p><?php echo $gsaResult; ?></p>
													<hr>
	            									<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="card">
												<div class="header">
													<h2><strong>Verification</strong> Details</h2>
												</div>
												<div class="body">
													<div class="row">
														<div class="col-md-12">
															<small class="text-muted">Verification Status: </small>
															<select class="form-control input-group-sm" id="verification_status" name="verification_status" style="float: left;">
																<option value="#">-- Select --</option>
																<option value="0">Complete</option>
																<option value="1">Closed</option>
																<option value="2">N/A</option>
																<option value="3">Pending</option>
					                                        </select>
														</div>
													</div>
					                                <hr>
													<div class="row">
														<div class="col-md-12">
															<small class="text-muted">Verification Code: </small>
															<select class="form-control input-group-sm" id="verification_code" name="verification_code" style="float: left;" onchange="EnableDisableTextBox()">
																<option value="selectcode">-- Select --</option>
																<option value="0">Clear</option>
																<option value="1">For Review</option>
																<option value="2">Failed</option>
				                                        	</select>
														</div>
													</div>
					                                <hr>
					                                <div class="row">
					                                	<div class="col-md-12">
															<small class="text-muted">Verification Remarks: </small>
																<textarea class="form-control" rows="3" id="endo_remarks" name="endo_remarks" style="resize: none;" placeholder="Type Remarks Here"></textarea>
					                                	</div>
					                                </div>
					                                <hr>	
												</div>
											</div>
										</div>
									</div>
						           	<button type="submit" class="btn btn-outline-success" name="sendreportdc_poc"><i class="fa fa-check-circle-o"></i> Submit</button>
						            <button type="submit" class="btn btn-outline-secondary"><i class="fa fa-eraser"></i> Clear</button> 
								</div>
							</div>
						</form>
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