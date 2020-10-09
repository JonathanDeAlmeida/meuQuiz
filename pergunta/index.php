<?php
require_once('biblioteca_banco_pergunta.php');
$acao = isset($_REQUEST['acao'])?$_REQUEST['acao']:'cadastro';

switch($acao){
    case 'inserir':
        $perguntas = $_POST['perguntas'];
        $alternativas = $_POST['alternativas'];
        $quiz_id = $_POST['quiz_id'];
        $mensagem = inserirPergunta($perguntas, $alternativas, $quiz_id);
        echo $mensagem;
        break;
    case 'cadastro':
        include("cadastro.php");
        break;
    case 'verificaLogin':
        if (isset($_POST)) {
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $mensagem = verificaUsuario($login, $senha);
            echo $mensagem;
        }
        break;
}
