<?php
//if..else,elseif
$x=10;

if($x>=10){
    echo "Shorto puron hyse<br>";
}else{
    echo "shorto puron hoyni <br>";
}

//elseif
$age=60;

if($age<=12){
    echo "You are a baby";
}elseif($age<=19){
    echo "You are a teenager";
}elseif($age<=29){
    echo "You are a Young person";
}elseif($age<=49){
    echo "You are an middle person";
}elseif($age<=130){
    echo "You are an old person";
}else{
    echo "You are not a human";
}




//switch
 echo "<br>";
switch ($w=10){
    case 1:
        echo "OK";
        break;

    case  2:
        echo "no";
        break;
    
        default:
        echo "Done";
}

//ternary operator
echo "<br>";
$r=10;
// if($r>=10){
//     echo "Shorto puron hyse<br>";
// }else{
//     echo "shorto puron hoyni <br>";
// }

echo $r>=10? "Shorto puron hyse":"Shorto puron hoyni";  // if else shortcut

//null safe

echo "<br>";
// echo $myStudent ?? Null;

if(isset($jarif)){
    echo $jarif;
}else{
    echo Null;
}



?>

