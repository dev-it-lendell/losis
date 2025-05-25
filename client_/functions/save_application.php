<?php
    include '../../connect.php';
    include '../checking.php';

	if (isset($_POST['newapplication'])) {
		$app_fname = $_POST['app_fname'];
		$app_mname = $_POST['app_mname'];
		$app_lname = $_POST['app_lname'];
		$app_suffix = $_POST['app_suffix'];
		$app_mobile = $_POST['app_mobile'];
		$app_landline = $_POST['app_landline'];
		$app_dateofbirth = $_POST['app_dateofbirth'];
		$app_email = $_POST['app_email'];
		$app_sss = $_POST['app_sss'];
		$app_presentaddr = $_POST['app_presentaddr'];
		$app_permanentaddr = $_POST['app_permanentaddr'];
		$appr_college_school = $_POST['appr_college_school'];
		$appr_college_degr = $_POST['appr_college_degr'];
		$appr_college_dategrad = $_POST['appr_college_dategrad'];
		$appr_college_addr = $_POST['appr_college_addr'];
		$appr_hs_school = $_POST['appr_hs_school'];
		$appr_hs_dategrad = $_POST['appr_hs_dategrad'];
		$appr_hs_addr = $_POST['appr_hs_addr'];
		$appr_elem_school = $_POST['appr_elem_school'];
		$appr_elem_dategrad = $_POST['appr_elem_dategrad'];
		$appr_elem_addr = $_POST['appr_elem_addr'];
		$appr_voc_school = $_POST['appr_voc_school'];
		$appr_voc_degr = $_POST['appr_voc_degr'];
		$appr_voc_dategrad = $_POST['appr_voc_dategrad'];
		$appr_voc_addr = $_POST['appr_voc_addr'];
		$appr_oth_school = $_POST['appr_oth_school'];
		$appr_oth_degr = $_POST['appr_oth_degr'];
		$appr_oth_dategrad = $_POST['appr_oth_dategrad'];
		$appr_oth_addr = $_POST['appr_oth_addr'];
		$empno = $_POST['empno'];
		$emp_company = $_POST['emp_company'];
		$emp_contact = $_POST['emp_contact'];
		$emp_title = $_POST['emp_title'];
		$emp_sdate = $_POST['emp_sdate'];
		$emp_edate = $_POST['emp_edate'];
		$emp_addr = $_POST['emp_addr'];
		$charno = $_POST['charno'];
		$char_fname = $_POST['char_fname'];
		$char_mname = $_POST['char_mname'];
		$char_lname = $_POST['char_lname'];
		$char_suffix = $_POST['char_suffix'];
		$char_rel = $_POST['char_rel'];
		$char_contact = $_POST['char_contact'];
		$char_company = $_POST['char_company'];
		$char_title = $_POST['char_title'];
		$nbno = $_POST['nbno'];
		$nb_fname = $_POST['nb_fname'];
		$nb_mname = $_POST['nb_mname'];
		$nb_lname = $_POST['nb_lname'];
		$nb_suffix = $_POST['nb_suffix'];
		$nb_rel = $_POST['nb_rel'];
		$nb_contact = $_POST['nb_contact'];
		$relno = $_POST['relno'];
		$rel_fname = $_POST['rel_fname'];
		$rel_mname = $_POST['rel_mname'];
		$rel_lname = $_POST['rel_lname'];
		$rel_suffix = $_POST['rel_suffix'];
		$rel_relation = $_POST['rel_relation'];
		$rel_contact = $_POST['rel_contact'];
        $countsuppdocs = count($_FILES['supp_docs']['name']);
        $suppdocstemp_name = $_FILES['supp_docs']['tmp_name'];

		$time = rand(10000000,99999999);
		$date = date("m");
		$now = new DateTime();
    	$year = date('Y');
    	$month = date('F');
    	$day = date('d');
		$applicationCode = 'APPL'.'-'.'0'.$date.'-'.$time;
		$target_dir = "../application_documents/{$year}/{$clnt_acronym}/{$applicationCode}";

		$conn->query("INSERT INTO application_list SET application_code = '".$applicationCode."', client_id = '".$_SESSION["user_id"]."', application_status = '0', application_datetime = NOW()");
		$conn->query("INSERT INTO application_personal_info SET application_code = '".$applicationCode."', fname_ = '".$app_fname."', mname_ = '".$app_mname."', lname_ = '".$app_lname."', suffix_ = '".$app_suffix."', birthdate_ = '".$app_dateofbirth."', mobile_no = '".$app_mobile."', landline_no = '".$app_landline."', email_addr = '".$app_email."', sss_no = '".$app_sss."', present_addr = '".$app_presentaddr."', permanent_addr = '".$app_permanentaddr."', datetime_added = NOW()");
		$conn->query("INSERT INTO application_college SET application_code = '".$applicationCode."', school_name = '".$appr_college_school."', course_name = '".$appr_college_degr."', date_graduated = '".$appr_college_dategrad."', school_address = '".$appr_college_addr."', datetime_added = NOW()");
		$conn->query("INSERT INTO application_highschool SET application_code = '".$applicationCode."', school_name = '".$appr_hs_school."', date_graduated = '".$appr_hs_dategrad."', school_address = '".$appr_hs_addr."', datetime_added = NOW()");
		$conn->query("INSERT INTO application_elementary SET application_code = '".$applicationCode."', school_name = '".$appr_elem_school."', date_graduated = '".$appr_elem_dategrad."', school_address = '".$appr_elem_addr."', datetime_added = NOW()");
		$conn->query("INSERT INTO application_vocational SET application_code = '".$applicationCode."', school_name = '".$appr_voc_school."', course_name = '".$appr_voc_degr."', date_graduated = '".$appr_voc_dategrad."', school_address = '".$appr_voc_addr."', datetime_added = NOW()");
		$conn->query("INSERT INTO application_other_school SET application_code = '".$applicationCode."', school_name = '".$appr_oth_school."', course_name = '".$appr_oth_degr."', date_graduated = '".$appr_oth_dategrad."', school_address = '".$appr_oth_addr."', datetime_added = NOW()");
		mkdir($target_dir, 0777, true);

		for($i=0;$i<count($_POST['empno']);$i++) {
			$emp_company = $_POST['emp_company'][$i];
			$emp_contact = $_POST['emp_contact'][$i];
			$emp_title = $_POST['emp_title'][$i];
			$emp_sdate = $_POST['emp_sdate'][$i];
			$emp_edate = $_POST['emp_edate'][$i];
			$emp_addr = $_POST['emp_addr'][$i];
	        
	        $emp_query = "INSERT INTO application_emp_history(application_code, employer_, contact_no, job_title, start_date, end_date, emp_addr) VALUES ('".$applicationCode."', '$emp_company','$emp_contact','$emp_title','$emp_sdate','$emp_edate', '$emp_addr')";
	        $stmt=$conn->prepare($emp_query);
	        $stmt->execute();
	    }

		for($i=0;$i<count($_POST['charno']);$i++) {
			$char_fname = $_POST['char_fname'][$i];
			$char_mname = $_POST['char_mname'][$i];
			$char_lname = $_POST['char_lname'][$i];
			$char_suffix = $_POST['char_suffix'][$i];
			$char_rel = $_POST['char_rel'][$i];
			$char_contact = $_POST['char_contact'][$i];
			$char_company = $_POST['char_company'][$i];
			$char_title = $_POST['char_title'][$i];
	        
	        $char_query = "INSERT INTO application_char_reference(application_code, fname_, mname_, lname_, suffix_, relationship_, contact_no, company_name, job_title) VALUES ('".$applicationCode."', '$char_fname','$char_mname','$char_lname','$char_suffix','$char_rel', '$char_contact', '$char_company', '$char_title')";
	        $stmt=$conn->prepare($char_query);
	        $stmt->execute();
	    }

		for($i=0;$i<count($_POST['nbno']);$i++) {
			$nb_fname = $_POST['nb_fname'][$i];
			$nb_mname = $_POST['nb_mname'][$i];
			$nb_lname = $_POST['nb_lname'][$i];
			$nb_suffix = $_POST['nb_suffix'][$i];
			$nb_rel = $_POST['nb_rel'][$i];
			$nb_contact = $_POST['nb_contact'][$i];
	        
	        $nbhood_query = "INSERT INTO application_neighbhood_reference(application_code, fname_, mname_, lname_, suffix_, relationship_, contact_no) VALUES ('".$applicationCode."', '$nb_fname','$nb_mname','$nb_lname','$nb_suffix','$nb_rel', '$nb_contact')";
	        $stmt=$conn->prepare($nbhood_query);
	        $stmt->execute();
	    }

		for($i=0;$i<count($_POST['relno']);$i++) {
			$rel_fname = $_POST['rel_fname'][$i];
			$rel_mname = $_POST['rel_mname'][$i];
			$rel_lname = $_POST['rel_lname'][$i];
			$rel_suffix = $_POST['rel_suffix'][$i];
			$rel_relation = $_POST['rel_relation'][$i];
			$rel_contact = $_POST['rel_contact'][$i];
	        
	        $rel_query = "INSERT INTO application_relative_reference(application_code, fname_, mname_, lname_, suffix_, relationship_, contact_no) VALUES ('".$applicationCode."', '$rel_fname','$rel_mname','$rel_lname','$rel_suffix','$rel_relation', '$rel_contact')";
	        $stmt=$conn->prepare($rel_query);
	        $stmt->execute();
	    }

        for($i=0;$i<$countsuppdocs;$i++){
            $supp_documents = $_FILES['supp_docs']['name'][$i];
            $directory = "../application_documents/{$year}/{$applicationCode}";
    
            move_uploaded_file($_FILES['supp_docs']['tmp_name'][$i],"$directory/".$supp_documents);
        }

		$sql = "INSERT INTO tbl_client_history_logs SET
				user_id = '". $_SESSION['user_id'] ."',
				x_module = 'New Application',
				x_module_action = 'Create New Application'";
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
		$sql1 = "INSERT INTO tbl_client_history_logs SET
				user_id = '". $_SESSION['user_id'] ."',
				x_module = 'Manage Applications',
				x_module_action = 'View Manage Applications'";
		$res1 = $conn->query($sql1);                                
		if ($res1) {
			$last_return_id = mysqli_insert_id($conn);
			if ($last_return_id) {
				$logsid = rand(10000000,99999999);
				$logsuserid = "LOG-".$logsid."-".$last_return_id;
				$logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
				$resquery = $conn->query($logsquery);
			}
		}
        $qstring = '?appl=succ';
    } else {
        $qstring = '?appl=err';
    }
    header("Location: ../manage_applications.php".$qstring);
?>