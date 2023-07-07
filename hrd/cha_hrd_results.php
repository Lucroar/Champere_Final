<!DOCTYPE html>
<html>
<head>
  <title>Form Submission Result</title>
  <link rel="stylesheet" href="cha_hrd_stylesheet.css">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Fira+Sans&family=Noto+Sans&family=Pinyon+Script&display=swap');
  body {
    font-family: "Noto Sans", sans-serif;
    background-color: #f5f5f5;
    margin: 0;
  }

  .container {
    max-width: 500px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 4px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  h2 {
    color: #3e000f ;
    margin-top: 0;
  }

  p {
    margin-bottom: 10px;
  }

  .btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #3e000f;
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
</style>
</head>

<body>
  <div class="navbar-color">
      <div class="navbar">
        <p class="title">Champeré</p>
        <ul>
            <li><a id="login" href="/cha_sys_employee_login.html">Log Out</a></li>
        </ul>
      </div>
    </div>
  <div class="container">
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
  
} 
else {
  echo "<p>No form data submitted.</p>";
}
?>

            <a href="cha_hrd_editemployee.html" class="btn">New Entry</a>
            <a href="cha_hrd_viewemployee.php" class="btn"> View Employee's Entries</a>
  </div>
</body>
</html>
            
         