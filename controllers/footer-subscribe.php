<?php

require_once '../models/Database.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['email']) && !empty(trim($_POST['email']))){
        $db = new Database();

        $email = trim($_POST['email']);
        $date = date('Y-m-d');

        $db->query("INSERT iNTO subscribers(email, date) VALUES(:email, :date)", [
            'email' => $email,
            'date' => $date,
        ]);
    }
}
