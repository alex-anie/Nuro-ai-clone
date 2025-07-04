<?php

require_once '../models/Database.php';

$title = '';
$content = '';
$avatar = '';

$error_statement = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(
        !empty(trim($_POST['title'])) && 
        !empty(trim($_POST['content']))  && 
        !empty(trim($_POST['avatar']))
    )
    {
        // Set the database
        $db = new Database();

        // set the values from the input tag to a variable
        $title =  trim($_POST['title']);
        $content = trim($_POST['content']);
        $avatar = trim($_POST['avatar']);

        // Validate Inputs here
        // 

        $db->query(
            "INSERT INTO blogs(title, content, avatar, created_at) VALUES(:title, :content, :avatar, NOW())", [
                "title" => $title,
                "content" => $content,
                "avatar" => $avatar
            ]
            );

    }else{

    }
}






