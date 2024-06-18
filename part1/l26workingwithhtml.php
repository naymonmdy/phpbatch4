<?php
date_default_timezone_set("Asia/Yangon");
$getdate  = getDate();
$getYear  =$getdate['year'];

$getwday =$getday["wday"];//2


?>



<!DOCTYPE html>
<html>
    <head>
        <title>Working with HTML</title>
    </head>
    <body>
    <h1>Welcome to PHP Class</h1>
    <?php
        $time = time();
        $hour = date("H",$time); //date ("G",$time);

        if($hour<12)
        {
            echo 'Good morning';
        }
        else if( $hour < 18)
        {
            echo "Good Evening";
        }
        else if ($hour <22)
        {
            echo "Good Evening";
        }
        else{
            echo "Good Night";
        }
    ?>
    <?php
        if($getwday===0)
        {
            echo"Today is Sunday";
        }
        elseif($getwday===1)
        {
            echo"Today is Monday";
        }
        elseif($getwday===2)
        {
            echo"Today is Tuesday";
        }
        elseif($getwday===3)
        {
            echo"Today is Wednesday";
        }
        elseif($getwday===4)
        {
            echo"Today is Thuresday";
        }
        elseif($getwday===5)
        {
            echo"Today is Friday";
        }
        else
        {
            echo"Today is Saturday";
        }
    ?>
    <?php if($getdate===0):?>
        <p>Today is Sunday</p>
    <?php elseif($getdate===1):?>
        <p>Today is Monday</p>
    <?php elseif($getdate===2):?>
        <p>Today is Tuesday</p>
    <?php elseif($getdate===3):?>
        <p>Today is Wednesday</p>
    <?php elseif($getdate===4):?>
        <p>Today is Thuresday</p>
    <?php elseif($getdate===5):?>
        <p>Today is Friday</p>
    <?php else: ?>
        <p>Today is Saturday</p>
    <?php endif; ?>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet iure asperiores repellendus modi similique minus officiis rerum placeat ipsum, laborum optio nemo error id obcaecati, odit quae ut, saepe porro.
    </p>

    <footer>
        <small>Copyright <?php echo "$getyear" ?>. All right reserved.</small>
    </footer>
    </body>
</html>
