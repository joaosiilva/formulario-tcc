<!DOCTYPE html>

<?php
include_once('actions/conexao.php');
include('actions/listar.php');

?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
</head>

<body>

    <table border="1">
        <tr>
            <th>
                ID
            </th>
            <th>
                Nome
            </th>
            <th>
                Email
            </th>
            <th>
                Telefone
            </th>
            <th>
                Credencial
            </th>
            <th>
                Ações
            </th>
        </tr>
        <?php foreach ($lista as $cliente): ?>

            <tr>
                <td>
                    <?=$cliente['id'] ?>
                </td>
                <td>
                    <?=$cliente['nomeCliente'] ?>
                </td>
                <td>
                    <?=$cliente['email'] ?>
                </td>
                <td>
                    <?=$cliente['telefone'] ?>
                </td>
                <td>
                    <?=$cliente['numConvenio'] ?>
                </td>
                <td>
                    <a href="formularioAtualizar.php?id=<?=$cliente['id'] ?>">Editar</a>
                    <a href="actions/excluir.php?id=<?=$cliente['id'] ?>">Excluir</a>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>

    <a href="formularioCadastro.php">Cadastrar Usuario</a>

</body>

</html>