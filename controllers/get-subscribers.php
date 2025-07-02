<?php

require_once '../models/Database.php';

$page_limit = 4;
$page = isset($_GET['page_number']) ? (int)$_GET['page_number'] - 1 : 0;
$start = $page * $page_limit;

$db = new Database();

//Get subscribers for current page
$subscribers = $db->fetchAll("SELECT * FROM `subscribers` ORDER BY `id` DESC LIMIT $start, $page_limit");


//Get total Count
$all_subs = $db->fetchAll("SELECT * FROM `subscribers`");
$number_of_subs = count($all_subs);
$number_of_pages = ceil($number_of_subs / $page_limit);

