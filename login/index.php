<?php
	require_once('biblioteca_banco_login.php');
	$acao = isset($_REQUEST['acao'])?$_REQUEST['acao']:'login';

	switch($acao){
        case 'inserir':
            foreach ( $_POST as $chave => $valor ) {
                $chave = trim( strip_tags( $valor ) );
                if ( empty ( $valor ) ) {
                    $erro = 1;
                break;
                } else {
                    $erro = 0;
                }
            }

            if ($erro === 1) {
                echo "<h2>Por favor preencha todos os campos!</h2>";
            } else {
                $nome = $_POST['nome'];
                $login = $_POST['login'];
                $senha = $_POST['senha'];

                $mensagem = inserirUsuario($nome, $login, $senha);
                echo $mensagem;
            }
            echo "<a href=\"cadastro.php\">Ir para Cadastro</a>";
        break;
        case 'login':
            include("login.php");
        break;
        case 'verificaLogin':
            foreach ( $_POST as $chave => $valor ) {
                $chave = trim( strip_tags( $valor ) );
                if ( empty ( $valor ) ) {
                    $erro = 1;
                break;
                } else {
                    $erro = 0;
                }
            }
            if ($erro === 1) {
                echo "<h2>Por favor preencha todos os campos!</h2>";
                echo "<a href=\"login.php\">Voltar ao login</a>";
            } else {
                if (isset($_POST)) {
                    $login = $_POST['login'];
                    $senha = $_POST['senha'];
                    $mensagem = verificaUsuario($login, $senha);
                    echo $mensagem;
                }
            }
        break;
    }
