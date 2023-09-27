<?php 
function generatePassword($length) {

    $_alphaSmall = 'abcdefghijklmnopqrstuvwxyz';           
    $_alphaCaps  = strtoupper($_alphaSmall);               
    $_numerics   = '1234567890';                           
    $_specialChars = '!@#$%^&*()_+';   

    $_container = $_alphaSmall.$_alphaCaps.$_numerics.$_specialChars;   
    $password = '';       

    for($i = 0; $i < $length; $i++) {                                 
        $_rand = rand(0, strlen($_container) - 1);                
        $password .= substr($_container, $_rand, 1);               
    }

    return $password;       // Returns the generated Pass
}

echo generatePassword(12);
