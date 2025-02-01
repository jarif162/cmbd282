<h1 style="color:black; " >Problem solve:</h1>

<?php
//i. Electric bill calculation (For first 50 units – 3.50 tk/unit For next 100 units – 4.00 tk/unit For next 100 units – 5.20 tk/unit For units above 250 – 6.50 tk/unit)

$unit=300;
$bill=0;

if($unit<=50){
    $bill=50*3.50;   
}elseif($unit<=150){
    $bill=(50*3.50)+($unit-50)*4;
}elseif($unit<=250){
    $bill=(50*3.50)+(150-50)*4+(250-150)*5.20;
}else{
    $bill=(50*3.50)+(150-50)*4+(250-150)*5.20+($unit-250)*6.50; 
    echo "Total bill for $unit is: $bill";
}

echo "<br>";
//ii. A PHP calculator using switch case (Addition, Subtraction, Multiplication, Division)
$a=10;
$b=5;
$operator="Subtraction"; //Replace this with Addition, Subtraction, Multiplication, Division
switch($operator){
    case "addition":
       $result=$a+$b;
       echo "the addition result is :$result"; 
       break;
    case "Subtraction":
        $result=$a-$b;
        echo "the result is :$result"; 
        break;
    case "Multiplication":
        $result=$a*$b;
        echo "the result is :$result"; 
        break;
    case "Division":
        $result=$a/$b;
        echo "the result is :$result"; 
        break;
    default:
       echo "Invalid operator. Please use +, -, *, or /.";

}

echo "<br>";
//Check if a person is eligible to vote by age
$Legalage=18; // Replace with the person's age
 if($Legalage>=18){
    echo "person is eligible to vote by age";
 }else{
    echo "person is not eligible to vote by age";
 }

 echo "<br>";

// Check if a person is eligible for marriage in BD by gender.

$mage=21;
$gender="male";
if($gender=="female"){
    if($mage<=18){
        echo "person is eligible for marriage in BD by gender.";
    }else{
        echo "person is not eligible for marriage in BD by gender.";
    }
}elseif($gender=="male"){
    if($mage<=21){
        echo "person is eligible for marriage in BD by gender.";
    }else{
        echo "person is not eligible for marriage in BD by gender.";
    }
}

echo "<br>";
//Check if number is positive or negetive
$Nmber=-3;
 
if($Nmber>=0){
    echo "Number is Positive";
}else{
    echo "Number is not positive";
}


//Check if number is odd or even vii. Check if data is integer or string

echo "<br>";
$nUm=10;

if(is_integer($nUm)){
    echo "This is an integer <br>";

    if($nUm%2==0){
        echo "This is even number";    
}else{
    echo "This is odd number";
}
}elseif(is_string($nUm)){
    echo "This ia string";
}else{
    echo "Neither this is string or integer";
}




?>