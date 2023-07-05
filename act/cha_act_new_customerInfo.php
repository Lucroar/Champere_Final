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
$firstname = $_POST['firstName'];
$middleName = $_POST['middleName'];
$lastName = $_POST['lastName'];
$customerEmail = $_POST['customerEmail'];
$contactInfo = $_POST['contactInfo'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$address = $_POST['address'];
$password = $_POST['password'];

// Prepare the INSERT statement
$sql = "INSERT INTO customerinfo (firstName, middleName, lastName, customerEmail, contactInfo, gender, birthdate, address, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sssssssss", $firstname, $middleName, $lastName, $customerEmail, $contactInfo, $gender, $birthdate, $address, $password);

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