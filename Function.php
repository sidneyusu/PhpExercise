<?php

/*
* Function that will receive a list of number as an argument.
* returns the sum of the arguments
*/
function sum($numbers) {
    //initialize the variable to be returned
    $sum = 0;
    //sum up the numbers
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

echo sum([1,2,3,4,5,6,7,8,9,10]);