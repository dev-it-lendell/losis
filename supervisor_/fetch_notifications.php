<?php
session_start();
header('Content-Type: application/json');
ini_set('display_errors', 1);
error_reporting(E_ALL);

$response = ['success' => false, 'data' => '', 'message' => '', 'error' => ''];

$db = new mysqli('localhost', 'lendellp_losis', 'Lendell2021', 'lendellp_losis');

if ($db->connect_error) {
    $response['error'] = "Connection failed: " . $db->connect_error;
    echo json_encode($response);
    exit;
}

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    $response['error'] = "User not logged in";
    echo json_encode($response);
    exit;
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postData = json_decode(file_get_contents('php://input'), true);
    
    if (isset($postData['action']) && $postData['action'] === 'mark_all_read') {
        // Mark all notifications as read
        $updateQuery = "UPDATE tbl_notifications SET notif_status = '1' WHERE notif_to = ? AND notif_status = '0'";
        $stmt = $db->prepare($updateQuery);
        $stmt->bind_param("i", $user_id);
        
        if ($stmt->execute()) {
            $response['success'] = true;
            $response['message'] = "All notifications marked as read";
        } else {
            $response['error'] = "Failed to mark all notifications as read: " . $db->error;
        }
        
        $stmt->close();
    } elseif (isset($_POST['notif_id'])) {
        // Mark single notification as read
        $notif_id = $_POST['notif_id'];
        
        $stmt = $db->prepare("UPDATE tbl_notifications SET notif_status = '1' WHERE notif_id = ? AND notif_to = ?");
        $stmt->bind_param("ii", $notif_id, $user_id);
        
        if ($stmt->execute()) {
            $response['success'] = true;
            $response['message'] = "Notification marked as read";
        } else {
            $response['error'] = "Failed to update notification: " . $db->error;
        }
        
        $stmt->close();
    } else {
        $response['error'] = "Invalid request";
    }
} else {
    // Handle fetching notifications (GET request)
    $query = "SELECT notif_id, notif_subject, notif_text, notif_datetime, notif_url 
              FROM tbl_notifications 
              WHERE notif_to = ? AND notif_status = '0' 
              ORDER BY notif_datetime DESC 
              LIMIT 5";
    
    $stmt = $db->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($notif_id, $notif_subject, $notif_text, $notif_datetime, $notif_url);
    
    $notifications = [];
    while ($stmt->fetch()) {
        $notifications[] = [
            'notif_id' => $notif_id,
            'notif_subject' => $notif_subject,
            'notif_text' => $notif_text,
            'notif_datetime' => $notif_datetime,
            'notif_url' => $notif_url
        ];
    }
    
    $response['success'] = true;
    $response['data'] = $notifications;
    
    $stmt->close();
}

$db->close();
echo json_encode($response);
?>