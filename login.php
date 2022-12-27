<?php

include('contact.php');

error_reporting(0);

if(isset($_POST['btn-login'])){
  $email=$_POST['in-email'];
  $pass=$_POST['in-pass'];

  $qu="SELECT * FROM `users` WHERE email='$email' AND password='$pass'";
  $res=mysqli_query($con,$qu);
  $row=mysqli_fetch_assoc($res);

  $id=$row['id'];

  if($row['email']===$email && $row['password']===$pass ){
    header('location:index.php?id='.$id.'');
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
    <title>Login</title>
    <link rel="stylesheet" href="styel.css" />
  </head>

  <body>
    <form action="login.php" method="POST">
      <div class="form-login">
        <div class="login-div">
          <div class="login-tit">
            <h1>Sign in</h1>
          </div>
          <div class="in-login">
            <label for="">Email</label>
            <input type="email" name="in-email" required />
          </div>
          <div class="in-login">
            <label for="">Password</label>
            <input type="password" name="in-pass" required />
          </div>
          <div class="btn-login">
            <center><button type="submit" name="btn-login">Login</button></center>
          </div>
        </div>

        <div class="sign-div">
          <div class="sign-tit">
            <h1>Welcome to Login</h1>
            <h4>Don't have an account ?</h4>
          </div>
          <div class="btn-sign">
            <center><a href="sign.php"><button type="button">Sign Up</button></a></center>
          </div>
        </div>
      </div>
    </form>
  </body>
</html>
