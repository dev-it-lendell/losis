<?php
    $servername = "localhost";
    $username = "lendellp_losis";
    $password = "Lendell2021";
    $dbname = "lendellp_losis";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

        $sql_data = "SELECT CONCAT(fname, ,lname) as Name, endo_code FROM tbl_endo";
        $result_data=$conn->query($sql_data);
        $results=array();
    $filename = "Webinfopen.xls"; // File Name
    // Download file
    header("Content-Disposition: attachment; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-excel");

    $flag = false;
    while ($row = mysqli_fetch_assoc($result_data)) {
        if (!$flag) {
            // display field/column names as first row
            echo implode("\t", array_keys($row)) . "\r\n";
            $flag = true;
        }
        echo implode("\t", array_values($row)) . "\r\n";
    }
    ?>