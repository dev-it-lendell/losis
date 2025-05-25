<?php
	include '../connect.php';

	if (isset($_SESSION['useremail']) && isset($_SESSION['userpass']) && isset($_SESSION['user_id'])) {
		$adminuser_id = $_SESSION['user_id'];
	} else {
		header("location: ../signin.php");
	}

	$sql = "SELECT a.user_id, CONCAT(a.user_id) AS developerid, a.assigned_team, a.fname, a.mname, a.lname, a.suffix, a.contact_no, a.date_of_birth, a.user_age, a.gender_, a.full_address, a.latidude_ , a.longitude_, a.region_, a.province_, a.citymun_, a.barangay_, a.street_, a.user_image, a.datetime_created, CONCAT(a.datetime_created) AS devcreated, b.dev_id, b.fname, b.mname, b.lname, b.suffix, b.position_, b.team_one, b.team_two, b.datetime_added, c.team_no, c.team_name, d.user_id, d.useremail_, d.userpass_, d.usertype_, d.userstatus_, d.accountstatus_, d.messagestatus_, d.datetime_created FROM tbl_developer AS a LEFT JOIN developer_list AS b ON CONCAT(a.fname , ' ' , a.mname,  ' ' , a.lname , ' ' , a.suffix) = CONCAT(b.fname , ' ' , b.mname,  ' ' , b.lname , ' ' , b.suffix) LEFT JOIN team_list AS c ON b.team_one = c.team_no LEFT JOIN tbl_users AS d ON a.user_id = d.user_id WHERE a.user_id = '".$_SESSION["user_id"]."'";
	$query = $conn->query($sql);
	while ($row = mysqli_fetch_array($query)) {
		extract($row);
		$devid = $row['developerid'];
		$team_ = $row['assigned_team'];
        $dev_name = $row['fname'].' '.$row['lname']. ' ' .$row['suffix'];
		$dev_fname = $row['mname'];
		$dev_mname = $row['fname'];
		$dev_lname = $row['lname'];
		$dev_suffix = $row['suffix'];
		$dev_contact = $row['contact_no'];
		$dev_dateofbirth = $row['date_of_birth'];
        $dev_newdateofbirth = date("F j, Y", strtotime($dev_dateofbirth));
		$dev_age = $row['user_age'];
		$dev_userage = $row['user_age']. ' years old';
		$dev_gender = $row['gender_'];
		$dev_fulladdress = $row['full_address'];
		$dev_userimage = $row['user_image'];
		$dev_datetimecreated = $row['devcreated'];
        $dev_newdatetimecreated = date('F d, Y - g:i A', strtotime($dev_datetimecreated));
		$dev_id = $row['dev_id'];
		$dev_position = $row['position_'];
		$dev_teamname = $row['team_name'];
		$dev_useremail = $row['useremail_'];
		$dev_userpass = $row['userpass_'];
		$dev_usertype = $row['usertype_'];
		$dev_userstatus = $row['userstatus_'];
		$dev_accountstatus = $row['accountstatus_'];
		$dev_messagestatus = $row['messagestatus_'];
		if ($dev_messagestatus == '1') {
			$devmsgstatus = "Active Now";
		} else if ($dev_messagestatus == '0') {
			$devmsgstatus = "Offline Now";
		} else {
			$devmsgstatus = "";
		}
	}
    $now = new DateTime();
    $year = date('Y');
	$month = date('M');
?>