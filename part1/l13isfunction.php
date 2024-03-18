<?php

// Check variable Type

// is_string(variable) Function

$val1 ="Save Myanmar";
echo "val1 is ".is_string($val1);//1
echo var_dump($val1);  //string(12) "Save Myanmar"
echo gettype($val1);//string


$val2= 0;
echo " val2 is ".is_string($val2);//



$val3= 50;
echo " val3 is ".is_string($val3);//


$val4= "50";
echo " val4 is ".is_string($val4);//1


$val5= true;
echo " val5 is ".is_string($val5);//


$val6= "";
echo " val6 is ".is_string($val6);//1



// is_numeric(variable) function

$val7=50;
echo "val7 is ".is_numeric($val7);//1
echo "val7 is ".is_int($val7);//1
echo "val7 is ".is_integer($val7);//1
echo gettype($val7);//integer


$val8=34.56;
echo "val8 is ".is_numeric($val8);//1
echo "val8 is ".is_int($val8);
echo "val8 is ".is_integer($val8);
echo gettype($val8);//float
echo gettype($val8);//double


$val9="50";
echo "val9 is ".is_numeric($val9);//1
echo "val9 is ".is_int($val9);
echo "val9 is ".is_integer($val9);


// is_float(variable) function

$val9=40;
echo "val9 is".is_float($val9);//

$val10=40.23;
echo "val10 is".is_float($val10);//1

$val11="40.23";
echo "val11 is".is_float($val11);//



// is_null(variable) function

$val9=0;
echo "val9 is".is_null($val9);//

$val10=null;
echo "val10 is".is_null($val10);//1

$val11=Null;
echo "val11 is".is_null($val11);//1

$val13=NUll;
echo "val13 is".is_null($val113);//1

$val12="Null";
echo "val11 is".is_null($val12);//


//is_array(variable) function
$valarray=["su su","nu nu","aung aung"];
echo "valarray is ".is_array($valarray);//1
echo var_dump($valarray);
echo gettype($valarray);

//is_bool(variable) function
$val11=true;
echo "val11 is".is_bool($val11);//1


$val12=false;
echo "val11 is".is_bool($val12);//1

//==> empty(variable)  VS isset(variable) and use in clicking button 
// Note :: the following values are Empty
// 0  , 0.0 , "0" , "" ,Null,false,[]

$val21= [];


if(empty($val21)){

    echo " Your variable is Empty";
}

if(isset($val21)){
    echo "Your variable with value";
}
else{
    echo "Your variable without value";
    
}

//isset ()  ,unset() to use remove value from variable
    $city="Yangon";
    $country="Thailand";

    echo isset($city)? "Yes" :"No";
    echo $city;//Yangon
    echo $country;//Thailand

    unset($city,$country);
    echo $city;//undefined
    echo $country;//undefined

?>