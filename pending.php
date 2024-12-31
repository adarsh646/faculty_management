<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
    <center> 
        <div class="container">
            <section>
                <h1 style="font-size:28px;">Pending Users</h1>
            </section>
        </div>

        <table border="1">
            <tr style="background-color: yellow;">
                <td>Name</td>
                <td>Department</td>
                <td>Designation</td>
                <td>Purpose</td>
                <td>Time Out</td>
                <td>Time In</td>
                <td>Apply Date</td>
                <td>Status</td>
            </tr>
            <?php
            $conn = new mysqli('localhost', 'root', '', 'miniproject');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $current_date = date("Y-m-d");
            $sql = "SELECT * FROM applyform WHERE ApplyDate = '$current_date' AND status IS NULL";
            $result = $conn->query($sql);
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
                </tr>";
            }
            ?>
        </table>
    </center>
</body>
</html>
