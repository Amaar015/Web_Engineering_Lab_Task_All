<?php

// Task f To test whether a number is greater than 30, 20 or 10
// using ternary operator and print the result.

$number = 25;
$result = ($number > 30) ? "Greater than 30" : (($number > 20) ? "Greater than 20" : (($number > 10) ? "Greater than 10" : "Less than or equal to 10"));
echo $result;

?>