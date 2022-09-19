<?php
    $dsn = "mysql:dbname=tb240126db;hos=localhost";
    $user = "tb-240126";
    $password = "5fvFKDXttP";
    $pdo = new PDO($dsn, $user, $password,
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
                    
    $sql = "CREATE TABLE IF NOT EXISTS users3"
    ." ("
    . "id INT AUTO_INCREMENT PRIMARY KEY,"
    . "name VARCHAR(50) NOT NULL UNIQUE,"
    . "password VARCHAR(255) NOT NULL,"
    . "created_at DATETIME DEFAULT CURRENT_TIMESTAMP"
    .");";
    $stmt = $pdo->query($sql);
?>