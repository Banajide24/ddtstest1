<?php

function integerManipulator($num){
    if ($num >= 0) // test for only positive integers and zero

        //checks if number is odd, multiply it by 3 and incvrement by 1
        if (($num % 2) != 0){ 
           // return ($num * 3) + 1;
           echo ($num * 3) + 1;
        }
        // returns count of number division by 2
        else{
            $count=0;
            while($num != 0){
            $num = floor($num/2);
                
            $count++;
        }
            echo  $count;
        }
            
    else{ //output Error message if number is <0
        echo "invalid number";
    }
                  
}

// call function with any given user input(parameter)
echo integerManipulator(50);
?>