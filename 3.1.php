<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
       Username:<input type="text" name="username">
       <br></br>
       Password:<input type="text" name="password">
       <br></br>
       <input type="submit" value="Login">
       <br></br>
    </form>
</body>
</html> 


<?php

    if ($_SERVER['REQUEST_METHOD']=="POST") {  
        $user = $_POST['username'];
        $pass = $_POST['password'];

        setcookie("username",$user,time()+86400,'/');

    }
?>