<?php

spl_autoload_register('autoload');

function autoload ($className){

    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if (strpos($url, 'includes') !== false) {
        $path = '../classes/';
    } else {
        $path = 'classes/';
    }

    $ext = '.class.php';

    include_once $path . $className . $ext;
}

