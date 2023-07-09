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
$sql = "SELECT * FROM hlv1";
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

    .form-data{
        margin-top: 20px;
        max-width: 50%;
        margin: 20px auto 10px;
        padding: 20px;
        background-color: #3e000f;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        color: #FDCD93;
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
        padding: 10px 20px;
        background-color: #693b24;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
        margin: 15px;
    }
    h2{
        text-align: center;
        font-size: 40px;
        padding: 0px;
        color:#FDCD93;
      }
    .btn:hover {
      background-color: #bf6541;
    }
    .container {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="form-data">
  <h2>Retrieved Form Data</h2>
  </div>

  <?php
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      
      $delete = mysqli_query($conn, "DELETE FROM hlv1 WHERE id='$id' ");
      if($delete) {
        echo '<div class="form-data" id="white">';
        echo "Data deleted successfully.";
        echo '</div>';
        echo '<script>window.location.href = "cha_scm_outbound_results.php";</script>';
      } else {
        echo "Error deleting data: " . mysqli_error($conn);
      }
    }
    
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<div class='form-data'>";
      echo "<p><strong>Requested By:</strong> " . $row["RequestedBy"] . "</p>";
      echo "<p><strong>Item Name:</strong> " . $row["ItemName"] . "</p>";
      echo "<p><strong>Quantity:</strong> " . $row["Quantity"] . "</p>";
      echo "<p><strong>Item Recipient:</strong> " . $row["ItemRecipient"] . "</p>";
      echo "<p><strong>Request Date:</strong> " . $row["RequestDate"] . "</p>";
      echo "<p><strong>Status:</strong> " . $row["Status"] . "</p>";
      echo "<div class='container'><a href='cha_scm_outbound_results.php?id=". $row['id'] ."' class='btn' onclick='deleteData(". $row['id'] .")'>Delete</a>";
      echo "</div>";
      echo "</div>";
    }
  } else { 
    echo '<div class="form-data" id="white">';
    echo "<p>No form data found.</p>";
    echo "</div>";
  }
  
   //Get this (make sure to change the table name)
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            $delete = mysqli_query($conn, "DELETE FROM hlv WHERE id='$id' ");
            if($delete) {
                echo '<div class="form-container" id="white">';
              echo "Data deleted successfully.";
              echo '</div>';
              echo '<script>window.location.href = "cha_scm_outbound_results.php";</script>';
            } else {
              echo "Error deleting data: " . mysqli_error($conn);
            }
          }

    //Get this
        function deleteData(id) {
            if (confirm("Do you want to delete this entry?") == true) {
                window.location.href = "cha_pyr_viewpyrdata.php?id=" + id;
            } else {
            }
        }

  // Close the connection
  $conn->close();
  
  ?>
  </script>
  <div class="form-data">
  <a href="cha_scm_view_outbound.html" class="btn">New Entry</a>
  </div>
  <script>
        function deleteData(id) {
            if (confirm("Do you want to delete this entry?") == true) {
                window.location.href = "cha_pyr_viewpyrdata.php?id=" + id;
            } else {
            }
        }
    </script>
</body>
</html>
