<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
set_time_limit(0);
date_default_timezone_set("Asia/Manila");

$servername = "localhost";
$username = "root";
$password = "D@t@b@s3";
$dbname = "lendellp_losis_test";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$apiURL = "http://localhost:8888/api/";

// $servername = "localhost";
// $username = "lendellp_losis";
// $password = "Lendell2021";
// $dbname = "lendellp_losis";
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// $servername_lopis = "localhost";
// $username_lopis = "lendellp_payroll";
// $password_lopis = "Lendell2021";
// $db_lopis = "lendellp_systemap";
// $conn_lopis = mysqli_connect($servername_lopis, $username_lopis, $password_lopis, $db_lopis);

// if (!$conn && !$conn_lopis) {
//     die("Connection failed: " . mysqli_connect_error());
// }

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}