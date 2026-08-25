<?php
define('DIR_PATH', realpath(dirname(__FILE__)));
define('ROOT_PATH', 'http://localhost/vscodezin/competicao1/');
// http://localhost/vscodezin/competicao1/pages/cadastro-proficional/

//Garante que a sessão esteja Habilitada
if (session_status()===PHP_SESSION_NONE){
    session_start();
}

// Inicializar as variaveis de Sessão
$mensagem = $_SESSION['mensagem'] ?? null;
$cor = $_SESSION['cor'] ?? null;
unset($_SESSION['mensagem']);
unset($_SESSION['cor']);

// variaveis Logado
$logado = $_SESSION['logado'] ?? FALSE;
$idUser = $_SESSION['idUser'] ?? "";
$nomeUser = $_SESSION['nomeUser'] ?? "";
