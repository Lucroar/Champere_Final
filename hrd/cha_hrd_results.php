<!DOCTYPE html>
<html>
<head>
  <title>Form Submission Result</title>
  <link rel="icon" type="image/x-icon" href="./img/Champeré logo.png">
  <link rel="stylesheet" href="cha_hrd_stylesheet.css">
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

      .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #bf6541;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
      }

      .btn:hover {
        background-color: #FDCD93;
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
      color:#FDCD93;
    }

    .form-container{
      margin-top: 20px;
      max-width: 50%;
      margin: 0 auto;
      margin-top: 20px;
      padding: 20px;
      background-color: #500113;
      border-radius: 10px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    #white {
        color: #FDCD93;
    }
</style>
</head>

<body>
<div class="navbar-color">
    <div class="navbar">
        <p class="title">Champeré</p>
        <ul>
            <li><a href="cha_hrd_viewemployee.php">Human Resource</a></li>
            <li><a id="login" onclick="logOut()">Log Out</a></li>
        </ul>
    </div>
    </div>
    <div class="form-container" id="white">
  <h2>Form Submission Result</h2>

<?php 

if (isset($_POST['Firstname']) && isset($_POST['address']) && isset($_POST['Contactno'])
&& isset($_POST['Birthday']) && isset($_POST['nameofMother']) && isset($_POST['nameofFather'])
&& isset($_POST['CivilStatus']) && isset($_POST['Gender']) && isset($_POST['EducationalBackground'])
&& isset($_POST['Training']) && isset($_POST['Seminars']) && isset($_POST['WorkExperience'])
&& isset($_POST['WorkDuration']) && isset($_POST['CompanyName']) && isset($_POST['FormerPosition'])
&& isset($_POST['ReasonsForLeaving']) && isset($_POST['CurrentPosition']) && isset($_POST['Status'])
&& isset($_POST['Rate']) && isset($_POST['SSS']) && isset($_POST['PAGIBIG'])
&& isset($_POST['PhilHealth']) && isset($_POST['taxid']) && isset($_POST['UMID'])
&& isset($_POST['PHILSYS'])) {
  include 'cha_hrd_data.php';

$Firstname= $_POST['Firstname'];
$address= $_POST['address'];
$Contactno=$_POST['Contactno'];
$Birthday= $_POST['Birthday'];
$nameofMother= $_POST['nameofMother'];
$nameofFather= $_POST['nameofFather'];
$CivilStatus= $_POST['CivilStatus'];
$Gender= $_POST['Gender'];
$EducationalBackground= $_POST['EducationalBackground'];
$Training= $_POST['Training'];
$Seminars= $_POST['Seminars'];
$WorkExperience= $_POST['WorkExperience'];
$WorkDuration= $_POST['WorkDuration'];
$CompanyName= $_POST['CompanyName'];
$FormerPosition= $_POST['FormerPosition'];
$ReasonsForLeaving= $_POST['ReasonsForLeaving'];
$CurrentPosition= $_POST['CurrentPosition'];
$Status= $_POST['Status'];
$Rate= $_POST['Rate'];
$SSS= $_POST['SSS'];
$PAGIBIG= $_POST['PAGIBIG'];
$PhilHealth= $_POST['PhilHealth'];
$taxid= $_POST['taxid'];
$UMID= $_POST['UMID'];
$PHILSYS= $_POST['PHILSYS'];

  echo "<p><strong>First Name: </strong> " . $Firstname . "<p>";
  echo "<p><strong>Address:</strong> " . $address . "<p>";
  echo "<p><strong>Contact no:</strong> " . $Contactno . "<p>";
  echo "<p><strong>Birthday:</strong> " . $Birthday . "<p>";
  echo "<p><strong>nameofMother:</strong> " . $nameofMother . "<p>";
  echo "<p><strong>nameofFather:</strong> " . $nameofFather . "<p>";
  echo "<p><strong>CivilStatus:</strong> " . $CivilStatus . "<p>";
  echo "<p><strong>Gender:</strong> " . $Gender . "<p>";
  echo "<p><strong>EducationalBackground:</strong> " . $EducationalBackground . "<p>";
  echo "<p><strong>Training:</strong> " . $Training . "<p>";
  echo "<p><strong>Seminars:</strong> " . $Seminars . "<p>";
  echo "<p><strong>WorkExperience:</strong> " . $WorkExperience . "<p>";
  echo "<p><strong>WorkDuration:</strong> " . $WorkDuration . "<p>";
  echo "<p><strong>CompanyName:</strong> " . $CompanyName . "<p>";
  echo "<p><strong>FormerPosition:</strong> " . $FormerPosition . "<p>";
  echo "<p><strong>ReasonsForLeaving:</strong> " . $ReasonsForLeaving . "<p>";
  echo "<p><strong>CurrentPosition:</strong> " . $CurrentPosition . "<p>";
  echo "<p><strong>Status:</strong> " . $Status . "<p>";
  echo "<p><strong>Rate per Hour:</strong> " . $Rate . "<p>";
  echo "<p><strong>SSS no:</strong> " . $SSS . "<p>";
  echo "<p><strong>PAGIBIG no:</strong> " . $PAGIBIG . "<p>";
  echo "<p><strong>PhilHealth no:</strong> " . $PhilHealth . "<p>";
  echo "<p><strong>tax id no:</strong> " . $taxid . "<p>";
  echo "<p><strong>UMID no:</strong> " . $UMID . "<p>";
  echo "<p><strong>PHILSYS no:</strong> " . $PHILSYS . "<p>";
  echo '<div>';
  echo "</div>";
} 

else {
  echo '<div class="form-container" id="white">';
  echo "<p>No form data submitted.</p>";
  echo "</div>";
}

?>
    </div>
  <div class="form-container">
  <a href="cha_hrd_viewemployee.php" class="btn"> View Employee's Entries</a>
 
  </div>
</div>

</body>
</html>
            
         