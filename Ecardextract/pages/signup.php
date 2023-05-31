<?php
session_start();
include("../functions/signupfunction.php");
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
      <link rel="stylesheet" href="../assets/css/signup.css">
      <link rel="stylesheet" href="../assets/css/loader.css">
      <title>Signup|Welcome</title>
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
                              <input type="text" name="fullname" placeholder="Fullname">
                        </div>
                        <div class="input">
                              <input type="text" name="email" placeholder="Email Address">
                        </div>
                        <div class="input">
                              <input type="text" name="displayname" placeholder="Displayname">
                        </div>
                        <div class="input">
                              <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="input">
                              <input type="password" name="confirmpass" placeholder="Confirm Password">
                        </div>
                         <div class="input">
                              <button type="submit" id="signup" name="signup">Signup</button>
                        </div>
                        


                  </div>
            </form>
            <div class="footer">
                  <p>Clicking the 'Signup' Button, implies that you agree to our<a href="../policy/tc.php"> Terms&conditions</a></p>
            </div>
      </div>
 <script src="../assets/js/1.js"></script>
 <script src="../assets/js/jquery.js"></script>
 <script>
      // $('#signup').click(function(e) {
      //       var email = $('#email').val();
      //       if( $("#email").val()!='') {
      //             if(!isValidEmailAddress())
      //       }
      // });
 </script>
   <?php include("../includes/footpage.php");?>
</body>
</html>