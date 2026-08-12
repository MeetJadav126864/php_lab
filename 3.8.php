<?php
if (isset($_COOKIE['returning'])) {
    echo "<h2>Welcome Back old user! (Repeated User)</h2>";
} else {
    echo "<h2>Welcome youre new user! (New User)</h2>";
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    setcookie('returning', 'yes', time() + 86400, '/');
    setcookie('username', $user, time() + 86400, '/');
    
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
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
    username:<input type="text" name="username"> <br>
    password:<input type="password" name="password"> <br>
    <input type="submit">
</form>

</body>
</html>
