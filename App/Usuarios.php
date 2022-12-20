<?php

namespace App;

use App\Banco;

class Usuarios {

    private Banco $banco;

    public function __construct()
    {
        session_start();
        $this->banco = new Banco();
    }
    
    public function acessarSistema()
    {
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $possuiCamposVazios = $this->validarCampos($dados);

        if($possuiCamposVazios) {
            $_SESSION['mensagem'] = 'Por favor, preencha todos os campos.';
            header('Location: index.php');
            return;
        }
        
        $senhaCriptografada = $this->criptografarSenha($dados['senha']);
        
        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $usuarioEncontrado = $this->banco->buscar($sql, $dados['email'], $senhaCriptografada);
        
        if(!$usuarioEncontrado) {
            $_SESSION['mensagem'] = 'Email / Senha Inválidos.';
            header('Location: index.php');
            return;                
        }

        $_SESSION['nome'] = $usuarioEncontrado['nome'];
        header('Location: dashboard.php');
    }

    public function sairSistema()
    {
        session_destroy();
        header('Location: index.php');
    }

    public function validarAcesso()
    {
        if(!isset($_SESSION['nome'])) {
            $_SESSION['mensagem'] = 'Acesso negado! Por gentileza, digite suas credenciais.';
            header('Location: index.php');
        }
    }

    private function validarCampos(array $dadosForm)
    {
        foreach($dadosForm as $item) {
            if(empty($item)) {
                return true;
            }
        }
        return false;
    }

    private function criptografarSenha(string $senhaOriginal)
    {
        return md5($senhaOriginal);
    }

}

?>