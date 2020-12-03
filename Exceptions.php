<?php
// try {
//     echo 2 / 0;
// } catch (Exception $e) {
//     echo "Caught exception: Division by zero!";
// }

// if (4/2 == 2) {
//     echo "Right!";
// } else {
//     throw new Exception("Wrong answer!");
// }

try {
    echo 4/0;
  } catch (Exception $e) {
    echo "Divided by zero!";
  } finally {
    echo "This will be outputed even if exception will happen!";
  }