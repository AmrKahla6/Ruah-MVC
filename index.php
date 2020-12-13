<?php

    session_start();

    // Define Constants
    define('DS'   , DIRECTORY_SEPARATOR);
    define('ROOT' , dirname(__FILE__));
    $url = isset($_SERVER['PATH_INFO']) ? explode('/' , trim($_SERVER['PATH_INFO'] , '/')) : [] ;

    require_once(ROOT . DS . 'core' . DS . 'bootstrap.php');

