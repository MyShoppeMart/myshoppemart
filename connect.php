<?php

$db = mysqli_connect('myshoppemart.com.mysql', 'myshoppemart_com', 'LyneXtkK', 'myshoppemart_com');


  $description = mysqli_real_escape_string($db, $_POST['description']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $address = mysqli_real_escape_string($db, $_POST['address']);


// check if user is premium
  $check=mysqli_query($db,"SELECT * FROM users WHERE email='$email'");

  $checkrows=mysqli_num_rows($check);

if($checkrows>0) {
      $sql = "INSERT INTO is_premium_customorder (description, name, email, phone, address) VALUES ('$description', '$name', '$email', '$phone', '$address')";
}

else{
    $sql = "INSERT INTO not_premium_customorder (description, name, email, phone, address) VALUES ('$description', '$name', '$email', '$phone', '$address')";
}
 
if($db->query($sql) == TRUE){
 
 header('location: success.html');
}

else
{
 echo "Error" . $sql . "<br/>" . $db->error;
}
$db->close();
?>