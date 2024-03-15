<?php


$num1=300;
$num2=400;

// Global Variable Keyword
function sum(){ 
    global $num1,$num2;
    global $result;

    $result=$num1+$num2;

    echo "This is result , print by sum= $result";
}

sum();
echo "The local variable outside value is =$result";


function sum2(){

    $GLOBALS['sum']=$GLOBALS['num1']+$GLOBALS['num2'];
    // echo "This is sum ,print by sum2, = $sum";  // Undefined variable sum


}

sum2();
echo "Local variable print outside =$sum";// Local variable print outside=700;





//Static Keyword increasing ++
function sum3(){
    $num1 =800;
    $num1++;
    echo$num1;

}
sum3();//800
sum3();//800
sum3();//800
sum3();//800


function sum4(){
    static $num1 =800;
    $num1++;
    echo$num1;

}
sum4();//801
sum4();//802
sum4();//803
sum4();//804
sum4();//805

 
// Passing by reference (pr &)

$a=100;

function sum5($a){
    $a=120;
    echo $a;

}
echo $a;//100
sum5($a);//120
echo($a);//100


$b=1000;

function sum6(&$b){
    $b=1200;
    echo $b;

}
echo $b;//1000
sum6($b);//1200
echo($b);//1200




?>