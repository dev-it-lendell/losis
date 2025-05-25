<?php
    set_time_limit(0);
    include 'checking.php';

    switch ($_POST['form']) {
        // DASHBOARD //
        case 'displayendogoal':
            $sql = "SELECT * FROM operations_team_corinthians WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $sql1 = "SELECT * FROM operations_team_ecclesiastes WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT * FROM operations_team_mark WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res2 = $conn->query($sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT * FROM operations_team_psalms WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res3 = $conn->query($sql3);
            $row3 = mysqli_fetch_array($res3);
            $endogoal_corinthians = $row['endo_goal']; 
            $endogoal_ecclesiastes = $row1['endo_goal']; 
            $endogoal_mark = $row2['endo_goal']; 
            $endogoal_psalms = $row3['endo_goal']; 
            $totalgoalmonthendo = $endogoal_corinthians + $endogoal_ecclesiastes + $endogoal_mark + $endogoal_psalms;
            echo $totalgoalmonthendo;
        break;

        case 'displaybillinggoal':
            $sql = "SELECT * FROM operations_team_corinthians WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $sql1 = "SELECT * FROM operations_team_ecclesiastes WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT * FROM operations_team_mark WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res2 = $conn->query($sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT * FROM operations_team_psalms WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res3 = $conn->query($sql3);
            $row3 = mysqli_fetch_array($res3);
            $billinggoal_corinthians = $row['billing_goal']; 
            $billinggoal_ecclesiastes = $row1['billing_goal']; 
            $billinggoal_mark = $row2['billing_goal']; 
            $billinggoal_psalms = $row3['billing_goal']; 
            $totalgoalmonthbilling = $billinggoal_corinthians + $billinggoal_ecclesiastes + $billinggoal_mark + $billinggoal_psalms;
            echo $totalgoalmonthbilling;
        break;

        case 'displayactualendo':
            $sql = "SELECT * FROM operations_team_corinthians WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $sql1 = "SELECT * FROM operations_team_ecclesiastes WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT * FROM operations_team_mark WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res2 = $conn->query($sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT * FROM operations_team_psalms WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res3 = $conn->query($sql3);
            $row3 = mysqli_fetch_array($res3);
            $endogoal_corinthians = $row['endo_goal']; 
            $endogoal_ecclesiastes = $row1['endo_goal']; 
            $endogoal_mark = $row2['endo_goal']; 
            $endogoal_psalms = $row3['endo_goal']; 
            $endoactual_corinthians = $row['actual_endo']; 
            $endoactual_ecclesiastes = $row1['actual_endo']; 
            $endoactual_mark = $row2['actual_endo']; 
            $endoactual_psalms = $row3['actual_endo']; 
            $totalgoalmonthendo = ((int)$endogoal_corinthians + (int)$endogoal_ecclesiastes + (int)$endogoal_mark + (int)$endogoal_psalms);
            $totalactualmonthendo = ((int)$endoactual_corinthians + (int)$endoactual_ecclesiastes + (int)$endoactual_mark + (int)$endoactual_psalms);
            if ($totalgoalmonthendo > $totalactualmonthendo) {
                ?>
                    <div class="number" style="font-weight: bold; color: #D22B2B;"><?php echo $totalactualmonthendo; ?></div>
                <?php
            } else if ($totalactualmonthendo > $totalgoalmonthendo) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $totalactualmonthendo; ?></div>
                <?php
            } else if ($totalgoalmonthendo = $totalactualmonthendo) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $totalactualmonthendo; ?></div>
                <?php
            }        
        break;

        case 'displayactualbilling':
            $sql = "SELECT * FROM operations_team_corinthians WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $sql1 = "SELECT * FROM operations_team_ecclesiastes WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT * FROM operations_team_mark WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res2 = $conn->query($sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT * FROM operations_team_psalms WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res3 = $conn->query($sql3);
            $row3 = mysqli_fetch_array($res3);
            $billinggoal_corinthians = $row['billing_goal']; 
            $billinggoal_ecclesiastes = $row1['billing_goal']; 
            $billinggoal_mark = $row2['billing_goal']; 
            $billinggoal_psalms = $row3['billing_goal']; 
            $billingactual_corinthians = $row['actual_billing']; 
            $billingactual_ecclesiastes = $row1['actual_billing']; 
            $billingactual_mark = $row2['actual_billing']; 
            $billingactual_psalms = $row3['actual_billing']; 
            $totalgoalmonthbilling = $billinggoal_corinthians + $billinggoal_ecclesiastes + $billinggoal_mark + $billinggoal_psalms;
            $totalactualmonthbilling = $billingactual_corinthians + $billingactual_ecclesiastes + $billingactual_mark + $billingactual_psalms;
            if ($totalgoalmonthbilling > $totalactualmonthbilling) {
                ?>
                    <div class="number" style="font-weight: bold; color: #D22B2B;"><?php echo $totalactualmonthbilling; ?></div>
                <?php
            } else if ($totalactualmonthbilling > $totalgoalmonthbilling) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $totalactualmonthbilling; ?></div>
                <?php
            } else if ($totalgoalmonthbilling = $totalactualmonthbilling) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $totalactualmonthbilling; ?></div>
                <?php
            }  
        break;

        case 'admpendingendo':
            $sqlbi = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE MONTH(endo_date) = MONTH(NOW()) AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE MONTH(endo_date) = MONTH(NOW()) AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $pendbici = $row['pending']; 
            $penddc = $row1['pending']; 
            $totalpendingEndo = $pendbici + $penddc;
            echo $totalpendingEndo;
        break;

        case 'admpendingprevendo':
            $sqlbi = "SELECT COUNT(id) AS pendprevendo FROM tbl_endo WHERE YEAR(endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND endo_status = '0'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(id) AS pendprevendo FROM tbl_endo_criminal WHERE YEAR(endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND endo_status = '0'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $pendprevbici = $row['pendprevendo'];
            $pendprevdc = $row1['pendprevendo']; 
            $pendprevEndo = $pendprevbici + $pendprevdc;
            echo $pendprevEndo;
        break;

        case 'admonprocendo':
            $sqlbi = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE MONTH(endo_date) = MONTH(NOW()) AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1' OR endo_status = '2'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE MONTH(endo_date) = MONTH(NOW()) AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1' OR endo_status = '2'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $onprocbici = $row['onprocess'];
            $onprocdc = $row1['onprocess']; 
            $totalprogEndo = $onprocbici + $onprocdc;
            echo $totalprogEndo;
        break;

        case 'admonprocprevendo':
            $sqlbi = "SELECT COUNT(id) AS onprocprevendo FROM tbl_endo WHERE YEAR(endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND endo_status = '1' OR endo_status = '2'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(id) AS onprocprevendo FROM tbl_endo_criminal WHERE YEAR(endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND endo_status = '1' OR endo_status = '2'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $onprocprevbici = $row['onprocprevendo'];
            $onprocprevdc = $row1['onprocprevendo']; 
            $onprocprevEndo = $onprocprevbici + $onprocprevdc;
            echo $onprocprevEndo;
        break;

        case 'admcompendo':
            $sqlbi = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE MONTH(endo_date) = MONTH(NOW()) AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE MONTH(endo_date) = MONTH(NOW()) AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $compbici = $row['completed']; 
            $compdc = $row1['completed']; 
            $totalcompletedEndo = $compbici + $compdc;
            echo $totalcompletedEndo; 
        break;

        case 'admcompprevendo':
            $sqlbi = "SELECT COUNT(id) AS compprevendo FROM tbl_endo WHERE YEAR(endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND endo_status = '4'";
            $res = $conn->query($sqlbi);
            $row = mysqli_fetch_array($res);
            $sqldc = "SELECT COUNT(id) AS compprevendo FROM tbl_endo_criminal WHERE YEAR(endo_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(endo_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND endo_status = '4'";
            $res1 = $conn->query($sqldc);
            $row1 = mysqli_fetch_array($res1);
            $compprevbici = $row['compprevendo'];
            $compprevdc = $row1['compprevendo']; 
            $compprevEndo = $compprevbici + $compprevdc;
            echo $compprevEndo;
        break;

        case 'admticket':
            $sql = "SELECT COUNT(ticket_id) AS totalticket FROM tbl_tickets WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalmonthlyticket = $row['totalticket'];
            echo $totalmonthlyticket;
        break;

        case 'admprevticket':
            $sql = "SELECT COUNT(ticket_id) AS prevticket FROM tbl_tickets WHERE YEAR(date_created) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(date_created) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalprevticket = $row['prevticket'];
            echo $totalprevticket;
        break;

        case 'displayadmholidays':
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

        case 'displayadmmngt':
            $sql = "SELECT a.user_id, a.fname, a.mname, a.lname, a.suffix, a.user_image, b.mngt_id, b.fname, b.mname, b.lname, b.suffix, b.position_, c.user_id, c.userstatus_ FROM tbl_admin AS a LEFT JOIN management_list AS b ON CONCAT(a.fname , ' ' , a.mname,  ' ' , a.lname , ' ' , a.suffix) = CONCAT(b.fname , ' ' , b.mname,  ' ' , b.lname , ' ' , b.suffix) LEFT JOIN tbl_users AS c ON a.user_id = c.user_id WHERE a.user_id != '".$_SESSION["user_id"]."' AND c.userstatus_ = '1' ORDER BY a.lname LIMIT 5";
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
                                <small style="font-weight: bold; margin-top: -12px;"><?php echo $row['position_']; ?></small>
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
                            <small style="font-weight: bold; margin-top: -12px;">No Management</small>
                        </div>
                    </li>
                <?php           
            }
        break;

        case 'displayadmteams':
            $sql = "SELECT * FROM team_list LIMIT 5";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                        <li>
                            <div class="feeds-left"><img src="../images/icons/team.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: 2px;"></div>
                            <div class="feeds-body ml-5">
                                <p style="font-weight: bold; font-size: 11px;">Team<small class="float-right text-muted"><i class="fa fa-star"></i></small></p>
                                <small style="font-weight: bold; margin-top: -12px;"><?php echo $row['team_name']; ?></small>
                            </div>
                        </li>
                    <?php
                }
            } else {
                ?>
                    <li>
                        <div class="feeds-left"><img src="../images/icons/team.png" class="rounded-circle width35" alt="" style="width: 35px; margin-top: 6px;"></div>
                        <div class="feeds-body ml-5">
                            <p style="font-weight: bold; font-size: 11px;">No Data Available<small class="float-right text-muted"><i class="fa fa-star"></i></small></p>
                            <small style="font-weight: bold; margin-top: -12px;">No Teams</small>
                        </div>
                    </li>
                <?php           
            }
        break;

        // MONITOR ENDORSEMENT //

        // BACKGROUND INVESTIGATION //
        case 'displayadmmonthlybiendo':
            $sql = "SELECT COUNT(a.id) AS biendo, a.client_id, a.endo_date, b.user_id, b.site_id, c.client_id, c.acronym_ FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON b.site_id = c.client_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalbimonthly = $row['biendo'];
            echo $totalbimonthly;
        break;

        case 'displayadmyearlybiendo':
            $sql = "SELECT COUNT(a.id) AS biendo, a.client_id, a.endo_date, b.user_id, b.site_id, c.client_id, c.acronym_ FROM tbl_endo AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON b.site_id = c.client_id WHERE YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalbiyearly = $row['biendo'];
            echo $totalbiyearly;
        break;

        case 'adminbijan':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'adminbifeb':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'adminbimar':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'adminbiapr':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'adminbimay':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'adminbijune':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'adminbijuly':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'adminbiaug':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'adminbisept':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'adminbioct':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'adminbinov':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'adminbidec':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo WHERE MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo WHERE MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo WHERE MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo WHERE MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo WHERE MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo WHERE MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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
        case 'displayadmmonthlydcendo':
            $sql = "SELECT COUNT(a.id) AS dcendo, a.client_id, a.endo_date, b.user_id, b.site_id, c.client_id, c.acronym_ FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON b.site_id = c.client_id WHERE MONTH(a.endo_date) = MONTH(NOW()) AND YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totaldcmonthly = $row['dcendo'];
            echo $totaldcmonthly;
        break;

        case 'displayadmyearlydcendo':
            $sql = "SELECT COUNT(a.id) AS dcendo, a.client_id, a.endo_date, b.user_id, b.site_id, c.client_id, c.acronym_ FROM tbl_endo_criminal AS a LEFT JOIN tbl_client AS b ON a.client_id = b.user_id LEFT JOIN client_list AS c ON b.site_id = c.client_id WHERE YEAR(a.endo_date) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totaldcyearly = $row['dcendo'];
            echo $totaldcyearly;
        break;        

        case 'admindcjan':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE MONTH(endo_date) = '01' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'admindcfeb':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE MONTH(endo_date) = '02' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'admindcmar':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE MONTH(endo_date) = '03' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'admindcapr':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE MONTH(endo_date) = '04' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'admindcmay':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE MONTH(endo_date) = '05' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'admindcjune':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE MONTH(endo_date) = '06' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'admindcjuly':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE MONTH(endo_date) = '07' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'admindcaug':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE MONTH(endo_date) = '08' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'admindcsept':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE MONTH(endo_date) = '09' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'admindcoct':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE MONTH(endo_date) = '10' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'admindcnov':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE MONTH(endo_date) = '11' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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

        case 'admindcdec':
            $sql = "SELECT COUNT(id) AS pending FROM tbl_endo_criminal WHERE MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(id) AS received FROM tbl_endo_criminal WHERE MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS onprocess FROM tbl_endo_criminal WHERE MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '2'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT COUNT(id) AS forreview FROM tbl_endo_criminal WHERE MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3' AND is_for_review = '1'";
            $res3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_array($res3);
            $sql4 = "SELECT COUNT(id) AS done FROM tbl_endo_criminal WHERE MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '3'";
            $res4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_array($res4);
            $sql5 = "SELECT COUNT(id) AS completed FROM tbl_endo_criminal WHERE MONTH(endo_date) = '12' AND YEAR(endo_date) = YEAR(NOW()) AND endo_status = '4'";
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
        // USER MANAGEMENT //

        // MANAGE USERS //
        case 'totalclients':
            $sql = "SELECT COUNT(id) AS clientcount FROM tbl_users WHERE usertype_ = '1'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $clientaccnt = $row['clientcount']; 
            echo $clientaccnt;
        break;

        case 'totalsupervisors':
            $sql = "SELECT COUNT(id) AS supervisorcount FROM tbl_users WHERE usertype_ = '2'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $supervisoraccnt = $row['supervisorcount']; 
            echo $supervisoraccnt;
        break;

        case 'totaloperations':
            $sql = "SELECT COUNT(id) AS operationscount FROM tbl_users WHERE usertype_ = '3'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $operationsaccnt = $row['operationscount']; 
            echo $operationsaccnt;
        break;

        case 'totalsupport':
            $sql = "SELECT COUNT(id) AS supportcount FROM tbl_users WHERE usertype_ = '4'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $supportaccnt = $row['supportcount']; 
            echo $supportaccnt;
        break;

        case 'totaladmin':
            $sql = "SELECT COUNT(id) AS admincount FROM tbl_users WHERE usertype_ = '0'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $adminaccnt = $row['admincount']; 
            echo $adminaccnt;
        break;

        case 'totaldevelopers':
            $sql = "SELECT COUNT(id) AS developercount FROM tbl_users WHERE usertype_ = '5'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $developeraccnt = $row['developercount']; 
            echo $developeraccnt;
        break;

        case 'saveblacklistaccount':
            $sql = "UPDATE tbl_users SET is_blacklisted = '1' WHERE user_id = '".$_POST["useroffid"]."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $sql1 = "INSERT INTO tbl_blacklisted_accounts SET
                    user_id = '".$_POST["useroffid"]."',
                    fname = '".$_POST["userfname"]."',
                    mname = '".$_POST["usermname"]."',
                    lname = '".$_POST["userlname"]."',
                    suffix = '".$_POST["usersuffix"]."',
                    position_ = '".$_POST["userposition"]."',
                    usertype = '".$_POST["usertype"]."',
                    remarks_ = '".$_POST["blacklistremarks"]."'";
            $res1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Management - Manage Users',
                    x_module_action = 'Blacklist User Account'";
            $res2 = $conn->query($sql2);                                
            if ($res2) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

        case 'savedeletedclient':
            $sql = "DELETE FROM tbl_users WHERE user_id = '".$_POST["clientoffid"]."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $sql1 = "DELETE FROM tbl_client WHERE user_id = '".$_POST["clientoffid"]."'";
            $res1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "INSERT INTO tbl_deleted_accounts SET
                    user_id = '".$_POST["clientoffid"]."',
                    fname = '".$_POST["clientfname"]."',
                    mname = '".$_POST["clientmname"]."',
                    lname = '".$_POST["clientlname"]."',
                    suffix = '".$_POST["clientsuffix"]."',
                    position_ = '".$_POST["clientposition"]."',
                    usertype = '".$_POST["clienttype"]."',
                    remarks_ = '".$_POST["clientdeleteremarks"]."'";
            $res2 = $conn->query($sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Management - Manage Users',
                    x_module_action = 'Delete Client Account'";
            $res3 = $conn->query($sql3);                                
            if ($res3) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

        case 'savedeletedsupervisor':
            $sql = "DELETE FROM tbl_users WHERE user_id = '".$_POST["supervisoroffid"]."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $sql1 = "DELETE FROM tbl_supervisor WHERE user_id = '".$_POST["supervisoroffid"]."'";
            $res1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "INSERT INTO tbl_deleted_accounts SET
                    user_id = '".$_POST["supervisoroffid"]."',
                    fname = '".$_POST["supervisorfname"]."',
                    mname = '".$_POST["supervisormname"]."',
                    lname = '".$_POST["supervisorlname"]."',
                    suffix = '".$_POST["supervisorsuffix"]."',
                    position_ = '".$_POST["supervisorposition"]."',
                    usertype = '".$_POST["supervisortype"]."',
                    remarks_ = '".$_POST["supervisordeleteremarks"]."'";
            $res2 = $conn->query($sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Management - Manage Users',
                    x_module_action = 'Delete Supervisor Account'";
            $res3 = $conn->query($sql3);                                
            if ($res3) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

        case 'savedeletedoperations':
            $sql = "DELETE FROM tbl_users WHERE user_id = '".$_POST["operationsoffid"]."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $sql1 = "DELETE FROM tbl_operations WHERE user_id = '".$_POST["operationsoffid"]."'";
            $res1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "INSERT INTO tbl_deleted_accounts SET
                    user_id = '".$_POST["operationsoffid"]."',
                    fname = '".$_POST["operationsfname"]."',
                    mname = '".$_POST["operationsmname"]."',
                    lname = '".$_POST["operationslname"]."',
                    suffix = '".$_POST["operationssuffix"]."',
                    position_ = '".$_POST["operationsposition"]."',
                    usertype = '".$_POST["operationstype"]."',
                    remarks_ = '".$_POST["operationsdeleteremarks"]."'";
            $res2 = $conn->query($sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Management - Manage Users',
                    x_module_action = 'Delete Operations Account'";
            $res3 = $conn->query($sql3);                                
            if ($res3) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

        case 'savedeletedsupport':
            $sql = "DELETE FROM tbl_users WHERE user_id = '".$_POST["supportoffid"]."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $sql1 = "DELETE FROM tbl_support WHERE user_id = '".$_POST["supportoffid"]."'";
            $res1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "INSERT INTO tbl_deleted_accounts SET
                    user_id = '".$_POST["supportoffid"]."',
                    fname = '".$_POST["supportfname"]."',
                    mname = '".$_POST["supportmname"]."',
                    lname = '".$_POST["supportlname"]."',
                    suffix = '".$_POST["supportsuffix"]."',
                    position_ = '".$_POST["supportposition"]."',
                    usertype = '".$_POST["supporttype"]."',
                    remarks_ = '".$_POST["supportdeleteremarks"]."'";
            $res2 = $conn->query($sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Management - Manage Users',
                    x_module_action = 'Delete Support Account'";
            $res3 = $conn->query($sql3);                                
            if ($res3) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

        case 'savedeletedadmin':
            $sql = "DELETE FROM tbl_users WHERE user_id = '".$_POST["adminoffid"]."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $sql1 = "DELETE FROM tbl_admin WHERE user_id = '".$_POST["adminoffid"]."'";
            $res1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "INSERT INTO tbl_deleted_accounts SET
                    user_id = '".$_POST["adminoffid"]."',
                    fname = '".$_POST["adminfname"]."',
                    mname = '".$_POST["adminmname"]."',
                    lname = '".$_POST["adminlname"]."',
                    suffix = '".$_POST["adminsuffix"]."',
                    position_ = '".$_POST["adminposition"]."',
                    usertype = '".$_POST["admintype"]."',
                    remarks_ = '".$_POST["admindeleteremarks"]."'";
            $res2 = $conn->query($sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Management - Manage Users',
                    x_module_action = 'Delete Admin Account'";
            $res3 = $conn->query($sql3);                                
            if ($res3) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

        case 'savedeleteddeveloper':
            $sql = "DELETE FROM tbl_users WHERE user_id = '".$_POST["developeroffid"]."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $sql1 = "DELETE FROM tbl_developer WHERE user_id = '".$_POST["developeroffid"]."'";
            $res1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "INSERT INTO tbl_deleted_accounts SET
                    user_id = '".$_POST["developeroffid"]."',
                    fname = '".$_POST["developerfname"]."',
                    mname = '".$_POST["developermname"]."',
                    lname = '".$_POST["developerlname"]."',
                    suffix = '".$_POST["developersuffix"]."',
                    position_ = '".$_POST["developerposition"]."',
                    usertype = '".$_POST["developertype"]."',
                    remarks_ = '".$_POST["developerdeleteremarks"]."'";
            $res2 = $conn->query($sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Management - Manage Users',
                    x_module_action = 'Delete Developer Account'";
            $res3 = $conn->query($sql3);                                
            if ($res3) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

        case 'updateactiveaccount':
            $sql = "UPDATE FROM tbl_users SET userstatus_ = '1', user_remarks = '".$_POST["userremarks"]."' WHERE user_id = '".$_POST["user_full_id"]."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $sql1 = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Management - Manage Users',
                    x_module_action = 'Reactivate User Account'";
            $res1 = $conn->query($sql1);                                
            if ($res1) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

        // TEAM MANAGEMENT //
        case 'viewteams':
            $sql = "SELECT * FROM team_list ORDER BY team_name ASC";
            ?> <option> -- Select Team -- </option>; <?php
            $res = $conn->query($sql);
            while ($row = mysqli_fetch_array($res)) {
                ?>
                    <option value ="<?php echo $row['team_no'];?>"><?php echo $row['team_name'];?> </option>
                <?php
            }        
        break;

        case 'saveupdatedteampoc':
            $sql = "UPDATE supervisor_list SET team_ = '".$_POST["team_list"]."' WHERE supervisor_id = '".$_POST["userid_two"]."'";
            $res = $conn->query($sql);
            $sql1 = "UPDATE tbl_supervisor SET assigned_team = '".$_POST["team_list"]."' WHERE user_id = '".$_POST["userid_one"]."'";
            $res1 = $conn->query($sql1);
            $sql2 = "INSERT INTO tbl_notifications SET
                    notif_subject = 'Team Management',
                    notif_text = 'Updating of Team',
                    notif_details = 'New Team Assignment',
                    notif_status = '0',
                    notif_datetime = NOW(),
                    notif_to = '". $_POST["userid_one"]."',
                    notif_from =    '". $_SESSION["user_id"]."'";     
            $res2 = $conn->query($sql2);
            $sql3 = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Team Management',
                    x_module_action = 'Updating of Team";
            $res3 = $conn->query($sql3);                           
            if ($res3) {
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

        case 'saveupdatedteamops':
            $opstype_ = $row['opstype_'];

            if ($opstype_ == '1') {
                $sql = "UPDATE specialist_list SET team_one = '".$_POST["team_list"]."' WHERE specialist_id = '".$_POST["userid_two"]."'";
                $res = $conn->query($sql);
                $sql1 = "UPDATE operations_list SET team_one = '".$_POST["team_list"]."' WHERE operations_id = '".$_POST["userid_two"]."' AND operations_type = '1'";
                $res1 = $conn->query($sql1);
                $sql2 = "UPDATE tbl_operations SET assigned_team_one = '".$_POST["team_list"]."' WHERE user_id = '".$_POST["userid_one"]."'";
                $res2 = $conn->query($sql2);
                $sql3 = "INSERT INTO tbl_notifications SET
                        notif_subject = 'Team Management',
                        notif_text = 'Updating of Team',
                        notif_details = 'New Team Assignment',
                        notif_status = '0',
                        notif_datetime = NOW(),
                        notif_to = '". $_POST["userid_one"]."',
                        notif_from =    '". $_SESSION["user_id"]."'";     
                $res3 = $conn->query($sql3);
                $sql4 = "INSERT INTO tbl_admin_history_logs SET
                        user_id = '". $_SESSION['user_id'] ."',
                        x_module = 'Team Management',
                        x_module_action = 'Updating of Team";
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
            } else if ($opstype_ == '2') {
                $sql = "UPDATE analyst_list SET team_one = '".$_POST["team_list"]."' WHERE analyst_id = '".$_POST["userid_two"]."'";
                $res = $conn->query($sql);
                $sql1 = "UPDATE operations_list SET team_one = '".$_POST["team_list"]."' WHERE operations_id = '".$_POST["userid_two"]."' AND operations_type = '2'";
                $res1 = $conn->query($sql1);
                $sql2 = "UPDATE tbl_operations SET assigned_team_one = '".$_POST["team_list"]."' WHERE user_id = '".$_POST["userid_one"]."'";
                $res2 = $conn->query($sql2);
                $sql3 = "INSERT INTO tbl_notifications SET
                        notif_subject = 'Team Management',
                        notif_text = 'Updating of Team',
                        notif_details = 'New Team Assignment',
                        notif_status = '0',
                        notif_datetime = NOW(),
                        notif_to = '". $_POST["userid_one"]."',
                        notif_from =    '". $_SESSION["user_id"]."'";     
                $res3 = $conn->query($sql3);
                $sql4 = "INSERT INTO tbl_admin_history_logs SET
                        user_id = '". $_SESSION['user_id'] ."',
                        x_module = 'Team Management',
                        x_module_action = 'Updating of Team";
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
            } else {
                $sql = "UPDATE field_list SET team_one = '".$_POST["team_list"]."' WHERE field_id = '".$_POST["userid_two"]."'";
                $res = $conn->query($sql);
                $sql1 = "UPDATE operations_list SET team_one = '".$_POST["team_list"]."' WHERE operations_id = '".$_POST["userid_two"]."' AND operations_type = '3'";
                $res1 = $conn->query($sql1);
                $sql2 = "UPDATE tbl_operations SET assigned_team_one = '".$_POST["team_list"]."' WHERE user_id = '".$_POST["userid_one"]."'";
                $res2 = $conn->query($sql2);
                $sql3 = "INSERT INTO tbl_notifications SET
                        notif_subject = 'Team Management',
                        notif_text = 'Updating of Team',
                        notif_details = 'New Team Assignment',
                        notif_status = '0',
                        notif_datetime = NOW(),
                        notif_to = '". $_POST["userid_one"]."',
                        notif_from =    '". $_SESSION["user_id"]."'";     
                $res3 = $conn->query($sql3);
                $sql4 = "INSERT INTO tbl_admin_history_logs SET
                        user_id = '". $_SESSION['user_id'] ."',
                        x_module = 'Team Management',
                        x_module_action = 'Updating of Team";
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
            }
        break;

        case 'saveupdatedteamsupp':
            $sql = "UPDATE itsupport_list SET team_one = '".$_POST["team_list"]."' WHERE itsupp_id = '".$_POST["userid_two"]."'";
            $res = $conn->query($sql);
            $sql1 = "UPDATE tbl_support SET assigned_team = '".$_POST["team_list"]."' WHERE user_id = '".$_POST["userid_one"]."'";
            $res1 = $conn->query($sql1);
            $sql2 = "INSERT INTO tbl_notifications SET
                    notif_subject = 'Team Management',
                    notif_text = 'Updating of Team',
                    notif_details = 'New Team Assignment',
                    notif_status = '0',
                    notif_datetime = NOW(),
                    notif_to = '". $_POST["userid_one"]."',
                    notif_from =    '". $_SESSION["user_id"]."'";     
            $res2 = $conn->query($sql2);
            $sql3 = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Team Management',
                    x_module_action = 'Updating of Team";
            $res3 = $conn->query($sql3);                           
            if ($res3) {
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

        // DTR MANAGEMENT //
        case 'displayadmspvmonthlydtr':
            $sql = "SELECT COUNT(id) AS monthlypocdtr FROM dtr_supervisor WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalmonthlydtrpoc = $row['monthlypocdtr'];
            echo $totalmonthlydtrpoc;
        break;

        case 'displayadmspvyearlydtr':
            $sql = "SELECT COUNT(id) AS yearlypocdtr FROM dtr_supervisor WHERE YEAR(date_created) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalyearlydtrpoc = $row['yearlypocdtr'];
            echo $totalyearlydtrpoc;
        break;

        case 'displayadmopsmonthlydtr':
            $sql = "SELECT COUNT(id) AS monthlyopsdtr FROM dtr_operations WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalmonthlydtrops = $row['monthlyopsdtr'];
            echo $totalmonthlydtrops;
        break;

        case 'displayadmopsyearlydtr':
            $sql = "SELECT COUNT(id) AS yearlyopsdtr FROM dtr_operations WHERE YEAR(date_created) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalyearlydtrops = $row['yearlyopsdtr'];
            echo $totalyearlydtrops;
        break;

        case 'displayadmitsuppmonthlydtr':
            $sql = "SELECT COUNT(id) AS monthlyitsuppdtr FROM dtr_itsupport WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalmonthlydtritsupp = $row['monthlyitsuppdtr'];
            echo $totalmonthlydtritsupp;
        break;

        case 'displayadmitsuppyearlydtr':
            $sql = "SELECT COUNT(id) AS yearlyitsuppdtr FROM dtr_itsupport WHERE YEAR(date_created) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalyearlydtritsupp = $row['yearlyitsuppdtr'];
            echo $totalyearlydtritsupp;
        break;

        case 'displayadmperfmonthlydtr':
            $sql = "SELECT COUNT(id) AS monthlysupervisor FROM dtr_supervisor WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $sql1 = "SELECT COUNT(id) AS monthlyoperations FROM dtr_operations WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW())";
            $res1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS monthlyitsupport FROM dtr_itsupport WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW())";
            $res2 = $conn->query($sql2);
            $row2 = mysqli_fetch_array($res2);
            $monthlydtrsupervisor = $row['monthlysupervisor'];
            $monthlydtroperations = $row1['monthlyoperations'];
            $monthlydtritsupport = $row2['monthlyitsupport'];
            $totalMonthlyDTR = $monthlydtrsupervisor + $monthlydtroperations + $monthlydtritsupport;
            echo $totalMonthlyDTR;
        break;     

        case 'displayadmperfyearlydtr':
            $sql = "SELECT COUNT(id) AS yearlysupervisor FROM dtr_supervisor WHERE YEAR(date_created) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $sql1 = "SELECT COUNT(id) AS yearlyoperations FROM dtr_operations WHERE YEAR(date_created) = YEAR(NOW())";
            $res1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(id) AS yearlyitsupport FROM dtr_itsupport WHERE YEAR(date_created) = YEAR(NOW())";
            $res2 = $conn->query($sql2);
            $row2 = mysqli_fetch_array($res2);
            $yearlydtrsupervisor = $row['yearlysupervisor'];
            $yearlydtroperations = $row1['yearlyoperations'];
            $yearlydtritsupport = $row2['yearlyitsupport'];
            $totalYearlyDTR = $yearlydtrsupervisor + $yearlydtroperations + $yearlydtritsupport;
            echo $totalYearlyDTR;
        break;    

        case 'displayadmspvcurrentmonth':
            $sql = "SELECT COUNT(id) AS totalcountpoc FROM dtr_supervisor WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalmonthlydtrpoc = $row['totalcountpoc'];
            echo $totalmonthlydtrpoc;
        break;

        case 'displayadmopscurrentmonth':
            $sql = "SELECT COUNT(id) AS totalcountops FROM dtr_operations WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalmonthlydtrops = $row['totalcountops'];
            echo $totalmonthlydtrops;
        break;

        case 'displayadmitsuppcurrentmonth':
            $sql = "SELECT COUNT(id) AS totalcountitsupp FROM dtr_itsupport WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalmonthlydtritsupp = $row['totalcountitsupp'];
            echo $totalmonthlydtritsupp;
        break;

        case 'dtrjan':
            $sql = "SELECT * FROM team_list ORDER BY team_name ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $team_no = $row['team_no'];
                    $sql1 = "SELECT COUNT(id) AS itsupport FROM  dtr_itsupport WHERE MONTH(date_created) = '01'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res1 = $conn->query($sql1);
                    $sql2 = "SELECT COUNT(id) AS operations FROM  dtr_operations WHERE MONTH(date_created) = '01'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res2 = $conn->query($sql2);
                    $row2 = mysqli_fetch_array($res2);
                    $sql3 = "SELECT COUNT(id) AS supervisor FROM  dtr_supervisor WHERE MONTH(date_created) = '01'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res3 = $conn->query($sql3);
                    $row3 = mysqli_fetch_array($res3);
                    while ($row1 = mysqli_fetch_array($res1)) {
                        $totalitsupport = $row1['itsupport'];
                        $totaloperations = $row2['operations'];
                        $totalsupervisor = $row3['supervisor'];
                        $totalDTR = $totalitsupport + $totaloperations + $totalsupervisor;

                        ?>
                            <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalDTR. ' - ' .$row['team_name']; ?></span>
                        <?php
                    }
                }
            }
        break;

        case 'dtrfeb':
            $sql = "SELECT * FROM team_list ORDER BY team_name ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $team_no = $row['team_no'];
                    $sql1 = "SELECT COUNT(id) AS itsupport FROM  dtr_itsupport WHERE MONTH(date_created) = '02'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res1 = $conn->query($sql1);
                    $sql2 = "SELECT COUNT(id) AS operations FROM  dtr_operations WHERE MONTH(date_created) = '02'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res2 = $conn->query($sql2);
                    $row2 = mysqli_fetch_array($res2);
                    $sql3 = "SELECT COUNT(id) AS supervisor FROM  dtr_supervisor WHERE MONTH(date_created) = '02'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res3 = $conn->query($sql3);
                    $row3 = mysqli_fetch_array($res3);
                    while ($row1 = mysqli_fetch_array($res1)) {
                        $totalitsupport = $row1['itsupport'];
                        $totaloperations = $row2['operations'];
                        $totalsupervisor = $row3['supervisor'];
                        $totalDTR = $totalitsupport + $totaloperations + $totalsupervisor;

                        ?>
                            <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalDTR. ' - ' .$row['team_name']; ?></span>
                        <?php
                    }
                }
            }
        break;

        case 'dtrmar':
            $sql = "SELECT * FROM team_list ORDER BY team_name ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $team_no = $row['team_no'];
                    $sql1 = "SELECT COUNT(id) AS itsupport FROM  dtr_itsupport WHERE MONTH(date_created) = '03'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res1 = $conn->query($sql1);
                    $sql2 = "SELECT COUNT(id) AS operations FROM  dtr_operations WHERE MONTH(date_created) = '03'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res2 = $conn->query($sql2);
                    $row2 = mysqli_fetch_array($res2);
                    $sql3 = "SELECT COUNT(id) AS supervisor FROM  dtr_supervisor WHERE MONTH(date_created) = '03'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res3 = $conn->query($sql3);
                    $row3 = mysqli_fetch_array($res3);
                    while ($row1 = mysqli_fetch_array($res1)) {
                        $totalitsupport = $row1['itsupport'];
                        $totaloperations = $row2['operations'];
                        $totalsupervisor = $row3['supervisor'];
                        $totalDTR = $totalitsupport + $totaloperations + $totalsupervisor;

                        ?>
                            <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalDTR. ' - ' .$row['team_name']; ?></span>
                        <?php
                    }
                }
            }
        break;

        case 'dtrapr':
            $sql = "SELECT * FROM team_list ORDER BY team_name ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $team_no = $row['team_no'];
                    $sql1 = "SELECT COUNT(id) AS itsupport FROM  dtr_itsupport WHERE MONTH(date_created) = '04'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res1 = $conn->query($sql1);
                    $sql2 = "SELECT COUNT(id) AS operations FROM  dtr_operations WHERE MONTH(date_created) = '04'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res2 = $conn->query($sql2);
                    $row2 = mysqli_fetch_array($res2);
                    $sql3 = "SELECT COUNT(id) AS supervisor FROM  dtr_supervisor WHERE MONTH(date_created) = '04'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res3 = $conn->query($sql3);
                    $row3 = mysqli_fetch_array($res3);
                    while ($row1 = mysqli_fetch_array($res1)) {
                        $totalitsupport = $row1['itsupport'];
                        $totaloperations = $row2['operations'];
                        $totalsupervisor = $row3['supervisor'];
                        $totalDTR = $totalitsupport + $totaloperations + $totalsupervisor;

                        ?>
                            <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalDTR. ' - ' .$row['team_name']; ?></span>
                        <?php
                    }
                }
            }
        break;

        case 'dtrmay':
            $sql = "SELECT * FROM team_list ORDER BY team_name ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $team_no = $row['team_no'];
                    $sql1 = "SELECT COUNT(id) AS itsupport FROM  dtr_itsupport WHERE MONTH(date_created) = '05'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res1 = $conn->query($sql1);
                    $sql2 = "SELECT COUNT(id) AS operations FROM  dtr_operations WHERE MONTH(date_created) = '05'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res2 = $conn->query($sql2);
                    $row2 = mysqli_fetch_array($res2);
                    $sql3 = "SELECT COUNT(id) AS supervisor FROM  dtr_supervisor WHERE MONTH(date_created) = '05'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res3 = $conn->query($sql3);
                    $row3 = mysqli_fetch_array($res3);
                    while ($row1 = mysqli_fetch_array($res1)) {
                        $totalitsupport = $row1['itsupport'];
                        $totaloperations = $row2['operations'];
                        $totalsupervisor = $row3['supervisor'];
                        $totalDTR = $totalitsupport + $totaloperations + $totalsupervisor;

                        ?>
                            <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalDTR. ' - ' .$row['team_name']; ?></span>
                        <?php
                    }
                }
            }
        break;

        case 'dtrjune':
            $sql = "SELECT * FROM team_list ORDER BY team_name ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $team_no = $row['team_no'];
                    $sql1 = "SELECT COUNT(id) AS itsupport FROM  dtr_itsupport WHERE MONTH(date_created) = '06'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res1 = $conn->query($sql1);
                    $sql2 = "SELECT COUNT(id) AS operations FROM  dtr_operations WHERE MONTH(date_created) = '06'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res2 = $conn->query($sql2);
                    $row2 = mysqli_fetch_array($res2);
                    $sql3 = "SELECT COUNT(id) AS supervisor FROM  dtr_supervisor WHERE MONTH(date_created) = '06'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res3 = $conn->query($sql3);
                    $row3 = mysqli_fetch_array($res3);
                    while ($row1 = mysqli_fetch_array($res1)) {
                        $totalitsupport = $row1['itsupport'];
                        $totaloperations = $row2['operations'];
                        $totalsupervisor = $row3['supervisor'];
                        $totalDTR = $totalitsupport + $totaloperations + $totalsupervisor;

                        ?>
                            <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalDTR. ' - ' .$row['team_name']; ?></span>
                        <?php
                    }
                }
            }
        break;

        case 'dtrjuly':
            $sql = "SELECT * FROM team_list ORDER BY team_name ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $team_no = $row['team_no'];
                    $sql1 = "SELECT COUNT(id) AS itsupport FROM  dtr_itsupport WHERE MONTH(date_created) = '07'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res1 = $conn->query($sql1);
                    $sql2 = "SELECT COUNT(id) AS operations FROM  dtr_operations WHERE MONTH(date_created) = '07'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res2 = $conn->query($sql2);
                    $row2 = mysqli_fetch_array($res2);
                    $sql3 = "SELECT COUNT(id) AS supervisor FROM  dtr_supervisor WHERE MONTH(date_created) = '07'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res3 = $conn->query($sql3);
                    $row3 = mysqli_fetch_array($res3);
                    while ($row1 = mysqli_fetch_array($res1)) {
                        $totalitsupport = $row1['itsupport'];
                        $totaloperations = $row2['operations'];
                        $totalsupervisor = $row3['supervisor'];
                        $totalDTR = $totalitsupport + $totaloperations + $totalsupervisor;

                        ?>
                            <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalDTR. ' - ' .$row['team_name']; ?></span>
                        <?php
                    }
                }
            }
        break;

        case 'dtraug':
            $sql = "SELECT * FROM team_list ORDER BY team_name ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $team_no = $row['team_no'];
                    $sql1 = "SELECT COUNT(id) AS itsupport FROM  dtr_itsupport WHERE MONTH(date_created) = '08'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res1 = $conn->query($sql1);
                    $sql2 = "SELECT COUNT(id) AS operations FROM  dtr_operations WHERE MONTH(date_created) = '08'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res2 = $conn->query($sql2);
                    $row2 = mysqli_fetch_array($res2);
                    $sql3 = "SELECT COUNT(id) AS supervisor FROM  dtr_supervisor WHERE MONTH(date_created) = '08'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res3 = $conn->query($sql3);
                    $row3 = mysqli_fetch_array($res3);
                    while ($row1 = mysqli_fetch_array($res1)) {
                        $totalitsupport = $row1['itsupport'];
                        $totaloperations = $row2['operations'];
                        $totalsupervisor = $row3['supervisor'];
                        $totalDTR = $totalitsupport + $totaloperations + $totalsupervisor;

                        ?>
                            <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalDTR. ' - ' .$row['team_name']; ?></span>
                        <?php
                    }
                }
            }
        break;

        case 'dtrsept':
            $sql = "SELECT * FROM team_list ORDER BY team_name ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $team_no = $row['team_no'];
                    $sql1 = "SELECT COUNT(id) AS itsupport FROM  dtr_itsupport WHERE MONTH(date_created) = '09'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res1 = $conn->query($sql1);
                    $sql2 = "SELECT COUNT(id) AS operations FROM  dtr_operations WHERE MONTH(date_created) = '09'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res2 = $conn->query($sql2);
                    $row2 = mysqli_fetch_array($res2);
                    $sql3 = "SELECT COUNT(id) AS supervisor FROM  dtr_supervisor WHERE MONTH(date_created) = '09'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res3 = $conn->query($sql3);
                    $row3 = mysqli_fetch_array($res3);
                    while ($row1 = mysqli_fetch_array($res1)) {
                        $totalitsupport = $row1['itsupport'];
                        $totaloperations = $row2['operations'];
                        $totalsupervisor = $row3['supervisor'];
                        $totalDTR = $totalitsupport + $totaloperations + $totalsupervisor;

                        ?>
                            <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalDTR. ' - ' .$row['team_name']; ?></span>
                        <?php
                    }
                }
            }
        break;

        case 'dtroct':
            $sql = "SELECT * FROM team_list ORDER BY team_name ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $team_no = $row['team_no'];
                    $sql1 = "SELECT COUNT(id) AS itsupport FROM  dtr_itsupport WHERE MONTH(date_created) = '10'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res1 = $conn->query($sql1);
                    $sql2 = "SELECT COUNT(id) AS operations FROM  dtr_operations WHERE MONTH(date_created) = '10'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res2 = $conn->query($sql2);
                    $row2 = mysqli_fetch_array($res2);
                    $sql3 = "SELECT COUNT(id) AS supervisor FROM  dtr_supervisor WHERE MONTH(date_created) = '10'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res3 = $conn->query($sql3);
                    $row3 = mysqli_fetch_array($res3);
                    while ($row1 = mysqli_fetch_array($res1)) {
                        $totalitsupport = $row1['itsupport'];
                        $totaloperations = $row2['operations'];
                        $totalsupervisor = $row3['supervisor'];
                        $totalDTR = $totalitsupport + $totaloperations + $totalsupervisor;

                        ?>
                            <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalDTR. ' - ' .$row['team_name']; ?></span>
                        <?php
                    }
                }
            }
        break;

        case 'dtrnov':
            $sql = "SELECT * FROM team_list ORDER BY team_name ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $team_no = $row['team_no'];
                    $sql1 = "SELECT COUNT(id) AS itsupport FROM  dtr_itsupport WHERE MONTH(date_created) = '11'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res1 = $conn->query($sql1);
                    $sql2 = "SELECT COUNT(id) AS operations FROM  dtr_operations WHERE MONTH(date_created) = '11'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res2 = $conn->query($sql2);
                    $row2 = mysqli_fetch_array($res2);
                    $sql3 = "SELECT COUNT(id) AS supervisor FROM  dtr_supervisor WHERE MONTH(date_created) = '11'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res3 = $conn->query($sql3);
                    $row3 = mysqli_fetch_array($res3);
                    while ($row1 = mysqli_fetch_array($res1)) {
                        $totalitsupport = $row1['itsupport'];
                        $totaloperations = $row2['operations'];
                        $totalsupervisor = $row3['supervisor'];
                        $totalDTR = $totalitsupport + $totaloperations + $totalsupervisor;

                        ?>
                            <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalDTR. ' - ' .$row['team_name']; ?></span>
                        <?php
                    }
                }
            }
        break;

        case 'dtrdec':
            $sql = "SELECT * FROM team_list ORDER BY team_name ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $team_no = $row['team_no'];
                    $sql1 = "SELECT COUNT(id) AS itsupport FROM  dtr_itsupport WHERE MONTH(date_created) = '12'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res1 = $conn->query($sql1);
                    $sql2 = "SELECT COUNT(id) AS operations FROM  dtr_operations WHERE MONTH(date_created) = '12'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res2 = $conn->query($sql2);
                    $row2 = mysqli_fetch_array($res2);
                    $sql3 = "SELECT COUNT(id) AS supervisor FROM  dtr_supervisor WHERE MONTH(date_created) = '12'  AND YEAR(date_created) = YEAR(NOW()) AND assigned_team = '$team_no'";
                    $res3 = $conn->query($sql3);
                    $row3 = mysqli_fetch_array($res3);
                    while ($row1 = mysqli_fetch_array($res1)) {
                        $totalitsupport = $row1['itsupport'];
                        $totaloperations = $row2['operations'];
                        $totalsupervisor = $row3['supervisor'];
                        $totalDTR = $totalitsupport + $totaloperations + $totalsupervisor;

                        ?>
                            <span class="badge badge-muted" style="font-weight: bold; border: 1px solid black;"><?php echo $totalDTR. ' - ' .$row['team_name']; ?></span>
                        <?php
                    }
                }
            }
        break;

        // TARGET GOAL //
        case 'totalcurrentmonthendo':
            $sql = "SELECT * FROM operations_team_corinthians WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $sql1 = "SELECT * FROM operations_team_ecclesiastes WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT * FROM operations_team_mark WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res2 = $conn->query($sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT * FROM operations_team_psalms WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res3 = $conn->query($sql3);
            $row3 = mysqli_fetch_array($res3);
            $endo_corinthians = $row['actual_endo']; 
            $endo_ecclesiastes = $row1['actual_endo']; 
            $endo_mark = $row2['actual_endo']; 
            $endo_psalms = $row3['actual_endo']; 
            $totalcurrentmonthendo = $endo_corinthians + $endo_ecclesiastes + $endo_mark + $endo_psalms;
            echo $totalcurrentmonthendo;
        break;

        case 'totalcurrentmonthbilling':
            $sql = "SELECT * FROM operations_team_corinthians WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $sql1 = "SELECT * FROM operations_team_ecclesiastes WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT * FROM operations_team_mark WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res2 = $conn->query($sql2);
            $row2 = mysqli_fetch_array($res2);
            $sql3 = "SELECT * FROM operations_team_psalms WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res3 = $conn->query($sql3);
            $row3 = mysqli_fetch_array($res3);
            $billing_corinthians = $row['actual_billing']; 
            $billing_ecclesiastes = $row1['actual_billing']; 
            $billing_mark = $row2['actual_billing']; 
            $billing_psalms = $row3['actual_billing']; 
            $totalcurrentmonthbilling = $billing_corinthians + $billing_ecclesiastes + $billing_mark + $billing_psalms;
            echo $totalcurrentmonthbilling;
        break;

        case 'corinthiansendorsement_goal':
            $sql = "SELECT * FROM operations_team_corinthians WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalendogoal = $row['endo_goal'];
            echo $totalendogoal;
        break;

        case 'corinthiansbilling_goal':
            $sql = "SELECT * FROM operations_team_corinthians WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalbillinggoal = $row['billing_goal'];
            echo $totalbillinggoal;
        break;

        case 'corinthiansendorsement_actual':
            $sql = "SELECT * FROM operations_team_corinthians WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $endogoal = $row['endo_goal']; 
            $actualendo = $row['actual_endo'];
            if ($endogoal > $actualendo) {
                ?>
                    <div class="number" style="font-weight: bold; color: #D22B2B;"><?php echo $actualendo; ?></div>
                <?php
            } else if ($actualendo > $endogoal) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $actualendo; ?></div>
                <?php
            } else if ($endogoal = $actualendo) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $actualendo; ?></div>
                <?php
            }
        break;

        case 'corinthiansbilling_actual':
            $sql = $sql = "SELECT * FROM operations_team_corinthians WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $billinggoal = $row['billing_goal']; 
            $actualbilling = $row['actual_billing'];
            if ($billinggoal > $actualbilling) {
                ?>
                    <div class="number" style="font-weight: bold; color: #D22B2B;"><?php echo $actualbilling; ?></div>
                <?php
            } else if ($actualbilling > $billinggoal) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $actualbilling; ?></div>
                <?php
            } else if ($billinggoal = $actualbilling) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $actualbilling; ?></div>
                <?php
            }
        break;

        case 'ecclesiastesendorsement_goal':
            $sql = "SELECT * FROM operations_team_ecclesiastes WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalendogoal = $row['endo_goal'];
            echo $totalendogoal;
        break;

        case 'ecclesiastesbilling_goal':
            $sql = "SELECT * FROM operations_team_ecclesiastes WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalbillinggoal = $row['billing_goal'];
            echo $totalbillinggoal;
        break;

        case 'ecclesiastesendorsement_actual':
            $sql = "SELECT * FROM operations_team_ecclesiastes WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $endogoal = $row['endo_goal']; 
            $actualendo = $row['actual_endo'];
            if ($endogoal > $actualendo) {
                ?>
                    <div class="number" style="font-weight: bold; color: #D22B2B;"><?php echo $actualendo; ?></div>
                <?php
            } else if ($actualendo > $endogoal) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $actualendo; ?></div>
                <?php
            } else if ($endogoal = $actualendo) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $actualendo; ?></div>
                <?php
            }
        break;

        case 'ecclesiastesbilling_actual':
            $sql = $sql = "SELECT * FROM operations_team_ecclesiastes WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $billinggoal = $row['billing_goal']; 
            $actualbilling = $row['actual_billing'];
            if ($billinggoal > $actualbilling) {
                ?>
                    <div class="number" style="font-weight: bold; color: #D22B2B;"><?php echo $actualbilling; ?></div>
                <?php
            } else if ($actualbilling > $billinggoal) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $actualbilling; ?></div>
                <?php
            } else if ($billinggoal = $actualbilling) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $actualbilling; ?></div>
                <?php
            }
        break;

        case 'markendorsement_goal':
            $sql = "SELECT * FROM operations_team_mark WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalendogoal = $row['endo_goal'];
            echo $totalendogoal;
        break;

        case 'markbilling_goal':
            $sql = "SELECT * FROM operations_team_mark WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalbillinggoal = $row['billing_goal'];
            echo $totalbillinggoal;
        break;

        case 'markendorsement_actual':
            $sql = "SELECT * FROM operations_team_mark WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $endogoal = $row['endo_goal']; 
            $actualendo = $row['actual_endo'];
            if ($endogoal > $actualendo) {
                ?>
                    <div class="number" style="font-weight: bold; color: #D22B2B;"><?php echo $actualendo; ?></div>
                <?php
            } else if ($actualendo > $endogoal) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $actualendo; ?></div>
                <?php
            } else if ($endogoal = $actualendo) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $actualendo; ?></div>
                <?php
            }
        break;

        case 'markbilling_actual':
            $sql = $sql = "SELECT * FROM operations_team_mark WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $billinggoal = $row['billing_goal']; 
            $actualbilling = $row['actual_billing'];
            if ($billinggoal > $actualbilling) {
                ?>
                    <div class="number" style="font-weight: bold; color: #D22B2B;"><?php echo $actualbilling; ?></div>
                <?php
            } else if ($actualbilling > $billinggoal) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $actualbilling; ?></div>
                <?php
            } else if ($billinggoal = $actualbilling) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $actualbilling; ?></div>
                <?php
            }
        break;

        case 'psalmsendorsement_goal':
            $sql = "SELECT * FROM operations_team_psalms WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalendogoal = $row['endo_goal'];
            echo $totalendogoal;
        break;

        case 'psalmsbilling_goal':
            $sql = "SELECT * FROM operations_team_psalms WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalbillinggoal = $row['billing_goal'];
            echo $totalbillinggoal;
        break;

        case 'psalmsendorsement_actual':
            $sql = "SELECT * FROM operations_team_psalms WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $endogoal = $row['endo_goal']; 
            $actualendo = $row['actual_endo'];
            if ($endogoal > $actualendo) {
                ?>
                    <div class="number" style="font-weight: bold; color: #D22B2B;"><?php echo $actualendo; ?></div>
                <?php
            } else if ($actualendo > $endogoal) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $actualendo; ?></div>
                <?php
            } else if ($endogoal = $actualendo) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $actualendo; ?></div>
                <?php
            }
        break;

        case 'psalmsbilling_actual':
            $sql = $sql = "SELECT * FROM operations_team_psalms WHERE MONTH(assigned_month) = MONTH(NOW()) AND YEAR(assigned_month) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $billinggoal = $row['billing_goal']; 
            $actualbilling = $row['actual_billing'];
            if ($billinggoal > $actualbilling) {
                ?>
                    <div class="number" style="font-weight: bold; color: #D22B2B;"><?php echo $actualbilling; ?></div>
                <?php
            } else if ($actualbilling > $billinggoal) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $actualbilling; ?></div>
                <?php
            } else if ($billinggoal = $actualbilling) {
                ?>
                    <div class="number" style="font-weight: bold; color: #228B22;"><?php echo $actualbilling; ?></div>
                <?php
            }
        break;

        case 'displayteamlist':
            $sql = "SELECT * FROM team_list WHERE team_no != 'TM-000005' ORDER BY team_name ASC";
            ?> <option> -- Select Team -- </option>; <?php
            $res = $conn->query($sql);
            while ($row = mysqli_fetch_array($res)) {
                ?>
                    <option value ="<?php echo $row['team_no'];?>"><?php echo $row['team_name'];?> </option>
                <?php
            }  
        break;

        case 'displayteamtarget':
            $teamlist_official = $_POST['teamlist_official'] ?? null;

            if ($teamlist_official == 'TM-000001') {
                $sql = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_psalms AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '01' AND YEAR(b.assigned_month) = YEAR(NOW())";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $sql1 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_psalms AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '02' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res1 = $conn->query($sql1);
                        $sql2 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_psalms AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '03' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res2 = $conn->query($sql2);
                        $row2 = mysqli_fetch_array($res2);
                        $sql3 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_psalms AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '04' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res3 = $conn->query($sql3);
                        $row3 = mysqli_fetch_array($res3);
                        $sql4 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_psalms AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '05' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res4 = $conn->query($sql4);
                        $row4 = mysqli_fetch_array($res4);
                        $sql5 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_psalms AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '06' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res5 = $conn->query($sql5);
                        $row5 = mysqli_fetch_array($res5);
                        $sql6 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_psalms AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '07' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res6 = $conn->query($sql6);
                        $row6 = mysqli_fetch_array($res6);
                        $sql7 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_psalms AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '08' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res7 = $conn->query($sql7);
                        $row7 = mysqli_fetch_array($res7);
                        $sql8 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_psalms AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '09' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res8 = $conn->query($sql8);
                        $row8 = mysqli_fetch_array($res8);
                        $sql9 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_psalms AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '10' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res9 = $conn->query($sql9);
                        $row9 = mysqli_fetch_array($res9);
                        $sql10 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_psalms AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '11' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res10 = $conn->query($sql10);
                        $row10 = mysqli_fetch_array($res10);
                        $sql11 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_psalms AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '12' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res11 = $conn->query($sql11);
                        $row11 = mysqli_fetch_array($res11);
                        while ($row1 = mysqli_fetch_array($res1)) {
                            // JANUARY //
                            $janpsalmsmonth = $row['assigned_month'];
                            $newJanPsalmsMonth = date('F Y', strtotime($janpsalmsmonth));
                            $janendogoal = $row['endo_goal'];
                            $janendoactual = $row['actual_endo'];
                            $janbillinggoal = $row['billing_goal'];
                            $janbillingactual = $row['actual_billing'];
                            // FEBRUARY //
                            $febpsalmsmonth = $row1['assigned_month'];
                            $newFebPsalmsMonth = date('F Y', strtotime($febpsalmsmonth));
                            $febendogoal = $row1['endo_goal'];
                            $febendoactual = $row1['actual_endo'];
                            $febbillinggoal = $row1['billing_goal'];
                            $febbillingactual = $row1['actual_billing'];
                            // MARCH //
                            $marpsalmsmonth = $row2['assigned_month'];
                            $newMarPsalmsMonth = date('F Y', strtotime($marpsalmsmonth));
                            $marendogoal = $row2['endo_goal'];
                            $marendoactual = $row2['actual_endo'];
                            $marbillinggoal = $row2['billing_goal'];
                            $marbillingactual = $row2['actual_billing'];
                            // APRIL //
                            $aprpsalmsmonth = $row3['assigned_month'];
                            $newAprPsalmsMonth = date('F Y', strtotime($aprpsalmsmonth));
                            $aprendogoal = $row3['endo_goal'];
                            $aprendoactual = $row3['actual_endo'];
                            $aprbillinggoal = $row3['billing_goal'];
                            $aprbillingactual = $row3['actual_billing'];
                            // MAY //
                            $maypsalmsmonth = $row4['assigned_month'];
                            $newMayPsalmsMonth = date('F Y', strtotime($maypsalmsmonth));
                            $mayendogoal = $row4['endo_goal'];
                            $mayendoactual = $row4['actual_endo'];
                            $maybillinggoal = $row4['billing_goal'];
                            $maybillingactual = $row4['actual_billing'];                            
                            // JUNE //
                            $junepsalmsmonth = $row5['assigned_month'];
                            $newJunePsalmsMonth = date('F Y', strtotime($junepsalmsmonth));
                            $juneendogoal = $row5['endo_goal'];
                            $juneendoactual = $row5['actual_endo'];
                            $junebillinggoal = $row5['billing_goal'];
                            $junebillingactual = $row5['actual_billing'];                               
                            // JULY //
                            $julypsalmsmonth = $row6['assigned_month'];
                            $newJulyPsalmsMonth = date('F Y', strtotime($julypsalmsmonth));
                            $julyendogoal = $row6['endo_goal'];
                            $julyendoactual = $row6['actual_endo'];
                            $julybillinggoal = $row6['billing_goal'];
                            $julybillingactual = $row6['actual_billing'];    
                            // AUGUST //
                            $augpsalmsmonth = $row7['assigned_month'];
                            $newAugPsalmsMonth = date('F Y', strtotime($augpsalmsmonth));
                            $augendogoal = $row7['endo_goal'];
                            $augendoactual = $row7['actual_endo'];
                            $augbillinggoal = $row7['billing_goal'];
                            $augbillingactual = $row7['actual_billing']; 
                            // SEPTEMBER //
                            $septpsalmsmonth = $row8['assigned_month'];
                            $newSeptPsalmsMonth = date('F Y', strtotime($septpsalmsmonth));
                            $septendogoal = $row8['endo_goal'];
                            $septendoactual = $row8['actual_endo'];
                            $septbillinggoal = $row8['billing_goal'];
                            $septbillingactual = $row8['actual_billing']; 
                            // OCTOBER //
                            $octpsalmsmonth = $row9['assigned_month'];
                            $newOctPsalmsMonth = date('F Y', strtotime($octpsalmsmonth));
                            $octendogoal = $row9['endo_goal'];
                            $octendoactual = $row9['actual_endo'];
                            $octbillinggoal = $row9['billing_goal'];
                            $octbillingactual = $row9['actual_billing'];
                            // NOVEMBER //
                            $novpsalmsmonth = $row10['assigned_month'];
                            $newNovPsalmsMonth = date('F Y', strtotime($novpsalmsmonth));
                            $novendogoal = $row10['endo_goal'];
                            $novendoactual = $row10['actual_endo'];
                            $novbillinggoal = $row10['billing_goal'];
                            $novbillingactual = $row10['actual_billing'];                            
                            // DECEMBER //
                            $decpsalmsmonth = $row11['assigned_month'];
                            $newDecPsalmsMonth = date('F Y', strtotime($decpsalmsmonth));
                            $decendogoal = $row11['endo_goal'];
                            $decendoactual = $row11['actual_endo'];
                            $decbillinggoal = $row11['billing_goal'];
                            $decbillingactual = $row11['actual_billing'];    

                            ?>
                                <form class="form" method="POST" enctype="multipart/form-data" action="functions/update_target_psalms.php" action="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newJanPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjanendogoal" name="psalmsjanendogoal" value="<?php echo $janendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjanendoactual" name="psalmsjanendoactual" value="<?php echo $janendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjanbillinggoal" name="psalmsjanbillinggoal" value="<?php echo $janbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjanbillingactual" name="psalmsjanbillingactual" value="<?php echo $janbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalsmjanenable" style="font-size: 12px;" onclick="psalmsjanuaryenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalsmjandisable" style="display: none; font-size: 12px;" onclick="psalmsjanuarydisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newFebPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsfebendogoal" name="psalmsfebendogoal" value="<?php echo $febendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsfebendoactual" name="psalmsfebendoactual" value="<?php echo $febendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsfebbillinggoal" name="psalmsfebbillinggoal" value="<?php echo $febbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsfebbillingactual" name="psalmsfebbillingactual" value="<?php echo $febbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalsmfebenable" style="font-size: 12px;" onclick="psalmsfebruaryenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalsmfebdisable" style="display: none; font-size: 12px;" onclick="psalmsfebruarydisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newMarPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmarendogoal" name="psalmsmarendogoal" value="<?php echo $marendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmarendoactual" name="psalmsmarendoactual" value="<?php echo $marendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmarbillinggoal" name="psalmsmarbillinggoal" value="<?php echo $marbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmarbillingactual" name="psalmsmarbillingactual" value="<?php echo $marbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsmarenable" style="font-size: 12px;" onclick="psalmsmarchenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsmardisable" style="display: none; font-size: 12px;" onclick="psalmsmarchdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newAprPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaprendogoal" name="psalmsaprendogoal" value="<?php echo $aprendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaprendoactual" name="psalmsaprendoactual" value="<?php echo $aprendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaprbillinggoal" name="psalmsaprbillinggoal" value="<?php echo $aprbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaprbillingactual" name="psalmsaprbillingactual" value="<?php echo $aprbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsaprenable" style="font-size: 12px;" onclick="psalmsaprilenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsaprdisable" style="display: none; font-size: 12px;" onclick="psalmsaprildisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newMayPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmayendogoal" name="psalmsmayendogoal" value="<?php echo $mayendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmayendoactual" name="psalmsmayendoactual" value="<?php echo $mayendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmaybillinggoal" name="psalmsmaybillinggoal" value="<?php echo $maybillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmaybillingactual" name="psalmsmaybillingactual" value="<?php echo $maybillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsmayenable" style="font-size: 12px;" onclick="psalmsmay_enable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsmaydisable" style="display: none; font-size: 12px;" onclick="psalmsmay_disable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newJunePsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjuneendogoal" name="psalmsjuneendogoal" value="<?php echo $juneendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjuneendoactual" name="psalmsjuneendoactual" value="<?php echo $juneendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjunebillinggoal" name="psalmsjunebillinggoal" value="<?php echo $junebillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjunebillingactual" name="psalmsjunebillingactual" value="<?php echo $junebillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsjuneenable" style="font-size: 12px;" onclick="psalmsjune_enable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsjunedisable" style="display: none; font-size: 12px;" onclick="psalmsjune_disable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newJulyPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjulyendogoal" name="psalmsjulyendogoal" value="<?php echo $julyendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjulyendoactual" name="psalmsjulyendoactual" value="<?php echo $julyendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjulybillinggoal" name="psalmsjulybillinggoal" value="<?php echo $julybillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjulybillingactual" name="psalmsjulybillingactual" value="<?php echo $julybillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsjulyenable" style="font-size: 12px;" onclick="psalmsjuly_enable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsjulydisable" style="display: none; font-size: 12px;" onclick="psalmsjuly_disable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newAugPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaugendogoal" name="psalmsaugendogoal" value="<?php echo $augendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaugendoactual" name="psalmsaugendoactual" value="<?php echo $augendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaugbillinggoal" name="psalmsaugbillinggoal" value="<?php echo $augbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaugbillingactual" name="psalmsaugbillingactual" value="<?php echo $augbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsaugenable" style="font-size: 12px;" onclick="psalmsaugustenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsaugdisable" style="display: none; font-size: 12px;" onclick="psalmsaugustdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newSeptPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsseptendogoal" name="psalmsseptendogoal" value="<?php echo $septendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsseptendoactual" name="psalmsseptendoactual" value="<?php echo $septendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsseptbillinggoal" name="psalmsseptbillinggoal" value="<?php echo $septbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsseptbillingactual" name="psalmsseptbillingactual" value="<?php echo $septbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsseptenable" style="font-size: 12px;" onclick="psalmsseptemberenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsseptdisable" style="display: none; font-size: 12px;" onclick="psalmsseptemberdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newOctPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsoctendogoal" name="psalmsoctendogoal" value="<?php echo $octendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsoctendoactual" name="psalmsoctendoactual" value="<?php echo $octendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsoctbillinggoal" name="psalmsoctbillinggoal" value="<?php echo $octbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsoctbillingactual" name="psalmsoctbillingactual" value="<?php echo $octbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsoctenable" style="font-size: 12px;" onclick="psalmsoctoberenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsoctdisable" style="display: none; font-size: 12px;" onclick="psalmsoctoberdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newNovPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsnovendogoal" name="psalmsnovendogoal" value="<?php echo $novendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsnovendoactual" name="psalmsnovendoactual" value="<?php echo $novendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsnovbillinggoal" name="psalmsnovbillinggoal" value="<?php echo $novbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsnovbillingactual" name="psalmsnovbillingactual" value="<?php echo $novbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsnovenable" style="font-size: 12px;" onclick="psalmsnovemberenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsnovdisable" style="display: none; font-size: 12px;" onclick="psalmsnovemberdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newDecPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsdecendogoal" name="psalmsdecendogoal" value="<?php echo $decendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsdecendoactual" name="psalmsdecendoactual" value="<?php echo $decendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsdecbillinggoal" name="psalmsdecbillinggoal" value="<?php echo $decbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsdecbillingactual" name="psalmsdecbillingactual" value="<?php echo $decbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsdecenable" style="font-size: 12px;" onclick="psalmsdecemberenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsdecdisable" style="display: none; font-size: 12px;" onclick="psalmsdecemberdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-outline-success" name="updatepsalsmrecord"><i class="fa fa-check-circle-o"></i> Update Record</button>
                                        </div>
                                    </div>
                                </form>
                            <?php
                        }
                    }
                }
            } else if ($teamlist_official == 'TM-000002') {
                $sql = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_mark AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '01' AND YEAR(b.assigned_month) = YEAR(NOW())";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $sql1 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_mark AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '02' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res1 = $conn->query($sql1);
                        $sql2 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_mark AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '03' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res2 = $conn->query($sql2);
                        $row2 = mysqli_fetch_array($res2);
                        $sql3 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_mark AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '04' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res3 = $conn->query($sql3);
                        $row3 = mysqli_fetch_array($res3);
                        $sql4 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_mark AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '05' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res4 = $conn->query($sql4);
                        $row4 = mysqli_fetch_array($res4);
                        $sql5 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_mark AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '06' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res5 = $conn->query($sql5);
                        $row5 = mysqli_fetch_array($res5);
                        $sql6 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_mark AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '07' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res6 = $conn->query($sql6);
                        $row6 = mysqli_fetch_array($res6);
                        $sql7 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_mark AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '08' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res7 = $conn->query($sql7);
                        $row7 = mysqli_fetch_array($res7);
                        $sql8 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_mark AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '09' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res8 = $conn->query($sql8);
                        $row8 = mysqli_fetch_array($res8);
                        $sql9 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_mark AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '10' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res9 = $conn->query($sql9);
                        $row9 = mysqli_fetch_array($res9);
                        $sql10 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_mark AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '11' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res10 = $conn->query($sql10);
                        $row10 = mysqli_fetch_array($res10);
                        $sql11 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_mark AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '12' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res11 = $conn->query($sql11);
                        $row11 = mysqli_fetch_array($res11);
                        while ($row1 = mysqli_fetch_array($res1)) {
                            // JANUARY //
                            $janpsalmsmonth = $row['assigned_month'];
                            $newJanPsalmsMonth = date('F Y', strtotime($janpsalmsmonth));
                            $janendogoal = $row['endo_goal'];
                            $janendoactual = $row['actual_endo'];
                            $janbillinggoal = $row['billing_goal'];
                            $janbillingactual = $row['actual_billing'];
                            // FEBRUARY //
                            $febpsalmsmonth = $row1['assigned_month'];
                            $newFebPsalmsMonth = date('F Y', strtotime($febpsalmsmonth));
                            $febendogoal = $row1['endo_goal'];
                            $febendoactual = $row1['actual_endo'];
                            $febbillinggoal = $row1['billing_goal'];
                            $febbillingactual = $row1['actual_billing'];
                            // MARCH //
                            $marpsalmsmonth = $row2['assigned_month'];
                            $newMarPsalmsMonth = date('F Y', strtotime($marpsalmsmonth));
                            $marendogoal = $row2['endo_goal'];
                            $marendoactual = $row2['actual_endo'];
                            $marbillinggoal = $row2['billing_goal'];
                            $marbillingactual = $row2['actual_billing'];
                            // APRIL //
                            $aprpsalmsmonth = $row3['assigned_month'];
                            $newAprPsalmsMonth = date('F Y', strtotime($aprpsalmsmonth));
                            $aprendogoal = $row3['endo_goal'];
                            $aprendoactual = $row3['actual_endo'];
                            $aprbillinggoal = $row3['billing_goal'];
                            $aprbillingactual = $row3['actual_billing'];
                            // MAY //
                            $maypsalmsmonth = $row4['assigned_month'];
                            $newMayPsalmsMonth = date('F Y', strtotime($maypsalmsmonth));
                            $mayendogoal = $row4['endo_goal'];
                            $mayendoactual = $row4['actual_endo'];
                            $maybillinggoal = $row4['billing_goal'];
                            $maybillingactual = $row4['actual_billing'];                            
                            // JUNE //
                            $junepsalmsmonth = $row5['assigned_month'];
                            $newJunePsalmsMonth = date('F Y', strtotime($junepsalmsmonth));
                            $juneendogoal = $row5['endo_goal'];
                            $juneendoactual = $row5['actual_endo'];
                            $junebillinggoal = $row5['billing_goal'];
                            $junebillingactual = $row5['actual_billing'];                               
                            // JULY //
                            $julypsalmsmonth = $row6['assigned_month'];
                            $newJulyPsalmsMonth = date('F Y', strtotime($julypsalmsmonth));
                            $julyendogoal = $row6['endo_goal'];
                            $julyendoactual = $row6['actual_endo'];
                            $julybillinggoal = $row6['billing_goal'];
                            $julybillingactual = $row6['actual_billing'];    
                            // AUGUST //
                            $augpsalmsmonth = $row7['assigned_month'];
                            $newAugPsalmsMonth = date('F Y', strtotime($augpsalmsmonth));
                            $augendogoal = $row7['endo_goal'];
                            $augendoactual = $row7['actual_endo'];
                            $augbillinggoal = $row7['billing_goal'];
                            $augbillingactual = $row7['actual_billing']; 
                            // SEPTEMBER //
                            $septpsalmsmonth = $row8['assigned_month'];
                            $newSeptPsalmsMonth = date('F Y', strtotime($septpsalmsmonth));
                            $septendogoal = $row8['endo_goal'];
                            $septendoactual = $row8['actual_endo'];
                            $septbillinggoal = $row8['billing_goal'];
                            $septbillingactual = $row8['actual_billing']; 
                            // OCTOBER //
                            $octpsalmsmonth = $row9['assigned_month'];
                            $newOctPsalmsMonth = date('F Y', strtotime($octpsalmsmonth));
                            $octendogoal = $row9['endo_goal'];
                            $octendoactual = $row9['actual_endo'];
                            $octbillinggoal = $row9['billing_goal'];
                            $octbillingactual = $row9['actual_billing'];
                            // NOVEMBER //
                            $novpsalmsmonth = $row10['assigned_month'];
                            $newNovPsalmsMonth = date('F Y', strtotime($novpsalmsmonth));
                            $novendogoal = $row10['endo_goal'];
                            $novendoactual = $row10['actual_endo'];
                            $novbillinggoal = $row10['billing_goal'];
                            $novbillingactual = $row10['actual_billing'];                            
                            // DECEMBER //
                            $decpsalmsmonth = $row11['assigned_month'];
                            $newDecPsalmsMonth = date('F Y', strtotime($decpsalmsmonth));
                            $decendogoal = $row11['endo_goal'];
                            $decendoactual = $row11['actual_endo'];
                            $decbillinggoal = $row11['billing_goal'];
                            $decbillingactual = $row11['actual_billing'];    

                            ?>
                                <form class="form" method="POST" enctype="multipart/form-data" action="functions/update_target_mark.php" action="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newJanPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjanendogoal" name="psalmsjanendogoal" value="<?php echo $janendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjanendoactual" name="psalmsjanendoactual" value="<?php echo $janendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjanbillinggoal" name="psalmsjanbillinggoal" value="<?php echo $janbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjanbillingactual" name="psalmsjanbillingactual" value="<?php echo $janbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalsmjanenable" style="font-size: 12px;" onclick="psalmsjanuaryenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalsmjandisable" style="display: none; font-size: 12px;" onclick="psalmsjanuarydisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newFebPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsfebendogoal" name="psalmsfebendogoal" value="<?php echo $febendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsfebendoactual" name="psalmsfebendoactual" value="<?php echo $febendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsfebbillinggoal" name="psalmsfebbillinggoal" value="<?php echo $febbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsfebbillingactual" name="psalmsfebbillingactual" value="<?php echo $febbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalsmfebenable" style="font-size: 12px;" onclick="psalmsfebruaryenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalsmfebdisable" style="display: none; font-size: 12px;" onclick="psalmsfebruarydisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newMarPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmarendogoal" name="psalmsmarendogoal" value="<?php echo $marendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmarendoactual" name="psalmsmarendoactual" value="<?php echo $marendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmarbillinggoal" name="psalmsmarbillinggoal" value="<?php echo $marbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmarbillingactual" name="psalmsmarbillingactual" value="<?php echo $marbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsmarenable" style="font-size: 12px;" onclick="psalmsmarchenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsmardisable" style="display: none; font-size: 12px;" onclick="psalmsmarchdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newAprPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaprendogoal" name="psalmsaprendogoal" value="<?php echo $aprendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaprendoactual" name="psalmsaprendoactual" value="<?php echo $aprendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaprbillinggoal" name="psalmsaprbillinggoal" value="<?php echo $aprbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaprbillingactual" name="psalmsaprbillingactual" value="<?php echo $aprbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsaprenable" style="font-size: 12px;" onclick="psalmsaprilenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsaprdisable" style="display: none; font-size: 12px;" onclick="psalmsaprildisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newMayPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmayendogoal" name="psalmsmayendogoal" value="<?php echo $mayendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmayendoactual" name="psalmsmayendoactual" value="<?php echo $mayendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmaybillinggoal" name="psalmsmaybillinggoal" value="<?php echo $maybillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmaybillingactual" name="psalmsmaybillingactual" value="<?php echo $maybillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsmayenable" style="font-size: 12px;" onclick="psalmsmay_enable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsmaydisable" style="display: none; font-size: 12px;" onclick="psalmsmay_disable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newJunePsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjuneendogoal" name="psalmsjuneendogoal" value="<?php echo $juneendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjuneendoactual" name="psalmsjuneendoactual" value="<?php echo $juneendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjunebillinggoal" name="psalmsjunebillinggoal" value="<?php echo $junebillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjunebillingactual" name="psalmsjunebillingactual" value="<?php echo $junebillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsjuneenable" style="font-size: 12px;" onclick="psalmsjune_enable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsjunedisable" style="display: none; font-size: 12px;" onclick="psalmsjune_disable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newJulyPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjulyendogoal" name="psalmsjulyendogoal" value="<?php echo $julyendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjulyendoactual" name="psalmsjulyendoactual" value="<?php echo $julyendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjulybillinggoal" name="psalmsjulybillinggoal" value="<?php echo $julybillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjulybillingactual" name="psalmsjulybillingactual" value="<?php echo $julybillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsjulyenable" style="font-size: 12px;" onclick="psalmsjuly_enable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsjulydisable" style="display: none; font-size: 12px;" onclick="psalmsjuly_disable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newAugPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaugendogoal" name="psalmsaugendogoal" value="<?php echo $augendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaugendoactual" name="psalmsaugendoactual" value="<?php echo $augendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaugbillinggoal" name="psalmsaugbillinggoal" value="<?php echo $augbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaugbillingactual" name="psalmsaugbillingactual" value="<?php echo $augbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsaugenable" style="font-size: 12px;" onclick="psalmsaugustenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsaugdisable" style="display: none; font-size: 12px;" onclick="psalmsaugustdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newSeptPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsseptendogoal" name="psalmsseptendogoal" value="<?php echo $septendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsseptendoactual" name="psalmsseptendoactual" value="<?php echo $septendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsseptbillinggoal" name="psalmsseptbillinggoal" value="<?php echo $septbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsseptbillingactual" name="psalmsseptbillingactual" value="<?php echo $septbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsseptenable" style="font-size: 12px;" onclick="psalmsseptemberenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsseptdisable" style="display: none; font-size: 12px;" onclick="psalmsseptemberdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newOctPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsoctendogoal" name="psalmsoctendogoal" value="<?php echo $octendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsoctendoactual" name="psalmsoctendoactual" value="<?php echo $octendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsoctbillinggoal" name="psalmsoctbillinggoal" value="<?php echo $octbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsoctbillingactual" name="psalmsoctbillingactual" value="<?php echo $octbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsoctenable" style="font-size: 12px;" onclick="psalmsoctoberenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsoctdisable" style="display: none; font-size: 12px;" onclick="psalmsoctoberdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newNovPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsnovendogoal" name="psalmsnovendogoal" value="<?php echo $novendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsnovendoactual" name="psalmsnovendoactual" value="<?php echo $novendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsnovbillinggoal" name="psalmsnovbillinggoal" value="<?php echo $novbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsnovbillingactual" name="psalmsnovbillingactual" value="<?php echo $novbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsnovenable" style="font-size: 12px;" onclick="psalmsnovemberenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsnovdisable" style="display: none; font-size: 12px;" onclick="psalmsnovemberdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newDecPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsdecendogoal" name="psalmsdecendogoal" value="<?php echo $decendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsdecendoactual" name="psalmsdecendoactual" value="<?php echo $decendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsdecbillinggoal" name="psalmsdecbillinggoal" value="<?php echo $decbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsdecbillingactual" name="psalmsdecbillingactual" value="<?php echo $decbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsdecenable" style="font-size: 12px;" onclick="psalmsdecemberenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsdecdisable" style="display: none; font-size: 12px;" onclick="psalmsdecemberdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-outline-success" name="updatemarkrecord"><i class="fa fa-check-circle-o"></i> Update Record</button>
                                        </div>
                                    </div>
                                </form>
                            <?php
                        }
                    }
                }
            } else if ($teamlist_official == 'TM-000003') {
                $sql = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_corinthians AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '01' AND YEAR(b.assigned_month) = YEAR(NOW())";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $sql1 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_corinthians AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '02' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res1 = $conn->query($sql1);
                        $sql2 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_corinthians AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '03' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res2 = $conn->query($sql2);
                        $row2 = mysqli_fetch_array($res2);
                        $sql3 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_corinthians AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '04' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res3 = $conn->query($sql3);
                        $row3 = mysqli_fetch_array($res3);
                        $sql4 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_corinthians AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '05' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res4 = $conn->query($sql4);
                        $row4 = mysqli_fetch_array($res4);
                        $sql5 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_corinthians AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '06' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res5 = $conn->query($sql5);
                        $row5 = mysqli_fetch_array($res5);
                        $sql6 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_corinthians AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '07' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res6 = $conn->query($sql6);
                        $row6 = mysqli_fetch_array($res6);
                        $sql7 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_corinthians AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '08' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res7 = $conn->query($sql7);
                        $row7 = mysqli_fetch_array($res7);
                        $sql8 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_corinthians AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '09' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res8 = $conn->query($sql8);
                        $row8 = mysqli_fetch_array($res8);
                        $sql9 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_corinthians AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '10' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res9 = $conn->query($sql9);
                        $row9 = mysqli_fetch_array($res9);
                        $sql10 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_corinthians AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '11' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res10 = $conn->query($sql10);
                        $row10 = mysqli_fetch_array($res10);
                        $sql11 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_corinthians AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '12' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res11 = $conn->query($sql11);
                        $row11 = mysqli_fetch_array($res11);
                        while ($row1 = mysqli_fetch_array($res1)) {
                            // JANUARY //
                            $janpsalmsmonth = $row['assigned_month'];
                            $newJanPsalmsMonth = date('F Y', strtotime($janpsalmsmonth));
                            $janendogoal = $row['endo_goal'];
                            $janendoactual = $row['actual_endo'];
                            $janbillinggoal = $row['billing_goal'];
                            $janbillingactual = $row['actual_billing'];
                            // FEBRUARY //
                            $febpsalmsmonth = $row1['assigned_month'];
                            $newFebPsalmsMonth = date('F Y', strtotime($febpsalmsmonth));
                            $febendogoal = $row1['endo_goal'];
                            $febendoactual = $row1['actual_endo'];
                            $febbillinggoal = $row1['billing_goal'];
                            $febbillingactual = $row1['actual_billing'];
                            // MARCH //
                            $marpsalmsmonth = $row2['assigned_month'];
                            $newMarPsalmsMonth = date('F Y', strtotime($marpsalmsmonth));
                            $marendogoal = $row2['endo_goal'];
                            $marendoactual = $row2['actual_endo'];
                            $marbillinggoal = $row2['billing_goal'];
                            $marbillingactual = $row2['actual_billing'];
                            // APRIL //
                            $aprpsalmsmonth = $row3['assigned_month'];
                            $newAprPsalmsMonth = date('F Y', strtotime($aprpsalmsmonth));
                            $aprendogoal = $row3['endo_goal'];
                            $aprendoactual = $row3['actual_endo'];
                            $aprbillinggoal = $row3['billing_goal'];
                            $aprbillingactual = $row3['actual_billing'];
                            // MAY //
                            $maypsalmsmonth = $row4['assigned_month'];
                            $newMayPsalmsMonth = date('F Y', strtotime($maypsalmsmonth));
                            $mayendogoal = $row4['endo_goal'];
                            $mayendoactual = $row4['actual_endo'];
                            $maybillinggoal = $row4['billing_goal'];
                            $maybillingactual = $row4['actual_billing'];                            
                            // JUNE //
                            $junepsalmsmonth = $row5['assigned_month'];
                            $newJunePsalmsMonth = date('F Y', strtotime($junepsalmsmonth));
                            $juneendogoal = $row5['endo_goal'];
                            $juneendoactual = $row5['actual_endo'];
                            $junebillinggoal = $row5['billing_goal'];
                            $junebillingactual = $row5['actual_billing'];                               
                            // JULY //
                            $julypsalmsmonth = $row6['assigned_month'];
                            $newJulyPsalmsMonth = date('F Y', strtotime($julypsalmsmonth));
                            $julyendogoal = $row6['endo_goal'];
                            $julyendoactual = $row6['actual_endo'];
                            $julybillinggoal = $row6['billing_goal'];
                            $julybillingactual = $row6['actual_billing'];    
                            // AUGUST //
                            $augpsalmsmonth = $row7['assigned_month'];
                            $newAugPsalmsMonth = date('F Y', strtotime($augpsalmsmonth));
                            $augendogoal = $row7['endo_goal'];
                            $augendoactual = $row7['actual_endo'];
                            $augbillinggoal = $row7['billing_goal'];
                            $augbillingactual = $row7['actual_billing']; 
                            // SEPTEMBER //
                            $septpsalmsmonth = $row8['assigned_month'];
                            $newSeptPsalmsMonth = date('F Y', strtotime($septpsalmsmonth));
                            $septendogoal = $row8['endo_goal'];
                            $septendoactual = $row8['actual_endo'];
                            $septbillinggoal = $row8['billing_goal'];
                            $septbillingactual = $row8['actual_billing']; 
                            // OCTOBER //
                            $octpsalmsmonth = $row9['assigned_month'];
                            $newOctPsalmsMonth = date('F Y', strtotime($octpsalmsmonth));
                            $octendogoal = $row9['endo_goal'];
                            $octendoactual = $row9['actual_endo'];
                            $octbillinggoal = $row9['billing_goal'];
                            $octbillingactual = $row9['actual_billing'];
                            // NOVEMBER //
                            $novpsalmsmonth = $row10['assigned_month'];
                            $newNovPsalmsMonth = date('F Y', strtotime($novpsalmsmonth));
                            $novendogoal = $row10['endo_goal'];
                            $novendoactual = $row10['actual_endo'];
                            $novbillinggoal = $row10['billing_goal'];
                            $novbillingactual = $row10['actual_billing'];                            
                            // DECEMBER //
                            $decpsalmsmonth = $row11['assigned_month'];
                            $newDecPsalmsMonth = date('F Y', strtotime($decpsalmsmonth));
                            $decendogoal = $row11['endo_goal'];
                            $decendoactual = $row11['actual_endo'];
                            $decbillinggoal = $row11['billing_goal'];
                            $decbillingactual = $row11['actual_billing'];    

                            ?>
                                <form class="form" method="POST" enctype="multipart/form-data" action="functions/update_target_corinthians.php" action="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newJanPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjanendogoal" name="psalmsjanendogoal" value="<?php echo $janendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjanendoactual" name="psalmsjanendoactual" value="<?php echo $janendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjanbillinggoal" name="psalmsjanbillinggoal" value="<?php echo $janbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjanbillingactual" name="psalmsjanbillingactual" value="<?php echo $janbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalsmjanenable" style="font-size: 12px;" onclick="psalmsjanuaryenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalsmjandisable" style="display: none; font-size: 12px;" onclick="psalmsjanuarydisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newFebPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsfebendogoal" name="psalmsfebendogoal" value="<?php echo $febendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsfebendoactual" name="psalmsfebendoactual" value="<?php echo $febendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsfebbillinggoal" name="psalmsfebbillinggoal" value="<?php echo $febbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsfebbillingactual" name="psalmsfebbillingactual" value="<?php echo $febbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalsmfebenable" style="font-size: 12px;" onclick="psalmsfebruaryenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalsmfebdisable" style="display: none; font-size: 12px;" onclick="psalmsfebruarydisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newMarPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmarendogoal" name="psalmsmarendogoal" value="<?php echo $marendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmarendoactual" name="psalmsmarendoactual" value="<?php echo $marendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmarbillinggoal" name="psalmsmarbillinggoal" value="<?php echo $marbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmarbillingactual" name="psalmsmarbillingactual" value="<?php echo $marbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsmarenable" style="font-size: 12px;" onclick="psalmsmarchenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsmardisable" style="display: none; font-size: 12px;" onclick="psalmsmarchdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newAprPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaprendogoal" name="psalmsaprendogoal" value="<?php echo $aprendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaprendoactual" name="psalmsaprendoactual" value="<?php echo $aprendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaprbillinggoal" name="psalmsaprbillinggoal" value="<?php echo $aprbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaprbillingactual" name="psalmsaprbillingactual" value="<?php echo $aprbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsaprenable" style="font-size: 12px;" onclick="psalmsaprilenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsaprdisable" style="display: none; font-size: 12px;" onclick="psalmsaprildisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newMayPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmayendogoal" name="psalmsmayendogoal" value="<?php echo $mayendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmayendoactual" name="psalmsmayendoactual" value="<?php echo $mayendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmaybillinggoal" name="psalmsmaybillinggoal" value="<?php echo $maybillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmaybillingactual" name="psalmsmaybillingactual" value="<?php echo $maybillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsmayenable" style="font-size: 12px;" onclick="psalmsmay_enable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsmaydisable" style="display: none; font-size: 12px;" onclick="psalmsmay_disable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newJunePsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjuneendogoal" name="psalmsjuneendogoal" value="<?php echo $juneendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjuneendoactual" name="psalmsjuneendoactual" value="<?php echo $juneendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjunebillinggoal" name="psalmsjunebillinggoal" value="<?php echo $junebillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjunebillingactual" name="psalmsjunebillingactual" value="<?php echo $junebillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsjuneenable" style="font-size: 12px;" onclick="psalmsjune_enable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsjunedisable" style="display: none; font-size: 12px;" onclick="psalmsjune_disable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newJulyPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjulyendogoal" name="psalmsjulyendogoal" value="<?php echo $julyendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjulyendoactual" name="psalmsjulyendoactual" value="<?php echo $julyendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjulybillinggoal" name="psalmsjulybillinggoal" value="<?php echo $julybillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjulybillingactual" name="psalmsjulybillingactual" value="<?php echo $julybillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsjulyenable" style="font-size: 12px;" onclick="psalmsjuly_enable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsjulydisable" style="display: none; font-size: 12px;" onclick="psalmsjuly_disable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newAugPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaugendogoal" name="psalmsaugendogoal" value="<?php echo $augendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaugendoactual" name="psalmsaugendoactual" value="<?php echo $augendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaugbillinggoal" name="psalmsaugbillinggoal" value="<?php echo $augbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaugbillingactual" name="psalmsaugbillingactual" value="<?php echo $augbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsaugenable" style="font-size: 12px;" onclick="psalmsaugustenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsaugdisable" style="display: none; font-size: 12px;" onclick="psalmsaugustdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newSeptPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsseptendogoal" name="psalmsseptendogoal" value="<?php echo $septendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsseptendoactual" name="psalmsseptendoactual" value="<?php echo $septendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsseptbillinggoal" name="psalmsseptbillinggoal" value="<?php echo $septbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsseptbillingactual" name="psalmsseptbillingactual" value="<?php echo $septbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsseptenable" style="font-size: 12px;" onclick="psalmsseptemberenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsseptdisable" style="display: none; font-size: 12px;" onclick="psalmsseptemberdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newOctPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsoctendogoal" name="psalmsoctendogoal" value="<?php echo $octendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsoctendoactual" name="psalmsoctendoactual" value="<?php echo $octendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsoctbillinggoal" name="psalmsoctbillinggoal" value="<?php echo $octbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsoctbillingactual" name="psalmsoctbillingactual" value="<?php echo $octbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsoctenable" style="font-size: 12px;" onclick="psalmsoctoberenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsoctdisable" style="display: none; font-size: 12px;" onclick="psalmsoctoberdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newNovPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsnovendogoal" name="psalmsnovendogoal" value="<?php echo $novendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsnovendoactual" name="psalmsnovendoactual" value="<?php echo $novendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsnovbillinggoal" name="psalmsnovbillinggoal" value="<?php echo $novbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsnovbillingactual" name="psalmsnovbillingactual" value="<?php echo $novbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsnovenable" style="font-size: 12px;" onclick="psalmsnovemberenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsnovdisable" style="display: none; font-size: 12px;" onclick="psalmsnovemberdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newDecPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsdecendogoal" name="psalmsdecendogoal" value="<?php echo $decendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsdecendoactual" name="psalmsdecendoactual" value="<?php echo $decendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsdecbillinggoal" name="psalmsdecbillinggoal" value="<?php echo $decbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsdecbillingactual" name="psalmsdecbillingactual" value="<?php echo $decbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsdecenable" style="font-size: 12px;" onclick="psalmsdecemberenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsdecdisable" style="display: none; font-size: 12px;" onclick="psalmsdecemberdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-outline-success" name="updatecorinthiansrecord"><i class="fa fa-check-circle-o"></i> Update Record</button>
                                        </div>
                                    </div>
                                </form>
                            <?php
                        }
                    }
                }
            } else if ($teamlist_official == 'TM-000004') {
                $sql = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_ecclesiastes AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '01' AND YEAR(b.assigned_month) = YEAR(NOW())";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $sql1 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_ecclesiastes AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '02' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res1 = $conn->query($sql1);
                        $sql2 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_ecclesiastes AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '03' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res2 = $conn->query($sql2);
                        $row2 = mysqli_fetch_array($res2);
                        $sql3 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_ecclesiastes AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '04' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res3 = $conn->query($sql3);
                        $row3 = mysqli_fetch_array($res3);
                        $sql4 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_ecclesiastes AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '05' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res4 = $conn->query($sql4);
                        $row4 = mysqli_fetch_array($res4);
                        $sql5 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_ecclesiastes AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '06' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res5 = $conn->query($sql5);
                        $row5 = mysqli_fetch_array($res5);
                        $sql6 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_ecclesiastes AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '07' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res6 = $conn->query($sql6);
                        $row6 = mysqli_fetch_array($res6);
                        $sql7 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_ecclesiastes AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '08' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res7 = $conn->query($sql7);
                        $row7 = mysqli_fetch_array($res7);
                        $sql8 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_ecclesiastes AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '09' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res8 = $conn->query($sql8);
                        $row8 = mysqli_fetch_array($res8);
                        $sql9 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_ecclesiastes AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '10' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res9 = $conn->query($sql9);
                        $row9 = mysqli_fetch_array($res9);
                        $sql10 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_ecclesiastes AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '11' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res10 = $conn->query($sql10);
                        $row10 = mysqli_fetch_array($res10);
                        $sql11 = "SELECT a.team_no, a.team_name, b.team_code, b.assigned_month, b.endo_goal, b.actual_endo, b.billing_goal, b.actual_billing FROM team_list AS a  LEFT JOIN operations_team_ecclesiastes AS b ON a.team_no = b.team_code WHERE MONTH(b.assigned_month) = '12' AND YEAR(b.assigned_month) = YEAR(NOW())";
                        $res11 = $conn->query($sql11);
                        $row11 = mysqli_fetch_array($res11);
                        while ($row1 = mysqli_fetch_array($res1)) {
                            // JANUARY //
                            $janpsalmsmonth = $row['assigned_month'];
                            $newJanPsalmsMonth = date('F Y', strtotime($janpsalmsmonth));
                            $janendogoal = $row['endo_goal'];
                            $janendoactual = $row['actual_endo'];
                            $janbillinggoal = $row['billing_goal'];
                            $janbillingactual = $row['actual_billing'];
                            // FEBRUARY //
                            $febpsalmsmonth = $row1['assigned_month'];
                            $newFebPsalmsMonth = date('F Y', strtotime($febpsalmsmonth));
                            $febendogoal = $row1['endo_goal'];
                            $febendoactual = $row1['actual_endo'];
                            $febbillinggoal = $row1['billing_goal'];
                            $febbillingactual = $row1['actual_billing'];
                            // MARCH //
                            $marpsalmsmonth = $row2['assigned_month'];
                            $newMarPsalmsMonth = date('F Y', strtotime($marpsalmsmonth));
                            $marendogoal = $row2['endo_goal'];
                            $marendoactual = $row2['actual_endo'];
                            $marbillinggoal = $row2['billing_goal'];
                            $marbillingactual = $row2['actual_billing'];
                            // APRIL //
                            $aprpsalmsmonth = $row3['assigned_month'];
                            $newAprPsalmsMonth = date('F Y', strtotime($aprpsalmsmonth));
                            $aprendogoal = $row3['endo_goal'];
                            $aprendoactual = $row3['actual_endo'];
                            $aprbillinggoal = $row3['billing_goal'];
                            $aprbillingactual = $row3['actual_billing'];
                            // MAY //
                            $maypsalmsmonth = $row4['assigned_month'];
                            $newMayPsalmsMonth = date('F Y', strtotime($maypsalmsmonth));
                            $mayendogoal = $row4['endo_goal'];
                            $mayendoactual = $row4['actual_endo'];
                            $maybillinggoal = $row4['billing_goal'];
                            $maybillingactual = $row4['actual_billing'];                            
                            // JUNE //
                            $junepsalmsmonth = $row5['assigned_month'];
                            $newJunePsalmsMonth = date('F Y', strtotime($junepsalmsmonth));
                            $juneendogoal = $row5['endo_goal'];
                            $juneendoactual = $row5['actual_endo'];
                            $junebillinggoal = $row5['billing_goal'];
                            $junebillingactual = $row5['actual_billing'];                               
                            // JULY //
                            $julypsalmsmonth = $row6['assigned_month'];
                            $newJulyPsalmsMonth = date('F Y', strtotime($julypsalmsmonth));
                            $julyendogoal = $row6['endo_goal'];
                            $julyendoactual = $row6['actual_endo'];
                            $julybillinggoal = $row6['billing_goal'];
                            $julybillingactual = $row6['actual_billing'];    
                            // AUGUST //
                            $augpsalmsmonth = $row7['assigned_month'];
                            $newAugPsalmsMonth = date('F Y', strtotime($augpsalmsmonth));
                            $augendogoal = $row7['endo_goal'];
                            $augendoactual = $row7['actual_endo'];
                            $augbillinggoal = $row7['billing_goal'];
                            $augbillingactual = $row7['actual_billing']; 
                            // SEPTEMBER //
                            $septpsalmsmonth = $row8['assigned_month'];
                            $newSeptPsalmsMonth = date('F Y', strtotime($septpsalmsmonth));
                            $septendogoal = $row8['endo_goal'];
                            $septendoactual = $row8['actual_endo'];
                            $septbillinggoal = $row8['billing_goal'];
                            $septbillingactual = $row8['actual_billing']; 
                            // OCTOBER //
                            $octpsalmsmonth = $row9['assigned_month'];
                            $newOctPsalmsMonth = date('F Y', strtotime($octpsalmsmonth));
                            $octendogoal = $row9['endo_goal'];
                            $octendoactual = $row9['actual_endo'];
                            $octbillinggoal = $row9['billing_goal'];
                            $octbillingactual = $row9['actual_billing'];
                            // NOVEMBER //
                            $novpsalmsmonth = $row10['assigned_month'];
                            $newNovPsalmsMonth = date('F Y', strtotime($novpsalmsmonth));
                            $novendogoal = $row10['endo_goal'];
                            $novendoactual = $row10['actual_endo'];
                            $novbillinggoal = $row10['billing_goal'];
                            $novbillingactual = $row10['actual_billing'];                            
                            // DECEMBER //
                            $decpsalmsmonth = $row11['assigned_month'];
                            $newDecPsalmsMonth = date('F Y', strtotime($decpsalmsmonth));
                            $decendogoal = $row11['endo_goal'];
                            $decendoactual = $row11['actual_endo'];
                            $decbillinggoal = $row11['billing_goal'];
                            $decbillingactual = $row11['actual_billing'];    

                            ?>
                                <form class="form" method="POST" enctype="multipart/form-data" action="functions/update_target_ecclesiastes.php" action="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newJanPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjanendogoal" name="psalmsjanendogoal" value="<?php echo $janendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjanendoactual" name="psalmsjanendoactual" value="<?php echo $janendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjanbillinggoal" name="psalmsjanbillinggoal" value="<?php echo $janbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjanbillingactual" name="psalmsjanbillingactual" value="<?php echo $janbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalsmjanenable" style="font-size: 12px;" onclick="psalmsjanuaryenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalsmjandisable" style="display: none; font-size: 12px;" onclick="psalmsjanuarydisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newFebPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsfebendogoal" name="psalmsfebendogoal" value="<?php echo $febendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsfebendoactual" name="psalmsfebendoactual" value="<?php echo $febendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsfebbillinggoal" name="psalmsfebbillinggoal" value="<?php echo $febbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsfebbillingactual" name="psalmsfebbillingactual" value="<?php echo $febbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalsmfebenable" style="font-size: 12px;" onclick="psalmsfebruaryenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalsmfebdisable" style="display: none; font-size: 12px;" onclick="psalmsfebruarydisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newMarPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmarendogoal" name="psalmsmarendogoal" value="<?php echo $marendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmarendoactual" name="psalmsmarendoactual" value="<?php echo $marendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmarbillinggoal" name="psalmsmarbillinggoal" value="<?php echo $marbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmarbillingactual" name="psalmsmarbillingactual" value="<?php echo $marbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsmarenable" style="font-size: 12px;" onclick="psalmsmarchenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsmardisable" style="display: none; font-size: 12px;" onclick="psalmsmarchdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newAprPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaprendogoal" name="psalmsaprendogoal" value="<?php echo $aprendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaprendoactual" name="psalmsaprendoactual" value="<?php echo $aprendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaprbillinggoal" name="psalmsaprbillinggoal" value="<?php echo $aprbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaprbillingactual" name="psalmsaprbillingactual" value="<?php echo $aprbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsaprenable" style="font-size: 12px;" onclick="psalmsaprilenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsaprdisable" style="display: none; font-size: 12px;" onclick="psalmsaprildisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newMayPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmayendogoal" name="psalmsmayendogoal" value="<?php echo $mayendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmayendoactual" name="psalmsmayendoactual" value="<?php echo $mayendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmaybillinggoal" name="psalmsmaybillinggoal" value="<?php echo $maybillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsmaybillingactual" name="psalmsmaybillingactual" value="<?php echo $maybillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsmayenable" style="font-size: 12px;" onclick="psalmsmay_enable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsmaydisable" style="display: none; font-size: 12px;" onclick="psalmsmay_disable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newJunePsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjuneendogoal" name="psalmsjuneendogoal" value="<?php echo $juneendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjuneendoactual" name="psalmsjuneendoactual" value="<?php echo $juneendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjunebillinggoal" name="psalmsjunebillinggoal" value="<?php echo $junebillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjunebillingactual" name="psalmsjunebillingactual" value="<?php echo $junebillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsjuneenable" style="font-size: 12px;" onclick="psalmsjune_enable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsjunedisable" style="display: none; font-size: 12px;" onclick="psalmsjune_disable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newJulyPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjulyendogoal" name="psalmsjulyendogoal" value="<?php echo $julyendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjulyendoactual" name="psalmsjulyendoactual" value="<?php echo $julyendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjulybillinggoal" name="psalmsjulybillinggoal" value="<?php echo $julybillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsjulybillingactual" name="psalmsjulybillingactual" value="<?php echo $julybillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsjulyenable" style="font-size: 12px;" onclick="psalmsjuly_enable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsjulydisable" style="display: none; font-size: 12px;" onclick="psalmsjuly_disable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newAugPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaugendogoal" name="psalmsaugendogoal" value="<?php echo $augendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaugendoactual" name="psalmsaugendoactual" value="<?php echo $augendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaugbillinggoal" name="psalmsaugbillinggoal" value="<?php echo $augbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsaugbillingactual" name="psalmsaugbillingactual" value="<?php echo $augbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsaugenable" style="font-size: 12px;" onclick="psalmsaugustenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsaugdisable" style="display: none; font-size: 12px;" onclick="psalmsaugustdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newSeptPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsseptendogoal" name="psalmsseptendogoal" value="<?php echo $septendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsseptendoactual" name="psalmsseptendoactual" value="<?php echo $septendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsseptbillinggoal" name="psalmsseptbillinggoal" value="<?php echo $septbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsseptbillingactual" name="psalmsseptbillingactual" value="<?php echo $septbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsseptenable" style="font-size: 12px;" onclick="psalmsseptemberenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsseptdisable" style="display: none; font-size: 12px;" onclick="psalmsseptemberdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newOctPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsoctendogoal" name="psalmsoctendogoal" value="<?php echo $octendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsoctendoactual" name="psalmsoctendoactual" value="<?php echo $octendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsoctbillinggoal" name="psalmsoctbillinggoal" value="<?php echo $octbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsoctbillingactual" name="psalmsoctbillingactual" value="<?php echo $octbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsoctenable" style="font-size: 12px;" onclick="psalmsoctoberenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsoctdisable" style="display: none; font-size: 12px;" onclick="psalmsoctoberdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newNovPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsnovendogoal" name="psalmsnovendogoal" value="<?php echo $novendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsnovendoactual" name="psalmsnovendoactual" value="<?php echo $novendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsnovbillinggoal" name="psalmsnovbillinggoal" value="<?php echo $novbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsnovbillingactual" name="psalmsnovbillingactual" value="<?php echo $novbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsnovenable" style="font-size: 12px;" onclick="psalmsnovemberenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsnovdisable" style="display: none; font-size: 12px;" onclick="psalmsnovemberdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="background-color: #fff; border: none; font-weight: bold; font-size: 12px;" value="<?php echo $newDecPsalmsMonth; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsdecendogoal" name="psalmsdecendogoal" value="<?php echo $decendogoal; ?>" data-toggle="tooltip" data-placement="top" title="Endorsement Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsdecendoactual" name="psalmsdecendoactual" value="<?php echo $decendoactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Endorsement(s)" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsdecbillinggoal" name="psalmsdecbillinggoal" value="<?php echo $decbillinggoal; ?>" data-toggle="tooltip" data-placement="top" title="Billing Goal" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="psalmsdecbillingactual" name="psalmsdecbillingactual" value="<?php echo $decbillingactual; ?>" data-toggle="tooltip" data-placement="top" title="Total No. of Actual Billing" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-sm btn-outline-info" id="psalmsdecenable" style="font-size: 12px;" onclick="psalmsdecemberenable();"><i class="fa fa-thumbs-o-up"></i>&nbsp; Enable Record</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" id="psalmsdecdisable" style="display: none; font-size: 12px;" onclick="psalmsdecemberdisable();"><i class="fa fa-thumbs-o-down"></i>&nbsp; Disable Record</button>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-outline-success" name="updateecclesiastesrecord"><i class="fa fa-check-circle-o"></i> Update Record</button>
                                        </div>
                                    </div>
                                </form>
                            <?php
                        }
                    }
                }
            } else {
                echo "";
            }
        break;

        // MY PROFILE //
        case 'displaymonthlyactlogs':
            $sql = "SELECT COUNT(id) AS monthlyactivity FROM tbl_admin_history_logs WHERE MONTH(datetime_log) = MONTH(NOW()) AND YEAR(datetime_log) = YEAR(NOW()) AND user_id = '". $_SESSION['user_id'] ."'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalmonthlyactivity = $row['monthlyactivity'];
            echo $totalmonthlyactivity;
        break;

        case 'displayyearlyactlogs':
            $sql = "SELECT COUNT(id) AS yearlyactivity FROM tbl_admin_history_logs WHERE YEAR(datetime_log) = YEAR(NOW()) AND user_id = '". $_SESSION['user_id'] ."'";
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
            $sql1 = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Ticketing',
                    x_module_action = 'Create New Ticket'";
            $res1 = $conn->query($sql1);                                
            if ($res1) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

        // TICKET MANAGEMENT //
        case 'showcurmonthticket':
            $sql = "SELECT COUNT(ticket_id) AS monthlyticket FROM tbl_tickets WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW())";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($res);
            $monthlytick = $row['monthlyticket']; 
            echo $monthlytick;
        break;
        
        case 'showcuryearlyticket':
            $sql = "SELECT COUNT(ticket_id) AS yearlyticket FROM tbl_tickets WHERE YEAR(date_created) = YEAR(NOW())";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($res);
            $yearlytick = $row['yearlyticket']; 
            echo $yearlytick;
        break;

        case 'showjanticket':
            $sql = "SELECT COUNT(ticket_id) AS pending FROM tbl_tickets WHERE MONTH(date_created) = '01' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(ticket_id) AS onprocess FROM tbl_tickets WHERE MONTH(date_created) = '01' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(ticket_id) AS completed FROM tbl_tickets WHERE MONTH(date_created) = '01' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '2'";
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

        case 'showfebticket':
            $sql = "SELECT COUNT(ticket_id) AS pending FROM tbl_tickets WHERE MONTH(date_created) = '02' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(ticket_id) AS onprocess FROM tbl_tickets WHERE MONTH(date_created) = '02' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(ticket_id) AS completed FROM tbl_tickets WHERE MONTH(date_created) = '02' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '2'";
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

        case 'showmarticket':
            $sql = "SELECT COUNT(ticket_id) AS pending FROM tbl_tickets WHERE MONTH(date_created) = '03' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(ticket_id) AS onprocess FROM tbl_tickets WHERE MONTH(date_created) = '03' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(ticket_id) AS completed FROM tbl_tickets WHERE MONTH(date_created) = '03' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '2'";
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

        case 'showaprticket':
            $sql = "SELECT COUNT(ticket_id) AS pending FROM tbl_tickets WHERE MONTH(date_created) = '04' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(ticket_id) AS onprocess FROM tbl_tickets WHERE MONTH(date_created) = '04' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(ticket_id) AS completed FROM tbl_tickets WHERE MONTH(date_created) = '04' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '2'";
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

        case 'showmayticket':
            $sql = "SELECT COUNT(ticket_id) AS pending FROM tbl_tickets WHERE MONTH(date_created) = '05' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(ticket_id) AS onprocess FROM tbl_tickets WHERE MONTH(date_created) = '05' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(ticket_id) AS completed FROM tbl_tickets WHERE MONTH(date_created) = '05' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '2'";
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

        case 'showjuneticket':
            $sql = "SELECT COUNT(ticket_id) AS pending FROM tbl_tickets WHERE MONTH(date_created) = '06' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(ticket_id) AS onprocess FROM tbl_tickets WHERE MONTH(date_created) = '06' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(ticket_id) AS completed FROM tbl_tickets WHERE MONTH(date_created) = '06' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '2'";
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

        case 'showjulyticket':
            $sql = "SELECT COUNT(ticket_id) AS pending FROM tbl_tickets WHERE MONTH(date_created) = '07' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(ticket_id) AS onprocess FROM tbl_tickets WHERE MONTH(date_created) = '07' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(ticket_id) AS completed FROM tbl_tickets WHERE MONTH(date_created) = '07' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '2'";
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

        case 'showaugticket':
            $sql = "SELECT COUNT(ticket_id) AS pending FROM tbl_tickets WHERE MONTH(date_created) = '08' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(ticket_id) AS onprocess FROM tbl_tickets WHERE MONTH(date_created) = '08' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(ticket_id) AS completed FROM tbl_tickets WHERE MONTH(date_created) = '08' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '2'";
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

        case 'showseptticket':
            $sql = "SELECT COUNT(ticket_id) AS pending FROM tbl_tickets WHERE MONTH(date_created) = '09' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(ticket_id) AS onprocess FROM tbl_tickets WHERE MONTH(date_created) = '09' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(ticket_id) AS completed FROM tbl_tickets WHERE MONTH(date_created) = '09' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '2'";
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

        case 'showoctticket':
            $sql = "SELECT COUNT(ticket_id) AS pending FROM tbl_tickets WHERE MONTH(date_created) = '10' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(ticket_id) AS onprocess FROM tbl_tickets WHERE MONTH(date_created) = '10' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(ticket_id) AS completed FROM tbl_tickets WHERE MONTH(date_created) = '10' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '2'";
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

        case 'shownovticket':
            $sql = "SELECT COUNT(ticket_id) AS pending FROM tbl_tickets WHERE MONTH(date_created) = '11' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(ticket_id) AS onprocess FROM tbl_tickets WHERE MONTH(date_created) = '11' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(ticket_id) AS completed FROM tbl_tickets WHERE MONTH(date_created) = '11' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '2'";
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

        case 'showdecticket':
            $sql = "SELECT COUNT(ticket_id) AS pending FROM tbl_tickets WHERE MONTH(date_created) = '12' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(ticket_id) AS onprocess FROM tbl_tickets WHERE MONTH(date_created) = '12' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(ticket_id) AS completed FROM tbl_tickets WHERE MONTH(date_created) = '12' AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '2'";
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

        // ACTIVITY LOGS //
        case 'saveadmdashboard':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Dashboard',
                    x_module_action = 'View Dashboard'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmmonitorbi':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitor Endorsements',
                    x_module_action = 'View Monitor Endorsements - Background Investigation'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmmonitordc':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitor Endorsements',
                    x_module_action = 'View Monitor Endorsements - Database Check'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmuserlogs':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitoring Logs',
                    x_module_action = 'View Monitoring Logs - User Logs'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;       

        case 'saveadmactlogs':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitoring Logs',
                    x_module_action = 'View Monitoring Logs - Activity Logs'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break; 

        case 'saveadmendologs':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitoring Logs',
                    x_module_action = 'View Monitoring Logs - Endorsement Logs'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;  

        case 'saveadmnewuser':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Management',
                    x_module_action = 'View User Management - New User'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmmanageusers':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Management',
                    x_module_action = 'View User Management - Manage Users'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmmonthperf':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monthly Performance',
                    x_module_action = 'View Monthly Performance'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmtargetgoal':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Target Goal',
                    x_module_action = 'View Target Goal'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmmemberreq':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Member Requests',
                    x_module_action = 'View Member Requests'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmteammngt':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Team Management',
                    x_module_action = 'View Team Management'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmsystemmngt':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'System Management',
                    x_module_action = 'View System Management'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmkpimonitoring':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'KPI Monitoring',
                    x_module_action = 'View KPI Monitoring'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmuserprofile':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'My Profile',
                    x_module_action = 'View My Profile'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmusermessaging':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'My Messaging',
                    x_module_action = 'View My Messaging'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmviewchangeteam':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Team Management',
                    x_module_action = 'View Change Team'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmviewblacklistaccnt':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Management - Manage Users',
                    x_module_action = 'View Blacklist Account'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break; 

        case 'saveadmviewdeleteaccnt':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Management - Manage Users',
                    x_module_action = 'View Delete Account'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break; 

        case 'saveadmviewreactivateaccnt':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Management - Manage Users',
                    x_module_action = 'View Reactivate Account'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break; 

        case 'saveadmviewholidays':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Dashboard',
                    x_module_action = 'View Holidays'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break; 

        case 'saveadmviewtopmngt':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Dashboard',
                    x_module_action = 'View Top Management'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmviewteams':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Dashboard',
                    x_module_action = 'View Teams'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;    

        case 'saveadmviewbi':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitor Endorsements - Background Investigation',
                    x_module_action = 'View Endorsement'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmviewdc':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitor Endorsements - Database Check',
                    x_module_action = 'View Endorsement'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmviewendorsementlog':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitoring Logs - Endorsement Logs',
                    x_module_action = 'View Endorsement Log'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;  

        case 'saveadmviewmemberequest':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Member Requests',
                    x_module_action = 'View Member Request Details'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmviewupdateprofile':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'My Profile',
                    x_module_action = 'View My Update Profile'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmviewactivitylogs':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'My Profile',
                    x_module_action = 'View My Activity Logs'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmviewuserlogs':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'My Profile',
                    x_module_action = 'View My User Logs'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break; 

        case 'saveadmdtrpoc':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'DTR Management',
                    x_module_action = 'View DTR Management - Supervisors'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmdtrops':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'DTR Management',
                    x_module_action = 'View DTR Management - Operations'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;   

        case 'saveadmdtritsup':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'DTR Management',
                    x_module_action = 'View DTR Management - IT Support'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;   

        case 'saveadmdtrperformance':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'DTR Management',
                    x_module_action = 'View DTR Management - DTR Performance'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;   

        case 'saveadmviewexportmonthlytarget':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Target Goal',
                    x_module_action = 'View Export Data'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmvieweditmonthlytarget':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Target Goal',
                    x_module_action = 'View Edit Monthly Target'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmdashboardexportdata':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Dashboard',
                    x_module_action = 'View Export Data'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveadmuserticketing':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Ticketing',
                    x_module_action = 'View User Ticketing'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveticketmngt':
            $sql = "INSERT INTO tbl_admin_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Ticket Management',
                    x_module_action = 'View Ticket Management'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_admin_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;
        
        // ONLINE USERS //
        case 'displayadmonlineusers':
            $sql = "SELECT a.user_id, CONCAT(a.fname,  ' ', a.lname,  ' ', a.suffix) AS adminname, a.lname, a.user_image, b.user_id, b.messagestatus_, b.useremail_ FROM tbl_admin AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id WHERE a.user_id != '". $_SESSION['user_id'] ."' AND b.messagestatus_ = '1' UNION ALL SELECT a.user_id, CONCAT(a.fname,  ' ', a.lname,  ' ', a.suffix) AS supervisorname, a.lname, a.user_image, b.user_id, b.messagestatus_, b.useremail_ FROM tbl_supervisor AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id WHERE b.messagestatus_ = '1' UNION ALL SELECT a.user_id, CONCAT(a.fname,  ' ', a.lname,  ' ', a.suffix) AS operationsname, a.lname, a.user_image, b.user_id, b.messagestatus_, b.useremail_ FROM tbl_operations AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id WHERE b.messagestatus_ = '1' UNION ALL SELECT a.user_id, CONCAT(a.fname,  ' ', a.lname,  ' ', a.suffix) AS supportname, a.lname, a.user_image, b.user_id, b.messagestatus_, b.useremail_ FROM tbl_support AS a LEFT JOIN tbl_users AS b ON a.user_id = b.user_id WHERE b.messagestatus_ = '1' ORDER BY lname ASC LIMIT 5";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $user_id = $row['user_id'];
                    $user_image = $row['user_image'];
                    ?>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <?php
                                    echo '<img class="media-object" src="../profilepictures_/'.$user_id.'/'.$user_image.'"  alt="">';
                                ?>
                                <div class="media-body">
                                    <span class="name d-flex justify-content-between"><?php echo $row['adminname']; ?><i class="fa fa-circle font-12" style="color: #50C878;"></i></span>
                                    <span class="message" style="font-weight: bold;"><?php echo $row['useremail_']; ?></span>
                                </div>
                            </a>
                        </li>
                    <?php
                }
            } else {
                ?>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="../images/icons/default.png"  alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between" style="font-weight: bold;">No Online Users<i class="fa fa-times-circle font-12" style="color: #000;"></i></span>
                                <span class="message" style="font-weight: bold;">No Data Available</span>
                            </div>
                        </a>
                    </li>
                <?php           
            }
        break;
    }
?>