<?php

echo "Using for loop"."<br/>";

for ($i=5; $i <= 10; $i++) { 
    echo $i . "<br/>";
}

echo "Using foreach loop"."<br/>";
$num = array(5,6,7,8,9,10);

foreach ($num as $val) {
    echo $val . "<br/>";
}


?>