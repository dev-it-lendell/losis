<?php
// Start output buffering
ob_start();

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include your connection and checking files
$connectPath = __DIR__ . '/../../connect.php';
$checkingPath = __DIR__ . '/../checking.php';

if (!file_exists($connectPath)) {
    die("Error: connect.php not found at {$connectPath}");
}

if (!file_exists($checkingPath)) {
    die("Error: checking.php not found at {$checkingPath}");
}

include $connectPath;
include $checkingPath;

// Initialize variables
$successCount = 0;
$errorCount = 0;
$errors = [];
$logMessages = [];


function getPostValue($key, $default = '') {
    return isset($_POST[$key]) ? $_POST[$key] : $default;
}

// APPROVE BATCH APPLICATIONS
// if (isset($_POST['approveBatchApplications'])) {
//     try {
//         // Batch endorsement details
//         $endorsementType = getPostValue('endorsementType');
//         $endorsementDate = getPostValue('endorsementDate');
//         $importance = getPostValue('importance');
//         $batchId = getPostValue('batchId');
//         $status = getPostValue('status');
//         $biId = getPostValue('biId');
//         $account = getPostValue('account');
//         $site = getPostValue('site');
//         $package = getPostValue('package');

//         // Application details
//         $applicationCodes = getPostValue('application_code', []);
//         $applicantNames = getPostValue('applicant_name', []);
//         $birthDates = getPostValue('birth_date', []);
//         $applicationDates = getPostValue('application_date', []);
//         $clientIds = getPostValue('client_id', []);
//         $endoTypes = getPostValue('endo_type', []);
//         $applicationStatuses = getPostValue('application_status', []);

//         foreach ($applicationCodes as $index => $applicationCode) {
//             $conn->begin_transaction();
            
//             try {
//                 $logMessages[] = "Processing application: $applicationCode";
                
//                 $applicantName = explode(' ', $applicantNames[$index]);
//                 $fname = $applicantName[0] ?? '';
//                 $mname = $applicantName[1] ?? '';
//                 $lname = $applicantName[2] ?? '';
//                 $suffix = $applicantName[3] ?? '';
//                 $birthDate = date('Y-m-d', strtotime($birthDates[$index]));
//                 $clientId = $clientIds[$index];

//                 $time = rand(10000000, 99999999);
//                 $date = date("m");
//                 $endo_services = 'BI';
//                 $endoCode = $clientacronym . '-' . '0' . $date . '-' . $time;
//                 $endoID = 'LOSI-' . '0' . $date . '-' . $time;

//                 // Insert into tbl_endo
//                 $stmt = $conn->prepare("INSERT INTO tbl_endo (endo_id, endo_code, endo_desc, fname, mname, lname, suffix, birthdate, endo_date, endo_status, folder_name, endorsed_to, turn_around_date, package_desc, client_id, site_id, endo_requestor, importance, bi_id, account, endo_services, application_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), '0', ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
//                 $stmt->bind_param("ssssssssssssssssssss", $endoID, $endoCode, $batchId, $fname, $mname, $lname, $suffix, $birthDate, $endoCode, $clnt_supervisorid, $endorsementDate, $package, $clientId, $site, $clnt_requestor, $importance, $biId, $account, $endo_services, $applicationCode);
//                 $stmt->execute();
//                 $logMessages[] = "Inserted into tbl_endo";

//                 // Insert into tbl_endorsed_to
//                 $stmt = $conn->prepare("INSERT INTO tbl_endorsed_to (endo_code, endorsed_by, endorsed_to) VALUES (?, ?, ?)");
//                 $stmt->bind_param("sss", $endoCode, $_SESSION["user_id"], $team_);
//                 $stmt->execute();
//                 $logMessages[] = "Inserted into tbl_endorsed_to";

//                 // Insert into tbl_endorsement_bi_process
//                 $stmt = $conn->prepare("INSERT INTO tbl_endorsement_bi_process (endo_code, assigned_supervisor, percentage_, datetime_added) VALUES (?, ?, '15', NOW())");
//                 $stmt->bind_param("ss", $endoCode, $clnt_supervisorid);
//                 $stmt->execute();
//                 $logMessages[] = "Inserted into tbl_endorsement_bi_process";

//                 // Insert into endorsement_logs
//                 $stmt = $conn->prepare("INSERT INTO endorsement_logs (client_id, endo_code, endo_action, assigned_poc, assigned_team, datetime_added) VALUES (?, ?, 'Success Conversion of Application to Endorsement', ?, ?, NOW())");
//                 $stmt->bind_param("ssss", $_SESSION["user_id"], $endoCode, $clnt_supervisorid, $team_);
//                 $stmt->execute();
//                 $logMessages[] = "Inserted into endorsement_logs";

//                 // Update application_list
//                 $stmt = $conn->prepare("UPDATE application_list SET endo_type = '0', application_status = '1' WHERE application_code = ?");
//                 $stmt->bind_param("s", $applicationCode);
//                 $stmt->execute();
//                 $logMessages[] = "Updated application_list";

//                 // Insert into tbl_client_history_logs
//                 $stmt = $conn->prepare("INSERT INTO tbl_client_history_logs (user_id, x_module, x_module_action) VALUES (?, 'Applications - Approval of Application', 'Approve Application - Background Investigation')");
//                 $stmt->bind_param("s", $_SESSION['user_id']);
//                 $stmt->execute();
//                 $last_return_id = $conn->insert_id;
//                 $logMessages[] = "Inserted into tbl_client_history_logs";

//                 // Update tbl_client_history_logs with logs_id
//                 $logsid = rand(10000000, 99999999);
//                 $logsuserid = "LOG-" . $logsid . "-" . $last_return_id;
//                 $stmt = $conn->prepare("UPDATE tbl_client_history_logs SET logs_id = ? WHERE id = ?");
//                 $stmt->bind_param("si", $logsuserid, $last_return_id);
//                 $stmt->execute();
//                 $logMessages[] = "Updated tbl_client_history_logs with logs_id";

//                 // Commit transaction
//                 $conn->commit();
//                 $successCount++;
//                 $logMessages[] = "Transaction committed for $applicationCode";
//             } catch (Exception $e) {
//                 $conn->rollback();
//                 $errorCount++;
//                 $errors[] = "Error processing application $applicationCode: " . $e->getMessage();
//                 $logMessages[] = "Error for $applicationCode: " . $e->getMessage();
//             }
//         }

//         // Prepare response
// 		$response = [
//             'success' => $successCount,
//             'errors' => $errorCount,
//             'message' => "$successCount applications approved successfully. $errorCount applications failed.",
//             'errorDetails' => $errors,
//             'logMessages' => $logMessages,
//             'reload' => ($successCount > 0) // Add this line to indicate if page should be reloaded
//         ];
//     } catch (Exception $e) {
//         $response = [
//             'success' => 0,
//             'errors' => 1,
//             'message' => 'An error occurred while processing the batch approval.',
//             'errorDetails' => [$e->getMessage()],
//             'logMessages' => $logMessages,
//             'reload' => false // Add this line to indicate that page should not be reloaded
//         ];
//     }

//     /// Clear the output buffer
//     $output = ob_get_clean();

//     // If there was any output, add it to the response
//     if (!empty($output)) {
//         // Strip HTML tags and trim whitespace
//         $cleanOutput = trim(strip_tags($output));
//         if (!empty($cleanOutput)) {
//             $response['phpOutput'] = $cleanOutput;
//         }
//     }

//     // Send JSON response
//     header('Content-Type: application/json');
//     echo json_encode($response);
//     exit;
// }

if (isset($_POST['approveBatchApplications'])) {
    try {
        // Batch endorsement details
        $endorsementType = getPostValue('endorsementType');
        $endorsementDate = getPostValue('endorsementDate');
        $importance = getPostValue('importance');
        $batchId = getPostValue('batchId');
        $status = getPostValue('status');
        $biId = getPostValue('biId');
        $account = getPostValue('account');
        $site = getPostValue('site');
        $package = getPostValue('package');

        // Application details
        $applicationCodes = getPostValue('application_code', []);
        $applicantNames = getPostValue('applicant_name', []);
        $birthDates = getPostValue('birth_date', []);
        $applicationDates = getPostValue('application_date', []);
        $clientIds = getPostValue('client_id', []);
        $endoTypes = getPostValue('endo_type', []);
        $applicationStatuses = getPostValue('application_status', []);

        foreach ($applicationCodes as $index => $applicationCode) {
            $conn->begin_transaction();
            
            try {
                $logMessages[] = "Processing application: $applicationCode";
                
                $applicantName = $applicantNames[$index];
                $nameParts = explode(' ', $applicantName);

                $fname = '';
                $mname = '';
                $lname = '';
                $suffix = '';

                $suffixCandidates = ['Jr', 'Sr', 'II', 'III', 'IV', 'N/A'];
                $nameCount = count($nameParts);

                if ($nameCount == 2) {
                    $fname = "{$nameParts[0]} {$nameParts[1]}";
                } elseif ($nameCount >= 3) {
                    $lname = $nameParts[$nameCount - 1];

                    if (in_array($lname, $suffixCandidates)) {
                        $suffix = $lname;
                        $lname = $nameParts[$nameCount - 2];

                        if ($nameCount == 4) {
                            $fname = "{$nameParts[0]} {$nameParts[1]}";
                        } else {
                            $fname = $nameParts[0];
                            $mname = implode(' ', array_slice($nameParts, 1, $nameCount - 3));
                        }
                    } else {
                        if ($nameCount == 3) {
                            $fname = "{$nameParts[0]}";
                            $mname = "{$nameParts[1]}";
                            $lname = "{$nameParts[2]}";
                        } elseif ($nameCount > 3) {
                            $fname = "{$nameParts[0]} {$nameParts[1]}";
                            $mname = implode(' ', array_slice($nameParts, 2, $nameCount - 3));
                            $lname = "{$nameParts[$nameCount - 1]}";
                        }
                    }
                } else {
                    $fname = $nameParts[0];
                }

                $birthDate = date('Y-m-d', strtotime($birthDates[$index]));
                $clientId = $clientIds[$index];

                $time = rand(10000000, 99999999);
                $date = date("m");
                $endo_services = 'BI';
                $endoCode = $clnt_acronym . '-' . '0' . $date . '-' . $time;
                $endoID = 'LOSI-' . '0' . $date . '-' . $time;

                // Insert into tbl_endo
                $stmt = $conn->prepare("INSERT INTO tbl_endo (endo_id, endo_code, endo_desc, fname, mname, lname, suffix, birthdate, endo_date, endo_status, folder_name, endorsed_to, turn_around_date, package_desc, client_id, site_id, endo_requestor, importance, bi_id, account, endo_services, application_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), '0', ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssssssssssssssssss", $endoID, $endoCode, $batchId, $fname, $mname, $lname, $suffix, $birthDate, $endoCode, $clnt_supervisorid, $endorsementDate, $package, $clientId, $clnt_siteid, $clnt_requestor, $importance, $biId, $account, $endo_services, $applicationCode);
                $stmt->execute();
                $logMessages[] = "Inserted into tbl_endo";

                // Insert into tbl_endorsed_to
                $stmt = $conn->prepare("INSERT INTO tbl_endorsed_to (endo_code, endorsed_by, endorsed_to) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $endoCode, $_SESSION["user_id"], $team_);
                $stmt->execute();
                $logMessages[] = "Inserted into tbl_endorsed_to";

                // Insert into tbl_endorsement_bi_process
                $stmt = $conn->prepare("INSERT INTO tbl_endorsement_bi_process (endo_code, assigned_supervisor, percentage_, datetime_added) VALUES (?, ?, '15', NOW())");
                $stmt->bind_param("ss", $endoCode, $clnt_supervisorid);
                $stmt->execute();
                $logMessages[] = "Inserted into tbl_endorsement_bi_process";

                // Insert into endorsement_logs
                $stmt = $conn->prepare("INSERT INTO endorsement_logs (client_id, endo_code, endo_action, assigned_poc, assigned_team, datetime_added) VALUES (?, ?, 'Success Conversion of Application to Endorsement', ?, ?, NOW())");
                $stmt->bind_param("ssss", $_SESSION["user_id"], $endoCode, $clnt_supervisorid, $team_);
                $stmt->execute();
                $logMessages[] = "Inserted into endorsement_logs";

                // Update application_list
                $stmt = $conn->prepare("UPDATE application_list SET endo_type = '0', application_status = '1' WHERE application_code = ?");
                $stmt->bind_param("s", $applicationCode);
                $stmt->execute();
                $logMessages[] = "Updated application_list";

                // Insert into tbl_client_history_logs
                $stmt = $conn->prepare("INSERT INTO tbl_client_history_logs (user_id, x_module, x_module_action) VALUES (?, 'Applications - Approval of Application', 'Approve Application - Background Investigation')");
                $stmt->bind_param("s", $_SESSION['user_id']);
                $stmt->execute();
                $last_return_id = $conn->insert_id;
                $logMessages[] = "Inserted into tbl_client_history_logs";

                // Update tbl_client_history_logs with logs_id
                $logsid = rand(10000000, 99999999);
                $logsuserid = "LOG-" . $logsid . "-" . $last_return_id;
                $stmt = $conn->prepare("UPDATE tbl_client_history_logs SET logs_id = ? WHERE id = ?");
                $stmt->bind_param("si", $logsuserid, $last_return_id);
                $stmt->execute();
                $logMessages[] = "Updated tbl_client_history_logs with logs_id";
                
                
                //Sending Email - Start //
                $sql_email = "SELECT a.fname, b.useremail_ FROM tbl_users b LEFT JOIN tbl_supervisor a ON a.user_id = b.user_id WHERE a.user_id = '$clnt_supervisorid'";
                $result_email=$conn->query($sql_email);
                $row_email=$result_email->fetch_assoc();
                
                //Send email to supervisor if success.
                // confirm smtp ini_set("SMTP", "smtpout.secureserver.net"); 
                $to = $row_email['useremail_'];
                $subject = "New Endorsement";
                $message = "
                            <html>
                            <body>
                                <p>Hello " . $row_email['fname'] . ",</p>
                                <p>Good day!</p>
                                <p>We have a new endorsement. Please see the name of the applicant below:</p>
                                <table border='1'>
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Application Package</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>" . htmlspecialchars($biappl_fname) . "</td>
                                            <td>" . htmlspecialchars($biappl_mname) . "</td>
                                            <td>" . htmlspecialchars($biappl_lname) . "</td>
                                            <td>" . htmlspecialchars($app_package) . "</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>Thank you for your continued support!</p>
                            </body>
                            </html>
                        ";
                $from = $clnt_useremail;
                $headers = "From: $from\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=UTF-8\r\n";
                mail($to,$subject,$message,$headers);
                //Sending Email - End //

                // Commit transaction
                $conn->commit();
                $successCount++;
                $logMessages[] = "Transaction committed for $applicationCode";
            } catch (Exception $e) {
                $conn->rollback();
                $errorCount++;
                $errors[] = "Error processing application $applicationCode: " . $e->getMessage();
                $logMessages[] = "Error for $applicationCode: " . $e->getMessage();
            }
        }

        // Prepare response
        $response = [
            'success' => $successCount,
            'errors' => $errorCount,
            'message' => "$successCount applications approved successfully. $errorCount applications failed.",
            'errorDetails' => $errors,
            'logMessages' => $logMessages,
            'reload' => ($successCount > 0) // Add this line to indicate if page should be reloaded
        ];
    } catch (Exception $e) {
        $response = [
            'success' => 0,
            'errors' => 1,
            'message' => 'An error occurred while processing the batch approval.',
            'errorDetails' => [$e->getMessage()],
            'logMessages' => $logMessages,
            'reload' => false // Add this line to indicate that page should not be reloaded
        ];
    }

    // Clear the output buffer
    $output = ob_get_clean();

    // If there was any output, add it to the response
    if (!empty($output)) {
        // Strip HTML tags and trim whitespace
        $cleanOutput = trim(strip_tags($output));
        if (!empty($cleanOutput)) {
            $response['phpOutput'] = $cleanOutput;
        }
    }

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

// APPROVE APPLICATION - BI
if (isset($_POST['approvebiAppl'])) {
    // ... (new code for approving BI application)
    $biappl_fname = $_POST['biappl_fname'];
    $biappl_mname = $_POST['biappl_mname'];
    $biappl_lname = $_POST['biappl_lname'];
    $biappl_suffix = $_POST['biappl_suffix'];
    $biappl_dob = $_POST['biappl_dob'];
    $biappl_code = $_POST['biappl_code'];
    $app_endotype = $_POST['app_endotype'];
    $app_imp = $_POST['app_imp'];
    $app_account = $_POST['app_account'];
    $app_tadate = $_POST['app_tadate'];
    $app_batchid = $_POST['app_batchid'];
    $app_bIid = $_POST['app_bIid'];
    $app_package = $_POST['app_package'];
    $clientsite = $_POST['clientsite'];
    $supervisorid = $_POST['supervisorid'];
    $clientacronym = $_POST['clientacronym'];
    $appbi_approval = $_POST['appbi_approval'];

    $time = rand(10000000,99999999);
		$date = date("m");
		$endo_services = 'BI';
		$endoCode = $clientacronym.'-'.'0'.$date.'-'.$time;
		$endoID = 'LOSI-'.'0'.$date.'-'.$time;
		$target_dir = "../documents_endo/{$year}/{$endoCode}/FinalReport";
		$educ_dir = "../documents/{$year}/{$clientacronym}/{$endoCode}/EducationDocuments/";
		$emp_dir = "../documents/{$year}/{$clientacronym}/{$endoCode}/EmploymentDocuments/";
		$other_dir = "../documents/{$year}/{$clientacronym}/{$endoCode}/OtherDocuments/";

		$conn->query("INSERT INTO tbl_endo SET endo_id = '".$endoID."', endo_code = '".$endoCode."', endo_desc = '$app_batchid', fname = '".$biappl_fname."', mname = '".$biappl_mname."', lname = '".$biappl_lname."', suffix = '".$biappl_suffix."', birthdate = '".$biappl_dob."', endo_date = NOW(), endo_status = '0', folder_name = '".$endoCode."', endorsed_to = '".$clnt_supervisorid."', turn_around_date = '".$app_tadate."', package_desc = '".$app_package."', client_id = '".$_SESSION["user_id"]."', site_id = '".$clnt_siteid."', endo_requestor = '".$clnt_requestor."', importance = '".$app_imp."', bi_id = '".$app_bIid."', account = '".$app_account."', endo_services = '".$endo_services."', application_code = '".$biappl_code."'");
		$conn->query("INSERT INTO tbl_endorsed_to SET endo_code = '".$endoCode."', endorsed_by = '".$_SESSION["user_id"]."', endorsed_to = '".$team_."'");
		$conn->query("INSERT INTO tbl_endorsement_bi_process SET endo_code = '".$endoCode."', assigned_supervisor = '".$clnt_supervisorid."', percentage_ = '15', datetime_added = NOW()");
		$conn->query("INSERT INTO endorsement_logs SET client_id = '".$_SESSION["user_id"]."', endo_code = '".$endoCode."', endo_action = 'Success Convertion of Application to Endorsement', assigned_poc = '".$clnt_supervisorid."', assigned_team = '".$team_."', datetime_added = NOW()");
		$conn->query("INSERT INTO endorsement_logs (client_id, endo_code, endo_action, assigned_poc, assigned_team, datetime_added) VALUES ('".$clientid."', '".$endoCode."', 'Create New Endorsement', '".$clnt_supervisorid."', '".$team_."', NOW())");  
		$conn->query("UPDATE application_list SET endo_type = '0', application_status = '1' WHERE application_code = '".$biappl_code."'");
		mkdir($target_dir, 0777, true);
		mkdir($educ_dir, 0777, true);
		mkdir($emp_dir, 0777, true);
		mkdir($other_dir, 0777, true);
		$sql = "INSERT INTO tbl_client_history_logs SET
					user_id = '". $_SESSION['user_id'] ."',
					x_module = 'Applications - Approval of Application',
					x_module_action = 'Approve Application - Background Investigation'";
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
					x_module = 'Manage Endorsements',
					x_module_action = 'View Manage Endorsements - Background Investigation'";
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
		//Sending Email - Start //
        $sql_email = "SELECT a.fname, b.useremail_ FROM tbl_users b LEFT JOIN tbl_supervisor a ON a.user_id = b.user_id WHERE a.user_id = '$supervisorid'";
        $result_email=$conn->query($sql_email);
        $row_email=$result_email->fetch_assoc();
        
        //Send email to supervisor if success.

        $to = $row_email['useremail_'];
        $subject = "New Endorsement";
        $message = "
                    <html>
                    <body>
                        <p>Hello " . $row_email['fname'] . ",</p>
                        <p>Good day!</p>
                        <p>We have a new endorsement. Please see the name of the applicant below:</p>
                        <table border='1'>
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Application Package</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>" . htmlspecialchars($biappl_fname) . "</td>
                                    <td>" . htmlspecialchars($biappl_mname) . "</td>
                                    <td>" . htmlspecialchars($biappl_lname) . "</td>
                                    <td>" . htmlspecialchars($app_package) . "</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>Thank you for your continued support!</p>
                    </body>
                    </html>
                ";
        $from = $clnt_useremail;
        $headers = "From: $from\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        mail($to,$subject,$message,$headers);
        //Sending Email - End //
                
    $qstring = '?status=succ';
    header("Location: ../manage_bi_endo.php".$qstring);
    exit;
}

// DISAPPROVE APPLICATION - BI
if (isset($_POST['disapprovebiAppl'])) {
    // ... (new code for disapproving BI application)
    $biappl_fname = $_POST['biappl_fname'];
    $biappl_mname = $_POST['biappl_mname'];
    $biappl_lname = $_POST['biappl_lname'];
    $biappl_suffix = $_POST['biappl_suffix'];
    $biappl_dob = $_POST['biappl_dob'];
    $biappl_code = $_POST['biappl_code'];
    $app_endotype = $_POST['app_endotype'];
    $app_imp = $_POST['app_imp'];
    $app_account = $_POST['app_account'];
    $app_tadate = $_POST['app_tadate'];
    $app_batchid = $_POST['app_batchid'];
    $app_bIid = $_POST['app_bIid'];
    $app_package = $_POST['app_package'];
    $clientsite = $_POST['clientsite'];
    $supervisorid = $_POST['supervisorid'];
    $clientacronym = $_POST['clientacronym'];
    $appbi_approval = $_POST['appbi_approval'];

    $conn->query("UPDATE application_list SET endo_type = '0', application_status = '2' WHERE application_code = '".$biappl_code."'");
    $sql = "INSERT INTO tbl_client_history_logs SET
                user_id = '". $_SESSION['user_id'] ."',
                x_module = 'Applications - Approval of Application',
                x_module_action = 'Disapprove Application - Background Investigation'";
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
                x_module = 'Manage Endorsements',
                x_module_action = 'View Manage Endorsements - Background Investigation'";
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
    $qstring = '?appl=err';
    header("Location: ../manage_applications.php".$qstring);
    exit;
}

// APPROVE APPLICATION - DC
if (isset($_POST['approvedcAppl'])) {
    // ... (new code for approving DC application)
    $biappl_fname = $_POST['biappl_fname'];
    $biappl_mname = $_POST['biappl_mname'];
    $biappl_lname = $_POST['biappl_lname'];
    $biappl_suffix = $_POST['biappl_suffix'];
    $biappl_dob = $_POST['biappl_dob'];
    $biappl_code = $_POST['biappl_code'];
    $app_endotype = $_POST['app_endotype'];
    $app_imp = $_POST['app_imp'];
    $app_account = $_POST['app_account'];
    $app_tadate = $_POST['app_tadate'];
    $app_batchid = $_POST['app_batchid'];
    $app_bIid = $_POST['app_bIid'];
    $app_package = $_POST['app_package'];
    $supervisorid = $_POST['supervisorid'];
    $clientacronym = $_POST['clientacronym'];
    $appbi_approval = $_POST['appbi_approval'];

    $time = rand(10000000,99999999);
    $date = date("m");
    $endo_services = 'BI';
    $endoCode = $clientacronym.'-'.'0'.$date.'-'.$time;
    $endoID = 'LOSI-'.'0'.$date.'-'.$time;

    $conn->query("INSERT INTO tbl_endo_criminal SET endo_id = '".$endoID."', endo_code = '".$endoCode."', endo_desc = '$app_batchid', endo_date = NOW(), endo_status = '0', endorsed_to = '".$clnt_supervisorid."', turn_around_date = '".$app_tadate."', fname = '".$biappl_fname."', mname = '".$biappl_mname."', lname = '".$biappl_lname."', suffix = '".$biappl_suffix."', birthdate = '".$biappl_code."', client_id = '".$_SESSION["user_id"]."', site_id = '".$clnt_siteid."', endo_requestor = '".$clnt_requestor."', importance = '".$app_imp."', bi_id = '".$app_bIid."', account = '".$app_account."', endo_services = '".$endo_services."'");
    $conn->query("INSERT INTO tbl_endorsed_to SET endo_code = '".$endoCode."', endorsed_by = '".$_SESSION["user_id"]."', endorsed_to = '".$team_."'");
    $conn->query("INSERT INTO tbl_endorsement_dc_process SET endo_code = '".$endoCode."', assigned_supervisor = '".$clnt_supervisorid."', percentage_ = '15', datetime_added = NOW()");
    $conn->query("INSERT INTO endorsement_logs SET client_id = '".$_SESSION["user_id"]."', endo_code = '".$endoCode."', endo_action = 'Success Convertion of Application to Endorsement', assigned_poc = '".$clnt_supervisorid."', assigned_team = '".$team_."', datetime_added = NOW()");
    $conn->query("UPDATE application_list SET endo_type = '1', application_status = '1' WHERE application_code = '".$biappl_code."'");
    $sql = "INSERT INTO tbl_client_history_logs SET
                user_id = '". $_SESSION['user_id'] ."',
                x_module = 'Applications - Approval of Application',
                x_module_action = 'Approve Application - Database Check'";
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
                x_module = 'Manage Endorsements',
                x_module_action = 'View Manage Endorsements - Database Check'";
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
    $qstring = '?status=succ';
    header("Location: ../manage_dc_endo.php".$qstring);
    exit;
}

// DISAPPROVE APPLICATION - DC
if (isset($_POST['disapprovedcAppl'])) {
    // ... (new code for disapproving DC application)
    $biappl_fname = $_POST['biappl_fname'];
    $biappl_mname = $_POST['biappl_mname'];
    $biappl_lname = $_POST['biappl_lname'];
    $biappl_suffix = $_POST['biappl_suffix'];
    $biappl_dob = $_POST['biappl_dob'];
    $biappl_code = $_POST['biappl_code'];
    $app_endotype = $_POST['app_endotype'];
    $app_imp = $_POST['app_imp'];
    $app_account = $_POST['app_account'];
    $app_tadate = $_POST['app_tadate'];
    $app_batchid = $_POST['app_batchid'];
    $app_bIid = $_POST['app_bIid'];
    $app_package = $_POST['app_package'];
    $clientsite = $_POST['clientsite'];
    $supervisorid = $_POST['supervisorid'];
    $clientacronym = $_POST['clientacronym'];
    $appbi_approval = $_POST['appbi_approval'];

    $conn->query("UPDATE application_list SET endo_type = '1', application_status = '2' WHERE application_code = '".$biappl_code."'");
    $sql = "INSERT INTO tbl_client_history_logs SET
                user_id = '". $_SESSION['user_id'] ."',
                x_module = 'Applications - Approval of Application',
                x_module_action = 'Disapprove Application - Database Check'";
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
                x_module = 'Manage Endorsements',
                x_module_action = 'View Manage Endorsements - Database Check'";
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
    $qstring = '?appl=err';
    header("Location: ../manage_applications.php".$qstring);
    exit;
}

// If we reach here, it means no valid action was performed
$output = ob_get_clean();
$response = [
    'success' => 0,
    'errors' => 1,
    'message' => 'Invalid action or no action specified.',
    'errorDetails' => ['No valid action was performed.'],
    'phpOutput' => $output,
    'reload' => false
];

// Send JSON response
header('Content-Type: application/json');
echo json_encode($response);
exit;