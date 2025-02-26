<?php
$myinfo=[
    "name"=> "Jarif",
    "email"=> "jarif@mail",
    "phone"=> "44444",
];

$json=json_encode($myinfo);
echo $json;

//myinto in json data
$myjson='{
    "name": "Jarif",
    "email": "jarif@mail",
    "phone": "44444"
}';

$myArray=json_decode($myjson,true);
echo "<pre>";
print_r($myArray);
echo "</pre>";



?>