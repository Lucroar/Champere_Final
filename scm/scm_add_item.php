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

// Retrieve form data
$productName = $_POST['product_name'];
$inCount = $_POST['in_count'];
$outCount = $_POST['out_count'];
$currentStocks = $_POST['current_stocks'];
$price = $_POST['price'];

// Check if ProductName is not empty
if (!empty($productName)) {
    // Prepare and bind the insert statement
    $stmt = $conn->prepare("INSERT INTO inventory (ProductName, InCount, OutCount, CurrentStocks, Price) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $productName, $inCount, $outCount, $currentStocks, $price);

    // Execute the statement
    if ($stmt->execute()) {
        $message = 'Item added successfully.';
        // Redirect to scm_warehouse_inventory.html with success message as URL parameter
        header("Location: scm_warehouse_inventory.html?message=" . urlencode($message));
        exit();
    } else {
        echo '<p class="error-message">Error: ' . $stmt->error . '</p>';
    }

    $stmt->close();
} else {
    echo '<p class="error-message">Error: ProductName cannot be empty</p>';
}

$conn->close();
?>
