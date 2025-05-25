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
                        <h2>Member Requests</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active">Member Requests</li>
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
                                            <h4 class="media-heading">Member Requests</h4>
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
	                                                    	<th>POC</th>
	                                                    	<th>OPS</th>
	                                                    	<th>REQUESTING TEAM</th>
	                                                    	<th>STATUS</th>
	                                                    	<th>DATE AND TIME CREATED</th>
	                                                    	<th style="text-align: center;">ACTIONS</th>
	                                                   	</tr>
													</thead>
	                            					<tbody>
	                            						<?php
	                            							$sql = "SELECT a.id, a.request_id, a.req_operations_id, a.req_operations_team, a.requesting_team, a.assigned_account, a.borrow_date_from, a.borrow_date_to, a.borrow_date_from, a.remarks_, a.request_status, a.poc_request_creator, a.poc_request_approver, a.poc_request_disapprover, a.deny_request_remarks, a.datetime_approved, a.datetime_disapproved, a.datetime_created, b.user_id, CONCAT(b.user_id) AS operationsid, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) AS operationsname, b.assigned_team_one, b.user_image, CONCAT(b.user_image) AS operationsimg, c.user_id, CONCAT(c.user_id) AS supervisorid, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname,  ' ', c.suffix) AS supervisorname, c.assigned_team, c.user_image, CONCAT(c.user_image) AS supervisorimg, d.client_id, d.client_name, d.acronym_, d.site_, e.team_no, e.team_name FROM tbl_supervisor_member_request AS a LEFT JOIN tbl_operations AS b ON a.req_operations_id = b.user_id LEFT JOIN tbl_supervisor AS c ON a.poc_request_creator = c.user_id LEFT JOIN client_list AS d ON a.assigned_account = d.client_id LEFT JOIN team_list AS e ON a.req_operations_team = e.team_no WHERE a.requesting_team = 'TM-000001' ORDER BY a.id DESC";
	                            							$result = $conn->query($sql);
	                            							if ($result->num_rows > 0) {
	                            								while ($row = $result->fetch_assoc()) {
																	$operationsid = $row['operationsid'];
																	$operationsimg = $row['operationsimg'];
	                                                                $operationsname = $row['operationsname'];
	                                                           	    $supervisorid = $row['supervisorid'];
	                                                                $supervisorimg = $row['supervisorimg'];
	                                                   	            $supervisorname = $row['supervisorname'];
	                                                                $datetime_created = $row['datetime_created'];
	                                                                $newDateTimeCreated = date("F j, Y - g:i A", strtotime($datetime_created));
	                                                                $datetime_approved = $row['datetime_approved'];
	                                                               	$newDateTimeApproved = date("F j, Y - g:i A", strtotime($datetime_approved));
	                                                                $datetime_disapproved = $row['datetime_disapproved'];
	                                                                $newDateTimeDisapproved = date("F j, Y - g:i A", strtotime($datetime_disapproved));
	                                                                $borrow_date_from = $row['borrow_date_from'];
	                                                                $newDateBorrowedFrom = date("F j, Y", strtotime($borrow_date_from));
	                                                                $borrow_date_to = $row['borrow_date_to'];
	                                                                $newDateBorrowedTo = date("F j, Y", strtotime($borrow_date_to));

																    if ($row['borrow_date_from'] == '') {
																    	$datetimeapproved_memreq = "N/A";
																    } else {
																        $datetimeapproved_memreq = $newDateTimeApproved;
															        }

																    if ($row['borrow_date_to'] == '') {
																    	$datetimedisapproved_memreq = "N/A";
																    } else {
																        $datetimedisapproved_memreq = $newDateTimeDisapproved;
															        }

																    if ($row['deny_request_remarks'] == '') {
																    	$denyremarks_memreq = "N/A";
																    } else {
																        $denyremarks_memreq = $row['deny_request_remarks'];
															        }

	                                                                // STATUS //
	                                                                if ($row['request_status'] == '0') {
																		$reqstatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
	                                                               	} else if ($row['request_status'] == '1') {
	                                                                   	$reqstatus = '<span class="badge badge-success" style="font-weight: bold;">Approved</span>';
	                                                                } else if ($row['request_status'] == '2') {
	                                                                    $reqstatus = '<span class="badge badge-danger" style="font-weight: bold;">Denied</span>';
	                                                                }  else {
	                                                                    $reqstatus = "";
	                                                                }

	                                                                $sql1 = "SELECT a.id, a.request_id, a.req_operations_id, a.req_operations_team, a.requesting_team, a.assigned_account, a.borrow_date_from, a.borrow_date_to, a.borrow_date_from, a.remarks_, a.request_status, a.poc_request_creator, a.poc_request_approver, a.poc_request_disapprover, a.deny_request_remarks, a.datetime_approved, a.datetime_disapproved, a.datetime_created, b.user_id, CONCAT(b.user_id) AS operationsid, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) AS operationsname, b.assigned_team_one, b.user_image, c.user_id, CONCAT(c.user_id) AS supervisorid, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname,  ' ', c.suffix) AS supervisorapprover, c.assigned_team, d.client_id, d.client_name, d.acronym_, d.site_, e.team_no, e.team_name FROM tbl_supervisor_member_request AS a LEFT JOIN tbl_operations AS b ON a.req_operations_id = b.user_id LEFT JOIN tbl_supervisor AS c ON a.poc_request_approver = c.user_id LEFT JOIN client_list AS d ON a.assigned_account = d.client_id LEFT JOIN team_list AS e ON a.req_operations_team = e.team_no WHERE a.requesting_team = 'TM-000001' ORDER BY a.id DESC";
			                                                        $result1 = $conn->query($sql1);
			                                                        while ($row1 = $result1->fetch_assoc()) {
																        if ($row1['supervisorapprover'] == '') {
																            $supervisorapprv = "N/A";
																        } else {
																            $supervisorapprv = $row1['supervisorapprover'];
																        }
			                                                        }

	                                                                $sql2 = "SELECT a.id, a.request_id, a.req_operations_id, a.req_operations_team, a.requesting_team, a.assigned_account, a.borrow_date_from, a.borrow_date_to, a.borrow_date_from, a.remarks_, a.request_status, a.poc_request_creator, a.poc_request_approver, a.poc_request_disapprover, a.deny_request_remarks, a.datetime_approved, a.datetime_disapproved, a.datetime_created, b.user_id, CONCAT(b.user_id) AS operationsid, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) AS operationsname, b.assigned_team_one, b.user_image, c.user_id, CONCAT(c.user_id) AS supervisorid, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname,  ' ', c.suffix) AS supervisordisapprover, c.assigned_team, d.client_id, d.client_name, d.acronym_, d.site_, e.team_no, e.team_name FROM tbl_supervisor_member_request AS a LEFT JOIN tbl_operations AS b ON a.req_operations_id = b.user_id LEFT JOIN tbl_supervisor AS c ON a.poc_request_disapprover = c.user_id LEFT JOIN client_list AS d ON a.assigned_account = d.client_id LEFT JOIN team_list AS e ON a.req_operations_team = e.team_no WHERE a.requesting_team = 'TM-000001' ORDER BY a.id DESC";
			                                                        $result2 = $conn->query($sql2);
			                                                        while ($row2 = $result2->fetch_assoc()) {
																        if ($row2['supervisordisapprover'] == '') {
																            $supervisordisapprv = "N/A";
																        } else {
																            $supervisordisapprv = $row2['supervisordisapprover'];
																        }
			                                                        }

			                                                        ?>
			                                                        	<tr>
			                                                           		<td style="width: 5%;">
	                                                                        	<?php
	                                                                            	echo '<div class="feeds-left"><img src="../profilepictures_/'.$supervisorid.'/'.$supervisorimg.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$supervisorname.'"></div>'
	                                                                           	?>
			                                                           		</td>
			                                                            	<td style="width: 5%;">
	                                                                            <?php
																					echo '<div class="feeds-left"><img src="../profilepictures_/'.$operationsid.'/'.$operationsimg.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$operationsname.'"></div>'
	                                                                            ?>
			                                                            	</td>
			                                                            	<td style="font-weight: bold;">TEAM <?php echo $row['team_name']; ?></td>
			                                                           		<td><?php echo $reqstatus; ?></td>
			                                                           		<td><?php echo $newDateTimeCreated; ?></td>
	                                                               	        <td style="text-align: center;">
	                                                                        	<button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Member Request" onclick="viewmemberrequest('<?php echo $operationsname; ?>', '<?php echo $newDateTimeCreated; ?>', '<?php echo $row['request_id']; ?>', 'TEAM <?php echo $row['team_name']; ?>', '<?php echo $row['client_name']; ?>', '<?php echo $newDateBorrowedFrom. ' to ' .$newDateBorrowedTo; ?>', '<?php echo $row['remarks_']; ?>', '<?php echo $supervisorname; ?>', '<?php echo $supervisorapprv; ?>', '<?php echo $supervisordisapprv; ?>', '<?php echo $denyremarks_memreq; ?> ', '<?php echo $datetimeapproved_memreq; ?>', '<?php echo $datetimedisapproved_memreq; ?>'); saveadmviewmemberequest();"><i class="fa fa-file-text-o"></i></button>
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
	                                                    	<th>POC</th>
	                                                    	<th>OPS</th>
	                                                    	<th>REQUESTING TEAM</th>
	                                                    	<th>STATUS</th>
	                                                    	<th>DATE AND TIME CREATED</th>
	                                                    	<th style="text-align: center;">ACTIONS</th>
	                                                   	</tr>
													</thead>
	                            					<tbody>
	                            						<?php
	                            							$sql = "SELECT a.id, a.request_id, a.req_operations_id, a.req_operations_team, a.requesting_team, a.assigned_account, a.borrow_date_from, a.borrow_date_to, a.borrow_date_from, a.remarks_, a.request_status, a.poc_request_creator, a.poc_request_approver, a.poc_request_disapprover, a.deny_request_remarks, a.datetime_approved, a.datetime_disapproved, a.datetime_created, b.user_id, CONCAT(b.user_id) AS operationsid, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) AS operationsname, b.assigned_team_one, b.user_image, CONCAT(b.user_image) AS operationsimg, c.user_id, CONCAT(c.user_id) AS supervisorid, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname,  ' ', c.suffix) AS supervisorname, c.assigned_team, c.user_image, CONCAT(c.user_image) AS supervisorimg, d.client_id, d.client_name, d.acronym_, d.site_, e.team_no, e.team_name FROM tbl_supervisor_member_request AS a LEFT JOIN tbl_operations AS b ON a.req_operations_id = b.user_id LEFT JOIN tbl_supervisor AS c ON a.poc_request_creator = c.user_id LEFT JOIN client_list AS d ON a.assigned_account = d.client_id LEFT JOIN team_list AS e ON a.req_operations_team = e.team_no WHERE a.requesting_team = 'TM-000002' ORDER BY a.id DESC";
	                            							$result = $conn->query($sql);
	                            							if ($result->num_rows > 0) {
	                            								while ($row = $result->fetch_assoc()) {
																	$operationsid = $row['operationsid'];
																	$operationsimg = $row['operationsimg'];
	                                                                $operationsname = $row['operationsname'];
	                                                           	    $supervisorid = $row['supervisorid'];
	                                                                $supervisorimg = $row['supervisorimg'];
	                                                   	            $supervisorname = $row['supervisorname'];
	                                                                $datetime_created = $row['datetime_created'];
	                                                                $newDateTimeCreated = date("F j, Y - g:i A", strtotime($datetime_created));
	                                                                $datetime_approved = $row['datetime_approved'];
	                                                               	$newDateTimeApproved = date("F j, Y - g:i A", strtotime($datetime_approved));
	                                                                $datetime_disapproved = $row['datetime_disapproved'];
	                                                                $newDateTimeDisapproved = date("F j, Y - g:i A", strtotime($datetime_disapproved));
	                                                                $borrow_date_from = $row['borrow_date_from'];
	                                                                $newDateBorrowedFrom = date("F j, Y", strtotime($borrow_date_from));
	                                                                $borrow_date_to = $row['borrow_date_to'];
	                                                                $newDateBorrowedTo = date("F j, Y", strtotime($borrow_date_to));

																    if ($row['borrow_date_from'] == '') {
																    	$datetimeapproved_memreq = "N/A";
																    } else {
																        $datetimeapproved_memreq = $newDateTimeApproved;
															        }

																    if ($row['borrow_date_to'] == '') {
																    	$datetimedisapproved_memreq = "N/A";
																    } else {
																        $datetimedisapproved_memreq = $newDateTimeDisapproved;
															        }

																    if ($row['deny_request_remarks'] == '') {
																    	$denyremarks_memreq = "N/A";
																    } else {
																        $denyremarks_memreq = $row['deny_request_remarks'];
															        }

	                                                                // STATUS //
	                                                                if ($row['request_status'] == '0') {
																		$reqstatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
	                                                               	} else if ($row['request_status'] == '1') {
	                                                                   	$reqstatus = '<span class="badge badge-success" style="font-weight: bold;">Approved</span>';
	                                                                } else if ($row['request_status'] == '2') {
	                                                                    $reqstatus = '<span class="badge badge-danger" style="font-weight: bold;">Denied</span>';
	                                                                }  else {
	                                                                    $reqstatus = "";
	                                                                }

	                                                                $sql1 = "SELECT a.id, a.request_id, a.req_operations_id, a.req_operations_team, a.requesting_team, a.assigned_account, a.borrow_date_from, a.borrow_date_to, a.borrow_date_from, a.remarks_, a.request_status, a.poc_request_creator, a.poc_request_approver, a.poc_request_disapprover, a.deny_request_remarks, a.datetime_approved, a.datetime_disapproved, a.datetime_created, b.user_id, CONCAT(b.user_id) AS operationsid, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) AS operationsname, b.assigned_team_one, b.user_image, c.user_id, CONCAT(c.user_id) AS supervisorid, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname,  ' ', c.suffix) AS supervisorapprover, c.assigned_team, d.client_id, d.client_name, d.acronym_, d.site_, e.team_no, e.team_name FROM tbl_supervisor_member_request AS a LEFT JOIN tbl_operations AS b ON a.req_operations_id = b.user_id LEFT JOIN tbl_supervisor AS c ON a.poc_request_approver = c.user_id LEFT JOIN client_list AS d ON a.assigned_account = d.client_id LEFT JOIN team_list AS e ON a.req_operations_team = e.team_no WHERE a.requesting_team = 'TM-000002' ORDER BY a.id DESC";
			                                                        $result1 = $conn->query($sql1);
			                                                        while ($row1 = $result1->fetch_assoc()) {
																        if ($row1['supervisorapprover'] == '') {
																            $supervisorapprv = "N/A";
																        } else {
																            $supervisorapprv = $row1['supervisorapprover'];
																        }
			                                                        }

	                                                                $sql2 = "SELECT a.id, a.request_id, a.req_operations_id, a.req_operations_team, a.requesting_team, a.assigned_account, a.borrow_date_from, a.borrow_date_to, a.borrow_date_from, a.remarks_, a.request_status, a.poc_request_creator, a.poc_request_approver, a.poc_request_disapprover, a.deny_request_remarks, a.datetime_approved, a.datetime_disapproved, a.datetime_created, b.user_id, CONCAT(b.user_id) AS operationsid, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) AS operationsname, b.assigned_team_one, b.user_image, c.user_id, CONCAT(c.user_id) AS supervisorid, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname,  ' ', c.suffix) AS supervisordisapprover, c.assigned_team, d.client_id, d.client_name, d.acronym_, d.site_, e.team_no, e.team_name FROM tbl_supervisor_member_request AS a LEFT JOIN tbl_operations AS b ON a.req_operations_id = b.user_id LEFT JOIN tbl_supervisor AS c ON a.poc_request_disapprover = c.user_id LEFT JOIN client_list AS d ON a.assigned_account = d.client_id LEFT JOIN team_list AS e ON a.req_operations_team = e.team_no WHERE a.requesting_team = 'TM-000002' ORDER BY a.id DESC";
			                                                        $result2 = $conn->query($sql2);
			                                                        while ($row2 = $result2->fetch_assoc()) {
																        if ($row2['supervisordisapprover'] == '') {
																            $supervisordisapprv = "N/A";
																        } else {
																            $supervisordisapprv = $row2['supervisordisapprover'];
																        }
			                                                        }

			                                                        ?>
			                                                        	<tr>
			                                                           		<td style="width: 5%;">
	                                                                        	<?php
	                                                                            	echo '<div class="feeds-left"><img src="../profilepictures_/'.$supervisorid.'/'.$supervisorimg.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$supervisorname.'"></div>'
	                                                                           	?>
			                                                           		</td>
			                                                            	<td style="width: 5%;">
	                                                                            <?php
																					echo '<div class="feeds-left"><img src="../profilepictures_/'.$operationsid.'/'.$operationsimg.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$operationsname.'"></div>'
	                                                                            ?>
			                                                            	</td>
			                                                            	<td style="font-weight: bold;">TEAM <?php echo $row['team_name']; ?></td>
			                                                           		<td><?php echo $reqstatus; ?></td>
			                                                           		<td><?php echo $newDateTimeCreated; ?></td>
	                                                               	        <td style="text-align: center;">
	                                                                        	<button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Member Request" onclick="viewmemberrequest('<?php echo $operationsname; ?>', '<?php echo $newDateTimeCreated; ?>', '<?php echo $row['request_id']; ?>', 'TEAM <?php echo $row['team_name']; ?>', '<?php echo $row['client_name']; ?>', '<?php echo $newDateBorrowedFrom. ' to ' .$newDateBorrowedTo; ?>', '<?php echo $row['remarks_']; ?>', '<?php echo $supervisorname; ?>', '<?php echo $supervisorapprv; ?>', '<?php echo $supervisordisapprv; ?>', '<?php echo $denyremarks_memreq; ?> ', '<?php echo $datetimeapproved_memreq; ?>', '<?php echo $datetimedisapproved_memreq; ?>'); saveadmviewmemberequest();"><i class="fa fa-file-text-o"></i></button>
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
	                                                    	<th>POC</th>
	                                                    	<th>OPS</th>
	                                                    	<th>REQUESTING TEAM</th>
	                                                    	<th>STATUS</th>
	                                                    	<th>DATE AND TIME CREATED</th>
	                                                    	<th style="text-align: center;">ACTIONS</th>
	                                                   	</tr>
													</thead>
	                            					<tbody>
	                            						<?php
	                            							$sql = "SELECT a.id, a.request_id, a.req_operations_id, a.req_operations_team, a.requesting_team, a.assigned_account, a.borrow_date_from, a.borrow_date_to, a.borrow_date_from, a.remarks_, a.request_status, a.poc_request_creator, a.poc_request_approver, a.poc_request_disapprover, a.deny_request_remarks, a.datetime_approved, a.datetime_disapproved, a.datetime_created, b.user_id, CONCAT(b.user_id) AS operationsid, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) AS operationsname, b.assigned_team_one, b.user_image, CONCAT(b.user_image) AS operationsimg, c.user_id, CONCAT(c.user_id) AS supervisorid, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname,  ' ', c.suffix) AS supervisorname, c.assigned_team, c.user_image, CONCAT(c.user_image) AS supervisorimg, d.client_id, d.client_name, d.acronym_, d.site_, e.team_no, e.team_name FROM tbl_supervisor_member_request AS a LEFT JOIN tbl_operations AS b ON a.req_operations_id = b.user_id LEFT JOIN tbl_supervisor AS c ON a.poc_request_creator = c.user_id LEFT JOIN client_list AS d ON a.assigned_account = d.client_id LEFT JOIN team_list AS e ON a.req_operations_team = e.team_no WHERE a.requesting_team = 'TM-000003' ORDER BY a.id DESC";
	                            							$result = $conn->query($sql);
	                            							if ($result->num_rows > 0) {
	                            								while ($row = $result->fetch_assoc()) {
																	$operationsid = $row['operationsid'];
																	$operationsimg = $row['operationsimg'];
	                                                                $operationsname = $row['operationsname'];
	                                                           	    $supervisorid = $row['supervisorid'];
	                                                                $supervisorimg = $row['supervisorimg'];
	                                                   	            $supervisorname = $row['supervisorname'];
	                                                                $datetime_created = $row['datetime_created'];
	                                                                $newDateTimeCreated = date("F j, Y - g:i A", strtotime($datetime_created));
	                                                                $datetime_approved = $row['datetime_approved'];
	                                                               	$newDateTimeApproved = date("F j, Y - g:i A", strtotime($datetime_approved));
	                                                                $datetime_disapproved = $row['datetime_disapproved'];
	                                                                $newDateTimeDisapproved = date("F j, Y - g:i A", strtotime($datetime_disapproved));
	                                                                $borrow_date_from = $row['borrow_date_from'];
	                                                                $newDateBorrowedFrom = date("F j, Y", strtotime($borrow_date_from));
	                                                                $borrow_date_to = $row['borrow_date_to'];
	                                                                $newDateBorrowedTo = date("F j, Y", strtotime($borrow_date_to));

																    if ($row['borrow_date_from'] == '') {
																    	$datetimeapproved_memreq = "N/A";
																    } else {
																        $datetimeapproved_memreq = $newDateTimeApproved;
															        }

																    if ($row['borrow_date_to'] == '') {
																    	$datetimedisapproved_memreq = "N/A";
																    } else {
																        $datetimedisapproved_memreq = $newDateTimeDisapproved;
															        }

																    if ($row['deny_request_remarks'] == '') {
																    	$denyremarks_memreq = "N/A";
																    } else {
																        $denyremarks_memreq = $row['deny_request_remarks'];
															        }

	                                                                // STATUS //
	                                                                if ($row['request_status'] == '0') {
																		$reqstatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
	                                                               	} else if ($row['request_status'] == '1') {
	                                                                   	$reqstatus = '<span class="badge badge-success" style="font-weight: bold;">Approved</span>';
	                                                                } else if ($row['request_status'] == '2') {
	                                                                    $reqstatus = '<span class="badge badge-danger" style="font-weight: bold;">Denied</span>';
	                                                                }  else {
	                                                                    $reqstatus = "";
	                                                                }

	                                                                $sql1 = "SELECT a.id, a.request_id, a.req_operations_id, a.req_operations_team, a.requesting_team, a.assigned_account, a.borrow_date_from, a.borrow_date_to, a.borrow_date_from, a.remarks_, a.request_status, a.poc_request_creator, a.poc_request_approver, a.poc_request_disapprover, a.deny_request_remarks, a.datetime_approved, a.datetime_disapproved, a.datetime_created, b.user_id, CONCAT(b.user_id) AS operationsid, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) AS operationsname, b.assigned_team_one, b.user_image, c.user_id, CONCAT(c.user_id) AS supervisorid, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname,  ' ', c.suffix) AS supervisorapprover, c.assigned_team, d.client_id, d.client_name, d.acronym_, d.site_, e.team_no, e.team_name FROM tbl_supervisor_member_request AS a LEFT JOIN tbl_operations AS b ON a.req_operations_id = b.user_id LEFT JOIN tbl_supervisor AS c ON a.poc_request_approver = c.user_id LEFT JOIN client_list AS d ON a.assigned_account = d.client_id LEFT JOIN team_list AS e ON a.req_operations_team = e.team_no WHERE a.requesting_team = 'TM-000003' ORDER BY a.id DESC";
			                                                        $result1 = $conn->query($sql1);
			                                                        while ($row1 = $result1->fetch_assoc()) {
																        if ($row1['supervisorapprover'] == '') {
																            $supervisorapprv = "N/A";
																        } else {
																            $supervisorapprv = $row1['supervisorapprover'];
																        }
			                                                        }

	                                                                $sql2 = "SELECT a.id, a.request_id, a.req_operations_id, a.req_operations_team, a.requesting_team, a.assigned_account, a.borrow_date_from, a.borrow_date_to, a.borrow_date_from, a.remarks_, a.request_status, a.poc_request_creator, a.poc_request_approver, a.poc_request_disapprover, a.deny_request_remarks, a.datetime_approved, a.datetime_disapproved, a.datetime_created, b.user_id, CONCAT(b.user_id) AS operationsid, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) AS operationsname, b.assigned_team_one, b.user_image, c.user_id, CONCAT(c.user_id) AS supervisorid, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname,  ' ', c.suffix) AS supervisordisapprover, c.assigned_team, d.client_id, d.client_name, d.acronym_, d.site_, e.team_no, e.team_name FROM tbl_supervisor_member_request AS a LEFT JOIN tbl_operations AS b ON a.req_operations_id = b.user_id LEFT JOIN tbl_supervisor AS c ON a.poc_request_disapprover = c.user_id LEFT JOIN client_list AS d ON a.assigned_account = d.client_id LEFT JOIN team_list AS e ON a.req_operations_team = e.team_no WHERE a.requesting_team = 'TM-000003' ORDER BY a.id DESC";
			                                                        $result2 = $conn->query($sql2);
			                                                        while ($row2 = $result2->fetch_assoc()) {
																        if ($row2['supervisordisapprover'] == '') {
																            $supervisordisapprv = "N/A";
																        } else {
																            $supervisordisapprv = $row2['supervisordisapprover'];
																        }
			                                                        }

			                                                        ?>
			                                                        	<tr>
			                                                           		<td style="width: 5%;">
	                                                                        	<?php
	                                                                            	echo '<div class="feeds-left"><img src="../profilepictures_/'.$supervisorid.'/'.$supervisorimg.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$supervisorname.'"></div>'
	                                                                           	?>
			                                                           		</td>
			                                                            	<td style="width: 5%;">
	                                                                            <?php
																					echo '<div class="feeds-left"><img src="../profilepictures_/'.$operationsid.'/'.$operationsimg.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$operationsname.'"></div>'
	                                                                            ?>
			                                                            	</td>
			                                                            	<td style="font-weight: bold;">TEAM <?php echo $row['team_name']; ?></td>
			                                                           		<td><?php echo $reqstatus; ?></td>
			                                                           		<td><?php echo $newDateTimeCreated; ?></td>
	                                                               	        <td style="text-align: center;">
	                                                                        	<button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Member Request" onclick="viewmemberrequest('<?php echo $operationsname; ?>', '<?php echo $newDateTimeCreated; ?>', '<?php echo $row['request_id']; ?>', 'TEAM <?php echo $row['team_name']; ?>', '<?php echo $row['client_name']; ?>', '<?php echo $newDateBorrowedFrom. ' to ' .$newDateBorrowedTo; ?>', '<?php echo $row['remarks_']; ?>', '<?php echo $supervisorname; ?>', '<?php echo $supervisorapprv; ?>', '<?php echo $supervisordisapprv; ?>', '<?php echo $denyremarks_memreq; ?> ', '<?php echo $datetimeapproved_memreq; ?>', '<?php echo $datetimedisapproved_memreq; ?>'); saveadmviewmemberequest();"><i class="fa fa-file-text-o"></i></button>
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
	                                                    	<th>POC</th>
	                                                    	<th>OPS</th>
	                                                    	<th>REQUESTING TEAM</th>
	                                                    	<th>STATUS</th>
	                                                    	<th>DATE AND TIME CREATED</th>
	                                                    	<th style="text-align: center;">ACTIONS</th>
	                                                   	</tr>
													</thead>
	                            					<tbody>
	                            						<?php
	                            							$sql = "SELECT a.id, a.request_id, a.req_operations_id, a.req_operations_team, a.requesting_team, a.assigned_account, a.borrow_date_from, a.borrow_date_to, a.borrow_date_from, a.remarks_, a.request_status, a.poc_request_creator, a.poc_request_approver, a.poc_request_disapprover, a.deny_request_remarks, a.datetime_approved, a.datetime_disapproved, a.datetime_created, b.user_id, CONCAT(b.user_id) AS operationsid, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) AS operationsname, b.assigned_team_one, b.user_image, CONCAT(b.user_image) AS operationsimg, c.user_id, CONCAT(c.user_id) AS supervisorid, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname,  ' ', c.suffix) AS supervisorname, c.assigned_team, c.user_image, CONCAT(c.user_image) AS supervisorimg, d.client_id, d.client_name, d.acronym_, d.site_, e.team_no, e.team_name FROM tbl_supervisor_member_request AS a LEFT JOIN tbl_operations AS b ON a.req_operations_id = b.user_id LEFT JOIN tbl_supervisor AS c ON a.poc_request_creator = c.user_id LEFT JOIN client_list AS d ON a.assigned_account = d.client_id LEFT JOIN team_list AS e ON a.req_operations_team = e.team_no WHERE a.requesting_team = 'TM-000004' ORDER BY a.id DESC";
	                            							$result = $conn->query($sql);
	                            							if ($result->num_rows > 0) {
	                            								while ($row = $result->fetch_assoc()) {
																	$operationsid = $row['operationsid'];
																	$operationsimg = $row['operationsimg'];
	                                                                $operationsname = $row['operationsname'];
	                                                           	    $supervisorid = $row['supervisorid'];
	                                                                $supervisorimg = $row['supervisorimg'];
	                                                   	            $supervisorname = $row['supervisorname'];
	                                                                $datetime_created = $row['datetime_created'];
	                                                                $newDateTimeCreated = date("F j, Y - g:i A", strtotime($datetime_created));
	                                                                $datetime_approved = $row['datetime_approved'];
	                                                               	$newDateTimeApproved = date("F j, Y - g:i A", strtotime($datetime_approved));
	                                                                $datetime_disapproved = $row['datetime_disapproved'];
	                                                                $newDateTimeDisapproved = date("F j, Y - g:i A", strtotime($datetime_disapproved));
	                                                                $borrow_date_from = $row['borrow_date_from'];
	                                                                $newDateBorrowedFrom = date("F j, Y", strtotime($borrow_date_from));
	                                                                $borrow_date_to = $row['borrow_date_to'];
	                                                                $newDateBorrowedTo = date("F j, Y", strtotime($borrow_date_to));

																    if ($row['borrow_date_from'] == '') {
																    	$datetimeapproved_memreq = "N/A";
																    } else {
																        $datetimeapproved_memreq = $newDateTimeApproved;
															        }

																    if ($row['borrow_date_to'] == '') {
																    	$datetimedisapproved_memreq = "N/A";
																    } else {
																        $datetimedisapproved_memreq = $newDateTimeDisapproved;
															        }

																    if ($row['deny_request_remarks'] == '') {
																    	$denyremarks_memreq = "N/A";
																    } else {
																        $denyremarks_memreq = $row['deny_request_remarks'];
															        }

	                                                                // STATUS //
	                                                                if ($row['request_status'] == '0') {
																		$reqstatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
	                                                               	} else if ($row['request_status'] == '1') {
	                                                                   	$reqstatus = '<span class="badge badge-success" style="font-weight: bold;">Approved</span>';
	                                                                } else if ($row['request_status'] == '2') {
	                                                                    $reqstatus = '<span class="badge badge-danger" style="font-weight: bold;">Denied</span>';
	                                                                }  else {
	                                                                    $reqstatus = "";
	                                                                }

	                                                                $sql1 = "SELECT a.id, a.request_id, a.req_operations_id, a.req_operations_team, a.requesting_team, a.assigned_account, a.borrow_date_from, a.borrow_date_to, a.borrow_date_from, a.remarks_, a.request_status, a.poc_request_creator, a.poc_request_approver, a.poc_request_disapprover, a.deny_request_remarks, a.datetime_approved, a.datetime_disapproved, a.datetime_created, b.user_id, CONCAT(b.user_id) AS operationsid, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) AS operationsname, b.assigned_team_one, b.user_image, c.user_id, CONCAT(c.user_id) AS supervisorid, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname,  ' ', c.suffix) AS supervisorapprover, c.assigned_team, d.client_id, d.client_name, d.acronym_, d.site_, e.team_no, e.team_name FROM tbl_supervisor_member_request AS a LEFT JOIN tbl_operations AS b ON a.req_operations_id = b.user_id LEFT JOIN tbl_supervisor AS c ON a.poc_request_approver = c.user_id LEFT JOIN client_list AS d ON a.assigned_account = d.client_id LEFT JOIN team_list AS e ON a.req_operations_team = e.team_no WHERE a.requesting_team = 'TM-000004' ORDER BY a.id DESC";
			                                                        $result1 = $conn->query($sql1);
			                                                        while ($row1 = $result1->fetch_assoc()) {
																        if ($row1['supervisorapprover'] == '') {
																            $supervisorapprv = "N/A";
																        } else {
																            $supervisorapprv = $row1['supervisorapprover'];
																        }
			                                                        }

	                                                                $sql2 = "SELECT a.id, a.request_id, a.req_operations_id, a.req_operations_team, a.requesting_team, a.assigned_account, a.borrow_date_from, a.borrow_date_to, a.borrow_date_from, a.remarks_, a.request_status, a.poc_request_creator, a.poc_request_approver, a.poc_request_disapprover, a.deny_request_remarks, a.datetime_approved, a.datetime_disapproved, a.datetime_created, b.user_id, CONCAT(b.user_id) AS operationsid, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) AS operationsname, b.assigned_team_one, b.user_image, c.user_id, CONCAT(c.user_id) AS supervisorid, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname,  ' ', c.suffix) AS supervisordisapprover, c.assigned_team, d.client_id, d.client_name, d.acronym_, d.site_, e.team_no, e.team_name FROM tbl_supervisor_member_request AS a LEFT JOIN tbl_operations AS b ON a.req_operations_id = b.user_id LEFT JOIN tbl_supervisor AS c ON a.poc_request_disapprover = c.user_id LEFT JOIN client_list AS d ON a.assigned_account = d.client_id LEFT JOIN team_list AS e ON a.req_operations_team = e.team_no WHERE a.requesting_team = 'TM-000004' ORDER BY a.id DESC";
			                                                        $result2 = $conn->query($sql2);
			                                                        while ($row2 = $result2->fetch_assoc()) {
																        if ($row2['supervisordisapprover'] == '') {
																            $supervisordisapprv = "N/A";
																        } else {
																            $supervisordisapprv = $row2['supervisordisapprover'];
																        }
			                                                        }

			                                                        ?>
			                                                        	<tr>
			                                                           		<td style="width: 5%;">
	                                                                        	<?php
	                                                                            	echo '<div class="feeds-left"><img src="../profilepictures_/'.$supervisorid.'/'.$supervisorimg.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$supervisorname.'"></div>'
	                                                                           	?>
			                                                           		</td>
			                                                            	<td style="width: 5%;">
	                                                                            <?php
																					echo '<div class="feeds-left"><img src="../profilepictures_/'.$operationsid.'/'.$operationsimg.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$operationsname.'"></div>'
	                                                                            ?>
			                                                            	</td>
			                                                            	<td style="font-weight: bold;">TEAM <?php echo $row['team_name']; ?></td>
			                                                           		<td><?php echo $reqstatus; ?></td>
			                                                           		<td><?php echo $newDateTimeCreated; ?></td>
	                                                               	        <td style="text-align: center;">
	                                                                        	<button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Member Request" onclick="viewmemberrequest('<?php echo $operationsname; ?>', '<?php echo $newDateTimeCreated; ?>', '<?php echo $row['request_id']; ?>', 'TEAM <?php echo $row['team_name']; ?>', '<?php echo $row['client_name']; ?>', '<?php echo $newDateBorrowedFrom. ' to ' .$newDateBorrowedTo; ?>', '<?php echo $row['remarks_']; ?>', '<?php echo $supervisorname; ?>', '<?php echo $supervisorapprv; ?>', '<?php echo $supervisordisapprv; ?>', '<?php echo $denyremarks_memreq; ?> ', '<?php echo $datetimeapproved_memreq; ?>', '<?php echo $datetimedisapproved_memreq; ?>'); saveadmviewmemberequest();"><i class="fa fa-file-text-o"></i></button>
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