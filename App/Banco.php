<?php

namespace App;

use PDO;
use PDOException;

class Banco {

    const SERVIDOR = 'localhost';
    const USUARIO = 'felipeneves';
    const SENHA = 'qwe@123';
    const BANCO = 'login';

    private PDO $conexao;

    public function __construct()
    {
        try {
            $this->conexao = new PDO("mysql:host=" . self::SERVIDOR . ";dbname=" . self::BANCO, self::USUARIO, self::SENHA);
        } catch(PDOException $e) {
            echo 'Tivemos um problema.. por favor, retorne mais tarde.';
        }
    }

    public function buscar(string $sql, string $email, string $senha)
    {
        $retorno_consulta = $this->conexao->prepare($sql);
        $retorno_consulta->bindParam(':email', $email, PDO::PARAM_STR);
        $retorno_consulta->bindParam(':senha', $senha, PDO::PARAM_STR);
        $retorno_consulta->execute();
        return $retorno_consulta->fetch(PDO::FETCH_ASSOC);
    }



}



?>