<?php
	$text="The quick brown fox jumps over the lazy dog.";
  static $search = "brown";
  static $replace="red";
  function converter($text){
    return strtolower($text);
	}
	$modifiedText=converter($text);
	$result=str_replace($search,$replace,$modifiedText);
	echo $result;
