<?php include'header.php'; ?>
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
    <title>help</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>