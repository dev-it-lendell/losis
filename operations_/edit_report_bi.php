<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    $sql = "SELECT a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.site_id, a.endorsed_to, a.client_id, CONCAT(a.client_id) AS clientuserid, b.endorsement_code, b.assigned_tele, b.assigned_da, b.personal_bg, b.academic_, b.emp_history, b.char_references, b.identity_sss, b.identity_bir, b.criminal_nbi, b.criminal_lcc, b.credit_cmap, b.international_chk, b.barangay_chk, b.neighborhood_ref, b.political_religious_aff, b.lifestyle_chk, b.financial_review, c.client_id, c.client_name, c.acronym_, c.site_ FROM tbl_endo AS a LEFT JOIN create_report_options AS b ON a.endo_code = b.endorsement_code LEFT JOIN client_list AS c ON a.site_id = c.client_id WHERE a.endo_code ='".$_GET["endoCode"]."'";
    $query = $conn->query($sql);
    while ($row = mysqli_fetch_array($query)) {
        extract($row);
        $endoCode = $row['endo_code'];
        $applicantname = $row['applicantname'];
        $client_name = $row['client_name'];
        $personal_bg = $row['personal_bg'];
        $academic_ = $row['academic_'];
        $emp_history = $row['emp_history'];
        $char_references = $row['char_references'];
        $identity_sss = $row['identity_sss'];
        $identity_bir = $row['identity_bir'];
        $criminal_nbi = $row['criminal_nbi'];
        $criminal_lcc = $row['criminal_lcc'];
        $credit_cmap = $row['credit_cmap'];
        $international_chk = $row['international_chk'];
        $barangay_chk = $row['barangay_chk'];
        $neighborhood_ref = $row['neighborhood_ref'];
        $political_religious_aff = $row['political_religious_aff'];
        $lifestyle_chk = $row['lifestyle_chk'];
        $financial_review = $row['financial_review'];
        $endorsed_to = $row['endorsed_to'];
        $clientuserid = $row['clientuserid'];

        // BI FORM ASSESSMENT //
        $sql1 = "SELECT * FROM bi_report_assessment WHERE endo_code = '$endoCode'";
        $result1 = $conn->query($sql1);
        $row1 = $result1->fetch_assoc();
        $residence_addr = $row1['residence_addr'];
        $business_addr = $row1['business_addr'];
        $contact_details = $row1['contact_details'];
        $initiation_date = $row1['initiation_date'];
        $initial_date_submitted = $row1['initial_date_submitted'];
        $final_date_submitted = $row1['final_date_submitted'];
        $personal_bg_remarks = $row1['personal_bg_remarks'];
        $personal_bg_color = $row1['personal_bg_color'];
        $academic_chk_remarks = $row1['academic_chk_remarks'];
        $academic_chk_color = $row1['academic_chk_color'];
        $employment_hist_remarks = $row1['employment_hist_remarks'];
        $employment_hist_color = $row1['employment_hist_color'];
        $character_ref_remarks = $row1['character_ref_remarks'];
        $character_ref_color = $row1['character_ref_color'];
        $identity_sss_remarks = $row1['identity_sss_remarks'];
        $identity_sss_color = $row1['identity_sss_color'];
        $identity_bir_remarks = $row1['identity_bir_remarks'];
        $identity_bir_color = $row1['identity_bir_color'];
        $criminal_nbi_remarks = $row1['criminal_nbi_remarks'];
        $criminal_nbi_color = $row1['criminal_nbi_color'];
        $criminal_lcc_remarks = $row1['criminal_lcc_remarks'];
        $criminal_lcc_color = $row1['criminal_lcc_color'];
        $credit_cmap_remarks = $row1['credit_cmap_remarks'];
        $credit_cmap_colors = $row1['credit_cmap_colors'];
        $int_gdc_remarks = $row1['int_gdc_remarks'];
        $int_gdc_color = $row1['int_gdc_color'];
        $brgy_chk_remarks = $row1['brgy_chk_remarks'];
        $brgy_chk_color = $row1['brgy_chk_color'];
        $neighborhood_ref_remarks = $row1['neighborhood_ref_remarks'];
        $neighborhood_ref_color = $row1['neighborhood_ref_color'];
        $pol_religious_remarks = $row1['pol_religious_remarks'];
        $pol_religious_color = $row1['pol_religious_color'];
        $lifestyle_remarks = $row1['lifestyle_remarks'];
        $lifestyle_color = $row1['lifestyle_color'];
        $financial_rev_remarks = $row1['financial_rev_remarks'];
        $financial_rev_color = $row1['financial_rev_color'];
        $recommendation_ = $row1['recommendation_'];
        // PERSONAL BACKGROUND //
        if ($personal_bg == '1') {
            $sql2 = "SELECT * FROM report_personalbg WHERE endo_code = '$endoCode'";
            $result2 = $conn->query($sql2);
            $row2 = $result2->fetch_assoc();
            $remarkspersonalbg_ = $row2['remarks_'];
        } else {
            echo "";
        }
        // ACADEMIC //
        if ($academic_ == '1') {
            $sql3 = "SELECT * FROM report_academic WHERE endo_code = '$endoCode'";
            $result3 = $conn->query($sql3);
            $row3 = $result3->fetch_assoc();
            $school_ = $row3['school_'];
            $reported_degree = $row3['reported_degree'];
            $verified_degree = $row3['verified_degree'];
            $reported_yeargrad = $row3['reported_yeargrad'];
            $verified_yeargrad = $row3['verified_yeargrad'];
            $date_attended_to = $row3['date_attended_to'];
            $date_attended_from = $row3['date_attended_from'];
            $highest_educ_attainment = $row3['highest_educ_attainment'];
            $remarksacademic_ = $row3['remarks_'];
            $informantacademic_ = $row3['informant_'];
        } else {
            echo "";
        }
        // EMPLOYMENT VERIFICATION //
        if ($emp_history == '1') {
            $sql4 = "SELECT * FROM report_emphistory WHERE endo_code = '$endoCode'";
            $result4 = $conn->query($sql4);
            $row4 = $result4->fetch_assoc();
            $company_ = $row4['company_'];
            $reported_period_emp_from = $row4['reported_period_emp_from'];
            $reported_period_emp_to = $row4['reported_period_emp_to'];
            $verified_period_emp_from = $row4['verified_period_emp_from'];
            $verified_period_emp_to = $row4['verified_period_emp_to'];
            $reported_position = $row4['reported_position'];
            $verified_position = $row4['verified_position'];
            $reported_employment_ended = $row4['reported_employment_ended'];
            $verified_employment_ended = $row4['verified_employment_ended'];
            $nature_business = $row4['nature_business'];
            $any_records = $row4['any_records'];
            $eligible_for_rehire = $row4['eligible_for_rehire'];
            $remarksemployment_ = $row4['remarks_'];
            $informantemployment_ = $row4['informant_'];
        } else {
            echo "";
        }
        // CHARACTER REFERENCES //
        if ($char_references == '1') {
            $sql5 = "SELECT * FROM report_character_ref WHERE endo_code = '$endoCode'";
            $result5 = $conn->query($sql5);
            $row5 = $result5->fetch_assoc();
            $fnamecharref_ = $row5['fname_'];
            $mnamecharref_ = $row5['mname_'];
            $lnamecharref_ = $row5['lname_'];
            $suffixcharref_ = $row5['suffix_'];
            $employer_and_position = $row5['employer_and_position'];
            $contact_detailscharref = $row5['contact_details'];
            $remarkscharref_ = $row5['remarks_'];
        } else {
            echo "";
        }
        // IDENTITY CHECK (SSS) //
        if ($identity_sss == '1') {
            $sql6 = "SELECT * FROM report_identity_sss WHERE endo_code = '$endoCode'";
            $result6 = $conn->query($sql6);
            $row6 = $result6->fetch_assoc();
            $findings_sss = $row6['findings_'];
        } else {
            echo "";
        }
        // IDENTITY CHECK (BIR) //  
        if ($identity_bir == '1') {
            $sql7 = "SELECT * FROM report_identity_bir WHERE endo_code = '$endoCode'";
            $result7 = $conn->query($sql7);
            $row7 = $result7->fetch_assoc();
            $findings_bir = $row7['findings_'];
        } else {
            echo "";
        }
        // CRIMINAL CHECK (NBI) //
        if ($criminal_nbi == '1') {
            $sql8 = "SELECT * FROM report_criminal_nbi WHERE endo_code = '$endoCode'";
            $result8 = $conn->query($sql8);
            $row8 = $result8->fetch_assoc();
            $findings_nbi = $row8['findings_'];
        } else {
            echo "";
        }
        // CRIMINAL CHECK (LCC) //  
        if ($criminal_lcc == '1') {
            $sql9 = "SELECT * FROM report_criminal_lcc WHERE endo_code = '$endoCode'";
            $result9 = $conn->query($sql9);
            $row9 = $result9->fetch_assoc();
            $findings_lcc = $row9['findings_'];
        } else {
            echo "";
        }
        // CREDIT CHECK (CMAP) //
        if ($credit_cmap == '1') {
            $sql10 = "SELECT * FROM report_credit_cmap WHERE endo_code = '$endoCode'";
            $result10 = $conn->query($sql10);
            $row10 = $result10->fetch_assoc();
            $court_cases = $row10['court_cases'];
            $returned_checks = $row10['returned_checks'];
            $account_lawyers = $row10['account_lawyers'];
            $telecoms_bank = $row10['telecoms_bank'];
        } else {
            echo "";
        }
        // INTERNATIONAL CHECK //
        if ($international_chk == '1') {
            $sql11 = "SELECT * FROM report_international_check WHERE endo_code = '$endoCode'";
            $result11 = $conn->query($sql11);
            $row11 = $result11->fetch_assoc();
            $findings_intcheck = $row11['findings_'];
        } else {
            echo "";
        }
        // BARANGAY CHECK //
        if ($barangay_chk == '1') {
            $sql12 = "SELECT * FROM report_barangay_check WHERE endo_code = '$endoCode'";
            $result12 = $conn->query($sql12);
            $row12 = $result12->fetch_assoc();
            $brgy_name = $row12['brgy_name'];
            $brgy_informant = $row12['brgy_informant'];
            $position_ = $row12['position_'];
            $contact_ = $row12['contact_'];
        } else {
            echo "";
        }
        // NEIGHBORHOOD REFERENCES //
        if ($neighborhood_ref == '1') {
            $sql13 = "SELECT * FROM report_neighbhood_ref WHERE endo_code = '$endoCode'";
            $result13 = $conn->query($sql13);
            $row13 = $result13->fetch_assoc();
            $fnameneighb_ = $row13['fname_'];
            $mnameneighb_ = $row13['mname_'];
            $lnameneighb_ = $row13['lname_'];
            $suffixneighb_ = $row13['suffix_'];
            $address_neighb = $row13['current_address'];
            $contact_infocharref_neighb = $row13['contact_info'];
            $remarkscharref_neighb_ = $row13['remarks_'];
        } else {
            echo "";
        }
        // POLITICAL / RELIGIOUS AFFILIATIONS //
        if ($political_religious_aff == '1') {
            $sql14 = "SELECT * FROM report_political_religious WHERE endo_code = '$endoCode'";
            $result14 = $conn->query($sql14);
            $row14 = $result14->fetch_assoc();
            $remarks_political = $row14['remarks_'];
        } else {
            echo "";
        }
        // LIFESTYLE CHECK //
        if ($lifestyle_chk == '1') {
            $sql15 = "SELECT * FROM report_lifestyle_check WHERE endo_code = '$endoCode'";
            $result15 = $conn->query($sql15);
            $row15 = $result15->fetch_assoc();
            $remarks_lifestyle = $row15['remarks_'];
        } else {
            echo "";
        }
        // FINANCIAL CHECK //
        if ($financial_review == '1') {
            $sql16 = "SELECT * FROM report_financial_review WHERE endo_code = '$endoCode'";
            $result16 = $conn->query($sql16);
            $row16 = $result16->fetch_assoc();
            $remarks_financial = $row16['remarks_'];
        } else {
            echo "";
        }
    }
?>


<div id="wrapper" class="theme-green">
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Report Form</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Monitor Endorsements</li>
                            <li class="breadcrumb-item">Background Investigation</li>
                            <li class="breadcrumb-item active">Edit Report</li>
                        </ul>   
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-outline-danger" style="float: right; margin-right: 25px; margin-top: 15px;" onclick="back_endorsements_bi_da(); saveendorsementbianalyst();"><i class="fa fa-arrow-left"></i> Back</button>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="header">
                                <div class="card" style="height: 85px;">
                                    <div class="card-body">
                                        <div class="media mleft">
                                            <div class="media-left">
                                                <p style="font-size: 30px;">
                                                    <i class="fa fa-info-circle text-success"></i>
                                                </p>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Report Form</h4>
                                                    Please fill up the necessary fields below
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form class="form" method="POST" enctype="multipart/form-data" action="functions/update_bi_report.php">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#bi_coverpage" style="font-weight: bold;"><i class="fa fa-info-circle text-dark"></i></a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#bi_analysisreport" style="font-weight: bold;"><i class="fa fa-file-text-o text-dark"></i></a></li>
                                </ul>
                                <div class="tab-content br-n pn">
                                    <div id="bi_coverpage" class="tab-pane p-3 active">
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4"></div>
                                                    <div class="col-md-4">
                                                        <img class="d-block img-fluid" src="../images/lendell/logo-1.png" alt="First slide" style="height:60px; width: 500px; margin-top: -10px;">
                                                    </div>
                                                    <div class="col-md-4"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="input-group input-group-lg">
                                                            <div class="input-group-prepend" style="display: none;">
                                                                <span class="input-group-text" id="inputGroup-sizing-lg">Small</span>
                                                            </div>
                                                            <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" style="border: none; text-transform: uppercase; font-weight: bold; color: #000; font-size: 18px; background-color: #fff;" value="<?php echo $applicantname; ?>" disabled>
                                                            <input type="hidden" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" id="poc_code" name="poc_code" style="border: none; text-transform: uppercase; font-weight: bold; color: #000; font-size: 18px; background-color: #fff;" value="<?php echo $endorsed_to; ?>">
                                                            <input type="hidden" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" id="client_code" name="client_code" style="border: none; text-transform: uppercase; font-weight: bold; color: #000; font-size: 18px; background-color: #fff;" value="<?php echo $clientuserid; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-top: -30px;">
                                                    <div class="col-md-12">
                                                        <div class="body">
                                                            <div class="input-group input-group-sm">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color: #D3D3D3; color: #000; font-weight: bold; width: 200px; font-size: 13px;">Residence Address: </span>
                                                                </div>
                                                                <input type="text" class="form-control" id="residence_addr" name="residence_addr" autocomplete="off" value="<?php echo $residence_addr; ?>">
                                                            </div>
                                                            <div class="input-group input-group-sm">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color: #D3D3D3; color: #000; font-weight: bold; width: 200px; font-size: 13px;">Business Address: </span>
                                                                </div>
                                                                <input type="text" class="form-control" id="business_addr" name="business_addr" autocomplete="off" value="<?php echo $business_addr; ?>">
                                                            </div>
                                                            <div class="input-group input-group-sm">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color: #D3D3D3; color: #000; font-weight: bold; width: 200px; font-size: 13px;">Contact Details: </span>
                                                                </div>
                                                                <input type="text" class="form-control" id="contact_details" name="contact_details" autocomplete="off" value="<?php echo $contact_details; ?>">
                                                            </div>
                                                            <div class="input-group input-group-sm">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color: #D3D3D3; color: #000; font-weight: bold; width: 200px; font-size: 13px;">Reference Code: </span>
                                                                </div>
                                                                <input type="text" class="form-control" id="reference_code" name="reference_code" readonly style="background-color: #fff;" value="<?php echo $endoCode; ?>">
                                                            </div>
                                                            <div class="input-group input-group-sm">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color: #D3D3D3; color: #000; font-weight: bold; width: 200px; font-size: 13px;">Initiation Date: </span>
                                                                </div>     
                                                                <input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="yyyy-mm-dd" id="intiation_date" name="intiation_date" value="<?php echo $initiation_date; ?>">                    
                                                            </div>
                                                            <div class="input-group input-group-sm">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color: #D3D3D3; color: #000; font-weight: bold; width: 200px; font-size: 13px;">Date Submitted (Initial): </span>
                                                                </div>
                                                                <input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="yyyy-mm-dd" id="subminitial_date" name="subminitial_date" value="<?php echo $initial_date_submitted; ?>">                                        
                                                            </div>
                                                            <div class="input-group input-group-sm">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color: #D3D3D3; color: #000; font-weight: bold; width: 200px; font-size: 13px;" id="inputGroup-sizing-sm">Date Submitted (Final): </span>
                                                                </div>   
                                                                <input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="yyyy-mm-dd" id="submfinal_date" name="submfinal_date" value="<?php echo $final_date_submitted; ?>">                                   
                                                            </div>
                                                            <div class="p-3 mb-2" style="background-color: #D3D3D3; color: #000; font-weight: bold; font-size: 13px; text-align: center; text-transform: uppercase; margin-top: 10px;">For the exclusive use of <?php echo $client_name; ?></div>
                                                            <br>
                                                            <p style="color: #000; font-weight: bold; text-transform: uppercase; text-decoration: underline;"><mark style="background-color: yellow;">Comprehensive Assessment</mark></p>
                                                            <table class="table m-b-0 2c_list">
                                                                <thead class="thead-dark">
                                                                    <tr>
                                                                        <th style="text-align: center; font-weight: bold; text-transform: uppercase; width: 20%;">Verification Type</th>
                                                                        <th style="text-align: center; font-weight: bold; text-transform: uppercase; width: 50%;">Remarks</th>
                                                                        <th style="text-align: center; font-weight: bold; text-transform: uppercase; width: 30%;">Color Code</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        if ($personal_bg == '1') {
                                                                            ?>
                                                                                <tr style="height: 2px;">
                                                                                    <td style="font-size: 13px; font-weight: bold;">Personal Background</td>
                                                                                    <td>
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="personalbg_remarks" name="personalbg_remarks" value="<?php echo $personal_bg_remarks; ?>">
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control form-control" style="background-color: #fff; border: none;"  id="personalbg_color" name="personalbg_color">
                                                                                            <option value="">-- Select --</option>
                                                                                            <option value ="0">Green</option>
                                                                                            <option value ="1">Amber</option>
                                                                                            <option value ="2">Red</option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                        } else {
                                                                            echo "";    
                                                                        }
                                                                    ?>
                                                                    <?php
                                                                        if ($academic_ == '1') {
                                                                            ?>
                                                                                <tr style="height: 2px;">
                                                                                    <td style="font-size: 13px; font-weight: bold;">Academic Check</td>
                                                                                    <td>
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="academichk_remarks" name="academichk_remarks" value="<?php echo $academic_chk_remarks; ?>">
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control form-control" style="background-color: #fff; border: none;" id="academichk_color" name="academichk_color">
                                                                                            <option value="">-- Select --</option>
                                                                                            <option value ="0">Green</option>
                                                                                            <option value ="1">Amber</option>
                                                                                            <option value ="2">Red</option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                        } else {
                                                                            echo "";    
                                                                        }
                                                                    ?>
                                                                    <?php
                                                                        if ($emp_history == '1') {
                                                                            ?>
                                                                                <tr style="height: 2px;">
                                                                                    <td style="font-size: 13px; font-weight: bold;">Employment History</td>
                                                                                    <td>
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="emphist_remarks" name="emphist_remarks" value="<?php echo $employment_hist_remarks; ?>">
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control form-control" style="background-color: #fff; border: none;" id="emphist_color" name="emphist_color">
                                                                                            <option value="">-- Select --</option>
                                                                                            <option value ="0">Green</option>
                                                                                            <option value ="1">Amber</option>
                                                                                            <option value ="2">Red</option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                        } else {
                                                                            echo "";    
                                                                        }
                                                                    ?>
                                                                    <?php
                                                                        if ($char_references == '1') {
                                                                            ?>
                                                                                <tr style="height: 2px;">
                                                                                    <td style="font-size: 13px; font-weight: bold;">Character References</td>
                                                                                    <td>
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="charref_remarks" name="charref_remarks" value="<?php echo $character_ref_remarks; ?>">
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control form-control" style="background-color: #fff; border: none;" id="charref_color" name="charref_color">
                                                                                            <option value="">-- Select --</option>
                                                                                            <option value ="0">Green</option>
                                                                                            <option value ="1">Amber</option>
                                                                                            <option value ="2">Red</option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                        } else {
                                                                            echo "";    
                                                                        }
                                                                    ?>
                                                                    <?php
                                                                        if ($identity_sss == '1') {
                                                                            ?>
                                                                                <tr style="height: 2px;">
                                                                                    <td style="font-size: 13px; font-weight: bold;">Identity Check (SSS)</td>
                                                                                    <td>
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="identitysss_remarks" name="identitysss_remarks" value="<?php echo $identity_sss_remarks; ?>">
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control form-control" style="background-color: #fff; border: none;" id="sss_color" name="sss_color">
                                                                                            <option value="">-- Select --</option>
                                                                                            <option value ="0">Green</option>
                                                                                            <option value ="1">Amber</option>
                                                                                            <option value ="2">Red</option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                        } else {
                                                                            echo "";    
                                                                        }
                                                                    ?>
                                                                    <?php
                                                                        if ($identity_bir == '1') {
                                                                            ?>
                                                                                <tr style="height: 2px;">
                                                                                    <td style="font-size: 13px; font-weight: bold;">Identity Check (BIR)</td>
                                                                                    <td>
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="identitybir_remarks" name="identitybir_remarks" value="<?php echo $identity_bir_remarks; ?>">
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control form-control" style="background-color: #fff; border: none;" id="bir_color" name="bir_color">
                                                                                            <option value="">-- Select --</option>
                                                                                            <option value ="0">Green</option>
                                                                                            <option value ="1">Amber</option>
                                                                                            <option value ="2">Red</option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                        } else {
                                                                            echo "";    
                                                                        }
                                                                    ?>
                                                                    <?php
                                                                        if ($criminal_nbi == '1') {
                                                                            ?>
                                                                                <tr style="height: 2px;">
                                                                                    <td style="font-size: 13px; font-weight: bold;">Criminal Check (NBI)</td>
                                                                                    <td>
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="criminalnbi_remarks" name="criminalnbi_remarks" value="<?php echo $criminal_nbi_remarks; ?>">
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control form-control" style="background-color: #fff; border: none;" id="nbi_color" name="nbi_color">
                                                                                            <option value="">-- Select --</option>
                                                                                            <option value ="0">Green</option>
                                                                                            <option value ="1">Amber</option>
                                                                                            <option value ="2">Red</option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                        } else {
                                                                            echo "";    
                                                                        }
                                                                    ?>
                                                                    <?php
                                                                        if ($criminal_lcc == '1') {
                                                                            ?>
                                                                                <tr style="height: 2px;">
                                                                                    <td style="font-size: 13px; font-weight: bold;">Criminal Check (LCC)</td>
                                                                                    <td>
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="criminallcc_remarks" name="criminallcc_remarks" value="<?php echo $criminal_lcc_remarks; ?>">
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control form-control" style="background-color: #fff; border: none;" id="criminallcc_color" name="criminallcc_color">
                                                                                            <option value="">-- Select --</option>
                                                                                            <option value ="0">Green</option>
                                                                                            <option value ="1">Amber</option>
                                                                                            <option value ="2">Red</option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                        } else {
                                                                            echo "";    
                                                                        }
                                                                    ?>
                                                                    <?php
                                                                        if ($credit_cmap == '1') {
                                                                            ?>
                                                                                <tr style="height: 2px;">
                                                                                    <td style="font-size: 13px; font-weight: bold;">Credit Check (CMAP)</td>
                                                                                    <td>
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="creditcmap_remarks" name="creditcmap_remarks" value="<?php echo $credit_cmap_remarks; ?>">
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control form-control" style="background-color: #fff; border: none;" id="credit_color" name="credit_color">
                                                                                            <option value="">-- Select --</option>
                                                                                            <option value ="0">Green</option>
                                                                                            <option value ="1">Amber</option>
                                                                                            <option value ="2">Red</option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                        } else {
                                                                            echo "";    
                                                                        }
                                                                    ?>
                                                                    <?php
                                                                        if ($international_chk == '1') {
                                                                            ?>
                                                                                <tr style="height: 2px;">
                                                                                    <td style="font-size: 13px; font-weight: bold;">International Check (GDC)</td>
                                                                                    <td>
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="intgdc_remarks" name="intgdc_remarks" value="<?php echo $int_gdc_remarks; ?>">
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control form-control" style="background-color: #fff; border: none;" id="intgdc_color" name="intgdc_color">
                                                                                            <option value="">-- Select --</option>
                                                                                            <option value ="0">Green</option>
                                                                                            <option value ="1">Amber</option>
                                                                                            <option value ="2">Red</option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                        } else {
                                                                            echo "";    
                                                                        }
                                                                    ?>
                                                                    <?php
                                                                        if ($barangay_chk == '1') {
                                                                            ?>
                                                                                <tr style="height: 2px;">
                                                                                    <td style="font-size: 13px; font-weight: bold;">Barangay Check (GDC)</td>
                                                                                    <td>
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="barangay_remarks" name="barangay_remarks" value="<?php echo $brgy_chk_remarks; ?>">
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control form-control" style="background-color: #fff; border: none;" id="barangay_color" name="barangay_color">
                                                                                            <option value="">-- Select --</option>
                                                                                            <option value ="0">Green</option>
                                                                                            <option value ="1">Amber</option>
                                                                                            <option value ="2">Red</option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                        } else {
                                                                            echo "";    
                                                                        }
                                                                    ?>
                                                                    <?php
                                                                        if ($neighborhood_ref == '1') {
                                                                            ?>
                                                                                <tr style="height: 2px;">
                                                                                    <td style="font-size: 13px; font-weight: bold;">Neighborhood References</td>
                                                                                    <td>
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="neighbhood_remarks" name="neighbhood_remarks" value="<?php echo $neighborhood_ref_remarks; ?>">
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control form-control" style="background-color: #fff; border: none;" id="neighbhood_color" name="neighbhood_color">
                                                                                            <option value="">-- Select --</option>
                                                                                            <option value ="0">Green</option>
                                                                                            <option value ="1">Amber</option>
                                                                                            <option value ="2">Red</option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                        } else {
                                                                            echo "";    
                                                                        }
                                                                    ?>
                                                                    <?php
                                                                        if ($political_religious_aff == '1') {
                                                                            ?>
                                                                                <tr style="height: 2px;">
                                                                                    <td style="font-size: 13px; font-weight: bold;">Pol./Religious Affiliations</td>
                                                                                    <td>
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="polreligous_remarks" name="polreligous_remarks" value="<?php echo $pol_religious_remarks; ?>">
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control form-control" style="background-color: #fff; border: none;" id="polreligous_color" name="polreligous_color">
                                                                                            <option value="">-- Select --</option>
                                                                                            <option value ="0">Green</option>
                                                                                            <option value ="1">Amber</option>
                                                                                            <option value ="2">Red</option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                        } else {
                                                                            echo "";    
                                                                        }
                                                                    ?>
                                                                    <?php
                                                                        if ($lifestyle_chk == '1') {
                                                                            ?>
                                                                                <tr style="height: 2px;">
                                                                                    <td style="font-size: 13px; font-weight: bold;">Lifestyle Check</td>
                                                                                    <td>
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="lifestyle_remarks" name="lifestyle_remarks" value="<?php echo $lifestyle_remarks; ?>">
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control form-control" style="background-color: #fff; border: none;" id="lifestyle_color" name="lifestyle_color">
                                                                                            <option value="">-- Select --</option>
                                                                                            <option value ="0">Green</option>
                                                                                            <option value ="1">Amber</option>
                                                                                            <option value ="2">Red</option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                        } else {
                                                                            echo "";    
                                                                        }
                                                                    ?>
                                                                    <?php
                                                                        if ($financial_review == '1') {
                                                                            ?>
                                                                                <tr style="height: 2px;">
                                                                                    <td style="font-size: 13px; font-weight: bold;">Financial Review</td>
                                                                                    <td>
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="financialrev_remarks" name="financialrev_remarks" value="<?php echo $financial_rev_remarks; ?>">
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control form-control" style="background-color: #fff; border: none;" id="financialrev_color" name="financialrev_color">
                                                                                            <option value="">-- Select --</option>
                                                                                            <option value ="0">Green</option>
                                                                                            <option value ="1">Amber</option>
                                                                                            <option value ="2">Red</option>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                        } else {
                                                                            echo "";    
                                                                        }
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                            <div class="input-group input-group-sm">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color: #D3D3D3; color: #000; font-weight: bold; width: 300px; font-size: 15px;">Recommendation / Character Scale: </span>
                                                                </div>
                                                                <select class="form-control form-control" style="background-color: #fff;" id="recommendation_" name="recommendation_">
                                                                    <option value="">-- Select --</option>
                                                                    <option value ="0" class="cleared">CLEARED</option>
                                                                    <option value ="1" class="forreview">FOR-REVIEW</option>
                                                                    <option value ="2" class="failed">FAILED</option>
                                                                </select>
                                                            </div>
                                                            <br>
                                                            <div class="input-group input-group-sm">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color: #fff; color: #000; font-weight: bold; width: 150px; font-size: 15px;" id="inputGroup-sizing-sm">COLOR CODE: </span>
                                                                </div>
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color: green; color: #000; font-weight: bold; width: 223px; font-size: 15px; text-align: center;" id="inputGroup-sizing-sm" data-toggle="tooltip" data-placement="top" title="CLEARED">GREEN </span>
                                                                </div>
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color: orange; color: #000; font-weight: bold; width: 223px; font-size: 15px; text-align: center;" id="inputGroup-sizing-sm" data-toggle="tooltip" data-placement="top" title="FOR-REVIEW">AMBER </span>
                                                                </div>
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color: red; color: #000; font-weight: bold; width: 223px; font-size: 15px; text-align: center;" id="inputGroup-sizing-sm" data-toggle="tooltip" data-placement="top" title="FAILED">RED </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="bi_analysisreport" class="tab-pane p-3">
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                            <?php
                                                if ($personal_bg == '1') {
                                                    ?>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="card">
                                                                    <div class="header">
                                                                        <h2><strong>Personal</strong> Background</h2>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="body">
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12" style="margin-top: -40px;">
                                                                                <label class="d-block text-muted mb-1">Color Code:</label>
                                                                                <select class="form-control show-tick" id="pb_color" name="pb_color">
                                                                                    <option value="">-- Select --</option>
                                                                                    <option value ="0">Green</option>
                                                                                    <option value ="1">Amber</option>
                                                                                    <option value ="2">Red</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Report Remarks:</label>
                                                                                <div class="form-group">
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Remarks Here" id="pb_remarks" name="pb_remarks" style="resize: none;"><?php echo $remarkspersonalbg_; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                } else {
                                                    echo "";
                                                }
                                            ?>
                                            <?php
                                                if ($academic_ == '1') {
                                                    ?>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="card">
                                                                    <div class="header">
                                                                        <h2><strong>Academic</strong></h2>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="body">
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12" style="margin-top: -40px;">
                                                                                <label class="d-block text-muted mb-1">Color Code:</label>
                                                                                <select class="form-control show-tick" id="academic_color" name="academic_color">
                                                                                    <option value="">-- Select --</option>
                                                                                    <option value ="0">Green</option>
                                                                                    <option value ="1">Amber</option>
                                                                                    <option value ="2">Red</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">School/University:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="academic_school" name="academic_school" autocomplete="off" value="<?php echo $school_; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <table class="table m-b-0 2c_list">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th style="width: 10%;"></th>
                                                                                            <th style="text-align: center; font-weight: bold; text-transform: uppercase; width: 50%;">Reported Information</th>
                                                                                            <th style="text-align: center; font-weight: bold; text-transform: uppercase; width: 50%;">Verified Information</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr style="height: 2px;">
                                                                                            <td style="font-size: 13px; font-weight: bold; width: 10%;">Degree</td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control" style="background-color: #fff; border: none; width: 50%;" id="academic_reported_degree" name="academic_reported_degree" autocomplete="off" value="<?php echo $reported_degree; ?>">
                                                                                            </td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control" style="background-color: #fff; border: none; width: 50%;" id="academic_verified_degree" name="academic_verified_degree" autocomplete="off" value="<?php echo $verified_degree; ?>">
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr style="height: 2px;">
                                                                                            <td style="font-size: 13px; font-weight: bold; width: 10%;">Year Graduated</td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control" style="background-color: #fff; border: none; width: 50%;" id="academic_reported_gradyear" name="academic_reported_gradyear" autocomplete="off" value="<?php echo $reported_yeargrad; ?>">
                                                                                            </td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control" style="background-color: #fff; border: none; width: 50%;" id="academic_verified_gradyear" name="academic_verified_gradyear" autocomplete="off" value="<?php echo $verified_yeargrad; ?>">
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <hr style="margin-top: -8px;">
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Dates Attended:</label>
                                                                                <div class="input-daterange input-group" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                                                                                    <input type="text" class="input-sm form-control" id="academic_startdate" name="academic_startdate" value="<?php echo $date_attended_from; ?>">
                                                                                    <span class="input-group-text">to</span>
                                                                                    <input type="text" class="input-sm form-control" id="academic_enddate" name="academic_enddate" value="<?php echo $date_attended_to; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Highest Educational Attainment:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="academic_attainment" name="academic_attainment" autocomplete="off" value="<?php echo $highest_educ_attainment; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Report Remarks:</label>
                                                                                <div class="form-group">
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Remarks Here" id="academic_remarks" name="academic_remarks" style="resize: none;"><?php echo $remarksacademic_; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Informant:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="academic_informant" name="academic_informant" autocomplete="off" value="<?php echo $informantacademic_; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                } else {
                                                    echo "";
                                                }
                                            ?>
                                            <?php
                                                if ($emp_history == '1') {
                                                    ?>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="card">
                                                                    <div class="header">
                                                                        <h2><strong>Employment</strong> Verification</h2>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="body">
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12" style="margin-top: -40px;">
                                                                                <label class="d-block text-muted mb-1">Color Code:</label>
                                                                                <select class="form-control show-tick" id="emp_color" name="emp_color">
                                                                                    <option value="">-- Select --</option>
                                                                                    <option value ="0">Green</option>
                                                                                    <option value ="1">Amber</option>
                                                                                    <option value ="2">Red</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Company:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="emp_company" name="emp_company" autocomplete="off" value="<?php echo $company_; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <table class="table m-b-0 2c_list">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th style="width: 10%;"></th>
                                                                                            <th style="text-align: center; font-weight: bold; text-transform: uppercase; width: 50%;">Reported Information</th>
                                                                                            <th style="text-align: center; font-weight: bold; text-transform: uppercase; width: 50%;">Verified Information</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr style="height: 2px;">
                                                                                            <td style="font-size: 13px; font-weight: bold; width: 10%;">Period of Employment (From - To)</td>
                                                                                            <td>
                                                                                                <div class="input-daterange input-group" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                                                                                                    <input type="text" class="input-sm form-control" id="emp_reported_fromdate" name="emp_reported_fromdate" value="<?php echo $reported_period_emp_from; ?>">
                                                                                                    <span class="input-group-text">to</span>
                                                                                                    <input type="text" class="input-sm form-control" id="emp_reported_todate" name="emp_reported_todate" value="<?php echo $reported_period_emp_to; ?>">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="input-daterange input-group" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                                                                                                    <input type="text" class="input-sm form-control" id="emp_verified_fromdate" name="emp_verified_fromdate" value="<?php echo $verified_period_emp_from; ?>">
                                                                                                    <span class="input-group-text">to</span>
                                                                                                    <input type="text" class="input-sm form-control" id="emp_verified_todate" name="emp_verified_todate" value="<?php echo $verified_period_emp_to; ?>">
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr style="height: 2px;">
                                                                                            <td style="font-size: 13px; font-weight: bold; width: 10%;">Position</td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control" id="emp_reported_position" name="emp_reported_position" autocomplete="off" style="background-color: #fff; border: none;" value="<?php echo $reported_position; ?>">
                                                                                            </td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control" id="emp_verified_position" name="emp_verified_position" autocomplete="off" style="background-color: #fff; border: none;" value="<?php echo $verified_position; ?>">
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr style="height: 2px;">
                                                                                            <td style="font-size: 13px; font-weight: bold; width: 10%;">Reason employment ended</td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control" id="emp_reported_empended" name="emp_reported_empended" autocomplete="off" style="background-color: #fff; border: none;" value="<?php echo $reported_employment_ended; ?>">
                                                                                            </td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control" id="emp_verified_empended" name="emp_verified_empended" autocomplete="off" style="background-color: #fff; border: none;" value="<?php echo $verified_employment_ended; ?>">
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <hr style="margin-top: -8px;">
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Nature of Business:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="emp_businessnature" name="emp_businessnature" autocomplete="off" value="<?php echo $nature_business; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Any derogatory records?</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="emp_derogatory" name="emp_derogatory" autocomplete="off" value="<?php echo $any_records; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Is he/she eligible for rehire?</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="emp_rehire" name="emp_rehire" autocomplete="off" value="<?php echo $eligible_for_rehire; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Report Remarks:</label>
                                                                                <div class="form-group">
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Remarks Here" id="emp_remarks" name="emp_remarks" autocomplete="off" style="resize: none;"><?php echo $remarksemployment_; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Informant:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="emp_informant" name="emp_informant" autocomplete="off" value="<?php echo $informantemployment_; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                } else {
                                                    echo "";
                                                }
                                            ?>
                                            <?php
                                                if ($char_references == '1') {
                                                    ?>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="card">
                                                                    <div class="header">
                                                                        <h2><strong>Character</strong> References</h2>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="body">
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12" style="margin-top: -40px;">
                                                                                <label class="d-block text-muted mb-1">Color Code:</label>
                                                                                <select class="form-control show-tick" id="charone_color" name="charone_color">
                                                                                    <option value="">-- Select --</option>
                                                                                    <option value ="0">Green</option>
                                                                                    <option value ="1">Amber</option>
                                                                                    <option value ="2">Red</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-3 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">First Name:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="charone_fname" name="charone_fname" autocomplete="off" value="<?php echo $fnamecharref_; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Middle Name:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="charone_mname" name="charone_mname" autocomplete="off" value="<?php echo $mnamecharref_; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Last Name:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="charone_lname" name="charone_lname" autocomplete="off" value="<?php echo $lnamecharref_; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Suffix:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="charone_suffix" name="charone_suffix" autocomplete="off" value="<?php echo $suffixcharref_; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Current Employer and Position:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="charone_empposition" name="charone_empposition" autocomplete="off" value="<?php echo $employer_and_position; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Contact Details:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="charone_contact" name="charone_contact" autocomplete="off" value="<?php echo $contact_detailscharref; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Report Remarks:</label>
                                                                                <div class="form-group">
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Remarks Here" id="charone_remarks" name="charone_remarks" autocomplete="off" style="resize: none;"><?php echo $remarkscharref_; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                } else {
                                                    echo "";
                                                }
                                            ?>
                                            <?php
                                                if ($identity_sss == '1') {
                                                    ?>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="card">
                                                                    <div class="header">
                                                                        <h2><strong>Identity Check</strong> (SSS)</h2>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="header" style="margin-top: -30px;">
                                                                        <p style="font-size: 13px;"><strong>Verification was made at the Social Security Systems (SSS) showed the following results:</strong></p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="body">
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12" style="margin-top: -40px;">
                                                                                <label class="d-block text-muted mb-1">Color Code:</label>
                                                                                <select class="form-control show-tick" id="identitysss_color" name="identitysss_color">
                                                                                    <option value="">-- Select --</option>
                                                                                    <option value ="0">Green</option>
                                                                                    <option value ="1">Amber</option>
                                                                                    <option value ="2">Red</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Findings:</label>
                                                                                <div class="form-group">
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Findings Here" id="identitysss_findings" name="identitysss_findings" style="resize: none;"><?php echo $findings_sss; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                } else {
                                                    echo "";
                                                }
                                            ?>
                                            <?php
                                                if ($identity_bir == '1') {
                                                    ?>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="card">
                                                                    <div class="header">
                                                                        <h2><strong>Identity Check</strong> (BIR)</h2>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="header" style="margin-top: -30px;">
                                                                        <p style="font-size: 13px;"><strong>Verification was made at the Bureau of Internal Revenue (BIR) showed the following results:</strong></p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="body">
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12" style="margin-top: -40px;">
                                                                                <label class="d-block text-muted mb-1">Color Code:</label>
                                                                                <select class="form-control show-tick" id="identitybir_color" name="identitybir_color">
                                                                                    <option value="">-- Select --</option>
                                                                                    <option value ="0">Green</option>
                                                                                    <option value ="1">Amber</option>
                                                                                    <option value ="2">Red</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Findings:</label>
                                                                                <div class="form-group">
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Findings Here" id="identitybir_findings" name="identitybir_findings" style="resize: none;"><?php echo $findings_bir; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                } else {
                                                    echo "";
                                                }
                                            ?>
                                            <?php
                                                if ($criminal_nbi == '1') {
                                                    ?>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="card">
                                                                    <div class="header">
                                                                        <h2><strong>Criminal Check</strong> (NBI)</h2>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="header" style="margin-top: -30px;">
                                                                        <p style="font-size: 13px;"><strong>Verification was made at the National Bureau of Investigation (NBI) showed the following results:</strong></p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="body">
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12" style="margin-top: -40px;">
                                                                                <label class="d-block text-muted mb-1">Color Code:</label>
                                                                                <select class="form-control show-tick" id="criminalnbi_color" name="criminalnbi_color">
                                                                                    <option value="">-- Select --</option>
                                                                                    <option value ="0">Green</option>
                                                                                    <option value ="1">Amber</option>
                                                                                    <option value ="2">Red</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Findings:</label>
                                                                                <div class="form-group">
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Findings Here" id="criminalnbi_findings" name="criminalnbi_findings" style="resize: none;"><?php echo $findings_nbi; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                } else {
                                                    echo "";
                                                }
                                            ?>
                                            <?php
                                                if ($criminal_lcc == '1') {
                                                    ?>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="card">
                                                                    <div class="header">
                                                                        <h2><strong>Criminal Check</strong> (LCC)</h2>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="header" style="margin-top: -30px;">
                                                                        <p style="font-size: 13px;"><strong>Verification was made at the Regional/Metropolitan/Municipal Trial Court (RTC/MTC/MTCC) showed the following results:</strong></p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="body">
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12" style="margin-top: -40px;">
                                                                                <label class="d-block text-muted mb-1">Color Code:</label>
                                                                                <select class="form-control show-tick" id="lcc_color" name="lcc_color">
                                                                                    <option value="">-- Select --</option>
                                                                                    <option value ="0">Green</option>
                                                                                    <option value ="1">Amber</option>
                                                                                    <option value ="2">Red</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Findings:</label>
                                                                                <div class="form-group">
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Findings Here" id="criminallcc_findings" name="criminallcc_findings" style="resize: none;"><?php echo $findings_lcc; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                } else {
                                                    echo "";
                                                }
                                            ?>
                                            <?php
                                                if ($credit_cmap == '1') {
                                                    ?>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="card">
                                                                    <div class="header">
                                                                        <h2><strong>Credit </strong>Check</h2>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="header" style="margin-top: -30px;">
                                                                        <p style="font-size: 13px;"><strong>Verification was made at the Credit Management Association of the Philippines (CMAP) showed the following results:</strong></p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="body">
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12" style="margin-top: -40px;">
                                                                                <label class="d-block text-muted mb-1">Color Code:</label>
                                                                                <select class="form-control show-tick" id="creditcmap_color" name="creditcmap_color">
                                                                                    <option value="">-- Select --</option>
                                                                                    <option value ="0">Green</option>
                                                                                    <option value ="1">Amber</option>
                                                                                    <option value ="2">Red</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Court Cases:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="creditcmap_courtcases" name="creditcmap_courtcases" autocomplete="off" value="<?php echo $court_cases; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Returned Checks:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="creditcmap_returnedchks" name="creditcmap_returnedchks" autocomplete="off" value="<?php echo $returned_checks; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Account Referred to Lawyers:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="creditcmap_accountlawyers" name="creditcmap_accountlawyers" autocomplete="off" value="<?php echo $account_lawyers; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Telecoms Data Bank:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="creditcmap_telecoms" name="creditcmap_telecoms" autocomplete="off" value="<?php echo $telecoms_bank; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                } else {
                                                    echo "";
                                                }
                                            ?>
                                            <?php
                                                if ($international_chk == '1') {
                                                    ?>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="card">
                                                                    <div class="header">
                                                                        <h2><strong>International </strong>Check</h2>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="header" style="margin-top: -30px;">
                                                                        <p style="font-size: 13px;"><strong>Subject's name not found in the following International Negative Records Listings:</strong></p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="body">
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12" style="margin-top: -40px;">
                                                                                <label class="d-block text-muted mb-1">Color Code:</label>
                                                                                <select class="form-control show-tick" id="intchk_color" name="intchk_color">
                                                                                    <option value="">-- Select --</option>
                                                                                    <option value ="0">Green</option>
                                                                                    <option value ="1">Amber</option>
                                                                                    <option value ="2">Red</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Findings:</label>
                                                                                <div class="form-group">
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Findings Here" id="intchk_findings" name="intchk_findings" style="resize: none;"><?php echo $findings_intcheck; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                } else {
                                                    echo "";
                                                }
                                            ?>
                                            <?php
                                                if ($barangay_chk == '1') {
                                                    ?>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="card">
                                                                    <div class="header">
                                                                        <h2><strong>Barangay</strong> Check</h2>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="header" style="margin-top: -30px;">
                                                                        <p style="font-size: 13px;"><strong>Verification made with Brgy. <input type="text" class="form-control" style="background-color: #fff; border: none;" id="brgy_name" name="brgy_name" placeholder="Name of Barangay" value="<?php echo $brgy_name; ?>"> showed that our subject is negative of any pending barangay cases neither had any information of any derogatory record as of date of inquiry.</strong></p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="body">
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12" style="margin-top: -40px;">
                                                                                <label class="d-block text-muted mb-1">Color Code:</label>
                                                                                <select class="form-control show-tick" id="brgy_color" name="brgy_color">
                                                                                    <option value="">-- Select --</option>
                                                                                    <option value ="0">Green</option>
                                                                                    <option value ="1">Amber</option>
                                                                                    <option value ="2">Red</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Barangay Informant:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="brgy_informant" name="brgy_informant" autocomplete="off" value="<?php echo $brgy_informant; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Position:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="brgy_position" name="brgy_position" autocomplete="off" value="<?php echo $position_; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Contact No:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="brgy_contact" name="brgy_contact" autocomplete="off" value="<?php echo $contact_; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                } else {
                                                    echo "";
                                                }
                                            ?>
                                            <?php
                                                if ($neighborhood_ref == '1') {
                                                    ?>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="card">
                                                                    <div class="header">
                                                                        <h2><strong>Neighborhood</strong> References</h2>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="body">
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12" style="margin-top: -40px;">
                                                                                <label class="d-block text-muted mb-1">Color Code:</label>
                                                                                <select class="form-control show-tick" id="nbhoodone_color" name="nbhoodone_color">
                                                                                    <option value="">-- Select --</option>
                                                                                    <option value ="0">Green</option>
                                                                                    <option value ="1">Amber</option>
                                                                                    <option value ="2">Red</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-3 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">First Name:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="nbhoodone_fname" name="nbhoodone_fname" autocomplete="off" value="<?php echo $fnameneighb_; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Middle Name:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="nbhoodone_mname" name="nbhoodone_mname" autocomplete="off" value="<?php echo $mnameneighb_; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Last Name:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="nbhoodone_lname" name="nbhoodone_lname" autocomplete="off" value="<?php echo $lnameneighb_; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Suffix:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="nbhoodone_suffix" name="nbhoodone_suffix" autocomplete="off" value="<?php echo $suffixneighb_; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Contact Information:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="nbhoodone_contact" name="nbhoodone_contact" autocomplete="off" value="<?php echo $contact_infocharref_neighb; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Current Address:</label>
                                                                                <div class="form-group">
                                                                                    <textarea rows="4" class="form-control no-resize" id="nbhoodone_addr" name="nbhoodone_addr" style="resize: none;"><?php echo $address_neighb; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Report Remarks:</label>
                                                                                <div class="form-group">
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Remarks Here" id="nbhoodone_remarks" name="nbhoodone_remarks" autocomplete="off" style="resize: none;"><?php echo $remarkscharref_neighb_; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                } else {
                                                    echo "";
                                                }
                                            ?>
                                            <?php
                                                if ($political_religious_aff == '1') {
                                                    ?>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="card">
                                                                    <div class="header">
                                                                        <h2><strong>Political/Religious</strong> Affiliations</h2>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="body">
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12" style="margin-top: -40px;">
                                                                                <label class="d-block text-muted mb-1">Color Code:</label>
                                                                                <select class="form-control show-tick" id="polreg_color" name="polreg_color">
                                                                                    <option value="">-- Select --</option>
                                                                                    <option value ="0">Green</option>
                                                                                    <option value ="1">Amber</option>
                                                                                    <option value ="2">Red</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Report Remarks:</label>
                                                                                <div class="form-group">
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Remarks Here" id="polreg_remarks" name="polreg_remarks" style="resize: none;"><?php echo $remarks_political; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                } else {
                                                    echo "";
                                                }
                                            ?>
                                            <?php
                                                if ($lifestyle_chk == '1') {
                                                    ?>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="card">
                                                                    <div class="header">
                                                                        <h2><strong>Lifestyle</strong> Check</h2>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="body">
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12" style="margin-top: -40px;">
                                                                                <label class="d-block text-muted mb-1">Color Code:</label>
                                                                                <select class="form-control show-tick" id="lifestylechk_color" name="lifestylechk_color">
                                                                                    <option value="">-- Select --</option>
                                                                                    <option value ="0">Green</option>
                                                                                    <option value ="1">Amber</option>
                                                                                    <option value ="2">Red</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Report Remarks:</label>
                                                                                <div class="form-group">
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Remarks Here" id="lifestylechk_remarks" name="lifestylechk_remarks" style="resize: none;"><?php echo $remarks_lifestyle; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                } else {
                                                    echo "";
                                                }
                                            ?>
                                            <?php
                                                if ($financial_review == '1') {
                                                    ?>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="card">
                                                                    <div class="header">
                                                                        <h2><strong>Financial</strong> Check</h2>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="body">
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12" style="margin-top: -40px;">
                                                                                <label class="d-block text-muted mb-1">Color Code:</label>
                                                                                <select class="form-control show-tick" id="financialchk_color" name="financialchk_color">
                                                                                    <option value="">-- Select --</option>
                                                                                    <option value ="0" class="cleared">Green</option>
                                                                                    <option value ="1" class="forreview">Amber</option>
                                                                                    <option value ="2" class="failed">Red</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Report Remarks:</label>
                                                                                <div class="form-group">
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Remarks Here" id="financialchk_remarks" name="financialchk_remarks" style="resize: none;"><?php echo $remarks_financial; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                } else {
                                                    echo "";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="margin-top: -20px;">
                                    <button type="submit" class="btn btn-outline-success" name="updateReport"><i class="fa fa-check-circle-o"></i> Update</button>
                                    <button type="button" class="btn btn-outline-secondary"><i class="fa fa-eraser"></i> Clear</button>  
                                </div>
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