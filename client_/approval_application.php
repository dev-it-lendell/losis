<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    $sql = "SELECT a.application_code, a.client_id, a.endo_type, a.application_status, a.application_datetime, b.application_code, b.fname_, b.mname_, b.lname_, b.suffix_, CONCAT(b.fname_, ' ', b.mname_,  ' ', b.lname_, ' ', b.suffix_) AS applicantname, b.birthdate_ FROM application_list AS a LEFT JOIN application_personal_info AS b ON a.application_code = b.application_code WHERE a.application_code = '".$_GET["appCode"]."'";
    $query = $conn->query($sql);
    while ($row = mysqli_fetch_array($query)) {
        $application_code = $row['application_code'];
        $application_status = $row['application_status'];   
        $application_datetime = $row['application_datetime']; 
        $newDateTimeApplication = date('F d, Y - h:i A', strtotime($application_datetime));  
        $applicantname = $row['applicantname'];
        $fname_ = $row['fname_'];
        $mname_ = $row['mname_'];
        $lname_ = $row['lname_'];
        $suffix_ = $row['suffix_'];
        $birthdate_ = $row['birthdate_'];
        $newBirthDate = date('F d, Y', strtotime($birthdate_));

        // STATUS //
        if ($row['application_status'] == '0') {
            $applicationstatus = '<span class="badge badge-warning" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Application Status">Pending</span>';
        } else if ($row['application_status'] == '1') {
            $applicationstatus = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Application Status">Approved</span>';
        } else {
            $applicationstatus = "";
        }
    }
?>

<div id="wrapper" class="theme-green">
	<div id="main-content">
		<div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <h2>Approval of Application</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Manage Applications</li>
                            <li class="breadcrumb-item active">Approval of Application</li>
                        </ul>   
                    </div>
                </div>
            </div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12">
					<div class="card planned_task">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-outline-danger" style="float: right; margin-right: 25px; margin-top: 15px;" onclick="back_manageappl(); savemanageappl();"><i class="fa fa-arrow-left"></i> Back</button>
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
											<h4 class="media-heading">Approval of Application</h4>
												Please check the information first before approving.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="body">
							<form class="form" method="POST" enctype="multipart/form-data" action="functions/save_appl_endorsement.php">
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-4"></div>
											<div class="col-md-4">
												<div class="profile-image" style="text-align: center; margin-top: -20px; margin-bottom: 20px;"> <img src="../images/icons/application.png" class="rounded-circle" alt="" style="height: 150px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> </div>
											</div>
											<div class="col-md-4"></div>
										</div>
									</div>
								</div>
                                <hr>
								<div class="row">
									<div class="col-md-12">
										<p class="float-md-right">
											<?php echo $applicationstatus; ?>
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-6">
												<small class="text-muted">Application Code: </small>
													<p><?php echo $application_code; ?></p>
													<input type="text" id="biappl_code" name="biappl_code" style="display: none;" value="<?php echo $application_code; ?>">
												<hr>
												<small class="text-muted">Application Name: </small>
													<p><?php echo $applicantname; ?></p>
													<input type="text" id="biappl_name" name="biappl_name" style="display: none;" value="<?php echo $applicantname; ?>">
													<input type="text" id="biappl_fname" name="biappl_fname" style="display: none;" value="<?php echo $fname_; ?>">
													<input type="text" id="biappl_mname" name="biappl_mname" style="display: none;" value="<?php echo $mname_; ?>">
													<input type="text" id="biappl_lname" name="biappl_lname" style="display: none;" value="<?php echo $lname_; ?>">
													<input type="text" id="biappl_suffix" name="biappl_suffix" style="display: none;" value="<?php echo $suffix_; ?>">
												<hr>
											</div>
											<div class="col-md-6">
												<small class="text-muted">Date of Birth: </small>
													<p><?php echo $newBirthDate; ?></p>
													<input type="text" id="biappl_dob" name="biappl_dob" style="display: none;" value="<?php echo $birthdate_; ?>">
												<hr>
												<small class="text-muted">Application Date and Time: </small>
													<p><?php echo $newDateTimeApplication; ?></p>
													<input type="text" id="biappl_datetime" name="biappl_datetime" style="display: none;" value="<?php echo $newDateTimeApplication; ?>">
												<hr>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<p style="font-size: 20px; font-weight: bold; text-align: center;">Endorsement Information</p>
										<hr>
										<div class="row">
											<div class="col-md-6">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text"><i class="fa fa-file-text-o text-dark"></i></span>
													</div>
													<select class="form-control form-control" name="app_endotype" id="app_endotype" onchange="showapplendo();">
														<option value="">-- Endorsement Type --</option>
														<option value ="0">Background Investigation</option>
														<option value ="1">Database Check</option>
													</select>
												</div>
												<div class="row" id="endo_imp" style="display: none;">
													<div class="col-md-12">
														<div class="input-group mb-3">
															<div class="input-group-prepend">
																<span class="input-group-text"><i class="fa fa-exclamation-triangle text-dark"></i></span>
															</div>
															<select class="form-control form-control" name="app_imp" id="app_imp">
																<option value="0">-- Importance --</option>
																<option value ="1">High Importance</option>
																<option value ="2">Low Importance</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row" id="endobi_approval" style="display: none;">
													<div class="col-md-12">
														<div class="input-group mb-3">
															<div class="input-group-prepend">
																<span class="input-group-text"><i class="fa fa-exclamation-triangle text-dark"></i></span>
															</div>
															<select class="form-control form-control" name="appbi_approval" id="appbi_approval" onchange="showbiapplendo();">
																<option value="0">-- Status --</option>
																<option value ="1">Approved</option>
																<option value ="2">Disapproved</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row" id="endodc_approval" style="display: none;">
													<div class="col-md-12">
														<div class="input-group mb-3">
															<div class="input-group-prepend">
																<span class="input-group-text"><i class="fa fa-exclamation-triangle text-dark"></i></span>
															</div>
															<select class="form-control form-control" name="appdc_approval" id="appdc_approval" onchange="showdcapplendo();">
																<option value="0">-- Status --</option>
																<option value ="1">Approved</option>
																<option value ="2">Disapproved</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row" id="endo_account" style="display: none;">
													<div class="col-md-12">
														<div class="input-group mb-3">
															<div class="input-group-prepend">
																<span class="input-group-text"><i class="fa fa-suitcase text-dark"></i></span>
															</div>
															<input type="text" class="form-control" id="app_account" name="app_account" autocomplete="off" placeholder="Account">
														</div>
													</div>	
												</div>												
											</div>
											<div class="col-md-6">
											<?php 
												$Date = $now->format('Y-m-d');
												$bicountdays = 10;
												$holidays = array('2023-01-01', '2023-04-06', '2023-04-07', '2023-04-10', '2023-05-01', '2023-06-12', '2023-08-28', '2023-11-27', '2023-12-25', '2023-12-30', '2023-02-25', '2023-04-08', '2023-08-21', '2023-11-01', '2023-12-08', '2023-12-31', '2023-01-02', '2023-11-02');

												$d = new DateTime($Date);
												$t = $d->getTimestamp();

												// loop for X days
												for($i=0; $i<$bicountdays; $i++){

													// add 1 day to timestamp
													$addDay = 86400;

													// get what day it is next day
													$nextDay = date('w', ($t+$addDay));
													$newDate = date('Y-m-d', ($t+$addDay));

													if (in_array($newDate, $holidays)) {
														$i--;
													}

													// if it's Saturday or Sunday get $i-1
													if($nextDay == 0 || $nextDay == 6) {
														$i--;
													}

													// modify timestamp, add 1 day
													$t = $t+$addDay;
												}
													$d->setTimestamp($t);
													$currentdate =  $d->format( 'Y-m-d' );
													$currentformatdate =  $d->format( 'F d, Y' );
												?>
												<div class="row" id="bitadate" style="display: none;">
													<div class="col-md-12">
														<div class="input-group mb-3">
															<div class="input-group-prepend">
																<span class="input-group-text"><i class="fa fa-calendar-o text-dark"></i></span>
															</div>
					                                   		<input placeholder="Turn Around Date" class="form-control" type="text" name="app_format_tadate" style="background-color: #fff; cursor: pointer;" readonly value="<?php echo $currentformatdate; ?>" data-toggle="tooltip" data-placement="top" title="Turn Around Date"> 
															<input placeholder="Turn Around Date" class="form-control" type="text" id="app_tadate" name="app_tadate" style="background-color: #fff; cursor: pointer; display: none;" readonly value="<?php echo $currentdate; ?>" data-toggle="tooltip" data-placement="top" title="Turn Around Date"> 
														</div>
													</div>
												</div>
											<?php 
												$Date = $now->format('Y-m-d');
												$dccountdays = 2;
												$holidays = array('2023-01-01', '2023-04-06', '2023-04-07', '2023-04-10', '2023-05-01', '2023-06-12', '2023-08-28', '2023-11-27', '2023-12-25', '2023-12-30', '2023-02-25', '2023-04-08', '2023-08-21', '2023-11-01', '2023-12-08', '2023-12-31', '2023-01-02', '2023-11-02');

												$d = new DateTime($Date);
												$t = $d->getTimestamp();

												// loop for X days
												for($i=0; $i<$dccountdays; $i++){

													// add 1 day to timestamp
													$addDay = 86400;

													// get what day it is next day
													$nextDay = date('w', ($t+$addDay));
													$newDate = date('Y-m-d', ($t+$addDay));

													if (in_array($newDate, $holidays)) {
														$i--;
													}

													// if it's Saturday or Sunday get $i-1
													if($nextDay == 0 || $nextDay == 6) {
														$i--;
													}

													// modify timestamp, add 1 day
													$t = $t+$addDay;
												}
													$d->setTimestamp($t);
													$currentdate =  $d->format( 'Y-m-d' );
													$currentformatdate =  $d->format( 'F d, Y' );
												?>
												<div class="row" id="dctadate" style="display: none;">
													<div class="col-md-12">
														<div class="input-group mb-3">
															<div class="input-group-prepend">
																<span class="input-group-text"><i class="fa fa-calendar-o text-dark"></i></span>
															</div>
					                                   		<input placeholder="Turn Around Date" class="form-control" type="text" name="app_format_tadate" style="background-color: #fff; cursor: pointer;" readonly value="<?php echo $currentformatdate; ?>" data-toggle="tooltip" data-placement="top" title="Turn Around Date"> 
															<input placeholder="Turn Around Date" class="form-control" type="text" id="app_tadate" name="app_tadate" style="background-color: #fff; cursor: pointer; display: none;" readonly value="<?php echo $currentdate; ?>" data-toggle="tooltip" data-placement="top" title="Turn Around Date"> 
														</div>
													</div>
												</div>
												<div class="row" id="endo_batchid" style="display: none;">
													<div class="col-md-12">
														<div class="input-group mb-3">
															<div class="input-group-prepend">
																<span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
															</div>
															<input type="text" class="form-control" id="app_batchid" name="app_batchid" autocomplete="off" placeholder="Batch ID">
														</div>
													</div>
												</div>
												<div class="row" id="endo_bIid" style="display: none;">
													<div class="col-md-12">
														<div class="input-group mb-3">
															<div class="input-group-prepend">
																<span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
															</div>
															<input type="text" class="form-control" id="app_bIid" name="app_bIid" autocomplete="off" placeholder="BI ID">
														</div>
													</div>
												</div>
                                                <div class="row" id="endo_siteslist" style="display: none;">
                                                    <div class="col-md-12">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-building-o text-dark"></i></span>
                                                            </div>
                                                            <select class="form-control form-control" name="sites" id="sites" onchange="selectionsite();"></select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="sitesinfo"></div>
											</div>
										</div>
										<div class="row" id="endo_package" style="display: none;">
											<div class="col-md-12">
												<textarea class="form-control" rows="5" maxlength="200" id="app_package" name="app_package" style="resize: none;" autocomplete="off" placeholder="Package"></textarea>
												<div id="package_feedback"></div>	
											</div>
										</div>
										<br>
									</div>
								</div>
								<div class="row" id="biapproval" style="display: none;">
	                                <button type="submit" class="btn btn-outline-success" id="approvebiAppl" name="approvebiAppl"><i class="fa fa-check-circle-o"></i> Approve</button>
	                                <button type="button" class="btn btn-outline-secondary" id="clearapproval" name="clearapproval"><i class="fa fa-eraser"></i> Clear</button>  
								</div>
								<div class="row" id="bidisapproval" style="display: none;">
	                                <button type="submit" class="btn btn-outline-danger" id="disapprovebiAppl" name="disapprovebiAppl"><i class="fa fa-times-circle-o"></i> Disapprove</button>
	                                <button type="button" class="btn btn-outline-secondary" id="clearapproval" name="clearapproval"><i class="fa fa-eraser"></i> Clear</button>  
								</div>
								<div class="row" id="dcapproval" style="display: none;">
	                                <button type="submit" class="btn btn-outline-success" id="approvedcAppl" name="approvedcAppl"><i class="fa fa-check-circle-o"></i> Approve</button>
	                                <button type="button" class="btn btn-outline-secondary" id="clearapproval" name="clearapproval"><i class="fa fa-eraser"></i> Clear</button>  
								</div>
								<div class="row" id="dcdisapproval" style="display: none;">
	                                <button type="submit" class="btn btn-outline-danger" id="disapprovedcAppl" name="disapprovedcAppl"><i class="fa fa-times-circle-o"></i> Disapprove</button>
	                                <button type="button" class="btn btn-outline-secondary" id="clearapproval" name="clearapproval"><i class="fa fa-eraser"></i> Clear</button>  
								</div>
							</form>
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