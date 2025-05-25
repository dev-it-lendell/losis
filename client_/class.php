<?php
	include 'checking.php';

	switch ($_POST['form']) {
		// DASHBOARD //
		case 'showtotalendo':
            $sqlbi = "SELECT COUNT(a.id) AS totalendo, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(a.id) AS totalendo, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $totalbici = $row['totalendo'] ?? null;
            $totaldc = $row1['totalendo'] ?? null; 
            $totalEndo = $totalbici + $totaldc;
            echo $totalEndo;
		break;

		case 'showpendingendo':
            $sqlbi = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $pendbici = $row['pending'] ?? null; 
            $penddc = $row1['pending'] ?? null; 
            $totalpendingEndo = $pendbici + $penddc;
            echo $totalpendingEndo;
		break;

		case 'showonprocessendo':
            $sqlbi = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND (a.endo_status = '1' OR a.endo_status = '2')";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1' OR a.endo_status = '2'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $onprocbici = $row['onprocess'] ?? null;
            $onprocdc = $row1['onprocess'] ?? null; 
            $totalprogEndo = $onprocbici + $onprocdc;
            echo $totalprogEndo;
		break;

		case 'showcompletedendo':
            $sqlbi = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $compbici = $row['completed'] ?? null; 
            $compdc = $row1['completed'] ?? null; 
            $totalcompletedEndo = $compbici + $compdc;
            echo $totalcompletedEndo;
		break;

		case 'showprevtotalendo':
            $sqlbi = "SELECT COUNT(a.id) AS totalprevendo, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date)  = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND b.company_name = '$clnt_company'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(a.id) AS totalprevendo, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date)  = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND b.company_name = '$clnt_company'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $totalprevbici = $row['totalprevendo'] ?? null;
            $totalprevdc = $row1['totalprevendo'] ?? null;
            $totalprevEndo = $totalprevbici + $totalprevdc;
            echo $totalprevEndo;
		break;

		case 'showprevpendingendo':
            $sqlbi = "SELECT COUNT(a.id) AS pendprevendo, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date)  = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(a.id) AS pendprevendo, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date)  = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $pendprevbici = $row['pendprevendo'] ?? null;
            $pendprevdc = $row1['pendprevendo'] ?? null; 
            $pendprevEndo = $pendprevbici + $pendprevdc;
            echo $pendprevEndo;
		break;

		case 'showprevonprocessendo':
		    $sqlbi = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date)  = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND b.company_name = '$clnt_company' AND (a.endo_status = '1' OR a.endo_status = '2')";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(a.id) AS onprocprevendo, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date)  = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND b.company_name = '$clnt_company' AND a.endo_status = '1' OR a.endo_status = '2'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $onprocprevbici = $row['onprocprevendo'] ?? null;
            $onprocprevdc = $row1['onprocprevendo'] ?? null; 
            $onprocprevEndo = $onprocprevbici + $onprocprevdc;
            echo $onprocprevEndo;
		break;

		case 'showprevcompletedendo':
            $sqlbi = "SELECT COUNT(a.id) AS compprevendo, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date)  = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(a.id) AS compprevendo, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE YEAR(a.endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(a.endo_date)  = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $compprevbici = $row['compprevendo'] ?? null;
            $compprevdc = $row1['compprevendo'] ?? null; 
            $compprevEndo = $compprevbici + $compprevdc;
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

        case 'showmemberlist':
            $sql = "SELECT a.user_id, a.fname, a.mname, a.lname, a.suffix, a.user_position, a.user_image, b.user_id, b.userstatus_ FROM tbl_client AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id WHERE a.company_name = '$company_name' AND a.user_id != '". $_SESSION['user_id'] ."' AND b.userstatus_ = '1' ORDER BY a.lname ASC LIMIT 5";
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
                                <small style="font-weight: bold; margin-top: -7px;"><?php echo $row['user_position']; ?></small>
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
                            <small style="font-weight: bold; margin-top: -7px;">No Members</small>
                        </div>
                    </li>
                <?php           
            }
        break;

        case 'showsupervisorlist':
            $sql = "SELECT a.supervisor_id, CONCAT(a.fname,' ', a.mname,' ', a.lname,' ', a.suffix) AS supervisorfullname, a.fname, a.mname, a.lname, a.suffix, a.position_, a.team_, b.client_id, b.client_name, b.supervisor_, b.team_, c.user_id, CONCAT(c.fname,' ', c.mname,' ', c.lname,' ', c.suffix) AS supervisorname, c.user_image, d.user_id, d.userstatus_ FROM supervisor_list AS a LEFT JOIN client_list AS b ON a.team_ = b.team_ LEFT JOIN tbl_supervisor AS c ON CONCAT(a.fname,' ', a.mname,' ', a.lname,' ', a.suffix) = CONCAT(c.fname,' ', c.mname,' ', c.lname,' ', c.suffix) LEFT JOIN tbl_users AS d ON c.user_id = d.user_id WHERE b.client_name = '$company_name' AND d.userstatus_ = '1' GROUP BY CONCAT(a.fname,' ', a.mname,' ', a.lname,' ', a.suffix) ORDER BY a.lname ASC LIMIT 5";
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
                                <small style="font-weight: bold; margin-top: -7px;">Accounts Officer</small>
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

        // NEW ENDORSEMENT //
        case 'showsitelist':
            $sql = "SELECT * FROM client_list WHERE client_name = '$clnt_company' ORDER BY site_ ASC";
            ?> <option> -- Select Site -- </option>; <?php
            $res = $conn->query($sql);
            while ($row = mysqli_fetch_array($res)) {
                ?>
                    <option value ="<?php echo $row['client_id'];?>"><?php echo $row['site_'];?></option>
                <?php
            }        
        break;

        case 'selectionsite':
            $sql = "SELECT a.client_id, a.client_name, a.acronym_, a.site_, a.supervisor_, b.supervisor_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) AS spvfullname, c.user_id, CONCAT(c.fname, ' ', c.mname,  ' ', c.lname, ' ', c.suffix) AS spvname FROM client_list AS a LEFT JOIN supervisor_list AS b ON a.supervisor_ = b.supervisor_id LEFT JOIN tbl_supervisor AS c ON CONCAT(b.fname, ' ', b.mname,  ' ', b.lname, ' ', b.suffix) =  CONCAT(c.fname, ' ', c.mname,  ' ', c.lname, ' ', c.suffix) WHERE a.client_id = '".$_POST["sites"]."'";
            $res = $conn->query($sql);
            while ($row = mysqli_fetch_array($res)) {
                $acronym_ = $row['acronym_'] ?? null;
                $siteclient_id = $row['client_id'] ?? null;

                ?>
                    <input class="form-control" type="text" id="clientsite" name="clientsite" style="background-color: #fff; cursor: pointer; display: none;" readonly value="<?php echo $siteclient_id; ?>"> 
                    <input class="form-control" type="text" id= "supervisorid" name="supervisorid" style="background-color: #fff; cursor: pointer; display: none;" readonly value="<?php echo $user_id; ?>">
                    <input class="form-control" type="text" id= "clientacronym" name="clientacronym" style="background-color: #fff; cursor: pointer; display: none;" readonly value="<?php echo $acronym_; ?>">
                <?php
            } 
        break;

        // MANAGE ENDORSEMENTS //

        // BACKGROUND INVESTIGATION //
        case 'showbitotalendo':
            $sql = "SELECT COUNT(a.id) AS totalendo, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalbi = $row['totalendo']; 
            echo $totalbi;
        break;

        case 'showbistatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'savererunbi':
            $endocode_ = $_POST['endocode_'];
            $sql = "UPDATE tbl_endo SET change_package = '1' WHERE endo_code = '". $_POST['endocode_'] ."'";
            $res = $conn->query($sql);
            $sql1 = "INSERT INTO tbl_bi_rerun_endorsement SET
                        endo_code = '". $_POST['endocode_'] ."',
                        current_package = '". $_POST['packagedesc_'] ."',
                        new_package = '". $_POST['updatedpkg'] ."'";
            $res1 = $conn->query($sql1);
            $sql2 = "INSERT INTO endorsement_logs SET
                    client_id = '". $_SESSION['user_id'] ."',
                    endo_code = '". $_POST['endocode_'] ."',
                    endo_action = 'Upgrading of Package - BI',
                    assigned_poc = '". $_POST['pocid'] ."',
                    assigned_team = '$team_',
                    datetime_added = NOW()";
            $res2 = $conn->query($sql2);    
            $sql3 = "INSERT INTO tbl_notifications SET
                    notif_subject = 'Background Investigation - $endocode_',
                    notif_text = 'Rerun of Package',
                    notif_details = 'Success Upgrading of Package',
                    notif_status = '0',
                    notif_datetime = NOW(),
                    notif_to = '". $_POST["pocid"]."',
                    notif_from =    '". $_SESSION["user_id"]."'";   
            $res3 = $conn->query($sql3); 
            $sql4 = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Endorsements - Background Investigation',
                    x_module_action = 'Upgrade Endorsement Package'";
            $res4 = $conn->query($sql4);                           
            if ($res4) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

        case 'savereturnpocbi':
            $pocendocode = $_POST['pocendocode'];
            $sql = "UPDATE tbl_bi_assigned_client SET is_returned = '1', datetime_returned = NOW() WHERE endo_code = '". $_POST['pocendocode']."'";
            $res = $conn->query($sql);
            $sql1 = "INSERT INTO tbl_bi_returned_client SET
                    endo_code = '". $_POST['pocendocode']."',
                    endo_remarks = '". $_POST['returnendopoc']."',
                    assigned_supervisor = '". $_POST['poccode']."',
                    assigned_client = '". $_SESSION['user_id'] ."',
                    datetime_returned = NOW()";
            $res1 = $conn->query($sql1);
            if ($res1) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $returnsupervisorid = rand(1,99999);
                    $supervisorreturnuser_id = "RETURN-".$returnsupervisorid."-".$last_return_id;
                    $clientquery = "UPDATE tbl_bi_returned_client SET return_code = '". $supervisorreturnuser_id ."' WHERE id = '". $last_return_id ."'";
                    $resclientquery = $conn->query($clientquery);
                }
            }
            $sql2 = "INSERT INTO endorsement_logs SET
                    client_id = '". $_SESSION['user_id'] ."',
                    endo_code = '". $_POST['pocendocode']."',
                    endo_action = 'Returning of Endorsement to Supervisor',
                    assigned_poc = '". $_POST['poccode']."',
                    assigned_team = '$team_',
                    datetime_added = NOW()";
            $res2 = $conn->query($sql2);
            $sql3 = "INSERT INTO tbl_notifications SET
                    notif_subject = 'Background Investigation - $pocendocode',
                    notif_text = 'Return Endorsement - Supervisor',
                    notif_details = 'Success Returning of Endorsement',
                    notif_status = '0',
                    notif_datetime = NOW(),
                    notif_to = '". $_POST["pocendocode"]."',
                    notif_from =    '". $_SESSION["user_id"]."'";     
            $res3 = $conn->query($sql3);
            $sql4 = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Endorsements - Background Investigation',
                    x_module_action = 'Returning of Endorsement'";
            $res4 = $conn->query($sql4);                           
            if ($res4) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

        // DATABASE CHECK //
        case 'showdctotalendo':
            $sql = "SELECT COUNT(a.id) AS totalendo, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totaldc = $row['totalendo']; 
            echo $totaldc;
        break;

        case 'showdcstatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'savererundc':
            $endocode_ = $_POST['endocode_'];
            $sql = "UPDATE tbl_endo_criminal SET change_package = '1' WHERE endo_code = '". $_POST['endocode_'] ."'";
            $res = $conn->query($sql);
            $sql1 = "INSERT INTO tbl_dc_rerun_endorsement SET
                        endo_code = '". $_POST['endocode_'] ."',
                        current_package = '". $_POST['packagedesc_'] ."',
                        new_package = '". $_POST['updatedpkg'] ."'";
            $res1 = $conn->query($sql1);
            $sql2 = "INSERT INTO endorsement_logs SET
                    client_id = '". $_SESSION['user_id'] ."',
                    endo_code = '". $_POST['endocode_'] ."',
                    endo_action = 'Upgrading of Package - DC',
                    assigned_poc = '". $_POST['pocid'] ."',
                    assigned_team = '$team_',
                    datetime_added = NOW()";
            $res2 = $conn->query($sql2);   
            $sql3 = "INSERT INTO tbl_notifications SET
                    notif_subject = 'Database Check - $endocode_',
                    notif_text = 'Rerun of Package',
                    notif_details = 'Success Upgrading of Package',
                    notif_status = '0',
                    notif_datetime = NOW(),
                    notif_to = '". $_POST["pocid"]."',
                    notif_from =    '". $_SESSION["user_id"]."'";   
            $res3 = $conn->query($sql3);
            $sql4 = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Endorsements - Database Check',
                    x_module_action = 'Upgrade Endorsement Package'";
            $res4 = $conn->query($sql4);                           
            if ($res4) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            } 
            echo 1;
        break;

        case 'savereturnpocdc':
            $pocendocode = $_POST['pocendocode'];
            $sql = "UPDATE tbl_dc_assigned_client SET is_returned = '1', datetime_returned = NOW() WHERE endo_code = '". $_POST['pocendocode']."'";
            $res = $conn->query($sql);
            $sql1 = "INSERT INTO tbl_dc_returned_client SET
                    endo_code = '". $_POST['pocendocode']."',
                    endo_remarks = '". $_POST['returnendopoc']."',
                    assigned_supervisor = '". $_POST['poccode']."',
                    assigned_client = '". $_SESSION['user_id'] ."',
                    datetime_returned = NOW()";
            $res1 = $conn->query($sql1);
            if ($res1) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $returnsupervisorid = rand(1,99999);
                    $supervisorreturnuser_id = "RETURN-".$returnsupervisorid."-".$last_return_id;
                    $clientquery = "UPDATE tbl_dc_returned_client SET return_code = '". $supervisorreturnuser_id ."' WHERE id = '". $last_return_id ."'";
                    $resclientquery = $conn->query($clientquery);
                }
            }
            $sql2 = "INSERT INTO endorsement_logs SET
                    client_id = '". $_SESSION['user_id'] ."',
                    endo_code = '". $_POST['pocendocode']."',
                    endo_action = 'Returning of Endorsement to Supervisor',
                    assigned_poc = '". $_POST['poccode']."',
                    assigned_team = '$team_',
                    datetime_added = NOW()";
            $res2 = $conn->query($sql2);
            $sql3 = "INSERT INTO tbl_notifications SET
                    notif_subject = 'Database Check - $pocendocode',
                    notif_text = 'Return Endorsement - Supervisor',
                    notif_details = 'Success Returning of Endorsement',
                    notif_status = '0',
                    notif_datetime = NOW(),
                    notif_to = '". $_POST["poccode"]."',
                    notif_from =    '". $_SESSION["user_id"]."'";     
            $res3 = $conn->query($sql3);
            $sql4 = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Endorsement - Database Check',
                    x_module_action = 'Returning of Endorsement'";
            $res4 = $conn->query($sql4);                           
            if ($res4) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

        // MONITOR ENDORSEMENTS //

        // BACKGROUND INVESTIGATION //
        case 'showbicurrentmonth':
            $sql = "SELECT COUNT(a.id) AS currentmonth, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalbi = $row['currentmonth']; 
            echo $totalbi;
        break;

        case 'showbicurrentyear':
            $sql = "SELECT COUNT(a.id) AS currentyear, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalbi = $row['currentyear']; 
            echo $totalbi;
        break;

        case 'showbijanstatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '01' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '01' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '01' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '01' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '01' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '01' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showbifebstatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '02' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '02' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '02' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '02' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '02' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '02' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showbimarstatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '03' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '03' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '03' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '03' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '03' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '03' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showbiaprstatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '04' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '04' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '04' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '04' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '04' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '04' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showbimaystatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '05' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '05' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '05' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '05' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '05' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '05' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showbijunestatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '06' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '06' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '06' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '06' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '06' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '06' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showbijulystatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '07' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '07' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '07' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '07' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '07' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '07' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showbiaugstatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '08' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '08' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '08' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '08' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '08' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '08' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showbiseptstatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '09' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '09' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '09' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '09' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '09' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '09' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showbioctstatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '10' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '10' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '10' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '10' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '10' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '10' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showbinovstatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '11' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '11' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '11' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '11' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '11' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '11' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showbidecstatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '12' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '12' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '12' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '12' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '12' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '12' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        // DATABASE CHECK //
        case 'showdccurrentmonth':
            $sql = "SELECT COUNT(a.id) AS currentmonth, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalbi = $row['currentmonth']; 
            echo $totalbi;
        break;

        case 'showdccurrentyear':
            $sql = "SELECT COUNT(a.id) AS currentyear, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalbi = $row['currentyear']; 
            echo $totalbi;
        break;

        case 'showdcjanstatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '01' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '01' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '01' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '01' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '01' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '01' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showdcfebstatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '02' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '02' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '02' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '02' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '02' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '02' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showdcmarstatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '03' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '03' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '03' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '03' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '03' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '03' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showdcaprstatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '04' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '04' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '04' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '04' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '04' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '04' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showdcmaystatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '05' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '05' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '05' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '05' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '05' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '05' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showdcjunestatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '06' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '06' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '06' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '06' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '06' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '06' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showdcjulystatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '07' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '07' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '07' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '07' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '07' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '07' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showdcaugstatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '08' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '08' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '08' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '08' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '08' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '08' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showdcseptstatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '09' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '09' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '09' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '09' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '09' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '09' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showdcoctstatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '10' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '10' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '10' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '10' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '10' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '10' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showdcnovstatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '11' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '11' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '11' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '11' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '11' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '11' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        case 'showdcdecstatus':
            $sql = "SELECT COUNT(a.id) AS pending, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '12' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS received, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '12' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(a.id) AS onprocess, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '12' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(a.id) AS forreview, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '12' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3' AND a.is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(a.id) AS done, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '12' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(a.id) AS completed, a.client_id, b.user_id, b.company_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id WHERE MONTH(a.endo_date) = '12' AND YEAR(a.endo_date) = YEAR(NOW()) AND b.company_name = '$clnt_company' AND a.endo_status = '4'";
            $res5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_array($res5);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalreceived = $row1['received'];
                $totalonprocess = $row2['onprocess'];
                $totalforreview = $row3['forreview'];
                $totaldone = $row4['done'];
                $totalcompleted = $row5['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalreceived; ?> RECEIVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totalonprocess; ?> ON-PROCESS</span>
                    <span class="badge badge-muted" style="font-weight: bold; background-color: #fff; border: 1px solid black;"><?php echo $totalforreview; ?> FOR-REVIEW</span>
                    <span class="badge badge-default" style="font-weight: bold; background-color: #fff;"><?php echo $totaldone; ?> DONE</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        // APPLICATIONS //

        // NEW APPLICATION //

        // MANAGE APPLICATIONS //
        case 'showcurrentotalappl':
            $sql = "SELECT COUNT(id) AS currentappl FROM application_list WHERE MONTH(application_datetime) = MONTH(NOW()) AND YEAR(application_datetime) = YEAR(NOW()) AND client_id = '". $_SESSION['user_id'] ."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalapplmonthly = $row['currentappl'];
            echo $totalapplmonthly;
        break;

        case 'showapplstatus':
            $sql = "SELECT COUNT(id) AS pending FROM application_list WHERE MONTH(application_datetime) = MONTH(NOW()) AND YEAR(application_datetime) = YEAR(NOW()) AND application_status = '0' AND client_id = '". $_SESSION['user_id'] ."'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS approved FROM application_list WHERE MONTH(application_datetime) = MONTH(NOW()) AND YEAR(application_datetime) = YEAR(NOW()) AND application_status = '1' AND client_id = '". $_SESSION['user_id'] ."'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS disapproved FROM application_list WHERE MONTH(application_datetime) = MONTH(NOW()) AND YEAR(application_datetime) = YEAR(NOW()) AND application_status = '2' AND client_id = '". $_SESSION['user_id'] ."'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            while ($row = mysqli_fetch_array($res)) {
                $totalpending = $row['pending'];
                $totalapproved = $row1['approved'];
                $totaldisapproved = $row2['disapproved'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-warning" style="font-weight: bold; background-color: #fff;"> <?php echo $totalpending; ?> PENDING</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalapproved; ?> APPROVED</span>
                    <span class="badge badge-danger" style="font-weight: bold; background-color: #fff;"><?php echo $totaldisapproved; ?> DISAPPROVED</span>
                </p>
                <?php
            }
        break;

        // USER PROFILE //
        case 'showactlogscurrentmonth':
            $sql = "SELECT COUNT(id) AS monthlyactivity FROM tbl_client_history_logs WHERE MONTH(datetime_log) = MONTH(NOW()) AND YEAR(datetime_log) = YEAR(NOW()) AND user_id = '". $_SESSION['user_id'] ."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalmonthlyactivity = $row['monthlyactivity'];
            echo $totalmonthlyactivity;
        break;

        case 'showactlogscurrentyear':
            $sql = "SELECT COUNT(id) AS yearlyactivity FROM tbl_client_history_logs WHERE YEAR(datetime_log) = YEAR(NOW()) AND user_id = '". $_SESSION['user_id'] ."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalyearlyactivity = $row['yearlyactivity'];
            echo $totalyearlyactivity;
        break;

        case 'showuserlogscurrentmonth':
            $sql = "SELECT COUNT(id) AS monthlylogin FROM tbl_user_logs WHERE login_dateTime IS NOT NULL AND logout_dateTime IS NOT NULL AND MONTH(logout_dateTime) = MONTH(NOW()) AND YEAR(logout_dateTime) = YEAR(NOW()) AND user_id = '". $_SESSION['user_id'] ."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalmonthlyuserlogs = $row['monthlylogin'];
            echo $totalmonthlyuserlogs;
        break;

        case 'showuserlogscurrentyear':
            $sql = "SELECT COUNT(id) AS yearlylogin FROM tbl_user_logs WHERE login_dateTime IS NOT NULL AND logout_dateTime IS NOT NULL AND YEAR(logout_dateTime) = YEAR(NOW()) AND user_id = '". $_SESSION['user_id'] ."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalyearluserlogs = $row['yearlylogin'];
            echo $totalyearluserlogs;
        break;

        // ACTIVITY LOGS //
        case 'savedashboard':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Dashboard',
                    x_module_action = 'View Dashboard'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savenewendorsement':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'New Endorsement',
                    x_module_action = 'View New Endorsement'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savemanageendobi':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Endorsements',
                    x_module_action = 'View Background Investigation'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savemanageendodc':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Endorsements',
                    x_module_action = 'View Database Check'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savemonitorendobi':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitor Endorsements',
                    x_module_action = 'View Background Investigation'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savemonitorendodc':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitor Endorsements',
                    x_module_action = 'View Database Check'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savenewapplication':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'New Application',
                    x_module_action = 'View New Application'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break; 

        case 'savemanageappl':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Applications',
                    x_module_action = 'View Manage Applications'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;  

        case 'saveuserprofile':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Profile',
                    x_module_action = 'View User Profile'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;   

        case 'saveusermessaging':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Messaging',
                    x_module_action = 'View User Messaging'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savedownloadendocsv':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'New Endorsement',
                    x_module_action = 'Download CSV Endorsement Template'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveupgradepkgbi':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Endorsements - Background Investigation',
                    x_module_action = 'View Upgrade Package'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveviewendobi':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Endorsements - Background Investigation',
                    x_module_action = 'View Endorsement Details'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;    

        case 'saveuploaddocs':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Endorsements - Background Investigation',
                    x_module_action = 'View Uploading of Documents'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;   

        case 'saveviewdocs':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Endorsements - Background Investigation',
                    x_module_action = 'View Supporting Documents'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;  

        case 'saveviewdocs':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Endorsements - Background Investigation',
                    x_module_action = 'View Supporting Documents'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;    

        case 'savereturnendobi':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Endorsements - Background Investigation',
                    x_module_action = 'View Returning of Endorsement'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savedownloadrepbi':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Endorsements - Background Investigation',
                    x_module_action = 'View Downloading of Report'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveupgradepkgdc':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Endorsements - Database Check',
                    x_module_action = 'View Upgrade Package'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveviewendodc':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Endorsements - Database Check',
                    x_module_action = 'View Endorsement Details'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savereturnendodc':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Endorsements - Database Check',
                    x_module_action = 'View Returning of Endorsement'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break; 

        case 'savedownloadrepdc':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Endorsements - Database Check',
                    x_module_action = 'View Downloading of Report'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savemonitorbiendo':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitor Endorsements - Background Investigation';
                    x_module_action = 'View Endorsement Details'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savemonitordcendo':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitor Endorsements - Database Check';
                    x_module_action = 'View Endorsement Details'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveapprovalappl':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Applications - Manage Applications',
                    x_module_action = 'View Approval of Application'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveviewupdateprofile':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'My Profile',
                    x_module_action = 'View My Update Profile'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break; 

        case 'saveviewuserlogs':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'My Profile',
                    x_module_action = 'View My User Logs'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveviewactivitylogs':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'My Profile',
                    x_module_action = 'View My Activity Logs'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break; 

        case 'saveviewingactivitylog':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'My Activity Logs',
                    x_module_action = 'View Selected Activity Log'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break; 

        case 'saveviewinguserlog':
            $sql = "INSERT INTO tbl_client_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'My User Logs',
                    x_module_action = 'View Selected User Log'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_client_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break; 

        case 'savemonitorbiviewendo':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitor Endorsements - Background Investigation';
                    x_module_action = 'View Endorsement'";
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

        case 'savemonitordcviewendo':
            $sql = "INSERT INTO tbl_supervisor_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitor Endorsements - Database Check';
                    x_module_action = 'View Endorsement'";
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