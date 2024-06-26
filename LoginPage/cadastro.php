<?php
include('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter dados do formulário
    $usuario = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificar se os campos não estão vazios
if (!empty($usuario) && !empty($senha)) {
    // Criptografar a senha
    $hashed_password = password_hash($senha, PASSWORD_DEFAULT);

    // Inserir dados no banco de dados
    $sql = "INSERT INTO usuarios (email, senha) VALUES ('$usuario', '$hashed_password')";

    if ($mysqli->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
        header("Location: index.php");
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $mysqli->error;
    }
} else {
    echo "Por favor, preencha todos os campos.";
}
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            background-color: #121212;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .cadastro-container {
            background-color: #1c1c1c;
            border: 1px solid #333;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }
        .cadastro-container h2 {
            margin-bottom: 20px;
            color: #fff;
            text-align: center;
        }
        .cadastro-container input[type="text"],
        .cadastro-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            background: #333;
            color: #fff;
            box-sizing: border-box;
        }
        .cadastro-container button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #5568FE;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .cadastro-container button:hover {
            background: #4457d1;
        }
        .cadastro-container a {
            display: block;
            margin-top: 10px;
            text-align: center;
            color: #5568FE;
            text-decoration: none;
        }
        .cadastro-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="cadastro-container">
        <form action="cadastro.php" method="post">
            <h2>Cadastro</h2>
            <input type="text" name="email" placeholder="Digite um email valido" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Cadastrar</button>
            <a href="index.php">Já tem uma conta? Entrar</a>
        </form>
    </div>
</body>
</html>