<?php
    include '../../connect.php';
    include '../checking.php';

    if (isset($_POST['updatecorinthiansrecord'])) {
		// JANUARY //
		$psalmsjanendogoal = $_POST['psalmsjanendogoal'];
		$psalmsjanendoactual = $_POST['psalmsjanendoactual'];
		$psalmsjanbillinggoal = $_POST['psalmsjanbillinggoal'];
		$psalmsjanbillingactual = $_POST['psalmsjanbillingactual'];
		$conn->query("UPDATE operations_team_corinthians SET endo_goal = '".$psalmsjanendogoal."', actual_endo = '".$psalmsjanendoactual."', billing_goal = '".$psalmsjanbillinggoal."', actual_billing = '".$psalmsjanbillingactual."' WHERE MONTH(assigned_month) = '01' AND YEAR(assigned_month) = YEAR(NOW())");
		// FEBRUARY //
		$psalmsfebendogoal = $_POST['psalmsfebendogoal'];
		$psalmsfebendoactual = $_POST['psalmsfebendoactual'];
		$psalmsfebbillinggoal = $_POST['psalmsfebbillinggoal'];
		$psalmsfebbillingactual = $_POST['psalmsfebbillingactual'];
		$conn->query("UPDATE operations_team_corinthians SET endo_goal = '".$psalmsfebendogoal."', actual_endo = '".$psalmsfebendoactual."', billing_goal = '".$psalmsfebbillinggoal."', actual_billing = '".$psalmsfebbillingactual."' WHERE MONTH(assigned_month) = '02' AND YEAR(assigned_month) = YEAR(NOW())");
		// MARCH //
		$psalmsmarendogoal = $_POST['psalmsmarendogoal'];
		$psalmsmarendoactual = $_POST['psalmsmarendoactual'];
		$psalmsmarbillinggoal = $_POST['psalmsmarbillinggoal'];
		$psalmsmarbillingactual = $_POST['psalmsmarbillingactual'];
		$conn->query("UPDATE operations_team_corinthians SET endo_goal = '".$psalmsmarendogoal."', actual_endo = '".$psalmsmarendoactual."', billing_goal = '".$psalmsmarbillinggoal."', actual_billing = '".$psalmsmarbillingactual."' WHERE MONTH(assigned_month) = '03' AND YEAR(assigned_month) = YEAR(NOW())");
		// APRIL //
		$psalmsaprendogoal = $_POST['psalmsaprendogoal'];
		$psalmsaprendoactual = $_POST['psalmsaprendoactual'];
		$psalmsaprbillinggoal = $_POST['psalmsaprbillinggoal'];
		$psalmsaprbillingactual = $_POST['psalmsaprbillingactual'];
		$conn->query("UPDATE operations_team_corinthians SET endo_goal = '".$psalmsaprendogoal."', actual_endo = '".$psalmsaprendoactual."', billing_goal = '".$psalmsaprbillinggoal."', actual_billing = '".$psalmsaprbillingactual."' WHERE MONTH(assigned_month) = '04' AND YEAR(assigned_month) = YEAR(NOW())");
		// MAY //
		$psalmsmayendogoal = $_POST['psalmsmayendogoal'];
		$psalmsmayendoactual = $_POST['psalmsmayendoactual'];
		$psalmsmaybillinggoal = $_POST['psalmsmaybillinggoal'];
		$psalmsmaybillingactual = $_POST['psalmsmaybillingactual'];
		$conn->query("UPDATE operations_team_corinthians SET endo_goal = '".$psalmsmayendogoal."', actual_endo = '".$psalmsmayendoactual."', billing_goal = '".$psalmsmaybillinggoal."', actual_billing = '".$psalmsmaybillingactual."' WHERE MONTH(assigned_month) = '05' AND YEAR(assigned_month) = YEAR(NOW())");
		// JUNE //
		$psalmsjuneendogoal = $_POST['psalmsjuneendogoal'];
		$psalmsjuneendoactual = $_POST['psalmsjuneendoactual'];
		$psalmsjunebillinggoal = $_POST['psalmsjunebillinggoal'];
		$psalmsjunebillingactual = $_POST['psalmsjunebillingactual'];
		$conn->query("UPDATE operations_team_corinthians SET endo_goal = '".$psalmsjuneendogoal."', actual_endo = '".$psalmsjuneendoactual."', billing_goal = '".$psalmsjunebillinggoal."', actual_billing = '".$psalmsjunebillingactual."' WHERE MONTH(assigned_month) = '06' AND YEAR(assigned_month) = YEAR(NOW())");
		// JULY //
		$psalmsjulyendogoal = $_POST['psalmsjulyendogoal'];
		$psalmsjulyendoactual = $_POST['psalmsjulyendoactual'];
		$psalmsjulybillinggoal = $_POST['psalmsjulybillinggoal'];
		$psalmsjulybillingactual = $_POST['psalmsjulybillingactual'];
		$conn->query("UPDATE operations_team_corinthians SET endo_goal = '".$psalmsjulyendogoal."', actual_endo = '".$psalmsjulyendoactual."', billing_goal = '".$psalmsjulybillinggoal."', actual_billing = '".$psalmsjulybillingactual."' WHERE MONTH(assigned_month) = '07' AND YEAR(assigned_month) = YEAR(NOW())");	
		// AUGUST //
		$psalmsaugendogoal = $_POST['psalmsaugendogoal'];
		$psalmsaugendoactual = $_POST['psalmsaugendoactual'];
		$psalmsaugbillinggoal = $_POST['psalmsaugbillinggoal'];
		$psalmsaugbillingactual = $_POST['psalmsaugbillingactual'];
		$conn->query("UPDATE operations_team_corinthians SET endo_goal = '".$psalmsaugendogoal."', actual_endo = '".$psalmsaugendoactual."', billing_goal = '".$psalmsaugbillinggoal."', actual_billing = '".$psalmsaugbillingactual."' WHERE MONTH(assigned_month) = '08' AND YEAR(assigned_month) = YEAR(NOW())");
		// SEPTEMBER //
		$psalmsseptendogoal = $_POST['psalmsseptendogoal'];
		$psalmsseptendoactual = $_POST['psalmsseptendoactual'];
		$psalmsseptbillinggoal = $_POST['psalmsseptbillinggoal'];
		$psalmsseptbillingactual = $_POST['psalmsseptbillingactual'];
		$conn->query("UPDATE operations_team_corinthians SET endo_goal = '".$psalmsseptendogoal."', actual_endo = '".$psalmsseptendoactual."', billing_goal = '".$psalmsseptbillinggoal."', actual_billing = '".$psalmsseptbillingactual."' WHERE MONTH(assigned_month) = '09' AND YEAR(assigned_month) = YEAR(NOW())");	
		// OCTOBER //
		$psalmsoctendogoal = $_POST['psalmsoctendogoal'];
		$psalmsoctendoactual = $_POST['psalmsoctendoactual'];
		$psalmsoctbillinggoal = $_POST['psalmsoctbillinggoal'];
		$psalmsoctbillingactual = $_POST['psalmsoctbillingactual'];
		$conn->query("UPDATE operations_team_corinthians SET endo_goal = '".$psalmsoctendogoal."', actual_endo = '".$psalmsoctendoactual."', billing_goal = '".$psalmsoctbillinggoal."', actual_billing = '".$psalmsoctbillingactual."' WHERE MONTH(assigned_month) = '10' AND YEAR(assigned_month) = YEAR(NOW())");
		// NOVEMBER //
		$psalmsnovendogoal = $_POST['psalmsnovendogoal'];
		$psalmsnovendoactual = $_POST['psalmsnovendoactual'];
		$psalmsnovbillinggoal = $_POST['psalmsnovbillinggoal'];
		$psalmsnovbillingactual = $_POST['psalmsnovbillingactual'];
		$conn->query("UPDATE operations_team_corinthians SET endo_goal = '".$psalmsnovendogoal."', actual_endo = '".$psalmsnovendoactual."', billing_goal = '".$psalmsnovbillinggoal."', actual_billing = '".$psalmsnovbillingactual."' WHERE MONTH(assigned_month) = '11' AND YEAR(assigned_month) = YEAR(NOW())");
		// DECEMBER //
		$psalmsdecendogoal = $_POST['psalmsdecendogoal'];
		$psalmsdecendoactual = $_POST['psalmsdecendoactual'];
		$psalmsdecbillinggoal = $_POST['psalmsdecbillinggoal'];
		$psalmsdecbillingactual = $_POST['psalmsdecbillingactual'];
		$conn->query("UPDATE operations_team_corinthians SET endo_goal = '".$psalmsdecendogoal."', actual_endo = '".$psalmsdecendoactual."', billing_goal = '".$psalmsdecbillinggoal."', actual_billing = '".$psalmsdecbillingactual."' WHERE MONTH(assigned_month) = '12' AND YEAR(assigned_month) = YEAR(NOW())");

		$sql = "INSERT INTO tbl_admin_history_logs SET
					user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Target Goal',
                    x_module_action = 'Update Monthly Target - Team Corinthians'";
		$res = $conn->query($sql);                                
		if ($res) {
			$last_return_id = mysqli_insert_id($conn);
			if ($last_return_id) {
				$logsid = rand(10000000,99999999);
				$logsuserid = "LOG-".$logsid."-".$last_return_id;
				$logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
				$resquery = $conn->query($logsquery);
			}
		}
		$sql1 = "INSERT INTO tbl_admin_history_logs SET
					user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Target Goal',
                    x_module_action = 'View Target Goal'";
		$res1 = $conn->query($sql1);                                
		if ($res1) {
			$last_return_id = mysqli_insert_id($conn);
			if ($last_return_id) {
				$logsid = rand(10000000,99999999);
				$logsuserid = "LOG-".$logsid."-".$last_return_id;
				$logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
				$resquery = $conn->query($logsquery);
			}
		}
		$qstring = '?corinthianstarget=succ';
    } else {
		$qstring = '?corinthianstarget=err';
    }
	header("Location: ../target_goal.php".$qstring);
?>