<?php
$insert = 0;
if(isset($_POST['first_name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "registration";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password, $db);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $first_name = $_POST['first_name'];
	  $last_name = $_POST['last_name'];
	  $college_name = $_POST['college_name'];
	  $branch = $_POST['branch'];
    $enrollment_number = $_POST['enrollment_number'];
    $batch = $_POST['batch'];
    $sex = $_POST['sex'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $confirm = $_POST['confirm'];
    
    $sql = "INSERT INTO `entry_details` (`first_name`,`last_name`,`college_name`,`branch`,`enrollment_number`,`batch`,`sex`,`phone_number`,`email`,`password`) VALUES ('$first_name','$last_name','$college_name','$branch','$enrollment_number','$batch','$sex','$phone_number','$email','$password');";// echo $sql;


    if($con->query($sql) == true){
        $insert = 1;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="background.css">
    <title>log in page</title>
    <style>
      .du
      {
      text-align:center;
      }

 
    </style>
    <link rel="stylesheet" href="style2.css">
</head>
<body background="1 (1).jpg" link="#000" alink="#017bf5" vlink="#000" >
  
   <div class="box">
    
      <img src="Picture1.png" class="pic" width="100" height="100" alt="" srcset="">
      <form class="login-form" action="index.php" method="post">
      <div class="head">
        <img src="Picture1.png" alt="" class="logo">
      
      
        <h3>Create your Account</h3>
      </div>

      <div class="name">
        <input type="name" name="email" id="email" placeholder="Username" required>
      </div>
      <!-- <a class="line1">You can use letters, numbers & periods</a> -->
      <br>
      <br>
      <!-- <a href="" class="line2">Use my current email address instead</a> -->
      <div class="name">
        <input type="password" id="password" name="password" placeholder="Password" required>
      </div>
      <br>
    </form>
      <form>
        <h3 class="du">DU PRODUCT EXCHANGE </h3>
        <h2>Sign in</h2>
        <br>
        <div class="inputBox">
          <input type="email" id="email" name="email" placeholder="Username" required>
        </div>
        <div class="inputBox">
          <input type="password" id="password" name="password" placeholder="Password" required>
        </div>
        <a href="index.php" class="line4">Register</a>
      <input type="submit" value="Sign In">
      </form>
    </div>
</body>
</html>
    