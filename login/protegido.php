<?php
        // Inicia a sessão
        session_start();

        // Verifica se o usuário está autenticado
        if (!isset($_SESSION['usuario'])) {
                // Usuário não autenticado, redireciona para a página de login
                header('Location: acesso.php');
                exit;
        }
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>Página protegida</title>
</head>
<body>
        <h2>Página protegida</h2>
        <p>Olá, <?php echo $_SESSION['usuario']; ?>. Você está autenticado.</p>
        <p><a href="index.php">Sair</a></p>
</body>
</html>