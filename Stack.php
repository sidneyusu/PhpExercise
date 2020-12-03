<?php

//Stack and queue functions
$numbers = [1,2,3];
array_push($numbers, 4);
print_r($numbers);

array_pop($numbers);
print_r($numbers);

array_unshift($numbers, 0);
print_r($numbers);

array_shift($numbers);
print_r($numbers);

$unsort_numbers = [4,3,6,2,1,5];
sort($unsort_numbers);
print_r($unsort_numbers);

rsort($unsort_numbers);
print_r($unsort_numbers);

//Advance array functions
$numbers_set = [0,2,3,1,4,5,7,6];
print_r(array_slice($numbers_set, 4)); //discrad the first 4 elements of an array

print_r(array_slice($numbers_set, 4, 2)); //slice of specific length

print_r($numbers_set);

$male_names = ["Jake", "Eric", "John"];
$female_names = ["Jessica", "Beth", "Sandra"];
$names = array_merge($male_names, $female_names);
print_r($names);