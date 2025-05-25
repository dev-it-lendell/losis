<?php
	include '../connect.php';

	if (isset($_SESSION['useremail']) && isset($_SESSION['userpass']) && isset($_SESSION['user_id'])) {
		$supportuser_id = $_SESSION['user_id'];
	} else {
		header("location: ../signin.php");
	}

	$sql = "SELECT a.user_id, CONCAT(a.user_id) AS supportid, a.assigned_team, a.fname, a.mname, a.lname, a.suffix, a.contact_no, a.date_of_birth, a.user_age, a.gender_, a.full_address, a.latidude_, a.longitude_, a.region_, a.province_, a.citymun_, a.barangay_, a.street_, a.user_image, a.datetime_created, CONCAT(a.datetime_created) AS supcreated, b.itsupp_id, b.fname, b.mname, b.lname, b.suffix, b.position_, b.team_one, b.team_two, b.datetime_added, c.team_no, c.team_name, d.user_id, d.useremail_, d.userpass_, d.usertype_, d.userstatus_, d.accountstatus_, d.messagestatus_, d.datetime_created FROM tbl_support AS a LEFT JOIN itsupport_list AS b ON CONCAT(a.fname , ' ' , a.mname,  ' ' , a.lname , ' ' , a.suffix) = CONCAT(b.fname , ' ' , b.mname,  ' ' , b.lname , ' ' , b.suffix) LEFT JOIN team_list AS c ON b.team_one = c.team_no LEFT JOIN tbl_users AS d ON a.user_id = d.user_id WHERE a.user_id = '".$_SESSION["user_id"]."'";
	$query = $conn->query($sql);
	while ($row = mysqli_fetch_array($query)) {
		extract($row);
		$supid = $row['supportid'];
		$team_ = $row['assigned_team'];
		$sup_fname = $row['fname'];
		$sup_mname = $row['mname'];
		$sup_lname = $row['lname'];
		$sup_suffix = $row['suffix'];
        $sup_name = $row['fname'].' '.$row['lname']. ' ' .$row['suffix'];
		$sup_contact = $row['contact_no'];
		$sup_dateofbirth = $row['date_of_birth'];
        $sup_newdateofbirth = date("F j, Y", strtotime($sup_dateofbirth));
		$sup_userage = $row['user_age']. ' years old';
		$sup_gender = $row['gender_'];
		$sup_fulladdress = $row['full_address'];
		$sup_userimage = $row['user_image'];
		$sup_datetimecreated = $row['supcreated'];
        $sup_newdatetimecreated = date('F d, Y - g:i A', strtotime($sup_datetimecreated));
		$sup_id = $row['itsupp_id'];
		$sup_position = $row['position_'];
		$sup_teamname = $row['team_name'];
		$sup_useremail = $row['useremail_'];
		$sup_userpass = $row['userpass_'];
		$sup_usertype = $row['usertype_'];
		$sup_userstatus = $row['userstatus_'];
		$sup_accountstatus = $row['accountstatus_'];
		$sup_messagestatus = $row['messagestatus_'];
		if ($sup_messagestatus == '1') {
			$supmsgstatus = "Active Now";
		} else if ($sup_messagestatus == '0') {
			$supmsgstatus = "Offline Now";
		} else {
			$supmsgstatus = "";
		}
	}
    $now = new DateTime();
    $year = date('Y');
	$month = date('M');
?>