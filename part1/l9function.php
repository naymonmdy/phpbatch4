<?php

//User Function

// 1. function name(){

//     //code
// }
// 2. Parameter Function (or) Arguments Functions
// i Single 
// ii Multiple
// iii default parameter (0r) default arguments

function single($arg)
{

}
function multiple($arg1,$arg2)
{

}
function defaultParamenter($name="Aung Aung",$age=20) {

 
}

function myfun(){

    echo"My name is rich";
}
myfun();
myfun();


function myfun1(){

    $num1=10;
    $num2=39;
    $cal=$num1+$num2;

    echo $cal;

}

myfun1();

function singlefun($name){
    echo"My name is $name";
}

singlefun("aung aung");
singlefun("su su");

function multifun($name,$age){
    echo "my name is $name and my age is $age";
}

multifun("aung aung",30);
multifun("su su",23);

// <!-- ................................... -->
function multifun2($name="hla hla"){
    echo "my name is $name";
}

multifun2();  // hla hla
multifun2("su su"); //my name is su su



function sum($num1=10,$num2=30,$num3=40)
{
    $total=$num1+$num2+$num3;

    echo $total;
}

sum();//80
sum(50,20);// 110
sum(5,20,30);// 55

// Return

function myreturn($num1){
    $cal =$num1+10;

    return $cal;
    
}

echo myreturn(100);//110

function return1($num1){
    return $cal =$num1+10;
    
}

echo return1(200);//210



function returnfun2($num1,$num2,$num3){
    $cal=$num1+$num1+$num3;
    return $cal;
}
echo returnfun2(10,20,30);//60


function returnfun3($num1=10,$num2=20,$num3=30)
{
    $cal=$num1+$num2+$num3;
    return $cal;
}

echo returnfun3(50);//100
echo returnfun3();//60


//=> Dynamic Function call
$dyn1=myreturn(100);
echo $dyn1;//110

$dyn2=returnfun3();
echo $dyn2;//60

$dyn3="returnfun1";
echo $dyn3;//returnfun1
echo $dyn3(100);//110


$myfun="returnfun3";
echo $myfun;


if(function_exists($myfun))
{
    echo " Yes ,your variable value is already in some kind of function";
}
else
{
    echo "No";
}


?>

