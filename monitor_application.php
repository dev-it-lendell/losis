<?php
// Include database connection
include 'connect.php';
include 'modals.php';

// Initialize variables
$applicationNumber = "";
$status_message = "Your application number is disapproved."; // Default message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the applicationNumber from the form input
    $applicationNumber = $_POST['applicationNumber'] ?? '';

    if (!empty($applicationNumber)) {
        // Sanitize the input to prevent SQL injection
        $applicationNumber = mysqli_real_escape_string($conn, $applicationNumber);

        $sql = "SELECT application_status FROM application_list WHERE application_code = '$applicationNumber'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Fetch the application_status from application_list
            $row = mysqli_fetch_assoc($result);
            $application_status = $row['application_status'];

            // Check the application status
            if ($application_status == 0) {
                $icon = '<i class="fa-solid fa-clock-rotate-left" style="font-size: 75px; color: #ffdb58;"></i>';
                $status_message = "Your application number <strong>" . htmlspecialchars($applicationNumber) . "</strong> is currently pending.";
            } elseif ($application_status == 1) {
                $icon = '<i class="fa-solid fa-circle-check" style="font-size: 75px; color: #28a745;"></i>';
                $status_message = "Your application number <strong>" . htmlspecialchars($applicationNumber) . "</strong> is approved.";
            } elseif ($application_status == 2) {
                $icon = '<i class="fa-solid fa-circle-xmark" style="font-size: 75px; color: #ff0000;"></i>';
                $status_message = "Your application number <strong>" . htmlspecialchars($applicationNumber) . "</strong> is disapproved.";
            } else {
                $icon = '<i class="fa-solid fa-circle-xmark" style="font-size: 75px; color: #ff0000;"></i>';
                $status_message = "Invalid status in application list.";
            }       

            // Now check in the tbl_endo table for additional status
            $sql = "SELECT endo_status FROM tbl_endo WHERE application_code = '$applicationNumber'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Fetch the endo_status
                $row = mysqli_fetch_assoc($result);
                $endo_status = $row['endo_status'];

                // Determine the status message based on the endo_status value
                if ($endo_status == 0 || $endo_status == 1 || $endo_status == 2) {
                    $status_message .= " Additionally, your application is currently in process.";
                } elseif ($endo_status == 3) {
                    $status_message .= " Additionally, your application is currently under review for completion.";
                } elseif ($endo_status == 4) {
                    $status_message .= " Additionally, the final report for your application has been completed.";
                } else {
                    $status_message .= " Invalid endorsement status.";
                }
            } else {
                // If the application number does not exist in tbl_endo
                $status_message .= " However, there is no additional information from endo processing.";
            }
        } else {
            // If the application number does not exist in the application_list
            $icon = '<i class="fa-solid fa-circle-xmark" style="font-size: 75px; color: #ff0000;"></i>';
            $status_message = "Invalid application number. Please try again.";
        }
    } else {
        // No application number entered
        $icon = '<i class="fa-solid fa-circle-xmark" style="font-size: 75px; color: #ff0000;"></i>';
        $status_message = "Please enter a valid application number.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOSIS | Application Status</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-4">
            <div class="border border-3 border-success"></div>
            <div class="card bg-white shadow p-5">
                <div class="mb-4 text-center">
                <?php 
                    if (empty($icon)) {
                            echo '<i class="fa-solid fa-magnifying-glass" style="font-size: 75px; color: #28a745;"></i>';
                        } else {
                            echo $icon;
                        }
                        ?>
                </div>

                <div class="text-center">
                    <div class="text-center mb-4">
                        <h5>Check Application Status</h5>
                        <p>Please enter your application number to check the status of your application.</p>                    
                    </div>

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="mb-3 text-center">
                        <input type="text" class="form-control d-inline-block mx-auto text-center" id="applicationNumber" name="applicationNumber" placeholder="Application Number">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success w-100">Check Status</button>
                        </div>
                    </form>

                    <!-- Status Message Box -->
                    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                        <div class="text-center mb-4">
                            <div class="card border-success" style="border-radius: 12px; max-width: 100%;">
                                <div class="card-body text-center">
                                <p class="mt-3 text-center"><?php echo $status_message; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <a href="applicationForm.php" class="btn btn-outline-success">Back to Application Form</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
