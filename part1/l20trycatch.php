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

//==> try ....catch ....finally Statement

try {
    //code... to be executed
} catch (Exception $e) {
    //code to exception is catched  
}
finally{
    //alway run and active s regardless of weather an exception was catch or not !
}


?>