<?php
//array()
$myArr=array("a","b",6,4);

//is_array()
echo is_array($myArr)."<br>";

//in_array()
echo in_array("b",$myArr);

//array_merge()
$m=array("n",0,3);
$mergArr=array_merge($myArr,$m);
echo "<pre>";
print_r($mergArr);
echo "</pre>";

//array_keys()
$myinfo=[
     "name"=>"Asif",
    "city"=>"Dhaka",
    "weight" => 75,
    "status" => true,
    "height"=>5.8,
    "null"=>null,
    "country"=>"bd"
];
    
$keys=array_keys($myinfo);
    
echo "<pre>";
print_r($keys);
 echo "</pre>";

//array_key_exists()

echo array_key_exists("name",$myinfo);

//array_shift()
$shifted=array_shift($myArr);
echo $shifted."<br>";
echo "<pre>";
print_r($myArr);
echo "</pre>";

//array_unshift()
$shiftedd=array_unshift($myArr,"jarif");
echo $shiftedd."<br>";
echo "<pre>";
print_r($myArr);
echo "</pre>";

//array_push()
array_push($myArr,15);
echo "<pre>";
print_r($myArr);
echo "</pre>";

//array_pop()
array_pop($myArr);
echo "<pre>";
print_r($myArr);
echo "</pre>";

//array_map()
function myFunc($val){
    return $val *2;
}

$myArr=array(1,2,3,4,5);
$newArr=array_map("myFunc",$myArr);
echo "<pre>";
print_r($newArr);
echo "</pre>";

//array_unique()
$myArr=array(1,2,3,4,5,1,2,3,4,5);
echo "<pre>";
print_r (array_unique($myArr));
echo "</pre>";

//array_slice()
$s=array_slice($myArr,2,4);
echo "<pre>";
print_r($s);
echo "</pre>";

//array_diff()
$myArr=array(1,2,3,4,5);
$myArr2=array(1,2,3,4,5,6,7,8,9);

echo "<pre>";
print_r (array_diff($myArr2,$myArr));
echo "</pre>";

//array_search()
$index=array_search(8,$myArr2);
echo $index."<br>";

//array_reverse()
$reverseAr=array_reverse($myArr2);
echo "<pre>";
print_r($reverseAr);
echo "</pre>";

//array_short()
sort($myArr2);
echo "<pre>";
print_r($myArr2);
echo "</pre>";

//rsort()
rsort($myArr2);
echo "<pre>";
print_r($myArr2);
echo "</pre>";


?>