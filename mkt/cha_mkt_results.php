<!DOCTYPE html>
<html>
<head>
    <title>Marketing Data Submission Result</title>
    <link rel="stylesheet" type="text/css" href="cha_mkt_stylesheet.css">
</head>
<body>
    <div class="slogan1">
        <div class="slogan-text1">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <a href="" id="white"></a>
        </div>
    </div>
    <br><br><br><br><br><br>
    <center>
        <img src="chalogo.png" alt="champere logo" width="200px" height="200px">
        <h2>Marketing Data Submission Result</h2>
    </center>
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
    <br><br><br><br><br><br>
    <div class="slogan2">
        <div class="slogan-text2">
            <a href="" id="white"></button>
        </div>
    </div>
</body>
</html>