<?php
include 'checking.php';
include 'header.php';
include 'sidebar.php';

$sql1 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_by, b.assigned_supervisor, b.assigned_to, b.is_distributed, b.is_returned, c.client_id, c.client_name, c.acronym_, c.site_, d.user_id, CONCAT(d.user_id) AS clientid, CONCAT(d.fname, ' ', d.mname,  ' ', d.lname, ' ', d.suffix) AS clientname, d.site_id, d.company_name, e.user_id, CONCAT(e.user_id) AS supervisorid, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.user_id, CONCAT(f.fname, ' ', f.mname, ' ', f.lname, ' ', f.suffix) AS operationsname, g.user_id ,g.useremail_, a.external_client_id FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_supervisor AS b ON a.endo_code = b.endo_code LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_client AS d ON a.client_id = d.user_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_operations AS f ON b.assigned_by = f.user_id LEFT JOIN tbl_users AS g ON d.user_id = g.user_id WHERE a.endo_id = '" . $_GET["id"] . "'";
$query = $conn->query($sql1);
while ($row = mysqli_fetch_array($query)) {
	extract($row);
	$acronym_ = $row['acronym_'];
	$endo_id = $row['endo_id'];
	$endo_desc = $row['endo_desc'];
	$endoCode = $row['endo_code'];
	$applicantname = $row['applicantname'];
	$turn_around_date = $row['turn_around_date'];
	$newTurnAroundDate = date("F j, Y", strtotime($turn_around_date));
	$clientid = $row['clientid'];
	$supervisorid = $row['supervisorid'];
	$supervisorname = $row['supervisorname'];
	$endo_date = $row['endo_date'];
	$newDateEndo = date('F d, Y', strtotime($endo_date));
	$clientfullname = $row['company_name'] . ' - ' . $row['site_'];
	$clientname = $row['clientname'];
	$folder_name = $row['folder_name'];
	$endo_services = $row['endo_services'];
	$endo_status = $row['endo_status'];
	$clientemail = $row['useremail_'];
	$external_client_id = $row['external_client_id'];
}
?>

<div id="wrapper" class="theme-green">
	<div id="main-content">
		<div class="container-fluid">
			<div class="block-header">
				<div class="row">
					<div class="col-lg-8 col-md-6 col-sm-12">
						<h2>Send To Client</h2>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
							<li class="breadcrumb-item">Endorsements</li>
							<li class="breadcrumb-item">Background Investigation</li>
							<li class="breadcrumb-item active">Send To Client</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12">
					<div class="card planned_task">
						<div class="row">
							<div class="col-md-12">
								<button type="button" class="btn btn-outline-danger"
									style="float: right; margin-right: 25px; margin-top: 15px;"
									onclick="back_endorsements_bi(); saveendorsementbi();"><i class="fa fa-arrow-left"></i> Back</button>
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
											<h4 class="media-heading">For Uploading of Report</h4>
											Checking and validation of report
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- action="functions/save_client_report.php" -->
						<form class="form" method="POST" id="reportSending" enctype="multipart/form-data">
							<div class="body">
								<div id="wrapper" class="theme-green">
									<div class="row clearfix">
										<div class="col-lg-5 col-md-12 col-sm-12">
											<div class="card member-card">
												<div class="pw_img" style="margin-top: 70px;">
													<img class="img-fluid" src="../images/backgrounds/bg-5.png" alt="About the image">
												</div>
												<div class="member-img">
													<a href="javascript:void(0);"><img src="../images/icons/endorsement.png"
															class="rounded-circle" alt="profile-image"></a>
												</div>
												<div class="body">
													<div class="row text-center mt-2 border-bottom pb-2">
														<div class="col-md-12">
															<label class="d-block text-muted mb-1" style="font-size: 14px;">Applicant Name</label>
															<p id="biendorsement_name" style="font-size: 13px; font-weight: bold;">
																<?php echo $applicantname; ?></php6>
														</div>
													</div>
													<div class="row text-center mt-2 border-bottom pb-2">
														<div class="col-md-6 border-right">
															<label class="d-block text-muted mb-1">Endorsement
																Date</label>
															<p style="font-size: 13px; font-weight: bold;" id="biendorsement_date">
																<?php echo $newDateEndo; ?></p>
														</div>
														<div class="col-md-6">
															<label class="d-block text-muted mb-1">Endorsement
																Code</label>
															<p style="font-size: 13px; font-weight: bold;" id="biendorsement_code">
																<?php echo $endoCode; ?></p>
														</div>
														<p id="biendorsement_id" style="font-size: 13px; display: none;">
															<?php echo $endo_id; ?>
														</p>
														<input type="hidden" class="form-control" name="endocode" readonly
															value="<?php echo $endoCode; ?>">
														<input type="hidden" class="form-control" name="endoid" readonly
															value="<?php echo $endo_id; ?>">
														<input type="hidden" class="form-control" name="clientid" readonly
															value="<?php echo $clientid; ?>">
														<input type="hidden" class="form-control" name="clientemail" readonly
															value="<?php echo $clientemail; ?>">
														<input type="hidden" class="form-control" name="applicantname" readonly
															value="<?php echo $applicantname; ?>">
														<input type="hidden" value="<?php echo $supervisorid ?>" name="supervisor_id">
														<input type="hidden" value="<?php echo $acronym_ ?>" name="acronym">
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
															<div class="row">
																<div class="col-md-6">
																	<small class="text-muted">Endorsement Description:
																	</small>
																	<p id="biendorsement_desc"><?php echo $endo_desc; ?>
																	</p>
																	<hr>
																</div>
																<div class="col-md-6">
																	<small class="text-muted">Folder Name: </small>
																	<p id="biendorsement_folder" style="font-weight: bold;">
																		<?php echo $folder_name; ?>
																	</p>
																	<hr>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-6">
																	<small class="text-muted">Turn Around Date: </small>
																	<p id="biendorsement_tadate">
																		<?php echo $newTurnAroundDate; ?>
																	</p>
																	<hr>
																</div>
																<div class="col-md-6">
																	<small class="text-muted">Endorsement Requestor:
																	</small>
																	<p id="biendorsement_requestor">
																		<?php echo $clientname; ?>
																	</p>
																	<hr>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<small class="text-muted">Company Name - Site: </small>
															<p id="biendorsement_company"><?php echo $clientfullname; ?>
															</p>
															<hr>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row clearfix">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="card">
												<div class="header">
													<h2><strong>Upload</strong> Report</h2>
												</div>

												<div class="row">
													<div class="col-lg-12">
														<div class="row">
															<div class="col-lg-4">
																<div class="input-group mb-3" style="margin-left: 18px;">
																	<div class="input-group-prepend">
																		<span class="input-group-text"><i class="fa fa-file text-dark"></i></span>
																	</div>
																	<select class="form-control form-control" id="reporttype" name="reporttype">
																		<option value="">-- Select Report Type --
																		</option>
																		<option value="0">Partial Report</option>
																		<option value="1">Complete Report</option>

																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="body">
													<div class="row">
														<div class="col-md-12">
															<div class="row clearfix">
																<div class="col-lg-12">
																	<input type="file" class="dropify" name="files" id="files" accept=".pdf" multiple>
																</div>
															</div>
														</div>
													</div>
													<button type="submit" class="btn btn-outline-success mt-3" name="sendreporttoclient"><i
															class="fa fa-check-circle-o"></i>
														Submit</button>
													<button type="submit" class="btn btn-outline-secondary mt-3"><i class="fa fa-eraser"></i>
														Clear</button>
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

<?php
include 'modals.php';
include 'script.php';
?>


<script>
	document.addEventListener('DOMContentLoaded', () => {
		const form = document.getElementById('reportSending');
		const invitationId = '<?php echo $external_client_id; ?>'; // Make dynamic if needed

		form.addEventListener('submit', async (e) => {
			e.preventDefault(); // prevent page reload

			const formData = new FormData(form);
			const value = document.getElementById('reporttype').value;

			if (Number(value) === 1) { // Send report if complete only
				try {
					const response = await fetch(`http://localhost:8888/api/losis/candidates/send-report/${invitationId}`, {
						method: 'POST',
						body: formData,
					});

					const result = await response.json();
					if (!response.ok) throw result;

					alert('Upload successful!');
					console.log('Server response:', result);
				} catch (error) {
					console.error('Upload failed:', error);
					alert('Upload failed.');
				}
			} else {
				alert('partial')
			}
		});
	});
</script>