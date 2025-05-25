<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.user_id) AS supervisorid, CONCAT(e.fname) AS supervisorfname, CONCAT(e.lname) AS supervisorlname, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, e.user_image FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_dc_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endo_code = '".$_GET["endoCode"]."'";
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
        $hired_date = $row['hired_date'];
        $newDateHired = date('F d, Y', strtotime($hired_date));
        $address = $row['address'];
        $package_desc = $row['package_desc'];
        $account = $row['account'];
        $closure_date = $row['closure_date'];
        $newDateTimeClosure = date('F d, Y - h:i A', strtotime($closure_date));
        $initiation_date = $row['initiation_date'];
        $newDateTimeInitiation = date('F d, Y - h:i A', strtotime($initiation_date));

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
    }
?>

<div id="wrapper" class="theme-green">
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2>View Endorsement</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Monitor Endorsements</li>
                            <li class="breadcrumb-item">Database Check</li>
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
                                <button type="button" class="btn btn-outline-danger" style="float: right; margin-right: 25px; margin-top: 15px;" onclick="back_monitor_endo_dc(); savemonitorendodc();"><i class="fa fa-arrow-left"></i> Back</button>
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
                            <div class="row">
                                <div class="col-md-12">
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
                                                    <div class="profile-image" style="margin-left: 50px; margin-top: -20px;"> <img src="../images/icons/endorsement.png" class="rounded-circle" alt="" style="height: 150px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> </div>
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
                                                <div class="col-md-4">
                                                    <small class="text-muted">Endorsement Code: </small>
                                                        <p><?php echo $endo_code; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Applicant Name: </small>
                                                        <p><?php echo $applicantname; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Endorsement Date and Time: </small>
                                                        <p><?php echo $newDateTimeEndo; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Hired Date: </small>
                                                        <p><?php echo $newDateHired; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Package Description: </small>
                                                        <p><?php echo $package_desc; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Closure Date: </small>
                                                        <p><?php echo $newDateTimeClosure; ?></p>
                                                    <hr>
                                                </div>
                                                <div class="col-md-4">
                                                    <small class="text-muted">Batch ID: </small>
                                                        <p><?php echo $endo_desc; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Birth Date: </small>
                                                        <p><?php echo $newDateBirth; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Turn Around Date: </small>
                                                        <p><?php echo $newDateTurnAround; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Address: </small>
                                                        <p><?php echo $address; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Account: </small>
                                                        <p><?php echo $account; ?></p>
                                                    <hr>
                                                    <small class="text-muted">Initiation Date: </small>
                                                        <p><?php echo $newDateTimeInitiation; ?></p>
                                                    <hr>
                                                </div>
                                                <div class="col-md-4"> 
                                                    <div class="card">
                                                        <div class="header">
                                                            <h2>Assigned Supervisor</h2>
                                                        </div>
                                                        <div class="body text-center" style="margin-top: -25px;">
                                                            <?php
                                                                echo '<div class="profile-image m-b-15"> <img src="../profilepictures_/'.$supervisorid.'/'.$user_image.'"" class="rounded-circle" style="width: 80px;"> </div>'
                                                            ?>
                                                            <div>
                                                                <hr>
                                                                <h4 class="mb-0"><strong><?php echo $supervisorfname; ?></strong> <?php echo $supervisorlname; ?></h4>
                                                                <span>Accounts Officer</span>
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
            </div>
        </div>
    </div>
</div>

<?php
    include 'modals.php';
    include 'script.php';
?>
