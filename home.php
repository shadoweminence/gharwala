<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
  // User is not logged in, redirect them to the login page
  header('Location: start.php');
  exit;
}
?>
<?php  include 'header.php'; ?>

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
<body>




  <div class="abcd">

  <h1>Our Services Available</h1> <br><br><br><br>
<div class="image-container">

  <ul>
    <a href="request.php"><li><img src="img/overplum.png" alt="plumber"> <h2>Plumbing</h2></li></a>
   
   <a href="request.php"><li><img src="img/overpain.png" alt="painter"><h2>Painter</h2></li></a> 
    
    <a href="request.php"><li><img src="img/overele.png" alt="electrician"><h2>Electrician</h2></li></a>
    
  </ul>

</div>
<center>My History</center>

<?php
require 'con.php';

$sql = "SELECT * FROM request WHERE user_form_id = {$_SESSION['user_id']}";
$result = mysqli_query($conn, $sql);

if (!empty($result) && mysqli_num_rows($result) > 0) {
    echo '
    <table class="table table-striped table-bordered" border="2">
        <thead>
            <tr>
                <th>Problem</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>';

    while ($row = mysqli_fetch_assoc($result)) {
        $Problem = $row["problem"];
        $id = $row["id"]; // Assuming 'id' is the primary key column name

        echo '<tr>
            <td>' . $Problem . '</td>
            <td>
                <a href="deletereq.php?id=' . $id . '">
                    <button>Cancel</button>
                </a>
            </td>
        </tr>';
    }

    echo '
        </tbody>
    </table>';
} else {
    echo "No data found.";
}
?>

          


</div>



<?php include'footer.php' ?>
      <script type="text/javascript" src="abc.js"></script>
</body>
</html>