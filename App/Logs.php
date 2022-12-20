<?php

namespace App;

class Logs {

    public function registrarLog(string $nome_arquivo, string $msg)
    {
        $msgLog = date('d-m-Y H:i:s') . ' : ' . $msg;
        file_put_contents("log/$nome_arquivo.log", $msgLog . PHP_EOL, FILE_APPEND );

    }

}


?>