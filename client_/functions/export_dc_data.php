<?php
    include '../../connect.php';
    include '../checking.php';

    if (isset($_POST['exportDC'])) {
		$dc_start_date = $_POST['dc_start_date'] ?? null;
		$dc_end_date = $_POST['dc_end_date'] ?? null;

		$sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS supervisorname, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, d.supervisor_ FROM tbl_endo_criminal AS a LEFT JOIN tbl_supervisor AS b ON a.endorsed_to = b.user_id LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id WHERE c.user_id = '". $_SESSION['user_id'] ."' AND a.endo_date BETWEEN '$dc_start_date' AND '$dc_end_date' ORDER BY id DESC";
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
	                    <th>ENDORSED BY</th>
	                </tr>
			  ';
			  while ($row = mysqli_fetch_array($result)) {
		            $endoDate = $row['endo_date'];
		            $newDateEndo = date("F j, Y", strtotime($endoDate));
		            $newDateTimeEndo = date('F d, Y - g:i A', strtotime($endoDate));
		            $TurnAroundDate = $row['turn_around_date'];
		            $newTurnAroundDate = date("F j, Y", strtotime($TurnAroundDate));
		            $endo_services = $row['endo_services'];
		            $closure_date = $row['closure_date'];
		            $initiation_date = $row['initiation_date'];

			        if ($closure_date == '') {
			            $closuredate = "N/A";
			        } else {
			            $closuredate = $row['closure_date'];
			        }

			        if ($initiation_date == '') {
			            $initiationdate = "N/A";
			        } else {
			            $initiationdate = $row['initiation_date'];
			        }

				   $output .= '
		                <tr>  
		                    <td>'.$row['company_name'].'</td>  
		                    <td>'.$row['site_'].'</td>  
		                    <td>'.$row['bi_id'].'</td>
		                    <td>'.$row['endo_desc'].'</td>
		                    <td>'.$row['applicantname'].'</td>
		                    <td>'.$row['birthdate'].'</td>
		                    <td>'.$row['account'].'</td>
		                    <td>'.$row['endo_date'].'</td>
		                    <td>'.$initiationdate.'</td>
		                    <td>'.$newTurnAroundDate.'</td>
		                    <td>'.$row['package_desc'].'</td>
		                    <td>'.$closuredate.'</td>
		                    <td>'.$row['clientname'].'</td>
		                </tr>
				   ';
			  }
			$output .= '</table>';
			header('Content-Type: application/xls');
			header('Content-Disposition: attachment; filename=clientdcendorsements.xls');
			echo $output;
			$sql = "INSERT INTO tbl_client_history_logs SET
						user_id = '". $_SESSION['user_id'] ."',
						x_module = 'Dashboard',
						x_module_action = 'Download Exported Data - (DC)'";
			$res = $conn->query($sql);                                
			if ($res) {
				$last_return_id = mysqli_insert_id($conn);
				if ($last_return_id) {
					$logsid = rand(10000000,99999999);
					$logsuserid = "LOG-".$logsid."-".$last_return_id;
					$logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
					$resquery = $conn->query($logsquery);
		        }
		    }
 		}
    }
?>