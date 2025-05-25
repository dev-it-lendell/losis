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
                        <h2>Monitor Endorsements</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active">Monitor Endorsements</li>
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
                                                <p id="monthlyopsbiteleendo" style="font-size: 25px; text-align: right; font-weight: bold;"></p>
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
                                                <p id="yearlyopsbiteleendo" style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs-new2 customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#opsbitelejan" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;JAN</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbitelefeb" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;FEB</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbitelemar" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-files-stack"></i>&nbsp;&nbsp;MAR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbiteleapr" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;APR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbitelemay" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;MAY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbitelejune" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;JUNE</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbitelejuly" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;JULY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbiteleaug" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;AUG</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbitelesept" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;SEPT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbiteleoct" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;OCT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbitelenov" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;NOV</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opsbiteledec" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;DEC</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                            <div class="tab-content br-n pn">
                                <div id="opsbitelejan" class="tab-pane p-3 active"> 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="janopsbitele"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_specialist, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_specialist AS f ON d.endo_code = f.endo_code WHERE f.assigned_specialist = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '01' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql1 = "SELECT * FROM create_report_options WHERE endorsement_code = '$endo_code'";
                                                                    $result1 = $conn->query($sql1);
                                                                    $row1 = mysqli_fetch_array($result1);
                                                                    $endorsement_code = $row1["endorsement_code"] ?? null;

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endo_code = $row2["endo_code"] ?? null;

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
                                                                                    if ($endorsement_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbitelecreatereport();" href="bi_create_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Create Report"><i class="fa fa-plus-circle"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else if ($endo_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewreportform();" href="bi_report_form.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Report Form"><i class="fa fa-files-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteledownloadrep();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div id="opsbitelefeb" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="febopsbitele"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_specialist, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_specialist AS f ON d.endo_code = f.endo_code WHERE f.assigned_specialist = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '02' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql1 = "SELECT * FROM create_report_options WHERE endorsement_code = '$endo_code'";
                                                                    $result1 = $conn->query($sql1);
                                                                    $row1 = mysqli_fetch_array($result1);
                                                                    $endorsement_code = $row1["endorsement_code"] ?? null;

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endo_code = $row2["endo_code"] ?? null;

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
                                                                                    if ($endorsement_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbitelecreatereport();" href="bi_create_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Create Report"><i class="fa fa-plus-circle"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else if ($endo_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewreportform();" href="bi_report_form.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Report Form"><i class="fa fa-files-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteledownloadrep();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div id="opsbitelemar" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="maropsbitele"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_specialist, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_specialist AS f ON d.endo_code = f.endo_code WHERE f.assigned_specialist = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '03' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql1 = "SELECT * FROM create_report_options WHERE endorsement_code = '$endo_code'";
                                                                    $result1 = $conn->query($sql1);
                                                                    $row1 = mysqli_fetch_array($result1);
                                                                    $endorsement_code = $row1["endorsement_code"] ?? null;

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endo_code = $row2["endo_code"] ?? null;

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
                                                                                    if ($endorsement_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbitelecreatereport();" href="bi_create_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Create Report"><i class="fa fa-plus-circle"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else if ($endo_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewreportform();" href="bi_report_form.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Report Form"><i class="fa fa-files-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteledownloadrep();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div id="opsbiteleapr" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="apropsbitele"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_specialist, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_specialist AS f ON d.endo_code = f.endo_code WHERE f.assigned_specialist = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '04' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql1 = "SELECT * FROM create_report_options WHERE endorsement_code = '$endo_code'";
                                                                    $result1 = $conn->query($sql1);
                                                                    $row1 = mysqli_fetch_array($result1);
                                                                    $endorsement_code = $row1["endorsement_code"] ?? null;

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endo_code = $row2["endo_code"] ?? null;

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
                                                                                    if ($endorsement_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbitelecreatereport();" href="bi_create_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Create Report"><i class="fa fa-plus-circle"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else if ($endo_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewreportform();" href="bi_report_form.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Report Form"><i class="fa fa-files-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteledownloadrep();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div id="opsbitelemay" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="mayopsbitele"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_specialist, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_specialist AS f ON d.endo_code = f.endo_code WHERE f.assigned_specialist = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '05' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql1 = "SELECT * FROM create_report_options WHERE endorsement_code = '$endo_code'";
                                                                    $result1 = $conn->query($sql1);
                                                                    $row1 = mysqli_fetch_array($result1);
                                                                    $endorsement_code = $row1["endorsement_code"] ?? null;

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endo_code = $row2["endo_code"] ?? null;

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
                                                                                    if ($endorsement_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbitelecreatereport();" href="bi_create_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Create Report"><i class="fa fa-plus-circle"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else if ($endo_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewreportform();" href="bi_report_form.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Report Form"><i class="fa fa-files-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteledownloadrep();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div id="opsbitelejune" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="juneopsbitele"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_specialist, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_specialist AS f ON d.endo_code = f.endo_code WHERE f.assigned_specialist = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '06' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql1 = "SELECT * FROM create_report_options WHERE endorsement_code = '$endo_code'";
                                                                    $result1 = $conn->query($sql1);
                                                                    $row1 = mysqli_fetch_array($result1);
                                                                    $endorsement_code = $row1["endorsement_code"] ?? null;

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endo_code = $row2["endo_code"] ?? null;

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
                                                                                    if ($endorsement_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbitelecreatereport();" href="bi_create_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Create Report"><i class="fa fa-plus-circle"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else if ($endo_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewreportform();" href="bi_report_form.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Report Form"><i class="fa fa-files-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteledownloadrep();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div id="opsbitelejuly" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="julyopsbitele"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_specialist, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_specialist AS f ON d.endo_code = f.endo_code WHERE f.assigned_specialist = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '07' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql1 = "SELECT * FROM create_report_options WHERE endorsement_code = '$endo_code'";
                                                                    $result1 = $conn->query($sql1);
                                                                    $row1 = mysqli_fetch_array($result1);
                                                                    $endorsement_code = $row1["endorsement_code"] ?? null;

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endo_code = $row2["endo_code"] ?? null;

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
                                                                                    if ($endorsement_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbitelecreatereport();" href="bi_create_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Create Report"><i class="fa fa-plus-circle"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else if ($endo_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewreportform();" href="bi_report_form.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Report Form"><i class="fa fa-files-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteledownloadrep();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div id="opsbiteleaug" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="augopsbitele"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_specialist, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_specialist AS f ON d.endo_code = f.endo_code WHERE f.assigned_specialist = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '08' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql1 = "SELECT * FROM create_report_options WHERE endorsement_code = '$endo_code'";
                                                                    $result1 = $conn->query($sql1);
                                                                    $row1 = mysqli_fetch_array($result1);
                                                                    $endorsement_code = $row1["endorsement_code"] ?? null;

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endo_code = $row2["endo_code"] ?? null;

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
                                                                                    if ($endorsement_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbitelecreatereport();" href="bi_create_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Create Report"><i class="fa fa-plus-circle"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else if ($endo_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewreportform();" href="bi_report_form.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Report Form"><i class="fa fa-files-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteledownloadrep();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div id="opsbitelesept" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="septopsbitele"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_specialist, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_specialist AS f ON d.endo_code = f.endo_code WHERE f.assigned_specialist = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '09' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql1 = "SELECT * FROM create_report_options WHERE endorsement_code = '$endo_code'";
                                                                    $result1 = $conn->query($sql1);
                                                                    $row1 = mysqli_fetch_array($result1);
                                                                    $endorsement_code = $row1["endorsement_code"] ?? null;

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endo_code = $row2["endo_code"] ?? null;

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
                                                                                    if ($endorsement_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbitelecreatereport();" href="bi_create_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Create Report"><i class="fa fa-plus-circle"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else if ($endo_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewreportform();" href="bi_report_form.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Report Form"><i class="fa fa-files-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteledownloadrep();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div id="opsbiteleoct" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="octopsbitele"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_specialist, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_specialist AS f ON d.endo_code = f.endo_code WHERE f.assigned_specialist = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '10' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql1 = "SELECT * FROM create_report_options WHERE endorsement_code = '$endo_code'";
                                                                    $result1 = $conn->query($sql1);
                                                                    $row1 = mysqli_fetch_array($result1);
                                                                    $endorsement_code = $row1["endorsement_code"] ?? null;

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endo_code = $row2["endo_code"] ?? null;

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
                                                                                    if ($endorsement_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbitelecreatereport();" href="bi_create_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Create Report"><i class="fa fa-plus-circle"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else if ($endo_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewreportform();" href="bi_report_form.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Report Form"><i class="fa fa-files-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteledownloadrep();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div id="opsbitelenov" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="novopsbitele"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_specialist, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_specialist AS f ON d.endo_code = f.endo_code WHERE f.assigned_specialist = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '11' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql1 = "SELECT * FROM create_report_options WHERE endorsement_code = '$endo_code'";
                                                                    $result1 = $conn->query($sql1);
                                                                    $row1 = mysqli_fetch_array($result1);
                                                                    $endorsement_code = $row1["endorsement_code"] ?? null;

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endo_code = $row2["endo_code"] ?? null;

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
                                                                                    if ($endorsement_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbitelecreatereport();" href="bi_create_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Create Report"><i class="fa fa-plus-circle"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else if ($endo_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewreportform();" href="bi_report_form.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Report Form"><i class="fa fa-files-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteledownloadrep();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div id="opsbiteledec" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="decopsbitele"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.endo_code, f.assigned_by, f.assigned_specialist, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_specialist AS f ON d.endo_code = f.endo_code WHERE f.assigned_specialist = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '12' AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    $sql1 = "SELECT * FROM create_report_options WHERE endorsement_code = '$endo_code'";
                                                                    $result1 = $conn->query($sql1);
                                                                    $row1 = mysqli_fetch_array($result1);
                                                                    $endorsement_code = $row1["endorsement_code"] ?? null;

                                                                    $sql2 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                    $result2 = $conn->query($sql2);
                                                                    $row2 = mysqli_fetch_array($result2);
                                                                    $endo_code = $row2["endo_code"] ?? null;

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
                                                                                    if ($endorsement_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbitelecreatereport();" href="bi_create_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Create Report"><i class="fa fa-plus-circle"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else if ($endo_code == "") {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewreportform();" href="bi_report_form.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Report Form"><i class="fa fa-files-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <a onclick="saveopsmonitorbiteleviewendo();" href="view_bi_tele_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteleviewreport();" href="bi_viewing_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                        <a onclick="saveopsmonitorbiteledownloadrep();" href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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