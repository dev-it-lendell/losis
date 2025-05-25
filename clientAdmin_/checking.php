<?php
	include '../connect.php';

	if (isset($_SESSION['useremail']) && isset($_SESSION['userpass']) && isset($_SESSION['user_id'])) {
		$clientuser_id = $_SESSION['user_id'];
	} else {
		header("location: ../signin.php");
	}

	$sql = "SELECT a.user_id, CONCAT(a.user_id) AS clientid, CONCAT(a.fname, ' ', a.lname,  ' ', a.suffix) AS clientname, CONCAT(a.fname) AS clnt_fname, CONCAT(a.mname) AS clnt_mname, CONCAT(a.lname) AS clnt_lname, CONCAT(a.suffix) AS clnt_suffix, a.mname, a.lname, a.suffix, a.company_name, a.user_position, a.site_id, a.team_, CONCAT(a.team_) AS Cteam, a.contact_no, CONCAT(a.contact_no) AS clientcontact, a.date_of_birth, CONCAT(a.date_of_birth) AS clientdob, a.user_age, CONCAT(a.user_age) AS clientage, a.gender_, a.full_address, CONCAT(a.full_address) AS clientaddress, a.latidude_, a.longitude, a.region_, a.province_, a.citymun_, a.barangay_, a.street_, a.user_image, CONCAT(a.user_image) AS clientimg, a.datetime_created, CONCAT(a.datetime_created) AS clientcreated, b.team_no, b.team_name, c.user_id, c.useremail_, c.userpass_, c.usertype_, c.userstatus_, c.accountstatus_, c.messagestatus_, c.datetime_created, d.client_id, d.client_name, d.acronym_, d.site_, d.supervisor_, d.team_, e.supervisor_id, e.fname, e.mname, e.lname, e.suffix, e.position_, e.team_, f.user_id, CONCAT(f.user_id) AS supervisorid, f.assigned_team, f.fname, f.mname, f.lname, f.suffix, f.contact_no, f.date_of_birth, f.user_age, f.gender_, f.full_address, f.latidude_, f.longitude_, f.region_, f.province_, f.citymun_, f.barangay_, f.street_, f.user_image FROM tbl_client AS a LEFT JOIN team_list AS b ON a.team_ = b.team_no LEFT JOIN tbl_users AS c ON a.user_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN supervisor_list AS e ON d.supervisor_ = e.supervisor_id LEFT JOIN tbl_supervisor AS f ON CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) = CONCAT(f.fname, ' ', f.mname, ' ', f.lname, ' ', f.suffix) WHERE a.user_id = '".$_SESSION["user_id"]."'";
	$query = $conn->query($sql);
	while ($row = mysqli_fetch_array($query)) {
		extract($row);
		$clientid = $row['clientid'];
		$cTeam = $row['Cteam'];
		$team_ = $row['team_'];
		$clnt_fname = $row['clnt_fname'];
		$clnt_mname = $row['clnt_mname'];
		$clnt_lname = $row['clnt_lname'];
		$clnt_suffix = $row['clnt_suffix'];
        $clnt_requestor = $row['clientname'];
		$clnt_contact = $row['clientcontact'];
		$clnt_dateofbirth = $row['clientdob'];
        $clnt_newdateofbirth = date("F j, Y", strtotime($clnt_dateofbirth));
		$clnt_age = $row['clientage'];
		$clnt_userage = $row['clientage']. ' years old';
		$clnt_gender = $row['gender_'];
		$clnt_company = $row['company_name'];
		$clnt_position = $row['user_position'];
		$clnt_siteid = $row['site_id'];
		$clnt_fulladdress = $row['clientaddress'];
		$clnt_userimage = $row['clientimg'];
		$clnt_datetimecreated = $row['clientcreated'];
        $clnt_newdatetimecreated = date('F d, Y - g:i A', strtotime($clnt_datetimecreated));
		$clnt_teamname = $row['team_name'];
		$clnt_useremail = $row['useremail_'];
		$clnt_userpass = $row['userpass_'];
		$clnt_usertype = $row['usertype_'];
		$clnt_userstatus = $row['userstatus_'];
		$clnt_accountstatus = $row['accountstatus_'];
		$clnt_messagestatus = $row['messagestatus_'];
		$clnt_siteid = $row['client_id'];
		$clnt_name = $row['client_name'];
		$clnt_acronym = $row['acronym_'];
		$clnt_site = $row['site_'];
		$clnt_supervisor = $row['supervisor_'];
		$clnt_supervisorid = $row['supervisorid'];
		if ($clnt_messagestatus == '1') {
			$clntmsgstatus = "Active Now";
		} else if ($clnt_messagestatus == '0') {
			$clntmsgstatus = "Offline Now";
		} else {
			$clntmsgstatus = "";
		}
	}
	$now = new DateTime();
	$year = date('Y');
	$month = date('F');
	$day = date('d');
?>