<?php
 $grades=[85, 92, 78, 88, 95];
 function gradeSort($grades){
   $result= rsort($grades);
   foreach($grades as $item){
     echo $item.PHP_EOL;
   }
 }
 gradeSort($grades);
