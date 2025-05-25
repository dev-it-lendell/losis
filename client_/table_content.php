<?php
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $endoDate = $row['endo_date'];
        $newDateEndo = date("F j, Y", strtotime($endoDate));

        // STATUS
        if ($row['endo_status'] == '0') {
            $endostatus = '<span class="badge badge-warning" style="font-weight: bold; background-color: #fff;">Pending</span>';
        } else if ($row['endo_status'] == '1') {
            $endostatus = '<span class="badge badge-info" style="font-weight: bold; background-color: #fff;">Received</span>';
        } else if ($row['endo_status'] == '2') {
            $endostatus = '<span class="badge badge-danger" style="font-weight: bold; background-color: #fff;">On-Process</span>';
        } else if ($row['endo_status'] == '3') {
            $endostatus = '<span class="badge badge-default" style="font-weight: bold; background-color: #fff;">Done</span>';
        } else if ($row['endo_status'] == '4') {
            $endostatus = '<span class="badge badge-success" style="font-weight: bold; background-color: #fff;">Completed</span>';
        } else {
            $endostatus = "";
        }

        // IMPORTANCE
        if ($row['importance'] == '1') {
            $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
        } else if ($row['importance'] == '2') {
            $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
        } else {
            $endoimportant = "";
        }
        ?>
        <tr>
            <td><?php echo $endoimportant ?></td>
            <td><?php echo $newDateEndo ?></td>
            <td style="font-weight: bold;"><?php echo htmlspecialchars($row['applicantname']); ?></td>
            <td><?php echo $endostatus; ?></td>
            <td style="text-align: center;">
                <a onclick="savemonitorbiendo();" href="view_bi_endorsement.php?endoCode=<?php echo htmlspecialchars($row['endo_code']) ?>" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Endorsement"><i class="fa fa-file-text-o"></i></a>
                <?php if ($row['endo_status'] == '4'){ ?>
                    <a onclick="savedownloadrepbi()" href="download_file.php?file=<?php echo htmlspecialchars($row['endo_code']) ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Download Report"><i class="fa fa-download"></i></a>
                <?php } ?>
            </td>
        </tr>
        <?php
    }
} else {
    echo '<tr><td colspan="5" class="text-center">No records found for this month</td></tr>';
}
?>