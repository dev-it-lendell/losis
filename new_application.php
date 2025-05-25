<?php
	include 'checking.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOSIS | Client</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">
    <link rel="icon" href="images/lendell/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/chatapp.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/dropify/css/dropify.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="assets/vendor/sweetalert/sweetalert.css" />
    <link rel="stylesheet" href="assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/vendor/toastr/toastr.min.css">
    <link rel="stylesheet" href="assets/css/messagestyle.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body data-theme="light" class="font-nunito">
	<div id="wrapper" class="theme-green">
		<div id="content" style="margin-top: 50px;">
			<div class="container-fluid">
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12">
						<div class="card planned_task">
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
			                                	<h4 class="media-heading">Application Form</h4>
			                                    	Please fill up the necessary information. Thank you.
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
								<form action="functions/save_application.php" method="POST" enctype="multipart/form-data">
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
			                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
			                                                            </div>
			                                                            <input type="text" class="form-control" id="app_fname" name="app_fname" autocomplete="off" placeholder="First Name">
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
			                                                            <input type="text" class="form-control" id="app_lname" name="app_lname" autocomplete="off" placeholder="Last Name">
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
			                                                            <input type="text" class="form-control" id="app_mobile" name="app_mobile" autocomplete="off" placeholder="Mobile Number">
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
																		<input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="yyyy-mm-dd" id="app_dateofbirth" name="app_dateofbirth" placeholder="Date of Birth">
																	</div>
																</div>
																<div class="col-md-4">
			                                                        <div class="input-group mb-3">
			                                                            <div class="input-group-prepend">
			                                                                <span class="input-group-text"><i class="fa fa-envelope text-dark"></i></span>
			                                                            </div>
			                                                            <input type="text" class="form-control" id="app_email" name="app_email" autocomplete="off" placeholder="Email Address">
			                                                        </div>
																</div>
																<div class="col-md-4">
			                                                        <div class="input-group mb-3">
			                                                            <div class="input-group-prepend">
			                                                                <span class="input-group-text"><i class="fa fa-cog text-dark"></i></span>
			                                                            </div>
			                                                            <input type="text" class="form-control" id="app_sss" name="app_sss" autocomplete="off" placeholder="SSS Number">
			                                                        </div>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-6">
																	<textarea class="form-control" rows="5" id="app_presentaddr" name="app_presentaddr" style="resize: none;" autocomplete="off" maxlength="200" placeholder="Present Address"></textarea>
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
	                                                                    <input type="checkbox" id="checkBox">
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
											<div class="alert alert-dark" role="alert">
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
																	<div class="col-md-6"></div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<input type="text" class="form-control empcount" id="empno" name="empno[]" value="1" autocomplete="off" readonly style="background-color: #fff; border: none; text-align: right; font-weight: bold; pointer-events: none;">
																		</div>
																	</div>
																</div>
																<hr style="margin-top: -10px;">
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
																			<input type="text" class="form-control" id="emp_company" name="emp_company[]" autocomplete="off" placeholder="Employer">
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="input-group mb-3">
																			<div class="input-group-prepend">
																				<span class="input-group-text"><i class="fa fa-phone text-dark"></i></span>
																			</div>
																			<input type="text" class="form-control" id="emp_contact" name="emp_contact[]" autocomplete="off" placeholder="Contact Number">
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="input-group mb-3">
																			<div class="input-group-prepend">
																				<span class="input-group-text"><i class="fa fa-sitemap text-dark"></i></span>
																			</div>
																			<input type="text" class="form-control" id="emp_title" name="emp_title[]" autocomplete="off" placeholder="Job Title">
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
																			<input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="yyyy-mm-dd" id="emp_sdate" name="emp_sdate[]" placeholder="Start Date">
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="input-group mb-3">
																			<div class="input-group-prepend">
																				<span class="input-group-text"><i class="fa fa-calendar text-dark"></i></span>
																			</div>
																			<input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="yyyy-mm-dd" id="emp_edate" name="emp_edate[]" placeholder="End Date">
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12">
	                                                        	<textarea class="form-control" rows="5" id="emp_addr" name="emp_addr[]" style="resize: none;" autocomplete="off" maxlength="200" placeholder="Address"></textarea>
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
				                                                            <input type="text" class="form-control" id="char_fname" name="char_fname[]" autocomplete="off" placeholder="First Name">
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
				                                                            <input type="text" class="form-control" id="char_lname[]" name="char_lname[]" autocomplete="off" placeholder="Last Name">
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
				                                                            <input type="text" class="form-control" id="char_rel" name="char_rel[]" autocomplete="off" placeholder="Relationship">
				                                                        </div>
																	</div>
																	<div class="col-md-3">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-phone text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="char_contact" name="char_contact[]" autocomplete="off" placeholder="Contact Number">
				                                                        </div>
																	</div>
																	<div class="col-md-3">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-building text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="char_company[]" name="char_company[]" autocomplete="off" placeholder="Company Name">
				                                                        </div>
																	</div>
																	<div class="col-md-3">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-sitemap text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="char_title" name="char_title[]" autocomplete="off" placeholder="Job Title">
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
				                                                            <input type="text" class="form-control" id="nb_fname" name="nb_fname[]" autocomplete="off" placeholder="First Name">
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
				                                                            <input type="text" class="form-control" id="nb_lname[]" name="nb_lname[]" autocomplete="off" placeholder="Last Name">
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
				                                                            <input type="text" class="form-control" id="nb_rel" name="nb_rel[]" autocomplete="off" placeholder="Relationship">
				                                                        </div>
																	</div>
																	<div class="col-md-6">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-phone text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="nb_contact" name="nb_contact[]" autocomplete="off" placeholder="Contact Number">
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
				                                                            <input type="text" class="form-control" id="rel_fname" name="rel_fname[]" autocomplete="off" placeholder="First Name">
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
				                                                            <input type="text" class="form-control" id="rel_lname[]" name="rel_lname[]" autocomplete="off" placeholder="Last Name">
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
				                                                            <input type="text" class="form-control" id="rel_relation" name="rel_relation[]" autocomplete="off" placeholder="Relationship">
				                                                        </div>
																	</div>
																	<div class="col-md-6">
				                                                        <div class="input-group mb-3">
				                                                            <div class="input-group-prepend">
				                                                                <span class="input-group-text"><i class="fa fa-phone text-dark"></i></span>
				                                                            </div>
				                                                            <input type="text" class="form-control" id="rel_contact" name="rel_contact[]" autocomplete="off" placeholder="Contact Number">
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
											<p style="font-size: 20px; font-weight: bold; text-align: center;">Supporting Documents</p>
											<hr>
											<div class="row">
												<div class="col-lg-12">
													<div class="row">
														<div class="col-md-12">
	                                                        <input type="file" class="dropify" name="supp_docs[]" id="supp_docs" multiple>
														</div>
													</div>
												</div>
											</div>
										</div>
										<hr>
		                                <div class="form-group clearfix mt-4">
		                                    <label class="fancy-checkbox element-left">
		                                        <input type="checkbox"> 
		                                        <span>By filling up, you agree with the storage and handling of your data and you have read our <a target="_blank" href="https://lendell.ph/assets/docs/Data%20Privacy%20Statement.pdf" style="color: #000; text-decoration: underline; font-weight: bold;">Data Privacy Compliance Policy Statement.</a></span>
		                                    </label><br>
		                                    <label class="fancy-checkbox element-left">
		                                        <input type="checkbox"> 
		                                        <span>I hereby grant authority for the bearer of this letter to access or be provided with full details. </a></span>
		                                    </label>
		                                </div>
		                                <button type="submit" class="btn btn-outline-primary" name="newapplication"><i class="fa fa-check-circle-o"></i> Save</button>
		                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-eraser"></i> Clear</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>
    <script src="assets/vendor/toastr/toastr.js"></script>
    <script src="assets/vendor/dropify/js/dropify.min.js"></script>
    <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="js/pages/forms/dropify.js"></script>
    <script src="assets/bundles/datatablescripts.bundle.js"></script>
    <script src="assets/vendor/sweetalert/sweetalert.min.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>
    <script src="assets/bundles/easypiechart.bundle.js"></script>
    <script src="js/pages/ui/dialogs.js"></script>
    
    
    <script type="text/javascript">
        //Append - Employment History
       $('#addrowEmployment').click(function(){
            var length = $('.empcount').length;
            var i   = parseInt(length)+parseInt(1);
            var newrow = $('#nextEmployment').append('<br><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-6"></div><div class="col-md-6"><div class="form-group"><input type="text" class="form-control empcount" id="empno" name="empno[]" value="'+i+'" autocomplete= "off" readonly style="background-color: #fff; border: none; text-align: right; font-weight: bold; pointer-events: none;"></div></div></div><hr style="margin-top: -10px;"></div></div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-4"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-building text-dark"></i></span></div><input type="text" class="form-control" id="emp_company'+i+'" name="emp_company[]" autocomplete="off" placeholder="Employer"></div></div><div class="col-md-4"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone text-dark"></i></span></div><input type="text" class="form-control" id="emp_contact'+i+'" name="emp_contact[]" autocomplete="off" placeholder="Contact Number"></div></div><div class="col-md-4"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-sitemap text-dark"></i></span></div><input type="text" class="form-control" id="emp_title'+i+'" name="emp_title[]" autocomplete="off" placeholder="Job Title"></div></div></div></div></div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-6"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar text-dark"></i></span></div><input data-provide="datepicker" data-date-autoclose="true" class="form-control" id="emp_sdate'+i+'" name="emp_sdate[]" autocomplete="off" placeholder="Start Date"></div></div><div class="col-md-6"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar text-dark"></i></span></div><input data-provide="datepicker" data-date-autoclose="true" class="form-control" id="emp_edate'+i+'" name="emp_edate[]" autocomplete="off" placeholder="End Date"></div></div></div></div></div><div class="row"><div class="col-md-12"><textarea class="form-control" rows="5" id="emp_addr'+i+'" name="emp_addr[]" style="resize: none;" autocomplete="off" maxlength="200" placeholder="Address"></textarea></div></div><br><button type="button" class="btn btn-outline-danger btnRemoveEmployment"><i class="fa fa-minus-circle"></i> Remove</button>');
             
            });
         
          // Removing event here
	      $('body').on('click','.btnRemoveEmployment',function() {
	           $(this).closest('div').remove()
	     
	      });
      
      //Append - Character Reference
       $('#addrowCharReference').click(function(){
            var length = $('.charcount').length;
            var i   = parseInt(length)+parseInt(1);
            var newrow = $('#nextCharReference').append('<br><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-6"></div><div class="col-md-6"><div class="form-group"><input type="text" class="form-control charcount" id="charno" name="charno[]" value="'+i+'" autocomplete="off" readonly style="background-color: #fff; border: none; text-align: right; font-weight: bold; pointer-events: none;"></div></div></div><hr style="margin-top: -10px;"></div></div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="char_fname'+i+'" name="char_fname[]" autocomplete="off" placeholder="First Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="char_mname'+i+'" name="char_mname[]" autocomplete="off" placeholder="Middle Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="char_lname[]'+i+'" name="char_lname[]" autocomplete="off" placeholder="Last Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="char_suffix'+i+'" name="char_suffix[]" autocomplete="off" placeholder="Suffix"></div></div></div></div></div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-heart text-dark"></i></span></div><input type="text" class="form-control" id="char_rel'+i+'" name="char_rel[]" autocomplete="off" placeholder="Relationship"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone text-dark"></i></span></div><input type="text" class="form-control" id="char_contact'+i+'" name="char_contact[]" autocomplete="off" placeholder="Contact Number"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-building text-dark"></i></span></div><input type="text" class="form-control" id="char_company[]'+i+'" name="char_company[]" autocomplete="off" placeholder="Company Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-sitemap text-dark"></i></span></div><input type="text" class="form-control" id="char_title'+i+'" name="char_title[]" autocomplete="off" placeholder="Job Title"></div></div></div></div></div><br><button type="button" class="btn btn-sm  btn-outline-danger btnRemoveCharReference"><i class="fa fa-minus-circle"></i> Remove</button>');
             
            });
         
        // Removing event here
      	$('body').on('click','.btnRemoveCharReference',function() {
           $(this).closest('div').remove()
      	});

		//Append - Neighborhood Reference
       	$('#addrowNeighborReference').click(function(){
            var length = $('.nbcount').length;
            var i   = parseInt(length)+parseInt(1);
            var newrow = $('#nextNeighborReference').append('<br><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-6"></div><div class="col-md-6"><div class="form-group"><input type="text" class="form-control nbcount" id="nbno" name="nbno[]" value="'+i+'" autocomplete="off" readonly style="background-color: #fff; border: none; text-align: right; font-weight: bold; pointer-events: none;"></div></div></div><hr style="margin-top: -10px;"></div></div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="nb_fname'+i+'" name="nb_fname[]" autocomplete="off" placeholder="First Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="nb_mname'+i+'" name="nb_mname[]" autocomplete="off" placeholder="Middle Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="nb_lname[]'+i+'" name="nb_lname[]" autocomplete="off" placeholder="Last Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="nb_suffix'+i+'" name="nb_suffix[]" autocomplete="off" placeholder="Suffix"></div></div></div></div></div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-6"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-heart text-dark"></i></span></div><input type="text" class="form-control" id="nb_rel'+i+'" name="nb_rel[]" autocomplete="off" placeholder="Relationship"></div></div><div class="col-md-6"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone text-dark"></i></span></div><input type="text" class="form-control" id="nb_contact'+i+'" name="nb_contact[]" autocomplete="off" placeholder="Contact Number"></div></div></div></div></div><br><button type="button" class="btn btn-sm btn-outline-danger btnRemoveNeighborReference"><i class="fa fa-minus-circle"></i> Remove</button>');
             
            });
         
        // Removing event here
	    $('body').on('click','.btnRemoveNeighborReference',function() {
			$(this).closest('div').remove()
		});
      
      	//Append - Neighborhood Reference
       	$('#addrowRelativeReference').click(function(){
            var length = $('.relcount').length;
            var i   = parseInt(length)+parseInt(1);
            var newrow = $('#nextRelativeReference').append('<br><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-6"></div><div class="col-md-6"><div class="form-group"><input type="text" class="form-control relcount" id="relno" name="relno[]" value="'+i+'" autocomplete="off" readonly style="background-color: #fff; border: none; text-align: right; font-weight: bold; pointer-events: none;"></div></div></div><hr style="margin-top: -10px;"></div></div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="rel_fname'+i+'" name="rel_fname[]" autocomplete="off" placeholder="First Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="rel_mname'+i+'" name="rel_mname[]" autocomplete="off" placeholder="Middle Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="rel_lname[]'+i+'" name="rel_lname[]" autocomplete="off" placeholder="Last Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="rel_suffix'+i+'" name="rel_suffix[]" autocomplete="off" placeholder="Suffix"></div></div></div></div></div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-6"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-heart text-dark"></i></span></div><input type="text" class="form-control" id="rel_relation'+i+'" name="rel_relation[]" autocomplete="off" placeholder="Relationship"></div></div><div class="col-md-6"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone text-dark"></i></span></div><input type="text" class="form-control" id="rel_contact'+i+'" name="rel_contact[]" autocomplete="off" placeholder="Contact Number"></div></div></div></div></div><br><button type="button" class="btn btn-sm btn-outline-danger btnRemoveRelativeReference"><i class="fa fa-minus-circle"></i> Remove</button>');
		});
         
        // Removing event here
      	$('body').on('click','.btnRemoveRelativeReference',function() {
           $(this).closest('div').remove()
     	});
    </script>
</body>
</html>

<?php
	include 'script.php';
?>