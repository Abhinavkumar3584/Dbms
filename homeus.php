<?php
$first_name = 'a';
$insert = 0;
$server = "localhost";
$username = "root";
$pass = "";
$db = "registration";

$con = mysqli_connect($server, $username, $pass, $db);
if (!$con) {
    die("connection to this database failed due to" . mysqli_connect_error());
}
session_start();
$name = 'a';
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    $first_name = $_SESSION['first_name'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link href="https://fonts.googleapis.com/css2?
    family=Roboto:wght@400; 700&display-swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <img src="Picture1.png" class="logo">
            <div class="head">
                <h2 class="he">(UNIVERSITY OF DELHI)</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="http://localhost/Dbms/homeus.php">HOME</a></li>
                    <li><a><?php echo "Welcome " . $_SESSION['first_name'] ?></a></li>
                    <li class="nav-item"><a class="btn btn-danger" href="http://localhost/Dbms/logout.php"role="button">Log Out</a></li>
                </ul>
            </nav>
            <img src="menu.png" class="menu-icon">
        </div>
        <br>
        <br>


        <div class="row">
            <div class="col">

                <h1>DELHI UNIVERSITY </h1>
                <br><br>
                <h3>PRODUCT EXCHANGE</h3>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo error quod, nostrum, maxime ipsam sed quaerat quibusdam reprehenderit expedita officia possimus maiores commodi cupiditate rerum iure beatae vitae quidem molestias?</p> -->
                <a href="index.html">
                    <!-- <button type="button" class="butt" placeholder="Explore" >MORE</button> -->
                </a>
            </div>
            <div class="col">
                <a href="map.html">
                    <div class="card card1">
                        <h5 font=>Collage campus</h5>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                    </div>

                </a>

                <div class="card card2">
                    <h5>Accommodation</h5>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                </div>
                <div class="card card3">
                    <h5>Products</h5>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                </div>
                <div class="card card4">
                    <h5>Famous places/Food</h5>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                </div>
            </div>

        </div>
    </div>

</body>

</html>