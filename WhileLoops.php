<?php

$counter = 0;
while ($counter < 10) {
    $counter++;
    echo "Executing - counter is $counter.\n";
}

$counter1 = 0;
while ($counter1 < 10) {
    $counter1 ++;
    if ($counter1 % 2 == 0) {
        echo "Skipping number $counter1 because it is even.\n";
        continue;
    }
    echo "Executing - counter is $counter1.\n";
}

$counter2 = 0;
while ($counter2 < 10) {
    $counter2 ++;
    if ($counter2 > 8) {
        echo "Counter is larger than 8, stopping the loop";
        break;
    }

    if ($counter2 % 2 == 0) {
        echo "Skipping number $counter2 because it is even.\n";
        continue;
    }
    echo "Executing - counter is $counter2.\n";
}