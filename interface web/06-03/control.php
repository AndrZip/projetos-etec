<?php
    if (isset($_POST['nome']) && isset($_POST['rua']) && isset($_POST['cidade']) && isset($_POST['estado']) && isset($_POST['telefone']) && isset($_POST['email']) && isset($_POST['senha'])) {
        
        $nome = $_POST['nome'];
        $rua = $_POST['rua'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        echo "<h1>Dados Recebidos:</h1>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Rua: $rua</p>";
        echo "<p>Cidade: $cidade</p>";
        echo "<p>Estado: $estado</p>";
        echo "<p>Telefone: $telefone</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Senha: $senha</p>";
    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }
?>
