
<html>
<head>
<title>Enter your details</title>
</head>
<body>
<div style="float: right;">
<a href="login.php">Login</a>
</div>
<?php date_default_timezone_set('Asia/Kolkata');?>
<div style="padding: 150px 500px;">
<form action="registerVisiter.php" method="post">
<input type="text" name="todaydate" value="<?php echo date("Y-m-d");?>" readonly><br>
<input type="text" name="vname" placeholder="Enter your name"><br>
<input type="text" name="mobileno" placeholder="Enter your Mobile number"><br>
<input type="text" name="coming" placeholder="Coming from"><br>
<input type="text" name="tomeet" placeholder="Whome to meet"><br>
<input type="text" name="purpose" placeholder="Purpose of your visit"><br>
<input type="text" name="intime" placeholder="Intime" value="<?php echo date("H:i:s")?>" readonly><br>
<input type="text" name="proof" placeholder="Adhaar/Pan Card"><br>
<input type="submit" name="registerVisitor" value="RegisterVisitor">
</form>
</div>
</body>
</html>
<?php
 