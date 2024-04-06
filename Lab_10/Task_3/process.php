<?php

  if($_SERVER['REQUEST_METHOD']=='GET') {
      echo "<script>Get Methods is Not used Here</script>";
  }elseif($_SERVER['REQUEST_METHOD'] == 'POST'){



   // Retrieve data from the form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number=$_POST['number'];
    $passwords=md5($_POST['pass']);
    $c_password=$_POST['cpass'];
    $color=$_POST['color'];
    $contry=$_POST['contry'];
    // Process the data (you can perform any desired operations here)
    
    header("Location: getuser.php");
}
?>