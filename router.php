<?php

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

if($url === '/' || $url === '/home')
    {
        require 'views/home.php';
    }
elseif($url === '/technology' || $url === '/technologies')
    {
    require 'views/technology.php';
    }
elseif($url === '/solution' || $url === '/solutions')
    {
    require 'views/solution.php';
    }
    
elseif($url === '/company' || $url === '/companies')
    {
    require 'views/company.php';
    }
elseif($url === '/blog' || $url === '/blogs')
    {
    require 'views/blog.php';
    }
else 
    {
    require 'includes/404.php';
}