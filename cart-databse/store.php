
<?php

  require 'conn.php';

  $name=$_POST['name'];
  $description=$_POST['description'];
  $price=$_POST['price'];
  $image=$_FILES['images'];
  $imageName=$image['name'];
  $imageType=$image['type'];
  $imageSize=$image['size'];
  $imageTemp=$image['tmp_name'];


  // move image to desired directory
   $uploadDir='images/';
   $targetFilePath=$uploadDir.basename($imageName);
   move_uploaded_file($imageTemp,$targetFilePath);
  
  // Sql query to insert data
  $sql="INSERT INTO products (name,description,price,image) VALUES('$name','$description',$price,'$imageName')";

  if(mysqli_query($conn,$sql)){
    echo "New Product Inserted into Successfully";
  }else{
    echo "Error! occured in Inserting Data";
  }

  header("Location:storeProduct.html");
  mysqli_close($conn);
?>