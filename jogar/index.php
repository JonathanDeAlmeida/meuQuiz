<?php
require_once('biblioteca_banco_jogar.php');
$acao = isset($_REQUEST['acao'])?$_REQUEST['acao']:'exibicao';

switch($acao){
    case 'inserir':
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $mensagem = inserirUsuario($nome, $login, $senha);
        echo $mensagem;
        break;
    case 'exibicao':
        include("exibicao.php");
        break;
    case 'verificarResposta':
        if (isset($_POST)) {
            $alternativa= $_POST['alternativa'];
            $quiz_id = $_POST['quiz_id'];
            $usuario_id = $_POST['usuario_id'];
            $mensagem = verificarResposta($alternativa, $quiz_id, $usuario_id);
            echo $mensagem;
        }
        break;
}
