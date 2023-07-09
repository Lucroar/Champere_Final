<?php
$servername = "127.0.0.1";
$username = "root";
$password = '';
$database = "champeré";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM marketing";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Marketing Data Entries</title>
    <link rel="stylesheet" type="text/css" href="cha_mkt_stylesheet.css">
    <link rel="icon" type="image/x-icon" href="./img/Champeré logo.png">
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
                <li><a href="cha_mkt_inputdata.html">Marketing</a></li>
                <li><a id="login" onclick="logOut()">Log Out</a></li>
            </ul>
        </div>
        </div>
        <div class="form-container" id="white">
        <h2>Marketing Data Entries</h2>
        <p><strong>Other important datas that has been submitted would not be displayed for the employees privacy.</strong></p>
        </div>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='form-container' id='white'>";
                echo "<p><strong>Full Name:</strong>" . $row['fname'] . "</p>";
                echo "<p><strong>Telephone No:</strong>" . $row['telno'] . "</p>";
                echo "<p><strong>Cellphone No:</strong>" . $row['celno'] . "</p>";
                echo "<p><strong>Email:</strong>" . $row['email'] . "</p>";
                echo "<p><strong>Company Name:</strong>" . $row['cname'] . "</p>";
                echo "<div class='container'><a href='cha_mkt_viewmktdata.php?id=". $row['id'] ."' class='btn' onclick='deleteData(". $row['id'] .")'>Delete</a>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo '<div class="form-container" id="white">';
            echo "<p>No form data found.</p>";
            echo "</div>";
        }
        //Get this (make sure to change the table name)
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            $delete = mysqli_query($conn, "DELETE FROM  marketing WHERE id='$id' ");
            if($delete) {
                echo '<div class="form-container" id="white">';
            echo "Data deleted successfully.";
            echo '</div>';
            echo '<script>window.location.href = "cha_mkt_viewmktdata.php";</script>';
            } else {
            echo "Error deleting data: " . mysqli_error($conn);
            }
        }


        $conn->close();
        ?>
        <div class="form-container" id="white">
        <a href="cha_pyr_inputdata.html" class="btn">New Entry</a>
        </div>  
    
    <script>
        // log out
        function logOut(){
        if (confirm("Do you want to Logout?") == true) {
        window.location.href="../cha_sys_employee_login.html";
        } else {    
        }
    }

    //Get this
    function deleteData(id) {
            if (confirm("Do you want to delete this entry?") == true) {
                window.location.href = "cha_mkt_viewmktdata.php?id=" + id;
            } else {
            }
        }
    </script>
</body>
</html>