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


//=>array_key(array,value) function
//=>array_key(array,value,strict) function

$phones =["mpt"=>"ftth","orredoo"=>"broadband","telenor"=>"wifi"];;
echo "<pre>".print_r(array_keys($phones),true) ."</pre>";//array

echo "<pre>".print_r(array_keys($phones,"broadbrand"),true) ."</pre>";//orredoo
echo array_keys($phones,"broadbrand")[0];//orredoo

$numbers=[10,20,30,"10"];
echo "<pre>".print_r(array_keys($numbers,"10"),true)."</pre>"; //index 0 and index 3
echo "<pre>".print_r(array_keys($numbers,10),true)."</pre>"; //index 0 and index 3

echo "<pre>".print_r(array_keys($numbers,10,false),true)."</pre>"; //index 0 and index 3
echo "<pre>".print_r(array_keys($numbers,"10",false),true)."</pre>"; //index 0 and index 3

echo "<pre>".print_r(array_keys($numbers,10,true),true)."</pre>"; //index 0
echo "<pre>".print_r(array_keys($numbers,"10",true),true)."</pre>"; //index 3



//array_ma(callback,array1,array2,array3,....) function
$male=["tun tun","aung aung","kyaw kyaw","thura","zaw zaw"];
$female=["hla hla","su su","yu yu","nu nu","thida"];

function genderone($name)
{
    return("Mr.".$name);
}
function gendertwo($male,$female){
    return ("Mr.".$male." And Ms.".$female);
}

echo "<pre>".print_r(array_map("genderone",$male),true)."</pre>";
echo "<pre>".print_r(array_map("gendertwo",$male,$female),true)."</pre>";





//sort (array) function
$cars=["vilvo","bmw","toyota","ford","audi"."mazda"];
sort($cars);
echo "<pre>".print_r($cars,true)."</pre>";
// [0] => audimazda
// [1] => bmw
// [2] => ford
// [3] => toyota
// [4] => vilvo

$number=[10,50,"80",90,35,"100",130,"250",70];
sort($number);
echo"<pre>".print_r($number,true)."</pre>";
// [0] => 10
// [1] => 35
// [2] => 50
// [3] => 70
// [4] => 80
// [5] => 90
// [6] => 100
// [7] => 130
// [8] => 250


//==>array _multisort(array) equal sort function
$carsbrand=["vilvo","bmw","toyota","ford","audi"."mazda"];
array_multisort($carsbrand);
$luckynumber=[10,50,"80",90,35,"100",130,"250",70];
array_multisort($luckynumber);

//==>array _reverse(array) equal sort function
$carsbrand=["vilvo","bmw","toyota","ford","audi"."mazda"];
sort($carsbrand);
echo"<pre>".print_r(array_reverse($carsbrand),true)."</pre>";


$luckynumber=[10,50,"80",90,35,"100",130,"250",70];
sort($luckynumber);
echo"<pre>".print_r(array_reverse($luckynumber),true)."</pre>";


//array_pad(array,length,value) filling array
$colors=["red","green"];
echo"<pre>".print_r(array_pad($colors,5,"blue"),true)."</pre>";
// [0] => red
// [1] => green
// [2] => blue
// [3] => blue
// [4] => blue


//array_reduce(array,callback,initial)   sum array
$number=[10,50,"80",90,35,"100",130,"250",70];
function calfun($total,$val){
    return $total+=$val;
}
// echo array_reduce($number,"calfun",0);//815
echo array_reduce($number,"calfun",10);//825


//array_pop(array) Function
$colors=["red","green","blue"];
$array_pop($colors);
echo"<pre>".print_r($colors,true)."</pre>";


//array_search(valuearray) Function
$myarr=["a","b","c","d","e"];
echo array_search("a",$myarr);//0

$colors=["a"=>"red","b"=>"green","c"=>"blue"];
echo array_search("green",$colors);//b


//array_unshift(array) to add value in front
$colors=["red","green","blue"];
array_unshift($colors,"silver","white");
echo"<pre>".print_r($colors,true)."</pre>";

//array_push(array) to add value in back
$colors=["red","green","blue"];
array_push($colors,"silver","white");
echo"<pre>".print_r($colors,true)."</pre>";
?>