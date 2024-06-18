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
                        echo $_SERVER["HTTP_HOST"];//get ip address name 
                        echo $_SERVER["SERVER_NAME"];//get domain name
                        echo $_SERVER["SERVER_SOFTWARE"];//Apache for webserver
                        echo $_SERVER["SERVER_PORT"];// to get port number eg.80
echo $_SERVER["SERVER_PROTOCOL"];//http1.1 version
echo $_SERVER["SERVER_SIGNATURE"];//Aparch  server information
                        echo $_SERVER["REQUEST_METHOD"];//GET method or push /post/delete
echo $_SERVER["REMODE_ADDR"];//::1
                        echo $_SERVER["SCRIPT_NAME"];// to get absolute name file path
                        echo $_SERVER["SCRIPT_FILENAME"];//to get absolute name file path
                        echo $_SERVER["QUERY_STRING"];//to serch all data with ?






?>