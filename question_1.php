<?php

// check if number is divisible by 3 using remainder
function threeByThree($x){
    if(($x % 3) == 0){
        echo $x." is divisible by 3";
    }
    else
        echo $x." is not divisible by 3";
}

echo threeByThree(24);
?>
((((digitSum($x) % 3) == 0) && ($x % 3) == 0)