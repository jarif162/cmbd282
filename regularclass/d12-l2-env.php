<?php
//$_ENV
echo "<pre>";
print_r($_ENV);
echo "</pre>";

$_ENV["DB_USER"] ="root";
echo $_ENV["DB_USER"];
$myInfo="web developer";
//about $_ENV=> https://www.php.net/manual/en/reserved.variables.environment.php

// echo 'My username is ' .$_ENV["USER"] . '!';
function myFunc(){
    echo $_ENV["DB_USER"]."<br>";
    echo $GLOBALS["myInfo"];
}



?>