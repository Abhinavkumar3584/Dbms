<?php
$insert = 0;
$flag = 0;
$first_name = 'a';
if (isset($_POST['email'])) {
  $server = "localhost";
  $username = "root";
  $pass = "";
  $db = "registration";

  $con = mysqli_connect($server, $username, $pass, $db);

  if (!$con) {
    die("connection to this database failed due to" . mysqli_connect_error());
  }

  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "SELECT email, password,first_name FROM `entry_details` WHERE email = '$email';";

  if ($con->query($sql) == true) {
    $result = $con->query($sql);
    $row = mysqli_fetch_array($result);
    $insert = 1;
  } else {
    $insert = 2;
  }
  if ($result->num_rows == 0) {
    $flag = 1;
  } else if ($insert == 1) {
    if ($password == $row["password"]) {
      $first_name = $row['first_name'];
      session_start();
      $_SESSION["first_name"] = $first_name;
      $_SESSION[""] = true;
      header("Location: http://localhost/Dbms/homeus.php");
      exit();
    } else if ($insert == 1 && $password != $row["password"]) {
      $flag = 2;
    }
  }
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
    .du {
      text-align: center;
    }
  </style>
  <link rel="stylesheet" href="style2.css">
</head>

<body background="1 (1).jpg" link="#000" alink="#017bf5" vlink="#000">
  <?php
  if ($flag == 1) {
    echo "<p align='center' class='alertMsg'>User Id Not Exist !!!</p>";
  } else if ($flag == 2) {
    echo "<p align='center' class='alertMsg'>Wrong Password !!!</p>";
  }
  ?>
  <div class="box">

    <img src="Picture1.png" class="pic" width="100" height="100" alt="" srcset="">
    <form class="login-form" action="login.php" method="post">
      <div class="head">

        <h3>Sign in</h3>
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
      <a href="http://localhost/Dbms/index.php" class="line4">Register</a>
      <input type="submit" value="Sign In">
    </form>
    <!-- <form>
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
      </form> -->
  </div>
</body>

</html>