<?php
	include 'checking.php';

	switch ($_POST['form']) {
        // DASHBOARD //
        case 'showtotalticket':
            $sql = "SELECT COUNT(ticket_id) AS totalticket FROM tbl_tickets WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalmonthlyticket = $row['totalticket'];
            echo $totalmonthlyticket;
        break;

        case 'showpendingticket':
            $sql = "SELECT COUNT(ticket_id) AS pendingticket FROM tbl_tickets WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '0'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $pendticket = $row['pendingticket'];
            echo $pendticket;
        break;

        case 'showonprocessticket':
            $sql = "SELECT COUNT(ticket_id) AS onprocessticket FROM tbl_tickets WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '1'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $onprocticket = $row['onprocessticket'];
            echo $onprocticket;
        break;

        case 'showcompletedticket':
            $sql = "SELECT COUNT(ticket_id) AS completedticket FROM tbl_tickets WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '2'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $compticket = $row['completedticket'];
            echo $compticket;
        break;

        case 'showprevtotalticket':
            $sql = "SELECT COUNT(ticket_id) AS totalprevticket FROM tbl_tickets WHERE YEAR(date_created) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(date_created) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalprevticket = $row['totalprevticket'];
            echo $totalprevticket;
        break;

        case 'showprevpendingticket':
            $sql = "SELECT COUNT(ticket_id) AS pendprevticket FROM tbl_tickets WHERE YEAR(date_created) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(date_created) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND ticket_status = '0'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $pendingprevticktet = $row['pendprevticket'];
            echo $pendingprevticktet;
        break;

        case 'showprevonprocessticket':
            $sql = "SELECT COUNT(ticket_id) AS onprocprevticket FROM tbl_tickets WHERE YEAR(date_created) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(date_created) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND ticket_status = '1'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $onprocessprevticktet = $row['onprocprevticket'];
            echo $onprocessprevticktet;
        break; 

        case 'showprevcompletedticket':
            $sql = "SELECT COUNT(ticket_id) AS compprevticket FROM tbl_tickets WHERE YEAR(date_created) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(date_created) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) AND ticket_status = '2'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $completedprevticktet = $row['compprevticket'];
            echo $completedprevticktet;
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

        case 'showitdeptlist':
            $sql = "SELECT a.itsupp_id, a.fname, a.mname, a.lname, a.suffix, a.position_, b.user_id, CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) AS supportname, b.lname, b.user_image FROM itsupport_list AS a LEFT JOIN tbl_support AS b ON CONCAT(a.fname,  ' ', a.mname,  ' ', a.lname, ' ', a.suffix) = CONCAT(b.fname, ' ', b.mname,  ' ', b.lname,  ' ', b.suffix) WHERE b.user_id != '". $_SESSION['user_id'] ."' ORDER BY b.lname ASC LIMIT 5";
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
                            <small style="font-weight: bold; margin-top: -7px;">No IT</small>
                        </div>
                    </li>
                <?php           
            }
        break; 

        // VERIFY ENDORSEMENT //

        // BACKGROUND INVESTIGATION //
        case 'showtotalverifybi':
            $sql = "SELECT COUNT(a.id) AS forchkbi, a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo AS a LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE a.endo_status = '1' AND b.verify_status ='0' AND MONTH(b.datetime_added) = MONTH(NOW()) AND YEAR(b.datetime_added) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $sql1 = "SELECT COUNT(a.id) AS compbi, a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo AS a LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE a.endo_status = '2' AND b.verify_status ='1' AND MONTH(b.datetime_added) = MONTH(NOW()) AND YEAR(b.datetime_added) = YEAR(NOW())";
            $res1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($res1);
            $forcheckingbi = $row['forchkbi'];
            $completedbi = $row1['compbi'];
            $totalverificationbi = $forcheckingbi + $completedbi;
            echo $totalverificationbi;
        break;

        case 'showtotalverifystatus':
            $sql = "SELECT COUNT(a.id) AS forchecking, a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo AS a LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE a.endo_status = '1' AND b.verify_status ='0' AND MONTH(b.datetime_added) = MONTH(NOW()) AND YEAR(b.datetime_added) = YEAR(NOW())";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS completed, a.id, a.endo_id, a.endo_desc, a.endo_code, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.birthdate, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.folder_name,  a.document_status_others, a.remarks_others, a.document_status_employment, a.remarks_employment, a.document_status_education, a.remarks_education, a.endorsed_to, a.turn_around_date, a.endo_services, a.package_desc, a.client_id, a.site_id, a.endo_requestor, a.change_package, a.importance, a.bi_id, a.closure_date, a.account, a.initiation_date, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo AS a LEFT JOIN tbl_endo_support_bi AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE a.endo_status = '2' AND b.verify_status ='1' AND MONTH(b.datetime_added) = MONTH(NOW()) AND YEAR(b.datetime_added) = YEAR(NOW())";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            while ($row = mysqli_fetch_array($res)) {
                $totalforchecking = $row['forchecking'];
                $totalcompleted = $row1['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalforchecking; ?> FOR-CHECKING</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
        break;

        // DATABASE CHECK //
        case 'showtotalverifydc':
            $sql = "SELECT COUNT(a.id) AS forchkbi, a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_endo_support_dc AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE a.endo_status = '1' AND b.verify_status ='0' AND MONTH(b.datetime_added) = MONTH(NOW()) AND YEAR(b.datetime_added) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $sql1 = "SELECT COUNT(a.id) AS compbi, a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_endo_support_dc AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE a.endo_status = '2' AND b.verify_status ='1' AND MONTH(b.datetime_added) = MONTH(NOW()) AND YEAR(b.datetime_added) = YEAR(NOW())";
            $res1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($res1);
            $forcheckingbi = $row['forchkbi'];
            $completedbi = $row1['compbi'];
            $totalverificationbi = $forcheckingbi + $completedbi;
            echo $totalverificationbi;
        break;

        case 'showtotalverifydcstatus':
            $sql = "SELECT COUNT(a.id) AS forchecking, a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_endo_support_dc AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE a.endo_status = '1' AND b.verify_status ='0' AND MONTH(b.datetime_added) = MONTH(NOW()) AND YEAR(b.datetime_added) = YEAR(NOW())";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(a.id) AS completed, a.id, a.endo_id, a.endo_desc, a.endo_code, a.endo_date, a.endo_status, a.is_for_review, a.is_done, a.endorsed_to, a.turn_around_date, a.endo_services, CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, a.hired_date, a.address, a.birthdate, a.site_id, a.client_id, a.endo_requestor, a.account, a.initiation_date, a.bi_id, a.bi_batch, a.importance, a.closure_date, a.package_desc, b.id, b.endo_code, b.verify_status, b.verifier_, b.cmap_, b.cmap_results, b.ofac_, b.ofac_results, b.oig_, b.oig_results, b.gsa_, b.gsa_results, b.endo_folder, b.datetime_added, c.user_id, CONCAT(c.fname, ' ', c.mname, ' ', c.lname,  ' ', c.suffix) AS clientname, c.company_name, c.site_id, d.client_id, d.client_name, d.acronym_, d.site_, e.user_id, e.assigned_team, CONCAT(e.fname, ' ', e.mname, ' ', e.lname, ' ', e.suffix) AS supervisorname, f.team_no, f.team_name FROM tbl_endo_criminal AS a LEFT JOIN tbl_endo_support_dc AS b ON a.endo_code = b.endo_code LEFT JOIN tbl_client AS c ON a.client_id = c.user_id LEFT JOIN client_list AS d ON c.site_id = d.client_id LEFT JOIN tbl_supervisor AS e ON a.endorsed_to = e.user_id LEFT JOIN team_list AS f ON e.assigned_team = f.team_no WHERE a.endo_status = '2' AND b.verify_status ='1' AND MONTH(b.datetime_added) = MONTH(NOW()) AND YEAR(b.datetime_added) = YEAR(NOW())";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            while ($row = mysqli_fetch_array($res)) {
                $totalforchecking = $row['forchecking'];
                $totalcompleted = $row1['completed'];

                ?>
                <p class="float-md-right">
                    <span class="badge badge-info" style="font-weight: bold; background-color: #fff;"><?php echo $totalforchecking; ?> FOR-CHECKING</span>
                    <span class="badge badge-success" style="font-weight: bold; background-color: #fff;"><?php echo $totalcompleted; ?> COMPLETED</span>
                </p>
                <?php
            }
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
            $sql1 = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Ticketing',
                    x_module_action = 'Create New Ticket'";
            $res1 = $conn->query($sql1);                                
            if ($res1) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

        // MANAGE TICKETS //
        case 'showtotalcurrentticket':
            $sql = "SELECT COUNT(ticket_id) AS totalticket FROM tbl_tickets WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW())";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            $totalmonthlyticket = $row['totalticket'];
            echo $totalmonthlyticket;
        break;

        case 'totalcurrentticketstatus':
            $sql = "SELECT COUNT(ticket_id) AS pending FROM tbl_tickets WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '0'";
            $res = mysqli_query($conn, $sql);
            $sql1 = "SELECT COUNT(ticket_id) AS onprocess FROM tbl_tickets WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '1'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($res1);
            $sql2 = "SELECT COUNT(ticket_id) AS completed FROM tbl_tickets WHERE MONTH(date_created) = MONTH(NOW()) AND YEAR(date_created) = YEAR(NOW()) AND ticket_status = '2'";
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

        case 'startticket':
            $sql = "UPDATE tbl_tickets SET start_time = NOW(), ticket_status = '1' WHERE reference_number = '".$_POST["referencecode"]."'";
            $res = $conn->query($sql);
            $sql1 = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Tickets',
                    x_module_action = 'Start Ticket'";
            $res1 = $conn->query($sql1);                                
            if ($res1) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

        case 'extendticket':
            $sql = "UPDATE tbl_tickets SET end_date = NOW(), is_extended = '1' WHERE reference_number = '".$_POST["referencecode"]."'";
            $res = $conn->query($sql);
            $sql1 = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Manage Tickets',
                    x_module_action = 'Extend Ticket'";
            $res1 = $conn->query($sql1);                                
            if ($res1) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
            echo 1;
        break;

		// ACTIVITY LOGS //
		case 'savedashboard':
            $sql = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Dashboard',
                    x_module_action = 'View Dashboard'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

		case 'saveverifyendobi':
            $sql = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Verify Endorsements',
                    x_module_action = 'View Background Investigation'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

		case 'saveverifyendodc':
            $sql = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Verify Endorsements',
                    x_module_action = 'View Database Check'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

		case 'savemonitorendobi':
            $sql = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitor Endorsements',
                    x_module_action = 'View Background Investigation'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

		case 'savemonitorendodc':
            $sql = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Monitor Endorsements',
                    x_module_action = 'View Database Check'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
		break;

        case 'savesuppuploaddtr':
            $sql = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'DTR Management',
                    x_module_action = 'View Upload DTR'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savespvmanagedtr':
            $sql = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'DTR Management',
                    x_module_action = 'View IT Supervisors'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savesuppmanagedtr':
            $sql = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'DTR Management',
                    x_module_action = 'View IT Support'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savespvuploaddtr':
            $sql = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'DTR Management',
                    x_module_action = 'View Upload DTR'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savesupp_managedtr':
            $sql = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'DTR Management',
                    x_module_action = 'View Manage DTR'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savemanagetickets':
            $sql = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Ticketing',
                    x_module_action = 'View Manage Tickets'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savemanagetickets':
            $sql = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Ticketing',
                    x_module_action = 'View Monitor Tickets'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveuserprofile':
            $sql = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Profile',
                    x_module_action = 'View User Profile'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;   

        case 'saveusermessaging':
            $sql = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'User Messaging',
                    x_module_action = 'View User Messaging'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'savecheckendobi':
            $sql = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Verify Endorsement - Background Investigation',
                    x_module_action = 'View Verification Checking'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;

        case 'saveviewcheckbi':
            $sql = "INSERT INTO tbl_support_history_logs SET
                    user_id = '". $_SESSION['user_id'] ."',
                    x_module = 'Verify Endorsement - Background Investigation',
                    x_module_action = 'View Endorsement Results'";
            $res = $conn->query($sql);                                

            if ($res) {
                $last_return_id = mysqli_insert_id($conn);
                if ($last_return_id) {
                    $logsid = rand(10000000,99999999);
                    $logsuserid = "LOG-".$logsid."-".$last_return_id;
                    $logsquery = "UPDATE tbl_support_history_logs SET logs_id = '". $logsuserid ."' WHERE id = '". $last_return_id ."'";
                    $resquery = $conn->query($logsquery);
                }
            }
        break;
	}
?>