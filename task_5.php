<?php
function generatePassword($length)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
    return substr(str_shuffle($chars), 0, $length);
}

echo generatePassword(12);
