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
$result =preg_match("/^We/",$string);//false
$result =preg_match("/^we/",$string);//true
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
$result =preg_match("/[A-Z]/",$string);//false
$result =preg_match("/[a-z]$/",$string);//false
$result =preg_match("/^[a-z]/",$string);//false
$result =preg_match("/^[5-9]/",$string);//false
$result =preg_match("/[5-9]$/",$string);//true


$result =preg_match("/[^5-9]/",$string);//true it's mean that not include 5 to 9 of other character space , or number
$result =preg_match("/[^a-z]/",$string);//true it's mean that not include a to Z of other character space , or number

//  $ must be in end (case sensitive) -->
// [] range a-z  A-Z 0-9
// m+ must contain al least one m and more
// m* can contain b or not and more
// m? can contain b or not and more
// i use for not case sensitive
// [a-f] use contain from a to f contain
// m{nth} contain place m as per nth and more
// m{nth,nth} contain place m as per nth and more
// m{nth,} contain place m as per nth and more
// \s space
// \d digit
// \D no digit
// \w word [a-z][A-Z][0-9]
// \W any word #@!
// . any character
// () this
// + must
// * can
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
