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
                                                <p id="officialbipocmonthlyendo" style="font-size: 25px; text-align: right; font-weight: bold;"></p>
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
                                                <p id="officialbipocyearlyendo" style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs-new2 customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#supervisorbijan" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;JAN</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisorbifeb" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;FEB</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisorbimar" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-files-stack"></i>&nbsp;&nbsp;MAR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisorbiapr" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;APR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisorbimay" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;MAY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisorbijune" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;JUNE</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisorbijuly" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;JULY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisorbiaug" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;AUG</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisorbisept" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;SEPT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisorbioct" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;OCT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisorbinov" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;NOV</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supervisorbidec" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;DEC</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                            <div class="tab-content br-n pn">
                                <div id="supervisorbijan" class="tab-pane p-3 active"> 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="janspvbiendo"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <!--<th>BIRTHDATE</th>-->
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.application_code, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '01' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));
                                                                    // $birthDate = $row['birthdate'];
                                                                    $newbirthDate = date('F d, Y', strtotime($birthDate));

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">For Review</span>';
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
                                                                                <a onclick="savemonitorbiviewendo()" href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                <a href="download_informations.php?applicationCode=<?php echo $row['application_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Informations"><i class="fa fa-edit"></i></a>
                                                                                <a onclick="savesupportingdocsbi();" href="bi_supporting_docs.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Documents"><i class="fa fa-download"></i></a>
                                                                                <a onclick="savedownloadrepbi()" href="download_file.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div  id="supervisorbifeb" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="febspvbiendo"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <!--<th>BIRTHDATE</th>-->
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.application_code, a.endo_code, a.application_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '02' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));
                                                                    // $birthDate = $row['birthdate'];
                                                                    $newbirthDate = date('F d, Y', strtotime($birthDate));

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">For Review</span>';
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
                                                                                <a onclick="savemonitorbiviewendo()" href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                <a href="download_informations.php?applicationCode=<?php echo $row['application_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Informations"><i class="fa fa-edit"></i></a>
                                                                                <!--<a onclick="savesupportingdocsbi();" href="bi_supporting_docs.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Documents"><i class="fa fa-download"></i></a>-->
                                                                                <a onclick="savedownloadrepbi()" href="download_file.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div  id="supervisorbimar" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="marspvbiendo"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.application_code, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '03' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">For Review</span>';
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
                                                                                <a onclick="savemonitorbiviewendo()" href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                <a href="download_informations.php?applicationCode=<?php echo $row['application_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Informations"><i class="fa fa-edit"></i></a>
                                                                                <!--<a onclick="savesupportingdocsbi();" href="bi_supporting_docs.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Documents"><i class="fa fa-download"></i></a>-->
                                                                                <a onclick="savedownloadrepbi()" href="download_file.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div  id="supervisorbiapr" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="aprspvbiendo"></div>
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
                                                            // $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.application_code, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '04' ORDER BY a.importance ASC";
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.application_code, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name, a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname, ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '04' ORDER BY a.endo_status = 0 DESC, a.endo_status ASC";                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">For Review</span>';
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
                                                                                <a onclick="savemonitorbiviewendo()" href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                <a href="download_informations.php?applicationCode=<?php echo $row['application_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Informations"><i class="fa fa-edit"></i></a>
                                                                                <!--<a onclick="savesupportingdocsbi();" href="bi_supporting_docs.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Documents"><i class="fa fa-download"></i></a>-->
                                                                                <a onclick="savedownloadrepbi()" href="download_file.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div  id="supervisorbimay" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="mayspvbiendo"></div>
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
                                                            // $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.application_code, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '05' ORDER BY a.importance ASC";
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.application_code, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name, a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname, ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '05' ORDER BY a.endo_status = 0 DESC, a.endo_status ASC";                                                            
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">For Review</span>';
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
                                                                                <a onclick="savemonitorbiviewendo()" href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                <a href="download_informations.php?applicationCode=<?php echo $row['application_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Informations"><i class="fa fa-edit"></i></a>
                                                                                <!--<a onclick="savesupportingdocsbi();" href="bi_supporting_docs.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Documents"><i class="fa fa-download"></i></a>-->
                                                                                <a onclick="savedownloadrepbi()" href="download_file.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div  id="supervisorbijune" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="junespvbiendo"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.application_code, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '06' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">For Review</span>';
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
                                                                                <a onclick="savemonitorbiviewendo()" href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                <a href="download_informations.php?applicationCode=<?php echo $row['application_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Informations"><i class="fa fa-edit"></i></a>
                                                                                <!--<a onclick="savesupportingdocsbi();" href="bi_supporting_docs.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Documents"><i class="fa fa-download"></i></a>-->
                                                                                <a onclick="savedownloadrepbi()" href="download_file.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div  id="supervisorbijuly" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="julyspvbiendo"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.application_code, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '07' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">For Review</span>';
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
                                                                                <a onclick="savemonitorbiviewendo()" href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                <a href="download_informations.php?applicationCode=<?php echo $row['application_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Informations"><i class="fa fa-edit"></i></a>
                                                                                <!--<a onclick="savesupportingdocsbi();" href="bi_supporting_docs.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Documents"><i class="fa fa-download"></i></a>-->
                                                                                <a onclick="savedownloadrepbi()" href="download_file.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div  id="supervisorbiaug" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="augspvbiendo"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.application_code, a.endo_code, a.application_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '08' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">For Review</span>';
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
                                                                                <a onclick="savemonitorbiviewendo()" href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                <a href="download_informations.php?applicationCode=<?php echo $row['application_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Informations"><i class="fa fa-edit"></i></a>
                                                                                <!--<a onclick="savesupportingdocsbi();" href="bi_supporting_docs.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Documents"><i class="fa fa-download"></i></a>-->
                                                                                <a onclick="savedownloadrepbi()" href="download_file.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div  id="supervisorbisept" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="septspvbiendo"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.application_code, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '09' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">For Review</span>';
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
                                                                                <a onclick="savemonitorbiviewendo()" href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                <a href="download_informations.php?applicationCode=<?php echo $row['application_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Informations"><i class="fa fa-edit"></i></a>
                                                                                <!--<a onclick="savesupportingdocsbi();" href="bi_supporting_docs.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Documents"><i class="fa fa-download"></i></a>-->
                                                                                <a onclick="savedownloadrepbi()" href="download_file.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div  id="supervisorbioct" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="octspvbiendo"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.application_code, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '10' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">For Review</span>';
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
                                                                                <a onclick="savemonitorbiviewendo()" href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                <a href="download_informations.php?applicationCode=<?php echo $row['application_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Informations"><i class="fa fa-edit"></i></a>
                                                                                <!--<a onclick="savesupportingdocsbi();" href="bi_supporting_docs.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Documents"><i class="fa fa-download"></i></a>-->
                                                                                <a onclick="savedownloadrepbi()" href="download_file.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div  id="supervisorbinov" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="novspvbiendo"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.application_code, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '11' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">For Review</span>';
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
                                                                                <a onclick="savemonitorbiviewendo()" href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                <a href="download_informations.php?applicationCode=<?php echo $row['application_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Informations"><i class="fa fa-edit"></i></a>
                                                                                <!--<a onclick="savesupportingdocsbi();" href="bi_supporting_docs.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Documents"><i class="fa fa-download"></i></a>-->
                                                                                <a onclick="savedownloadrepbi()" href="download_file.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                <div  id="supervisorbidec" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="decspvbiendo"></div>
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
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.application_code, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = '12' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

                                                                    // STATUS //
                                                                    if ($row['endo_status'] == '0') {
                                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['endo_status'] == '1') {
                                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;">Received</span>';
                                                                    } else if ($row['endo_status'] == '2') {
                                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['endo_status'] == '3') {
                                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;">For Review</span>';
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
                                                                                <a onclick="savemonitorbiviewendo()" href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                                                                                <a href="download_informations.php?applicationCode=<?php echo $row['application_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Informations"><i class="fa fa-edit"></i></a>
                                                                                <!--<a onclick="savesupportingdocsbi();" href="bi_supporting_docs.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Documents"><i class="fa fa-download"></i></a>-->
                                                                                <a onclick="savedownloadrepbi()" href="download_file.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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