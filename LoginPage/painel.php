<?php

include('protect.php');
if (!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <style>
        body {
            background-color: #121212;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            color: #fff;
        }
        .painel-container {
            background-color: #1c1c1c;
            border: 1px solid #333;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
            text-align: center;
        }
        .painel-container h2 {
            margin-bottom: 20px;
            color: #fff;
        }
        .painel-container p {
            margin-top: 20px;
        }
        .painel-container a {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            background: #5568FE;
            color: #fff;
            text-decoration: none;
            margin-top: 20px;
            transition: background 0.3s;
        }
        .painel-container a:hover {
            background: #4457d1;
        }
    </style>
</head>
<body>
    <div class="painel-container">
        <h2>Bem-vindo ao Painel, <?php echo $_SESSION['nome']; ?>.</h2>
        <p>
            <a href="logout.php">Sair</a>
        </p>
    </div>
</body>
</html>