<?php
$servername= "127.0.0.1";
$username= "root";
$password= '';
$database="champeré";

$conn= new mysqli( $servername, $username, $password, $database);

if ($conn->connect_error){
    die("Connection failed:" .$conn->connect_error);
}

$Firstname= $_POST['Firstname'];
$address= $_POST['address'];
$Contactno= $_POST['Contactno'];
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

if (empty($Firstname)) {
    echo "Name cannot be empty.";
    exit;
  }

$sql= "INSERT INTO employeeinfo (Firstname, address, Contactno, 
Birthday,nameofMother, nameofFather, CivilStatus, 
Gender, EducationalBackground, Training, Seminars,
WorkExperience, WorkDuration, CompanyName, FormerPosition,
ReasonsForLeaving, CurrentPosition, Status,
Rate, SSS, PAGIBIG, PhilHealth, taxid, UMID, PHILSYS) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt= $conn-> prepare($sql);
$stmt->bind_param("sssssssssssssssssssssssss", $Firstname, $address, $Contactno, $Birthday,
$nameofMother, $nameofFather, $CivilStatus, $Gender, $EducationalBackground, $Training, $Seminars
, $WorkExperience, $WorkDuration, $CompanyName , $FormerPosition, $ReasonsForLeaving , 
$CurrentPosition, $Status, $Rate , $SSS , $PAGIBIG, $PhilHealth, $taxid, $UMID, $PHILSYS);

if ($stmt->execute()){
    echo"Form data saved Succesfully.";
}
else{
    echo"Error:" .$stmt-> error;
}

$stmt-> close();
$conn->close();

?>