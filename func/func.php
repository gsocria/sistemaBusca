<?php

include_once('./config/constantes.php');
include_once('./config/conexao.php');

    function listar($conteudo,$tabela) {
        $conn = conectar();
        $listar = $conn->query("SELECT $conteudo FROM $tabela");
        
        if ($listar->rowCount() > 0) {
            return $listar->fetchAll(PDO::FETCH_OBJ);
        } else {
            return 'Vazio';
        }
    }

?>