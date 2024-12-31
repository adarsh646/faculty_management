<?php
// Include your database connection file
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the parameters
    $username = $_POST['username'];
    $action = $_POST['action'];

    // Implement your logic to update the status in the database
    // For example:
    if ($action == 'approve') {
        // Update the status to 'Approved'
        $conn->query("UPDATE applyform SET status='Approved' WHERE Yourname='$username'");
    } elseif ($action == 'decline') {
        // Update the status to 'Declined'
        $conn->query("UPDATE applyform SET status='Declined' WHERE Yourname='$username'");
    }

    // Close the database connection
    $conn->close();

    // Send a response (you can customize the response based on your needs)
    echo "Status updated successfully";
} else {
    // Invalid request
    echo "Invalid request";
}
?>
