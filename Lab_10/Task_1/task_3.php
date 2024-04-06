<?php
function numberToWords($number) {
    // Define an array to map digits to words
    $wordMap = array(
        0 => "zero",
        1 => "one",
        2 => "two",
        3 => "three",
        4 => "four",
        5 => "five",
        6 => "six",
        7 => "seven",
        8 => "eight",
        9 => "nine"
    );

    // Convert the number to a string
    $numberString = strval($number);

    // Initialize an empty string to store the word representation
    $wordRepresentation = "";

    // Iterate through each digit of the number
    for ($i = 0; $i < strlen($numberString); $i++) {
        // Get the current digit
        $digit = intval($numberString[$i]);

        // Map the digit to its word representation and concatenate to the result string
        $wordRepresentation .= $wordMap[$digit];
    }

    return $wordRepresentation;
}

// Test the function with a sample number
$number = 534678;
echo "Number: $number<br>";
echo "Output: " . numberToWords($number);
?>
