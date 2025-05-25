<?php
    include '../../connect.php';

    if (isset($_POST['save'])) {
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
                    $fname   = $line[0];
                    $mname  = $line[1];
                    $lname  = $line[2];
                    $birthdate = $line[3];
                    $newbirthdate = date('Y-m-d', strtotime($birthdate));
                    $endoCode = $line[4];


                    // CHECK WHETHER DATA ALREADY EXISTS IN THE DATABASE WITH THE SAME NAME //
                    $prevQuery = "SELECT id FROM tbl_report_criminal_check WHERE fname = '".$line[0]."' AND mname = '".$line[1]."' AND lname = '".$line[2]."'";
                    $prevResult = $conn->query($prevQuery); 

                    if ($prevResult->num_rows > 0) {
                        // UPDATE DATA IN THE DATABASE //
                        $conn->query("UPDATE tbl_report_criminal_check SET endo_status = '1' WHERE fname = '".$line[1]."' AND mname = '".$line[2]."' AND lname = '".$line[3]."' AND suffix = '".$line[4]."'");
                    } else {
                        for ($count = 0; $count < count($fname); $count++) { 
                            extract($_POST);
                            $conn->query("INSERT INTO tbl_report_criminal_check (fname, mname, lname, birthdate, endo_code) VALUES('".$fname."', '".$mname."', '".$lname."', '".$newbirthdate."', '".$endoCode."')");
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
        header("Location: ../manage_reports.php".$qstring);  
    }
?>
