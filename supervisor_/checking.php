<?php
    $connect_file = __DIR__ . '/../connect.php';
    if (file_exists($connect_file)) {
        include $connect_file;
    } else {
        die("Error: connect.php file not found. Expected location: " . $connect_file);
    }

	if (isset($_SESSION['useremail']) && isset($_SESSION['userpass']) && isset($_SESSION['user_id'])) {
		$supervisoruser_id = $_SESSION['user_id'];
	} else {
		header("location: ../signin.php");
	}

	$sql = "SELECT a.user_id, CONCAT(a.user_id) AS supervisorid, a.assigned_team, a.fname, a.mname, a.lname, a.suffix, a.contact_no, a.date_of_birth, a.user_age, a.gender_, a.full_address, a.latidude_, a.longitude_, a.region_, a.province_, a.citymun_, a.barangay_, a.street_, a.user_image, a.datetime_created, CONCAT(a.datetime_created) AS spvcreated, b.supervisor_id, b.fname, b.mname, b.lname, b.suffix, b.position_, b.team_, b.datetime_added, c.team_no, c.team_name, d.user_id, d.useremail_, d.userpass_, d.usertype_, d.userstatus_, d.accountstatus_, d.messagestatus_, d.datetime_created FROM tbl_supervisor AS a LEFT JOIN supervisor_list AS b ON CONCAT(a.fname , ' ' , a.mname,  ' ' , a.lname , ' ' , a.suffix) = CONCAT(b.fname , ' ' , b.mname,  ' ' , b.lname , ' ' , b.suffix) LEFT JOIN team_list AS c ON b.team_ = c.team_no LEFT JOIN tbl_users AS d ON a.user_id = d.user_id  WHERE a.user_id = '".$_SESSION["user_id"]."'";
	$query = $conn->query($sql);
	while ($row = mysqli_fetch_array($query)) {
		extract($row);
		$spvid = $row['supervisorid'];
		$team_ = $row['assigned_team'];
		$spv_fname = $row['fname'];
		$spv_mname = $row['mname'];
		$spv_lname = $row['lname'];
		$spv_suffix = $row['suffix'];
        $spv_name = $row['fname'].' '.$row['lname']. ' ' .$row['suffix'];
		$spv_contact = $row['contact_no'];
		$spv_dateofbirth = $row['date_of_birth'];
        $spv_newdateofbirth = date("F j, Y", strtotime($spv_dateofbirth));
		$spv_userage = $row['user_age']. ' years old';
		$spv_gender = $row['gender_'];
		$spv_fulladdress = $row['full_address'];
		$spv_userimage = $row['user_image'];
		$spv_datetimecreated = $row['spvcreated'];
        $spv_newdatetimecreated = date('F d, Y - g:i A', strtotime($spv_datetimecreated));
		$spv_id = $row['supervisor_id'];
		$spv_position = $row['position_'];
		$spv_teamname = $row['team_name'];
		$spv_useremail = $row['useremail_'];
		$spv_userpass = $row['userpass_'];
		$spv_usertype = $row['usertype_'];
		$spv_userstatus = $row['userstatus_'];
		$spv_accountstatus = $row['accountstatus_'];
		$spv_messagestatus = $row['messagestatus_'];
		if ($spv_messagestatus == '1') {
			$spvmsgstatus = "Active Now";
		} else if ($spv_messagestatus == '0') {
			$spvmsgstatus = "Offline Now";
		} else {
			$spvmsgstatus = "";
		}
	}
    $now = new DateTime();
    $year = date('Y');
	$month = date('M');
?>