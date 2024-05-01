<?php

// json_encode(array);

// json_decode(array,true);
// json_decode(array);

$color =["red","green","blue"];

echo $color;//echo can't print array
var_dump($color);//Arrayarray(3) {[0]=>string(3) "red"[1]=>string(5) "green"[2]=>string(4) "blue"}

$mycolors=json_encode($color);
echo $mycolors;//["red","green","blue"];
var_dump($mycolors);//string(22) ["red","green","blue"]


$student =["name"=>"aung aung","age"=>25,"city"=>"mandalay"];
var_dump($student);
echo $student["name"];
echo $student["age"];
echo $student["city"];


$studentinfos=json_encode($student);
echo $studentinfos;
var_dump($studentinfos);//string(47) "{"name":"aung aung","age":25,"city":"mandalay"}"
echo $studentinfos["name"];//error
echo $studentinfos["age"];//error
echo $studentinfos["city"];//error

//Decode by single parameter
$studentdatas='{"name":"aung aung","age":25,"city":"mandalay"}';
$studentdecode=json_decode($studentdatas);
var_dump($studentdatas);//object(stdClass)#1 (3) {["name"]=> string(9) "aung aung"["age"]=>int(25)["city"]=>string(8) "mandalay"}

//can print (object(stdClass) (->oject operator))

echo $studentdecode->name;
echo $studentdecode->age;
echo $studentdecode->city;

foreach ($studentdecode as $key => $value) {
    echo $key."is".$value."</br>.";
    # code...
}


//Decode by multi parameter
$studatas='{"name":"aung aung","age":25,"city":"mandalay"}';
$studecode=json_decode($studatas,true);//true is associate to get array
var_dump($studecode);//array(3) {["name"]=>string(9) "aung aung"["age"]=>int(25)["city"]=>string(8) "mandalay"}


echo $studecode["name"];//aung aung
echo $studecode["age"];//25
echo $studecode["city"];//city

//can't print with -> operateor
echo $studecode->name;//Trying to get property 'name' of non-object in /HelloWorld.php on line
echo $studecode->age;//Trying to get property 'name' of non-object in /HelloWorld.php on line
echo $studecode->city;//Trying to get property 'name' of non-object in /HelloWorld.php on line

?>