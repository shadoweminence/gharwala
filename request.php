<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
  // User is not logged in, redirect them to the login page
  header('Location: start.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overview</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
   <link rel="stylesheet" href="style.css">
</head>
<?php
include 'header.php'; ?>


<body><div class="reqpage">
    

<div class="container_req">

<div class="form-box request">
                <form action="reqconfig.php" method="post" enctype="multipart/form-data">

                    <h2>Request Form</h2>

                    <div class="input-box">
                        
                        <input type="text" name="name" id="name" required>
                        <label >Your Full Name</label>
                    </div>

                    <div class="input-box">
                        
                        <input type="text" name="address" id="address" required>
                        <label >Your address</label>
                    </div>
                    <div class="input-box">
                        
                        <input type="tel" name="number" id="number" maxlength="10" required>
                        <label >Your Number</label>
                    </div>

                    <div class="input-box">
                        
                        <input type="textarea" name="problem" id="problem" required>
                        <label >What seems to be the problem</label>
                    </div>
                    <div class="input-box">
                        
                        <input type="file" name="pic" id="pic" required>
                        <label >Picture </label>
                    <caption>Please upload image with less than 1 mb size</caption>
                    </div>
                    <div class="input-box">
                        
                        <input type="text" name="time" id="time" required>
                        <label>At what time you want us over</label>
                    </div>
    
                    <button class="btn2">Submit</button>
                </form>
            </div>

            </div>
            </div>
</body>
</html>