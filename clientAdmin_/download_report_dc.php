<?php
    require '../fpdf17/fpdf.php';
    require '../connect.php';

    $query = mysqli_query($conn,"SELECT a.endo_id, a.endo_desc, a.endo_code, a.endo_submitted, a.endo_date, a.endo_status, a.endorsed_to, a.turn_around_date, a.endo_services, a.lname, a.fname, a.mname, a.verification_code, a.remarks, a.verification_status, a.birthdate, a.client_id, b.user_id, b.company_name, b.contact_no, CONCAT(b.lname , ' , ', b.fname , ' ' , b.mname) AS requestor, c.client_id, c.client_name, c.acronym_, c.site_ FROM tbl_endo_criminal_reports AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id WHERE a.endo_id = '".$_GET['id']."'"); 
    if (!$query) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    $endo = mysqli_fetch_array($query);
    $endoDate = $endo['endo_date'];
    $Newendodate = date("F d, Y", strtotime($endoDate));
    $birthDate = $endo['birthdate'];
    $NewbirthDate = date("F d, Y", strtotime($birthDate));
    $dateSubmitted = $endo['endo_submitted'];
    $NewdateSubmitted = date("F d, Y", strtotime($dateSubmitted));

    // VERIFICATION CODE //
    if ($endo['verification_code'] == '0'){
        $findings = 'NO CASE FOUND ON FILE.';
    }
    elseif ($endo['verification_code'] == '1' || $endo['verification_code'] == '2'){
        $findings = $endo['remarks'];
    }

    // VERIFICATION STATUS //
    if ($endo['verification_status'] == '0'){
        $recommendation = 'CLEARED';
    }
    elseif ($endo['verification_status'] == '1'){
        $recommendation = 'PENDING';
    }
    elseif ($endo['verification_status'] == '2'){
        $recommendation = 'CLOSED';
    }
    elseif ($endo['verification_status'] == '3'){
        $recommendation = 'N/A';
    }


    class PDF extends FPDF
    {

    function Header()
    {
        $this->SetFont('Century Gothic','',8);
        $this->Cell(140);
        $this->Cell(30,8,'',0,1,'R');
        $this->Cell(140);
        $this->Cell(30,4,'BACKGROUND CHECK REPORT',0,1,'R');
        $this->Cell(140);
        $this->Cell(30,4,'Doc. No.: LOSI-0074 Code: LOSI-BAC-0074',0,1,'R');
        $this->Cell(140);
        $this->Cell(30,4,'S. No. SN-0001 V. No.: VN-0001 RV. No. RVN-0001',0,1,'R');
        $this->Ln(10);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Century Gothic','',9);
        $this->Cell(0,3,'LENDELL OUTSOURCING SOLUTIONS, INC.',0,1,'C');
        $this->SetFont('Century Gothic','',8);
        $this->Cell(0,3,'Unit 6D, 6th Floor, Globe Telecom Plaza Tower 1, Pioneer Street, corner Madison St., Mandaluyong City',0,1,'C');
        $this->Cell(0,3,'8570-7915 | 8571-1358 | info@lendell.ph | info.lendell@gmail.com | www.lendell.ph',0,1,'C');
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
    $pdf->Cell(63.3 ,5,'',0,1);//end of line

    $pdf->setFillColor(230,230,230); 
    $pdf->SetFont('Century Gothic','',8);

    $pdf->Cell(40,4,'Last Name: ',1,0,'L',1);
    $pdf->Cell(130 ,4,$endo['lname'],1,0, 'L');
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(40,4,'First Name: ',1,0,'L',1);
    $pdf->Cell(130 ,4,$endo['fname'],1,0, 'L');
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(40,4,'Middle Name: ',1,0,'L',1);
    $pdf->Cell(130 ,4,$endo['mname'],1,0, 'L');
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(40,4,'Reference Code: ',1,0,'L',1);
    $pdf->Cell(130 ,4,$endo['endo_code'],1,0, 'L');
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(40,4,'Site: ',1,0,'L',1);
    $pdf->Cell(130 ,4,$endo['site_'],1,0, 'L');
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(40,4,'Requestor: ',1,0,'L',1);
    $pdf->Cell(130 ,4,$endo['requestor'],1,0, 'L');
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(40,4,'Date of Birth: ',1,0,'L',1);
    $pdf->Cell(130 ,4,$NewbirthDate,1,0, 'L');
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(40,4,'Date Requested: ',1,0,'L',1);
    $pdf->Cell(130 ,4,$Newendodate,'R',0, 'L');
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(40,4,'Date Submitted: ',1,0,'L',1);
    $pdf->Cell(130 ,4,$NewdateSubmitted,1,0, 'L');
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(70   ,4,'',0,0);
    $pdf->Cell(56   ,4,'',0,0);
    $pdf->Cell(63.3 ,4,'',0,1);//end of line

    $pdf->SetFont('Century Gothic','B',9);
    $pdf->Cell(170   ,5,'FOR THE EXCLUSIVE USE OF '.strtoupper($endo['client_name']).'',1,0, 'C',1);
    $pdf->Cell(10 ,5,'',0,1);//end of line
    $pdf->Ln(2);

    $pdf->Cell(170  ,1,'',1,0, 'C', 1);
    $pdf->Cell(10 ,1,'',0,1);//end of line
    $pdf->Ln(4);

    $pdf->SetFont('Century Gothic','B',9);
    $pdf->Cell(100  ,4,'COMPREHENSIVE ASSESSMENT',0,1,'L');
    $pdf->Ln(3);

    $pdf->SetFont('Century Gothic','',8);
    $pdf->Cell(25 ,4,'Verification','LRT',0,'C',1);
    $pdf->Cell(25 ,4,'Information','LRT',0,'C',1);
    $pdf->Cell(80 ,4,'Verification Status',1,0,'C',1);
    $pdf->Cell(20 ,8,'Remarks',1,0,'C',1);//end of line
    $pdf->Cell(20 ,8,'Color Code',1,0,'C',1);//end of line
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(25 ,4,'Type ','LRB',0,'C',1);
    $pdf->Cell(25 ,4,'Source ','LRB',0,'C',1);
    $pdf->Cell(20 ,4,'Complete',1,0,'C',1);
    $pdf->Cell(20 ,4,'Closed',1,0,'C',1);
    $pdf->Cell(20 ,4,'N/A',1,0,'C',1);
    $pdf->Cell(20 ,4,'Pending',1,0,'C',1);
    $pdf->Cell(25 ,4,'',0,0,'C');
    $pdf->Cell(25 ,4,'',0,0,'C');
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(25 ,5,'Criminal Check',1,0,'C',1);
    $pdf->Cell(25 ,5,'NBI',1,0,'C');
    if ($endo['verification_status'] == '0'){
        $pdf->SetFont('ZapfDingbats', '', 12);
        $pdf->Cell(20 ,5,chr(51),1,0,'C');
        $pdf->Cell(20 ,5,'',1,0,'C');
        $pdf->Cell(20 ,5,'',1,0,'C');
        $pdf->Cell(20 ,5,'',1,0,'C');
        $pdf->Cell(20 ,5,'',1,0,'C');
    }
    elseif ($endo['verification_status'] == '1'){
        $pdf->SetFont('ZapfDingbats', '', 12);
        $pdf->Cell(20 ,5,'',1,0,'C');
        $pdf->Cell(20 ,5,chr(51),1,0,'C');
        $pdf->Cell(20 ,5,'',1,0,'C');
        $pdf->Cell(20 ,5,'',1,0,'C');
        $pdf->Cell(20 ,5,'',1,0,'C');
    }
    elseif ($endo['verification_status'] == '2'){
        $pdf->SetFont('ZapfDingbats', '', 12);
        $pdf->Cell(20 ,5,'',1,0,'C');
        $pdf->Cell(20 ,5,'',1,0,'C');
        $pdf->Cell(20 ,5,chr(51),1,0,'C');
        $pdf->Cell(20 ,5,'',1,0,'C');
        $pdf->Cell(20 ,5,'',1,0,'C');
    }
    elseif ($endo['verification_status'] == '3'){
        $pdf->SetFont('ZapfDingbats', '', 12);
        $pdf->Cell(20 ,5,'',1,0,'C');
        $pdf->Cell(20 ,5,'',1,0,'C');
        $pdf->Cell(20 ,5,'',1,0,'C');
        $pdf->Cell(20 ,5,chr(51),1,0,'C');
        $pdf->Cell(20 ,5,'',1,0,'C');
    }

    $pdf->SetFont('Century Gothic','B',8);
    if ($endo['verification_code'] == '0'){
        $pdf->setFillColor(60,179,113);
        $pdf->Cell(20 ,5,'CLEARED',1,0,'C',1);
    }
    elseif ($endo['verification_code'] == '1'){
        $pdf->setFillColor(255,191,0);
        $pdf->Cell(20 ,5,'FOR REVIEW',1,0,'C', 1);
    }
    elseif ($endo['verification_code'] == '2'){
        $pdf->setFillColor(210,43,43);
        $pdf->Cell(20 ,5,'FAILED',1,0,'C',1);
    }

    $pdf->Cell(10 ,5,'',0,1);//end of line

    $pdf->SetFont('Century Gothic','BU',8);
    $pdf->Cell(50 ,4,'Recommendation /','LRT',0,'C');
    if ($endo['verification_code'] == '0'){
        $pdf->Cell(120 ,8,'CLEARED',1,0,'C');
    }
    elseif ($endo['verification_code'] == '1'){
        $pdf->Cell(120 ,8,'FOR REVIEW',1,0,'C');
    }
    elseif ($endo['verification_code'] == '2'){
        $pdf->Cell(120 ,8,'FAILED',1,0,'C');
    }
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(50 ,4,'Character Scale:','LRB',0,'C');
    $pdf->Cell(10 ,4,'',0,1);//end of line
    $pdf->Ln(4);

    $pdf->SetFont('Century Gothic','B',8);
    $pdf->Cell(42.5 ,4,'COLOR CODE:',1,0,'C');
    $pdf->setFillColor(60,179,113);
    $pdf->Cell(42.5 ,4,'CLEARED',1,0,'C',1);
    $pdf->setFillColor(255,191,0);
    $pdf->Cell(42.5 ,4,'FOR REVIEW',1,0,'C',1);
    $pdf->setFillColor(210,43,43); 
    $pdf->Cell(42.5 ,4,'FAILED',1,0,'C',1);
    $pdf->Cell(10 ,4,'',0,1);//end of line
    $pdf->Ln(4);

    $pdf->SetFont('Century Gothic','B',9);
    $pdf->Cell(100  ,4,'ANALYSIS REPORT',0,0,'L');
    $pdf->Cell(60  ,4,'',0,1,'C');//end of line

    $pdf->Cell(45 ,2,'',0,0);
    $pdf->Cell(10 ,2,'',0,1);//end of line

    $pdf->setFillColor(255,197,110);    
    $pdf->SetFont('Century Gothic','BU',17);
    $pdf->Cell(170,8,'CRIMINAL CHECK',1,0,'C',1);
    $pdf->Cell(10 ,8,'',0,1);//end of line

    $pdf->setFillColor(230,230,230); 
    $pdf->SetFont('Century Gothic','',8);
    $pdf->Cell(170,6,'Verification was made at the National Bureau of Investigation (NBI) showed the following results:',1,0,'L',1);
    $pdf->Cell(10 ,6,'',0,1);//end of line

    $pdf->Cell(40,5,'Findings:',1,0,'L');
    $pdf->SetFont('Century Gothic','B',8);
    $pdf->Cell(130 ,5,$findings,1,0, 'L');
    $pdf->Cell(10 ,5,'',0,1);//end of line
    $pdf->Ln(4);

    $pdf->SetFont('Century Gothic','B',9);
    $pdf->Cell(20  ,4,'RISK LEVEL: ',0,0,'L');
    $pdf->Ln(4);

    $pdf->setFillColor(230,230,230); 
    $pdf->SetFont('Century Gothic','',8);
    $pdf->Cell(170,6,'Based on the General Information gathered at source and field, the subject is assessed with a LOW RISK LEVEL.',0,0,'L');
    $pdf->Ln(10);

    $pdf->SetFont('Century Gothic','B',9);
    $pdf->Cell(20  ,4,'CUSTOMER SERVICE: ',0,0,'L');
    $pdf->Ln(6);

    $pdf->setFillColor(230,230,230); 
    $pdf->SetFont('Century Gothic','',8);
    $pdf->Cell(170,5,'For Any Questions and Clarifications as to the result of this Background Investigation, please call Lendell Outsourcing','LRT',1,'L');
    $pdf->Cell(170,5,'Inc. at +632570 7915 or email us at info@lendell.ph.','LR',1,'L');
    $pdf->Cell(170,5,'We will be honored to reply.','LRB',0,'L');

    $pdf->Ln(4);

    $pdf->Output();
?>