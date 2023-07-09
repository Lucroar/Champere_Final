<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "marketing_data";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT fname, age, bdate, created_at FROM marketing";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Marketing Data Entries</title>
    <link rel="stylesheet" type="text/css" href="cha_mkt_stylesheet.css">
</head>
<body>
    <div class="slogan1">
        <div class="slogan-text1">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <a href="" id="white"></a>
        </div>
    </div>
    <br><br><br><br><br><br>
    <center>
        <img src="chalogo.png" alt="champere logo" width="200px" height="200px">
        <h2>Marketing Data Entries</h2>
    </center>
    <div class="form-container" id="white">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p><strong>Other important datas that has been submitted would not be displayed for the employees privacy.</strong></p>";
                echo "<div class='form-data'>";
                echo "<p><strong>Full Name:</strong>" . $row['fname'] . "</p>";
                echo "<p><strong>Telephone No:</strong>" . $row['telno'] . "</p>";
                echo "<p><strong>Cellphone No:</strong>" . $row['celno'] . "</p>";
                echo "<p><strong>Email:</strong>" . $row['email'] . "</p>";
                echo "<p><strong>Company Name:</strong>" . $row['cname'] . "</p>";
                echo "</div>";
                echo "<hr>";
            }
        } else {
            echo "<p>No form data found.</p>";
        }

        $conn->close();
        ?>
        <a href="cha_mkt_inputdata.htm" class="btn">New Entry</a>
    </div>
    <br><br><br><br><br><br>
    <div class="slogan2">
        <div class="slogan-text2">
            <a href="" id="white"></button>
        </div>
    </div>
</body>
</html>