<?php
$servername= "127.0.0.1";
$username= "root";
$password= '';
$database="champeré";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Delete row
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $delete = mysqli_query($conn, "DELETE FROM order_customer WHERE id='$id' ");
  if($delete) {
    echo "Data deleted successfully.";
  } else {
    echo "Error deleting data: " . mysqli_error($conn);
  }
}

$sql = "SELECT * FROM order_customer";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Form Data</title>  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Fira+Sans&family=Noto+Sans&family=Pinyon+Script&display=swap');
    body {
        background-color: #fbefda;
        margin: 0%;
        margin-bottom: 10px;
        background-image: url(./img/champagnetest.jpg);
        background-size: cover;
        font-family: "Noto Sans", 'Times New Roman', sans-serif;
    }
    .form-container{
      margin-top: 20px;
      max-width: 50%;
      margin: 20px auto 10px;
      padding: 20px;
      background-color: #3e000f;
      border-radius: 10px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      color: #FDCD93;
    }

    .form-container .text-box {
      margin: 0px;
    }

    .form-header{
      display: block;
      margin-top: 0;
      padding-top: 15px;
      padding-bottom: 15px;
      font-size: 15px;
      font-weight: bold;
      color: rgb(255, 255, 255);
    }

    .form-label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
      font-size: 19px;
      color: #fff;
    }

    .form-input {
      width: 95%;
      padding: 10px;
      margin-bottom: 30px;
      border: none;
      border-radius: 5px;
      background-color: #f2f2f2;
      
    }

    .form-input:focus {
      outline: none;
      box-shadow: 0 0 5px rgba(254, 254, 254, 0.482);
    }

    .button {
      display: block;
      width: 100px;
      padding: 10px 20px;
      margin: 20px;
      color: #FDCD93;
      background-color: #79472E;
      text-align: center;
      text-transform: uppercase;
      text-decoration: none;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.2s ease-in-out;
      font-size: 15px;
    }

    .button:hover {
      background-color: #bf6541;
    }
    h2{
      text-align: center;
      font-size: 40px;
      padding: 0px;
      color:#FDCD93;
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
    .navbar-color{
        background-color: #500113;
        margin: 0px;
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
    .title {
      font-family: "Pinyon Script";
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
            <li><a href="cha_act_input.html">Accountancy</a></li>
            <li><a href="cha_act_customer-view.php">Customer Payments</a></li>
            <li><a href="cha_act_receivable-view.php">Receivable Data</a></li>
            <li><a href="cha_act_payable-view.php">Payable Data</a></li>
            <li><a href="cha_act_sales-view.php">Sales Data</a></li>
            <li><a id="login" onclick="logOut()">Log Out</a></li>
        </ul>
    </div>
    </div>
  <div class="form-container">
  <h2>Form Data</h2>
</div>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
    	echo '<div class="form-container text-box">';
        echo "<p><strong>Customer Name:</strong> " . $row["customerName"] . "<br>";
        echo "<p><strong>Product:</strong> " . $row["product"] . "<br>";
        echo "<p><strong>Quantity:</strong> " . $row["quantity"] . "<br>";
        echo "<p><strong>Amount:</strong> " . $row["amount"] . "<br>";
        echo "<p><strong>Date:</strong> " . $row["date"] . "<br>";
        echo "<div class='container'><a href='cha_act_customer-view.php?id=". $row['id'] ."' class='button'>Delete</a>";
        echo "</div>";
        echo '</div>';
    }
} else {
  echo '<div class="form-container">';
    echo "<p>No form data found.</p>";
    echo "</div>";
}

$conn->close();
?>

<div class="form-container"><a href='cha_act_input.html' class='button'>New Entry</a></div>
</body>
</html>

