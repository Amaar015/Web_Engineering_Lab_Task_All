


<div class='container' id='dataContainer'>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
<?php
 require 'conn.php';
 $record='SELECT * FROM student';
 if($result= mysqli_query($conn,$record)){
    if(mysqli_num_rows($result)>0){
        echo '<table>';
        echo '<thead>';
        echo '<th>Serial No</th><th>Student Name</th><th>Department</th><th>Roll no</th><th>Email</th><th>Address</th>';
        echo '</thead>';
        
        while($getUser=mysqli_fetch_array($result)) {
            echo '<tr>';
            echo "<td>".$getUser['id']."</td>
            <td>".$getUser['name']."</td>
            <td>".$getUser['department']."</td>
            <td>".$getUser['rollno']."</td>
            <td>".$getUser['email']."</td>
            <td>".$getUser['address']."</td>";
            echo '</tr>';
        }
    }
    echo "</table>";
 }
?>

</div>