<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_endo_support_dc AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE a.endo_status = '2' AND b.verify_status ='1' AND a.endo_code = '".$_GET["endoCode"]."'";
    $query = $conn->query($sql);
    while($row = mysqli_fetch_array($query)) { 
        extract($row);
        $supervisorname = $row['supervisorname'];
        $supervisorid = $row['supervisorid'];
        $endorsementcode = $row['endo_code'];
        $endo_id = $row['endo_id'];
        $endo_date = $row['endo_date'];
        $newDateEndo = date('F d, Y', strtotime($endo_date));
		$turnaround_date = $row['turn_around_date'];
		$newDateTurnAround = date('F d, Y', strtotime($turnaround_date));        
        $clientfullname = $row['company_name'].' - '.$row['site_'];
        $clientname = $row['clientname'];
        $acronym_ = $row['acronym_'];
        $endo_desc = $row['endo_desc'];
        $applicantname = $row['applicantname'];
		$endo_services = $row['endo_services'];
		$assigned_team = $row['assigned_team'];
		$datetime_added = $row['datetime_added'];
		$newDateTimeAdded = date('F d, Y - g:i A', strtotime($datetime_added));   
    } 

        $sql1 = "SELECT * FROM tbl_endo_support_dc WHERE endo_code = '$endo_code'";
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

		$sql2 = "SELECT a.endo_code, b.datetime_added, b.datetime_done, b.endo_code, b.verifier_, c.user_id, c.fname, c.lname FROM tbl_endo_criminal AS a LEFT JOIN tbl_endo_support_dc AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_support AS c ON b.verifier_ = c.user_id WHERE b.endo_code = '$endo_code'";
	    $query2 = $conn->query($sql2);
	    while($row2 = mysqli_fetch_array($query2)) { 
	        extract($row2);      
	        $supportverifier = $row2['fname'].' '.$row2['lname'];   
	        $datetime_done = $row2['datetime_done'];
	        $datetime_added = $row2['datetime_added'];
	        $newDateTimeDone = date('F d, Y - g:i A', strtotime($datetime_done));
	        $newDateTimeAdded = date('F d, Y - g:i A', strtotime($datetime_added));
	    } 

?>

<div id="wrapper" class="theme-green">
	<div id="main-content">
		<div class="container-fluid">
			<div class="block-header">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<h2>Endorsement Results</h2>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
							<li class="breadcrumb-item">Verify Endorsement</li>
							<li class="breadcrumb-item">Database Check</li>
							<li class="breadcrumb-item active">Endorsement Results</li>
						</ul>	
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12">
					<div class="card planned_task">
						<div class="row">
							<div class="col-md-12">
								<button type="button" class="btn btn-danger" style="float: right; margin-right: 25px; margin-top: 15px;" onclick="backtoverifydc(); savesupverifydc();"><i class="fa fa-arrow-left"></i> Back</button>
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
											<h4 class="media-heading">Viewing of endorsement</h4>
												Endorsement verification results
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="body">
							<div id="wrapper" class="theme-green">
								<div class="row clearfix">
									<div class="col-lg-5 col-md-12 col-sm-12">
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
														<p style="font-size: 13px; font-weight: bold;"><?php echo $applicantname; ?></p>
													</div>
												</div>
												<div class="row text-center mt-2 border-bottom pb-2">
													<div class="col-md-6 border-right">
														<label class="d-block text-muted mb-1">Endorsement Date</label>
														<p style="font-size: 13px; font-weight: bold;"><?php echo $newDateEndo; ?></p>
													</div>
													<div class="col-md-6">
														<label class="d-block text-muted mb-1">Endorsement Code</label>
														<p style="font-size: 13px; font-weight: bold;"><?php echo $endorsementcode; ?></p>
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
														<small class="text-muted">Batch ID: </small>
															<p><?php echo $endo_desc; ?></p>
														<hr>
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
																<small class="text-muted">Turn Around Date: </small>
																	<p><?php echo $newDateTurnAround; ?></p>
																<hr>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<small class="text-muted">Company Name - Site: </small>
															<p id="biendorsement_company"><?php echo $clientfullname; ?></p>
														<hr>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<small class="text-muted">Assigned POC/Supervisor: </small>
															<p id="biendorsement_company" style="font-weight: bold;"><?php echo $supervisorname; ?></p>
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
												<h2><strong>Support</strong> Verifier Details</h2>
											</div>
											<div class="body">
												<small class="text-muted">Support Verifier: </small>
													<p><?php echo $supportverifier; ?></p>
												<hr>
												<small class="text-muted">Assigned Team: </small>
													<p>Team Alpha</p>
												<hr>
												<small class="text-muted">Date and Time Added: </small>
													<p><?php echo $newDateTimeAdded; ?></p>
												<hr>												
												<small class="text-muted">Date and Time Verified : </small>
													<p><?php echo $newDateTimeDone; ?></p>
												<hr>
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