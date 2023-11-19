<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
  // User is not logged in, redirect them to the login page
  header('Location: start.php');
  exit;
}
?>

<?php include'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



    <!-- aba chai overviewko part registration ko chai last tira xa -->
    <div class="frame">
<div class=" conatainer">
  <center><h1>Gharwala</h1><br><br><br>
  
  
  </center>
        <p>
        Introducing <b>"Gharwala"</b>, the ultimate solution for all your household problems! Whether you're dealing with a leaky faucet, a blown fuse, or simply need a fresh coat of paint, Gharwala has got you covered.

      With a team of skilled professionals from a range of trades, including plumbing, electricity, painting, and more, you can trust that your home is in good hands. Our experts are not only highly trained and experienced, but also friendly, reliable, and committed to delivering exceptional results every time.

      But what makes <b>Gharwala</b> truly unique is our flexibility. We understand that your time and needs are valuable, which is why we offer a variety of services and scheduling options to fit your busy lifestyle. Whether you need a quick fix or a major renovation, we'll work with you to find a solution that meets your specific needs and budget.

      So why wait? Join the <b>Gharwala</b> community today and say goodbye to household problems once and for all!
      </p>
</div><br><br><br>

<center><h1>Our services</h1></center><br><br>
<!-- aba chai services esto vanera halka pic haru haldeko -->


<h2>Plumbing</h2>

<div class="image-container">
  <ul>
    <li><img src='img/p1.png' alt="plumbing"/></li>
    <li><img src='img/plumbing.png' alt="plumbing"/></li>
    <li><img src='img/p2.png' alt="plumbing"/></li> 
  </ul>
</div><br><br>


<h2>Electricians</h2>
<div class="image-container">
  <ul>
    <li><img src='img/e1.png' alt="electrician"/></li>
    <li><img src='img/e2.png' alt="electrician"/></li>
    <li><img src='img/e3.png' alt="electrician"/></li>
  </ul>
</div>
<br><br>

<h2>Painters</h2>
<div class="image-container">
  <ul>
    <li><img src='img/pa1.png' alt="painting"/></li>
    <li><img src='img/pa3.png' alt="painting"/></li>
    <li><img src='img/pa4.png' alt="painting"/></li>
  </ul>
</div>
</div>
</body>
</html>