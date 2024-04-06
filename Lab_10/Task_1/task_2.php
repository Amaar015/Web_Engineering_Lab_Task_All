<?php
// Function for addition with two arguments
function add($a, $b) {
    return $a + $b;
}

// Function for addition with three arguments
function add_three($a, $b, $c) {
    return $a + $b + $c;
}

// Function for subtraction with two arguments
function subtract($a, $b) {
    return $a - $b;
}

// Function for subtraction with three arguments
function subtract_three($a, $b, $c) {
    return $a - $b - $c;
}

// Function for multiplication with two arguments
function multiply($a, $b) {
    return $a * $b;
}

// Function for multiplication with three arguments
function multiply_three($a, $b, $c) {
    return $a * $b * $c;
}

// Function for division with two arguments
function divide($a, $b) {
    // Check for division by zero
    if ($b == 0) {
        return "Error: Division by zero";
    }
    return $a / $b;
}

// Function for division with three arguments
function divide_three($a, $b, $c) {
    // Check for division by zero
    if ($b == 0 || $c == 0) {
        return "Error: Division by zero";
    }
    return $a / ($b * $c);
}

// Test the functions
$a = 10;
$b = 5;
$c = 2;

echo "Addition with two arguments: " . add($a, $b) . "<br>";
echo "Subtraction with two arguments: " . subtract($a, $b) . "<br>";
echo "Multiplication with two arguments: " . multiply($a, $b) . "<br>";
echo "Division with two arguments: " . divide($a, $b) . "<br>";

echo "Addition with three arguments: " . add_three($a, $b, $c) . "<br>";
echo "Subtraction with three arguments: " . subtract_three($a, $b, $c) . "<br>";
echo "Multiplication with three arguments: " . multiply_three($a, $b, $c) . "<br>";
echo "Division with three arguments: " . divide_three($a, $b, $c) . "<br>";
?>
