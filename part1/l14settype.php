<?php



//==>Settype(variable,type) function

$val1="50";
echo gettype($val1);//String


settype($val1,"integer");
echo gettype($val1);//integer


$val2=100;
echo gettype($val2);
settype($val2,"string");
echo gettype($val2);
echo ($val2);


$val3=true;
echo gettype($val3);
settype($val3,"integer");
echo gettype($val3);
echo ($val3);

$val4=false;
echo gettype($val4);
settype($val3,"string");
echo gettype($val4);
echo ($val4);

?>