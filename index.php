<?php

include('contact.php');

error_reporting(0);

$getId=$_GET['id'];

$qu="SELECT * FROM `users` WHERE id='$getId' ";
  $res=mysqli_query($con,$qu);
  $row=mysqli_fetch_assoc($res);

  $name=$row['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="styel.css">
</head>

<header>

    <nav>
        <div class="nav-log">
            <h2>Wave Techno</h2>
        </div>
        <div class="nav-pag">
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">home</a></li>
                <li><a href="#">home</a></li>
            </ul>
        </div>
        
            <?php 
                if(!$getId){

                    ?>
                    <div class="nav-btn">
                        <a href="login.php"><button>Login</button></a>
                    </div>
                    <?php

                   

                }else{
                    ?>
                    <div class="nav-name">
                    <h3><?php echo $name; ?></h3>
                    </div>
                    
                <?php
                }

            ?>
            
        
    </nav>

</header>

<body>
    
    <main>
        <div class="main-titel">
            <h1>Mass People <br> Oriented Software
            </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. sed do eiusmod tempor incididunt.</p>
        </div>


        <div class="main-imag">
            <img src="images/xhome-left-1.png.pagespeed.ic.7_SNeuKb33 (1).webp"  alt="">
        </div>

    </main>

    <div class="main2">
        <div class="main2-titel">
            <h1>HOW IT WORK FOR YOU</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        </div>
        <div class="main2-box">
            <div class="main2-box1">
                <div class="main2-box-icon">
                    <img src="icons/display.png" alt="">
                </div>
                <h2>Stunning Visuals</h2>
                <p>Here, I focus on a range of items and features that we use in life without giving them a second thought such as Coca Cola.</p>
            </div>
            <div class="main2-box2">
                <div class="main2-box-icon">
                    <img src="icons/code.png" width="50px" height="50px" alt="">
                </div>
                <h2>Stunning Visuals</h2>
                <p>Here, I focus on a range of items and features that we use in life without giving them a second thought such as Coca Cola.</p>
            </div>
            <div class="main2-box3">
                <div class="main2-box-icon">
                    <img src="icons/alarm.png" width="50px" height="50px" alt="">
                </div>
                <h2>Stunning Visuals</h2>
                <p>Here, I focus on a range of items and features that we use in life without giving them a second thought such as Coca Cola.</p>
            </div>
        </div>
    </div>

    

</body>

<footer>
    <h4>Copyright ©2022 All rights reserved | This template is made with  by Saif Malallah</h4>
</footer>

</html>