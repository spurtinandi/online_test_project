<?php
if(isset($_POST['submit'])){
    $username = $_POST['uname'];
    $password = $_POST['password'];
    
    if($username == "admin" && $password == "admin"){
        header("location:adminHome.php");
    }
    else{
        echo "error";
    }
}

?>


<html>
<head>Login Here
<title>Login
</title>
</head>
<body>
<form action = "" method = "POST">
<label>UserName</label>
<input type ="text" name="uname"><br>
<label>Password</label>
<input type = "password" name= "password"><br>
<input type = "submit" name="submit" value="Login">
</form></body>
</html>