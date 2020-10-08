<?php
require_once('biblioteca_banco_pergunta.php');
$acao = isset($_REQUEST['acao'])?$_REQUEST['acao']:'cadastro';

switch($acao){
    case 'inserir':
        $link = $_POST['link'];
        $pergunta = $_POST['pergunta'];
        $alternativas = $_POST['alternativas'];
        $mensagem = inserirPergunta($link, $pergunta, $alternativas);
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
