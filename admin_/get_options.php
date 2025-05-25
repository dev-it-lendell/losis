<?php
include '../connect.php';

if (isset($_POST['client_name'])) {
    $companyName = $_POST['client_name'];

    // Prepare the SQL query
    $sql = "SELECT `client_id`, `site_` FROM `client_list` WHERE `client_name` = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        die('Error in preparing statement: ' . $conn->error);
    }

    // Bind the parameter
    $stmt->bind_param("s", $companyName);
    
    // Execute the statement
    if ($stmt->execute() === false) {
        die('Error in executing query: ' . $stmt->error);
    }

    // Bind the result variables
    $stmt->bind_result($client_id, $site);

    // Fetch the results
    while ($stmt->fetch()) {
        echo '<option value="' . $client_id . '">' . $site . '</option>';
    }

    $stmt->close();
    $conn->close();
} else {
    echo 'Error: No company name provided';
}
?>