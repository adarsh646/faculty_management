<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <script src="jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href ="style4.css">
</head>
<body>

<section id = "menu">
			<div class="logo">
				<img src=" collegelogo.jpg " alt="">
				<h2>Faculty Register</h2>
			</div>

			<div class="item">
			 <li><i class=" "></i><a href="admin_page.php">Dashboard</a></li>	
			 <li><i class=" "></i><a href="view_staffs.php">View Staffs</a></li>	
			 <li><i class=" "></i><a href="login.php">Logout</a></li>

			</div>

		</section>

		<section id="interface">
			<div class="navigation">
			
				<h1>Admin Panel</h1>
			  
			
			</div>
			<h3 class="i-name">
				Dashboard
			</h3>
			<div class="values">
				<div class="val-box">
					<div>
						<h4><a href="pending.php">Pending</a></h4>

					</div>
				</div>
				<div class="val-box1">
					<div>
						<h4><a href="approved_users.php">Approved</a></h4>
				
					</div>
				</div>
				<div class="val-box2">
					<div>
						<h4><a href="staff_out.php">StaffsOut</a></h4>
				
					</div>
				</div>
			</div>
			<dir class="board">
		    <table width="100%">
		    	<thead>
		    		<tr style = "background-color: red; ">
		    			<td>Name</td>
		                <td>Department</td>
		                <td>Designation</td>
		                <td>Purpose</td>
		                <td>TimeOut</td>
		                <td>Time in</td>
		                <td>Apply Date</td>
		                <td>Status</td>
		    			</tr>

		    	</thead>
		    	<tbody>

<?php
// Include your database connection file
include 'db_connection.php';

// Fetch data from the database (adjust this query based on your needs)
$result = $conn->query("SELECT * FROM applyform");

if ($result->num_rows > 0) {
    // Output data in a table (adjust the structure based on your needs)
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["Yourname"]."</td>
        <td>".$row["dept"]."</td>
        <td>".$row["dropdown"]."</td>
        <td>".$row["Purpose"]."</td>
        <td>".$row["timeout"]."</td>
        <td>".$row["timein"]."</td>
        <td>".$row["ApplyDate"]."</td>
        <td>".$row["status"]."</td>
                <td>
                    <button onclick=\"updateStatus('{$row['Yourname']}', 'approve')\">Approve</button>
                    <button onclick=\"updateStatus('{$row['Yourname']}', 'decline')\">Decline</button>
                </td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No records found";
}

// Close the database connection
$conn->close();
?>

<script>
function updateStatus(username, action) {
    // Use AJAX to send a POST request to the update_status.php script
    $.post("update_status.php", { username: username, action: action }, function(data) {
        alert(data); // You can display a success message or handle errors here
        // You may also reload the page or update the UI as needed
    });
}
</script>

</body>
</html>
