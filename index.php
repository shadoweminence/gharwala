<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
  // User is not logged in, redirect them to the login page
  echo" You are logged in.";
  header('Location: home.php');
  exit;
}
?>

<?php   
// importing the header file 
require_once 'header1.php'; 
// importing the connection to the database 
require_once 'con.php'; 
// importing the login file 
require 'logconfig.php';
// calling the login function 
handle_login($conn);

require 'config.php';
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Call the handle_register function from the included file
    $errors = handle_register($conn);}

?>
<!-- end of php for the start file  -->

<!-- html for the start page begins here  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GHARWALA</title>
    <link rel="stylesheet" href="style.css">
    <!-- the link below is the link for differnet icons used  -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <div class="background"></div>
    <div class="container">
        <div class="item">
            <!-- <h2 class="flogo"><img src="img/logo.jpg"></i></h2> -->
            <div class="text-item">
                <h2>Welcome! <br><span>
                    To GHARWALA
                </span></h2>
                <p>We do all your household problems.<br> We Design We Create...</p>
                <div class="social-icon">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div>
        </div>
        <!-- the html below is for the login and register section i.e., forms  -->
        <div class="login-section">
            <!-- this is for the register form  -->
            <div class="form-box register">

<!-- the onsubmit buttons redirects it to the js that validates the form and action sends it to the
 php file which connects it to db and also validates it  -->

                <form name="registerForm" onsubmit="return validateRegForm()" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                    <h2>Sign Up</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" name="regname" id="name" required>
                        <label >Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="regemail" id="email" required>
                        <label >Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i>
                    </span>
                        <input type="password" name="regpassword" id="password" required>
                        <label>Password</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i  class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="cpassword" required>
                        <label >Confirm Password</label>

                    </div>
                    <div class="input-box">
                    
                        <input type="date" name="DOB" required>
                        <label >DOB</label>
                    </div>
                    <?php if (!empty($errors)): ?>
                        
  <div style="color: red;">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?php echo $error; ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>

                    <!-- <div class="remember-password">
                        <label for=""><input type="checkbox">I agree with this statment</label>
                    </div> -->
                    <button class="btn">Register</button>
                    <div class="create-account">
                   <p>Have an account? <a href="#" class="login-link">Log In</a></p>

                    </div>
                </form>
            </div>
<!-- end of register section for the html part  -->

<!-- start of the login section  -->
            <div class="form-box login">
                <form name="loginForm" onsubmit="return validateLogForm()" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <h2>Log In</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="email" required>
                        <label >Email</label> 
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" required>
                        <i class="uil uil-lock icon"></i>
                        <label>Password</label>
                    </div>
                    <div class="remember-password">
                        <!-- <label for=""><input type="checkbox">Remember Me</label> -->
                        <a href="forget_pass.php" >Forget Password</a>
                    </div>
                    <button class="btn">Log In</button>

<!-- this provides the error in red color  -->
                    <?php if (isset($_SESSION['loginError'])): ?>
                        <div style="color: red;"><?php echo $_SESSION['loginError']; ?></div>
                         <?php unset($_SESSION['loginError']); ?>
                    <?php endif; ?>
                    <!-- end of php for the error in login page  -->
                    <div class="create-account">
                        <p>Create A New Account? <a href="#" class="register-link">Sign Up</a></p>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
<!-- this validates the register form through js  -->
    <script src="validateReg.js"></script>
<!-- thi validates the login form through js  -->
    <script src="validateLog.js"></script>
<!-- this is for swapping register and login form  -->
    <script src="index.js"></script>
</body>

</html>