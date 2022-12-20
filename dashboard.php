<?php

require_once 'vendor/autoload.php';

use App\Usuarios;

$usuario = new Usuarios;

$mensagem = isset($_SESSION['mensagem']) ? $_SESSION['mensagem'] : '';
unset($_SESSION['mensagem']);

$usuario->validarAcesso();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario->sairSistema();
}

?>

<h3>Olá, <?php echo $_SESSION['nome'] ?></h3>

<form action="dashboard.php" method="POST">
    <button type="submit">Sair</button>
</form>
