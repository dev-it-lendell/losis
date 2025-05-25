<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

?>


<?php
    include 'modals.php';
    include 'script.php';
?>



<div id="wrapper" class="theme-green">
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2>Background Investigation</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href=""><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Verify Endorsement</li>
                            <li class="breadcrumb-item active">Background Investigation</li>
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
                                            <div class="media-body text-center">
                                                <h4 class="media-heading">Total Current Month Endorsements</h4>
                                                <p style="font-size: 15px;"><?php echo $now->format('F Y'); ?></p>
                                                <p style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;" id="bicurrentverfendo"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="verifybistatus"></div>
                                    <div class="table-responsive">
                                        <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th style="width: 1%;">
                                                        <label class="fancy-checkbox">
                                                            <input class="checkbox-tick" type="checkbox" id="chkallapprbi" onclick="toggleSelectAll(this)">
                                                            <span></span>
                                                        </label>
                                                    </th>
                                                    <th></th>
                                                    <th>CODE</th>
                                                    <th>NAME</th>
                                                    <th>DATE</th>
                                                    <th style="text-align: center;">ACTIONS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, CONCAT(e.user_id) AS supervisorid, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo AS a LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE a.endo_status = '1' OR a.endo_status = '2' AND MONTH(b.datetime_added) = MONTH(NOW()) AND YEAR(b.datetime_added) = YEAR(NOW()) ORDER BY a.endo_status ASC";
                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            $verify_status = $row['verify_status'];
                                                            $endo_date = $row['endo_date'];
                                                            $endo_code = $row['endo_code'];
                                                            $newDateEndo = date('F d, Y', strtotime($endo_date));
                                                            $turnaround_date = $row['turn_around_date'];
                                                            $newDateTurnAround = date('F d, Y', strtotime($turnaround_date));

                                                            if ($row['verify_status'] == '0') {
                                                                $endoverify = '<div class="feeds-left"><img src="../images/icons/for_checking.png" class="rounded-circle width35" alt="" style="width: 28px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="For-Checking"></div>';
                                                            } else if ($row['verify_status'] == '1') {
                                                                $endoverify = '<div class="feeds-left"><img src="../images/icons/completed.png" class="rounded-circle width35" alt="" style="width: 28px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Completed"></div>';
                                                            } else {
                                                                $endoverify = "";
                                                            }

                                                            ?>
                                                                <tr>
                                                                    <td>
                                                                        <label class="fancy-checkbox">
                                                                            <input class="checkbox-tick" type="checkbox" name="selected_endorsements[]" value="<?php echo $endo_code; ?>">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td style="text-align: center;"><?php echo $endoverify; ?></td>
                                                                    <td><?php echo $endo_code; ?></td>
                                                                    <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                    <td><?php echo $newDateEndo; ?></td>
                                                                    <td style="text-align: center;"> 
                                                                        <?php
                                                                            if ($verify_status == '0') {
                                                                                ?>
                                                                                <a onclick="savecheckendobi();" href="endo_checking_bi.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Verification Checking"><i class="fa fa-check-circle-o"></i></a>
                                                                                <?php
                                                                            } else {
                                                                                ?>
                                                                                <a onclick="saveviewcheckbi();" href="view_checking_bi.php?endoCode=<?php echo $row['endo_code'] ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement Results"><i class="fa fa-file-text-o"></i></a>
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

<!--<div class="modal fade" id="endorsementModal1" tabindex="-1" role="dialog" aria-labelledby="endorsementModal1" aria-hidden="true" data-backdrop="static" data-keyboard="false">-->
<div class="modal fade" id="endorsementModal1" tabindex="-1" aria-labelledby="endorsementModal1" role="dialog">
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="col-lg-10 col-md-10 col-sm-10 mx-auto">
            <div class="card" style="padding: 5px 20px 20px 20px;">
                <div class="header">
                    <div class="text-right">
                        <div class="text-right">
                            <button type="button" class="btn btn-outline-danger" style="margin: 15px 0 20px 0;" onclick="back_verifyendo_bi(); saveverifyendobi();"><i class="fa fa-arrow-left"></i> Back</button>
                        </div>
                    </div>
                    <div class="card" style="height: 85px;">
                        <div class="card-body">
                            <div class="media mleft">
                                <div class="media-left">
                                    <p style="font-size: 36px; margin-top: -7px;">
                                        <i class="fa fa-info-circle text-success"></i>
                                    </p>
                                </div>
                                <div class="media-body text-left">
                                    <h4 class="media-heading">For Checking of Endorsement</h4>
                                    Verification checking of endorsement
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2><strong>Verification</strong> Checking <small>Select from the following</small></h2>
                </div>
                <form method="POST" id="verify_modal" action="functions/results_chkbi_batch.php" enctype="multipart/form-data">
                    <input type="hidden" name="clientuserid[]" id="clientuserid" value="<?php echo $row['client_id']; ?></td>">
                    <input type="hidden" name="supervisorid[]" id="supervisorid" value="<?php echo $row['supervisorid']; ?></td>">
                    <input type="hidden" name="assigned_team[]" id="assigned_team" value="<?php echo $row['assigned_team']; ?></td>">
                    <input type="hidden" name="acronym_[]" id="acronym_" value="<?php echo $row['acronym_']; ?></td>">
                    <div id="selected_endorsements_container" style="display: none;"></div>
                    
                    <div class="body">
                        <div id="fetchedData" style="display: none;" class="mb-3"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="fancy-checkbox element-left">
                                                    <input type="checkbox" id="bi_cmap" name="bi_cmap" value="1">
                                                    <span>CMAP</span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control input-group-sm" id="txt_cmap_biresults" name="txt_cmap_biresults" style="display: none;">
                                                    <option value="">--Select--</option>
                                                    <option value="0">No Findings</option>
                                                    <option value="1">With Findings</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="fancy-checkbox element-left">
                                                    <input type="checkbox" id="bi_ofac" name="bi_ofac" value="1">
                                                    <span>OFAC</span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control input-group-sm" id="txt_ofac_biresults" name="txt_ofac_biresults" style="display: none;">
                                                    <option value="">--Select--</option>
                                                    <option value="0">No Findings</option>
                                                    <option value="1">With Findings</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="fancy-checkbox element-left">
                                                    <input type="checkbox" id="bi_oig" name="bi_oig" value="1">
                                                    <span>OIG</span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control input-group-sm" id="txt_oig_biresults" name="txt_oig_biresults" style="display: none;">
                                                    <option value="">--Select--</option>
                                                    <option value="0">No Findings</option>
                                                    <option value="1">With Findings</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="fancy-checkbox element-left">
                                                    <input type="checkbox" id="bi_gsa" name="bi_gsa" value="1">
                                                    <span>GSA</span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control input-group-sm" id="txt_gsa_biresults" name="txt_gsa_biresults" style="display: none;">
                                                    <option value="">--Select--</option>
                                                    <option value="0">No Findings</option>
                                                    <option value="1">With Findings</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <input type="file" class="dropify" name="files[]" id="files" multiple>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-success mt-3" name="verifybi_batch">
                            <i class="fa fa-check-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-outline-secondary mt-3">
                            <i class="fa fa-eraser"></i> Clear
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function toggleSelectAll(source) {
        const checkboxes = document.querySelectorAll('.checkbox-tick');
        checkboxes.forEach(checkbox => {
            checkbox.checked = source.checked;
        });

        if (source.checked) {
            $('#endorsementModal1').addClass('show');
            $('#endorsementModal1').modal('show');
            $('#endorsementModal1').attr('aria-modal', 'true');
            $('#endorsementModal1').css('display', 'block');
        }
    }

    function fetchEndoDetails() {
        const selectedEndorsements = Array.from(document.querySelectorAll('input[name="selected_endorsements[]"]:checked'))
            .map(checkbox => checkbox.value);

        const container = document.getElementById('selected_endorsements_container');
        container.innerHTML = '';
        selectedEndorsements.forEach(code => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'selected_endorsements[]';
            input.value = code;
            container.appendChild(input);
        });

        $.ajax({
            url: 'get_endo_details.php',
            type: 'POST',
            data: { endo_codes: selectedEndorsements },
            success: function(data) {
                $('#fetchedData').html(data);
                $('#fetchedData').show();
            },
            error: function() {
                $('#fetchedData').html('<p>Error fetching data.</p>');
            }
        });
    }

    $('#endorsementModal1').on('show.bs.modal', function () {
        fetchEndoDetails();
    });
</script>


<?php 


    if (!empty($_GET['verfbi'])) {
        switch ($_GET['verfbi']) {
            case 'succverbi':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['success']('Endorsement succesfully verified.');
                    </script>
                <?php
            break;

            case 'errverbi':
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











