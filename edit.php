<?php 

include('contact.php');

error_reporting(0);

$gatus=$_GET['us'];


$qu="SELECT * FROM  `users` WHERE `id`='$gatus' ";
$res=mysqli_query($con,$qu);
$row=mysqli_fetch_assoc($res);

$fullname=$row['name'];
$email=$row['email'];


if(isset($_POST['btn-edit'])){

  $name=$_POST['in-name'];
  $in_email=$_POST['in-email'];
  $idhd=$_POST['in-id'];

  $qu_up="UPDATE users SET name='$name' , email='$in_email' WHERE id='$idhd'";
  $res_up=mysqli_query($con,$qu_up);

  if(isset($res_up)){

    echo '<div class="success"><h3>Sent Successfully</h3></div>';
    // header('refresh:1;url=edit.php?us='.$idhd.'');
    header('refresh:1;url=panel.php');
  }


  

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="styel.css">
</head>
<body>

    <form action="edit.php" method="POST">
        <div class="form-ed">
          <div class="ed-div">
            <div class="login-tit">
              <h1>Edit</h1>
            </div>
            <input type="hidden" name="in-id" value="<?php echo $gatus; ?>">
            <div class="in-login">
              <label for="">Full Name</label>
              <input type="text" name="in-name" value="<?php echo $fullname; ?>" required />
            </div>
            <div class="in-login">
              <label for="">Email</label>
              <input type="email" name="in-email" value="<?php echo $email; ?>" required />
            </div>
            <div class="btn-login">
              <center><button type="submit" name="btn-edit">Edit</button></center>
            </div>
          </div>
          
        </div>
      </form>
    
</body>
</html>