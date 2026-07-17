<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup Page</title>
</head>
<body>
    <form method="post">
        <label>Username</label>
        <input type="text" name="username">
        <br>

        <label for="">Password</label>
        <input type="password" name="password">
        <br>

        <label for="">Confirm Password</label>
        <input type="password" name="Cpassword">
        <br>

        <label for="">Email</label>
        <input type="email" name="email">
        <br>
        
        <label for="">Phone number</label>
        <input type="number" name="number">
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
        $email = $_POST['email'];
        $num = $_POST['number'];

        $sql="INSERT INTO `signup`(`username`, `password`, `email`, `phone`) VALUES ('$user','$pass','$email','$num')";

        mysqli_query($conn,$sql);
    }

?>