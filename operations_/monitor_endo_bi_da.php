<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    if (!empty($_GET['bieditreport'])) {
        switch($_GET['bieditreport']){
            case 'succsend':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['success']('Editing of report succesfully updated.');
                    </script>
                <?php
            break;

            case 'errsend':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Cannot edit report.');
                    </script>
                <?php
            break;

            default:
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Report editing error.');
                    </script>
                <?php
            break;
        }

    }

    if (!empty($_GET['sendrepbipoc'])) {
        switch ($_GET['sendrepbipoc']) {
            case 'succsend':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['success']('Successfully sending of report.');
                    </script>
                <?php
            break;

            case 'errsend':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Cannot send report.');
                    </script>
                <?php
            break;

            default:
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Report sending error.');
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
                        <h2>Background Investigation</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Monitor Endorsements</li>
                            <li class="breadcrumb-item active">Background Investigation</li>
                        </ul>   
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
                                                    <i class="fa fa-files-o text-dark"></i>
                                                </p>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Total Current Month Endorsements</h4>
                                                <p style="font-size: 15px;"><?php echo $now->format('F Y'); ?></p>
                                            </div>
                                                <p id="monthlyopsbidaendo" style="font-size: 25px; text-align: right; font-weight: bold;"></p>
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
                                                <h4 class="media-heading">Total Current Year Endorsements</h4>
                                                <p style="font-size: 15px;"><?php echo $now->format('Y'); ?></p>
                                                <p id="yearlyopsbidaendo" style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs-new2 customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#opsbidajan" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;JAN</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbidafeb" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;FEB</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbidamar" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-files-stack"></i>&nbsp;&nbsp;MAR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbidaapr" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;APR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbidamay" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;MAY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbidajune" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;JUNE</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbidajuly" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;JULY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbidaaug" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;AUG</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbidasept" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;SEPT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbidaoct" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;OCT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbidanov" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;NOV</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbidadec" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;DEC</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                            <div class="tab-content br-n pn">
                                <div id="opsbidajan" class="tab-pane p-3 active"> 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="janopsbida"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th>ENDORSEMENT CODE</th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_da, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_analyst AS f ON d.endo_code = f.endo_code WHERE f.assigned_da = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '01' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endocode = $row2["endo_code"] ?? null;

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">Done</span>';
                                                                    } else if ($row['endo_status'] == '4') {
                                                                        $endostatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $endostatus = "";
                                                                    }

                                                                    // IMPORTANCE //
                                                                    if ($row['importance'] == '1') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                    } else if ($row['importance'] == '2') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                    } else {
                                                                        $endoimportant = "";
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td><?php echo $endo_code ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endostatus; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <?php
                                                                                    if ($endocode == "") {
                                                                                        ?>
                                                                                            <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaeditreport();" href="bi_edit_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit Report"><i class="fa fa-pencil-square-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidadownloadreport();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
                                                                                        <?php
                                                                                    }
                                                                                ?>
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
                                <div  id="opsbidafeb" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="febopsbida"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_da, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_analyst AS f ON d.endo_code = f.endo_code WHERE f.assigned_da = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '02' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endocode = $row2["endo_code"] ?? null;

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">Done</span>';
                                                                    } else if ($row['endo_status'] == '4') {
                                                                        $endostatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $endostatus = "";
                                                                    }

                                                                    // IMPORTANCE //
                                                                    if ($row['importance'] == '1') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                    } else if ($row['importance'] == '2') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                    } else {
                                                                        $endoimportant = "";
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endostatus; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <?php
                                                                                    if ($endocode == "") {
                                                                                        ?>
                                                                                            <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaeditreport();" href="bi_edit_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit Report"><i class="fa fa-pencil-square-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidadownloadreport();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
                                                                                        <?php
                                                                                    }
                                                                                ?>
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
                                <div  id="opsbidamar" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="maropsbida"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_da, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_analyst AS f ON d.endo_code = f.endo_code WHERE f.assigned_da = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '03' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endocode = $row2["endo_code"] ?? null;

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">Done</span>';
                                                                    } else if ($row['endo_status'] == '4') {
                                                                        $endostatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $endostatus = "";
                                                                    }

                                                                    // IMPORTANCE //
                                                                    if ($row['importance'] == '1') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                    } else if ($row['importance'] == '2') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                    } else {
                                                                        $endoimportant = "";
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endostatus; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <?php
                                                                                    if ($endocode == "") {
                                                                                        ?>
                                                                                            <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaeditreport();" href="bi_edit_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit Report"><i class="fa fa-pencil-square-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidadownloadreport();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
                                                                                        <?php
                                                                                    }
                                                                                ?>
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
                                <div  id="opsbidaapr" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="apropsbida"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_da, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_analyst AS f ON d.endo_code = f.endo_code WHERE f.assigned_da = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '04' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endocode = $row2["endo_code"] ?? null;

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">Done</span>';
                                                                    } else if ($row['endo_status'] == '4') {
                                                                        $endostatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $endostatus = "";
                                                                    }

                                                                    // IMPORTANCE //
                                                                    if ($row['importance'] == '1') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                    } else if ($row['importance'] == '2') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                    } else {
                                                                        $endoimportant = "";
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endostatus; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <?php
                                                                                    if ($endocode == "") {
                                                                                        ?>
                                                                                            <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaeditreport();" href="bi_edit_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit Report"><i class="fa fa-pencil-square-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidadownloadreport();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
                                                                                        <?php
                                                                                    }
                                                                                ?>
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
                                <div  id="opsbidamay" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="mayopsbida"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_da, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_analyst AS f ON d.endo_code = f.endo_code WHERE f.assigned_da = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '05' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endocode = $row2["endo_code"] ?? null;

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">Done</span>';
                                                                    } else if ($row['endo_status'] == '4') {
                                                                        $endostatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $endostatus = "";
                                                                    }

                                                                    // IMPORTANCE //
                                                                    if ($row['importance'] == '1') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                    } else if ($row['importance'] == '2') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                    } else {
                                                                        $endoimportant = "";
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endostatus; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <?php
                                                                                    if ($endocode == "") {
                                                                                        ?>
                                                                                            <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaeditreport();" href="bi_edit_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit Report"><i class="fa fa-pencil-square-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidadownloadreport();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
                                                                                        <?php
                                                                                    }
                                                                                ?>
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
                                <div  id="opsbidajune" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="juneopsbida"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_da, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_analyst AS f ON d.endo_code = f.endo_code WHERE f.assigned_da = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '06' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endocode = $row2["endo_code"] ?? null;

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">Done</span>';
                                                                    } else if ($row['endo_status'] == '4') {
                                                                        $endostatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $endostatus = "";
                                                                    }

                                                                    // IMPORTANCE //
                                                                    if ($row['importance'] == '1') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                    } else if ($row['importance'] == '2') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                    } else {
                                                                        $endoimportant = "";
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endostatus; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <?php
                                                                                    if ($endocode == "") {
                                                                                        ?>
                                                                                            <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaeditreport();" href="bi_edit_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit Report"><i class="fa fa-pencil-square-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidadownloadreport();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
                                                                                        <?php
                                                                                    }
                                                                                ?>
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
                                <div  id="opsbidajuly" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="julyopsbida"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_da, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_analyst AS f ON d.endo_code = f.endo_code WHERE f.assigned_da = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '07' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endocode = $row2["endo_code"] ?? null;

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">Done</span>';
                                                                    } else if ($row['endo_status'] == '4') {
                                                                        $endostatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $endostatus = "";
                                                                    }

                                                                    // IMPORTANCE //
                                                                    if ($row['importance'] == '1') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                    } else if ($row['importance'] == '2') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                    } else {
                                                                        $endoimportant = "";
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endostatus; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <?php
                                                                                    if ($endocode == "") {
                                                                                        ?>
                                                                                            <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaeditreport();" href="bi_edit_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit Report"><i class="fa fa-pencil-square-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidadownloadreport();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
                                                                                        <?php
                                                                                    }
                                                                                ?>
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
                                <div  id="opsbidaaug" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="augopsbida"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_da, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_analyst AS f ON d.endo_code = f.endo_code WHERE f.assigned_da = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '08' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endocode = $row2["endo_code"] ?? null;

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">Done</span>';
                                                                    } else if ($row['endo_status'] == '4') {
                                                                        $endostatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $endostatus = "";
                                                                    }

                                                                    // IMPORTANCE //
                                                                    if ($row['importance'] == '1') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                    } else if ($row['importance'] == '2') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                    } else {
                                                                        $endoimportant = "";
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endostatus; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <?php
                                                                                    if ($endocode == "") {
                                                                                        ?>
                                                                                            <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaeditreport();" href="bi_edit_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit Report"><i class="fa fa-pencil-square-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidadownloadreport();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
                                                                                        <?php
                                                                                    }
                                                                                ?>
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
                                <div  id="opsbidasept" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="septopsbida"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_da, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_analyst AS f ON d.endo_code = f.endo_code WHERE f.assigned_da = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '09' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endocode = $row2["endo_code"] ?? null;

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">Done</span>';
                                                                    } else if ($row['endo_status'] == '4') {
                                                                        $endostatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $endostatus = "";
                                                                    }

                                                                    // IMPORTANCE //
                                                                    if ($row['importance'] == '1') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                    } else if ($row['importance'] == '2') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                    } else {
                                                                        $endoimportant = "";
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endostatus; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <?php
                                                                                    if ($endocode == "") {
                                                                                        ?>
                                                                                            <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaeditreport();" href="bi_edit_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit Report"><i class="fa fa-pencil-square-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidadownloadreport();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
                                                                                        <?php
                                                                                    }
                                                                                ?>
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
                                <div  id="opsbidaoct" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="octopsbida"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_da, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_analyst AS f ON d.endo_code = f.endo_code WHERE f.assigned_da = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '10' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endocode = $row2["endo_code"] ?? null;

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">Done</span>';
                                                                    } else if ($row['endo_status'] == '4') {
                                                                        $endostatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $endostatus = "";
                                                                    }

                                                                    // IMPORTANCE //
                                                                    if ($row['importance'] == '1') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                    } else if ($row['importance'] == '2') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                    } else {
                                                                        $endoimportant = "";
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endostatus; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <?php
                                                                                    if ($endocode == "") {
                                                                                        ?>
                                                                                            <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaeditreport();" href="bi_edit_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit Report"><i class="fa fa-pencil-square-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidadownloadreport();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
                                                                                        <?php
                                                                                    }
                                                                                ?>
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
                                <div  id="opsbidanov" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="novopsbida"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_da, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_analyst AS f ON d.endo_code = f.endo_code WHERE f.assigned_da = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '11' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endocode = $row2["endo_code"] ?? null;

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">Done</span>';
                                                                    } else if ($row['endo_status'] == '4') {
                                                                        $endostatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $endostatus = "";
                                                                    }

                                                                    // IMPORTANCE //
                                                                    if ($row['importance'] == '1') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                    } else if ($row['importance'] == '2') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                    } else {
                                                                        $endoimportant = "";
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endostatus; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <?php
                                                                                    if ($endocode == "") {
                                                                                        ?>
                                                                                            <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaeditreport();" href="bi_edit_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit Report"><i class="fa fa-pencil-square-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidadownloadreport();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
                                                                                        <?php
                                                                                    }
                                                                                ?>
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
                                <div  id="opsbidadec" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="decopsbida"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_da, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_analyst AS f ON d.endo_code = f.endo_code WHERE f.assigned_da = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '12' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endocode = $row2["endo_code"] ?? null;

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">Done</span>';
                                                                    } else if ($row['endo_status'] == '4') {
                                                                        $endostatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $endostatus = "";
                                                                    }

                                                                    // IMPORTANCE //
                                                                    if ($row['importance'] == '1') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                    } else if ($row['importance'] == '2') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                    } else {
                                                                        $endoimportant = "";
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endostatus; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <?php
                                                                                    if ($endocode == "") {
                                                                                        ?>
                                                                                            <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbidaviewendo();" href="view_bi_da_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaeditreport();" href="bi_edit_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit Report"><i class="fa fa-pencil-square-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidaviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbidadownloadreport();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
                                                                                        <?php
                                                                                    }
                                                                                ?>
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