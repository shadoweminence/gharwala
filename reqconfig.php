<?php
session_start(); // Start the session

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
  // User is not logged in, redirect them to the login page
  header('Location: start.php');
  exit;
}

// Include your database connection script (e.g., 'con.php')
require 'con.php';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $problem = $_POST['problem'];
    $time = $_POST['time'];

    // Retrieve the user_form_id from the session
    $userFormId = $_SESSION['user_id']; // Assuming the user's id is stored in the session as 'user_id'

    // Handle file upload
    if (isset($_FILES['pic']) && $_FILES['pic']['error'] === UPLOAD_ERR_OK) {
        $image = file_get_contents($_FILES['pic']['tmp_name']);

        // Insert data into the 'request' table using prepared statements
        $sql = "INSERT INTO req (user_form_id, name, address, number, problem, pic, expected_time) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("issssbs", $userFormId, $name, $address, $number, $problem, $image, $time);

        if ($stmt->execute()) {
            // Record inserted successfully
            echo "Record inserted successfully.";
        } else {
            // Error occurred
            die("Error: " . $stmt->error);
        }

        $stmt->close();
    } else {
        echo "Error uploading the picture.";
    }
}

// Close the database connection
$conn->close();
exit;
?>
