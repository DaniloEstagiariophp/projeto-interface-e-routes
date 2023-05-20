<?php
//ARQUIVO RESPONSÁVEL POR RECEBER O ARQUIVO GERECIADOR DE ROTAS
require __DIR__.'/vendor/autoload.php';
try {
    require __DIR__.'/routes/routes.php';
} catch (PDOException $e) {
    die("Error:Verifique a conexão com a internet, ou tente novamente mais tarde");
}
