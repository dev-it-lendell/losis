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
						<h2>Monthly Performance</h2>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
							<li class="breadcrumb-item active">Monthly Performance</li>
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
                                            <h4 class="media-heading">Team's Monthly Performance</h4>
                                                Lendell Outsourcing Solutions Inc.
                                        </div>
                                    </div>
                                </div>
	                            <ul class="nav nav-tabs-new2 customtab" role="tablist">
	                                <li class="nav-item">
	                                    <a class="nav-link active" data-toggle="tab" href="#teampsalms" role="tab"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;Team Psalms</a>
	                                    <div class="slide"></div>
	                                </li>
	                                <li class="nav-item">
	                                    <a class="nav-link" data-toggle="tab" href="#teammark" role="tab"><i class="icofont-database"></i>&nbsp;&nbsp;Team Mark</a>
	                                    <div class="slide"></div>
	                                </li>
	                                <li class="nav-item">
	                                    <a class="nav-link" data-toggle="tab" href="#teamcorinthians" role="tab"><i class="icofont-files-stack"></i>&nbsp;&nbsp;Team Corinthians</a>
	                                    <div class="slide"></div>
	                                </li>
	                                <li class="nav-item">
	                                    <a class="nav-link" data-toggle="tab" href="#teamecclesiastes" role="tab"><i class="icofont-ui-check"></i>&nbsp;&nbsp;Team Ecclesiastes</a>
	                                    <div class="slide"></div>
	                                </li>                                 
	                            </ul>
	                            <div class="tab-content br-n pn">
	                            	<div id="teampsalms" class="tab-pane p-3 active"></div>
	                            	<div id="teammark" class="tab-pane p-3"></div>
	                            	<div id="teamcorinthians" class="tab-pane p-3"></div>
	                            	<div id="teamecclesiastes" class="tab-pane p-3"></div>
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