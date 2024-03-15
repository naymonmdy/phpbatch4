<?php
// ==>Super GlobaL Varible

// 1. $GLOBALS
// 2. &_SERVER
// 3. &_REQUEST
// 4. $_GET
// 5. $_POST
// 6. $_FILES
// 7. $_ENV
// 8. $_COOKIE
// 9. $_SESSION




// 1. $GLOBALS
$x=100;
$y=200;

function sumresult()
{
   $GLOBALS['total']=$GLOBALS['x']+$GLOBALS['y'];
    return $GLOBALS['total'];
}

sumresult();
echo $total;//300

echo $GLOBALS['total'];//300




// 2. &_SERVER
echo $_SERVER["PHP_SELF"];// to get file path 
echo $_SERVER["HTTP_USER_AGENT"];// get browser information
echo $_SERVER["HTTP_HOST"];
echo $_SERVER["SERVER_NAME"];
echo $_SERVER["SERVER_SOFTWARE"];
echo $_SERVER["SERVER_PORT"];
echo $_SERVER["SERVER_PROTOCOL"];
echo $_SERVER["SERVER_SIGNATURE"];
echo $_SERVER["REQUEST_METHOD"];
echo $_SERVER["REMODE_ADDR"];
echo $_SERVER["SCRIPT_NAME"];
echo $_SERVER["SCRIPT_FILENAME"];
echo $_SERVER["QUERY_STRING"];






?>