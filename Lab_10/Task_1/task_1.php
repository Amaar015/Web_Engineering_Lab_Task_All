<?php
function factorial($n) {
    // Base case: if n is 0 or 1, factorial is 1
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        // Recursive case: factorial of n is n multiplied by factorial of (n - 1)
        return $n * factorial($n - 1);
    }
}

// Test the factorial function
$number = 5;
echo "Factorial of $number is " . factorial($number);
?>
