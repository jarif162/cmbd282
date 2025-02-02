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
$str1= "<script>alert('hello')</script>";
echo htmlspecialchars($str1);  //htmlspecialchars() function prevent all type javascript code to run // also stripslashes( ) stripcslashes()
 echo "<br>";

 //string functions
 echo strlen("Hello world!"); // outputs 12
 echo "<br>";

 echo str_word_count("Hello world!"); // outputs 2
 echo "<br>";

 echo strrev("Hello world!"); // outputs !dlrow olleH
 echo "<br>";
 
 echo strpos("Hello world!", "world"); // outputs 6

echo "<br>";

echo str_replace("world", "foysal", "Hello world!"); // outputs Hello Dolly!

echo "<br>";
echo strtoupper("Hello world!"); // outputs HELLO WORLD!
echo "<br>";
echo strtolower("Hello WORLD!"); // outputs hello world!
echo "<br>";
echo ucfirst("hello world!"); // outputs Hello world!
echo "<br>";
echo ucwords("hello world!"); // outputs Hello World!
echo "<br>";
echo lcfirst("Hello World!"); // outputs hello World!
echo "<br>";
echo str_repeat("Hello", 2); // outputs HelloHello
echo "<br>";
echo str_shuffle("Hello"); // outputs random shuffling of the string
echo "<br>";    

//explode() function
$str = "Hello world. It's a beautiful day.";
$arr=explode(" ",$str);
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<br>";

//implode() function
$str=implode(" ",$arr);
echo $str;
echo "<br>"; 

//substr() function
echo substr("Hello world",1,2); // outputs world
echo "<br>";



?>