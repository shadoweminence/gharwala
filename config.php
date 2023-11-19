<?php
require 'con.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

function handle_register($conn) {
  // Perform validation
  $errors = [];

  // Check if the form is submitted
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['regname'], $_POST['regemail'], $_POST['regpassword'], $_POST['cpassword'], $_POST['DOB'])) {
    // Getting details
    $name = $_POST['regname'];
    $email = $_POST['regemail'];
    $password = $_POST['regpassword'];
    $cpassword = $_POST['cpassword'];
    $DOB = $_POST['DOB'];

    // Validate username
    if (empty($name)) {
      $errors[] = "Please enter a username.";
    }

    // Validate email
    if (empty($email)) {
      $errors[] = "Please enter an email address.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Please enter a valid email address.";
    }

    // Validate password
    if (empty($password)) {
      $errors[] = "Please enter a password.";
    } elseif (strlen($password) < 6) {
      $errors[] = "Password must be at least 6 characters long.";
    }

    // Confirm password
    if ($password !== $cpassword) {
      $errors[] = "Passwords do not match.";
    }

    // Backup email
    if (empty($DOB)) {
      $errors[] = "Please enter a DOB.";
    }

    // If there are no errors, proceed with registration
    if (empty($errors)) {
      // Perform registration logic here

      // Making password hashed
      $hashed_password = password_hash($password, PASSWORD_BCRYPT);
      $stmt = $conn->prepare("INSERT INTO user_form (name, email, password, DOB) VALUES (?, ?, ?, ?)");
      $stmt->bind_param("ssss", $name, $email, $hashed_password, $DOB);
      $stmt->execute();
      if ($stmt->error) {
        $errors[] = "Error: " . $stmt->error;
      } else {
        // Retrieve the inserted user ID
    $user_id = $stmt->insert_id;
        session_start();
        $_SESSION['user_id'] = $user_id;
        header("Location: about.php");
        exit;
      }
    }
  }
  return $errors; // Return the errors array
}
?>