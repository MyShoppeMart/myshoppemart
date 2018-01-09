<?php
$server = "myshoppemart.com.mysql";
$user = "myshoppemart_com";
$pass = "LyneXtkK";
$dbname = "myshoppemart_com";
 
//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}


if (isset($_POST['submit'])){
	$description = mysqli_real_escape_string($conn, $_POST['description']);
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
} 


// check if user is premium
  $check=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");

  $checkrows=mysqli_num_rows($check);

if($checkrows>0) {
      $sql = "INSERT INTO is_premium_customorder (description, name, email, phone, address) VALUES ('$description', '$name', '$email', '$phone', '$address')";
}

else{
    $sql = "INSERT INTO not_premium_customorder (description, name, email, phone, address) VALUES ('$description', '$name', '$email', '$phone', '$address')";
}
 
if($conn->query($sql) == TRUE){
 
 header('location: success.html');
}

else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>