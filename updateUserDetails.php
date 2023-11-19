<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require 'con.php';
$name = $email = $DOB = $password ='';
$nameErr = ''; $emailErr="";$mobileErr="";


//  $_id = $_GET['id'];

if(isset($_POST['submit'])){
    $id = $_GET['id'];
    // echo $id;

    $name = $_POST['name'];
    if(empty($_POST['name'])){
        $nameErr ="Required";
    }
    
    $email = $_POST['email'];
    if(empty($_POST['email'])){
        $emailErr ="Required";
    }

    $DOB = $_POST['DOB'];
    if(empty($_POST['DOB'])){
        $DOBErr ="Required";
    }
    
    
if($emailErr =='' && $DOBErr == '' && $nameErr==''){


$sql = "UPDATE user_form set id='$id',name='$name', email ='$email',DOB = '$DOB' where id = '$id'";

// die("$sql");

$result = mysqli_query($conn,$sql);
   if($result){
    header('location:userDetails.php');
   }else{
    die(mysqli_error($conn));
   }
}}
?>

<form action="<?php  $_SERVER['PHP_SELF']; ?>" method="post">
<label for="name">Name</label>
<input type="text" name="name" /> 
<span class="error">* <?php echo $nameErr ?> </span><br>

<label class="form-label">DOB</label>
<input class="form-control" type="date" name="DOB" value="<?php echo $DOBErr; ?>">
<span class="error">* <?php echo $DOBErr ?> </span>
<br>



<label for="email">Email</label>
<input type="text" name="email" /><br><span class="error">* <?php echo $emailErr ?> </span>

<!-- <label for="pass">password</label>
<input type="password" name="pass" /><br> -->

<input type="submit" name="submit" value="submit" >
</form>
</body>
</html>