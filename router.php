<?php

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

if($url === '/' || $url === '/home'){
    require 'views/home.php';
}elseif($url === '/technology' || $url === '/technologies'){
    require 'views/technology.php';
} else {
    require 'includes/404.php';
}