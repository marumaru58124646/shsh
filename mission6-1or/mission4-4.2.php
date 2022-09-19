<?php
    //DB接続設定
    $dsn ="mysql:dbname=tb240126db;host=localhost";
    $user ="tb-240126";
    $password ="5fvFKDXttP";
     $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
     $sql='SHOW CREATE TABLE users07';
     $result=$pdo ->query ($sql);
     foreach($result as $row){
     echo $row[1];
     }
     echo "<hr>"
?>