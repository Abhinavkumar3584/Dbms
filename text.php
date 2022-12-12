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
    $confirm = $_POST['confirm'];
    
    $sql = "INSERT INTO entry_details (first_name,last_name,college_name,branch,enrollment_number,batch,sex,phone_number,email,password,confirm) VALUES ('$first_name','$last_name','$college_name','$branch','$enrollment_number','$batch','$sex','$phone_number',$email','$password','$confirm')";// echo $sql;


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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="test.css">
</head>
<!-- <?php
if ($insert==1){
    echo "Registration Successful!!!";
}
?> -->
<body>
    <div class="container">
        <h1>Welcome to Donor's Form</h3>
        <p>Enter your details to submit this form.</p>
        <?php
        if ($insert==1){
            echo "Registration Successful!!!";
        }
        ?>
        <form action="text.php" method="post">
            <input type="text" name="first_name" id="first_name" placeholder="Enter your First Name">
            <input type="text" name="last_name" id="last_name" placeholder="Enter your Last Name">
            <input type="text" name="college_name" id="college_name" placeholder="Enter your College Name">
            <input type="text" name="branch" id="branch" placeholder="Enter your Branch">
            <input type="text" name="batch" id="batch" placeholder="Enter your Batch">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <input type="text" name="enrollment_number" id="enrollment_number" placeholder="Enter your enrollment number">
            <input type="number" name="phone_number" id="phone_number" placeholder="Enter Your Phone Number">
            <button class="btn">Submit</button> 
        </form>
    </div>
    
</body>
</html>