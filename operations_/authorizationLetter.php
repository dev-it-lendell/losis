<?php
require('../fpdf17/fpdf.php');

//db connection
$servername = "localhost";
$username = "lendellp_losis";
$password = "Lendell2021";
$dbname = "lendellp_losis";
$conn = mysqli_connect($servername, $username, $password, $dbname);


$query = mysqli_query($conn,"SELECT a.id, a.application_code, a.client_id, a.endo_type, a.application_status, a.application_datetime, 
            CONCAT(b.fname_) AS ApplicantFname, CONCAT(b.mname_) AS ApplicantMname, CONCAT(b.lname_, ' ', b.suffix_) AS ApplicantLname,
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
                a.application_code = '".$_GET["applicationCode"]."'");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$applicationCode = $_GET["applicationCode"];
$year = date('Y');

// $directory = "../application_documents/{$year}/MOD/{$applicationCode}/e-signature";
// $images = glob("$directory/*.{jpg,png,bmp}", GLOB_BRACE);

// if ($opendir = opendir($directory)) {
// //reading directory
//     while (($file = readdir($opendir)) !== FALSE){
// 	    if ($file!="."&&$file!="..")
// 	        $signature = "{$directory}/{$file}";
//     }
// }

$LOA = mysqli_fetch_array($query);
$image = "../images/lendell/logo-2.png";

$originalDate = $LOA['birthdate_'];
$newDate = date("F d, Y", strtotime($originalDate));

$applicationDate = $LOA['application_datetime'];
$newApplicationDate = date("F d, Y", strtotime($applicationDate));

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');
$pdf->setFillColor(169,169,169); 

$pdf->AddPage();

//Cell(width , height , text , border , end line , [align] )
$pdf->Image($image, 21, null, 20);
// $pdf->Image($signature, 30,132,30,0);

$pdf->Cell(190	,6,'',0,1);
$pdf->Cell(10	,6,'',0,0);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(190	,6,'INFORMATION RELEASE FORM:',0,1);

$pdf->Cell(190	,6,'',0,1);
$pdf->Cell(10	,6,'',0,0);
$pdf->SetFont('Arial','',11);
$pdf->Cell(190	,6,'To Whom it May Concern;',0,1);

$pdf->Cell(190	,5,'',0,1);

$pdf->Cell(10	,6,'',0,0);
$pdf->Cell(5	,6,'I',0,0);
$pdf->Cell(54	,6,$LOA['ApplicantLname'],0,0, C);
$pdf->Cell(54	,6,$LOA['ApplicantFname'],0,0, C);
$pdf->Cell(54	,6,$LOA['ApplicantMname'],0,1, C);

$pdf->Cell(15	,6,'',0,0);
$pdf->Cell(54	,6,'Last Name',T,0, C);
$pdf->Cell(54	,6,'First Name',T,0, C);
$pdf->Cell(54	,6,'Middle Name',T,1, C);

$pdf->Cell(190	,6,'',0,1);
$pdf->Cell(10	,6,'',0,0);
$pdf->SetFont('Arial','',11);
$pdf->MultiCell(170, 6, 'I hereby authorize Lendell Outsourcing Solutions, Inc. and/or their authorized representatives to verify information presented in my application form and resume in relation to the following: ', '0',false);
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
$pdf->MultiCell(179, 6, 'I hereby grant authority for the bearer of this letter to access or be provided with full details. ', '0',false);

$pdf->Cell(20	,8,'',0,1);

$pdf->Cell(10	,6,'',0,0);
$pdf->Cell(60	,6,$LOA['Full_name'],0,0, C);
$pdf->Cell(40	,6,'',0,0);
$pdf->Cell(50	,6,$newApplicationDate,0,1, C);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(10	,6,'',0,0);
$pdf->Cell(60	,6,'Signature over Printed Name',T,0, C);
$pdf->Cell(40	,6,'',0,0);
$pdf->Cell(50	,6,'Date (Month/Day/Year)',T,1, C);

$pdf->Cell(20	,9,'',0,1);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(10	,6,'',0,0);
$pdf->Cell(26	,6,'Date of Birth: ',0,0);
$pdf->SetFont('Arial','U',11);
$pdf->Cell(40	,6,$newDate,0,1);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(10	,6,'',0,0);
$pdf->Cell(35	,6,'Identification Number: ',0,0);
$pdf->SetFont('Arial','U',11);
$pdf->Cell(40	,6,'',0,1);

$pdf->Cell(190	,2,'',0,1);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(20	,6,'',0,0);
$pdf->Cell(60	,6,'* UMID',0,1);
$pdf->Cell(20	,6,'',0,0);
$pdf->Cell(60	,6,'* SSS',0,1);
$pdf->Cell(20	,6,'',0,0);
$pdf->Cell(60	,6,'* PHILHEALTH',0,1);
$pdf->Cell(20	,6,'',0,0);
$pdf->Cell(60	,6,'* HDMF / PAG-IBIG',0,1);
$pdf->Cell(20	,6,'',0,0);
$pdf->Cell(60	,6,'* VOTERS ID',0,1);
$pdf->Cell(20	,6,'',0,0);
$pdf->Cell(60	,6,'* POSTAL ID',0,1);

$pdf->Cell(190	,9,'',0,1);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(10	,6,'',0,0);
$pdf->Cell(170	,6,'PRIVACY POLICY',1,0, C);
$pdf->Cell(10	,6,'',0,1);

$pdf->SetFont('Arial','',10);
$pdf->Cell(10	,6,'',0,0);
$pdf->MultiCell(170, 6, 'Lendell Outsourcing Solutions, Inc. respects and is committed to maintaining the privacy of all individuals who provide personal information to us. Ledells Privacy Policy governs how to deal with the collection, security, quality, use and disclosure of personal information in compliance with the Data Privacy Act of 2011 or the Republic Act No. 10173.', '1',C);
$pdf->Cell(10	,6,'',0,1);

//Footer
$pdf->SetFont('Arial','B',9);
$pdf->Cell(180	,6,'LENDELL OUTSOURCING SOLUTIONS, INC.',0,1,'C');//end of line
$pdf->SetFont('Arial','',9);
$pdf->Cell(180	,5,'Unit GF10, Citynet1, 183 EDSA Brgy. Wack-Wack, Greenhills East, Mandaluyong City, Philippines 1555',0,1,'C');//end of line
$pdf->Cell(180	,5,'8365-7601 | info@lendell.ph | info.lendell@gmail.com | www.lendell.ph',0,1,'C');//end of line

$pdf->Output();
?>




