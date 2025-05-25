<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include_once "../../connect.php";

header('Content-Type: application/json');

$response = array('status' => 'error', 'message' => '', 'data' => '', 'debug' => array());

try {
    $response['debug']['session'] = $_SESSION;
    $response['debug']['post'] = $_POST;

    if (!isset($_SESSION['user_id'])) {
        throw new Exception('User not logged in');
    }

    $outgoing_id = $_SESSION['user_id'];
    $incoming_id = isset($_POST['incoming_id']) ? mysqli_real_escape_string($conn, $_POST['incoming_id']) : null;

    $response['debug']['outgoing_id'] = $outgoing_id;
    $response['debug']['incoming_id'] = $incoming_id;

    if (!$incoming_id) {
        throw new Exception('No user selected for conversation');
    }

    $sql = "SELECT m.msg_id, m.incoming_msg_id, m.outgoing_msg_id, m.msg, 
                   CASE 
                       WHEN m.outgoing_msg_id = ? THEN 'outgoing'
                       ELSE 'incoming'
                   END AS message_type,
                   COALESCE(c.user_image, s.user_image, o.user_image) AS sender_image
            FROM messages m
            LEFT JOIN tbl_client c ON m.outgoing_msg_id = c.user_id
            LEFT JOIN tbl_supervisor s ON m.outgoing_msg_id = s.user_id
            LEFT JOIN tbl_operations o ON m.outgoing_msg_id = o.user_id
            WHERE (m.outgoing_msg_id = ? AND m.incoming_msg_id = ?)
               OR (m.outgoing_msg_id = ? AND m.incoming_msg_id = ?)
            ORDER BY m.msg_id ASC";

    $response['debug']['sql'] = $sql;

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        throw new Exception("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("sssss", $outgoing_id, $outgoing_id, $incoming_id, $incoming_id, $outgoing_id);
    if (!$stmt->execute()) {
        throw new Exception("Execute failed: " . $stmt->error);
    }

    $stmt->bind_result($msg_id, $db_incoming_id, $db_outgoing_id, $msg, $message_type, $sender_image);
    
    $messages = array();
    while ($stmt->fetch()) {
        $messages[] = array(
            'msg_id' => $msg_id,
            'incoming_msg_id' => $db_incoming_id,
            'outgoing_msg_id' => $db_outgoing_id,
            'msg' => $msg,
            'message_type' => $message_type,
            'sender_image' => $sender_image
        );
    }

    $response['debug']['messages'] = $messages;

    $output = "";
    foreach ($messages as $message) {
        if ($message['message_type'] === 'outgoing') {
            $output .= '<div class="chat outgoing">
                            <div class="details">
                                <p>'.htmlspecialchars($message['msg']).'</p>
                            </div>
                        </div>';
        } else {
            $user_image = $message['sender_image'] ? "../../LOSIS/profilepictures_/{$message['outgoing_msg_id']}/{$message['sender_image']}" : "../profilepictures_/default.jpg";
            $output .= '<div class="chat incoming">
                            <img src="'.$user_image.'" alt="Profile Picture" onerror="this.src=\'../profilepictures_/default.jpg\';">
                            <div class="details">
                                <p>'.htmlspecialchars($message['msg']).'</p>
                            </div>
                        </div>';
        }
    }

    $response['status'] = 'success';
    $response['data'] = $output;
    $response['debug']['message_count'] = count($messages);

} catch (Exception $e) {
    $response['message'] = $e->getMessage();
    $response['debug']['error'] = $e->getTraceAsString();
}

echo json_encode($response);
?>