<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $vnum = $_POST['vnum'];
    $address = $_POST['address'];
    $qwe  = $_POST['qwe'];
    $sql="INSERT INTO `customer`.`customer`(`name`, `phone`, `email`, `vnum`, `address`, `qwe`, `dt`) VALUES ( '$name', '$phone', '$email', '$vnum', '$address', '$qwe', current_timestamp());";
    echo $sql;

    if($con->query($sql) == true){
        echo "succesfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>


<!DOCTYPE html>
<html>
  <head>
    <link rel = "icon" href ="a.jpg"type = "image/x-icon">
<title>
   Motorcycle M-ow.info
</title>
<link rel="stylesheet" href="unwanted.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<body>
  <div class="mtext">
    <br>
    <h1 style="font-size: 80px;">Input your info</h1>
   
<div>
<form action="main.php" method="post">
  <input type="text" name="name" id="name" placeholder="Enter your name">
  <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
  <input type="email" name="email" id="email" placeholder="Enter your email">
  <input type="text" name="vnum" id="vnum" placeholder="Enter your vehicle registration number">
  <input type="text" name="address" id="address" placeholder="Enter your address">
  <input type="text" name="qwe" id="qwe" placeholder="Enter problem other than general maintainance(if any)">
  <button class="btn"><b> submit </b></button>
</form>
</div>
</div> 
</body>
</html>