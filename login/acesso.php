<?php
        // Inicia a sessão
        session_start();

        // Verifica se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Obtém as credenciais do formulário
                $usuario = $_POST['user'];
                $senha = $_POST['pass'];

                // Verifica se as credenciais estão corretas
                if ($usuario == 'admin' && $senha == '123456789') {
                        // Credenciais corretas, redireciona para a página protegida
                        $_SESSION['usuario'] = $usuario;
                        header('Location: protegido.php');
                        exit;
                } else {
                        // Credenciais incorretas, exibe uma mensagem de erro
                        $mensagem = 'Usuario ou senha incorretos.';

                }
        }
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>Página de Login</title>
</head>
<body>
        <center>
        <?php if (isset($mensagem)): ?>
                <script>
                        alert("<?php echo $mensagem; ?>");
                </script>
        <?php endif; ?>
        <h2>Página de Login</h2>
        <form action="acesso.php" method="post">
                <label for="usuario">Usuário:</label>
                <input type="text" id="user" name="user"><br><br>
                <label for="senha">Senha:</label>
                <input type="password" id="pass" name="pass"><br><br>
                <input type="submit" value="Entrar">
        </form>
        </cemter>
</body>
</html>