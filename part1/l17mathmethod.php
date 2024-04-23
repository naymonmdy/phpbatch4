<?php   

// floor (number) function
echo floor(-32.64);//-33
echo floor(-32.34);//-33

// ceil(number) function
echo ceil(-32.64);//-32
echo ceil(-32.34);//-32

// max (number) function
$num=[1,4,2,42,53,2,0,10];//53
echo max($num);

// min (number) function
$num=[1,4,2,42,53,2,0,10];//0
echo min($num);

// pow (base,exponent) function
echo pow(2,4);//16
echo pow(3,3);//27


// log (number,base) function
echo log(10,2);//3.3219280948874
echo log(20,2);//4.3219280948874
echo log(80,2);//6.3219280948874

// sqrt (number) function
echo sqrt(4);//2
echo sqrt(16);//4
echo sqrt(81);//9
echo sqrt(-4);//NAN

//rand () function
echo rand();
echo getrandmax();
//randbetween () fuction
echo rand(1000,10000);


//
$user=["aung","naug","kyaw","zaw","nu","mu","su","hla"];
echo $user[rand(0,7)];
echo $user[rand(0,count($user))];

//microtime () function => very short interval of time , as 0.01 milion of a second
echo microtime();//0.83715900 1713800436
echo microtime(true);//1713800513.2505

//unique id (ture)
echo uniqid();//6626863f058a1

//number_format(number,decimal) function
//number_format(number,decimal,decimal-seperator,thounsand-separator) function
echo number_format(1500,2);//1,500.00
echo number_format(1250000,2);//1,250,000.00
echo number_format(1250000,2,"-","/");//1/250/000-00


?>