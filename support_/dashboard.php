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
                        <a href="export_dashboard.php" class="btn btn-outline-success" style="float: right;"><i class="fa fa-download"></i>&nbsp;Export Data</a>
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
                                        <div class="icon"><i class="fa fa-ticket"></i></div>
                                        <div class="content">
                                            <div class="text mb-2 text-uppercase"><?php echo $now->format('F Y'); ?></div>
                                            <h4 class="number mb-0" id="total_ticket"></h4>
                                            <small class="text-muted">Total Tickets</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="body">
                                        <div class="icon"><i class="fa fa-ticket"></i></div>
                                        <div class="content">
                                            <div class="text mb-2 text-uppercase">
                                               <?php
                                                    $new_date = date('F Y', strtotime('-1 month'));
                                                    echo $new_date;
                                                ?>
                                            </div>
                                            <h4 class="number mb-0" id="prevtotal_ticket"></h4>
                                            <small class="text-muted">Total Tickets</small>
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
                                            <h4 class="number mb-0" id="pending_ticket"></h4>
                                            <small class="text-muted">Pending Tickets</small>
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
                                            <h4 class="number mb-0" id="prevpending_ticket"></h4>
                                            <small class="text-muted">Pending Tickets</small>
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
                                            <h4 class="number mb-0" id="onprocess_ticket"></h4>
                                            <small class="text-muted">On-Process Tickets</small>
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
                                            <h4 class="number mb-0" id="prevonprocess_ticket"></h4>
                                            <small class="text-muted">On-Process Tickets</small>
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
                                            <h4 class="number mb-0" id="completed_ticket"></h4>
                                            <small class="text-muted">Completed Tickets</small>
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
                                            <h4 class="number mb-0" id="prevcompleted_ticket"></h4>
                                            <small class="text-muted">Completed Tickets</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
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
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>IT Department <br><p style="font-weight: bold; font-size: 11px;">Team <?php echo $sup_teamname; ?></p></h6>
                                </div>
                            </div>
                        </div>
                        <div class="body" style="margin-top: -35px;">
                            <ul class="list-unstyled feeds_widget">
                                <div id="itdept_list"></div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="header">
                           <div class="row">
                                <div class="col-md-12">
                                    <h6>Verification Checking <br><p style="font-weight: bold; font-size: 13px;">Background Investigation - <?php echo $now->format('F Y'); ?></p></h6>
                                </div>
                            </div>
                        </div>                    	
                        <div class="body">
                            <table class="table mb-0">
                                <tbody>
                                    <?php
                                        $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.verify_status, b.verifier_, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname, ' ', c.suffix) AS supportname FROM tbl_endo AS a LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_support AS c ON b.verifier_ = c.user_id WHERE MONTH(b.datetime_added) = MONTH(NOW()) AND YEAR(b.datetime_added) = YEAR(NOW()) ORDER BY b.id ASC LIMIT 5";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                // ENDORSEMENT STATUS //
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

                                                // VERIFY STATUS //
                                                if ($row['verify_status'] == '0') {
                                                    $endoverify = '<div class="feeds-left"><img src="../images/icons/for_checking.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="For-Checking"></div>';
                                                } else if ($row['verify_status'] == '1') {
                                                    $endoverify = '<div class="feeds-left"><img src="../images/icons/completed.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Completed"></div>';
                                                } else {
                                                    $endoverify = "";
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
                                                        <td style="text-align: center;"><?php echo $endoverify; ?></td>
                                                        <td style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="<?php echo $row['applicantname']; ?>"><?php echo $row['endo_code']; ?></td>
                                                        <td style="text-align: center;"><?php echo $endostatus; ?></td>
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
                                    <h6>Verification Checking <br><p style="font-weight: bold; font-size: 13px;">Database Check - <?php echo $now->format('F Y'); ?></p></h6>
                                </div>
                            </div>
                        </div>                    	
                        <div class="body">
                            <table class="table mb-0">
                                <tbody>
                                    <?php
                                        $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.id, b.endo_code, b.verify_status, b.verifier_, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname, ' ', c.suffix) AS supportname FROM tbl_endo_criminal AS a LEFT JOIN tbl_endo_support_dc AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_support AS c ON b.verifier_ = c.user_id WHERE MONTH(b.datetime_added) = MONTH(NOW()) AND YEAR(b.datetime_added) = YEAR(NOW()) ORDER BY b.id ASC LIMIT 5";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                // ENDORSEMENT STATUS //
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

                                                // VERIFY STATUS //
                                                if ($row['verify_status'] == '0') {
                                                    $endoverify = '<div class="feeds-left"><img src="../images/icons/for_checking.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="For-Checking"></div>';
                                                } else if ($row['verify_status'] == '1') {
                                                    $endoverify = '<div class="feeds-left"><img src="../images/icons/completed.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Completed"></div>';
                                                } else {
                                                    $endoverify = "";
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
                                                        <td style="text-align: center;"><?php echo $endoverify; ?></td>
                                                        <td style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="<?php echo $row['applicantname']; ?>"><?php echo $row['endo_code']; ?></td>
                                                        <td style="text-align: center;"><?php echo $endostatus; ?></td>
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