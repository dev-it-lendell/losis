<?php
    include 'header.php';
    include '../connect.php';

    if (!empty($_GET['status'])) {
        switch($_GET['status']){
            case 'succ':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['success']('Endorsements succesfully added.');
                    </script>
                <?php
            break;

            case 'err':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Cannot create endorsements.');
                    </script>
                <?php
            break;

            case 'invalid_file':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['warning']('Invalid file format.');
                    </script>
                <?php
            break;

            case 'duplicate_entry':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Endorsement(s) already existed in list.');
                    </script>
                <?php
            break;

            default:
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Endorsement error.');
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
                        <h2>Background Investigation</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Manage Endorsements</li>
                            <li class="breadcrumb-item active">Background Investigation</li>
                        </ul>   
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>ENDORSEMENT CODE</th>
                                                    <th>APPLICANT NAME</th>
                                                    <th style="text-align: center;">ACTIONS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $sql = "SELECT id, endo_code, CONCAT(fname, ' ', mname, ' ', lname) AS applicantname, birthdate FROM tbl_report_criminal_check";
                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            ?>
                                                                <tr>
                                                                    <td style="font-weight: bold;"><?php echo $row['endo_code']; ?></td>
                                                                    <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                    <td style="text-align: center;">
                                                                        <a onclick="savedownloadrepbi()" href="download_report.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
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
