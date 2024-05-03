<?php
$submit=false;
$notsubmit=false;
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
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $sql="INSERT INTO `customer`.`customer`(`name`, `phone`, `email`, `vnum`, `address`, `qwe`, `dt`, `brand`, `model`, `year`) 
                                    VALUES ( '$name', '$phone', '$email', '$vnum', '$address', '$qwe', current_timestamp(), '$brand' , '$model' , '$year');";
    echo $sql;
    
    if($con->query($sql) == true){
      
        $submit = true;
    }
    else{
        $notsubmit = true;
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
<script src="dropdown.js"></script>
  </head>
<body>
  <div class="container">
    <h1>WELCOME TO MOTORBIKE MECHANIC</h1>
    <p>Enter details for booking Online</p>
    <?php
    if($submit == true )
      echo "<p class='submitmsg'>Thanks for booking our services,we will be responding you soon</p>";
    elseif($notsubmit == true )
      echo"<p class='errmsg'> Server not responding try again later</p>";
    ?>
    <div id="scroll-container">
  <div id="scroll-text">Shops will be closed on national holidays</div>
</div>
<div>
<form action="detail.php" method="post">
  <input type="text" name="name" id="name" placeholder="Enter your name">
  <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
  <input type="email" name="email" id="email" placeholder="Enter your email">
  <input type="text" name="vnum" id="vnum" placeholder="Enter your vehicle registration number">
  <input type="text" name="address" id="address" placeholder="Enter your address">
  <input type="text" name="qwe" id="qwe" placeholder="Enter problem other than general maintainance(if any)">
  <select  class="btn1" name="brand" id="brand">
    <option value="brand" selected="selected">Select brand</option>
  </select>
<select class="btn1" name="model" id="model">
    <option value="model" selected="selected">Select model</option>
  </select>
<select class="btn1" name="year" id="year">
    <option value="year" selected="selected">Select year</option>
  </select>
  <button class="btn"><b> SUBMIT</b></button>
</form>
</div>
</div> 
</body>
</html>