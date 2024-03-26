<?php   
//array_combine(key,value) Function

$name=array("aung aung","su su","kyaw kyaw","hla hla");
$age=[30,25,35,40];

$result=array_combine($name,$age);

echo "<pre>".print_r($result,true) ."</pre>";//Array([aung aung] => 30[su su] => 25[kyaw kyaw] => 35[hla hla] => 40)
echo $result["kyaw kyaw"];//35




//count(array) function start from 1
$vehicles=["toyota","ford","audi"."mazda","suzuki","ford","mazda","bmw"];
echo count($vehicles);//8 started point 1

//array_count_values(array) function case sensitive and count same values
$cars=["toyota","ford","audi"."mazda"];
echo "<pre>".print_r(array_count_values($cars),true) ."</pre>";//Array([toyota] => 1[ford] => 1[audimazda] => 1)

$brands=["toyota","ford","audi"."mazda","suzuki","ford","mazda","bmw"];
echo "<pre>".print_r(array_count_values($brands),true) ."</pre>";//Array([toyota] => 1[ford] => 2 [audimazda] => 1[suzuki] => 1[mazda] => 1[bmw] => 1

?>