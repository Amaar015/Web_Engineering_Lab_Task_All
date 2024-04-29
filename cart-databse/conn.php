<?php

$server='localhost';
$userName='root';
$password='';
$data_base='product';


$conn =mysqli_connect($server,$userName,$password,$data_base);

if(!$conn){
    echo 'Database is not Connected';
}


?>