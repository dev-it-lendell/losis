<?php
    include '../../connect.php';
    include '../checking.php';

    if (isset($_POST['updateReport'])) {
			$poc_code = $_POST['poc_code'];  
			$client_code = $_POST['client_code'];  
	    	// BI ASSESSMENT //
			$residence_addr = $_POST['residence_addr'];  
			$business_addr = $_POST['business_addr'];  
			$contact_details = $_POST['contact_details'];  
			$reference_code = $_POST['reference_code'];  
			$intiation_date = $_POST['intiation_date'];  
			$subminitial_date = $_POST['subminitial_date'];  
			$submfinal_date = $_POST['submfinal_date'];  
			$personalbg_remarks = $_POST['personalbg_remarks'];  
			$personalbg_color = $_POST['personalbg_color'];  
			$academichk_remarks = $_POST['academichk_remarks'];  
			$academichk_color = $_POST['academichk_color'];  
			$emphist_remarks = $_POST['emphist_remarks'];  
			$emphist_color = $_POST['emphist_color'];  
			$charref_remarks = $_POST['charref_remarks'];  
			$charref_color = $_POST['charref_color'];  
			$identitysss_remarks = $_POST['identitysss_remarks'];  
			$sss_color = $_POST['sss_color'];  
			$identitybir_remarks = $_POST['identitybir_remarks'];  
			$bir_color = $_POST['bir_color'];  
			$criminalnbi_remarks = $_POST['criminalnbi_remarks'];  
			$nbi_color = $_POST['nbi_color'];  
			$criminallcc_remarks = $_POST['criminallcc_remarks'];  
			$lcc_color = $_POST['lcc_color'];  
			$creditcmap_remarks = $_POST['creditcmap_remarks'];  
			$credit_color = $_POST['credit_color'];  
			$intgdc_remarks = $_POST['intgdc_remarks'];  
			$intgdc_color = $_POST['intgdc_color'];  
			$barangay_remarks = $_POST['barangay_remarks'];  
			$barangay_color = $_POST['barangay_color'];  
			$neighbhood_remarks = $_POST['neighbhood_remarks'];  
			$neighbhood_color = $_POST['neighbhood_color'];  
			$polreligous_remarks = $_POST['polreligous_remarks'];  
			$polreligous_color = $_POST['polreligous_color'];  
			$lifestyle_remarks = $_POST['lifestyle_remarks'];  
			$lifestyle_color = $_POST['lifestyle_color'];  
			$financialrev_remarks = $_POST['financialrev_remarks'];  
			$financialrev_color = $_POST['financialrev_color'];  
			$recommendation_ = $_POST['recommendation_'];

	    $sql = "SELECT a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.site_id, a.endorsed_to, a.client_id, CONCAT(a.client_id) AS clientuserid, b.endorsement_code, b.assigned_tele, b.assigned_da, b.personal_bg, b.academic_, b.emp_history, b.char_references, b.identity_sss, b.identity_bir, b.criminal_nbi, b.criminal_lcc, b.credit_cmap, b.international_chk, b.barangay_chk, b.neighborhood_ref, b.political_religious_aff, b.lifestyle_chk, b.financial_review, c.client_id, c.client_name, c.acronym_, c.site_ FROM tbl_endo AS a LEFT JOIN create_report_options AS b ON a.endo_code = b.endorsement_code LEFT JOIN client_list AS c ON a.site_id = c.client_id WHERE b.endorsement_code = '$reference_code'";
	    $query = $conn->query($sql);
	    while ($row = mysqli_fetch_array($query)) {
	        extract($row);
	        $endoCode = $row['endo_code'];
	        $applicantname = $row['applicantname'];
	        $client_name = $row['client_name'];
	        $personal_bg = $row['personal_bg'];
	        $academic_ = $row['academic_'];
	        $emp_history = $row['emp_history'];
	        $char_references = $row['char_references'];
	        $identity_sss = $row['identity_sss'];
	        $identity_bir = $row['identity_bir'];
	        $criminal_nbi = $row['criminal_nbi'];
	        $criminal_lcc = $row['criminal_lcc'];
	        $credit_cmap = $row['credit_cmap'];
	        $international_chk = $row['international_chk'];
	        $barangay_chk = $row['barangay_chk'];
	        $neighborhood_ref = $row['neighborhood_ref'];
	        $political_religious_aff = $row['political_religious_aff'];
	        $lifestyle_chk = $row['lifestyle_chk'];
	        $financial_review = $row['financial_review'];
	        $endorsed_to = $row['endorsed_to'];
	        $clientuserid = $row['clientuserid'];

	        if ($personal_bg == '1') {
				$pb_color = $_POST['pb_color'];
				$pb_remarks = $_POST['pb_remarks'];
	        } else {
	        	echo "";
	        }
	        if ($academic_ == '1') {
				$academic_color = $_POST['academic_color'];
				$academic_school = $_POST['academic_school'];
				$academic_reported_degree = $_POST['academic_reported_degree'];
				$academic_verified_degree = $_POST['academic_verified_degree'];
				$academic_reported_gradyear = $_POST['academic_reported_gradyear'];
				$academic_verified_gradyear = $_POST['academic_verified_gradyear'];
				$academic_startdate = $_POST['academic_startdate'];
				$academic_enddate = $_POST['academic_enddate'];
				$academic_attainment = $_POST['academic_attainment'];
				$academic_remarks = $_POST['academic_remarks'];
				$academic_informant = $_POST['academic_informant'];
	        } else {
	        	echo "";
	        }
	        if ($emp_history == '1') {
				$emp_color = $_POST['emp_color'];
				$emp_company = $_POST['emp_company'];
				$emp_reported_fromdate = $_POST['emp_reported_fromdate'];
				$emp_reported_todate = $_POST['emp_reported_todate'];
				$emp_verified_fromdate = $_POST['emp_verified_fromdate'];
				$emp_verified_todate = $_POST['emp_verified_todate'];
				$emp_reported_position = $_POST['emp_reported_position'];
				$emp_verified_position = $_POST['emp_verified_position'];
				$emp_reported_empended = $_POST['emp_reported_empended'];
				$emp_verified_empended = $_POST['emp_verified_empended'];
				$emp_businessnature = $_POST['emp_businessnature'];
				$emp_derogatory = $_POST['emp_derogatory'];
				$emp_rehire = $_POST['emp_rehire'];
				$emp_remarks = $_POST['emp_remarks'];
				$emp_informant = $_POST['emp_informant'];
	        } else {
	        	echo "";
	        }
	        if ($char_references == '1') {
				$charone_color = $_POST['charone_color'];
				$charone_fname = $_POST['charone_fname'];
				$charone_mname = $_POST['charone_mname'];
				$charone_lname = $_POST['charone_lname'];
				$charone_suffix = $_POST['charone_suffix'];
				$charone_empposition = $_POST['charone_empposition'];
				$charone_contact = $_POST['charone_contact'];
				$charone_remarks = $_POST['charone_remarks'];	
	        } else {
	        	echo "";
	        }
	        if ($identity_sss == '1') {
				$identitysss_color = $_POST['identitysss_color'];		
				$identitysss_findings = $_POST['identitysss_findings'];	
	        } else {
	        	echo "";
	        }
	        if ($identity_bir == '1') {
				$identitybir_color = $_POST['identitybir_color'];		
				$identitybir_findings = $_POST['identitybir_findings'];	
	        } else {
	        	echo "";
	        }
	        if ($criminal_nbi == '1') {
				$criminalnbi_color = $_POST['criminalnbi_color'];	
				$criminalnbi_findings = $_POST['criminalnbi_findings'];
	        } else {
	        	echo "";
	        }	        
	        if ($criminal_lcc == '1') {
				$criminallcc_color = $_POST['criminallcc_color'];	
				$criminallcc_findings = $_POST['criminallcc_findings'];	
	        } else {
	        	echo "";
	        }
	        if ($credit_cmap == '1') {
				$creditcmap_color = $_POST['creditcmap_color'];	
				$creditcmap_courtcases = $_POST['creditcmap_courtcases'];	
				$creditcmap_returnedchks = $_POST['creditcmap_returnedchks'];	
				$creditcmap_accountlawyers = $_POST['creditcmap_accountlawyers'];	
				$creditcmap_telecoms = $_POST['creditcmap_telecoms'];	
	        } else {
	        	echo "";
	        }
	        if ($international_chk == '1') {
				$intchk_color = $_POST['intchk_color'];	
				$intchk_findings = $_POST['intchk_findings'];
	        } else {
	        	echo "";
	        }
	        if ($barangay_chk == '1') {
				$brgy_color = $_POST['brgy_color'];
				$brgy_name = $_POST['brgy_name'];
				$brgy_informant = $_POST['brgy_informant'];
				$brgy_position = $_POST['brgy_position'];
				$brgy_contact = $_POST['brgy_contact'];
	        } else {
	        	echo "";
	        }
	        if ($neighborhood_ref == '1') {
				$nbhoodone_color = $_POST['nbhoodone_color'];
				$nbhoodone_fname = $_POST['nbhoodone_fname'];
				$nbhoodone_mname = $_POST['nbhoodone_mname'];
				$nbhoodone_lname = $_POST['nbhoodone_lname'];
				$nbhoodone_suffix = $_POST['nbhoodone_suffix'];
				$nbhoodone_contact = $_POST['nbhoodone_contact'];
				$nbhoodone_addr = $_POST['nbhoodone_addr'];
				$nbhoodone_remarks = $_POST['nbhoodone_remarks'];
	        } else {
	        	echo "";
	        }
	        if ($political_religious_aff == '1') {
				$polreg_color = $_POST['polreg_color'];
				$polreg_remarks = $_POST['polreg_remarks'];
	        } else {
	        	echo "";
	        }
	        if ($lifestyle_chk == '1') {
				$lifestylechk_color = $_POST['lifestylechk_color'];
				$lifestylechk_remarks = $_POST['lifestylechk_remarks'];
	        } else {
	        	echo "";
	        }
	        if ($financial_review == '1') {
				$financialchk_color = $_POST['financialchk_color'];
				$financialchk_remarks = $_POST['financialchk_remarks'];
	        } else {
	        	echo "";
	        }

			$time = rand(10000000,99999999);
			$date = date("m");
			$ReportCode = 'REP'.'-'.'0'.$date.'-'.$time;

        	$conn->query("UPDATE bi_report_assessment SET report_code = '$ReportCode', endo_code = '$reference_code', residence_addr = '$residence_addr', business_addr = '$business_addr', contact_details = '$contact_details', initiation_date = '$intiation_date', initial_date_submitted = '$subminitial_date', final_date_submitted = '$submfinal_date', personal_bg_remarks = '$personalbg_remarks', personal_bg_color = '$personalbg_color', academic_chk_remarks = '$academichk_remarks', academic_chk_color = '$academichk_color', employment_hist_remarks = '$emphist_remarks', employment_hist_color = '$emphist_color', character_ref_remarks = '$charref_remarks', character_ref_color = '$charref_color', identity_sss_remarks = '$identitysss_remarks', identity_sss_color = '$sss_color', identity_bir_remarks = '$identitybir_remarks', identity_bir_color = '$bir_color', criminal_nbi_remarks = '$criminalnbi_remarks', criminal_nbi_color = '$nbi_color', criminal_lcc_remarks = '$criminallcc_remarks', criminal_lcc_color = '$lcc_color', credit_cmap_remarks = '$creditcmap_remarks', credit_cmap_colors = '$credit_color', int_gdc_remarks = '$intgdc_remarks', int_gdc_color = '$intgdc_color', brgy_chk_remarks = '$barangay_remarks', brgy_chk_color = '$barangay_color', neighborhood_ref_remarks = '$neighbhood_remarks', neighborhood_ref_color = '$neighbhood_color', pol_religious_remarks = '$polreligous_remarks', pol_religious_color = '$polreligous_color', lifestyle_remarks = '$lifestyle_remarks', lifestyle_color = '$lifestyle_color', financial_rev_remarks = '$financialrev_remarks', financial_rev_color = '$financialrev_color', recommendation_ = '$recommendation_' WHERE endo_code = '$reference_code'");
	        if ($personal_bg == '1') {
				$conn->query("UPDATE report_personalbg SET report_code = '$ReportCode', endo_code = '$reference_code', status_code = '$pb_color', remarks_ = '$pb_remarks' WHERE endo_code = '$reference_code'");
	        } else {
	        	echo "";
	        }
	        if ($academic_ == '1') {
				$conn->query("UPDATE report_academic SET report_code = '$ReportCode', endo_code = '$reference_code', status_code = '$academic_color', school_ = '$academic_school', reported_degree = '$academic_reported_degree', verified_degree = '$academic_verified_degree', reported_yeargrad = '$academic_reported_gradyear', verified_yeargrad = '$academic_verified_gradyear', date_attended_to  = '$academic_enddate', date_attended_from  = '$academic_startdate', highest_educ_attainment  = '$academic_attainment', remarks_ = '$academic_remarks', informant_ = '$academic_informant' WHERE endo_code = '$reference_code'");
	        } else {
	        	echo "";
	        }
	        if ($emp_history == '1') {
        		$conn->query("UPDATE report_emphistory SET report_code = '$ReportCode', endo_code = '$reference_code', status_code = '$emp_color', company_ = '$emp_company', reported_period_emp_from = '$emp_reported_fromdate', reported_period_emp_to = '$emp_reported_todate', verified_period_emp_from = '$emp_verified_fromdate', verified_period_emp_to = '$emp_verified_todate', reported_position = '$emp_reported_position', verified_position = '$emp_verified_position', reported_employment_ended = '$emp_reported_empended', verified_employment_ended = '$emp_verified_empended', nature_business = '$emp_businessnature', any_records = '$emp_derogatory', eligible_for_rehire = '$emp_rehire', remarks_ = '$emp_remarks', informant_ = '$emp_informant' WHERE endo_code = '$reference_code'");
	        } else {
	        	echo "";
	        }
	        if ($char_references == '1') {
	        	$conn->query("UPDATE report_character_ref SET report_code = '$ReportCode', endo_code = '$reference_code', status_code = '$charone_color', fname_  = '$charone_fname', mname_ = '$charone_mname', lname_ = '$charone_lname', suffix_ = '$charone_suffix', employer_and_position = '$charone_empposition', contact_details = '$charone_contact', remarks_ = '$charone_remarks' WHERE endo_code = '$reference_code'");
	        } else {
	        	echo "";
	        }
	        if ($identity_sss == '1') {
	        	$conn->query("UPDATE report_identity_sss SET report_code = '$ReportCode', endo_code = '$reference_code', status_code = '$identitysss_color', findings_  = '$identitysss_findings' WHERE endo_code = '$reference_code'");
	        } else {
	        	echo "";
	        }
	        if ($identity_bir == '1') {
	        	$conn->query("UPDATE report_identity_bir SET report_code = '$ReportCode', endo_code = '$reference_code', status_code = '$identitybir_color', findings_  = '$identitybir_findings' WHERE endo_code = '$reference_code'");
	        } else {
	        	echo "";
	        }
	        if ($criminal_nbi == '1') {
	        	$conn->query("UPDATE report_criminal_nbi SET report_code = '$ReportCode', endo_code = '$reference_code', status_code = '$criminalnbi_color', findings_  = '$criminalnbi_findings' WHERE endo_code = '$reference_code'");
	        } else {
	        	echo "";
	        }
	        if ($criminal_lcc == '1') {
	        	$conn->query("UPDATE report_criminal_lcc SET report_code = '$ReportCode', endo_code = '$reference_code', status_code = '$criminallcc_color', findings_  = '$criminallcc_findings' WHERE endo_code = '$reference_code'");
	        } else {
	        	echo "";
	        }
	        if ($credit_cmap == '1') {
	        	$conn->query("UPDATE report_credit_cmap SET report_code = '$ReportCode', endo_code = '$reference_code', status_code = '$creditcmap_color', court_cases  = '$creditcmap_courtcases', returned_checks  = '$creditcmap_returnedchks', account_lawyers  = '$creditcmap_accountlawyers', telecoms_bank  = '$creditcmap_telecoms' WHERE endo_code = '$reference_code'");
	        } else {
	        	echo "";
	        }
	        if ($international_chk == '1') {
	        	$conn->query("UPDATE report_international_check SET report_code = '$ReportCode', endo_code = '$reference_code', status_code = '$intchk_color', findings_  = '$intchk_findings' WHERE endo_code = '$reference_code'");
	        } else {
	        	echo "";
	        }
	        if ($barangay_chk == '1') {
 				$conn->query("UPDATE report_barangay_check SET report_code = '$ReportCode', endo_code = '$reference_code', status_code = '$brgy_color', brgy_name  = '$brgy_name', brgy_informant  = '$brgy_informant', position_  = '$brgy_position', contact_  = '$brgy_contact' WHERE endo_code = '$reference_code'");
	        } else {
	        	echo "";
	        }
	        if ($neighborhood_ref == '1') {
	        	$conn->query("UPDATE report_neighbhood_ref SET report_code = '$ReportCode', endo_code = '$reference_code', status_code = '$nbhoodone_color', fname_  = '$nbhoodone_fname', mname_ = '$nbhoodone_mname', lname_ = '$nbhoodone_lname', suffix_ = '$nbhoodone_suffix', current_address = '$nbhoodone_addr', contact_info = '$nbhoodone_contact', remarks_ = '$nbhoodone_remarks' WHERE endo_code = '$reference_code'");
	        } else {
	        	echo "";
	        }
	        if ($political_religious_aff == '1') {
	        	$conn->query("UPDATE report_political_religious SET report_code = '$ReportCode', endo_code = '$reference_code', status_code = '$polreg_color', remarks_  = '$polreg_remarks' WHERE endo_code = '$reference_code'");
	        } else {
	        	echo "";
	        }
	        if ($lifestyle_chk == '1') {
	        	$conn->query("UPDATE report_lifestyle_check SET report_code = '$ReportCode', endo_code = '$reference_code', status_code = '$lifestylechk_color', remarks_  = '$lifestylechk_remarks' WHERE endo_code = '$reference_code'");
	        } else {
	        	echo "";
	        }
	        if ($financial_review == '1') {
	        	$conn->query("UPDATE report_financial_review SET report_code = '$ReportCode', endo_code = '$reference_code', status_code = '$financialchk_color', remarks_  = '$financialchk_remarks' WHERE endo_code = '$reference_code'");
	        } else {
	        	echo "";
	        }
			$sql = "INSERT INTO tbl_operations_history_logs SET
						user_id = '". $_SESSION['user_id'] ."',
						x_module = 'Edit Report (BI - Analyst)',
						x_module_action = 'Editing of Report'";
			$res = $conn->query($sql);                           
			if ($res) {
				$last_return_id = mysqli_insert_id($conn);
				if ($last_return_id) {
					$logsid = rand(10000000,99999999);
					$logsuserid = "LOG-".$logsid."-".$last_return_id;
					$logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
					$resquery = $conn->query($logsquery);
				}
	        }
			$sql1 = "INSERT INTO tbl_operations_history_logs SET
						user_id = '". $_SESSION['user_id'] ."',
	                    x_module = 'Monitor Endorsements',
	                    x_module_action = 'View Monitor Endorsements (BI - Analyst)'";
			$res1 = $conn->query($sql1);                           
			if ($res1) {
				$last_return_id = mysqli_insert_id($conn);
				if ($last_return_id) {
					$logsid = rand(10000000,99999999);
					$logsuserid = "LOG-".$logsid."-".$last_return_id;
					$logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
					$resquery = $conn->query($logsquery);
				}
	        }
	        $sql2 = "INSERT INTO endorsement_logs SET
						client_id = '$client_code',
						endo_code = '$reference_code',
						endo_action = 'Editing of Report',
						assigned_poc = '$poc_code',
						assigned_operations = '". $_SESSION['user_id'] ."',
						assigned_team = '$team_one',
						datetime_added = NOW()";
	        $res2 = $conn->query($sql2);

			$qstring = '?bieditreport=succsend';
	    }
    } else {
    	$qstring = '?bieditreport=errsend';
    }
    header("Location: ../monitor_endo_bi_da.php".$qstring);
?>