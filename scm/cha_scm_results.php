<?php

$servername = "127.0.0.1"; // Replace with the actual MySQL server address
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "champeré"; // Replace with the name of your database

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT SupplierName, Address, ContactInformation, Email, ProductName, Description, Units, Quantity, Amount, ModeOfPayment, TermsOfPayment, OrderedBy, OrderDate FROM hlv";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Retrieved Form Data</title>
  <style>
    /* Custom styling for the retrieved form data */
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    h2 {
      color: #333;
    }

    .form-data {
      background-color: #f5f5f5;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-data p {
      margin: 0;
    }

    hr {
      margin: 20px 0;
      border: 0;
      border-top: 1px solid #ccc;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4b4603;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #9e6003;
    }
  </style>
</head>
<body>
  <h2>Retrieved Form Data</h2>
  
  <?php
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<div class='form-data'>";
      
      echo "<p><strong>Supplier Name:</strong> " . $row["SupplierName"] . "</p>";
      echo "<p><strong>Address:</strong> " . $row["Address"] . "</p>";
      echo "<p><strong>Contact Information:</strong> " . $row["ContactInformation"] . "</p>";
      echo "<p><strong>Email:</strong> " . $row["Email"] . "</p>";
      echo "<p><strong>Product Name:</strong> " . $row["ProductName"] . "</p>";
      echo "<p><strong>Description:</strong> " . $row["Description"] . "</p>";
      echo "<p><strong>Units:</strong> " . $row["Units"] . "</p>";
      echo "<p><strong>Quantity:</strong> " . $row["Quantity"] . "</p>";
      echo "<p><strong>Amount:</strong> " . $row["Amount"] . "</p>";
      echo "<p><strong>Mode of Payment:</strong> " . $row["ModeOfPayment"] . "</p>";
      echo "<p><strong>Terms of Payment:</strong> " . $row["TermsOfPayment"] . "</p>";
      echo "<p><strong>Ordered By:</strong> " . $row["OrderedBy"] . "</p>";
      echo "<p><strong>Order Date:</strong> " . $row["OrderDate"] . "</p>";

      echo "</div>";
      echo "<hr>";

      //Get this
      echo "<div class='container'><a href='cha_scm_results.php?id=". $row['id'] ."' class='btn' onclick='deleteData(". $row['id'] .")'>Delete</a>";
      echo "</div>";
      echo "</div>";

    }
  } else {
    echo '<div class="form-container" id="white">';
    echo "<p>No form data found.</p>";
    echo "</div>";
  }

  //Get this (make sure to change the table name)
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            $delete = mysqli_query($conn, "DELETE FROM /*DELETE*/ hlv WHERE id='$id' ");
            if($delete) {
                echo '<div class="form-container" id="white">';
              echo "Data deleted successfully.";
              echo '</div>';
              echo '<script>window.location.href = "cha_scm_results.php";</script>';
            } else {
              echo "Error deleting data: " . mysqli_error($conn);
            }
          }

  // Close the connection
  $conn->close();
  
  ?>

  <script> 
      //Get this
      function deleteData(id) {
                if (confirm("Do you want to delete this entry?") == true) {
                    window.location.href = "cha_scm_results.php?id=" + id;
                } else {
                }
              }
  </script>        

  <a href="cha_scm_view_inbound.html" class="btn">New Entry</a>
  
</body>
</html>
