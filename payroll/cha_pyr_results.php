<!DOCTYPE html>
<html>
<head>
    <title>Payroll Data Submission Result</title>
    <link rel="stylesheet" type="text/css" href="/cha_pyr_stylesheet.css">
    <style>
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
    </style>
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
    <div class="form-container" id="white">
    <h2>Payroll Data Submission Result</h2>
        <br><br>
        <?php
        if (isset($_POST['ename']) && isset($_POST['enumber']) && isset($_POST['cposition']) 
        && isset($_POST['edate']) && isset($_POST['email']) && isset($_POST['cnum']) 
        && isset($_POST['tnum']) && isset($_POST['daysworked']) && isset($_POST['rate']) 
        && isset($_POST['overtime']) && isset($_POST['bonus1']) && isset($_POST['bonus2']) 
        && isset($_POST['bonus3']) && isset($_POST['bonus4']) && isset($_POST['mop'])
        && isset($_POST['message'])) {
            include 'cha_pyr_payrolldata.php';

            $ename = $_POST['ename'];
            $enumber = $_POST['enumber'];   
            $cposition = $_POST['cposition'];
            $edate = $_POST['edate'];
            $email = $_POST['email'];
            $cnum = $_POST['cnum'];
            $tnum = $_POST['tnum'];
            $daysworked = $_POST['daysworked'];
            $rate = $_POST['rate'];
            $overtime = $_POST['overtime'];
            $bonus1 = $_POST['bonus1'];
            $bonus2 = $_POST['bonus2'];
            $bonus3 = $_POST['bonus3'];
            $bonus4 = $_POST['bonus4'];
            $mop = $_POST['mop'];
            $message = $_POST['message'];

            echo "<p><strong>Employee Name:</strong> " . $ename . "</p>";
            echo "<p><strong>Employee Number:</strong> " . $enumber . "</p>";
            echo "<p><strong>Position in the Company:</strong> " . $cposition . "</p>";
            echo "<p><strong>Employment Date:</strong> " . $edate . "</p>";
            echo "<p><strong>Email:</strong> " . $email . "</p>";
            echo "<p><strong>Contact Number:</strong> " . $cnum . "</p>";
            echo "<p><strong>Telephone Number:</strong> " . $tnum . "</p>";
            echo "<p><strong>Number of Days Worked:</strong> " . $daysworked . "</p>";
            echo "<p><strong>Rate Per Day:</strong> " . $rate . "</p>";
            echo "<p><strong>Number of Times Did Overtime:</strong> " . $overtime . "</p>";
            echo "<p><strong>Holiday Payment:</strong> " . $bonus1 . "</p>";
            echo "<p><strong>13th Month Payment:</strong> " . $bonus2 . "</p>";
            echo "<p><strong>Bonus Payment:</strong> " . $bonus3 . "</p>";
            echo "<p><strong>Overtime Payment:</strong> " . $bonus4 . "</p>";
            echo "<p><strong>Mode of Payment:</strong> " . $mop . "</p>";
            echo "<p><strong>Message:</strong> " . $message . "</p>";

            $g_income = 0;
            $n_income = 0;

            $overtimepay= 500*$overtime; 
            $g_income=$daysworked*$rate+$overtimepay+$bonus1+$bonus2+$bonus3+$bonus4*200; 
            $deduct = 2000; // for tax, sss, etc.
            $n_income=$g_income-$deduct; 

            echo "<p><strong>Gross Income:</strong> " . $g_income . "</p>";
            echo "<p><strong>Deduction Made From: <br> Tax, Philhealth, SSS and Pagibig:</strong> " . $deduct . "</p>";
            echo "<p><strong>Net Income:</strong> " . $n_income . "</p>";
        } else {
            echo "<p>No form data submitted.</p>";
        }
        ?>

        
        <a href="cha_pyr_inputdata.html" class="btn">Go Back</a>
        <a href="cha_pyr_viewpyrdata.php" class="btn">View Entries</a>
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