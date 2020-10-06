<?php
require_once('biblioteca_banco_quiz.php');
$acao = isset($_REQUEST['acao'])?$_REQUEST['acao']:'cadastro';

switch($acao){
    case 'inserir':
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $mensagem = inserirUsuario($nome, $login, $senha);
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
