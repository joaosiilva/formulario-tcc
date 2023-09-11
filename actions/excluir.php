<?php 
require('conexao.php');

$id = filter_input(INPUT_GET, 'id');

 $sql = $pdo->prepare("DELETE FROM clientes WHERE id = :id ");
 $sql->bindValue(':id', $id);
 $sql->execute();

 header("Location: /TCC/FORMULARIO/index.php")

?>