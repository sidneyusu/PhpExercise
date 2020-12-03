<?php

$phone_numbers = [
    "Alex" => "415-235-8573",
    "Jessica" => "415-492-485"
];

//print_r($phone_numbers);
echo "Alex's phone number is " . $phone_numbers["Alex"] . "\n";
echo "Jessica's phone number is " . $phone_numbers["Jessica"] . "\n";

//add an item to the array using a key
$phone_numbers["Michael"] = "415-955-3857";
print_r($phone_numbers);

//check if a key exists
if(array_key_exists("Alex", $phone_numbers)) {
    echo "Alex's phone number is " . $phone_numbers["Alex"] . "\n";
} else {
    echo "Alex's phone number is not in the phone book.";
}
if(array_key_exists("John", $phone_numbers)) {
    echo "John's phone number is " . $phone_numbers["John"] . "\n";
} else {
    echo "John's phone number is not in the phone book.";
}

//extract only the keys
print_r(array_keys($phone_numbers));

//extract only the values
print_r(array_values($phone_numbers));