<?php
	include 'checking.php';

	switch ($_POST['form']) {
        // DASHBOARD //
        case 'showtotalendo':
            $sqlbi = "SELECT COUNT(id) AS totalendo FROM tbl_endo WHERE MONTH(endo_date) = MONTH(NOW()) AND YEAR(endo_date) = YEAR(NOW()) AND endorsed_to = '". $_SESSION['user_id'] ."'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(id) AS totalendo FROM tbl_endo_criminal WHERE MONTH(endo_date) = MONTH(NOW()) AND YEAR(endo_date) = YEAR(NOW()) AND endorsed_to = '". $_SESSION['user_id'] ."'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $totalbici = $row['totalendo'];
            $totaldc = $row1['totalendo']; 
            $totalEndo = $totalbici + $totaldc;
            echo $totalEndo;
        break;

        case 'showpendingendo':
            $sqlbi = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE MONTH(endo_date) = MONTH(NOW()) AND YEAR(endo_date) = YEAR(NOW()) AND endorsed_to = '". $_SESSION['user_id'] ."' AND endo_status = '0'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE MONTH(endo_date) = MONTH(NOW()) AND YEAR(endo_date) = YEAR(NOW()) AND endorsed_to = '". $_SESSION['user_id'] ."' AND endo_status = '0'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $pendbici = $row['pending']; 
            $penddc = $row1['pending']; 
            $totalpendingEndo = $pendbici + $penddc;
            echo $totalpendingEndo;
        break;

        case 'showonprocessendo':
            $sqlbi = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE MONTH(endo_date) = MONTH(NOW()) AND YEAR(endo_date) = YEAR(NOW()) AND endorsed_to = '". $_SESSION['user_id'] ."' AND endo_status = '1' OR endo_status = '2'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE MONTH(endo_date) = MONTH(NOW()) AND YEAR(endo_date) = YEAR(NOW()) AND endorsed_to = '". $_SESSION['user_id'] ."' AND endo_status = '1' OR endo_status = '2'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $onprocbici = $row['onprocess'];
            $onprocdc = $row1['onprocess']; 
            $totalprogEndo = $onprocbici + $onprocdc;
            echo $totalprogEndo;
        break;

        case 'showcompletedendo':
            $sqlbi = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE MONTH(endo_date) = MONTH(NOW()) AND YEAR(endo_date) = YEAR(NOW()) AND endorsed_to = '". $_SESSION['user_id'] ."' AND endo_status = '4'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE MONTH(endo_date) = MONTH(NOW()) AND YEAR(endo_date) = YEAR(NOW()) AND endorsed_to = '". $_SESSION['user_id'] ."' AND endo_status = '4'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $compbici = $row['completed']; 
            $compdc = $row1['completed']; 
            $totalcompletedEndo = $compbici + $compdc;
            echo $totalcompletedEndo; 
        break;

        case 'showprevtotalendo':
            $sqlbi = "SELECT COUNT(id) AS totalprevendo FROM tbl_endo WHERE YEAR(endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND endorsed_to = '". $_SESSION['user_id'] ."'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(id) AS totalprevendo FROM tbl_endo_criminal WHERE YEAR(endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND endorsed_to = '". $_SESSION['user_id'] ."'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $totalprevbici = $row['totalprevendo'];
            $totalprevdc = $row1['totalprevendo']; 
            $totalprevEndo = $totalprevbici + $totalprevdc;
            echo $totalprevEndo;
        break;

        case 'showprevpendingendo':
            $sqlbi = "SELECT COUNT(id) AS pendprevendo FROM tbl_endo WHERE YEAR(endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND endorsed_to = '". $_SESSION['user_id'] ."' AND endo_status = '0'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(id) AS pendprevendo FROM tbl_endo_criminal WHERE YEAR(endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND endorsed_to = '". $_SESSION['user_id'] ."' AND endo_status = '0'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $pendprevbici = $row['pendprevendo'];
            $pendprevdc = $row1['pendprevendo']; 
            $pendprevEndo = $pendprevbici + $pendprevdc;
            echo $pendprevEndo;
        break;

        case 'showprevonprocessendo':
            $sqlbi = "SELECT COUNT(id) AS onprocprevendo FROM tbl_endo WHERE YEAR(endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND endorsed_to = '". $_SESSION['user_id'] ."' AND endo_status = '1' OR endo_status = '2'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(id) AS onprocprevendo FROM tbl_endo_criminal WHERE YEAR(endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND endorsed_to = '". $_SESSION['user_id'] ."' AND endo_status = '1' OR endo_status = '2'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $onprocprevbici = $row['onprocprevendo'];
            $onprocprevdc = $row1['onprocprevendo']; 
            $onprocprevEndo = $onprocprevbici + $onprocprevdc;
            echo $onprocprevEndo;
        break;

        case 'showprevcompletedendo':
            $sqlbi = "SELECT COUNT(id) AS compprevendo FROM tbl_endo WHERE YEAR(endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND endorsed_to = '". $_SESSION['user_id'] ."' AND endo_status = '4'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(id) AS compprevendo FROM tbl_endo_criminal WHERE YEAR(endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND endorsed_to = '". $_SESSION['user_id'] ."' AND endo_status = '4'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $compprevbici = $row['compprevendo'];
            $compprevdc = $row1['compprevendo']; 
            $compprevEndo = $compprevbici + $compprevdc;
            echo $compprevEndo;
        break;

        case 'showholidaylist':
            $sql = "SELECT * FROM tbl_events WHERE date >= CURDATE() ORDER BY date ASC LIMIT 5";
            $result = mysqli_query($conn_lopis, $sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $_type = $row['holiday_type'];
                    $holiday_date = $row['date'];
                    $newHolidayDate = date('F d, Y', strtotime($holiday_date));
                    ?>
                        <li>
                            <div class="feeds-left"><img src="../images/icons/flag.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: 2px;"></div>
                            <div class="feeds-body ml-5">
                                <p style="font-weight: bold; font-size: 12px;"><?php echo $row['title']; ?><small class="float-right text-muted"><i class="fa fa-star"></i></small></p>
                                <small style="font-weight: bold; margin-top: -12px;"><?php echo $newHolidayDate; ?></small>
                            </div>
                        </li>
                    <?php
                }
            } else {
                ?>
                    <li>
                        <div class="feeds-left"><img src="../images/icons/flag.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: 2px;"></div>
                        <div class="feeds-body ml-5">
                            <p style="font-weight: bold; font-size: 11px;">No Data Available<small class="float-right text-muted"><i class="fa fa-star"></i></small></p>
                            <small style="font-weight: bold; margin-top: -12px;">No Holidays</small>
                        </div>
                    </li>
                <?php           
            }
        break;

        case 'showsupervisorlist':
            $sql = "SELECT a.supervisor_id, a.fname, a.mname, a.lname, a.suffix, a.position_, b.user_id, CONCAT(b.fname, ' ', b.lname, ' ', b.suffix) AS supervisorname, b.lname, b.assigned_team, b.user_image, c.team_no, c.team_name, d.user_id, d.userstatus_ FROM supervisor_list AS a LEFT JOIN tbl_supervisor AS b ON CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) = CONCAT(b.fname, ' ', b.mname, ' ', b.lname, ' ', b.suffix) LEFT JOIN team_list AS c ON b.assigned_team = c.team_no LEFT join tbl_users as d on b.user_id = d.user_id WHERE b.assigned_team = '$team_' AND b.user_id != '". $_SESSION['user_id'] ."' AND d.userstatus_ = '1' ORDER BY b.lname ASC LIMIT 5";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $user_id = $row['user_id'];
                    $user_image = $row['user_image'];
                    ?>
                        <li>
                            <?php
                                echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: 6px;"></div>';
                            ?>
                            <div class="feeds-body ml-5">
                                <p style="font-weight: bold; font-size: 11px;"><?php echo strtoupper($row['lname']). ', ' .$row['fname']. ' ' .$row['suffix']; ?><small class="float-right text-muted"><i class="fa fa-star"></i></small></p>
                                <small style="font-weight: bold; margin-top: -7px;"><?php echo $row['position_']; ?></small>
                            </div>
                        </li>
                    <?php
                }
            } else {
                ?>
                    <li>
                        <div class="feeds-left"><img src="../images/icons/default.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: 6px;"></div>
                        <div class="feeds-body ml-5">
                            <p style="font-weight: bold; font-size: 11px;">No Data Available<small class="float-right text-muted"><i class="fa fa-star"></i></small></p>
                            <small style="font-weight: bold; margin-top: -7px;">No Supervisors</small>
                        </div>
                    </li>
                <?php           
            }
        break;

        case 'showoperationslist':
            $sql = "SELECT a.operations_id, a.fname, a.mname, a.lname, a.suffix, a.position_, a.team_one, b.user_id, CONCAT(b.fname, ' ', b.lname, ' ', b.suffix) AS operationsname, b.lname, b.assigned_team_one, b.user_image, c.team_no, c.team_name, d.user_id, d.userstatus_ FROM operations_list AS a LEFT JOIN tbl_operations AS b ON CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) = CONCAT(b.fname, ' ', b.mname, ' ', b.lname, ' ', b.suffix) LEFT JOIN team_list AS c ON b.assigned_team_one = c.team_no LEFT JOIN tbl_users AS d ON b.user_id = d.user_id WHERE b.assigned_team_one = '$team_' AND d.userstatus_ = '1' ORDER BY b.lname ASC LIMIT 5";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $user_id = $row['user_id'];
                    $user_image = $row['user_image'];
                    ?>
                        <li>
                            <?php
                                echo '<div class="feeds-left"><img src="../profilepictures_/'.$user_id.'/'.$user_image.'" class="rounded-circle width35" alt="" style="width: 35px; margin-top: 6px;"></div>';
                            ?>
                            <div class="feeds-body ml-5">
                                <p style="font-weight: bold; font-size: 11px;"><?php echo strtoupper($row['lname']). ', ' .$row['fname']. ' ' .$row['suffix']; ?><small class="float-right text-muted"><i class="fa fa-star"></i></small></p>
                                <small style="font-weight: bold; margin-top: -7px;"><?php echo $row['position_']; ?></small>
                            </div>
                        </li>
                    <?php
                }
            } else {
                ?>
                    <li>
                        <div class="feeds-left"><img src="../images/icons/default.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: 6px;"></div>
                        <div class="feeds-body ml-5">
                            <p style="font-weight: bold; font-size: 11px;">No Data Available<small class="float-right text-muted"><i class="fa fa-star"></i></small></p>
                            <small style="font-weight: bold; margin-top: -7px;">No Supervisors</small>
                        </div>
                    </li>
                <?php           
            }
        break;

        // ENDORSEMENTS //

        // BACKGROUND INVESTIGATION //
        case 'showtotalbiapprv':
            $sql = "SELECT COUNT(id) AS approvalendo FROM tbl_endo WHERE MONTH(endo_date) = MONTH(NOW()) AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0' AND endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = MONTH(NOW()) AND YEAR(endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalApproval = $row['approvalendo'];
            echo $totalApproval;
        break;

        case 'showtotalbiassign':
            $sql = "SELECT COUNT(a.id) AS assigningendo, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.endo_code) AS endorsementcode, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment,  a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, CONCAT(a.client_id) AS clientuserid, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.fname,  ' ', b.mname,  ' ',  b.lname, ' ', b.suffix) AS clientname, b.company_name, b.user_position, b.site_id, b.team_, c.client_id, c.client_name, c.acronym_, c.site_, d.user_id, d.assigned_team, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname, e.endo_code FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id LEFT JOIN tbl_bi_assigned_specialist AS e ON a.endo_code = e.endo_code WHERE a.endo_status = '2' AND d.user_id = '". $_SESSION['user_id'] ."' AND e.endo_code IS NULL AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalAssigning = $row['assigningendo'];
            echo $totalAssigning;
        break;

        case 'showtotalbireturned':
            $sql = "SELECT COUNT(a.id) AS returnedendo, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_by, b.assigned_specialist, b.is_distributed, b.datetime_added, b.is_returned, b.datetime_returned, c.user_id, CONCAT(c.user_id) AS clientuserid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.id, f.return_code, f.endo_code, f.endo_remarks, f.is_cleared, f.assigned_supervisor, f.assigned_specialist, f.datetime_returned, CONCAT(f.datetime_returned) AS datetimereturned, f.datetime_cleared, f.datetime_added, g.user_id, CONCAT(g.user_id) AS operationsid, CONCAT(g.fname, ' ', g.mname, ' ', g.lname, ' ', g.suffix) AS operationsname FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_specialist AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_returned_supervisor AS f ON b.endo_code = f.endo_code LEFT JOIN tbl_operations AS g ON b.assigned_specialist = g.user_id WHERE a.endo_status = '2' AND a.endorsed_to = '".$_SESSION["user_id"]."' AND b.is_distributed = '0' AND b.is_returned = '1' AND f.is_cleared = '0' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalReturned = $row['returnedendo'];
            echo $totalReturned;
        break;

        case 'showtotalbireview':
            $sql = "SELECT COUNT(a.id) AS reviewendo, a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.assigned_by, b.assigned_supervisor, b.assigned_to, b.is_distributed, b.is_returned, b.datetime_added, c.user_id, CONCAT(c.user_id) AS clientid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.id, f.endo_code, f.assigned_by, f.assigned_da, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_supervisor AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_assigned_analyst AS f ON b.endo_code = f.endo_code WHERE a.endo_status = '3' AND a.endorsed_to = '".$_SESSION["user_id"]."'  AND a.is_for_review = '1' AND b.is_distributed = '0'  AND b.is_returned = '0' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalReview = $row['reviewendo'];
            echo $totalReview;
        break;

        case 'showtotalbimodify':
            $sql = "SELECT COUNT(a.id) AS modifyendo, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_by, b.assigned_client, b.is_distributed, b.datetime_added, b.is_returned, b.datetime_returned, c.user_id, CONCAT(c.user_id) AS clientuserid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.id, f.return_code, f.endo_code, f.endo_remarks, f.is_cleared, f.assigned_client, f.assigned_supervisor, f.datetime_returned, CONCAT(f.datetime_returned) AS datetimereturned, f.datetime_cleared, f.datetime_added, g.endo_id, g.file_name, g.report_datetime FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_client AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_returned_client AS f ON b.endo_code = f.endo_code LEFT JOIN tbl_bi_final_reports AS g ON a.endo_id = g.endo_id WHERE a.endo_status = '4' AND a.endorsed_to = '".$_SESSION["user_id"]."' AND b.is_distributed = '0' AND b.is_returned = '1' AND f.is_cleared = '0' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalModify = $row['modifyendo'];
            echo $totalModify;
        break;

        case 'returnedendobi':
            $endorsementcode = $_POST['endorsementcode'];
            $sql = "UPDATE tbl_bi_assigned_supervisor SET is_returned = '1', datetime_returned = NOW() WHERE endo_code = '". $_POST['endorsementcode']."'";
            $res = $conn->query($sql);
            $sql1 = "INSERT INTO tbl_bi_returned_analyst SET
                    endo_code = '". $_POST['endorsementcode']."',
                    endo_remarks = '". $_POST['returnremarks']."',
                    assigned_analyst = '". $_POST['analystcode']."',
                    assigned_supervisor = '". $_SESSION['user_id'] ."',
                    datetime_returned = NOW()";
            $res1 = $conn->query($sql1);
            if ($res1) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $returnsupervisorid = rand(1,99999);
                    $supervisorreturnuser_id = "RETURN-".$returnsupervisorid."-".$last_return_id;
                    $clientquery = "UPDATE tbl_bi_returned_analyst SET return_code = '". $supervisorreturnuser_id ."' WHERE id = '". $last_return_id ."'";
                    $resclientquery = $conn->query($clientquery);
                }
            }
            $sql2 = "INSERT INTO endorsement_logs SET
                    client_id = '". $_POST["clientcode"]."',
                    endo_code = '". $_POST['endorsementcode']."',
                    endo_action = 'Returning of Endorsement to Analyst',
                    assigned_poc = '". $_SESSION['user_id'] ."',
                    assigned_operations = '". $_POST['analystcode']."',
                    assigned_team = '$team_',
                    datetime_added = NOW()";
            $res2 = $conn->query($sql2);
            $sql3 = "INSERT INTO tbl_notifications SET
                    notif_subject = 'Background Investigation - $endorsementcode',
                    notif_text = 'Return Endorsement - Analyst',
                    notif_details = 'Success Returning of Endorsement',
                    notif_status = '0',
                    notif_datetime = NOW(),
                    notif_to = '". $_POST["analystcode"]."',
                    notif_from =    '". $_SESSION["user_id"]."'";     
            $res3 = $conn->query($sql3);
            $sql4 = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements - Background Investigation',
                    x_module_action = 'Returning of Endorsement'";
            $res4 = $conn->query($sql4);                           
            if ($res4) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

        // DATABASE CHECK //
        case 'showtotaldcapprv':
            $sql = "SELECT COUNT(id) AS approvalendo FROM tbl_endo_criminal WHERE MONTH(endo_date) = MONTH(NOW()) AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0' AND endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = MONTH(NOW()) AND YEAR(endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalApproval = $row['approvalendo'];
            echo $totalApproval;
        break;

        case 'showtotaldcassign':
            $sql = "SELECT COUNT(a.id) AS assigningendo, a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.endo_code) AS endorsementcode, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, CONCAT(a.client_id) AS clientuserid, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.user_id, CONCAT(b.fname,  ' ', b.mname,  ' ',  b.lname, ' ', b.suffix) AS clientname, b.company_name, b.user_position, b.site_id, b.team_, c.client_id, c.client_name, c.acronym_, c.site_, d.user_id, d.assigned_team, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname, e.endo_code FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id LEFT JOIN tbl_dc_assigned_analyst AS e ON a.endo_code = e.endo_code WHERE a.endo_status = '2' AND d.user_id = '".$_SESSION["user_id"]."' AND e.endo_code IS NULL AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalAssigning = $row['assigningendo'];
            echo $totalAssigning;
        break;

        case 'showtotaldcreturned':
            $sql = "SELECT COUNT(a.id) AS returnedendo, a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.endo_code, b.assigned_by, b.assigned_da, b.is_distributed, b.datetime_added, b.is_returned, b.datetime_returned, c.user_id, CONCAT(c.user_id) AS clientuserid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.id, f.endo_code, f.endo_remarks, f.is_cleared, f.assigned_supervisor, f.assigned_analyst, f.datetime_returned, CONCAT(f.datetime_returned) AS datetimereturned, f.datetime_cleared, f.datetime_added, g.user_id, CONCAT(g.user_id) AS operationsid, CONCAT(g.fname, ' ', g.mname, ' ', g.lname, ' ', g.suffix) AS operationsname FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_analyst AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_dc_returned_supervisor AS f ON b.endo_code = f.endo_code LEFT JOIN tbl_operations AS g ON b.assigned_da = g.user_id WHERE a.endo_status = '2' AND b.assigned_by = '".$_SESSION["user_id"]."' AND b.is_distributed = '0' AND b.is_returned = '1' AND f.is_cleared = '0' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalReturned = $row['returnedendo'];
            echo $totalReturned;
        break;

        case 'showtotaldcreview':
            $sql = "SELECT COUNT(a.id) AS reviewendo, a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, CONCAT(a.client_id) AS clientuserid, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.id, b.endo_code, b.assigned_by, b.assigned_supervisor, b.assigned_to, b.is_distributed, b.is_returned, b.datetime_added, c.user_id, CONCAT(c.user_id) AS clientid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.id, f.endo_code, f.assigned_by, f.assigned_da, f.assigned_to, f.is_distributed, f.is_returned, f.datetime_added FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_supervisor AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_dc_assigned_analyst AS f ON b.endo_code = f.endo_code WHERE a.endo_status = '3' AND a.endorsed_to = '".$_SESSION["user_id"]."' AND a.is_for_review = '1' AND b.is_distributed = '0'  AND b.is_returned = '0' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalReview = $row['reviewendo'];
            echo $totalReview;
        break;

        case 'showtotaldcmodify':
            $sql = "SELECT COUNT(a.id) AS modifyendo, a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.change_package, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.endo_code, b.assigned_by, b.assigned_client, b.is_distributed, b.datetime_added, b.is_returned, b.datetime_returned, c.user_id, CONCAT(c.user_id) AS clientuserid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.id, f.return_code, f.endo_code, f.endo_remarks, f.is_cleared, f.assigned_client, f.assigned_supervisor, f.datetime_returned, CONCAT(f.datetime_returned) AS datetimereturned, f.datetime_cleared, f.datetime_added FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_client AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_dc_returned_client AS f ON b.endo_code = f.endo_code WHERE a.endo_status = '4' AND a.endorsed_to = '".$_SESSION["user_id"]."' AND b.is_distributed = '0' AND b.is_returned = '1' AND f.is_cleared = '0' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalModify = $row['modifyendo'];
            echo $totalModify;
        break;

        case 'returnedendodc':
            $endorsementcode = $_POST['endorsementcode'];
            $sql = "UPDATE tbl_dc_assigned_supervisor SET is_returned = '1', datetime_returned = NOW() WHERE endo_code = '". $_POST['endorsementcode']."'";
            $res = $conn->query($sql);
            $sql1 = "INSERT INTO tbl_dc_returned_analyst SET
                    endo_code = '". $_POST['endorsementcode']."',
                    endo_remarks = '". $_POST['returnremarks']."',
                    assigned_analyst = '". $_POST['analystcode']."',
                    assigned_supervisor = '". $_SESSION['user_id'] ."',
                    datetime_returned = NOW()";
            $res1 = $conn->query($sql1);
            if ($res1) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $returnsupervisorid = rand(1,99999);
                    $supervisorreturnuser_id = "RETURN-".$returnsupervisorid."-".$last_return_id;
                    $clientquery = "UPDATE tbl_dc_returned_analyst SET return_code = '". $supervisorreturnuser_id ."' WHERE id = '". $last_return_id ."'";
                    $resclientquery = $conn->query($clientquery);
                }
            }
            $sql2 = "INSERT INTO endorsement_logs SET
                    client_id = '". $_POST["clientcode"]."',
                    endo_code = '". $_POST['endorsementcode']."',
                    endo_action = 'Returning of Endorsement to Analyst',
                    assigned_poc = '". $_SESSION['user_id'] ."',
                    assigned_operations = '". $_POST['analystcode']."',
                    assigned_team = '$team_',
                    datetime_added = NOW()";
            $res2 = $conn->query($sql2);
            $sql3 = "INSERT INTO tbl_notifications SET
                    notif_subject = 'Database Check - $endorsementcode',
                    notif_text = 'Return Endorsement - Analyst',
                    notif_details = 'Success Returning of Endorsement',
                    notif_status = '0',
                    notif_datetime = NOW(),
                    notif_to = '". $_POST["analystcode"]."',
                    notif_from =    '". $_SESSION["user_id"]."'";     
            $res3 = $conn->query($sql3);
            $sql4 = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Review Endorsement - Database Check',
                    x_module_action = 'Returning of Endorsement'";
            $res4 = $conn->query($sql4);                           
            if ($res4) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;


        // MONITOR ENDORSEMENT //

        // BACKGROUND INVESTIGATION //
        case 'offbipoccurrentendo':
            $sql = "SELECT COUNT(a.id) AS totalendo, a.endorsed_to, a.endo_date, b.user_id FROM tbl_endo AS a LEFT JOIN tbl_supervisor AS b ON a.endorsed_to = b.user_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalcurrentmonthbi = $row['totalendo'];
            echo $totalcurrentmonthbi;
        break;

        case 'offbipocyearlyendo':
            $sql = "SELECT COUNT(a.id) AS totalendo, a.endorsed_to, a.endo_date, b.user_id FROM tbl_endo AS a LEFT JOIN tbl_supervisor AS b ON a.endorsed_to = b.user_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalcurrentyearbi = $row['totalendo'];
            echo $totalcurrentyearbi;
        break;

        case 'spvbijan':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingbi = $row['pending'];
                $totalreceivedbi = $row1['received'];
                $totalonprocessbi = $row2['onprocess'];
                $totalforreviewbi = $row3['forreview'];
                $totaldonebi = $row4['done'];
                $totalcompletedbi = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingbi; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceivedbi; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessbi; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewbi; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonebi; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompletedbi; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvbifeb':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingbi = $row['pending'];
                $totalreceivedbi = $row1['received'];
                $totalonprocessbi = $row2['onprocess'];
                $totalforreviewbi = $row3['forreview'];
                $totaldonebi = $row4['done'];
                $totalcompletedbi = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingbi; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceivedbi; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessbi; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewbi; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonebi; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompletedbi; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvbimar':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingbi = $row['pending'];
                $totalreceivedbi = $row1['received'];
                $totalonprocessbi = $row2['onprocess'];
                $totalforreviewbi = $row3['forreview'];
                $totaldonebi = $row4['done'];
                $totalcompletedbi = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingbi; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceivedbi; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessbi; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewbi; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonebi; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompletedbi; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvbiapr':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingbi = $row['pending'];
                $totalreceivedbi = $row1['received'];
                $totalonprocessbi = $row2['onprocess'];
                $totalforreviewbi = $row3['forreview'];
                $totaldonebi = $row4['done'];
                $totalcompletedbi = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingbi; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceivedbi; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessbi; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewbi; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonebi; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompletedbi; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvbimay':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingbi = $row['pending'];
                $totalreceivedbi = $row1['received'];
                $totalonprocessbi = $row2['onprocess'];
                $totalforreviewbi = $row3['forreview'];
                $totaldonebi = $row4['done'];
                $totalcompletedbi = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingbi; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceivedbi; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessbi; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewbi; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonebi; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompletedbi; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvbijune':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingbi = $row['pending'];
                $totalreceivedbi = $row1['received'];
                $totalonprocessbi = $row2['onprocess'];
                $totalforreviewbi = $row3['forreview'];
                $totaldonebi = $row4['done'];
                $totalcompletedbi = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingbi; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceivedbi; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessbi; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewbi; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonebi; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompletedbi; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvbijuly':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingbi = $row['pending'];
                $totalreceivedbi = $row1['received'];
                $totalonprocessbi = $row2['onprocess'];
                $totalforreviewbi = $row3['forreview'];
                $totaldonebi = $row4['done'];
                $totalcompletedbi = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingbi; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceivedbi; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessbi; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewbi; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonebi; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompletedbi; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvbiaug':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingbi = $row['pending'];
                $totalreceivedbi = $row1['received'];
                $totalonprocessbi = $row2['onprocess'];
                $totalforreviewbi = $row3['forreview'];
                $totaldonebi = $row4['done'];
                $totalcompletedbi = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingbi; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceivedbi; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessbi; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewbi; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonebi; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompletedbi; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvbisept':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingbi = $row['pending'];
                $totalreceivedbi = $row1['received'];
                $totalonprocessbi = $row2['onprocess'];
                $totalforreviewbi = $row3['forreview'];
                $totaldonebi = $row4['done'];
                $totalcompletedbi = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingbi; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceivedbi; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessbi; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewbi; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonebi; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompletedbi; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvbioct':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingbi = $row['pending'];
                $totalreceivedbi = $row1['received'];
                $totalonprocessbi = $row2['onprocess'];
                $totalforreviewbi = $row3['forreview'];
                $totaldonebi = $row4['done'];
                $totalcompletedbi = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingbi; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceivedbi; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessbi; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewbi; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonebi; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompletedbi; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvbinov':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingbi = $row['pending'];
                $totalreceivedbi = $row1['received'];
                $totalonprocessbi = $row2['onprocess'];
                $totalforreviewbi = $row3['forreview'];
                $totaldonebi = $row4['done'];
                $totalcompletedbi = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingbi; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceivedbi; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessbi; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewbi; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonebi; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompletedbi; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvbidec':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingbi = $row['pending'];
                $totalreceivedbi = $row1['received'];
                $totalonprocessbi = $row2['onprocess'];
                $totalforreviewbi = $row3['forreview'];
                $totaldonebi = $row4['done'];
                $totalcompletedbi = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingbi; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceivedbi; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessbi; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewbi; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonebi; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompletedbi; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        // DATABASE CHECK //
        case 'offdcpoccurrentendo':
            $sql = "SELECT COUNT(a.id) AS totalendo, a.endorsed_to, a.endo_date, b.user_id FROM tbl_endo_criminal AS a LEFT JOIN tbl_supervisor AS b ON a.endorsed_to = b.user_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalcurrentmonthbi = $row['totalendo'];
            echo $totalcurrentmonthbi;
        break;

        case 'offdcpocyearlyendo':
            $sql = "SELECT COUNT(a.id) AS totalendo, a.endorsed_to, a.endo_date, b.user_id FROM tbl_endo_criminal AS a LEFT JOIN tbl_supervisor AS b ON a.endorsed_to = b.user_id WHERE a.endorsed_to = '". $_SESSION['user_id'] ."' AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalcurrentyearbi = $row['totalendo'];
            echo $totalcurrentyearbi;
        break;

        case 'spvdcjan':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingdc = $row['pending'];
                $totalreceiveddc = $row1['received'];
                $totalonprocessdc = $row2['onprocess'];
                $totalforreviewdc = $row3['forreview'];
                $totaldonedc = $row4['done'];
                $totalcompleteddc = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingdc; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceiveddc; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessdc; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewdc; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonedc; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompleteddc; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvdcfeb':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingdc = $row['pending'];
                $totalreceiveddc = $row1['received'];
                $totalonprocessdc = $row2['onprocess'];
                $totalforreviewdc = $row3['forreview'];
                $totaldonedc = $row4['done'];
                $totalcompleteddc = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingdc; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceiveddc; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessdc; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewdc; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonedc; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompleteddc; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvdcmar':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingdc = $row['pending'];
                $totalreceiveddc = $row1['received'];
                $totalonprocessdc = $row2['onprocess'];
                $totalforreviewdc = $row3['forreview'];
                $totaldonedc = $row4['done'];
                $totalcompleteddc = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingdc; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceiveddc; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessdc; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewdc; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonedc; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompleteddc; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvdcapr':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingdc = $row['pending'];
                $totalreceiveddc = $row1['received'];
                $totalonprocessdc = $row2['onprocess'];
                $totalforreviewdc = $row3['forreview'];
                $totaldonedc = $row4['done'];
                $totalcompleteddc = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingdc; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceiveddc; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessdc; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewdc; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonedc; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompleteddc; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvdcmay':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingdc = $row['pending'];
                $totalreceiveddc = $row1['received'];
                $totalonprocessdc = $row2['onprocess'];
                $totalforreviewdc = $row3['forreview'];
                $totaldonedc = $row4['done'];
                $totalcompleteddc = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingdc; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceiveddc; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessdc; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewdc; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonedc; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompleteddc; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvdcjune':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingdc = $row['pending'];
                $totalreceiveddc = $row1['received'];
                $totalonprocessdc = $row2['onprocess'];
                $totalforreviewdc = $row3['forreview'];
                $totaldonedc = $row4['done'];
                $totalcompleteddc = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingdc; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceiveddc; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessdc; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewdc; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonedc; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompleteddc; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvdcjuly':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingdc = $row['pending'];
                $totalreceiveddc = $row1['received'];
                $totalonprocessdc = $row2['onprocess'];
                $totalforreviewdc = $row3['forreview'];
                $totaldonedc = $row4['done'];
                $totalcompleteddc = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingdc; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceiveddc; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessdc; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewdc; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonedc; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompleteddc; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvdcaug':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingdc = $row['pending'];
                $totalreceiveddc = $row1['received'];
                $totalonprocessdc = $row2['onprocess'];
                $totalforreviewdc = $row3['forreview'];
                $totaldonedc = $row4['done'];
                $totalcompleteddc = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingdc; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceiveddc; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessdc; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewdc; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonedc; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompleteddc; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvdcsept':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingdc = $row['pending'];
                $totalreceiveddc = $row1['received'];
                $totalonprocessdc = $row2['onprocess'];
                $totalforreviewdc = $row3['forreview'];
                $totaldonedc = $row4['done'];
                $totalcompleteddc = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingdc; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceiveddc; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessdc; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewdc; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonedc; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompleteddc; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvdcoct':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingdc = $row['pending'];
                $totalreceiveddc = $row1['received'];
                $totalonprocessdc = $row2['onprocess'];
                $totalforreviewdc = $row3['forreview'];
                $totaldonedc = $row4['done'];
                $totalcompleteddc = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingdc; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceiveddc; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessdc; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewdc; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonedc; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompleteddc; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvdcnov':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingdc = $row['pending'];
                $totalreceiveddc = $row1['received'];
                $totalonprocessdc = $row2['onprocess'];
                $totalforreviewdc = $row3['forreview'];
                $totaldonedc = $row4['done'];
                $totalcompleteddc = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingdc; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceiveddc; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessdc; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewdc; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonedc; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompleteddc; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'spvdcdec':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE endorsed_to = '". $_SESSION['user_id'] ."' AND MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingdc = $row['pending'];
                $totalreceiveddc = $row1['received'];
                $totalonprocessdc = $row2['onprocess'];
                $totalforreviewdc = $row3['forreview'];
                $totaldonedc = $row4['done'];
                $totalcompleteddc = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingdc; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceiveddc; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessdc; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalforreviewdc; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold;"><?php echo $totaldonedc; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompleteddc; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        // ENDORSEMENT LOGS //

        // BACKGROUND INVESTIGATION //
        case 'offbipoccurrentendologs':
            $sql = "SELECT a.endo_code, COUNT(b.id) AS monthlyendologbi, b.endo_code FROM tbl_endo AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code WHERE b.assigned_team = '$team_' AND MONTH(b.datetime_added) = MONTH(NOW())  AND YEAR(b.datetime_added) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalcurrentmonthbilogs = $row['monthlyendologbi'];
            echo $totalcurrentmonthbilogs;
        break;

        case 'offbipocyearlyendologs':
            $sql = "SELECT a.endo_code, COUNT(b.id) AS yearlyendologbi, b.endo_code FROM tbl_endo AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code WHERE b.assigned_team = '$team_' AND YEAR(b.datetime_added) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalcurrentyearbilogs = $row['yearlyendologbi'];
            echo $totalcurrentyearbilogs;
        break;

        // DATABASE CHECK //
        case 'offdcpoccurrentendologs':
            $sql = "SELECT a.endo_code, COUNT(b.id) AS monthlyendologdc, b.endo_code FROM tbl_endo_criminal AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code WHERE b.assigned_team = '$team_' AND MONTH(b.datetime_added) = MONTH(NOW())  AND YEAR(b.datetime_added) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalcurrentmonthdclogs = $row['monthlyendologdc'];
            echo $totalcurrentmonthdclogs;
        break;

        case 'offdcpocyearlyendologs':
            $sql = "SELECT a.endo_code, COUNT(b.id) AS yearlyendologdc, b.endo_code FROM tbl_endo_criminal AS a LEFT JOIN endorsement_logs AS b ON a.endo_code = b.endo_code WHERE b.assigned_team = '$team_' AND YEAR(b.datetime_added) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalcurrentyeardclogs = $row['yearlyendologdc'];
            echo $totalcurrentyeardclogs;
        break;

        // OPERATIONS //

        // REQUEST OPERATIONS //
        case 'displayopsteams':
            $sql = "SELECT * FROM team_list WHERE team_no != '$team_' AND team_no != 'TM-000005' ORDER BY team_name ASC";
            ?> <option> -- Select -- </option>; <?php
            $res = $conn->query($sql);
            while ($row = mysqli_fetch_array($res)) {
                ?>
                    <option value ="<?php echo $row['team_no'];?>">Team <?php echo $row['team_name'];?> </option>
                <?php
            }
        break;

        case 'displayopmembers':
            $sql = "SELECT a.analyst_id, CONCAT(a.fname, ' ' , a.mname, ' ' , a.lname, ' ' , a.suffix) AS analystfullname, a.fname, a.lname, a.suffix, b.user_id, CONCAT(b.fname, ' ' , b.mname, ' ' , b.lname, ' ' , b.suffix) AS analystname, c.user_id, c.userstatus_ FROM analyst_list AS a LEFT JOIN tbl_operations AS b ON CONCAT(a.fname, ' ' , a.mname, ' ' , a.lname, ' ' , a.suffix) = CONCAT(b.fname, ' ' , b.mname, ' ' , b.lname, ' ' , b.suffix) LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE a.team_one = '". $_POST['req_teams']."' AND c.userstatus_ = '1' UNION ALL SELECT a.specialist_id, CONCAT(a.fname, ' ' , a.mname, ' ' , a.lname, ' ' , a.suffix) AS telefullname, a.fname, a.lname, a.suffix, b.user_id, CONCAT(b.fname, ' ' , b.mname, ' ' , b.lname, ' ' , b.suffix) AS telename, c.user_id, c.userstatus_ FROM specialist_list AS a LEFT JOIN tbl_operations AS b ON CONCAT(a.fname, ' ' , a.mname, ' ' , a.lname, ' ' , a.suffix) = CONCAT(b.fname, ' ' , b.mname, ' ' , b.lname, ' ' , b.suffix) LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE a.team_one = '". $_POST['req_teams']."' AND c.userstatus_ = '1' UNION ALL SELECT a.field_id, CONCAT(a.fname, ' ' , a.mname, ' ' , a.lname, ' ' , a.suffix) AS fieldfullname, a.fname, a.lname, a.suffix, b.user_id, CONCAT(b.fname, ' ' , b.mname, ' ' , b.lname, ' ' , b.suffix) AS fieldname, c.user_id, c.userstatus_ FROM field_list AS a LEFT JOIN tbl_operations AS b ON CONCAT(a.fname, ' ' , a.mname, ' ' , a.lname, ' ' , a.suffix) = CONCAT(b.fname, ' ' , b.mname, ' ' , b.lname, ' ' , b.suffix) LEFT JOIN tbl_users AS c ON b.user_id = c.user_id WHERE a.team_one = '". $_POST['req_teams']."' AND c.userstatus_ = '1' ORDER BY lname ASC";
            ?> <option> -- Select -- </option>; <?php
            $res = $conn->query($sql);
            while ($row = mysqli_fetch_array($res)) {
                ?>
                    <option value ="<?php echo $row['user_id'];?>"><?php echo strtoupper($row['lname']). ', ' .$row['fname']. ' ' .$row['suffix']; ?></option>
                <?php
            }
        break;

        case 'displayopsclients':
            $sql = "SELECT * FROM client_list WHERE team_ = '$team_' ORDER BY site_ ASC";
            ?> <option> -- Select -- </option>; <?php
            $res = $conn->query($sql);
            while ($row = mysqli_fetch_array($res)) {
                ?>
                    <option value ="<?php echo $row['client_id'];?>"><?php echo $row['client_name'].' - '.$row['site_'];?> </option>
                <?php
            }
        break;

        case 'savecreatedrequest':
            $sql = "INSERT INTO tbl_supervisor_member_request SET
                    req_operations_id = '". $_POST['req_ops']."',
                    req_operations_team = '". $_POST['req_teams']."',
                    requesting_team = '$team_',
                    assigned_account = '". $_POST['req_clients']."',
                    borrow_date_to = '". $_POST['req_borrowdateto']."',
                    borrow_date_from = '". $_POST['req_borrowdatefrom']."',
                    remarks_ = '". $_POST['req_remarks']."',
                    request_status = '0',
                    poc_request_creator = '".$_SESSION["user_id"]."'";
            $res = $conn->query($sql);
            $sql1 = "INSERT INTO tbl_supervisor_to_request SET
                    team_code = '$team_'";
            $res1 = $conn->query($sql1);
            if ($res && $res1) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $returnsupervisorid = rand(10000000,99999999);
                    $createrequestid = "MEMRQ-".$returnsupervisorid."-".$last_return_id;
                    $requestoperationsid = "UPDATE tbl_supervisor_member_request SET request_id = '". $createrequestid ."' WHERE id = '". $last_return_id ."'";
                    $resrequestopid = $conn->query($requestoperationsid);
                    $requestoperationscode = "UPDATE tbl_supervisor_to_request SET request_id = '". $createrequestid ."' WHERE id = '". $last_return_id ."'";
                    $resrequestopcode = $conn->query($requestoperationscode);
                }
            }
            $sql2 = "INSERT INTO tbl_notifications SET
                    notif_subject = 'Requesting of Operations',
                    notif_text = 'Requesting of Member - Operations',
                    notif_details = 'Success Creating of Request',
                    notif_status = '0',
                    notif_datetime = NOW(),
                    notif_to = '". $_POST["req_ops"]."',
                    notif_from =    '". $_SESSION["user_id"]."'";     
            $res2 = $conn->query($sql2);
            $sql3 = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Operations - Requesting of Operations',
                    x_module_action = 'Creating of Member Request'";
            $res3 = $conn->query($sql3);                           
            if ($res3) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

        // MANAGE OPERATIONS //
        case 'displayopsmembers':
            $sql = "SELECT user_id, assigned_team_one, CONCAT(fname,  ' ', lname,  ' ', suffix) AS operationsname FROM tbl_operations WHERE assigned_team_one = '$team_' ORDER BY lname ASC";
            ?> <option> -- Select -- </option>; <?php
            $res = $conn->query($sql);
            while ($row = mysqli_fetch_array($res)) {
                ?>
                    <option value ="<?php echo $row['user_id'];?>"><?php echo $row['operationsname'];?> </option>
                <?php
            }
        break;

        case 'displayselectedmember':
            $sql = "SELECT a.analyst_id, CONCAT(a.fname, ' ' , a.mname, ' ' , a.lname, ' ' , a.suffix) AS analystfullname, a.lname, a.fname, a.position_, b.user_id, CONCAT(b.fname, ' ' , b.mname, ' ' , b.lname, ' ' , b.suffix) AS analystname, b.user_image FROM analyst_list AS a LEFT JOIN tbl_operations AS b ON CONCAT(a.fname, ' ' , a.mname, ' ' , a.lname, ' ' , a.suffix) = CONCAT(b.fname, ' ' , b.mname, ' ' , b.lname, ' ' , b.suffix) WHERE b.user_id = '". $_POST['opslist']."' UNION ALL SELECT a.specialist_id, CONCAT(a.fname, ' ' , a.mname, ' ' , a.lname, ' ' , a.suffix) AS telefullname, a.lname, a.fname, a.position_, b.user_id, CONCAT(b.fname, ' ' , b.mname, ' ' , b.lname, ' ' , b.suffix) AS telename, b.user_image FROM specialist_list AS a LEFT JOIN tbl_operations AS b ON CONCAT(a.fname, ' ' , a.mname, ' ' , a.lname, ' ' , a.suffix) = CONCAT(b.fname, ' ' , b.mname, ' ' , b.lname, ' ' , b.suffix) WHERE b.user_id = '". $_POST['opslist']."' UNION ALL SELECT a.field_id, CONCAT(a.fname, ' ' , a.mname, ' ' , a.lname, ' ' , a.suffix) AS fieldfullname, a.lname, a.fname, a.position_, b.user_id, CONCAT(b.fname, ' ' , b.mname, ' ' , b.lname, ' ' , b.suffix) AS fieldname, b.user_image FROM field_list AS a LEFT JOIN tbl_operations AS b ON CONCAT(a.fname, ' ' , a.mname, ' ' , a.lname, ' ' , a.suffix) = CONCAT(b.fname, ' ' , b.mname, ' ' , b.lname, ' ' , b.suffix) WHERE b.user_id = '". $_POST['opslist']."'";
            $res = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($res)) {
                    $user_id = $row['user_id'];
                    $user_image = $row['user_image'];
                    ?>                        <div class="card w_profile">
                            <div class="body">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <?php
                                            echo '<div class="profile-image float-md-right"> <img src="../profilepictures_/'.$user_id.'/'.$user_image.'" alt="" style="width: 120px;"> </div>'
                                        ?>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-12" style="margin-top: 20px;">
                                        <h4 class="m-t-0 mb-0"><strong><?php echo $row['fname']; ?></strong> <?php echo $row['lname']; ?></h4>
                                        <span class="job_post"><?php echo $row['position_']; ?></span>
                                        <span class="job_post">Team <?php echo $spv_teamname; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                }
        break;

        case 'displaymemberdetails':
            $sql = "SELECT a.user_id, a.fname, a.mname, a.lname, a.suffix, b.operations_id, b.fname, b.mname, b.lname, b.suffix, b.operations_type FROM tbl_operations AS a LEFT JOIN operations_list AS b ON CONCAT(a.fname , ' ' , a.mname, ' ' , a.lname , ' ' , a.suffix) = CONCAT(b.fname , ' ' , b.mname, ' ' , b.lname , ' ' , b.suffix) WHERE b.operations_type = '1' AND a.user_id = '". $_POST['opslist']."' UNION ALL SELECT a.user_id, a.fname, a.mname, a.lname, a.suffix, b.operations_id, b.fname, b.mname, b.lname, b.suffix, b.operations_type FROM tbl_operations AS a LEFT JOIN operations_list AS b ON CONCAT(a.fname , ' ' , a.mname, ' ' , a.lname , ' ' , a.suffix) = CONCAT(b.fname , ' ' , b.mname, ' ' , b.lname , ' ' , b.suffix) WHERE b.operations_type = '2' AND a.user_id = '". $_POST['opslist']."' UNION ALL SELECT a.user_id, a.fname, a.mname, a.lname, a.suffix, b.operations_id, b.fname, b.mname, b.lname, b.suffix, b.operations_type FROM tbl_operations AS a LEFT JOIN operations_list AS b ON CONCAT(a.fname , ' ' , a.mname, ' ' , a.lname , ' ' , a.suffix) = CONCAT(b.fname , ' ' , b.mname, ' ' , b.lname , ' ' , b.suffix) WHERE b.operations_type = '3' AND a.user_id = '". $_POST['opslist']."'";
            // echo $sql;
            $res = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($res)) {
                ?>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card">
                                <div class="header">
                                    <h2>My Endorsement Stats <br><p style="font-weight: bold; font-size: 13px;"><?php echo $now->format('Y'); ?></p></h2>
                                </div>
                                <?php
                                    // PENDING //
                                    $sql = "SELECT COUNT(a.id) AS pending, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_specialist FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_specialist AS b ON a.endo_code = b.endo_code WHERE b.assigned_specialist = '". $_POST['opslist']."' AND a.endo_status = '0' AND YEAR(a.endo_date) = YEAR(NOW())";
                                    $res = $conn->query($sql);
                                    $row = mysqli_fetch_array($res);
                                    $sql1 = "SELECT COUNT(a.id) AS pending, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_POST['opslist']."' AND a.endo_status = '0' AND YEAR(a.endo_date) = YEAR(NOW())";
                                    $res1 = $conn->query($sql1);
                                    $row1 = mysqli_fetch_array($res1);
                                    $sqldcda = "SELECT COUNT(a.id) AS pending, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_POST['opslist']."' AND a.endo_status = '0' AND YEAR(a.endo_date) = YEAR(NOW())";
                                    $res2 = $conn->query($sqldcda);
                                    $row2 = mysqli_fetch_array($res2);
                                    $pendingbitele = $row['pending'];
                                    $pendingbida = $row1['pending'];
                                    $pendingdcda = $row2['pending'];
                                    $totalpendingEndo = $pendingbitele + $pendingbida + $pendingdcda;

                                    // RECEIVED //
                                    $sql3 = "SELECT COUNT(a.id) AS received, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_specialist FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_specialist AS b ON a.endo_code = b.endo_code WHERE b.assigned_specialist = '". $_POST['opslist']."' AND a.endo_status = '1' AND YEAR(a.endo_date) = YEAR(NOW())";
                                    $res3 = $conn->query($sql3);
                                    $row3 = mysqli_fetch_array($res3);
                                    $sql4 = "SELECT COUNT(a.id) AS received, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_POST['opslist']."' AND a.endo_status = '1' AND YEAR(a.endo_date) = YEAR(NOW())";
                                    $res4 = $conn->query($sql4);
                                    $row4 = mysqli_fetch_array($res4);
                                    $sql5 = "SELECT COUNT(a.id) AS received, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_POST['opslist']."' AND a.endo_status = '1' AND YEAR(a.endo_date) = YEAR(NOW())";
                                    $res5 = $conn->query($sql5);
                                    $row5 = mysqli_fetch_array($res5);
                                    $receivedbitele = $row3['received'];
                                    $receivedbida = $row4['received'];
                                    $receiveddcda = $row5['received'];
                                    $totalreceivedEndo = $receivedbitele + $receivedbida + $receiveddcda;

                                    // ON-PROCESS //
                                    $sql6 = "SELECT COUNT(a.id) AS onprocess, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_specialist FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_specialist AS b ON a.endo_code = b.endo_code WHERE b.assigned_specialist = '". $_POST['opslist']."' AND a.endo_status = '2' AND YEAR(a.endo_date) = YEAR(NOW())";
                                    $res6 = $conn->query($sql6);
                                    $row6 = mysqli_fetch_array($res6);
                                    $sql7 = "SELECT COUNT(a.id) AS onprocess, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_POST['opslist']."' AND a.endo_status = '2' AND YEAR(a.endo_date) = YEAR(NOW())";
                                    $res7 = $conn->query($sql7);
                                    $row7 = mysqli_fetch_array($res7);
                                    $sql8 = "SELECT COUNT(a.id) AS onprocess, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_POST['opslist']."' AND a.endo_status = '2' AND YEAR(a.endo_date) = YEAR(NOW())";
                                    $res8 = $conn->query($sql8);
                                    $row8 = mysqli_fetch_array($res8);
                                    $onprocessbitele = $row6['onprocess'];
                                    $onprocessbida = $row7['onprocess'];
                                    $onprocessdcda = $row8['onprocess'];
                                    $totalonprocessEndo = $onprocessbitele + $onprocessbida + $onprocessdcda;

                                    // DONE //
                                    $sql9 = "SELECT COUNT(a.id) AS done, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_specialist FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_specialist AS b ON a.endo_code = b.endo_code WHERE b.assigned_specialist = '". $_POST['opslist']."' AND a.endo_status = '3' AND YEAR(a.endo_date) = YEAR(NOW())";
                                    $res9 = $conn->query($sql9);
                                    $row9 = mysqli_fetch_array($res9);
                                    $sql10 = "SELECT COUNT(a.id) AS done, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_POST['opslist']."' AND a.endo_status = '3' AND YEAR(a.endo_date) = YEAR(NOW())";
                                    $res10 = $conn->query($sql10);
                                    $row10 = mysqli_fetch_array($res10);
                                    $sql11 = "SELECT COUNT(a.id) AS done, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_POST['opslist']."' AND a.endo_status = '3' AND YEAR(a.endo_date) = YEAR(NOW())";
                                    $res11 = $conn->query($sql11);
                                    $row11 = mysqli_fetch_array($res11);
                                    $donebitele = $row9['done'];
                                    $donebida = $row10['done'];
                                    $donedcda = $row11['done'];
                                    $totaldoneEndo = $donebitele + $donebida + $donedcda;

                                    // COMPLETED //
                                    $sql12 = "SELECT COUNT(a.id) AS done, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_specialist FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_specialist AS b ON a.endo_code = b.endo_code WHERE b.assigned_specialist = '". $_POST['opslist']."' AND a.endo_status = '4' AND YEAR(a.endo_date) = YEAR(NOW())";
                                    $res12 = $conn->query($sql12);
                                    $row12 = mysqli_fetch_array($res12);
                                    $sql13 = "SELECT COUNT(a.id) AS done, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_POST['opslist']."' AND a.endo_status = '4' AND YEAR(a.endo_date) = YEAR(NOW())";
                                    $res13 = $conn->query($sql13);
                                    $row13 = mysqli_fetch_array($res13);
                                    $sql14 = "SELECT COUNT(a.id) AS done, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_POST['opslist']."' AND a.endo_status = '4' AND YEAR(a.endo_date) = YEAR(NOW())";
                                    $res14 = $conn->query($sql14);
                                    $row14 = mysqli_fetch_array($res14);
                                    $completedbitele = $row12['done'];
                                    $completedbida = $row13['done'];
                                    $completeddcda = $row14['done'];
                                    $totalcompletedEndo = $completedbitele + $completedbida + $completeddcda;
                                ?>
                                <div class="body" style="margin-top: -30px;">
                                    <ul class=" list-unstyled basic-list">
                                        <li><i class="fa fa-clock-o m-r-5"></i> Pending <span class="badge badge-warning" style="font-weight: bold;"><?php echo $totalpendingEndo; ?></span></li>
                                        <li><i class="fa fa-envelope-o m-r-5"></i> Received <span class="badge badge-info" style="font-weight: bold;"><?php echo $totalreceivedEndo; ?></span></li>
                                        <li><i class="fa fa-spinner m-r-5"></i> On-Process <span class="badge-danger badge" style="font-weight: bold;"><?php echo $totalonprocessEndo; ?></span></li>
                                        <li><i class="fa fa-file-text-o m-r-5"></i> Done <span class="badge-default badge" style="font-weight: bold;"><?php echo $totaldoneEndo; ?></span></li>
                                        <li><i class="fa fa-check-circle-o m-r-5"></i> Completed <span class="badge-success badge" style="font-weight: bold;"><?php echo $totalcompletedEndo; ?></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card">
                                <div class="header">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <h6>Endorsement List <br><p style="font-weight: bold; font-size: 13px;"><?php echo $now->format('Y'); ?></p></h6>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-outline-success" style="float: right;" data-toggle="tooltip" data-placement="top" title="View All" onclick="clientmonitorbici();"><span class="sr-only">View All</span> <i class="fa fa-eye"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="body" style="margin-top: -30px;">
                                    <table class="table mb-0">
                                        <tbody>
                                            <?php
                                                $sql = "SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.endo_code) AS endorsementcode, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, CONCAT(a.client_id) AS clientuserid, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_specialist FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_specialist AS b ON a.endo_code = b.endo_code WHERE b.assigned_specialist = '". $_POST['opslist']."' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) UNION ALL SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.endo_code) AS endorsementcode, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, CONCAT(a.client_id) AS clientuserid, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_da FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_POST['opslist']."' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) UNION ALL SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.endo_code) AS endorsementcode, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, CONCAT(a.client_id) AS clientuserid, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_da FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_POST['opslist']."' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) ORDER BY importance ASC LIMIT 5";
                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                    // STATUS //
                                                    if ($row['endo_status'] == '0') {
                                                        $endostatus = '<span class="badge badge-warning" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">Pending</span>';
                                                    } else if ($row['endo_status'] == '1') {
                                                        $endostatus = '<span class="badge badge-info" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">Received</span>';
                                                    } else if ($row['endo_status'] == '2') {
                                                        $endostatus = '<span class="badge badge-danger" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">On-Process</span>';
                                                    } else if ($row['endo_status'] == '3') {
                                                        $endostatus = '<span class="badge badge-default" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">Done</span>';
                                                    } else if ($row['endo_status'] == '4') {
                                                        $endostatus = '<span class="badge badge-success" style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="Endorsement Status">Completed</span>';
                                                    } else {
                                                        $endostatus = "";
                                                    }

                                                    // IMPORTANCE //
                                                    if ($row['importance'] == '1') {
                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
                                                    } else if ($row['importance'] == '2') {
                                                        $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
                                                    } else {
                                                        $endoimportant = "";
                                                    }

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $endoimportant; ?></td>
                                                        <td style="font-weight: bold;" data-toggle="tooltip" data-placement="top" title="<?php echo $row['applicantname']; ?>"><?php echo $row['endo_code']; ?></td>
                                                        <td><?php echo $endostatus ?></td>
                                                        <td style="text-align: center;">
                                                            <span class='badge bg-success' style="color: white; font-weight: bold;"><?php echo $row['percentage_']; ?> %</span>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                } 
                                                }else {
                                                    ?>
                                                        <tr>
                                                            <td style="text-align: center; font-weight: bold;">No Data Available</td>
                                                        </tr>
                                                    <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
            }
        break;

        // DTR MANAGEMENT //
        case 'displaypocspvmonthlydtr':
            $sql = "SELECT COUNT(id) AS monthlypocdtr FROM dtr_supervisor WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalpocmonthly = $row['monthlypocdtr'];
            echo $totalpocmonthly;
        break;

        case 'displaypocspvyearlydtr':
            $sql = "SELECT COUNT(id) AS yearlypocdtr FROM dtr_supervisor WHERE YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalpocyearly = $row['yearlypocdtr'];
            echo $totalpocyearly;
        break;

        case 'displaypocopsmonthlydtr':
            $sql = "SELECT COUNT(id) AS monthlyopsdtr FROM dtr_operations WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalopsmonthly = $row['monthlyopsdtr'];
            echo $totalopsmonthly;
        break;

        case 'displaypocopsyearlydtr':
            $sql = "SELECT COUNT(id) AS yearlyopsdtr FROM dtr_operations WHERE YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalopsyearly = $row['yearlyopsdtr'];
            echo $totalopsyearly;
        break;

        // MY PROFILE //
        case 'displaymonthlyactlogs':
            $sql = "SELECT COUNT(id) AS monthlyactivity FROM tbl_supervisor_history_logs WHERE MONTH(datetime_log) = MONTH(NOW()) AND YEAR(datetime_log) = YEAR(NOW()) AND user_id = '". $_SESSION['user_id'] ."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalmonthlyactivity = $row['monthlyactivity'];
            echo $totalmonthlyactivity;
        break;

        case 'displayyearlyactlogs':
            $sql = "SELECT COUNT(id) AS yearlyactivity FROM tbl_supervisor_history_logs WHERE YEAR(datetime_log) = YEAR(NOW()) AND user_id = '". $_SESSION['user_id'] ."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalyearlyactivity = $row['yearlyactivity'];
            echo $totalyearlyactivity;
        break;

        case 'displaymonthlyuserlogs':
            $sql = "SELECT COUNT(id) AS monthlylogin FROM tbl_user_logs WHERE login_dateTime IS NOT NULL AND logout_dateTime IS NOT NULL AND MONTH(logout_dateTime) = MONTH(NOW()) AND YEAR(logout_dateTime) = YEAR(NOW()) AND user_id = '". $_SESSION['user_id'] ."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalmonthlyuserlogs = $row['monthlylogin'];
            echo $totalmonthlyuserlogs;
        break;

        case 'displayyearlyuserlogs':
            $sql = "SELECT COUNT(id) AS yearlylogin FROM tbl_user_logs WHERE login_dateTime IS NOT NULL AND logout_dateTime IS NOT NULL AND YEAR(logout_dateTime) = YEAR(NOW()) AND user_id = '". $_SESSION['user_id'] ."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalyearluserlogs = $row['yearlylogin'];
            echo $totalyearluserlogs;
        break;        

        // TICKETING //
        case 'showticketstatus':
            $sql = "SELECT COUNT(ticket_id) AS pending FROM tbl_tickets WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '0' AND requestor = '".$_SESSION["user_id"]."'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(ticket_id) AS onprocess FROM tbl_tickets WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '1' AND requestor = '".$_SESSION["user_id"]."'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(ticket_id) AS completed FROM tbl_tickets WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '2' AND requestor = '".$_SESSION["user_id"]."'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            while ($row = mysqli_fetch_array($res)) {
                $totalpendingticket = $row['pending'];
                $totalonprocessticket = $row1['onprocess'];
                $totalcompletedticket = $row2['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold;"> <?php echo $totalpendingticket; ?> PENDING</span>
                    <span class="badge badge-danger" style="font-weight: bold;"><?php echo $totalonprocessticket; ?> ON-PROCESS</span>
                    <span class="badge badge-success" style="font-weight: bold;"><?php echo $totalcompletedticket; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'saveticket':
            $randomNumbers = rand(10000000,99999999);
            $date = date("m");
            $requestType = 'REQ';
            $referenceNumber = $requestType.'-'.'0'.$date.'-'.$randomNumbers;
            $sql = "INSERT INTO tbl_tickets SET
                        reference_number = '". $referenceNumber ."',
                        start_date = '". $_POST['start_date'] ."',
                        end_date = '". $_POST['end_date'] ."',
                        ticket_type = '". $_POST['tick_type'] ."',
                        tasks = '". $_POST['tick_tasks'] ."',
                        ticket_status = '0',
                        requestor = '".$_SESSION["user_id"]."',
                        date_created = NOW()";
            $res = $conn->query($sql);
            $sql1 = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Ticketing',
                    x_module_action = 'Create New Ticket'";
            $res1 = $conn->query($sql1);                                
            if ($res1) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

		// ACTIVITY LOGS //
		case 'savedashboard':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Dashboard',
                    x_module_action = 'View Dashboard'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

		case 'saveendorsementbi':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements',
                    x_module_action = 'View Background Investigation'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

		case 'saveendorsementdc':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements',
                    x_module_action = 'View Database Check'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

		case 'savemonitorendobi':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitor Endorsements',
                    x_module_action = 'View Background Investigation'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

		case 'savemonitorendodc':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitor Endorsements',
                    x_module_action = 'View Database Check'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

		case 'savererunendobi':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Rerun Endorsements',
                    x_module_action = 'View Background Investigation'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

		case 'savererunendodc':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Rerun Endorsements',
                    x_module_action = 'View Database Check'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

		case 'saveendologbi':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsement Logs',
                    x_module_action = 'View Background Investigation'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

		case 'saveendologdc':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsement Logs',
                    x_module_action = 'View Database Check'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

        case 'saveuploaddtr':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'DTR Management',
                    x_module_action = 'View Upload DTR'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savedtrpoc':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'DTR Management',
                    x_module_action = 'View Supervisors'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savedtrops':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'DTR Management',
                    x_module_action = 'View Operations'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savereqops':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Operations',
                    x_module_action = 'Requesting of Operations'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveapprops':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Operations',
                    x_module_action = 'Approval of Operations'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savemanageops':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Operations',
                    x_module_action = 'Manage Operations'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveuserprofile':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Profile',
                    x_module_action = 'View User Profile'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;   

        case 'saveusermessaging':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Messaging',
                    x_module_action = 'View User Messaging'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveuserticketing':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Ticketing',
                    x_module_action = 'View User Ticketing'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveviewendobi':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements - Background Investigation',
                    x_module_action = 'View Endorsement Details'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savesupportingdocsbi':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements - Background Investigation',
                    x_module_action = 'View Supporting Documents'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savereturnedbihistendo':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements - Background Investigation',
                    x_module_action = 'View Returned Endorsement History'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveviewreturnedbiendo':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements - Background Investigation',
                    x_module_action = 'View Returned Endorsement'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveviewmodifybiendo':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements - Background Investigation',
                    x_module_action = 'View Returned Endorsement'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savemodifybihistendo`':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements - Background Investigation',
                    x_module_action = 'View Returned Endorsement History'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_supervisor_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;
	}
?>