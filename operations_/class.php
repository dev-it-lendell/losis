<?php
	include 'checking.php';

	switch ($_POST['form']) {
		// DASHBOARD //
		case 'showtotalendo':
    		$sqlbitele = "SELECT COUNT(a.id) AS totalendo, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_specialist FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_specialist AS b ON a.endo_code = b.endo_code WHERE b.assigned_specialist = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sqlbitele);
            $row = mysqli_fetch_array($res);
            $sqlbida = "SELECT COUNT(a.id) AS totalendo, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res1 = $conn->query($sqlbida);
            $row1 = mysqli_fetch_array($res1);
            $sqldcda = "SELECT COUNT(a.id) AS totalendo, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_SESSION['user_id'] ."' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res2 = $conn->query($sqldcda);
            $row2 = mysqli_fetch_array($res2);
            $totalbitele = $row['totalendo'];
            $totalbida = $row1['totalendo'];
            $totaldcda = $row2['totalendo'];
            $totalEndo = $totalbitele + $totalbida + $totaldcda;
            echo $totalEndo;
		break;

		case 'showpendingendo':
    		$sqlbitele = "SELECT COUNT(a.id) AS pending, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_specialist FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_specialist AS b ON a.endo_code = b.endo_code WHERE b.assigned_specialist = '". $_SESSION['user_id'] ."' AND a.endo_status = '0' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sqlbitele);
            $row = mysqli_fetch_array($res);
            $sqlbida = "SELECT COUNT(a.id) AS pending, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_SESSION['user_id'] ."' AND a.endo_status = '0' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res1 = $conn->query($sqlbida);
            $row1 = mysqli_fetch_array($res1);
            $sqldcda = "SELECT COUNT(a.id) AS pending, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_SESSION['user_id'] ."' AND a.endo_status = '0' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res2 = $conn->query($sqldcda);
            $row2 = mysqli_fetch_array($res2);
            $pendbitele = $row['pending'];
            $pendbida = $row1['pending'];
            $penddcda = $row2['pending'];
            $totalpendingEndo = $pendbitele + $pendbida + $penddcda;
            echo $totalpendingEndo;
		break;

		case 'showonprocessendo':
    		$sqlbitele = "SELECT COUNT(a.id) AS onprocess, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_specialist FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_specialist AS b ON a.endo_code = b.endo_code WHERE b.assigned_specialist = '". $_SESSION['user_id'] ."' AND a.endo_status = '2' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sqlbitele);
            $row = mysqli_fetch_array($res);
            $sqlbida = "SELECT COUNT(a.id) AS onprocess, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_SESSION['user_id'] ."' AND a.endo_status = '2' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res1 = $conn->query($sqlbida);
            $row1 = mysqli_fetch_array($res1);
            $sqldcda = "SELECT COUNT(a.id) AS onprocess, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_SESSION['user_id'] ."' AND a.endo_status = '2' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res2 = $conn->query($sqldcda);
            $row2 = mysqli_fetch_array($res2);
            $onprocbitele = $row['onprocess'];
            $onprocbida = $row1['onprocess'];
            $onprocdcda = $row2['onprocess'];
            $totalprogEndo = $onprocbitele + $onprocbida + $onprocdcda;
            echo $totalprogEndo;
		break;

		case 'showcompletedendo':
    		$sqlbitele = "SELECT COUNT(a.id) AS completed, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_specialist FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_specialist AS b ON a.endo_code = b.endo_code WHERE b.assigned_specialist = '". $_SESSION['user_id'] ."' AND a.endo_status = '4' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sqlbitele);
            $row = mysqli_fetch_array($res);
            $sqlbida = "SELECT COUNT(a.id) AS completed, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_SESSION['user_id'] ."' AND a.endo_status = '4' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res1 = $conn->query($sqlbida);
            $row1 = mysqli_fetch_array($res1);
            $sqldcda = "SELECT COUNT(a.id) AS completed, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_SESSION['user_id'] ."' AND a.endo_status = '4' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res2 = $conn->query($sqldcda);
            $row2 = mysqli_fetch_array($res2);
            $compbitele = $row['completed'];
            $compbida = $row1['completed'];
            $compdcda = $row2['completed'];
            $totalcompletedEndo = $compbitele + $compbida + $compdcda;
            echo $totalcompletedEndo;
		break;

		case 'showprevtotalendo':
    		$sqlbitele = "SELECT COUNT(a.id) AS totalprevendo, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_specialist FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_specialist AS b ON a.endo_code = b.endo_code WHERE b.assigned_specialist = '". $_SESSION['user_id'] ."' AND YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)";
            $res = $conn->query($sqlbitele);
            $row = mysqli_fetch_array($res);
            $sqlbida = "SELECT COUNT(a.id) AS totalprevendo, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_SESSION['user_id'] ."' AND YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)";
            $res1 = $conn->query($sqlbida);
            $row1 = mysqli_fetch_array($res1);
            $sqldcda = "SELECT COUNT(a.id) AS totalprevendo, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_SESSION['user_id'] ."' AND YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)";
            $res2 = $conn->query($sqldcda);
            $row2 = mysqli_fetch_array($res2);
            $totalprevbitele = $row['totalprevendo'];
            $totalprevbida = $row1['totalprevendo']; 
            $totalprevdcda = $row2['totalprevendo']; 
            $totalprevEndo = $totalprevbitele + $totalprevbida + $totalprevdcda;
            echo $totalprevEndo;
		break;

		case 'showprevpendingendo':
    		$sqlbitele = "SELECT COUNT(a.id) AS pendprevendo, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_specialist FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_specialist AS b ON a.endo_code = b.endo_code WHERE b.assigned_specialist = '". $_SESSION['user_id'] ."' AND a.endo_status = '0' AND YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)";
            $res = $conn->query($sqlbitele);
            $row = mysqli_fetch_array($res);
            $sqlbida = "SELECT COUNT(a.id) AS pendprevendo, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_SESSION['user_id'] ."' AND a.endo_status = '0' AND YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)";
            $res1 = $conn->query($sqlbida);
            $row1 = mysqli_fetch_array($res1);
            $sqldcda = "SELECT COUNT(a.id) AS pendprevendo, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_SESSION['user_id'] ."' AND a.endo_status = '0' AND YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)";
            $res2 = $conn->query($sqldcda);
            $row2 = mysqli_fetch_array($res2);
            $pendprevbitele = $row['pendprevendo'];
            $pendprevbida = $row1['pendprevendo']; 
            $pendprevdcda = $row2['pendprevendo']; 
            $pendprevEndo = $pendprevbitele + $pendprevbida + $pendprevdcda;
            echo $pendprevEndo;
		break;

		case 'showprevonprocessendo':
    		$sqlbitele = "SELECT COUNT(a.id) AS onprocprevendo, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_specialist FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_specialist AS b ON a.endo_code = b.endo_code WHERE b.assigned_specialist = '". $_SESSION['user_id'] ."' AND a.endo_status = '2' AND YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)";
            $res = $conn->query($sqlbitele);
            $row = mysqli_fetch_array($res);
            $sqlbida = "SELECT COUNT(a.id) AS onprocprevendo, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_SESSION['user_id'] ."' AND a.endo_status = '2' AND YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)";
            $res1 = $conn->query($sqlbida);
            $row1 = mysqli_fetch_array($res1);
            $sqldcda = "SELECT COUNT(a.id) AS onprocprevendo, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_SESSION['user_id'] ."' AND a.endo_status = '2' AND YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)";
            $res2 = $conn->query($sqldcda);
            $row2 = mysqli_fetch_array($res2);
            $onprocprevbitele = $row['onprocprevendo'];
            $onprocprevbida = $row1['onprocprevendo']; 
            $onprocprevdcda = $row2['onprocprevendo']; 
            $onprocprevEndo = $onprocprevbitele + $onprocprevbida + $onprocprevdcda;
            echo $onprocprevEndo;
		break;

		case 'showprevcompletedendo':
    		$sqlbitele = "SELECT COUNT(a.id) AS compprevendo, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_specialist FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_specialist AS b ON a.endo_code = b.endo_code WHERE b.assigned_specialist = '". $_SESSION['user_id'] ."' AND a.endo_status = '4' AND YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)";
            $res = $conn->query($sqlbitele);
            $row = mysqli_fetch_array($res);
            $sqlbida = "SELECT COUNT(a.id) AS compprevendo, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_SESSION['user_id'] ."' AND a.endo_status = '4' AND YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)";
            $res1 = $conn->query($sqlbida);
            $row1 = mysqli_fetch_array($res1);
            $sqldcda = "SELECT COUNT(a.id) AS compprevendo, a.endo_code, a.endo_date, a.endo_status, b.endo_code, b.assigned_da FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_analyst AS b ON a.endo_code = b.endo_code WHERE b.assigned_da = '". $_SESSION['user_id'] ."' AND a.endo_status = '4' AND YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)";
            $res2 = $conn->query($sqldcda);
            $row2 = mysqli_fetch_array($res2);
            $compprevbitele = $row['compprevendo'];
            $compprevbida = $row1['compprevendo']; 
            $compprevdcda = $row2['compprevendo']; 
            $compprevEndo = $compprevbitele + $compprevbida + $compprevdcda;
            echo $compprevEndo;
		break;

        case 'showholidaylist':
            $sql = "SELECT * FROM tbl_holiday WHERE holiday_date >= CURDATE() ORDER BY holiday_date ASC LIMIT 5";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $_type = $row['_type'];
                    $holiday_date = $row['holiday_date'];
                    $newHolidayDate = date('F d, Y', strtotime($holiday_date));
                    ?>
                        <li>
                            <div class="feeds-left"><img src="../images/icons/flag.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: 2px;"></div>
                            <div class="feeds-body ml-5">
                                <p style="font-weight: bold; font-size: 11px;"><?php echo $row['holiday_name']; ?><small class="float-right text-muted"><i class="fa fa-star"></i></small></p>
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
            $sql = "SELECT a.supervisor_id, a.fname, a.mname, a.lname, a.suffix, a.position_, b.user_id, CONCAT(b.fname, ' ', b.mname, ' ', b.lname, ' ', b.suffix) AS supervisorname, b.lname, b.assigned_team, b.user_image, c.team_no, c.team_name, d.user_id, d.userstatus_  FROM supervisor_list AS a LEFT JOIN tbl_supervisor AS b ON CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) = CONCAT(b.fname, ' ', b.mname, ' ', b.lname, ' ', b.suffix) LEFT JOIN team_list AS c ON b.assigned_team = c.team_no LEFT JOIN tbl_users AS d ON b.user_id = d.user_id WHERE b.assigned_team = '$team_one' AND d.userstatus_ = '1' ORDER BY b.lname ASC LIMIT 5";
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
            $sql = "SELECT a.operations_id, a.fname, a.mname, a.lname, a.suffix, a.position_, a.team_one, b.user_id, CONCAT(b.fname, ' ', b.mname, ' ', b.lname, ' ', b.suffix) AS operationsname, b.lname, b.assigned_team_one, b.user_image, c.team_no, c.team_name, d.user_id, d.userstatus_ FROM operations_list AS a LEFT JOIN tbl_operations AS b ON CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) = CONCAT(b.fname, ' ', b.mname, ' ', b.lname, ' ', b.suffix) LEFT JOIN team_list AS c ON b.assigned_team_one = c.team_no LEFT JOIN tbl_users AS d ON b.user_id = d.user_id WHERE b.assigned_team_one = '$team_one' AND b.user_id != '". $_SESSION['user_id'] ."' AND d.userstatus_ = '1' ORDER BY b.lname ASC LIMIT 5";
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

	    // VERIFIER'S SIDE //

	    // BACKGROUND INVESTIGATION //
        case 'showtotalbiteleassign':
            $sql = "SELECT COUNT(a.id) AS distributebitele, a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.user_id, CONCAT(b.user_id) AS clientid, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS clientname, b.company_name, b.site_id, c.client_id, c.client_name, c.acronym_, c.site_, c.supervisor_, d.user_id, CONCAT(d.user_id) AS supervisorid, CONCAT(d.fname, ' ', d.mname, ' ', d.lname, ' ', d.suffix) AS supervisorname, e.id, e.endo_code, e.assigned_by, e.assigned_specialist, e.assigned_to, e.is_distributed, e.is_returned, e.datetime_added, f.user_id, CONCAT(f.fname, ' ', f.mname, ' ', f.lname, ' ', f.suffix) AS operationsname FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON a.site_id = c.client_id LEFT JOIN tbl_supervisor AS d ON a.endorsed_to = d.user_id LEFT JOIN tbl_bi_assigned_specialist AS e ON a.endo_code = e.endo_code LEFT JOIN tbl_operations AS f ON e.assigned_specialist = f.user_id WHERE a.endo_status = '2' AND e.assigned_specialist = '".$_SESSION["user_id"]."' AND e.is_returned = '0' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totaldistributeteleBI = $row['distributebitele'];
            echo $totaldistributeteleBI;
        break;

        case 'showtotalbitelereturned':
            $sql = "SELECT COUNT(a.id) AS returnedbitele, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_by, b.assigned_da, b.is_distributed, b.datetime_added, b.is_returned, b.datetime_returned, c.user_id, CONCAT(c.user_id) AS clientuserid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, CONCAT(e.user_id) AS supervisorid, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.id, f.endo_code, f.endo_remarks, f.is_cleared, f.assigned_specialist, f.assigned_analyst, f.datetime_returned, CONCAT(f.datetime_returned) AS datetimereturned, f.datetime_cleared, f.datetime_added, g.user_id, CONCAT(g.fname, ' ', g.mname, ' ', g.lname, ' ', g.suffix) AS operationsname, h.endo_id, h.file_name, h.report_datetime FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_analyst AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_returned_specialist AS f ON b.endo_code = f.endo_code LEFT JOIN tbl_operations AS g ON b.assigned_by = g.user_id LEFT JOIN tbl_reports AS h ON a.endo_id = h.endo_id WHERE a.endo_status = '2' AND b.assigned_by = '".$_SESSION["user_id"]."' AND b.is_distributed = '0' AND b.is_returned = '1' AND f.is_cleared = '0' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalreturnedteleBI = $row['returnedbitele'];
            echo $totalreturnedteleBI;
        break;

        case 'returnedendobitele':
            $endorsementcode = $_POST['endorsementcode'];
            $sql = "UPDATE tbl_bi_assigned_specialist SET is_returned = '1', datetime_returned = NOW() WHERE endo_code = '". $_POST['endorsementcode']."'";
            $res = $conn->query($sql);
            $sql1 = "INSERT INTO tbl_bi_returned_supervisor SET
                    endo_code = '". $_POST['endorsementcode']."',
                    endo_remarks = '". $_POST['returnremarks']."',
                    assigned_supervisor = '". $_POST['supervisorcode']."',
                    assigned_specialist = '". $_SESSION['user_id'] ."',
                    datetime_returned = NOW()";
            $res1 = $conn->query($sql1);
            if ($res1) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $returnsupervisorid = rand(1,99999);
                    $supervisorreturnuser_id = "RETURN-".$returnsupervisorid."-".$last_return_id;
                    $clientquery = "UPDATE tbl_bi_returned_supervisor SET return_code = '". $supervisorreturnuser_id ."' WHERE id = '". $last_return_id ."'";
                    $resclientquery = $conn->query($clientquery);
                }
            }
            $sql2 = "INSERT INTO endorsement_logs SET
                    client_id = '". $_POST["clientcode"]."',
                    endo_code = '". $_POST['endorsementcode']."',
                    endo_action = 'Returning of Endorsement to Supervisor',
                    assigned_poc = '". $_POST['supervisorcode']."',
                    assigned_operations = '". $_SESSION['user_id'] ."',
                    assigned_team = '$team_',
                    datetime_added = NOW()";
            $res2 = $conn->query($sql2);                    
            $sql3 = "INSERT INTO tbl_notifications SET
                    notif_subject = 'Background Investigation - $endorsementcode',
                    notif_text = 'Return Endorsement - Supervisor',
                    notif_details = 'Success Returning of Endorsement',
                    notif_status = '0',
                    notif_datetime = NOW(),
                    notif_to = '". $_POST["supervisorcode"]."',
                    notif_from =    '". $_SESSION["user_id"]."'";     
            $res3 = $conn->query($sql3);
            $sql4 = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements',
                    x_module_action = 'Returning of Endorsement'";
            $res4 = $conn->query($sql4);                           
            if ($res4) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

        // ANALYST'S SIDE //

        // BACKGROUND INVESTIGATION //
        case 'showtotalbidaassign':
            $sql = "SELECT COUNT(a.id) AS distributebida, a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.assigned_by, b.assigned_specialist, b.assigned_to, b.is_distributed, b.is_returned, b.datetime_added, c.id, c.endo_code, c.assigned_by, c.assigned_da, c.assigned_to, c.is_distributed, c.is_returned, c.datetime_added, d.user_id, CONCAT(d.user_id) AS clientid, CONCAT(d.fname, ' ', d.mname,  ' ', d.lname, ' ', d.suffix) AS clientname, d.company_name, d.site_id, e.client_id, e.client_name, e.acronym_, e.site_, e.supervisor_, f.user_id, CONCAT(f.user_id) AS supervisorid, CONCAT(f.fname, ' ', f.mname, ' ', f.lname, ' ', f.suffix) AS supervisorname, g.user_id, CONCAT(g.fname, ' ', g.mname, ' ', g.lname, ' ', g.suffix) AS operationsname FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_specialist AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_bi_assigned_analyst AS c ON b.endo_code = c.endo_code LEFT JOIN tbl_client AS d ON a.client_id = d.user_id LEFT JOIN client_list AS e ON a.site_id = e.client_id LEFT JOIN tbl_supervisor AS f ON a.endorsed_to = f.user_id LEFT JOIN tbl_operations AS g ON c.assigned_da = g.user_id WHERE a.endo_status = '2' AND c.assigned_da = '".$_SESSION["user_id"]."' AND c.is_distributed = '0' AND c.is_returned = '0' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totaldistributedaBI = $row['distributebida'];
            echo $totaldistributedaBI;
        break;

        case 'showtotalbidareturned':
            $sql = "SELECT COUNT(a.id) AS returnedbida, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.endo_code, b.assigned_by, b.assigned_supervisor, b.assigned_to, b.is_distributed, b.datetime_added, b.is_returned, b.datetime_returned, c.user_id, CONCAT(c.user_id) AS clientuserid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, CONCAT(e.user_id) AS supervisorid, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.id, f.endo_code, f.endo_remarks, f.is_cleared, f.assigned_analyst, f.assigned_supervisor, f.datetime_returned, CONCAT(f.datetime_returned) AS datetimereturned, f.datetime_cleared, f.datetime_added, g.user_id, CONCAT(g.fname, ' ', g.mname, ' ', g.lname, ' ', g.suffix) AS operationsname, h.endo_id, h.file_name, h.report_datetime FROM tbl_endo AS a LEFT JOIN tbl_bi_assigned_supervisor AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_bi_returned_analyst AS f ON b.endo_code = f.endo_code LEFT JOIN tbl_operations AS g ON b.assigned_by = g.user_id LEFT JOIN tbl_reports AS h ON a.endo_id = h.endo_id WHERE a.endo_status = '3' AND b.assigned_by = '". $_SESSION['user_id'] ."' AND b.is_distributed = '0' AND b.is_returned = '1' AND f.is_cleared = '0' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalreturneddaBI = $row['returnedbida'];
            echo $totalreturneddaBI;
        break;

        case 'returnedendobida':
            $endorsementcode = $_POST['endorsementcode'];
            $sql = "UPDATE tbl_bi_assigned_analyst SET is_returned = '1', datetime_returned = NOW() WHERE endo_code = '". $_POST['endorsementcode']."'";
            $res = $conn->query($sql);
            $sql1 = "INSERT INTO tbl_bi_returned_specialist SET
                    endo_code = '". $_POST['endorsementcode']."',
                    endo_remarks = '". $_POST['returnremarks']."',
                    assigned_specialist = '". $_POST['verifiercode']."',
                    assigned_analyst = '". $_SESSION['user_id'] ."',
                    datetime_returned = NOW()";
            $res1 = $conn->query($sql1);
            if ($res1) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $returnsupervisorid = rand(1,99999);
                    $supervisorreturnuser_id = "RETURN-".$returnsupervisorid."-".$last_return_id;
                    $clientquery = "UPDATE tbl_bi_returned_specialist SET return_code = '". $supervisorreturnuser_id ."' WHERE id = '". $last_return_id ."'";
                    $resclientquery = $conn->query($clientquery);
                }
            }
            $sql2 = "INSERT INTO endorsement_logs SET
                    client_id = '". $_POST["clientcode"]."',
                    endo_code = '". $_POST['endorsementcode']."',
                    endo_action = 'Returning of Endorsement to Specialist',
                    assigned_poc = '". $_POST['supervisorcode']."',
                    assigned_operations = '". $_SESSION['user_id'] ."',
                    assigned_team = '$op_teamid',
                    datetime_added = NOW()";
            $res2 = $conn->query($sql2);                    
            $sql3 = "INSERT INTO tbl_notifications SET
                    notif_subject = 'Background Investigation - $endorsementcode',
                    notif_text = 'Return Endorsement - Analyst',
                    notif_details = 'Success Returning of Endorsement',
                    notif_status = '0',
                    notif_datetime = NOW(),
                    notif_to = '". $_POST["verifiercode"]."',
                    notif_from =    '". $_SESSION["user_id"]."'";     
            $res3 = $conn->query($sql3);
            $sql4 = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements - Background Investigation',
                    x_module_action = 'Returning of Endorsement'";
            $res4 = $conn->query($sql4);                           
            if ($res4) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

        // DATABASE CHECK //
        case 'showtotaldcdaassign':
            $sql = "SELECT COUNT(a.id) AS distributedcda, a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.id, b.endo_code, b.assigned_by, b.assigned_da, b.assigned_to, b.is_distributed, b.is_returned, b.datetime_added, c.user_id, CONCAT(c.user_id) AS clientid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, CONCAT(e.user_id) AS supervisorid, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.user_id, CONCAT(f.fname, ' ', f.mname, ' ', f.lname, ' ', f.suffix) AS operationsname FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_analyst AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id  LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_operations AS f ON b.assigned_da = f.user_id WHERE a.endo_status = '2' AND b.assigned_da = '".$_SESSION["user_id"]."' AND b.is_distributed = '0' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totaldistributedaDC = $row['distributedcda'];
            echo $totaldistributedaDC;
        break;

        case 'showtotaldcdareturned':
            $sql = "SELECT COUNT(a.id) AS returneddcda, a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.endo_code, b.assigned_by, b.assigned_supervisor, b.is_distributed, b.datetime_added, b.is_returned, b.datetime_returned, c.user_id, CONCAT(c.user_id) AS clientuserid, CONCAT(c.fname,  ' ', c.mname,  ' ',  c.lname, ' ', c.suffix) AS clientname, c.company_name, c.user_position, c.site_id, c.team_, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, CONCAT(e.user_id) AS supervisorid, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.id, f.endo_code, f.endo_remarks, f.is_cleared, f.assigned_analyst, f.assigned_supervisor, f.datetime_returned, CONCAT(f.datetime_returned) AS datetimereturned, f.datetime_cleared, f.datetime_added, g.user_id, CONCAT(g.fname, ' ', g.mname, ' ', g.lname, ' ', g.suffix) AS operationsname FROM tbl_endo_criminal AS a LEFT JOIN tbl_dc_assigned_supervisor AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON a.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN tbl_dc_returned_analyst AS f ON b.endo_code = f.endo_code LEFT JOIN tbl_operations AS g ON b.assigned_by = g.user_id WHERE a.endo_status = '3' AND b.assigned_by = '". $_SESSION['user_id'] ."' AND b.is_distributed = '0' AND b.is_returned = '1' AND f.is_cleared = '0' AND MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalreturneddaDC = $row['returneddcda'];
            echo $totalreturneddaDC;
        break;

        case 'returnedendodcda':
            $endorsementcode = $_POST['endorsementcode'];
            $sql = "UPDATE tbl_dc_assigned_analyst SET is_returned = '1', datetime_returned = NOW() WHERE endo_code = '". $_POST['endorsementcode']."'";
            $res = $conn->query($sql);
            $sql1 = "INSERT INTO tbl_dc_returned_supervisor SET
                    endo_code = '". $_POST['endorsementcode']."',
                    endo_remarks = '". $_POST['returnremarks']."',
                    assigned_supervisor = '". $_POST['supervisorcode']."',
                    assigned_analyst = '". $_SESSION['user_id'] ."',
                    datetime_returned = NOW()";
            $res1 = $conn->query($sql1);
            if ($res1) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $returnsupervisorid = rand(1,99999);
                    $supervisorreturnuser_id = "RETURN-".$returnsupervisorid."-".$last_return_id;
                    $clientquery = "UPDATE tbl_dc_returned_supervisor SET return_code = '". $supervisorreturnuser_id ."' WHERE id = '". $last_return_id ."'";
                    $resclientquery = $conn->query($clientquery);
                }
            }
            $sql2 = "INSERT INTO endorsement_logs SET
                    client_id = '". $_POST["clientcode"]."',
                    endo_code = '". $_POST['endorsementcode']."',
                    endo_action = 'Returning of Endorsement to Supervisor',
                    assigned_poc = '". $_POST['supervisorcode']."',
                    assigned_operations = '". $_SESSION['user_id'] ."',
                    assigned_team = '$op_teamid',
                    datetime_added = NOW()";
            $res2 = $conn->query($sql2);
            $sql3 = "INSERT INTO tbl_notifications SET
                    notif_subject = 'Database Check - $endorsementcode',
                    notif_text = 'Return Endorsement - Analyst',
                    notif_details = 'Success Returning of Endorsement',
                    notif_status = '0',
                    notif_datetime = NOW(),
                    notif_to = '". $_POST["supervisorcode"]."',
                    notif_from =    '". $_SESSION["user_id"]."'";     
            $res3 = $conn->query($sql3);
            $sql4 = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Distribute Endorsement (DC - Analyst)',
                    x_module_action = 'Returning of Endorsement'";
            $res4 = $conn->query($sql4);                           
            if ($res4) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
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
            $sql1 = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Ticketing',
                    x_module_action = 'Create New Ticket'";
            $res1 = $conn->query($sql1);                                
            if ($res1) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

        // ACTIVITY LOGS //
		case 'savedashboard':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Dashboard',
                    x_module_action = 'View Dashboard'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

		case 'saveendorsementbitele':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements',
                    x_module_action = 'View Endorsements'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

		case 'savemonitorbitele':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitor Endorsements',
                    x_module_action = 'View Monitor Endorsements'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

		case 'saveuploaddtr':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'DTR Management',
                    x_module_action = 'View Upload DTR'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

		case 'savemanagedtr':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'DTR Management',
                    x_module_action = 'View Manage DTR'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;	

		case 'saveendorsementbianalyst':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements',
                    x_module_action = 'View Background Investigation'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

		case 'saveendorsementdcanalyst':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements',
                    x_module_action = 'View Database Check'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

		case 'savemonitorbianalyst':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitor Endorsements',
                    x_module_action = 'View Background Investigation'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

		case 'savemonitordcanalyst':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitor Endorsements',
                    x_module_action = 'View Dashboard Check'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

        case 'saveuserprofile':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Profile',
                    x_module_action = 'View User Profile'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;   

        case 'saveusermessaging':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Messaging',
                    x_module_action = 'View User Messaging'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveuserticketing':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Ticketing',
                    x_module_action = 'View User Ticketing'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveaddreportbitele':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements',
                    x_module_action = 'View Add Report'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savesuppdocsbitele':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements',
                    x_module_action = 'View Supporting Documents'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveviewendobitele':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements',
                    x_module_action = 'View Endorsement Details'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savereturnendobitele':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements',
                    x_module_action = 'View Returned Endorsement'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;   

        case 'saveviewreportformbitele':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements',
                    x_module_action = 'View Report Form'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveviewreportbitele':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements',
                    x_module_action = 'View Report'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break; 

        case 'savegeneraterepbitele':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements',
                    x_module_action = 'View Generate Report'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break; 

        case 'saveeditreportbida':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements - Background Investigation',
                    x_module_action = 'View Edit Report'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savesuppdocsbida':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements - Background Investigation',
                    x_module_action = 'View Supporting Documents'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savegeneraterepbitele':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements - Background Investigation',
                    x_module_action = 'View Generate Report'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break; 

        case 'saveviewendobida':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements - Background Investigation',
                    x_module_action = 'View Endorsement Details'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savereturnendobida':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements - Background Investigation',
                    x_module_action = 'View Returned Endorsement'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savereturnedbitelehistendo':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements',
                    x_module_action = 'View Returned Endorsement History'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break; 

        case 'saveviewreturnedbiendo':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements - Background Investigation',
                    x_module_action = 'View Returned Endorsement'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savereturnedbitelehistendo':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements',
                    x_module_action = 'View Returned Endorsement'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveviewreturnedbidaendo':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements - Background Investigation',
                    x_module_action = 'View Returned Endorsement'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savereturnedbidahistendo':
            $sql = "INSERT INTO tbl_operations_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Endorsements - Background Investigation',
                    x_module_action = 'View Returned Endorsement History'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_operations_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;
	}
?>