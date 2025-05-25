<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    if (!empty($_GET['corinthianstarget'])) {
        switch ($_GET['corinthianstarget']) {
            case 'succ':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['success']('Monthly target succesfully updated.');
                    </script>
                <?php
            break;

            case 'err':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Cannot update monthly target.');
                    </script>
                <?php
            break;

            default:
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Monthly target updating error.');
                    </script>
                <?php
            break;
        }
    }

    if (!empty($_GET['ecclesiastestarget'])) {
        switch ($_GET['ecclesiastestarget']) {
            case 'succ':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['success']('Monthly target succesfully updated.');
                    </script>
                <?php
            break;

            case 'err':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Cannot update monthly target.');
                    </script>
                <?php
            break;

            default:
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Monthly target updating error.');
                    </script>
                <?php
            break;
        }
    }

    if (!empty($_GET['psalmstarget'])) {
        switch ($_GET['psalmstarget']) {
            case 'succ':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['success']('Monthly target succesfully updated.');
                    </script>
                <?php
            break;

            case 'err':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Cannot update monthly target.');
                    </script>
                <?php
            break;

            default:
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Monthly target updating error.');
                    </script>
                <?php
            break;
        }
    }

    if (!empty($_GET['marktarget'])) {
        switch ($_GET['marktarget']) {
            case 'succ':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['success']('Monthly target succesfully updated.');
                    </script>
                <?php
            break;

            case 'err':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Cannot update monthly target.');
                    </script>
                <?php
            break;

            default:
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Monthly target updating error.');
                    </script>
                <?php
            break;
        }
    }
?>

<div id="wrapper" class="theme-green">
	<div id="main-content">
		<div class="container-fluid">
			<div class="block-header">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<h2>Target Goal</h2>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
							<li class="breadcrumb-item active">Target Goal</li>
						</ul>	
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<a onclick="saveadmvieweditmonthlytarget();" href="edit_monthly_target.php" class="btn btn-outline-info" style="float: right;"><i class="fa fa-calendar-o"></i>&nbsp;Edit Monthly Target</a>
						<a onclick="saveadmviewexportmonthlytarget();" href="export_monthly_target.php" class="btn btn-outline-success" style="margin-left: 160px;"><i class="fa fa-download"></i>&nbsp;Export Data</a>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12">
					<div class="card planned_task">
						<div class="col-md-12 mt-3">
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
	                                            <h4 class="media-heading">Monthly Target Goal - <?php echo $now->format('Y'); ?></h4>
	                                                Lendell Outsourcing Solutions Inc.
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
                                <div class="card" style="height: 85px; margin-top: -10px;">
                                    <div class="card-body">
                                        <div class="media mleft">
                                            <div class="media-left">
                                                <p style="font-size: 36px; margin-top: -7px;">
                                                    <i class="fa fa-files-o text-dark"></i>
                                                </p>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Total Current Month Endorsements</h4>
                                                <p style="font-size: 15px;"><?php echo $now->format('F Y'); ?></p>
                                                <p style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;" id="admcurrentmonthendo"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="height: 85px; margin-top: -10px;">
                                    <div class="card-body">
                                        <div class="media mleft">
                                            <div class="media-left">
                                                <p style="font-size: 36px; margin-top: -7px;">
                                                    <i class="fa fa-money text-dark"></i>
                                                </p>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Total Current Month Billing</h4>
                                                <p style="font-size: 15px;"><?php echo $now->format('F Y'); ?></p>
                                                <p style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;" id="admcurrentmonthbilling"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
	                        </div>
							<ul class="nav nav-tabs-new2 customtab">
								<li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#teamcorinthians">CORINTHIANS</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#teamecclesiastes">ECCLESIASTES</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#teammark">MARK</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#teampsalms">PSALMS</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane show active" id="teamcorinthians">
						            <div class="row clearfix w_social3">
						                <div class="col-lg-3 col-md-6 col-6">
						                    <div class="card">
						                        <div class="icon"><i class="fa fa-file-text-o" style="color: #000;"></i></div>
						                        <div class="content">
						                            <div class="text" style="font-weight: bold; font-size: 12px;">Endorsement Goal <br>(<?php echo $now->format('F Y'); ?>)</div>
						                            <div class="number" id="corinthiansendogoal" style="font-weight: bold; color: #228B22;"></div>
						                        </div>
						                    </div>
						                </div>
						                <div class="col-lg-3 col-md-6 col-6">
						                    <div class="card">
						                        <div class="icon"><i class="fa fa-money" style="color: #000;"></i></div>
						                        <div class="content">
						                            <div class="text" style="font-weight: bold; font-size: 12px;">Endorsement Billing Goal  (<?php echo $now->format('F Y'); ?>)</div>
						                            <div class="number" id="corinthiansbillinggoal" style="font-weight: bold; color: #228B22;"></div>
						                        </div>
						                    </div>
						                </div>
						                <div class="col-lg-3 col-md-6 col-6">
						                    <div class="card">
						                        <div class="icon"><i class="fa fa-file-text-o" style="color: #000;"></i></div>
						                        <div class="content">
						                            <div class="text" style="font-weight: bold; font-size: 12px;">Actual Endorsements <br>(<?php echo $now->format('F Y'); ?>)</div>
						                            <div id="corinthiansactualendo"></div>
						                        </div>
						                    </div>
						                </div>
						                <div class="col-lg-3 col-md-6 col-6">
						                    <div class="card">
						                        <div class="icon"><i class="fa fa-money" style="color: #000;"></i></div>
						                        <div class="content">
						                            <div class="text" style="font-weight: bold; font-size: 12px;">Actual Endorsement Billing  (<?php echo $now->format('F Y'); ?>)</div>
						                            <div id="corinthiansactualbilling"></div>
						                        </div>
						                    </div>
						                </div>
						            </div>
									<div class="row">
										<div class="col-md-12">
											<div class="table-responsive">
												<table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
													<thead class="thead-dark">
														<tr>
															<th></th>
															<th>MONTH</th>
															<th>ENDORSEMENT GOAL</th>
															<th>ACTUAL ENDORSEMENTS</th>
															<th>BILLING GOAL</th>
															<th>ACTUAL BILLING</th>
														</tr>
													</thead>
													<tbody>
														<?php
															$sql = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a LEFT JOIN operations_team_corinthians AS b ON a.team_no = b.team_code WHERE a.team_no = 'TM-000003'";
															$result = $conn->query($sql);
															if ($result->num_rows > 0) {
																while ($row = $result->fetch_assoc()) {
																	$psalmsassigned_month = $row['assigned_month'] ?? null;
																	$newPsalmsMonth = date('F Y', strtotime($psalmsassigned_month));
																	$psalmsendo_goal = $row['endo_goal'] ?? null;
																	$psalmsactual_endo = $row['actual_endo'] ?? null;
																	$psalmsbilling_goal = $row['billing_goal'] ?? null;
																	$psalmsactual_billing = $row['actual_billing'] ?? null;

																	?>
																		<tr>
																			<td><div class="feeds-left"><img src="../images/icons/team.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;"></div></td>
																			<td><?php echo $newPsalmsMonth; ?></td>
																			<td style="font-weight: bold; color: #228B22;"><?php echo $psalmsendo_goal; ?></td>
																			<?php
																	            if ($psalmsendo_goal > $psalmsactual_endo) {
																	            	?>
																	            		<td style="font-weight: bold; color: #D22B2B;"><?php echo $psalmsactual_endo; ?></td>
																	            	<?php
																	            } else if ($psalmsactual_endo > $psalmsendo_goal) {
																	            	?>
																	            		<td style="font-weight: bold; color: #228B22;"><?php echo $psalmsactual_endo; ?></td>
																	            	<?php
																	            } else if ($psalmsendo_goal = $psalmsactual_endo) {
																	            	?>
																	            		<td style="font-weight: bold; color: #228B22;"><?php echo $psalmsactual_endo; ?></td>
																	            	<?php
																	            }
																			?>
																			<td style="font-weight: bold; color: #228B22;"><?php echo $psalmsbilling_goal; ?></td>
																			<?php
																	            if ($psalmsbilling_goal > $psalmsactual_billing) {
																	            	?>
																	            		<td style="font-weight: bold; color: #D22B2B;"> <?php echo $psalmsactual_billing; ?></td>
																	            	<?php
																	            } else if ($psalmsactual_billing > $psalmsbilling_goal) {
																	            	?>
																						<td style="font-weight: bold; color: #228B22;"> <?php echo $psalmsactual_billing; ?></td>
																	            	<?php
																	            } else if ($psalmsbilling_goal = $psalmsactual_billing) {
																	            	?>
																						<td style="font-weight: bold; color: #228B22;"> <?php echo $psalmsactual_billing; ?></td>
																	            	<?php
																	            }
																			?>
																		</tr>
																	<?php
																}
															}
														?>	
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="teamecclesiastes">
						            <div class="row clearfix w_social3">
						                <div class="col-lg-3 col-md-6 col-6">
						                    <div class="card">
						                        <div class="icon"><i class="fa fa-file-text-o" style="color: #000;"></i></div>
						                        <div class="content">
						                            <div class="text" style="font-weight: bold; font-size: 12px;">Endorsement Goal <br>(<?php echo $now->format('F Y'); ?>)</div>
						                            <div class="number" id="ecclesiastesendogoal" style="font-weight: bold; color: #228B22;"></div>
						                        </div>
						                    </div>
						                </div>
						                <div class="col-lg-3 col-md-6 col-6">
						                    <div class="card">
						                        <div class="icon"><i class="fa fa-money" style="color: #000;"></i></div>
						                        <div class="content">
						                            <div class="text" style="font-weight: bold; font-size: 12px;">Endorsement Billing Goal  (<?php echo $now->format('F Y'); ?>)</div>
						                            <div class="number" id="ecclesiastesbillinggoal" style="font-weight: bold; color: #228B22;"></div>
						                        </div>
						                    </div>
						                </div>
						                <div class="col-lg-3 col-md-6 col-6">
						                    <div class="card">
						                        <div class="icon"><i class="fa fa-file-text-o" style="color: #000;"></i></div>
						                        <div class="content">
						                            <div class="text" style="font-weight: bold; font-size: 12px;">Actual Endorsements <br>(<?php echo $now->format('F Y'); ?>)</div>
						                            <div id="ecclesiastesactualendo"></div>
						                        </div>
						                    </div>
						                </div>
						                <div class="col-lg-3 col-md-6 col-6">
						                    <div class="card">
						                        <div class="icon"><i class="fa fa-money" style="color: #000;"></i></div>
						                        <div class="content">
						                            <div class="text" style="font-weight: bold; font-size: 12px;">Actual Endorsement Billing  (<?php echo $now->format('F Y'); ?>)</div>
						                            <div id="ecclesiastesactualbilling"></div>
						                        </div>
						                    </div>
						                </div>
						            </div>
									<div class="row">
										<div class="col-md-12">
											<div class="table-responsive">
												<table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
													<thead class="thead-dark">
														<tr>
															<th></th>
															<th>MONTH</th>
															<th>ENDORSEMENT GOAL</th>
															<th>ACTUAL ENDORSEMENTS</th>
															<th>BILLING GOAL</th>
															<th>ACTUAL BILLING</th>
														</tr>
													</thead>
													<tbody>
														<?php
															$sql = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a LEFT JOIN operations_team_ecclesiastes AS b ON a.team_no = b.team_code WHERE a.team_no = 'TM-000004'";
															$result = $conn->query($sql);
															if ($result->num_rows > 0) {
																while ($row = $result->fetch_assoc()) {
																	$ecclesiastesassigned_month = $row['assigned_month'] ?? null;
																	$newEcclesiastesMonth = date('F Y', strtotime($ecclesiastesassigned_month));
																	$ecclesiastesendo_goal = $row['endo_goal'] ?? null;
																	$ecclesiastesactual_endo = $row['actual_endo'] ?? null;
																	$ecclesiastesbilling_goal = $row['billing_goal'] ?? null;
																	$ecclesiastesactual_billing = $row['actual_billing'] ?? null;

																	?>
																		<tr>
																			<td><div class="feeds-left"><img src="../images/icons/team.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;"></div></td>
																			<td><?php echo $newEcclesiastesMonth; ?></td>
																			<td style="font-weight: bold; color: #228B22;"><?php echo $ecclesiastesendo_goal; ?></td>
																			<?php
																	            if ($ecclesiastesendo_goal > $ecclesiastesactual_endo) {
																	            	?>
																	            		<td style="font-weight: bold; color: #D22B2B;"><?php echo $ecclesiastesactual_endo; ?></td>
																	            	<?php
																	            } else if ($ecclesiastesactual_endo > $ecclesiastesendo_goal) {
																	            	?>
																	            		<td style="font-weight: bold; color: #228B22;"><?php echo $ecclesiastesactual_endo; ?></td>
																	            	<?php
																	            } else if ($ecclesiastesendo_goal = $ecclesiastesactual_endo) {
																	            	?>
																	            		<td style="font-weight: bold; color: #228B22;"><?php echo $ecclesiastesactual_endo; ?></td>
																	            	<?php
																	            }
																			?>
																			<td style="font-weight: bold; color: #228B22;"><?php echo $ecclesiastesbilling_goal; ?></td>
																			<?php
																	            if ($ecclesiastesbilling_goal > $ecclesiastesactual_billing) {
																	            	?>
																	            		<td style="font-weight: bold; color: #D22B2B;"> <?php echo $ecclesiastesactual_billing; ?></td>
																	            	<?php
																	            } else if ($ecclesiastesactual_billing > $ecclesiastesbilling_goal) {
																	            	?>
																						<td style="font-weight: bold; color: #228B22;"> <?php echo $ecclesiastesactual_billing; ?></td>
																	            	<?php
																	            } else if ($ecclesiastesbilling_goal = $ecclesiastesactual_billing) {
																	            	?>
																						<td style="font-weight: bold; color: #228B22;"> <?php echo $ecclesiastesactual_billing; ?></td>
																	            	<?php
																	            }
																			?>
																		</tr>
																	<?php
																}
															}
														?>	
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="teammark">
						            <div class="row clearfix w_social3">
						                <div class="col-lg-3 col-md-6 col-6">
						                    <div class="card">
						                        <div class="icon"><i class="fa fa-file-text-o" style="color: #000;"></i></div>
						                        <div class="content">
						                            <div class="text" style="font-weight: bold; font-size: 12px;">Endorsement Goal <br>(<?php echo $now->format('F Y'); ?>)</div>
						                            <div class="number" id="markendogoal" style="font-weight: bold; color: #228B22;"></div>
						                        </div>
						                    </div>
						                </div>
						                <div class="col-lg-3 col-md-6 col-6">
						                    <div class="card">
						                        <div class="icon"><i class="fa fa-money" style="color: #000;"></i></div>
						                        <div class="content">
						                            <div class="text" style="font-weight: bold; font-size: 12px;">Endorsement Billing Goal  (<?php echo $now->format('F Y'); ?>)</div>
						                            <div class="number" id="markbillinggoal" style="font-weight: bold; color: #228B22;"></div>
						                        </div>
						                    </div>
						                </div>
						                <div class="col-lg-3 col-md-6 col-6">
						                    <div class="card">
						                        <div class="icon"><i class="fa fa-file-text-o" style="color: #000;"></i></div>
						                        <div class="content">
						                            <div class="text" style="font-weight: bold; font-size: 12px;">Actual Endorsements <br>(<?php echo $now->format('F Y'); ?>)</div>
						                            <div id="markactualendo"></div>
						                        </div>
						                    </div>
						                </div>
						                <div class="col-lg-3 col-md-6 col-6">
						                    <div class="card">
						                        <div class="icon"><i class="fa fa-money" style="color: #000;"></i></div>
						                        <div class="content">
						                            <div class="text" style="font-weight: bold; font-size: 12px;">Actual Endorsement Billing  (<?php echo $now->format('F Y'); ?>)</div>
						                            <div id="markactualbilling"></div>
						                        </div>
						                    </div>
						                </div>
						            </div>
									<div class="row">
										<div class="col-md-12">
											<div class="table-responsive">
												<table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
													<thead class="thead-dark">
														<tr>
															<th></th>
															<th>MONTH</th>
															<th>ENDORSEMENT GOAL</th>
															<th>ACTUAL ENDORSEMENTS</th>
															<th>BILLING GOAL</th>
															<th>ACTUAL BILLING</th>
														</tr>
													</thead>
													<tbody>
														<?php
															$sql = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a LEFT JOIN operations_team_mark AS b ON a.team_no = b.team_code WHERE a.team_no = 'TM-000002'";
															$result = $conn->query($sql);
															if ($result->num_rows > 0) {
																while ($row = $result->fetch_assoc()) {
																	$markassigned_month = $row['assigned_month'] ?? null;
																	$newMarkMonth = date('F Y', strtotime($markassigned_month));
																	$markendo_goal = $row['endo_goal'] ?? null;
																	$markactual_endo = $row['actual_endo'] ?? null;
																	$markbilling_goal = $row['billing_goal'] ?? null;
																	$markactual_billing = $row['actual_billing'] ?? null;

																	?>
																		<tr>
																			<td><div class="feeds-left"><img src="../images/icons/team.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;"></div></td>
																			<td><?php echo $newMarkMonth; ?></td>
																			<td style="font-weight: bold; color: #228B22;"><?php echo $markendo_goal; ?></td>
																			<?php
																	            if ($markendo_goal > $markactual_endo) {
																	            	?>
																	            		<td style="font-weight: bold; color: #D22B2B;"><?php echo $markactual_endo; ?></td>
																	            	<?php
																	            } else if ($markactual_endo > $markendo_goal) {
																	            	?>
																	            		<td style="font-weight: bold; color: #228B22;"><?php echo $markactual_endo; ?></td>
																	            	<?php
																	            } else if ($markendo_goal = $markactual_endo) {
																	            	?>
																	            		<td style="font-weight: bold; color: #228B22;"><?php echo $markactual_endo; ?></td>
																	            	<?php
																	            }
																			?>
																			<td style="font-weight: bold; color: #228B22;"><?php echo $markbilling_goal; ?></td>
																			<?php
																	            if ($markbilling_goal > $markactual_billing) {
																	            	?>
																	            		<td style="font-weight: bold; color: #D22B2B;"> <?php echo $markactual_billing; ?></td>
																	            	<?php
																	            } else if ($markactual_billing > $markbilling_goal) {
																	            	?>
																						<td style="font-weight: bold; color: #228B22;"> <?php echo $markactual_billing; ?></td>
																	            	<?php
																	            } else if ($markbilling_goal = $markactual_billing) {
																	            	?>
																						<td style="font-weight: bold; color: #228B22;"> <?php echo $markactual_billing; ?></td>
																	            	<?php
																	            }
																			?>
																		</tr>
																	<?php
																}
															}
														?>	
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="teampsalms">
						            <div class="row clearfix w_social3">
						                <div class="col-lg-3 col-md-6 col-6">
						                    <div class="card">
						                        <div class="icon"><i class="fa fa-file-text-o" style="color: #000;"></i></div>
						                        <div class="content">
						                            <div class="text" style="font-weight: bold; font-size: 12px;">Endorsement Goal <br>(<?php echo $now->format('F Y'); ?>)</div>
						                            <div class="number" id="psalmsendogoal" style="font-weight: bold; color: #228B22;"></div>
						                        </div>
						                    </div>
						                </div>
						                <div class="col-lg-3 col-md-6 col-6">
						                    <div class="card">
						                        <div class="icon"><i class="fa fa-money" style="color: #000;"></i></div>
						                        <div class="content">
						                            <div class="text" style="font-weight: bold; font-size: 12px;">Endorsement Billing Goal  (<?php echo $now->format('F Y'); ?>)</div>
						                            <div class="number" id="psalmsbillinggoal" style="font-weight: bold; color: #228B22;"></div>
						                        </div>
						                    </div>
						                </div>
						                <div class="col-lg-3 col-md-6 col-6">
						                    <div class="card">
						                        <div class="icon"><i class="fa fa-file-text-o" style="color: #000;"></i></div>
						                        <div class="content">
						                            <div class="text" style="font-weight: bold; font-size: 12px;">Actual Endorsements <br>(<?php echo $now->format('F Y'); ?>)</div>
						                            <div id="psalmsactualendo"></div>
						                        </div>
						                    </div>
						                </div>
						                <div class="col-lg-3 col-md-6 col-6">
						                    <div class="card">
						                        <div class="icon"><i class="fa fa-money" style="color: #000;"></i></div>
						                        <div class="content">
						                            <div class="text" style="font-weight: bold; font-size: 12px;">Actual Endorsement Billing  (<?php echo $now->format('F Y'); ?>)</div>
						                            <div id="psalmsactualbilling"></div>
						                        </div>
						                    </div>
						                </div>
						            </div>
									<div class="row">
										<div class="col-md-12">
											<div class="table-responsive">
												<table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
													<thead class="thead-dark">
														<tr>
															<th></th>
															<th>MONTH</th>
															<th>ENDORSEMENT GOAL</th>
															<th>ACTUAL ENDORSEMENTS</th>
															<th>BILLING GOAL</th>
															<th>ACTUAL BILLING</th>
														</tr>
													</thead>
													<tbody>
														<?php
															$sql = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a LEFT JOIN operations_team_psalms AS b ON a.team_no = b.team_code WHERE a.team_no = 'TM-000001'";
															$result = $conn->query($sql);
															if ($result->num_rows > 0) {
																while ($row = $result->fetch_assoc()) {
																	$psalmsassigned_month = $row['assigned_month'] ?? null;
																	$newPsalmsMonth = date('F Y', strtotime($psalmsassigned_month));
																	$psalmsendo_goal = $row['endo_goal'] ?? null;
																	$psalmsactual_endo = $row['actual_endo'] ?? null;
																	$psalmsbilling_goal = $row['billing_goal'] ?? null;
																	$psalmsactual_billing = $row['actual_billing'] ?? null;		

																	?>
																		<tr>
																			<td><div class="feeds-left"><img src="../images/icons/team.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;"></div></td>
																			<td><?php echo $newPsalmsMonth; ?></td>
																			<td style="font-weight: bold; color: #228B22;"><?php echo $psalmsendo_goal; ?></td>
																			<?php
																	            if ($psalmsendo_goal > $psalmsactual_endo) {
																	            	?>
																	            		<td style="font-weight: bold; color: #D22B2B;"><?php echo $psalmsactual_endo; ?></td>
																	            	<?php
																	            } else if ($psalmsactual_endo > $psalmsendo_goal) {
																	            	?>
																	            		<td style="font-weight: bold; color: #228B22;"><?php echo $psalmsactual_endo; ?></td>
																	            	<?php
																	            } else if ($psalmsendo_goal = $psalmsactual_endo) {
																	            	?>
																	            		<td style="font-weight: bold; color: #228B22;"><?php echo $psalmsactual_endo; ?></td>
																	            	<?php
																	            }
																			?>
																			<td style="font-weight: bold; color: #228B22;"><?php echo $psalmsbilling_goal; ?></td>
																			<?php
																	            if ($psalmsbilling_goal > $psalmsactual_billing) {
																	            	?>
																	            		<td style="font-weight: bold; color: #D22B2B;"> <?php echo $psalmsactual_billing; ?></td>
																	            	<?php
																	            } else if ($psalmsactual_billing > $psalmsbilling_goal) {
																	            	?>
																						<td style="font-weight: bold; color: #228B22;"> <?php echo $psalmsactual_billing; ?></td>
																	            	<?php
																	            } else if ($psalmsbilling_goal = $psalmsactual_billing) {
																	            	?>
																						<td style="font-weight: bold; color: #228B22;"> <?php echo $psalmsactual_billing; ?></td>
																	            	<?php
																	            }
																			?>
																		</tr>
																	<?php
																}
															}
														?>	
													</tbody>
												</table>
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