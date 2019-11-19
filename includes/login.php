<?php

    include_once 'autoload.php';
    
    if (isset($_POST['submit'])) {

        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];

        if (empty($uname) || empty($pwd)) {
            header("Location: ../signin.php?login=empty");
            exit();
        } else {
            $login = new Login($uname, $pwd);
            $login->access();
            exit();
        }
    } else {
        header("Location: ../signin.php?login=page_not_found");
        exit();
    }