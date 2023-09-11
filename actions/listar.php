<?php 
require('conexao.php');
    $lista = [];

    $sql = $pdo->query("SELECT * FROM clientes");

    if($sql->rowCount() > 0 ) {
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

?>