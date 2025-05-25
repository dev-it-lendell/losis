<?php
    include '../../connect.php';
    include '../checking.php';

    if (isset($_POST['saveEndo'])) {
        // BACKGROUND INVESTIGATION //
        if ($_POST['endo_type'] == '0') {
            // ALLOWED MIME TYPES //
            $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');

            // VALIDATE WHETHER SELECTED FILE IS A CSV FILE //
            if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)) {
                // IF THE FILE IS UPLOADED //
                if (is_uploaded_file($_FILES['file']['tmp_name'])) {
                    // OPEN UPLOADED CSV FILE WITH READ-ONLY MODE //
                    $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
                    // SKIP THE FIRST LINE //
                    fgetcsv($csvFile);

                    // PARSE DATA FROM CSV FILE LINE BY LINE //
                    while (($line = fgetcsv($csvFile)) !== FALSE) {
                        // GET ROW DATA //
                        $bi_id = $line[0];
                        $fname   = $line[1];
                        $mname  = $line[2];
                        $lname  = $line[3];
                        $suffix  = $line[4];
                        $birthdate = $line[5];
                        $newbirthdate = date('Y-m-d', strtotime($birthdate));
                        $account = $line[6];
                        $package = $line[7];

                        // ENDORSEMENT INFORMATION //
                        $time = rand(10000000,99999999);
                        $date = date("m");
                        $endo_services = 'BI';
                        $endo_desc = $_POST['endo_desc'];
                        $turn_around_date = $_POST['turn_around_date'];
                        $importance = $_POST['importance'];
                        $clientsite = $_POST['clientsite'];
                        $supervisorid = $_POST['supervisorid'];
                        $clientacronym = $_POST['clientacronym'];
                        $endoCode = $clientacronym.'-'.'0'.$date.'-'.$time;
                        $endoID = 'LOSI-'.'0'.$date.'-'.$time;
                        $time = rand(10000000,99999999);
                        $date = date("m");
                        $applicationCode = 'APPL'.'-'.'0'.$date.'-'.$time;
                        $target_dir = "../../application_documents/{$year}/{$clientacronym}/{$applicationCode}";
                        // $educ_dir = "../documents_endo/{$year}/{$clientacronym}/{$endoCode}/EducationDocuments/";
                        // $emp_dir = "../documents_endo/{$year}/{$clientacronym}/{$endoCode}/EmploymentDocuments/";
                        // $other_dir = "../documents_endo/{$year}/{$clientacronym}/{$endoCode}/OtherDocuments/";
                        //Get supervisor email.
                        $sql_email = "SELECT a.fname, b.useremail_ FROM tbl_users b LEFT JOIN tbl_supervisor a ON a.user_id = b.user_id WHERE a.user_id = '$supervisorid'";
                        $result_email=$conn->query($sql_email);
                        $row_email=$result_email->fetch_assoc();

                        // CHECK WHETHER DATA ALREADY EXISTS IN THE DATABASE WITH THE SAME NAME //
                        $prevQuery = "SELECT id FROM tbl_endo WHERE fname = '".$line[1]."' AND mname = '".$line[2]."' AND lname = '".$line[3]."' AND suffix = '".$line[4]."'";
                        $prevResult = $conn->query($prevQuery); 

                        if ($prevResult->num_rows > 0) {
                            // UPDATE DATA IN THE DATABASE //
                            $conn->query("UPDATE tbl_endo SET endo_status = '1' WHERE fname = '".$line[1]."' AND mname = '".$line[2]."' AND lname = '".$line[3]."' AND suffix = '".$line[4]."'");
                        } else {
                            for ($count = 0; $count < count($fname); $count++) { 
                                extract($_POST);
                                $conn->query("INSERT INTO tbl_endo (bi_id, fname, mname, lname, suffix, birthdate, endo_id, endo_desc, endo_code, endo_date, endo_status, folder_name, client_id, endorsed_to, turn_around_date, endo_services, endo_requestor, site_id, importance, account, package_desc, application_code) VALUES('".$bi_id."', '".$fname."', '".$mname."', '".$lname."', '".$suffix."', '".$newbirthdate."', '".$endoID."', '".$endo_desc."', '".$endoCode."', NOW(), '0', '".$endoCode."', '".$clientid."', '".$supervisorid."', '".$turn_around_date."', '".$endo_services."', '".$clnt_requestor."', '".$clientsite."', '".$importance."', '".$account."', '".$package."', '".$applicationCode."')");
                                $conn->query("INSERT INTO tbl_endorsed_to (endo_code, endorsed_by, endorsed_to) VALUES ('".$endoCode."', '".$clientid."', '".$team_."')");
                                $conn->query("INSERT INTO tbl_endorsement_bi_process (assigned_supervisor, percentage_, endo_code, datetime_added) VALUES ('".$supervisorid."', '15', '".$endoCode."', NOW())");
                                $conn->query("INSERT INTO endorsement_logs (client_id, endo_code, endo_action, assigned_poc, assigned_team, datetime_added) VALUES ('".$clientid."', '".$endoCode."', 'Create New Endorsement', '".$supervisorid."', '".$team_."', NOW())");                            
                                mkdir($target_dir, 0777, true);
                                // mkdir($educ_dir, 0777, true);
                                // mkdir($emp_dir, 0777, true);
                                // mkdir($other_dir, 0777, true);
                                $sql = "INSERT INTO tbl_client_history_logs SET
                                        user_id = '". $_SESSION['user_id'] ."',
                                        x_module = 'New Endorsement',
                                        x_module_action = 'Create New Endorsement'";
                                $res = $conn->query($sql);
                                
                                //Check whether the query was successful or not
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
                                        x_module_action = 'View Background Investigation'";
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
                                $sql2 = "INSERT INTO tbl_notifications SET
                                        notif_subject = 'Background Investigation - $endoCode',
                                        notif_text = 'New Endorsement',
                                        notif_details = 'Create New Endorsement',
                                        notif_status = '0',
                                        notif_datetime = NOW(),
                                        notif_to = '".$supervisorid."',
                                        notif_from =    '". $_SESSION["user_id"]."'";   
                                $res2 = $conn->query($sql2);
                            }
                                //Send email to supervisor if success.
                                $sql_email = "SELECT a.fname, b.useremail_ FROM tbl_users b LEFT JOIN tbl_supervisor a ON a.user_id = b.user_id WHERE a.user_id = '$supervisorid'";
                                $result_email=$conn->query($sql_email);
                                $row_email=$result_email->fetch_assoc();
                                    if($res) {
                                    // confirm smtp
                                    // ini_set("SMTP", "smtpout.secureserver.net"); 
                                    // $to = $row_email['useremail_'];
                                    $to = 'samsonjesper24@gmail.com';
                                    $subject = "New Endorsement";
                                    $message = "Hello ".$row_email['fname'].', '."We have a new endorsement/s.".''." Thank you!" ;
                                    $from = $clnt_useremail;
                                    $headers = "From: $from";
                                    mail($to,$subject,$message,$headers);
                                    
                                //}else {
                                    //die("Query failed2");
                                }
                        }
                                
                    }
                    // CLOSE OPENED CSV FILE //
                    fclose($csvFile);
                    $qstring = '?status=succ';
                } else {
                    $qstring = '?status=err';
                }
            } else {
                $qstring = '?status=invalid_file';
            }         
            // REDIRECT TO THE LISTING PAGE //
            header("Location: ../manage_bi_endo.php".$qstring);  

        // DATABASE CHECK //    
        } else {
            // ALLOWED MIME TYPES //
            $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');

            // VALIDATE WHETHER SELECTED FILE IS A CSV FILE //
            if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)) {
                // IF THE FILE IS UPLOADED //
                if (is_uploaded_file($_FILES['file']['tmp_name'])) {
                    // OPEN UPLOADED CSV FILE WITH READ-ONLY MODE //
                    $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
                    // SKIP THE FIRST LINE //
                    fgetcsv($csvFile);

                    // PARSE DATA FROM CSV FILE LINE BY LINE //
                    while (($line = fgetcsv($csvFile)) !== FALSE) {
                        $bi_id = $line[0];
                        $fname   = $line[1];
                        $mname  = $line[2];
                        $lname  = $line[3];
                        $suffix  = $line[4];
                        $birthdate = $line[5];
                        $newbirthdate = date('Y-m-d', strtotime($birthdate));
                        $account = $line[6];
                        $package = $line[7];

                        // ENDORSEMENT INFORMATION //
                        $time = rand(10000000,99999999);
                        $date = date("m");
                        $endo_services = 'DC';
                        $endo_desc = $_POST['endo_desc'];
                        $dc_turn_around_date = $_POST['dc_turn_around_date'];
                        $importance = $_POST['importance'];
                        $clientsite = $_POST['clientsite'];
                        $supervisorid = $_POST['supervisorid'];
                        $clientacronym = $_POST['clientacronym'];
                        $endoCode = $clientacronym.'-'.'0'.$date.'-'.$time;
                        $endoID = 'LOSI-'.'0'.$date.'-'.$time;

                        // CHECK WHETHER DATA ALREADY EXISTS IN THE DATABASE WITH THE SAME NAME //
                        $prevQuery = "SELECT id FROM tbl_endo_criminal WHERE fname = '".$line[1]."' AND mname = '".$line[2]."' AND lname = '".$line[3]."' AND suffix = '".$line[4]."'";
                        $prevResult = $conn->query($prevQuery);

                        if ($prevResult->num_rows > 0) {
                            // UPDATE DATA IN THE DATABASE //
                            $conn->query("UPDATE tbl_endo_criminal SET endo_status = '1' WHERE fname = '".$line[1]."' AND mname = '".$line[2]."' AND lname = '".$line[3]."' AND suffix = '".$line[4]."'");
                        } else {
                            for ($count = 0; $count < count($fname); $count++) { 
                                extract($_POST);
                                $conn->query("INSERT INTO tbl_endo_criminal (bi_id, endo_requestor, fname, mname, lname, suffix, birthdate, endo_id, endo_desc, endo_code, endo_date, endo_status, client_id, turn_around_date, endo_services, endorsed_to, account, site_id, importance, package_desc)
                                VALUES ('".$bi_id."','".$endo_requestor."','".$fname."', '".$mname."', '".$lname."', '".$suffix."', '".$newbirthdate."', '".$endoID."', '".$endo_desc."', '".$endoCode."', NOW(), '0', '".$clientid."', '".$dc_turn_around_date."', '".$endo_services."', '".$supervisorid."', '".$account."', '".$clientsite."', '".$importance."', '".$package."')");
                                $conn->query("INSERT INTO tbl_endorsed_to (endo_code, endorsed_by, endorsed_to) VALUES ('".$endoCode."', '".$clientid."', '".$team_."')");
                                $conn->query("INSERT INTO tbl_endorsement_dc_process (assigned_supervisor, percentage_, endo_code, datetime_added) VALUES ('".$supervisorid."', '15', '".$endoCode."', NOW())");
                                $conn->query("INSERT INTO endorsement_logs (client_id, endo_code, endo_action, assigned_poc, assigned_team, datetime_added) VALUES ('".$clientid."', '".$endoCode."', 'Create New Endorsement', '".$supervisorid."', '".$team_."', NOW())");
                                $sql = "INSERT INTO tbl_client_history_logs SET
                                        user_id = '". $_SESSION['user_id'] ."',
                                        x_module = 'New Endorsement',
                                        x_module_action = 'Create New Endorsement'";
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
                                        x_module_action = 'View Database Check'";
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
                                $sql2 = "INSERT INTO tbl_notifications SET
                                        notif_subject = 'Database Check - $endoCode',
                                        notif_text = 'New Endorsement',
                                        notif_details = 'Create New Endorsement',
                                        notif_status = '0',
                                        notif_datetime = NOW(),
                                        notif_to = '".$supervisorid."',
                                        notif_from =    '". $_SESSION["user_id"]."'";   
                                $res2 = $conn->query($sql2);
                            }
                        }
                    }
                    // CLOSE OPENED CSV FILE //
                    fclose($csvFile);
                    $qstring = '?status=succ';
                } else {
                    $qstring = '?status=err';
                }
            } else {
                $qstring = '?status=invalid_file';
            }
            // REDIRECT TO THE LISTING PAGE //
            header("Location: ../manage_dc_endo.php".$qstring);  
        }
    }
?>
