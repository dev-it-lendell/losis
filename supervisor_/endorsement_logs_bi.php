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
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Endorsement Logs</li>
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
                                                <h4 class="media-heading">Total Current Month Logs</h4>
                                                <p style="font-size: 15px;"><?php echo $now->format('F Y'); ?></p>
                                            </div>
                                                <p id="officialbipocmonthlyendologs" style="font-size: 25px; text-align: right; font-weight: bold;"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="height: 85px; margin-top: -10px;">
                                    <div class="card-body">
                                        <div class="media mleft">
                                            <div class="media-left">
                                                <p style="font-size: 36px; margin-top: -7px;">
                                                    <i class="fa fa-calendar-o text-dark"></i>
                                                </p>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Total Current Year Logs</h4>
                                                <p style="font-size: 15px;"><?php echo $now->format('Y'); ?></p>
                                                <p id="officialbipocyearlyendologs" style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs-new2 customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#bipoclogsjan" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;JAN</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#bipoclogsfeb" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;FEB</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#bipoclogsmar" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-files-stack"></i>&nbsp;&nbsp;MAR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#bipoclogsapr" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;APR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#bipoclogsmay" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;MAY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#bipoclogsjune" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;JUNE</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#bipoclogsjuly" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;JULY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#bipoclogsaug" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;AUG</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#bipoclogssept" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;SEPT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#bipoclogsoct" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;OCT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#bipoclogsnov" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;NOV</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#bipoclogsdec" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;DEC</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                            <div class="tab-content br-n pn">
                                <div id="bipoclogsjan" class="tab-pane p-3 active"> 
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
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.client_id, b.id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.endo_code, c.percentage_, d.user_id, CONCAT(d.user_id) AS clientid, CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) AS clientname, d.user_image, CONCAT(d.user_image) AS clientimg, e.user_id, CONCAT(e.user_id) AS supervisorid, CONCAT(e.fname, ' ', e.lname, ' ', e.suffix) AS supervisorname, e.user_image, CONCAT(e.user_image) AS supervisorimg, f.user_id, CONCAT(f.user_id) AS operationsid, CONCAT(f.fname, ' ', f.lname, ' ', f.suffix) AS operationsname, f.user_image, CONCAT(f.user_image) AS operationsimg, g.user_id, CONCAT(g.user_id) AS supportid, CONCAT(g.fname, ' ', g.lname, ' ', g.suffix) AS supportname, g.user_image, CONCAT(g.user_image) AS supportimg, h.client_id, h.client_name, h.acronym_, h.site_ FROM tbl_endo AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_endorsement_bi_process AS c ON b.endo_code = c.endo_code LEFT JOIN tbl_client AS d ON b.client_id = d.user_id LEFT JOIN tbl_supervisor AS e ON b.assigned_poc = e.user_id LEFT JOIN tbl_operations AS f ON b.assigned_operations = f.user_id LEFT JOIN tbl_support AS g ON b.assigned_support = g.user_id LEFT JOIN client_list AS h ON a.site_id = h.client_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(b.datetime_added) = '01' AND YEAR(b.datetime_added) = YEAR(NOW()) ORDER BY b.id DESC";
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
                                <div  id="bipoclogsfeb" class="tab-pane p-3">
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
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.client_id, b.id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.endo_code, c.percentage_, d.user_id, CONCAT(d.user_id) AS clientid, CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) AS clientname, d.user_image, CONCAT(d.user_image) AS clientimg, e.user_id, CONCAT(e.user_id) AS supervisorid, CONCAT(e.fname, ' ', e.lname, ' ', e.suffix) AS supervisorname, e.user_image, CONCAT(e.user_image) AS supervisorimg, f.user_id, CONCAT(f.user_id) AS operationsid, CONCAT(f.fname, ' ', f.lname, ' ', f.suffix) AS operationsname, f.user_image, CONCAT(f.user_image) AS operationsimg, g.user_id, CONCAT(g.user_id) AS supportid, CONCAT(g.fname, ' ', g.lname, ' ', g.suffix) AS supportname, g.user_image, CONCAT(g.user_image) AS supportimg, h.client_id, h.client_name, h.acronym_, h.site_ FROM tbl_endo AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_endorsement_bi_process AS c ON b.endo_code = c.endo_code LEFT JOIN tbl_client AS d ON b.client_id = d.user_id LEFT JOIN tbl_supervisor AS e ON b.assigned_poc = e.user_id LEFT JOIN tbl_operations AS f ON b.assigned_operations = f.user_id LEFT JOIN tbl_support AS g ON b.assigned_support = g.user_id LEFT JOIN client_list AS h ON a.site_id = h.client_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(b.datetime_added) = '02' AND YEAR(b.datetime_added) = YEAR(NOW()) ORDER BY b.id DESC";
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
                                <div  id="bipoclogsmar" class="tab-pane p-3">
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
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.client_id, b.id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.endo_code, c.percentage_, d.user_id, CONCAT(d.user_id) AS clientid, CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) AS clientname, d.user_image, CONCAT(d.user_image) AS clientimg, e.user_id, CONCAT(e.user_id) AS supervisorid, CONCAT(e.fname, ' ', e.lname, ' ', e.suffix) AS supervisorname, e.user_image, CONCAT(e.user_image) AS supervisorimg, f.user_id, CONCAT(f.user_id) AS operationsid, CONCAT(f.fname, ' ', f.lname, ' ', f.suffix) AS operationsname, f.user_image, CONCAT(f.user_image) AS operationsimg, g.user_id, CONCAT(g.user_id) AS supportid, CONCAT(g.fname, ' ', g.lname, ' ', g.suffix) AS supportname, g.user_image, CONCAT(g.user_image) AS supportimg, h.client_id, h.client_name, h.acronym_, h.site_ FROM tbl_endo AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_endorsement_bi_process AS c ON b.endo_code = c.endo_code LEFT JOIN tbl_client AS d ON b.client_id = d.user_id LEFT JOIN tbl_supervisor AS e ON b.assigned_poc = e.user_id LEFT JOIN tbl_operations AS f ON b.assigned_operations = f.user_id LEFT JOIN tbl_support AS g ON b.assigned_support = g.user_id LEFT JOIN client_list AS h ON a.site_id = h.client_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(b.datetime_added) = '03' AND YEAR(b.datetime_added) = YEAR(NOW()) ORDER BY b.id DESC";
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
                                <div  id="bipoclogsapr" class="tab-pane p-3">
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
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.client_id, b.id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.endo_code, c.percentage_, d.user_id, CONCAT(d.user_id) AS clientid, CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) AS clientname, d.user_image, CONCAT(d.user_image) AS clientimg, e.user_id, CONCAT(e.user_id) AS supervisorid, CONCAT(e.fname, ' ', e.lname, ' ', e.suffix) AS supervisorname, e.user_image, CONCAT(e.user_image) AS supervisorimg, f.user_id, CONCAT(f.user_id) AS operationsid, CONCAT(f.fname, ' ', f.lname, ' ', f.suffix) AS operationsname, f.user_image, CONCAT(f.user_image) AS operationsimg, g.user_id, CONCAT(g.user_id) AS supportid, CONCAT(g.fname, ' ', g.lname, ' ', g.suffix) AS supportname, g.user_image, CONCAT(g.user_image) AS supportimg, h.client_id, h.client_name, h.acronym_, h.site_ FROM tbl_endo AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_endorsement_bi_process AS c ON b.endo_code = c.endo_code LEFT JOIN tbl_client AS d ON b.client_id = d.user_id LEFT JOIN tbl_supervisor AS e ON b.assigned_poc = e.user_id LEFT JOIN tbl_operations AS f ON b.assigned_operations = f.user_id LEFT JOIN tbl_support AS g ON b.assigned_support = g.user_id LEFT JOIN client_list AS h ON a.site_id = h.client_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(b.datetime_added) = '04' AND YEAR(b.datetime_added) = YEAR(NOW()) ORDER BY b.id DESC";
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
                                <div  id="bipoclogsmay" class="tab-pane p-3">
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
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.client_id, b.id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.endo_code, c.percentage_, d.user_id, CONCAT(d.user_id) AS clientid, CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) AS clientname, d.user_image, CONCAT(d.user_image) AS clientimg, e.user_id, CONCAT(e.user_id) AS supervisorid, CONCAT(e.fname, ' ', e.lname, ' ', e.suffix) AS supervisorname, e.user_image, CONCAT(e.user_image) AS supervisorimg, f.user_id, CONCAT(f.user_id) AS operationsid, CONCAT(f.fname, ' ', f.lname, ' ', f.suffix) AS operationsname, f.user_image, CONCAT(f.user_image) AS operationsimg, g.user_id, CONCAT(g.user_id) AS supportid, CONCAT(g.fname, ' ', g.lname, ' ', g.suffix) AS supportname, g.user_image, CONCAT(g.user_image) AS supportimg, h.client_id, h.client_name, h.acronym_, h.site_ FROM tbl_endo AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_endorsement_bi_process AS c ON b.endo_code = c.endo_code LEFT JOIN tbl_client AS d ON b.client_id = d.user_id LEFT JOIN tbl_supervisor AS e ON b.assigned_poc = e.user_id LEFT JOIN tbl_operations AS f ON b.assigned_operations = f.user_id LEFT JOIN tbl_support AS g ON b.assigned_support = g.user_id LEFT JOIN client_list AS h ON a.site_id = h.client_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(b.datetime_added) = '05' AND YEAR(b.datetime_added) = YEAR(NOW()) ORDER BY b.id DESC";
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
                                <div  id="bipoclogsjune" class="tab-pane p-3">
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
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.client_id, b.id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.endo_code, c.percentage_, d.user_id, CONCAT(d.user_id) AS clientid, CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) AS clientname, d.user_image, CONCAT(d.user_image) AS clientimg, e.user_id, CONCAT(e.user_id) AS supervisorid, CONCAT(e.fname, ' ', e.lname, ' ', e.suffix) AS supervisorname, e.user_image, CONCAT(e.user_image) AS supervisorimg, f.user_id, CONCAT(f.user_id) AS operationsid, CONCAT(f.fname, ' ', f.lname, ' ', f.suffix) AS operationsname, f.user_image, CONCAT(f.user_image) AS operationsimg, g.user_id, CONCAT(g.user_id) AS supportid, CONCAT(g.fname, ' ', g.lname, ' ', g.suffix) AS supportname, g.user_image, CONCAT(g.user_image) AS supportimg, h.client_id, h.client_name, h.acronym_, h.site_ FROM tbl_endo AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_endorsement_bi_process AS c ON b.endo_code = c.endo_code LEFT JOIN tbl_client AS d ON b.client_id = d.user_id LEFT JOIN tbl_supervisor AS e ON b.assigned_poc = e.user_id LEFT JOIN tbl_operations AS f ON b.assigned_operations = f.user_id LEFT JOIN tbl_support AS g ON b.assigned_support = g.user_id LEFT JOIN client_list AS h ON a.site_id = h.client_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(b.datetime_added) = '06' AND YEAR(b.datetime_added) = YEAR(NOW()) ORDER BY b.id DESC";
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
                                <div  id="bipoclogsjuly" class="tab-pane p-3">
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
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.client_id, b.id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.endo_code, c.percentage_, d.user_id, CONCAT(d.user_id) AS clientid, CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) AS clientname, d.user_image, CONCAT(d.user_image) AS clientimg, e.user_id, CONCAT(e.user_id) AS supervisorid, CONCAT(e.fname, ' ', e.lname, ' ', e.suffix) AS supervisorname, e.user_image, CONCAT(e.user_image) AS supervisorimg, f.user_id, CONCAT(f.user_id) AS operationsid, CONCAT(f.fname, ' ', f.lname, ' ', f.suffix) AS operationsname, f.user_image, CONCAT(f.user_image) AS operationsimg, g.user_id, CONCAT(g.user_id) AS supportid, CONCAT(g.fname, ' ', g.lname, ' ', g.suffix) AS supportname, g.user_image, CONCAT(g.user_image) AS supportimg, h.client_id, h.client_name, h.acronym_, h.site_ FROM tbl_endo AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_endorsement_bi_process AS c ON b.endo_code = c.endo_code LEFT JOIN tbl_client AS d ON b.client_id = d.user_id LEFT JOIN tbl_supervisor AS e ON b.assigned_poc = e.user_id LEFT JOIN tbl_operations AS f ON b.assigned_operations = f.user_id LEFT JOIN tbl_support AS g ON b.assigned_support = g.user_id LEFT JOIN client_list AS h ON a.site_id = h.client_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(b.datetime_added) = '07' AND YEAR(b.datetime_added) = YEAR(NOW()) ORDER BY b.id DESC";
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
                                <div  id="bipoclogsaug" class="tab-pane p-3">
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
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.client_id, b.id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.endo_code, c.percentage_, d.user_id, CONCAT(d.user_id) AS clientid, CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) AS clientname, d.user_image, CONCAT(d.user_image) AS clientimg, e.user_id, CONCAT(e.user_id) AS supervisorid, CONCAT(e.fname, ' ', e.lname, ' ', e.suffix) AS supervisorname, e.user_image, CONCAT(e.user_image) AS supervisorimg, f.user_id, CONCAT(f.user_id) AS operationsid, CONCAT(f.fname, ' ', f.lname, ' ', f.suffix) AS operationsname, f.user_image, CONCAT(f.user_image) AS operationsimg, g.user_id, CONCAT(g.user_id) AS supportid, CONCAT(g.fname, ' ', g.lname, ' ', g.suffix) AS supportname, g.user_image, CONCAT(g.user_image) AS supportimg, h.client_id, h.client_name, h.acronym_, h.site_ FROM tbl_endo AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_endorsement_bi_process AS c ON b.endo_code = c.endo_code LEFT JOIN tbl_client AS d ON b.client_id = d.user_id LEFT JOIN tbl_supervisor AS e ON b.assigned_poc = e.user_id LEFT JOIN tbl_operations AS f ON b.assigned_operations = f.user_id LEFT JOIN tbl_support AS g ON b.assigned_support = g.user_id LEFT JOIN client_list AS h ON a.site_id = h.client_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(b.datetime_added) = '08' AND YEAR(b.datetime_added) = YEAR(NOW()) ORDER BY b.id DESC";
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
                                <div  id="bipoclogssept" class="tab-pane p-3">
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
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.client_id, b.id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.endo_code, c.percentage_, d.user_id, CONCAT(d.user_id) AS clientid, CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) AS clientname, d.user_image, CONCAT(d.user_image) AS clientimg, e.user_id, CONCAT(e.user_id) AS supervisorid, CONCAT(e.fname, ' ', e.lname, ' ', e.suffix) AS supervisorname, e.user_image, CONCAT(e.user_image) AS supervisorimg, f.user_id, CONCAT(f.user_id) AS operationsid, CONCAT(f.fname, ' ', f.lname, ' ', f.suffix) AS operationsname, f.user_image, CONCAT(f.user_image) AS operationsimg, g.user_id, CONCAT(g.user_id) AS supportid, CONCAT(g.fname, ' ', g.lname, ' ', g.suffix) AS supportname, g.user_image, CONCAT(g.user_image) AS supportimg, h.client_id, h.client_name, h.acronym_, h.site_ FROM tbl_endo AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_endorsement_bi_process AS c ON b.endo_code = c.endo_code LEFT JOIN tbl_client AS d ON b.client_id = d.user_id LEFT JOIN tbl_supervisor AS e ON b.assigned_poc = e.user_id LEFT JOIN tbl_operations AS f ON b.assigned_operations = f.user_id LEFT JOIN tbl_support AS g ON b.assigned_support = g.user_id LEFT JOIN client_list AS h ON a.site_id = h.client_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(b.datetime_added) = '09' AND YEAR(b.datetime_added) = YEAR(NOW()) ORDER BY b.id DESC";
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
                                <div  id="bipoclogsoct" class="tab-pane p-3">
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
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.client_id, b.id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.endo_code, c.percentage_, d.user_id, CONCAT(d.user_id) AS clientid, CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) AS clientname, d.user_image, CONCAT(d.user_image) AS clientimg, e.user_id, CONCAT(e.user_id) AS supervisorid, CONCAT(e.fname, ' ', e.lname, ' ', e.suffix) AS supervisorname, e.user_image, CONCAT(e.user_image) AS supervisorimg, f.user_id, CONCAT(f.user_id) AS operationsid, CONCAT(f.fname, ' ', f.lname, ' ', f.suffix) AS operationsname, f.user_image, CONCAT(f.user_image) AS operationsimg, g.user_id, CONCAT(g.user_id) AS supportid, CONCAT(g.fname, ' ', g.lname, ' ', g.suffix) AS supportname, g.user_image, CONCAT(g.user_image) AS supportimg, h.client_id, h.client_name, h.acronym_, h.site_ FROM tbl_endo AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_endorsement_bi_process AS c ON b.endo_code = c.endo_code LEFT JOIN tbl_client AS d ON b.client_id = d.user_id LEFT JOIN tbl_supervisor AS e ON b.assigned_poc = e.user_id LEFT JOIN tbl_operations AS f ON b.assigned_operations = f.user_id LEFT JOIN tbl_support AS g ON b.assigned_support = g.user_id LEFT JOIN client_list AS h ON a.site_id = h.client_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(b.datetime_added) = '10' AND YEAR(b.datetime_added) = YEAR(NOW()) ORDER BY b.id DESC";
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
                                <div  id="bipoclogsnov" class="tab-pane p-3">
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
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.client_id, b.id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.endo_code, c.percentage_, d.user_id, CONCAT(d.user_id) AS clientid, CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) AS clientname, d.user_image, CONCAT(d.user_image) AS clientimg, e.user_id, CONCAT(e.user_id) AS supervisorid, CONCAT(e.fname, ' ', e.lname, ' ', e.suffix) AS supervisorname, e.user_image, CONCAT(e.user_image) AS supervisorimg, f.user_id, CONCAT(f.user_id) AS operationsid, CONCAT(f.fname, ' ', f.lname, ' ', f.suffix) AS operationsname, f.user_image, CONCAT(f.user_image) AS operationsimg, g.user_id, CONCAT(g.user_id) AS supportid, CONCAT(g.fname, ' ', g.lname, ' ', g.suffix) AS supportname, g.user_image, CONCAT(g.user_image) AS supportimg, h.client_id, h.client_name, h.acronym_, h.site_ FROM tbl_endo AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_endorsement_bi_process AS c ON b.endo_code = c.endo_code LEFT JOIN tbl_client AS d ON b.client_id = d.user_id LEFT JOIN tbl_supervisor AS e ON b.assigned_poc = e.user_id LEFT JOIN tbl_operations AS f ON b.assigned_operations = f.user_id LEFT JOIN tbl_support AS g ON b.assigned_support = g.user_id LEFT JOIN client_list AS h ON a.site_id = h.client_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(b.datetime_added) = '11' AND YEAR(b.datetime_added) = YEAR(NOW()) ORDER BY b.id DESC";
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
                                <div  id="bipoclogsdec" class="tab-pane p-3">
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
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.client_id, b.id, b.endo_code, b.endo_action, b.assigned_poc, b.assigned_operations, b.assigned_support, b.assigned_team, b.datetime_added, c.endo_code, c.percentage_, d.user_id, CONCAT(d.user_id) AS clientid, CONCAT(d.fname, ' ', d.lname, ' ', d.suffix) AS clientname, d.user_image, CONCAT(d.user_image) AS clientimg, e.user_id, CONCAT(e.user_id) AS supervisorid, CONCAT(e.fname, ' ', e.lname, ' ', e.suffix) AS supervisorname, e.user_image, CONCAT(e.user_image) AS supervisorimg, f.user_id, CONCAT(f.user_id) AS operationsid, CONCAT(f.fname, ' ', f.lname, ' ', f.suffix) AS operationsname, f.user_image, CONCAT(f.user_image) AS operationsimg, g.user_id, CONCAT(g.user_id) AS supportid, CONCAT(g.fname, ' ', g.lname, ' ', g.suffix) AS supportname, g.user_image, CONCAT(g.user_image) AS supportimg, h.client_id, h.client_name, h.acronym_, h.site_ FROM tbl_endo AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_endorsement_bi_process AS c ON b.endo_code = c.endo_code LEFT JOIN tbl_client AS d ON b.client_id = d.user_id LEFT JOIN tbl_supervisor AS e ON b.assigned_poc = e.user_id LEFT JOIN tbl_operations AS f ON b.assigned_operations = f.user_id LEFT JOIN tbl_support AS g ON b.assigned_support = g.user_id LEFT JOIN client_list AS h ON a.site_id = h.client_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(b.datetime_added) = '12' AND YEAR(b.datetime_added) = YEAR(NOW()) ORDER BY b.id DESC";
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