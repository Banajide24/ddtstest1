<?php

echo threeByThree(234);

// check if number is divisible by 3 adding all the digits and dividing by 3
 function threeByThree($x){
    if((digitSum($x) % 3) == 0){
        echo $x." is a number divisible by 3";
    }
    else
        echo $x." is a number not divisible by 3";
 }

 function digitSum($num){
     $sum = 0;
     for($i = 1; $i < strlen($num); $i++){
         //$sum += $sum[$i];
         $sum = $sum + $sum[$i];
         if ($i == strlen($num)){
             break;
         }
     }
     return $sum;
 }

?>