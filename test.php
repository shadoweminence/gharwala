<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
// $cpassword = $_POST['cpassword'];


// Create connection
$conn = new mysqli('localhost','root','','user_db');

// Check connection
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into user_form(name,email,password")
    values(?,?,?);
    $stmt->bind_param("sssssi",$name,$email,$password);
    $stmt->execute();
    echo "registration successful....";
    $stmt->close();
    $conn->close();
}
?> 