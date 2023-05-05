<?php
// Start a session
session_start();

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get the email and password from the login form
$email = $_POST['email'];
$password = $_POST['password'];

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'user_db');

// Check if the connection was successful
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

// Prepare a SQL statement to check if the email and password match a row in the users table
$stmt = $conn->prepare('SELECT id, name, email, password FROM user_form WHERE email = ?');
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

// Check if a row was found
if ($result->num_rows == 1) {
  // Fetch the row as an associative array
  $row = $result->fetch_assoc();

  // Check if the password is correct
  if (password_verify($password, $row['password'])) {
    // Password is correct, so set session variables and redirect to the dashboard
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_name'] = $row['name'];
    $_SESSION['user_email'] = $row['email'];
    header('Location: overview.php');
    exit;
  } else {
    // Password is incorrect, so show an error message
    echo 'Incorrect password.';
  }
} else {
  // No row was found, so show an error message
  echo 'Email not found.';
}

// Close the database connection
$conn->close();
?>
