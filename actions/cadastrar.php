<?php 
require ('conexao.php');

$nome = filter_input(INPUT_POST,'nome');
$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
$numCredencial = filter_input(INPUT_POST,'numCredencial');
$RG = filter_input(INPUT_POST,'RG');
$telefone = filter_input(INPUT_POST,'telefone');
$endereco = filter_input(INPUT_POST,'endereco');


$sql = $pdo->prepare("INSERT INTO `clientes` (`nomeCliente`, `numConvenio`, `RG`, `telefone`, `endereco`, `email`)
 VALUES 
(:nome, :numConvenio, :RG, :telefone, :endereco, :email);");

$sql->bindValue(':nome', $nome);
$sql->bindValue(':email', $email);
$sql->bindValue(':numConvenio', $numCredencial);
$sql->bindValue(':RG', $RG);
$sql->bindValue(':telefone', $telefone);
$sql->bindValue(':endereco', $endereco);

$sql->execute();

header("Location: \TCC\FORMULARIO\index.php")

?>