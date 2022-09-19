<?php
    $dsn ="mysql:dbname=tb240126db;host=localhost";
    $user ="tb-240126";
    $password ="5fvFKDXttP";
     $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
     $sql='SHOW TABLES';
     $result = $pdo->query($sql);
     foreach($result as $row){
        echo $row[0];
        echo '<br>';
     }
     echo "<hr>"
?>