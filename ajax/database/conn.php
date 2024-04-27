<?php

$server='localhost';
$username='root';
$password='';
$db_name='sw';

$conn =mysqli_connect($server,$username,$password,$db_name);

 if(!$conn){
    echo 'Connection is not Created';
 }
//  echo 'Connection is Created Successfully';



?>




