<?php
    include '../../connect.php';
    include '../checking.php';

    if (isset($_SESSION['user_id'])) {
        $outgoing_id = $_SESSION['user_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if (!empty($message)) {
                $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg, msg_datetime) VALUES ('$incoming_id', '$outgoing_id', '$message', NOW())") or die();
        }
    }
?>