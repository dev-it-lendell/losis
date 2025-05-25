<?php
	include 'connect.php';
	include 'modals.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOSIS | Application Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">
    <link rel="icon" href="images/lendell/sm-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/chatapp.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify/dist/css/dropify.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="assets/vendor/sweetalert/sweetalert.css" />
    <link rel="stylesheet" href="assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/vendor/toastr/toastr.min.css">
    <link rel="stylesheet" href="assets/css/messagestyle.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/applicationForm.css">
</head>

<body data-theme="green" class="font-nunito">
	<div id="wrapper" style="margin-top: 25px" class="theme-green">
		<div id="content" style="margin-top: 25px;">
			<div class="container-fluid">
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12">
						<div class="card planned_task">
							<div class="header">
	 							<img src="images/lendell/LOGO WITH NAME_2024.jpg" style="max-width: 100%;
	 								height:80px; float: right; padding-top: 10px; padding-bottom: 20px;" alt="Lendell Logo"></img>
								<div class="card" style="height: 85px;">
									<div class="card-body">
										<div class="media">
			                                <div class="media-body">
			                                	<p style="font-size: 20px; font-weight: bold; text-align: center; padding-top: 5px;">Application Form</p>
			                                </div>
										</div>
									</div>
								</div>
							</div>
							<div class="body" style="margin-top: 20px;">
								<ul class="nav nav-tabs">
			                    	<li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#personal_info" style="font-weight: bold;"><i class="fa fa-info-circle text-dark"></i></a></li>
			                    	<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#educ_background" style="font-weight: bold;"><i class="fa fa-graduation-cap text-dark"></i></a></li>
			                    	<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#emp_history" style="font-weight: bold;"><i class="fa fa-suitcase text-dark"></i></a></li>
			                    	<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prof_char_ref" style="font-weight: bold;"><i class="fa fa-users text-dark"></i></a></li>
			                    	<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#neighb_ref" style="font-weight: bold;"><i class="fa fa-home text-dark"></i></a></li>
			                    	<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#rel_ref" style="font-weight: bold;"><i class="fa fa-child text-dark"></i></a></li>
			                    	<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sup_docs" style="font-weight: bold;"><i class="fa fa-files-o text-dark"></i></a></a></li>
								</ul>
								<form action="functions/save_application.php" method="POST" enctype="multipart/form-data" id="myForm">
									<div class="tab-content">
										<div class="tab-pane show active" id="personal_info">
											<p style="font-size: 20px; font-weight: bold; text-align: center;">Personal Information</p>
											<hr>
											<div class="row">
												<div class="col-lg-12">
												    <div class="row">
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-3">
			                                                        <div class="input-group mb-3">
			                                                            <div class="input-group-prepend">
			                                                                <span class="input-group-text"><i class="fa fa-building text-dark"></i></span>
			                                                            </div>
			                                                            <select class="form-control form-control" id="user_id" name="user_id" required>
                                                                            <?php
                                                                                $sql = "SELECT `client_id`, `site_` FROM `client_list` WHERE `acronym_` = 'MOD'";
                                                                                ?> <option value = ""> -- Select Site -- </option>; <?php
                                                                                $res = $conn->query($sql);
                                                                                while ($row = mysqli_fetch_array($res)) { ?>
                                                                                        <option value ="<?php echo $row['client_id'];?>"><?php echo $row['site_'];?> </option>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                        </select>
			                                                        </div>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-3">
			                                                        <div class="input-group mb-3">
			                                                            <div class="input-group-prepend">
			                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
			                                                            </div>
			                                                            <input type="text" class="form-control" id="app_fname" name="app_fname" autocomplete="off" placeholder="First Name" required>
			                                                            <input type="hidden" class="form-control" id="client_acronym" name="client_acronym" value="MOD">
			                                                        </div>
																</div>
																<div class="col-md-3">
			                                                        <div class="input-group mb-3">
			                                                            <div class="input-group-prepend">
			                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
			                                                            </div>
			                                                            <input type="text" class="form-control" id="app_mname" name="app_mname" autocomplete="off" placeholder="Middle Name">
			                                                        </div>
																</div>
																<div class="col-md-3">
			                                                        <div class="input-group mb-3">
			                                                            <div class="input-group-prepend">
			                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
			                                                            </div>
			                                                            <input type="text" class="form-control" id="app_lname" name="app_lname" autocomplete="off" placeholder="Last Name" required>
			                                                        </div>
																</div>
																<div class="col-md-3">
			                                                        <div class="input-group mb-3">
			                                                            <div class="input-group-prepend">
			                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
			                                                            </div>
			                                                            <input type="text" class="form-control" id="app_suffix" name="app_suffix" autocomplete="off" placeholder="Suffix">
			                                                        </div>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-6">
			                                                        <div class="input-group mb-3">
			                                                            <div class="input-group-prepend">
			                                                                <span class="input-group-text"><i class="fa fa-mobile text-dark"></i></span>
			                                                            </div>
			                                                            <input type="text" class="form-control" id="app_mobile" name="app_mobile" autocomplete="off" placeholder="Mobile Number" required>
			                                                        </div>	
																</div>
																<div class="col-md-6">
			                                                        <div class="input-group mb-3">
			                                                            <div class="input-group-prepend">
			                                                                <span class="input-group-text"><i class="fa fa-phone text-dark"></i></span>
			                                                            </div>
			                                                            <input type="text" class="form-control" id="app_landline" name="app_landline" autocomplete="off" placeholder="Landline Number">
			                                                        </div>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-4">
																	<div class="input-group mb-3">
																		<div class="input-group-prepend">
																			<span class="input-group-text"><i class="fa fa-calendar text-dark"></i></span>
																		</div>
																		<input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="yyyy-mm-dd" id="app_dateofbirth" name="app_dateofbirth" placeholder="Date of Birth" required>
																	</div>
																</div>
																<div class="col-md-4">
			                                                        <div class="input-group mb-3">
			                                                            <div class="input-group-prepend">
			                                                                <span class="input-group-text"><i class="fa fa-envelope text-dark"></i></span>
			                                                            </div>
			                                                            <input type="text" class="form-control" id="app_email" name="app_email" autocomplete="off" placeholder="Email Address" required>
			                                                        </div>
																</div>
																<div class="col-md-4">
			                                                        <div class="input-group mb-3">
			                                                            <div class="input-group-prepend">
			                                                                <span class="input-group-text"><i class="fa fa-cog text-dark"></i></span>
			                                                            </div>
			                                                            <input type="text" class="form-control" id="app_sss" name="app_sss" autocomplete="off" placeholder="SSS Number" required>
			                                                        </div>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-6">
																	<textarea class="form-control" rows="5" id="app_presentaddr" name="app_presentaddr" style="resize: none;" autocomplete="off" maxlength="200" placeholder="Present Address" required></textarea>
                                                    				<div id="presentaddr_feedback"></div>
																</div>
																<div class="col-md-6">
	                                                        		<textarea class="form-control" rows="5" id="app_permanentaddr" name="app_permanentaddr" style="resize: none;" autocomplete="off" maxlength="200" placeholder="Permanent Address"></textarea>
                                                    				<div id="permanentaddr_feedback"></div>
																</div>
															</div>
														</div>
													</div>
	                                                <div class="row">
	                                                    <div class="col-md-12">
	                                                        <div class="row">
	                                                            <div class="col-md-6"></div>
	                                                            <div class="col-md-6" style="margin-top: 7px;">
	                                                                <label class="fancy-checkbox element-left">
	                                                                    <input type="checkbox" id="same_addr">
	                                                                    <span>Same with Present Address?</span>
	                                                                </label>
	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                </div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="educ_background">
											<p style="font-size: 20px; font-weight: bold; text-align: center;">Educational Background</p>
											<hr>
											<div class="row">
												<div class="col-lg-12">
													<div class="row">
														<div class="col-lg-4">
															<div class="row">
																<div class="col-md-12">
																	<p style="font-size: 15px; font-weight: bold; text-align: center;">College</p>
																	<hr>
																	<div class="row">
																		<div class="col-md-12">
					                                                        <div class="input-group mb-3">
					                                                            <div class="input-group-prepend">
					                                                                <span class="input-group-text"><i class="fa fa-university text-dark"></i></span>
					                                                            </div>
					                                                            <input type="text" class="form-control" id="appr_college_school" name="appr_college_school" autocomplete="off" placeholder="School/University">
					                                                        </div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-12">
					                                                        <div class="input-group mb-3">
					                                                            <div class="input-group-prepend">
					                                                                <span class="input-group-text"><i class="fa fa-graduation-cap text-dark"></i></span>
					                                                            </div>
					                                                            <input type="text" class="form-control" id="appr_college_degr" name="appr_college_degr" autocomplete="off" placeholder="Degree">
					                                                        </div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-12">
																			<div class="input-group mb-3">
																				<div class="input-group-prepend">
																					<span class="input-group-text"><i class="fa fa-calendar text-dark"></i></span>
																				</div>
																				<input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="yyyy-mm-dd" id="appr_college_dategrad" name="appr_college_dategrad" placeholder="Date Graduated"> 
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-12">
	                                                        				<textarea class="form-control" rows="5" id="appr_college_addr" name="appr_college_addr" style="resize: none;" autocomplete="off" maxlength="200" placeholder="School Address"></textarea>
                                                    						<div id="collegeaddr_feedback"></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-4">
															<div class="row">
																<div class="col-md-12">
																	<p style="font-size: 15px; font-weight: bold; text-align: center;">High School</p>
																	<hr>
																	<div class="row">
																		<div class="col-md-12">
					                                                        <div class="input-group mb-3">
					                                                            <div class="input-group-prepend">
					                                                                <span class="input-group-text"><i class="fa fa-university text-dark"></i></span>
					                                                            </div>
					                                                            <input type="text" class="form-control" id="appr_hs_school" name="appr_hs_school" autocomplete="off" placeholder="School/University">
					                                                        </div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-12">
					                                                        <div class="input-group mb-3">
					                                                            <div class="input-group-prepend">
					                                                                <span class="input-group-text"><i class="fa fa-calendar text-dark"></i></span>
					                                                            </div>
					                                                            <input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="yyyy-mm-dd" id="appr_hs_dategrad" name="appr_hs_dategrad" placeholder="Date Graduated"> 
					                                                        </div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-12">
	                                                        				<textarea class="form-control" rows="5" id="appr_hs_addr" name="appr_hs_addr" style="resize: none;" autocomplete="off" maxlength="200" placeholder="School Address"></textarea>
                                                    						<div id="hsaddr_feedback"></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-4">
															<div class="row">
																<div class="col-md-12">
																	<p style="font-size: 15px; font-weight: bold; text-align: center;">Elementary</p>
																	<hr>
																	<div class="row">
																		<div class="col-md-12">
					                                                        <div class="input-group mb-3">
					                                                            <div class="input-group-prepend">
					                                                                <span class="input-group-text"><i class="fa fa-university text-dark"></i></span>
					                                                            </div>
					                                                            <input type="text" class="form-control" id="appr_elem_school" name="appr_elem_school" autocomplete="off" placeholder="School/University">
					                                                        </div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-12">
					                                                        <div class="input-group mb-3">
					                                                            <div class="input-group-prepend">
					                                                                <span class="input-group-text"><i class="fa fa-calendar text-dark"></i></span>
					                                                            </div>
					                                                            <input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="yyyy-mm-dd" id="appr_elem_dategrad" name="appr_elem_dategrad" placeholder="Date Graduated">
					                                                        </div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-12">
	                                                        				<textarea class="form-control" rows="5" id="appr_elem_addr" name="appr_elem_addr" style="resize: none;" autocomplete="off" maxlength="200" placeholder="School Address"></textarea>
                                                    						<div id="elemaddr_feedback"></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<br>
													<div class="row">
														<div class="col-lg-6">
															<div class="row">
																<div class="col-md-12">
																	<p style="font-size: 15px; font-weight: bold; text-align: center;">Vocational</p>
																	<hr>
																	<div class="row">
																		<div class="col-md-12">
					                                                        <div class="input-group mb-3">
					                                                            <div class="input-group-prepend">
					                                                                <span class="input-group-text"><i class="fa fa-university text-dark"></i></span>
					                                                            </div>
					                                                            <input type="text" class="form-control" id="appr_voc_school" name="appr_voc_school" autocomplete="off" placeholder="School/University">
					                                                        </div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-12">
					                                                        <div class="input-group mb-3">
					                                                            <div class="input-group-prepend">
					                                                                <span class="input-group-text"><i class="fa fa-graduation-cap text-dark"></i></span>
					                                                            </div>
					                                                            <input type="text" class="form-control" id="appr_voc_degr" name="appr_voc_degr" autocomplete="off" placeholder="Degree">
					                                                        </div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-12">
					                                                        <div class="input-group mb-3">
					                                                            <div class="input-group-prepend">
					                                                                <span class="input-group-text"><i class="fa fa-calendar text-dark"></i></span>
					                                                            </div>
					                                                            <input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="yyyy-mm-dd" id="appr_voc_dategrad" name="appr_voc_dategrad" placeholder="Date Graduated">
					                                                        </div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-12">
	                                                        				<textarea class="form-control" rows="5" id="appr_voc_addr" name="appr_voc_addr" style="resize: none;" autocomplete="off" maxlength="200" placeholder="School Address"></textarea>
                                                    						<div id="vocaddr_feedback"></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="row">
																<div class="col-md-12">
																	<p style="font-size: 15px; font-weight: bold; text-align: center;">Others</p>
																	<hr>
																	<div class="row">
																		<div class="col-md-12">
					                                                        <div class="input-group mb-3">
					                                                            <div class="input-group-prepend">
					                                                                <span class="input-group-text"><i class="fa fa-university text-dark"></i></span>
					                                                            </div>
					                                                            <input type="text" class="form-control" id="appr_oth_school" name="appr_oth_school" autocomplete="off" placeholder="School/University">
					                                                        </div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-12">
					                                                        <div class="input-group mb-3">
					                                                            <div class="input-group-prepend">
					                                                                <span class="input-group-text"><i class="fa fa-graduation-cap text-dark"></i></span>
					                                                            </div>
					                                                            <input type="text" class="form-control" id="appr_oth_degr" name="appr_oth_degr" autocomplete="off" placeholder="Degree">
					                                                        </div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-12">
					                                                        <div class="input-group mb-3">
					                                                            <div class="input-group-prepend">
					                                                                <span class="input-group-text"><i class="fa fa-calendar text-dark"></i></span>
					                                                            </div>
					                                                            <input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="yyyy-mm-dd" id="appr_oth_dategrad" name="appr_oth_dategrad" placeholder="Date Graduated">
					                                                        </div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-12">
	                                                        				<textarea class="form-control" rows="5" id="appr_oth_addr" name="appr_oth_addr" style="resize: none;" autocomplete="off" maxlength="200" placeholder="School Address"></textarea>
                                                    						<div id="othaddr_feedback"></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="emp_history">
											<p style="font-size: 20px; font-weight: bold; text-align: center;">Employment History</p>
											<hr>
											<div class="alert alert-warning" role="alert">
												<i class="fa fa-info-circle"></i>&nbsp;&nbsp;Please input from latest to oldest employment.
											</div>
											<div class="row">
												<div class="col-lg-12">
													<div class="row">
														<div class="col-md-12">
															<button type="button" class="btn btn-sm btn-outline-dark" style="float: right; margin-top: 5px;" name="addrowEmployment" id="addrowEmployment"><i class="fa fa-plus-circle"></i> Add</button>
														</div>
													</div>
													<div class="shadow-sm p-3 mb-5 bg-white rounded emptab" style="margin-top: 10px;">
														<div class="row">
															<div class="col-md-12">
																<div class="row">
																	<div class="col-md-12">
																		<div class="form-group">
																			<input type="text" class="form-control empcount" id="empno" name="empno[]" value="Latest Employment" autocomplete="off" readonly style="background-color: #fff; border: none; text-align: left; font-weight: bold; pointer-events: none;">
																		</div>
																	</div>
																</div>
																<hr style="margin-top: -10px;">
															</div>
															<div class="form-group">
                                                                <p>As part of the background check process, we need to verify your employment history. You indicated your current employer on the application. We'd like to confirm your consent to allow our background check vendor to contact them.</p>
                                                    
                                                                <div class="radio-option">
                                                                    <label class="fancy-radio">
                                                                        <input type="radio" name="contact_employer" value="1" required>
                                                                        <span class="radio-label">Yes, go ahead and contact my current employer</span>
                                                                    </label>
                                                                </div>
                                                    
                                                                <div class="radio-option">
                                                                    <label class="fancy-radio">
                                                                        <input type="radio" name="contact_employer" value="0" required>
                                                                        <span class="radio-label">No, please do not contact my current employer at this time</span>
                                                                    </label>
                                                                </div>
                                                            </div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<div class="row">
																	<div class="col-md-4">
																		<div class="input-group mb-3">
																			<div class="input-group-prepend">
																				<span class="input-group-text"><i class="fa fa-building text-dark"></i></span>
																			</div>
																			<input type="text" class="form-control" id="emp_company" name="emp_company[]" autocomplete="off" placeholder="Employer" required>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="input-group mb-3">
																			<div class="input-group-prepend">
																				<span class="input-group-text"><i class="fa fa-phone text-dark"></i></span>
																			</div>
																			<input type="text" class="form-control" id="emp_contact" name="emp_contact[]" autocomplete="off" placeholder="Contact Number" required>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="input-group mb-3">
																			<div class="input-group-prepend">
																				<span class="input-group-text"><i class="fa fa-sitemap text-dark"></i></span>
																			</div>
																			<input type="text" class="form-control" id="emp_title" name="emp_title[]" autocomplete="off" placeholder="Job Title" required>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<div class="row">
																	<div class="col-md-6">
																		<div class="input-group mb-3">
																			<div class="input-group-prepend">
																				<span class="input-group-text"><i class="fa fa-calendar text-dark"></i></span>
																			</div>
																			<input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="yyyy-mm-dd" id="emp_sdate" name="emp_sdate[]" placeholder="Start Date" required>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="input-group mb-3">
																			<div class="input-group-prepend">
																				<span class="input-group-text"><i class="fa fa-calendar text-dark"></i></span>
																			</div>
																			<input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="yyyy-mm-dd" id="emp_edate" name="emp_edate[]" placeholder="End Date" required>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12">
	                                                        	<textarea class="form-control" rows="5" id="emp_addr" name="emp_addr[]" style="resize: none;" autocomplete="off" maxlength="200" placeholder="Address" required></textarea>
															</div>
														</div>
														<div id="nextEmployment"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="prof_char_ref">
											<p style="font-size: 20px; font-weight: bold; text-align: center;">Professional Character References</p>
											<hr>
											<div class="row">
												<div class="col-lg-12">
													<div class="row">
														<div class="col-md-12"> 
															<button type="button" class="btn btn-sm btn-outline-dark" style="float: right; margin-top: 5px;" name="addrowCharReference" id="addrowCharReference"><i class="fa fa-plus-circle"></i> Add</button>
														</div>
													</div>
													<div class="shadow-sm p-3 mb-5 bg-white rounded" style="margin-top: 10px;">
														<div class="row">
															<div class="col-md-12">
																<div class="row">
																	<div class="col-md-6"></div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<input type="text" class="form-control charcount" id="charno" name="charno[]" value="1" autocomplete="off" readonly style="background-color: #fff; border: none; text-align: right; font-weight: bold; pointer-events: none;">
																		</div>
																	</div>
																</div>
																<hr style="margin-top: -10px;">
															</div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<div class="row">
																	<div class="col-md-3">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="char_fname" name="char_fname[]" autocomplete="off" placeholder="First Name" required>
				                                                        </div>
																	</div>
																	<div class="col-md-3">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="char_mname" name="char_mname[]" autocomplete="off" placeholder="Middle Name">
				                                                        </div>
																	</div>
																	<div class="col-md-3">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="char_lname[]" name="char_lname[]" autocomplete="off" placeholder="Last Name" required>
				                                                        </div>
																	</div>
																	<div class="col-md-3">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="char_suffix" name="char_suffix[]" autocomplete="off" placeholder="Suffix">
				                                                        </div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<div class="row">
																	<div class="col-md-3">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-heart text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="char_rel" name="char_rel[]" autocomplete="off" placeholder="Relationship" required>
				                                                        </div>
																	</div>
																	<div class="col-md-3">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-phone text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="char_contact" name="char_contact[]" autocomplete="off" placeholder="Contact Number" required>
				                                                        </div>
																	</div>
																	<div class="col-md-3">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-building text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="char_company[]" name="char_company[]" autocomplete="off" placeholder="Company Name" required>
				                                                        </div>
																	</div>
																	<div class="col-md-3">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-sitemap text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="char_title" name="char_title[]" autocomplete="off" placeholder="Job Title" required>
				                                                        </div>
																	</div>
																</div>
															</div>
														</div>
														<div id="nextCharReference"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="neighb_ref">
											<p style="font-size: 20px; font-weight: bold; text-align: center;">Neighborhood References</p>
											<hr>
											<div class="row">
												<div class="col-lg-12">
													<div class="row">
														<div class="col-md-12"> 
															<button type="button" class="btn btn-sm btn-outline-dark" style="float: right; margin-top: 5px;" name="addrowNeighborReference" id="addrowNeighborReference"><i class="fa fa-plus-circle"></i> Add</button>
														</div>
													</div>
													<div class="shadow-sm p-3 mb-5 bg-white rounded" style="margin-top: 10px;">
														<div class="row">
															<div class="col-md-12">
																<div class="row">
																	<div class="col-md-6"></div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<input type="text" class="form-control nbcount" id="nbno" name="nbno[]" value="1" autocomplete="off" readonly style="background-color: #fff; border: none; text-align: right; font-weight: bold; pointer-events: none;">
																		</div>
																	</div>
																</div>
																<hr style="margin-top: -10px;">
															</div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<div class="row">
																	<div class="col-md-3">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="nb_fname" name="nb_fname[]" autocomplete="off" placeholder="First Name" required>
				                                                        </div>
																	</div>
																	<div class="col-md-3">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="nb_mname" name="nb_mname[]" autocomplete="off" placeholder="Middle Name">
				                                                        </div>
																	</div>
																	<div class="col-md-3">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="nb_lname[]" name="nb_lname[]" autocomplete="off" placeholder="Last Name" required>
				                                                        </div>
																	</div>
																	<div class="col-md-3">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="nb_suffix" name="nb_suffix[]" autocomplete="off" placeholder="Suffix">
				                                                        </div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<div class="row">
																	<div class="col-md-6">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-heart text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="nb_rel" name="nb_rel[]" autocomplete="off" placeholder="Relationship" required>
				                                                        </div>
																	</div>
																	<div class="col-md-6">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-phone text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="nb_contact" name="nb_contact[]" autocomplete="off" placeholder="Contact Number" required>
				                                                        </div>
																	</div>
																</div>
															</div>
														</div>
														<div id="nextNeighborReference"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="rel_ref">
											<p style="font-size: 20px; font-weight: bold; text-align: center;">Relative References</p>
											<hr>
											<div class="row">
												<div class="col-lg-12">
													<div class="row">
														<div class="col-md-12"> 
															<button type="button" class="btn btn-sm btn-outline-dark" style="float: right; margin-top: 5px;" name="addrowRelativeReference" id="addrowRelativeReference"><i class="fa fa-plus-circle"></i> Add</button>
														</div>
													</div>
													<div class="shadow-sm p-3 mb-5 bg-white rounded" style="margin-top: 10px;">
														<div class="row">
															<div class="col-md-12">
																<div class="row">
																	<div class="col-md-6"></div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<input type="text" class="form-control relcount" id="relno" name="relno[]" value="1" autocomplete="off" readonly style="background-color: #fff; border: none; text-align: right; font-weight: bold; pointer-events: none;">
																		</div>
																	</div>
																</div>
																<hr style="margin-top: -10px;">
															</div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<div class="row">
																	<div class="col-md-3">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="rel_fname" name="rel_fname[]" autocomplete="off" placeholder="First Name" required>
				                                                        </div>
																	</div>
																	<div class="col-md-3">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="rel_mname" name="rel_mname[]" autocomplete="off" placeholder="Middle Name">
				                                                        </div>
																	</div>
																	<div class="col-md-3">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="rel_lname[]" name="rel_lname[]" autocomplete="off" placeholder="Last Name" required>
				                                                        </div>
																	</div>
																	<div class="col-md-3">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="rel_suffix" name="rel_suffix[]" autocomplete="off" placeholder="Suffix">
				                                                        </div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<div class="row">
																	<div class="col-md-6">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-heart text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="rel_relation" name="rel_relation[]" autocomplete="off" placeholder="Relationship" required>
				                                                        </div>
																	</div>
																	<div class="col-md-6">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-phone text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="rel_contact" name="rel_contact[]" autocomplete="off" placeholder="Contact Number" required>
				                                                        </div>
																	</div>
																</div>
															</div>
														</div>
														<div id="nextRelativeReference"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="sup_docs">
											<div class="row">
												<div class="col-lg-6">
												    <p style="font-size: 18px; font-weight: bold; text-align: center;">Supporting Documents</p>
												    <p style="font-size: 15px;  text-align: center;">TOR, Diploma, COE, Valid IDs</p>
													<div class="row">
														<div class="col-md-12">
	                                                        <input type="file" class="dropify" name="supp_docs[]" id="supp_docs" multiple>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
												    <p style="font-size: 18px; text-align: center;"><b>Letter of Authorization</b>
												    <p style="font-size: 15px;  text-align: center;"> You can download the form <a href="forms_/LOSI - Waiver - Authorization Letter to Conduct Verification (BI) - UPDATED.pdf" target="_blank">here.</a></p>
													<div class="row">
														<div class="col-md-12">
	                                                        <input type="file" class="dropify" name="e_signature[]" id="e_signature" multiple>
														</div>
													</div>
												</div>
											</div>
										</div>
										<hr>
                                        <div class="form-group clearfix mt-4">
                                            <label class="fancy-checkbox element-left">
                                                <input type="checkbox">
                                                <span>By filling up, you agree with the storage and handling of your data and you have read our <a href="https://lendell.ph/assets/docs/Data%20Privacy%20Statement.pdf" target=”_blank”>Data Privacy Compliance Policy Statement.</a></span>
                                            </label><br>
                                            <!--<label for="myCheckbox" class="fancy-checkbox element-left">-->
                                            <!--    <input type="checkbox" id="myCheckbox">-->
                                            <!--    <span>I hereby grant authority for the bearer of this letter to access or be provided with full details.</span>-->
                                            <!--</label>-->
                                            
                                        </div>
                                        <button type="submit" class="btn btn-outline-primary" name="newapplication" id="newapplication"><i class="fa fa-check-circle-o"></i> Save</button>
                                        <button type="submit" class="btn btn-outline-danger"><i class="fa fa-eraser"></i> Clear</button>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>
    <script src="assets/vendor/toastr/toastr.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>
    <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="js/pages/forms/dropify.js"></script>
    <script src="assets/bundles/datatablescripts.bundle.js"></script>
    <script src="assets/vendor/sweetalert/sweetalert.min.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>
    <script src="assets/bundles/easypiechart.bundle.js"></script>
    <script src="js/pages/ui/dialogs.js"></script>
   
</body>
</html>

<?php
    include 'scripts.php';
	include 'modals.php';
?>