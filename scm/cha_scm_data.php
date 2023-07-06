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
$name = $_POST['name'];
$address = $_POST['address'];
$contactinfo = $_POST['contactinfo'];
$email = $_POST['email'];
$productname = $_POST['productname'];
$description = $_POST['description'];
$units = $_POST['units'];
$quantity = $_POST['quantity'];
$amount = $_POST['amount'];
$paymentM = $_POST['paymentM'];
$termsPay = $_POST['termsPay'];
$orderedBy = $_POST['orderedBy'];
$orderdate = $_POST['orderdate'];

// Validate 'SupplierName' input
if (empty($name)) {
  echo "Supplier Name cannot be empty.";
  exit;
}

// Prepare the INSERT statement
$sql = "INSERT INTO hlv (SupplierName, Address, ContactInformation, Email, ProductName, Description, Units, Quantity, Amount, ModeOfPayment, TermsOfPayment, OrderedBy, OrderDate) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sssssssssssss", $name, $address, $contactinfo, $email, $productname, $description, $units, $quantity, $amount, $paymentM, $termsPay, $orderedBy, $orderdate);

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
