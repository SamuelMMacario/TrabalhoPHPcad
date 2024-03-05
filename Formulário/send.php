<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Formulário</title>
</head>

<body>
    <div class="form-container">

        <?php

        // Definir variáveis
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        // $dataNascimento = $_POST['dataNascimento'];
        $dataNascimento = date('d/m/Y', strtotime($_POST['dataNascimento']));
        $cpf = $_POST['cpf'];
        $estudante = isset($_POST['estudante']) && $_POST['estudante'] !== '' ? 'sim' : 'não';


        $dataAtual = date('Y-m-d');
        $diasDeVida = floor((strtotime($dataAtual) - strtotime($dataNascimento)) / 86400);  
        $idade = floor($diasDeVida / 365.25);

        // Validar dados
        if (empty($nome) || empty($email) || empty($telefone) || empty($dataNascimento) || empty($cpf)) {
            echo "Erro: Todos os campos são obrigatórios.";
            exit;
        } else {
            echo "Obrigado por fazer o cadastro. <br> Segue os dados preenchidos no formulário: <br><br>";
        }

        echo "Eu $nome, $estudante sou estudante. Meu número de CPF é $cpf, nasci em $dataNascimento, tenho $idade anos de idade. Meu telefone para contato é $telefone. Meu e-mail é $email.
        <br><br>";
        // Processar dados
        // Enviar email
        // Salvar no banco de dados

        echo "Obrigado por entrar em contato!";

        ?>
    </div>
</body>