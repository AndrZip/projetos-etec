<?php
    if (isset($_POST['nome']) && isset($_POST['rua']) && isset($_POST['cidade']) && isset($_POST['estado']) && isset($_POST['telefone']) && isset($_POST['email']) && isset($_POST['senha'])) {
        
        $nome = $_POST['nome'];
        $rua = $_POST['rua'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        echo "<h2>Dados Recebidos:</h2>";
        echo "Nome: $nome<br>";
        echo "Rua: $rua<br>";
        echo "Cidade: $cidade<br>";
        echo "Estado: $estado<br>";
        echo "Telefone: $telefone<br>";
        echo "Email: $email<br>";
        echo "Senha: $senha<br>";
    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }
?>
