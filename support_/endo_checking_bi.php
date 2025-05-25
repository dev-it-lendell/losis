<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.package_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, b.datetime_done, c.user_id, CONCAT(c.user_id) AS clientuserid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.user_id, CONCAT(d.user_id) AS supervisorid, d.assigned_team, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname, e.client_id, e.client_name, e.acronym_, e.site_ FROM tbl_endo AS a LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id LEFT JOIN client_list AS e ON a.site_id = e.client_id WHERE a.endo_status = '1' AND b.verify_status ='0' AND a.endo_code = '".$_GET["endoCode"]."'";
    $query = $conn->query($sql);
    while($row = mysqli_fetch_array($query)) { 
        extract($row);
        $supervisorname = $row['supervisorname'];
        $supervisorid = $row['supervisorid'];
        $endorsementcode = $row['endo_code'];
        $endo_id = $row['endo_id'];
        $endo_date = $row['endo_date'];
        $newDateEndo = date('F d, Y', strtotime($endo_date));
		$turnaround_date = $row['turn_around_date'];
		$newDateTurnAround = date('F d, Y', strtotime($turnaround_date));        
        $clientfullname = $row['company_name'].' - '.$row['site_'];
        $clientname = $row['clientname'];
        $acronym_ = $row['acronym_'];
        $supervisorid = $row['supervisorid'];
        $endo_desc = $row['endo_desc'];
        $folder_name = $row['folder_name'];
        $applicantname = $row['applicantname'];
		$endo_services = $row['endo_services'];
		$clientuserid = $row['clientuserid'];
		$assigned_team = $row['assigned_team'];
		$package_desc = $row['package_desc'];
    }
?>

<div id="wrapper" class="theme-green">
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Verification Checking</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Verify Endorsement</li>
                            <li class="breadcrumb-item">Background Investigation</li>
                            <li class="breadcrumb-item active">Verification Checking</li>
                        </ul>   
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-outline-danger" style="float: right; margin-right: 25px; margin-top: 15px;" onclick="back_verifyendo_bi(); saveverifyendobi();"><i class="fa fa-arrow-left"></i> Back</button>
                            </div>
                        </div>
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
                                            <h4 class="media-heading">For Checking of Endorsement</h4>
                                                Verification checking of endorsement
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="form" method="POST" enctype="multipart/form-data" action="functions/results_chkbi.php">
                            <div class="body">
                                <div id="wrapper" class="theme-green">
                                    <div class="row clearfix">
                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                            <div class="card member-card">
                                                <div class="pw_img" style="margin-top: 70px;">
                                                    <img class="img-fluid" src="../images/backgrounds/bg-5.png" alt="About the image">
                                                </div>
                                                <div class="member-img">
                                                    <a href="javascript:void(0);"><img src="../images/icons/endorsement.png" class="rounded-circle" alt="profile-image"></a>
                                                </div>
                                                <div class="body">
                                                    <input type="hidden" class="form-control"  name="verifybi_endocode" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $endorsementcode; ?>">
                                                    <input type="hidden" class="form-control" name="verifybi_clientcode" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $acronym_; ?>">
                                                    <input type="hidden" class="form-control" name="supervisorid" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $supervisorid; ?>">
                                                    <input type="hidden" class="form-control" name="endocode" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $endorsementcode; ?>">
                                                    <input type="hidden" class="form-control" name="clientuserid" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $clientuserid; ?>">
                                                    <input type="hidden" class="form-control" name="assigned_team" readonly style="background-color: #fff; text-align: left; color: #000; font-size: 13px;" value="<?php echo $assigned_team; ?>">
                                                    <div class="row text-center border-bottom pb-2">
                                                        <div class="col-md-12">
                                                            <label class="d-block text-muted mb-1">Applicant Name</label>
                                                            <p style="font-size: 13px; font-weight: bold;"><?php echo $applicantname; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center mt-2 border-bottom pb-2">
                                                        <div class="col-md-6 border-right">
                                                            <label class="d-block text-muted mb-1">Endorsement Date</label>
                                                            <p style="font-size: 13px; font-weight: bold;"><?php echo $newDateEndo; ?></p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="d-block text-muted mb-1">Endorsement Code</label>
                                                            <p style="font-size: 13px; font-weight: bold;"><?php echo $endorsementcode; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-12 col-sm-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2><strong>Endorsement</strong> Details</h2>
                                                </div>
                                                <div class="body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <small class="text-muted">Batch ID: </small>
                                                                        <p id="biendorsement_desc"><?php echo $endo_desc; ?></p>
                                                                    <hr>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <small class="text-muted">Package Desciption: </small>
                                                                        <p id="biendorsement_folder" style="font-weight: bold;"><?php echo $package_desc; ?></p>
                                                                        <hr>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <small class="text-muted">Endorsement Requestor: </small>
                                                                        <p id="biendorsement_requestor"><?php echo $clientname; ?></p>
                                                                    <hr>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <small class="text-muted">Turn Around Date: </small>
                                                                        <p id="biendorsement_service"><?php echo $newDateTurnAround; ?></p>
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <small class="text-muted">Company Name - Site: </small>
                                                                <p id="biendorsement_company"><?php echo $clientfullname; ?></p>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <small class="text-muted">Assigned POC/Supervisor: </small>
                                                                <p id="biendorsement_company" style="font-weight: bold;"><?php echo $supervisorname; ?></p>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2><strong>Verification</strong> Checking <small>Select from the following</small></h2>
                                                </div>
                                                <div class="body">
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
                                                                            <select class="form-control input-group-sm" id="txt_cmap_biresults" name="txt_cmap_biresults" style="float: left; margin-top: -10px; display: none;">
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
                                                                            <select class="form-control input-group-sm" id="txt_ofac_biresults" name="txt_ofac_biresults" style="float: left; margin-top: -10px; display: none;">
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
                                                                            <select class="form-control input-group-sm" id="txt_oig_biresults" name="txt_oig_biresults" style="float: left; margin-top: -10px; display: none;">
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
                                                                            <select class="form-control input-group-sm" id="txt_gsa_biresults" name="2" style="float: left; margin-top: -10px; display: none;">
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
                                                    <button type="submit" class="btn btn-outline-success mt-3" name="verifybi"><i class="fa fa-check-circle-o"></i> Submit</button>
                                                    <button type="submit" class="btn btn-outline-secondary mt-3"><i class="fa fa-eraser"></i> Clear</button> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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