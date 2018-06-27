<!doctype html>
 
<?php
    session_start();
    session_unset();
    session_destroy();
    require_once 'functions.php';
    $passErr = $emailErr = "";
    $password = $email = "";

    $msg = '';
        
    if (isset($_POST['submit']) && !empty($_POST['username']) 
           && !empty($_POST['password'])){

      $email = test_input($_POST["username"]);
       
      $password = test_input($_POST["password"]);

      $sql = "SELECT * FROM user where username = '$email' and password = '$password'";

      $result = queryMysql($sql);

      if ($result->num_rows == 1) {
          $_SESSION['userid'] = $result->fetch_assoc()['userid'];     
          if(isset($_SESSION['url'])) 
           $url = $_SESSION['url']; // holds url for last page visited.
        else 
           $url = "dashboard_home.php"; // default page for 

        header("Location: $url");
      } else {
          $msg = "wrong username and password combination ";
      }
    }
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link href="static/style.css" rel="stylesheet">
    
    <title>SMID Fund</title>
  </head>
  <body class="text-center" >
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
          <div class="inner">
            <h3 class="masthead-brand">SMID Fund</h3>
            <nav class="nav nav-masthead justify-content-center">
              <a class="nav-link" href="index.html">Home</a>
              <a class="nav-link active" href="login.html">Log In</a>
            </nav>
          </div>
        </header>
  
        <form class="form-signin" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="text-center mb-4">
              <h1 class="">Sign In</h1>
              <p style="opacity:0.0">Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p>
            </div>
      
            <div class="form-label-group">
              <input type="text" id="inputEmail" class="form-control" placeholder="Username" required="required" autofocus="autofocus" name="username">
              <label for="inputEmail">Username</label>
            </div>
      
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name="password">
              <label for="inputPassword">Password</label>
            </div>
      
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Sign In">
            <p><?php echo $msg; ?></p>
            <p class="mt-5 mb-3 text-muted text-center">&copy; <?php echo date("Y"); ?></p>
          </form>
  
        <footer class="mastfoot mt-auto">
          <div class="inner">
            <p>Developed by Elrah Lab</p>
          </div>
        </footer>
      </div>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>