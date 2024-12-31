<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Username'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $account_type = $_POST['dropdown'];
    $department = $_POST['dept'];

    // Basic input validation
    if (empty($username) || empty($email) || empty($password) || empty($account_type) || empty($department)) {
        echo "All fields are required";
        exit();
    }

    // Additional input validation (e.g., email format)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit();
    }

    // Create connection
    $conn = new mysqli('localhost', 'root', '', 'miniproject');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use prepared statements to prevent SQL injection
    $sql = "INSERT INTO signupdata (username, email, password, account_type, department)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $username, $email, $password, $account_type, $department);

    if ($stmt->execute()) {
        echo "New record created successfully";
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect or handle invalid request method
    header("Location: signup.php");
    exit();
}
?>
