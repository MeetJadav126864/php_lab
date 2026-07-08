<?php
$name = "Meet";

echo "Length:";
echo strlen($name);
echo "<br>";
echo "String position:";
echo strpos($name,"t");
echo "<br>";    
echo "String word count: ";
echo str_word_count($name);
echo "<br>";    
echo "String Reverse: ";
echo strrev($name);
echo "<br>";    
echo "String lower: ";
echo strtolower($name);
echo "<br>";    
echo "String upper: ";
echo strtoupper($name);


?>