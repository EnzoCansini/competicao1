<?php 
//conexao com o banco de dados

$dbHost = "localhost";
$dbNomeBanco="sistema1";
$dbUser="root";
$dbPassword="";
$dbPort="3306";


try {
    $conexao = new PDO("mysql:host=$dbHost; dbname=$dbNomeBanco; charset=utf8", $dbUser, $dbPassword);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    echo "Erro ao conectar ao banco de dados " . $erro->getMessage() ;  // lembrar de apagar o getMessage em PROD.
}



?>