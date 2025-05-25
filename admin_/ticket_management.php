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
                        <h2>Ticket Management</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active">Ticket Management</li>
                        </ul>   
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
                                                    <i class="fa fa-ticket text-dark"></i>
                                                </p>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Total Current Month Tickets</h4>
                                                <p style="font-size: 15px;"><?php echo $now->format('F Y'); ?></p>
                                                <p id="totalcurrentmonthlyticket" style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;"></p>
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
                                                <h4 class="media-heading">Total Current Year Tickets</h4>
                                                <p style="font-size: 15px;"><?php echo $now->format('Y'); ?></p>
                                                <p id="totalcurrentyearlyticket" style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;"></p>
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
                                            <div id="janticketstatus"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>REFERENCE NO</th>
                                                            <th>TIME SCHEDULE</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>                                                        
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_admin AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '01' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '0' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_support AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '01' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '4' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_supervisor AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '01' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '2' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_operations AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '01' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '3' ORDER BY ticket_id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $fullname = strtoupper($row['lname']). ' ' .$row['suffix']. ' , '.$row['fname'];
                                                                    $reference_number = $row['reference_number'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $start_date = $row['start_date'];
                                                                    $end_date = $row['end_date'];
                                                                    $ticket_status = $row['ticket_status'];
                                                                    $newDateStart = date("F j, Y", strtotime($start_date));
                                                                    $newDateEnd = date("F j, Y", strtotime($end_date));

                                                                    // STATUS //
                                                                    if ($row['ticket_status'] == '0') {
                                                                        $ticketstatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['ticket_status'] == '1') {
                                                                        $ticketstatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['ticket_status'] == '2') {
                                                                        $ticketstatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $ticketstatus = "";
                                                                    }

                                                                    // IS DUE //
                                                                    $startDate = strtotime(date('Y-m-d', strtotime($end_date) ) );
                                                                    $currentDate = strtotime(date('Y-m-d'));
                                                                    if($startDate < $currentDate) {
                                                                        $isdue = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">YES</span>';
                                                                    } else {
                                                                        $isdue = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">NO</span>';
                                                                    }

                                                                    // IS EXTENDED //
                                                                    if ($row['is_extended'] == '0') {
                                                                        $extendeddate = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">NO</span>';
                                                                    } else {
                                                                        $extendeddate = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">YES</span>';
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$fullname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['reference_number']; ?></td>
                                                                            <td><?php echo $newDateStart. ' to ' .$newDateEnd; ?></td>
                                                                            <?php
                                                                                if ($ticket_status == '0' || $ticket_status == '1') {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$isdue. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                } else {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="fa fa-file-text-o"></i></button>
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
                                            <div id="febticketstatus"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>REFERENCE NO</th>
                                                            <th>TIME SCHEDULE</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>                                                        
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_admin AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '02' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '0' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_support AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '02' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '4' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_supervisor AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '02' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '2' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_operations AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '02' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '3' ORDER BY ticket_id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $fullname = strtoupper($row['lname']). ' ' .$row['suffix']. ' , '.$row['fname'];
                                                                    $reference_number = $row['reference_number'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $start_date = $row['start_date'];
                                                                    $end_date = $row['end_date'];
                                                                    $ticket_status = $row['ticket_status'];
                                                                    $newDateStart = date("F j, Y", strtotime($start_date));
                                                                    $newDateEnd = date("F j, Y", strtotime($end_date));

                                                                    // STATUS //
                                                                    if ($row['ticket_status'] == '0') {
                                                                        $ticketstatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['ticket_status'] == '1') {
                                                                        $ticketstatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['ticket_status'] == '2') {
                                                                        $ticketstatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $ticketstatus = "";
                                                                    }

                                                                    // IS DUE //
                                                                    $startDate = strtotime(date('Y-m-d', strtotime($end_date) ) );
                                                                    $currentDate = strtotime(date('Y-m-d'));
                                                                    if($startDate < $currentDate) {
                                                                        $isdue = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">YES</span>';
                                                                    } else {
                                                                        $isdue = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">NO</span>';
                                                                    }

                                                                    // IS EXTENDED //
                                                                    if ($row['is_extended'] == '0') {
                                                                        $extendeddate = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">NO</span>';
                                                                    } else {
                                                                        $extendeddate = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">YES</span>';
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$fullname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['reference_number']; ?></td>
                                                                            <td><?php echo $newDateStart. ' to ' .$newDateEnd; ?></td>
                                                                            <?php
                                                                                if ($ticket_status == '0' || $ticket_status == '1') {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$isdue. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                } else {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="fa fa-file-text-o"></i></button>
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
                                            <div id="marticketstatus"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>REFERENCE NO</th>
                                                            <th>TIME SCHEDULE</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>                                                        
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_admin AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '03' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '0' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_support AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '03' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '4' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_supervisor AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '03' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '2' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_operations AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '03' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '3' ORDER BY ticket_id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $fullname = strtoupper($row['lname']). ' ' .$row['suffix']. ' , '.$row['fname'];
                                                                    $reference_number = $row['reference_number'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $start_date = $row['start_date'];
                                                                    $end_date = $row['end_date'];
                                                                    $ticket_status = $row['ticket_status'];
                                                                    $newDateStart = date("F j, Y", strtotime($start_date));
                                                                    $newDateEnd = date("F j, Y", strtotime($end_date));

                                                                    // STATUS //
                                                                    if ($row['ticket_status'] == '0') {
                                                                        $ticketstatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['ticket_status'] == '1') {
                                                                        $ticketstatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['ticket_status'] == '2') {
                                                                        $ticketstatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $ticketstatus = "";
                                                                    }

                                                                    // IS DUE //
                                                                    $startDate = strtotime(date('Y-m-d', strtotime($end_date) ) );
                                                                    $currentDate = strtotime(date('Y-m-d'));
                                                                    if($startDate < $currentDate) {
                                                                        $isdue = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">YES</span>';
                                                                    } else {
                                                                        $isdue = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">NO</span>';
                                                                    }

                                                                    // IS EXTENDED //
                                                                    if ($row['is_extended'] == '0') {
                                                                        $extendeddate = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">NO</span>';
                                                                    } else {
                                                                        $extendeddate = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">YES</span>';
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$fullname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['reference_number']; ?></td>
                                                                            <td><?php echo $newDateStart. ' to ' .$newDateEnd; ?></td>
                                                                            <?php
                                                                                if ($ticket_status == '0' || $ticket_status == '1') {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$isdue. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                } else {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="fa fa-file-text-o"></i></button>
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
                                            <div id="aprticketstatus"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>REFERENCE NO</th>
                                                            <th>TIME SCHEDULE</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>                                                        
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_admin AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '04' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '0' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_support AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '04' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '4' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_supervisor AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '04' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '2' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_operations AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '04' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '3' ORDER BY ticket_id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $fullname = strtoupper($row['lname']). ' ' .$row['suffix']. ' , '.$row['fname'];
                                                                    $reference_number = $row['reference_number'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $start_date = $row['start_date'];
                                                                    $end_date = $row['end_date'];
                                                                    $ticket_status = $row['ticket_status'];
                                                                    $newDateStart = date("F j, Y", strtotime($start_date));
                                                                    $newDateEnd = date("F j, Y", strtotime($end_date));

                                                                    // STATUS //
                                                                    if ($row['ticket_status'] == '0') {
                                                                        $ticketstatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['ticket_status'] == '1') {
                                                                        $ticketstatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['ticket_status'] == '2') {
                                                                        $ticketstatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $ticketstatus = "";
                                                                    }

                                                                    // IS DUE //
                                                                    $startDate = strtotime(date('Y-m-d', strtotime($end_date) ) );
                                                                    $currentDate = strtotime(date('Y-m-d'));
                                                                    if($startDate < $currentDate) {
                                                                        $isdue = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">YES</span>';
                                                                    } else {
                                                                        $isdue = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">NO</span>';
                                                                    }

                                                                    // IS EXTENDED //
                                                                    if ($row['is_extended'] == '0') {
                                                                        $extendeddate = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">NO</span>';
                                                                    } else {
                                                                        $extendeddate = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">YES</span>';
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$fullname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['reference_number']; ?></td>
                                                                            <td><?php echo $newDateStart. ' to ' .$newDateEnd; ?></td>
                                                                            <?php
                                                                                if ($ticket_status == '0' || $ticket_status == '1') {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$isdue. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                } else {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="fa fa-file-text-o"></i></button>
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
                                            <div id="mayticketstatus"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>REFERENCE NO</th>
                                                            <th>TIME SCHEDULE</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>                                                        
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_admin AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '05' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '0' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_support AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '05' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '4' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_supervisor AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '05' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '2' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_operations AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '05' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '3' ORDER BY ticket_id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $fullname = strtoupper($row['lname']). ' ' .$row['suffix']. ' , '.$row['fname'];
                                                                    $reference_number = $row['reference_number'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $start_date = $row['start_date'];
                                                                    $end_date = $row['end_date'];
                                                                    $ticket_status = $row['ticket_status'];
                                                                    $newDateStart = date("F j, Y", strtotime($start_date));
                                                                    $newDateEnd = date("F j, Y", strtotime($end_date));

                                                                    // STATUS //
                                                                    if ($row['ticket_status'] == '0') {
                                                                        $ticketstatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['ticket_status'] == '1') {
                                                                        $ticketstatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['ticket_status'] == '2') {
                                                                        $ticketstatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $ticketstatus = "";
                                                                    }

                                                                    // IS DUE //
                                                                    $startDate = strtotime(date('Y-m-d', strtotime($end_date) ) );
                                                                    $currentDate = strtotime(date('Y-m-d'));
                                                                    if($startDate < $currentDate) {
                                                                        $isdue = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">YES</span>';
                                                                    } else {
                                                                        $isdue = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">NO</span>';
                                                                    }

                                                                    // IS EXTENDED //
                                                                    if ($row['is_extended'] == '0') {
                                                                        $extendeddate = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">NO</span>';
                                                                    } else {
                                                                        $extendeddate = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">YES</span>';
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$fullname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['reference_number']; ?></td>
                                                                            <td><?php echo $newDateStart. ' to ' .$newDateEnd; ?></td>
                                                                            <?php
                                                                                if ($ticket_status == '0' || $ticket_status == '1') {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$isdue. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                } else {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="fa fa-file-text-o"></i></button>
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
                                            <div id="juneticketstatus"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>REFERENCE</th>
                                                            <th>TIME SCHEDULE</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>                                                        
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_admin AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '06' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '0' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_support AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '06' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '4' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_supervisor AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '06' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '2' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_operations AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '06' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '3' ORDER BY ticket_id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $fullname = strtoupper($row['lname']). ' ' .$row['suffix']. ' , '.$row['fname'];
                                                                    $reference_number = $row['reference_number'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $start_date = $row['start_date'];
                                                                    $end_date = $row['end_date'];
                                                                    $ticket_status = $row['ticket_status'];
                                                                    $newDateStart = date("F j, Y", strtotime($start_date));
                                                                    $newDateEnd = date("F j, Y", strtotime($end_date));

                                                                    // STATUS //
                                                                    if ($row['ticket_status'] == '0') {
                                                                        $ticketstatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['ticket_status'] == '1') {
                                                                        $ticketstatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['ticket_status'] == '2') {
                                                                        $ticketstatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $ticketstatus = "";
                                                                    }

                                                                    // IS DUE //
                                                                    $startDate = strtotime(date('Y-m-d', strtotime($end_date) ) );
                                                                    $currentDate = strtotime(date('Y-m-d'));
                                                                    if($startDate < $currentDate) {
                                                                        $isdue = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">YES</span>';
                                                                    } else {
                                                                        $isdue = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">NO</span>';
                                                                    }

                                                                    // IS EXTENDED //
                                                                    if ($row['is_extended'] == '0') {
                                                                        $extendeddate = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">NO</span>';
                                                                    } else {
                                                                        $extendeddate = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">YES</span>';
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$fullname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['reference_number']; ?></td>
                                                                            <td><?php echo $newDateStart. ' to ' .$newDateEnd; ?></td>
                                                                            <?php
                                                                                if ($ticket_status == '0' || $ticket_status == '1') {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$isdue. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                } else {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="fa fa-file-text-o"></i></button>
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
                                            <div id="julyticketstatus"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>ID</th>
                                                            <th>TIME SCHEDULE</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>                                                        
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_admin AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '07' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '0' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_support AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '07' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '4' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_supervisor AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '07' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '2' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_operations AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '07' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '3' ORDER BY ticket_id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $fullname = strtoupper($row['lname']). ' ' .$row['suffix']. ' , '.$row['fname'];
                                                                    $reference_number = $row['reference_number'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $start_date = $row['start_date'];
                                                                    $end_date = $row['end_date'];
                                                                    $ticket_status = $row['ticket_status'];
                                                                    $newDateStart = date("F j, Y", strtotime($start_date));
                                                                    $newDateEnd = date("F j, Y", strtotime($end_date));

                                                                    // STATUS //
                                                                    if ($row['ticket_status'] == '0') {
                                                                        $ticketstatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['ticket_status'] == '1') {
                                                                        $ticketstatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['ticket_status'] == '2') {
                                                                        $ticketstatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $ticketstatus = "";
                                                                    }

                                                                    // IS DUE //
                                                                    $startDate = strtotime(date('Y-m-d', strtotime($end_date) ) );
                                                                    $currentDate = strtotime(date('Y-m-d'));
                                                                    if($startDate < $currentDate) {
                                                                        $isdue = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">YES</span>';
                                                                    } else {
                                                                        $isdue = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">NO</span>';
                                                                    }

                                                                    // IS EXTENDED //
                                                                    if ($row['is_extended'] == '0') {
                                                                        $extendeddate = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">NO</span>';
                                                                    } else {
                                                                        $extendeddate = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">YES</span>';
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$fullname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['reference_number']; ?></td>
                                                                            <td><?php echo $newDateStart. ' to ' .$newDateEnd; ?></td>
                                                                            <?php
                                                                                if ($ticket_status == '0' || $ticket_status == '1') {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$isdue. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                } else {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="fa fa-file-text-o"></i></button>
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
                                            <div id="augticketstatus"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>REFERENCE NO</th>
                                                            <th>TIME SCHEDULE</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>                                                        
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_admin AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '08' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '0' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_support AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '08' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '4' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_supervisor AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '08' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '2' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_operations AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '08' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '3' ORDER BY ticket_id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $fullname = strtoupper($row['lname']). ' ' .$row['suffix']. ' , '.$row['fname'];
                                                                    $reference_number = $row['reference_number'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $start_date = $row['start_date'];
                                                                    $end_date = $row['end_date'];
                                                                    $ticket_status = $row['ticket_status'];
                                                                    $newDateStart = date("F j, Y", strtotime($start_date));
                                                                    $newDateEnd = date("F j, Y", strtotime($end_date));

                                                                    // STATUS //
                                                                    if ($row['ticket_status'] == '0') {
                                                                        $ticketstatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['ticket_status'] == '1') {
                                                                        $ticketstatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['ticket_status'] == '2') {
                                                                        $ticketstatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $ticketstatus = "";
                                                                    }

                                                                    // IS DUE //
                                                                    $startDate = strtotime(date('Y-m-d', strtotime($end_date) ) );
                                                                    $currentDate = strtotime(date('Y-m-d'));
                                                                    if($startDate < $currentDate) {
                                                                        $isdue = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">YES</span>';
                                                                    } else {
                                                                        $isdue = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">NO</span>';
                                                                    }

                                                                    // IS EXTENDED //
                                                                    if ($row['is_extended'] == '0') {
                                                                        $extendeddate = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">NO</span>';
                                                                    } else {
                                                                        $extendeddate = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">YES</span>';
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$fullname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['reference_number']; ?></td>
                                                                            <td><?php echo $newDateStart. ' to ' .$newDateEnd; ?></td>
                                                                            <?php
                                                                                if ($ticket_status == '0' || $ticket_status == '1') {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$isdue. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                } else {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="fa fa-file-text-o"></i></button>
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
                                            <div id="septticketstatus"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>REFERENCE NO</th>
                                                            <th>TIME SCHEDULE</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>                                                        
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_admin AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '09' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '0' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_support AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '09' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '4' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_supervisor AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '09' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '2' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_operations AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '09' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '3' ORDER BY ticket_id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $fullname = strtoupper($row['lname']). ' ' .$row['suffix']. ' , '.$row['fname'];
                                                                    $reference_number = $row['reference_number'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $start_date = $row['start_date'];
                                                                    $end_date = $row['end_date'];
                                                                    $ticket_status = $row['ticket_status'];
                                                                    $newDateStart = date("F j, Y", strtotime($start_date));
                                                                    $newDateEnd = date("F j, Y", strtotime($end_date));

                                                                    // STATUS //
                                                                    if ($row['ticket_status'] == '0') {
                                                                        $ticketstatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['ticket_status'] == '1') {
                                                                        $ticketstatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['ticket_status'] == '2') {
                                                                        $ticketstatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $ticketstatus = "";
                                                                    }

                                                                    // IS DUE //
                                                                    $startDate = strtotime(date('Y-m-d', strtotime($end_date) ) );
                                                                    $currentDate = strtotime(date('Y-m-d'));
                                                                    if($startDate < $currentDate) {
                                                                        $isdue = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">YES</span>';
                                                                    } else {
                                                                        $isdue = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">NO</span>';
                                                                    }

                                                                    // IS EXTENDED //
                                                                    if ($row['is_extended'] == '0') {
                                                                        $extendeddate = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">NO</span>';
                                                                    } else {
                                                                        $extendeddate = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">YES</span>';
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$fullname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['reference_number']; ?></td>
                                                                            <td><?php echo $newDateStart. ' to ' .$newDateEnd; ?></td>
                                                                            <?php
                                                                                if ($ticket_status == '0' || $ticket_status == '1') {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$isdue. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                } else {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="fa fa-file-text-o"></i></button>
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
                                            <div id="octticketstatus"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>REFERENCE NO</th>
                                                            <th>TIME SCHEDULE</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>                                                        
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_admin AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '10' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '0' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_support AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '10' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '4' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_supervisor AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '10' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '2' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_operations AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '10' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '3' ORDER BY ticket_id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $fullname = strtoupper($row['lname']). ' ' .$row['suffix']. ' , '.$row['fname'];
                                                                    $reference_number = $row['reference_number'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $start_date = $row['start_date'];
                                                                    $end_date = $row['end_date'];
                                                                    $ticket_status = $row['ticket_status'];
                                                                    $newDateStart = date("F j, Y", strtotime($start_date));
                                                                    $newDateEnd = date("F j, Y", strtotime($end_date));

                                                                    // STATUS //
                                                                    if ($row['ticket_status'] == '0') {
                                                                        $ticketstatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['ticket_status'] == '1') {
                                                                        $ticketstatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['ticket_status'] == '2') {
                                                                        $ticketstatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $ticketstatus = "";
                                                                    }

                                                                    // IS DUE //
                                                                    $startDate = strtotime(date('Y-m-d', strtotime($end_date) ) );
                                                                    $currentDate = strtotime(date('Y-m-d'));
                                                                    if($startDate < $currentDate) {
                                                                        $isdue = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">YES</span>';
                                                                    } else {
                                                                        $isdue = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">NO</span>';
                                                                    }

                                                                    // IS EXTENDED //
                                                                    if ($row['is_extended'] == '0') {
                                                                        $extendeddate = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">NO</span>';
                                                                    } else {
                                                                        $extendeddate = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">YES</span>';
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$fullname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['reference_number']; ?></td>
                                                                            <td><?php echo $newDateStart. ' to ' .$newDateEnd; ?></td>
                                                                            <?php
                                                                                if ($ticket_status == '0' || $ticket_status == '1') {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$isdue. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                } else {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="fa fa-file-text-o"></i></button>
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
                                            <div id="novticketstatus"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>REFERENCE NO</th>
                                                            <th>TIME SCHEDULE</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>                                                        
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_admin AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '11' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '0' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_support AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '11' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '4' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_supervisor AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '11' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '2' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_operations AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '11' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '3' ORDER BY ticket_id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $fullname = strtoupper($row['lname']). ' ' .$row['suffix']. ' , '.$row['fname'];
                                                                    $reference_number = $row['reference_number'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $start_date = $row['start_date'];
                                                                    $end_date = $row['end_date'];
                                                                    $ticket_status = $row['ticket_status'];
                                                                    $newDateStart = date("F j, Y", strtotime($start_date));
                                                                    $newDateEnd = date("F j, Y", strtotime($end_date));

                                                                    // STATUS //
                                                                    if ($row['ticket_status'] == '0') {
                                                                        $ticketstatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['ticket_status'] == '1') {
                                                                        $ticketstatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['ticket_status'] == '2') {
                                                                        $ticketstatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $ticketstatus = "";
                                                                    }

                                                                    // IS DUE //
                                                                    $startDate = strtotime(date('Y-m-d', strtotime($end_date) ) );
                                                                    $currentDate = strtotime(date('Y-m-d'));
                                                                    if($startDate < $currentDate) {
                                                                        $isdue = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">YES</span>';
                                                                    } else {
                                                                        $isdue = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">NO</span>';
                                                                    }

                                                                    // IS EXTENDED //
                                                                    if ($row['is_extended'] == '0') {
                                                                        $extendeddate = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">NO</span>';
                                                                    } else {
                                                                        $extendeddate = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">YES</span>';
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$fullname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['reference_number']; ?></td>
                                                                            <td><?php echo $newDateStart. ' to ' .$newDateEnd; ?></td>
                                                                            <?php
                                                                                if ($ticket_status == '0' || $ticket_status == '1') {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$isdue. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                } else {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="fa fa-file-text-o"></i></button>
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
                                            <div id="decticketstatus"></div>
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th></th>
                                                            <th>REFERENCE NO</th>
                                                            <th>TIME SCHEDULE</th>
                                                            <th>STATUS</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>                                                        
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_admin AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '12' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '0' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_support AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '12' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '4' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_supervisor AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '12' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '2' UNION ALL SELECT a.is_extended, a.ticket_id, a.reference_number, a.start_date, a.end_date, a.ticket_type, a.ticket_status, a.requestor, a.date_created, b.user_id, b.fname, b.mname, b.lname, b.suffix, b.user_image, c.user_id, c.usertype_ FROM tbl_tickets AS a LEFT JOIN tbl_operations AS b ON a.requestor = b.user_id LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = '12' AND YEAR(a.date_created) = YEAR(NOW()) AND c.usertype_ = '3' ORDER BY ticket_id DESC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $fullname = strtoupper($row['lname']). ' ' .$row['suffix']. ' , '.$row['fname'];
                                                                    $reference_number = $row['reference_number'];
                                                                    $user_id = $row['user_id'];
                                                                    $user_image = $row['user_image'];
                                                                    $start_date = $row['start_date'];
                                                                    $end_date = $row['end_date'];
                                                                    $ticket_status = $row['ticket_status'];
                                                                    $newDateStart = date("F j, Y", strtotime($start_date));
                                                                    $newDateEnd = date("F j, Y", strtotime($end_date));

                                                                    // STATUS //
                                                                    if ($row['ticket_status'] == '0') {
                                                                        $ticketstatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                                    } else if ($row['ticket_status'] == '1') {
                                                                        $ticketstatus = '<span class="badge badge-danger" style="font-weight: bold;">On-Process</span>';
                                                                    } else if ($row['ticket_status'] == '2') {
                                                                        $ticketstatus = '<span class="badge badge-success" style="font-weight: bold;">Completed</span>';
                                                                    } else {
                                                                        $ticketstatus = "";
                                                                    }

                                                                    // IS DUE //
                                                                    $startDate = strtotime(date('Y-m-d', strtotime($end_date) ) );
                                                                    $currentDate = strtotime(date('Y-m-d'));
                                                                    if($startDate < $currentDate) {
                                                                        $isdue = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">YES</span>';
                                                                    } else {
                                                                        $isdue = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Due?">NO</span>';
                                                                    }

                                                                    // IS EXTENDED //
                                                                    if ($row['is_extended'] == '0') {
                                                                        $extendeddate = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">NO</span>';
                                                                    } else {
                                                                        $extendeddate = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">YES</span>';
                                                                    }

                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php
                                                                                    echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$fullname.'"></div>'
                                                                                ?>
                                                                            </td>
                                                                            <td style="font-weight: bold;"><?php echo $row['reference_number']; ?></td>
                                                                            <td><?php echo $newDateStart. ' to ' .$newDateEnd; ?></td>
                                                                            <?php
                                                                                if ($ticket_status == '0' || $ticket_status == '1') {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$isdue. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                } else {
                                                                                    ?>
                                                                                        <td><?php echo $ticketstatus. ' ' .$extendeddate; ?></td>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="fa fa-file-text-o"></i></button>
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