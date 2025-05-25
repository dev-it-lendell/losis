<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    if (!empty($_GET['sendrepdcda'])) {
        switch ($_GET['sendrepdcda']) {
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
                        <h2>Database Check</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Endorsements</li>
                            <li class="breadcrumb-item active">Database Check</li>
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
                                                <h4 class="media-heading">Endorsement Process</h4>
                                                    Database Check - <?php echo $now->format('Y'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs-new2 customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#distributeteleda" role="tab" style="font-size: 13px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;DISTRIBUTE&nbsp;&nbsp;<span class="badge badge-success" style="font-weight: bold; background-color: #fff; border-radius: 25px;" id="bicountdistributeda"></span></a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#returnedteleda" role="tab" style="font-size: 13px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;RETURNED&nbsp;&nbsp;<span class="badge badge-success" style="font-weight: bold; background-color: #fff; border-radius: 25px;" id="bicountreturnedda"></span></a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                            <div class="tab-content br-n pn">
                                <div id="distributeteleda" class="tab-pane p-3 active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>CODE</th>
                                                            <th>NAME</th>
                                                            <th>DATE</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.id, b.endo_code, b.assigned_by, b.assigned_da, b.assigned_to, b.is_distributed, b.is_returned, b.datetime_added, c.user_id, CONCAT(c.user_id) AS clientid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, CONCAT(e.user_id) AS supervisorid, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.user_id, CONCAT(f.fname, ' ', f.mname, ' ', f.lname, ' ', f.suffix) AS operationsname FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_analyst AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id  LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_operations AS f ON b.assigned_da = f.user_id WHERE a.endo_status = '2' AND b.assigned_da = '".$_SESSION["user_id"]."' AND b.is_distributed = '0' AND b.is_returned = '0' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endo_code = $row['endo_code'];
                                                                    $endo_date = $row['endo_date'];
                                                                    $newDateEndo = date('F d, Y', strtotime($endo_date));
                                                                    $newDateTimeEndo = date('F d, Y - g:i A', strtotime($endo_date));
                                                                    $turnaround_date = $row['turn_around_date'];
                                                                    $newDateTurnAround = date('F d, Y', strtotime($turnaround_date));

                                                                    if ($row['importance'] == '1') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                    } else if ($row['importance'] == '2') {
                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                    }

                                                                    $sql1 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.endo_code) AS endorsementcode, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, CONCAT(a.client_id) AS clientuserid, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.endo_code, b.assigned_supervisor, b.assigned_support, b.assigned_analyst, c.user_id, CONCAT(c.fname, ' ', c.lname) AS supportname, d.user_id, CONCAT(d.fname, ' ', d.lname, ' ') AS supervisorname, e.user_id, CONCAT(e.fname,  ' ', e.lname) AS opsanalystname FROM tbl_endo_criminal AS a LEFT JOIN tbl_endorsement_dc_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_support AS c ON b.assigned_support = c.user_id LEFT JOIN tbl_supervisor AS d ON b.assigned_supervisor = d.user_id LEFT JOIN tbl_operations AS e ON b.assigned_analyst = e.user_id WHERE a.endo_status = '2' AND a.endo_code = '$endo_code' AND b.assigned_analyst = '".$_SESSION["user_id"]."' ORDER BY a.importance ASC";
                                                                    $result1 = $conn->query($sql1);
                                                                    while ($row1 = $result1->fetch_assoc()) {
                                                                        $supportname = $row1['supportname'];
                                                                        $supervisorname = $row1['supervisorname'];
                                                                        $opsanalystname = $row1['opsanalystname'];
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td><?php echo $endoimportant; ?></td>
                                                                            <td><?php echo $row['endo_code']; ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $newDateEndo; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <a onclick="saveopsdcdacreatereport();" href="dc_create_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Create Report"><i class="fa fa-pencil-square-o"></i></a>
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement" onclick="displaybidaendorsement('<?php echo $supportname; ?>', '<?php echo $supervisorname; ?>', '<?php echo $opsanalystname; ?>', '<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newDateTurnAround; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>', '<?php echo $row['package_desc']; ?>');"><i class="fa fa-file-text-o"></i></button>
                                                                                <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Return Endorsement" onclick="displayreturneddcda('<?php echo $row['applicantname']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['supervisorid']; ?>', '<?php echo $row['clientid']; ?>');"><i class="fa fa-undo"></i></button>
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
                                <div id="returnedteleda" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="body">
                                                <ul class="nav nav-tabs-new2">
                                                    <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#returnendodabi">Returned</a></li>
                                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#returnedhistorydabi">Return History</a></li>
                                                </ul>
                                                <div class="tab-content br-n pn">
                                                    <div class="tab-pane show active" id="returnendodabi">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="table-responsive">
                                                                    <?php
                                                                        $approvereturnopsdcda = "";
                                                                        if (isset($_POST['approvedreturneddcda'])) {
                                                                            if (isset($_POST['apprreturndcanalystchk'])) {
                                                                                foreach ($_POST['apprreturndcanalystchk'] as $updateid) {

                                                                                    $endoCode = $_POST['endoCode_'.$updateid];
                                                                                    $endoid = $_POST['endoid'];
                                                                                    $client_id = $_POST['client_id'];
                                                                                    $supervisorid = $_POST['supervisorid'];

                                                                                    if ($endoCode != '') {
                                                                                        $sql = "DELETE FROM tbl_dc_assigned_supervisor WHERE endo_code = '$updateid'";
                                                                                        $res = $conn->query($sql);
                                                                                        $sql1 = "UPDATE tbl_endorsement_dc_process SET review_supervisor = '', percentage_ = '80', datetime_updated = NOW() WHERE endo_code = '$updateid'";
                                                                                        $res1 = $conn->query($sql1);
                                                                                        $sql2 = "UPDATE tbl_dc_returned_analyst SET is_cleared = '1', datetime_cleared = NOW() WHERE endo_code = '$updateid'";
                                                                                        $res2 = $conn->query($sql2);
                                                                                        $sql3 = "UPDATE tbl_dc_assigned_analyst SET is_distributed = '0' WHERE endo_code = '$updateid'";
                                                                                        $res3 = $conn->query($sql3);
                                                                                        $sql4 = "UPDATE tbl_endo_criminal SET endo_status = '2', is_for_review = '' WHERE endo_code = '$updateid'";
                                                                                        $res4 = $conn->query($sql4);
                                                                                        $sql5 = "DELETE FROM tbl_endo_criminal_reports WHERE endo_code = '$updateid'";
                                                                                        $res5 = mysqli_query($conn,$sql5);
                                                                                        $sql6 = "INSERT INTO endorsement_logs SET client_id = '$client_id', endo_code = '$updateid', endo_action = 'Approval of Returned Endorsement', assigned_poc = '$supervisorid', assigned_operations =  '". $_SESSION['user_id'] ."', assigned_team = '$team_one', datetime_added = NOW()";
                                                                                        $res6 = mysqli_query($conn,$sql6);
                                                                                        $sql7 = "INSERT INTO tbl_operations_history_logs SET
                                                                                                user_id = '". $_SESSION['user_id'] ."',
                                                                                                x_module = 'Returned Endorsement (DC - Analyst)',
                                                                                                x_module_action = 'Approving of Returning Endorsement'";
                                                                                        $res7 = $conn->query($sql7);                                
                                                                                        if ($res7) {
                                                                                            $last_return_id = mysqli_insert_id($conn);
                                                                                            if ($last_return_id) {
                                                                                                $logsid = rand(10000000,99999999);
                                                                                                $logsuserid = "LOG-".$logsid."-".$last_return_id;
                                                                                                $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                                                                                                $resquery = $conn->query($logsquery);
                                                                                            }
                                                                                        }                                                                                                
                                                                                    }
                                                                                }
                                                                            $approvereturnopsdcda = '<script type="text/javascript">
                                                                                    toastr.options.timeOut = "false";
                                                                                    toastr.options.closeButton = true;
                                                                                    toastr.options.positionClass = "toast-bottom-right";
                                                                                    toastr["success"]("Return endorsement(s) succesfully approved.");
                                                                                </script>';
                                                                            }
                                                                        }
                                                                    ?>
                                                                    <form method='POST' action=''><?php echo $approvereturnopsdcda; ?>
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
                                                                                            <h4 class="media-heading">Approval of Return Endorsement</h4>
                                                                                            Please check the following endorsement(s) to be approved.
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-outline-success" style="margin-right: 20px; margin-bottom: 15px;" id="approvedreturneddcda" name="approvedreturneddcda"><i class="fa fa-thumbs-up"></i> Approve</button>
                                                                        <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                                            <thead class="thead-dark">
                                                                                <tr>
                                                                                    <th>
                                                                                        <label class="fancy-checkbox">
                                                                                            <input class="checkbox-tick" type="checkbox" id="chkAllreturneddcda">
                                                                                            <span></span>
                                                                                        </label>
                                                                                    </th>
                                                                                    <th></th>
                                                                                    <th>CODE</th>
                                                                                    <th>NAME</th>
                                                                                    <th>DATE</th>
                                                                                    <th style="text-align: center;">ACTIONS</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                    $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.endo_code, b.assigned_by, b.assigned_supervisor, b.is_distributed, b.datetime_added, b.is_returned, b.datetime_returned, c.user_id, CONCAT(c.user_id) AS clientuserid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, CONCAT(e.user_id) AS supervisorid, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.id, f.endo_code, f.endo_remarks, f.is_cleared, f.assigned_analyst, f.assigned_supervisor, f.datetime_returned, CONCAT(f.datetime_returned) AS datetimereturned, f.datetime_cleared, f.datetime_added, g.user_id, CONCAT(g.fname, ' ', g.mname, ' ', g.lname, ' ', g.suffix) AS operationsname FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_supervisor AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_dc_returned_analyst AS f ON b.endo_code = f.endo_code LEFT JOIN tbl_operations AS g ON b.assigned_by = g.user_id WHERE a.endo_status = '3' AND b.assigned_by = '". $_SESSION['user_id'] ."' AND b.is_distributed = '0' AND b.is_returned = '1' AND f.is_cleared = '0' ORDER BY f.id DESC";
                                                                                    $result = $conn->query($sql);
                                                                                    if ($result->num_rows > 0) {
                                                                                        while ($row = $result->fetch_assoc()) {
                                                                                            $endo_date = $row['endo_date'];
                                                                                            $newDateEndo = date('F d, Y', strtotime($endo_date));
                                                                                            $datetimereturned = $row['datetimereturned'];
                                                                                            $newDateTimeReturned = date('F d, Y - g:i A', strtotime($datetimereturned));

                                                                                            // IMPORTANCE //
                                                                                            if ($row['importance'] == '1') {
                                                                                                $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                                            } else if ($row['importance'] == '2') {
                                                                                                $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                                            }

                                                                                            ?>
                                                                                                <tr>
                                                                                                    <input type="hidden" name="endoCode_<?= $row['endo_code'] ?>" value="<?= $row['endo_code'] ?>">
                                                                                                    <input type="hidden" id="endoid" name="endoid" value="<?= $row['endo_id'] ?>">
                                                                                                    <input type="hidden" id="client_id" name="client_id" value="<?= $row['clientuserid'] ?>">
                                                                                                    <input type="hidden" id="supervisorid" name="supervisorid" value="<?= $row['supervisorid'] ?>">

                                                                                                    <td>
                                                                                                        <label class="fancy-checkbox">
                                                                                                            <input class="checkbox-tick" type="checkbox" id="apprreturndcanalystchk[]" name="apprreturndcanalystchk[]" value='<?= $row['endo_code'] ?>'>
                                                                                                            <span></span>
                                                                                                        </label>
                                                                                                    </td>
                                                                                                    <td><?php echo $endoimportant; ?></td>
                                                                                                    <td><?php echo $row['endo_code']; ?></td>
                                                                                                    <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                                                    <td><?php echo $newDateEndo; ?></td>
                                                                                                    <td style="text-align: center;">
                                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Returned Endorsement" onclick="displayreturnbida('<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_remarks']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['operationsname']; ?>', '<?php echo $newDateTimeReturned; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>');"><i class="fa fa-file-text-o"></i></button>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <?php
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane show" id="returnedhistorydabi">
                                                        <div class="row">
                                                            <div class="col-md-12">
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
                                                                                    <h4 class="media-heading">Viewing of Return Endorsement</h4>Return history list
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="body" style="margin-top: -30px;">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                                            <thead class="thead-dark">
                                                                                <tr>
                                                                                    <th></th>
                                                                                    <th>CODE</th>
                                                                                    <th>NAME</th>
                                                                                    <th>DATE</th>
                                                                                    <th style="text-align: center;">ACTIONS</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                    $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.user_id, CONCAT(b.fname,  ' ', b.mname,  ' ',  b.lname, ' ', b.suffix) AS clientname, b.company_name, b.user_position, b.site_id, b.team_, c.client_id, c.client_name, c.acronym_, c.site_, d.user_id, CONCAT(d.user_id) AS supervisorid, d.assigned_team, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname, d.user_image, e.id, e.endo_code, e.endo_remarks, e.is_cleared, e.assigned_analyst, e.assigned_supervisor, e.datetime_returned, e.datetime_cleared, e.datetime_added, f.user_id, CONCAT(f.fname, ' ', f.mname, ' ', f.lname, ' ', f.suffix) AS operationsdaname FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id LEFT JOIN tbl_dc_returned_analyst AS e ON a.endo_code = e.endo_code LEFT JOIN tbl_operations AS f ON e.assigned_analyst = f.user_id WHERE e.assigned_analyst = '". $_SESSION['user_id'] ."' AND e.is_cleared = '1' AND MONTH(e.datetime_cleared) = MONTH(NOW()) AND YEAR(e.datetime_cleared) = YEAR(NOW()) ORDER BY e.id DESC";
                                                                                    $result = $conn->query($sql);
                                                                                    if ($result->num_rows > 0) {
                                                                                        while ($row = $result->fetch_assoc()) {
                                                                                            $supervisorname = $row['supervisorname'];
                                                                                            $supervisorid = $row['supervisorid'];
                                                                                            $user_image = $row['user_image'];
                                                                                            $endo_date = $row['endo_date'];
                                                                                            $newDateEndo = date('F d, Y', strtotime($endo_date));
                                                                                            $datetime_cleared = $row['datetime_cleared'];
                                                                                            $newDateTimeCleared = date('F d, Y - g:i A', strtotime($datetime_cleared));
                                                                                            $datetime_returned = $row['datetime_returned'];
                                                                                            $newDateTimeReturned = date('F d, Y - g:i A', strtotime($datetime_returned));

                                                                                            ?>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <?php
                                                                                                            echo '<div class="feeds-left"><img src="../profilepictures_/'.$supervisorid.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$supervisorname.'"></div>'
                                                                                                        ?>
                                                                                                    </td>
                                                                                                    <td><?php echo $row['endo_code']; ?></td>
                                                                                                    <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                                                    <td><?php echo $newDateEndo ?></td>
                                                                                                    <td style="text-align: center;"> 
                                                                                                            <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Returned Endorsement" onclick="displayreturnhistorybida('<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_remarks']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['operationsname']; ?>', '<?php echo $newDateTimeReturned; ?>', '<?php echo $newDateTimeCleared; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>'); savereturnedbidahistendo();"><i class="fa fa-history"></i></button>
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

<script type="text/javascript">
    $(document).ready(function(){
        // Check/Uncheck All
        $('#chkAllreturneddcda').change(function(){
            if($(this).is(':checked')){
                $('input[name="apprreturndcanalystchk[]"]').prop('checked',true);
            }else{
                $('input[name="apprreturndcanalystchk[]"]').each(function(){
                    $(this).prop('checked',false);
                }); 
            }
        });

        // Checkbox click
        $('input[name="apprreturndcanalystchk[]"]').click(function(){
            var total_checkboxes = $('input[name="apprreturndcanalystchk[]"]').length;
            var total_checkboxes_checked = $('input[name="apprreturndcanalystchk[]"]:checked').length;

            if(total_checkboxes_checked == total_checkboxes){
                $('#chkAllreturneddcda').prop('checked',true);
            }else{
                $('#chkAllreturneddcda').prop('checked',false);
            }
        });
    }); 
</script>