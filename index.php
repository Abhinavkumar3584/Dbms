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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Material Icons' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="background.css">
  </head>
  <body background="cicpic.jpg" link="#000" alink="#017bf5" vlink="#000" >
    <div class="main">
    <?php
        if ($insert==1){
            echo "Registration Successful!!!";
        }
    ?>
    <form class="login-form" action="index.php" method="post">
      <div class="head">
        <img src="Picture1.png" alt="" class="logo">
      
      
        <h3>Create your Account</h3>
      </div>
      <div class="name">
        <input type="name" name="first_name" id="first_name" required>
        <label>First name</label>
      </div>
      <div class="name">
        <input type="name" name="last_name" id="last_name" required>
        <label>Last name</label>
      </div>
      <div class="name">
        <input type="name" name="college_name"id="college_name" required>
        <label>College name</label>
      </div>
      <div class="name">
        <input type="name" name="branch" id="branch" required>
        <label>Branch</label>
      </div>
      <div class="name">
        <input type="name" name="enrollment_number" id="enrollment_number" required>
        <label>Enrollmet number</label>
      </div>
      <div class="name">
        <input type="name" name="batch" id="batch" required>
        <label>Batch</label>
      </div>
      <br>
      <br>
      <div class="name">
        <select style="display: inline;margin-left: 3%;margin-right:3%;" id="Sex" name="sex">
            <option selected>Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
        </select>
    </div>
    <br>
    <br>
    <!-- <a class="line1">Upload your college Identity Card</a> -->
       
      <div class="name">
        <input type="name" name="phone_number" id="phone_number" required>
        <label>Phone Number</label>
      </div>
      <br>
      <br>

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
      <!-- <div class="pass">
        <input type="password" class="password" id="confirm" name="confirm" required>
        <label>Confirm</label>
        </div> -->
        <!-- <div class="iconeye">
      <img src="eyehide.png" onclick="show();" id="eye">
      </div> -->
      <!-- <a class="line3">Use 8 or more characters with a mix of letters, numbers & symbols</a> -->
      <br>
      <a href="login.html" class="line4">Sign in</a>
      <input type="submit" value="Register">
    </form>
    <!-- <div class="side-image"> -->
      <!-- <img src="sideimage.png" alt="" class="side-logo"> -->
    <!-- </div> -->
    </div>

    <!-- <script type="text/javascript">

    function show(){

      var password= document.getElementById('pass1');
      confirm= document.getElementById('pass2');
      image= document.getElementById('eye');

      if (password.type==="password",confirm.type==="password") {
        password.type="text";
        confirm.type="text";
        image.setAttribute('src', 'eyeshow.png');

      }else if (password.type==="text",confirm.type==="text"){
        password.type="password";
        confirm.type="password";
        image.setAttribute('src', 'eyehide.png');
      }
    }

    </script> -->
  </body>
</html>
