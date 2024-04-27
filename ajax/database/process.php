
<?php

require 'conn.php';

$name=$_POST['name'];
$department=$_POST['department'];
$rollno=$_POST['rollno'];
$email=$_POST['email'];
$address=$_POST['address'];


echo $department;
echo $email;

$sql="INSERT INTO student(name,department,rollno,email,address) VALUES('$name','$department','$rollno','$email','$address')";
 if(mysqli_query($conn,$sql)){
    echo "User Adde successfully";
 }
 else{
    echo "Error in Add user";
 }
?>