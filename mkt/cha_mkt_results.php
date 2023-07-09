<!DOCTYPE html>
<html>
<head>
    <title>Marketing Data Submission Result</title>
    <link rel="stylesheet" type="text/css" href="cha_mkt_stylesheet.css">
    <Style>
    @import url('https://fonts.googleapis.com/css2?family=Fira+Sans&family=Noto+Sans&family=Pinyon+Script&display=swap');
body {
    background-color: #fbefda;
    margin: 0%;
    margin-bottom: 10px;
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
    </Style>
</head>
<body>
    <div class="navbar-color">
        <div class="navbar">
            <p class="title">Champeré</p>
            <ul>
                <li><a href="cha_pyr_viewpyrdata.php">Payroll</a></li>
                <li><a id="login" onclick="logOut()">Log Out</a></li>
            </ul>
    </div>
    </div>
    <h2>Marketing Data Submission Result</h2>
    <div class="form-container" id="white">
        <br><br>
        <?php
        if (isset($_POST['fname']) && isset($_POST['age'])
        && isset($_POST['bdate']) && isset($_POST['gender'])
        && isset($_POST['cstatus']) && isset($_POST['telno'])
        && isset($_POST['celno']) && isset($_POST['email'])
        && isset($_POST['cname']) && isset($_POST['etype'])
        && isset($_POST['ctype'])) {
            include 'cha_mkt_marketingdata.php';

            $fname = $_POST['fname'];
            $age = $_POST['age'];
            $bdate = $_POST['bdate'];
            $gender = $_POST['gender'];
            $cstatus = $_POST['cstatus'];
            $telno = $_POST['telno'];
            $celno = $_POST['celno'];
            $email = $_POST['email'];
            $cname = $_POST['cname'];
            $etype = $_POST['etype'];
            $ctype = $_POST['ctype'];

            echo "<p><strong>Full Name:</strong> " . $fname . "</p>";
            echo "<p><strong>Age:</strong> " . $age . "</p>";
            echo "<p><strong>Birthdate:</strong> " . $bdate . "</p>";
            echo "<p><strong>Gender:</strong> " . $gender . "</p>";
            echo "<p><strong>Civil Status:</strong> " . $cstatus . "</p>";
            echo "<p><strong>Telephone No:</strong> " . $telno . "</p>";
            echo "<p><strong>Cellphone No:</strong> " . $celno . "</p>";
            echo "<p><strong>Email:</strong> " . $email . "</p>";
            echo "<p><strong>Company Name:</strong> " . $cname . "</p>";
            echo "<p><strong>Entry Type:</strong> " . $etype . "</p>";
            echo "<p><strong>Company Type:</strong> " . $ctype . "</p>";

        } else {
            echo "<p>No form data submitted.</p>";
        }
        ?>


        <a href="cha_mkt_inputdata.html" class="btn">Go Back</a>
        <a href="cha_mkt_viewmktdata.php" class="btn">View Entries</a>
    </div>
    <script>
        // log out
        function logOut(){
        if (confirm("Do you want to Logout?") == true) {
        window.location.href="../cha_sys_employee_login.html";
        } else {    
        }
    }
    </script>
</body>
</html>