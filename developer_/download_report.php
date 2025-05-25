<?php
    require '../fpdf17/fpdf.php';
    require '../fpdf17/rotation.php';
    require '../connect.php';

    $query = mysqli_query($conn,"SELECT id, endo_code, fname, mname, lname, birthdate FROM tbl_report_criminal_check WHERE endo_code = '".$_GET['endoCode']."'"); 
    if (!$query) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    $row = mysqli_fetch_array($query);
    $rowDate = $row['endo_date'];
    $Newendodate = date("F d, Y", strtotime($rowDate));
    $birthDate = $row['birthdate'];
    $NewbirthDate = date("F d, Y", strtotime($birthDate));
    $dateSubmitted = $row['endo_submitted'];
    $NewdateSubmitted = date("F d, Y", strtotime($dateSubmitted));
    $findings = 'NO CASE FOUND ON FILE.';
    $recommendation = 'CLEARED';

    class PDF extends FPDF
    {

    function Header()
    {   
        // Put the watermark
        $this->SetFont('Arial','B',50);
        $this->SetTextColor(255,192,203);
        // $this->RotatedText(35,190,'W a t e r m a r k   d e m o',45);
        
        $signature1 = "../images/lendell/Jan.png";
        $signature2 = "../images/lendell/Alyssa.png";
        $this->Image($signature1, 28,206,18,0,'PNG');
        $this->Image($signature2, 162,202,9,0,'PNG');
        $image = "../images/lendell/logo-2.png";
        $this->Image($image, 23,8,19,0,'PNG');
        $this->Cell(140);
        $this->Cell(30,8,'',0,1,'R');
        $this->Cell(140);
        $this->SetFont('Century Gothic','B',7);
        $this->Cell(30,4,'CONFIDENTIAL',0,1,'R');
        $this->Cell(140);
        $this->SetFont('Century Gothic','',7);
        $this->Cell(30,4,'BACKGROUND CHECK REPORT',0,1,'R');
        $this->Cell(140);
        $this->Cell(30,4,'Doc. No.: LOSI-0074 Code: LOSI-BAC-0074',0,1,'R');
        $this->Cell(140);
        $this->Cell(30,4,'S. No. SN-0001 V. No.: VN-0001 RV. No. RVN-0001',0,1,'R');
        $this->Ln(10);
    }
    
    function RotatedText($x, $y, $txt, $angle)
    {
        //Text rotated around its origin
        $this->Rotate($angle,$x,$y);
        $this->Text($x,$y,$txt);
        $this->Rotate(0);
    }

    function Footer()
    {
        $this->SetY(-25);
        $this->SetFont('Century Gothic','',8);
        $this->Cell(0,3,'LENDELL OUTSOURCING SOLUTIONS, INC.',0,1,'C');
        $this->SetFont('Century Gothic','',8);
        $this->Cell(0,4,'Unit GF10, CITYNET1, 183 EDSA Brgy. Wack-Wack, Greenhills East, Mandaluyong City, Philippines 1555',0,1,'C');
        $this->Cell(0,3,'8365-7601 | info@lendell.ph | www.lendell.ph',0,1,'C');
        }
    }
    
    $pdf = new PDF('P','mm','A4');
    $pdf->AddFont('Century Gothic','','CenturyGothic.php'); //Regular
    $pdf->AddFont('Century Gothic','B','CenturyGothicBold.php'); //Bold
    $pdf->AddFont('Century Gothic','I','CenturyGothicItalic.php'); //Italic
    $pdf->AddFont('Century Gothic','BI','CenturyGothicBoldItalic.php');//Bold_Italic
    $pdf->SetMargins(23, 1, 23);
    $pdf->SetAutoPageBreak(false);
    $pdf->AddPage();

    $pdf->setFillColor(224,220,220); 
    $pdf->SetFont('Century Gothic','B',8);

    $pdf->Cell(40,4,'Last Name: ',1,0,'L',1);
    $pdf->Cell(130 ,4,$row['lname'],1,0, 'L');
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(40,4,'First Name: ',1,0,'L',1);
    $pdf->Cell(130 ,4,$row['fname'],1,0, 'L');
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(40,4,'Middle Name: ',1,0,'L',1);
    $pdf->Cell(130 ,4,$row['mname'],1,0, 'L');
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(40,4,'Reference Code: ',1,0,'L',1);
    $pdf->Cell(130 ,4,$row['endo_code'],1,0, 'L');
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(40,4,'Site: ',1,0,'L',1);
    $pdf->Cell(130 ,4,'N/A',1,0, 'L');
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(40,4,'Requestor: ',1,0,'L',1);
    $pdf->Cell(130 ,4,'Juvia Joy Panes',1,0, 'L');
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(40,4,'Date of Birth: ',1,0,'L',1);
    $pdf->Cell(130 ,4,$NewbirthDate,1,0, 'L');
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(40,4,'Date Requested: ',1,0,'L',1);
    $pdf->Cell(130 ,4,'June 03, 2024','R',0, 'L');
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(40,4,'Date Submitted: ',1,0,'L',1);
    $pdf->Cell(130 ,4,'June 04, 2024',1,0, 'L');
    $pdf->Cell(10 ,4,'',0,1);//end of line

    $pdf->Cell(70   ,4,'',0,0);
    $pdf->Cell(56   ,4,'',0,0);
    $pdf->Cell(63.3 ,4,'',0,1);//end of line

    $pdf->SetFont('Century Gothic','B',9);
    $pdf->Cell(170   ,5,'FOR THE EXCLUSIVE USE OF CONCENTRIX CVG PHILIPPINES, INC.',1,0, 'C',1);
    $pdf->Cell(10 ,5,'',0,1);//end of line
    $pdf->Ln(2);

    $pdf->Cell(170  ,1,'',1,0, 'C', 1);
    $pdf->Cell(10 ,1,'',0,1);//end of line
    $pdf->Ln(4);

    $pdf->SetFont('Century Gothic','B',9);
    $pdf->Cell(100  ,4,'COMPREHENSIVE ASSESSMENT',0,1,'L');
    $pdf->Ln(3);

    $pdf->SetFont('Century Gothic','B',8);
    $pdf->Cell(25 ,4,'Verification','LRT',0,'C',1);
    $pdf->Cell(25 ,4,'Information','LRT',0,'C',1);
    $pdf->Cell(80 ,4,'Verification Status',1,0,'C',1);
    $pdf->Cell(20 ,8,'Date Closed',1,0,'C',1);//end of line
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
    $pdf->SetFont('ZapfDingbats', '', 12);
    $pdf->Cell(20 ,5,chr(51),1,0,'C');
    $pdf->Cell(20 ,5,'',1,0,'C');
    $pdf->Cell(20 ,5,'',1,0,'C');
    $pdf->Cell(20 ,5,'',1,0,'C');
    $pdf->SetFont('Century Gothic','B',8);
    $pdf->Cell(20 ,5,'06/04/2024',1,0,'C');

    $pdf->SetFont('Century Gothic','B',8);
    $pdf->setFillColor(8,180,84);
    $pdf->Cell(20 ,5,'CLEARED',1,0,'C',1);
    $pdf->Cell(10 ,5,'',0,1);//end of line

    $pdf->SetFont('Century Gothic','B',8);
    $pdf->Cell(50 ,4,'Recommendation /','LRT',0,'C');
    $pdf->SetFont('Century Gothic','BU',8);
    $pdf->Cell(120 ,8,'CLEARED',1,0,'C');
    $pdf->Cell(10 ,4,'',0,1);//end of line
    $pdf->SetFont('Century Gothic','B',8);
    $pdf->Cell(50 ,4,'Character Scale:','LRB',0,'C');
    $pdf->Cell(10 ,4,'',0,1);//end of line
    $pdf->Ln(4);

    $pdf->SetFont('Century Gothic','B',8);
    $pdf->Cell(42.5 ,4,'COLOR CODE:',1,0,'C');
    $pdf->setFillColor(8,180,84);
    $pdf->Cell(42.5 ,4,'CLEARED',1,0,'C',1);
    $pdf->setFillColor(256,196,4);
    $pdf->Cell(42.5 ,4,'FOR REVIEW',1,0,'C',1);
    $pdf->setFillColor(256,4,4); 
    $pdf->Cell(42.5 ,4,'FAILED',1,0,'C',1);
    $pdf->Cell(10 ,4,'',0,1);//end of line
    $pdf->Ln(4);

    $pdf->SetFont('Century Gothic','B',9);
    $pdf->Cell(100  ,4,'ANALYSIS REPORT',0,0,'L');
    $pdf->Cell(60  ,4,'',0,1,'C');//end of line

    $pdf->Cell(45 ,2,'',0,0);
    $pdf->Cell(10 ,2,'',0,1);//end of line

    $pdf->setFillColor(256,188,140);    
    $pdf->SetFont('Century Gothic','BU',17);
    $pdf->Cell(170,8,'CRIMINAL CHECK',1,0,'C',1);
    $pdf->Cell(10 ,8,'',0,1);//end of line

    $pdf->setFillColor(255,255,255); 
    $pdf->SetFont('Century Gothic','',8);
    $pdf->Cell(170,6,'Verification was made at the National Bureau of Investigation (NBI) showed the following results:',1,0,'L',1);
    $pdf->Cell(10 ,6,'',0,1);//end of line

    $pdf->SetFont('Century Gothic','B',8);
    $pdf->Cell(40,5,'Findings:',1,0,'L');
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

    $pdf->setFillColor(256,188,140);    
    $pdf->SetFont('Century Gothic','BU',17);
    $pdf->Cell(170,8,'PRIVACY POLICY',1,0,'C',1);
    $pdf->Cell(10 ,8,'',0,1);//end of line

    // $pdf->setFillColor(230,230,230); 
    $pdf->SetFont('Century Gothic','',8);
    $pdf->MultiCell(170,4.5,"Lendell Outsourcing Solutions, Inc. respects and is committed to maintaining the privacy of all individuals who provide personal information to us. Lendell's Privacy Policy governs how to deal with the collection, security, quality, use, and disclosure of personal information in compliance with the Data Privacy Act of 2012 or the Republic Act No. 10173." ,1,'L',false);
    $pdf->Cell(10 ,6,'',0,1);//end of line
    
    $pdf->SetFont('Century Gothic','',8);
    $pdf->Cell(63.3	,10,'Prepared by:',0,0);
    $pdf->Cell(63.3	,5,'',0,'C');
    $pdf->Cell(63.3	,10,'Noted by:',0,1,'L');//end of line
    
    $pdf->Cell(63.3,8,'',0,0);
    $pdf->Cell(63.3	,8,'',0,'C');
    $pdf->Cell(63.3,8,'',0,1);
    
    $pdf->SetFont('Century Gothic','B',8);
    $pdf->Cell(63.3	,5,'Ms. Jan Therese F. Diaz',0,0);
    $pdf->Cell(63.3	,5,'',0,'C');
    $pdf->Cell(63.3	,5,'Ms. Alyssa Ellen Jarquio',0,1,'L');//end of line
    
    $pdf->SetFont('Century Gothic','',8);
    $pdf->Cell(63.3	,5,'Data Analyst',0,0);
    $pdf->Cell(63.3	,5,'',0,'C');
    $pdf->Cell(63.3	,5,'Accounts Officer / POC',0,1,'L');//end of line

    $pdf->Ln(4);

    $pdf->Output();
?>