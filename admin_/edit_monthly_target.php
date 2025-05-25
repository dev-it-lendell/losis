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
						<h2>Edit Monthly Target</h2>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
							<li class="breadcrumb-item">Target Goal</li>
							<li class="breadcrumb-item active">Edit Monthly Target</li>
						</ul>	
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12">
					<div class="card planned_task">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-danger" style="float: right; margin-right: 25px; margin-top: 15px;" onclick="back_targetgoal_client(); saveadmtargetgoal();"><i class="fa fa-arrow-left"></i> Back</button>
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
                                                <h4 class="media-heading">Editing of Monthly Target</h4>
                                                    Lendell Outsourcing Solutions Inc.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="body">
                            	<form action="functions/update_monthly_target.php" method="POST">
	                            	<div class="row">
	                            		<div class="col-md-12">                           			
	                            			<div class="row">
	                            				<div class="col-md-6">
	                                                <div class="form-group">
	                                                    <select class="form-control form-control" id="teamlist_official" name="teamlist_official" onchange="displayteamtarget();"></select>
	                                                </div>                             					
	                            				</div>
	                            				<div class="col-md-6">
	                            				</div>
	                            			</div>
											<hr>
											<div id="team_targetdata"></div>
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