<!DOCTYPE html>
<html>
<head>
    <title>Payroll Data Submission Result</title>
    <link rel="stylesheet" type="text/css" href="cha_pyr_stylesheet.css">
</head>
<body>
    <div class="slogan1">
        <div class="slogan-text1">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <a href="" id="white">www.champère.com</a>
        </div>
    </div>
    <br><br><br><br><br><br>
    <center>
        <img src="champerelogo.png" alt="champere logo" width="200px" height="200px">
        <h2>Payroll Data Submission Result</h2>
    </center>
    <div class="form-container" id="white">
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
    <br><br><br><br><br><br>
    <div class="slogan2">
        <div class="slogan-text2">
            <h1>Champère</h1>
            <h2>Get your very <br><br> own bottle now!</h2>
            <a href="" id="white">SHOP NOW</button>
        </div>
    </div>
</body>
</html>