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
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2>Endorsement Logs</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Monitoring Logs</li>
                            <li class="breadcrumb-item active">Endorsement Logs</li>
                        </ul> 
                    </div>                   
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
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
                                            <h4 class="media-heading">Endorsement Logs</h4>
                                                Lendell Outsourcing Solutions Inc.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs-new2 customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#teampsalms" role="tab"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;Team Psalms</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#teammark" role="tab"><i class="icofont-database"></i>&nbsp;&nbsp;Team Mark</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#teamcorinthians" role="tab"><i class="icofont-files-stack"></i>&nbsp;&nbsp;Team Corinthians</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#teamecclesiastes" role="tab"><i class="icofont-ui-check"></i>&nbsp;&nbsp;Team Ecclesiastes</a>
                                    <div class="slide"></div>
                                </li>                                 
                            </ul>
                            <div class="tab-content br-n pn">
                                <div id="teampsalms" class="tab-pane p-3 active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>NAME</th>
                                                            <th>ACTION</th>
                                                            <th>DATE & TIME ADDED</th>
                                                            <th>ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.endo_services, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.endo_date, a.endo_status, a.client_id, a.site_id, a.importance, b.id, b.client_id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.user_id, CONCAT(c.user_id) AS clientid, CONCAT(c.fname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.user_image, CONCAT(c.user_image) AS clientimg, d.user_id, CONCAT(d.user_id) AS supervisorid, CONCAT(d.fname, ' ', d.lname,  ' ', d.suffix) AS supervisorname, d.user_image, CONCAT(d.user_image) AS supervisorimg, e.user_id, CONCAT(e.user_id) AS operationsid, CONCAT(e.fname, ' ', e.lname,  ' ', e.suffix) AS operationsname, e.user_image, CONCAT(e.user_image) AS operationsimg, f.user_id, CONCAT(f.user_id) AS supportid, CONCAT(f.fname, ' ', f.lname,  ' ', f.suffix) AS supportname, f.user_image, CONCAT(f.user_image) AS supportimg, g.team_no, g.team_name FROM tbl_endo AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON b.client_id = c.user_id LEFT JOIN tbl_supervisor AS d ON b.assigned_poc = d.user_id LEFT JOIN tbl_operations AS e ON b.assigned_operations = e.user_id LEFT JOIN tbl_support AS f ON b.assigned_support = f.user_id LEFT JOIN team_list AS g ON b.assigned_team = g.team_no WHERE b.assigned_team = 'TM-000001' UNION ALL SELECT a.endo_services, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.endo_date, a.endo_status, a.client_id, a.site_id, a.importance, b.id, b.client_id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.user_id, CONCAT(c.user_id) AS clientid, CONCAT(c.fname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.user_image, CONCAT(c.user_image) AS clientimg, d.user_id, CONCAT(d.user_id) AS supervisorid, CONCAT(d.fname, ' ', d.lname,  ' ', d.suffix) AS supervisorname, d.user_image, CONCAT(d.user_image) AS supervisorimg, e.user_id, CONCAT(e.user_id) AS operationsid, CONCAT(e.fname, ' ', e.lname,  ' ', e.suffix) AS operationsname, e.user_image, CONCAT(e.user_image) AS operationsimg, f.user_id, CONCAT(f.user_id) AS supportid, CONCAT(f.fname, ' ', f.lname,  ' ', f.suffix) AS supportname, f.user_image, CONCAT(f.user_image) AS supportimg, g.team_no, g.team_name FROM tbl_endo_criminal AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON b.client_id = c.user_id LEFT JOIN tbl_supervisor AS d ON b.assigned_poc = d.user_id LEFT JOIN tbl_operations AS e ON b.assigned_operations = e.user_id LEFT JOIN tbl_support AS f ON b.assigned_support = f.user_id LEFT JOIN team_list AS g ON b.assigned_team = g.team_no WHERE b.assigned_team = 'TM-000001' ORDER BY id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="feeds-left"><img src="../images/icons/endorsement.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div>
                                                                            </td>
                                                                            <td style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="<?php echo $row['endo_code']; ?>"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $row['endo_action']; ?></td>
                                                                            <td><?php echo $newDateTimeAdded; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement Log"><i class="fa fa-file-text-o"></i></button>
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
                                <div id="teammark" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>NAME</th>
                                                            <th>ACTION</th>
                                                            <th>DATE & TIME ADDED</th>
                                                            <th>ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.endo_services, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.endo_date, a.endo_status, a.client_id, a.site_id, a.importance, b.id, b.client_id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.user_id, CONCAT(c.user_id) AS clientid, CONCAT(c.fname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.user_image, CONCAT(c.user_image) AS clientimg, d.user_id, CONCAT(d.user_id) AS supervisorid, CONCAT(d.fname, ' ', d.lname,  ' ', d.suffix) AS supervisorname, d.user_image, CONCAT(d.user_image) AS supervisorimg, e.user_id, CONCAT(e.user_id) AS operationsid, CONCAT(e.fname, ' ', e.lname,  ' ', e.suffix) AS operationsname, e.user_image, CONCAT(e.user_image) AS operationsimg, f.user_id, CONCAT(f.user_id) AS supportid, CONCAT(f.fname, ' ', f.lname,  ' ', f.suffix) AS supportname, f.user_image, CONCAT(f.user_image) AS supportimg, g.team_no, g.team_name FROM tbl_endo AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON b.client_id = c.user_id LEFT JOIN tbl_supervisor AS d ON b.assigned_poc = d.user_id LEFT JOIN tbl_operations AS e ON b.assigned_operations = e.user_id LEFT JOIN tbl_support AS f ON b.assigned_support = f.user_id LEFT JOIN team_list AS g ON b.assigned_team = g.team_no WHERE b.assigned_team = 'TM-000002' UNION ALL SELECT a.endo_services, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.endo_date, a.endo_status, a.client_id, a.site_id, a.importance, b.id, b.client_id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.user_id, CONCAT(c.user_id) AS clientid, CONCAT(c.fname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.user_image, CONCAT(c.user_image) AS clientimg, d.user_id, CONCAT(d.user_id) AS supervisorid, CONCAT(d.fname, ' ', d.lname,  ' ', d.suffix) AS supervisorname, d.user_image, CONCAT(d.user_image) AS supervisorimg, e.user_id, CONCAT(e.user_id) AS operationsid, CONCAT(e.fname, ' ', e.lname,  ' ', e.suffix) AS operationsname, e.user_image, CONCAT(e.user_image) AS operationsimg, f.user_id, CONCAT(f.user_id) AS supportid, CONCAT(f.fname, ' ', f.lname,  ' ', f.suffix) AS supportname, f.user_image, CONCAT(f.user_image) AS supportimg, g.team_no, g.team_name FROM tbl_endo_criminal AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON b.client_id = c.user_id LEFT JOIN tbl_supervisor AS d ON b.assigned_poc = d.user_id LEFT JOIN tbl_operations AS e ON b.assigned_operations = e.user_id LEFT JOIN tbl_support AS f ON b.assigned_support = f.user_id LEFT JOIN team_list AS g ON b.assigned_team = g.team_no WHERE b.assigned_team = 'TM-000002' ORDER BY id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                        
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="feeds-left"><img src="../images/icons/endorsement.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div>
                                                                            </td>
                                                                            <td style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="<?php echo $row['endo_code']; ?>"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $row['endo_action']; ?></td>
                                                                            <td><?php echo $newDateTimeAdded; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement Log"><i class="fa fa-file-text-o"></i></button>
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
                                <div id="teamcorinthians" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>NAME</th>
                                                            <th>ACTION</th>
                                                            <th>DATE & TIME ADDED</th>
                                                            <th>ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.endo_services, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.endo_date, a.endo_status, a.client_id, a.site_id, a.importance, b.id, b.client_id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.user_id, CONCAT(c.user_id) AS clientid, CONCAT(c.fname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.user_image, CONCAT(c.user_image) AS clientimg, d.user_id, CONCAT(d.user_id) AS supervisorid, CONCAT(d.fname, ' ', d.lname,  ' ', d.suffix) AS supervisorname, d.user_image, CONCAT(d.user_image) AS supervisorimg, e.user_id, CONCAT(e.user_id) AS operationsid, CONCAT(e.fname, ' ', e.lname,  ' ', e.suffix) AS operationsname, e.user_image, CONCAT(e.user_image) AS operationsimg, f.user_id, CONCAT(f.user_id) AS supportid, CONCAT(f.fname, ' ', f.lname,  ' ', f.suffix) AS supportname, f.user_image, CONCAT(f.user_image) AS supportimg, g.team_no, g.team_name FROM tbl_endo AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON b.client_id = c.user_id LEFT JOIN tbl_supervisor AS d ON b.assigned_poc = d.user_id LEFT JOIN tbl_operations AS e ON b.assigned_operations = e.user_id LEFT JOIN tbl_support AS f ON b.assigned_support = f.user_id LEFT JOIN team_list AS g ON b.assigned_team = g.team_no WHERE b.assigned_team = 'TM-000003' UNION ALL SELECT a.endo_services, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.endo_date, a.endo_status, a.client_id, a.site_id, a.importance, b.id, b.client_id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.user_id, CONCAT(c.user_id) AS clientid, CONCAT(c.fname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.user_image, CONCAT(c.user_image) AS clientimg, d.user_id, CONCAT(d.user_id) AS supervisorid, CONCAT(d.fname, ' ', d.lname,  ' ', d.suffix) AS supervisorname, d.user_image, CONCAT(d.user_image) AS supervisorimg, e.user_id, CONCAT(e.user_id) AS operationsid, CONCAT(e.fname, ' ', e.lname,  ' ', e.suffix) AS operationsname, e.user_image, CONCAT(e.user_image) AS operationsimg, f.user_id, CONCAT(f.user_id) AS supportid, CONCAT(f.fname, ' ', f.lname,  ' ', f.suffix) AS supportname, f.user_image, CONCAT(f.user_image) AS supportimg, g.team_no, g.team_name FROM tbl_endo_criminal AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON b.client_id = c.user_id LEFT JOIN tbl_supervisor AS d ON b.assigned_poc = d.user_id LEFT JOIN tbl_operations AS e ON b.assigned_operations = e.user_id LEFT JOIN tbl_support AS f ON b.assigned_support = f.user_id LEFT JOIN team_list AS g ON b.assigned_team = g.team_no WHERE b.assigned_team = 'TM-000003' ORDER BY id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                        
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="feeds-left"><img src="../images/icons/endorsement.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div>
                                                                            </td>
                                                                            <td style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="<?php echo $row['endo_code']; ?>"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $row['endo_action']; ?></td>
                                                                            <td><?php echo $newDateTimeAdded; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement Log"><i class="fa fa-file-text-o"></i></button>
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
                                <div id="teamecclesiastes" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>NAME</th>
                                                            <th>ACTION</th>
                                                            <th>DATE & TIME ADDED</th>
                                                            <th>ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.endo_services, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.endo_date, a.endo_status, a.client_id, a.site_id, a.importance, b.id, b.client_id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.user_id, CONCAT(c.user_id) AS clientid, CONCAT(c.fname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.user_image, CONCAT(c.user_image) AS clientimg, d.user_id, CONCAT(d.user_id) AS supervisorid, CONCAT(d.fname, ' ', d.lname,  ' ', d.suffix) AS supervisorname, d.user_image, CONCAT(d.user_image) AS supervisorimg, e.user_id, CONCAT(e.user_id) AS operationsid, CONCAT(e.fname, ' ', e.lname,  ' ', e.suffix) AS operationsname, e.user_image, CONCAT(e.user_image) AS operationsimg, f.user_id, CONCAT(f.user_id) AS supportid, CONCAT(f.fname, ' ', f.lname,  ' ', f.suffix) AS supportname, f.user_image, CONCAT(f.user_image) AS supportimg, g.team_no, g.team_name FROM tbl_endo AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON b.client_id = c.user_id LEFT JOIN tbl_supervisor AS d ON b.assigned_poc = d.user_id LEFT JOIN tbl_operations AS e ON b.assigned_operations = e.user_id LEFT JOIN tbl_support AS f ON b.assigned_support = f.user_id LEFT JOIN team_list AS g ON b.assigned_team = g.team_no WHERE b.assigned_team = 'TM-000004' UNION ALL SELECT a.endo_services, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.endo_date, a.endo_status, a.client_id, a.site_id, a.importance, b.id, b.client_id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.user_id, CONCAT(c.user_id) AS clientid, CONCAT(c.fname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.user_image, CONCAT(c.user_image) AS clientimg, d.user_id, CONCAT(d.user_id) AS supervisorid, CONCAT(d.fname, ' ', d.lname,  ' ', d.suffix) AS supervisorname, d.user_image, CONCAT(d.user_image) AS supervisorimg, e.user_id, CONCAT(e.user_id) AS operationsid, CONCAT(e.fname, ' ', e.lname,  ' ', e.suffix) AS operationsname, e.user_image, CONCAT(e.user_image) AS operationsimg, f.user_id, CONCAT(f.user_id) AS supportid, CONCAT(f.fname, ' ', f.lname,  ' ', f.suffix) AS supportname, f.user_image, CONCAT(f.user_image) AS supportimg, g.team_no, g.team_name FROM tbl_endo_criminal AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON b.client_id = c.user_id LEFT JOIN tbl_supervisor AS d ON b.assigned_poc = d.user_id LEFT JOIN tbl_operations AS e ON b.assigned_operations = e.user_id LEFT JOIN tbl_support AS f ON b.assigned_support = f.user_id LEFT JOIN team_list AS g ON b.assigned_team = g.team_no WHERE b.assigned_team = 'TM-000004' ORDER BY id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $datetime_added = $row['datetime_added'];
                                                                    $newDateTimeAdded = date("F j, Y - g:i A", strtotime($datetime_added));
                                                                        
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="feeds-left"><img src="../images/icons/endorsement.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div>
                                                                            </td>
                                                                            <td style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="<?php echo $row['endo_code']; ?>"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $row['endo_action']; ?></td>
                                                                            <td><?php echo $newDateTimeAdded; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement Log"><i class="fa fa-file-text-o"></i></button>
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