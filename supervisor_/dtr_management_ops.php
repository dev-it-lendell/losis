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
						<h2>Operations</h2>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href=""><i class="fa fa-home"></i></a></li>
							<li class="breadcrumb-item">DTR Management</li>
							<li class="breadcrumb-item active">Operations</li>
						</ul>	
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
                                                <h4 class="media-heading">Uploading and Viewing of DTR</h4>
                                                    TEAM <?php echo $spv_teamname; ?> - OPERATIONS
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
                                                <h4 class="media-heading">Total Current Month DTR Records</h4>
                                                <p style="font-size: 15px;"><?php echo $now->format('F Y'); ?></p>
                                                <p id="supopsmonthlydtr" style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="height: 85px; margin-top: -10px;">
                                    <div class="card-body">
                                        <div class="media mleft">
                                            <div class="media-left">
                                                <p style="font-size: 36px; margin-top: -7px;">
                                                    <i class="fa fa-calendar-o text-dark"></i>
                                                </p>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Total Current Year DTR Records</h4>
                                                <p style="font-size: 15px;"><?php echo $now->format('Y'); ?></p>
                                                <p id="supopsyearlydtr" style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="card">
									<div class="row profile_state">
										<?php
											$sql = "SELECT a.user_id, a.fname, a.lname, a.suffix, a.assigned_team_one, a.user_image, b.user_id, b.userstatus_ FROM tbl_operations AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id WHERE a.assigned_team_one = '$team_' AND b.userstatus_ = '1' ORDER BY a.lname ASC";
											$result = $conn->query($sql);
											if ($result->num_rows > 0) {
												while ($row = $result->fetch_assoc()) {
													$user_id = $row['user_id'];
													$user_image = $row['user_image'];
													$sql1 = "SELECT COUNT(id) AS operationsid FROM dtr_operations WHERE assigned_team = '$team_'AND operations_id = '$user_id' AND MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW())";
													$result1 = $conn->query($sql1);
													while ($row1 = $result1->fetch_assoc()) {
		            									$operationsid = $row1['operationsid']; 
													} 

													?>
														<div class="col-lg-3 col-6">
															<div class="body">
									                            <?php
									                                echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 60px; margin-top: 6px;"></div>';
									                            ?>
									                            <h5 class="m-b-0 number count-to" data-from="0" data-to="2365" data-speed="1000" data-fresh-interval="700"><?php echo $operationsid; ?></h5>
									                            <small style="font-weight: bold;"><?php echo strtoupper($row['lname']). ', ' .$row['fname']. ' ' .$row['suffix']; ?></small>
															</div>
														</div>
													<?php
												}
											}
										?>
									</div>
								</div>
    						</div>
                            <ul class="nav nav-tabs-new2 customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#supervisorjan" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;JAN</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisorfeb" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;FEB</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisormar" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-files-stack"></i>&nbsp;&nbsp;MAR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisorapr" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;APR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisormay" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;MAY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisorjune" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;JUNE</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisorjuly" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;JULY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisoraug" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;AUG</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisorsept" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;SEPT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisoroct" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;OCT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisornov" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;NOV</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisordec" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;DEC</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
							<div class="tab-content br-n pn">
								<div id="supervisorjan" class="tab-pane p-3 active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
															<th></th>
															<th>DATE CREATED</th>
															<th>ACTIVITY</th>
															<th>STATUS</th>
															<th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.dtr_id, a.operations_id, a.assigned_team, a.date_created, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.assigned_team_one, b.user_image, c.user_id, c.userstatus_ FROM dtr_operations AS a LEFT JOIN tbl_operations AS b ON a.operations_id = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE a.assigned_team = '$team_' AND MONTH(a.datetime_added) = '01' AND YEAR(a.datetime_added) = YEAR(NOW()) AND c.userstatus_ = '1' ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $username = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$username.'"></div>'
                                                                                ?>
                                                                            </td>
																			<td><?php echo $newDateCreated ?></td>
																			<td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
																			<td><?php echo $row['status_']; ?></td>
																			<td style="text-align: center;">
																				<button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savepocopsviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
																			</td>
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
								<div id="supervisorfeb" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
															<th></th>
															<th>DATE CREATED</th>
															<th>ACTIVITY</th>
															<th>STATUS</th>
															<th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.dtr_id, a.operations_id, a.assigned_team, a.date_created, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.assigned_team_one, b.user_image, c.user_id, c.userstatus_ FROM dtr_operations AS a LEFT JOIN tbl_operations AS b ON a.operations_id = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE a.assigned_team = '$team_' AND MONTH(a.datetime_added) = '02' AND YEAR(a.datetime_added) = YEAR(NOW()) AND c.userstatus_ = '1' ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $username = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$username.'"></div>'
                                                                                ?>
                                                                            </td>
																			<td><?php echo $newDateCreated ?></td>
																			<td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
																			<td><?php echo $row['status_']; ?></td>
																			<td style="text-align: center;">
																				<button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savepocopsviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
																			</td>
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
								<div id="supervisormar" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
															<th></th>
															<th>DATE CREATED</th>
															<th>ACTIVITY</th>
															<th>STATUS</th>
															<th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.dtr_id, a.operations_id, a.assigned_team, a.date_created, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.assigned_team_one, b.user_image, c.user_id, c.userstatus_ FROM dtr_operations AS a LEFT JOIN tbl_operations AS b ON a.operations_id = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE a.assigned_team = '$team_' AND MONTH(a.datetime_added) = '03' AND YEAR(a.datetime_added) = YEAR(NOW()) AND c.userstatus_ = '1' ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $username = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$username.'"></div>'
                                                                                ?>
                                                                            </td>
																			<td><?php echo $newDateCreated ?></td>
																			<td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
																			<td><?php echo $row['status_']; ?></td>
																			<td style="text-align: center;">
																				<button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savepocopsviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
																			</td>
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
								<div id="supervisorapr" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
															<th></th>
															<th>DATE CREATED</th>
															<th>ACTIVITY</th>
															<th>STATUS</th>
															<th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.dtr_id, a.operations_id, a.assigned_team, a.date_created, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.assigned_team_one, b.user_image, c.user_id, c.userstatus_ FROM dtr_operations AS a LEFT JOIN tbl_operations AS b ON a.operations_id = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE a.assigned_team = '$team_' AND MONTH(a.datetime_added) = '04' AND YEAR(a.datetime_added) = YEAR(NOW()) AND c.userstatus_ = '1' ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $username = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$username.'"></div>'
                                                                                ?>
                                                                            </td>
																			<td><?php echo $newDateCreated ?></td>
																			<td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
																			<td><?php echo $row['status_']; ?></td>
																			<td style="text-align: center;">
																				<button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savepocopsviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
																			</td>
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
								<div id="supervisormay" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
															<th></th>
															<th>DATE CREATED</th>
															<th>ACTIVITY</th>
															<th>STATUS</th>
															<th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.dtr_id, a.operations_id, a.assigned_team, a.date_created, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.assigned_team_one, b.user_image, c.user_id, c.userstatus_ FROM dtr_operations AS a LEFT JOIN tbl_operations AS b ON a.operations_id = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE a.assigned_team = '$team_' AND MONTH(a.datetime_added) = '05' AND YEAR(a.datetime_added) = YEAR(NOW()) AND c.userstatus_ = '1' ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $username = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$username.'"></div>'
                                                                                ?>
                                                                            </td>
																			<td><?php echo $newDateCreated ?></td>
																			<td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
																			<td><?php echo $row['status_']; ?></td>
																			<td style="text-align: center;">
																				<button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savepocopsviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
																			</td>
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
								<div id="supervisorjune" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
															<th></th>
															<th>DATE CREATED</th>
															<th>ACTIVITY</th>
															<th>STATUS</th>
															<th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.dtr_id, a.operations_id, a.assigned_team, a.date_created, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.assigned_team_one, b.user_image, c.user_id, c.userstatus_ FROM dtr_operations AS a LEFT JOIN tbl_operations AS b ON a.operations_id = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE a.assigned_team = '$team_' AND MONTH(a.datetime_added) = '06' AND YEAR(a.datetime_added) = YEAR(NOW()) AND c.userstatus_ = '1' ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $username = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$username.'"></div>'
                                                                                ?>
                                                                            </td>
																			<td><?php echo $newDateCreated ?></td>
																			<td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
																			<td><?php echo $row['status_']; ?></td>
																			<td style="text-align: center;">
																				<button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savepocopsviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
																			</td>
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
								<div id="supervisorjuly" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
															<th></th>
															<th>DATE CREATED</th>
															<th>ACTIVITY</th>
															<th>STATUS</th>
															<th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.dtr_id, a.operations_id, a.assigned_team, a.date_created, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.assigned_team_one, b.user_image, c.user_id, c.userstatus_ FROM dtr_operations AS a LEFT JOIN tbl_operations AS b ON a.operations_id = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE a.assigned_team = '$team_' AND MONTH(a.datetime_added) = '07' AND YEAR(a.datetime_added) = YEAR(NOW()) AND c.userstatus_ = '1' ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $username = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$username.'"></div>'
                                                                                ?>
                                                                            </td>
																			<td><?php echo $newDateCreated ?></td>
																			<td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
																			<td><?php echo $row['status_']; ?></td>
																			<td style="text-align: center;">
																				<button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savepocopsviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
																			</td>
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
								<div id="supervisoraug" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
															<th></th>
															<th>DATE CREATED</th>
															<th>ACTIVITY</th>
															<th>STATUS</th>
															<th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.dtr_id, a.operations_id, a.assigned_team, a.date_created, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.assigned_team_one, b.user_image, c.user_id, c.userstatus_ FROM dtr_operations AS a LEFT JOIN tbl_operations AS b ON a.operations_id = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE a.assigned_team = '$team_' AND MONTH(a.datetime_added) = '08' AND YEAR(a.datetime_added) = YEAR(NOW()) AND c.userstatus_ = '1' ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $username = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$username.'"></div>'
                                                                                ?>
                                                                            </td>
																			<td><?php echo $newDateCreated ?></td>
																			<td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
																			<td><?php echo $row['status_']; ?></td>
																			<td style="text-align: center;">
																				<button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savepocopsviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
																			</td>
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
								<div id="supervisorsept" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
															<th></th>
															<th>DATE CREATED</th>
															<th>ACTIVITY</th>
															<th>STATUS</th>
															<th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.dtr_id, a.operations_id, a.assigned_team, a.date_created, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.assigned_team_one, b.user_image, c.user_id, c.userstatus_ FROM dtr_operations AS a LEFT JOIN tbl_operations AS b ON a.operations_id = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE a.assigned_team = '$team_' AND MONTH(a.datetime_added) = '09' AND YEAR(a.datetime_added) = YEAR(NOW()) AND c.userstatus_ = '1' ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $username = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$username.'"></div>'
                                                                                ?>
                                                                            </td>
																			<td><?php echo $newDateCreated ?></td>
																			<td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
																			<td><?php echo $row['status_']; ?></td>
																			<td style="text-align: center;">
																				<button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savepocopsviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
																			</td>
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
								<div id="supervisoroct" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
															<th></th>
															<th>DATE CREATED</th>
															<th>ACTIVITY</th>
															<th>STATUS</th>
															<th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.dtr_id, a.operations_id, a.assigned_team, a.date_created, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.assigned_team_one, b.user_image, c.user_id, c.userstatus_ FROM dtr_operations AS a LEFT JOIN tbl_operations AS b ON a.operations_id = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE a.assigned_team = '$team_' AND MONTH(a.datetime_added) = '10' AND YEAR(a.datetime_added) = YEAR(NOW()) AND c.userstatus_ = '1' ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $username = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$username.'"></div>'
                                                                                ?>
                                                                            </td>
																			<td><?php echo $newDateCreated ?></td>
																			<td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
																			<td><?php echo $row['status_']; ?></td>
																			<td style="text-align: center;">
																				<button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savepocopsviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
																			</td>
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
								<div id="supervisornov" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
															<th></th>
															<th>DATE CREATED</th>
															<th>ACTIVITY</th>
															<th>STATUS</th>
															<th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.dtr_id, a.operations_id, a.assigned_team, a.date_created, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.assigned_team_one, b.user_image, c.user_id, c.userstatus_ FROM dtr_operations AS a LEFT JOIN tbl_operations AS b ON a.operations_id = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE a.assigned_team = '$team_' AND MONTH(a.datetime_added) = '11' AND YEAR(a.datetime_added) = YEAR(NOW()) AND c.userstatus_ = '1' ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $username = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$username.'"></div>'
                                                                                ?>
                                                                            </td>
																			<td><?php echo $newDateCreated ?></td>
																			<td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
																			<td><?php echo $row['status_']; ?></td>
																			<td style="text-align: center;">
																				<button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savepocopsviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
																			</td>
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
								<div id="supervisordec" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
															<th></th>
															<th>DATE CREATED</th>
															<th>ACTIVITY</th>
															<th>STATUS</th>
															<th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.dtr_id, a.operations_id, a.assigned_team, a.date_created, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.assigned_team_one, b.user_image, c.user_id, c.userstatus_ FROM dtr_operations AS a LEFT JOIN tbl_operations AS b ON a.operations_id = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE a.assigned_team = '$team_' AND MONTH(a.datetime_added) = '12' AND YEAR(a.datetime_added) = YEAR(NOW()) AND c.userstatus_ = '1' ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $username = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$username.'"></div>'
                                                                                ?>
                                                                            </td>
																			<td><?php echo $newDateCreated ?></td>
																			<td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
																			<td><?php echo $row['status_']; ?></td>
																			<td style="text-align: center;">
																				<button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savepocopsviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
																			</td>
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