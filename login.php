<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="design.css">
   
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a href="home.php">
            <img src="Gharwala.jpg" alt="logo" style="height: 100px;width: 200px;">
          </a>
           
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="overview.php">Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">Log In</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page"  href="register.php">Register</a>
              </li>
           
                </ul>
                
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
          </div>
        </div>
      </nav><br>

    <div class="container">
        <center>
     
    <form action="nav.html">
        <b><h1>Login page</h1></b>
    <table >

        <tr>
          
        <td><input type="text" placeholder="Username" name="username" id="username"></td>
        </tr>
        <tr>
           
        <td> <input type="password" placeholder="Password" id="password" name="password"></td>
        </tr>
        <tr>
            <td> <input type="checkbox" name="remember" id="rememberMe"/>
                <label for="remember">Remember Me</label></td>
        </tr>
        <tr>
            <td><input type="submit" value="Log In"></td>
        </tr>
        <tr>
            <td><a id="forgot" href="#">Forgot Password</a></td>
        </tr>
<tr>
    <td><a href="register.html">Create a new account</a></td>
</tr>

    </table>
</form>

</center>
        
</div>
        
    
</body>
</html>