<?php

require_once 'core/router.php';

//Pages
router('/', 'controllers/home.php');
router('/technology', 'controllers/technology.php');
router('/solution', 'controllers/solution.php');
router('/company', 'controllers/company.php');
router('/blog', 'controllers/blog.php');

// Dashboard Pages
router('/dashboard/subscribes', 'controllers/dashboard/index.php');
router('/dashboard/blogs', 'controllers/dashboard/blogs.php');
router('/dashboard/create-blog', 'controllers/dashboard/create-blog.php');

//Search
router('/search-subscribers', 'controllers/dashboard/search-subscribers.php');

//Delete
router('/delete-subscribers', 'controllers/dashboard/delete-subscribers.php');

//Insert User from footer
router('/footer-subscriber', 'controllers/footer-subscribe.php');

// Resolve the current URL
resolve();

