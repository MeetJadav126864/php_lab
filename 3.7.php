<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post">
    
    username:<input type="text" name="username">
    password:<input type="password" name="password">
    <input type="submit">
    <a href="logout.php">logout</a>

</form>


</body>
</html>

<?php
   session_start();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['username'];
        $pass = $_POST['password'];
        
        $_SESSION['name']= $name;
        header('location: homepage.php');
      
      
       
    }



?>