<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style3.css">
    <style>
        body {
            background-color: #007bff;
        }
    </style>
</head>
<body>
    <center>
        <form action="signupbackend.php" method="post" onsubmit="return validateForm()">
            <div class="container">
                <h1>Signup</h1>
                <p><h3>Please fill in this form to create an account</h3></p>
                <table>
                    <tr>
                        <td><label for="username"><b>Username</b></label></td>
                        <td><input type="text" placeholder="Username" name="Username" id="username" required></td>
                    </tr>
                    <tr>
                        <td><label for="email"><b>Email</b></label></td>
                        <td><input type="text" placeholder="Enter Email" name="email" id="email" required></td>
                    </tr>
                    <tr>
                        <td><label for="psw"><b>Password</b></label></td>
                        <td><input type="password" placeholder="Enter Password" name="psw" id="psw" required></td>
                    </tr>
                    <tr>
                        <td><label for="psw-repeat"><b>Repeat Password</b></label></td>
                        <td><input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required></td>
                    </tr>
                    <tr>
                        <td><label for="Accounttype"><b>Account Type</b></label></td>
                        <td>
                            <select name="dropdown" id="account-type" required>
                                <option value="" disabled selected>Select Account Type</option>
                                <option value="HOD">HOD</option>
                                <option value="Faculty">T.Staffs</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="Department"><b>Department</b></label></td>
                        <td>
                            <select name="dept" id="department" required>
                                <option value="" disabled selected>Select Department</option>
                                <option value="Computer Science">Computer Science</option>
                                <option value="Maths">Maths</option>
                                <option value="Commerce">Commerce</option>
                                <option value="Language">Languages</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <br>
                <button type="submit" class="registerbtn">Register</button>
            </div>
            <div class="container signin">
                <p>Already have an account? <a href="login.php">Sign in</a>.</p>
            </div>
        </form>

        <script>
            function validateForm() {
                // Add additional client-side validations as needed
                var password = document.getElementById("psw").value;
                var repeatPassword = document.getElementById("psw-repeat").value;

                if (password !== repeatPassword) {
                    alert("Passwords do not match");
                    return false;
                }

                return true;
            }
        </script>
    </center>
</body>
</html>
