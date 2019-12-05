<?php
    echo "Logged in as, <b>".$_SESSION['uname'].'</b>';

    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if (strpos($url, 'home') == false) {
        echo '&nbsp; > <a href="home.php">Dashboard</a>';
    }
?>