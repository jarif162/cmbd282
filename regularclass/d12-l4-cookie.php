<?php
//$_COOKIE

setcookie('name', 'jarif', time() + 60,'/');
setcookie('age', '25', time() + 60*60*24*30,"/");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

echo $_COOKIE["name"];
echo "<br>";
echo $_COOKIE["age"];
echo "<br>";

//unset cookie
setcookie('name', 'jarif', time() - 3600,'/');

setcookie("age","25",time() - 60*60*24*30,"/");


?>