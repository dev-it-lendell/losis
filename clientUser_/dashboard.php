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
                        <h2>Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul> 
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="functions/export_data.php" class="btn btn-outline-success" style="float: right;"><i class="fa fa-download"></i>&nbsp;Export Data</a>
                    </div>                    
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div id="top_counter1" class="carousel slide" data-ride="carousel" data-interval="2500">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="body">
                                        <div class="icon"><i class="fa fa-copy"></i></div>
                                        <div class="content">
                                            <div class="text mb-2 text-uppercase"><?php echo $now->format('F Y'); ?></div>
                                            <h4 class="number mb-0" id="total_endo"></h4>
                                            <small class="text-muted">Total Endorsements</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="body">
                                        <div class="icon"><i class="fa fa-copy"></i></div>
                                        <div class="content">
                                            <div class="text mb-2 text-uppercase">
                                               <?php
                                                    $new_date = date('F Y', strtotime('-1 month'));
                                                    echo $new_date;
                                                ?>
                                            </div>
                                            <h4 class="number mb-0" id="prevtotal_endo"></h4>
                                            <small class="text-muted">Total Endorsements</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div id="top_counter1" class="carousel slide" data-ride="carousel" data-interval="2300">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="body">
                                        <div class="icon"><i class="fa fa-clock-o"></i></div>
                                        <div class="content">
                                            <div class="text mb-2 text-uppercase"><?php echo $now->format('F Y'); ?></div>
                                            <h4 class="number mb-0" id="pending_endo"></h4>
                                            <small class="text-muted">Pending Endorsements</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="body">
                                        <div class="icon"><i class="fa fa-clock-o"></i></div>
                                        <div class="content">
                                            <div class="text mb-2 text-uppercase">
                                               <?php
                                                    $new_date = date('F Y', strtotime('-1 month'));
                                                    echo $new_date;
                                                ?>
                                            </div>
                                            <h4 class="number mb-0" id="prevpending_endo"></h4>
                                            <small class="text-muted">Pending Endorsements</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div id="top_counter1" class="carousel slide" data-ride="carousel" data-interval="2000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="body">
                                        <div class="icon"><i class="fa fa-spinner"></i></div>
                                        <div class="content">
                                            <div class="text mb-2 text-uppercase"><?php echo $now->format('F Y'); ?></div>
                                            <h4 class="number mb-0" id="onprocess_endo"></h4>
                                            <small class="text-muted">On-Process Endorsements</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="body">
                                        <div class="icon"><i class="fa fa-spinner"></i></div>
                                        <div class="content">
                                            <div class="text mb-2 text-uppercase">
                                               <?php
                                                    $new_date = date('F Y', strtotime('-1 month'));
                                                    echo $new_date;
                                                ?>
                                            </div>
                                            <h4 class="number mb-0" id="prevonprocess_endo"></h4>
                                            <small class="text-muted">On-Process Endorsements</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div id="top_counter1" class="carousel slide" data-ride="carousel" data-interval="2300">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="body">
                                        <div class="icon"><i class="fa fa-check-circle-o"></i></div>
                                        <div class="content">
                                            <div class="text mb-2 text-uppercase"><?php echo $now->format('F Y'); ?></div>
                                            <h4 class="number mb-0" id="completed_endo"></h4>
                                            <small class="text-muted">Completed Endorsements</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="body">
                                        <div class="icon"><i class="fa fa-check-circle-o"></i></div>
                                        <div class="content">
                                            <div class="text mb-2 text-uppercase">
                                               <?php
                                                    $new_date = date('F Y', strtotime('-1 month'));
                                                    echo $new_date;
                                                ?>
                                            </div>
                                            <h4 class="number mb-0" id="prevcompleted_endo"></h4>
                                            <small class="text-muted">Completed Endorsements</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>Holidays <br><p style="font-weight: bold; font-size: 11px;">Year <?php echo $now->format('Y'); ?></p></h6>
                                </div>
                            </div>
                        </div>
                        <div class="body" style="margin-top: -35px;">
                            <ul class="list-unstyled feeds_widget">
                                <div id="holiday_list"></div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>Team Members <br><p style="font-weight: bold; font-size: 11px;"><?php echo $clnt_company; ?></p></h6>
                                </div>
                            </div>
                        </div>
                        <div class="body" style="margin-top: -35px;">
                            <ul class="list-unstyled feeds_widget">
                                <div id="teammember_list"></div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>Assigned Supervisors <br><p style="font-weight: bold; font-size: 11px;">Lendell Outsourcing Solutions Inc.</p></h6>
                                </div>
                            </div>
                        </div>
                        <div class="body" style="margin-top: -35px;">
                            <ul class="list-unstyled feeds_widget">
                                <div id="supervisor_list"></div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="header">
                           <div class="row">
                                <div class="col-md-12">
                                    <h6>Background Investigation <br><p style="font-weight: bold; font-size: 13px;"><?php echo $clnt_company; ?> - <?php echo $now->format('F Y'); ?></p></h6>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <table class="table mb-0">
                                <tbody>
                                    <?php
                                        $sql = "SELECT a.endo_code, CONCAT(a.fname,  ' ', a.mname,  ' ', a.lname, ' ', a.suffix) AS applicantname, a.endo_status, a.site_id, a.importance, a.endo_date, a.client_id, a.client_id, b.endo_code, b.percentage_, c.user_id, c.company_name FROM tbl_endo AS a  LEFT JOIN tbl_endorsement_bi_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND c.company_name = '$clnt_company' AND c.user_id = '$clientid' ORDER BY a.importance ASC LIMIT 5";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                // STATUS //
                                                if ($row['endo_status'] == '0') {
                                                    $endostatus = '<span class="badge badge-warning" style="font-weight: bold; background-color: #fff;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">Pending</span>';
                                                } else if ($row['endo_status'] == '1') {
                                                    $endostatus = '<span class="badge badge-info" style="font-weight: bold; background-color: #fff;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">Received</span>';
                                                } else if ($row['endo_status'] == '2') {
                                                    $endostatus = '<span class="badge badge-danger" style="font-weight: bold; background-color: #fff;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">On-Process</span>';
                                                } else if ($row['endo_status'] == '3') {
                                                    $endostatus = '<span class="badge badge-default" style="font-weight: bold; background-color: #fff;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">Done</span>';
                                                } else if ($row['endo_status'] == '4') {
                                                    $endostatus = '<span class="badge badge-success" style="font-weight: bold; background-color: #fff;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">Completed</span>';
                                                } else {
                                                    $endostatus = "";
                                                }

                                                // IMPORTANCE //
                                                if ($row['importance'] == '1') {
                                                    $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                } else if ($row['importance'] == '2') {
                                                    $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                } else {
                                                    $endoimportant = "";
                                                }

                                                ?>
                                                    <tr>
                                                        <td><?php echo $endoimportant; ?></td>
                                                        <td style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="<?php echo $row['applicantname']; ?>"><?php echo $row['endo_code']; ?></td>
                                                        <td><?php echo $endostatus ?></td>
                                                        <td style="text-align: center;">
                                                            <span class='badge bg-success' style="color: white; font-weight: bold;"><?php echo $row['percentage_']; ?> %</span>
                                                        </td>
                                                    </tr>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                                <tr>
                                                    <td style="text-align: center; font-weight: bold;">No Data Available</td>
                                                </tr>
                                            <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="header">
                           <div class="row">
                                <div class="col-md-12">
                                    <h6>Database Check <br><p style="font-weight: bold; font-size: 13px;"><?php echo $clnt_company; ?> - <?php echo $now->format('F Y'); ?></p></h6>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <table class="table mb-0">
                                <tbody>
                                    <?php
                                        $sql = "SELECT a.endo_code, CONCAT(a.fname,  ' ', a.mname,  ' ', a.lname, ' ', a.suffix) AS applicantname, a.endo_status, a.site_id, a.importance, a.endo_date, a.client_id, a.client_id, b.endo_code, b.percentage_, c.user_id, c.company_name FROM tbl_endo_criminal AS a  LEFT JOIN tbl_endorsement_dc_process AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND c.company_name = '$clnt_company' ORDER BY a.importance ASC LIMIT 5";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                // STATUS //
                                                if ($row['endo_status'] == '0') {
                                                    $endostatus = '<span class="badge badge-warning" style="font-weight: bold; background-color: #fff;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">Pending</span>';
                                                } else if ($row['endo_status'] == '1') {
                                                    $endostatus = '<span class="badge badge-info" style="font-weight: bold; background-color: #fff;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">Received</span>';
                                                } else if ($row['endo_status'] == '2') {
                                                    $endostatus = '<span class="badge badge-danger" style="font-weight: bold; background-color: #fff;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">On-Process</span>';
                                                } else if ($row['endo_status'] == '3') {
                                                    $endostatus = '<span class="badge badge-default" style="font-weight: bold; background-color: #fff;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">Done</span>';
                                                } else if ($row['endo_status'] == '4') {
                                                    $endostatus = '<span class="badge badge-success" style="font-weight: bold; background-color: #fff;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">Completed</span>';
                                                } else {
                                                    $endostatus = "";
                                                }

                                                // IMPORTANCE //
                                                if ($row['importance'] == '1') {
                                                    $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                } else if ($row['importance'] == '2') {
                                                    $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                }

                                                ?>
                                                    <tr>
                                                        <td><?php echo $endoimportant; ?></td>
                                                        <td style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="<?php echo $row['applicantname']; ?>"><?php echo $row['endo_code']; ?></td>
                                                        <td><?php echo $endostatus ?></td>
                                                        <td style="text-align: center;">
                                                            <span class='badge bg-success' style="color: white; font-weight: bold;"><?php echo $row['percentage_']; ?> %</span>
                                                        </td>
                                                    </tr>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                                <tr>
                                                    <td style="text-align: center; font-weight: bold;">No Data Available</td>
                                                </tr>
                                            <?php
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

<?php
    include 'modals.php';
    include 'script.php';
?>