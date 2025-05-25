<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';
?>

<div id="wrapper" class="theme-green">
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2>User Logs</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Monitoring Logs</li>
                            <li class="breadcrumb-item active">User Logs</li>
                        </ul> 
                    </div>                   
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="header">
                            <div class="card" style="height: 85px;">
                                <div class="card-body">
                                    <div class="media mleft">
                                        <div class="media-left">
                                            <p style="font-size: 36px; margin-top: -7px;">
                                                <i class="fa fa-info-circle text-success"></i>
                                            </p>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">User Logs</h4>
                                                Lendell Outsourcing Solutions Inc.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs-new2 customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#clientlogs" role="tab"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;Client</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#spvrlogs" role="tab"><i class="icofont-database"></i>&nbsp;&nbsp;Supervisor</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#opslogs" role="tab"><i class="icofont-files-stack"></i>&nbsp;&nbsp;Operations</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supplogs" role="tab"><i class="icofont-ui-check"></i>&nbsp;&nbsp;Support</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#admlogs" role="tab"><i class="icofont-files-stack"></i>&nbsp;&nbsp;Admin</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#devlogs" role="tab"><i class="icofont-ui-check"></i>&nbsp;&nbsp;Developer</a>
                                    <div class="slide"></div>
                                </li>                                     
                            </ul>
                            <div class="tab-content br-n pn">
                                <div id="clientlogs" class="tab-pane p-3 active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>LOGIN DATE AND TIME</th>
                                                            <th>LOGOUT DATE AND TIME</th>
                                                            <th>TIME CONSUMED</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.fname, a.mname, a.lname, a.suffix, a.user_image, b.user_id, b.login_dateTime, b.logout_dateTime FROM tbl_client AS a LEFT JOIN tbl_user_logs AS b ON a.user_id = b.user_id WHERE b.login_dateTime IS NOT NULL AND b.logout_dateTime IS NOT NULL ORDER BY b.login_dateTime DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $clientname = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $login_dateTime = $row['login_dateTime'];
                                                                    $adm_newlogindatetime = date('F d, Y - g:i A', strtotime($login_dateTime));
                                                                    $logout_dateTime = $row['logout_dateTime'];
                                                                    $adm_newlogoutdatetime = date('F d, Y - g:i A', strtotime($logout_dateTime));

                                                                    $from_time = strtotime($login_dateTime); 
                                                                    $to_time = strtotime($logout_dateTime); 
                                                                    $diff_minutes = round(abs($from_time - $to_time) / 60,0). " minutes";

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$clientname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td><?php echo $adm_newlogindatetime; ?></td>
                                                                            <td><?php echo $adm_newlogoutdatetime; ?></td>
                                                                            <td><?php echo $diff_minutes; ?></td>
                                                                        </tr>
                                                                    <?php
                                                                }
                                                            }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="spvrlogs" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>LOGIN DATE AND TIME</th>
                                                            <th>LOGOUT DATE AND TIME</th>
                                                            <th>TIME CONSUMED</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.fname, a.mname, a.lname, a.suffix, a.user_image, b.user_id, b.login_dateTime, b.logout_dateTime FROM tbl_supervisor AS a LEFT JOIN tbl_user_logs AS b ON a.user_id = b.user_id WHERE b.login_dateTime IS NOT NULL AND b.logout_dateTime IS NOT NULL ORDER BY b.login_dateTime DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $supervisorname = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $login_dateTime = $row['login_dateTime'];
                                                                    $adm_newlogindatetime = date('F d, Y - g:i A', strtotime($login_dateTime));
                                                                    $logout_dateTime = $row['logout_dateTime'];
                                                                    $adm_newlogoutdatetime = date('F d, Y - g:i A', strtotime($logout_dateTime));

                                                                    $from_time = strtotime($login_dateTime); 
                                                                    $to_time = strtotime($logout_dateTime); 
                                                                    $diff_minutes = round(abs($from_time - $to_time) / 60,0). " minutes";

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$supervisorname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td><?php echo $adm_newlogindatetime; ?></td>
                                                                            <td><?php echo $adm_newlogoutdatetime; ?></td>
                                                                            <td><?php echo $diff_minutes; ?></td>
                                                                        </tr>
                                                                    <?php
                                                                }
                                                            }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="opslogs" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>LOGIN DATE AND TIME</th>
                                                            <th>LOGOUT DATE AND TIME</th>
                                                            <th>TIME CONSUMED</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.fname, a.mname, a.lname, a.suffix, a.user_image, b.user_id, b.login_dateTime, b.logout_dateTime FROM tbl_operations AS a LEFT JOIN tbl_user_logs AS b ON a.user_id = b.user_id WHERE b.login_dateTime IS NOT NULL AND b.logout_dateTime IS NOT NULL ORDER BY b.login_dateTime DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $operationsname = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $login_dateTime = $row['login_dateTime'];
                                                                    $adm_newlogindatetime = date('F d, Y - g:i A', strtotime($login_dateTime));
                                                                    $logout_dateTime = $row['logout_dateTime'];
                                                                    $adm_newlogoutdatetime = date('F d, Y - g:i A', strtotime($logout_dateTime));

                                                                    $from_time = strtotime($login_dateTime); 
                                                                    $to_time = strtotime($logout_dateTime); 
                                                                    $diff_minutes = round(abs($from_time - $to_time) / 60,0). " minutes";

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$operationsname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td><?php echo $adm_newlogindatetime; ?></td>
                                                                            <td><?php echo $adm_newlogoutdatetime; ?></td>
                                                                            <td><?php echo $diff_minutes; ?></td>
                                                                        </tr>
                                                                    <?php
                                                                }
                                                            }
                                                        ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="supplogs" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>LOGIN DATE AND TIME</th>
                                                            <th>LOGOUT DATE AND TIME</th>
                                                            <th>TIME CONSUMED</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.fname, a.mname, a.lname, a.suffix, a.user_image, b.user_id, b.login_dateTime, b.logout_dateTime FROM tbl_support AS a LEFT JOIN tbl_user_logs AS b ON a.user_id = b.user_id WHERE b.login_dateTime IS NOT NULL AND b.logout_dateTime IS NOT NULL ORDER BY b.login_dateTime DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $supportname = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $login_dateTime = $row['login_dateTime'];
                                                                    $adm_newlogindatetime = date('F d, Y - g:i A', strtotime($login_dateTime));
                                                                    $logout_dateTime = $row['logout_dateTime'];
                                                                    $adm_newlogoutdatetime = date('F d, Y - g:i A', strtotime($logout_dateTime));

                                                                    $from_time = strtotime($login_dateTime); 
                                                                    $to_time = strtotime($logout_dateTime); 
                                                                    $diff_minutes = round(abs($from_time - $to_time) / 60,0). " minutes";

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$supportname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td><?php echo $adm_newlogindatetime; ?></td>
                                                                            <td><?php echo $adm_newlogoutdatetime; ?></td>
                                                                            <td><?php echo $diff_minutes; ?></td>
                                                                        </tr>
                                                                    <?php
                                                                }
                                                            }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="admlogs" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>LOGIN DATE AND TIME</th>
                                                            <th>LOGOUT DATE AND TIME</th>
                                                            <th>TIME CONSUMED</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.fname, a.mname, a.lname, a.suffix, a.user_image, b.user_id, b.login_dateTime, b.logout_dateTime FROM tbl_admin AS a LEFT JOIN tbl_user_logs AS b ON a.user_id = b.user_id WHERE b.login_dateTime IS NOT NULL AND b.logout_dateTime IS NOT NULL ORDER BY b.login_dateTime DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $adminname = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $login_dateTime = $row['login_dateTime'];
                                                                    $adm_newlogindatetime = date('F d, Y - g:i A', strtotime($login_dateTime));
                                                                    $logout_dateTime = $row['logout_dateTime'];
                                                                    $adm_newlogoutdatetime = date('F d, Y - g:i A', strtotime($logout_dateTime));

                                                                    $from_time = strtotime($login_dateTime); 
                                                                    $to_time = strtotime($logout_dateTime); 
                                                                    $diff_minutes = round(abs($from_time - $to_time) / 60,0). " minutes";

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$adminname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td><?php echo $adm_newlogindatetime; ?></td>
                                                                            <td><?php echo $adm_newlogoutdatetime; ?></td>
                                                                            <td><?php echo $diff_minutes; ?></td>
                                                                        </tr>
                                                                    <?php
                                                                }
                                                            }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="devlogs" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>LOGIN DATE AND TIME</th>
                                                            <th>LOGOUT DATE AND TIME</th>
                                                            <th>TIME CONSUMED</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.fname, a.mname, a.lname, a.suffix, a.user_image, b.user_id, b.login_dateTime, b.logout_dateTime FROM tbl_developer AS a LEFT JOIN tbl_user_logs AS b ON a.user_id = b.user_id WHERE b.login_dateTime IS NOT NULL AND b.logout_dateTime IS NOT NULL ORDER BY b.login_dateTime DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $devname = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $login_dateTime = $row['login_dateTime'];
                                                                    $adm_newlogindatetime = date('F d, Y - g:i A', strtotime($login_dateTime));
                                                                    $logout_dateTime = $row['logout_dateTime'];
                                                                    $adm_newlogoutdatetime = date('F d, Y - g:i A', strtotime($logout_dateTime));

                                                                    $from_time = strtotime($login_dateTime); 
                                                                    $to_time = strtotime($logout_dateTime); 
                                                                    $diff_minutes = round(abs($from_time - $to_time) / 60,0). " minutes";

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$devname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td><?php echo $adm_newlogindatetime; ?></td>
                                                                            <td><?php echo $adm_newlogoutdatetime; ?></td>
                                                                            <td><?php echo $diff_minutes; ?></td>
                                                                        </tr>
                                                                    <?php
                                                                }
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
                </div>
            </div>
        </div>
    </div>  
</div>

<?php
    include 'modals.php';
    include 'script.php';
?>