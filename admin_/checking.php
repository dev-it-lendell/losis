<?php
	include '../connect.php';

	if (isset($_SESSION['useremail']) && isset($_SESSION['userpass']) && isset($_SESSION['user_id'])) {
		$adminuser_id = $_SESSION['user_id'];
	} else {
		header("location: ../signin.php");
	}

	$sql = "SELECT a.user_id, CONCAT(a.user_id) AS adminid, a.team_, a.fname, a.mname, a.lname, a.suffix, a.contact_no, a.date_of_birth, a.user_age, a.gender_, a.full_address, a.latidude_, a.longitude_, a.region_, a.province_, a.citymun_, a.barangay_, a.street_, a.user_image, a.datetime_created, CONCAT(a.datetime_created) AS admincreated, b.mngt_id, b.fname, b.mname, b.lname, b.suffix, b.position_, b.team_, b.datetime_added, c.team_no, c.team_name, d.user_id, d.useremail_, d.userpass_, d.usertype_, d.userstatus_, d.accountstatus_, d.messagestatus_, d.datetime_created FROM tbl_admin AS a LEFT JOIN management_list AS b ON CONCAT(a.fname , ' ' , a.mname,  ' ' , a.lname , ' ' , a.suffix) = CONCAT(b.fname , ' ' , b.mname,  ' ' , b.lname , ' ' , b.suffix) LEFT JOIN team_list AS c ON b.team_ = c.team_no LEFT JOIN tbl_users AS d ON a.user_id = d.user_id WHERE a.user_id = '".$_SESSION["user_id"]."'";
	$query = $conn->query($sql);
	while ($row = mysqli_fetch_array($query)) {
		extract($row);
		$admid = $row['adminid'];
		$team_ = $row['team_'];
        $adm_name = $row['fname'].' '.$row['lname']. ' ' .$row['suffix'];
        $adm_fname = $row['fname'];
        $adm_mname = $row['mname'];
        $adm_lname = $row['lname'];
        $adm_suffix = $row['suffix'];
		$adm_contact = $row['contact_no'];
		$adm_dateofbirth = $row['date_of_birth'];
        $adm_newdateofbirth = date("F j, Y", strtotime($adm_dateofbirth));
		$adm_userage = $row['user_age']. ' years old';
		$adm_age = $row['user_age'];
		$adm_gender = $row['gender_'];
		$adm_fulladdress = $row['full_address'];
		$adm_userimage = $row['user_image'];
		$adm_datetimecreated = $row['admincreated'];
        $adm_newdatetimecreated = date('F d, Y - g:i A', strtotime($adm_datetimecreated));
		$adm_id = $row['mngt_id'];
		$adm_position = $row['position_'];
		$adm_teamname = $row['team_name'];
		$adm_useremail = $row['useremail_'];
		$adm_userpass = $row['userpass_'];
		$adm_usertype = $row['usertype_'];
		$adm_userstatus = $row['userstatus_'];
		$adm_accountstatus = $row['accountstatus_'];
		$adm_messagestatus = $row['messagestatus_'];
		if ($adm_messagestatus == '1') {
			$admmsgstatus = "Active Now";
		} else if ($adm_messagestatus == '0') {
			$admmsgstatus = "Offline Now";
		} else {
			$admmsgstatus = "";
		}
	}
    $now = new DateTime();
    $year = date('Y');
	$month = date('M');
?>