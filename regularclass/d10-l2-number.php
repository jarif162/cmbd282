<?php
//built-in numeric function
// abs()
echo abs(-10)."<br>";
echo abs(10)."<br>";

//ceil()
echo ceil(10.5)."<br>";
echo ceil(10.4)."<br>";

//floor()
echo floor(10.5)."<br>";
echo floor(10.4)."<br>";

//round()
echo round(10.5)."<br>";
echo round(10.14454,2)."<br>";

//decimal accept 2 digits after point wihout rounding
echo number_format(10.10,2)."<br>";

//is_numeric
echo is_numeric("hello")."<br>";//0
echo is_numeric(10)."<br>";  //1
echo is_numeric("12.3.4")."<br>";//0
echo is_numeric(30)."<br>"; //1

//decimal accept 2 digits after point wihout rounding
echo number_format(10.456,2)."<br>";


 
?>