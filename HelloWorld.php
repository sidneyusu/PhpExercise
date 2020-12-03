
<?php
echo("Hello World");

//Variable and Types
$x = 1;
$y = "foo";
$z = True;

//Operators
$x2 = 2;
$sum = $x + $x2;
echo "1 + 2 = $sum";

//String formatting
$name = "Jake";
$age = 20;
echo "Your name is $name. You are $age years old.";

//Simple Arrays
$odd_numbers = [1,3,5,7,9];
$first_odd_number = $odd_numbers[0];
$second_odd_number = $odd_numbers[1];

echo "The first odd number is $first_odd_number.\n";
echo "The second odd number is $second_odd_number.\n";

$even_numbers = [2,4,6,8,10];
print_r($even_numbers);

//Add an item to the array
$odd_numbers[5] = 11;
print_r($odd_numbers);

//Remove an element in the array
unset($odd_numbers[2]); //will remove the 3rd item from the array
print_r($odd_numbers);

//Useful functions
echo count($odd_numbers); //returns the number of members an array has
$first_item = reset($odd_numbers); //gets the first member of the array (resets the internal iteration pointer)
echo $first_item;
$last_item = end($odd_numbers);
echo $last_item;

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


?>
