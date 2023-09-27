<?php
function generatePassword($length)
{
    $sets = array();
    $sets[] = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
    $sets[] = 'abcdefghjkmnpqrstuvwxyz';
    $sets[] = '1234567890';
    $sets[]  = '!@#$%^&*()_+';

    $password = '';
    //append a character from each set.
    foreach ($sets as $set) {
        $password .= $set[array_rand(str_split($set))];
    }
    //use all characters to fill up to $length
    while (strlen($password) < $length) {
        //get a random set
        $randomSet = $sets[array_rand($sets)];

        //add a random char from the random set
        $password .= $randomSet[array_rand(str_split($randomSet))];
    }

    //shuffle the password string before returning!
    return str_shuffle($password);
}

echo generatePassword(12);
