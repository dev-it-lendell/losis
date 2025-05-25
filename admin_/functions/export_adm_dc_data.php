<?php
    include '../../connect.php';
    include '../checking.php';

    if (isset($_POST['exportadmDC'])) {
		$admdc_start_date = $_POST['admdc_start_date'] ?? null;
		$admdc_end_date = $_POST['admdc_end_date'] ?? null;

		$sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_supervisor, b.assigned_support, b.assigned_analyst, b.assigned_client, b.percentage_, c.client_id, c.client_name, c.acronym_, c.site_, c.team_, d.team_no, d.team_name, e.user_id, CONCAT(e.fname, ' ', e.mname,  ' ', e.lname, ' ', e.suffix) AS clientname, f.user_id, CONCAT(f.fname, ' ', f.mname,  ' ', f.lname, ' ', f.suffix) AS supervisorname, g.user_id, CONCAT(g.fname, ' ', g.mname,  ' ', g.lname, ' ', g.suffix) AS supportname, h.user_id, CONCAT(h.fname, ' ', h.mname,  ' ', h.lname, ' ', h.suffix) AS operationsdaname FROM tbl_endo_criminal AS a LEFT JOIN tbl_endorsement_dc_process AS b ON a.endo_code = b.endo_code LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN team_list AS d ON c.team_ = d.team_no LEFT JOIN tbl_client AS e ON b.assigned_client = e.user_id LEFT JOIN tbl_supervisor AS f ON b.assigned_supervisor = f.user_id LEFT JOIN tbl_support AS g ON b.assigned_support = g.user_id LEFT JOIN tbl_operations AS h ON b.assigned_analyst = h.user_id WHERE a.endo_date BETWEEN '$admdc_start_date' AND '$admdc_end_date' ORDER BY id DESC";
 		$result = mysqli_query($conn, $sql);
 		if (mysqli_num_rows($result) > 0) {
			  $output .= '
			   <table class="table" bordered="1">  
	                <tr>  
	                    <th>ENTIRY</th>
	                    <th>SITE</th>
	                    <th>BI ID NUMBER</th>
	                    <th>BI BATCH</th>
	                    <th>APPLICANT NAME</th>
	                    <th>DATE OF BIRTH</th>
	                    <th>ACCOUNT</th>
	                    <th>DATE ENDORSED TO VENDOR</th>
	                    <th>INITIATION DATE</th>
	                    <th>DUE DATE</th>
	                    <th>PACKAGE</th>
	                    <th>DATE SUBMITTED TO CLIENT</th>
	                    <th>ASSIGNED CLIENT</th>
	                    <th>ASSIGNED SUPEVISOR</th>
	                    <th>ASSIGNED SUPPORT</th>
	                    <th>ASSIGNED DATA ANALYST</th>
	                    <th>PERCENTAGE</th>
	                </tr>
			  ';
			  while ($row = mysqli_fetch_array($result)) {
					$company_name = $row['company_name'] ?? null;
					$site_ = $row['site_'] ?? null;
					$bi_id = $row['bi_id'] ?? null;
					$endo_desc = $row['endo_desc'] ?? null;
					$applicantname = $row['applicantname'] ?? null;
		            $birthdate = $row['birthdate'] ?? null;
		            $newDateBirth = date("F j, Y", strtotime($birthdate)) ?? null;
					$account = $row['account'] ?? null;
		            $endo_date = $row['endo_date'] ?? null;
		            $newDateEndo = date("F j, Y", strtotime($endo_date)) ?? null;
		            $initiation_date = $row['initiation_date'] ?? null;
		            $newDateInitiation = date("F j, Y", strtotime($initiation_date)) ?? null;
		            $turn_around_date = $row['turn_around_date'] ?? null;
		            $newDateTurnAround = date("F j, Y", strtotime($turn_around_date)) ?? null;
		            $package_desc = $row['package_desc'] ?? null;
		            $closure_date = $row['closure_date'] ?? null;
		            $newDateClosure = date("F j, Y", strtotime($closure_date)) ?? null;
		            $clientname = $row['clientname'] ?? null;
		            $supervisorname = $row['supervisorname'] ?? null;
		            $supportname = $row['supportname'] ?? null;
		            $operationsdaname = $row['operationsdaname'] ?? null;
		            $percentage_ = $row['percentage_'] ?? null;

			        if ($closure_date == '') {
			            $newclosuredate = "N/A";
			        } else {
			            $newclosuredate = date("F j, Y", strtotime($closure_date)) ?? null;
			        }

			        if ($initiation_date == '') {
			            $newinitiationdate = "N/A";
			        } else {
			            $newinitiationdate = date("F j, Y", strtotime($initiation_date)) ?? null;
			        }

				   $output .= '
		                <tr>  
		                    <td>'.$company_name.'</td>  
		                    <td>'.$site_.'</td>  
		                    <td>'.$bi_id.'</td>
		                    <td>'.$endo_desc.'</td>
		                    <td>'.$applicantname.'</td>
		                    <td>'.$newDateBirth.'</td>
		                    <td>'.$account.'</td>
		                    <td>'.$newDateEndo.'</td>
		                    <td>'.$newinitiationdate.'</td>
		                    <td>'.$newTurnAroundDate.'</td>
		                    <td>'.$package_desc.'</td>
		                    <td>'.$newclosuredate.'</td>
		                    <td>'.$clientname.'</td>
		                    <td>'.$supervisorname.'</td>
		                    <td>'.$supportname.'</td>
		                    <td>'.$operationsdaname.'</td>
		                    <td>'.$percentage_.' %</td>
		                </tr>
				   ';
			  }
			$output .= '</table>';
			header('Content-Type: application/xls');
			header('Content-Disposition: attachment; filename=admindcendorsements.xls');
			echo $output;
			$sql = "INSERT INTO tbl_admin_history_logs SET
						user_id = '". $_SESSION['user_id'] ."',
						x_module = 'Dashboard',
						x_module_action = 'Download Exported Data - (DC)'";
			$res = $conn->query($sql);                                
			if ($res) {
				$last_return_id = mysqli_insert_id($conn);
				if ($last_return_id) {
					$logsid = rand(10000000,99999999);
					$logsuserid = "LOG-".$logsid."-".$last_return_id;
					$logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
					$resquery = $conn->query($logsquery);
		        }
		    }
 		}
    }
?>