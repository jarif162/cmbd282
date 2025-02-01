<?php
//i. Find maximum number from an array
$arr=[5,4,7,8,9,10,50,55,3];

echo max($arr)."<br>";

//Find 2nd max number from an array
rsort($arr);
echo "<pre>";
print_r($arr)."<br>";
echo "</pre>";
echo "Second max number is:$arr[1].<br>";

// Sort array from min to max
sort($arr);
echo "<pre>";
print_r($arr)."<br>";
echo "</pre>";

//Calculate average number of an array
$arraySum=array_sum($arr);
$arrayCount=count($arr);

$avg=$arraySum/$arrayCount;
echo $avg."<br>";

//Merging 2 different types of array together
$a1=[2,"g",4,5,"d"];
$a2=[4,"t",3,9,"o"];

$a3=array_merge($a1,$a2);
echo "<pre>";
print_r($a3);
echo "</pre>";

//Search data from an array
echo array_search(7,$arr)."<br>";


// Show array data in lowercase and uppercase
$c=["g","h","a"];

// foreach($c as $L){
//     echo strtoupper($L)."<br>";
// }

$up=array_map('strtoupper',$c);

echo "<pre>";
print_r($up);
echo "</pre>";


$g=["G","H","A"];
foreach($c as $L){
    echo strtolower($L)."<br>";  
}

// Get unique values

$v1=[1,2,3,4,5,1,2,3,4,5];
$v2=array_unique($v1);
echo "<pre>";
print_r($v2);
echo "</pre>";

//Remove duplicate values
$v1=[1,2,3,4,5,1,2,3,4,5];
$v2=array_unique($v1);
echo "<pre>";
print_r($v2);
echo "</pre>";


//Check if email address is unique
$email=["jarif@gmail.com","jarif10@gmail.com","jarif@gmail.com","jarif5@gmail.com","jarif5@gmail.com"];
echo "Unique mail is:";
echo "<pre>";
print_r(array_unique($email));
echo "</pre>";

//Check unique username
$uname=[ "JArif", "JArif", "JArif", "JAif"];

echo "Unique username is:";
echo "<pre>";
print_r(array_unique($uname));
echo "</pre>";

//Merge 2 comma separated lists with unique value only

$list1 = "apple,banana,cherry";
$list2 = "banana,orange,apple,grape";

$ll=explode(",",$list1);
$ll1=explode(",",$list2);


$mergeUnique=array_unique(array_merge($ll1,$ll));
echo "<pre>";
print_r($mergeUnique);
echo "</pre>";

//Difference between 2 multi-dimensional arrays
$myArr=[
    ["q"=>"good","r"=>"boom"],
    ["a"=>"go","f"=>"boom"],
    
];
$myArr2=[
    ["q"=>"go0","r"=>"boo"],
    ["a"=>"goj","f"=>"boomm"],
];
$s1=array_map("serialize",$myArr);
$s2=array_map("serialize",$myArr2);

echo "<pre>";
print_r($s1);
print_r($s2);
echo "</pre>";

$arraydiff=array_diff($s2,$s1);
$again=array_map("unserialize",$arraydiff);
echo "<pre>";
print_r($again);
echo "</pre>";

//Check if all values are string or not

$val=["Good",50,"frog",true,"Sakib"];
foreach($val as $d){
    if(is_string($d)){
        echo " $d value is  string <br>";
    }else{
        echo " $d  value is not  string <br>";
    }
}

echo "<br>";
//Union of 2 arrays
$list1 = ["apple","banana","cherry"];
$list2 = ["banana","orange","apple","grape"];

$mergeUnion=array_unique(array_merge($list2,$list1));
echo "Union of 2 array:";
echo "<pre>";
print_r($mergeUnion);
echo "</pre>";

//Filter out array data with some specific keys

$myArr=[
    ["q"=>"good","r"=>"boom"],
    ["q"=>"go","r"=>"oom"],  
];

$arrayf=array_map(function($val){
    return["q"=>$val["r"]];
},$myArr);

echo "<pre>";
print_r($arrayf);
echo "</pre>";

// .Filter a multi-dimensional array.
$myArr=[
    ["q"=>"good","r"=>20],
    ["q"=>"go","r"=>30],  
    ["q"=>"go","r"=>40],  
];

$arrayf=array_filter($myArr,function($val){
    return $val["r"]>20;
});

echo "<pre>";
print_r($arrayf);
echo "</pre>";

//Remove all white spaces from an array

$f=["g", "t", "j "];

echo "<pre>";
print_r(array_map("trim" ,$f));
echo "</pre>";

// Combine 2 array and use one array data as keys and others as values
$myArr=["name","age","city"];
$myArr2=["Jarif",24,"tangail"];

echo "<pre>";
print_r(array_combine($myArr,$myArr2));
echo "</pre>";


// Convert string to array
$st="name , age , city";
echo "<pre>";
print_r(explode(", ",$st));
echo "</pre>";

?>