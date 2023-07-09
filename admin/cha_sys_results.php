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
@import url('https://fonts.googleapis.com/css2?family=Fira+Sans&family=Noto+Sans&family=Pinyon+Script&display=swap');
body {
    background-color: #fbefda;
    margin: 0%;
    margin-bottom: 10px;
    background-color: white;
    background-size: cover;
    font-family: "Noto Sans", 'Times New Roman', sans-serif;
}

    h2 {
      color: #333;
      margin: 10px;
    }

    .form-data {
      background-color: #f5f5f5;
      margin: 20px;
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
    .navbar-color{
    background-color: #500113;
    margin: 0px;

}
.navbar {
    position: sticky;
    height: 40px;
    background-clip: border-box;
    width: 90%;
    margin: auto;
    padding: 20px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.navbar img {
    height: 50px;
}

.navbar ul li {
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
}

.navbar ul li a {
    text-decoration: none;
    font-size: 13px;
    color: #FDCD93;
    text-transform: uppercase;
}

.title {
    font-family: "Pinyon Script";
    text-align: center;
    font-size: 40px;
    padding: 0px;
    color:#FDCD93;  
}
#login {
    display: block;
    width: 60px;
    padding: 10px 20px;
    color: #FDCD93;
    background-color: #79472E;
    text-align: center;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
    font-size: 12px;
}
.form-container{
    margin-top: 20px;
    max-width: 50%;
    margin: 0 auto;
    margin-top: 20px;
    padding: 20px;
    background-color: #3e000f;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}
#white {
    color: #FDCD93;
}
h2{
    text-align: center;
    font-size: 40px;
    padding: 0px;
    color:#FDCD93;
}
  </style>
</head>
<body>
<div class="navbar-color">
    <div class="navbar">
        <p class="title">Champeré</p>
        <ul>
            <li><a href="/cha_sys_admin_aboutUs.html">Accountancy</a></li>
            <li><a href="cha_sys_view_viewemployee.php">Human Resource</a></li>
            <li><a href="/cha_sys_admin_faqs.html">Marketing</a></li>
            <li><a href="cha_sys_pr-results.php">Payroll</a></li>
            <li><a href="cha_sys_results.php">SCM (Inbound)</a></li>
            <li><a href="cha_sys_outbound_results.php">SCM (Outbound)</a></li>
            <li><a id="login" onclick="logOut()">Log Out</a></li>
        </ul>
    </div>
    </div>
    <div class="form-container" id="white">
  <h2>Retrieved Form Data</h2>
  
  <?php
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo '<div class="form-container" id="white">';
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
    }
  } else {
    echo "<p>No form data found.</p>";
  }

  // Close the connection
  $conn->close();
  
  ?> 
    </div>
    <script>
        // log out
        function logOut(){
        if (confirm("Do you want to Logout?") == true) {
        window.location.href="../cha_sys_employee_login.html";
        } else {    
        }
    }
    </script>
</body>
</html>
