<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';
?>

<div id="wrapper" class="theme-green">
    <div id="main-content">
        <div class="container-fluid">
			<div class="block-header">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<h2>Upload DTR</h2>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
							<li class="breadcrumb-item">DTR Management</li>
							<li class="breadcrumb-item active">Upload DTR</li>
						</ul>	
					</div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action" onclick="savesupdownloaddtritsupp();">
                                <a class="btn btn-success" href="download_dtr.php?file=dtr_template/support_dtr_template_2023.csv" style="float: right;"><i class="fa fa-download"></i> Download DTR</a>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12">
					<div class="card planned_task">
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
											<h4 class="media-heading">Uploading of your DTR</h4>
												Team Alpha
										</div>
									</div>
								</div>
							</div>
						</div>
						<form class="form" method="POST" enctype="multipart/form-data" action="functions/save_supp_dtr.php">
							<div class="header">
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-6">
												<small class="text-muted">Full Name: </small>
													<p style="font-weight: bold;"><?php echo $sup_name; ?></p>
												<hr>
											</div>
											<div class="col-md-6">
												<small class="text-muted">Designation: </small>
													<p style="font-weight: bold;"><?php echo $sup_position; ?></p>
												<hr>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="body" style="margin-top: -30px;">
								<div id="wrapper" class="theme-green">
									<div class="row clearfix">
										<div class="col-md-12">
                                           	<input type="file" class="dropify" name="file" id="customFile1" accept=".csv">
                                       </div>										
									</div>
								</div>
								<br>
	                            <button type="submit" class="btn btn-outline-success" name="importDTR"><i class="fa fa-check-circle-o"></i> Submit</button>
	                            <button type="button" class="btn btn-outline-secondary"><i class="fa fa-eraser"></i> Clear</button> 
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