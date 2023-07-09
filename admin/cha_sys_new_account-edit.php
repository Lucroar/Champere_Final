<?php
$servername = "127.0.0.1"; 
$username = "root";
$password = ""; 
$database = "champeré"; 

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update record in the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $customerEmail = $_POST["customerEmail"];
    $contactInfo = $_POST["contactInfo"];
    $gender = $_POST["gender"];
    $birthdate = $_POST["birthdate"];
    $address = $_POST["address"];
  
    $sql = "UPDATE customerinfo SET 
        firstName='$firstName', 
        middleName='$middleName', 
        lastName='$lastName', 
        customerEmail='$customerEmail', 
        contactInfo='$contactInfo', 
        gender='$gender', 
        birthdate='$birthdate', 
        address='$address' 
    WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully.";
        header("Location: cha_sys_admin_index.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Check if the ID parameter is provided
if (isset($_GET['id'])) {
    // Retrieve the record from the database based on the ID
    $id = $_GET['id'];
    $sql = "SELECT * FROM customerinfo WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id = $row['id'];
        $firstName = $row["firstName"];
        $middleName = $row["middleName"];
        $lastName = $row["lastName"];
        $customerEmail = $row["customerEmail"];
        $contactInfo = $row["contactInfo"];
        $gender = $row["gender"];
        $birthdate = $row["birthdate"];
        $address = $row["address"];
    } else {
        
    }
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Form Data</title>
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

    table {
        margin: auto;
        margin-top: 10px;
        width: 90%;
        padding: 10px;
        border-collapse: collapse;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        font-size: 14px;
    }
    .container {
        max-width: 500px;
        margin: 0 auto;
        margin-bottom: 20px;
        padding: 20px;
        padding-bottom: 10px;
        background-color: #3e000f;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(255, 255, 255, 0.1);
    }

    .form-label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
        font-size: 19px;
        color: #fff;
        text-decoration: none;
    }

    .form-input {
        width: 95%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        background-color: #f2f2f2;
    }

    .title {
        font-family: "Pinyon Script";
        text-align: center;
        font-size: 40px;
        padding: 0px;
        color:#3e000f ;
    }

    h2 {
        padding: 10px;
        padding-bottom: 10px;
        margin: 15px;
    }

    input:focus{
        background-color: #FDCD93;
        accent-color: #FDCD93;
    }

    input[type=radio]{
        accent-color: #FDCD93;
    }
    input[type=submit]:hover{
        background-color: #FDCD93;
    }
    .button {
        padding: 4px 13px;
        background-color: #fff;
        font-size: 15px;
        color: #ffffff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
        color: black;
                    }
    .back-button:hover{
        background-color: #FDCD93;
    }
    .form-container{
            margin-top: 20px;
            max-width: 50%;
            margin: 20px auto 10px;
            padding: 20px;
            background-color: #3e000f;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    h2{
        color:#FDCD93; 
    }

    </style>
  </style>
</head>
<body>
  <div class="form-container">
    <div class="form-data">
      <h2>Edit Form Data</h2>
    </div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label class="form-label" for="firstName">First Name</label>
        <input class="form-input" type="text" id="firstName" name="firstName" value="<?php echo $firstName; ?>" required>

        <label class="form-label" for="middleName">Middle Name</label>
        <input class="form-input" type="text" id="middleName" name="middleName" value="<?php echo $middleName; ?>" required>

        <label class="form-label" for="lastName">Last Name</label>
        <input class="form-input" type="text" id="lastName" name="lastName" value="<?php echo $lastName; ?>" required>

        <label class="form-label" for="customerEmail">Email:</label>
        <input class="form-input" type="email" id="customerEmail" name="customerEmail" value="<?php echo $customerEmail; ?>" required>

        <label class="form-label" for="contactInfo">Mobile Number:</label>
        <input class="form-input" type="number" id="contactInfo" name="contactInfo" value="<?php echo $contactInfo; ?>" required>

        <label class="form-label">Gender</label>
        <input type="radio" id="male" name="gender" value="Male" <?php if ($gender === "Male") echo "checked"; ?> required>
        <label class="form-label" for="male" style="display: inline-block;">Male</label>
        <input type="radio" id="female" name="gender" value="Female" <?php if ($gender === "Female") echo "checked"; ?> required>
        <label class="form-label" for="female" style="display: inline-block;">Female</label>
        <input type="radio" id="other" name="gender" value="Other" <?php if ($gender === "Other") echo "checked"; ?> required>
        <label class="form-label" for="other" style="display: inline-block;">Other</label>

        <label class="form-label" for="birthdate">Birthdate:</label>
        <input class="form-input" type="date" id="birthdate" name="birthdate" value="<?php echo $birthdate; ?>" required>

        <label class="form-label" for="address">Address:</label>
        <input class="form-input" type="textbox" id="address" name="address" value="<?php echo $address; ?>" required>
        <input class="button" type="submit" value="Update">
    </form>
  </div>
</body>
</html>