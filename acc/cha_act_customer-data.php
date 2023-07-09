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
      $cname = $_POST['cname'];
      $product = $_POST['product'];
      $quantity = $_POST['quantity'];
      $amount = $_POST['amount'];
      $date = $_POST['date'];

    if (empty($date)) {
        die("Error: date cannot be empty.");
    }

    $sql = "INSERT INTO order_customer (customerName, product, quantity, amount, date) 
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $cname, $product, $quantity, $amount, $date);

    if ($stmt->execute()) {
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $conn->close();
    $stmt->close();
}

?>