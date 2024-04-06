<!DOCTYPE html>
<html>
<head>
    <title>Phone Directory</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Phone Directory</h2>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Initialize an empty phone directory array
        $phoneDirectory = array();

        // Function to add contact to the phone directory
        function addContact($name, $phone, &$phoneDirectory) {
            $phoneDirectory[$name] = $phone;
        }

        // Collect data from the form
        $name = $_POST["name"];
        $phone = $_POST["phone"];

        // Add the contact to the phone directory
        addContact($name, $phone, $phoneDirectory);

        // Display the stored data in a table
        echo "<table>";
        echo "<tr><th>Name</th><th>Phone Number</th></tr>";
        foreach ($phoneDirectory as $name => $phone) {
            echo "<tr><td>$name</td><td>$phone</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
