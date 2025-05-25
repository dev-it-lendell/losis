<?php
    include '../../connect.php';
    include '../checking.php';

    if (isset($_POST['importDTR'])) {
		$csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
		if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)) {
			if (is_uploaded_file($_FILES['file']['tmp_name'])) {
				$csvFile = fopen($_FILES['file']['tmp_name'], 'r');
				fgetcsv($csvFile);
				while (($line = fgetcsv($csvFile)) !== FALSE) {
					$inputdate = $line[0];
					$newinputdate = date('Y-m-d', strtotime($inputdate));
                    $systemtype = $line[1];
                    $activity = $line[2];
                    $quantity = $line[3];
                    $activitystatus = $line[4];
                    $time = rand(10000000,99999999);
                    $date = date("m");
                    $dtrCode = 'DTR'.'-'.'0'.$date.'-'.$time;
                    for ($count = 0; $count < count($activity); $count++) { 
						$conn->query("INSERT INTO dtr_itsupport (dtr_id, support_id, date_created, system_type, activity_, quantity_, status_, datetime_added) VALUES('".$dtrCode."' ,'". $_SESSION['user_id'] ."', '".$newinputdate."', '".$systemtype."', '".$activity."', '".$quantity."', '".$activitystatus."', NOW())");
                        $sql = "INSERT INTO tbl_support_history_logs SET
									user_id = '". $_SESSION['user_id'] ."',
                                    x_module = 'DTR Management',
                                    x_module_action = 'Upload DTR Records'";
                        $res = $conn->query($sql);
                        if ($res) {
                        	$last_return_id = mysqli_insert_id($conn);
                            if ($last_return_id) {
                                $logsid = rand(10000000,99999999);
                                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                                    $resquery = $conn->query($logsquery);
                                }
                            }
                        $sql1 = "INSERT INTO tbl_support_history_logs SET
                               		user_id = '". $_SESSION['user_id'] ."',
                               	    x_module = 'DTR Management',
                           	        x_module_action = 'View DTR Management - Manage DTR'";
                        $res1 = $conn->query($sql1);                                
                        if ($res1) {
                        	$last_return_id = mysqli_insert_id($conn);
                            if ($last_return_id) {
                            	$logsid = rand(10000000,99999999);
                                	$logsuserid = "LOG-".$logsid."-".$last_return_id;
                               	    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                           	        $resquery = $conn->query($logsquery);
                   	        }
                       	}
                    }
				}
                fclose($csvFile);
                $qstring = '?status=succ';	
			} else {
				$qstring = '?status=err';
			}
		} else {
			$qstring = '?status=invalid_file';
		}
        header("Location: ../manage_dtr.php".$qstring);  
    }
?>