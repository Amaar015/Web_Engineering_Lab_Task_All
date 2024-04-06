<?php
// Function to validate if the input is a valid number
function isNumber($age) {
    return is_numeric($age);
}

// Function to determine the status based on age
function AgeStatus($age) {
    if ($age < 18) {
        echo "You are a minor.";
    } elseif ($age >= 18 && $age <= 65) {
        echo "You are an adult.";
    } elseif ($age > 65) {
        echo "You are a senior citizen.";
    } else {
        echo "Invalid input.";
    }
}

// Test different values of $age
$age = 15;
echo "Age: $age - ";
if (isNumber($age)) {
    AgeStatus($age);
} else {
    echo "Invalid input.";
}
echo "<br>";

$age = 25;
echo "Age: $age - ";
if (isNumber($age)) {
    AgeStatus($age);
} else {
    echo "Invalid input.";
}
echo "<br>";

$age = 70;
echo "Age: $age - ";
if (isNumber($age)) {
    AgeStatus($age);
} else {
    echo "Invalid input.";
}
echo "<br>";

$age = "abc";
echo "Age: $age - ";
if (isNumber($age)) {
    AgeStatus($age);
} else {
    echo "Invalid input.";
}
?>
