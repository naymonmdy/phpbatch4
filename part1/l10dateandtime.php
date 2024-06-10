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


// Date Create funtion ,date_create(time,optional timezone) with date_format(timestamp,"Y/m/d") with date_diff(new,old)
    // eg. date_create(timestamp, timezone_one("Asia/Yangon"))


    $date1=date_create("10-01-2024");
    echo date_format($date1,"Y/m/d");


    $date2=date_create("15-05-2024");
    echo date_format($date2,"Y-m-d");

    $datediffone = date_diff($date1,$date2);
    echo  $datediffone->format("%d days");//5 Days
    echo  $datediffone->format("%m month");//4 month
    echo  $datediffone->format("%y year");//0 year
    echo  $datediffone->format("%Y Year");//00 year


    $getdate = getDate();
    $date3="{$getdate['mday']}-{$getdate['mon']}-{$getdate['year']}";
    echo $date3;//10/6/2024
    $date4=date_create($date3);
    echo date_format($date4,"Y-m-d");

    $datedifftwo=date_diff($date4,$date2);
    echo  $datedifftwo->format("%d days");//5 Days
    echo  $datedifftwo->format("%m month");//1 month
    echo  $datedifftwo->format("%y year");//0 year
    echo  $datedifftwo->format("%Y Year");//00 year


    //R mean plus or minus and a mean all effect in day month year
    echo $datedifftwo->format("%R%a days"); 



?>