<?php

// GLOBALS

$x=12;
$y= 4;
function myFunc(){
    global $y; //global keyword is used to access a global variable from within a function.
    echo $GLOBALS['x']+$y; //$globals is an associative array that contains all the variables that are defined in the global scope of the script.
}

myFunc();
//server variables
echo "<pre>";
print_r($_SERVER); //$_SERVER is a superglobal variable that holds information about headers, paths, and script locations.
echo "</pre>";





?>