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
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Endorsements</li>
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
                                                    Background Investigation - <?php echo $now->format('Y'); ?>
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
                                            <?php
                                                $distributebidaalert= "";
                                                if (isset($_POST['btnbidadistribute'])) {
                                                    if (isset($_POST['bidadistribute'])) {
                                                        foreach ($_POST['bidadistribute'] as $updateid) {
                                                            $endoCode = $_POST['endoCode_'.$updateid];
                                                            $supervisorid = $_POST['supervisorid'];
                                                            $clientid = $_POST['clientid'];
                                                            $receivedbi_ = 'Background Investigation - '.$updateid;
                                                            $clientacronym = $_POST['acronym_'];
                                                            $now = new DateTime();
                                                            $year = date('Y');
                                                            $month = date('F');
                                                            $day = date('d');
                                                            $target_dir = "../client_/documents_endo/{$year}/{$clientacronym}/{$endoCode}/FinalReport";
                                                            $mkdir = "../../client_/final_report/{$endo_code}";

                                                            if ($endoCode != '') {
                                                                mkdir($target_dir, 0777, true);
                                                                $sql = "UPDATE tbl_bi_assigned_analyst SET is_distributed =  '1' WHERE endo_code = '$updateid'";
                                                                mysqli_query($conn,$sql);
                                                                $sql1 = "INSERT INTO tbl_bi_assigned_supervisor SET endo_code = '$updateid', assigned_by = '".$_SESSION["user_id"]."', assigned_supervisor = '$supervisorid', is_distributed = '0', assigned_to = '$team_one'";
                                                                mysqli_query($conn,$sql1);
                                                                $sql2 = "UPDATE tbl_endorsement_bi_process SET review_supervisor = '$supervisorid', percentage_ = '90', datetime_updated = NOW() WHERE endo_code ='$updateid'";
                                                                mysqli_query($conn,$sql2);
                                                                $sql3 = "INSERT INTO tbl_notifications SET notif_subject = '$receivedbi_', notif_text = 'Sending of Report to Supervisor', notif_details = 'Success Sending of Endorsement Report', notif_status = '0', notif_datetime = NOW(), notif_to = '$supervisorid', notif_from = '". $_SESSION["user_id"]."'";
                                                                mysqli_query($conn,$sql3);
                                                                $sql4 = "UPDATE tbl_endo SET endo_status = '3', is_for_review = '1' WHERE endo_code = '$updateid'";
                                                                mysqli_query($conn,$sql4);
                                                                $sql5 = "INSERT INTO endorsement_logs SET client_id = '$clientid', endo_code = '$updateid', endo_action = 'Sending of Report to Supervisor', assigned_poc = '$supervisorid', assigned_operations = '". $_SESSION["user_id"]."', assigned_team = '$team_one', datetime_added = NOW()";
                                                                mysqli_query($conn,$sql5);
                                                                $sql6 = "UPDATE create_report_options SET assigned_da = '".$_SESSION["user_id"]."' WHERE endorsement_code = '$updateid'";
                                                                mysqli_query($conn,$sql6);
                                                                mkdir($mkdir, 0777, true);
                                                                $sql7 = "INSERT INTO tbl_operations_history_logs SET
                                                                        user_id = '". $_SESSION['user_id'] ."',
                                                                        x_module = 'Endorsements - Background Investigation',
                                                                        x_module_action = 'Sending of Endorsement Report'";
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
                                                        $distributebidaalert = '<script type="text/javascript">
                                                                        toastr.options.timeOut = "false";
                                                                        toastr.options.closeButton = true;
                                                                        toastr.options.positionClass = "toast-bottom-right";
                                                                        toastr["success"]("Reports(s) succesfully sent.");
                                                                    </script>';
                                                    }
                                                }
                                            ?>
                                            <div class="body" style="margin-top: -30px;">
                                                <div class="table-responsive">
                                                    <form method='POST' action=''><?php echo $distributebidaalert; ?>
                                                        <button type="submit"  class="btn btn-outline-success" style="margin-bottom: 10px;" id="btnbidadistribute" name="btnbidadistribute"><i class="fa fa-check-circle-o"></i>&nbsp;Distribute</button>
                                                        <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                            <thead class="thead-dark">
                                                                <tr>
                                                                    <th style="width: 1%;">
                                                                        <label class="fancy-checkbox">
                                                                            <input class="checkbox-tick" type="checkbox" id="chkalldistributebida">
                                                                            <span></span>
                                                                        </label>
                                                                    </th>
                                                                    <!--<th></th>-->
                                                                    <th>CODE</th>
                                                                    <th>NAME</th>
                                                                    <th>BIRTHDATE</th>
                                                                    <th style="text-align: center;">ACTIONS</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                    $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.application_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.assigned_by, b.assigned_specialist, b.assigned_to, b.is_distributed, b.is_returned, b.datetime_added, c.id, c.endo_code, c.assigned_by, c.assigned_da, c.assigned_to, c.is_distributed, c.is_returned, c.datetime_added, d.user_id, CONCAT(d.user_id) AS clientid, CONCAT(d.fname, ' ', d.mname,  ' ', d.lname, ' ', d.suffix) AS clientname, d.company_name, d.site_id, e.client_id, e.client_name, e.acronym_, e.site_, e.supervisor_, f.user_id, CONCAT(f.user_id) AS supervisorid, CONCAT(f.fname, ' ', f.mname, ' ', f.lname, ' ', f.suffix) AS supervisorname, g.user_id, CONCAT(g.fname, ' ', g.mname, ' ', g.lname, ' ', g.suffix) AS operationsname FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_specialist AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_bi_assigned_analyst AS c ON b.endo_code = c.endo_code LEFT JOIN tbl_client AS d ON a.client_id = d.user_id LEFT JOIN client_list AS e ON a.site_id = e.client_id LEFT JOIN tbl_supervisor AS f ON a.endorsed_to = f.user_id LEFT JOIN tbl_operations AS g ON c.assigned_da = g.user_id WHERE a.endo_status = '2' AND c.assigned_da = '".$_SESSION["user_id"]."' AND c.is_distributed = '0' AND c.is_returned = '0' ORDER BY a.endo_date ASC";
                                                                    $result = $conn->query($sql);
                                                                    if ($result->num_rows > 0) {
                                                                        while ($row = $result->fetch_assoc()) {
                                                                            $endo_code = $row['endo_code'];
                                                                            $endo_date = $row['endo_date'];
                                                                            $newDateEndo = date('F d, Y', strtotime($endo_date));
                                                                            $newBirthDate = date('F d, Y', strtotime($row['birthdate']));
                                                                            $newDateTimeEndo = date('F d, Y - g:i A', strtotime($endo_date));
                                                                            $turnaround_date = $row['turn_around_date'];
                                                                            $newTurnAroundDate = date('F d, Y', strtotime($turnaround_date));

                                                                            // IMPORTANCE //
                                                                            if ($row['importance'] == '1') {
                                                                                $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                            } else if ($row['importance'] == '2') {
                                                                                $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                            }

                                                                            $sql1 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_supervisor, b.assigned_support, b.assigned_specialist, b.assigned_analyst, c.user_id, CONCAT(c.fname, ' ', c.lname) AS supportname, d.user_id, CONCAT(d.fname, ' ', d.lname, ' ') AS supervisorname, e.user_id, CONCAT(e.user_id) AS opsverifierid, CONCAT(e.fname,  ' ', e.lname) AS opsverifiername FROM tbl_endo AS a LEFT JOIN tbl_endorsement_bi_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_support AS c ON b.assigned_support = c.user_id LEFT JOIN tbl_supervisor AS d ON b.assigned_supervisor = d.user_id LEFT JOIN tbl_operations AS e ON b.assigned_specialist = e.user_id WHERE a.endo_status = '2' AND b.assigned_analyst = '".$_SESSION["user_id"]."' AND a.endo_code = '$endo_code' ORDER BY a.importance ASC";
                                                                            $result1 = $conn->query($sql1);
                                                                            $row1 = mysqli_fetch_array($result1);
                                                                            $supportname = $row1['supportname'];
                                                                            $supervisorname = $row1['supervisorname'];
                                                                            $opsverifiername = $row1['opsverifiername'];
                                                                            $opsverifierid = $row1['opsverifierid'];

                                                                            $sql2 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_analyst, c.user_id, CONCAT(c.fname, ' ', c.lname, ' ') AS opsanalystname FROM tbl_endo AS a LEFT JOIN tbl_endorsement_bi_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_operations AS c ON b.assigned_analyst = c.user_id WHERE a.endo_status = '2' AND a.endo_code = '$endo_code' AND c.user_id = '".$_SESSION["user_id"]."' ORDER BY a.importance ASC";
                                                                            $result2 = $conn->query($sql2);
                                                                            while ($row2 = $result2->fetch_assoc()) {
                                                                                $opsanalystname = $row2['opsanalystname'];
                                                                            }

                                                                            ?>
                                                                                <tr>
                                                                                    <input type="hidden" id="endoCode_" name="endoCode_<?= $row['endo_code'] ?>" value="<?= $row['endo_code'] ?>">
                                                                                    <input type="hidden" id="supervisorid" name="supervisorid" value="<?= $row['supervisorid'] ?>">
                                                                                    <input type="hidden" id="clientid" name="clientid" value="<?= $row['clientid'] ?>">
                                                                                    <input type="hidden" id="acronym_" name="acronym_" value="<?= $row['acronym_'] ?>">
                                                                                    <td>
                                                                                        <label class="fancy-checkbox">
                                                                                            <input class="checkbox-tick" type="checkbox" id="bidadistribute[]" name="bidadistribute[]" value='<?= $row['endo_code'] ?>'>
                                                                                            <span></span>
                                                                                        </label>
                                                                                    </td>
                                                                                    <!--<td><?php echo $endoimportant; ?></td>-->
                                                                                    <td><?php echo $row['endo_code']; ?></td>
                                                                                    <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                                    <td><?php echo $newBirthDate; ?></td>
                                                                                    <td style="text-align: center;">
                                                                                        <a href="send_report_supervisor.php?id=<?php echo $row['endo_id'] ?>" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Send Report"><i class="fa fa-paper-plane-o"></i></a>
                                                                                        <a onclick="saveeditreportbida();" href="edit_report_bi.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Edit Report"><i class="fa fa-pencil-square-o"></i></a>
                                                                                        <a onclick="savesuppdocsbida();" href="suppdocs_bi_da.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Documents"><i class="fa fa-download"></i></a>
                                                                                        <a href="authorizationLetter.php?applicationCode=<?php echo $row['application_code'] ?>" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Generate LOA"><i class="fa fa-print"></i></a>
                                                                                        <a href="download_informations.php?applicationCode=<?php echo $row['application_code'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Informations"><i class="fa fa-edit"></i></a>
                                                                                        <!--<a onclick="savegeneraterepbida();" href="generate_report_bi.php?file=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>-->
                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement" onclick="displaybiteleendorsement('<?php echo $supportname; ?>', '<?php echo $supervisorname; ?>', '<?php echo $opsverifiername; ?>', '<?php echo $opsanalystname; ?>', '<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newTurnAroundDate; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>', '<?php echo $row['package_desc']; ?>'); saveviewendobida();"><i class="fa fa-file-text-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Return Endorsement" onclick="displayreturnedbida('<?php echo $row['applicantname']; ?>', '<?php echo $row1['opsverifiername']; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['supervisorid']; ?>', '<?php echo $row1['opsverifierid']; ?>', '<?php echo $row['clientid']; ?>');savereturnendobida();"><i class="fa fa-undo"></i></button>
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
                                                                        $returnbidaalert = "";  
                                                                        if (isset($_POST['btnapprvreturnbida'])) {
                                                                            if (isset($_POST['bidareturnendo'])) {
                                                                                foreach ($_POST['bidareturnendo'] as $updateid) {
                                                                                    $endoCode = $_POST['endoCode_'.$updateid];
                                                                                    $endoid = $_POST['endoid'];
                                                                                    $client_id = $_POST['client_id'];
                                                                                    $supervisorid = $_POST['supervisorid'];

                                                                                    if ($endoCode != '') {
                                                                                        $sql = "DELETE FROM tbl_bi_assigned_supervisor WHERE endo_code = '$updateid'";
                                                                                        mysqli_query($conn,$sql);
                                                                                        $sql1 = "UPDATE tbl_endorsement_bi_process SET review_supervisor = '', percentage_ = '80', datetime_updated = NOW() WHERE endo_code = '$updateid'";
                                                                                        mysqli_query($conn,$sql1);
                                                                                        $sql2 = "UPDATE tbl_bi_returned_analyst SET is_cleared = '1', datetime_cleared = NOW() WHERE endo_code = '$updateid'";
                                                                                        mysqli_query($conn,$sql2);
                                                                                        $sql3 = "UPDATE tbl_bi_assigned_analyst SET is_distributed = '0' WHERE endo_code = '$updateid'";
                                                                                        mysqli_query($conn,$sql3);
                                                                                        $sql4 = "UPDATE tbl_endo SET endo_status = '2', is_for_review = '' WHERE endo_code = '$updateid'";
                                                                                        mysqli_query($conn,$sql4);                 
                                                                                        $sql5 = "INSERT INTO endorsement_logs SET client_id = '$client_id', endo_code = '$updateid', endo_action = 'Approval of Returned Endorsement', assigned_poc = '$supervisorid', assigned_operations =  '". $_SESSION['user_id'] ."', assigned_team = '$team_one', datetime_added = NOW()";
                                                                                        mysqli_query($conn,$sql5);                 
                                                                                        $sql6 = "INSERT INTO tbl_operations_history_logs SET
                                                                                                user_id = '". $_SESSION['user_id'] ."',
                                                                                                x_module = 'Endorsements - Background Investigation',
                                                                                                x_module_action = 'Approving of Returning Endorsement'";
                                                                                        $res6 = $conn->query($sql6);        
                                                                                        if ($res6) {
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
                                                                                $returnbidaalert = '<script type="text/javascript">
                                                                                        toastr.options.timeOut = "false";
                                                                                        toastr.options.closeButton = true;
                                                                                        toastr.options.positionClass = "toast-bottom-right";
                                                                                        toastr["success"]("Return endorsement(s) succesfully approved.");
                                                                                    </script>';
                                                                            }
                                                                        }
                                                                    ?>
                                                                    <form method='POST' action=''><?php echo $returnbidaalert; ?>
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
                                                                        <button type="submit" class="btn btn-outline-success" style="margin-right: 20px; margin-bottom: 15px;" id="btnapprvreturnbida" name="btnapprvreturnbida"><i class="fa fa-thumbs-up"></i> Approve</button>
                                                                        <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                                            <thead class="thead-dark">
                                                                                <tr>
                                                                                    <th>
                                                                                        <label class="fancy-checkbox">
                                                                                            <input class="checkbox-tick" type="checkbox" id="chkallreturnedendobida">
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
                                                                                    $sql = "SELECT a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_by, b.assigned_supervisor, b.assigned_to, b.is_distributed, b.datetime_added, b.is_returned, b.datetime_returned, c.user_id, CONCAT(c.user_id) AS clientuserid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, CONCAT(e.user_id) AS supervisorid, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.id, f.endo_code, f.endo_remarks, f.is_cleared, f.assigned_analyst, f.assigned_supervisor, f.datetime_returned, CONCAT(f.datetime_returned) AS datetimereturned, f.datetime_cleared, f.datetime_added, g.user_id, CONCAT(g.fname, ' ', g.mname, ' ', g.lname, ' ', g.suffix) AS operationsname, h.endo_id, h.file_name, h.report_datetime FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_supervisor AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_returned_analyst AS f ON b.endo_code = f.endo_code LEFT JOIN tbl_operations AS g ON b.assigned_by = g.user_id LEFT JOIN tbl_reports AS h ON a.endo_id = h.endo_id WHERE a.endo_status = '3' AND b.assigned_by = '". $_SESSION['user_id'] ."' AND b.is_distributed = '0' AND b.is_returned = '1' AND f.is_cleared = '0' ORDER BY f.id DESC";
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
                                                                                                    <input type="hidden" id="dareport" name="dareport" value="<?= $row['file_name'] ?>">
                                                                                                    <input type="hidden" id="client_id" name="client_id" value="<?= $row['clientuserid'] ?>">
                                                                                                    <input type="hidden" id="supervisorid" name="supervisorid" value="<?= $row['supervisorid'] ?>">
                                                                                                    <td>
                                                                                                        <label class="fancy-checkbox">
                                                                                                            <input class="checkbox-tick" type="checkbox" id="bidareturnendo[]" name="bidareturnendo[]" value='<?= $row['endo_code'] ?>'>
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
                                                                                    $sql = "SELECT a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname,  ' ', b.mname,  ' ',  b.lname, ' ', b.suffix) AS clientname, b.company_name, b.user_position, b.site_id, b.team_, c.client_id, c.client_name, c.acronym_, c.site_, d.user_id, CONCAT(d.user_id) AS supervisorid, d.assigned_team, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname, d.user_image, e.id, e.endo_code, e.endo_remarks, e.is_cleared, e.assigned_analyst, e.assigned_supervisor, e.datetime_returned, e.datetime_cleared, e.datetime_added, f.user_id, CONCAT(f.fname, ' ', f.mname, ' ', f.lname, ' ', f.suffix) AS operationsname FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id LEFT JOIN tbl_bi_returned_analyst AS e ON a.endo_code = e.endo_code LEFT JOIN tbl_operations AS f ON e.assigned_analyst = f.user_id WHERE e.assigned_analyst = '". $_SESSION['user_id'] ."' AND e.is_cleared = '1' AND MONTH(e.datetime_cleared) = MONTH(NOW()) AND YEAR(e.datetime_cleared) = YEAR(NOW()) ORDER BY e.id DESC";
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
        // DISTRIBUTE //
        // Check/Uncheck All
        $('#chkalldistributebida').change(function(){
            if($(this).is(':checked')){
                $('input[name="bidadistribute[]"]').prop('checked',true);
            }else{
                $('input[name="bidadistribute[]"]').each(function(){
                    $(this).prop('checked',false);
                }); 
            }
        });
        // Checkbox click
        $('input[name="bidadistribute[]"]').click(function(){
            var total_checkboxes = $('input[name="bidadistribute[]"]').length;
            var total_checkboxes_checked = $('input[name="bidadistribute[]"]:checked').length;

            if(total_checkboxes_checked == total_checkboxes){
                $('#chkalldistributebida').prop('checked',true);
            }else{
                $('#chkalldistributebida').prop('checked',false);
            }
        });
    });

    // RETURNED //
    $(document).ready(function(){
        // Check/Uncheck All
        $('#chkallreturnedendobida').change(function(){
            if($(this).is(':checked')){
                $('input[name="bidareturnendo[]"]').prop('checked',true);
            }else{
                $('input[name="bidareturnendo[]"]').each(function(){
                    $(this).prop('checked',false);
                }); 
            }
        });

        // Checkbox click
        $('input[name="bidareturnendo[]"]').click(function(){
            var total_checkboxes = $('input[name="bidareturnendo[]"]').length;
            var total_checkboxes_checked = $('input[name="bidareturnendo[]"]:checked').length;

            if(total_checkboxes_checked == total_checkboxes){
                $('#chkallreturnedendobida').prop('checked',true);
            }else{
                $('#chkallreturnedendobida').prop('checked',false);
            }
        });
    }); 
</script>