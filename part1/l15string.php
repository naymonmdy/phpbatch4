<?php

//=> strlen (string) function

$words="Save Myanmar";
echo strlen($words);//12


//=>str_word_count(string) function
//=>str_word_count(string,return) function


//0 - default (string) 
//1 - return an array
//2 - return an array
$text="Save Myanmar Country";
echo str_word_count($text);//3
echo str_word_count($text,0);//3
echo "<pre>" .print_r(str_word_count($text,1),true)."</pre>";// [0] => Save[1] => Myanmar [2] => Country
echo "<pre>" .print_r(str_word_count($text,2),true)."</pre>";//   [0] => Save[5] => Myanmar [13] => Country


// ucwords (string) function to change capital letter (Upper Case)
// ucwords (string,delimeters) function

$country=" welcome to myanmar country,i live in yangon";
echo ucwords($country);// Welcome To Myanmar Country,i Live In Yangon
echo ucwords($country,",");//welcome to myanmar country,I live in yangon

// ucfirst() function
$message= "welcome to yangon,i live in tamwe";
echo ucfirst($message);//Welcome to yangon,i live in tamwe


// lcfirst() function
$msg= "Welcome to Yangon,I live in tamwe";
echo lcfirst($msg);//welcome to Yangon,I live in tamwe

 
//strtoupper(string) function
$string= "Welcome to my country";
echo strtoupper($string);//WELCOME TO MY COUNTRY


//strtolower(string) function
$str="WELCOME TO MY COUNTRY";
echo strtolower($str);//welcome to my country


//chunk_split(string,length,delimiter) function //video or files
$letters="Myanmar country";
echo chunk_split($letters,1,".");
echo chunk_split($letters,3,"-");



//strpos(string,find) function
//strrpos(string,find) function
//stripos(string,find) function
//strripos(string,find) function

$caption="Lorem Ipsum is simply dummy text of the printing and typesetting industry.Ipsum";
echo strpos($caption,"Ipsum");//6 (index number)
echo strrpos($caption,"Ipsum");//74 (index number) reverse
echo stripos($caption,"Printing");//40 (index number) i is not case censitive
echo strripos($caption,"ipsum");//74 (index number) i is not case censitive and reverse


//substr(string,start index/offset ,end length) function
$country ="Welcome Myanmar";
echo substr($country,0);//Welcome myanmar
echo substr($country,8);//Myanmar
echo substr($country,0,7);//Welcome
echo substr($country,0,9);//Welcome M

//str_replace(search,replace,string) function;
$topic = "Save Myanmar";
echo str_replace("Myanmar","CRPH",$topic);//Save CRPH

//substr_replace(string,replace,start index) function;
//substr_replace(string,replace,start index,end index) function;
$greeting= "Welcome Myanmar";
echo substr_replace($greeting,"Hello",0);//Hello 
echo substr_replace($greeting,"Hello",8);//Welcome Hello
echo substr_replace($greeting,"Thailand",8);//Welcome Thailand
echo substr_replace($greeting,"Hello",0,0);//HelloWelcome Myanmar
echo substr_replace($greeting,"Hello",0,7);//Hello Myanmar
echo substr_replace($greeting,"Hello",0,3);//Hellocome Myanmar


//trim() function remove space
//trim(string,characters) function 

$title =" Welcome to my country  ";
echo trim($title);//Welcome to my country


$subtitle ="Welcome to my country";
echo trim($subtitle,"Wel");//come to my country
echo trim($subtitle,"try");//Welcome to my coun




// ltrim ()  function left trim
// ltrim (string,character)

$sayhi="/Mingalarpar/";
echo ltrim($sayhi,"/");//   Mingalarpar/



// rtrim ()  function right trim
// rtrim (string,character)

$sayhello="/Mingalarpar/";
echo rtrim($sayhello,"/"); // /Mingalarpar


//str_repeat() Function
//str_repeat(string,count) Function

$love ="A Kyal Gyi";
echo str_repeat($love,3);

//strcmp(string1,string2) Function (case-sensitive)
//0 = if the two strings are equal
//<0 = if  strings1 is less than string2
//>0 = if  strings1 is greater than string2


echo strcmp("I love my job","I love my job");//0
echo strcmp("I love","I love my job");//-7
echo strcmp("I love my job","I love");//+7


//explode(seperator,string,limit index) funtion return array =>not echo 
$words ="welcome to my country";
echo"<pre>".print_r(explode(" ",$words),true)."</pre>";//Array([0] => welcome[1] => to[2] => my[3] => country
echo"<pre>".print_r(explode(" ",$words,0),true)."</pre>";//Array([0] => welcome[1]
echo"<pre>".print_r(explode(" ",$words,1),true)."</pre>";//Array([1] => welcome[1] => to my country[2]
echo"<pre>".print_r(explode(" ",$words,2),true)."</pre>";//Array([2] => welcome[1] => to[2]=> my country[3]


//implode(seperator,array)  array to string
$words = ["Welcome","to","my","country"];
echo implode(" ",$words);// Welcome to my country
echo implode("-",$words);// Welcome-to-my-country


//join(seperator,array)  array to string
$words = ["Welcome","to","my","village"];
echo join(" ",$words);// Welcome to my village
echo join("-",$words);// Welcome-to-my-village


//number_format(number) function 
//number_format(number,decimal) function 

echo number_format("100000");//1,000,000
echo number_format("100000",2);//1,000,000.00



// stripslashes(string) Function clear slashes in double code and sigle code
$str='he\'s my mother';
echo $str;//he's my mother

$str="he\'s my father";
echo $str;//he\'s my father;
echo stripslashes($str);//he's my father;


//basename(path) Function file uploading process
//basename(path,suffix) 

$path="./assets/img/cover.jpg";
echo($path);//./assets/img/cover.jpg
echo basename($path);//cover.jpg
echo basename($path,".jpg");//cover


//pathinfo(path) Function file path detail info into array

//pathinfo(path,flags)
// PATHINFO_DIRNAME
// PATHINFO_BASENAME 
// PATHINFO_EXTENSION
// PATHINFO_FILNAME 

$filepath="./assets/img/cover.jpg";
echo"<pre>".print_r(explode(" ",$filepath),true)."</pre>";
// Array
// (
//     [0] => ./assets/img/cover.jpg
// )

echo pathinfo($filepath["dirname"]);//./assets/img/cover.jpg
echo pathinfo($filepath["basename"]);//cover.jpg
echo pathinfo($filepath["filename"]);//cover

echo pathinfo($filepath,PATHINFO_DIRNAME);//./assets/img/cover.jpg
echo pathinfo($filepath,PATHINFO_BASENAME);// cover.jpg
echo pathinfo($filepath,PATHINFO_EXTENSION);//jpg
echo pathinfo($filepath,PATHINFO_FILENAME);//cover


?>