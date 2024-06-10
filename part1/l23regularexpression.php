<?php
// 
$string ="We are family";

echo $string;

//preg_match(pattern,string)==>case sensitive

$result =preg_match("We are family",$string);//Error


$result =preg_match("/We are family/",$string);//true
$result =preg_match("/family/",$string);//true
$result =preg_match("/Family/",$string);//false
$result =preg_match("/mily/",$string);//true


// $ must be in end this character case sensitive
$result =preg_match("/mily$/",$string);//true
$result =preg_match("/family$/",$string);//true
$result =preg_match("/Family$/",$string);//false
$result =preg_match("/are$/",$string);//false
$result =preg_match("/we$/",$string);//false


// ^ must be start case sensitvive ,caret or circumfrence
$result =preg_match("/^mily/",$string);//false
$result =preg_match("/^we/",$string);//false
$result =preg_match("/^We/",$string);//true
$result =preg_match("%^are%",$string);//false
$result =preg_match("%^are#",$string);//false
$result =preg_match("!^We!",$string);//true

$result =preg_match("/^family$/",$string);  //false  note:: string must be exact  "family"
$result =preg_match("/^$/",$string);        //false  note:: string must be empty
$result =preg_match("/^We/i",$string);//true i use not case sensitive
$result =preg_match("/[a-f]/",$string);//true from to f with case sensitive
$result =preg_match("/[b-d]/",$string);//false
$result =preg_match("/[a-z]/",$string);//false
$result =preg_match("/[A-Z]/",$string);//true
$result =preg_match("/[0-4]/",$string);//false



$string ="my lucky number is 567";

$result =preg_match("/[0-4]/",$string);//false
$result =preg_match("/[5-9]/",$string);//true
$result =preg_match("/[A-Z]|[a-z]/",$string);//true
$result =preg_match("/[A-Z,a-z]/",$string);//true
$result =preg_match("/[A-Z]/",$string);//false
$result =preg_match("/[a-z]$/",$string);//false
$result =preg_match("/^[a-z]/",$string);//false
$result =preg_match("/^[5-9]/",$string);//false
$result =preg_match("/[5-9]$/",$string);//true


$result =preg_match("/[^5-9]/",$string);//true it's mean that not include 5 to 9 of other character space , or number
$result =preg_match("/[^a-z]/",$string);//true it's mean that not include a to Z of other character space , or number



$string ="admin@gmail.com";

$result=preg_match("/@/",$string);//true
$result=preg_match("/m/",$string);//true
$result=preg_match("/m+/",$string);//true
$result=preg_match("/b+/",$string);//false
$result=preg_match("/b*/",$string);//true
$result=preg_match("/b?/",$string);//true


$result=preg_match("/m{1}/",$string);//true
$result=preg_match("/m{2}/",$string);//true


$string ="adminn@gmail.com";
$result=preg_match("/n{1}/",$string);//true
$result=preg_match("/n{2}/",$string);//true
$result=preg_match("/n{3}/",$string);//false

$result=preg_match("/n{2,3}/",$string);//true
$result=preg_match("/n{2,}/",$string);//true


$string ="V8 Engine";
$result=preg_match("/\s/",$string);//true space
$result=preg_match("/\d/",$string);//true digit
$result=preg_match("/\D/",$string);//true no digit
$result=preg_match("/\w/",$string);//true word except special character
$result=preg_match("/\W/",$string);//false special character $#@

$string ="admin@gmail.com";
$result=preg_match("/a\wm/",$string);//true 
$result=preg_match("/a\w{1}m/",$string);//true 
$result=preg_match("/a\w{2}m/",$string);// false any 2 exact word   =>adbmin@gmail.com
$result=preg_match("/a\w{2,4}m/",$string);// false any 2  to 4 exact word =>adbcdmin@gmail.com
$result=preg_match("/a\w{2,}m/",$string);// false any 2 to more exact word  =>a........min@gmail.com


$result=preg_match("/a.m/",$string);// true c
$result=preg_match("/a..m/",$string);// false 
$result=preg_match("/a.{1}m/",$string);// true
$result=preg_match("/a.{2}m/",$string);// false    =>adbmin@gmail.com
$result=preg_match("/a.{2,4}m/",$string);// false  =>adbcdmin@gmail.com
$result=preg_match("/a.{2,}m/",$string);// false   =>a........min@gmail.com c

$string="PHP";
$result=preg_match("/.{2}/",$string);//true

$result=preg_match("/hp/",$string);//true
$result=preg_match("/p(hp)*/",$string);//true
$result=preg_match("/p(hp)+/",$string);//true


$string ="Vv";
$result=preg_match("/.{2}/",$string);//true
$result=preg_match("/^.{2}$/",$string);//exact 2 character


$string="Welcome to our <i>programming class</i>";

$result=preg_match("/<i><\/i>/",$string);//false
$result=preg_match("/<i>\w<\/i>/",$string);//false one char
$result=preg_match("/<i>\w*<\/i>/",$string);//false contained space
$result=preg_match("/<i>.<\/i>/",$string);//false one char
$result=preg_match("/<i>.*<\/i>/",$string);//true
$result=preg_match("/<i>(.*)<\/i>/",$string);//true


$string ="admin@gmail.com";
$result=preg_match("/^[A-z,a-z]+@[a-z]+\.\w{3}/",$string);//true this code to be email address or nor




//preg_replace(pattern,replacement,string)
$string ="I love PHP.";
preg_replace("/PHP/","Javascript",$string);    //I love Javascript
preg_replace("/php/i","Javascript",$string);    // i use for not case sensitive
preg_replace("/\s/","",$string);    // IlovePHP  \s use for space


//Bracket Expression
$string="admin123@gmail. com";
$result=preg_replace("/[[:space:]]/","",$string); // admin123@gmail.com
$result=preg_replace("/[[:space:]]/","x",$string); // admin123@gmail.xcom
$result=preg_replace("/[[:alpha:]]/","x",$string); // xxxxx123xxxxx. xxx
$result=preg_replace("/[[:digit:]]/","x",$string); // adminxxx@gmail. com
$result=preg_replace("/[[:alnum:]]/","x",$string); // xxxxxxxx@xxxxx. xxx
$result=preg_replace("/[[:puncg:]]/","x",$string); // admin123xgmailx com

$string="Admin123@gmail. Com";
$result=preg_replace("/[[:lower:]]/","x",$string); // Axxxxxxx@xxxxx. Cxx
$result=preg_replace("/[[:upper:]]/","x",$string); // xdmin123xgmail .xcom

$string ="Are you ready to learn PHP Framework";
$result =preg_replace(["/PHP/","/framework/"],["Javascript","libraries"],$string);//"Are you ready to learn Javascript Framework"
$result =preg_replace(["/PHP/","/framework/i"],["Javascript","libraries"],$string);//Are you ready to learn Javascript labraries"


$string="My Lucky number is 007 but i got ticket number 5700";
$result=preg_replace("/[0-9]/","x",$string);// My Lucky number is xxx but i got ticket number xxxx"
$result=preg_replace("/[0-9]+/","x",$string);// My Lucky number is x but i got ticket number x"


$string="My Lucky number is 007";
$result=preg_split("/\s/",$string);
// echo error array to conversion
echo "<pre>".print_r($result,true),"</pre>";
echo $result[0]; //My
echo $result[4]; //007

$result=preg_split("/\s/",$string,2);

echo "<pre>".print_r($result,true),"</pre>";
echo $result[0]; //My
echo $result[1]; //lucky number is 007

$string="My Lucky number is 007 but i got ticket number 5700";

$result=preg_split("/[\s,]/",$string,NUll,PREG_SPLIT_NO_EMPTY);
$result=preg_split("/[\s,]/",$string,0,PREG_SPLIT_NO_EMPTY);
$result=preg_split("/[\s,]/",$string,0,PREG_SPLIT_NO_EMPTY);
$result=preg_split("//",$string,NULL,PREG_SPLIT_NO_EMPTY);
$result=preg_split("//",$string);

echo "<pre>".print_r($result,true),"</pre>";

// pre_quote(string,delimeter)
$string="He\'s my father,do you known him?";
$result=preg_quote($string);// "He\\'s my father,do you known him \?"
$result=preg_quote($string,"0");// "He\\'s my father,d\o y\ou kn\own him \?"


// pre_match_all(pattern,string,match/return,flags)
$string="Winning number are 277-000 & 002-77 , but my ticket number are 007-222 $123456 ";
preg_match_all("/\d+-\d+/",$string,$result,PREG_SET_ORDER);
preg_match_all("/\d+-\d+/",$string,$result,PREG_PATTERN_ORDER);
// echo error
echo "<pre>".print_r($result,true),"</pre>";



// Lookahead $ Lookbehind
// (?=) positive Lookahead (or) regex lookahead =right hand side
// (?<=) positive Lookbehind (or) regex lookbehind =left hand side

// (?!) negative Lookbehind (or) regex lookbehind
// (?<!) negative Lookbehind (or) regex lookbehind

$string ="aungkyaw@ciso.com";
$result=preg_match('/@(?=ciso)/',$string);//true (positive lookahead,)
$result=preg_match('/(?<=@)ciso/',$string);//true (positive lookbehind)

$result=preg_match('/@(?!ciso)/',$string);//false (negative lookahead,)
$result=preg_match('/(?<!@)ciso/',$string);//false (negative lookbehind)

$result=preg_match('/#(?!ciso)/',$string);//true (negative lookahead,)
$result=preg_match('/(?<!#)ciso/',$string);//true (negative lookbehind)


//  $ must be in end (case sensitive) -->
// [] range a-z  A-Z 0-9
// m+ must contain al least one m and more
// m* can contain b or not and more
// m? can contain b or not and more
// i use for not case sensitive
// [a-f] use contain from a to f contain
// m{nth} contain place m as per nth and exact time
// m{nth,nth} contain place m as per nth from max to
// m{nth,} contain place m as per nth and from to max to
// \s space
// \d digit
// \D no digit
// \w word [a-z][A-Z][0-9]
// \W any #@!*
// . any character
// () this
// + must
// * any can be contain or not
// p(hp)*   can be contain hp
// p(hp)+   must be hp
// [[:space:]] space
// [[:alpha:]] alphabetic
// [[:digit:]] digit
// [[:alnum:]] alphanumeric
// [[:punct:]] puncturation #@!
// [[:lower:]] lowercase
// [[:upper:]] uppercase





echo $result;






?>
