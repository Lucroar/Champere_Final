<?php
$servername = "localhost";
$username = "root";
$password = "!mysqlpass27#";
$database = "payroll";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ename, enumber, cposition, created_at FROM payroll_data";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payroll Data Entries</title>
    <link rel="stylesheet" type="text/css" href="cha_pyr_stylesheet.css">
</head>
<body>
    <div class="slogan1">
        <div class="slogan-text1">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <a href="" id="white">www.champère.com</a>
        </div>
    </div>
    <br><br><br><br><br><br>
    <center>
        <img src="champerelogo.png" alt="champere logo" width="200px" height="200px">
        <h2>Payroll Data Entries</h2>
    </center>
    <div class="form-container" id="white">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p><strong>Other important datas that has been submitted would not be displayed for the employees privacy.</strong></p>";
                echo "<div class='form-data'>";
                echo "<p><strong>Employee Name:</strong>" . $row['ename'] . "</p>";
                echo "<p><strong>Employee Number:</strong>" . $row['enumber'] . "</p>";
                echo "<p><strong>Position in the Company:</strong>" . $row['cposition'] . "</p>";
                echo "<p><strong>Date Submitted:</strong>" . $row['created_at'] . "</p>";
                echo "</div>";
                echo "<hr>";
            }
        } else {
            echo "<p>No form data found.</p>";
        }

        $conn->close();
        ?>
        <a href="cha_pyr_inputdata.html" class="btn">New Entry</a>
    </div>
    <br><br><br><br><br><br>
    <div class="slogan2">
        <div class="slogan-text2">
            <h1>Champère</h1>
            <h2>Get your very <br><br> own bottle now!</h2>
            <a href="" id="white">SHOP NOW</button>
        </div>
    </div>
</body>
</html>