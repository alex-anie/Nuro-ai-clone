<?php

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

if($url === '/' || $url === '/home'){
    require 'views/home.php';
}else {
    require 'includes/404.php';
}