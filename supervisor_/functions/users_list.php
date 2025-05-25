<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');

$response = array('status' => 'error', 'message' => '', 'data' => '', 'debug' => array());

try {
    ob_start();

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $response['debug']['session'] = $_SESSION;

    $connect_path = realpath("../../connect.php");
    if ($connect_path === false) {
        throw new Exception("connect.php file not found");
    }
    $response['debug']['connect_path'] = $connect_path;
    
    include_once $connect_path;

    if (!isset($conn) || !($conn instanceof mysqli)) {
        throw new Exception("Database connection not established");
    }

    if (!isset($_SESSION['user_id'])) {
        throw new Exception('User not logged in');
    }

    $outgoing_id = $_SESSION['user_id'];
    $response['debug']['outgoing_id'] = $outgoing_id;

    // First, get the team of the current user
    $team_sql = "SELECT team_ FROM tbl_client WHERE user_id = ?
                 UNION
                 SELECT assigned_team FROM tbl_supervisor WHERE user_id = ?
                 UNION
                 SELECT assigned_team_one FROM tbl_operations WHERE user_id = ?
                 LIMIT 1";
    
    $team_stmt = $conn->prepare($team_sql);
    if (!$team_stmt) {
        throw new Exception("Team prepare failed: " . $conn->error);
    }
    $team_stmt->bind_param("sss", $outgoing_id, $outgoing_id, $outgoing_id);
    if (!$team_stmt->execute()) {
        throw new Exception("Team execute failed: " . $team_stmt->error);
    }
    $team_stmt->bind_result($team);
    if (!$team_stmt->fetch()) {
        throw new Exception("Unable to fetch team for the current user");
    }
    $team_stmt->close();

    $response['debug']['team'] = $team;

    // Now, fetch users from the same team with their most recent message
    $sql = "SELECT u.user_id, u.username, u.user_image, m.msg, m.msg_id
            FROM (
                SELECT user_id, CONCAT(fname, ' ', lname) AS username, user_image, team_ AS team
                FROM tbl_client WHERE team_ = ? AND user_id != ?
                UNION
                SELECT user_id, CONCAT(fname, ' ', lname) AS username, user_image, assigned_team AS team
                FROM tbl_supervisor WHERE assigned_team = ? AND user_id != ?
                UNION
                SELECT user_id, CONCAT(fname, ' ', lname) AS username, user_image, assigned_team_one AS team
                FROM tbl_operations WHERE assigned_team_one = ? AND user_id != ?
            ) AS u
            LEFT JOIN (
                SELECT 
                    CASE
                        WHEN incoming_msg_id = ? THEN outgoing_msg_id
                        ELSE incoming_msg_id
                    END AS other_user_id,
                    msg,
                    msg_id,
                    msg_datetime
                FROM messages
                WHERE ? IN (incoming_msg_id, outgoing_msg_id)
            ) AS m ON u.user_id = m.other_user_id
            LEFT JOIN (
                SELECT 
                    CASE
                        WHEN incoming_msg_id = ? THEN outgoing_msg_id
                        ELSE incoming_msg_id
                    END AS other_user_id,
                    MAX(msg_datetime) AS max_msg_datetime
                FROM messages
                WHERE ? IN (incoming_msg_id, outgoing_msg_id)
                GROUP BY other_user_id
            ) AS latest ON u.user_id = latest.other_user_id AND m.msg_datetime = latest.max_msg_datetime
            WHERE latest.max_msg_datetime IS NOT NULL
            ORDER BY latest.max_msg_datetime DESC, u.username ASC
            LIMIT 50";

    $response['debug']['sql'] = $sql;

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        throw new Exception("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("ssssssssss", $team, $outgoing_id, $team, $outgoing_id, $team, $outgoing_id, $outgoing_id, $outgoing_id, $outgoing_id, $outgoing_id);
    if (!$stmt->execute()) {
        throw new Exception("Execute failed: " . $stmt->error);
    }

    $stmt->bind_result($user_id, $username, $user_image, $last_msg, $msg_id);

    $users = array();
    while ($stmt->fetch()) {
        $users[] = array(
            'user_id' => $user_id,
            'username' => $username,
            'user_image' => $user_image,
            'last_msg' => $last_msg,
            'msg_id' => $msg_id
        );
    }

    $response['debug']['users'] = $users;

    $output = "";
    foreach ($users as $row) {
        $user_image_path = $row['user_image'] ? "../../LOSIS/profilepictures_/{$row['user_id']}/{$row['user_image']}" : "../profilepictures_/default.jpg";
        $last_message = $row['last_msg'] ? htmlspecialchars(substr($row['last_msg'], 0, 28)) . '...' : "No message available";
        $output .= '<a href="#" data-id="'.htmlspecialchars($row['user_id']).'">
                        <div class="content">
                            <img src="'.htmlspecialchars($user_image_path).'" alt="">
                            <div class="details">
                                <span>'.htmlspecialchars($row['username']).'</span>
                                <p>'.$last_message.'</p>
                            </div>
                        </div>
                        <div class="status-dot"><i class="fa fa-circle"></i></div>
                    </a>';
    }

    $response['status'] = 'success';
    $response['data'] = $output;
    $response['debug']['user_count'] = count($users);

    $unexpected_output = ob_get_clean();
    if (!empty($unexpected_output)) {
        $response['debug']['unexpected_output'] = $unexpected_output;
    }

} catch (Exception $e) {
    $response['message'] = $e->getMessage();
    $response['debug']['error'] = $e->getTraceAsString();
    if (isset($conn)) {
        $response['debug']['last_mysql_error'] = $conn->error;
    }
}

echo json_encode($response, JSON_PARTIAL_OUTPUT_ON_ERROR);