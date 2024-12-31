<?php
// Create a connection to the database
 $conn = new mysqli('localhost', 'root', '', 'miniproject');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get the form data
$yourname = $_POST['Yourname'];
$department = $_POST['dept'];
$designation = $_POST['dropdown'];
$purpose = $_POST['Purpose'];
$timeout = $_POST['timeout'];
$timein = $_POST['timein'];

$current_date = date("Y-m-d");


// Insert the data into the database
$sql = "INSERT INTO applyform (Yourname, dept, dropdown, Purpose, timeout, timein, ApplyDate, status) VALUES ('$yourname', '$department', '$designation', '$purpose', '$timeout', '$timein', '$current_date', 'pending')";


if ($conn->query($sql) === TRUE) {
echo "<script>alert('New Application Submitted For Approval'); window.history.go(-2); window.location.reload();</script>";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
