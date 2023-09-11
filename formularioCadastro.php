<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastar Usuário</title>
    <link rel="stylesheet" type="text/css" href="css/stylecdt.css">
</head>

<body>

    <div class="container">

        <h2>Cadastar Usuário</h2>

        <form method="POST" action="actions/cadastrar.php"> 
            <!-- style="display:flex; flex-direction:column; width: 30%; gap: 1em" -->

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="sexo">Sexo</label>
                <select id="sexo" name="sexo">
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="numCredencial">Número da Credencial</label>
                <input type="text" name="numCredencial"></input>
            </div>

            <div class="form-group">

                <label for="RG">RG</label>
                <input type="text" name="RG"></input>
            </div>

            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="cpf" required>
            </div>

            <div class="form-group">
                <label for="numero">Telefone</label>
                <input type="number" id="numero" name="numero" required>
            </div>

            <div class="form-group">
                <label for="endereco">Endereço Completo</label>
                <input type="text" name="endereco"></input>
            </div>

            <input type="submit" value="Enviar">

        </form>
    </div>

</body>

</html>