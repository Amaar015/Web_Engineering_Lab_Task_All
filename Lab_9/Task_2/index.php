<?php
// Generate a random number between 1 and 100
$randomNumber = null;
for ($i = 0; $i < 1; $i++) {
    $randomNumber = $i;
}
// // Initialize the number of attempts
$attempts = 0;

// Get the user's guess from the form
if(isset($_POST['guess'])) {
    $guess = (int)$_POST['guess'];

    // Check if the guess is within the valid range
    if ($guess < 1 || $guess > 100) {
        echo "<script> Please enter a number between 1 and 100. </script>";
        exit;
    }

    // Start the guessing game
    echo "<h2>Guess the Number Game</h2>";

    // Loop until the user guesses the correct number
    while ($guess !== $randomNumber) {
        // Increment the number of attempts
        $attempts++;

        // Check if the guess is correct
        if ($guess < $randomNumber) {
            echo "Too low! Try again.<br>";
        } else {
            echo "Too high! Try again.<br>";
        }

        // Get the user's next guess from the form
        $guess = (int)$_POST['guess'];
    }   

    // Print the number of attempts
    echo "It took you $attempts attempts to guess the correct number.";
} else {
    echo "Please enter your guess.";
}
?>
