<?php
//Array
//(i) Indexed Array (Manual)
//(ii) Associated Array
//(iii) Multidementional Array

// (i) Indexed Array (Manual)

$name=array ("naymon","naung naung","myo min","kyaw kyaw","Tun Tun");
// echo $name;  error
// print $name; error


echo count($name);//5
var_dump($name);
print_r($name,true);


$color=["red","green","white","blue","pink"];
echo count($color);
print_r($color,false);//default false
echo "<pre>".print_r($color,true)."</pre>";

$color[6]="dark";
$color[7]="gray";
$color[0]="violet";//overide


//(ii)Associated Array 
$news=array ("pone"=>"this is post one","ptwo"=>"this is post two","pthree"=>"this is post three");
$media=[
    "pone"=>"this is post one",
    "ptwo"=>"this is post two",
    "pthree"=>"this is post three",
];

$media["pfour"]="this is post four";
var_dump($media);
echo count($news);

echo"I like this post.so post title is".$media["pthree"];
echo "<pre>".print_r($media,true)."</pre>";
echo "<pre>".print_r($news,true)."</pre>";

// (iii) Multidemensional Array
$paint = array(
    array ("red","green","orange"),
    array ("pen","book","ruler"),
    array ("paper","plastic")
);

// $paint =[
//     ["red","green","orange"],
//     ["pen","book","ruler"],
//     ["paper","plastic"]];



echo count($paint);
var_dump($paint);


$viperpersons=array (
array("name"=>"aung","age"=>34),
array ("name"=>"mg","age"=>31),
array ("name"=>"myo","age"=>45));

$viperpersons=[["name"=>"aung","age"=>34],
["name"=>"mg","age"=>31],
["name"=>"myo","age"=>45],];



echo count($viperpersons);
var_dump($viperpersons);

echo $viperpersons[0]["name"];//aung
echo $viperpersons[0]["age"];//34

echo $viperpersons[2]["name"];//myo
echo $viperpersons[1]["age"];//31

    




?>