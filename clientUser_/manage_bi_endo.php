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
                        toastr['success']('Endorsements succesfully added.');
                    </script>
                <?php
            break;

            case 'err':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Cannot create endorsements.');
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
                        toastr['danger']('Endorsement(s) already existed in list.');
                    </script>
                <?php
            break;

            default:
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Endorsement error.');
                    </script>
                <?php
            break;
        }
    }

    if (!empty($_GET['docs'])) {
        switch ($_GET['docs']) {
            case 'succupld':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['success']('Documents succesfully added.');
                    </script>
                <?php
            break;

            case 'errupld':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Cannot add documents.');
                    </script>
                <?php
            break;

            default:
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Document uploading error.');
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
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Manage Endorsements</li>
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
                                                <p style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;" id="bicurrenttotalendo"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="currentbistatus"></div>
                                    <div class="table-responsive">
                                        <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th></th>
                                                    <th>DATE</th>
                                                    <th>NAME</th>
                                                    <th>STATUS</th>
                                                    <th>RERUN</th>
                                                    <th style="text-align: center;">ACTIONS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_sent_partial, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname, ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.user_position, b.site_id, c.user_id, CONCAT(c.user_id) AS supervisorid, CONCAT(c.fname,  ' ', c.mname, ' ', c.lname, ' ', c.suffix) AS supervisorname, d.client_id, d.client_name, d.acronym_, d.site_ FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN tbl_supervisor AS c ON a.endorsed_to = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name  = '$clnt_company' ORDER BY a.endo_date DESC";
                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            $endoDate = $row['endo_date'];
                                                            $newDateEndo = date("F j, Y", strtotime($endoDate));
                                                            $newDateTimeEndo = date('F d, Y - g:i A', strtotime($endoDate));
                                                            $TurnAroundDate = $row['turn_around_date'];
                                                            $newTurnAroundDate = date("F j, Y", strtotime($TurnAroundDate));
                                                            $change_package = $row['change_package'];
                                                            $importance = $row['importance'];
                                                            $endo_status = $row['endo_status'];
                                                            $is_for_review = $row['is_for_review'];
                                                            $is_done = $row['is_done'];
                                                            $is_sent_partial = $row['is_sent_partial'];

                                                            // IMPORTANCE //
                                                            if ($row['importance'] == '1') {
                                                                $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                            } else if ($row['importance'] == '2') {
                                                                $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                            } else {
                                                                $endoimportant = "";
                                                            }

                                                            // RERUN //
                                                            if ($row['change_package'] == '0') {
                                                                $endochangepack = '<span class="badge badge-danger" style="font-weight: bold; background-color: #fff;">No</span>';
                                                            } else if ($row['change_package'] == '1') {
                                                                $endochangepack = '<span class="badge badge-info" style="font-weight: bold; background-color: #fff;">For Approval</span>';
                                                            } else if ($row['change_package'] == '2') {
                                                                $endochangepack = '<span class="badge badge-success" style="font-weight: bold; background-color: #fff;">Yes</span>';
                                                            } else {
                                                                $endochangepack = "";
                                                            }

                                                            // STATUS //
                                                            if ($row['endo_status'] == '0') {
                                                                $endostatus = '<span class="badge badge-warning" style="font-weight: bold; background-color: #fff;">Pending</span>';
                                                            } else if ($row['endo_status'] == '1') {
                                                                $endostatus = '<span class="badge badge-info" style="font-weight: bold; background-color: #fff;">Received</span>';
                                                            } else if ($row['endo_status'] == '2') {
                                                                $endostatus = '<span class="badge badge-danger" style="font-weight: bold; background-color: #fff;">On-Process</span>';
                                                            } else if ($row['endo_status'] == '3' && $row['is_sent_partial'] == '1') {
                                                                $endostatus = '<span class="badge badge-secondary" style="font-weight: bold;">Partial Report Availablie</span>';
                                                            } else if ($row['endo_status'] === '4') {
                                                                $endostatus = '<span class="badge badge-success" style="font-weight: bold; background-color: #fff;">Completed</span>';
                                                            } else if ($row['endo_status'] == '3' && $row['is_sent_partial'] == '0' || $row['is_sent_partial'] == '') {
                                                                $endostatus = '<span class="badge badge-default" style="font-weight: bold; background-color: #fff;">For Review</span>';
                                                            } else {
                                                                $endostatus = "";
                                                            }

                                                            ?>
                                                                <tr>
                                                                    <td><?php echo $endoimportant; ?></td>
                                                                    <td><?php echo $newDateEndo; ?></td>
                                                                    <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                    <td><?php echo $endostatus; ?></td>
                                                                    <td><?php echo $endochangepack; ?></td>
                                                                    <td style="text-align: center;">
                                                                        <?php
                                                                            if ($endo_status == '0' || $endo_status == '1' || $endo_status == '2' || $endo_status == '3' && $is_for_review == '1' && $is_sent_partial == '0' || $is_sent_partial == '') {
                                                                                ?>
                                                                                    <?php
                                                                                        if ($change_package == '1') {
                                                                                            ?>
                                                                                            <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement" onclick="showviewendobi('<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newTurnAroundDate; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>', '<?php echo $row['package_desc']; ?>'); saveviewendobi();"><i class="fa fa-file-text-o"></i></button>
                                                                                            <a onclick="saveuploaddocs();" href="upload_documents.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Upload Documents"><i class="fa fa-upload"></i></a>
                                                                                            <a onclick="saveviewdocs();" href="view_documents.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Documents"><i class="fa fa-folder-open"></i></a>
                                                                                            <?php
                                                                                        } else {
                                                                                            ?>
                                                                                            <button type="button" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Upgrade Package" onclick="showupgradepkgbi('<?php echo $row['package_desc']; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['supervisorid']; ?>'); saveupgradepkgbi();"><i class="fa  fa-pencil-square-o"></i></button>
                                                                                            <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement" onclick="showviewendobi('<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newTurnAroundDate; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>', '<?php echo $row['package_desc']; ?>'); saveviewendobi();"><i class="fa fa-file-text-o"></i></button>
                                                                                            <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Return Endorsement" onclick="showpocreturnendobi('<?php echo $row['applicantname']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['supervisorid']; ?>'); savereturnendobi();"><i class="fa fa-undo"></i></button>
                                                                                            <a onclick="saveuploaddocs()" href="upload_documents.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Upload Documents"><i class="fa fa-upload"></i></a>
                                                                                            <a onclick="saveviewdocs()" href="view_documents.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Documents"><i class="fa fa-folder-open"></i></a>
                                                                                            <a onclick="savedownloadrepbi();" href="download_file.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
                                                                                            <?php
                                                                                        }
                                                                                    ?>
                                                                                <?php
                                                                            } else if ($endo_status == '4' && $is_done == '1') {
                                                                                ?>
                                                                                    <?php
                                                                                        if ($change_package == '1') {
                                                                                            ?>
                                                                                            <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement" onclick="showviewendobi('<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newTurnAroundDate; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>', '<?php echo $row['package_desc']; ?>'); saveviewendobi();"><i class="fa fa-file-text-o"></i></button>
                                                                                            <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Return Endorsement" onclick="showpocreturnendobi('<?php echo $row['applicantname']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['supervisorid']; ?>'); savereturnendobi();"><i class="fa fa-undo"></i></button>
                                                                                            <a onclick="saveuploaddocs()" href="upload_documents.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Upload Documents"><i class="fa fa-upload"></i></a>
                                                                                            <a onclick="saveviewdocs()" href="view_documents.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Documents"><i class="fa fa-folder-open"></i></a>
                                                                                            <a onclick="savedownloadrepbi()" href="download_file.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
                                                                                            <!--<a onclick="savedownloadrepbi()" href="download_report_bi.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>-->
                                                                                            <?php
                                                                                        } else {
                                                                                            ?>
                                                                                            <button type="button" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Upgrade Package" onclick="showupgradepkgbi('<?php echo $row['package_desc']; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['supervisorid']; ?>'); saveupgradepkgbi();"><i class="fa  fa-pencil-square-o"></i></button>
                                                                                            <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement" onclick="showviewendobi('<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newTurnAroundDate; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>', '<?php echo $row['package_desc']; ?>'); saveviewendobi();"><i class="fa fa-file-text-o"></i></button>
                                                                                            <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Return Endorsement" onclick="showpocreturnendobi('<?php echo $row['applicantname']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['supervisorid']; ?>'); savereturnendobi();"><i class="fa fa-undo"></i></button>
                                                                                            <a onclick="saveuploaddocs();" href="upload_documents.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Upload Documents"><i class="fa fa-upload"></i></a>
                                                                                            <a onclick="saveviewdocs();" href="view_documents.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Documents"><i class="fa fa-folder-open"></i></a>
                                                                                            <!--<a onclick="savedownloadrepbi();" href="download_report_bi.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>-->
                                                                                            <a onclick="savedownloadrepbi();" href="download_file.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
                                                                                            <?php
                                                                                        }
                                                                                    ?>
                                                                                <?php
                                                                            }
                                                                            else if ($endo_status == '3' && $is_sent_partial == '1') {
                                                                                ?>
                                                                                    <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement" onclick="showviewendobi('<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newTurnAroundDate; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>', '<?php echo $row['package_desc']; ?>'); saveviewendobi();"><i class="fa fa-file-text-o"></i></button>
                                                                                    <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Return Endorsement" onclick="showpocreturnendobi('<?php echo $row['applicantname']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['supervisorid']; ?>'); savereturnendobi();"><i class="fa fa-undo"></i></button>
                                                                                    <a onclick="saveuploaddocs()" href="upload_documents.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Upload Documents"><i class="fa fa-upload"></i></a>
                                                                                    <a onclick="saveviewdocs()" href="view_documents.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Documents"><i class="fa fa-folder-open"></i></a>
                                                                                    <a onclick="savedownloadrepbi()" href="download_partial.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Partial Report"><i class="fa fa-download"></i></a>
                                                                                          
                                                                                <?php
                                                                            }
                                                                            else {
                                                                                echo "";
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

<?php
    include 'modals.php';
    include 'script.php';
?>