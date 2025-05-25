<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    $sql = "SELECT a.endo_id, a.fname, a.application_code, a.mname, a.lname, CONCAT(a.fname, ' ', a.mname,  ' ', a.lname) AS applicantname, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.turn_around_date, a.client_id, a.endorsed_to, a.site_id, b.user_id, b.company_name, c.client_id, c.client_name, c.acronym_, c.site_ FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id WHERE a.endo_code = '".$_GET["endoCode"]."'";
    $result = $conn->query($sql);
    while ($row = mysqli_fetch_array($result)) {
        extract($row);
        $endoCode = $row['endo_code'];
        $applicantname = $row['applicantname'];
        $endorsed_to = $row['endorsed_to'];
        $acronym_ = $row['acronym_'];
        $application_code = $row['application_code'];
    }
?>

<div id="wrapper" class="theme-green">
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-12">
                        <h2>Manage Endorsements</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Manage Endorsements</li>
                            <li class="breadcrumb-item">Background Investigation</li>
                            <li class="breadcrumb-item active">Upload Documents</li>
                        </ul>   
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h2>Applicant Name: <small style="font-weight: bold;"><?php echo $applicantname; ?></small> </h2>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-outline-danger" style="float: right; margin-top: 25px; margin-top: 5px;" onclick="back_manage_endo_bi(); savemanageendobi();"><i class="fa fa-arrow-left"></i> Back</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <form action="functions/save_supporting_docs.php" method="POST" enctype="multipart/form-data">
                                <div class="row"> 
                                    <div class="col-md-12">
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <h6>Supporting Documents: </h6>
                                                <hr> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="hidden" id="acronymclient" name="acronymclient" value="<?php echo $acronym_; ?>">
                                                        <input type="text" name="application_code" id="application_code" style="display: none;" value="<?php echo $application_code; ?>">
                                                        <input type="text" name="endorsedpoc" id="endorsedpoc" style="display: none;" value="<?php echo $endorsed_to; ?>">
                                                        <input type="text" name="endoCode" id="endoCode" style="display: none;" value="<?php echo $endoCode; ?>">
                                                        <input type="file" class="dropify" name="edufile[]" id="edufile" multiple>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <!--<select class="form-control input-group-sm" id="educationdocs" name="educationdocs" style="float: left;">-->
                                                        <!--    <option value="educstatus">-- Select Status --</option>-->
                                                        <!--    <option value="0">Partial</option>-->
                                                        <!--    <option value="1">Complete</option>-->
                                                        <!--</select>-->
                                                        <!--<br><br>-->
                                                        <small class="text-muted" style="font-size: 13px;">Document Remarks: </small>
                                                        <textarea class="form-control" rows="5" maxlength="200" id="educdocremarks" name="educdocremarks" style="resize: none;" placeholder="Type Remarks Here" autocomplete="off"></textarea>
                                                        <div id="educationdocs_feedback"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!--<div class="row"> -->
                                <!--    <div class="col-md-12">-->
                                <!--        <div class="row clearfix">-->
                                <!--            <div class="col-md-12">-->
                                <!--                <h6 class="text-muted">Employment Documents: </h6>-->
                                <!--                <hr> -->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="row">-->
                                <!--            <div class="col-md-12">-->
                                <!--                <div class="row">-->
                                <!--                    <div class="col-md-6">-->
                                <!--                        <input type="hidden" name="endoCode" id="endoCode" value="<?php echo $endoCode; ?>">-->
                                <!--                        <input type="file" class="dropify" name="empfile[]" id="empfile" multiple>-->
                                <!--                    </div>-->
                                <!--                    <div class="col-md-6">-->
                                <!--                        <select class="form-control input-group-sm" id="employmentdocs" name="employmentdocs" style="float: left;">-->
                                <!--                            <option value="empstatus">-- Select Status --</option>-->
                                <!--                            <option value="0">Partial</option>-->
                                <!--                            <option value="1">Complete</option>-->
                                <!--                        </select>-->
                                <!--                        <br><br>-->
                                <!--                        <small class="text-muted" style="font-size: 13px;">Document Remarks: </small>-->
                                <!--                        <textarea class="form-control" rows="5" maxlength="200" id="empdocremarks" name="empdocremarks" style="resize: none;" placeholder="Type Remarks Here" autocomplete="off"></textarea>-->
                                <!--                        <div id="employmentdocs_feedback"></div>-->
                                <!--                    </div>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<br><br>-->
                                <!--<div class="row"> -->
                                <!--    <div class="col-md-12">-->
                                <!--        <div class="row clearfix">-->
                                <!--            <div class="col-md-12">-->
                                <!--                <h6 class="text-muted">Other Documents: </h6>-->
                                <!--                <hr> -->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="row">-->
                                <!--            <div class="col-md-12">-->
                                <!--                <div class="row">-->
                                <!--                    <div class="col-md-6">-->
                                <!--                        <input type="hidden" name="endoCode" id="endoCode" value="<?php echo $endoCode; ?>">-->
                                <!--                        <input type="file" class="dropify" name="otherfile[]" id="otherfile" multiple>-->
                                <!--                    </div>-->
                                <!--                    <div class="col-md-6">-->
                                <!--                        <select class="form-control input-group-sm" id="otherdocs" name="otherdocs" style="float: left;">-->
                                <!--                            <option value="othstatus">-- Select Status --</option>-->
                                <!--                            <option value="0">Partial</option>-->
                                <!--                            <option value="1">Complete</option>-->
                                <!--                        </select>-->
                                <!--                        <br><br>-->
                                <!--                        <small class="text-muted" style="font-size: 13px;">Document Remarks: </small>-->
                                <!--                        <textarea class="form-control" rows="5" maxlength="200" id="othdocremarks" name="othdocremarks" style="resize: none;" placeholder="Type Remarks Here" autocomplete="off"></textarea>-->
                                <!--                        <div id="otherdocs_feedback"></div>-->
                                <!--                    </div>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <button type="submit" class="btn btn-outline-success mt-4" name="uploaddocs"><i class="fa fa-check-circle-o"></i> Submit</button>
                                <button type="button" class="btn btn-outline-secondary mt-4" onclick="cleardocumentsform();"><i class="fa fa-eraser"></i> Clear</button> 
                            </form>
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