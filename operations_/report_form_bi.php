<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    $sql = "SELECT a.endo_code, a.application_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.site_id, a.endorsed_to, a.client_id, CONCAT(a.client_id) AS clientuserid, b.endorsement_code, b.assigned_tele, b.assigned_da, b.personal_bg, b.academic_, b.emp_history, b.char_references, b.identity_sss, b.identity_bir, b.criminal_nbi, b.criminal_lcc, b.credit_cmap, b.international_chk, b.barangay_chk, b.neighborhood_ref, b.political_religious_aff, b.lifestyle_chk, b.financial_review, c.client_id, c.client_name, c.acronym_, c.site_ FROM tbl_endo AS a LEFT JOIN create_report_options AS b ON a.endo_code = b.endorsement_code LEFT JOIN client_list AS c ON a.site_id = c.client_id WHERE a.endo_code = '".$_GET["endoCode"]."'";
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
        $acronym_ = $row['acronym_'];
        $application_code = $row['application_code'];
    }
    
    $sql2 = "SELECT a.id, a.application_code, a.client_id, a.endo_type, a.application_status, a.application_datetime, 
            CONCAT(b.fname_, ' ', b.mname_, ' ', b.lname_, ' ', b.suffix_) AS Full_name, 
            b.birthdate_, b.mobile_no, b.landline_no, b.email_addr, b.sss_no, 
            b.present_addr, b.permanent_addr, c.employer_, c.contact_no, c.job_title, 
            c.start_date, c.end_date, c.emp_addr, c.chk_currently_emp, d.school_name,
            CONCAT(d.school_name, ' ', d.course_name, ' ', d.date_graduated, ' ', d.school_address) AS College_Info, 
            CONCAT(e.school_name, ' ', e.date_graduated, ' ', e.school_address) AS Highschool_Info, 
            CONCAT(f.school_name, ' ', f.date_graduated, ' ', f.school_address) AS Elementary_Info, 
            CONCAT(g.school_name, ' ', g.course_name, ' ', g.date_graduated, ' ', g.school_address) AS Vocational_Info, 
            CONCAT(h.school_name, ' ', h.course_name, ' ', h.date_graduated, ' ', h.school_address) AS Other_School_Info,
            CONCAT(i.fname_, ' ', i.mname_, ' ', i.lname_, ' ', i.suffix_) AS Character_Reference_FullName, 
            i.relationship_, i.contact_no, i.company_name, i.job_title, 
            CONCAT(j.fname_, ' ', j.mname_, ' ', j.lname_, ' ', j.suffix_) AS Neighborhood_FullName, 
            j.relationship_ AS Neighborhood_Relationship, j.contact_no AS Neighborhood_Contact_No, k.endo_id, k.endo_code, k.application_code  
            FROM application_list AS a 
            LEFT JOIN 
                application_personal_info AS b ON a.application_code = b.application_code 
            LEFT JOIN 
                application_emp_history AS c ON a.application_code = c.application_code 
            LEFT JOIN 
                application_college AS d ON a.application_code = d.application_code
            LEFT JOIN 
                application_highschool AS e ON a.application_code = e.application_code
            LEFT JOIN 
                application_elementary AS f ON a.application_code = f.application_code
            LEFT JOIN 
                application_vocational AS g ON a.application_code = g.application_code
            LEFT JOIN 
                application_other_school AS h ON a.application_code = h.application_code
            LEFT JOIN
                application_char_reference AS i ON a.application_code = i.application_code
            LEFT JOIN
                application_neighbhood_reference AS j ON a.application_code = j.application_code
            LEFT JOIN 
                tbl_endo AS k ON a.application_code = k.application_code
            WHERE 
                a.application_code = '".$application_code."'";
    $result2=$conn->query($sql2);
    $row2=$result2->fetch_assoc();
    
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
                            <li class="breadcrumb-item">Endorsements</li>
                            <li class="breadcrumb-item active">Report Form</li>
                        </ul>   
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-outline-danger" style="float: right; margin-right: 25px; margin-top: 15px;" onclick="back_endorsements_bi_tele(); saveendorsementbitele();"><i class="fa fa-arrow-left"></i> Back</button>
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
                            <form class="form" method="POST" enctype="multipart/form-data" action="functions/save_bi_report.php">
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
                                                            <input type="hidden" name="acronym_" id="acronym_" value="<?php echo $acronym_; ?>">
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
                                                                <input type="text" class="form-control" id="residence_addr" name="residence_addr" value="<?php echo $row2['present_addr']; ?>" autocomplete="off">
                                                            </div>
                                                            <div class="input-group input-group-sm">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color: #D3D3D3; color: #000; font-weight: bold; width: 200px; font-size: 13px;">Business Address: </span>
                                                                </div>
                                                                <input type="text" class="form-control" id="business_addr" name="business_addr" value="<?php echo $row2['permanent_addr']; ?>" autocomplete="off">
                                                            </div>
                                                            <div class="input-group input-group-sm">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color: #D3D3D3; color: #000; font-weight: bold; width: 200px; font-size: 13px;">Contact Details: </span>
                                                                </div>
                                                                <input type="text" class="form-control" id="contact_details" name="contact_details" value="<?php echo $row2['mobile_no']; ?> | <?php echo $row2['landline_no']; ?>" autocomplete="off">
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
                                                                <input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="yyyy-mm-dd" id="intiation_date" name="intiation_date">                    
                                                            </div>
                                                            <div class="input-group input-group-sm">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color: #D3D3D3; color: #000; font-weight: bold; width: 200px; font-size: 13px;">Date Submitted (Initial): </span>
                                                                </div>
                                                                <input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="yyyy-mm-dd" id="subminitial_date" name="subminitial_date">                                        
                                                            </div>
                                                            <div class="input-group input-group-sm">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color: #D3D3D3; color: #000; font-weight: bold; width: 200px; font-size: 13px;" id="inputGroup-sizing-sm">Date Submitted (Final): </span>
                                                                </div>   
                                                                <input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="yyyy-mm-dd" id="submfinal_date" name="submfinal_date">                                   
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
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="personalbg_remarks" name="personalbg_remarks">
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control form-control" style="background-color: #fff; border: none;" id="personalbg_color" name="personalbg_color">
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
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="academichk_remarks" name="academichk_remarks">
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
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="emphist_remarks" name="emphist_remarks">
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
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="charref_remarks" name="charref_remarks">
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
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="identitysss_remarks" name="identitysss_remarks">
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
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="identitybir_remarks" name="identitybir_remarks">
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
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="criminalnbi_remarks" name="criminalnbi_remarks">
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
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="criminallcc_remarks" name="criminallcc_remarks">
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
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="creditcmap_remarks" name="creditcmap_remarks">
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
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="intgdc_remarks" name="intgdc_remarks">
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
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="barangay_remarks" name="barangay_remarks">
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
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="neighbhood_remarks" name="neighbhood_remarks">
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
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="polreligous_remarks" name="polreligous_remarks">
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
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="lifestyle_remarks" name="lifestyle_remarks">
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
                                                                                        <input type="text" class="form-control" style="background-color: #fff; border: none;" id="financialrev_remarks" name="financialrev_remarks">
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
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Remarks Here" id="pb_remarks" name="pb_remarks" style="resize: none;"></textarea>
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
                                                                                    <input type="text" class="form-control" id="academic_school" name="academic_school" autocomplete="off" value="<?php echo $row2['College_Info']; ?>">
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
                                                                                                <input type="text" class="form-control" style="background-color: #fff; border: none; width: 50%;" id="academic_reported_degree" name="academic_reported_degree" autocomplete="off">
                                                                                            </td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control" style="background-color: #fff; border: none; width: 50%;" id="academic_verified_degree" name="academic_verified_degree" autocomplete="off">
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr style="height: 2px;">
                                                                                            <td style="font-size: 13px; font-weight: bold; width: 10%;">Year Graduated</td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control" style="background-color: #fff; border: none; width: 50%;" id="academic_reported_gradyear" name="academic_reported_gradyear" autocomplete="off">
                                                                                            </td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control" style="background-color: #fff; border: none; width: 50%;" id="academic_verified_gradyear" name="academic_verified_gradyear" autocomplete="off">
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
                                                                                    <input type="text" class="input-sm form-control" id="academic_enddate" name="academic_enddate">
                                                                                    <span class="input-group-text">to</span>
                                                                                    <input type="text" class="input-sm form-control" id="academic_startdate" name="academic_startdate">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Highest Educational Attainment:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="academic_attainment" name="academic_attainment" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Report Remarks:</label>
                                                                                <div class="form-group">
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Remarks Here" id="academic_remarks" name="academic_remarks" style="resize: none;"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Informant:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="academic_informant" name="academic_informant" autocomplete="off">
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
                                                                                    <input type="text" class="form-control" id="emp_company" name="emp_company" autocomplete="off">
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
                                                                                                    <input type="text" class="input-sm form-control" id="emp_reported_todate" name="emp_reported_todate">
                                                                                                    <span class="input-group-text">to</span>
                                                                                                    <input type="text" class="input-sm form-control" id="emp_reported_fromdate" name="emp_reported_fromdate">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="input-daterange input-group" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                                                                                                    <input type="text" class="input-sm form-control" id="emp_verified_todate" name="emp_verified_todate">
                                                                                                    <span class="input-group-text">to</span>
                                                                                                    <input type="text" class="input-sm form-control" id="emp_verified_fromdate" name="emp_verified_fromdate">
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr style="height: 2px;">
                                                                                            <td style="font-size: 13px; font-weight: bold; width: 10%;">Position</td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control" id="emp_reported_position" name="emp_reported_position" autocomplete="off" style="background-color: #fff; border: none;">
                                                                                            </td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control" id="emp_verified_position" name="emp_verified_position" autocomplete="off" style="background-color: #fff; border: none;">
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr style="height: 2px;">
                                                                                            <td style="font-size: 13px; font-weight: bold; width: 10%;">Reason employment ended</td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control" id="emp_reported_empended" name="emp_reported_empended" autocomplete="off" style="background-color: #fff; border: none;">
                                                                                            </td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control" id="emp_verified_empended" name="emp_verified_empended" autocomplete="off" style="background-color: #fff; border: none;">
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
                                                                                    <input type="text" class="form-control" id="emp_businessnature" name="emp_businessnature" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Any derogatory records?</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="emp_derogatory" name="emp_derogatory" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Is he/she eligible for rehire?</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="emp_rehire" name="emp_rehire" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Report Remarks:</label>
                                                                                <div class="form-group">
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Remarks Here" id="emp_remarks" name="emp_remarks" autocomplete="off" style="resize: none;"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Informant:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="emp_informant" name="emp_informant" autocomplete="off">
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
                                                                                    <input type="text" class="form-control" id="charone_fname" name="charone_fname" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Middle Name:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="charone_mname" name="charone_mname" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Last Name:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="charone_lname" name="charone_lname" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Suffix:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="charone_suffix" name="charone_suffix" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Current Employer and Position:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="charone_empposition" name="charone_empposition" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Contact Details:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="charone_contact" name="charone_contact" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Report Remarks:</label>
                                                                                <div class="form-group">
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Remarks Here" id="charone_remarks" name="charone_remarks" autocomplete="off" style="resize: none;"></textarea>
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
                                                                        <h2><strong>Identity Check</strong> (SSS) : <?php echo $row2['sss_no'] ?></h2>
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
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Findings Here" id="identitysss_findings" name="identitysss_findings" style="resize: none;"></textarea>
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
                                                                        <h2><strong>Identity Check</strong> (BIR) : <?php echo $identity_bir; ?></h2>
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
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Findings Here" id="identitybir_findings" name="identitybir_findings" style="resize: none;"></textarea>
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
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Findings Here" id="criminalnbi_findings" name="criminalnbi_findings" style="resize: none;"></textarea>
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
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Findings Here" id="criminallcc_findings" name="criminallcc_findings" style="resize: none;"></textarea>
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
                                                                                    <input type="text" class="form-control" id="creditcmap_courtcases" name="creditcmap_courtcases" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Returned Checks:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="creditcmap_returnedchks" name="creditcmap_returnedchks" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Account Referred to Lawyers:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="creditcmap_accountlawyers" name="creditcmap_accountlawyers" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Telecoms Data Bank:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="creditcmap_telecoms" name="creditcmap_telecoms" autocomplete="off">
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
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Findings Here" id="intchk_findings" name="intchk_findings" style="resize: none;"></textarea>
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
                                                                        <p style="font-size: 13px;"><strong>Verification made with Brgy. <input type="text" class="form-control" style="background-color: #fff; border: none;" id="brgy_name" name="brgy_name" placeholder="Name of Barangay"> showed that our subject is negative of any pending barangay cases neither had any information of any derogatory record as of date of inquiry.</strong></p>
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
                                                                                    <input type="text" class="form-control" id="brgy_informant" name="brgy_informant" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Position:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="brgy_position" name="brgy_position" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Contact No:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="brgy_contact" name="brgy_contact" autocomplete="off">
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
                                                                                    <input type="text" class="form-control" id="nbhoodone_fname" name="nbhoodone_fname" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Middle Name:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="nbhoodone_mname" name="nbhoodone_mname" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Last Name:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="nbhoodone_lname" name="nbhoodone_lname" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Suffix:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="nbhoodone_suffix" name="nbhoodone_suffix" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Contact Information:</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="nbhoodone_contact" name="nbhoodone_contact" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Current Address:</label>
                                                                                <div class="form-group">
                                                                                    <textarea rows="4" class="form-control no-resize" id="nbhoodone_addr" name="nbhoodone_addr" style="resize: none;"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <label class="d-block text-muted mb-1">Report Remarks:</label>
                                                                                <div class="form-group">
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Remarks Here" id="nbhoodone_remarks" name="nbhoodone_remarks" autocomplete="off" style="resize: none;"></textarea>
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
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Remarks Here" id="polreg_remarks" name="polreg_remarks" style="resize: none;"></textarea>
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
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Remarks Here" id="lifestylechk_remarks" name="lifestylechk_remarks" style="resize: none;"></textarea>
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
                                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Type Remarks Here" id="financialchk_remarks" name="financialchk_remarks" style="resize: none;"></textarea>
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
                                    <hr>
                                    <div class="form-group clearfix mt-2">
                                        <label class="fancy-checkbox element-left">
                                            <input type="checkbox"> 
                                            <span>By filling up, you agree with the storage and handling of your data and you have read our <a target="_blank" href="https://lendell.ph/assets/docs/Data%20Privacy%20Statement.pdf" style="color: #000; text-decoration: underline; font-weight: bold;">Data Privacy Compliance Policy Statement.</a></span>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-outline-success" name="createReport"><i class="fa fa-check-circle-o"></i> Submit</button>
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