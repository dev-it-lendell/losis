<?php
    include '../../connect.php';
    include '../checking.php';
    
    $outgoing_id = $_SESSION['user_id'];
    
    $sql = "SELECT a.user_id, CONCAT(a.fname, ' ', a.lname) AS username, a.lname, a.team_, a.user_image, b.client_id, b.client_name, b.acronym_, b.site_, b.supervisor_, b.team_, c.user_id, c.messagestatus_, d.msg_id, d.incoming_msg_id, d.outgoing_msg_id, d.msg, d.msg_datetime, e.user_id, e.userstatus_ FROM tbl_admin AS a LEFT JOIN client_list AS b ON a.team_ = b.team_ LEFT JOIN tbl_users AS c ON a.user_id = c.user_id LEFT JOIN messages AS d ON a.user_id = d.incoming_msg_id LEFT JOIN tbl_users AS e ON a.user_id = e.user_id WHERE a.user_id != '{$outgoing_id}' AND e.userstatus_ = '1' GROUP BY a.user_id UNION ALL SELECT a.user_id, CONCAT(a.fname, ' ', a.lname) AS username, a.lname, a.assigned_team, a.user_image, b.client_id, b.client_name, b.acronym_, b.site_, b.supervisor_, b.team_ , c.user_id, c.messagestatus_, d.msg_id, d.incoming_msg_id, d.outgoing_msg_id, d.msg, d.msg_datetime, e.user_id, e.userstatus_ FROM tbl_supervisor AS a LEFT JOIN client_list AS b ON a.assigned_team = b.team_ LEFT JOIN tbl_users AS c ON a.user_id = c.user_id LEFT JOIN messages AS d ON a.user_id = d.incoming_msg_id LEFT JOIN tbl_users AS e ON a.user_id = e.user_id WHERE a.user_id != '{$outgoing_id}' AND e.userstatus_ = '1' GROUP BY a.user_id UNION ALL SELECT a.user_id, CONCAT(a.fname, ' ', a.lname) AS username, a.lname, a.assigned_team_one, a.user_image, b.client_id, b.client_name, b.acronym_, b.site_, b.supervisor_, b.team_ , c.user_id, c.messagestatus_, d.msg_id, d.incoming_msg_id, d.outgoing_msg_id, d.msg, d.msg_datetime, e.user_id, e.userstatus_ FROM tbl_operations AS a LEFT JOIN client_list AS b ON a.assigned_team_one = b.team_ LEFT JOIN tbl_users AS c ON a.user_id = c.user_id LEFT JOIN messages AS d ON a.user_id = d.incoming_msg_id LEFT JOIN tbl_users AS e ON a.user_id = e.user_id WHERE a.user_id != '{$outgoing_id}' AND e.userstatus_ = '1' GROUP BY a.user_id UNION ALL SELECT a.user_id, CONCAT(a.fname, ' ', a.lname) AS username, a.lname, a.assigned_team, a.user_image, b.client_id, b.client_name, b.acronym_, b.site_, b.supervisor_, b.team_ , c.user_id, c.messagestatus_, d.msg_id, d.incoming_msg_id, d.outgoing_msg_id, d.msg, d.msg_datetime, e.user_id, e.userstatus_ FROM tbl_support AS a LEFT JOIN client_list AS b ON a.assigned_team = b.team_ LEFT JOIN tbl_users AS c ON a.user_id = c.user_id LEFT JOIN messages AS d ON a.user_id = d.incoming_msg_id LEFT JOIN tbl_users AS e ON a.user_id = e.user_id WHERE a.user_id != '{$outgoing_id}' AND e.userstatus_ = '1' GROUP BY a.user_id ORDER BY lname ASC";
    echo $sql;
    $query = mysqli_query($conn, $sql);
    $output = "";
        if(mysqli_num_rows($query) == 0){
            $output .= "No users are available to chat";
        }elseif(mysqli_num_rows($query) > 0){
            include_once "users_data.php";
        }
    echo $output;
?>