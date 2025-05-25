<?php
	include '../connect.php';

	if (isset($_SESSION['useremail']) && isset($_SESSION['userpass']) && isset($_SESSION['user_id'])) {
		$adminuser_id = $_SESSION['user_id'];
	} else {
		header("location: ../signin.php");
	}

	$sql = "SELECT a.user_id, CONCAT(a.user_id) AS operationsid, a.assigned_team_one, a.assigned_team_two, a.fname, a.mname, a.lname, a.suffix, a.contact_no, a.date_of_birth, a.user_age, a.gender_, a.full_address, a.latidude_, a.longitude_, a.region_, a.province_, a.citymun_, a.barangay_, a.street_, a.user_image, a.datetime_created, CONCAT(a.datetime_created) AS opscreated, b.operations_id, b.fname, b.mname, b.lname, b.suffix, b.position_, b.team_one, b.team_two, b.operations_type, b.datetime_added, c.team_no, c.team_name, d.user_id, d.useremail_, d.userpass_, d.usertype_, d.userstatus_, d.accountstatus_, d.messagestatus_, d.datetime_created FROM tbl_operations AS a LEFT JOIN operations_list AS b ON CONCAT(a.fname , ' ' , a.mname,  ' ' , a.lname , ' ' , a.suffix) = CONCAT(b.fname , ' ' , b.mname,  ' ' , b.lname , ' ' , b.suffix) LEFT JOIN team_list AS c ON b.team_one = c.team_no LEFT JOIN tbl_users AS d ON a.user_id = d.user_id WHERE a.user_id = '".$_SESSION["user_id"]."'";
	$query = $conn->query($sql);
	while ($row = mysqli_fetch_array($query)) {
		extract($row);
		$opsid = $row['operationsid'];
		$team_one = $row['assigned_team_one'];
		$team_two = $row['assigned_team_two'];
        $ops_name = $row['fname'].' '.$row['lname']. ' ' .$row['suffix'];
		$ops_fname = $row['fname'];
		$ops_mname = $row['mname'];
		$ops_lname = $row['lname'];
		$ops_suffix = $row['suffix'];
		$ops_contact = $row['contact_no'];
		$ops_dateofbirth = $row['date_of_birth'];
        $ops_newdateofbirth = date("F j, Y", strtotime($ops_dateofbirth));
		$ops_age = $row['user_age'];
		$ops_userage = $row['user_age']. ' years old';
		$ops_gender = $row['gender_'];
		$ops_fulladdress = $row['full_address'];
		$ops_userimage = $row['user_image'];
		$ops_datetimecreated = $row['opscreated'];
        $ops_newdatetimecreated = date('F d, Y - g:i A', strtotime($ops_datetimecreated));
		$ops_id = $row['operations_id'];
		$ops_position = $row['position_'];
		$ops_type = $row['operations_type'];
		$ops_teamname = $row['team_name'];
		$ops_useremail = $row['useremail_'];
		$ops_userpass = $row['userpass_'];
		$ops_usertype = $row['usertype_'];
		$ops_userstatus = $row['userstatus_'];
		$ops_accountstatus = $row['accountstatus_'];
		$ops_messagestatus = $row['messagestatus_'];
		if ($ops_messagestatus == '1') {
			$opsmsgstatus = "Active Now";
		} else if ($ops_messagestatus == '0') {
			$opsmsgstatus = "Offline Now";
		} else {
			$opsmsgstatus = "";
		}
	}
    $now = new DateTime();
    $year = date('Y');
	$month = date('M');

	$sql1 = "SELECT a.user_id, CONCAT(a.user_id) AS operationsid, a.assigned_team_one, a.assigned_team_two, a.fname, a.mname, a.lname, a.suffix, a.contact_no, a.date_of_birth, a.user_age, a.gender_, a.full_address, a.latidude_, a.longitude_, a.region_, a.province_, a.citymun_, a.barangay_, a.street_, a.user_image, a.datetime_created, b.specialist_id, b.fname, b.mname, b.lname, b.suffix, b.position_, b.team_one, b.team_two, b.datetime_added, c.operations_id, c.fname, c.mname, c.lname, c.suffix, c.position_, c.team_one, c.team_two, c.operations_type FROM tbl_operations AS a LEFT JOIN specialist_list AS b ON CONCAT(a.fname, ' ', a.mname,  ' ', a.lname,  ' ', a.suffix) = CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) LEFT JOIN operations_list AS c ON CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) = CONCAT(c.fname, ' ', c.mname,  ' ', c.lname,  ' ', c.suffix) WHERE a.user_id = '".$_SESSION["user_id"]."' AND c.operations_type = '1'";
	$query1 = $conn->query($sql1);
	while ($row1 = mysqli_fetch_array($query1)) {
		extract($row1);
		$speid = $row1['specialist_id'];
	}

	$sql2 = "SELECT a.user_id, CONCAT(a.user_id) AS operationsid, a.assigned_team_one, a.assigned_team_two, a.fname, a.mname, a.lname, a.suffix, a.contact_no, a.date_of_birth, a.user_age, a.gender_, a.full_address, a.latidude_, a.longitude_, a.region_, a.province_, a.citymun_, a.barangay_, a.street_, a.user_image, a.datetime_created, b.analyst_id, b.fname, b.mname, b.lname, b.suffix, b.position_, b.team_one, b.team_two, b.datetime_added, c.operations_id, c.fname, c.mname, c.lname, c.suffix, c.position_, c.team_one, c.team_two, c.operations_type FROM tbl_operations AS a LEFT JOIN analyst_list AS b ON CONCAT(a.fname, ' ', a.mname,  ' ', a.lname,  ' ', a.suffix) = CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) LEFT JOIN operations_list AS c ON CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) = CONCAT(c.fname, ' ', c.mname,  ' ', c.lname,  ' ', c.suffix) WHERE a.user_id = '".$_SESSION["user_id"]."' AND c.operations_type = '2'";
	$query2 = $conn->query($sql2);
	while ($row2 = mysqli_fetch_array($query2)) {
		extract($row2);
		$daid = $row2['analyst_id'];
	}

	$sql3 = "SELECT a.user_id, CONCAT(a.user_id) AS operationsid, a.assigned_team_one, a.assigned_team_two, a.fname, a.mname, a.lname, a.suffix, a.contact_no, a.date_of_birth, a.user_age, a.gender_, a.full_address, a.latidude_, a.longitude_, a.region_, a.province_, a.citymun_, a.barangay_, a.street_, a.user_image, a.datetime_created, b.field_id, b.fname, b.mname, b.lname, b.suffix, b.position_, b.team_one, b.team_two, b.datetime_added, c.operations_id, c.fname, c.mname, c.lname, c.suffix, c.position_, c.team_one, c.team_two, c.operations_type FROM tbl_operations AS a LEFT JOIN field_list AS b ON CONCAT(a.fname, ' ', a.mname,  ' ', a.lname,  ' ', a.suffix) = CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) LEFT JOIN operations_list AS c ON CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) = CONCAT(c.fname, ' ', c.mname,  ' ', c.lname,  ' ', c.suffix) WHERE a.user_id = '".$_SESSION["user_id"]."' AND c.operations_type = '3'";
	$query3 = $conn->query($sql3);
	while ($row3 = mysqli_fetch_array($query3)) {
		extract($row3);
		$fldid = $row3['field_id'];
	}
?>