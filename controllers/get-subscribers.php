<?php

require_once '../models/Database.php';

$start = 0;
$page_limit = 4;

$db = new Database();

// Select all subscribers from the table
$subscribers = $db->fetchAll("SELECT * FROM `subscribers` ORDER BY `id` DESC LIMIT $start, $page_limit");


//Pagination
$all_subs = $db->fetchAll("SELECT * FROM `subscribers`");
$number_of_subs = count($all_subs);
$number_of_pages = $number_of_subs / $page_limit;

