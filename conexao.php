<?php

$db_name = 'conex';
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';

try{
    $pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão realizada com o Banco de Dados realizada com sucesso!!!";
}catch(PDOException $erro){
    echo "Erro ao conectar ao banco de dados: ".$erro->getMessage();
}

?>