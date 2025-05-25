<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.application_code, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.user_id) AS supervisorid, CONCAT(e.fname) AS supervisorfname, CONCAT(e.lname) AS supervisorlname, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, e.user_image FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endo_code = '".$_GET["endoCode"]."'";
    $query = $conn->query($sql);
    while ($row = mysqli_fetch_array($query)) {
        $endo_code = $row['endo_code'];
        $endo_desc = $row['endo_desc'];
        $applicantname = $row['applicantname'];
        $birthdate = $row['birthdate'];
        $newDateBirth = date('F d, Y', strtotime($birthdate));
        $endo_date = $row['endo_date'];
        $newDateTimeEndo = date('F d, Y - h:i A', strtotime($endo_date));
        $turn_around_date = $row['turn_around_date'];
        $newDateTurnAround = date('F d, Y', strtotime($turn_around_date));
        $supervisorfname = $row['supervisorfname'];
        $supervisorlname = $row['supervisorlname'];
        $supervisorid = $row['supervisorid'];
        $user_image = $row['user_image'];
        $package_desc = $row['package_desc'];
        $account = $row['account'];
        $closure_date = $row['closure_date'];
        $newDateTimeClosure = date('F d, Y - h:i A', strtotime($closure_date));
        $initiation_date = $row['initiation_date'];
        $newDateTimeInitiation = date('F d, Y - h:i A', strtotime($initiation_date));
        $remarks_education = $row['remarks_education'];
        $remarks_employment = $row['remarks_employment'];
        $remarks_others = $row['remarks_others'];
        $acronym_ = $row['acronym_'];
        $percentage_ = $row['percentage_'];
        $client_name = $row['endo_requestor'];
        $client_site = $row['site_'];
        $application_code = $row['application_code'];

        if ($row['remarks_education'] == '') {
            $remarkseduc = "No Remarks";
        } else {
            $remarkseduc = $row['remarks_education'];
        }

        if ($row['remarks_employment'] == '') {
            $remarksemp = "No Remarks";
        } else {
            $remarksemp = $row['remarks_employment'];
        }

        if ($row['remarks_others'] == '') {
            $remarksoth = "No Remarks";
        } else {
            $remarksoth = $row['remarks_others'];
        }

        // STATUS //
        if ($row['endo_status'] == '0') {
            $endostatus = '<span class="badge badge-warning" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">Pending</span>';
        } else if ($row['endo_status'] == '1') {
            $endostatus = '<span class="badge badge-info" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">Received</span>';
        } else if ($row['endo_status'] == '2') {
            $endostatus = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">On-Process</span>';
        } else if ($row['endo_status'] == '3') {
            $endostatus = '<span class="badge badge-default" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">Done</span>';
        } else if ($row['endo_status'] == '4') {
            $endostatus = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">Completed</span>';
        } else {
            $endostatus = "";
        }

        // IMPORTANCE //
        if ($row['importance'] == '1') {
            $endoimportant = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Importance">High Importance</span>';
        } else if ($row['importance'] == '2') {
            $endoimportant = '<span class="badge badge-info" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Importance">Low Importance</span>';
        } else {
            $endoimportant = "";
        }

        // DOCUMENT STATUS - EDUCATION DOCUMENTS //
        if ($row['document_status_education'] == '0') {
            $educdocstatus = '<span class="badge badge-warning" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Document Status">Partial</span>';
        } else if ($row['document_status_education'] == '1') {
            $educdocstatus = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Document Status">Complete</span>';
        } else {
            $educdocstatus = "";
        }

        // DOCUMENT STATUS - EMPLOYMENT DOCUMENTS //
        if ($row['document_status_employment'] == '0') {
            $empdocstatus = '<span class="badge badge-warning" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Document Status">Partial</span>';
        } else if ($row['document_status_employment'] == '1') {
            $empdocstatus = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Document Status">Complete</span>';
        } else {
            $empdocstatus = "";
        }

        // DOCUMENT STATUS - OTHER DOCUMENTS //
        if ($row['document_status_others'] == '0') {
            $othdocstatus = '<span class="badge badge-warning" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Document Status">Partial</span>';
        } else if ($row['document_status_others'] == '1') {
            $othdocstatus = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Document Status">Complete</span>';
        } else {
            $othdocstatus = "";
        }
    }
?>

<div id="wrapper" class="theme-green">
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <h2>View Endorsement</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Monitor Endorsements</li>
                            <li class="breadcrumb-item">Background Investigation</li>
                            <li class="breadcrumb-item active">View Endorsement</li>
                        </ul>   
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-outline-danger" style="float: right; margin-right: 25px; margin-top: 15px;" onclick="back_spv_monitor_bi(); savemonitorendobi();"><i class="fa fa-arrow-left"></i> Back</button>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="header">
                                <div class="card" style="height: 85px;">
                                    <div class="card-body">
                                        <div class="media mleft">
                                            <div class="media-left">
                                                <p style="font-size: 30px;">
                                                    <i class="fa fa-info-circle text-success"></i>
                                                </p>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Viewing of endorsement</h4>
                                                    Endorsement progress monitoring
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs-new2 customtab">
                                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#opsbiteleendo">Endorsement Details</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#opsbiteleendoassign">Endorsement Assigning</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#opsbiteleendologs">Endorsement Logs</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#opsbiteleendodocs">Applicant's Documents</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="opsbiteleendo">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="header" style="text-align: center;">
                                                <h2><strong>Endorsement</strong> Details</h2>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-4">
                                                    <div class="profile-image" style="display: flex; justify-content: center; margin-top: -20px; margin-bottom: 10px;"> <img src="../images/icons/endorsement.png" class="rounded-circle" alt="" style="height: 150px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> </div>
                                                </div>
                                                <div class="col-md-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="float-md-right">
                                                <?php echo $endostatus; ?>
                                                <?php echo $endoimportant; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <small class="text-muted">Endorsement Code: </small>
                                                        <p><?php echo $endo_code; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Applicant Name: </small>
                                                        <p><?php echo $applicantname; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Endorsement Date and Time: </small>
                                                        <p><?php echo $newDateTimeEndo; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Package Description: </small>
                                                        <p><?php echo $package_desc; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Closure Date: </small>
                                                        <p><?php echo $newDateTimeClosure; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Endorsed By: </small>
                                                        <p><?php echo $client_name; ?></p>
                                                    <hr>
                                                </div>
                                                <div class="col-md-6">
                                                    <small class="text-muted">Batch ID: </small>
                                                        <p>&nbsp<?php echo $endo_desc; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Birth Date: </small>
                                                        <p><?php echo $newDateBirth; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Turn Around Date: </small>
                                                        <p><?php echo $newDateTurnAround; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Account: </small>
                                                        <p><?php echo $account; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Initiation Date: </small>
                                                        <p><?php echo $newDateTimeInitiation; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Client Site: </small>
                                                        <p><?php echo $client_site; ?></p>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="opsbiteleendoassign">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="header" style="text-align: center;">
                                                <h2><strong>Endorsement</strong> Assigning</h2>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-4">
                                                    <div class="profile-image" style="display: flex; justify-content: center; margin-top: -20px; margin-bottom: 10px;"> <img src="../images/icons/assign.png" class="rounded-circle" alt="" style="height: 150px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> </div>
                                                </div>
                                                <div class="col-md-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="float-md-right">
                                                <span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Endorsement Percentage"><?php echo $percentage_; ?> %</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <?php
                                                        $sql = "SELECT a.endo_code, a.assigned_supervisor, b.user_id, CONCAT(b.user_id) AS asspocid, CONCAT(b.fname, ' ', b.mname, ' ', b.lname, ' ', b.suffix) AS asspocname, CONCAT(b.user_image) AS asspocimg FROM tbl_endorsement_bi_process AS a LEFT JOIN tbl_supervisor AS b ON a.assigned_supervisor = b.user_id WHERE a.endo_code = '".$_GET["endoCode"]."'";
                                                        $result = mysqli_query($conn, $sql);
                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                $asspocid = $row['asspocid'];
                                                                $asspocname = $row['asspocname'];
                                                                $asspocimg = $row['asspocimg'];
                                                                ?>
                                                                    <div class="card">
                                                                        <div class="body w_user">
                                                                            <?php
                                                                                echo '<img class="rounded-circle" src="../profilepictures_/'.$asspocid.'/'.$asspocimg.'" alt="">'
                                                                            ?>
                                                                            <div class="wid-u-info">
                                                                                <h5><?php echo $asspocname; ?></h5>
                                                                                <p class="text-muted mb-0">Assigned Supervisor</p>
                                                                            </div>
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                <?php
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <?php
                                                        $sql = "SELECT a.endo_code, a.assigned_support, b.user_id, CONCAT(b.user_id) AS asssupid, CONCAT(b.fname, ' ', b.mname, ' ', b.lname, ' ', b.suffix) AS asssupname, CONCAT(b.user_image) AS asssupimg FROM tbl_endorsement_bi_process AS a LEFT JOIN tbl_support AS b ON a.assigned_support = b.user_id WHERE a.endo_code = '".$_GET["endoCode"]."'";
                                                        $result = mysqli_query($conn, $sql);
                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                $asssupid = $row['asssupid'];
                                                                $asssupname = $row['asssupname'];
                                                                $asssupimg = $row['asssupimg'];
                                                                ?>
                                                                    <div class="card">
                                                                        <div class="body w_user">
                                                                            <?php
                                                                                echo '<img class="rounded-circle" src="../profilepictures_/'.$asssupid.'/'.$asssupimg.'" alt="">'
                                                                            ?>
                                                                            <div class="wid-u-info">
                                                                                <h5><?php echo $asssupname; ?></h5>
                                                                                <p class="text-muted mb-0">Assigned Support</p>
                                                                            </div>
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                <?php
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <?php
                                                        $sql = "SELECT a.endo_code, a.assigned_specialist, b.user_id, CONCAT(b.user_id) AS assteleid, CONCAT(b.fname, ' ', b.mname, ' ', b.lname, ' ', b.suffix) AS asstelename, CONCAT(b.user_image) AS assteleimg FROM tbl_endorsement_bi_process AS a LEFT JOIN tbl_operations AS b ON a.assigned_specialist = b.user_id WHERE a.endo_code = '".$_GET["endoCode"]."'";
                                                        $result = mysqli_query($conn, $sql);
                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                $assteleid = $row['assteleid'];
                                                                $asstelename = $row['asstelename'];
                                                                $assteleimg = $row['assteleimg'];
                                                                ?>
                                                                    <div class="card">
                                                                        <div class="body w_user">
                                                                            <?php
                                                                                echo '<img class="rounded-circle" src="../profilepictures_/'.$assteleid.'/'.$assteleimg.'" alt="">'
                                                                            ?>
                                                                            <div class="wid-u-info">
                                                                                <h5><?php echo $asstelename; ?></h5>
                                                                                <p class="text-muted mb-0">Assigned Tele</p>
                                                                            </div>
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                <?php
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <?php
                                                        $sql = "SELECT a.endo_code, a.assigned_analyst, b.user_id, CONCAT(b.user_id) AS assdaid, CONCAT(b.fname, ' ', b.mname, ' ', b.lname, ' ', b.suffix) AS assdaname, CONCAT(b.user_image) AS assdaimg FROM tbl_endorsement_bi_process AS a LEFT JOIN tbl_operations AS b ON a.assigned_analyst = b.user_id WHERE a.endo_code = '".$_GET["endoCode"]."'";
                                                        $result = mysqli_query($conn, $sql);
                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                $assdaid = $row['assdaid'];
                                                                $assdaname = $row['assdaname'];
                                                                $assdaimg = $row['assdaimg'];
                                                                ?>
                                                                    <div class="card">
                                                                        <div class="body w_user">
                                                                            <?php
                                                                                echo '<img class="rounded-circle" src="../profilepictures_/'.$assdaid.'/'.$assdaimg.'" alt="">'
                                                                            ?>
                                                                            <div class="wid-u-info">
                                                                                <h5><?php echo $assdaname; ?></h5>
                                                                                <p class="text-muted mb-0">Assigned Analyst</p>
                                                                            </div>
                                                                            <br>
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                <?php
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <?php
                                                        $sql = "SELECT a.endo_code, a.review_supervisor, b.user_id, CONCAT(b.user_id) AS revpocid, CONCAT(b.fname, ' ', b.mname, ' ', b.lname, ' ', b.suffix) AS revpocname, CONCAT(b.user_image) AS revpocimg FROM tbl_endorsement_bi_process AS a LEFT JOIN tbl_supervisor AS b ON a.review_supervisor = b.user_id WHERE a.endo_code = '".$_GET["endoCode"]."'";
                                                        $result = mysqli_query($conn, $sql);
                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                $revpocid = $row['revpocid'];
                                                                $revpocname = $row['revpocname'];
                                                                $revpocimg = $row['revpocimg'];
                                                                ?>
                                                                    <div class="card">
                                                                        <div class="body w_user">
                                                                            <?php
                                                                                echo '<img class="rounded-circle" src="../profilepictures_/'.$revpocid.'/'.$revpocimg.'" alt="">'
                                                                            ?>
                                                                            <div class="wid-u-info">
                                                                                <h5><?php echo $revpocname; ?></h5>
                                                                                <p class="text-muted mb-0">Review Supervisor</p>
                                                                            </div>
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                <?php
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <?php
                                                        $sql = "SELECT a.endo_code, a.assigned_client, b.user_id, CONCAT(b.user_id) AS assclientid, CONCAT(b.fname, ' ', b.mname, ' ', b.lname, ' ', b.suffix) AS assclientname, CONCAT(b.user_image) AS assclientimg FROM tbl_endorsement_bi_process AS a LEFT JOIN tbl_client AS b ON a.assigned_client = b.user_id WHERE a.endo_code = '".$_GET["endoCode"]."'";
                                                        $result = mysqli_query($conn, $sql);
                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                $assclientid = $row['assclientid'];
                                                                $assclientname = $row['assclientname'];
                                                                $assclientimg = $row['assclientimg'];
                                                                ?>
                                                                    <div class="card">
                                                                        <div class="body w_user">
                                                                            <?php
                                                                                echo '<img class="rounded-circle" src="../profilepictures_/'.$assclientid.'/'.$assclientimg.'" alt="">'
                                                                            ?>
                                                                            <div class="wid-u-info">
                                                                                <h5><?php echo $assclientname; ?></h5>
                                                                                <p class="text-muted mb-0">Assigned Client</p>
                                                                            </div>
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                <?php
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="opsbiteleendologs">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="header" style="text-align: center;">
                                                <h2><strong>Endorsement</strong> Logs</h2>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-4">
                                                    <div class="profile-image" style="display: flex; justify-content: center; margin-top: -20px; margin-bottom: 10px;"> <img src="../images/icons/history.png" class="rounded-circle" alt="" style="height: 150px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> </div>
                                                </div>
                                                <div class="col-md-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th style="width: 10px;">CLIENT</th>
                                                        <th style="width: 10px;">POC</th>
                                                        <th style="width: 10px;">OPS</th>
                                                        <th style="width: 10px;">IT</th>
                                                        <th>ACTION</th>
                                                        <th>DATE AND TIME ADDED</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $sql = "SELECT a.endo_code, b.id, b.endo_code, b.endo_action, b.assigned_team, b.datetime_added, c.team_no, c.team_name FROM tbl_endo AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN team_list AS c ON b.assigned_team = c.team_no WHERE b.endo_code = '".$_GET["endoCode"]."' ORDER BY b.id DESC";
                                                        $result = $conn->query($sql);
                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                $id = $row['id'];
                                                                $datetime_added = $row['datetime_added'];
                                                                $newDateTimeAdded = date('F d, Y - h:i A', strtotime($datetime_added));

                                                                $sql1 = "SELECT a.user_id, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS clientname, a.user_image, b.id, b.endo_code, b.client_id FROM tbl_client AS a LEFT JOIN endorsement_logs AS b ON a.user_id = b.client_id WHERE b.id = '$id'";
                                                                $result1 = $conn->query($sql1);
                                                                $row1 = mysqli_fetch_array($result1);
                                                                $clientid = $row1['user_id'] ?? null;
                                                                $clientname = $row1['clientname'] ?? null;
                                                                $clientimg = $row1['user_image'] ?? null;

                                                                $sql2 = "SELECT a.user_id, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS supervisorname, a.user_image, b.id, b.endo_code, b.assigned_poc FROM tbl_supervisor AS a LEFT JOIN endorsement_logs AS b ON a.user_id = b.assigned_poc WHERE b.id = '$id'";
                                                                $result2 = $conn->query($sql2);
                                                                $row2 = mysqli_fetch_array($result2);
                                                                $supervisorid = $row2['user_id'] ?? null;
                                                                $supervisorname = $row2['supervisorname'] ?? null;
                                                                $supervisorimg = $row2['user_image'] ?? null;

                                                                $sql3 = "SELECT a.user_id, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS operationsname, a.user_image, b.id, b.endo_code, b.assigned_operations FROM tbl_operations AS a LEFT JOIN endorsement_logs AS b ON a.user_id = b.assigned_operations  WHERE b.id = '$id'";
                                                                $result3 = $conn->query($sql3);
                                                                $row3 = mysqli_fetch_array($result3);
                                                                $operationsid = $row3['user_id'] ?? null;
                                                                $operationsname = $row3['operationsname'] ?? null;
                                                                $operationsimg = $row3['user_image'] ?? null;

                                                                $sql4 = "SELECT a.user_id, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS supportname, a.user_image, b.id, b.endo_code, b.assigned_support FROM tbl_support AS a LEFT JOIN endorsement_logs AS b ON a.user_id = b.assigned_support WHERE b.id = '$id'";
                                                                $result4 = $conn->query($sql4);
                                                                $row4 = mysqli_fetch_array($result4);
                                                                $supportid = $row4['user_id'] ?? null;
                                                                $supportname = $row4['supportname'] ?? null;
                                                                $supportimg = $row4['user_image'] ?? null;

                                                                ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php
                                                                                echo '<div class="feeds-left"><img src="../profilepictures_/'.$clientid.'/'.$clientimg.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$clientname.'"></div>'
                                                                            ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php
                                                                                echo '<div class="feeds-left"><img src="../profilepictures_/'.$supervisorid.'/'.$supervisorimg.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$supervisorname.'"></div>'
                                                                            ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php
                                                                                echo '<div class="feeds-left"><img src="../profilepictures_/'.$operationsid.'/'.$operationsimg.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$operationsname.'"></div>'
                                                                            ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php
                                                                                echo '<div class="feeds-left"><img src="../profilepictures_/'.$supportid.'/'.$supportimg.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$supportname.'"></div>'
                                                                            ?>
                                                                        </td>
                                                                        <td style="font-weight: bold;"><?php echo $row['endo_action']; ?></td>
                                                                        <td><?php echo $newDateTimeAdded; ?></td>
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
                                <div class="tab-pane" id="opsbiteleendodocs">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="header" style="text-align: center;">
                                                <h2><strong>Applicant's</strong> Documents</h2>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="profile-image" style="display: flex; justify-content: center; margin-top: -20px; margin-bottom: 10px;"> <img src="../images/icons/supporting_docs.png" class="rounded-circle" alt="" style="height: 150px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr><br><br>
                                    <div class="row">
										<div class="col-md-6">
                                            <p style="margin-top: -40px; font-weight: bold;">Supporting Documents</p>
                                            <div class="row">
                                                <?php
                                                    $directory = "../application_documents/{$year}/{$acronym_}/{$application_code}/";
                                                    $files = scandir($directory);
                                        
                                                    for ($a = 2; $a < count($files); $a++) {
                                                        // Check if the item is a file (not a directory)
                                                        if (is_file($directory . $files[$a])) { 
                                                        ?>
                                                        <div class="col-lg-3 col-md-4 col-sm-12">
                                                            <div class="card">
                                                                <div class="file">
                                                                    <a href="javascript:void(0);">
                                                                        <div class="hover">
                                                                            <a href="../application_documents/<?php echo $year; ?>/<?php echo $acronym_; ?>/<?php echo $application_code; ?>/<?php echo $files[$a]; ?>" class="btn btn-sm" download="<?php echo $files[$a]; ?>" data-toggle="tooltip" data-placement="top" title="Download File" style="color: #ffffff; background-color: #AFE1AF;"><i class="fa fa-download"></i></a>
                                                                        </div>
                                                                        <div class="icon" style="text-align: center; margin-top: -15px; font-size: 30px;">
                                                                            <i class="fa fa-file" style="color: #343A40;"></i>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="file-name">
                                                                            <p class="m-b-5 text-muted" style="font-size: 10px; text-align: center;"><?php echo $files[$a]; ?></p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        }
                                                    }
                                                ?>
                                            </div>
                                        </div>
							
    									<div class="col-md-6">
    									    <p style="margin-top: -40px; font-weight: bold;">e-Signature</p>
    									    <div class="row">
                                                <?php
                                                        
                                                    $files = scandir("../application_documents/{$year}/{$acronym_}/{$application_code}/e-signature/");
            
                                                    for ($a = 2; $a < count($files); $a++) { 
                                                        ?>
                                                        <div class="col-lg-3 col-md-4 col-sm-12">
                                                            <div class="card">
                                                                <div class="file">
                                                                    <a href="javascript:void(0);">
                                                                        <div class="hover">
                                                                            <a href="../application_documents/<?php echo $year; ?>/<?php echo $acronym_; ?>/<?php echo $application_code; ?>/e-signature/<?php echo $files[$a]; ?>" class="btn btn-sm" download="<?php echo $files[$a]; ?>" data-toggle="tooltip" data-placement="top" title="Download File" style="color: #ffffff; background-color: #AFE1AF;"><i class="fa fa-download"></i></a>
                                                                        </div>
                                                                        <div class="icon" style="text-align: center; margin-top: -15px; font-size: 30px;">
                                                                            <i class="fa fa-file" style="color: #343A40;"></i>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="file-name">
                                                                            <p class="m-b-5 text-muted" style="font-size: 10px; text-align: center;"><?php echo $files[$a]; ?></p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                ?>
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