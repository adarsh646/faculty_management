	<!DOCTYPE html>
	<html>
	<head>
	<title>staff page</title>

	<link rel="stylesheet" type="text/css" href ="style4.css">
	</head>
	<body>
	<section id = "menu">
	  <div class="logo">
	    <img src=" collegelogo.jpg " alt="">
	     <h2>Faculty Register</h2>
	    </div>
	  <div class="item">
	     <li><i class=" "></i><a href="staffs_page.php">Dashboard</a></li>      
	      <li><i class=" "></i><a href="login.php">Logout</a></li>
	   </div>
	    </section>
	 <section id="interface">
	    <div class="navigation1">
		 <h1>User Account</h1>
		  
		 </div>
	    <h3 class="i-name">
		Dashboard
	      </h3>
	     <div class="values">
	     <div class="val-box1">
		        <div>
		            <h4><a href="apply_form.php">Apply</a></h4>

		        </div>
		    </div>
		 <div class="val-box">
		    <div>
		        <h4><a href="pending.php">Pending</a></h4>
		        
		        </div>

		</div>
		<dir class="board">
		    <table width="100%">
		        <thead>
		        	<div >
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
		        </div>
		        </thead>
		        <tbody>
		           <?php
		            // Create a connection to the database
		            $conn = new mysqli('localhost', 'root', '', 'miniproject');

		            // Check connection
		            if ($conn->connect_error) {
		                die("Connection failed: " . $conn->connect_error);
		            }

		            // Fetch data from the database
		            $sql = "SELECT * FROM applyform";
		            $result = $conn->query($sql);

		            if ($result->num_rows > 0) {
		                while($row = $result->fetch_assoc()) {
		                    echo "<tr>
		                         <td>".$row["Yourname"]."</td>
		                        <td>".$row["dept"]."</td>
		                        <td>".$row["dropdown"]."</td>
		                        <td>".$row["Purpose"]."</td>
		                        <td>".$row["timeout"]."</td>
		                        <td>".$row["timein"]."</td>
		                        <td>".$row["ApplyDate"]."</td>
		                        <td>".$row["status"]."</td>
	</tr>";
	}
	} else {
	echo "<tr><td colspan='8'>No records found</td></tr>";
	}
	$conn->close();
	?>
	</tbody>
	</table>           
	</dir> 
	</section>
	</body>
	</html>
