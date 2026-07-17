<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form method="post">
        <label>Username</label>
        <input type="text" name="username">
        <br>
        <label for="">Password</label>
        <input type="password" name="password">
        <br>
        <input type="submit">
    </form>
</body>
</html> 

<?php

    include "db.php";
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $sql="INSERT INTO `login`(`name`, `password`) VALUES ('$user','$pass')";
        mysqli_query($conn,$sql);
    }

?>