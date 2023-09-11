<?php 

    $pdo = new PDO("mysql:host=localhost:3306;dbname=crud","root","");

    $sql = $pdo->query('SELECT * FROM clientes');
    
?>