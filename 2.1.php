<?php
$days = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");

print_r($days);

echo "<br><br>";

$month = array(
    "Jan"=>31,
    "Feb"=>28,
    "Mar"=>31,
    "Apr"=>30,
    "Jun"=>30,
    "Jul"=>31,
    "Aug"=>31,
    "Sep"=>30,
    "Oct"=>31,
    "Nov"=>30,
    "Dec"=>31,
);

print_r($month);
echo "<br><br>";

$laptop=array(
    
    "HP"=> array(
        "model"=>"Vivobook 16x",
        "price"=>60000
    ),
    
    "Asus"=>array(
        "model"=>"Victus",
        "price"=>80000
    ),
    
    "Dell"=>array(
        "model"=>"Quack",
        "price"=>40000,
    ),  
);
    
print_r($laptop);


?>