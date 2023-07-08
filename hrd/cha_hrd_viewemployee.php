<?php
$servername= "127.0.0.1";
$username= "root";
$password= '';
$database="champeré";

 $conn= new mysqli($servername, $username, $password, $database);

 if ($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
 }
 $sql = "SELECT Firstname, address, Contactno, 
 Birthday,nameofMother, nameofFather, CivilStatus, 
 Gender, EducationalBackground, Training, Seminars,
 WorkExperience, WorkDuration, CompanyName, FormerPosition,
 ReasonsForLeaving, CurrentPosition, Status,
 Rate, SSS, PAGIBIG, PhilHealth, taxid, UMID, PHILSYS FROM employeeinfo";
 $result=  $conn-> query($sql); 
?>

<!DOCTYPE html>
<html> 
<head>
    <link rel="stylesheet" href="/cha_hrd_stylesheet.css">
    <title>Retrieved Form Data</title>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Fira+Sans&family=Noto+Sans&family=Pinyon+Script&display=swap');
  body {
    font-family: "Noto Sans", sans-serif;
    background-color: #f5f5f5;
    margin: 0;
  }

        .contaier {
            place-items: center;
            text-align: center;
            max-width: 600px;
            margin: 0;
            margin-left: 20px;
            padding: 30px;
            border-radius: 10px;
            background-color: rgba(85, 45, 54, 0.597);
            box-shadow: 0 10px 30px rgba(49, 6, 15, 0.2);
        }
        h2{
            color:#333;
        }

        .form-data{
            background-color:#f5f5f5;
            padding:10px;
            margin-bottom:20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-data p{
            margin:0px;
        }

        hr{
            margin: 20px 0;
            border: 0;
            border-top: 1px solid #ccc;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4c55af;
            color: #fff;
            text-decoration:none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        .btn hover{
            background-color: #45a049;
        }

        .title {
            font-family: "Pinyon Script";
            text-align: center;
            font-size: 40px;
            padding: 0px;
            color:#FDCD93;
        }
        .navbar-color{
    background-color: #500113;
    margin: 0px;
}

p, h2{
    padding-left: 60px;
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
            <li><a href="cha_sys_view_viewemployee.php">Human Resource</a></li>
            <li><a id="login" onclick="logOut()">Log Out</a></li>
        </ul>
    </div>
    </div>
    <div class="form-container" id="white">
    <h2> Retrieved Form Data</h2>
</div>
    <?php
    if ($result ->num_rows > 0){
        while($row= $result->fetch_assoc()){
            echo '<div class="form-container" id="white">';
            echo "<p> <strong> Firstname: </strong>" . $row["Firstname"] . "</p>";
            echo "<p> <strong> address: </strong>" . $row["address"] . "</p>";
            echo "<p> <strong> Contactno: </strong>" . $row["Contactno"] . "</p>";
            echo "<p> <strong> Birthday: </strong>" . $row["Birthday"] . "</p>";
            echo "<p> <strong> nameofMother: </strong>" . $row["nameofMother"] . "</p>";
            echo "<p> <strong> nameofFather: </strong>" . $row["nameofFather"] . "</p>";
            echo "<p> <strong> Civil Status: </strong>" . $row["CivilStatus"] . "</p>";
            echo "<p> <strong> Civil Status: </strong>" . $row["Gender"] . "</p>";
            echo "<p> <strong> EducationalBackground: </strong>" . $row["EducationalBackground"] . "</p>";
            echo "<p> <strong> Training: </strong>" . $row["Training"] . "</p>";
            echo "<p> <strong> Seminars: </strong>" . $row["Seminars"] . "</p>";
            echo "<p> <strong> WorkExperience: </strong>" . $row["WorkExperience"] . "</p>";
            echo "<p> <strong> WorkDuration: </strong>" . $row["WorkDuration"] . "</p>";
            echo "<p> <strong> CompanyName: </strong>" . $row["CompanyName"] . "</p>";
            echo "<p> <strong> FormerPosition: </strong>" . $row["FormerPosition"] . "</p>";
            echo "<p> <strong> ReasonsForLeaving: </strong>" . $row["ReasonsForLeaving"] . "</p>";
            echo "<p> <strong> CurrentPosition: </strong>" . $row["CurrentPosition"] . "</p>";
            echo "<p> <strong> Status: </strong>" . $row["Status"] . "</p>";
            echo "<p> <strong> Rate per Hour: </strong>" . $row["Rate"] . "</p>";
            echo "<p> <strong> SSS no: </strong>" . $row["SSS"] . "</p>";
            echo "<p> <strong> PAGIBIG no: </strong>" . $row["PAGIBIG"] . "</p>";
            echo "<p> <strong> PhilHealth no: </strong>" . $row["PhilHealth"] . "</p>";
            echo "<p> <strong> tax id no: </strong>" . $row["taxid"] . "</p>";
            echo "<p> <strong> UMID no: </strong>" . $row["UMID"] . "</p>";
            echo "<p> <strong> PHILSYS: </strong>" . $row["PHILSYS"] . "</p>";
            echo "</div>";
        }

    } else{
    echo "<p> No form data found. </p>";
    }
    $conn -> close();
    ?>
    </div>
</body> 
</html>