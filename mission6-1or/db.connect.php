<?php
/* ①　データベースの接続情報を定数に格納する */
$dsn = "mysql:dbname=tb240126db;hos=localhost";
$user = "tb-240126";
$password = "5fvFKDXttP";

//②　例外処理を使って、DBにPDO接続する
try {
    $pdo = new PDO($dsn,$user,$password,[
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES =>false
    ]);
} catch (PDOException $e) {
    echo 'ERROR: Could not connect.'.$e->getMessage()."\n";
    exit();
}