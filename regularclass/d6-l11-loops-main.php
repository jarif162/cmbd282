<?php
//while loop

/**
 * starting point
 * increment/decrement
 * ending point
 * 
 */

 $x=0;
 while($x<10){
    echo"<br>".$x."<br>";
    $x+=1;
 }
 echo "<br>";

 //do while
 $y=15;
 while($y<10){
    echo "$y <br>";
    $y++;
 }

 $j=0;
 do{
    echo "do while <br>";
    $j++;  
 }while($j<10);

 echo "<br>";

 //for loop

 for($i=0; $i<10;$i++){
    echo "Done for loop<br>" ;
 }

 echo "<br>";

 for($l=1;$l<10;$l+=2){
    echo $l;
 }

 echo "<br>";

 for($r=1;$r<=100;$r++){
    if($r>7 && $r%7==6){
        echo "<br>The number is $r <br>";
    }
    else{
        echo "<br>The remain number is $r";
    }
 }

 echo "<br>";
 echo "<br>";
$g=3;
 for($t=1; $t<=10;$t++){
    echo "$g x $t=".$g*$t ."<br>";
 }

 echo "<br>";
//break 
 for($i=0;$i<10; $i++){
    if($i==5){
        break;     //break keyword use
    }
    echo "$i <br>";
 }

 //continue
 echo "<br>";
 for($i=0;$i<10; $i++){
    if($i%3===0){
        continue;     //continue keyword use
    }
    echo "$i <br>";
 }

 echo "<br>";
 //foreach
 $st = ["a","b","c","d"];
 foreach($st as $name){
    echo "$name <br>";
 }

 
?>