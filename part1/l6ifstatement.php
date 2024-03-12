<?php
//=> if statment

$x=10;
$y=20;

if($x < $y){

    echo"x is smaller than y";
}
else if ($x>$y)
{
    echo"x is greater than y";
}
else{
    echo"x is equal to y";
}
//=> Short Hand if single line

if($x<$y) echo "yes, x is less than y";else echo "No,x is greter than y";


$color="gray";
$colorvalue=$color;

echo $color;
echo $colorvalue;


if($colorvalue==="red")
{
    echo"My fav color is red";
}
else{
    echo "My fav color is $colorvalue";
}


// Logical Operator (And , or ,not )==> && ,|| ,!

$a=100;
$b=200;
$c=300;

if($a < $b && $a>$c)
{
    echo "It is true";
}
else{
    echo " It is false";
}


// true       false        false
//ture                     false ==>false

if(($a < $b || $b >$c)&& $a>$c)
{
    echo "It is true";
}
else{
    echo " It is false";
}



if (!($a<$b))
{
    echo "It is true";
}
else
{
    echo " It is false";
}

//Switch
// switch (){
//     case stm1: 
//         code to be executed;
//         break;
//     case stm2: 
//         code to be executed;
//         break;
//     default: 
//          code to be executed;
//          break;
// }

$phone="iphone";
switch ($phone) {
    case 'sony':
        echo"it is sony";
        break;
     case 'samsung':
        echo"it is samsung";
        break;
    case 'mi':
        echo"it is mi";
        break;
    default:
        echo"it is iphone";
        break;
}





?>