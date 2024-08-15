<?php
session_start(); // Inicia a sessão ou retoma a sessão existente

// Verifica se o usuário está autenticado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php"); // Redireciona para a página de login se não estiver autenticado
    exit(); // Garante que o redirecionamento ocorra e o script pare aqui
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Restrita</title>
</head>
<body>
    <h1>Bem-vindo à Página Restrita</h1>
    <p>Olá, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
    <a href="logout.php">Sair</a> <!-- Link para fazer logout -->
</body>
</html>
