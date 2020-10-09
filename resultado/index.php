<?php
require_once('biblioteca_banco_resultado.php');
$acao = isset($_REQUEST['acao'])?$_REQUEST['acao']:'cadastro';

switch($acao){
    case 'inserir':
        $resultados = $_POST['resultados'];
        $quiz_id = $_POST['quiz_id'];

        $mensagem = inserirResultados($resultados, $quiz_id);
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
