<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    if (!empty($_GET['status'])) {
        switch($_GET['status']){
            case 'succ':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['success']('DTR Record(s) succesfully added.');
                    </script>
                <?php
            break;

            case 'err':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Cannot add DTR record(s).');
                    </script>
                <?php
            break;

            case 'invalid_file':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['warning']('Invalid file format.');
                    </script>
                <?php
            break;

            case 'duplicate_entry':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('DTR Record(s) already existed in list.');
                    </script>
                <?php
            break;

            default:
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('DTR error.');
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
                        <h2>Manage DTR</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">DTR Management</li>
                            <li class="breadcrumb-item active">Manage DTR</li>
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
                                                    Daily Time Records
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
                                                <p id="supportmonthlydtr" style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;"></p>
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
                                                <p id="supportyearlydtr" style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    						</div>
                            <ul class="nav nav-tabs-new2 customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#supportjan" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;JAN</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportfeb" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;FEB</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportmar" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-files-stack"></i>&nbsp;&nbsp;MAR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportapr" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;APR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportmay" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;MAY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportjune" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;JUNE</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportjuly" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;JULY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportaug" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;AUG</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportsept" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;SEPT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportoct" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;OCT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportnov" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;NOV</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportdec" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;DEC</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                            <div class="tab-content br-n pn">
                                <div id="supportjan" class="tab-pane p-3 active"> 
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
                                                            $sql = " SELECT a.id, a.dtr_id, a.support_id, a.date_created, a.system_type, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.user_image FROM dtr_itsupport AS a LEFT JOIN tbl_support AS b ON a.support_id = b.user_id WHERE b.user_id = '". $_SESSION['user_id'] ."' AND MONTH(a.date_created) = '01' AND YEAR(a.date_created) = YEAR(NOW()) ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/task.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $newDateCreated ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
                                                                            <td><?php echo $row['status_']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
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
                                <div  id="supportfeb" class="tab-pane p-3">
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
                                                            $sql = " SELECT a.id, a.dtr_id, a.support_id, a.date_created, a.system_type, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.user_image FROM dtr_itsupport AS a LEFT JOIN tbl_support AS b ON a.support_id = b.user_id WHERE b.user_id = '". $_SESSION['user_id'] ."' AND MONTH(a.date_created) = '02' AND YEAR(a.date_created) = YEAR(NOW()) ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/task.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $newDateCreated ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
                                                                            <td><?php echo $row['status_']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
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
                                <div  id="supportmar" class="tab-pane p-3">
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
                                                            $sql = " SELECT a.id, a.dtr_id, a.support_id, a.date_created, a.system_type, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.user_image FROM dtr_itsupport AS a LEFT JOIN tbl_support AS b ON a.support_id = b.user_id WHERE b.user_id = '". $_SESSION['user_id'] ."' AND MONTH(a.date_created) = '03' AND YEAR(a.date_created) = YEAR(NOW()) ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/task.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $newDateCreated ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
                                                                            <td><?php echo $row['status_']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
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
                                <div  id="supportapr" class="tab-pane p-3">
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
                                                            $sql = " SELECT a.id, a.dtr_id, a.support_id, a.date_created, a.system_type, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.user_image FROM dtr_itsupport AS a LEFT JOIN tbl_support AS b ON a.support_id = b.user_id WHERE b.user_id = '". $_SESSION['user_id'] ."' AND MONTH(a.date_created) = '04' AND YEAR(a.date_created) = YEAR(NOW()) ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/task.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $newDateCreated ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
                                                                            <td><?php echo $row['status_']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
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
                                <div  id="supportmay" class="tab-pane p-3">
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
                                                            $sql = " SELECT a.id, a.dtr_id, a.support_id, a.date_created, a.system_type, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.user_image FROM dtr_itsupport AS a LEFT JOIN tbl_support AS b ON a.support_id = b.user_id WHERE b.user_id = '". $_SESSION['user_id'] ."' AND MONTH(a.date_created) = '05' AND YEAR(a.date_created) = YEAR(NOW()) ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/task.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $newDateCreated ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
                                                                            <td><?php echo $row['status_']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
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
                                <div  id="supportjune" class="tab-pane p-3">
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
                                                            $sql = " SELECT a.id, a.dtr_id, a.support_id, a.date_created, a.system_type, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.user_image FROM dtr_itsupport AS a LEFT JOIN tbl_support AS b ON a.support_id = b.user_id WHERE b.user_id = '". $_SESSION['user_id'] ."' AND MONTH(a.date_created) = '06' AND YEAR(a.date_created) = YEAR(NOW()) ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/task.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $newDateCreated ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
                                                                            <td><?php echo $row['status_']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
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
                                <div  id="supportjuly" class="tab-pane p-3">
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
                                                            $sql = " SELECT a.id, a.dtr_id, a.support_id, a.date_created, a.system_type, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.user_image FROM dtr_itsupport AS a LEFT JOIN tbl_support AS b ON a.support_id = b.user_id WHERE b.user_id = '". $_SESSION['user_id'] ."' AND MONTH(a.date_created) = '07' AND YEAR(a.date_created) = YEAR(NOW()) ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/task.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $newDateCreated ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
                                                                            <td><?php echo $row['status_']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
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
                                <div  id="supportaug" class="tab-pane p-3">
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
                                                            $sql = " SELECT a.id, a.dtr_id, a.support_id, a.date_created, a.system_type, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.user_image FROM dtr_itsupport AS a LEFT JOIN tbl_support AS b ON a.support_id = b.user_id WHERE b.user_id = '". $_SESSION['user_id'] ."' AND MONTH(a.date_created) = '08' AND YEAR(a.date_created) = YEAR(NOW()) ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/task.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $newDateCreated ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
                                                                            <td><?php echo $row['status_']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
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
                                <div  id="supportsept" class="tab-pane p-3">
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
                                                            $sql = " SELECT a.id, a.dtr_id, a.support_id, a.date_created, a.system_type, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.user_image FROM dtr_itsupport AS a LEFT JOIN tbl_support AS b ON a.support_id = b.user_id WHERE b.user_id = '". $_SESSION['user_id'] ."' AND MONTH(a.date_created) = '09' AND YEAR(a.date_created) = YEAR(NOW()) ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/task.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $newDateCreated ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
                                                                            <td><?php echo $row['status_']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
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
                                <div  id="supportoct" class="tab-pane p-3">
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
                                                            $sql = " SELECT a.id, a.dtr_id, a.support_id, a.date_created, a.system_type, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.user_image FROM dtr_itsupport AS a LEFT JOIN tbl_support AS b ON a.support_id = b.user_id WHERE b.user_id = '". $_SESSION['user_id'] ."' AND MONTH(a.date_created) = '10' AND YEAR(a.date_created) = YEAR(NOW()) ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/task.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $newDateCreated ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
                                                                            <td><?php echo $row['status_']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
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
                                <div  id="supportnov" class="tab-pane p-3">
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
                                                            $sql = " SELECT a.id, a.dtr_id, a.support_id, a.date_created, a.system_type, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.user_image FROM dtr_itsupport AS a LEFT JOIN tbl_support AS b ON a.support_id = b.user_id WHERE b.user_id = '". $_SESSION['user_id'] ."' AND MONTH(a.date_created) = '11' AND YEAR(a.date_created) = YEAR(NOW()) ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/task.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $newDateCreated ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
                                                                            <td><?php echo $row['status_']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
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
                                <div  id="supportdec" class="tab-pane p-3">
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
                                                            $sql = " SELECT a.id, a.dtr_id, a.support_id, a.date_created, a.system_type, a.activity_, a.quantity_, a.status_, a.datetime_added, b.user_id, b.fname, b.lname, b.suffix, b.user_image FROM dtr_itsupport AS a LEFT JOIN tbl_support AS b ON a.support_id = b.user_id WHERE b.user_id = '". $_SESSION['user_id'] ."' AND MONTH(a.date_created) = '12' AND YEAR(a.date_created) = YEAR(NOW()) ORDER BY a.date_created DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                    $date_created = $row['date_created'];
                                                                    $newDateCreated = date("F j, Y", strtotime($date_created));
                                                                    ?>
                                                                        <tr>
                                                                            <td><div class="feeds-left"><img src="../images/icons/task.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                                            <td><?php echo $newDateCreated ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['activity_']; ?></td>
                                                                            <td><?php echo $row['status_']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecord();"><i class="fa fa-clipboard"></i></button>
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