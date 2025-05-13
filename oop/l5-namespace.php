<?php 
require_once "./oop-3.php";
use school1\school as school1;

echo "<br>";

require_once "./l4.php";
use school2\school as school2; // use the class from l4.php

//function that work with clases
function mySchool(school1 $school){
    return $school->mySchool();
}


//exception
class MyException extends Exception{
    public function errorMessage(){
        return "Error on line ".$this->getLine()." in ".$this->getFile().": <b>"." : ".$this->getMessage()."</b> is not a valid E-Mail address";
    }
}


$myExceptionObj=new MyException();
$myExceptionObj->errorMessage();
echo "<br><br>".$myExceptionObj;




?>