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
                        <h2>Database Check</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
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
                                    <a class="nav-link active" data-toggle="tab" href="#acknowledgementbi" role="tab" style="font-size: 13px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;ACKNOWLEDGEMENT&nbsp;&nbsp;<span class="badge badge-success" style="font-weight: bold; background-color: #fff; border-radius: 25px;" id="dccountapproval"></span></a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#assignbi" role="tab" style="font-size: 13px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;ASSIGNING&nbsp;&nbsp;<span class="badge badge-success" style="font-weight: bold; background-color: #fff; border-radius: 25px;" id="dccountassigning"></span></a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#returnedbi" role="tab" style="font-size: 13px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;RETURNED&nbsp;&nbsp;<span class="badge badge-success" style="font-weight: bold; background-color: #fff; border-radius: 25px;" id="dccountreturned"></span></a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#forreviewbi" role="tab" style="font-size: 13px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;FOR-REVIEW&nbsp;&nbsp;<span class="badge badge-success" style="font-weight: bold; background-color: #fff; border-radius: 25px;" id="dccountreview"></span></a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#modifybi" role="tab" style="font-size: 13px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;MODIFY&nbsp;&nbsp;<span class="badge badge-success" style="font-weight: bold; background-color: #fff; border-radius: 25px;" id="dccountmodify"></span></a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                            <div class="tab-content br-n pn">
                                <div id="acknowledgementbi" class="tab-pane p-3 active">
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
                                                                <h4 class="media-heading">Approval of Endorsement</h4>
                                                                    Please check the following endorsement(s) for verification checking.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php 
                                                $approvedcalert= "";
                                                if(isset($_POST['dc_approval'])){
                                                    if(isset($_POST['dcapproval'])){
                                                        foreach($_POST['dcapproval'] as $updateid){
                                                                
                                                            $endoCode = $_POST['endoCode_'.$updateid];
                                                            $clientuserid = $_POST['clientuserid'];
                                                            $receiveddc_ = 'Database Check - '.$updateid;

                                                            if($endoCode != ''){
                                                                $updateEndo = "UPDATE tbl_endo_criminal SET endo_status = '1' WHERE endo_code = '$updateid'";
                                                                mysqli_query($conn,$updateEndo);
                                                                $insertEndoSup = "INSERT INTO tbl_endo_support_dc SET endo_code = '$updateid', datetime_added = NOW()";
                                                                mysqli_query($conn,$insertEndoSup);
                                                                $insertEndo = "UPDATE tbl_endorsement_dc_process SET assigned_supervisor = '". $_SESSION["user_id"]."', percentage_ = '25', datetime_added = NOW(), datetime_updated = NOW() WHERE endo_code = '$updateid'";
                                                                mysqli_query($conn,$insertEndo);
                                                                $insertNotif = "INSERT INTO tbl_notifications SET notif_subject = '$receiveddc_', notif_text = 'Received Endorsement', notif_details = 'Success Approval of Endorsement', notif_status = '0', notif_datetime = NOW(), notif_to = '$clientuserid', notif_from = '". $_SESSION["user_id"]."'";
                                                                mysqli_query($conn,$insertNotif);
                                                                $insertlogs = "INSERT INTO endorsement_logs SET client_id = '$clientuserid', endo_code = '$updateid', endo_action = 'Approval of Endorsement', assigned_poc = '". $_SESSION["user_id"]."', assigned_team = '$team_', datetime_added = NOW()";
                                                                mysqli_query($conn,$insertlogs);
                                                                $sql = "INSERT INTO tbl_supervisor_history_logs SET
                                                                        user_id = '". $_SESSION['user_id'] ."',
                                                                        x_module = 'Endorsements - Database Check',
                                                                        x_module_action = 'Approving of Endorsement'";
                                                                $res = $conn->query($sql);                                
                                                                if ($res) {
                                                                    $last_return_id = mysqli_insert_id($conn);
                                                                    if ($last_return_id) {
                                                                        $logsid = rand(10000000,99999999);
                                                                        $logsuserid = "LOG-".$logsid."-".$last_return_id;
                                                                        $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                                                                        $resquery = $conn->query($logsquery);
                                                                    }
                                                                }
                                                            } 
                                                        }
                                                        $approvedcalert = '<script type="text/javascript">
                                                                        toastr.options.timeOut = "false";
                                                                        toastr.options.closeButton = true;
                                                                        toastr.options.positionClass = "toast-bottom-right";
                                                                        toastr["success"]("Endorsement(s) succesfully approved.");
                                                                    </script>';
                                                    }
                                                }
                                            ?>
                                            <div class="body" style="margin-top: -30px;">
                                                <div class="table-responsive">
                                                    <form method='POST' action=''><?php echo $approvedcalert; ?>
                                                        <button type="submit"  class="btn btn-outline-success" style="margin-bottom: 10px;" id="dc_approval" name="dc_approval"><i class="fa fa-check-circle-o"></i>&nbsp;Approve</button>
                                                        <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                            <thead class="thead-dark">
                                                                <tr>
                                                                    <th style="width: 1%;">
                                                                        <label class="fancy-checkbox">
                                                                            <input class="checkbox-tick" type="checkbox" id="chkAllDC">
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
                                                                    $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.user_id, CONCAT(b.user_id) AS clientuserid, CONCAT(b.fname,  ' ', b.mname,  ' ',  b.lname, ' ', b.suffix) AS clientname, b.company_name, b.user_position, b.site_id, b.team_, c.client_id, c.client_name, c.acronym_, c.site_, d.user_id, d.assigned_team, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id WHERE a.endorsed_to = '".$_SESSION["user_id"]."' AND a.endo_status = '0' ORDER BY a.importance ASC";
                                                                    $result = $conn->query($sql);
                                                                    if ($result->num_rows > 0) {
                                                                        while ($row = $result->fetch_assoc()) {
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

                                                                            ?>
                                                                                <tr>
                                                                                    <input type="hidden" name="endoCode_<?= $row['endo_code'] ?>" value="<?= $row['endo_code'] ?>">
                                                                                    <input type="hidden" id="clientuserid" name="clientuserid" value="<?= $row['clientuserid'] ?>">
                                                                                    <td>
                                                                                        <label class="fancy-checkbox">
                                                                                            <input type="checkbox" id="dcapproval[]" name="dcapproval[]" value='<?= $row['endo_code'] ?>'>
                                                                                            <span></span>
                                                                                        </label>
                                                                                    </td>
                                                                                    <td><?php echo $endoimportant; ?></td>
                                                                                    <td><?php echo $row['endo_code']; ?></td>
                                                                                    <td><?php echo $newDateEndo; ?></td>
                                                                                    <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                                    <td style="text-align: center;">
                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement" onclick="displaybiendorsements('<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newDateTurnAround; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>', '<?php echo $row['package_desc']; ?>'); savepocendodcviewendo();"><i class="fa fa-file-text-o"></i></button>
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
                                </div>
                                <div id="assignbi" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="body">
                                                <ul class="nav nav-tabs-new2">
                                                    <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#notassigneddcpoc">Not Assigned</a></li>
                                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#assigneddcpoc">Assigned</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane show active" id="notassigneddcpoc">
                                                        <div class="table-responsive">
                                                            <?php 
                                                                $assignendodadc = "";
                                                                if(isset($_POST['assigndcanalyst_'])){
                                                                    if(isset($_POST['assignedanalystchk'])){
                                                                        foreach($_POST['assignedanalystchk'] as $updateid){
                                                                                
                                                                            $endoCode = $_POST['endoCode_'.$updateid];
                                                                            $client_id = $_POST['client_id'];
                                                                            $analystid = $_POST['selected_analyst'];
                                                                            $assigndc_ = 'Database Check - '.$updateid;

                                                                            if($endoCode != ''){
                                                                                $insertassigneddc = "INSERT INTO tbl_dc_assigned_analyst SET endo_code = '$updateid', assigned_by = '". $_SESSION["user_id"]."', assigned_da = '$analystid', is_distributed = '0', assigned_to = '$team_'";
                                                                                mysqli_query($conn,$insertassigneddc);
                                                                                $updatebiprocess = "UPDATE tbl_endorsement_dc_process SET assigned_analyst = '$analystid', percentage_ = '60', datetime_updated = NOW()  WHERE endo_code = '$updateid'";
                                                                                mysqli_query($conn,$updatebiprocess);    
                                                                                $insertNotifAssignBI = "INSERT INTO tbl_notifications SET notif_subject = '$assigndc_', notif_text = 'Assign Endorsement', notif_details = 'Success Assigning of Endorsement', notif_status = '0', notif_datetime = NOW(), notif_to = '$analystid', notif_from = '". $_SESSION["user_id"]."'";
                                                                                mysqli_query($conn,$insertNotifAssignBI);
                                                                                $insertlogs = "INSERT INTO endorsement_logs SET client_id = '$client_id', endo_code = '$updateid', endo_action = 'Assigning of Endorsement', assigned_poc = '". $_SESSION["user_id"]."', assigned_operations =  '$analystid', assigned_team = '$team_', datetime_added = NOW()";
                                                                                mysqli_query($conn,$insertlogs);
                                                                                $sql = "INSERT INTO tbl_supervisor_history_logs SET
                                                                                        user_id = '". $_SESSION['user_id'] ."',
                                                                                        x_module = 'Assign Endorsement - Database Check',
                                                                                        x_module_action = 'Assigning of Endorsement'";
                                                                                $res = $conn->query($sql);                                
                                                                                if ($res) {
                                                                                    $last_return_id = mysqli_insert_id($conn);
                                                                                    if ($last_return_id) {
                                                                                        $logsid = rand(10000000,99999999);
                                                                                        $logsuserid = "LOG-".$logsid."-".$last_return_id;
                                                                                        $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                                                                                        $resquery = $conn->query($logsquery);
                                                                                    }
                                                                                }
                                                                            } 
                                                                        }
                                                                    $assignendodadc = '<script type="text/javascript">
                                                                        toastr.options.timeOut = "false";
                                                                        toastr.options.closeButton = true;
                                                                        toastr.options.positionClass = "toast-bottom-right";
                                                                        toastr["success"]("Endorsement(s) succesfully assigned.");
                                                                    </script>';
                                                                    }
                                                                }
                                                            ?>
                                                            <form method='POST' action=''><?php echo $assignendodadc; ?>
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
                                                                                    <h4 class="media-heading">Sending Endorsement to Analyst</h4>
                                                                                        Please check the following endorsement(s) to be distributed.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="input-group input-group-sm mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
                                                                            </div>
                                                                            <select class="custom-select" id="selected_analyst" name="selected_analyst">
                                                                            <?php
                                                                                $sql = "SELECT a.user_id, a.assigned_team_one, CONCAT(a.fname, ' ' , a.lname, ' ', a.suffix) AS analystname, a.lname, b.operations_id, CONCAT(b.fname, ' ', b.lname, ' ', b.suffix) AS analystfullname, b.team_one, c.team_no, c.team_name FROM tbl_operations AS a LEFT JOIN operations_list AS b ON CONCAT(a.fname, ' ' , a.mname, ' ' , a.lname, ' ', a.suffix) = CONCAT(b.fname,  ' ', b.mname, ' ', b.lname, ' ', b.suffix) LEFT JOIN team_list AS c ON a.assigned_team_one = c.team_no WHERE a.assigned_team_one = '$team_' AND b.operations_type = '2' ORDER BY a.lname ASC";
                                                                                ?> <option> -- Select Analyst -- </option>; <?php
                                                                                $res = $conn->query($sql);
                                                                                while ($row = mysqli_fetch_array($res)) {
                                                                                    ?>
                                                                                        <option value ="<?php echo $row['user_id'];?>"><?php echo $row['analystname'];?> </option>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <button type="submit" class="btn btn-sm btn-success" style="margin-right: 20px;" id="assigndcanalyst_" name="assigndcanalyst_"><i class="fa fa-paper-plane-o"></i> Distribute Endorsement</button>
                                                                    </div>
                                                                </div>
                                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                                    <thead class="thead-dark">
                                                                        <tr>
                                                                            <th>
                                                                                <label class="fancy-checkbox">
                                                                                    <input class="checkbox-tick" type="checkbox" id="chkAllassignedanalystdc">
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
                                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.endo_code) AS endorsementcode, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, CONCAT(a.client_id) AS clientuserid, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.user_id, CONCAT(b.fname,  ' ', b.mname,  ' ',  b.lname, ' ', b.suffix) AS clientname, b.company_name, b.user_position, b.site_id, b.team_, c.client_id, c.client_name, c.acronym_, c.site_, d.user_id, d.assigned_team, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname, e.endo_code FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id LEFT JOIN tbl_dc_assigned_analyst AS e ON a.endo_code = e.endo_code WHERE a.endo_status = '2' AND d.user_id = '".$_SESSION["user_id"]."' AND e.endo_code IS NULL ORDER BY a.importance DESC";
                                                                            $result = $conn->query($sql);
                                                                            if ($result->num_rows > 0) {
                                                                                while ($row = $result->fetch_assoc()) {
                                                                                    $endorsementcode = $row['endorsementcode'];
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

                                                                                    $sql1 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.endo_code) AS endorsementcode, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, CONCAT(a.client_id) AS clientuserid, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.endo_code, b.assigned_supervisor, b.assigned_support, b.assigned_analyst, c.user_id, CONCAT(c.fname, ' ', c.lname) AS supportname, d.user_id, CONCAT(d.fname, ' ', d.lname, ' ') AS supervisorname, e.user_id, CONCAT(e.fname,  ' ', e.lname) AS opsanalystname FROM tbl_endo_criminal AS a LEFT JOIN tbl_endorsement_dc_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_support AS c ON b.assigned_support = c.user_id LEFT JOIN tbl_supervisor AS d ON b.assigned_supervisor = d.user_id LEFT JOIN tbl_operations AS e ON b.assigned_analyst = e.user_id WHERE a.endo_status = '2' AND a.endo_code = '$endorsementcode' AND d.user_id = '".$_SESSION["user_id"]."' ORDER BY a.importance ASC";
                                                                                    $result1 = $conn->query($sql1);
                                                                                    while ($row1 = $result1->fetch_assoc()) {
                                                                                        $supportname = $row1['supportname'];
                                                                                        $supervisorname = $row1['supervisorname'];
                                                                                        $opsanalystname = $row1['opsanalystname'];
                                                                                    }

                                                                                    ?>
                                                                                        <tr>
                                                                                            <input type="hidden" name="endoCode_<?= $row['endorsementcode'] ?>" value="<?= $row['endorsementcode'] ?>">
                                                                                            <input type="hidden" id="client_id" name="client_id" value="<?= $row['clientuserid'] ?>">
                                                                                            <td>
                                                                                                <label class="fancy-checkbox">
                                                                                                    <input class="checkbox-tick" type="checkbox" id="assignedanalystchk[]" name="assignedanalystchk[]" value='<?= $row['endorsementcode'] ?>'>
                                                                                                    <span></span>
                                                                                                </label>
                                                                                            </td>
                                                                                            <td><?php echo $endoimportant; ?></td>
                                                                                            <td><?php echo $row['endorsementcode']; ?></td>
                                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                                            <td><?php echo $newDateEndo; ?></td>
                                                                                            <td style="text-align: center;">
                                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement" onclick="displaydcassignrevendo('<?php echo $supportname; ?>', '<?php echo $supervisorname; ?>', '<?php echo $opsanalystname; ?>', '<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endorsementcode']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newDateTurnAround; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>', '<?php echo $row['package_desc']; ?>'); savepocassigndcendoview();"><i class="fa fa-file-text-o"></i></button>
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
                                                    <div class="tab-pane" id="assigneddcpoc">
                                                        <div class="table-responsive">
                                                            <?php 
                                                                $reassigndcda = "";
                                                                if(isset($_POST['reassigndcanalyst_'])){
                                                                    if(isset($_POST['reassignanalystchk'])){
                                                                        foreach($_POST['reassignanalystchk'] as $updateid){
                                                                                
                                                                            $endoCode = $_POST['endoCode_'.$updateid];
                                                                            $analystid = $_POST['updated_analyst'];
                                                                            $client_id = $_POST['client_id'];
                                                                            $assigndc_ = 'Database Check - '.$updateid;

                                                                            if($endoCode != ''){
                                                                                $updateassignedbi = "UPDATE tbl_dc_assigned_analyst SET assigned_da = '$analystid' WHERE endo_code = '$updateid'";
                                                                                mysqli_query($conn,$updateassignedbi);
                                                                                $updatebiprocess = "UPDATE tbl_endorsement_dc_process SET assigned_analyst = '$analystid' WHERE endo_code = '$updateid'";
                                                                                mysqli_query($conn,$updatebiprocess);
                                                                                $insertNotifAssignBI = "INSERT INTO tbl_notifications SET notif_subject = '$assigndc_', notif_text = 'Assign Endorsement', notif_details = 'Success Re-Assigning of Endorsement', notif_status = '0', notif_datetime = NOW(), notif_to = '$analystid', notif_from = '". $_SESSION["user_id"]."'";
                                                                                mysqli_query($conn,$insertNotifAssignBI);
                                                                                $insertlogs = "INSERT INTO endorsement_logs SET client_id = '$client_id', endo_code = '$updateid', endo_action = 'Reassigning of Endorsement', assigned_poc = '". $_SESSION["user_id"]."', assigned_operations =  '$analystid', assigned_team = '$team_', datetime_added = NOW()";
                                                                                mysqli_query($conn,$insertlogs);
                                                                                $sql = "INSERT INTO tbl_supervisor_history_logs SET
                                                                                        user_id = '". $_SESSION['user_id'] ."',
                                                                                        x_module = 'Assign Endorsement - Database Check',
                                                                                        x_module_action = 'Re-Assigning of Endorsement'";
                                                                                $res = $conn->query($sql);                                
                                                                                if ($res) {
                                                                                    $last_return_id = mysqli_insert_id($conn);
                                                                                    if ($last_return_id) {
                                                                                        $logsid = rand(10000000,99999999);
                                                                                        $logsuserid = "LOG-".$logsid."-".$last_return_id;
                                                                                        $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                                                                                        $resquery = $conn->query($logsquery);
                                                                                    }
                                                                                }
                                                                            } 
                                                                        }
                                                                    $reassigndcda = '<script type="text/javascript">
                                                                        toastr.options.timeOut = "false";
                                                                        toastr.options.closeButton = true;
                                                                        toastr.options.positionClass = "toast-bottom-right";
                                                                        toastr["success"]("Endorsement(s) succesfully reassign.");
                                                                    </script>';
                                                                    }
                                                                }
                                                            ?>
                                                            <form method='POST' action=''><?php echo $reassigndcda; ?>
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
                                                                                    <h4 class="media-heading">Re-Assign Endorsement to Analyst</h4>
                                                                                        Please check the following endorsement(s) to be reassigned.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="input-group input-group-sm mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
                                                                            </div>
                                                                            <select class="custom-select" id="updated_analyst" name="updated_analyst">
                                                                            <?php
                                                                                $sql = "SELECT a.user_id, a.assigned_team_one, CONCAT(a.fname, ' ' , a.lname, ' ', a.suffix) AS analystname, a.lname, b.operations_id, CONCAT(b.fname, ' ', b.lname, ' ', b.suffix) AS analystfullname, b.team_one, c.team_no, c.team_name FROM tbl_operations AS a LEFT JOIN operations_list AS b ON CONCAT(a.fname, ' ' , a.mname, ' ' , a.lname, ' ', a.suffix) = CONCAT(b.fname,  ' ', b.mname, ' ', b.lname, ' ', b.suffix) LEFT JOIN team_list AS c ON a.assigned_team_one = c.team_no WHERE a.assigned_team_one = '$team_' AND b.operations_type = '2' ORDER BY a.lname ASC";
                                                                                ?> <option> -- Select Analyst -- </option>; <?php
                                                                                $res = $conn->query($sql);
                                                                                while ($row = mysqli_fetch_array($res)) {
                                                                                    ?>
                                                                                        <option value ="<?php echo $row['user_id'];?>"><?php echo $row['analystname'];?> </option>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <button type="submit" class="btn btn-sm btn-success" style="margin-right: 20px;" id="reassigndcanalyst_" name="reassigndcanalyst_"><i class="fa fa-paper-plane-o"></i> Re-Assign Endorsement</button>
                                                                    </div>
                                                                </div>
                                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                                    <thead class="thead-dark">
                                                                        <tr>
                                                                            <th>
                                                                                <label class="fancy-checkbox">
                                                                                    <input class="checkbox-tick" type="checkbox" id="chkAllreassignedanalystdc">
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
                                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.user_id, CONCAT(b.user_id) AS clientuserid, CONCAT(b.fname,  ' ', b.mname,  ' ',  b.lname, ' ', b.suffix) AS clientname, b.company_name, b.user_position, b.site_id, b.team_, c.client_id, c.client_name, c.acronym_, c.site_, d.user_id, d.assigned_team, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname, e.endo_code, e.assigned_by, e.assigned_da, e.assigned_to, e.is_distributed, e.is_returned, e.datetime_added FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id LEFT JOIN tbl_dc_assigned_analyst AS e ON a.endo_code = e.endo_code WHERE a.endo_status = '2' AND d.user_id = '".$_SESSION["user_id"]."' AND e.assigned_da IS NOT NULL ORDER BY a.importance ASC";
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

                                                                                    $endoStatus = '<span class="badge badge-danger">On-Process</span>';

                                                                                    $sql1 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.endo_code) AS endorsementcode, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, CONCAT(a.client_id) AS clientuserid, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.endo_code, b.assigned_supervisor, b.assigned_support, b.assigned_analyst, c.user_id, CONCAT(c.fname, ' ', c.lname) AS supportname, d.user_id, CONCAT(d.fname, ' ', d.lname, ' ') AS supervisorname, e.user_id, CONCAT(e.fname,  ' ', e.lname) AS opsanalystname FROM tbl_endo_criminal AS a LEFT JOIN tbl_endorsement_dc_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_support AS c ON b.assigned_support = c.user_id LEFT JOIN tbl_supervisor AS d ON b.assigned_supervisor = d.user_id LEFT JOIN tbl_operations AS e ON b.assigned_analyst = e.user_id WHERE a.endo_status = '2' AND a.endo_code = '$endo_code' AND d.user_id = '".$_SESSION["user_id"]."' ORDER BY a.importance ASC";
                                                                                    $result1 = $conn->query($sql1);
                                                                                    while ($row1 = $result1->fetch_assoc()) {
                                                                                        $supportname = $row1['supportname'];
                                                                                        $supervisorname = $row1['supervisorname'];
                                                                                        $opsanalystname = $row1['opsanalystname'];
                                                                                    }

                                                                                    ?>
                                                                                        <tr>
                                                                                            <input type="hidden" name="endoCode_<?= $row['endo_code'] ?>" value="<?= $row['endo_code'] ?>">
                                                                                            <input type="hidden" id="client_id" name="client_id" value="<?= $row['clientuserid'] ?>">
                                                                                            <td>
                                                                                                <label class="fancy-checkbox">
                                                                                                    <input class="checkbox-tick" type="checkbox" id="reassignanalystchk[]" name="reassignanalystchk[]" value='<?= $row['endo_code'] ?>'>
                                                                                                    <span></span>
                                                                                                </label>
                                                                                            </td>
                                                                                            <td><?php echo $endoimportant; ?></td>
                                                                                            <td><?php echo $row['endo_code']; ?></td>
                                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                                            <td><?php echo $newDateEndo; ?></td>
                                                                                            <td style="text-align: center;">
                                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement" onclick="displaydcassignrevendo('<?php echo $supportname; ?>', '<?php echo $supervisorname; ?>', '<?php echo $opsanalystname; ?>', '<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newDateTurnAround; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>', '<?php echo $row['package_desc']; ?>'); savepocassigndcendoview();"><i class="fa fa-file-text-o"></i></button>
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
                                        </div>
                                    </div>
                                </div>
                                <div id="returnedbi" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="body">
                                                <ul class="nav nav-tabs-new2">
                                                    <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#returnendodc">Returned</a></li>
                                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#returnedhistorydc">Return History</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane show active" id="returnendodc">
                                                        <div class="table-responsive">
                                                        <?php 
                                                            $approvereturndcda = "";
                                                            if(isset($_POST['approvedreturneddc_da'])){
                                                                if(isset($_POST['apprreturnanalystchk'])){
                                                                    foreach($_POST['apprreturnanalystchk'] as $updateid){
                                                                                
                                                                        $endoCode = $_POST['endoCode_'.$updateid];
                                                                        $client_id = $_POST['client_id'];
                                                                        $ops_id = $_POST['ops_id'];

                                                                        if($endoCode != ''){
                                                                            $deletedabi = "DELETE FROM tbl_dc_assigned_analyst WHERE endo_code = '$updateid'";
                                                                            mysqli_query($conn,$deletedabi);   
                                                                            $updatebiprocess = "UPDATE tbl_endorsement_dc_process SET assigned_analyst = '', percentage_ = '40', datetime_updated = NOW() WHERE endo_code = '$updateid'";
                                                                            mysqli_query($conn,$updatebiprocess);  
                                                                            $updatetelestatus = "UPDATE tbl_dc_returned_supervisor SET is_cleared = '1', datetime_cleared = NOW() WHERE endo_code = '$updateid'";
                                                                            mysqli_query($conn,$updatetelestatus);
                                                                            $insertlogs = "INSERT INTO endorsement_logs SET client_id = '$client_id', endo_code = '$updateid', endo_action = 'Approval of Returned Endorsement', assigned_poc = '". $_SESSION["user_id"]."', assigned_operations =  '$ops_id', assigned_team = '$team_', datetime_added = NOW()";
                                                                            mysqli_query($conn,$insertlogs);
                                                                            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                                                                                    user_id = '". $_SESSION['user_id'] ."',
                                                                                    x_module = 'Returned Endorsement - Database Check',
                                                                                    x_module_action = 'Approving of Returning Endorsement'";
                                                                            $res = $conn->query($sql);                                
                                                                            if ($res) {
                                                                                $last_return_id = mysqli_insert_id($conn);
                                                                                if ($last_return_id) {
                                                                                    $logsid = rand(10000000,99999999);
                                                                                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                                                                                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                                                                                    $resquery = $conn->query($logsquery);
                                                                                }
                                                                            }
                                                                        } 
                                                                    }
                                                                $approvereturndcda = '<script type="text/javascript">
                                                                        toastr.options.timeOut = "false";
                                                                        toastr.options.closeButton = true;
                                                                        toastr.options.positionClass = "toast-bottom-right";
                                                                        toastr["success"]("Return endorsement(s) succesfully approved.");
                                                                    </script>';
                                                                }
                                                            }
                                                        ?>
                                                        <form method='POST' action=''><?php echo $approvereturndcda; ?>
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
                                                            <button type="submit" class="btn btn-sm btn-success" style="margin-right: 20px; margin-bottom: 15px;" id="approvedreturneddc_da" name="approvedreturneddc_da"><i class="fa fa-thumbs-up"></i> Approve Endorsement</button>
                                                            <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                                <thead class="thead-dark">
                                                                    <tr>
                                                                        <th>
                                                                            <label class="fancy-checkbox">
                                                                                <input class="checkbox-tick" type="checkbox" id="chkAllreturneddcanalyst">
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
                                                                        $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.endo_code, b.assigned_by, b.assigned_da, b.is_distributed, b.datetime_added, b.is_returned, b.datetime_returned, c.user_id, CONCAT(c.user_id) AS clientuserid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.id, f.endo_code, f.endo_remarks, f.is_cleared, f.assigned_supervisor, f.assigned_analyst, f.datetime_returned, CONCAT(f.datetime_returned) AS datetimereturned, f.datetime_cleared, f.datetime_added, g.user_id, CONCAT(g.user_id) AS operationsid, CONCAT(g.fname, ' ', g.mname, ' ', g.lname, ' ', g.suffix) AS operationsname FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_analyst AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_dc_returned_supervisor AS f ON b.endo_code = f.endo_code LEFT JOIN tbl_operations AS g ON b.assigned_da = g.user_id WHERE a.endo_status = '2' AND b.assigned_by = '".$_SESSION["user_id"]."' AND b.is_distributed = '0' AND b.is_returned = '1' AND f.is_cleared = '0' ORDER BY f.id DESC";
                                                                        $result = $conn->query($sql);
                                                                        if ($result->num_rows > 0) {
                                                                            while ($row = $result->fetch_assoc()) {
                                                                                $endo_date = $row['endo_date'];
                                                                                $newDateEndo = date('F d, Y', strtotime($endo_date));
                                                                                $datetimereturned = $row['datetimereturned'];
                                                                                $newDateTimeReturned = date('F d, Y - g:i A', strtotime($datetimereturned));

                                                                                if ($row['importance'] == '1') {
                                                                                    $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                                } else if ($row['importance'] == '2') {
                                                                                    $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                                }

                                                                                ?>
                                                                                    <tr>
                                                                                        <input type="hidden" name="endoCode_<?= $row['endo_code'] ?>" value="<?= $row['endo_code'] ?>">
                                                                                        <input type="hidden" id="client_id" name="client_id" value="<?= $row['clientuserid'] ?>">
                                                                                        <input type="hidden" id="ops_id" name="ops_id" value="<?= $row['operationsid'] ?>">
                                                                                        <td>
                                                                                            <label class="fancy-checkbox">
                                                                                                <input class="checkbox-tick" type="checkbox" id="apprreturnanalystchk[]" name="apprreturnanalystchk[]" value='<?= $row['endo_code'] ?>'>
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td><?php echo $endoimportant; ?></td>
                                                                                        <td><?php echo $row['endo_code']; ?></td>
                                                                                        <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                                        <td><?php echo $newDateEndo; ?></td>
                                                                                        <td style="text-align: center;">
                                                                                            <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Returned Endorsement" onclick="displayreturndcendo('<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_remarks']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['operationsname']; ?>', '<?php echo $newDateTimeReturned; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>'); savepocreturneddcviewendo();"><i class="fa fa-file-text-o"></i></button>
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
                                                    <div class="tab-pane show" id="returnedhistorybi">
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
                                                                                    <h4 class="media-heading">Viewing of Return Endorsement</h4>eturn history list
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
                                                                                    $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.user_id, CONCAT(b.fname,  ' ', b.mname,  ' ',  b.lname, ' ', b.suffix) AS clientname, b.company_name, b.user_position, b.site_id, b.team_, c.client_id, c.client_name, c.acronym_, c.site_, d.user_id, d.assigned_team, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname, e.id, e.endo_code, e.endo_remarks, e.is_cleared, e.assigned_supervisor, e.assigned_analyst, e.datetime_returned, e.datetime_cleared, e.datetime_added, f.user_id, CONCAT(f.user_id) AS operationsid, CONCAT(f.fname, ' ', f.mname, ' ', f.lname, ' ', f.suffix) AS operationsdaname, f.user_image FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id LEFT JOIN tbl_dc_returned_supervisor AS e ON a.endo_code = e.endo_code LEFT JOIN tbl_operations AS f ON e.assigned_analyst = f.user_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND e.is_cleared = '1' AND MONTH(e.datetime_cleared) = MONTH(NOW()) AND YEAR(e.datetime_cleared) = YEAR(NOW()) ORDER BY e.id DESC";
                                                                                    $result = $conn->query($sql);
                                                                                    if ($result->num_rows > 0) {
                                                                                        while ($row = $result->fetch_assoc()) {
                                                                                            $operationsname = $row['operationsname'];
                                                                                            $operationsid = $row['operationsid'];
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
                                                                                                            echo '<div class="feeds-left"><img src="../profilepictures_/'.$operationsid.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$operationsname.'"></div>'
                                                                                                        ?>
                                                                                                    </td>
                                                                                                    <td><?php echo $row['endo_code']; ?></td>
                                                                                                    <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                                                    <td><?php echo $newDateEndo ?></td>
                                                                                                    <td style="text-align: center;">
                                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Returned Endorsement" onclick="displayreturnhistorybi('<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_remarks']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['operationsname']; ?>', '<?php echo $newDateTimeReturned; ?>', '<?php echo $newDateTimeCleared; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>'); savereturnedbihistendo();"><i class="fa fa-history"></i></button>
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
                                <div id="forreviewbi" class="tab-pane p-3">
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
                                                                <h4 class="media-heading">Submission to Client</h4>
                                                                    Please check the following endorsement(s) for submission.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php 
                                                $submitreportdc = "";
                                                if(isset($_POST['submitendodc'])){
                                                    if(isset($_POST['chksubmitendodc'])){
                                                        foreach($_POST['chksubmitendodc'] as $updateid){
                                                                                
                                                            $endoCode = $_POST['endoCode_'.$updateid];
                                                            $clientid_ = $_POST['clientid_'];
                                                            $submitdc_ = 'Database Check - '.$updateid;

                                                            if($endoCode != ''){
                                                                $sql = "UPDATE tbl_dc_assigned_supervisor SET is_distributed = '1' WHERE endo_code = '$updateid'";
                                                                mysqli_query($conn,$sql);
                                                                $sql1 = "UPDATE tbl_endo_criminal SET endo_status = '4', is_done = '1' WHERE endo_code = '$updateid'";
                                                                mysqli_query($conn,$sql1);
                                                                $sql2 = "INSERT INTO tbl_dc_assigned_client SET endo_code = '$updateid', assigned_by = '". $_SESSION["user_id"]."', assigned_client = '$clientid_', assigned_to = '$team_', is_distributed = '0', is_returned = '0'";
                                                                mysqli_query($conn,$sql2);
                                                                $sql6 = "UPDATE tbl_endorsement_dc_process SET assigned_client = '$clientid_', datetime_completed = NOW(), percentage_ = '100', datetime_updated = NOW() WHERE endo_code = '$updateid'";
                                                                mysqli_query($conn,$sql6);                                    
                                                                $sql3 = "INSERT INTO tbl_notifications SET notif_subject = '$submitdc_', notif_text = 'Sending of Final Report to Client', notif_details = 'Success of Sending Final Report', notif_status = '0', notif_datetime = NOW(), notif_to = '$clientid_', notif_from = '". $_SESSION["user_id"]."'";
                                                                mysqli_query($conn,$sql3);
                                                                $sql4 = "INSERT INTO endorsement_logs SET client_id = '$clientid_' , endo_code = '$updateid', endo_action = 'Sending of Final Report to Client', assigned_poc = '". $_SESSION["user_id"]."', assigned_team = '$team_', datetime_added = NOW()";
                                                                mysqli_query($conn,$sql4);
                                                                $sql5 = "INSERT INTO tbl_supervisor_history_logs SET
                                                                        user_id = '". $_SESSION['user_id'] ."',
                                                                        x_module = 'Review Endorsement - Database Check',
                                                                        x_module_action = 'Sending of Final Report'";
                                                                $res5 = $conn->query($sql5);                           
                                                                if ($res5) {
                                                                    $last_return_id = mysqli_insert_id($conn);
                                                                    if ($last_return_id) {
                                                                        $logsid = rand(10000000,99999999);
                                                                        $logsuserid = "LOG-".$logsid."-".$last_return_id;
                                                                        $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                                                                        $resquery = $conn->query($logsquery);
                                                                    }
                                                                }                                             

                                                            } 
                                                        }
                                                        $submitreportdc = '<script type="text/javascript">
                                                                        toastr.options.timeOut = "false";
                                                                        toastr.options.closeButton = true;
                                                                        toastr.options.positionClass = "toast-bottom-right";
                                                                        toastr["success"]("Report(s) succesfully submitted.");
                                                                    </script>';
                                                    }
                                                }
                                            ?>
                                            <div class="body" style="margin-top: -30px;">
                                                <div class="table-responsive">
                                                    <form method='POST' action=''><?php echo $submitreportdc; ?>  
                                                        <button type="submit" class="btn btn-sm btn-success" style="margin-bottom: 10px;" id="submitendodc" name="submitendodc"><i class="fa fa-paper-plane-o"></i> Submit Endorsement</button>
                                                        <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                            <thead class="thead-dark">
                                                                <tr>
                                                                    <th>
                                                                        <label class="fancy-checkbox">
                                                                            <input class="checkbox-tick" type="checkbox" id="chkAllsubmitendodc">
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
                                                                    $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, CONCAT(a.client_id) AS clientuserid, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.id, b.endo_code, b.assigned_by, b.assigned_supervisor, b.assigned_to, b.is_distributed, b.is_returned, b.datetime_added, c.user_id, CONCAT(c.user_id) AS clientid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.id, f.endo_code, f.assigned_by, f.assigned_da, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_supervisor AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_dc_assigned_analyst AS f ON b.endo_code = f.endo_code WHERE a.endo_status = '3' AND a.endorsed_to = '".$_SESSION["user_id"]."' AND a.is_for_review = '1' AND b.is_distributed = '0'  AND b.is_returned = '0' ORDER BY a.importance DESC";
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

                                                                            $sql1 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.endo_code) AS endorsementcode, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, CONCAT(a.client_id) AS clientuserid, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.endo_code, b.assigned_supervisor, b.assigned_support, b.assigned_analyst, c.user_id, CONCAT(c.fname, ' ', c.lname) AS supportname, d.user_id, CONCAT(d.fname, ' ', d.lname, ' ') AS supervisorname, e.user_id, CONCAT(e.user_id) AS opsanalystid, CONCAT(e.fname,  ' ', e.lname) AS opsanalystname FROM tbl_endo_criminal AS a LEFT JOIN tbl_endorsement_dc_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_support AS c ON b.assigned_support = c.user_id LEFT JOIN tbl_supervisor AS d ON b.assigned_supervisor = d.user_id LEFT JOIN tbl_operations AS e ON b.assigned_analyst = e.user_id WHERE a.endo_status = '3' AND a.endo_code = '$endo_code' AND d.user_id = '".$_SESSION["user_id"]."' ORDER BY a.importance ASC";
                                                                            $result1 = $conn->query($sql1);
                                                                            $row1 = mysqli_fetch_array($result1);
                                                                                $supportname = $row1['supportname'];
                                                                                $supervisorname = $row1['supervisorname'];
                                                                                $opsanalystname = $row1['opsanalystname'];

                                                                            ?>
                                                                                <tr>
                                                                                    <input type="hidden" id="endoCode_" name="endoCode_<?= $row['endo_code'] ?>" value="<?= $row['endo_code'] ?>">
                                                                                    <input type="hidden" id="clientid_" name="clientid_" value="<?= $row['clientuserid'] ?>">
                                                                                    <td>
                                                                                        <label class="fancy-checkbox">
                                                                                            <input class="checkbox-tick" type="checkbox" id="chksubmitendodc[]" name="chksubmitendodc[]" value='<?= $row['endo_code'] ?>'>
                                                                                            <span></span>
                                                                                        </label>
                                                                                    </td>
                                                                                    <td><?php echo $endoimportant; ?></td>
                                                                                    <td><?php echo $row['endo_code']; ?></td>
                                                                                    <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                                    <td><?php echo $newDateEndo; ?></td>
                                                                                    <td style="text-align: center;"> 
                                                                                        <a onclick="savepocreviewdceditreport();" href="edit_report_dc.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit Report"><i class="fa fa-pencil-square-o"></i></a>
                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement" onclick="displaydcassignendorsements('<?php echo $supportname; ?>', '<?php echo $supervisorname; ?>', '<?php echo $opsanalystname; ?>', '<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newDateTurnAround; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>', '<?php echo $row['package_desc']; ?>'); savepocreviewdcviewendo();"><i class="fa fa-file-text-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Return Endorsement" onclick="displayreturnendodc('<?php echo $row['applicantname']; ?>', '<?php echo $row1['opsanalystname']; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row1['opsanalystid']; ?>', '<?php echo $row['clientid']; ?>');"><i class="fa fa-undo"></i></button> 
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
                                </div>
                                <div id="modifybi" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="body">
                                                <ul class="nav nav-tabs-new2">
                                                    <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#modifyendodc">Returned</a></li>
                                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#modifyhistorydc">Return History</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane show active" id="modifyendodc">
                                                        <div class="table-responsive">
                                                            <?php
                                                                $approvereturnclientbi = "";
                                                                if (isset($_POST['approvedreturneddc_client'])) {
                                                                    if (isset($_POST['apprreturndcclientchk'])) {
                                                                        foreach ($_POST['apprreturndcclientchk'] as $updateid) {

                                                                            $endoCode = $_POST['endoCode_'.$updateid];
                                                                            $client_id = $_POST['client_id'];

                                                                            if ($endoCode != '') {
                                                                                $sql = "DELETE FROM tbl_dc_assigned_client WHERE endo_code = '$updateid'";
                                                                                $res = $conn->query($sql);
                                                                                $sql1 = "UPDATE tbl_endorsement_dc_process SET assigned_client = '', percentage_ = '80', datetime_updated = NOW(), datetime_completed = '' WHERE endo_code = '$updateid'";
                                                                                $res1 = $conn->query($sql1);
                                                                                $sql2 = "UPDATE tbl_dc_returned_client SET is_cleared = '1', datetime_cleared = NOW() WHERE endo_code = '$updateid'";
                                                                                $res2 = $conn->query($sql2);
                                                                                $sql3 = "UPDATE tbl_dc_assigned_supervisor SET is_distributed = '0' WHERE endo_code = '$updateid'";
                                                                                $res3 = $conn->query($sql3);
                                                                                $sql4 = "UPDATE tbl_endo_criminal SET endo_status = '3', is_for_review = '1', is_done = '' WHERE endo_code = '$updateid'";
                                                                                $res4 = $conn->query($sql4);
                                                                                $sql5 = "INSERT INTO endorsement_logs SET client_id = '$client_id', endo_code = '$updateid', endo_action = 'Approval of Returned Endorsement', assigned_poc = '". $_SESSION['user_id'] ."', assigned_team = '$team_', datetime_added = NOW()";
                                                                                $res5 = mysqli_query($conn,$sql5);
                                                                                $sql6 = "INSERT INTO tbl_supervisor_history_logs SET
                                                                                        user_id = '". $_SESSION['user_id'] ."',
                                                                                        x_module = 'Modify Endorsement - Database Check',
                                                                                        x_module_action = 'Approving of Returning Endorsement'";
                                                                                $res6 = $conn->query($sql6);                                
                                                                                if ($res6) {
                                                                                    $last_return_id = mysqli_insert_id($conn);
                                                                                    if ($last_return_id) {
                                                                                        $logsid = rand(10000000,99999999);
                                                                                        $logsuserid = "LOG-".$logsid."-".$last_return_id;
                                                                                        $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                                                                                        $resquery = $conn->query($logsquery);
                                                                                    }
                                                                                }                                                            
                                                                            }
                                                                        }
                                                                        $approvereturnclientbi = '<script type="text/javascript">
                                                                                toastr.options.timeOut = "false";
                                                                                toastr.options.closeButton = true;
                                                                                toastr.options.positionClass = "toast-bottom-right";
                                                                                toastr["success"]("Return endorsement(s) succesfully approved.");
                                                                            </script>';
                                                                    }
                                                                }
                                                            ?>
                                                            <form method='POST' action=''><?php echo $approvereturnclientbi; ?>
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
                                                                <button type="submit" class="btn btn-sm btn-success" style="margin-right: 20px; margin-bottom: 15px;" id="approvedreturneddc_client" name="approvedreturneddc_client"><i class="fa fa-thumbs-up"></i> Approve Endorsement</button>
                                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                                    <thead class="thead-dark">
                                                                        <tr>
                                                                            <th>
                                                                                <label class="fancy-checkbox">
                                                                                    <input class="checkbox-tick" type="checkbox" id="chkAllreturneddcclient">
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
                                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.change_package, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.endo_code, b.assigned_by, b.assigned_client, b.is_distributed, b.datetime_added, b.is_returned, b.datetime_returned, c.user_id, CONCAT(c.user_id) AS clientuserid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.id, f.return_code, f.endo_code, f.endo_remarks, f.is_cleared, f.assigned_client, f.assigned_supervisor, f.datetime_returned, CONCAT(f.datetime_returned) AS datetimereturned, f.datetime_cleared, f.datetime_added FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_client AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_dc_returned_client AS f ON b.endo_code = f.endo_code WHERE a.endo_status = '4' AND a.endorsed_to = '".$_SESSION["user_id"]."' AND b.is_distributed = '0' AND b.is_returned = '1' AND f.is_cleared = '0' ORDER BY f.id DESC";
                                                                            $result = $conn->query($sql);
                                                                            if ($result->num_rows > 0) {
                                                                                while ($row = $result->fetch_assoc()) {
                                                                                    $endo_date = $row['endo_date'];
                                                                                    $newDateEndo = date('F d, Y', strtotime($endo_date));
                                                                                    $datetimereturned = $row['datetimereturned'];
                                                                                    $newDateTimeReturned = date('F d, Y - g:i A', strtotime($datetimereturned));

                                                                                    if ($row['importance'] == '1') {
                                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                                    } else if ($row['importance'] == '2') {
                                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                                    }

                                                                                    ?>
                                                                                        <tr>
                                                                                            <input type="hidden" name="endoCode_<?= $row['endo_code'] ?>" value="<?= $row['endo_code'] ?>">
                                                                                            <input type="hidden" id="client_id" name="client_id" value="<?= $row['clientuserid'] ?>">
                                                                                            <td>
                                                                                                <label class="fancy-checkbox">
                                                                                                    <input class="checkbox-tick" type="checkbox" id="apprreturndcclientchk[]" name="apprreturndcclientchk[]" value='<?= $row['endo_code'] ?>'>
                                                                                                    <span></span>
                                                                                                </label>
                                                                                            </td>
                                                                                            <td><?php echo $endoimportant; ?></td>
                                                                                            <td><?php echo $row['endo_code']; ?></td>
                                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                                            <td><?php echo $newDateEndo; ?></td>
                                                                                            <td style="text-align: center;">
                                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Returned Endorsement" onclick="displaymodifydcendo('<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_remarks']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $newDateTimeReturned; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>'); savepocmodifydcviewendo();"><i class="fa fa-file-text-o"></i></button>
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
                                                    <div class="tab-pane show" id="modifyhistorydc">
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
                                                                                    <h4 class="media-heading">Viewing of Return Endorsement</h4>eturn history list
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
                                                                                    $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.change_package, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.user_id, CONCAT(b.user_id) AS clientid, CONCAT(b.fname,  ' ', b.mname,  ' ',  b.lname, ' ', b.suffix) AS clientname, b.company_name, b.user_position, b.site_id, b.team_, b.user_image, c.client_id, c.client_name, c.acronym_, c.site_, d.user_id, CONCAT(d.user_id) AS supervisorid, d.assigned_team, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname, e.endo_code, e.endo_remarks, e.is_cleared, e.assigned_client, e.assigned_supervisor, e.datetime_returned, e.datetime_cleared, e.datetime_added FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id LEFT JOIN tbl_dc_returned_client AS e ON a.endo_code = e.endo_code WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND e.is_cleared = '1' AND MONTH(e.datetime_cleared) = MONTH(NOW()) AND YEAR(e.datetime_cleared) = YEAR(NOW()) ORDER BY e.id DESC";
                                                                                    $result = $conn->query($sql);
                                                                                    if ($result->num_rows > 0) {
                                                                                        while ($row = $result->fetch_assoc()) {
                                                                                            $operationsname = $row['operationsname'];
                                                                                            $operationsid = $row['operationsid'];
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
                                                                                                            echo '<div class="feeds-left"><img src="../profilepictures_/'.$operationsid.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$operationsname.'"></div>'
                                                                                                        ?>
                                                                                                    </td>
                                                                                                    <td><?php echo $row['endo_code']; ?></td>
                                                                                                    <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                                                    <td><?php echo $newDateEndo ?></td>
                                                                                                    <td style="text-align: center;">
                                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Returned Endorsement" onclick="displayreturnhistorybi('<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_remarks']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['operationsname']; ?>', '<?php echo $newDateTimeReturned; ?>', '<?php echo $newDateTimeCleared; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>'); savereturnedbihistendo();"><i class="fa fa-history"></i></button>
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
    // ACKNOWLEDGEMENT //
    $(document).ready(function(){
        // Check/Uncheck All
        $('#chkAllDC').change(function(){
            if($(this).is(':checked')){
                $('input[name="dcapproval[]"]').prop('checked',true);
            }else{
                $('input[name="dcapproval[]"]').each(function(){
                    $(this).prop('checked',false);
                }); 
            }
        });
        // Checkbox click
        $('input[name="dcapproval[]"]').click(function(){
            var total_checkboxes = $('input[name="dcapproval[]"]').length;
            var total_checkboxes_checked = $('input[name="dcapproval[]"]:checked').length;

            if(total_checkboxes_checked == total_checkboxes){
                $('#chkAllDC').prop('checked',true);
            }else{
                $('#chkAllDC').prop('checked',false);
            }
        });
    }); 

    // ASSIGN //
    $(document).ready(function(){
        // Check/Uncheck All
        $('#chkAllassignedanalystdc').change(function(){
            if($(this).is(':checked')){
                $('input[name="assignedanalystchk[]"]').prop('checked',true);
            }else{
                $('input[name="assignedanalystchk[]"]').each(function(){
                    $(this).prop('checked',false);
                }); 
            }
        });
        $('#chkAllreassignedanalystdc').change(function(){
            if($(this).is(':checked')){
                $('input[name="reassignanalystchk[]"]').prop('checked',true);
            }else{
                $('input[name="reassignanalystchk[]"]').each(function(){
                    $(this).prop('checked',false);
                }); 
            }
        });

        // Checkbox click
        $('input[name="assignedanalystchk[]"]').click(function(){
            var total_checkboxes = $('input[name="assignedanalystchk[]"]').length;
            var total_checkboxes_checked = $('input[name="assignedanalystchk[]"]:checked').length;

            if(total_checkboxes_checked == total_checkboxes){
                $('#chkAllassignedanalystdc').prop('checked',true);
            }else{
                $('#chkAllassignedanalystdc').prop('checked',false);
            }
        });
        $('input[name="reassignanalystchk[]"]').click(function(){
            var total_checkboxes = $('input[name="reassignanalystchk[]"]').length;
            var total_checkboxes_checked = $('input[name="reassignanalystchk[]"]:checked').length;

            if(total_checkboxes_checked == total_checkboxes){
                $('#chkAllreassignedanalystdc').prop('checked',true);
            }else{
                $('#chkAllreassignedanalystdc').prop('checked',false);
            }
        });
    }); 

    // RETURNED //
    $(document).ready(function(){
        // Check/Uncheck All
        $('#chkAllreturneddcanalyst').change(function(){
            if($(this).is(':checked')){
                $('input[name="apprreturnanalystchk[]"]').prop('checked',true);
            }else{
                $('input[name="apprreturnanalystchk[]"]').each(function(){
                    $(this).prop('checked',false);
                }); 
            }
        });

        // Checkbox click
        $('input[name="apprreturnanalystchk[]"]').click(function(){
            var total_checkboxes = $('input[name="apprreturnanalystchk[]"]').length;
            var total_checkboxes_checked = $('input[name="apprreturnanalystchk[]"]:checked').length;

            if(total_checkboxes_checked == total_checkboxes){
                $('#chkAllreturneddcanalyst').prop('checked',true);
            }else{
                $('#chkAllreturneddcanalyst').prop('checked',false);
            }
        });
    }); 

    // REVIEW //
    $(document).ready(function(){
        // Check/Uncheck All
        $('#chkAllsubmitendodc').change(function(){
            if($(this).is(':checked')){
                $('input[name="chksubmitendodc[]"]').prop('checked',true);
            }else{
                $('input[name="chksubmitendodc[]"]').each(function(){
                    $(this).prop('checked',false);
                }); 
            }
        });
        // Checkbox click
        $('input[name="chksubmitendodc[]"]').click(function(){
            var total_checkboxes = $('input[name="chksubmitendodc[]"]').length;
            var total_checkboxes_checked = $('input[name="chksubmitendodc[]"]:checked').length;

            if(total_checkboxes_checked == total_checkboxes){
                $('#chkAllsubmitendodc').prop('checked',true);
            }else{
                $('#chkAllsubmitendodc').prop('checked',false);
            }
        });
    }); 

    // MODIFY //
    $(document).ready(function(){
        // Check/Uncheck All
        $('#chkAllreturneddcclient').change(function(){
            if($(this).is(':checked')){
                $('input[name="apprreturndcclientchk[]"]').prop('checked',true);
            }else{
                $('input[name="apprreturndcclientchk[]"]').each(function(){
                    $(this).prop('checked',false);
                }); 
            }
        });

        // Checkbox click
        $('input[name="apprreturndcclientchk[]"]').click(function(){
            var total_checkboxes = $('input[name="apprreturndcclientchk[]"]').length;
            var total_checkboxes_checked = $('input[name="apprreturndcclientchk[]"]:checked').length;

            if(total_checkboxes_checked == total_checkboxes){
                $('#chkAllreturneddcclient').prop('checked',true);
            }else{
                $('#chkAllreturneddcclient').prop('checked',false);
            }
        });
    }); 
</script>