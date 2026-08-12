<?php
    include 'db.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $iid = $_POST['id'];
      
        $sql = "insert into user (id,name,password) VALUES ('$iid','$user','$pass')";
        mysqli_query($conn,$sql);

        setcookie("saved_user", $user, time() + (86400), "/");
        setcookie("saved_pass", $pass, time() + (86400), "/");
    }
    $remembered_user = isset($_COOKIE['saved_user']) ? $_COOKIE['saved_user'] : '';
    $remembered_pass = isset($_COOKIE['saved_pass']) ? $_COOKIE['saved_pass'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post">
    id:<input type="text" name="id">
   
    username:<input type="text" name="username" value="<?php echo $remembered_user; ?>">
    password:<input type="password" name="password" value="<?php echo $remembered_pass; ?>">
    <input type="submit">

    <a href='update.php'>forgot password</a>

</form>

</body>
</html>
