<?php

$name = "John";
echo $name;

$introduction = "Hello $name";
echo $introduction;

//concatenate using the . operator
$first_name = "John";
$last_name = "Doe";
$full_name = $first_name . $last_name;
echo $full_name;

//measure length of a string
$string = "The length of this string is 43 characters.";
echo strlen($string);

//cut part of a string
$filename = "image.png";
$extension = substr($filename, strlen($filename) - 3);
echo "The extension of the file is $extension";

//Splitting strings
$fruits = "apple,banana,orange";
$fruit_list = explode(",", $fruits);
echo "The second fruit in the list is $fruit_list[1]";

//Joining an array to a string
$fruits2 = implode(",", $fruit_list);
echo "The fruits are $fruits2";

//Exercise
$numbers = "38,42,58,48,33,59,87,17,20,8,98,14,62,66,14,62,97,66,74,78,66,2,79,29,72,6,3,71,46,68,48,4,12,52,66,48,14,39,63,69,81,61,21,77,10,44,39,82,19,77,100,98,53,95,30,17,30,96,68,47,81,52,82,11,13,83,10,14,49,96,27,73,42,76,71,15,81,36,77,38,17,2,29,100,26,86,22,18,38,64,82,51,39,7,88,53,82,30,98,86";
$number_array = explode(",", $numbers);
print_r($number_array);