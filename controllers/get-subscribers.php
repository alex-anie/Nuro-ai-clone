<?php

require_once '../models/Database.php';

$db = new Database();

$subscribers = $db->fetchAll("SELECT * FROM subscribers");


