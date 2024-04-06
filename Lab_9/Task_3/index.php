<?php
// Define a multidimensional array $students
$students = array(
    array("name" => "Taqi", "age" => 20, "grade" => "A+"),
    array("name" => "Jawad", "age" => 22, "grade" => "A-"),
    array("name" => "Ali", "age" => 21, "grade" => "A+"),
    array("name" => "Zainab", "age" => 22, "grade" => "A+"),
    array("name" => "Batool", "age" => 23, "grade" => "A"),
    array("name" => "Messam", "age" => 19, "grade" => "A"),
    array("name" => "Azadar Hussain", "age" => 25, "grade" => "B"),
    array("name" => "Shabar", "age" => 18, "grade" => "A+"),
    array("name" => "Shabir", "age" => 17, "grade" => "A+"),
);

// Print the information of each student
foreach ($students as $student) {
    echo "Name: " . $student['name'] . "<br>";
    echo "Age: " . $student['age'] . "<br>";
    echo "Grade: " . $student['grade'] . "<br><br>";
}
?>
