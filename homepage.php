<?php

session_start();

$user = $_SESSION['name'];  

echo "Welcome:". $user;  


session_destroy();
?>