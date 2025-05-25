<?php
	set_time_limit(0);
	include 'checking.php';

	switch ($_POST['form']) {
        // MY PROFILE //
        case 'displaymonthlyactlogs':
            $sql = "SELECT COUNT(id) AS monthlyactivity FROM tbl_developer_history_logs WHERE MONTH(datetime_log) = MONTH(NOW()) AND YEAR(datetime_log) = YEAR(NOW()) AND user_id = '". $_SESSION['user_id'] ."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalmonthlyactivity = $row['monthlyactivity'];
            echo $totalmonthlyactivity;
        break;

        case 'displayyearlyactlogs':
            $sql = "SELECT COUNT(id) AS yearlyactivity FROM tbl_developer_history_logs WHERE YEAR(datetime_log) = YEAR(NOW()) AND user_id = '". $_SESSION['user_id'] ."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalyearlyactivity = $row['yearlyactivity'];
            echo $totalyearlyactivity;
        break;

        case 'displaymonthlyuserlogs':
            $sql = "SELECT COUNT(id) AS monthlylogin FROM tbl_user_logs WHERE login_dateTime IS NOT NULL AND logout_dateTime IS NOT NULL AND MONTH(logout_dateTime) = MONTH(NOW()) AND YEAR(logout_dateTime) = YEAR(NOW()) AND user_id = '". $_SESSION['user_id'] ."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalmonthlyuserlogs = $row['monthlylogin'];
            echo $totalmonthlyuserlogs;
        break;

        case 'displayyearlyuserlogs':
            $sql = "SELECT COUNT(id) AS yearlylogin FROM tbl_user_logs WHERE login_dateTime IS NOT NULL AND logout_dateTime IS NOT NULL AND YEAR(logout_dateTime) = YEAR(NOW()) AND user_id = '". $_SESSION['user_id'] ."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalyearluserlogs = $row['yearlylogin'];
            echo $totalyearluserlogs;
        break;  

        // ACTIVITY LOGS //
        case 'savedevdashboard':
            $sql = "INSERT INTO tbl_developer_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Dashboard',
                    x_module_action = 'View Dashboard'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_developer_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savedevuserprofile':
            $sql = "INSERT INTO tbl_developer_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'My Profile',
                    x_module_action = 'View My Profile'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_developer_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savedevusermessaging':
            $sql = "INSERT INTO tbl_developer_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'My Messaging',
                    x_module_action = 'View My Messaging'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_developer_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savedevviewupdateprofile':
            $sql = "INSERT INTO tbl_developer_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'My Profile',
                    x_module_action = 'View My Update Profile'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_developer_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savedevviewactivitylogs':
            $sql = "INSERT INTO tbl_developer_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'My Profile',
                    x_module_action = 'View My Activity Logs'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_developer_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savedevviewuserlogs':
            $sql = "INSERT INTO tbl_developer_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'My Profile',
                    x_module_action = 'View My User Logs'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_developer_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        // ONLINE USERS //
        case 'displaydevonlineusers':
            $sql = "SELECT a.user_id, CONCAT(a.fname,  ' ', a.lname,  ' ', a.suffix) AS devname, a.lname, a.user_image, b.user_id, b.messagestatus_, b.useremail_ FROM tbl_developer AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id WHERE b.messagestatus_ = '1' AND a.user_id != '". $_SESSION['user_id'] ."' UNION ALL SELECT a.user_id, CONCAT(a.fname,  ' ', a.lname,  ' ', a.suffix) AS adminname, a.lname, a.user_image, b.user_id, b.messagestatus_, b.useremail_ FROM tbl_admin AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id WHERE b.messagestatus_ = '1' UNION ALL SELECT a.user_id, CONCAT(a.fname,  ' ', a.lname,  ' ', a.suffix) AS supervisorname, a.lname, a.user_image, b.user_id, b.messagestatus_, b.useremail_ FROM tbl_supervisor AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id WHERE b.messagestatus_ = '1' UNION ALL SELECT a.user_id, CONCAT(a.fname,  ' ', a.lname,  ' ', a.suffix) AS operationsname, a.lname, a.user_image, b.user_id, b.messagestatus_, b.useremail_ FROM tbl_operations AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id WHERE b.messagestatus_ = '1' UNION ALL SELECT a.user_id, CONCAT(a.fname,  ' ', a.lname,  ' ', a.suffix) AS supportname, a.lname, a.user_image, b.user_id, b.messagestatus_, b.useremail_ FROM tbl_support AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id WHERE b.messagestatus_ = '1' ORDER BY lname ASC LIMIT 5";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $user_id = $row['user_id'];
                    $user_image = $row['user_image'];
                    ?>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <?php
                                    echo '<img class="media-object" src="../profilepictures_/'.$user_id.'/'.$user_image.'"  alt="">';
                                ?>
                                <div class="media-body">
                                    <span class="name d-flex justify-content-between"><?php echo $row['clientname']; ?><i class="fa fa-circle font-12" style="color: #50C878;"></i></span>
                                    <span class="message" style="font-weight: bold;"><?php echo $row['useremail_']; ?></span>
                                </div>
                            </a>
                        </li>
                    <?php
                }
            } else {
                ?>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="../images/icons/default.png"  alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between" style="font-weight: bold;">No Online Users<i class="fa fa-times-circle font-12" style="color: #000;"></i></span>
                                <span class="message" style="font-weight: bold;">No Data Available</span>
                            </div>
                        </a>
                    </li>
                <?php           
            }
        break;
	}
?>