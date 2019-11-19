<?php
    include_once 'includes/autoload.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="script" href="js/script.js">
    <title>School Result Checker</title>

</head>

<body>

    <!-- header and nav-->

    <div class="header" id="myHeader">
        <img src="images/logo.jpg" width="5%" alt="logo">
        <a href="index.php"><i class="fas fa-home"></i> HOME</a>
        <a href="signin.php"><i class="fas fa-sign-in-alt"></i> LOGIN</a>
        <a href="registration.php"><i class="fas fa-envelope-open"></i> SIGN UP</a>
    </div>
    
    <?php
        if (isset($_SESSION['uid'])) {
            echo '<div class="slideSect" ></div>';
        } else {
            echo '<div class="slideSect" >
                <img class="mySlide" src="images/College.jpeg" style="width: 100%;" alt="College">
                <img class="mySlide" src="images/campus.jpg" style="width: 100%;" alt="Campus">
                <img class="mySlide" src="images/sport.jpg" style="width: 100%;" alt="Sport">
                </div>';
        }
    ?>

<script>
    var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlide");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

