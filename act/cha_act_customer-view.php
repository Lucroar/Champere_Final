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
      font-family: "Noto Sans", sans-serif;
      background-color: #f5f5f5;
      margin: 0;
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
    </style>
</head>
<body>
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

