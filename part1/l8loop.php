<?php
// PHP Loop

//for  / foreach  /while  /dowhile

$colorsones=["red","green","blue","white","gray","pink"];

echo count($colorsones);
var_dump($colorsones);


$colorsoneskey=array_keys($colorsones);
//echo($colorsones)  ; error
var_dump($colorsoneskey);



for($i=0;$i<count($colorsones);$i++)
{
   // echo "index number is= ".$i." and value is =".$colorsones[$i]."<br>";
    echo "index number is= ".$colorsoneskey[$i]." and value is =".$colorsones[$i]."<br>";


}

// FOR EACH (values as value )
foreach ($colorsones as  $colorsone) {
    # code...
    echo"This is indexed array or normal array foreach =".$colorsone;
}
foreach ($colorsones as $key => $colorsone) {
    # code...
    echo  "This is indexed array or normal array foreach index key is = ".$key." and the value is = ".$colorsone;
}

$x=0;
while ($x <= count($colorsones)) {

    echo $colorsones[$x];
    $x++;
    # code...
}
$y=0;
do{
    echo  "This is indexed array or normal array foreach index key is = ".$colorsones[$y]." and the value is = ".$colorsone;
    $y++;
}
while($y<count($colorsones));




?>