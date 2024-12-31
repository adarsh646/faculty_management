<?php
// Include your database connection file
include 'db_connection.php';

// Fetch users with "Approved" status
$result = $conn->query("SELECT * FROM applyform WHERE status='Approved'");

// Display the approved users
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved Users</title>
    <link rel="stylesheet" type="text/css" href ="style3.css">
</head>

<body>
    <h1>Approved Users</h1>
    <table border='1'>
        <tr>
            <th>Name</th>
            <th>Department</th>
            <td>Designation</td>
            <th>Purpose</th>
            <th>TimeOut</th>
            <th>Time in</th>
            <th>Apply Date</th>
           
        </tr>

        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>".$row["Yourname"]."</td>
            <td>".$row["dept"]."</td>
            <td>".$row["dropdown"]."</td>
            <td>".$row["Purpose"]."</td>
            <td>".$row["timeout"]."</td>
            <td>".$row["timein"]."</td>
            <td>".$row["ApplyDate"]."</td>
                
            </tr>";
        }
        ?>

    </table>

    

</body>

</html>

<?php
// Close the database connection
$conn->close();
?>
