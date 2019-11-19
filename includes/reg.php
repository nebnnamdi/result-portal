<?php

if (isset($_POST['submit'])){

    include_once "autoload.php";

    $firstName = $_POST['fname'];
    $middleName = $_POST['mname'];
    $lastName = $_POST['lname'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $fax = $_POST['fax'];
    $username = $_POST['uname'];
    $password = $_POST['pwd'];
    $rePassword = $_POST['repwd'];

    if ($password !== $rePassword) {
        echo "Password mismatch!";
        header("Location: ../registration.php?signup=Error!");
        exit();
    } else {
        $reg = new Signup($firstName, $middleName, $lastName, $address, $tel, $email, $fax, $username, $password);

        $reg->register();
        exit();
}

} else {
    header("Location: ../index.php?signup=page_error");
}
