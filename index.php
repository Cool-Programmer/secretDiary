<?php require 'db.php'; ?>
<?php
session_start();
global $error;
include 'signup.php';
include 'login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Secret Diary</title>
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
   <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="heading">
                   <h1 class="pull-center">Secret Diary</h1>
                   <p class="lead">Your own private diary. Always with you...</p>
                   <p class="interested">Interested? Log in or hit sign up!</p>
                   <?php 
                        if($error){
                          echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
                        }
                  ?>
               </div>
               
                <form action="index.php" method="POST">
                   <div class="form-group">
                        <label for="loginEmail" class="label label-primary">Email</label>
                        <input class="form-control" type="email" id="loginEmail" name="loginEmail" placeholder="Your email">
                     </div>
                   <div class="form-group">
                        <label for="loginPassword" class="label label-primary">Password</label>       
                        <input class="form-control" type="password" id="loginPassword"  name="loginPassword" placeholder="Your Password">
                   </div>    
                        <input class="btn btn-success btn-lg pull-right" type="submit" name="submit" id="submit" value="Log In">
                </form>
                        <button class="btn btn-primary btn-lg pull-right modalTrigger" id="modalTrigger">Sign Up</button>
        <!-- MODAL START  -->
           <div class="modal" id="modal">
                <!-- MODAL CONTENT START -->
                <div class="modal-content">
                  <div class="modal-header">
                   <span id="signupfree" class="pull-left">Sign up for free now!</span>
                    <span class="close" id="modalCloser">&#10006;</span>
                  </div>
                  <div class="modal-body">
                    <form action="index.php" method="POST">
                       <div class="form-group">
                       <label for="email" class="label label-primary"></label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Your email" value="<?php if (isset($_POST['email'])) {echo addslashes($_POST['email']);} ?>">
                       </div>
                       <div class="form-group">
                       <label for="password" class="label label-primary"></label>
                        <input class="form-control" type="password" id="password" name="password" placeholder="Your Password" value="<?php if (isset($_POST['password'])) {echo addslashes($_POST['password']);} ?>">
                       </div>    
                        <input class="btn btn-sign-up btn-success btn-lg pull-right" type="submit" name="submit" id="submit" value="Sign Up">
                    </form>
                  </div>
                </div>
                <!--MODAL CONTENT END-->
           </div>
        <!-- MODAL END  -->
    </div>
    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>