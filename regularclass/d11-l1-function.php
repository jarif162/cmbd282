<?php
function myFunc($msg="Assalamualaikum",$name="boro bhai"){
    echo $msg." ". $name;
}

myFunc("foysal","jarif");
echo "<br>";
myFunc("jarif","foysal");
echo"<br>";
myFunc();
echo"<br>";
myFunc("Hello");
echo"<br>";


function myFun($msg="Assalamualaikum",$name="boro bhai"){
    return $msg." ".$name; //user ke output direct dekhabo na jkhn dekhabo tkhn eco krbo function e 
}

echo myFun("foysal","jarif");
?>