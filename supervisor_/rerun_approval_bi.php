<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    $sql1 = "SELECT a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.client_id, b.endo_code, b.current_package, b.new_package, b.approval_, b.remarks_, b.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_bi_rerun_endorsement AS b ON a.endo_code = b.endo_code WHERE b.endo_code = '".$_GET["endoCode"]."'";
    $query = $conn->query($sql1);
    while ($row = mysqli_fetch_array($query)) {
        extract($row);
        $endo_code = $row['endo_code'];
        $applicantname = $row['applicantname'];
        $current_package = $row['current_package'];
        $new_package = $row['new_package'];   
        $client_id = $row['client_id'];   
    }
?> 

<div id="wrapper" class="theme-green">
	<div id="main-content">
		<div class="container-fluid">
			<div class="block-header">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<h2>Approval of Package</h2>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Rerun Endorsement</li>
                            <li class="breadcrumb-item">Background Investigation</li>
							<li class="breadcrumb-item active">Approval of Package</li>
						</ul>	
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12">
					<div class="card planned_task">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-danger" style="float: right; margin-right: 25px; margin-top: 15px;" onclick="back_spv_rerun_bi(); savepocrerunbi();"><i class="fa fa-arrow-left"></i> Back</button>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="header">
                                <div class="card" style="height: 85px;">
                                    <div class="card-body">
                                        <div class="media mleft">
                                            <div class="media-left">
                                                <p style="font-size: 30px;">
                                                    <i class="fa fa-info-circle text-success"></i>
                                                </p>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Viewing of endorsement</h4>
                                                    Approval of endorsement package
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="body">
                            	<div class="row clearfix">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="card">
											<div class="header">
												<form class="form" method="POST" enctype="multipart/form-data" action="functions/save_approval_rerun_bi.php">
													<div class="row">
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-3">
																	<small class="text-muted">Applicant Name: </small>
																		<p style="font-weight: bold;" id="bi_applname" name="bi_applname"><?php echo $applicantname; ?></p>
																		<input type="hidden" id="clientid"  name="clientid" value="<?php echo $client_id ?>">
																		<input type="hidden" id="bi_endocode"  name="bi_endocode" value="<?php echo $endo_code ?>">
																		<input type="hidden" id="bi_currentpkg"  name="bi_currentpkg" value="<?php echo $current_package ?>">
																		<input type="hidden" id="bi_newpkg"  name="bi_newpkg" value="<?php echo $new_package ?>">
																	<hr>
																</div>
																<div class="col-md-3">
																	<small class="text-muted">Endorsement Code: </small>
																		<p style="font-weight: bold;"><?php echo $endo_code; ?></p>
																	<hr>
																</div>
																<div class="col-md-3">
																	<small class="text-muted">Current Package: </small>
																		<p style="font-weight: bold;"><?php echo $current_package; ?></p>
																	<hr>
																</div>
																<div class="col-md-3">
																	<small class="text-muted">New Package: </small>
																		<p style="font-weight: bold;"><?php echo $new_package; ?></p>
																	<hr>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-4">
																	<select class="form-control form-control" id="bi_rerunstatus" name="bi_rerunstatus">
																		<option value="">-- Select --</option>
																		<option value ="1">Approved</option>
																		<option value ="2">Denied</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<br>
													<div class="row">
														<div class="col-md-12">
															<label class="d-block text-muted mb-1">Approval Remarks:</label>
															<div class="form-group">
																<textarea rows="4" class="form-control no-resize" placeholder="Type Remarks Here" id="bi_rerunremarks" name="bi_rerunremarks" style="resize: none;"></textarea>
															</div>
														</div>
													</div>
													<br>
						                            <button type="submit" class="btn btn-outline-success" name="savenewpkgbi"><i class="fa fa-check-circle"></i> Update Package</button>
						                           	<button type="submit" class="btn btn-outline-secondary"><i class="fa fa-eraser"></i> Clear</button> 
												</form>
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