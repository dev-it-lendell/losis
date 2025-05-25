<?php
    include '../../connect.php';
    include '../checking.php';

    if (isset($_POST['exportMonthlyTarget'])) {
		$teamlist_official = $_POST['teamlist_official'] ?? null;

		if ($teamlist_official == 'TM-000001') {
			$target_start_date = $_POST['target_start_date'] ?? null;
			$target_end_date = $_POST['target_end_date'] ?? null;

			$sql = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_endo, b.actual_billing FROM team_list AS a LEFT JOIN operations_team_psalms AS b ON a.team_no = b.team_code WHERE b.actual_endo AND b.actual_billing IS NOT NULL AND b.assigned_month BETWEEN '$target_start_date' AND '$target_end_date'";
	 		$result = mysqli_query($conn, $sql);
	 		if (mysqli_num_rows($result) > 0) {
				  $output .= '
				   <table class="table" bordered="1">  
		                <tr>  
		                    <th>TEAM NAME</th>
		                    <th>ASSIGNED MONTH</th>
		                    <th>ENDORSEMENT GOAL</th>
		                    <th>BILLING GOAL</th>
		                    <th>ACTUAL ENDORSEMENTS</th>
		                    <th>ACTUAL BILLING</th>
		                </tr>
				  ';
				  while ($row = mysqli_fetch_array($result)) {
			            $assigned_month = $row['assigned_month'];
			            $newassignedmonth = date("F Y", strtotime($assigned_month));

					   $output .= '
			                <tr>  
			                    <td>'.$row['team_name'].'</td>  
			                    <td>'.$newassignedmonth.'</td>  
			                    <td>'.$row['endo_goal'].'</td>
			                    <td>'.$row['billing_goal'].'</td>
			                    <td>'.$row['actual_endo'].'</td>
			                    <td>'.$row['actual_billing'].'</td>
			                </tr>
					   ';
				  }
				  $output .= '</table>';
				  header('Content-Type: application/xls');
				  header('Content-Disposition: attachment; filename=psalmsmonthlytarget.xls');
				  echo $output;
	 		}
		} else if ($teamlist_official == 'TM-000002') {
			$target_start_date = $_POST['target_start_date'] ?? null;
			$target_end_date = $_POST['target_end_date'] ?? null;

			$sql = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_endo, b.actual_billing FROM team_list AS a LEFT JOIN operations_team_mark AS b ON a.team_no = b.team_code WHERE b.actual_endo AND b.actual_billing IS NOT NULL AND b.assigned_month BETWEEN '$target_start_date' AND '$target_end_date'";
	 		$result = mysqli_query($conn, $sql);
	 		if (mysqli_num_rows($result) > 0) {
				  $output .= '
				   <table class="table" bordered="1">  
		                <tr>  
		                    <th>TEAM NAME</th>
		                    <th>ASSIGNED MONTH</th>
		                    <th>ENDORSEMENT GOAL</th>
		                    <th>BILLING GOAL</th>
		                    <th>ACTUAL ENDORSEMENTS</th>
		                    <th>ACTUAL BILLING</th>
		                </tr>
				  ';
				  while ($row = mysqli_fetch_array($result)) {
			            $assigned_month = $row['assigned_month'];
			            $newassignedmonth = date("F Y", strtotime($assigned_month));

					   $output .= '
			                <tr>  
			                    <td>'.$row['team_name'].'</td>  
			                    <td>'.$newassignedmonth.'</td>  
			                    <td>'.$row['endo_goal'].'</td>
			                    <td>'.$row['billing_goal'].'</td>
			                    <td>'.$row['actual_endo'].'</td>
			                    <td>'.$row['actual_billing'].'</td>
			                </tr>
					   ';
				  }
				  $output .= '</table>';
				  header('Content-Type: application/xls');
				  header('Content-Disposition: attachment; filename=markmonthlytarget.xls');
				  echo $output;
	 		}
		} else if ($teamlist_official == 'TM-000003') {
			$target_start_date = $_POST['target_start_date'] ?? null;
			$target_end_date = $_POST['target_end_date'] ?? null;

			$sql = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_endo, b.actual_billing FROM team_list AS a LEFT JOIN operations_team_corinthians AS b ON a.team_no = b.team_code WHERE b.actual_endo AND b.actual_billing IS NOT NULL AND b.assigned_month BETWEEN '$target_start_date' AND '$target_end_date'";
	 		$result = mysqli_query($conn, $sql);
	 		if (mysqli_num_rows($result) > 0) {
				  $output .= '
				   <table class="table" bordered="1">  
		                <tr>  
		                    <th>TEAM NAME</th>
		                    <th>ASSIGNED MONTH</th>
		                    <th>ENDORSEMENT GOAL</th>
		                    <th>BILLING GOAL</th>
		                    <th>ACTUAL ENDORSEMENTS</th>
		                    <th>ACTUAL BILLING</th>
		                </tr>
				  ';
				  while ($row = mysqli_fetch_array($result)) {
			            $assigned_month = $row['assigned_month'];
			            $newassignedmonth = date("F Y", strtotime($assigned_month));

					   $output .= '
			                <tr>  
			                    <td>'.$row['team_name'].'</td>  
			                    <td>'.$newassignedmonth.'</td>  
			                    <td>'.$row['endo_goal'].'</td>
			                    <td>'.$row['billing_goal'].'</td>
			                    <td>'.$row['actual_endo'].'</td>
			                    <td>'.$row['actual_billing'].'</td>
			                </tr>
					   ';
				  }
				  $output .= '</table>';
				  header('Content-Type: application/xls');
				  header('Content-Disposition: attachment; filename=corinthiansmonthlytarget.xls');
				  echo $output;
	 		}
		} else if ($teamlist_official == 'TM-000004') {
			$target_start_date = $_POST['target_start_date'] ?? null;
			$target_end_date = $_POST['target_end_date'] ?? null;

			$sql = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_endo, b.actual_billing FROM team_list AS a LEFT JOIN operations_team_ecclesiastes AS b ON a.team_no = b.team_code WHERE b.actual_endo AND b.actual_billing IS NOT NULL AND b.assigned_month BETWEEN '$target_start_date' AND '$target_end_date'";
	 		$result = mysqli_query($conn, $sql);
	 		if (mysqli_num_rows($result) > 0) {
				  $output .= '
				   <table class="table" bordered="1">  
		                <tr>  
		                    <th>TEAM NAME</th>
		                    <th>ASSIGNED MONTH</th>
		                    <th>ENDORSEMENT GOAL</th>
		                    <th>BILLING GOAL</th>
		                    <th>ACTUAL ENDORSEMENTS</th>
		                    <th>ACTUAL BILLING</th>
		                </tr>
				  ';
				  while ($row = mysqli_fetch_array($result)) {
			            $assigned_month = $row['assigned_month'];
			            $newassignedmonth = date("F Y", strtotime($assigned_month));

					   $output .= '
			                <tr>  
			                    <td>'.$row['team_name'].'</td>  
			                    <td>'.$newassignedmonth.'</td>  
			                    <td>'.$row['endo_goal'].'</td>
			                    <td>'.$row['billing_goal'].'</td>
			                    <td>'.$row['actual_endo'].'</td>
			                    <td>'.$row['actual_billing'].'</td>
			                </tr>
					   ';
				  }
				  $output .= '</table>';
				  header('Content-Type: application/xls');
				  header('Content-Disposition: attachment; filename=ecclesiastesmonthlytarget.xls');
				  echo $output;
	 		}
		} else {
			echo "";
		}
    }
?>