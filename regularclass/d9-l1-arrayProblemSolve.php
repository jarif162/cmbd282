<?php
//Check if all values are string or not

$va=["Good",50,"frog",true,"Sakib"];
function l($val){
    foreach($val as $d){
        if(is_string($d)){
            return " $d value is  string <br>";
        }else{
            return " $d  value is not  string <br>";
        }
    }
}

l($va);

//another

if(array_filter($va,"is_string")==$va){
    echo " $va value is  string <br>";
}else{
    echo " $va value is not string <br>";
}

$f=["g", "t", "j "];
 //array to string
echo "<pre>";
print_r(implode(",",$f));
echo "</pre>";
?>