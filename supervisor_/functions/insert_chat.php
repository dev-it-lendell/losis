<?php
session_start();
include_once "../../connect.php";

header('Content-Type: application/json');

$response = array('status' => 'error', 'message' => '', 'debug' => array());

try {
    if (!isset($_SESSION['user_id'])) {
        throw new Exception('User not logged in');
    }

    $outgoing_id = $_SESSION['user_id'];
    $incoming_id = isset($_POST['incoming_id']) ? mysqli_real_escape_string($conn, $_POST['incoming_id']) : null;
    $message = isset($_POST['message']) ? mysqli_real_escape_string($conn, $_POST['message']) : null;

    if (!$incoming_id) {
        throw new Exception('No recipient specified');
    }

    if (empty($message)) {
        throw new Exception('You can\'t send an empty message');
    }
    
    
    $sql = "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg, msg_datetime) VALUES (?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        throw new Exception("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("sss", $incoming_id, $outgoing_id, $message);
    if (!$stmt->execute()) {
        throw new Exception("Execute failed: " . $stmt->error);
    }

    $response['status'] = 'success';
    $response['message'] = 'Message sent successfully';

} catch (Exception $e) {
    $response['message'] = $e->getMessage();
    $response['debug']['error'] = $e->getTraceAsString();
}

echo json_encode($response);
?>