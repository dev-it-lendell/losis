<?php
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT a.user_id, CONCAT(a.user_id) AS userid, CONCAT(a.fname,  ' ', a.lname, ' ', a.suffix) AS clientname, a.lname, a.team_, a.user_image, b.user_id, b.messagestatus_, b.userstatus_, c.msg_id, c.incoming_msg_id, c.outgoing_msg_id, c.msg, c.msg_datetime FROM tbl_client AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id LEFT JOIN messages AS c ON b.user_id = c.incoming_msg_id WHERE a.team_ = '$team_' AND a.user_id != '".$_SESSION["user_id"]."' AND b.userstatus_ = '1' AND (incoming_msg_id = '{$row['user_id']}' OR outgoing_msg_id = '{$row['user_id']}') AND (outgoing_msg_id = '{$outgoing_id}' OR incoming_msg_id = '{$outgoing_id}') UNION ALL SELECT a.user_id, CONCAT(a.user_id) AS userid, CONCAT(a.fname,  ' ', a.lname, ' ', a.suffix) AS supervisorname, a.lname, a.assigned_team, a.user_image, b.user_id, b.messagestatus_, b.userstatus_, c.msg_id, c.incoming_msg_id, c.outgoing_msg_id, c.msg, c.msg_datetime FROM tbl_supervisor AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id LEFT JOIN messages AS c ON b.user_id = c.incoming_msg_id WHERE a.assigned_team = '$team_' AND a.user_id != '".$_SESSION["user_id"]."' AND b.userstatus_ = '1' AND (incoming_msg_id = '{$row['user_id']}' OR outgoing_msg_id = '{$row['user_id']}') AND (outgoing_msg_id = '{$outgoing_id}' OR incoming_msg_id = '{$outgoing_id}') UNION ALL SELECT a.user_id, CONCAT(a.user_id) AS userid, CONCAT(a.fname,  ' ', a.lname, ' ', a.suffix) AS operationsname, a.lname, a.assigned_team_one, a.user_image, b.user_id, b.messagestatus_, b.userstatus_, c.msg_id, c.incoming_msg_id, c.outgoing_msg_id, c.msg, c.msg_datetime FROM tbl_operations AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id LEFT JOIN messages AS c ON b.user_id = c.incoming_msg_id WHERE a.assigned_team_one = '$team_' AND a.user_id != '".$_SESSION["user_id"]."' AND b.userstatus_ = '1' AND (incoming_msg_id = '{$outgoing_id}' OR outgoing_msg_id = '{$row['user_id']}') AND (outgoing_msg_id = '{$row['user_id']}' OR incoming_msg_id = '{$outgoing_id}') ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No message available";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }
        if ($row['messagestatus_'] == "0") {
            $msgstatus = '<i class="fa fa-circle" style="color: #FF0000;" data-toggle="tooltip" data-placement="top" title="Offline"></i>';
        } else{
            $msgstatus = '<i class="fa fa-circle" style="color: #00FF00;" data-toggle="tooltip" data-placement="top" title="Online"></i>';
        }
        ($outgoing_id == $row['user_id']) ? $hid_me = "hide" : $hid_me = "";
        $output .= '<a href="msg_chat.php?user_id='. $row['user_id'] .'">
                    <div class="content">
                    <img src="../../LOSIS/profilepictures_/'.$row['user_id'].'/'.$row['user_image'].'" alt="">
                    <div class="details">
                        <span>'. $row['username'].'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div>'. $msgstatus .'</div>
                </a>';
    }
?>