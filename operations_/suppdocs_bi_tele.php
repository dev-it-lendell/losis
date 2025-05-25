<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

	$sql1 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.application_code, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname,  ' ', b.mname,  ' ',  b.lname, ' ', b.suffix) AS clientname, b.company_name, b.user_position, b.site_id, b.team_, c.user_id, c.assigned_team, CONCAT(c.fname, ' ', c.mname, ' ', c.lname, ' ', c.suffix) AS supervisorname, d.endo_code, d.assigned_by, d.assigned_specialist, d.assigned_to, d.is_distributed, d.is_returned, e.user_id, CONCAT(e.fname,  ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS operationsname, f.endo_code, f.assigned_supervisor, f.assigned_support, f.assigned_specialist, f.assigned_analyst, f.review_supervisor, f.assigned_client, f.percentage_, f.datetime_added, f.datetime_updated, f.datetime_completed, g.client_id, g.client_name, g.acronym_, g.site_ FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN tbl_supervisor AS c ON a.endorsed_to = c.user_id LEFT JOIN tbl_bi_assigned_specialist AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_operations AS e ON d.assigned_specialist = e.user_id LEFT JOIN tbl_endorsement_bi_process AS f ON d.endo_code = f.endo_code LEFT JOIN client_list AS g ON a.site_id = g.client_id WHERE a.endo_code='".$_GET["endoCode"]."'"; 
    $query = $conn->query($sql1);
    while ($row = mysqli_fetch_array($query)) {
        extract($row);
        $acronym_ = $row['acronym_'];
        $endo_id = $row['endo_id'];
        $endo_desc = $row['endo_desc'];
        $endoCode = $row['endo_code'];
        $applicationCode = $row['application_code'];
        $applicantname = $row['applicantname'];
        $company_name = $row["company_name"].' - '.$row["client_code"];
        $turn_around_date = $row['turn_around_date'];
        $newTurnAroundDate = date("F j, Y", strtotime($turn_around_date));   
    }
?> 

<div id="wrapper" class="theme-green">
	<div id="main-content">
		<div class="container-fluid">
			<div class="block-header">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<h2>Download Documents</h2>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
							<li class="breadcrumb-item">Endorsements</li>
							<li class="breadcrumb-item active">Download Documents</li>
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
											<h4 class="media-heading">Download Files</h4>
												Uploaded documents/attachments of endorsement
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
											<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-6">
															<small class="text-muted">Applicant Name: </small>
																<p style="font-weight: bold;"><?php echo $applicantname; ?></p>
															<hr>
														</div>
														<div class="col-md-6">
															<small class="text-muted">Endorsement Code: </small>
																<p style="font-weight: bold;"><?php echo $endoCode; ?></p>
															<hr>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="body">
											<div class="row">
												<div class="col-md-6">
                                                    <p style="margin-top: -40px; font-weight: bold;">Supporting Documents</p>
                                                    <div class="row">
                                                        <?php
                                                            $directory = "../application_documents/{$year}/{$acronym_}/{$application_code}/";
                                                            $files = scandir($directory);
                                                
                                                            for ($a = 2; $a < count($files); $a++) {
                                                                // Check if the item is a file (not a directory)
                                                                if (is_file($directory . $files[$a])) { 
                                                                ?>
                                                                <div class="col-lg-3 col-md-4 col-sm-12">
                                                                    <div class="card">
                                                                        <div class="file">
                                                                            <a href="javascript:void(0);">
                                                                                <div class="hover">
                                                                                    <a href="../application_documents/<?php echo $year; ?>/<?php echo $acronym_; ?>/<?php echo $application_code; ?>/<?php echo $files[$a]; ?>" class="btn btn-sm" download="<?php echo $files[$a]; ?>" data-toggle="tooltip" data-placement="top" title="Download File" style="color: #ffffff; background-color: #AFE1AF;"><i class="fa fa-download"></i></a>
                                                                                </div>
                                                                                <div class="icon" style="text-align: center; margin-top: -15px; font-size: 30px;">
                                                                                    <i class="fa fa-file" style="color: #343A40;"></i>
                                                                                </div>
                                                                                <hr>
                                                                                <div class="file-name">
                                                                                    <p class="m-b-5 text-muted" style="font-size: 10px; text-align: center;"><?php echo $files[$a]; ?></p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php
                                                                }
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
									
            									<div class="col-md-6">
            									    <p style="margin-top: -40px; font-weight: bold;">e-Signature</p>
            									    <div class="row">
                                                        <?php
                                                                
                                                            $files = scandir("../application_documents/{$year}/{$acronym_}/{$application_code}/e-signature/");
                    
                                                            for ($a = 2; $a < count($files); $a++) { 
                                                                ?>
                                                                <div class="col-lg-3 col-md-4 col-sm-12">
                                                                    <div class="card">
                                                                        <div class="file">
                                                                            <a href="javascript:void(0);">
                                                                                <div class="hover">
                                                                                    <a href="../application_documents/<?php echo $year; ?>/<?php echo $acronym_; ?>/<?php echo $application_code; ?>/e-signature/<?php echo $files[$a]; ?>" class="btn btn-sm" download="<?php echo $files[$a]; ?>" data-toggle="tooltip" data-placement="top" title="Download File" style="color: #ffffff; background-color: #AFE1AF;"><i class="fa fa-download"></i></a>
                                                                                </div>
                                                                                <div class="icon" style="text-align: center; margin-top: -15px; font-size: 30px;">
                                                                                    <i class="fa fa-file" style="color: #343A40;"></i>
                                                                                </div>
                                                                                <hr>
                                                                                <div class="file-name">
                                                                                    <p class="m-b-5 text-muted" style="font-size: 10px; text-align: center;"><?php echo $files[$a]; ?></p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php
                                                            }
                                                        ?>
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
	</div>
</div>

<?php
    include 'modals.php';
    include 'script.php';
?>