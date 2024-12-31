	<!DOCTYPE html>
	<html>
	<head>
	    <title>Login</title>
	    <link rel="stylesheet" type="text/css" href="style3.css">
	</head>
	<body>

	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	    // Get the form data
	    $username = $_POST['Username'];
	    $password = $_POST['password'];
	    $account_type = $_POST['dropdown'];

	    // Create a new connection
	    $conn = new mysqli('localhost', 'root', '', 'miniproject');

	    // Check connection
	    if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	    }

	    // Prepare the SQL statement
	    $stmt = $conn->prepare("SELECT * FROM signupdata WHERE username=? AND password=?");
	    $stmt->bind_param("ss", $username, $password);

	    // Execute the statement
	    $stmt->execute();

	    // Get the result
	    $result = $stmt->get_result();

	    // Check if there are any rows returned
	    if ($result->num_rows > 0) {
		// Redirect to the appropriate page based on the account type
		if ($account_type == 'HOD') {
		    header("Location: hod_page.php");
		    exit();
		} elseif ($account_type == 'T.Staffs') {
		    header("Location: staffs_page.php");
		    exit();
		}
	    } else {
		// Username or password do not match, display an error message
		echo '<div class="error-message">Invalid credentials</div>';
	    }

	    // Close the connection
	    $conn->close();
	}
	?>
<style>

body{
background-color:#007bff;
}
</style>
	<center>
	    <h1>Login</h1>
	    <form action="" method="post">
		<div class="headingscontainer">
		    <h3></h3>
		    <h3>Sign In With Your Username And Password</h3>
		</div>

		<div class="maincontainer">
		    <label for="username"><b>Your name</b></label>
		    <input type="text" placeholder="Username" name="Username" required>
		    <br><br>
		    <label for="password"><b>Password</b></label>
		    <input type="password" placeholder="password" name="password" required>
		    <br><br>
		    <label for="Accounttype"><b>Account Type</b></label>
		    <select name="dropdown">
		        <option value="non"></option>
		        <option value="Admin">Admin</option>
		        <option value="HOD">HOD</option>
		        <option value="T.Staffs">T.Staffs</option>
		    </select>

		    <br><br>
		    <button type="submit">Login</button>
		    <br><br>
		    <a href="signup.php">Sign up</a>
	</div>
	</form>
	</body>
	</html>
