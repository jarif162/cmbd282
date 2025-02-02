<?php
$mycityName="Dhaka";
var_dump($mycityName);
echo "<br>";

$myage=16;
var_dump($myage);
echo "<br>";

$height=6.1;
var_dump($height);
echo "<br>";

$myStatus= true;
var_dump($myStatus);
echo "<br>";

$null=NULL;
var_dump($null);
echo "<br>";

$citynames=["dhaka","tangail"];
var_dump($citynames);
echo "<br>";

// objects
class myclass
{
    public $myproperty="This is a property";
}

$myobjects= new myclass();
var_dump($myobjects);
echo "<br>";

//resources
$myFile=fopen("d2l3datatype.php","r");
var_dump($myFile);
echo "<br>"



?>