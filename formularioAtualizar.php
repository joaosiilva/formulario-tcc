<?php 

require('actions/conexao.php');

$cliente = [];
$id =  filter_input(INPUT_GET, 'id');

if($id) {
    $sql = $pdo->prepare("SELECT * FROM clientes WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0 ) {
        $cliente = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header('Location: \TCC\FORMULARIO\index.php');
        exit;
    };
} else {
    header('Location: \TCC\FORMULARIO\index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Usuário</title>
    <link rel="stylesheet" type="text/css" href="css/styleatt.css">
</head>

<body>

    <div class="container">

        <h2>Atualizar Usuário</h2>

        <form method="POST" action="actions/atualizar.php">
            <!-- style="display:flex; flex-direction:column; width: 30%; gap: 1em" -->

            <div class="form-group">
                <input type="hidden" name="id" value="<?=$cliente['id']?>"></input>
            </div>

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" value="<?=$cliente['nomeCliente']?>"></input>
            </div>

            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="email" value="<?=$cliente['email']?>"> </input>
            </div>

            <div class="form-group">
                <label for="numCredencial">Número da Credencial</label>
                <input type="text" name="numCredencial" value="<?=$cliente['numConvenio']?>"></input>
            </div>

            <div class="form-group">
                <label for="RG">RG</label>
                <input type="number" name="RG" value="<?=$cliente['RG']?>"></input>
            </div>

            <div class="form-group">
                <label for="CPF">CPF</label>
                <input type="number" name="CPF" value="<?=$cliente['CPF']?>"></input>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="number" name="telefone" value="<?=$cliente['telefone']?>"></input>
            </div>

            <div class="form-group">
                <label for="endereco">Endereço Completo</label>
                <input type="text" name="endereco" value="<?=$cliente['endereco']?>"></input>
            </div>

            <input type="submit" value="Enviar">

        </form>
    </div>

</body>

</html>