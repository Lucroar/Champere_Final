<?php
$servername = "localhost";
$username = "root";
$password = "!mysqlpass27#";
$database = "payroll";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ename = $_POST['ename'];
$enumber = $_POST['enumber'];
$cposition = $_POST['cposition'];
$edate = $_POST['edate'];
$email = $_POST['email'];
$cnum = $_POST['cnum'];
$tnum = $_POST['tnum'];
$daysworked = $_POST['daysworked'];
$rate = $_POST['rate'];
$overtime = $_POST['overtime'];
$bonus1 = $_POST['bonus1'];
$bonus2 = $_POST['bonus2'];
$bonus3 = $_POST['bonus3'];
$bonus4 = $_POST['bonus4'];
$mop = $_POST['mop'];
$message = $_POST['message'];

$sql = "INSERT INTO payroll_data (ename, enumber, cposition, edate, email, cnum, tnum, daysworked, rate, overtime, bonus1, bonus2, bonus3, bonus4, mop, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssssssssss", $ename, $enumber, $cposition, $edate, $email, $cnum, $tnum, $daysworked, $rate, $overtime, $bonus1, $bonus2, $bonus3, $bonus4, $mop, $message);

if ($stmt->execute()) {
    echo "Form data saved successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>