<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    if (!empty($_GET['approvaldc'])) {
        switch ($_GET['approvaldc']) {
            case 'succ':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['success']('Successfully updating of package.');
                    </script>
                <?php
            break;

            case 'err':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Cannot update package.');
                    </script>
                <?php
            break;

            default:
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Updating of package error.');
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
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2>Database Check</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href=""><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Rerun Endorsement</li>
                            <li class="breadcrumb-item active">Database Check</li>
                        </ul>   
                    </div>
                </div> 
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="body">
                            <ul class="nav nav-tabs-new2">
                                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#dcpendingpackage">Pending</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#dcapprovedpackage">Approved</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#dcdeniedpackage">Denied</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="dcpendingpackage">
                                    <div class="header">
                                        <div class="card" style="height: 85px; margin-left: -20px;">
                                            <div class="card-body">
                                                <div class="media mleft">
                                                    <div class="media-left">
                                                        <p style="font-size: 36px; margin-top: -7px;">
                                                            <i class="fa fa-info-circle text-success"></i>
                                                        </p>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Viewing of Pending Rerun Endorsements</h4>
                                                        <?php echo $now->format('Y'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                            <thead class="thead-dark">
                                                <th></th>
                                                <th>DATE</th>
                                                <th>NAME</th>
                                                <th>STATUS</th>
                                                <th style="text-align: center;">ACTIONS</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, a.change_package, b.id, b.endo_code, b.current_package, b.new_package, b.approval_, b.remarks_, b.datetime_added, b.datetime_approval, c.user_id, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname, ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, d.supervisor_, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_rerun_endorsement AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endorsed_to = '".$_SESSION["user_id"]."' AND a.change_package = '1' AND b.approval_ = '0' ORDER BY b.id DESC";
                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            $endo_status = $row['endo_status'];
                                                            $endo_date = $row['endo_date'];
                                                            $newDateEndo = date('F d, Y', strtotime($endo_date));
                                                            $newDateTimeEndo = date('F d, Y - g:i A', strtotime($endo_date));
                                                            $datetime_added = $row['turn_around_date'];
                                                            $newDateAdded = date('F d, Y', strtotime($datetime_added));

                                                            if ($row['importance'] == '1') {
                                                                $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                            } else if ($row['importance'] == '2') {
                                                                $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                            }

                                                            ?>
                                                                <tr>
                                                                    <td><?php echo $endoimportant; ?></td>
                                                                    <td><?php echo $newDateEndo; ?></td>
                                                                    <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                    <td>
                                                                    <?php
                                                                        if ($endo_status == '0') {
                                                                            echo "<span class='badge badge-warning' style='font-weight: bold;'>Pending</span>";
                                                                        } else if ($endo_status == '1') {
                                                                            echo "<span class='badge badge-info' style='font-weight: bold;'>Received</span>";
                                                                        } else if ($endo_status == '2') {
                                                                            echo "<span class='badge badge-danger' style='font-weight: bold;'>On-Process</span>";
                                                                        } else if ($endo_status == '3') {
                                                                            echo "<span class='badge badge-default' style='font-weight: bold;'>Done</span>";
                                                                        } else if ($endo_status == '4') {
                                                                            echo "<span class='badge badge-success' style='font-weight: bold;'>Completed</span>";
                                                                        } else {
                                                                            echo "";
                                                                        }
                                                                    ?> 
                                                                    </td>
                                                                    <td style="text-align: center;">
                                                                        <a onclick="savepocrerundcapprovalpkg()" href="rerun_approval_dc.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Approval of Package"><i class="fa fa-check-circle-o"></i></a>
                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Rerun Endorsement" onclick="savepocrerundcviewrerunendo();"><i class="fa fa-file-text-o"></i></button>
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
                                <div class="tab-pane" id="dcapprovedpackage">
                                    <div class="header">
                                        <div class="card" style="height: 85px; margin-left: -20px;">
                                            <div class="card-body">
                                                <div class="media mleft">
                                                    <div class="media-left">
                                                        <p style="font-size: 36px; margin-top: -7px;">
                                                            <i class="fa fa-info-circle text-success"></i>
                                                        </p>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Viewing of Approved Rerun Endorsements</h4>
                                                        <?php echo $now->format('Y'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                            <thead class="thead-dark">
                                                <th></th>
                                                <th>DATE</th>
                                                <th>NAME</th>
                                                <th>STATUS</th>
                                                <th style="text-align: center;">ACTIONS</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, a.change_package, b.id, b.endo_code, b.current_package, b.new_package, b.approval_, b.remarks_, b.datetime_added, b.datetime_approval, c.user_id, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname, ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, d.supervisor_, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_rerun_endorsement AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endorsed_to = '".$_SESSION["user_id"]."' AND a.change_package = '2' AND b.approval_ = '1' ORDER BY b.id DESC";
                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            $endo_status = $row['endo_status'];
                                                            $endo_date = $row['endo_date'];
                                                            $newDateEndo = date('F d, Y', strtotime($endo_date));
                                                            $newDateTimeEndo = date('F d, Y - g:i A', strtotime($endo_date));

                                                            if ($row['importance'] == '1') {
                                                                $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                            } else if ($row['importance'] == '2') {
                                                                $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                            }

                                                            ?>
                                                                <tr>
                                                                    <td><?php echo $endoimportant; ?></td>
                                                                    <td><?php echo $newDateEndo; ?></td>
                                                                    <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                    <td>
                                                                    <?php
                                                                        if ($endo_status == '0') {
                                                                            echo "<span class='badge badge-warning' style='font-weight: bold;'>Pending</span>";
                                                                        } else if ($endo_status == '1') {
                                                                            echo "<span class='badge badge-info' style='font-weight: bold;'>Received</span>";
                                                                        } else if ($endo_status == '2') {
                                                                            echo "<span class='badge badge-danger' style='font-weight: bold;'>On-Process</span>";
                                                                        } else if ($endo_status == '3') {
                                                                            echo "<span class='badge badge-default' style='font-weight: bold;'>Done</span>";
                                                                        } else if ($endo_status == '4') {
                                                                            echo "<span class='badge badge-success' style='font-weight: bold;'>Completed</span>";
                                                                        } else {
                                                                            echo "";
                                                                        }
                                                                    ?> 
                                                                    </td>
                                                                    <td style="text-align: center;">
                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Rerun Endorsement" onclick="savepocrerundcviewrerunendo();"><i class="fa fa-file-text-o"></i></button>
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
                                <div class="tab-pane" id="dcdeniedpackage">
                                    <div class="header">
                                        <div class="card" style="height: 85px; margin-left: -20px;">
                                            <div class="card-body">
                                                <div class="media mleft">
                                                    <div class="media-left">
                                                        <p style="font-size: 36px; margin-top: -7px;">
                                                            <i class="fa fa-info-circle text-success"></i>
                                                        </p>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Viewing of Denied Rerun Endorsements</h4>
                                                        <?php echo $now->format('Y'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                            <thead class="thead-dark">
                                                <th></th>
                                                <th>DATE</th>
                                                <th>NAME</th>
                                                <th>STATUS</th>
                                                <th style="text-align: center;">ACTIONS</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, a.change_package, b.id, b.endo_code, b.current_package, b.new_package, b.approval_, b.remarks_, b.datetime_added, b.datetime_approval, c.user_id, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname, ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, d.supervisor_, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_rerun_endorsement AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endorsed_to = '".$_SESSION["user_id"]."' AND b.approval_ = '2'  ORDER BY b.id DESC";
                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            $endo_status = $row['endo_status'];
                                                            $endo_date = $row['endo_date'];
                                                            $newDateEndo = date('F d, Y', strtotime($endo_date));
                                                            $newDateTimeEndo = date('F d, Y - g:i A', strtotime($endo_date));

                                                            if ($row['importance'] == '1') {
                                                                $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                            } else if ($row['importance'] == '2') {
                                                                $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                            }
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo $endoimportant; ?></td>
                                                                    <td><?php echo $newDateEndo; ?></td>
                                                                    <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                    <td>
                                                                    <?php
                                                                        if ($endo_status == '0') {
                                                                            echo "<span class='badge badge-warning' style='font-weight: bold;'>Pending</span>";
                                                                        } else if ($endo_status == '1') {
                                                                            echo "<span class='badge badge-info' style='font-weight: bold;'>Received</span>";
                                                                        } else if ($endo_status == '2') {
                                                                            echo "<span class='badge badge-danger' style='font-weight: bold;'>On-Process</span>";
                                                                        } else if ($endo_status == '3') {
                                                                            echo "<span class='badge badge-default' style='font-weight: bold;'>Done</span>";
                                                                        } else if ($endo_status == '4') {
                                                                            echo "<span class='badge badge-success' style='font-weight: bold;'>Completed</span>";
                                                                        } else {
                                                                            echo "";
                                                                        }
                                                                    ?> 
                                                                    </td>
                                                                    <td style="text-align: center;">
                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Rerun Endorsement" onclick="savepocrerundcviewrerunendo();"><i class="fa fa-file-text-o"></i></button>
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

<?php
    include 'modals.php';
    include 'script.php';
?>