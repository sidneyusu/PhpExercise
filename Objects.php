<?php
class Student {
    //Constructor
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
    //For external use
    public function say_name() {
        echo "My name is " . $this->first_name . " " . $this->last_name . "\n";
    }
    //For internal use
    private function full_name() {
        return $this->first_name . " " . $this->last_name;
    }
}

$alex = new Student("Alex", "Jones");
$alex->say_name();

//Inheritance
class MathStudent extends Student {
    function sum_numbers($first_number, $second_number) {
        $sum = $first_number + $second_number;
        echo $this->first_name . " says that " . $first_number . " + " . $second_number . " is " . $sum . "\n";
    }
}

$eric = new MathStudent("Eric", "Chang");
$eric->say_name();
$eric->sum_numbers(3, 5);