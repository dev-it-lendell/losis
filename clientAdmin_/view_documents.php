<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    $sql = "SELECT a.id, a.endo_id, a.application_code, a.supporting_documents_remarks, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.endo_code, d.percentage_, d.datetime_updated, d.datetime_completed, e.user_id, CONCAT(e.user_id) AS supervisorid, CONCAT(e.fname) AS supervisorfname, CONCAT(e.lname) AS supervisorlname, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, e.user_image FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_endorsement_bi_process AS d ON a.endo_code = d.endo_code LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id WHERE a.endo_code = '".$_GET["endoCode"]."'";
    $query = $conn->query($sql);
    while ($row = mysqli_fetch_array($query)) {
        $application_code = $row['application_code'];
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

        if ($row['supporting_documents_remarks'] == '') {
            $remarkseduc = "No Remarks";
        } else {
            $remarkseduc = $row['supporting_documents_remarks'];
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
                        <h2>View Documents</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Manage Endorsements</li>
                            <li class="breadcrumb-item">Background Investigation</li>
                            <li class="breadcrumb-item active">View Documents</li>
                        </ul>   
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h2>Applicant Name: <small style="font-weight: bold;"><?php echo $applicantname; ?></small> </h2>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-outline-danger" style="float: right; margin-top: 25px; margin-top: 5px;" onclick="back_manage_endo_bi(); savemanageendobi();"><i class="fa fa-arrow-left"></i> Back</button>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="float-md-left" style="margin-left: -10px; margin-top: -10px;">
                                                <?php echo $endostatus; ?>
                                                <?php echo $endoimportant; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="header" style="text-align: center;">
                                        <div class="profile-image" style="margin-left: 10px;"> <img src="../images/icons/folder.png" class="rounded-circle" alt="" style="height: 150px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></div>
                                        <br>
                                        <h2><strong>Applicant's</strong> Documents</h2>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="row">-->
                            <!--    <div class="col-md-12">-->
                            <!--        <div class="row">-->
                            <!--            <div class="col-md-6">-->
                            <!--                <p style="font-size: 20px; text-align: left;"><strong>Supporting</strong> Documents</p>-->
                            <!--            </div>-->
                            <!--            <div class="col-md-6">-->
                            <!--                <p class="float-md-right">-->
                            <!--                    <?php echo $educdocstatus; ?>-->
                            <!--                </p>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="row">-->
                            <!--    <div class="col-md-12">-->
                            <!--        <small class="text-muted">Document Remarks: </small>-->
                            <!--            <p><?php echo $remarkseduc; ?></p>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="body">
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

<?php
    include 'modals.php';
    include 'script.php';
?>