<?php
$capital="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$small="abcdefghijklmnopqrstuvwxyz";
$number="0123456789";
$special="~!@#$%^&*()_+-={}[]|\:;'<>.?/";
// $charecters=;
echo str_shuffle($capital)."<br>"; //str_shuffle mean sob kisu ulta plta ashbe
echo str_shuffle(substr(str_shuffle($capital),0,2).substr(str_shuffle($small),0,2).substr(str_shuffle($number),0,2).substr(str_shuffle($special),0,2)); //random password gen

echo "<br>";
echo uniqid("user:",true)."<br>";
echo rand(1000,9999); //random number dibe 
?>

<a href="./d10-random-password-generator.php"><button>Reload</button></a>