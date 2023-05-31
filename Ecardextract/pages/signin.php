<?php
session_start();
include("../functions/signinfunction.php");
if(@isset($_SESSION["displaymail"])) {
      header("location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable = no">
      <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
      <link rel="stylesheet" href="../assets/css/signin.css">
      <link rel="stylesheet" href="../assets/css/loader.css">
      <title>Signin|Welcome</title>
</head>
<body>
      <?php include("../includes/loader.php");?>
      <div class="container">
            <div class="text">
                  <p>Create Account</p>
                  <p class="error">
                        <?php 
                              if(isset($_GET['error'])) {
                              echo $_GET['error'];
                              }
                        ?>
                  
                  </p>
            </div>
            <form action="" method="POST">
                  <div class="all-inputs">
                        <div class="input">
                              <input type="text" name="displaymail" placeholder="Displayname">
                        </div>
                        <div class="input">
                              <input type="password" name="password" placeholder="Password">
                        </div>
                         <div class="input">
                              <button type="submit" name="signin">Signin</button>
                        </div>
                        


                  </div>
            </form>
            <div class="footer">
                  <p>Not a memberyet?<a href="signup.php">Signup</a></p>
            </div>
      </div>
 <script src="../assets/js/1.js"></script>
   <?php include("../includes/footpage.php");?>
</body>
</html>