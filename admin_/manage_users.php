<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    if (!empty($_GET['newaccnt'])) {
        switch($_GET['newaccnt']){
            case 'succ':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['success']('Account succesfully added.');
                    </script>
                <?php
            break;

            case 'err':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Cannot create account.');
                    </script>
                <?php
            break;

            default:
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Account error.');
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
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2>Manage Users</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">User Management</li>
                            <li class="breadcrumb-item active">Manage Users</li>
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
                                            <h4 class="media-heading">User List</h4>
                                                Lendell Outsourcing Solutions Inc.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix w_social3">
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div class="card">
                                        <div class="icon"><i class="fa fa-users"></i></div>
                                        <div class="content">
                                            <div class="text" style="font-weight: bold;">Client</div>
                                                <div class="number" id="clientaccnt"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div class="card">
                                        <div class="icon"><i class="fa fa-users"></i></div>
                                        <div class="content">
                                            <div class="text" style="font-weight: bold;">Supervisor</div>
                                                <div class="number" id="supervisoraccnt"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div class="card">
                                        <div class="icon"><i class="fa fa-users"></i></div>
                                        <div class="content">
                                            <div class="text" style="font-weight: bold;">Operations</div>
                                                <div class="number" id="operationsaccnt"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div class="card">
                                        <div class="icon"><i class="fa fa-users"></i></div>
                                        <div class="content">
                                            <div class="text" style="font-weight: bold;">Support</div>
                                                <div class="number" id="supportaccnt"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div class="card">
                                        <div class="icon"><i class="fa fa-users"></i></div>
                                        <div class="content">
                                            <div class="text" style="font-weight: bold;">Admin</div>
                                                <div class="number" id="adminaccnt"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div class="card">
                                        <div class="icon"><i class="fa fa-users"></i></div>
                                        <div class="content">
                                            <div class="text" style="font-weight: bold;">Developer</div>
                                                <div class="number" id="developeraccnt"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs-new2 customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#client" role="tab"><i class="icofont-hour-glass"></i>&nbsp;&nbsp;Client</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#spvr" role="tab"><i class="icofont-database"></i>&nbsp;&nbsp;Supervisor</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#ops" role="tab"><i class="icofont-files-stack"></i>&nbsp;&nbsp;Operations</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supp" role="tab"><i class="icofont-ui-check"></i>&nbsp;&nbsp;Support</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#adm" role="tab"><i class="icofont-files-stack"></i>&nbsp;&nbsp;Admin</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#dev" role="tab"><i class="icofont-ui-check"></i>&nbsp;&nbsp;Developer</a>
                                    <div class="slide"></div>
                                </li>                                     
                            </ul>
                            <div class="tab-content br-n pn">
                                <div id="client" class="tab-pane p-3 active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>NAME</th>
                                                            <th>DESIGNATION</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.fname, a.mname, a.lname, a.suffix, a.user_position, a.user_image, b.user_id, b.userstatus_, b.usertype_ FROM tbl_client AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id ORDER BY a.lname ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $userstatus_ = $row['userstatus_'];
                                                                    // USER STATUS //
                                                                    if ($row['userstatus_'] == '0') {
                                                                        $userstatus = '<span class="badge badge-danger" style="font-weight: bold;">Inactive</span>';
                                                                    } else if ($row['userstatus_'] == '1') {
                                                                        $userstatus = '<span class="badge badge-success" style="font-weight: bold;">Active</span>';
                                                                    } else {
                                                                        $userstatus = "";
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?></td>
                                                                            <td><?php echo $row['user_position']; ?></td>
                                                                            <td><?php echo $userstatus; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <?php
                                                                                    if ($userstatus_ == '1') {
                                                                                        ?>
                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Blacklist Account" onclick="viewblacklistaccount('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['user_position']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewblacklistaccnt();"><i class="fa fa-times-circle-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Delete Account" onclick="viewclientdelete('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['user_position']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewdeleteaccnt();"><i class="fa fa-trash-o"></i></button>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <button type="button" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Reactivate Account" onclick="viewreactivateaccount('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>'); saveadmviewreactivateaccnt();"><i class="fa fa-check-circle-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Blacklist Account" onclick="viewblacklistaccount('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['user_position']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewblacklistaccnt();"><i class="fa fa-times-circle-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Delete Account" onclick="viewclientdelete('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['user_position']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewdeleteaccnt();"><i class="fa fa-trash-o"></i></button>
                                                                                        <?php
                                                                                    }
                                                                                ?>
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
                                <div id="spvr" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>NAME</th>
                                                            <th>DESIGNATION</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.fname, a.mname, a.lname, a.suffix, a.user_image, b.user_id, b.userstatus_, b.usertype_, c.supervisor_id, c.fname, c.mname, c.lname, c.suffix, c.position_ FROM tbl_supervisor AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id LEFT JOIN supervisor_list AS c ON CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) = CONCAT(c.fname, ' ', c.mname, ' ', c.lname, ' ', c.suffix) ORDER BY a.lname ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $userstatus_ = $row['userstatus_'];
                                                                    // USER STATUS //
                                                                    if ($row['userstatus_'] == '0') {
                                                                        $userstatus = '<span class="badge badge-danger" style="font-weight: bold;">Inactive</span>';
                                                                    } else if ($row['userstatus_'] == '1') {
                                                                        $userstatus = '<span class="badge badge-success" style="font-weight: bold;">Active</span>';
                                                                    } else {
                                                                        $userstatus = "";
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?></td>
                                                                            <td><?php echo $row['position_']; ?></td>
                                                                            <td><?php echo $userstatus; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <?php
                                                                                    if ($userstatus_ == '1') {
                                                                                        ?>
                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Blacklist Account" onclick="viewblacklistaccount('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['position_']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewblacklistaccnt();"><i class="fa fa-times-circle-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Delete Account" onclick="viewsupervisordelete('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['position_']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewdeleteaccnt();"><i class="fa fa-trash-o"></i></button>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <button type="button" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Reactivate Account" onclick="viewreactivateaccount('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>'); saveadmviewreactivateaccnt();"><i class="fa fa-check-circle-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Blacklist Account" onclick="viewblacklistaccount('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['position_']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewblacklistaccnt();"><i class="fa fa-times-circle-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Delete Account" onclick="viewsupervisordelete('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['position_']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewdeleteaccnt();"><i class="fa fa-trash-o"></i></button>
                                                                                        <?php
                                                                                    }
                                                                                ?>
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
                                <div id="ops" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>NAME</th>
                                                            <th>DESIGNATION</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.fname, a.mname, a.lname, a.suffix, a.user_image, b.user_id, b.userstatus_, b.usertype_, c.operations_id, c.fname, c.mname, c.lname, c.suffix, c.position_ FROM tbl_operations AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id LEFT JOIN operations_list AS c ON CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) = CONCAT(c.fname, ' ', c.mname, ' ', c.lname, ' ', c.suffix) ORDER BY a.lname ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $userstatus_ = $row['userstatus_'];
                                                                    // USER STATUS //
                                                                    if ($row['userstatus_'] == '0') {
                                                                        $userstatus = '<span class="badge badge-danger" style="font-weight: bold;">Inactive</span>';
                                                                    } else if ($row['userstatus_'] == '1') {
                                                                        $userstatus = '<span class="badge badge-success" style="font-weight: bold;">Active</span>';
                                                                    } else {
                                                                        $userstatus = "";
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?></td>
                                                                            <td><?php echo $row['position_']; ?></td>
                                                                            <td><?php echo $userstatus; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <?php
                                                                                    if ($userstatus_ == '1') {
                                                                                        ?>
                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Blacklist Account" onclick="viewblacklistaccount('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['position_']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewblacklistaccnt();"><i class="fa fa-times-circle-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Delete Account" onclick="viewoperationsdelete('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['position_']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewdeleteaccnt();"><i class="fa fa-trash-o"></i></button>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <button type="button" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Reactivate Account" onclick="viewreactivateaccount('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>'); saveadmviewreactivateaccnt();"><i class="fa fa-check-circle-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Blacklist Account" onclick="viewblacklistaccount('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['position_']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewblacklistaccnt();"><i class="fa fa-times-circle-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Delete Account" onclick="viewoperationsdelete('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['position_']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewdeleteaccnt();"><i class="fa fa-trash-o"></i></button>
                                                                                        <?php
                                                                                    }
                                                                                ?>
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
                                <div id="supp" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>NAME</th>
                                                            <th>DESIGNATION</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.fname, a.mname, a.lname, a.suffix, a.user_image, b.user_id, b.userstatus_, b.usertype_, c.itsupp_id, c.fname, c.mname, c.lname, c.suffix, c.position_ FROM tbl_support AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id LEFT JOIN itsupport_list AS c ON CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) = CONCAT(c.fname, ' ', c.mname, ' ', c.lname, ' ', c.suffix) ORDER BY a.lname ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $userstatus_ = $row['userstatus_'];
                                                                    // USER STATUS //
                                                                    if ($row['userstatus_'] == '0') {
                                                                        $userstatus = '<span class="badge badge-danger" style="font-weight: bold;">Inactive</span>';
                                                                    } else if ($row['userstatus_'] == '1') {
                                                                        $userstatus = '<span class="badge badge-success" style="font-weight: bold;">Active</span>';
                                                                    } else {
                                                                        $userstatus = "";
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?></td>
                                                                            <td><?php echo $row['position_']; ?></td>
                                                                            <td><?php echo $userstatus; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <?php
                                                                                    if ($userstatus_ == '1') {
                                                                                        ?>
                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Blacklist Account" onclick="viewblacklistaccount('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['position_']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewblacklistaccnt();"><i class="fa fa-times-circle-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Delete Account" onclick="viewsupportdelete('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['position_']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewdeleteaccnt();"><i class="fa fa-trash-o"></i></button>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <button type="button" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Reactivate Account" onclick="viewreactivateaccount('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>'); saveadmviewreactivateaccnt();"><i class="fa fa-check-circle-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Blacklist Account" onclick="viewblacklistaccount('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['position_']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewblacklistaccnt();"><i class="fa fa-times-circle-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Delete Account" onclick="viewsupportdelete('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['position_']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewdeleteaccnt();"><i class="fa fa-trash-o"></i></button>
                                                                                        <?php
                                                                                    }
                                                                                ?>
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
                                <div id="adm" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>NAME</th>
                                                            <th>DESIGNATION</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.fname, a.mname, a.lname, a.suffix, a.user_image, b.user_id, b.userstatus_, b.usertype_, c.mngt_id, c.fname, c.mname, c.lname, c.suffix, c.position_ FROM tbl_admin AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id LEFT JOIN management_list AS c ON CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) = CONCAT(c.fname, ' ', c.mname, ' ', c.lname, ' ', c.suffix) ORDER BY a.lname ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $userstatus_ = $row['userstatus_'];
                                                                    // USER STATUS //
                                                                    if ($row['userstatus_'] == '0') {
                                                                        $userstatus = '<span class="badge badge-danger" style="font-weight: bold;">Inactive</span>';
                                                                    } else if ($row['userstatus_'] == '1') {
                                                                        $userstatus = '<span class="badge badge-success" style="font-weight: bold;">Active</span>';
                                                                    } else {
                                                                        $userstatus = "";
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?></td>
                                                                            <td><?php echo $row['position_']; ?></td>
                                                                            <td><?php echo $userstatus; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <?php
                                                                                    if ($userstatus_ == '1') {
                                                                                        ?>
                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Blacklist Account" onclick="viewblacklistaccount('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['position_']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewblacklistaccnt();"><i class="fa fa-times-circle-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Delete Account" onclick="viewadmindelete('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['position_']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewdeleteaccnt();"><i class="fa fa-trash-o"></i></button>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <button type="button" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Reactivate Account" onclick="viewreactivateaccount('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>'); saveadmviewreactivateaccnt();"><i class="fa fa-check-circle-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Blacklist Account" onclick="viewblacklistaccount('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['position_']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewblacklistaccnt();"><i class="fa fa-times-circle-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Delete Account" onclick="viewadmindelete('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['position_']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewdeleteaccnt();"><i class="fa fa-trash-o"></i></button>
                                                                                        <?php
                                                                                    }
                                                                                ?>
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
                                <div id="dev" class="tab-pane p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>NAME</th>
                                                            <th>DESIGNATION</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.user_id, a.fname, a.mname, a.lname, a.suffix, a.user_image, b.user_id, b.userstatus_, b.usertype_, c.dev_id, c.fname, c.mname, c.lname, c.suffix, c.position_ FROM tbl_developer AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id LEFT JOIN developer_list AS c ON CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) = CONCAT(c.fname, ' ', c.mname, ' ', c.lname, ' ', c.suffix) ORDER BY a.lname ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $userstatus_ = $row['userstatus_'];
                                                                    // USER STATUS //
                                                                    if ($row['userstatus_'] == '0') {
                                                                        $userstatus = '<span class="badge badge-danger" style="font-weight: bold;">Inactive</span>';
                                                                    } else if ($row['userstatus_'] == '1') {
                                                                        $userstatus = '<span class="badge badge-success" style="font-weight: bold;">Active</span>';
                                                                    } else {
                                                                        $userstatus = "";
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?></td>
                                                                            <td><?php echo $row['position_']; ?></td>
                                                                            <td><?php echo $userstatus; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <?php
                                                                                    if ($userstatus_ == '1') {
                                                                                        ?>
                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Blacklist Account" onclick="viewblacklistaccount('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['user_position']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewblacklistaccnt();"><i class="fa fa-times-circle-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Delete Account" onclick="viewdeveloperdelete('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['position_']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewdeleteaccnt();"><i class="fa fa-trash-o"></i></button>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <button type="button" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Reactivate Account" onclick="viewreactivateaccount('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>'); saveadmviewreactivateaccnt();"><i class="fa fa-check-circle-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Blacklist Account" onclick="viewblacklistaccount('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['user_position']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewblacklistaccnt();"><i class="fa fa-times-circle-o"></i></button>
                                                                                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Delete Account" onclick="viewdeveloperdelete('<?php echo $row['fname'].' '.$row['mname']. ' ' .$row['lname']. ' ' .$row['suffix']; ?>', '<?php echo $row['user_id']; ?>', '<?php echo $row['fname']; ?>', '<?php echo $row['mname']; ?>', '<?php echo $row['lname']; ?>', '<?php echo $row['suffix']; ?>', '<?php echo $row['position_']; ?>', '<?php echo $row['usertype_']; ?>'); saveadmviewdeleteaccnt();"><i class="fa fa-trash-o"></i></button>
                                                                                        <?php
                                                                                    }
                                                                                ?>
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