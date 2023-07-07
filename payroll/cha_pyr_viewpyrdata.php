<?php
$servername= "127.0.0.1";
$username= "root";
$password= '';
$database="champeré";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT ename, enumber, cposition, created_at FROM payroll_data";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <div class="navbar-color">
        <div class="navbar">
            <p class="title">Champeré</p>
            <ul>
                <li><a href="/cha_sys_admin_faqs.html">Payroll</a></li>
                <li><a id="login" href="/cha_sys_employee_login.html">Log Out</a></li>
            </ul>
        </div>
    </div>
    <title>Payroll Data Entries</title>
    <link rel="stylesheet" type="text/css" href="cha_pyr_stylesheet.css">
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

.form-header {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
    color: #fff;
}

.form-label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
    color: #FDCD93;
}

.form-input {
    width: 95%;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    background-color: #f2f2f2;
}

.form-select {
    width: 95%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
}

.form-input:focus{
    outline: none;
    background-color: #fff;
    box-shadow: 0 0 5px rgb(233, 238, 81);
}

.form-button {
    display: block;
    width: 100%;
    padding: 10px 20px;
    background-color: #693b24;
    columns: #fff;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
    font-size: 18px;
}

.form-button:hover {
    background-color: #974f33;
}

table {
    border-collapse: collapse;
    width: 100%;
}
  
th, td {
    padding: 10px;
    text-align: left;
    border: 2px solid #894e32;
}
  
tr:hover {background-color: rgb(233, 238, 81);}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #693b24;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #974f33;
}

.slogan1 {
    background-image: url(winelog1.png); 
    width: 100%; 
    height: 600px; 
    background-size: cover; 
    background-repeat: no-repeat;
}

.slogan-text1 {
    font-size: 25px; 
    font-style: bold; 
    padding: 6ch;
    text-align: right;
}

#white {
    color: #FDCD93;
}

.slogan2 {
    background-image: url(winelog2.png);
     width: 100%; 
     height: 600px; 
     background-size: cover; 
     background-repeat: no-repeat;
}

.slogan-text2 {
    font-size: 26px; 
    color: #fbefda; 
    font-style: bold; 
    padding: 6ch;
    text-align: right;
}

.textarea {
    width: 60%;
}

h2{
    text-align: center;
    font-size: 40px;
    padding: 0px;
    color:#FDCD93;
}

#submit {
    color: #FDCD93;
    background-color: #79472E;
    text-align: center;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
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
                <li><a href="/cha_pyr_inputdata.html">Payroll</a></li>
                <li><a id="login" href="/cha_sys_employee_login.html">Log Out</a></li>
            </ul>
        </div>
    </div>
    <div class="form-container" id="white">
    <h2>Payroll Data Entries</h2>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p><strong>Other important datas that has been submitted would not be displayed for the employees privacy.</strong></p>";
                echo "<div class='form-data'>";
                echo "<p><strong>Employee Name:</strong>" . $row['ename'] . "</p>";
                echo "<p><strong>Employee Number:</strong>" . $row['enumber'] . "</p>";
                echo "<p><strong>Position in the Company:</strong>" . $row['cposition'] . "</p>";
                echo "<p><strong>Date Submitted:</strong>" . $row['created_at'] . "</p>";
                echo "</div>";
                echo "<hr>";
            }
        } else {
            echo "<p>No form data found.</p>";
        }

        $conn->close();
        ?>
        <a href="cha_pyr_inputdata.html" class="btn">New Entry</a>
    </div>
</body>
</html>