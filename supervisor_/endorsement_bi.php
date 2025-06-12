<?php
include 'checking.php';
include 'header.php';
include 'sidebar.php';

if (!empty($_GET['sendfinrep'])) {
  switch ($_GET['sendfinrep']) {
    case 'succ':
?>
<script type="text/javascript">
toastr.options.timeOut = "false";
toastr.options.closeButton = true;
toastr.options.positionClass = 'toast-bottom-right';
toastr['success']('Successfully sending of report.');
</script>
<?php
      break;

    case 'err':
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


<div id="q-app">

  <div id="wrapper" class="theme-green">
    <div id="main-content">
      <div class="container-fluid">
        <div class="block-header">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <h2>Background Investigation</h2>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
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
                    <a class="nav-link active" data-toggle="tab" href="#acknowledgementbi" role="tab"
                      style="font-size: 13px; font-weight: bold;"><i
                        class="icofont-hour-glass"></i>&nbsp;&nbsp;ACKNOWLEDGEMENT&nbsp;&nbsp;<span
                        class="badge badge-success"
                        style="font-weight: bold; background-color: #fff; border-radius: 25px;"
                        id="bicountapproval"></span></a>
                    <div class="slide"></div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#assignbi" role="tab"
                      style="font-size: 13px; font-weight: bold;"><i
                        class="icofont-hour-glass"></i>&nbsp;&nbsp;ASSIGNING&nbsp;&nbsp;<span
                        class="badge badge-success"
                        style="font-weight: bold; background-color: #fff; border-radius: 25px;"
                        id="bicountassigning"></span></a>
                    <div class="slide"></div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#returnedbi" role="tab"
                      style="font-size: 13px; font-weight: bold;"><i
                        class="icofont-hour-glass"></i>&nbsp;&nbsp;RETURNED&nbsp;&nbsp;<span class="badge badge-success"
                        style="font-weight: bold; background-color: #fff; border-radius: 25px;"
                        id="bicountreturned"></span></a>
                    <div class="slide"></div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#forreviewbi" role="tab"
                      style="font-size: 13px; font-weight: bold;"><i
                        class="icofont-hour-glass"></i>&nbsp;&nbsp;FOR-REVIEW&nbsp;&nbsp;<span
                        class="badge badge-success"
                        style="font-weight: bold; background-color: #fff; border-radius: 25px;"
                        id="bicountreview"></span></a>
                    <div class="slide"></div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#modifybi" role="tab"
                      style="font-size: 13px; font-weight: bold;"><i
                        class="icofont-hour-glass"></i>&nbsp;&nbsp;MODIFY&nbsp;&nbsp;<span class="badge badge-success"
                        style="font-weight: bold; background-color: #fff; border-radius: 25px;"
                        id="bicountmodify"></span></a>
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
                                  <h4 class="media-heading">Acknowledgement of Endorsement</h4>
                                  Please check the following endorsement(s) for verification checking.
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                        $approvebialert = "";
                        if (isset($_POST['btnbiapproval'])) {
                          if (isset($_POST['biapproval'])) {
                            foreach ($_POST['biapproval'] as $updateid) {
                              $endoCode = $_POST['endoCode_' . $updateid];
                              $client_id = $_POST['client_id'];
                              $clientuserid = $_POST['clientuserid'];
                              $receivedbi_ = 'Background Investigation - ' . $updateid;

                              if ($endoCode != '') {
                                $sql = "UPDATE tbl_endo SET endo_status = '1', initiation_date = NOW() WHERE endo_code = '$updateid'";
                                mysqli_query($conn, $sql);
                                $sql1 = "INSERT INTO tbl_endo_support_bi SET endo_code = '$updateid', datetime_added = NOW()";
                                mysqli_query($conn, $sql1);
                                $sql2 = "UPDATE tbl_endorsement_bi_process SET assigned_supervisor = '" . $_SESSION["user_id"] . "', percentage_ = '25', datetime_updated = NOW() WHERE endo_code = '$updateid'";
                                mysqli_query($conn, $sql2);
                                $sql3 = "INSERT INTO tbl_notifications SET notif_subject = '$receivedbi_', notif_text = 'Received Endorsement', notif_details = 'Success Approval of Endorsement', notif_status = '0', notif_datetime = NOW(), notif_to = '$clientuserid', notif_from = '" . $_SESSION["user_id"] . "'";
                                mysqli_query($conn, $sql3);
                                $sql4 = "INSERT INTO endorsement_logs_bi SET client_id = '$clientuserid', endo_code = '$updateid', endo_action = 'Approval of Endorsement', assigned_poc = '" . $_SESSION["user_id"] . "', assigned_team = '$team_', datetime_added = NOW()";
                                mysqli_query($conn, $sql4);
                                $sql5 = "INSERT INTO tbl_supervisor_history_logs SET
                                                                        user_id = '" . $_SESSION['user_id'] . "',
                                                                        x_module = 'Endorsements - Background Investigation',
                                                                        x_module_action = 'Approving of Endorsement'";
                                $res5 = $conn->query($sql5);
                                if ($res5) {
                                  $last_return_id = mysqli_insert_id($conn);
                                  if ($last_return_id) {
                                    $logsid = rand(10000000, 99999999);
                                    $logsuserid = "LOG-" . $logsid . "-" . $last_return_id;
                                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '" . $logsuserid . "' WHERE id = '" . $last_return_id . "'";
                                    $resquery = $conn->query($logsquery);
                                  }
                                }
                              }
                            }
                            $approvebialert = '<script type="text/javascript">
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
                            <form method='POST' action=''><?php echo $approvebialert; ?>
                              <button type="submit" class="btn btn-outline-success" style="margin-bottom: 10px;"
                                id="btnbiapproval" name="btnbiapproval"><i
                                  class="fa fa-check-circle-o"></i>&nbsp;Approve</button>

                              <button class="btn btn-outline-success" style="margin-left: 5px; margin-bottom: 10px;"
                                @click="fetchApi('hired')"><i class="fa fa-refresh"></i> Fetch API Data</button>

                              <table
                                class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                <thead class="thead-dark">
                                  <tr>
                                    <th style="width: 1%;">
                                      <label class="fancy-checkbox">
                                        <input class="checkbox-tick" type="checkbox" id="chkallapprbi">
                                        <span></span>
                                      </label>
                                    </th>
                                    <th></th>
                                    <th>CODE</th>
                                    <th>RERUN</th>
                                    <th>DATE</th>
                                    <th style="text-align: center;">ACTIONS</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.application_code, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.is_rerun, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.user_id) AS clientuserid, CONCAT(b.fname,  ' ', b.mname,  ' ',  b.lname, ' ', b.suffix) AS clientname, b.company_name, b.user_position, b.site_id, b.team_, c.client_id, c.client_name, c.acronym_, c.site_, d.user_id, d.assigned_team, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id WHERE a.endorsed_to = '" . $_SESSION["user_id"] . "' AND a.endo_status = '0' ORDER BY a.importance ASC";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
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

                                      // RERUN //
                                      if ($row['is_rerun'] == '0') {
                                        $endorerun = '<span class="badge badge-danger" style="font-weight: bold; background-color: #fff;">No</span>';
                                      } else if ($row['is_rerun'] == '1') {
                                        $endorerun = '<span class="badge badge-success" style="font-weight: bold; background-color: #fff;">Yes</span>';
                                      } else {
                                        $endorerun = "";
                                      }

                                  ?>

                                  <tr>
                                    <input type="hidden" id="endoCode_" name="endoCode_<?= $row['endo_code'] ?>"
                                      value="<?= $row['endo_code'] ?>">
                                    <input type="hidden" id="client_id" name="client_id"
                                      value="<?= $row['client_id'] ?>">
                                    <input type="hidden" id="clientuserid" name="clientuserid"
                                      value="<?= $row['clientuserid'] ?>">
                                    <td>
                                      <label class="fancy-checkbox">
                                        <input class="checkbox-tick" type="checkbox" id="biapproval[]"
                                          name="biapproval[]" value='<?= $row['endo_code'] ?>'>
                                        <span></span>
                                      </label>
                                    </td>
                                    <td><?php echo $endoimportant; ?></td>
                                    <td style="cursor: pointer;" data-toggle="tooltip" data-placement="top"
                                      title="<?php echo $row['applicantname']; ?>"><?php echo $row['endo_code']; ?></td>
                                    <td><?php echo $endorerun; ?></td>
                                    <td><?php echo $newDateEndo; ?></td>
                                    <td style="text-align: center;">
                                      <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip"
                                        data-placement="top" title="View Endorsement"
                                        onclick="displaybiendorsements('<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newTurnAroundDate; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name'] . ' - ' . $row['site_']; ?>', '<?php echo $row['package_desc']; ?>'); saveviewendobi();"><i
                                          class="fa fa-file-text-o"></i></button>
                                      <a href="download_informations.php?applicationCode=<?php echo $row['application_code'] ?>"
                                        class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                        data-placement="top" title="View Informations"><i class="fa fa-edit"></i></a>
                                      <a onclick="savesupportingdocsbi();"
                                        href="bi_supporting_docs.php?endoCode=<?php echo $row['endo_code'] ?>"
                                        class="btn btn-sm btn-outline-success" data-toggle="tooltip"
                                        data-placement="top" title="Download Documents"><i
                                          class="fa fa-download"></i></a>
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
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#notassignedbi"
                                style="font-size: 13px; font-weight: bold;">NOT ASSIGNED</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#assignedbi"
                                style="font-size: 13px; font-weight: bold;">ASSIGNED</a></li>
                          </ul>
                          <div class="tab-content br-n pn">
                            <div class="tab-pane show active" id="notassignedbi">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="table-responsive">
                                    <?php
                                    $assignbialert = "";
                                    if (isset($_POST['btnbiassign'])) {
                                      if (isset($_POST['biassign'])) {
                                        foreach ($_POST['biassign'] as $updateid) {
                                          $endoCode = $_POST['endoCode_' . $updateid];
                                          $specialistid = $_POST['selected_specialist'];
                                          $client_id = $_POST['client_id'];
                                          $assignbi_ = 'Background Investigation - ' . $updateid;

                                          if ($endoCode != '') {
                                            $sql = "INSERT INTO tbl_bi_assigned_specialist SET endo_code = '$updateid', assigned_by = '" . $_SESSION["user_id"] . "', assigned_specialist = '$specialistid', is_distributed = '0', assigned_to = '$team_'";
                                            mysqli_query($conn, $sql);
                                            $sql1 = "UPDATE tbl_endorsement_bi_process SET assigned_specialist = '$specialistid', percentage_ = '60', datetime_updated = NOW() WHERE endo_code = '$updateid'";
                                            mysqli_query($conn, $sql1);
                                            $sql2 = "INSERT INTO tbl_notifications SET notif_subject = '$assignbi_', notif_text = 'Assign Endorsement', notif_details = 'Success Assigning of Endorsement', notif_status = '0', notif_datetime = NOW(), notif_to = '$specialistid', notif_from = '" . $_SESSION["user_id"] . "'";
                                            mysqli_query($conn, $sql2);
                                            $sql3 = "INSERT INTO endorsement_logs SET client_id = '$client_id', endo_code = '$updateid', endo_action = 'Assigning of Endorsement', assigned_poc = '" . $_SESSION["user_id"] . "', assigned_operations =  '$specialistid', assigned_team = '$team_', datetime_added = NOW()";
                                            mysqli_query($conn, $sql3);
                                            $sql4 = "INSERT INTO tbl_supervisor_history_logs SET
                                                                                                user_id = '" . $_SESSION['user_id'] . "',
                                                                                                x_module = 'Endorsements - Background Investigation',
                                                                                                x_module_action = 'Assigning of Endorsement'";
                                            $res4 = $conn->query($sql4);
                                            if ($res4) {
                                              $last_return_id = mysqli_insert_id($conn);
                                              if ($last_return_id) {
                                                $logsid = rand(10000000, 99999999);
                                                $logsuserid = "LOG-" . $logsid . "-" . $last_return_id;
                                                $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '" . $logsuserid . "' WHERE id = '" . $last_return_id . "'";
                                                $resquery = $conn->query($logsquery);
                                              }
                                            }
                                          }
                                        }
                                        $assignbialert = '<script type="text/javascript">
                                                                                    toastr.options.timeOut = "false";
                                                                                    toastr.options.closeButton = true;
                                                                                    toastr.options.positionClass = "toast-bottom-right";
                                                                                    toastr["success"]("Endorsement(s) succesfully assigned.");
                                                                                </script>';
                                      }
                                    }
                                    ?>
                                    <form method='POST' action=''><?php echo $assignbialert; ?>
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
                                                <h4 class="media-heading">Sending Endorsement to Tele Verifier</h4>
                                                Please check the following endorsement(s) to be distributed.
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
                                                  <span class="input-group-text"><i
                                                      class="fa fa-user text-dark"></i></span>
                                                </div>
                                                <select class="custom-select" id="selected_specialist"
                                                  name="selected_specialist">
                                                  <?php
                                                  $sql = "SELECT a.user_id, a.assigned_team_one, CONCAT(a.fname, ' ' , a.lname, ' ', a.suffix) AS telename, a.lname, b.operations_id, CONCAT(b.fname, ' ', b.lname, ' ', b.suffix) AS telefullname, b.team_one, c.team_no, c.team_name FROM tbl_operations AS a LEFT JOIN operations_list AS b ON CONCAT(a.fname, ' ' , a.mname, ' ' , a.lname, ' ', a.suffix) = CONCAT(b.fname,  ' ', b.mname, ' ', b.lname, ' ', b.suffix) LEFT JOIN team_list AS c ON a.assigned_team_one = c.team_no WHERE a.assigned_team_one = '$team_' AND b.operations_type = '1' ORDER BY a.lname ASC";
                                                  ?>
                                                  <option> -- Select
                                                    Verifier -- </option>; <?php
                                                                            $res = $conn->query($sql);
                                                                            while ($row = mysqli_fetch_array($res)) {
                                                                            ?>
                                                  <option value="<?php echo $row['user_id']; ?>">
                                                    <?php echo $row['telefullname']; ?>
                                                  </option>
                                                  <?php
                                                                            }
                                                  ?>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                              <button type="submit" class="btn btn-outline-success"
                                                style="margin-right: 20px;" id="btnbiassign" name="btnbiassign"><i
                                                  class="fa fa-paper-plane-o"></i> Distribute</button>
                                            </div>
                                          </div>
                                          <table
                                            class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                            <thead class="thead-dark">
                                              <tr>
                                                <th>
                                                  <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" id="chkallassignbi">
                                                    <span></span>
                                                  </label>
                                                </th>
                                                <th></th>
                                                <th>CODE</th>
                                                <th>NAME</th>
                                                <th>BIRTHDATE</th>
                                                <th>ENDORSEMENT DATE</th>
                                                <th style="text-align: center;">ACTIONS</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <?php
                                              $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.application_code, a.endo_code, CONCAT(a.endo_code) AS endorsementcode, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, CONCAT(a.client_id) AS clientuserid, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname,  ' ', b.mname,  ' ',  b.lname, ' ', b.suffix) AS clientname, b.company_name, b.user_position, b.site_id, b.team_, c.client_id, c.client_name, c.acronym_, c.site_, d.user_id, d.assigned_team, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname, e.endo_code FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id LEFT JOIN tbl_bi_assigned_specialist AS e ON a.endo_code = e.endo_code WHERE a.endo_status = '2' AND d.user_id = '" . $_SESSION["user_id"] . "' AND e.endo_code IS NULL ORDER BY a.importance ASC";
                                              $result = $conn->query($sql);
                                              if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                  $endorsementcode = $row['endorsementcode'];
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

                                                  $sql1 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_supervisor, b.assigned_support, b.assigned_specialist, b.assigned_analyst, c.user_id, CONCAT(c.fname, ' ', c.lname) AS supportname, d.user_id, CONCAT(d.fname, ' ', d.lname) AS supervisorname, e.user_id, CONCAT(e.fname,  ' ', e.lname) AS opsverifiername FROM tbl_endo AS a LEFT JOIN tbl_endorsement_bi_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_support AS c ON b.assigned_support = c.user_id LEFT JOIN tbl_supervisor AS d ON b.assigned_supervisor = d.user_id LEFT JOIN tbl_operations AS e ON b.assigned_specialist = e.user_id WHERE a.endo_status = '2' AND a.endo_code = '$endorsementcode' AND d.user_id = '" . $_SESSION["user_id"] . "' ORDER BY a.importance ASC";
                                                  $result1 = $conn->query($sql1);
                                                  while ($row1 = $result1->fetch_assoc()) {
                                                    $supportname = $row1['supportname'];
                                                    $supervisorname = $row1['supervisorname'];
                                                    $opsverifiername = $row1['opsverifiername'];
                                                  }

                                                  $sql2 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.application_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_analyst, c.user_id, CONCAT(c.fname, ' ', c.lname, ' ') AS opsanalystname FROM tbl_endo AS a LEFT JOIN tbl_endorsement_bi_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_operations AS c ON b.assigned_analyst = c.user_id WHERE a.endo_status = '2' AND a.endo_code = '$endorsementcode' AND a.endorsed_to = '" . $_SESSION["user_id"] . "' ORDER BY a.importance ASC";
                                                  $result2 = $conn->query($sql2);
                                                  while ($row2 = $result2->fetch_assoc()) {
                                                    $opsanalystname = $row2['opsanalystname'];
                                                  }

                                              ?>
                                              <tr>
                                                <input type="hidden" name="endoCode_<?= $row['endorsementcode'] ?>"
                                                  value="<?= $row['endorsementcode'] ?>">
                                                <input type="hidden" id="client_id" name="client_id"
                                                  value="<?= $row['clientuserid'] ?>">
                                                <td>
                                                  <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" id="biassign[]"
                                                      name="biassign[]" value='<?= $row['endorsementcode'] ?>'>
                                                    <span></span>
                                                  </label>
                                                </td>
                                                <td><?php echo $endoimportant; ?></td>
                                                <td><?php echo $row['endorsementcode']; ?></td>
                                                <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                <td><?php echo $row['birthdate']; ?></td>
                                                <td><?php echo $newDateEndo; ?></td>
                                                <td style="text-align: center;">
                                                  <button type="button" class="btn btn-sm btn-outline-dark"
                                                    data-toggle="tooltip" data-placement="top" title="View Endorsement"
                                                    onclick="displaybiassignendorsements('<?php echo $supportname; ?>', '<?php echo $supervisorname; ?>', '<?php echo $opsverifiername; ?>', '<?php echo $opsanalystname; ?>', '<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endorsementcode']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newTurnAroundDate; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name'] . ' - ' . $row['site_']; ?>', '<?php echo $row['package_desc']; ?>'); saveviewendobi();"><i
                                                      class="fa fa-file-text-o"></i></button>
                                                  <a href="download_informations.php?applicationCode=<?php echo $row['application_code'] ?>"
                                                    class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                                    data-placement="top" title="View Informations"><i
                                                      class="fa fa-edit"></i></a>
                                                  <a onclick="savesupportingdocsbi();"
                                                    href="bi_supporting_docs.php?endoCode=<?php echo $row['endorsementcode'] ?>"
                                                    class="btn btn-sm btn-outline-success" data-toggle="tooltip"
                                                    data-placement="top" title="Download Documents"><i
                                                      class="fa fa-download"></i></a>
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
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane show" id="assignedbi">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="table-responsive">
                                    <?php
                                    $reassignbialert = "";
                                    if (isset($_POST['btnbireassign'])) {
                                      if (isset($_POST['bireassign'])) {
                                        foreach ($_POST['bireassign'] as $updateid) {
                                          $endoCode = $_POST['endoCode_' . $updateid];
                                          $updated_specialist = $_POST['updated_specialist'];
                                          $client_id = $_POST['client_id'];
                                          $assignbi_ = 'Background Investigation - ' . $updateid;

                                          if ($endoCode != '') {
                                            $sql = "UPDATE tbl_bi_assigned_specialist SET assigned_specialist = '$updated_specialist' WHERE endo_code = '$updateid'";
                                            mysqli_query($conn, $sql);
                                            $sql1 = "UPDATE tbl_endorsement_bi_process SET assigned_specialist = '$updated_specialist', percentage_ = '60', datetime_updated = NOW() WHERE endo_code = '$updateid'";
                                            mysqli_query($conn, $sql1);
                                            $sql2 = "INSERT INTO tbl_notifications SET notif_subject = '$assignbi_', notif_text = 'Re Assign Endorsement', notif_details = 'Success Re-Assigning of Endorsement', notif_status = '0', notif_datetime = NOW(), notif_to = '$updated_specialist', notif_from = '" . $_SESSION["user_id"] . "'";
                                            mysqli_query($conn, $sql2);
                                            $sql3 = "INSERT INTO endorsement_logs SET client_id = '$client_id', endo_code = '$updateid', endo_action = 'Re-Assigning of Endorsement', assigned_poc = '" . $_SESSION["user_id"] . "', assigned_operations =  '$updated_specialist', assigned_team = '$team_', datetime_added = NOW()";
                                            mysqli_query($conn, $sql3);
                                            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                                                                                                user_id = '" . $_SESSION['user_id'] . "',
                                                                                                x_module = 'Endorsements - Background Investigation',
                                                                                                x_module_action = 'Re-Assigning of Endorsement'";
                                            $res = $conn->query($sql);
                                            if ($res) {
                                              $last_return_id = mysqli_insert_id($conn);
                                              if ($last_return_id) {
                                                $logsid = rand(10000000, 99999999);
                                                $logsuserid = "LOG-" . $logsid . "-" . $last_return_id;
                                                $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '" . $logsuserid . "' WHERE id = '" . $last_return_id . "'";
                                                $resquery = $conn->query($logsquery);
                                              }
                                            }
                                          }
                                        }
                                        $reassignbialert = '<script type="text/javascript">
                                                                                    toastr.options.timeOut = "false";
                                                                                    toastr.options.closeButton = true;
                                                                                    toastr.options.positionClass = "toast-bottom-right";
                                                                                    toastr["success"]("Endorsement(s) succesfully reassign.");
                                                                                </script>';
                                      }
                                    }
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
                                                <h4 class="media-heading">Reassign Endorsement to Tele Verifier</h4>
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
                                                  <span class="input-group-text"><i
                                                      class="fa fa-user text-dark"></i></span>
                                                </div>
                                                <select class="custom-select" id="updated_specialist"
                                                  name="updated_specialist">
                                                  <?php
                                                  $sql = "SELECT a.user_id, a.assigned_team_one, CONCAT(a.fname, ' ' , a.lname, ' ', a.suffix) AS telename, a.lname, b.operations_id, CONCAT(b.fname, ' ', b.lname, ' ', b.suffix) AS telefullname, b.team_one, c.team_no, c.team_name FROM tbl_operations AS a LEFT JOIN operations_list AS b ON CONCAT(a.fname, ' ' , a.mname, ' ' , a.lname, ' ', a.suffix) = CONCAT(b.fname,  ' ', b.mname, ' ', b.lname, ' ', b.suffix) LEFT JOIN team_list AS c ON a.assigned_team_one = c.team_no WHERE a.assigned_team_one = '$team_' AND b.operations_type = '1' ORDER BY a.lname ASC";
                                                  ?>
                                                  <option> -- Select
                                                    Verifier -- </option>; <?php
                                                                            $res = $conn->query($sql);
                                                                            while ($row = mysqli_fetch_array($res)) {
                                                                            ?>
                                                  <option value="<?php echo $row['user_id']; ?>">
                                                    <?php echo $row['telefullname']; ?>
                                                  </option>
                                                  <?php
                                                                            }
                                                  ?>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                              <button type="submit" class="btn btn-outline-success"
                                                style="margin-right: 20px;" id="btnbireassign" name="btnbireassign"><i
                                                  class="fa fa-paper-plane-o"></i> Re-Assign</button>
                                            </div>
                                          </div>
                                          <table
                                            class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                            <thead class="thead-dark">
                                              <tr>
                                                <th>
                                                  <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" id="chkallreassignbi">
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
                                              $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.endo_code) AS endorsementcode, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, CONCAT(a.client_id) AS clientuserid, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname,  ' ', b.mname,  ' ',  b.lname, ' ', b.suffix) AS clientname, b.company_name, b.user_position, b.site_id, b.team_, c.client_id, c.client_name, c.acronym_, c.site_, d.user_id, d.assigned_team, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname, e.endo_code, e.assigned_by, e.assigned_specialist, e.assigned_to, e.is_distributed, e.is_returned, e.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id LEFT JOIN tbl_bi_assigned_specialist AS e ON a.endo_code = e.endo_code WHERE a.endo_status = '2' AND d.user_id = '" . $_SESSION["user_id"] . "' AND e.assigned_specialist IS NOT NULL ORDER BY a.importance ASC";
                                              $result = $conn->query($sql);
                                              if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                  $endorsementcode = $row['endorsementcode'];
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

                                                  $sql1 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_supervisor, b.assigned_support, b.assigned_specialist, b.assigned_analyst, c.user_id, CONCAT(c.fname, ' ', c.lname) AS supportname, d.user_id, CONCAT(d.fname, ' ', d.lname, ' ') AS supervisorname, e.user_id, CONCAT(e.fname,  ' ', e.lname) AS opsverifiername FROM tbl_endo AS a LEFT JOIN tbl_endorsement_bi_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_support AS c ON b.assigned_support = c.user_id LEFT JOIN tbl_supervisor AS d ON b.assigned_supervisor = d.user_id LEFT JOIN tbl_operations AS e ON b.assigned_specialist = e.user_id WHERE a.endo_status = '2' AND a.endo_code = '$endorsementcode' AND a.endorsed_to = '" . $_SESSION["user_id"] . "' ORDER BY a.importance ASC";
                                                  $result1 = $conn->query($sql1);
                                                  while ($row1 = $result1->fetch_assoc()) {
                                                    $supportname = $row1['supportname'];
                                                    $supervisorname = $row1['supervisorname'];
                                                    $opsverifiername = $row1['opsverifiername'];
                                                  }

                                                  $sql2 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_analyst, c.user_id, CONCAT(c.fname, ' ', c.lname, ' ') AS opsanalystname FROM tbl_endo AS a LEFT JOIN tbl_endorsement_bi_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_operations AS c ON b.assigned_analyst = c.user_id WHERE a.endo_status = '2' AND a.endo_code = '$endorsementcode' AND a.endorsed_to = '" . $_SESSION["user_id"] . "' ORDER BY a.importance ASC";
                                                  $result2 = $conn->query($sql2);
                                                  while ($row2 = $result2->fetch_assoc()) {
                                                    $opsanalystname = $row2['opsanalystname'];
                                                  }

                                              ?>
                                              <tr>
                                                <input type="hidden" name="endoCode_<?= $row['endorsementcode'] ?>"
                                                  value="<?= $row['endorsementcode'] ?>">
                                                <input type="hidden" id="client_id" name="client_id"
                                                  value="<?= $row['clientuserid'] ?>">
                                                <td>
                                                  <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" id="bireassign[]"
                                                      name="bireassign[]" value='<?= $row['endorsementcode'] ?>'>
                                                    <span></span>
                                                  </label>
                                                </td>
                                                <td><?php echo $endoimportant; ?></td>
                                                <td><?php echo $row['endorsementcode']; ?></td>
                                                <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                <td><?php echo $newDateEndo; ?></td>
                                                <td style="text-align: center;"><button type="button"
                                                    class="btn btn-sm btn-outline-dark" data-toggle="tooltip"
                                                    data-placement="top" title="View Endorsement"
                                                    onclick="displaybiassignendorsements('<?php echo $supportname; ?>', '<?php echo $supervisorname; ?>', '<?php echo $opsverifiername; ?>', '<?php echo $opsanalystname; ?>', '<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endorsementcode']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newTurnAroundDate; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name'] . ' - ' . $row['site_']; ?>', '<?php echo $row['package_desc']; ?>'); saveviewendobi();"><i
                                                      class="fa fa-file-text-o"></i></button></td>
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
                  <div id="returnedbi" class="tab-pane p-3">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="body">
                          <ul class="nav nav-tabs-new2">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#returnendobi"
                                style="font-size: 13px; font-weight: bold;">RETURNED</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#returnedhistorybi"
                                style="font-size: 13px; font-weight: bold;">RETURN HISTORY</a></li>
                          </ul>
                          <div class="tab-content br-n pn">
                            <div class="tab-pane show active" id="returnendobi">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="table-responsive">
                                    <?php
                                    $returnbialert = "";
                                    if (isset($_POST['btnapprvreturnbi'])) {
                                      if (isset($_POST['bireturnendo'])) {
                                        foreach ($_POST['bireturnendo'] as $updateid) {
                                          $endoCode = $_POST['endoCode_' . $updateid];
                                          $client_id = $_POST['client_id'];
                                          $ops_id = $_POST['ops_id'];

                                          if ($endoCode != '') {
                                            $sql = "DELETE FROM tbl_bi_assigned_specialist WHERE endo_code = '$updateid'";
                                            mysqli_query($conn, $sql);
                                            $sql1 = "UPDATE tbl_endorsement_bi_process SET assigned_specialist = '', percentage_ = '40', datetime_updated = NOW() WHERE endo_code = '$updateid'";
                                            mysqli_query($conn, $sql1);
                                            $sql2 = "UPDATE tbl_bi_returned_supervisor SET is_cleared = '1', datetime_cleared = NOW() WHERE endo_code = '$updateid'";
                                            mysqli_query($conn, $sql2);
                                            $sql3 = "INSERT INTO endorsement_logs SET client_id = '$client_id', endo_code = '$updateid', endo_action = 'Approval of Returned Endorsement', assigned_poc = '" . $_SESSION["user_id"] . "', assigned_operations =  '$ops_id', assigned_team = '$team_', datetime_added = NOW()";
                                            mysqli_query($conn, $sql3);
                                            $sql4 = "INSERT INTO tbl_supervisor_history_logs SET
                                                                                                user_id = '" . $_SESSION['user_id'] . "',
                                                                                                x_module = 'Endorsements - Background Investigation',
                                                                                                x_module_action = 'Approving of Returned Endorsement'";
                                            $res4 = $conn->query($sql4);
                                            if ($res4) {
                                              $last_return_id = mysqli_insert_id($conn);
                                              if ($last_return_id) {
                                                $logsid = rand(10000000, 99999999);
                                                $logsuserid = "LOG-" . $logsid . "-" . $last_return_id;
                                                $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '" . $logsuserid . "' WHERE id = '" . $last_return_id . "'";
                                                $resquery = $conn->query($logsquery);
                                              }
                                            }
                                          }
                                        }
                                        $returnbialert = '<script type="text/javascript">
                                                                                        toastr.options.timeOut = "false";
                                                                                        toastr.options.closeButton = true;
                                                                                        toastr.options.positionClass = "toast-bottom-right";
                                                                                        toastr["success"]("Return endorsement(s) succesfully approved.");
                                                                                    </script>';
                                      }
                                    }
                                    ?>
                                    <form method='POST' action=''><?php echo $returnbialert; ?>
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
                                      <button type="submit" class="btn btn-outline-success"
                                        style="margin-right: 20px; margin-bottom: 15px;" id="btnapprvreturnbi"
                                        name="btnapprvreturnbi"><i class="fa fa-check-circle-o"></i> Approve</button>
                                      <table
                                        class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th>
                                              <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" id="chkallreturnedendobi">
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
                                          $sql = "SELECT a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_by, b.assigned_specialist, b.is_distributed, b.datetime_added, b.is_returned, b.datetime_returned, c.user_id, CONCAT(c.user_id) AS clientuserid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.id, f.return_code, f.endo_code, f.endo_remarks, f.is_cleared, f.assigned_supervisor, f.assigned_specialist, f.datetime_returned, CONCAT(f.datetime_returned) AS datetimereturned, f.datetime_cleared, f.datetime_added, g.user_id, CONCAT(g.user_id) AS operationsid, CONCAT(g.fname, ' ', g.mname, ' ', g.lname, ' ', g.suffix) AS operationsname FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_specialist AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_returned_supervisor AS f ON b.endo_code = f.endo_code LEFT JOIN tbl_operations AS g ON b.assigned_specialist = g.user_id WHERE a.endo_status = '2' AND a.endorsed_to = '" . $_SESSION["user_id"] . "' AND b.is_distributed = '0' AND b.is_returned = '1' AND f.is_cleared = '0' ORDER BY f.id DESC";
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
                                            <input type="hidden" name="endoCode_<?= $row['endo_code'] ?>"
                                              value="<?= $row['endo_code'] ?>">
                                            <input type="hidden" id="client_id" name="client_id"
                                              value="<?= $row['clientuserid'] ?>">
                                            <input type="hidden" id="ops_id" name="ops_id"
                                              value="<?= $row['operationsid'] ?>">
                                            <td>
                                              <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" id="bireturnendo[]"
                                                  name="bireturnendo[]" value='<?= $row['endo_code'] ?>'>
                                                <span></span>
                                              </label>
                                            </td>
                                            <td><?php echo $endoimportant; ?></td>
                                            <td><?php echo $row['endo_code']; ?></td>
                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                            <td><?php echo $newDateEndo; ?></td>
                                            <td style="text-align: center;">
                                              <button type="button" class="btn btn-sm btn-outline-dark"
                                                data-toggle="tooltip" data-placement="top"
                                                title="View Returned Endorsement"
                                                onclick="displayreturnbi('<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_remarks']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['operationsname']; ?>', '<?php echo $newDateTimeReturned; ?>', '<?php echo $row['company_name'] . ' - ' . $row['site_']; ?>'); saveviewreturnedbiendo();"><i
                                                  class="fa fa-file-text-o"></i></button>
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
                                            <h4 class="media-heading">Viewing of Return Endorsement</h4>eturn history
                                            list
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="body" style="margin-top: -30px;">
                                    <div class="table-responsive">
                                      <table
                                        class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
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
                                          $sql = "SELECT a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname,  ' ', b.mname,  ' ',  b.lname, ' ', b.suffix) AS clientname, b.company_name, b.user_position, b.site_id, b.team_, c.client_id, c.client_name, c.acronym_, c.site_, d.user_id, d.assigned_team, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname, e.id, e.endo_code, e.endo_remarks, e.is_cleared, e.assigned_supervisor, e.assigned_specialist, e.datetime_returned, e.datetime_cleared, e.datetime_added, f.user_id, CONCAT(f.user_id) AS operationsid, CONCAT(f.fname, ' ', f.mname, ' ', f.lname, ' ', f.suffix) AS operationsname, f.user_image FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id LEFT JOIN tbl_bi_returned_supervisor AS e ON a.endo_code = e.endo_code LEFT JOIN tbl_operations AS f ON e.assigned_specialist = f.user_id WHERE a.endorsed_to = '" . $_SESSION['user_id'] . "' AND e.is_cleared = '1'  AND MONTH(e.datetime_cleared) = MONTH(NOW()) AND YEAR(e.datetime_cleared) = YEAR(NOW())  ORDER BY e.id DESC";
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
                                                  echo '<div class="feeds-left"><img src="../profilepictures_/' . $operationsid . '/' . $user_image . '" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="' . $operationsname . '"></div>'
                                                  ?>
                                            </td>
                                            <td><?php echo $row['endo_code']; ?></td>
                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                            <td><?php echo $newDateEndo ?></td>
                                            <td style="text-align: center;">
                                              <button type="button" class="btn btn-sm btn-outline-dark"
                                                data-toggle="tooltip" data-placement="top"
                                                title="View Returned Endorsement"
                                                onclick="displayreturnhistorybi('<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_remarks']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['operationsname']; ?>', '<?php echo $newDateTimeReturned; ?>', '<?php echo $newDateTimeCleared; ?>', '<?php echo $row['company_name'] . ' - ' . $row['site_']; ?>'); savereturnedbihistendo();"><i
                                                  class="fa fa-history"></i></button>
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
                                  Please view the selected endorsement for submission.
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="body">
                          <div class="table-responsive">
                            <table
                              class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
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
                                // $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.application_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.assigned_by, b.assigned_supervisor, b.assigned_to, b.is_distributed, b.is_returned, b.datetime_added, c.user_id, CONCAT(c.user_id) AS clientid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.id, f.endo_code, f.assigned_by, f.assigned_da, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_supervisor AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_analyst AS f ON b.endo_code = f.endo_code WHERE a.endo_status = '3' AND a.endorsed_to = '".$_SESSION["user_id"]."'  AND a.is_for_review = '1' AND b.is_distributed = '0'  AND b.is_returned = '0'  ORDER BY a.importance ASC";
                                $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.application_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.assigned_by, b.assigned_supervisor, b.assigned_to, b.is_distributed, b.is_returned, b.datetime_added, c.user_id, CONCAT(c.user_id) AS clientid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.id, f.endo_code, f.assigned_by, f.assigned_da, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_supervisor AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_analyst AS f ON b.endo_code = f.endo_code WHERE a.endo_status = '3' AND a.endorsed_to = '" . $_SESSION["user_id"] . "'  AND a.is_for_review = '1' AND b.is_distributed = '0'  AND b.is_returned = '0'  ORDER BY a.endo_date DESC";
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

                                    $sql1 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_supervisor, b.assigned_support, b.assigned_specialist, b.assigned_analyst, c.user_id, CONCAT(c.fname, ' ', c.lname) AS supportname, d.user_id, CONCAT(d.user_id) AS supervisorid, CONCAT(d.fname, ' ', d.lname, ' ') AS supervisorname, e.user_id, CONCAT(e.fname,  ' ', e.lname) AS opsverifiername FROM tbl_endo AS a LEFT JOIN tbl_endorsement_bi_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_support AS c ON b.assigned_support = c.user_id LEFT JOIN tbl_supervisor AS d ON b.assigned_supervisor = d.user_id LEFT JOIN tbl_operations AS e ON b.assigned_specialist = e.user_id WHERE a.endo_status = '3' AND d.user_id = '" . $_SESSION["user_id"] . "' AND a.endo_code = '$endo_code' ORDER BY a.importance ASC";
                                    $result1 = $conn->query($sql1);
                                    while ($row1 = $result1->fetch_assoc()) {
                                      $supportname = $row1['supportname'];
                                      $supervisorname = $row1['supervisorname'];
                                      $supervisorid = $row1['supervisorid'];
                                      $opsverifiername = $row1['opsverifiername'];
                                    }

                                    $sql2 = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_analyst, b.assigned_supervisor, c.user_id, CONCAT(c.user_id) AS opsanalystid, CONCAT(c.fname, ' ', c.lname, ' ') AS opsanalystname FROM tbl_endo AS a LEFT JOIN tbl_endorsement_bi_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_operations AS c ON b.assigned_analyst = c.user_id WHERE a.endo_status = '3' AND b.assigned_supervisor = '" . $_SESSION["user_id"] . "' AND a.endo_code = '$endo_code' ORDER BY a.importance ASC";
                                    $result2 = $conn->query($sql2);
                                    $row2 = mysqli_fetch_array($result2);
                                    $opsanalystname = $row2['opsanalystname'];
                                    $opsanalystid = $row2['opsanalystid'];

                                ?>
                                <tr>
                                  <td><?php echo $endoimportant; ?></td>
                                  <td><?php echo $row['endo_code']; ?></td>
                                  <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                  <td><?php echo $newDateEndo; ?></td>
                                  <td style="text-align: center;">
                                    <a href="send_report_client.php?id=<?php echo $row['endo_id'] ?>"
                                      class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top"
                                      title="Send Report"><i class="fa fa-paper-plane-o"></i></a>
                                    <a onclick="savesupportingdocsbi();"
                                      href="bi_supporting_docs.php?endoCode=<?php echo $row['endo_code'] ?>"
                                      class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top"
                                      title="Download Documents"><i class="fa fa-download"></i></a>
                                    <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip"
                                      data-placement="top" title="View Endorsement"
                                      onclick="displaybiassignendorsements('<?php echo $supportname; ?>', '<?php echo $supervisorname; ?>', '<?php echo $opsverifiername; ?>', '<?php echo $opsanalystname; ?>', '<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_desc']; ?>', '<?php echo $newTurnAroundDate; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $row['company_name'] . ' - ' . $row['site_']; ?>', '<?php echo $row['package_desc']; ?>'); saveviewendobi();"><i
                                        class="fa fa-file-text-o"></i></button>
                                    <a href="bi_view_report.php?endoCode=<?php echo $row['endo_code'] ?>"
                                      class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top"
                                      title="View Report"><i class="fa fa-folder-o"></i></a>
                                    <a href="generate_bi_report.php?file=<?php echo $row['endo_code'] ?>"
                                      class="btn btn-sm btn-outline-secondary" data-toggle="tooltip"
                                      data-placement="top" title="Download Report"><i class="fa fa-files-o"></i></a>
                                    <a href="download_file.php?file=<?php echo $row['endo_code'] ?>"
                                      class="btn btn-sm btn-outline-secondary" data-toggle="tooltip"
                                      data-placement="top" title="Download Report"><i class="fa fa-files-o"></i></a>
                                    <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                      data-placement="top" title="Return Endorsement"
                                      onclick="displayreturnendobi('<?php echo $row['applicantname']; ?>', '<?php echo $opsanalystname; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $supervisorid; ?>', '<?php echo $opsanalystid; ?>', '<?php echo $row['clientid']; ?>');"><i
                                        class="fa fa-undo"></i></button>
                                    <a href="download_informations.php?applicationCode=<?php echo $row['application_code'] ?>"
                                      class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top"
                                      title="View Informations"><i class="fa fa-edit"></i></a>
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
                  <div id="modifybi" class="tab-pane p-3">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="body">
                          <ul class="nav nav-tabs-new2">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab"
                                href="#modifyendobici">Returned</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#modifyhistorybici">Return
                                History</a></li>
                          </ul>
                          <div class="tab-content br-n pn">
                            <div class="tab-pane show active" id="modifyendobici">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="table-responsive">
                                    <?php
                                    $modifybialert = "";
                                    if (isset($_POST['btnapprvmodifybi'])) {
                                      if (isset($_POST['bimodifyendo'])) {
                                        foreach ($_POST['bimodifyendo'] as $updateid) {
                                          $endoCode = $_POST['endoCode_' . $updateid];
                                          $client_id = $_POST['client_id'];
                                          $file_name = $_POST['file_name'];
                                          $endo_id = $_POST['endo_id'];
                                          $acronym = $_POST['acronym'];

                                          if ($endoCode != '') {
                                            unlink("../client_/documents_endo/{$year}/{$acronym}/{$endoCode}/FinalReport/" . $file_name);
                                            $sql = "DELETE FROM tbl_bi_assigned_client WHERE endo_code = '$updateid'";
                                            mysqli_query($conn, $sql);
                                            $sql1 = "UPDATE tbl_endorsement_bi_process SET assigned_client = '', percentage_ = '90', datetime_updated = NOW(), datetime_completed = '' WHERE endo_code = '$updateid'";
                                            mysqli_query($conn, $sql1);
                                            $sql2 = "UPDATE tbl_bi_returned_client SET is_cleared = '1', datetime_cleared = NOW() WHERE endo_code = '$updateid'";
                                            mysqli_query($conn, $sql2);
                                            $sql3 = "UPDATE tbl_bi_assigned_supervisor SET is_distributed = '0' WHERE endo_code = '$updateid'";
                                            mysqli_query($conn, $sql3);
                                            $sql4 = "UPDATE tbl_endo SET endo_status = '3', is_for_review = '1', is_done = '' WHERE endo_code = '$updateid'";
                                            mysqli_query($conn, $sql4);
                                            $sql5 = "INSERT INTO endorsement_logs SET client_id = '$client_id', endo_code = '$updateid', endo_action = 'Approval of Returned Endorsement', assigned_poc = '" . $_SESSION['user_id'] . "', assigned_team = '$team_', datetime_added = NOW()";
                                            mysqli_query($conn, $sql5);
                                            $sql6 = "DELETE FROM tbl_bi_final_reports WHERE endo_id = '$endo_id'";
                                            mysqli_query($conn, $sql6);
                                            $sql7 = "INSERT INTO tbl_supervisor_history_logs SET
                                                                                                user_id = '" . $_SESSION['user_id'] . "',
                                                                                                x_module = 'Endorsements - Background Investigation',
                                                                                                x_module_action = 'Approving of Returning Endorsement'";
                                            $res7 = $conn->query($sql7);
                                            if ($res7) {
                                              $last_return_id = mysqli_insert_id($conn);
                                              if ($last_return_id) {
                                                $logsid = rand(10000000, 99999999);
                                                $logsuserid = "LOG-" . $logsid . "-" . $last_return_id;
                                                $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '" . $logsuserid . "' WHERE id = '" . $last_return_id . "'";
                                                $resquery = $conn->query($logsquery);
                                              }
                                            }
                                          }
                                        }
                                        $modifybialert = '<script type="text/javascript">
                                                                                        toastr.options.timeOut = "false";
                                                                                        toastr.options.closeButton = true;
                                                                                        toastr.options.positionClass = "toast-bottom-right";
                                                                                        toastr["success"]("Return endorsement(s) succesfully approved.");
                                                                                    </script>';
                                      }
                                    }
                                    ?>
                                    <form method='POST' action=''><?php echo $modifybialert; ?>
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
                                      <button type="submit" class="btn btn-outline-success"
                                        style="margin-right: 20px; margin-bottom: 15px;" id="btnapprvmodifybi"
                                        name="btnapprvmodifybi"><i class="fa fa-check-circle-o"></i> Approve</button>
                                      <table
                                        class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th>
                                              <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" id="chkallmodifyendobi">
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
                                          $sql = "SELECT a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_by, b.assigned_client, b.is_distributed, b.datetime_added, b.is_returned, b.datetime_returned, c.user_id, CONCAT(c.user_id) AS clientuserid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.id, f.return_code, f.endo_code, f.endo_remarks, f.is_cleared, f.assigned_client, f.assigned_supervisor, f.datetime_returned, CONCAT(f.datetime_returned) AS datetimereturned, f.datetime_cleared, f.datetime_added, g.endo_id, g.file_name, g.report_datetime FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_client AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_returned_client AS f ON b.endo_code = f.endo_code LEFT JOIN tbl_bi_final_reports AS g ON a.endo_id = g.endo_id WHERE a.endo_status = '4' AND a.endorsed_to = '" . $_SESSION["user_id"] . "' AND b.is_distributed = '0' AND b.is_returned = '1' AND f.is_cleared = '0' ORDER BY f.id DESC";
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
                                            <input type="hidden" name="endoCode_<?= $row['endo_code'] ?>"
                                              value="<?= $row['endo_code'] ?>">
                                            <input type="hidden" id="client_id" name="client_id"
                                              value="<?= $row['clientuserid'] ?>">
                                            <input type="hidden" id="file_name" name="file_name"
                                              value="<?= $row['file_name'] ?>">
                                            <input type="hidden" id="endo_id" name="endo_id"
                                              value="<?= $row['endo_id'] ?>">
                                            <input type="hidden" id="acronym" name="acronym"
                                              value="<?= $row['acronym_'] ?>">
                                            <td>
                                              <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" id="bimodifyendo[]"
                                                  name="bimodifyendo[]" value='<?= $row['endo_code'] ?>'>
                                                <span></span>
                                              </label>
                                            </td>
                                            <td><?php echo $endoimportant; ?></td>
                                            <td><?php echo $row['endo_code']; ?></td>
                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                            <td><?php echo $newDateEndo; ?></td>
                                            <td style="text-align: center;">
                                              <button type="button" class="btn btn-sm btn-outline-dark"
                                                data-toggle="tooltip" data-placement="top"
                                                title="View Returned Endorsement"
                                                onclick="displaymodifybi('<?php echo $row['applicantname']; ?>', '<?php echo $newDateEndo; ?>', '<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_remarks']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $newDateTimeReturned; ?>', '<?php echo $row['company_name'] . ' - ' . $row['site_']; ?>'); saveviewmodifybiendo();"><i
                                                  class="fa fa-file-text-o"></i></button>
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
                            <div class="tab-pane show" id="modifyhistorybici">
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
                                            <h4 class="media-heading">Viewing of Return Endorsement</h4>eturn history
                                            list
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="body" style="margin-top: -30px;">
                                    <div class="table-responsive">
                                      <table
                                        class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
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
                                          $sql = "SELECT a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname,  ' ', b.mname,  ' ',  b.lname, ' ', b.suffix) AS clientname, b.company_name, b.user_position, b.site_id, b.team_, c.client_id, c.client_name, c.acronym_, c.site_, d.user_id, d.assigned_team, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname, e.id, e.endo_code, e.endo_remarks, e.is_cleared, e.assigned_supervisor, e.assigned_specialist, e.datetime_returned, e.datetime_cleared, e.datetime_added, f.user_id, CONCAT(f.user_id) AS operationsid, CONCAT(f.fname, ' ', f.mname, ' ', f.lname, ' ', f.suffix) AS operationsname, f.user_image FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id LEFT JOIN tbl_bi_returned_supervisor AS e ON a.endo_code = e.endo_code LEFT JOIN tbl_operations AS f ON e.assigned_specialist = f.user_id WHERE a.endorsed_to = '" . $_SESSION['user_id'] . "' AND e.is_cleared = '1'  AND MONTH(e.datetime_cleared) = MONTH(NOW()) AND YEAR(e.datetime_cleared) = YEAR(NOW())  ORDER BY e.id DESC";
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
                                                  echo '<div class="feeds-left"><img src="../profilepictures_/' . $operationsid . '/' . $user_image . '" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="' . $operationsname . '"></div>'
                                                  ?>
                                            </td>
                                            <td><?php echo $row['endo_code']; ?></td>
                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                            <td><?php echo $newDateEndo ?></td>
                                            <td style="text-align: center;">
                                              <button type="button" class="btn btn-sm btn-outline-dark"
                                                data-toggle="tooltip" data-placement="top"
                                                title="View Returned Endorsement"
                                                onclick="displayreturnhistorybi('<?php echo $row['endo_code']; ?>', '<?php echo $row['endo_remarks']; ?>', '<?php echo $row['supervisorname']; ?>', '<?php echo $row['clientname']; ?>', '<?php echo $newDateTimeReturned; ?>', '<?php echo $newDateTimeCleared; ?>', '<?php echo $row['company_name'] . ' - ' . $row['site_']; ?>'); savemodifybihistendo();"><i
                                                  class="fa fa-history"></i></button>
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




  <q-dialog full-width v-model="this.bools.apiDialog" persistent>
    <q-card>
      <q-card-section>
        <div class="row justify-between items-center" style="margin-right: 0 !important; margin-left: 0 !important;">
          <div class="text-h5">TALKPUSH DATA</div>
          <div class="qbtn-group">
            <!-- <button class="btn btn-danger text-center" color="red" v-close-popup>
              CLOSE
            </button> -->
            <q-btn-group>
              <q-btn label="ASSIGN" v-if="this.selected.length > 0" color="green" icon="fa fa-user-plus"
                @click="openClientDialog()"></q-btn>
              <q-btn label="CLOSE" color="red" icon="fa fa-times" v-close-popup></q-btn>
            </q-btn-group>
          </div>
        </div>
      </q-card-section>
      <q-card-section class="q-pa-none">
        <div class="full-width qtabs">
          <q-tabs v-model="this.tab" dense active-class="bg-green text-white"
            class="text-green full-width q-tabs__content--align-justify" indicator-color="yellow" align="justify">
            <q-tab v-for="status in this.candidateStatus.data" :key="status" :name="status.code"
              :label="status.name.toUpperCase()" style="font-size: 10px !important">
            </q-tab>
          </q-tabs>
          <q-separator color="bg-dark"></q-separator>


          <q-tab-panels v-model="this.tab" animated>
            <q-tab-panel v-for="status in this.candidateStatus.data" :key="status" :name="status.code" class="q-pa-none"
              style="max-height: 70vh !important">
              <q-table v-if="!this.bools.loading" class="scroll sticky-header-table" :rows="this.apiDetails.data"
                :columns="this.columns" virtual-scroll row-key="external_client_id" v-model:pagination="this.pagination"
                :filter="this.filter" selection="multiple" v-model:selected="selected">

                <template v-slot:top-right>
                  <q-input outlined dense debounce="300" input-class="text-green text-bold" v-model="this.filter" square
                    placeholder="Search" color="green" stack-label class="full-width q-pl-md" filled>
                    <template v-slot:append>
                      <q-icon name="search" color="green" />
                    </template>
                  </q-input>
                </template>

              </q-table>
            </q-tab-panel>

          </q-tab-panels>

        </div>
      </q-card-section>

      <q-card-section v-if="this.bools.loading" style="height: 55vh" class="flex flex-center">
      </q-card-section>
      <q-inner-loading :showing="this.bools.loading">
        <span class="q-pt-md q-py-md text-overline text-center">FETCHING DATA, PLEASE WAIT
          ...</span>
        <q-spinner-gears size="50px" color="green" />

      </q-inner-loading>
    </q-card>
  </q-dialog>

  <q-dialog v-model="this.bools.clientDialog">
    <q-card style="width: 35vw !important">
      <q-card-section class="bg-green text-white text-h5" align="center">CLIENTS</q-card-section>
      <q-form ref="clientForm" @submit="postCandidates()">
        <q-card-section class="client-details">
          <div class="row fit">
            <div class="col-12">
              <q-select class="full-width" stack-label square filled v-model="endorsementDetails.client_id"
                :options="this.clientOptions.data" :rules="[(val) => !!val || 'Field is required']" emit-value
                map-options label-slot dense class="accent-text-dark" color="green" options-dense hide-bottom-space>
                <template v-slot:label>
                  Client
                  <span class="text-weight-bold text-red"> *</span>
                </template>
              </q-select>
            </div>
          </div>
        </q-card-section>
        <q-card-section align="right" class="bg-green" v-if="this.selected.length > 0">
          <q-btn type="submit" :label="`ASSIGN ${this.selected.length} CANDIDATE(S)`" color="primary"
            icon="fa fa-check">
          </q-btn>
        </q-card-section>
      </q-form>
    </q-card>
  </q-dialog>
</div>


<?php
include 'modals.php';
include 'script.php';
?>





<!-- Add the following at the end of your body tag -->
<script src="https://cdn.jsdelivr.net/npm/vue@3/dist/vue.global.prod.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quasar@2.18.1/dist/quasar.umd.prod.js"></script>


<script type="text/javascript">
$(document).ready(function() {
  // ACKNOWLEDGEMENT //
  // Check/Uncheck All
  $('#chkallapprbi').change(function() {
    if ($(this).is(':checked')) {
      $('input[name="biapproval[]"]').prop('checked', true);
    } else {
      $('input[name="biapproval[]"]').each(function() {
        $(this).prop('checked', false);
      });
    }
    inpu
    // Checkbox click
    $('input[name="biapproval[]"]').click(function() {
      var total_checkboxes = $('input[name="biapproval[]"]').length;
      var total_checkboxes_checked = $('input[name="biapproval[]"]:checked').length;

      if (total_checkboxes_checked == total_checkboxes) {
        $('#chkallapprbi').prop('checked', true);
      } else {
        $('#chkallapprbi').prop('checked', false);
      }
    });
  });

  // ASSIGNING //
  $(document).ready(function() {
    // Check/Uncheck All
    $('#chkallassignbi').change(function() {
      if ($(this).is(':checked')) {
        $('input[name="biassign[]"]').prop('checked', true);
      } else {
        $('input[name="biassign[]"]').each(function() {
          $(this).prop('checked', false);
        });
      }
    });
    // Checkbox click
    $('input[name="biassign[]"]').click(function() {
      var total_checkboxes = $('input[name="biassign[]"]').length;
      var total_checkboxes_checked = $('input[name="biassign[]"]:checked').length;

      if (total_checkboxes_checked == total_checkboxes) {
        $('#chkallassignbi').prop('checked', true);
      } else {
        $('#chkallassignbi').prop('checked', false);
      }
    });

    $('#chkallreassignbi').change(function() {
      if ($(this).is(':checked')) {
        $('input[name="bireassign[]"]').prop('checked', true);
      } else {
        $('input[name="bireassign[]"]').each(function() {
          $(this).prop('checked', false);
        });
      }
    });
    $('input[name="bireassign[]"]').click(function() {
      var total_checkboxes = $('input[name="bireassign[]"]').length;
      var total_checkboxes_checked = $('input[name="bireassign[]"]:checked').length;

      if (total_checkboxes_checked == total_checkboxes) {
        $('#chkallreassignbi').prop('checked', true);
      } else {
        $('#chkallreassignbi').prop('checked', false);
      }
    });
  });

  // RETURNED //
  $(document).ready(function() {
    // Check/Uncheck All
    $('#chkallreturnedendobi').change(function() {
      if ($(this).is(':checked')) {
        $('input[name="bireturnendo[]"]').prop('checked', true);
      } else {
        $('input[name="bireturnendo[]"]').each(function() {
          $(this).prop('checked', false);
        });
      }
    });

    // Checkbox click
    $('input[name="bireturnendo[]"]').click(function() {
      var total_checkboxes = $('input[name="bireturnendo[]"]').length;
      var total_checkboxes_checked = $('input[name="bireturnendo[]"]:checked').length;

      if (total_checkboxes_checked == total_checkboxes) {
        $('#chkallreturnedendobi').prop('checked', true);
      } else {
        $('#chkallreturnedendobi').prop('checked', false);
      }
    });
  });

  // MODIFY //
  $(document).ready(function() {
    // Check/Uncheck All
    $('#chkallmodifyendobi').change(function() {
      if ($(this).is(':checked')) {
        $('input[name="bimodifyendo[]"]').prop('checked', true);
      } else {
        $('input[name="bimodifyendo[]"]').each(function() {
          $(this).prop('checked', false);
        });
      }
    });

    // Checkbox click
    $('input[name="bimodifyendo[]"]').click(function() {
      var total_checkboxes = $('input[name="bimodifyendo[]"]').length;
      var total_checkboxes_checked = $('input[name="bimodifyendo[]"]:checked').length;

      if (total_checkboxes_checked == total_checkboxes) {
        $('#chkallmodifyendobi').prop('checked', true);
      } else {
        $('#chkallmodifyendobi').prop('checked', false);
      }
    });
  });

  // document.getElementById('btnsyncendo').addEventListener('click', async function(event) {
  //   event.preventDefault(); // prevent form submission if it's inside a form

  //   var requestOptions = {
  //     method: 'GET',
  //     redirect: 'follow'
  //   };


  //   await fetch("https://lendell.ph/api/losis/talkpush/candidates?status=hired", requestOptions)
  //     .then(response => response.text())
  //     .then(result => {
  //       console.log(result)
  //       $('#endoModal').modal('show')
  //       // $('#myModal').modal(options)
  //     }) // or update the DOM with result
  //     .catch(error => console.log('error', error));
});
</script>


<script src="https://cdn.jsdelivr.net/npm/vue@3/dist/vue.global.prod.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quasar@2/dist/quasar.umd.prod.js"></script>
<script>
const app = Vue.createApp({
  data() {
    return {
      apiHost: "http://localhost:8888/api/",
      bools: {
        apiDialog: false,
        clientDialog: false,
        loading: false,
      },
      pagination: {
        rowsPerPage: 0,
      },
      tab: 'hired',
      candidateStatus: [],
      columns: [{
          name: "external_client_id",
          label: "ID",
          field: "external_client_id",
          align: "center",
          // field: row => row.name,
          // format: val => `${val}`,
          sortable: true
        },
        {
          name: "full_name",
          align: "center",
          label: "FULL NAME",
          field: "full_name",
          sortable: true
        },
        {
          name: "endo_desc",
          align: "center",
          label: "ENDORSEMENT",
          field: "endo_desc",
          sortable: true
        },
        {
          name: "endo_requestor",
          align: "center",
          label: "REQUEST BY",
          field: "endo_requestor",
          sortable: true
        },
        {
          name: "endo_dateendo_formatdate",
          align: "center",
          label: "ENDORSEMENT D/T",
          field: "endo_formatdate",
          sortable: true
        },
        {
          name: "folder",
          align: "center",
          label: "STATUS",
          field: "folder",
          sortable: true
        },
      ],
      filter: '',
      clientOptions: [],
      supervisorOptions: [],
      apiDetails: [],
      selected: [],
      requestOptions: {
        method: 'GET',
        redirect: 'follow'
      },
      endorsementDetails: {
        client_id: '',
        site_id: '',
        team_id: '',
      }
    }
  },
  created() {
    this.fetchCandidateStatus()
    this.fetchSupervisors()
  },
  // mounted() {
  //   this.bools.apiDialog = true
  // },
  watch: {
    tab(val) {
      this.fetchApi(val)
    }
  },
  methods: {
    async fetchCandidateStatus() {
      await fetch(`${this.apiHost}losis/candidates/status`, this.requestOptions)
        .then(response => response.text())
        .then(result => {
          this.candidateStatus = JSON.parse(result)
        }) // or update the DOM with result
        .catch(error => console.log('error', error));
    },
    async fetchClients(client = 'concentrix') {
      await fetch(`${this.apiHost}losis/clients?company_name=${client}`, this.requestOptions)
        .then(response => response.text())
        .then(result => {
          this.clientOptions = JSON.parse(result)
        }) // or update the DOM with result
        .catch(error => console.log('error', error));
    },
    async fetchSupervisors(clientId) {
      await fetch(`${this.apiHost}losis/clients/supervisor`, this.requestOptions)
        .then(response => response.text())
        .then(result => {
          this.supervisorOptions = JSON.parse(result)
        }) // or update the DOM with result
        .catch(error => console.log('error', error));
    },
    async fetchApi(candidateStatus) {
      this.selected = []
      if (event !== undefined) {
        event.preventDefault();
      }
      this.bools.apiDialog = true
      this.bools.loading = true

      // OVERALL CANDIDATES //
      // await fetch(`${this.apiHost}losis/talkpush/candidates`, requestOptions)
      //   .then(response => response.text())
      //   .then(result => {
      //     this.apiDetails = JSON.parse(result)
      //   }) // or update the DOM with result
      //   .catch(error => console.log('error', error));
      // OVERALL CANDIDATES //

      // BY candidateStatus //
      await fetch(`${this.apiHost}losis/talkpush/candidates-by-status?status=${candidateStatus}`, this
          .requestOptions)
        .then(response => response.text())
        .then(result => {
          this.apiDetails = JSON.parse(result)
        }) // or update the DOM with result
        .catch(error => console.log('error', error));
      // BY STATUS //

      this.bools.loading = false
    },

    async postCandidates() {
      await this.$refs.clientForm.validate().then(async (valid) => {
        if (!valid) {
          return false;
        }

        if (this.supervisorOptions.data.length === 0) {
          await this.fetchSupervisors()
        }

        let filterClients = this.clientOptions.data.filter((filterClient) => filterClient.value === this
          .endorsementDetails.client_id)
        let filterSupervisor = []
        if (filterClients.length > 0) {
          filterSupervisor = this.supervisorOptions.data.filter((filterSupervisor) => filterSupervisor
            .supervisor_id === filterClients[0].supervisor_)
        }

        this.$q
          .dialog({
            title: "Confirmation",
            message: `Are you sure you want to assign the Candidate(s)?`,
            ok: {
              push: true,
            },
            cancel: {
              push: true,
              color: "negative",
            },
          })
          .onOk(async () => {
            this.bools.loading = true
            let payload = {}

            if (filterClients.length > 0) {
              this.endorsementDetails.site_id = filterClients[0].site_id
              this.endorsementDetails.team_id = filterClients[0].team_


              if (this.selected.length > 0) {
                for (const list of this.selected) {
                  list.client_id = this.endorsementDetails.client_id
                  list.site_id = this.endorsementDetails.site_id
                  list.team_id = this.endorsementDetails.team_id
                  list.supervisor_id = filterSupervisor[0].supervisor_id,
                    list.user_supervisor_id = filterSupervisor[0].user_id
                }

                payload = this.selected
              }
            }

            const url = `${this.apiHost}losis/candidates/endorsement`;
            const response = await fetch(url, {
              method: "POST",
              headers: {
                "Content-Type": "application/json"
              },
              body: JSON.stringify(payload)
            }).then(response => response.json())


            this.bools.clientDialog = false
            if (response.status === 'success') {
              await this.fetchApi(this.tab)
              this.bools.loading = false

              this.$q.notify({
                progress: true,
                type: 'positive',
                message: 'SUCCESSFULLY ASSIGNED CANDIDATE(S)',
              });
              this.bools.apiDialog = false
              setTimeout(() => {
                window.location.reload()
              }, 500);
            }
          })

      })
    },
    async openClientDialog() {
      this.bools.clientDialog = true
      await this.fetchClients()
    }
  }
})

app.use(Quasar, {
  config: {
    brand: {
      // ... or all other brand colors
    },
    notify: {}, // default set of options for Notify Quasar plugin
    loading: {}, // default set of options for Loading Quasar plugin
    loadingBar: {}, // settings for LoadingBar Quasar plugin
    dialog: {}
    // ..and many more
  }
})
app.mount('#q-app')
</script>

<style>
.qbtn-success {
  color: #28a745 !important;
  border-color: #28a745 !important;
}

.q-table__container .row {
  margin-left: 0 !important;
  margin-right: 0 !important;
  /* Add your custom styles here */
}

.qtabs .row {
  margin-left: 0 !important;
  margin-right: 0 !important;
  /* Add your custom styles here */
}

.q-btn .row {
  margin-left: 0 !important;
  margin-right: 0 !important;
  /* Add your custom styles here */
}

.qbtn-group .row {
  margin-left: 0 !important;
  margin-right: 0 !important;
  /* Add your custom styles here */
}

.client-details .row {
  margin-left: 0 !important;
  margin-right: 0 !important;
  /* Add your custom styles here */
}


.q-dialog-plugin .row {
  margin-left: 0 !important;
  margin-right: 0 !important;
  /* Add your custom styles here */
}

.q-notifications .row {
  margin-left: 0 !important;
  margin-right: 0 !important;
  /* Add your custom styles here */
}

.q-btn .col {
  padding-left: 0 !important;
  padding-right: 0 !important;
  /* Add your custom styles here */
}

.client-details .col {
  padding-left: 0 !important;
  padding-right: 0 !important;
  /* Add your custom styles here */
}



.sticky-header-table {
  height: 70vh;
}

.sticky-header-table .q-table__bottom {
  background-color: #ffffff;
  color: #4caf50;
}

.sticky-header-table thead tr:first-child th {
  background: #ffffff;
  color: #4caf50;
  top: 0;
}

.sticky-header-table .q-table__top {
  background-color: #ffffff;
  color: #4caf50;
}

.sticky-header-table thead tr th {
  position: sticky;
  z-index: 1;
}

.sticky-header-table tbody {
  scroll-margin-top: 48px;
}

.sticky-header-table tbody .q-td {
  border-color: #e0e0e0 !important;
}

.sticky-header-table tbody .q-tr:nth-child(odd) {
  background-color: rgb(199, 230, 141);
}

.sticky-header-table tbody .q-tr:nth-child(even) {
  background-color: #eceff1;
}

.sticky-header-table tbody .q-tr:hover {
  background-color: #ffc107;
}
</style>