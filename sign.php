<?php

include('contact.php');

if(isset($_POST['btn-sign'])){

  $fullname=$_POST['in-name'];
  $email=$_POST['in-email'];
  $pas1=$_POST['in-pass1'];
  $pas2=$_POST['in-pass2'];

  if($pas1===$pas2){
    $qu="INSERT INTO `users` (name,email,password)VALUES('$fullname','$email','$pas1')";
    $res=mysqli_query($con,$qu);
    if(isset($res)){
      echo '<div class="success"><h3>Sent Successfully</h3></div>';
      header("refresh:2;url=login.php");
    }
  }else{
    echo '<div class="error"><h3>Password not confirmed</h3></div>';
  }

}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="styel.css" />
  </head>
  <body>
    <form action="sign.php" method="POST">
      <div class="form-sign">
        <div class="login-div">
          <div class="login-tit">
            <h1>Sign Up</h1>
          </div>
          <div class="in-login">
            <label for="">Full Name</label>
            <input type="text" name="in-name" required />
          </div>
          <div class="in-login">
            <label for="">Email</label>
            <input type="email" name="in-email" required />
          </div>
          <div class="in-login">
            <label for="">Password</label>
            <input type="password" name="in-pass1" required />
          </div>
          <div class="in-login">
            <label for="">Confirmation Password</label>
            <input type="password" name="in-pass2" required />
          </div>
          <div class="btn-login">
            <center><button type="submit" name="btn-sign">Register</button></center>
          </div>
        </div>
        <div class="sign-div">
          <div class="sign-tit">
            <h1>Welcome to Sign up</h1>
            <h4>Do have an account ?</h4>
          </div>
          <div class="btn-sign">
            <center><a href="login.php"><button type="button">Login</button></a></center>
          </div>
        </div>
      </div>
    </form>
  </body>
</html>
