<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

	$sql1 = "SELECT a.id, a.endo_id, a.package_desc, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, CONCAT(a.client_id) AS clientuserid, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.client_id, b.client_name, b.acronym_, b.site_ FROM tbl_endo AS a LEFT JOIN client_list AS b ON a.site_id = b.client_id WHERE endo_code ='".$_GET["endoCode"]."'"; 
    $query = $conn->query($sql1);
    while ($row = mysqli_fetch_array($query)) {
        extract($row);
        $endoCode = $row['endo_code'];
        $applicantname = $row['applicantname'];
        $client_name = $row['client_name'];
        $endorsed_to = $row['endorsed_to'];
        $clientuserid = $row['clientuserid'];
        $package_desc = $row['package_desc'];
    }
?> 


<div id="wrapper" class="theme-green">
	<div id="main-content">
		<div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Add Report</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Endorsements</li>
                            <li class="breadcrumb-item active">Add Report</li>
                        </ul>   
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-outline-danger" style="float: right; margin-right: 25px; margin-top: 15px;" onclick="back_endorsements_bi_tele(); saveendorsementbitele();"><i class="fa fa-arrow-left"></i> Back</button>
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
	                                            <h4 class="media-heading">Creating of Report</h4>
	                                                Please fill up the necessary fields below
	                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="body" style="margin-top: -40px;">
								<form class="form" method="POST" enctype="multipart/form-data" action="functions/save_bi_report_options.php">
									<div class="row">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<small class="text-muted">Applicant Name: </small>
																<p style="font-weight: bold;"><?php echo $applicantname; ?></p>
															<hr>
														</div>
														<div class="col-md-4">
															<small class="text-muted">Endorsement Code: </small>
																<p style="font-weight: bold;" id="selectedendocode"><?php echo $endoCode; ?></p>
																<input type="hidden" id="endocode_" name="endocode_" value="<?php echo $endoCode; ?>">
																<input type="hidden" id="poccode_" name="poccode_" value="<?php echo $endorsed_to; ?>">
																<input type="hidden" id="clientcode_" name="clientcode_" value="<?php echo $clientuserid; ?>">
															<hr>
														</div>
														<div class="col-md-4">
															<small class="text-muted">Analyst: </small>
															<select class="form-control input-group-sm" id="selected_analyst" name="selected_analyst" style="float: left;" required>
																<?php
																	$sql = "SELECT a.user_id, a.fname, a.lname, CONCAT(a.fname, ' ' ,a.lname) AS operations_name, a.user_image, a.assigned_team_one, a.assigned_team_two, b.operations_id, CONCAT(b.fname, ' ' , b.lname) AS analyst_name, b.operations_type, c.team_no, c.team_name, d.user_id, d.userstatus_ FROM tbl_operations AS a LEFT JOIN operations_list AS b ON CONCAT(a.fname, ' ' , a.mname,  ' ' , a.lname,  ' ', a.suffix) = CONCAT(b.fname, ' ' , b.mname,  ' ' , b.lname,  ' ', b.suffix) LEFT JOIN team_list AS c ON b.team_one = c.team_no LEFT JOIN tbl_users AS d ON a.user_id = d.user_id WHERE a.assigned_team_one = '$team_one' AND b.operations_type = '2' UNION ALL SELECT a.user_id, a.fname, a.lname, CONCAT(a.fname, ' ' ,a.lname) AS operations_name, a.user_image, a.assigned_team_one, a.assigned_team_two, b.operations_id, CONCAT(b.fname, ' ' , b.lname) AS analyst_name, b.operations_type, c.team_no, c.team_name, d.user_id, d.userstatus_ FROM tbl_operations AS a LEFT JOIN operations_list AS b ON CONCAT(a.fname, ' ' , a.mname,  ' ' , a.lname,  ' ', a.suffix) = CONCAT(b.fname, ' ' , b.mname,  ' ' , b.lname,  ' ', b.suffix) LEFT JOIN team_list AS c ON b.team_one = c.team_no LEFT JOIN tbl_users AS d ON a.user_id = d.user_id WHERE a.assigned_team_two = '$team_one' AND b.operations_type = '2' ORDER BY lname ASC";
																	?> <option> -- Select Analyst -- </option>; <?php
																	$res = $conn->query($sql);
																	while ($row = mysqli_fetch_array($res)) {
		                                                                ?>
																		<option value ="<?php echo $row['user_id'];?>"><?php echo $row['analyst_name'];?> </option>
		                                                                <?php
																	}
		                                                        ?>
					                                        </select>
															<hr>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<h6><strong>Please</strong> select from the following for: <strong><?php echo $package_desc; ?></strong></h6>
													<div class="row">
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-6">
																	<label class="fancy-checkbox element-left">
																		<input type="checkbox" id="chkAll" name="chkAll" value="1">
																		<span>Check All</span>
																	</label>
																</div>
																<div class="col-md-6">
																	<button type="submit" class="btn btn-outline-success" name="savebioptions" style="float: right; margin-top: -8px;"><i class="fa fa-check-circle-o"></i> Save</button>
																</div>
															</div>
														</div>
													</div>
													<hr style="margin-top: 5px;">
													<div class="row">
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-4">
																	<div class="fancy-checkbox">
																		<label><input type="checkbox" id="personal_bg" name="personal_bg" class="selectallops" value="1"><span>Personal Background</span></label>
																	</div>
																	<div class="fancy-checkbox">
																		<label><input type="checkbox" id="academic" name="academic" class="selectallops" value="1"><span>Academic</span></label>
																	</div>
																	<div class="fancy-checkbox">
																		<label><input type="checkbox" id="emp_hist" name="emp_hist" class="selectallops" value="1"><span>Employment History</span></label>
																	</div>
																	<div class="fancy-checkbox">
																		<label><input type="checkbox" id="char_ref" name="char_ref" class="selectallops" value="1"><span>Character References</span></label>
																	</div>
																	<div class="fancy-checkbox">
																		<label><input type="checkbox" id="idty_sss" name="idty_sss" class="selectallops" value="1"><span>Identity Check (SSS)</span></label>
																	</div>
																</div>
																<div class="col-md-4">
																	<div class="fancy-checkbox">
																		<label><input type="checkbox" id="idty_bir" name="idty_bir" class="selectallops" value="1"><span>Identity Check (BIR)</span></label>
																	</div>
																	<div class="fancy-checkbox">
																		<label><input type="checkbox" id="cc_nbi" name="cc_nbi" class="selectallops" value="1"><span>Criminal Check (NBI)</span></label>
																	</div>
																	<div class="fancy-checkbox">
																		<label><input type="checkbox" id="cc_lcc" name="cc_lcc" class="selectallops" value="1"><span>Criminal Check (LCC)</span></label>
																	</div>
																	<div class="fancy-checkbox">
																		<label><input type="checkbox" id="cr_cmap" name="cr_cmap" class="selectallops" value="1"><span>Credit Check (CMAP)</span></label>
																	</div>
																	<div class="fancy-checkbox">
																		<label><input type="checkbox" id="int_gdc" name="int_gdc" class="selectallops" value="1"><span>International Check (GDC)</span></label>
																	</div>
																</div>
																<div class="col-md-4">
																	<div class="fancy-checkbox">
																		<label><input type="checkbox" id="brgy_chk" name="brgy_chk" class="selectallops" value="1"><span>Barangay Check</span></label>
																	</div>
																	<div class="fancy-checkbox">
																		<label><input type="checkbox" id="nhood_ref" name="nhood_ref" class="selectallops" value="1"><span>Neighborhood References</span></label>
																	</div>
																	<div class="fancy-checkbox">
																		<label><input type="checkbox" id="pr_aff" name="pr_aff" class="selectallops" value="1"><span>Political/Religious Affiliations</span></label>
																	</div>
																	<div class="fancy-checkbox">
																		<label><input type="checkbox" id="ls_chk" name="ls_chk" class="selectallops" value="1"><span>Lifestyle Check</span></label>
																	</div>
																	<div class="fancy-checkbox">
																		<label><input type="checkbox" id="fin_rev" name="fin_rev" class="selectallops" value="1"><span>Financial Review</span></label>
																	</div>
																</div>
															</div>
							                                <hr>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
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