<?php

require_once '../models/Database.php';



$db = new Database();

$search_data = [];

if(isset($_POST['search'])){
    $search = $_POST['search'];

    // Use Like with wildcards and a named parameter
    $search_data = $db->fetchAll(
        "SELECT * FROM subscribers WHERE email LIKE :search", 
        ['search' => "%$search%"]
    );
}

require '../views/dashboard/search-subscribe.php';