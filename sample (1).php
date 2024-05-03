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
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $sql="INSERT INTO `customer`.`customer`(`name`, `phone`, `email`, `vnum`, `address`, `qwe`, `dt` , `brand` , `model` , `year` ,) VALUES ( '$name', '$phone', '$email', '$vnum', '$address', '$qwe', current_timestamp(), '$brand' , '$model' , '$year');";
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
<script>
var brandObject = {
  "Hero": {
    "Splendor": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],
    "Super Splendor": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],
    "Xpulse": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],    
  },
  "RE": {
    "Bullet 350": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],
    "Classic 350": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],
    "Thunderbird 350": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],  
    "Bullet 500": ["2012-2015", "2016-2020", "2020-2022"],
    "Classic 500": ["2012-2015", "2016-2020", "2020-2022"],
    "Himalyan": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],  
  },
  "TVS": {
    "Apache 160": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],
    "Sports": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],
    "Apache rtr 310": ["2018-2020", "2020-2022","2022-Present"],    
  },
  "Java": {
    "Forty two": [ "2019-2020", "2020-2022","2022-Present"],
    "Perak": ["2019-2020", "2020-2022","2022-Present"],
    "Bobber": [ "2019-2020", "2020-2022","2022-Present"],    
  },
  "Yezdi": {
    "rede": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],
    "ramp": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],
    "mustang": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],    
  },
}
window.onload = function() {
  var brandSel = document.getElementById("brand");
  var modelSel = document.getElementById("model");
  var yearSel = document.getElementById("year");
  for (var x in brandObject) {
    brandSel.options[brandSel.options.length] = new Option(x, x);
  }
  brandSel.onchange = function() {
    modelSel.length = 1;
    yearSel.length = 1;
    for (var y in brandObject[this.value]) {
      modelSel.options[modelSel.options.length] = new Option(y, y);
    }
  }
  modelSel.onchange = function() {
    yearSel.length = 1;
    var z = brandObject[brandSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      yearSel.options[yearSel.options.length] = new Option(z[i], z[i]);
    }
  }
}



</script>
  </head>
<body>
  <div class="container">
    <h1>Input your info</h1>
    <div id="scroll-container">
  <div id="scroll-text"><b>Prices will be quoded after inspection|||||||||||||||||||||||||Shop will be closed on wednesday</b><div>
</div>
</div>
<div>
<form action="main.php" method="post">
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
  <button class="btn"><b> submit </b></button>
</form>
</div>
</div> 
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>