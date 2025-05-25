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
                        <h2>Activity Logs</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Monitoring Logs</li>
                            <li class="breadcrumb-item active">Activity Logs</li>
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
                                            <h4 class="media-heading">Activity Logs</h4>
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
                                                            <th>MODULE</th>
                                                            <th>ACTION</th>
                                                            <th>LOG DATE AND TIME</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, CONCAT(a.user_id) AS clientid, a.fname, a.mname, a.lname, a.suffix, a.user_image, b.id, b.logs_id, b.user_id, b.x_module, b.x_module_action, b.datetime_log FROM tbl_client AS a LEFT JOIN tbl_client_history_logs AS b ON a.user_id = b.user_id WHERE b.logs_id IS NOT NULL ORDER BY b.id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $clientname = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $clientid = $row['clientid'];
                                                                    $user_image = $row['user_image'];
                                                                    $datetime_log = $row['datetime_log'];
                                                                    $adm_newdatimelog = date('F d, Y - g:i A', strtotime($datetime_log));
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$clientid.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$clientname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['x_module']; ?></td>
                                                                            <td><?php echo $row['x_module_action']; ?></td>
                                                                            <td><?php echo $adm_newdatimelog; ?></td>
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
                                                            <th>MODULE</th>
                                                            <th>ACTION</th>
                                                            <th>LOG DATE AND TIME</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, CONCAT(a.user_id) AS supervisorid, a.fname, a.mname, a.lname, a.suffix, a.user_image, b.id, b.logs_id, b.user_id, b.x_module, b.x_module_action, b.datetime_log FROM tbl_supervisor AS a LEFT JOIN tbl_supervisor_history_logs AS b ON a.user_id = b.user_id WHERE b.logs_id IS NOT NULL ORDER BY b.id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $supervisorname = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $supervisorid = $row['supervisorid'];
                                                                    $user_image = $row['user_image'];
                                                                    $datetime_log = $row['datetime_log'];
                                                                    $adm_newdatimelog = date('F d, Y - g:i A', strtotime($datetime_log));
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$supervisorid.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$supervisorname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['x_module']; ?></td>
                                                                            <td><?php echo $row['x_module_action']; ?></td>
                                                                            <td><?php echo $adm_newdatimelog; ?></td>
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
                                                            <th>MODULE</th>
                                                            <th>ACTION</th>
                                                            <th>LOG DATE AND TIME</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, CONCAT(a.user_id) AS operationsid, a.fname, a.mname, a.lname, a.suffix, a.user_image, b.id, b.logs_id, b.user_id, b.x_module, b.x_module_action, b.datetime_log FROM tbl_operations AS a LEFT JOIN tbl_operations_history_logs AS b ON a.user_id = b.user_id WHERE b.logs_id IS NOT NULL ORDER BY b.id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $operationsname = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $operationsid = $row['operationsid'];
                                                                    $user_image = $row['user_image'];
                                                                    $datetime_log = $row['datetime_log'];
                                                                    $adm_newdatimelog = date('F d, Y - g:i A', strtotime($datetime_log));
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$operationsid.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$operationsname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['x_module']; ?></td>
                                                                            <td><?php echo $row['x_module_action']; ?></td>
                                                                            <td><?php echo $adm_newdatimelog; ?></td>
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
                                                            <th>MODULE</th>
                                                            <th>ACTION</th>
                                                            <th>LOG DATE AND TIME</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, CONCAT(a.user_id) AS supportid, a.fname, a.mname, a.lname, a.suffix, a.user_image, b.id, b.logs_id, b.user_id, b.x_module, b.x_module_action, b.datetime_log FROM tbl_support AS a LEFT JOIN tbl_support_history_logs AS b ON a.user_id = b.user_id WHERE b.logs_id IS NOT NULL ORDER BY b.id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $supportname = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $supportid = $row['supportid'];
                                                                    $user_image = $row['user_image'];
                                                                    $datetime_log = $row['datetime_log'];
                                                                    $adm_newdatimelog = date('F d, Y - g:i A', strtotime($datetime_log));
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$supportid.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$supportname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['x_module']; ?></td>
                                                                            <td><?php echo $row['x_module_action']; ?></td>
                                                                            <td><?php echo $adm_newdatimelog; ?></td>
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
                                                            <th>MODULE</th>
                                                            <th>ACTION</th>
                                                            <th>LOG DATE AND TIME</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, CONCAT(a.user_id) AS adminid, a.fname, a.mname, a.lname, a.suffix, a.user_image, b.id, b.logs_id, b.user_id, b.x_module, b.x_module_action, b.datetime_log FROM tbl_admin AS a LEFT JOIN tbl_admin_history_logs AS b ON a.user_id = b.user_id WHERE b.logs_id IS NOT NULL ORDER BY b.id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $adminname = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $adminid = $row['adminid'];
                                                                    $user_image = $row['user_image'];
                                                                    $datetime_log = $row['datetime_log'];
                                                                    $adm_newdatimelog = date('F d, Y - g:i A', strtotime($datetime_log));
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$adminid.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$adminname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['x_module']; ?></td>
                                                                            <td><?php echo $row['x_module_action']; ?></td>
                                                                            <td><?php echo $adm_newdatimelog; ?></td>
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
                                                            <th>MODULE</th>
                                                            <th>ACTION</th>
                                                            <th>LOG DATE AND TIME</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, CONCAT(a.user_id) AS devid, a.fname, a.mname, a.lname, a.suffix, a.user_image, b.id, b.logs_id, b.user_id, b.x_module, b.x_module_action, b.datetime_log FROM tbl_developer AS a LEFT JOIN tbl_developer_history_logs AS b ON a.user_id = b.user_id WHERE b.logs_id IS NOT NULL ORDER BY b.id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $devname = $row['fname'].' ' .$row['lname']. ' ' .$row['suffix'];
                                                                    $devid = $row['devid'];
                                                                    $user_image = $row['user_image'];
                                                                    $datetime_log = $row['datetime_log'];
                                                                    $adm_newdatimelog = date('F d, Y - g:i A', strtotime($datetime_log));
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$devid.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$devname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['x_module']; ?></td>
                                                                            <td><?php echo $row['x_module_action']; ?></td>
                                                                            <td><?php echo $adm_newdatimelog; ?></td>
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