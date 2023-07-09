<?php
$servername = "127.0.0.1";
$username = "root";
$password = '';
$database = "champeré";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fname = $_POST['fname'];
$age = $_POST['age'];
$bdate = $_POST['bdate'];
$gender = $_POST['gender'];
$cstatus = $_POST['cstatus'];
$telno = $_POST['telno'];
$celno = $_POST['celno'];
$email = $_POST['email'];
$cname = $_POST['cname'];
$etype = $_POST['etype'];
$ctype = $_POST['ctype'];

$sql = "INSERT INTO marketing(fname, age, bdate, gender, cstatus, telno, celno, email, cname, etype, ctype ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssss", $fname, $age, $bdate, $gender, $cstatus, $telno, $celno, $email, $cname, $etype, $ctype);

if ($stmt->execute()) {
    echo "Form data saved successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>