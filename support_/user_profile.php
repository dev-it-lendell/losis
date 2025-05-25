<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    if (!empty($_GET['updateaccnt'])) {
        switch($_GET['updateaccnt']){
            case 'succ':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['success']('User Profile succesfully updated.');
                    </script>
                <?php
            break;

            case 'err':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Cannot update user profile.');
                    </script>
                <?php
            break;

            default:
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('User Profile error.');
                    </script>
                <?php
            break;
        }
    }
?>   

<div id="wrapper" class="theme-green">
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>User Profile</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active">User Profile</li>
                        </ul> 
                    </div>  
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action" onclick="savesupviewupdateprofile();">
                                <a class="btn btn-success" href="update_user_profile.php?userID=<?php echo $supid ?>" style="float: right; margin-left: 5px;"><i class="fa fa-pencil-square-o"></i> Edit My Profile</a>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card profile-header">
                        <div class="body text-center">
                            <?php
                                echo '<div class="profile-image mb-3 text-center"> <img class="img-fluid rounded" src="../profilepictures_/'.$supid.'/'.$sup_userimage.'" alt=""> </div>'
                            ?>
                            <div class="mt-4">
                                <h4 class="mb-0"><strong><?php echo $sup_name; ?></strong></h4>
                                <span class="job_post"><?php echo $sup_position; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>My Profile</h2>
                        </div>
                        <div class="body">
                            <ul class="list-unstyled">
                                <li><p><i class="fa fa-calendar mr-2"></i><strong>Date of Birth:</strong>&nbsp;&nbsp;<?php echo $sup_newdateofbirth; ?></p></li>
                                <li><p><i class="fa fa-user mr-2"></i><strong>Age:</strong>&nbsp;&nbsp;<?php echo $sup_userage; ?></p></li>
                                <li><p><i class="fa fa-phone-square mr-2"></i><strong>Contact Number:</strong>&nbsp;&nbsp;<?php echo $sup_contact; ?></p></li>
                                <li><p><i class="fa fa-map-marker mr-2"></i><strong>Address:</strong>&nbsp;&nbsp;<?php echo $sup_fulladdress; ?></p></li>
                            </ul>
                            <hr> 
                            <div class="workingtime">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span class="text-muted">Monday to Friday</span>
                                                <p>09:00 AM - 6:00 PM</p>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="text-muted">Saturday</span>
                                                <p>09:00 AM - 3:00 PM</p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>               
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                           <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <h6>User Logs <br><p style="font-weight: bold; font-size: 13px;"><?php echo $now->format('F Y'); ?></p></h6>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="my_user_logs.php" onclick="savesupviewuserlogs();" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="View User Logs"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <table class="table mb-0">
                                <tbody>
                                    <?php
                                        $sql = "SELECT * FROM tbl_user_logs WHERE login_dateTime IS NOT NULL AND logout_dateTime IS NOT NULL AND MONTH(logout_dateTime) = MONTH(NOW()) AND YEAR(logout_dateTime) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id DESC LIMIT 5";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $login_dateTime = $row['login_dateTime'];
                                                $logout_dateTime = $row['logout_dateTime'];
                                                $from_time = strtotime($login_dateTime); 
                                                $newlogindatetime = date('F d, Y - g:i A', strtotime($login_dateTime));
                                                $newlogoutdatetime = date('F d, Y - g:i A', strtotime($logout_dateTime));
                                                $to_time = strtotime($logout_dateTime); 
                                                $diff_minutes = round(abs($from_time - $to_time) / 60,0). " minutes";

                                                ?>
                                                    <tr>
                                                        <td><div class="feeds-left"><img src="../images/icons/user.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                        <td><?php echo $newlogindatetime ?></td>
                                                        <td><?php echo $newlogoutdatetime ?></td>
                                                        <td style="font-weight: bold;"><?php echo $diff_minutes ?></td>
                                                    </tr>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                                <tr>
                                                    <td style="text-align: center; font-weight: bold;">No Data Available</td>
                                                </tr>
                                            <?php
                                        }
                                    ?> 
                                </tbody> 
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                           <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <h6>Activity Logs <br><p style="font-weight: bold; font-size: 13px;"><?php echo $now->format('F Y'); ?></p></h6>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="my_activity_logs.php" onclick="savesupviewactivitylogs();" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="View Activity Logs"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <table class="table mb-0">
                                <tbody>
                                    <?php
                                        $sql = "SELECT * FROM tbl_support_history_logs WHERE MONTH(datetime_log) = MONTH(NOW()) AND YEAR(datetime_log) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id DESC LIMIT 5";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $datetime_log = $row['datetime_log'];
                                                $newdatetimelog = date('F d, Y - g:i A', strtotime($datetime_log));

                                                ?>
                                                    <tr>
                                                        <td><div class="feeds-left"><img src="../images/icons/activity.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div></td>
                                                        <td><?php echo $row['logs_id']; ?></td>
                                                        <td style="font-weight: bold;"><?php echo $row['x_module']; ?></td>
                                                        <td><?php echo $newdatetimelog ?></td>
                                                    </tr>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                                <tr>
                                                    <td style="text-align: center; font-weight: bold;">No Data Available</td>
                                                </tr>
                                            <?php
                                        }
                                    ?> 
                                </tbody> 
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include 'modals.php';
    include 'script.php';
?>