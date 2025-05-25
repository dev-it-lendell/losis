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
                        <h2>Manage Tickets</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Ticketing</li>
                            <li class="breadcrumb-item active">Manage Tickets</li>
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
                                                <p style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;" id="currenttotaltickets"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="currentticketstatus"></div>
                                    <div class="table-responsive">
                                        <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th></th>
                                                    <th>REFERENCE NUMBER</th>
                                                    <th>DATE</th>
                                                    <th>STATUS</th>
                                                    <th style="text-align: center;">ACTIONS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $sql = "SELECT a.ticket_id, a.reference_number, a.start_date, a.start_time, a.end_date, a.end_time, a.ticket_type, a.tasks, a.is_extended, a.ticket_status, a.requestor, a.date_created, b.user_id, b.usertype_, c.user_id, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname, ' ', c.suffix) AS adminname, c.user_image FROM tbl_tickets AS a LEFT JOIN tbl_users AS b ON a.requestor = b.user_id LEFT JOIN tbl_admin AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = MONTH(NOW()) AND YEAR(a.date_created) = YEAR(NOW()) AND b.usertype_ = '0' UNION ALL SELECT a.ticket_id, a.reference_number, a.start_date, a.start_time, a.end_date, a.end_time, a.ticket_type, a.tasks, a.is_extended, a.ticket_status, a.requestor, a.date_created, b.user_id, b.usertype_, c.user_id, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname, ' ', c.suffix) AS supervisorname, c.user_image FROM tbl_tickets AS a LEFT JOIN tbl_users AS b ON a.requestor = b.user_id LEFT JOIN tbl_supervisor AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = MONTH(NOW()) AND YEAR(a.date_created) = YEAR(NOW()) AND b.usertype_ = '2' UNION ALL SELECT a.ticket_id, a.reference_number, a.start_date, a.start_time, a.end_date, a.end_time, a.ticket_type, a.tasks, a.is_extended, a.ticket_status, a.requestor, a.date_created, b.user_id, b.usertype_, c.user_id, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname, ' ', c.suffix) AS operationsname, c.user_image FROM tbl_tickets AS a LEFT JOIN tbl_users AS b ON a.requestor = b.user_id LEFT JOIN tbl_operations AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = MONTH(NOW()) AND YEAR(a.date_created) = YEAR(NOW()) AND b.usertype_ = '3' UNION ALL SELECT a.ticket_id, a.reference_number, a.start_date, a.start_time, a.end_date, a.end_time, a.ticket_type, a.tasks, a.is_extended, a.ticket_status, a.requestor, a.date_created, b.user_id, b.usertype_, c.user_id, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname, ' ', c.suffix) AS supportname, c.user_image FROM tbl_tickets AS a LEFT JOIN tbl_users AS b ON a.requestor = b.user_id LEFT JOIN tbl_support AS c ON b.user_id = c.user_id WHERE MONTH(a.date_created) = MONTH(NOW()) AND YEAR(a.date_created) = YEAR(NOW()) AND b.usertype_ = '4' ORDER BY ticket_id DESC";
                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        $adminname = $row['adminname'];
                                                        $user_id = $row['user_id'];
                                                        $user_image = $row['user_image'];
                                                        $ticket_status = $row['ticket_status'];
                                                        $is_extended = $row['is_extended'];
                                                        $ticketDate = $row['date_created'];
                                                        $newDateTicket = date("F j, Y", strtotime($ticketDate));
                                                        $start_date = $row['start_date'];
                                                        $end_date = $row['end_date'];
                                                        $newDateStart = date("F j, Y", strtotime($start_date));
                                                        $newDateEnd = date("F j, Y", strtotime($end_date));

                                                        if ($row['ticket_status'] == '0') {
                                                            $ticketstatus = '<span class="badge badge-warning" style="font-weight: bold;">Pending</span>';
                                                        } else if ($row['ticket_status'] == '1') {
                                                            $ticketstatus = '<span class="badge badge-danger" style="font-weight: bold;">On Process</span>';
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
                                                        } else if ($row['is_extended'] == '1') {
                                                            $extendeddate = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Is Extended?">YES</span>';
                                                        } else {
                                                            $extendeddate = "";
                                                        }

                                                        ?>
                                                            <tr>
                                                                <td>
                                                                    <?php
                                                                        echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="'.$adminname.'"></div>'
                                                                        ?>
                                                                </td>
                                                                <td><?php echo $row['reference_number']; ?></td>
                                                                <td><?php echo $newDateTicket; ?></td>
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
                                                                    <?php
                                                                        if ($ticket_status == '0') {
                                                                            ?>
                                                                            <button type="button" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Start Ticket" onclick="viewstartticket('<?php echo $row['reference_number']; ?>', '<?php echo $newDateTicket; ?>', '<?php echo $row['tasks']; ?>', '<?php echo $row['reference_number']; ?>');"><i class="fa fa-check-circle-o"></i></button>
                                                                            <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="fa fa-ticket"></i></button>
                                                                            <?php           
                                                                        } else if ($ticket_status == '1') {
                                                                            ?>
                                                                            <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="fa fa-ticket"></i></button>
                                                                            <?php
                                                                        } else if ($ticket_status == '2') {
                                                                            ?>
                                                                            <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="fa fa-ticket"></i></button>
                                                                            <?php
                                                                        } else {
                                                                            echo "";
                                                                        }
                                                                    ?>
                                                                    <?php
                                                                        if ($startDate < $currentDate) {
                                                                            ?>
                                                                            <button type="button" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Extend Ticket" onclick="viewextendticket('<?php echo $row['reference_number']; ?>', '<?php echo $newDateTicket; ?>', '<?php echo $row['tasks']; ?>', '<?php echo $row['reference_number']; ?>');"><i class="fa fa-clock-o"></i></button>
                                                                            <?php
                                                                        } else {
                                                                            echo "";
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

<?php
    include 'modals.php';
    include 'script.php';
?>