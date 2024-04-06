<?php

// Generate random number between 1 and 100
$randomNumber = rand(1, 100);

$attempts = 0; // Initialize attempts counter

do {
  // Get user guess
  echo "Guess a number between 1 and 100: ";
  $guess = (int)$_POST['guess'];

  $attempts++; // Increment attempt counter

  // Check guess
  if ($guess === $randomNumber) {
    echo "Congratulations! You guessed the number in $attempts attempts!\n";
  } elseif ($guess > $randomNumber) {
    echo "Too high! Try again.\n";
  } else {
    echo "Too low! Try again.\n";
  }
} while ($guess !== $randomNumber);

?>
