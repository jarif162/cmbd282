<?php
$myinfo=[
    "name"=> "Jarif",
    "email"=> "jarif@mail",
    "phone"=> "44444",
];

$json=json_encode($myinfo); //json_encode is used to convert array to json format
//json_encode is used to convert array to json format
echo $json;

//myinto in json data
$myjson='{
    "name": "Jarif",
    "email": "jarif@mail",
    "phone": "44444"
}';

$myArray=json_decode($myjson,true);//json_decode is used to convert json data to array format
//json_decode is used to convert json data to array format
echo "<pre>";
print_r($myArray);
echo "</pre>";



?>