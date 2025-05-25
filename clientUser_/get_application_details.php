<?php
include '../connect.php'; // Make sure this file establishes a database connection

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Receive the POST data
$data = json_decode(file_get_contents('php://input'), true);
$selectedApplications = $data['applications'];

// Validate input
if (!is_array($selectedApplications) || empty($selectedApplications)) {
    echo json_encode(['error' => 'No applications selected']);
    exit;
}

// Prepare the placeholders for the IN clause
$placeholders = implode(',', array_fill(0, count($selectedApplications), '?'));

$sql = "SELECT a.application_code, a.client_id, a.endo_type, a.application_status, a.application_datetime, 
               b.fname_, b.mname_, b.lname_, b.suffix_,
               CONCAT(b.fname_, ' ', IFNULL(b.mname_, ''), ' ', b.lname_, ' ', IFNULL(b.suffix_, '')) AS applicantname, 
               b.birthdate_ 
        FROM application_list AS a 
        LEFT JOIN application_personal_info AS b ON a.application_code = b.application_code 
        WHERE a.application_code IN ($placeholders)";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    echo json_encode(['error' => 'Failed to prepare statement: ' . $conn->error]);
    exit;
}

// Bind the application codes to the prepared statement
$types = str_repeat('s', count($selectedApplications)); // Assuming application_code is a string
$stmt->bind_param($types, ...$selectedApplications);

if (!$stmt->execute()) {
    echo json_encode(['error' => 'Failed to execute statement: ' . $stmt->error]);
    exit;
}

// Bind the result variables
$stmt->bind_result(
    $application_code, 
    $client_id, 
    $endo_type, 
    $application_status, 
    $application_datetime, 
    $fname_, 
    $mname_, 
    $lname_, 
    $suffix_, 
    $applicantname, 
    $birthdate_
);

$output = '';
while ($stmt->fetch()) {
    $output .= '<div class="application-details mb-4">';
    $output .= '<p><strong>Application Code:</strong> ' . htmlspecialchars($application_code) . '</p>';
    $output .= '<p><strong>Applicant Name:</strong> ' . htmlspecialchars($applicantname) . '</p>';
    $output .= '<p><strong>Date of Birth:</strong> ' . date('F d, Y', strtotime($birthdate_)) . '</p>';
    $output .= '<p><strong>Application Date:</strong> ' . date('F d, Y - h:i A', strtotime($application_datetime)) . '</p>';
    $output .= '<p><strong>Client ID:</strong> ' . htmlspecialchars($client_id) . '</p>';
    $output .= '<p><strong>Endorsement Type:</strong> ' . htmlspecialchars($endo_type) . '</p>';
    $output .= '<p><strong>Status:</strong> ' . ($application_status == '1' ? 'Approved' : 'Pending') . '</p>';
    $output .= '</div><hr>';
}

if (empty($output)) {
    echo json_encode(['error' => 'No applications found']);
} else {
    echo $output;
}

$stmt->close();
$conn->close();
?>
