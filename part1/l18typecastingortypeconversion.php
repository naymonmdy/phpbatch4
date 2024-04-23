<?php

//Data Type


//String
//bool
//int
//float
//array
//object
//unset

$val1= "hello";//String
var_dump($val1);
$result =(string) $val1;
var_dump($result);


$val2=20;//Integer
var_dump($val2);
$result=(string) $val2;
var_dump($result);//"20


$val3=true;//Boolean
var_dump($val3);
$result=(string) $val3;
var_dump($result);//true "1"  false = ""

$val4=20.23;//Float
var_dump($val4);
$result=(string) $val4;
var_dump($result);//"20.23"

$val5=Null; //null
var_dump($val5);
$result=(string) $val5;
var_dump($result) ;//string(0) " "


//=> cast to Integer

$val1= "hello";//String
var_dump($val1);
$result =(int) $val1;
var_dump($result);


$val2=20;//Integer
var_dump($val2);
$result=(int) $val2;
var_dump($result);//10


$val3=true;//boolean
var_dump($val3);
$result=(int) $val3;
var_dump($result);//1

$val4=20.23;//Float
var_dump($val4);
$result=(int) $val4;
var_dump($result);//20

$val5=Null; //null
var_dump($val5);
$result=(int) $val5;
var_dump($result) ;//0
 

//=> cast to Float

$val1= "hello";//String
var_dump($val1);
$result =(float) $val1;
var_dump($val1);


$val2=20;//Integer
var_dump($val2);
$result=(float) $val2;
var_dump($result);//10


$val3=true;//boolean
var_dump($val3);
$result=(float) $val3;
var_dump($result);//1

$val4=20.23;//Float
var_dump($val4);
$result=(float) $val4;
var_dump($result);//20.23

$val5=Null; //null
var_dump($val5);
$result=(float) $val5;
var_dump($result) ;//0



//=> cast to bool

$val1= "hello";//String
var_dump($val1);
$result =(bool) $val1;
var_dump($result);//true


$val2=20;//Integer
var_dump($val2);
$result=(bool) $val2;
var_dump($result);//true  if 0 false


$val3=true;//boolean
var_dump($val3);
$result=(bool) $val3;
var_dump($result);//true

$val4=20.23;//Float
var_dump($val4);
$result=(bool) $val4;
var_dump($result);//true

$val5=Null; //null
var_dump($val5);
$result=(bool) $val5;
var_dump($result) ;//false


//=> cast to Array

$val1= "hello";//String
var_dump($val1);
$result =(array) $val1;
var_dump($result);// array(1) { [0]=> string(5) "hello"}


$val2=20;//Integer
var_dump($val2);
$result=(array) $val2;
var_dump($result);//array(1) { [0]=> int(20) }


$val3=true;//boolean
var_dump($val3);
$result=(array) $val3;
var_dump($result);////array(1) { [0]=> bool (true) }

$val4=20.23;//Float
var_dump($val4);
$result=(array) $val4;
var_dump($result);//array(1) { [0]=> float(20.23) }

$val5=Null; //null
var_dump($val5);
$result=(array) $val5;
var_dump($result) ;//array()


//=> cast to Object

$val1= "hello";//String
var_dump($val1);
$result =(object) $val1;
var_dump($result);// object(stdClass)#1 (1) { ["scalar"]=> string(5) "hello"}



$val2=20;//Integer
var_dump($val2);
$result=(object) $val2;
var_dump($result);//


$val3=true;//boolean
var_dump($val3);
$result=(object) $val3;
var_dump($result);

$val4=20.23;//Float
var_dump($val4);
$result=(object) $val4;
var_dump($result);//

$val5=Null; //null
var_dump($val5);
$result=(object) $val5;
var_dump($result) ;//


//=> cast to Null value with unset

$val1= "hello";//String
var_dump($val1);
$result =(unset) $val1;
var_dump($result);// null

$val2=20;//Integer
var_dump($val2);
$result=(unset) $val2;
var_dump($result);//null


$val3=true;//boolean
var_dump($val3);
$result=(unset) $val3;
var_dump($result);//null

$val4=20.23;//Float
var_dump($val4);
$result=(unset) $val4;
var_dump($result);//null

$val5=Null; //null
var_dump($val5);
$result=(unset) $val5;
var_dump($result) ;//null