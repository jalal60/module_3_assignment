<?php
$numbers=[1,2,3,4,5,6,7,8,9,10];
function removeEven($numbers){
  if($numbers==0){
    echo "Invalid Number";
  }
  return $numbers%2!=0;
}
$result=array_filter($numbers,"removeEven");
foreach($result as $item){
  echo $item.PHP_EOL;
}
