<?php
//concatenating strings
$first_name = "John";
$last_name = "Doe"; 

echo $first_name . " " . $last_name; // John Doe
echo "<br>";

//trimming strings
$str="    hello /world!    ";
echo trim($str);

//removing slashes and other harmful characters
echo "<br>";
echo stripcslashes($str)  
?>