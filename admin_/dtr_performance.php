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
                        <h2>DTR Performance</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href=""><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">DTR Management</li>
                            <li class="breadcrumb-item active">DTR Performance</li>
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
                                                <h4 class="media-heading">DTR Performance</h4>
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
                                                <h4 class="media-heading">Total Current Month DTR Records</h4>
                                                <p style="font-size: 15px;"><?php echo $now->format('F Y'); ?></p>
                                                <p id="admperfmonthlydtr" style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;"></p>
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
                                                <p id="admperfyearlydtr" style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card">
                                                    <div class="row profile_state">
                                                        <div class="body">
                                                            <div class="feeds-left"><img src="../images/icons/team.png" class="rounded-circle width35" alt="" style="width: 60px; margin-top: -2px; margin-left: 90px;"></div>
                                                            <h5 class="m-b-0 number count-to" data-from="0" data-to="2365" data-speed="1000" data-fresh-interval="700" id="totalcountpocdtr" style="margin-left: 90px;"></h5>
                                                            <small style="font-weight: bold; margin-left: 90px;">SUPERVISORS</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card">
                                                    <div class="row profile_state">
                                                        <div class="body">
                                                            <div class="feeds-left"><img src="../images/icons/team.png" class="rounded-circle width35" alt="" style="width: 60px; margin-top: -2px; margin-left: 90px;"></div>
                                                            <h5 class="m-b-0 number count-to" data-from="0" data-to="2365" data-speed="1000" data-fresh-interval="700" id="totalcountopsdtr" style="margin-left: 90px;"></h5>
                                                            <small style="font-weight: bold; margin-left: 90px;">OPERATIONS</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card">
                                                    <div class="row profile_state">
                                                        <div class="body">
                                                            <div class="feeds-left"><img src="../images/icons/team.png" class="rounded-circle width35" alt="" style="width: 60px; margin-top: -2px; margin-left: 90px;"></div>
                                                            <h5 class="m-b-0 number count-to" data-from="0" data-to="2365" data-speed="1000" data-fresh-interval="700" id="totalcountitsuppdtr" style="margin-left: 90px;"></h5>
                                                            <small style="font-weight: bold; margin-left: 90px;">IT SUPPORT</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs-new2 customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#adminjan" role="tab" style="font-size: 9px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;JAN</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#adminfeb" role="tab" style="font-size: 9px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;FEB</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#adminmar" role="tab" style="font-size: 9px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;MAR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#adminapr" role="tab" style="font-size: 9px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;APR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#adminmay" role="tab" style="font-size: 9px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;MAY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#adminjune" role="tab" style="font-size: 9px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;JUNE</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#adminjuly" role="tab" style="font-size: 9px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;JULY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#adminaug" role="tab" style="font-size: 9px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;AUG</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#adminsept" role="tab" style="font-size: 9px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;SEPT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#adminoct" role="tab" style="font-size: 9px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;OCT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#adminnov" role="tab" style="font-size: 9px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;NOV</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#admindec" role="tab" style="font-size: 9px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;DEC</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                            <div class="tab-content br-n pn">
                                <div id="adminjan" class="tab-pane p-3 active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="float-md-right">
                                                <div id="janadmdtr"></div>
                                            </p>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE CREATED</th>
                                                            <th>ACTIVITY</th>
                                                            <th>STATUS</th>
                                                            <th>TEAM</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.supervisor_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_supervisor AS a LEFT JOIN dtr_supervisor AS b ON a.user_id = b.supervisor_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '01' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team_one, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.operations_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_operations AS a LEFT JOIN dtr_operations AS b ON a.user_id = b.operations_id LEFT JOIN team_list AS c ON a.assigned_team_one = c.team_no WHERE MONTH(b.date_created) = '01' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.support_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_support AS a LEFT JOIN dtr_itsupport AS b ON a.user_id = b.support_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '01' AND YEAR(b.date_created) = YEAR(NOW()) ORDER BY date_created DESC";
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
                                                                            <td><?php echo $row['team_name']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecordpoc();"><i class="fa fa-clipboard"></i></button>
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
                                <div id="adminfeb" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="float-md-right">
                                                <div id="febadmdtr"></div>
                                            </p>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE CREATED</th>
                                                            <th>ACTIVITY</th>
                                                            <th>STATUS</th>
                                                            <th>TEAM</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.supervisor_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_supervisor AS a LEFT JOIN dtr_supervisor AS b ON a.user_id = b.supervisor_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '02' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team_one, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.operations_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_operations AS a LEFT JOIN dtr_operations AS b ON a.user_id = b.operations_id LEFT JOIN team_list AS c ON a.assigned_team_one = c.team_no WHERE MONTH(b.date_created) = '02' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.support_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_support AS a LEFT JOIN dtr_itsupport AS b ON a.user_id = b.support_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '02' AND YEAR(b.date_created) = YEAR(NOW()) ORDER BY date_created DESC";
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
                                                                            <td><?php echo $row['team_name']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecordpoc();"><i class="fa fa-clipboard"></i></button>
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
                                <div id="adminmar" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="float-md-right">
                                                <div id="maradmdtr"></div>
                                            </p>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE CREATED</th>
                                                            <th>ACTIVITY</th>
                                                            <th>STATUS</th>
                                                            <th>TEAM</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.supervisor_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_supervisor AS a LEFT JOIN dtr_supervisor AS b ON a.user_id = b.supervisor_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '03' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team_one, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.operations_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_operations AS a LEFT JOIN dtr_operations AS b ON a.user_id = b.operations_id LEFT JOIN team_list AS c ON a.assigned_team_one = c.team_no WHERE MONTH(b.date_created) = '03' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.support_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_support AS a LEFT JOIN dtr_itsupport AS b ON a.user_id = b.support_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '03' AND YEAR(b.date_created) = YEAR(NOW()) ORDER BY date_created DESC";
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
                                                                            <td><?php echo $row['team_name']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecordpoc();"><i class="fa fa-clipboard"></i></button>
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
                                <div id="adminapr" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="float-md-right">
                                                <div id="apradmdtr"></div>
                                            </p>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE CREATED</th>
                                                            <th>ACTIVITY</th>
                                                            <th>STATUS</th>
                                                            <th>TEAM</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.supervisor_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_supervisor AS a LEFT JOIN dtr_supervisor AS b ON a.user_id = b.supervisor_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '04' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team_one, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.operations_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_operations AS a LEFT JOIN dtr_operations AS b ON a.user_id = b.operations_id LEFT JOIN team_list AS c ON a.assigned_team_one = c.team_no WHERE MONTH(b.date_created) = '04' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.support_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_support AS a LEFT JOIN dtr_itsupport AS b ON a.user_id = b.support_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '04' AND YEAR(b.date_created) = YEAR(NOW()) ORDER BY date_created DESC";
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
                                                                            <td><?php echo $row['team_name']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecordpoc();"><i class="fa fa-clipboard"></i></button>
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
                                <div id="adminmay" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="float-md-right">
                                                <div id="mayadmdtr"></div>
                                            </p>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE CREATED</th>
                                                            <th>ACTIVITY</th>
                                                            <th>STATUS</th>
                                                            <th>TEAM</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.supervisor_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_supervisor AS a LEFT JOIN dtr_supervisor AS b ON a.user_id = b.supervisor_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '05' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team_one, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.operations_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_operations AS a LEFT JOIN dtr_operations AS b ON a.user_id = b.operations_id LEFT JOIN team_list AS c ON a.assigned_team_one = c.team_no WHERE MONTH(b.date_created) = '05' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.support_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_support AS a LEFT JOIN dtr_itsupport AS b ON a.user_id = b.support_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '05' AND YEAR(b.date_created) = YEAR(NOW()) ORDER BY date_created DESC";
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
                                                                            <td><?php echo $row['team_name']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecordpoc();"><i class="fa fa-clipboard"></i></button>
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
                                <div id="adminjune" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="float-md-right">
                                                <div id="juneadmdtr"></div>
                                            </p>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE CREATED</th>
                                                            <th>ACTIVITY</th>
                                                            <th>STATUS</th>
                                                            <th>TEAM</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.supervisor_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_supervisor AS a LEFT JOIN dtr_supervisor AS b ON a.user_id = b.supervisor_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '06' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team_one, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.operations_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_operations AS a LEFT JOIN dtr_operations AS b ON a.user_id = b.operations_id LEFT JOIN team_list AS c ON a.assigned_team_one = c.team_no WHERE MONTH(b.date_created) = '06' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.support_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_support AS a LEFT JOIN dtr_itsupport AS b ON a.user_id = b.support_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '06' AND YEAR(b.date_created) = YEAR(NOW()) ORDER BY date_created DESC";
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
                                                                            <td><?php echo $row['team_name']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecordpoc();"><i class="fa fa-clipboard"></i></button>
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
                                <div id="adminjuly" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="float-md-right">
                                                <div id="julyadmdtr"></div>
                                            </p>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE CREATED</th>
                                                            <th>ACTIVITY</th>
                                                            <th>STATUS</th>
                                                            <th>TEAM</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.supervisor_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_supervisor AS a LEFT JOIN dtr_supervisor AS b ON a.user_id = b.supervisor_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '07' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team_one, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.operations_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_operations AS a LEFT JOIN dtr_operations AS b ON a.user_id = b.operations_id LEFT JOIN team_list AS c ON a.assigned_team_one = c.team_no WHERE MONTH(b.date_created) = '07' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.support_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_support AS a LEFT JOIN dtr_itsupport AS b ON a.user_id = b.support_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '07' AND YEAR(b.date_created) = YEAR(NOW()) ORDER BY date_created DESC";
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
                                                                            <td><?php echo $row['team_name']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecordpoc();"><i class="fa fa-clipboard"></i></button>
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
                                <div id="adminaug" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="float-md-right">
                                                <div id="augadmdtr"></div>
                                            </p>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE CREATED</th>
                                                            <th>ACTIVITY</th>
                                                            <th>STATUS</th>
                                                            <th>TEAM</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.supervisor_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_supervisor AS a LEFT JOIN dtr_supervisor AS b ON a.user_id = b.supervisor_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '08' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team_one, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.operations_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_operations AS a LEFT JOIN dtr_operations AS b ON a.user_id = b.operations_id LEFT JOIN team_list AS c ON a.assigned_team_one = c.team_no WHERE MONTH(b.date_created) = '08' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.support_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_support AS a LEFT JOIN dtr_itsupport AS b ON a.user_id = b.support_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '08' AND YEAR(b.date_created) = YEAR(NOW()) ORDER BY date_created DESC";
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
                                                                            <td><?php echo $row['team_name']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecordpoc();"><i class="fa fa-clipboard"></i></button>
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
                                <div id="adminsept" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="float-md-right">
                                                <div id="septadmdtr"></div>
                                            </p>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE CREATED</th>
                                                            <th>ACTIVITY</th>
                                                            <th>STATUS</th>
                                                            <th>TEAM</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.supervisor_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_supervisor AS a LEFT JOIN dtr_supervisor AS b ON a.user_id = b.supervisor_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '09' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team_one, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.operations_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_operations AS a LEFT JOIN dtr_operations AS b ON a.user_id = b.operations_id LEFT JOIN team_list AS c ON a.assigned_team_one = c.team_no WHERE MONTH(b.date_created) = '09' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.support_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_support AS a LEFT JOIN dtr_itsupport AS b ON a.user_id = b.support_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '09' AND YEAR(b.date_created) = YEAR(NOW()) ORDER BY date_created DESC";
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
                                                                            <td><?php echo $row['team_name']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecordpoc();"><i class="fa fa-clipboard"></i></button>
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
                                <div id="adminoct" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="float-md-right">
                                                <div id="octadmdtr"></div>
                                            </p>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE CREATED</th>
                                                            <th>ACTIVITY</th>
                                                            <th>STATUS</th>
                                                            <th>TEAM</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.supervisor_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_supervisor AS a LEFT JOIN dtr_supervisor AS b ON a.user_id = b.supervisor_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '10' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team_one, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.operations_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_operations AS a LEFT JOIN dtr_operations AS b ON a.user_id = b.operations_id LEFT JOIN team_list AS c ON a.assigned_team_one = c.team_no WHERE MONTH(b.date_created) = '10' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.support_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_support AS a LEFT JOIN dtr_itsupport AS b ON a.user_id = b.support_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '10' AND YEAR(b.date_created) = YEAR(NOW()) ORDER BY date_created DESC";
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
                                                                            <td><?php echo $row['team_name']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecordpoc();"><i class="fa fa-clipboard"></i></button>
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
                                <div id="adminnov" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="float-md-right">
                                                <div id="novadmdtr"></div>
                                            </p>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE CREATED</th>
                                                            <th>ACTIVITY</th>
                                                            <th>STATUS</th>
                                                            <th>TEAM</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.supervisor_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_supervisor AS a LEFT JOIN dtr_supervisor AS b ON a.user_id = b.supervisor_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '11' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team_one, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.operations_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_operations AS a LEFT JOIN dtr_operations AS b ON a.user_id = b.operations_id LEFT JOIN team_list AS c ON a.assigned_team_one = c.team_no WHERE MONTH(b.date_created) = '11' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.support_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_support AS a LEFT JOIN dtr_itsupport AS b ON a.user_id = b.support_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '11' AND YEAR(b.date_created) = YEAR(NOW()) ORDER BY date_created DESC";
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
                                                                            <td><?php echo $row['team_name']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecordpoc();"><i class="fa fa-clipboard"></i></button>
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
                                <div id="admindec" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="float-md-right">
                                                <div id="decadmdtr"></div>
                                            </p>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE CREATED</th>
                                                            <th>ACTIVITY</th>
                                                            <th>STATUS</th>
                                                            <th>TEAM</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.supervisor_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_supervisor AS a LEFT JOIN dtr_supervisor AS b ON a.user_id = b.supervisor_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '12' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team_one, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.operations_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_operations AS a LEFT JOIN dtr_operations AS b ON a.user_id = b.operations_id LEFT JOIN team_list AS c ON a.assigned_team_one = c.team_no WHERE MONTH(b.date_created) = '12' AND YEAR(b.date_created) = YEAR(NOW()) UNION ALL SELECT a.user_id, a.assigned_team, a.fname, a.lname, a.suffix, a.user_image, b.id, b.dtr_id, b.support_id, b.date_created, b.activity_, b.quantity_, b.status_, b.datetime_added, c.team_no, c.team_name FROM tbl_support AS a LEFT JOIN dtr_itsupport AS b ON a.user_id = b.support_id LEFT JOIN team_list AS c ON a.assigned_team = c.team_no WHERE MONTH(b.date_created) = '12' AND YEAR(b.date_created) = YEAR(NOW()) ORDER BY date_created DESC";
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
                                                                            <td><?php echo $row['team_name']; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View DTR Record" onclick="viewdtrrecord('<?php echo $newDateCreated; ?>', '<?php echo $row['system_type']; ?>', '<?php echo $row['activity_']; ?>', '<?php echo $row['quantity_']; ?>', '<?php echo $row['status_']; ?>', '<?php echo $newDateTimeAdded; ?>'); savesupviewdtrrecordpoc();"><i class="fa fa-clipboard"></i></button>
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