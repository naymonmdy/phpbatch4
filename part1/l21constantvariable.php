<?php

//  Constant Variable

define("variblename","value");
//string/int/boolean/float
//variable name should be uppercase
//redefine are deny


define("FULNAME","Honey Nway Oo");
echo FULNAME;//Honey Nway Oo;

define("FULLNAME","Ma Ma Mya");
echo FULNAME;//Honey Nway Oo

define("DB_HOST","localhost");
echo"</br>";

define("DB_USER","root");
echo"</br>";

define("DB_PASS","123456");
echo"</br>";

define("DB_NAME","phpdbone");
echo"</br>";



echo DB_HOST,DB_USER,DB_PASS,DB_HOST;


// constant(variable) function
echo constant(DB_HOST);
echo "</br>";

echo constant(DB_USER);
echo "</br>";

echo constant(DB_PASS);
echo "</br>";

echo constant(DB_NAME);
echo "</br>";


const MESSAGE="Hello wecome from PHP and you are ready to learn PHP concept";
echo MESSAGE;
echo constant("MESSAGE");


const MESSAGE="Hello wecome from Javascript and you are ready to learn JavaScrip concept";
echo MESSAGE;
echo constant("MESSAGE");
?>