<?php
    include '../../connect.php';
    include '../checking.php';

    if (isset($_POST['savebioptions'])) {
		$personal_bg = $_POST['personal_bg'];
		$academic = $_POST['academic'];
		$emp_hist = $_POST['emp_hist'];
		$char_ref = $_POST['char_ref'];
		$idty_sss = $_POST['idty_sss'];
		$idty_bir = $_POST['idty_bir'];
		$cc_nbi = $_POST['cc_nbi'];
		$cc_lcc = $_POST['cc_lcc'];
		$cr_cmap = $_POST['cr_cmap'];
		$int_gdc = $_POST['int_gdc'];
		$brgy_chk = $_POST['brgy_chk'];
		$nhood_ref = $_POST['nhood_ref'];
		$pr_aff = $_POST['pr_aff'];
		$ls_chk = $_POST['ls_chk'];
		$fin_rev = $_POST['fin_rev'];
		$endocode_ = $_POST['endocode_'];
		$poccode_ = $_POST['poccode_'];
		$clientcode_ = $_POST['clientcode_'];
		$selected_analyst = $_POST['selected_analyst'];

		$conn->query("UPDATE tbl_bi_assigned_specialist SET is_distributed =  '1' WHERE endo_code = '$endocode_'");
		$conn->query("INSERT INTO tbl_bi_assigned_analyst SET endo_code = '$endocode_', assigned_by = '".$_SESSION["user_id"]."', assigned_da = '$selected_analyst', is_distributed = '0', assigned_to = '$team_one'");
		$conn->query("UPDATE tbl_endorsement_bi_process SET assigned_analyst = '$selected_analyst', percentage_ = '80', datetime_updated = NOW() WHERE endo_code ='$endocode_'"); 
		$conn->query("INSERT INTO create_report_options SET endorsement_code = '$endocode_', assigned_tele = '".$_SESSION["user_id"]."', personal_bg = '$personal_bg', academic_ = '$academic', emp_history = '$emp_hist', char_references = '$char_ref', identity_sss = '$idty_sss', identity_bir = '$idty_bir', criminal_nbi = '$cc_nbi', criminal_lcc = '$cc_lcc', credit_cmap = '$cr_cmap', international_chk = '$int_gdc', barangay_chk = '$brgy_chk', neighborhood_ref = '$nhood_ref', political_religious_aff = '$pr_aff', lifestyle_chk = '$ls_chk', financial_review = '$fin_rev'");
		$sql = "INSERT INTO tbl_operations_history_logs SET
					user_id = '". $_SESSION['user_id'] ."',
					x_module = 'Create Report (BI - Verifier)',
					x_module_action = 'Saving of Create Report Options'";
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
                    x_module = 'Endorsements',
                    x_module_action = 'View Endorsements'";
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
					client_id = '$clientcode_',
					endo_code = '$endocode_',
					endo_action = 'Creating of Report',
					assigned_poc = '$poccode_',
					assigned_operations = '". $_SESSION['user_id'] ."',
					assigned_team = '$team_one',
					datetime_added = NOW()";
        $res2 = $conn->query($sql2);  
		$qstring = '?bicreatereport=succsend';
    } else {
		$qstring = '?bicreatereport=errsend';
    }
    header("Location: ../endorsements_bi_tele.php".$qstring);
?>