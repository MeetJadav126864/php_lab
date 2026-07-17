<?php

$db_host='localhost';
$db_user='root';
$db_pass='';
$database='php_7145';

$conn = mysqli_connect($db_host,$db_user,$db_pass,$database,3307);

if(!$conn){
    echo "Something went wrong!";
}



?>