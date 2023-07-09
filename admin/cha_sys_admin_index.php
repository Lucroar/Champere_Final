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
$sql = "SELECT * FROM customerinfo";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
  <title>User Data Entries</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Fira+Sans&family=Noto+Sans&family=Pinyon+Script&display=swap');
    body {
        background-color: #fbefda;
        margin: 0%;
        margin-bottom: 10px;
        background-size: cover;
        font-family: "Noto Sans", 'Times New Roman', sans-serif;
    }

    .navbar-color{
        background-color: #500113;
        margin: 0px;
        position: sticky;

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
<div class="navbar-color">
    <div class="navbar">
        <p class="title">Champeré</p>
        <ul>
            <li><a href="cha_sys_admin_index.php">Admin</a></li>
            <li><a href="cha_sys_view_acc.php">Accountancy</a></li>
            <li><a href="cha_sys_view_viewemployee.php">Human Resource</a></li>
            <li><a href="cha_sys_viewmktdata.php">Marketing</a></li>
            <li><a href="cha_sys_viewpyrdata.php">Payroll</a></li>
            <li><a href="cha_sys_inbound_results.php">SCM (Inbound)</a></li>
            <li><a href="cha_sys_outbound_results.php">SCM (Outbound)</a></li>
            <li><a id="login" onclick="logOut()">Log Out</a></li>
        </ul>
    </div>
    </div>
    <div class="form-container" id="white">
  <div class="form-data" id="white">
  <h2>Retrieved Form Data</h2>
  </div>
  <?php
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<div class='form-data'>";
      echo "<p><strong>Name:</strong> " . $row["firstName"].$row["middleName"].$row["lastName"] . "</p>";
      echo "<p><strong>Email:</strong> " . $row["customerEmail"] . "</p>";
      echo "<p><strong>Contact Information:</strong> " . $row["contactInfo"] . "</p>";
      echo "<p><strong>Gender:</strong> " . $row["gender"] . "</p>";
      echo "<p><strong>Birthdate:</strong> " . $row["birthdate"] . "</p>";
      echo "<p><strong>Address:</strong> " . $row["address"] . "</p>";
      echo "<div class='container'><a href='cha_sys_admin_index.php?id=". $row['id'] ."' class='btn' onclick='deleteData(". $row['id'] .")'>Delete</a>";
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
                echo '<div class="form-data" id="white">';
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
</body>
</html>