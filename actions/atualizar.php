<?php
require('conexao.php');

    $id = filter_input(INPUT_POST, 'id');
    $nomeCliente = filter_input(INPUT_POST, 'nome');
    $numConvenio = filter_input(INPUT_POST, 'numCredencial');
    $RG = filter_input(INPUT_POST, 'RG');
    $telefone = filter_input(INPUT_POST, 'telefone');
    $endereco = filter_input(INPUT_POST, 'endereco');
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);



    if($id && $nomeCliente && $email) {
    $sql = $pdo->prepare("UPDATE clientes SET nomeCliente = :nomeCliente,
        numConvenio = :numConvenio, RG = :RG, telefone = :telefone,
        endereco = :endereco, email = :email WHERE id = :id ");

    $sql->bindValue(':id', $id);
    $sql->bindValue(':nomeCliente', $nomeCliente);
    $sql->bindValue(':numConvenio', $numConvenio);
    $sql->bindValue(':RG', $RG);
    $sql->bindValue(':telefone', $telefone);
    $sql->bindValue(':endereco', $endereco);
    $sql->bindValue(':email', $email);

    $sql->execute();

    header("Location: /TCC/FORMULARIO/index.php");
    } else {
        header("Location: /TCC/FORMULARIO/index.php");
    };



    ?>