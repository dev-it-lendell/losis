<?php
require('fpdf17/fpdf.php');

//db connection
// $servername = "localhost";
// $username = "lendellp_losis";
// $password = "Lendell2021";
// $dbname = "lendellp_losis";
// $conn = mysqli_connect($servername, $username, $password, $dbname);


// $query = mysqli_query($conn,"SELECT * FROM application_list");

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// $billing = mysqli_fetch_array($query);
$image = "images/lendell/logo-2.png";

// $originalDate = $billing['invoice_date'];
// $newDate = date("F d, Y", strtotime($originalDate));

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');
$pdf->setFillColor(169,169,169); 

$pdf->AddPage();

// Logo
$pdf->Image($image, 20, 10, 20);

// Set font for the main title
$pdf->SetFont('Arial', '', 8);
$pdf->SetXY(45, 12);
$pdf->Cell(0, 4, 'WAIVER/AUTHORIZATION LETTER TO CONDUCT VERIFICATION', 0, 1, 'R');

// Set font for additional information
$pdf->SetFont('Arial', '', 8);
$pdf->SetXY(35, 16);
$pdf->Cell(0, 4, 'Doc. No.: LOSI-0070 Code: LOSI-WAU-0070', 0, 1, 'R');
$pdf->SetXY(35, 20);
$pdf->Cell(0, 4, 'S. No: SN-0001 V. No.: VN-0001 RV. No.: RVN-0001', 0, 1, 'R');

// Reset position for the rest of the content
$pdf->SetXY(10, 30);

//Cell(width , height , text , border , end line , [align] )
$pdf->Ln(5);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(10	,6,'',0,0);
$pdf->Cell(190	,6,'INFORMATION RELEASE FORM:',0,1);

$pdf->Cell(190	,6,'',0,1);
$pdf->Cell(10	,6,'',0,0);
$pdf->SetFont('Arial','',11);
$pdf->Cell(190	,6,'To Whom it May Concern;',0,1);

$pdf->Cell(190	,5,'',0,1);

$pdf->Cell(10	,6,'',0,0);
$pdf->Cell(3	,6,'I',0,0);
$pdf->Cell(54	,6,'',0,0, 'C');
$pdf->Cell(54	,6,'',0,0, 'C');
$pdf->Cell(54	,6,'',0,1, 'C');

$pdf->Cell(15	,6,'',0,0);
$pdf->Cell(54	,6,'Last Name','T',0, 'C');
$pdf->Cell(54	,6,'First Name','T',0, 'C');
$pdf->Cell(54	,6,'Middle Name','T',1, 'C');

$pdf->Cell(190	,6,'',0,1);
$pdf->Cell(10	,6,'',0,0);
$pdf->SetFont('Arial','',11);
$pdf->MultiCell(170, 6, 'I hereby authorize Lendell Outsourcing Solutions, Inc. and/or their authorized representatives to verify information presented in my application form and resume in relation to the following: ', '0','L');
$pdf->Cell(100	,6,'',0,1);

$pdf->Cell(20	,6,'',0,0);
$pdf->Cell(45	,6,'a. Academic Record',0,1);

$pdf->Cell(20	,6,'',0,0);
$pdf->Cell(45	,6,'b. Employment History',0,1);

$pdf->Cell(20	,6,'',0,0);
$pdf->Cell(45	,6,'c. Personal Information',0,1);

$pdf->Cell(190	,5,'',0,1);

$pdf->Cell(10	,6,'',0,0);
$pdf->Cell(20	,6,'to procure a verification report for that purpose.',0,1);

$pdf->Cell(190	,5,'',0,1);

$pdf->Cell(10	,6,'',0,0);
$pdf->MultiCell(179, 6, 'I hereby grant authority for the bearer of this letter to access or be provided with full details. ', '0','L');

$pdf->Cell(20	,8,'',0,1);

$pdf->Cell(10	,6,'',0,0);
$pdf->Cell(60	,6,'',0,0, 'C');
$pdf->Cell(40	,6,'',0,0);
$pdf->Cell(50	,6,'',0,1, 'C');

$pdf->SetFont('Arial','',11);
$pdf->Cell(10	,6,'',0,0);
$pdf->Cell(60	,6,'Signature over Printed Name','T',0, 'C');
$pdf->Cell(40	,6,'',0,0);
$pdf->Cell(50	,6,'Date (Month/Day/Year)','T',1, 'C');

$pdf->Cell(20	,9,'',0,1);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(10	,6,'',0,0);
$pdf->Cell(28	,6,'Date of Birth: ',0,0);
$pdf->SetFont('Arial','U',11);
$pdf->Cell(40	,6,'',0,1);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(10	,6,'',0,0);
$pdf->Cell(35	,6,'Identification Number: ',0,0);
$pdf->SetFont('Arial','U',11);
$pdf->Cell(40	,6,'',0,1);

$pdf->Cell(190	,2,'',0,1);

$pdf->SetFont('Arial','',10);
$checkbox_size = 4;
$spacing = 3;

$pdf->Cell(20	,6,'',0,0);
$pdf->Cell(10	,6,'',0,0);
$pdf->Cell($checkbox_size, $checkbox_size, '', 1, 0, 'L', false);
$pdf->Cell($spacing, 6, '', 0, 0);
$pdf->Cell(60	,6,'UMID',0,1);

$pdf->Cell(20	,6,'',0,0);
$pdf->Cell(10	,6,'',0,0);
$pdf->Cell($checkbox_size, $checkbox_size, '', 1, 0, 'L', false);
$pdf->Cell($spacing, 6, '', 0, 0);
$pdf->Cell(60	,6,'SSS',0,1);

$pdf->Cell(20	,6,'',0,0);
$pdf->Cell(10	,6,'',0,0);
$pdf->Cell($checkbox_size, $checkbox_size, '', 1, 0, 'L', false);
$pdf->Cell($spacing, 6, '', 0, 0);
$pdf->Cell(60	,6,'PHILHEALTH',0,1);

$pdf->Cell(20	,6,'',0,0);
$pdf->Cell(10	,6,'',0,0);
$pdf->Cell($checkbox_size, $checkbox_size, '', 1, 0, 'L', false);
$pdf->Cell($spacing, 6, '', 0, 0);
$pdf->Cell(60	,6,'HDMF / PAG-IBIG',0,1);

$pdf->Cell(20	,6,'',0,0);
$pdf->Cell(10	,6,'',0,0);
$pdf->Cell($checkbox_size, $checkbox_size, '', 1, 0, 'L', false);
$pdf->Cell($spacing, 6, '', 0, 0);
$pdf->Cell(60	,6,'VOTER\'S ID',0,1);

$pdf->Cell(20	,6,'',0,0);
$pdf->Cell(10	,6,'',0,0);
$pdf->Cell($checkbox_size, $checkbox_size, '', 1, 0, 'L', false);
$pdf->Cell($spacing, 6, '', 0, 0);
$pdf->Cell(60	,6,'POSTAL ID',0,1);

$pdf->Cell(190	,9,'',0,1);

$pdf->SetFont('Arial','B',11);
$pdf->SetFillColor(200, 200, 200);
$pdf->Cell(10	,6,'',0,0);
$pdf->Cell(170, 6, 'PRIVACY POLICY', 1, 1, 'C', true);

$pdf->SetFont('Arial','',10);
$pdf->Cell(10	,6,'',0,0);
$pdf->MultiCell(170, 6, 'Lendell Outsourcing Solutions, Inc. respects and is committed to maintaining the privacy of all individuals who provide personal information to us. Lendells Privacy Policy governs how to deal with the collection, security, quality, use and disclosure of personal information in compliance with the Data Privacy Act of 2011 or the Republic Act No. 10173.', '1','C');
$pdf->Cell(10	,6,'',0,1);

//Footer
$pdf->SetFont('Arial','B',9);
$pdf->Cell(180	,6,'LENDELL OUTSOURCING SOLUTIONS, INC.',0,1,'C');//end of line
$pdf->SetFont('Arial','',9);
$pdf->Cell(180	,5,'Unit GF10, Citynet1, 183 EDSA Brgy. Wack-Wack, Greenhills East, Mandaluyong City, Philippines 1555',0,1,'C');//end of line
$pdf->Cell(180	,5,'8365-7601 | info@lendell.ph | info.lendell@gmail.com | www.lendell.ph',0,1,'C');//end of line

$pdf->Output();
?>