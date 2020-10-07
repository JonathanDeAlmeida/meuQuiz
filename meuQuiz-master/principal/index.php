<?php
require_once('biblioteca_banco_principal.php');
$acao = isset($_REQUEST['acao'])?$_REQUEST['acao']:'principal';

switch($acao){
    case 'inserir':
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $mensagem = inserirUsuario($nome, $login, $senha);
        echo $mensagem;
        break;
    case 'principal':
        include("principal.php");
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

