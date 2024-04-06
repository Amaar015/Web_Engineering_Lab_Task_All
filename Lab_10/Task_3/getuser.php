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
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Initialize an empty phone directory array
   echo  "<h2>User Data</h2>";
        
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number=$_POST['number'];
    $passwords=md5($_POST['pass']);
    $c_password=$_POST['cpass'];
    $color=$_POST['color'];
    $contry=$_POST['contry'];

        // Display the stored data in a table
        echo "<table>";
        echo "<tr><th>Name</th><th>Email</th><th>Phone Number</th><th>Color</th> <th>Country</th></tr>";
            echo "<tr><td>$name</td><td>$email</td><td>$number</td><td>$color</td><td>$contry</td></tr>";
         echo "</table>";
    } elseif($_SERVER["REQUEST_METHOD"] == "GET"){
             echo "<h5>User Using a get Method</h5>";
    }
     ?>
</body>
</html>
