

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];



if($password != $cpassword){
    echo"Passwords don't match <br> Please try again";
}else{

// Create connection
$conn = new mysqli('localhost','root','','user_db');

// Check connection
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}else{
  $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $stmt = $conn->prepare("insert into user_form(name,email,password)
    values(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$hashed_password);
    $stmt->execute();
  

    echo "registration successful.... <br> Please go to the login page..";
    $stmt->close();
    $conn->close();
}
}
?> 

    
