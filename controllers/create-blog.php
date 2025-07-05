<?php

require_once '../models/Database.php';

$title = '';
$content = '';
$avatar = '';
$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){

  //Trim inputs
    $title = trim($_POST['title'] ?? '');
    $content = trim($_POST['content'] ?? '');
    $avatar = $_FILES['avatar'] ?? null;

    // === Validate title ===
    if(empty($title)){
        $errors[] = "Title is required";
    }elseif(strlen($title) > 500){
        $errors[] = "Title must not exceed 500 characters.";
    }elseif(strlen($title) < 20){
        $errors[] = "Title must be at least 20 characters long";
    }

    //=== Validate avatar (image upload) ===
    if(!$avatar || $avatar['error'] !== UPLOAD_ERR_OK){
        $errors[] = "An image is required.";
    }else {
        $allowed_types = ['image/jpeg', 'image/png'];

        if(!in_array($avatar['type'], $allowed_types)){
            $errors[] = "Only JPG or PNG images are allowed.";
        }
        if($avatar['size'] > 2 * 1024 * 1024){ // 2MB Limit
            $errors[] = "Image must be less than 2MB";
        }
    }

    //=== Insert to DB if no errors ===
    if(empty($errors)){
        //upload the file
        $filename = uniqid() . '-' . basename($avatar['name']);
        $targetPath = './uploads/' . $filename;
       $test=  move_uploaded_file($avatar['tmp_name'], $targetPath);
        $avatarPathForDB = $filename;
    
    
    // DB insert
    $db = new Database();

        $db->query(
            "INSERT INTO blogs(title, content, avatar, created_at) 
                VALUES(:title, :content, :avatar, NOW())", [
                    "title" => $title,
                    "content" => $content,
                    "avatar" => $avatarPathForDB
            ]
        );

    // Redirect to blogs list
    // header("Location: /dashboard/blogs");
    // exit;
    }
}






