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
						<h2>Manage Operations</h2>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
							<li class="breadcrumb-item">Operations</li>
							<li class="breadcrumb-item active">Manage Operations</li>
						</ul>	
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
											<h4 class="media-heading">Viewing Team Members Performance</h4>
												Lendell Outsourcing Solutions Inc.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="body">
							<div class="row" style="margin-top: -50px;">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-4">
											<div class="card">
											<div class="header">
											<h2>Operations List</h2>
											</div>
											<div class="body">
												<div class="row">
													<div class="col-md-12">
			                                            <div class="input-group input-group-sm mb-3">
			                                                <div class="input-group-prepend">
			                                                   	<span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
			                                                </div>
			                                             	<select class="custom-select" id="opslist" name="opslist" onchange="displayselectedmember();"></select>
			                                            </div>
			                                            <button class="btn btn-block btn-success" disabled style="margin-top: -6px;" id="viewopsperf" onclick="displaymemberdetails();"><i class="fa fa-bar-chart-o"></i> View Performance</button>
			                                            <button class="btn btn-block btn-danger" disabled style="margin-top: 5px;" id="removeops" onclick="removemember();"><i class="fa fa-trash-o"></i> Delete</button>
													</div>
												</div>  
											</div>
											</div>
										</div>
										<div class="col-lg-8">
											<div id="opsinfo"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div id="opsdetails"></div>
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