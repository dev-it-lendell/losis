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
                        <h2>My Activity Logs</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">User Profile</li>
                            <li class="breadcrumb-item active">My Activity Logs</li>
                        </ul>   
                    </div>  
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-danger" style="float: right; margin-right: 5px; margin-top: 15px;" onclick="back_ops_user_profile(); saveopsuserprofile();"><i class="fa fa-arrow-left"></i> Back</button>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12">
					<div class="card planned_task">
						<div class="col-md-12 mt-3">
							<div class="header">
                                <div class="card" style="height: 85px; margin-top: -10px;">
                                    <div class="card-body">
                                        <div class="media mleft">
                                            <div class="media-left">
                                                <p style="font-size: 36px; margin-top: -7px;">
                                                    <i class="fa fa-list-alt text-dark"></i>
                                                </p>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Total Current Month Activity Logs</h4>
                                                <p style="font-size: 15px;"><?php echo $now->format('F Y'); ?></p>
                                                <p id="officialopsmonthlyactlogs" style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;"></p>
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
                                                <h4 class="media-heading">Total Current Year Activity Logs</h4>
                                                <p style="font-size: 15px;"><?php echo $now->format('Y'); ?></p>
                                                <p id="officialopsyearlyactlogs" style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
                            <ul class="nav nav-tabs-new2 customtab" role="tablist">
                                <li class="nav-item">
                                    <div class="slide"></div>
                                    <a class="nav-link active" data-toggle="tab" href="#opsjan" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;JAN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsfeb" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;FEB</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsmar" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-files-stack"></i>&nbsp;&nbsp;MAR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsapr" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;APR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsmay" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;MAY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsjune" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;JUNE</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsjuly" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;JULY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsaug" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;AUG</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opssept" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;SEPT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsoct" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;OCT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsnov" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;NOV</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsdec" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;DEC</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                            <div class="tab-content br-n pn">
                                <div id="opsjan" class="tab-pane p-3 active"> 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>LOGS ID</th>
                                                            <th>MODULE</th>
                                                            <th>LOG DATE AND TIME</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_operations_history_logs WHERE MONTH(datetime_log) = '01' AND YEAR(datetime_log) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_log = $row['datetime_log'];
                                                                    $newDateTimelog = date('F d, Y - g:i A', strtotime($datetime_log));

                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/activity.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $row['logs_id']; ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['x_module']; ?></td>
                                                                            <td><?php echo $newDateTimelog ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Activity Log"><i class="fa fa-file-text-o"></i></button>
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
                                <div  id="opsfeb" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>LOGS ID</th>
                                                            <th>MODULE</th>
                                                            <th>LOG DATE AND TIME</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_operations_history_logs WHERE MONTH(datetime_log) = '02' AND YEAR(datetime_log) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_log = $row['datetime_log'];
                                                                    $newDateTimelog = date('F d, Y - g:i A', strtotime($datetime_log));

                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/activity.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $row['logs_id']; ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['x_module']; ?></td>
                                                                            <td><?php echo $newDateTimelog ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Activity Log"><i class="fa fa-file-text-o"></i></button>
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
                                <div  id="opsmar" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>LOGS ID</th>
                                                            <th>MODULE</th>
                                                            <th>LOG DATE AND TIME</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_operations_history_logs WHERE MONTH(datetime_log) = '03' AND YEAR(datetime_log) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_log = $row['datetime_log'];
                                                                    $newDateTimelog = date('F d, Y - g:i A', strtotime($datetime_log));

                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/activity.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $row['logs_id']; ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['x_module']; ?></td>
                                                                            <td><?php echo $newDateTimelog ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Activity Log"><i class="fa fa-file-text-o"></i></button>
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
                                <div  id="opsapr" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>LOGS ID</th>
                                                            <th>MODULE</th>
                                                            <th>LOG DATE AND TIME</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_operations_history_logs WHERE MONTH(datetime_log) = '04' AND YEAR(datetime_log) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_log = $row['datetime_log'];
                                                                    $newDateTimelog = date('F d, Y - g:i A', strtotime($datetime_log));

                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/activity.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $row['logs_id']; ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['x_module']; ?></td>
                                                                            <td><?php echo $newDateTimelog ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Activity Log"><i class="fa fa-file-text-o"></i></button>
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
                                <div  id="opsmay" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>LOGS ID</th>
                                                            <th>MODULE</th>
                                                            <th>LOG DATE AND TIME</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_operations_history_logs WHERE MONTH(datetime_log) = '05' AND YEAR(datetime_log) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_log = $row['datetime_log'];
                                                                    $newDateTimelog = date('F d, Y - g:i A', strtotime($datetime_log));

                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/activity.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $row['logs_id']; ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['x_module']; ?></td>
                                                                            <td><?php echo $newDateTimelog ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Activity Log"><i class="fa fa-file-text-o"></i></button>
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
                                <div  id="opsjune" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>LOGS ID</th>
                                                            <th>MODULE</th>
                                                            <th>LOG DATE AND TIME</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_operations_history_logs WHERE MONTH(datetime_log) = '06' AND YEAR(datetime_log) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_log = $row['datetime_log'];
                                                                    $newDateTimelog = date('F d, Y - g:i A', strtotime($datetime_log));

                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/activity.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $row['logs_id']; ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['x_module']; ?></td>
                                                                            <td><?php echo $newDateTimelog ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Activity Log"><i class="fa fa-file-text-o"></i></button>
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
                                <div  id="opsjuly" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>LOGS ID</th>
                                                            <th>MODULE</th>
                                                            <th>LOG DATE AND TIME</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_operations_history_logs WHERE MONTH(datetime_log) = '07' AND YEAR(datetime_log) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_log = $row['datetime_log'];
                                                                    $newDateTimelog = date('F d, Y - g:i A', strtotime($datetime_log));

                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/activity.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $row['logs_id']; ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['x_module']; ?></td>
                                                                            <td><?php echo $newDateTimelog ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Activity Log"><i class="fa fa-file-text-o"></i></button>
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
                                <div  id="opsaug" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>LOGS ID</th>
                                                            <th>MODULE</th>
                                                            <th>LOG DATE AND TIME</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_operations_history_logs WHERE MONTH(datetime_log) = '08' AND YEAR(datetime_log) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_log = $row['datetime_log'];
                                                                    $newDateTimelog = date('F d, Y - g:i A', strtotime($datetime_log));

                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/activity.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $row['logs_id']; ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['x_module']; ?></td>
                                                                            <td><?php echo $newDateTimelog ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Activity Log"><i class="fa fa-file-text-o"></i></button>
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
                                <div  id="opssept" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>LOGS ID</th>
                                                            <th>MODULE</th>
                                                            <th>LOG DATE AND TIME</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_operations_history_logs WHERE MONTH(datetime_log) = '09' AND YEAR(datetime_log) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_log = $row['datetime_log'];
                                                                    $newDateTimelog = date('F d, Y - g:i A', strtotime($datetime_log));

                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/activity.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $row['logs_id']; ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['x_module']; ?></td>
                                                                            <td><?php echo $newDateTimelog ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Activity Log"><i class="fa fa-file-text-o"></i></button>
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
                                <div  id="opsoct" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>LOGS ID</th>
                                                            <th>MODULE</th>
                                                            <th>LOG DATE AND TIME</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_operations_history_logs WHERE MONTH(datetime_log) = '10' AND YEAR(datetime_log) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_log = $row['datetime_log'];
                                                                    $newDateTimelog = date('F d, Y - g:i A', strtotime($datetime_log));

                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/activity.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $row['logs_id']; ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['x_module']; ?></td>
                                                                            <td><?php echo $newDateTimelog ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Activity Log"><i class="fa fa-file-text-o"></i></button>
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
                                <div  id="opsnov" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>LOGS ID</th>
                                                            <th>MODULE</th>
                                                            <th>LOG DATE AND TIME</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_operations_history_logs WHERE MONTH(datetime_log) = '11' AND YEAR(datetime_log) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_log = $row['datetime_log'];
                                                                    $newDateTimelog = date('F d, Y - g:i A', strtotime($datetime_log));

                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/activity.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $row['logs_id']; ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['x_module']; ?></td>
                                                                            <td><?php echo $newDateTimelog ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Activity Log"><i class="fa fa-file-text-o"></i></button>
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
                                <div  id="opsdec" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>LOGS ID</th>
                                                            <th>MODULE</th>
                                                            <th>LOG DATE AND TIME</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_operations_history_logs WHERE MONTH(datetime_log) = '12' AND YEAR(datetime_log) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_log = $row['datetime_log'];
                                                                    $newDateTimelog = date('F d, Y - g:i A', strtotime($datetime_log));

                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/activity.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $row['logs_id']; ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['x_module']; ?></td>
                                                                            <td><?php echo $newDateTimelog ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Activity Log"><i class="fa fa-file-text-o"></i></button>
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