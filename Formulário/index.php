<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Formulário</title>
</head>

<body>
    <div class="profile">

        <img src="img/profile-user.png" alt="" height="50px" width="50px">

    </div>
    <div class="form-container">
        <form id="myForm" action="send.php" method="post">

            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required>

            <label for="dataNascimento">Data de Nascimento:</label>
            <input type="date" id="dataNascimento" name="dataNascimento" required>

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="estudante">Você é estudante? </label>
            <input type="checkbox" id="estudante" name="estudante">

            <button type="submit">Enviar</button>

        </form>
    </div>

</body>

</html>