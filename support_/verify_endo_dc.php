<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    if (!empty($_GET['verfdc'])) {
        switch ($_GET['verfdc']) {
            case 'succverdc':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['success']('Endorsement succesfully verified.');
                    </script>
                <?php
            break;

            case 'errverdc':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Cannot verified selected endorsement.');
                    </script>
                <?php
            break;

            default:
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Endorsement verification error.');
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
                        <h2>Database Check</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href=""><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Verify Endorsement</li>
                            <li class="breadcrumb-item active">Database Check</li>
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
                                                    <i class="fa fa-files-o text-dark"></i>
                                                </p>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Total Current Month Endorsements</h4>
                                                <p style="font-size: 15px;"><?php echo $now->format('F Y'); ?></p>
                                                <p style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;" id="dccurrentverfendo"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="verifydcstatus"></div>
                                    <div class="table-responsive">
                                        <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th></th>
                                                    <th>CODE</th>
                                                    <th>NAME</th>
                                                    <th>DATE</th>
                                                    <th style="text-align: center;">ACTIONS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_endo_support_dc AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE a.endo_status = '1' ORDER BY a.importance ASC";
                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            $verify_status = $row['verify_status'];
                                                            $endo_date = $row['endo_date'];
                                                            $newDateEndo = date('F d, Y', strtotime($endo_date));
                                                            $turnaround_date = $row['turn_around_date'];
                                                            $newDateTurnAround = date('F d, Y', strtotime($turnaround_date));

                                                            // VERIFY STATUS //
                                                            if ($row['verify_status'] == '0') {
                                                                $endoverify = '<div class="feeds-left"><img src="../images/icons/for_checking.png" class="rounded-circle width35" alt="" style="width: 28px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="For-Checking"></div>';
                                                            } else if ($row['verify_status'] == '1') {
                                                                $endoverify = '<div class="feeds-left"><img src="../images/icons/completed.png" class="rounded-circle width35" alt="" style="width: 28px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Completed"></div>';
                                                            } else {
                                                                $endoverify = "";
                                                            }

                                                            ?>
                                                                <tr>
                                                                    <td style="text-align: center;"><?php echo $endoverify; ?></td>
                                                                    <td><?php echo $row['endo_code']; ?></td>
                                                                    <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                    <td><?php echo $newDateEndo; ?></td>
                                                                    <td style="text-align: center;"> 
                                                                        <?php
                                                                            if ($verify_status == '0') {
                                                                                ?>
                                                                                <a onclick="savecheckendobi();" href="endo_checking_dc.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Verification Checking"><i class="fa fa-check-circle-o"></i></a>
                                                                                <?php
                                                                            } else {
                                                                                ?>
                                                                                <a onclick="saveviewcheckbi();" href="view_checking_dc.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement Results"><i class="fa fa-file-text-o"></i></a>
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

<?php
    include 'modals.php';
    include 'script.php';
?>