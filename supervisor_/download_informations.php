<?php
    require '../fpdf17/fpdf.php';
    require '../connect.php';
	
// 	$query = mysqli_query($conn,"SELECT a.id, a.application_code, a.client_id, a.endo_type, a.application_status, 
//         CONCAT(b.fname_, ' ', b.mname_, ' ', b.lname_, ' ', b.suffix_) AS Full_name, 
//         b.birthdate_, b.mobile_no, b.landline_no, b.email_addr, b.sss_no, 
//         b.present_addr, b.permanent_addr, c.employer_, c.contact_no, c.job_title, 
//         c.start_date, c.end_date, c.emp_addr, c.chk_currently_emp, d.school_name,
//         CONCAT(d.school_name, ' ', d.course_name, ' (', d.date_graduated, ') ', d.school_address) AS College_Info, 
//         CONCAT(e.school_name, ' (', e.date_graduated, ') ', e.school_address) AS Highschool_Info, 
//         CONCAT(f.school_name, ' (', f.date_graduated, ') ', f.school_address) AS Elementary_Info, 
//         CONCAT(g.school_name, ' ', g.course_name, ' ', g.date_graduated, ' ', g.school_address) AS Vocational_Info, 
//         CONCAT(h.school_name, ' ', h.course_name, ' ', h.date_graduated, ' ', h.school_address) AS Other_School_Info
//         FROM application_list AS a 
//         LEFT JOIN application_personal_info AS b ON a.application_code = b.application_code 
//         LEFT JOIN application_emp_history AS c ON a.application_code = c.application_code 
//         LEFT JOIN application_college AS d ON a.application_code = d.application_code
//         LEFT JOIN application_highschool AS e ON a.application_code = e.application_code
//         LEFT JOIN application_elementary AS f ON a.application_code = f.application_code
//         LEFT JOIN application_vocational AS g ON a.application_code = g.application_code
//         LEFT JOIN application_other_school AS h ON a.application_code = h.application_code
//         WHERE a.application_code = '".$_GET['applicationCode']."'");

    $query = mysqli_query($conn, "SELECT a.id, a.application_code, a.client_id, a.endo_type, a.application_status, 
            CONCAT(b.fname_, ' ', b.mname_, ' ', b.lname_, ' ', b.suffix_) AS Full_name, 
            b.birthdate_, b.mobile_no, b.landline_no, b.email_addr, b.sss_no, 
            b.present_addr, b.permanent_addr, c.employer_, c.contact_no, c.job_title, 
            c.start_date, c.end_date, c.emp_addr, c.chk_currently_emp, d.school_name,
            CONCAT(d.school_name, ' ', d.course_name, ' (', d.date_graduated, ') ', d.school_address) AS College_Info, 
            CONCAT(e.school_name, ' (', e.date_graduated, ') ', e.school_address) AS Highschool_Info, 
            CONCAT(f.school_name, ' (', f.date_graduated, ') ', f.school_address) AS Elementary_Info, 
            CONCAT(g.school_name, ' ', g.course_name, ' ', g.date_graduated, ' ', g.school_address) AS Vocational_Info, 
            CONCAT(h.school_name, ' ', h.course_name, ' ', h.date_graduated, ' ', h.school_address) AS Other_School_Info,
            CONCAT(i.school_name, ' ', i.track_strand, ' (', i.date_graduated, ') ', i.school_address) AS SHS_Info
            FROM application_list AS a 
            LEFT JOIN application_personal_info AS b ON a.application_code = b.application_code 
            LEFT JOIN application_emp_history AS c ON a.application_code = c.application_code 
            LEFT JOIN application_college AS d ON a.application_code = d.application_code
            LEFT JOIN application_highschool AS e ON a.application_code = e.application_code
            LEFT JOIN application_elementary AS f ON a.application_code = f.application_code
            LEFT JOIN application_vocational AS g ON a.application_code = g.application_code
            LEFT JOIN application_other_school AS h ON a.application_code = h.application_code
            LEFT JOIN application_shs AS i ON a.application_code = i.application_code
            WHERE a.application_code = '".$_GET['applicationCode']."'"); 

        
        
    $sqlCharacterRef = "SELECT *, CONCAT(fname_, ' ', mname_, ' ', lname_, ' ', suffix_) AS CharRefName FROM application_char_reference WHERE application_code = '".$_GET['applicationCode']."'";
    $CharacterRefresult = mysqli_query($conn,$sqlCharacterRef);
    
    $sqlEmployment = "SELECT * FROM application_emp_history WHERE application_code = '".$_GET['applicationCode']."'";
    $Employmentresult = mysqli_query($conn,$sqlEmployment);
    
    $sqlNeigborhoodRef = "SELECT *, CONCAT(fname_, ' ', mname_, ' ', lname_, ' ', suffix_) AS NeigRefName FROM application_neighbhood_reference WHERE application_code = '".$_GET['applicationCode']."'";
    $NeigborhoodRefresult = mysqli_query($conn,$sqlNeigborhoodRef);
        
    $sqlRelativeRef = "SELECT *, CONCAT(fname_, ' ', mname_, ' ', lname_, ' ', suffix_) AS RelRefName FROM application_relative_reference WHERE application_code = '".$_GET['applicationCode']."'";
    $RelativeRefresult  = mysqli_query($conn,$sqlRelativeRef);
        
    if (!$query) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    
    $applicantInfo = mysqli_fetch_array($query);
    $originalDate = $applicantInfo['birthdate_'];
    $newDate = date("F d, Y", strtotime($originalDate));

    class PDF extends FPDF
    {

    function Header()
    {
        // $this->SetFont('Century Gothic','',8);
        // $this->Cell(140);
        // $this->Cell(30,8,'',0,1,'R');
        // $this->Cell(140);
        // $this->Cell(30,4,'BACKGROUND CHECK REPORT',0,1,'R');
        // $this->Cell(140);
        // $this->Cell(30,4,'Doc. No.: LOSI-0074 Code: LOSI-BAC-0074',0,1,'R');
        // $this->Cell(140);
        // $this->Cell(30,4,'S. No. SN-0001 V. No.: VN-0001 RV. No. RVN-0001',0,1,'R');
        $this->Ln(5);
    }

    function Footer()
    {
        // $this->SetY(-15);
        // $this->SetFont('Century Gothic','',9);
        // $this->Cell(0,3,'LENDELL OUTSOURCING SOLUTIONS, INC.',0,1,'C');
        // $this->SetFont('Century Gothic','',8);
        // $this->Cell(0,3,'Unit 6D, 6th Floor, Globe Telecom Plaza Tower 1, Pioneer Street, corner Madison St., Mandaluyong City',0,1,'C');
        // $this->Cell(0,3,'8570-7915 | 8571-1358 | info@lendell.ph | info.lendell@gmail.com | www.lendell.ph',0,1,'C');
        }
    }

    $pdf = new PDF();
    $pdf->AddFont('Century Gothic','','CenturyGothic.php'); //Regular
    $pdf->AddFont('Century Gothic','B','CenturyGothicBold.php'); //Bold
    $pdf->AddFont('Century Gothic','I','CenturyGothicItalic.php'); //Italic
    $pdf->AddFont('Century Gothic','BI','CenturyGothicBoldItalic.php');//Bold_Italic
    $pdf->SetMargins(10, 1, 10);
    $pdf->SetAutoPageBreak(true,10);
    $pdf->AddPage();
    $image = "../images/lendell/logo-1.png";
    $pdf->Image($image, 65, null, 80);
    
    
    $pdf->Cell(190 ,5,'',0,1);
    $pdf->SetFont('Century Gothic','B',10);
    $pdf->Cell(190 ,5,'PERSONAL INFORMATION',0,1);
    
    //Personal Informations
    $pdf->Cell(190 ,3,'',0,1);
    $pdf->SetFont('Century Gothic','',9);
    $pdf->Cell(30	,5,'Applicant Name: ',0,0,'C');
    $pdf->SetFont('Century Gothic','B',9);
    $pdf->Cell(65	,5,$applicantInfo['Full_name'],0,0,'L');
    $pdf->SetFont('Century Gothic','',9);
    $pdf->Cell(30	,5,'Email Address: ',0,0,'L');
    $pdf->SetFont('Century Gothic','B',9);
    $pdf->Cell(65	,5,$applicantInfo['email_addr'],0,1,'L');
    
    $pdf->SetFont('Century Gothic','',9);
    $pdf->Cell(30	,5,'Birthdate: ',0,0,'L');
    $pdf->SetFont('Century Gothic','B',9);
    $pdf->Cell(65	,5,$newDate,0,0,'L');
    $pdf->SetFont('Century Gothic','',9);
    $pdf->Cell(30	,5,'SSS No.: ',0,0,'L');
    $pdf->SetFont('Century Gothic','B',9);
    $pdf->Cell(65	,5,$applicantInfo['sss_no'],0,1,'L');
    
    $pdf->SetFont('Century Gothic','',9);
    $pdf->Cell(30	,5,'Mobile Number: ',0,0,'L');
    $pdf->SetFont('Century Gothic','B',9);
    $pdf->Cell(65	,5,$applicantInfo['mobile_no'],0,0,'L');
    $pdf->SetFont('Century Gothic','',9);
    $pdf->Cell(30	,5,'Landline Number: ',0,0,'L');
    $pdf->SetFont('Century Gothic','B',9);
    $pdf->Cell(65	,5,$applicantInfo['landline_no'],0,1,'L');
    
    $pdf->SetFont('Century Gothic','',9);
    $pdf->Cell(30	,5,'Present Address: ',0,0,'L');
    $pdf->SetFont('Century Gothic','B',9);
    $pdf->MultiCell(160, 5, $applicantInfo['present_addr'], '0',false);
    
    $pdf->SetFont('Century Gothic','',8);
    $pdf->Cell(30	,5,'Permanent Address: ',0,0,'L');
    $pdf->SetFont('Century Gothic','B',9);
    $pdf->MultiCell(160, 5, $applicantInfo['permanent_addr'], '0',false);
    
    
    $pdf->Cell(190 ,5,'',0,1);
    $pdf->SetFont('Century Gothic','B',10);
    $pdf->Cell(190 ,5,'EDUCATIONAL BACKGROUND',0,1);
    $pdf->Cell(190 ,1,'',0,1);
    
    $pdf->SetFont('Century Gothic','B',8);
    $pdf->Cell(190 ,5,'Elementary',0,1);
    $pdf->Cell(190 ,1,'',0,1);
    $pdf->SetFont('Century Gothic','',8);
    $pdf->MultiCell(190, 5, $applicantInfo['Elementary_Info'], '0',false);
    $pdf->Cell(190 ,1,'',0,1);
    
    $pdf->SetFont('Century Gothic','B',8);
    $pdf->Cell(190 ,5,'Highschool',0,1);
    $pdf->Cell(190 ,1,'',0,1);
    $pdf->SetFont('Century Gothic','',8);
    $pdf->MultiCell(190, 5, $applicantInfo['Highschool_Info'], '0',false);
    $pdf->Cell(190 ,1,'',0,1);
    
     $pdf->SetFont('Century Gothic','B',8);
    $pdf->Cell(190 ,5,'Senior High School',0,1);
    $pdf->Cell(190 ,1,'',0,1);
    $pdf->SetFont('Century Gothic','',8);
    $pdf->MultiCell(190, 5, $applicantInfo['SHS_Info'], '0',false);
    $pdf->Cell(190 ,1,'',0,1);
    
    $pdf->SetFont('Century Gothic','B',8);
    $pdf->Cell(190 ,5,'College',0,1);
    $pdf->Cell(190 ,1,'',0,1);
    $pdf->SetFont('Century Gothic','',8);
    $pdf->MultiCell(190, 5, $applicantInfo['College_Info'], '0',false);
    $pdf->Cell(190 ,1,'',0,1);
    
    $pdf->SetFont('Century Gothic','B',8);
    $pdf->Cell(190 ,5,'Vocational',0,1);
    $pdf->Cell(190 ,1,'',0,1);
    $pdf->SetFont('Century Gothic','',8);
    $pdf->MultiCell(190, 5, $applicantInfo['Vocational_Info'], '0',false);
    $pdf->Cell(190 ,1,'',0,1);
    
    $pdf->SetFont('Century Gothic','B',8);
    $pdf->Cell(190 ,5,'Others',0,1);
    $pdf->Cell(190 ,1,'',0,1);
    $pdf->SetFont('Century Gothic','',8);
    $pdf->MultiCell(190, 5, $applicantInfo['Other_School_Info'], '0',false);
    $pdf->Cell(190 ,1,'',0,1);
    
    
    //Employment
    $pdf->Cell(190 ,2,'',0,1);
    $pdf->Cell(139 ,5,'',0,1);
    
    $pdf->SetFont('Century Gothic','B',10);
    $pdf->Cell(190 ,5,'EMPLOYMENT HISTORY:',0,1);
    $pdf->Cell(190 ,1,'',0,1);
    
    $pdf->SetFont('Century Gothic','B',8);
    $pdf->Cell(50	,5,'Employer',1,0,'C');
    $pdf->Cell(30	,5,'Contact No.',1,0,'C');
    $pdf->Cell(60	,5,'Job Title',1,0,'C');
    $pdf->Cell(25	,5,'Start Date',1,0,'C');
    $pdf->Cell(25	,5,'End Date',1,1,'C');
    
    
    while($EmploymentRow = mysqli_fetch_array($Employmentresult)) {
        
    // Set font for regular data (not bold)
    $pdf->SetFont('Century Gothic', '', 7);
    $pdf->Cell(50, 5, $EmploymentRow['employer_'], 1, 0); 
    $pdf->Cell(30, 5, $EmploymentRow['contact_no'], 1, 0); 
    $yBeforeMultiCell = $pdf->GetY();
    $pdf->MultiCell(60, 5, $EmploymentRow['job_title'], 1, 'L', false);
    $multiCellHeight = $pdf->GetY() - $yBeforeMultiCell;
    $pdf->SetXY(150, $yBeforeMultiCell);
    $pdf->Cell(25, $multiCellHeight, $EmploymentRow['start_date'], 1, 0, 'C');
    $pdf->Cell(25, $multiCellHeight, $EmploymentRow['end_date'], 1, 1, 'C'); // Move to next line after end date
    $pdf->SetFont('Century Gothic', 'B', 8);
    $pdf->Cell(50, 5, 'Employer Address', 1, 0, 'C');
    $pdf->SetFont('Century Gothic', '', 8);
    $pdf->MultiCell(140, 5, $EmploymentRow['emp_addr'], 1, 'L', false);
    $pdf->Cell(190, 3, '', 0, 1);
    
    }
    
    //Start here
    // while($EmploymentRow = mysqli_fetch_array($Employmentresult)) {
    //     $cellWidth = 110;//wrapped cell width
    // 	$cellHeight = 5;//normal one-line cell height
    	
    // 	//check whether the text is overflowing
    // 	if($pdf->GetStringWidth($EmploymentRow['itemName']) < $cellWidth){
    // 		//if not, then do nothing
    // 		$line = 1;
    // 	}else{
    // 		//if it is, then calculate the height needed for wrapped cell
    // 		//by splitting the text to fit the cell width
    // 		//then count how many lines are needed for the text to fit the cell
    		
    // 		$textLength = strlen($EmploymentRow['itemName']);	//total text length
    // 		$errMargin = 10;		//cell width error margin, just in case
    // 		$startChar = 0;		//character start position for each line
    // 		$maxChar = 0;			//maximum character in a line, to be incremented later
    // 		$textArray = array();	//to hold the strings for each line
    // 		$tmpString = "";		//to hold the string for a line (temporary)
    		
    // 		while($startChar < $textLength){ //loop until end of text
    // 			//loop until maximum character reached
    // 			while( 
    // 			$pdf->GetStringWidth( $tmpString ) < ($cellWidth-$errMargin) &&
    // 			($startChar+$maxChar) < $textLength ) {
    // 				$maxChar++;
    // 				$tmpString = substr($EmploymentRow['itemName'],$startChar,$maxChar);
    // 			}
    // 			//move startChar to next line
    // 			$startChar = $startChar+$maxChar;
    // 			//then add it into the array so we know how many line are needed
    // 			array_push($textArray,$tmpString);
    // 			//reset maxChar and tmpString
    // 			$maxChar = 0;
    // 			$tmpString = '';
    			
    // 		}
    // 		//get number of line
    // 		$line=count($textArray);
    		
    		
    // 		//Test Condition
    // // 		if ($line < 3){
    // // 		    $line = count($textArray);
    // // 		}
    // // 		else{
    // // 		    $line = count($textArray) -1;
    // // 		}
    // 	}
    	
    // 	//write the cells
    // 	$pdf->SetFont('Arial','',9);
    // 	$pdf->Cell(11,($line * $cellHeight),$EmploymentRow['quantity'],1,0, C); //adapt height to number of lines
    	
    // 	//use MultiCell instead of Cell
    // 	//but first, because MultiCell is always treated as line ending, we need to 
    // 	//manually set the xy position for the next cell to be next to it.
    // 	//remember the x and y position before writing the multicell
    // 	$xPos=$pdf->GetX();
    // 	$yPos=$pdf->GetY();
    // 	$pdf->MultiCell($cellWidth,$cellHeight,$EmploymentRow['itemName'],1, C);
    	
    // 	//return the position for next cell next to the multicell
    // 	//and offset the x with multicell width
    // 	$pdf->SetXY($xPos + $cellWidth , $yPos);
    // 	$pdf->Cell(21,($line * $cellHeight),number_format($EmploymentRow['price'], 2),1,0, C); //adapt height to number of lines
    // 	$pdf->Cell(49,($line * $cellHeight),number_format($EmploymentRow['total'], 2),1,1, C); //adapt height to number of lines	
    
    // }
    //End here
    
    //Character Reference
    $pdf->Cell(139 ,5,'',0,1);
    
    $pdf->SetFont('Century Gothic','B',10);
    $pdf->Cell(190 ,5,'CHARACTER REFERENCE/S:',0,1);
    $pdf->Cell(190 ,1,'',0,1);
    
    $pdf->SetFont('Century Gothic','B',8);
    $pdf->Cell(50	,5,'Full Name',1,0,'C');
    $pdf->Cell(40	,5,'Relationship',1,0,'C');
    $pdf->Cell(20	,5,'Contact No.',1,0,'C');
    $pdf->Cell(40	,5,'Comapny Name',1,0,'C');
    $pdf->Cell(40	,5,'Job Title',1,1,'C');
    
    while($CharacterRefRow = mysqli_fetch_array($CharacterRefresult)) {
        
        $pdf->SetFont('Century Gothic','',7);
        $pdf->Cell(50	,5,$CharacterRefRow['CharRefName'],'LB,RB',0);
        $pdf->Cell(40	,5,$CharacterRefRow['relationship_'],'LB,RB',0);
        $pdf->Cell(20	,5,$CharacterRefRow['contact_no'],'LB,RB',0);
        $pdf->Cell(40	,5,$CharacterRefRow['company_name'],'LB,RB',0);
        $pdf->Cell(40	,5,$CharacterRefRow['job_title'],'LB,RB',1);
        
    }
    
    //Neighborhood Reference
    $pdf->Cell(139 ,5,'',0,1);
    
    $pdf->SetFont('Century Gothic','B',10);
    $pdf->Cell(190 ,5,'NEIGHBORHOOD REFERENCE/S:',0,1);
    $pdf->Cell(190 ,1,'',0,1);
    
    $pdf->SetFont('Century Gothic','B',8);
    $pdf->Cell(65	,5,'Full Name',1,0,'C');
    $pdf->Cell(65	,5,'Relationship',1,0,'C');
    $pdf->Cell(60	,5,'Contact No.',1,1,'C');
    
    while($NeigborhoodRefRow = mysqli_fetch_array($NeigborhoodRefresult)) {
        
        $pdf->SetFont('Century Gothic','',8);
        $pdf->Cell(65	,5,$NeigborhoodRefRow['NeigRefName'],'LB,RB',0);
        $pdf->Cell(65	,5,$NeigborhoodRefRow['relationship_'],'LB,RB',0);
        $pdf->Cell(60	,5,$NeigborhoodRefRow['contact_no'],'LB,RB',1);
        
    }
    
    //Relative Reference
    $pdf->Cell(139 ,5,'',0,1);
    
    $pdf->SetFont('Century Gothic','B',10);
    $pdf->Cell(190 ,5,'RELATIVE REFERENCE/S:',0,1);
    $pdf->Cell(190 ,1,'',0,1);
    
    $pdf->SetFont('Century Gothic','B',8);
    $pdf->Cell(65	,5,'Full Name',1,0,'C');
    $pdf->Cell(65	,5,'Relationship',1,0,'C');
    $pdf->Cell(60	,5,'Contact No.',1,1,'C');
    
    while($RelativeRefRow = mysqli_fetch_array($RelativeRefresult)) {
        
        $pdf->SetFont('Century Gothic','',8);
        $pdf->Cell(65	,5,$RelativeRefRow['RelRefName'],'LB,RB',0);
        $pdf->Cell(65	,5,$RelativeRefRow['relationship_'],'LB,RB',0);
        $pdf->Cell(60	,5,$RelativeRefRow['contact_no'],'LB,RB',1);
        
    }

    $pdf->Ln(4);

    $pdf->Output();
?>