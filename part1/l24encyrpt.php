<?php

function setpassword($plaintext){
    $passcode=$plaintext;
    echo $passcode;

}

setpassword("password123");





function setencryptpassword($plaintext){
    $passcode=password_hash($plaintext,PASSWORD_DEFAULT);//dyn code
    echo "Before Encrypt = {$plaintext} , After Encrypt = {$passcode} ";
    echo strlen($passcode);

}

setencryptpassword("password123");
// Before Encrypt = password123 , After Encrypt = $2y$10$2Mg5E9Ri19ci3ZuBR6e17eQ9Iyi5QdY8VDfYMYFVoHYSrlzbXg1l2 60








function passwordbcrypt($plaintext){
    $passcode=password_hash($plaintext,PASSWORD_BCRYPT);//dyn code
    echo "Before Encrypt = {$plaintext} , After Encrypt = {$passcode} ";
    echo strlen($passcode);

}

passwordbcrypt("password123");
// Before Encrypt = password123 , After Encrypt = $2y$10$wEtrB4nTcxErToVnVLlTWOYBpzeziTuaclkY6MpY5dyBydhrgKOdy 60





function passworddecry(){

    $plaintextone ="password123";
    $enccodeone=password_hash($plaintextone,PASSWORD_DEFAULT);

    $plaintexttwo ="password123";
    $enccodetwo=password_hash($plaintexttwo,PASSWORD_DEFAULT);

    echo "Encrypt code one ={$enccodeone}";
    echo "Encrypt code two ={$enccodetwo}";
    

    $verify =password_verify($plaintextone,$enccodeone);

    if($verify){
        echo "Correct";//Correct
    }
    else{
        echo "Failed";
    }

}

passworddecry();

?>