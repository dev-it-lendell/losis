<?php
    require '../fpdf17/fpdf.php';
    require '../connect.php';

    $sql = "SELECT a.endo_code, CONCAT(a.lname, ' ', a.suffix, ', ', a.fname, ' ', a.mname) AS applicantname, a.site_id, a.endorsed_to, a.client_id, CONCAT(a.client_id) AS clientuserid, b.endorsement_code, b.assigned_tele, b.assigned_da, b.personal_bg, b.academic_, b.emp_history, b.char_references, b.identity_sss, b.identity_bir, b.criminal_nbi, b.criminal_lcc, b.credit_cmap, b.international_chk, b.barangay_chk, b.neighborhood_ref, b.political_religious_aff, b.lifestyle_chk, b.financial_review, c.client_id, c.client_name, c.acronym_, c.site_ FROM tbl_endo AS a LEFT JOIN create_report_options AS b ON a.endo_code = b.endorsement_code LEFT JOIN client_list AS c ON a.site_id = c.client_id WHERE b.endorsement_code = '".$_GET["file"]."'";
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
        $initiationdate = $row1['initiation_date'];
        $Newinitiationdate = date("F d, Y", strtotime($initiationdate));
        $initialdatesubmitted = $row1['initial_date_submitted'];
        $Newinitialdatesubm = date("F d, Y", strtotime($initialdatesubmitted));
        $finaldatesubmitted = $row1['final_date_submitted'];
        $Newfinaldatesubm = date("F d, Y", strtotime($finaldatesubmitted));
        // PERSONAL BACKGROUND //
        if ($personal_bg == '1') {
            $sql2 = "SELECT * FROM report_personalbg WHERE endo_code = '$endoCode'";
            $result2 = $conn->query($sql2);
            $row2 = $result2->fetch_assoc();
        } else {
            echo "";
        }
        // ACADEMIC //
        if ($academic_ == '1') {
            $sql3 = "SELECT * FROM report_academic WHERE endo_code = '$endoCode'";
            $result3 = $conn->query($sql3);
            $row3 = $result3->fetch_assoc();
            $date_attended_from = $row3['date_attended_from'];
            $Newdateattendedfrom = date("F d, Y", strtotime($date_attended_from));
            $date_attended_to = $row3['date_attended_to'];
            $Newdateattendedto = date("F d, Y", strtotime($date_attended_to));
        } else {
            echo "";
        }
        // EMPLOYMENT VERIFICATION //
        if ($emp_history == '1') {
            $sql4 = "SELECT * FROM report_emphistory WHERE endo_code = '$endoCode'";
            $result4 = $conn->query($sql4);
            $row4 = $result4->fetch_assoc();
            $reported_period_emp_from = $row4['reported_period_emp_from'];
            $Newreportedempfrom = date("F d, Y", strtotime($reported_period_emp_from));
            $reported_period_emp_to = $row4['reported_period_emp_to'];
            $Newreportedempto = date("F d, Y", strtotime($reported_period_emp_to));
            $verified_period_emp_from = $row4['verified_period_emp_from'];
            $Newverifiedempfrom = date("F d, Y", strtotime($verified_period_emp_from));
            $verified_period_emp_to = $row4['verified_period_emp_to'];
            $Newverifiedempto = date("F d, Y", strtotime($verified_period_emp_to));
        } else {
            echo "";
        }
        // CHARACTER REFERENCES //
        if ($char_references == '1') {
            $sql5 = "SELECT * FROM report_character_ref WHERE endo_code = '$endoCode'";
            $result5 = $conn->query($sql5);
            $row5 = $result5->fetch_assoc();
        } else {
            echo "";
        }
        // IDENTITY CHECK (SSS) //
        if ($identity_sss == '1') {
            $sql6 = "SELECT * FROM report_identity_sss WHERE endo_code = '$endoCode'";
            $result6 = $conn->query($sql6);
            $row6 = $result6->fetch_assoc();
        } else {
            echo "";
        }
        // IDENTITY CHECK (BIR) //  
        if ($identity_bir == '1') {
            $sql7 = "SELECT * FROM report_identity_bir WHERE endo_code = '$endoCode'";
            $result7 = $conn->query($sql7);
            $row7 = $result7->fetch_assoc();
        } else {
            echo "";
        }
        // CRIMINAL CHECK (NBI) //
        if ($criminal_nbi == '1') {
            $sql8 = "SELECT * FROM report_criminal_nbi WHERE endo_code = '$endoCode'";
            $result8 = $conn->query($sql8);
            $row8 = $result8->fetch_assoc();
        } else {
            echo "";
        }
        // CRIMINAL CHECK (LCC) //  
        if ($criminal_lcc == '1') {
            $sql9 = "SELECT * FROM report_criminal_lcc WHERE endo_code = '$endoCode'";
            $result9 = $conn->query($sql9);
            $row9 = $result9->fetch_assoc();
        } else {
            echo "";
        }
        // CREDIT CHECK (CMAP) //
        if ($credit_cmap == '1') {
            $sql10 = "SELECT * FROM report_credit_cmap WHERE endo_code = '$endoCode'";
            $result10 = $conn->query($sql10);
            $row10 = $result10->fetch_assoc();
        } else {
            echo "";
        }
        // INTERNATIONAL CHECK //
        if ($international_chk == '1') {
            $sql11 = "SELECT * FROM report_international_check WHERE endo_code = '$endoCode'";
            $result11 = $conn->query($sql11);
            $row11 = $result11->fetch_assoc();
        } else {
            echo "";
        }
        // BARANGAY CHECK //
        if ($barangay_chk == '1') {
            $sql12 = "SELECT * FROM report_barangay_check WHERE endo_code = '$endoCode'";
            $result12 = $conn->query($sql12);
            $row12 = $result12->fetch_assoc();
        } else {
            echo "";
        }
        // NEIGHBORHOOD REFERENCES //
        if ($neighborhood_ref == '1') {
            $sql13 = "SELECT * FROM report_neighbhood_ref WHERE endo_code = '$endoCode'";
            $result13 = $conn->query($sql13);
            $row13 = $result13->fetch_assoc();
        } else {
            echo "";
        }
        // POLITICAL / RELIGIOUS AFFILIATIONS //
        if ($political_religious_aff == '1') {
            $sql14 = "SELECT * FROM report_political_religious WHERE endo_code = '$endoCode'";
            $result14 = $conn->query($sql14);
            $row14 = $result14->fetch_assoc();
        } else {
            echo "";
        }
        // LIFESTYLE CHECK //
        if ($lifestyle_chk == '1') {
            $sql15 = "SELECT * FROM report_lifestyle_check WHERE endo_code = '$endoCode'";
            $result15 = $conn->query($sql15);
            $row15 = $result15->fetch_assoc();
        } else {
            echo "";
        }
        // FINANCIAL CHECK //
        if ($financial_review == '1') {
            $sql16 = "SELECT * FROM report_financial_review WHERE endo_code = '$endoCode'";
            $result16 = $conn->query($sql16);
            $row16 = $result16->fetch_assoc();
        } else {
            echo "";
        }

        class PDF extends FPDF {
            function Header() {
                $this->SetFont('Century Gothic','B',8);
                $this->Cell(140);
                $this->Cell(30,8,'',0,1,'R');
                $this->Cell(140);
                $this->Cell(30,4,'CONFIDENTIAL',0,1,'R');
                $this->Cell(140);
                $this->SetFont('Century Gothic','',8);
                $this->Cell(30,4,'BACKGROUND CHECK REPORT',0,1,'R');
                $this->Cell(140);
                $this->Cell(30,4,'Doc. No.: LOSI-0074 Code: LOSI-BAC-0074',0,1,'R');
                $this->Cell(140);
                $this->Cell(30,4,'S. No. SN-0001 V. No.: VN-0001 RV. No. RVN-0001',0,1,'R');
                $this->Ln(10);
                $this->Image('../images/lendell/logo.png',15,8,17);
            }
            function Footer() {
                $this->SetY(-15);
                $this->SetFont('Century Gothic','',9);
                $this->Cell(0,3,'LENDELL OUTSOURCING SOLUTIONS, INC.',0,1,'C');
                $this->SetFont('Century Gothic','',8);
                $this->Cell(0,3,'Unit G10, CITYNET1, 183 EDSA Barangay Wack-Wack , Greenhills East, Mandaluyong City, Philippines',0,1,'C');
                $this->Cell(0,3,'02(8365-7601) | 02(8811-6735) | 02(8811-6813) | info@lendell.ph | info.lendell@gmail.com | www.lendell.ph',0,1,'C');
            }
        }

        $pdf = new PDF();
        $pdf->AddFont('Century Gothic','','CenturyGothic.php'); //Regular
        $pdf->AddFont('Century Gothic','B','CenturyGothicBold.php'); //Bold
        $pdf->AddFont('Century Gothic','I','CenturyGothicItalic.php'); //Italic
        $pdf->AddFont('Century Gothic','BI','CenturyGothicBoldItalic.php');//Bold_Italic
        $pdf->SetMargins(23, 1, 23);
        $pdf->SetAutoPageBreak(false);
        $pdf->AddPage();
        $image = "../images/lendell/logo-1.png";
        $pdf->Image($image, 65, null, 80);

        $pdf->Cell(70   ,5,'',0,0);
        $pdf->Cell(56   ,5,'',0,0);
        $pdf->Cell(63.3 ,5,'',0,1);

        $pdf->SetFont('Century Gothic','BI',12);
        $pdf->Cell(130 ,4,$row['applicantname'],0,1, 'L');
        $pdf->Ln(3);
        // RESIDENCE ADDRESS //
        $pdf->setFillColor(230,230,230); 
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->Cell(40,4,'Residence Address: ',1,0,'L',1);
        $pdf->SetFont('Century Gothic','',8);
        $pdf->Cell(130 ,4,$row1['residence_addr'],1,0, 'L');
        $pdf->Cell(10 ,4,'',0,1);
        // BUSINESS ADDRESS //
        $pdf->setFillColor(230,230,230); 
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->Cell(40,4,'Business Address: ',1,0,'L',1);
        $pdf->SetFont('Century Gothic','',8);
        $pdf->Cell(130 ,4,$row1['business_addr'],1,0, 'L');
        $pdf->Cell(10 ,4,'',0,1);
        // BUSINESS ADDRESS //
        $pdf->setFillColor(230,230,230); 
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->Cell(40,4,'Contact Details: ',1,0,'L',1);
        $pdf->SetFont('Century Gothic','',8);
        $pdf->Cell(130 ,4,$row1['contact_details'],1,0, 'L');
        $pdf->Cell(10 ,4,'',0,1);
        // REFERENCE CODE //
        $pdf->setFillColor(230,230,230); 
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->Cell(40,4,'Reference Code: ',1,0,'L',1);
        $pdf->SetFont('Century Gothic','',8);
        $pdf->Cell(130 ,4,$endoCode,1,0, 'L');
        $pdf->Cell(10 ,4,'',0,1);
        // INITIATION DATE //
        $pdf->setFillColor(230,230,230); 
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->Cell(40,4,'Initiation Date: ',1,0,'L',1);
        $pdf->SetFont('Century Gothic','',8);
        $pdf->Cell(130 ,4,$Newinitiationdate,1,0, 'L');
        $pdf->Cell(10 ,4,'',0,1);
        // DATE SUBMITTED (INITIAL) //
        $pdf->setFillColor(230,230,230); 
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->Cell(40,4,'Date Submitted (Initial): ',1,0,'L',1);
        $pdf->SetFont('Century Gothic','',8);
        $pdf->Cell(130 ,4,$Newinitialdatesubm,1,0, 'L');
        $pdf->Cell(10 ,4,'',0,1);
        // DATE SUBMITTED (FINAL) //
        $pdf->setFillColor(230,230,230); 
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->Cell(40,4,'Date Submitted (Final): ',1,0,'L',1);
        $pdf->SetFont('Century Gothic','',8);
        $pdf->Cell(130 ,4,$Newfinaldatesubm,1,0, 'L');
        $pdf->Cell(10 ,4,'',0,1);

        $pdf->Cell(70   ,4,'',0,0);
        $pdf->Cell(56   ,4,'',0,0);
        $pdf->Cell(63.3 ,4,'',0,1);//end of line

        $pdf->SetFont('Century Gothic','B',9);
        $pdf->Cell(170   ,5,'FOR THE EXCLUSIVE USE OF '.strtoupper($row['client_name']).'',1,0, 'C',1);
        $pdf->Cell(10 ,5,'',0,1);//end of line
        $pdf->Ln(2);

        $pdf->SetFont('Century Gothic','B',9);
        $pdf->setFillColor(255,255,0);
        $pdf->Cell(48 ,4,'COMPREHENSIVE ASSESSMENT',0,1,'L',1);
        $pdf->Ln(3);

        $pdf->SetFont('Century Gothic','B',8);
        $pdf->setFillColor(230,230,230); 
        $pdf->Cell(45 ,4,'VERIFICATION TYPE',1,0,'C',1);//end of line
        $pdf->Cell(70 ,4,'REMARKS',1,0,'C',1);//end of line
        $pdf->Cell(55 ,4,'COLOR CODE',1,0,'C',1);//end of line
        $pdf->Cell(10 ,4,'',0,1);//end of line
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->setFillColor(230,230,230); 
        $pdf->Cell(170 ,4,'BACKGROUND INVESTIGATION REPORT',1,0,'C',1);//end of line
        $pdf->Cell(10 ,4,'',0,1);//end of line
        // PERSONAL BACKGROUND //
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->setFillColor(230,230,230); 
        if ($personal_bg == '1') {
            $pdf->Cell(45 ,4,'Personal Background:',1,0,'L',1);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(70 ,4,$row1['personal_bg_remarks'],1,0,'C',1);
            $pdf->SetFont('Century Gothic','B',8);
            if ($row1['personal_bg_color'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
            elseif ($row1['personal_bg_color'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(55 ,4,'',1,0,'C', 1);
            }
            elseif ($row1['personal_bg_color'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
        } else {
            echo "";
        }
        $pdf->Cell(10 ,4,'',0,1);//end of line
        // ACADEMIC CHECK //
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->setFillColor(230,230,230); 
        if ($academic_ == '1') {
            $pdf->Cell(45 ,4,'Academic Check:',1,0,'L',1);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(70 ,4,$row1['academic_chk_remarks'],1,0,'C',1);
            $pdf->SetFont('Century Gothic','B',8);
            if ($row1['academic_chk_color'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
            elseif ($row1['academic_chk_color'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(55 ,4,'',1,0,'C', 1);
            }
            elseif ($row1['academic_chk_color'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
        } else {
            echo "";
        }
        $pdf->Cell(10 ,4,'',0,1);//end of line
        // EMPLOYMENT HISTORY //
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->setFillColor(230,230,230); 
        if ($emp_history == '1') {
            $pdf->Cell(45 ,4,'Employment History:',1,0,'L',1);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(70 ,4,$row1['employment_hist_remarks'],1,0,'C',1);
            $pdf->SetFont('Century Gothic','B',8);
            if ($row1['employment_hist_color'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
            elseif ($row1['employment_hist_color'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(55 ,4,'',1,0,'C', 1);
            }
            elseif ($row1['employment_hist_color'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
        } else {
            echo "";
        }
        $pdf->Cell(10 ,4,'',0,1);//end of line
        // CHARACTER REFERENCES //
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->setFillColor(230,230,230); 
        if ($char_references == '1') {
            $pdf->Cell(45 ,4,'Character References:',1,0,'L',1);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(70 ,4,$row1['character_ref_remarks'],1,0,'C',1);
            $pdf->SetFont('Century Gothic','B',8);
            if ($row1['character_ref_color'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
            elseif ($row1['character_ref_color'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(55 ,4,'',1,0,'C', 1);
            }
            elseif ($row1['character_ref_color'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
        } else {
            echo "";
        }
        $pdf->Cell(10 ,4,'',0,1);//end of line
        // IDENTITY CHECK (SSS) //
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->setFillColor(230,230,230); 
        if ($identity_sss == '1') {
            $pdf->Cell(45 ,4,'Identity Check (SSS):',1,0,'L',1);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(70 ,4,$row1['identity_sss_remarks'],1,0,'C',1);
            $pdf->SetFont('Century Gothic','B',8);
            if ($row1['identity_sss_color'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
            elseif ($row1['identity_sss_color'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(55 ,4,'',1,0,'C', 1);
            }
            elseif ($row1['identity_sss_color'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
        } else {
            echo "";
        }
        $pdf->Cell(10 ,4,'',0,1);//end of line
        // IDENTITY CHECK (BIR) //
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->setFillColor(230,230,230); 
        if ($identity_bir == '1') {
            $pdf->Cell(45 ,4,'Identity Check (BIR):',1,0,'L',1);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(70 ,4,$row1['identity_bir_remarks'],1,0,'C',1);
            $pdf->SetFont('Century Gothic','B',8);
            if ($row1['identity_bir_color'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
            elseif ($row1['identity_bir_color'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(55 ,4,'',1,0,'C', 1);
            }
            elseif ($row1['identity_bir_color'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
        } else {
            echo "";
        }
        $pdf->Cell(10 ,4,'',0,1);//end of line
        // CRIMINAL CHECK (NBI) //
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->setFillColor(230,230,230); 
        if ($criminal_nbi == '1') {
            $pdf->Cell(45 ,4,'Criminal Check (NBI):',1,0,'L',1);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(70 ,4,$row1['criminal_nbi_remarks'],1,0,'C',1);
            $pdf->SetFont('Century Gothic','B',8);
            if ($row1['criminal_nbi_color'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
            elseif ($row1['criminal_nbi_color'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(55 ,4,'',1,0,'C', 1);
            }
            elseif ($row1['criminal_nbi_color'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
        } else {
            echo "";
        }
        $pdf->Cell(10 ,4,'',0,1);//end of line
        // CRIMINAL CHECK (LCC) //
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->setFillColor(230,230,230); 
        if ($criminal_lcc == '1') {
            $pdf->Cell(45 ,4,'Criminal Check (LCC):',1,0,'L',1);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(70 ,4,$row1['criminal_lcc_remarks'],1,0,'C',1);
            $pdf->SetFont('Century Gothic','B',8);
            if ($row1['criminal_lcc_color'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
            elseif ($row1['criminal_lcc_color'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(55 ,4,'',1,0,'C', 1);
            }
            elseif ($row1['criminal_lcc_color'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
        } else {
            echo "";
        }
        $pdf->Cell(10 ,4,'',0,1);//end of line
        // CREDIT CHECK (CMAP) //
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->setFillColor(230,230,230); 
        if ($credit_cmap == '1') {
            $pdf->Cell(45 ,4,'Credit Check (CMAP):',1,0,'L',1);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(70 ,4,$row1['credit_cmap_remarks'],1,0,'C',1);
            $pdf->SetFont('Century Gothic','B',8);
            if ($row1['credit_cmap_colors'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
            elseif ($row1['credit_cmap_colors'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(55 ,4,'',1,0,'C', 1);
            }
            elseif ($row1['credit_cmap_colors'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
        } else {
            echo "";
        }
        $pdf->Cell(10 ,4,'',0,1);//end of line
        // INTERNATIONAL CHECK (GDC) //
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->setFillColor(230,230,230); 
        if ($international_chk == '1') {
            $pdf->Cell(45 ,4,'International Check (GDC):',1,0,'L',1);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(70 ,4,$row1['int_gdc_remarks'],1,0,'C',1);
            $pdf->SetFont('Century Gothic','B',8);
            if ($row1['int_gdc_color'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
            elseif ($row1['int_gdc_color'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(55 ,4,'',1,0,'C', 1);
            }
            elseif ($row1['int_gdc_color'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
        } else {
            echo "";
        }
        $pdf->Cell(10 ,4,'',0,1);//end of line
        // BARANGAY CHECK //
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->setFillColor(230,230,230); 
        if ($barangay_chk == '1') {
            $pdf->Cell(45 ,4,'Barangay Check:',1,0,'L',1);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(70 ,4,$row1['brgy_chk_remarks'],1,0,'C',1);
            $pdf->SetFont('Century Gothic','B',8);
            if ($row1['brgy_chk_color'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
            elseif ($row1['brgy_chk_color'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(55 ,4,'',1,0,'C', 1);
            }
            elseif ($row1['brgy_chk_color'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
        } else {
            echo "";
        }
        $pdf->Cell(10 ,4,'',0,1);//end of line
        // NEIGBORHOOD REFERENCES //
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->setFillColor(230,230,230); 
        if ($neighborhood_ref == '1') {
            $pdf->Cell(45 ,4,'Neighborhood References:',1,0,'L',1);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(70 ,4,$row1['neighborhood_ref_remarks'],1,0,'C',1);
            $pdf->SetFont('Century Gothic','B',8);
            if ($row1['neighborhood_ref_color'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
            elseif ($row1['neighborhood_ref_color'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(55 ,4,'',1,0,'C', 1);
            }
            elseif ($row1['neighborhood_ref_color'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
        } else {
            echo "";
        }
        $pdf->Cell(10 ,4,'',0,1);//end of line
        // POLITICAL AND RELIGIOUS AFFILIATIONS //
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->setFillColor(230,230,230); 
        if ($political_religious_aff == '1') {
            $pdf->Cell(45 ,4,'Pol./Religious Affiliations:',1,0,'L',1);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(70 ,4,$row1['pol_religious_remarks'],1,0,'C',1);
            $pdf->SetFont('Century Gothic','B',8);
            if ($row1['pol_religious_color'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
            elseif ($row1['pol_religious_color'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(55 ,4,'',1,0,'C', 1);
            }
            elseif ($row1['pol_religious_color'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
        } else {
            echo "";
        }
        $pdf->Cell(10 ,4,'',0,1);//end of line
        // LIFESTYLE CHECK //
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->setFillColor(230,230,230); 
        if ($lifestyle_chk == '1') {
            $pdf->Cell(45 ,4,'Lifestyle Check:',1,0,'L',1);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(70 ,4,$row1['lifestyle_remarks'],1,0,'C',1);
            $pdf->SetFont('Century Gothic','B',8);
            if ($row1['lifestyle_color'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
            elseif ($row1['lifestyle_color'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(55 ,4,'',1,0,'C', 1);
            }
            elseif ($row1['lifestyle_color'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
        } else {
            echo "";
        }
        $pdf->Cell(10 ,4,'',0,1);//end of line
        // FINANCIAL REVIEW //
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->setFillColor(230,230,230); 
        if ($financial_review == '1') {
            $pdf->Cell(45 ,4,'Financial Review:',1,0,'L',1);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(70 ,4,$row1['financial_rev_remarks'],1,0,'C',1);
            $pdf->SetFont('Century Gothic','B',8);
            if ($row1['financial_rev_color'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
            elseif ($row1['financial_rev_color'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(55 ,4,'',1,0,'C', 1);
            }
            elseif ($row1['financial_rev_color'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(55 ,4,'',1,0,'C',1);
            }
        } else {
            echo "";
        }
        $pdf->Cell(10 ,4,'',0,1);//end of line
        // RECOMMENDATION //
        $pdf->SetFont('Century Gothic','B',12);
        $pdf->setFillColor(255,255,255); 
        $pdf->Cell(80 ,10,'Recommendation / Character Scale:',1,0,'C',1);
        if ($row1['recommendation_'] == '0') {
            $pdf->Cell(90 ,10,'CLEARED',1,0,'C',1);
        } else {
            echo "";
        }
        $pdf->Cell(10 ,13,'',0,1);//end of line
        // COLOR CODE //
        $pdf->SetFont('Century Gothic','B',10);
        $pdf->Cell(42.5 ,4,'COLOR CODE:',1,0,'C');
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->setFillColor(60,179,113);
        $pdf->Cell(42.5 ,4,'CLEARED',1,0,'C',1);
        $pdf->setFillColor(255,191,0);
        $pdf->Cell(42.5 ,4,'FOR REVIEW',1,0,'C',1);
        $pdf->setFillColor(210,43,43); 
        $pdf->Cell(42.5 ,4,'FAILED',1,0,'C',1);
        $pdf->Cell(10 ,4,'',0,1);//end of line
        $pdf->Ln(4);

        $pdf->AddPage();
        $pdf->SetFont('Century Gothic','BU',10);
        $pdf->setFillColor(255,255,0);
        $pdf->Cell(32 ,4,'ANALYSIS REPORT',0,1,'L',1);
        $pdf->Ln(3);
        $pdf->Cell(45 ,2,'',0,0);
        $pdf->Cell(10 ,2,'',0,1);//end of line
        // PERSONAL BACKGROUND //
        if ($personal_bg  == '1') {
            $pdf->setFillColor(255,191,143);    
            $pdf->SetFont('Century Gothic','BU',17);
            $pdf->Cell(170,8,'PERSONAL BACKGROUND',1,0,'C',1);
            $pdf->Cell(10 ,8,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(20 ,4,'Color Code:',1,0,'L',1);
            if ($row2['status_code'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            elseif ($row2['status_code'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(40 ,4,'',1,0,'C', 1);
            }
            elseif ($row2['status_code'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            $pdf->setFillColor(255,255,255);  
            $pdf->Cell(110 ,4,'',1,0,'L',1); 
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(170 ,13,$row2['remarks_'],1,0,'L',1);
        } else {
            echo "";
        }
        $pdf->Cell(10 ,18,'',0,1);//end of line
        // ACADEMIC CHECK //    
        if ($academic_  == '1') {
            $pdf->setFillColor(255,191,143);    
            $pdf->SetFont('Century Gothic','BU',17);
            $pdf->Cell(170,8,'ACADEMIC',1,0,'C',1);
            $pdf->Cell(10 ,8,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(30 ,4,'School / University:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(140 ,4,$row3['school_'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230);   
            $pdf->Cell(20 ,4,'Color Code:',1,0,'L',1);
            if ($row3['status_code'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            elseif ($row3['status_code'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(40 ,4,'',1,0,'C', 1);
            }
            elseif ($row3['status_code'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            $pdf->setFillColor(230,230,230);   
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->Cell(55,4,'Reported Information',1,0,'C',1);
            $pdf->Cell(55,4,'Verified Information',1,0,'C',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->Cell(60 ,4,'Degree:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(55,4,$row3['reported_degree'],1,0,'L',1);
            $pdf->Cell(55,4,$row3['verified_degree'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->setFillColor(230,230,230);   
            $pdf->SetFont('Century Gothic','B',8);          
            $pdf->Cell(60 ,4,'Year Graduated:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(55,4,$row3['reported_yeargrad'],1,0,'L',1);
            $pdf->Cell(55,4,$row3['verified_yeargrad'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->setFillColor(230,230,230);   
            $pdf->SetFont('Century Gothic','B',8);          
            $pdf->Cell(60 ,4,'Dates Attended:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(110,4,$Newdateattendedfrom. ' - '.$Newdateattendedto,1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->setFillColor(230,230,230);   
            $pdf->SetFont('Century Gothic','B',8);          
            $pdf->Cell(60 ,4,'Highest Educational Attainment:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(110,4,$row3['highest_educ_attainment'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->setFillColor(230,230,230);   
            $pdf->SetFont('Century Gothic','B',8);          
            $pdf->Cell(60 ,4,'Remarks:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(110,4,$row3['remarks_'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->setFillColor(230,230,230);   
            $pdf->SetFont('Century Gothic','B',8);          
            $pdf->Cell(60 ,4,'Informant:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(110,4,$row3['informant_'],1,0,'L',1);
        } else {
            echo "";
        }
        $pdf->Cell(10 ,8,'',0,1);//end of line
        // EMPLOYMENT HISTORY //    
        if ($emp_history == '1') {
            $pdf->setFillColor(255,191,143);    
            $pdf->SetFont('Century Gothic','BU',17);
            $pdf->Cell(170,8,'EMPLOYMENT VERIFICATION',1,0,'C',1);
            $pdf->Cell(10 ,8,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(30 ,4,'Company No. 1:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(140 ,4,$row4['company_'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230);   
            $pdf->Cell(20 ,4,'Color Code:',1,0,'L',1);
            if ($row4['status_code'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            elseif ($row4['status_code'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(40 ,4,'',1,0,'C', 1);
            }
            elseif ($row4['status_code'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            $pdf->setFillColor(230,230,230);   
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->Cell(55,4,'Reported Information',1,0,'C',1);
            $pdf->Cell(55,4,'Verified Information',1,0,'C',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->setFillColor(230,230,230);   
            $pdf->SetFont('Century Gothic','B',8);          
            $pdf->Cell(60 ,4,'Period of Employment (From - To):',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(55,4,$Newreportedempfrom. ' - '.$Newreportedempto,1,0,'L',1);
            $pdf->Cell(55,4,$Newverifiedempfrom. ' - '.$Newverifiedempto,1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->setFillColor(230,230,230);   
            $pdf->SetFont('Century Gothic','B',8);          
            $pdf->Cell(60 ,4,'Position:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(55,4,$row4['reported_position'],1,0,'L',1);
            $pdf->Cell(55,4,$row4['verified_position'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->setFillColor(230,230,230);   
            $pdf->SetFont('Century Gothic','B',8);          
            $pdf->Cell(60 ,4,'Reason employment ended:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(55,4,$row4['reported_employment_ended'],1,0,'L',1);
            $pdf->Cell(55,4,$row4['verified_employment_ended'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->setFillColor(230,230,230);   
            $pdf->SetFont('Century Gothic','B',8);          
            $pdf->Cell(60 ,4,'Nature of Business:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(110,4,$row4['nature_business'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->setFillColor(230,230,230);   
            $pdf->SetFont('Century Gothic','B',8);          
            $pdf->Cell(60 ,4,'Any derogatory records?',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(110,4,$row4['any_records'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->setFillColor(230,230,230);   
            $pdf->SetFont('Century Gothic','B',8);          
            $pdf->Cell(60 ,4,'Is she/he eligible for rehire?',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(110,4,$row4['eligible_for_rehire'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->setFillColor(230,230,230);   
            $pdf->SetFont('Century Gothic','B',8);          
            $pdf->Cell(60 ,4,'Remarks:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(110,4,$row4['remarks_'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->setFillColor(230,230,230);   
            $pdf->SetFont('Century Gothic','B',8);          
            $pdf->Cell(60 ,4,'Informant:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(110,4,$row4['informant_'],1,0,'L',1);
        } else {
            echo "";
        }
        $pdf->Cell(10 ,8,'',0,1);//end of line
        // CHARACTER REFERENCES //  
        if ($char_references == '1') {
            $pdf->setFillColor(255,191,143);    
            $pdf->SetFont('Century Gothic','BU',17);
            $pdf->Cell(170,8,'CHARACTER REFERENCES',1,0,'C',1);
            $pdf->Cell(10 ,8,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(40 ,4,'Character Reference No. 1:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(130 ,4,$row5['fname_']. ' '.$row5['mname_']. ' '.$row5['lname_']. ' '.$row5['suffix_'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230);   
            $pdf->Cell(30 ,4,'Color Code:',1,0,'L',1);
            if ($row5['status_code'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            elseif ($row5['status_code'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(40 ,4,'',1,0,'C', 1);
            }
            elseif ($row5['status_code'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230);   
            $pdf->Cell(45 ,4,'Current Employer and Position:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(55 ,4,$row5['employer_and_position'],1,0,'L',1); 
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230);   
            $pdf->Cell(30 ,4,'Contact Details:',1,0,'L',1);     
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(140,4,$row5['contact_details'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230);   
            $pdf->Cell(30 ,4,'Remarks:',1,0,'L',1);     
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(140,4,$row5['remarks_'],1,0,'L',1);
        } else {
            echo "";
        }
        $pdf->Cell(10 ,8,'',0,1);//end of line
        // IDENTITY CHECK (SSS) //
        if ($identity_sss == '1') {
            $pdf->setFillColor(255,191,143);    
            $pdf->SetFont('Century Gothic','BU',17);
            $pdf->Cell(170,8,'IDENTITY CHECK (SSS)',1,0,'C',1);
            $pdf->Cell(10 ,8,'',0,1);//end of line
            $pdf->setFillColor(230,230,230); 
            $pdf->SetFont('Century Gothic','',8);
            $pdf->Cell(170,6,'Verification was made at the Social Security Systems (SSS) showed the following results:',1,0,'L',1);
            $pdf->Cell(10 ,6,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(20 ,4,'Color Code:',1,0,'L',1);
            if ($row6['status_code'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            elseif ($row6['status_code'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(40 ,4,'',1,0,'C', 1);
            }
            elseif ($row6['status_code'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            $pdf->setFillColor(255,255,255);  
            $pdf->Cell(110 ,4,'',1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(20 ,4,'Findings:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255);
            $pdf->Cell(150 ,4,$row6['findings_'],1,0,'L',1);
        } else {
            echo "";
        }
        $pdf->Cell(10 ,8,'',0,1);//end of line
        // IDENTITY CHECK (BIR) //
        if ($identity_bir == '1') {
            $pdf->setFillColor(255,191,143);    
            $pdf->SetFont('Century Gothic','BU',17);
            $pdf->Cell(170,8,'IDENTITY CHECK (BIR)',1,0,'C',1);
            $pdf->Cell(10 ,8,'',0,1);//end of line
            $pdf->setFillColor(230,230,230); 
            $pdf->SetFont('Century Gothic','',8);
            $pdf->Cell(170,6,'Verification was made at the Bureau of Internal Revenue (BIR) showed the following results:',1,0,'L',1);
            $pdf->Cell(10 ,6,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(20 ,4,'Color Code:',1,0,'L',1);
            if ($row7['status_code'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            elseif ($row7['status_code'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(40 ,4,'',1,0,'C', 1);
            }
            elseif ($row7['status_code'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            $pdf->setFillColor(255,255,255);  
            $pdf->Cell(110 ,4,'',1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(20 ,4,'Findings:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255);
            $pdf->Cell(150 ,4,$row7['findings_'],1,0,'L',1);
        } else {
            echo "";
        }
        $pdf->Cell(10 ,8,'',0,1);//end of line
        // CRIMINAL CHECK (NBI) //
        if ($criminal_nbi == '1') {
            $pdf->setFillColor(255,191,143);    
            $pdf->SetFont('Century Gothic','BU',17);
            $pdf->Cell(170,8,'CRIMINAL CHECK (NBI)',1,0,'C',1);
            $pdf->Cell(10 ,8,'',0,1);//end of line
            $pdf->setFillColor(230,230,230); 
            $pdf->SetFont('Century Gothic','',8);
            $pdf->Cell(170,6,'Verification was made at the National Bureau of Investigation (NBI) showed the following results:',1,0,'L',1);
            $pdf->Cell(10 ,6,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(20 ,4,'Color Code:',1,0,'L',1);
            if ($row8['status_code'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            elseif ($row8['status_code'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(40 ,4,'',1,0,'C', 1);
            }
            elseif ($row8['status_code'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            $pdf->setFillColor(255,255,255);  
            $pdf->Cell(110 ,4,'',1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(20 ,4,'Findings:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255);
            $pdf->Cell(150 ,4,$row8['findings_'],1,0,'L',1);
        } else {
            echo "";
        }

        $pdf->AddPage();
        // CRIMINAL CHECK (LCC) //
        if ($criminal_lcc == '1') {
            $pdf->setFillColor(255,191,143);    
            $pdf->SetFont('Century Gothic','BU',17);
            $pdf->Cell(170,8,'CRIMINAL CHECK (LCC)',1,0,'C',1);
            $pdf->Cell(10 ,8,'',0,1);//end of line
            $pdf->setFillColor(230,230,230); 
            $pdf->SetFont('Century Gothic','',8);
            $pdf->Cell(170,6,'Verification was made at the Regional/Metropolitan/Municipal Trial Court (RTC/MTC/MTCC) showed the following results:',1,0,'L',1);
            $pdf->Cell(10 ,6,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(20 ,4,'Color Code:',1,0,'L',1);
            if ($row9['status_code'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            elseif ($row9['status_code'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(40 ,4,'',1,0,'C', 1);
            }
            elseif ($row9['status_code'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            $pdf->setFillColor(255,255,255);  
            $pdf->Cell(110 ,4,'',1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(20 ,4,'Findings:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255);
            $pdf->Cell(150 ,4,$row9['findings_'],1,0,'L',1);
        } else {
            echo "";
        }
        $pdf->Cell(10 ,8,'',0,1);//end of line
        // CREDIT CHECK (CMAP) //
        if ($credit_cmap == '1') {
            $pdf->setFillColor(255,191,143);    
            $pdf->SetFont('Century Gothic','BU',17);
            $pdf->Cell(170,8,'CREDIT CHECK',1,0,'C',1);
            $pdf->Cell(10 ,8,'',0,1);//end of line
            $pdf->setFillColor(230,230,230); 
            $pdf->SetFont('Century Gothic','',8);
            $pdf->Cell(170,6,'Verification was made at the Credit Management Association of the Philippines (CMAP) showed the following results:',1,0,'L',1);
            $pdf->Cell(10 ,6,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(20 ,4,'Color Code:',1,0,'L',1);
            if ($row10['status_code'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            elseif ($row10['status_code'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(40 ,4,'',1,0,'C', 1);
            }
            elseif ($row10['status_code'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            $pdf->setFillColor(255,255,255);  
            $pdf->Cell(110 ,4,'',1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(50 ,4,'Court Cases:',1,0,'L',1);
            $pdf->setFillColor(255,255,255);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->Cell(120 ,4,$row10['court_cases'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line      
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(50 ,4,'Returned Checks:',1,0,'L',1);
            $pdf->setFillColor(255,255,255);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->Cell(120 ,4,$row10['returned_checks'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line  
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(50 ,4,'Account Referred to Lawyers:',1,0,'L',1);
            $pdf->setFillColor(255,255,255);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->Cell(120 ,4,$row10['account_lawyers'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line  
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->Cell(50 ,4,'Telecoms Data Bank:',1,0,'L',1);
            $pdf->setFillColor(255,255,255);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->Cell(120 ,4,$row10['telecoms_bank'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line  
        } else {
            echo "";
        }        
        $pdf->Cell(10 ,5,'',0,1);//end of line
        // CRIMINAL CHECK (NBI) //
        if ($international_chk == '1') {
            $pdf->setFillColor(255,191,143);    
            $pdf->SetFont('Century Gothic','BU',17);
            $pdf->Cell(170,8,'INTERNATIONAL CHECK',1,0,'C',1);
            $pdf->Cell(10 ,8,'',0,1);//end of line
            $pdf->setFillColor(230,230,230); 
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->Cell(170,6,'GLOBAL DATABASE CHECK',1,0,'C',1);
            $pdf->Cell(10 ,6,'',0,1);//end of line
            $pdf->setFillColor(255,255,255); 
            $pdf->SetFont('Century Gothic','',8);
            $pdf->Cell(170,6,'Subject name not found in the following International Negative Records',1,0,'L',1);
            $pdf->Cell(10 ,6,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(20 ,4,'Color Code:',1,0,'L',1);
            if ($row11['status_code'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            elseif ($row11['status_code'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(40 ,4,'',1,0,'C', 1);
            }
            elseif ($row11['status_code'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            $pdf->setFillColor(255,255,255);  
            $pdf->Cell(110 ,4,'',1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(20 ,4,'Findings:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255);
            $pdf->Cell(150 ,4,$row11['findings_'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
        } else {
            echo "";
        }
        $pdf->Cell(10 ,5,'',0,1);//end of line
        // BARANGAY CHECK //
        if ($barangay_chk == '1') {
            $pdf->setFillColor(255,191,143);    
            $pdf->SetFont('Century Gothic','BU',17);
            $pdf->Cell(170,8,'BARANGAY CHECK',1,0,'C',1);
            $pdf->Cell(10 ,8,'',0,1);//end of line
            $pdf->setFillColor(255,255,255); 
            $pdf->SetFont('Century Gothic','',8);
            $pdf->Cell(170,5,'Verification made with Brgy. '.$row12['brgy_name'].' showed that our subject is negative of any pending barangay cases neither had any','LRT',1,'L');
            $pdf->Cell(170,5,'information of any derogatory record as of date of inquiry.','LRB',0,'L');
            $pdf->Cell(10 ,5,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230);   
            $pdf->Cell(20 ,4,'Color Code:',1,0,'L',1);
            if ($row12['status_code'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            elseif ($row12['status_code'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(40 ,4,'',1,0,'C', 1);
            }
            elseif ($row12['status_code'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            $pdf->setFillColor(255,255,255);  
            $pdf->Cell(110 ,4,'',1,0,'L',1); 
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(40 ,4,'Barangay Informant:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255);
            $pdf->Cell(130 ,4,$row12['brgy_informant'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(40 ,4,'Position/ Contact #:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255);
            $pdf->Cell(130 ,4,$row12['position_']. ' / '.$row12['contact_'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line

        } else {
            echo "";
        }
        $pdf->Cell(10 ,5,'',0,1);//end of line
        // NEIGHBORHOOD REFERENCES //
        if ($neighborhood_ref == '1') {
            $pdf->setFillColor(255,191,143);    
            $pdf->SetFont('Century Gothic','BU',17);
            $pdf->Cell(170,8,'NEIGHBORHOOD REFERENCES',1,0,'C',1);
            $pdf->Cell(10 ,8,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(40 ,4,'Neighbor No. 1:',1,0,'L',1);
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(130 ,4,$row13['fname_']. ' '.$row13['mname_']. ' '.$row13['lname_']. ' '.$row13['suffix_'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230);   
            $pdf->Cell(30 ,4,'Color Code:',1,0,'L',1);
            if ($row13['status_code'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            elseif ($row13['status_code'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(40 ,4,'',1,0,'C', 1);
            }
            elseif ($row13['status_code'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            $pdf->setFillColor(255,255,255);  
            $pdf->Cell(100 ,4,'',1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230);   
            $pdf->Cell(30 ,4,'Current Address:',1,0,'L',1);     
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(140,4,$row13['current_address'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230);   
            $pdf->Cell(30 ,4,'Contact Information:',1,0,'L',1);     
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(140,4,$row13['contact_info'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230);   
            $pdf->Cell(30 ,4,'Remarks:',1,0,'L',1);     
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(140,4,$row13['remarks_'],1,0,'L',1);
            $pdf->Cell(10 ,4,'',0,1);//end of line
        } else {
            echo "";
        }
        $pdf->Cell(10 ,5,'',0,1);//end of line
        // POLITICAL / RELIGIOUS AFFILIATIONS //
        if ($political_religious_aff  == '1') {
            $pdf->setFillColor(255,191,143);    
            $pdf->SetFont('Century Gothic','BU',17);
            $pdf->Cell(170,8,'POLITICAL / RELIGIOUS AFFILIATIONS',1,0,'C',1);
            $pdf->Cell(10 ,8,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(20 ,4,'Color Code:',1,0,'L',1);
            if ($row14['status_code'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            elseif ($row14['status_code'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(40 ,4,'',1,0,'C', 1);
            }
            elseif ($row14['status_code'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            $pdf->setFillColor(255,255,255);  
            $pdf->Cell(110 ,4,'',1,0,'L',1); 
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(170 ,13,$row14['remarks_'],1,0,'L',1);
        } else {
            echo "";
        }
        $pdf->Cell(10 ,18,'',0,1);//end of line
        // LIFESTYLE CHECK //
        if ($lifestyle_chk  == '1') {
            $pdf->setFillColor(255,191,143);    
            $pdf->SetFont('Century Gothic','BU',17);
            $pdf->Cell(170,8,'LIFESTYLE CHECK',1,0,'C',1);
            $pdf->Cell(10 ,8,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(20 ,4,'Color Code:',1,0,'L',1);
            if ($row15['status_code'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            elseif ($row15['status_code'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(40 ,4,'',1,0,'C', 1);
            }
            elseif ($row15['status_code'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            $pdf->setFillColor(255,255,255);  
            $pdf->Cell(110 ,4,'',1,0,'L',1); 
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(170 ,13,$row15['remarks_'],1,0,'L',1);
        } else {
            echo "";
        }
        $pdf->AddPage();
        // FINANCIAL CHECK //
        if ($financial_review  == '1') {
            $pdf->setFillColor(255,191,143);    
            $pdf->SetFont('Century Gothic','BU',17);
            $pdf->Cell(170,8,'FINANCIAL CHECK',1,0,'C',1);
            $pdf->Cell(10 ,8,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','B',8);
            $pdf->setFillColor(230,230,230); 
            $pdf->Cell(20 ,4,'Color Code:',1,0,'L',1);
            if ($row16['status_code'] == '0'){
                $pdf->setFillColor(60,179,113);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            elseif ($row16['status_code'] == '1'){
                $pdf->setFillColor(255,191,0);
                $pdf->Cell(40 ,4,'',1,0,'C', 1);
            }
            elseif ($row16['status_code'] == '2'){
                $pdf->setFillColor(210,43,43);
                $pdf->Cell(40 ,4,'',1,0,'C',1);
            }
            $pdf->setFillColor(255,255,255);  
            $pdf->Cell(110 ,4,'',1,0,'L',1); 
            $pdf->Cell(10 ,4,'',0,1);//end of line
            $pdf->SetFont('Century Gothic','',8);
            $pdf->setFillColor(255,255,255); 
            $pdf->Cell(170 ,13,$row16['remarks_'],1,0,'L',1);
        } else {
            echo "";
        }
        $pdf->Cell(10 ,18,'',0,1);//end of line
        $pdf->SetFont('Century Gothic','BU',11);
        $pdf->setFillColor(255,255,0);
        $pdf->Cell(21 ,4,'RISK LEVEL:',0,1,'L',1);
        $pdf->Ln(3);

        $pdf->setFillColor(230,230,230); 
        $pdf->SetFont('Century Gothic','',9);
        $pdf->Cell(170,6,'Based on the General Information gathered at source and field, the subject is assessed with a.',0,0,'L');
        $pdf->SetFont('Century Gothic','BI',9);
        $pdf->Cell(10 ,4,'',0,1);//end of line
        $pdf->Cell(170,6,'LOW RISK LEVEL.',0,0,'L');
        $pdf->Ln(8);

        $pdf->SetFont('Century Gothic','BU',11);
        $pdf->setFillColor(255,255,0);
        $pdf->Cell(40 ,4,'CUSTOMER SERVICE:',0,1,'L',1);
        $pdf->Ln(3);

        // SUPERVISOR AND ANALYST //
        $sql17 = "SELECT a.endo_code, a.assigned_supervisor, a.assigned_analyst, b.user_id, CONCAT(b.fname, ' ', b.lname, ' ', b.suffix) AS supervisorname, c.user_id, CONCAT(c.fname, ' ', c.lname, ' ', c.suffix) AS analystname FROM tbl_endorsement_bi_process AS a LEFT JOIN tbl_supervisor AS b ON a.assigned_supervisor = b.user_id LEFT JOIN tbl_operations AS c ON a.assigned_analyst = c.user_id WHERE a.endo_code = '$endoCode'";
        // echo $sql17;
        $res17 = $conn->query($sql17);
        $row17 = mysqli_fetch_array($res17);
        $supervisorname = $row17['supervisorname'];
        $analystname = $row17['analystname'];

        $pdf->setFillColor(230,230,230); 
        $pdf->SetFont('Century Gothic','B',8);
        $pdf->Cell(170,5,'For Any Questions and Clarifications as to the result of this Background Investigation, please call Lendell Outsourcing','LRT',1,'L');
        $pdf->Cell(170,5,'Inc. at +632570 7915 or email us at info@lendell.ph or info.lendell@gmail.com.','LR',1,'L');
        $pdf->Cell(0 ,0,'',0,1); 
        $pdf->Cell(170,5,'We will be honored to reply.','LRB',0,'L');
        $pdf->Ln(15);

        $pdf->setFillColor(255,255,255); 
        $pdf->SetFont('Century Gothic','',11);
        $pdf->Cell(40 ,4,'Prepared By:                                                           Noted By:',0,1,'L',1);
        $pdf->Ln(3);

        $pdf->Cell(10 ,6,'',0,1);//end of line

        $pdf->setFillColor(255,255,255); 
        $pdf->SetFont('Century Gothic','B',11);
        $pdf->Cell(40 ,4, $analystname  . '                                                             '.                                   $supervisorname,0,1,'L',1);
        $pdf->Ln(3);

        $pdf->setFillColor(255,255,255); 
        $pdf->SetFont('Century Gothic','',11);
        $pdf->Cell(40 ,4,'Data Analyst                                                              Accounts Supervisor - POC',0,1,'L',1);
        $pdf->Ln(3);

        $pdf->Output();
    }
?>