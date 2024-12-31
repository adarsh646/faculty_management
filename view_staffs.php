

	<html>
	<head>
	  <link rel="stylesheet" type="text/css" href ="style3.css">
	</head>
	<body>
	 <center> 

	  <div class="container9">
	    <section id="tittle"><h1>STAFFS</h1></section>
	    </div>
	  <body>
	    <table border="1">
		<tr>
		    <th>Username</th>
		    <th>Email</th>
		    <th>Account Type</th>
		    <th>Department</th>
		</tr>
		<?php
	// Create connection
	$conn=new mysqli('localhost','root','','miniproject');
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	// Fetch the data from the database
	$sql = "SELECT * FROM signupdata ";
	$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
		    echo "<tr>
		            <td>".$row['username']."</td>
		            <td>".$row['email']."</td>
		            <td>".$row['account_type']."</td>
		            <td>".$row['department']."</td>
		        </tr>";
		}
		?>
	    </table>
	</body>
	</body>
	<html>
