<?php
// Connect to the database
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "champeré";

$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the inventory data from the database
$sql = "SELECT ProductName, InCount, OutCount, CurrentStocks, Price FROM inventory";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $inventory = array();
    while ($row = $result->fetch_assoc()) {
        $inventory[] = $row;
    }
    echo json_encode($inventory);
} else {
    echo "[]";
}

$conn->close();
?>

