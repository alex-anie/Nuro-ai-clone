<?php 

class Database {
    private $pdo;
    private $stmt;
    function __construct($host = 'localhost', $db = 'nuroai', $user = 'root', $pass = '4444', $charset = 'utf8mb4'){
        $dsn = "mysqli:host=$host;dbname=$$db,charset=$charset";

        $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ];

    try{
        $this->pdo = new PDO($dsn, $user, $pass, $options);
    }catch(PDOException $e){
        die("Database failed to connect: " . $e->getMessage());
    }
    }

    // Prepare and execute a query statement
    function query(string $sql, array $params = []){
        $this->stmt = $this->pdo->prepare($sql);
        return $this->stmt->execute($params);
    }

    // Fetch all queries 
    function fetchAll(string $sql, array $params = []){
        $this->query($sql, $params);
        return $this->stmt->fetchAll();
    }

    // fetch a single query 
    function fetch(string $sql, array $params = []){
        $this->query($sql, $params);
        return $this->stmt->fetch();
    }
};