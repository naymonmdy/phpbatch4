<?php   
//1 jan 1970 UTC

// $getdate =new Date(); in JS
// https://www.php.net/manual/en/timezones.asia.php

date_default_timezone_set("Asia/Yangon");




$getdate = getDate();

var_dump($getdate);

echo "<pre>".print_r($getdate,true)."</pre>";


echo "This is second = ".$getdate["seconds"];
echo "This is minutes = ".$getdate["minutes"];
echo "This is hours = ".$getdate["hours"];


echo "This is weekday =".$getday["weekday"];// Tuedsay
echo "This is wday =".$getday["wday"];//0sun 1mon 2tue 3wed
echo "This is yday =".$getday["yday"];//65 day of year

echo "This is month =".$getday["month"];//March
echo "This is mon =".$getday["mon"];//3 March
echo "This is mday =".$getday["mday"];//5 day
echo "This is year =".$getday["year"];//2024


echo "This is 0 =".$getdate["0"];

$time=time();
echo "This is 0 =".$time;

//DATE TIME FOMAT
//date (format,timestampe);
$date=date('a',$time);
echo "This is format a=".$date; //am pm


$date=date('A',$time);
echo "This is format a=".$date; //AM PM

$date=date('g',$time);
echo "This is format g =".$date; //10 hours no leading zero 


$date=date('G',$time);
echo "This is format G =".$date; //24 hours  no leading zero 


$date=date('H',$time);
echo "This is format H =".$date; //24 hours  leading zero 


$date=date('h',$time);
echo "This is format  h=".$date; //10 hours leading zero 

$date=date('i',$time);
echo "This is format i =".$date; //01/ minute


$date=date('j',$time);
echo "This is format  j=".$date; //5 // day of month no leading zero

$date=date('l',$time);
echo "This is format  l=".$date; //Tuesday

$date=date('L',$time);
echo "This is format  L=".$date; //1 (leap year =ture)

$date=date('m',$time);
echo "This is format  m=".$date; //03 //day of month leading 0

$date=date('M',$time);
echo "This is format  M=".$date; //Mar // (Jan/feb)

$date=date('n',$time);
echo "This is format  n=".$date; //03 //day of month 

$date=date('r',$time);
echo "This is format r=".$date; //date time formate 05 Mar 2024 23:11:51 +0630

$date=date('s',$time);
echo "This is format  s=".$date; //57 seconds

$date=date('U',$time);
echo "This is format  U=".$date; //milliseconds

$date=date('y',$time);
echo "This is format  y=".$date; //24 year short code

$date=date('Y',$time);
echo "This is format  Y=".$date; //2024 

$date=date('z',$time);
echo "This is format  z=".$date; //64  days 

?>