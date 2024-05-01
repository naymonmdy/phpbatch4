<?php

 function mycolor($color){
    if($color!=="red")
    {
        throw new Exception("I hate $color color");
    }
    return "Yes , my fav color is $color";
 }

  echo mycolor("red");



// if echo mycolor("black);
// PHP Fatal error:  Uncaught Exception: I hate black color in /HelloWorld.php:5
// Stack trace:
// #0 /HelloWorld.php(10): mycolor()
// #1 {main}
// thrown in /HelloWorld.php on line 5

function num ($base,$power){

    if($power>3)
    {
        throw new Exception("We not allow over this $power");
    }


    $result =pow($base,$power);
    return $result;
}

echo num(2,3);//8

// if echo num(2,9);
// PHP Fatal error:  Uncaught Exception: We not allow over this 9 in /HelloWorld.php:6
// Stack trace:
// #0 /HelloWorld.php(14): num()
// #1 {main}
// thrown in /HelloWorld.php on line 6


//==> try ....catch Statement

try {
    //code... to be executed
} catch (Exception $e) {
    //code to exception is catched
    
}



function mycolur($corlur){
    if($corlur!=="red"){
        throw new Exception("I hate $corlur color");
    }
    return "Yeah , my fav color is $corlur";
}


try {
    echo mycolur("black");
}catch(Exception $e)
{
    echo "You should not try with this color";
}


try {
    echo mycolur("black");
} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    echo mycolur("red");
} catch (Exception $e) {
    echo $e->getMessage();
}



// MYPOWE FUNCTION

function mypower ($base,$power){

    if($power>5)
    {
        throw new Exception("We not allow over this $power");
    }


    $result =pow($base,$power);
    return $result;
}

// echo mypower(2,6);

try{
    echo mypower(2,4);
}
catch(Exception $e){
    echo "You Should not over.".$e->getMessage();
}


try{
    echo mypower(2,6);
}
catch(Exception $e){
    echo "You Should not over.".$e->getMessage();
}


// TRY CATCH FINNALLY
//==> try ....catch ....finally Statement

function mycalculate ($base,$power){

    if($power>3)
    {
        throw new Exception("We not allow over this $power");
    }


    $result =pow($base,$power);
    return $result;
}

// echo mycalculate(2,4);


try {
    echo mycalculate(2,4);
} catch (Exception $e) {
    echo "You Should not over.".$e->getMessage();
}
finally{

    echo"<br/>";
    echo "Finally is always run whatever code is true or not";

}


echo mycalculate(2,2);//4
?>