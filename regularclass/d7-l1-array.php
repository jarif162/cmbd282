<?php

//index array
// $myinfo=array("Asif","Dhaka",70,true);
$myinfo=["Asif","Dhaka",70,true,"g",false,"f",null,"l"];
echo "$myinfo[0] <br>";
echo "<pre>"; //pre html code by this we can design anything line by line
print_r(value:$myinfo); //print_r use for array
echo "</pre>";


for($i=0; $i<9; $i++){
    echo $myinfo[$i]."<br>";
}
 echo "<br>";
 echo "<br>";
for($i=0; $i<count($myinfo); $i++){
    echo $myinfo[$i]."<br>";  //count diye automatic detect kre value
}
echo "<br>";
echo "<br>";
foreach($myinfo as $info){
    echo $info."<br>";
}

//associative array

$myinfo=[
"name"=>"Asif",
"city"=>"Dhaka",
"weight" => 75,
"status" => true,
"height"=>5.8,
"null"=>null,
"country"=>"bd"
];

echo "<br>";
echo $myinfo["weight"];
// echo "<br>";
echo "<pre>";
print_r(value:$myinfo);
echo "</pre>";

foreach($myinfo as $val){
    echo $val."<br>";
}

foreach($myinfo as $key=> $val){
    echo $key.":".$val."<br>";
}

// multidimensional array
$students=[
    ["q","r",5,true],
    ["a","f",3,false],
    ["d","g",4,false],
    ["g","h",8,true],
];

// echo "<pre>";
// print_r(value: $students);
// echo "</pre>";
// echo $students[0][1]."<br>";

// for($i=0; $i<count($students); $i++){
//    for($j=0; $j<count( $students[$i]); $j++){
//       echo $students[$i][$j]." "."<br><br>";
// }
// }

foreach($students as $std){
    foreach($std as $info){
        echo $info." "."<br> <br>";
    }
}

$students=[
    ["name"=>"jarif","city"=>"tangial","weight"=>70,"status"=>true],
    ["name"=>"jar","city"=>"tang","weight"=>72,"status"=>false],
    ["name"=>"jari","city"=>"tangil","weight"=>40,"status"=>true],
    ["name"=>"ja","city"=>"tangal","weight"=>76,"status"=>true],
];

// foreach($students as $stdd){
//     foreach($stdd as $infoo){
//         echo $infoo." "."<br>";
//     }
// }
foreach($students as $std){
  echo "student name:".$std["name"]." lives in".$std['city']."and his weight is".$std['weight']."and his status is".($std['status']? "active":"inactive")."<br>";
}


?>