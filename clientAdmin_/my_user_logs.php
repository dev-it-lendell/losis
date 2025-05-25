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
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>My User Logs</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">User Profile</li>
                            <li class="breadcrumb-item">Update Profile</li>
                            <li class="breadcrumb-item active">My User Logs</li>
                        </ul>   
                    </div>  
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-outline-danger" style="float: right; margin-right: 5px; margin-top: 15px;" onclick="back_user_profile(); saveviewupdateprofile();"><i class="fa fa-arrow-left"></i> Back</button>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="col-md-12 mt-3">
                            <div class="header">
                                <div class="card" style="height: 85px; margin-top: -10px;">
                                    <div class="card-body">
                                        <div class="media mleft">
                                            <div class="media-left">
                                                <p style="font-size: 36px; margin-top: -7px;">
                                                    <i class="fa fa-lock text-dark"></i>
                                                </p>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Total Current Month User Logs</h4>
                                                <p style="font-size: 15px;"><?php echo $now->format('F Y'); ?></p>
                                                <p id="userlogscurrentmonth" style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="height: 85px; margin-top: -10px;">
                                    <div class="card-body">
                                        <div class="media mleft">
                                            <div class="media-left">
                                                <p style="font-size: 36px; margin-top: -7px;">
                                                    <i class="fa fa-calendar-o text-dark"></i>
                                                </p>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Total Current Year User Logs</h4>
                                                <p style="font-size: 15px;"><?php echo $now->format('Y'); ?></p>
                                                <p id="userlogscurrentyear" style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs-new2 customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#january" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;JAN</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#february" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-database"></i>&nbsp;&nbsp;FEB</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#march" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-files-stack"></i>&nbsp;&nbsp;MAR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#april" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;APR</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#may" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;MAY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#june" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;JUNE</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#july" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;JULY</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#august" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;AUG</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#september" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;SEPT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#october" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;OCT</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#november" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;NOV</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#december" role="tab" style="font-size: 11px; font-weight: bold;"><i class="icofont-ui-check"></i>&nbsp;&nbsp;DEC</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                            <div class="tab-content br-n pn">
                                <div id="january" class="tab-pane p-3 active">
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
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_user_logs WHERE login_dateTime IS NOT NULL AND logout_dateTime IS NOT NULL AND MONTH(logout_dateTime) = '01' AND YEAR(logout_dateTime) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id";
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
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View User Log" onclick="saveviewinguserlog();"><i class="fa fa-file-text-o"></i></button>
                                                                            </td>
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
                                <div id="february" class="tab-pane p-3">
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
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_user_logs WHERE login_dateTime IS NOT NULL AND logout_dateTime IS NOT NULL AND MONTH(logout_dateTime) = '02' AND YEAR(logout_dateTime) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id";
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
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View User Log" onclick="saveviewinguserlog();"><i class="fa fa-file-text-o"></i></button>
                                                                            </td>
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
                                <div id="march" class="tab-pane p-3">
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
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_user_logs WHERE login_dateTime IS NOT NULL AND logout_dateTime IS NOT NULL AND MONTH(logout_dateTime) = '03' AND YEAR(logout_dateTime) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id";
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
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View User Log" onclick="saveviewinguserlog();"><i class="fa fa-file-text-o"></i></button>
                                                                            </td>
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
                                <div id="april" class="tab-pane p-3">
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
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_user_logs WHERE login_dateTime IS NOT NULL AND logout_dateTime IS NOT NULL AND MONTH(logout_dateTime) = '04' AND YEAR(logout_dateTime) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id";
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
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View User Log" onclick="saveviewinguserlog();"><i class="fa fa-file-text-o"></i></button>
                                                                            </td>
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
                                <div id="may" class="tab-pane p-3">
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
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_user_logs WHERE login_dateTime IS NOT NULL AND logout_dateTime IS NOT NULL AND MONTH(logout_dateTime) = '05' AND YEAR(logout_dateTime) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id";
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
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View User Log" onclick="saveviewinguserlog();"><i class="fa fa-file-text-o"></i></button>
                                                                            </td>
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
                                <div id="june" class="tab-pane p-3">
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
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_user_logs WHERE login_dateTime IS NOT NULL AND logout_dateTime IS NOT NULL AND MONTH(logout_dateTime) = '06' AND YEAR(logout_dateTime) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id";
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
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View User Log" onclick="saveviewinguserlog();"><i class="fa fa-file-text-o"></i></button>
                                                                            </td>
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
                                <div id="july" class="tab-pane p-3">
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
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_user_logs WHERE login_dateTime IS NOT NULL AND logout_dateTime IS NOT NULL AND MONTH(logout_dateTime) = '07' AND YEAR(logout_dateTime) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id";
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
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View User Log" onclick="saveviewinguserlog();"><i class="fa fa-file-text-o"></i></button>
                                                                            </td>
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
                                <div id="august" class="tab-pane p-3">
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
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_user_logs WHERE login_dateTime IS NOT NULL AND logout_dateTime IS NOT NULL AND MONTH(logout_dateTime) = '08' AND YEAR(logout_dateTime) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id";
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
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View User Log" onclick="saveviewinguserlog();"><i class="fa fa-file-text-o"></i></button>
                                                                            </td>
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
                                <div id="september" class="tab-pane p-3">
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
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_user_logs WHERE login_dateTime IS NOT NULL AND logout_dateTime IS NOT NULL AND MONTH(logout_dateTime) = '09' AND YEAR(logout_dateTime) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id";
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
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View User Log" onclick="saveviewinguserlog();"><i class="fa fa-file-text-o"></i></button>
                                                                            </td>
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
                                <div id="october" class="tab-pane p-3">
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
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_user_logs WHERE login_dateTime IS NOT NULL AND logout_dateTime IS NOT NULL AND MONTH(logout_dateTime) = '10' AND YEAR(logout_dateTime) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id";
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
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View User Log" onclick="saveviewinguserlog();"><i class="fa fa-file-text-o"></i></button>
                                                                            </td>
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
                                <div id="november" class="tab-pane p-3">
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
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_user_logs WHERE login_dateTime IS NOT NULL AND logout_dateTime IS NOT NULL AND MONTH(logout_dateTime) = '11' AND YEAR(logout_dateTime) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id";
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
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View User Log" onclick="saveviewinguserlog();"><i class="fa fa-file-text-o"></i></button>
                                                                            </td>
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
                                <div id="december" class="tab-pane p-3">
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
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_user_logs WHERE login_dateTime IS NOT NULL AND logout_dateTime IS NOT NULL AND MONTH(logout_dateTime) = '12' AND YEAR(logout_dateTime) = YEAR(NOW()) AND user_id = '".$_SESSION["user_id"]."' ORDER BY id";
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
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View User Log" onclick="saveviewinguserlog();"><i class="fa fa-file-text-o"></i></button>
                                                                            </td>
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