<?php

// Comparison Operator
// ==
// ===
// != not equal (or)  <> in php
//!== not equal with data type
//>
//<
//>= and <=
//? (Ternary Operator)]
// echo(stm1 comp stm2) ? true:false;
$num1=10;
$num2="10";
echo $num1==$num2 ?"your conidtion is true":"your condition is false";//true
echo ($num1 ==$num2) ?"your conidtion is true":"your condition is false";//true
echo ($num1 === $num2) ?"your conidtion is true":"your condition is false";//false

echo ($num1 != $num2) ?"your conidtion is true":"your condition is false";//false
echo ($num1 <> $num2) ?"your conidtion is true":"your condition is false";//false
echo ($num1 !== $num2) ?"your conidtion is true":"your condition is false";//true

$num3=10;
$num4=20;
echo ($num3 > $num4) ?"your conidtion is true":"your condition is false";//false
echo ($num3 < $num4) ?"your conidtion is true":"your condition is false";//true
echo ($num3 >= $num4) ?"your conidtion is true":"your condition is false";//false
echo ($num3 <= $num4) ?"your conidtion is true":"your condition is false";//true



?>