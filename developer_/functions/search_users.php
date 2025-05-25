<?php
    include '../../connect.php';
    include '../checking.php';

    $outgoing_id = $_SESSION['user_id'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

    $sql = "SELECT a.user_id, a.fname, a.lname, CONCAT(a.fname,  ' ', a.lname) AS username, a.user_image, b.user_id, b.messagestatus_, b.userstatus_ FROM tbl_client AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id WHERE NOT a.user_id = '{$outgoing_id}' AND a.team_ = '$team_' AND b.userstatus_ = '1' AND (a.fname LIKE '%{$searchTerm}%' OR a.lname LIKE '%{$searchTerm}%') UNION ALL SELECT a.user_id, a.fname, a.lname, CONCAT(a.fname,  ' ', a.lname) AS username, a.user_image, b.user_id, b.messagestatus_, b.userstatus_ FROM tbl_supervisor AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id WHERE NOT a.user_id = '{$outgoing_id}' AND a.assigned_team = '$team_' AND b.userstatus_ = '1' AND (a.fname LIKE '%{$searchTerm}%' OR a.lname LIKE '%{$searchTerm}%') UNION ALL SELECT a.user_id, a.fname, a.lname, CONCAT(a.fname,  ' ', a.lname) AS username, a.user_image, b.user_id, b.messagestatus_, b.userstatus_ FROM tbl_operations AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id WHERE NOT a.user_id = '{$outgoing_id}' AND a.assigned_team_one = '$team_' AND b.userstatus_ = '1' AND (a.fname LIKE '%{$searchTerm}%' OR a.lname LIKE '%{$searchTerm}%')";
    $output = "";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "users_data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>