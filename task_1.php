<?php
$text = "The quick brown fox jumps over the lazy dog.";
function converter($text)
{
    $search = "brown";
    $replace = "red";
    $modifiedText = strtolower($text);
    $result = str_replace($search, $replace, $modifiedText);
    echo $result;
}
converter($text);

