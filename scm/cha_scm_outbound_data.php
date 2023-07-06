<?php
$servername = "127.0.0.1"; // Replace with your MySQL server name
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "champeré"; // Replace with your MySQL database name 

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$rqtby = $_POST['rqtby'];
$itemN = $_POST['itemN'];
$quantity = $_POST['quantity'];
$itemR = $_POST['itemR'];
$reqdate = $_POST['reqdate'];
$status = $_POST['status'];

// Validate 'SupplierName' input
if (empty($rqtby)) {
  echo "Name cannot be empty.";
  exit;
}

// Prepare the INSERT statement
$sql = "INSERT INTO hlv1 (RequestedBy, ItemName, Quantity, ItemRecipient, RequestDate, Status) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ssssss", $rqtby, $itemN, $quantity, $itemR, $reqdate, $status);

// Execute the statement
if ($stmt->execute()) {
  echo "Form data saved successfully.";
} else {
  echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();

?>
