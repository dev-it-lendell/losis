<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    if (!empty($_GET['bicreatereport'])) {
        switch($_GET['bicreatereport']){
            case 'succsend':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['success']('Adding of report succesfully added.');
                    </script>
                <?php
            break;

            case 'errsend':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Cannot add report.');
                    </script>
                <?php
            break;

            default:
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Report adding error.');
                    </script>
                <?php
            break;
        }
    }

    if (!empty($_GET['bisavereport'])) {
        switch ($_GET['bisavereport']) {
            case 'succsend':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['success']('Saving of report succesfully added.');
                    </script>
                <?php
            break;

            case 'errsend':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Cannot save report.');
                    </script>
                <?php
            break;

            default:
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Report saving error.');
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
                        <h2>Endorsements</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active">Endorsements</li>
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
                                    <a class="nav-link active" data-toggle="tab" href="#distributetelebi" role="tab" style="font-size: 13px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;DISTRIBUTE&nbsp;&nbsp;<span class="badge badge-success" style="font-weight: bold; background-color: #fff; border-radius: 25px;" id="bicountdistributetele"></span></a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#returnedtelebi" role="tab" style="font-size: 13px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;RETURNED&nbsp;&nbsp;<span class="badge badge-success" style="font-weight: bold; background-color: #fff; border-radius: 25px;" id="bicountreturnedtele"></span></a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                            <div class="tab-content br-n pn">
                                <div id="distributetelebi" class="tab-pane p-3 active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="body">
                                                <ul class="nav nav-tabs-new2">
                                                    <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#notassignedbitele" style="font-size: 13px; font-weight: bold;">NOT ASSIGNED</a></li>
                                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#assignedbitele" style="font-size: 13px; font-weight: bold;">ASSIGNED</a></li>
                                                </ul>
                                                <div class="tab-content br-n pn">
                                                    <div class="tab-pane show active" id="notassignedbitele">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="table-responsive">
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
                                                                                        <h4 class="media-heading">Sending of Report to Analyst</h4>
                                                                                            Please view the selected endorsement for report checking.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                                        <thead class="thead-dark">
                                                                            <tr>
                                                                                <th></th>
                                                                                <th>CODE</th>
                                                                                <th>NAME</th>
                                                                                <th>BIRTHDATE</th>
                                                                                <th>DATE</th>
                                                                                <th style="text-align: center;">ACTIONS</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                                $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.endo_code) AS endocode, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.user_id) AS clientid, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.user_id, CONCAT(d.user_id) AS supervisorid, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname, e.id, e.endo_code, e.assigned_by, e.assigned_specialist, e.assigned_to, e.is_distributed, e.is_returned, e.datetime_added, f.user_id, CONCAT(f.fname, ' ', f.mname, ' ', f.lname, ' ', f.suffix) AS operationsname FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id LEFT JOIN tbl_bi_assigned_specialist AS e ON a.endo_code = e.endo_code LEFT JOIN tbl_operations AS f ON e.assigned_specialist = f.user_id WHERE a.endo_status = '2' AND e.assigned_specialist = '".$_SESSION["user_id"]."' AND e.is_returned = '0' ORDER BY a.endo_status DESC";
                                                                                $result = $conn->query($sql);
                                                                                if ($result->num_rows > 0) {
                                                                                    while ($row = $result->fetch_assoc()) {
                                                                                        $endo_code = $row['endo_code'];
                                                                                        $endo_date = $row['endo_date'];
                                                                                        $newDateEndo = date('F d, Y', strtotime($endo_date));
                                                                                        $newDateTimeEndo = date('F d, Y - g:i A', strtotime($endo_date));
                                                                                        $turnaround_date = $row['turn_around_date'];
                                                                                        $newTurnAroundDate = date('F d, Y', strtotime($turnaround_date));
                                                                                        $birthdate = $row['birthdate'];
                                                                                        $newBirthdate = date('F d, Y', strtotime($birthdate));
                                                                        
                                                                                        // IMPORTANCE //
                                                                                        if ($row['importance'] == '1') {
                                                                                            $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                                        } else if ($row['importance'] == '2') {
                                                                                            $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                                        }
                                                                        
                                                                                        $sql1 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_supervisor, b.assigned_support, b.assigned_specialist, b.assigned_analyst, c.user_id, CONCAT(c.fname, ' ', c.lname) AS supportname, d.user_id, CONCAT(d.fname, ' ', d.lname, ' ') AS supervisorname, e.user_id, CONCAT(e.fname,  ' ', e.lname) AS opsverifiername FROM tbl_endo AS a LEFT JOIN tbl_endorsement_bi_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_support AS c ON b.assigned_support = c.user_id LEFT JOIN tbl_supervisor AS d ON b.assigned_supervisor = d.user_id LEFT JOIN tbl_operations AS e ON b.assigned_specialist = e.user_id WHERE a.endo_status = '2' AND e.user_id = '".$_SESSION["user_id"]."' AND a.endo_code = '$endo_code' ORDER BY a.importance ASC";
                                                                                        $result1 = $conn->query($sql1);
                                                                                        while ($row1 = $result1->fetch_assoc()) {
                                                                                            $supportname = $row1['supportname'];
                                                                                            $supervisorname = $row1['supervisorname'];
                                                                                            $opsverifiername = $row1['opsverifiername'];
                                                                                        }
                                                                        
                                                                                        $sql2 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_analyst, c.user_id, CONCAT(c.fname, ' ', c.lname, ' ') AS opsanalystname, d.user_id FROM tbl_endo AS a LEFT JOIN tbl_endorsement_bi_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_operations AS c ON b.assigned_analyst = c.user_id LEFT JOIN tbl_users AS d ON b.assigned_specialist = d.user_id WHERE a.endo_status = '2' AND a.endo_code = '$endo_code' ORDER BY a.importance ASC";
                                                                                        $result2 = $conn->query($sql2);
                                                                                        while ($row2 = $result2->fetch_assoc()) {
                                                                                            $opsanalystname = $row2['opsanalystname'];
                                                                                        }
                                                                        
                                                                                        $sql2 = "SELECT * FROM create_report_options WHERE endorsement_code = '$endo_code'";
                                                                                        $result2 = $conn->query($sql2);
                                                                                        $row2 = mysqli_fetch_array($result2);
                                                                                        $endorsement_code = $row2["endorsement_code"] ?? null;
                                                                        
                                                                                        $sql3 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                                        $result3 = $conn->query($sql3);
                                                                                        $row3 = mysqli_fetch_array($result3);
                                                                                        $endocode = $row3["endo_code"] ?? null;
                                                                        
                                                                                        ?>
                                                                                            <tr>
                                                                                                <td><?php echo $endoimportant; ?></td>
                                                                                                <td><?php echo $row['endocode']; ?></td>
                                                                                                <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                                                <td><?php echo $newBirthdate; ?></td>
                                                                                                <td><?php echo $newDateEndo; ?></td>
                                                                                                <td style="text-align: center;">
                                                                                                    <?php
                                                                                                        if ($endorsement_code == "") {
                                                                                                            ?>
                                                                                                            <a onclick="saveaddreportbitele();" href="add_report_bi.php?endoCode=<?php echo $row['endocode'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Add Report"><i class="fa fa-plus-circle"></i></a>
                                                                                                            <a onclick="savesuppdocsbitele();" href="suppdocs_bi_tele.php?endoCode=<?php echo $row['endocode'] ?>" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Download Documents"><i class="fa fa-download"></i></a>
                                                                                                            <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement" onclick="displaybiteleendorsement('<?php echo $supportname; ?>', '<?php echo $supervisorname; ?>', '<?php echo $opsverifiername; ?>', '<?php echo $opsanalystname; ?>', '<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endocode']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newTurnAroundDate; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>', '<?php echo $row['package_desc']; ?>'); saveviewendobitele();"><i class="fa fa-file-text-o"></i></button>
                                                                                                            <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Return Endorsement" onclick="displayreturnedbitele('<?php echo $row['applicantname']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['endocode']; ?>', '<?php echo $row['supervisorid']; ?>', '<?php echo $row['clientid']; ?>'); savereturnendobitele();"><i class="fa fa-undo"></i></button>
                                                                                                            <?php
                                                                                                        } else if ($endocode == "") {
                                                                                                            ?>
                                                                                                            <a onclick="saveviewreportformbitele();" href="report_form_bi.php?endoCode=<?php echo $row['endocode'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Report Form"><i class="fa fa-files-o"></i></a>
                                                                                                            <a onclick="savesuppdocsbitele();" href="suppdocs_bi_tele.php?endoCode=<?php echo $row['endocode'] ?>" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Download Documents"><i class="fa fa-download"></i></a>
                                                                                                            <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement" onclick="displaybiteleendorsement('<?php echo $supportname; ?>', '<?php echo $supervisorname; ?>', '<?php echo $opsverifiername; ?>', '<?php echo $opsanalystname; ?>', '<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endocode']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newTurnAroundDate; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>', '<?php echo $row['package_desc']; ?>'); saveviewendobitele();"><i class="fa fa-file-text-o"></i></button>
                                                                                                            <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Return Endorsement" onclick="displayreturnedbitele('<?php echo $row['applicantname']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['endocode']; ?>', '<?php echo $row['supervisorid']; ?>', '<?php echo $row['clientid']; ?>'); savereturnendobitele();"><i class="fa fa-undo"></i></button>
                                                                                                            <?php
                                                                                                        } else {
                                                                                                            ?>
                                                                                                            <a onclick="saveeditreportbida();" href="edit_report_bi.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Edit Report"><i class="fa fa-pencil-square-o"></i></a>
                                                                                                            <a onclick="saveviewreportbitele();" href="viewing_report_bi.php?endoCode=<?php echo $row['endocode'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                                            <a onclick="savegeneraterepbitele();" href="generate_report_bi.php?file=<?php echo $row['endocode'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
                                                    <div class="tab-pane show" id="assignedbitele">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="table-responsive">
                                                                    <?php

                                                                    ?>
                                                                    <form method='POST' action=''><?php echo $reassignbialert; ?>
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
                                                                            <div class="col-md-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="input-group input-group-sm mb-3">
                                                                                            <div class="input-group-prepend">
                                                                                                <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
                                                                                            </div>
                                                                                            <select class="custom-select" id="updated_analyst" name="updated_analyst">
                                                                                            <?php
                                                                                                $sql = "SELECT a.user_id, a.fname, a.lname, CONCAT(a.fname, ' ' ,a.lname) AS operations_name, a.user_image, a.assigned_team_one, a.assigned_team_two, b.operations_id, CONCAT(b.fname, ' ' , b.lname) AS analyst_name, b.operations_type, c.team_no, c.team_name, d.user_id, d.userstatus_ FROM tbl_operations AS a LEFT JOIN operations_list AS b ON CONCAT(a.fname, ' ' , a.mname,  ' ' , a.lname,  ' ', a.suffix) = CONCAT(b.fname, ' ' , b.mname,  ' ' , b.lname,  ' ', b.suffix) LEFT JOIN team_list AS c ON b.team_one = c.team_no LEFT JOIN tbl_users AS d ON a.user_id = d.user_id WHERE a.assigned_team_one = '$team_one' AND b.operations_type = '2' UNION ALL SELECT a.user_id, a.fname, a.lname, CONCAT(a.fname, ' ' ,a.lname) AS operations_name, a.user_image, a.assigned_team_one, a.assigned_team_two, b.operations_id, CONCAT(b.fname, ' ' , b.lname) AS analyst_name, b.operations_type, c.team_no, c.team_name, d.user_id, d.userstatus_ FROM tbl_operations AS a LEFT JOIN operations_list AS b ON CONCAT(a.fname, ' ' , a.mname,  ' ' , a.lname,  ' ', a.suffix) = CONCAT(b.fname, ' ' , b.mname,  ' ' , b.lname,  ' ', b.suffix) LEFT JOIN team_list AS c ON b.team_one = c.team_no LEFT JOIN tbl_users AS d ON a.user_id = d.user_id WHERE a.assigned_team_two = '$team_one' AND b.operations_type = '2' ORDER BY lname ASC";
                                                                                                ?> <option> -- Select Analyst -- </option>; <?php
                                                                                                $res = $conn->query($sql);
                                                                                                while ($row = mysqli_fetch_array($res)) {
                                                                                                    ?>
                                                                                                        <option value ="<?php echo $row['user_id'];?>"><?php echo $row['analyst_name'];?> </option>
                                                                                                    <?php
                                                                                                }
                                                                                            ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <button type="submit" class="btn btn-sm btn-success" style="margin-right: 20px;" id="btnbitelereassign" name="btnbitelereassign"><i class="fa fa-paper-plane-o"></i> Re-Assign</button>
                                                                                    </div>
                                                                                </div>
                                                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                                                    <thead class="thead-dark">
                                                                                        <tr>
                                                                                            <th>
                                                                                                <label class="fancy-checkbox">
                                                                                                    <input class="checkbox-tick" type="checkbox" id="chkallreassignbitele">
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
                                                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.user_id) AS clientid, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.user_id, CONCAT(d.user_id) AS supervisorid, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname, e.id, e.endo_code, e.assigned_by, e.assigned_specialist, e.assigned_to, e.is_distributed, e.is_returned, e.datetime_added, f.user_id, CONCAT(f.fname, ' ', f.mname, ' ', f.lname, ' ', f.suffix) AS operationsname, g.endo_code, g.endo_code, g.assigned_supervisor, g.assigned_support, g.assigned_specialist, g.assigned_analyst FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id LEFT JOIN tbl_bi_assigned_specialist AS e ON a.endo_code = e.endo_code LEFT JOIN tbl_operations AS f ON e.assigned_specialist = f.user_id LEFT JOIN tbl_endorsement_bi_process AS g ON e.endo_code = g.endo_code WHERE a.endo_status = '2' AND e.assigned_specialist = '".$_SESSION["user_id"]."' AND e.is_distributed = '1' AND e.is_returned = '0' AND g.assigned_analyst IS NOT NULL ORDER BY a.importance ASC";
                                                                                            $result = $conn->query($sql);
                                                                                            if ($result->num_rows > 0) {
                                                                                                while ($row = $result->fetch_assoc()) {
                                                                                                    $endo_code = $row['endo_code'];
                                                                                                    $endo_date = $row['endo_date'];
                                                                                                    $newDateEndo = date('F d, Y', strtotime($endo_date));
                                                                                                    $newDateTimeEndo = date('F d, Y - g:i A', strtotime($endo_date));
                                                                                                    $turnaround_date = $row['turn_around_date'];
                                                                                                    $newDateTurnAround = date('F d, Y', strtotime($turnaround_date));

                                                                                                    // IMPORTANCE //
                                                                                                    if ($row['importance'] == '1') {
                                                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                                                    } else if ($row['importance'] == '2') {
                                                                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                                                    }

                                                                                                    $sql1 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_supervisor, b.assigned_support, b.assigned_specialist, b.assigned_analyst, c.user_id, CONCAT(c.fname, ' ', c.lname) AS supportname, d.user_id, CONCAT(d.fname, ' ', d.lname, ' ') AS supervisorname, e.user_id, CONCAT(e.fname,  ' ', e.lname) AS opsverifiername FROM tbl_endo AS a LEFT JOIN tbl_endorsement_bi_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_support AS c ON b.assigned_support = c.user_id LEFT JOIN tbl_supervisor AS d ON b.assigned_supervisor = d.user_id LEFT JOIN tbl_operations AS e ON b.assigned_specialist = e.user_id WHERE a.endo_status = '2' AND e.user_id = '".$_SESSION["user_id"]."' AND a.endo_code = '$endo_code' ORDER BY a.importance ASC";
                                                                                                    $result1 = $conn->query($sql1);
                                                                                                    while ($row1 = $result1->fetch_assoc()) {
                                                                                                        $supportname = $row1['supportname'];
                                                                                                        $supervisorname = $row1['supervisorname'];
                                                                                                        $opsverifiername = $row1['opsverifiername'];
                                                                                                    }
                                                                                                    
                                                                                                    $sql2 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_analyst, c.user_id, CONCAT(c.fname, ' ', c.lname, ' ') AS opsanalystname, d.user_id FROM tbl_endo AS a LEFT JOIN tbl_endorsement_bi_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_operations AS c ON b.assigned_analyst = c.user_id LEFT JOIN tbl_users AS d ON b.assigned_specialist = d.user_id WHERE a.endo_status = '2' AND a.endo_code = '$endo_code' ORDER BY a.importance ASC";
                                                                                                    $result2 = $conn->query($sql2);
                                                                                                    while ($row2 = $result2->fetch_assoc()) {
                                                                                                        $opsanalystname = $row2['opsanalystname'];
                                                                                                    }

                                                                                                    ?>
                                                                                                        <tr>
                                                                                                            <input type="hidden" name="endoCode_<?= $row['endo_code'] ?>" value="<?= $row['endo_code'] ?>">
                                                                                                            <input type="hidden" id="clientid" name="clientid" value="<?= $row['clientid'] ?>">
                                                                                                            <input type="hidden" id="supervisorid" name="supervisorid" value="<?= $row['supervisorid'] ?>">
                                                                                                            <td>
                                                                                                                <label class="fancy-checkbox">
                                                                                                                    <input class="checkbox-tick" type="checkbox" id="bitelebireassign[]" name="bitelebireassign[]" value='<?= $row['endo_code'] ?>'>
                                                                                                                    <span></span>
                                                                                                                </label>
                                                                                                            </td>
                                                                                                            <td><?php echo $endoimportant; ?></td>
                                                                                                            <td><?php echo $row['endo_code']; ?></td>
                                                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                                                            <td><?php echo $newDateEndo; ?></td>
                                                                                                            <td style="text-align: center;"><button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement" onclick="displaybiteleendorsement('<?php echo $supportname; ?>', '<?php echo $supervisorname; ?>', '<?php echo $opsverifiername; ?>', '<?php echo $opsanalystname; ?>', '<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endocode']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newTurnAroundDate; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>', '<?php echo $row['package_desc']; ?>'); saveviewendobitele();"><i class="fa fa-file-text-o"></i></button></td>
                                                                                                        </tr>                               
                                                                                                    <?php
                                                                                                }
                                                                                            }
                                                                                        ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="returnedtelebi" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="body">
                                                <ul class="nav nav-tabs-new2">
                                                    <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#returnendotelebi">Returned</a></li>
                                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#returnedhistorytelebi">Return History</a></li>
                                                </ul>
                                                <div class="tab-content br-n pn">
                                                    <div class="tab-pane show active" id="returnendotelebi">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="table-responsive">
                                                                    <?php
                                                                        $returnbitelealert = "";
                                                                        if (isset($_POST['btnapprvreturnbitele'])) {
                                                                            if (isset($_POST['bitelereturnendo'])) {
                                                                                foreach ($_POST['bitelereturnendo'] as $updateid) {
                                                                                    $endoCode = $_POST['endoCode_'.$updateid];
                                                                                    $endoid = $_POST['endoid'];
                                                                                    $client_id = $_POST['client_id'];
                                                                                    $supervisorid = $_POST['supervisorid'];

                                                                                    if ($endoCode != '') {
                                                                                        $sql = "DELETE FROM tbl_bi_assigned_analyst WHERE endo_code = '$updateid'";
                                                                                        mysqli_query($conn,$sql);
                                                                                        $sql1 = "UPDATE tbl_endorsement_bi_process SET assigned_analyst = '', percentage_ = '60', datetime_updated = NOW() WHERE endo_code = '$updateid'";
                                                                                        mysqli_query($conn,$sql1);
                                                                                        $sql2 = "UPDATE tbl_bi_returned_specialist SET is_cleared = '1', datetime_cleared = NOW() WHERE endo_code = '$updateid'";
                                                                                        mysqli_query($conn,$sql2);
                                                                                        $sql3 = "UPDATE tbl_bi_assigned_specialist SET is_distributed = '0' WHERE endo_code = '$updateid'";
                                                                                        mysqli_query($conn,$sql3);
                                                                                        $sql4 = "INSERT INTO endorsement_logs SET client_id = '$client_id', endo_code = '$updateid', endo_action = 'Approval of Returned Endorsement', assigned_poc = '$supervisorid', assigned_operations =  '". $_SESSION['user_id'] ."', assigned_team = '$team_one', datetime_added = NOW()";
                                                                                        mysqli_query($conn,$sql4);                 
                                                                                        $sql5 = "DELETE FROM bi_report_assessment WHERE endo_code = '$updateid'";
                                                                                        mysqli_query($conn,$sql5);                 
                                                                                        $sql6 = "DELETE FROM create_report_options WHERE endorsement_code = '$updateid'";  
                                                                                        mysqli_query($conn,$sql6);      
                                                                                        $sql7 = "DELETE FROM report_academic WHERE endo_code = '$updateid'";  
                                                                                        mysqli_query($conn,$sql7);      
                                                                                        $sql8 = "DELETE FROM report_barangay_check WHERE endo_code = '$updateid'";  
                                                                                        mysqli_query($conn,$sql8);
                                                                                        $sql9 = "DELETE FROM report_character_ref WHERE endo_code = '$updateid'"; 
                                                                                        mysqli_query($conn,$sql9);
                                                                                        $sql10 = "DELETE FROM report_credit_cmap WHERE endo_code = '$updateid'"; 
                                                                                        mysqli_query($conn,$sql10);
                                                                                        $sql11 = "DELETE FROM report_criminal_lcc WHERE endo_code = '$updateid'"; 
                                                                                        mysqli_query($conn,$sql11);
                                                                                        $sql12 = "DELETE FROM report_criminal_nbi WHERE endo_code = '$updateid'"; 
                                                                                        mysqli_query($conn,$sql12);
                                                                                        $sql13 = "DELETE FROM report_emphistory WHERE endo_code = '$updateid'"; 
                                                                                        mysqli_query($conn,$sql13);
                                                                                        $sql14 = "DELETE FROM report_financial_review WHERE endo_code = '$updateid'"; 
                                                                                        mysqli_query($conn,$sql14);
                                                                                        $sql15 = "DELETE FROM report_identity_bir WHERE endo_code = '$updateid'"; 
                                                                                        mysqli_query($conn,$sql15);
                                                                                        $sql16 = "DELETE FROM report_identity_sss WHERE endo_code = '$updateid'"; 
                                                                                        mysqli_query($conn,$sql16);
                                                                                        $sql17 = "DELETE FROM report_international_check WHERE endo_code = '$updateid'"; 
                                                                                        mysqli_query($conn,$sql17);
                                                                                        $sql18 = "DELETE FROM report_lifestyle_check WHERE endo_code = '$updateid'"; 
                                                                                        mysqli_query($conn,$sql18);
                                                                                        $sql19 = "DELETE FROM report_neighbhood_ref WHERE endo_code = '$updateid'"; 
                                                                                        mysqli_query($conn,$sql19);
                                                                                        $sql20 = "DELETE FROM report_personalbg WHERE endo_code = '$updateid'"; 
                                                                                        mysqli_query($conn,$sql20);
                                                                                        $sql21 = "DELETE FROM report_political_religious WHERE endo_code = '$updateid'"; 
                                                                                        mysqli_query($conn,$sql21);
                                                                                    }
                                                                                }
                                                                                $returnbitelealert = '<script type="text/javascript">
                                                                                        toastr.options.timeOut = "false";
                                                                                        toastr.options.closeButton = true;
                                                                                        toastr.options.positionClass = "toast-bottom-right";
                                                                                        toastr["success"]("Return endorsement(s) succesfully approved.");
                                                                                    </script>';
                                                                            }
                                                                        }
                                                                    ?>
                                                                    <form method='POST' action=''><?php echo $returnbitelealert; ?>
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
                                                                        <button type="submit" class="btn btn-outline-success" style="margin-right: 20px; margin-bottom: 15px;" id="btnapprvreturnbitele" name="btnapprvreturnbitele"><i class="fa fa-thumbs-up"></i> Approve</button>
                                                                        <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                                            <thead class="thead-dark">
                                                                                <tr>
                                                                                    <th>
                                                                                        <label class="fancy-checkbox">
                                                                                            <input class="checkbox-tick" type="checkbox" id="chkallreturnedendobitele">
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
                                                                                    $sql = "SELECT a.endo_id, CONCAT(a.endo_id) AS endoid, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_by, b.assigned_da, b.is_distributed, b.datetime_added, b.is_returned, b.datetime_returned, c.user_id, CONCAT(c.user_id) AS clientuserid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, CONCAT(e.user_id) AS supervisorid, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.id, f.endo_code, f.endo_remarks, f.is_cleared, f.assigned_specialist, f.assigned_analyst, f.datetime_returned, CONCAT(f.datetime_returned) AS datetimereturned, f.datetime_cleared, f.datetime_added, g.user_id, CONCAT(g.fname, ' ', g.mname, ' ', g.lname, ' ', g.suffix) AS operationsname, h.endo_id, h.file_name, h.report_datetime FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_analyst AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_returned_specialist AS f ON b.endo_code = f.endo_code LEFT JOIN tbl_operations AS g ON b.assigned_by = g.user_id LEFT JOIN tbl_reports AS h ON a.endo_id = h.endo_id WHERE a.endo_status = '2' AND b.assigned_by = '".$_SESSION["user_id"]."' AND b.is_distributed = '0' AND b.is_returned = '1' AND f.is_cleared = '0' ORDER BY f.id DESC";
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

                                                                                            $sql1 = "SELECT a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_by, b.assigned_da, b.is_distributed, b.datetime_added, b.is_returned, b.datetime_returned, c.id, c.endo_code, c.endo_remarks, c.is_cleared, c.assigned_specialist, c.assigned_analyst, c.datetime_returned, c.datetime_cleared, c.datetime_added, d.user_id, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS operationsdaname FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_analyst AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_bi_returned_specialist AS c ON b.endo_code = c.endo_code LEFT JOIN tbl_operations AS d ON c.assigned_analyst = d.user_id WHERE a.endo_status = '2' AND b.assigned_by = '".$_SESSION["user_id"]."' AND b.is_distributed = '0' AND b.is_returned = '1' AND c.is_cleared = '0' ORDER BY c.id DESC";
                                                                                            $result1 = $conn->query($sql1);
                                                                                            $row1 = mysqli_fetch_array($result1);
                                                                                            $operationsdaname = $row1['operationsdaname'];

                                                                                            ?>
                                                                                                <input type="hidden" name="endoCode_<?= $row['endo_code'] ?>" value="<?= $row['endo_code'] ?>">
                                                                                                <input type="hidden" id="client_id" name="client_id" value="<?= $row['clientuserid'] ?>">
                                                                                                <input type="hidden" id="supervisorid" name="supervisorid" value="<?= $row['supervisorid'] ?>">
                                                                                                <input type="hidden" id="endoid" name="endoid" value="<?= $row['endoid'] ?>">
                                                                                                <td>
                                                                                                    <label class="fancy-checkbox">
                                                                                                        <input class="checkbox-tick" type="checkbox" id="bitelereturnendo[]" name="bitelereturnendo[]" value='<?= $row['endo_code'] ?>'>
                                                                                                        <span></span>
                                                                                                    </label>
                                                                                                </td>
                                                                                                <td><?php echo $endoimportant; ?></td>
                                                                                                <td><?php echo $row['endo_code']; ?></td>
                                                                                                <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                                                <td><?php echo $newDateEndo; ?></td>
                                                                                                <td style="text-align: center;">
                                                                                                    <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Returned Endorsement" onclick="displayreturnbitele('<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_remarks']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['operationsname']; ?>', '<?php echo $operationsdaname; ?>', '<?php echo $newDateTimeReturned; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>'); saveviewreturnedbiteleendo();"><i class="fa fa-file-text-o"></i></button>
                                                                                                </td>
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
                                                    <div class="tab-pane show" id="returnedhistorytelebi">
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
                                                                                $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.endo_code) AS endocode, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.user_id) AS clientid, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.user_id, CONCAT(d.user_id) AS supervisorid, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname, e.id, e.endo_code, e.assigned_by, e.assigned_specialist, e.assigned_to, e.is_distributed, e.is_returned, e.datetime_added, f.user_id, CONCAT(f.fname, ' ', f.mname, ' ', f.lname, ' ', f.suffix) AS operationsname FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id LEFT JOIN tbl_bi_assigned_specialist AS e ON a.endo_code = e.endo_code LEFT JOIN tbl_operations AS f ON e.assigned_specialist = f.user_id WHERE a.endo_status = '2' AND e.assigned_specialist = '".$_SESSION["user_id"]."' AND e.is_returned = '0' ORDER BY a.endo_status DESC";
                                                                                $result = $conn->query($sql);
                                                                                if ($result->num_rows > 0) {
                                                                                    while ($row = $result->fetch_assoc()) {
                                                                                        $endo_code = $row['endo_code'];
                                                                                        $endo_date = $row['endo_date'];
                                                                                        $newDateEndo = date('F d, Y', strtotime($endo_date));
                                                                                        $newDateTimeEndo = date('F d, Y - g:i A', strtotime($endo_date));
                                                                                        $turnaround_date = $row['turn_around_date'];
                                                                                        $newTurnAroundDate = date('F d, Y', strtotime($turnaround_date));

                                                                                        // IMPORTANCE //
                                                                                        if ($row['importance'] == '1') {
                                                                                            $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                                                        } else if ($row['importance'] == '2') {
                                                                                            $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                                                        }

                                                                                        $sql1 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_supervisor, b.assigned_support, b.assigned_specialist, b.assigned_analyst, c.user_id, CONCAT(c.fname, ' ', c.lname) AS supportname, d.user_id, CONCAT(d.fname, ' ', d.lname, ' ') AS supervisorname, e.user_id, CONCAT(e.fname,  ' ', e.lname) AS opsverifiername FROM tbl_endo AS a LEFT JOIN tbl_endorsement_bi_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_support AS c ON b.assigned_support = c.user_id LEFT JOIN tbl_supervisor AS d ON b.assigned_supervisor = d.user_id LEFT JOIN tbl_operations AS e ON b.assigned_specialist = e.user_id WHERE a.endo_status = '2' AND e.user_id = '".$_SESSION["user_id"]."' AND a.endo_code = '$endo_code' ORDER BY a.importance ASC";
                                                                                        $result1 = $conn->query($sql1);
                                                                                        while ($row1 = $result1->fetch_assoc()) {
                                                                                            $supportname = $row1['supportname'];
                                                                                            $supervisorname = $row1['supervisorname'];
                                                                                            $opsverifiername = $row1['opsverifiername'];
                                                                                        }

                                                                                        $sql2 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_analyst, c.user_id, CONCAT(c.fname, ' ', c.lname, ' ') AS opsanalystname, d.user_id FROM tbl_endo AS a LEFT JOIN tbl_endorsement_bi_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_operations AS c ON b.assigned_analyst = c.user_id LEFT JOIN tbl_users AS d ON b.assigned_specialist = d.user_id WHERE a.endo_status = '2' AND a.endo_code = '$endo_code' ORDER BY a.importance ASC";
                                                                                        $result2 = $conn->query($sql2);
                                                                                        while ($row2 = $result2->fetch_assoc()) {
                                                                                            $opsanalystname = $row2['opsanalystname'];
                                                                                        }

                                                                                        $sql2 = "SELECT * FROM create_report_options WHERE endorsement_code = '$endo_code'";
                                                                                        $result2 = $conn->query($sql2);
                                                                                        $row2 = mysqli_fetch_array($result2);
                                                                                        $endorsement_code = $row2["endorsement_code"] ?? null;

                                                                                        $sql3 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endo_code'";
                                                                                        $result3 = $conn->query($sql3);
                                                                                        $row3 = mysqli_fetch_array($result3);
                                                                                        $endocode = $row3["endo_code"] ?? null;

                                                                                        ?>
                                                                                            <tr>
                                                                                                <td><?php echo $endoimportant; ?></td>
                                                                                                <td><?php echo $row['endocode']; ?></td>
                                                                                                <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                                                <td><?php echo $newDateEndo; ?></td>
                                                                                                <td style="text-align: center;">
                                                                                                    <?php
                                                                                                        if ($endorsement_code == "") {
                                                                                                            ?>
                                                                                                            <a onclick="saveaddreportbitele();" href="add_report_bi.php?endoCode=<?php echo $row['endocode'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Add Report"><i class="fa fa-plus-circle"></i></a>
                                                                                                            <a onclick="savesuppdocsbitele();" href="suppdocs_bi_tele.php?endoCode=<?php echo $row['endocode'] ?>" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Download Documents"><i class="fa fa-download"></i></a>
                                                                                                            <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement" onclick="displaybiteleendorsement('<?php echo $supportname; ?>', '<?php echo $supervisorname; ?>', '<?php echo $opsverifiername; ?>', '<?php echo $opsanalystname; ?>', '<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endocode']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newTurnAroundDate; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>', '<?php echo $row['package_desc']; ?>'); saveviewendobitele();"><i class="fa fa-file-text-o"></i></button>
                                                                                                            <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Return Endorsement" onclick="displayreturnedbitele('<?php echo $row['applicantname']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['endocode']; ?>', '<?php echo $row['supervisorid']; ?>', '<?php echo $row['clientid']; ?>'); savereturnendobitele();"><i class="fa fa-undo"></i></button>
                                                                                                            <?php
                                                                                                        } else if ($endocode == "") {
                                                                                                            ?>
                                                                                                            <a onclick="saveviewreportformbitele();" href="report_form_bi.php?endoCode=<?php echo $row['endocode'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Report Form"><i class="fa fa-files-o"></i></a>
                                                                                                            <a onclick="savesuppdocsbitele();" href="suppdocs_bi_tele.php?endoCode=<?php echo $row['endocode'] ?>" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Download Documents"><i class="fa fa-download"></i></a>
                                                                                                            <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement" onclick="displaybiteleendorsement('<?php echo $supportname; ?>', '<?php echo $supervisorname; ?>', '<?php echo $opsverifiername; ?>', '<?php echo $opsanalystname; ?>', '<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endocode']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newTurnAroundDate; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name']. ' - ' .$row['site_']; ?>', '<?php echo $row['package_desc']; ?>'); saveviewendobitele();"><i class="fa fa-file-text-o"></i></button>
                                                                                                            <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Return Endorsement" onclick="displayreturnedbitele('<?php echo $row['applicantname']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['endocode']; ?>', '<?php echo $row['supervisorid']; ?>', '<?php echo $row['clientid']; ?>'); savereturnendobitele();"><i class="fa fa-undo"></i></button>
                                                                                                            <?php
                                                                                                        } else {
                                                                                                            ?>
                                                                                                            <a onclick="saveeditreportbida();" href="edit_report_bi.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Edit Report"><i class="fa fa-pencil-square-o"></i></a>
                                                                                                            <a onclick="saveviewreportbitele();" href="viewing_report_bi.php?endoCode=<?php echo $row['endocode'] ?>" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="View Report"><i class="fa fa-folder-o"></i></a>
                                                                                                            <a onclick="savegeneraterepbitele();" href="generate_report_bi.php?file=<?php echo $row['endocode'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
        $('#chkallreturnedendobitele').change(function(){
            if($(this).is(':checked')){
                $('input[name="bitelereturnendo[]"]').prop('checked',true);
            }else{
                $('input[name="bitelereturnendo[]"]').each(function(){
                    $(this).prop('checked',false);
                }); 
            }
        });

        // Checkbox click
        $('input[name="bitelereturnendo[]"]').click(function(){
            var total_checkboxes = $('input[name="bitelereturnendo[]"]').length;
            var total_checkboxes_checked = $('input[name="bitelereturnendo[]"]:checked').length;

            if(total_checkboxes_checked == total_checkboxes){
                $('#chkallreturnedendobitele').prop('checked',true);
            }else{
                $('#chkallreturnedendobitele').prop('checked',false);
            }
        });
    }); 
</script>