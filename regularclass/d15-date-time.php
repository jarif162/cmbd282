<?php
//date and time
date_default_timezone_set("Asia/Dhaka");
echo date("d/m/y")."<br>"; //output- 01/01/21
echo date("d/M/Y")."<br>"; //output- 01/Jan/2021

echo date("d/m/y D")."<br>"; //output- 01/01/21 Mon")."<br>";
echo date("d/M/Y l")."<br>"; //output- 01/Jan/2021 Monday")."<br>";

echo date("d/F/y D")."<br>"; //output- 01/January/2021 Mon")."<br>";

echo date("d/m/y D h:i:s a")."<br>";//output- 01/01/21 Mon 12:00:00")."<br>"; 12 hours am/pm

echo date("d/m/y D H:i:s A")."<br>";//output- 01/01/21 Mon 12:00:00")."<br>"; 24 hours Am/PM

//mktime(hour,minute,second,month,day,year)
$myBirthday=mktime(0,0,0,4,12,2025);

echo date("d/M/y l", $myBirthday)."<br>";

//strtotime()
$nextSunday=strtotime("next Sunday");
echo date("d/M/y l", $nextSunday)."<br>";

$nexty=strtotime("+1 year+1 month +1 day");
echo date("d/M/y l", $nexty)."<br>";

//print next 7 friday
$startDay=strtotime("Next saturday");
$endDay=strtotime("+7 weeks", $startDay);
echo date("d/M/y l", $startDay)."<br>";
echo date("d/M/y l", $endDay)."<br>";
while($startDay<=$endDay) {
    echo date("d/M/y l", $startDay)."<br>";
    $startDay=strtotime("+1 week", $startDay);
}

//date difference
$dob=date_create("2001-04-12");
$today=date_create(date("Y-m-d",strtotime("now")));
$diff=date_diff($dob,$today);
echo $diff->format("%y years %m months %d days");



?>