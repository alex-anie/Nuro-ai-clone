<?php

require_once 'core/router.php';

//Pages
router('/', 'views/home.php');
router('/technology', 'views/technology.php');
router('/solution', 'views/solution.php');
router('/company', 'views/company.php');
router('/blog', 'views/blog.php');
router('/dashboard', 'views/dashboard.php');

// Download Pages
router('/dashboard/subscribes', 'views/dashboard/subscribe.php');
router('/dashboard/blogs', 'views/dashboard/blogs.php');

// Resolve the current URL
resolve();