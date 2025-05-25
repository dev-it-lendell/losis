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
                        <h2>Monitor Endorsements</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Monitor Endorsements</li>
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
    											<p id="officialbisupportmonthlyendo" style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;"></p>
    										</div>
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
    											<h4 class="media-heading">Total Current Year Endorsements</h4>
    											<p style="font-size: 15px;"><?php echo $now->format('Y'); ?></p>
    											<p id="officialbisupportyearlyendo" style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;"></p>
    										</div>
    									</div>
    								</div>
    							</div>
    						</div>
                            <ul class="nav nav-tabs-new2 customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#supportjan" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;JAN</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportfeb" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;FEB</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportmar" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-files-stack"></i>&nbsp;&nbsp;MAR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportapr" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;APR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportmay" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;MAY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportjune" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;JUNE</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportjuly" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;JULY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportaug" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;AUG</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportsept" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;SEPT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportoct" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;OCT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportnov" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;NOV</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supportdec" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;DEC</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                            <div class="tab-content br-n pn">
                                <div id="supportjan" class="tab-pane p-3 active"> 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="jansupportbi"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo AS a LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE MONTH(a.endo_date) = '01' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.verifier_ = '".$_SESSION["user_id"]."' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

			                                                        // VERIFY STATUS //
			                                                        if ($row['verify_status'] == '0') {
			                                                            $endoverify = '<span class="badge badge-info" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">For-Checking</span>';
			                                                        } else if ($row['verify_status'] == '1') {
			                                                            $endoverify = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">Completed</span>';
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
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endoverify; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <a onclick="savesupmonitorbiviewendo();" href="view_checking_bi.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
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
                                <div  id="supportfeb" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="febsupportbi"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                        	<th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo AS a LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE MONTH(a.endo_date) = '02' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.verifier_ = '".$_SESSION["user_id"]."' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

			                                                        // VERIFY STATUS //
			                                                        if ($row['verify_status'] == '0') {
			                                                            $endoverify = '<span class="badge badge-info" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">For-Checking</span>';
			                                                        } else if ($row['verify_status'] == '1') {
			                                                            $endoverify = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">Completed</span>';
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
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endoverify; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <a onclick="savesupmonitorbiviewendo();" href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
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
                                <div  id="supportmar" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="marsupportbi"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                        	<th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo AS a LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE MONTH(a.endo_date) = '03' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.verifier_ = '".$_SESSION["user_id"]."' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

			                                                        // VERIFY STATUS //
			                                                        if ($row['verify_status'] == '0') {
			                                                            $endoverify = '<span class="badge badge-info" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">For-Checking</span>';
			                                                        } else if ($row['verify_status'] == '1') {
			                                                            $endoverify = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">Completed</span>';
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
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endoverify; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <a onclick="savesupmonitorbiviewendo();" href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
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
                                <div  id="supportapr" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="aprsupportbi"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo AS a LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE MONTH(a.endo_date) = '04' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.verifier_ = '".$_SESSION["user_id"]."' ORDER BY a.importance ASC";
                                                            $sql =
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

			                                                        // VERIFY STATUS //
			                                                        if ($row['verify_status'] == '0') {
			                                                            $endoverify = '<span class="badge badge-info" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">For-Checking</span>';
			                                                        } else if ($row['verify_status'] == '1') {
			                                                            $endoverify = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">Completed</span>';
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
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endoverify; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <a onclick="savesupmonitorbiviewendo();" href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
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
                                <div  id="supportmay" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="maysupportbi"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo AS a LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE MONTH(a.endo_date) = '05' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.verifier_ = '".$_SESSION["user_id"]."' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

	                                                        		// VERIFY STATUS //
			                                                        if ($row['verify_status'] == '0') {
			                                                            $endoverify = '<span class="badge badge-info" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">For-Checking</span>';
			                                                        } else if ($row['verify_status'] == '1') {
			                                                            $endoverify = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">Completed</span>';
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
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endoverify; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <a onclick="savesupmonitorbiviewendo();" href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
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
                                <div  id="supportjune" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="junesupportbi"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo AS a LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE MONTH(a.endo_date) = '06' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.verifier_ = '".$_SESSION["user_id"]."' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

	                                                        		// VERIFY STATUS //
			                                                        if ($row['verify_status'] == '0') {
			                                                            $endoverify = '<span class="badge badge-info" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">For-Checking</span>';
			                                                        } else if ($row['verify_status'] == '1') {
			                                                            $endoverify = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">Completed</span>';
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
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endoverify; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <a onclick="savesupmonitorbiviewendo();" href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
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
                                <div  id="supportjuly" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="julysupportbi"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo AS a LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE MONTH(a.endo_date) = '07' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.verifier_ = '".$_SESSION["user_id"]."' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

	                                                        		// VERIFY STATUS //
			                                                        if ($row['verify_status'] == '0') {
			                                                            $endoverify = '<span class="badge badge-info" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">For-Checking</span>';
			                                                        } else if ($row['verify_status'] == '1') {
			                                                            $endoverify = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">Completed</span>';
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
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endoverify; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <a onclick="savesupmonitorbiviewendo();" href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
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
                                <div  id="supportaug" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="augsupportbi"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo AS a LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE MONTH(a.endo_date) = '08' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.verifier_ = '".$_SESSION["user_id"]."' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

	                                                        		// VERIFY STATUS //
			                                                        if ($row['verify_status'] == '0') {
			                                                            $endoverify = '<span class="badge badge-info" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">For-Checking</span>';
			                                                        } else if ($row['verify_status'] == '1') {
			                                                            $endoverify = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">Completed</span>';
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
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endoverify; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <a onclick="savesupmonitorbiviewendo();" href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
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
                                <div  id="supportsept" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="septsupportbi"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo AS a LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE MONTH(a.endo_date) = '09' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.verifier_ = '".$_SESSION["user_id"]."' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

	                                                        		// VERIFY STATUS //
			                                                        if ($row['verify_status'] == '0') {
			                                                            $endoverify = '<span class="badge badge-info" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">For-Checking</span>';
			                                                        } else if ($row['verify_status'] == '1') {
			                                                            $endoverify = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">Completed</span>';
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
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endoverify; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <a href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
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
                                <div  id="supportoct" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="octsupportbi"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo AS a LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE MONTH(a.endo_date) = '10' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.verifier_ = '".$_SESSION["user_id"]."' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

	                                                        		// VERIFY STATUS //
			                                                        if ($row['verify_status'] == '0') {
			                                                            $endoverify = '<span class="badge badge-info" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">For-Checking</span>';
			                                                        } else if ($row['verify_status'] == '1') {
			                                                            $endoverify = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">Completed</span>';
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
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endoverify; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <a href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
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
                                <div  id="supportnov" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="novsupportbi"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo AS a LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE MONTH(a.endo_date) = '11' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.verifier_ = '".$_SESSION["user_id"]."' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

	                                                        		// VERIFY STATUS //
			                                                        if ($row['verify_status'] == '0') {
			                                                            $endoverify = '<span class="badge badge-info" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">For-Checking</span>';
			                                                        } else if ($row['verify_status'] == '1') {
			                                                            $endoverify = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">Completed</span>';
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
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endoverify; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <a href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
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
                                <div  id="supportdec" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="decsupportbi"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>DATE</th>
                                                            <th>NAME</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo AS a LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE MONTH(a.endo_date) = '12' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.verifier_ = '".$_SESSION["user_id"]."' ORDER BY a.importance ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $endoDate = $row['endo_date'];
                                                                    $newDateEndo = date("F j, Y", strtotime($endoDate));

	                                                        		// VERIFY STATUS //
			                                                        if ($row['verify_status'] == '0') {
			                                                            $endoverify = '<span class="badge badge-info" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">For-Checking</span>';
			                                                        } else if ($row['verify_status'] == '1') {
			                                                            $endoverify = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Verification Status">Completed</span>';
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
                                                                            <td><?php echo $endoimportant ?></td>
                                                                            <td><?php echo $newDateEndo ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $endoverify; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <a href="view_bi_endorsement.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
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