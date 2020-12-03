<?php

$odd_numbers = [1,3,5,7,9];
for ($i = 0; $i < count($odd_numbers); $i++) {

    $odd = $odd_numbers[$i];
    echo $odd . "\n";
}

foreach ($odd_numbers as $odd) {
    echo $odd . "\n";
}

//Iterating over arrays with keys
$phone_number = [
    "Alex" => "415-235-8573",
    "Jessica" => "415-663-6734"
];

foreach ($phone_number as $name => $number) {
    echo "$name's number is $number.\n";
}

//Exercise
$even_numbers = [2,4,6,8,10,12,14,16,18,20];
foreach ($even_numbers as $number) {
    echo $number . "\n";
}