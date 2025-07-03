<?php

require_once '../models/Database.php';

$db = new Database();

// delete only if `delete` is set to numeric
if(isset($_GET['delete']) && is_numeric($_GET['delete'])){
    $id = $_GET['delete'];

    $db->query(
        "DELETE FROM subscribers WHERE id = :id", [
            'id' => $id
        ]
        );
};

// Redirect back to where the user came from
if(!empty($_SERVER['HTTP_REFERER'])){
    header("Location: ". $_SERVER['HTTP_REFERER']);

    exit;
}else {
    header("Location: /dashboard/subscribes");
    exit;
}