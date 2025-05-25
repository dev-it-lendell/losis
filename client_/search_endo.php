<?php
// Include database connection
include 'checking.php';
// Check if the search query is set
if (isset($_POST['search_query'])) {
    $searchQuery = $_POST['search_query'];

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT a.id, a.endo_id, a.endo_desc, a.endo_code, 
        CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) AS applicantname, 
        a.endo_date, a.endo_status, a.importance, a.is_rerun
        FROM tbl_endo AS a 
        WHERE (CONCAT(a.fname, ' ', a.mname, ' ', a.lname, ' ', a.suffix) LIKE ? 
        OR a.endo_code LIKE ? 
        OR a.endo_desc LIKE ?) 
        LIMIT 10");

    // Bind parameters
    $searchTerm = "%" . $searchQuery . "%";
    $stmt->bind_param("sss", $searchTerm, $searchTerm, $searchTerm);

    // Execute the statement
    $stmt->execute();
    
    // Bind result variables
    $stmt->bind_result($id, $endo_id, $endo_desc, $endo_code, $applicantname, $endo_date, $endo_status, $importance, $isrerun);

    // Check if any results were found
    if ($stmt->store_result() && $stmt->num_rows > 0) {
        // Output data of each row
        while ($stmt->fetch()) {
            $endoDate = date("F j, Y", strtotime($endo_date));
            $endostatus = getStatusBadge($endo_status); // Function to get status badge HTML
            
            // Add importance icon logic
            if (isset($importance) && $importance == '1') {
                $endoimportant = '<div class="feeds-left"><img src="../images/icons/high_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="High Importance"></div>';
            } else if (isset($importance) && $importance == '2') {
                $endoimportant = '<div class="feeds-left"><img src="../images/icons/low_imp.png" class="rounded-circle width35" alt="" style="width: 20px; margin-top: -2px; margin-left: 5px;" data-toggle="tooltip" data-placement="top" title="Low Importance"></div>';
            } else {
                $endoimportant = "";
            }
            // RERUN //
            if ($row['is_rerun'] == '0') {
                $isrerun = '<span class="badge badge-danger" style="font-weight: bold; background-color: #fff;">No</span>';
            } else if ($row['is_rerun'] == '1') {
                $isrerun = '<span class="badge badge-success" style="font-weight: bold; background-color: #fff;">Yes</span>';
            } else {
                $isrerun = "";
            }
            // Output the row with importance icon
            echo "<tr>
                    <td>{$endoimportant}</td> <!-- Placeholder for importance icon -->
                    <td>{$endoDate}</td>
                    <td style='font-weight: bold;'>{$applicantname}</td>
                    <td>{$endostatus}</td>
                    <td>{$isrerun}</td>
                    <td style='text-align: center;'>
                        <a onclick='savemonitorbiendo();' href='view_bi_endorsement.php?endoCode={$endo_code}' class='btn btn-sm btn-outline-dark' data-toggle='tooltip' data-placement='top' title='View Endorsement'><i class='fa fa-file-text-o'></i></a>
                        " . ($endo_status == '4' ? "<a onclick='savedownloadrepbi()' href='download_file.php?file={$endo_code}' class='btn btn-sm btn-outline-success' data-toggle='tooltip' data-placement='top' title='Download Report'><i class='fa fa-download'></i></a>" : "") . "
                    </td>
                </tr>";
        }
    } else {
        echo "<tr><td colspan='5' style='text-align: center;'>No results found</td></tr>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If search is cleared, set inputs to January
    $searchQuery = ''; // Reset search query
    // Logic to set date to January can be added here if needed
}

// Function to return the status badge HTML
function getStatusBadge($status) {
    switch ($status) {
        case '0':
            return '<span class="badge badge-warning" style="font-weight: bold; background-color: #fff;">Pending</span>';
        case '1':
            return '<span class="badge badge-info" style="font-weight: bold; background-color: #fff;">Received</span>';
        case '2':
            return '<span class="badge badge-danger" style="font-weight: bold; background-color: #fff;">On-Process</span>';
        case '3':
            return '<span class="badge badge-default" style="font-weight: bold; background-color: #fff;">Done</span>';
        case '4':
            return '<span class="badge badge-success" style="font-weight: bold; background-color: #fff;">Completed</span>';
        default:
            return '';
    }
}
?>