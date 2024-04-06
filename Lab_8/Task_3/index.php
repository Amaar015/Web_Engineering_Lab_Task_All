<?php
// Sample employee data
$employees = array(
    array("name" => "ALi Raza", "salary" => 50000),
    array("name" => "Sajad ALi", "salary" => 60000),
    array("name" => "Kumail ALi", "salary" => 55000),
    array("name" => "Taqi Jawad", "salary" => 65000)
);

// Start HTML table
echo "<table border='1'>";
// Table header
echo "<tr><th>Name</th><th>Salary</th></tr>";

// Loop through each employee and display their data
foreach ($employees as $employee) {
    echo "<tr>";
    echo "<td>" . $employee['name'] . "</td>";
    echo "<td>" . $employee['salary'] . "</td>";
    echo "</tr>";
}

// End HTML table
echo "</table>";
?>
