<?php
$servername= "127.0.0.1";
$username= "root";
$password= '';
$database="champeré";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $rep = $_POST['rep'];
      $cusname = $_POST['cusname'];
      $date = $_POST['date'];
      $pname = $_POST['pname'];
      $quantity = $_POST['quantity'];
      $price = $_POST['price'];
      $amount = $_POST['amount'];

    if (empty($amount)) {
        die("Error: amount cannot be empty.");
    }

    $sql = "INSERT INTO order_sales (salesRep, customerName, orderDate, productName, quantity, price, amount) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $rep, $cusname, $date, $pname, $quantity, $price, $amount);

    if ($stmt->execute()) {
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $conn->close();
    $stmt->close();
}

?>