<!DOCTYPE html>
<html>
<head>
  <title>Form Submission Result</title>
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
  
  <div class="container">
  <h2>Form Submission Result</h2>

<?php 

    if (isset($_POST['rep']) && isset($_POST['cusname']) && isset($_POST['date']) && isset($_POST['pname']) && isset($_POST['quantity']) && isset($_POST['price']) && isset($_POST['amount'])) {
  include 'cha_act_sales-data.php';

      $rep = $_POST['rep'];
      $cusname = $_POST['cusname'];
      $date = $_POST['date'];
      $pname = $_POST['pname'];
      $quantity = $_POST['quantity'];
      $price = $_POST['price'];
      $amount = $_POST['amount'];

      echo '<div class="form-container text-box">';
      echo "<p><strong>Sales Representative:</strong> " . $rep . "</p>";
      echo "<p><strong>Customer Name:</strong> " . $cusname . "</p>";
      echo "<p><strong>Order Date:</strong> " . $date . "</p>";
      echo "<p><strong>Product Name:</strong> " . $pname . "</p>";
      echo "<p><strong>Quantity:</strong> " . $quantity . "</p>";
      echo "<p><strong>Price:</strong> " . $price . "</p>";
      echo "<p><strong>Amount:</strong> " . $amount . "</p>";
      echo '</div>';

    echo '<div class="form-container"><h2 id="countdown"></h2></div>';

  } else {
    echo '<div class="form-container">
    <p>No form data submitted.</p> </div>';
  }
?>
  
</div>

<script>
  var countdownTime = 5;

  function updateCountdown() {
    var countdownElement =
    document.getElementById("countdown");
    countdownElement.innerHTML = "Loading in " + countdownTime + " seconds...";

    countdownTime--;

    if (countdownTime < 0) {
        window.location.href = "cha_act_sales-view.php";
    } else {
        setTimeout(updateCountdown, 500);
    }
  }

  updateCountdown();
</script>
</body>
</html>