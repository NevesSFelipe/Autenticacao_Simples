<?php

require_once 'vendor/autoload.php';

use App\Usuarios;

$usuario = new Usuarios;

$mensagem = isset($_SESSION['mensagem']) ? $_SESSION['mensagem'] : '';
unset($_SESSION['mensagem']);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario->acessarSistema();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="POST">

        <h1>Login</h1>

        <label for="email">Email</label>
        <input type="email"  name="email" id="email" placeholder="Digite seu email">
        
        <label for="senha">Senha</label>
        <input type="password"  name="senha" placeholder="Digite sua senha">

        <button type="submit">Acessar</button>
    </form>

    <?php echo "<p>" . $mensagem . "</p>"; ?>

</body>
</html>