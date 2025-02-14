<?php
// Regular Expression -sentence pattern matching like condition match with comparing subject
$str="hello world";
echo preg_match("/world/",$str);
echo "<br>";

echo preg_match("/World/",$str);
echo "<br>";

echo preg_match("/world/i",$str); //i mean case insensitive
echo "<br>";

echo preg_match("/^hello/",$str); //^ mean start with word
echo "<br>";

//* mean zero or more match with the condition

echo preg_match("/world$/",$str); //$ mean end with word
echo "<br>";

echo preg_match("/[aeiou]/",$str); // /[]/ mean any range of the characters present in the square bracket condition will true
echo "<br>";
 
echo preg_match("/[0-9]/" ,"the  number 1223 dash dash");
echo "<br>";

echo preg_match("/[0-9]+/" ,"the  number 123 dash dash");  //+ mean one or more match with the condition
echo "<br>";

echo preg_match("/[0-9]{4}/" ,"the  number 1234 dash dash");  //{4} mean 4 is the limit or more number of subject match with the condition
echo "<br>";

echo preg_match("/[0-9]{4}/" ,"the  number 134 dash dash");  //{4} mean 3 digit number will not  match with the condition
echo "<br>";

echo preg_match("/[0-9]{3,4}/" ,"the  number 1234 dash dash");  //{3,4} mean 3 to 4 digit is limit rhat  number match with the condition
echo "<br>";

echo preg_match("/[0-9]{3,4}/" ,"the  number 134 dash dash");  //{3,4} mean 3 to 4 digit is limit rhat  number match with the condition
echo "<br>";


echo preg_match("/\b[0-9]{3,4}\b/" ,"the  number 134678 dash dash");  //{3,4} mean 3 to 4 digit is limit rhat  number match with the condition \b mean word boundary
echo "<br>";
?>