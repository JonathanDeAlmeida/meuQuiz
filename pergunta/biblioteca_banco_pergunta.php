<?php
function obterConexao(){
    $conexao = mysqli_connect('127.0.0.1','root','','meuquiz') or die('Erro ao conectar ao banco de dados');
    return $conexao;
}

function inserirPergunta($link, $pergunta, $alternativas) {

    $conexao = obterConexao();

    $sql = "INSERT INTO pergunta (pergunta,imagem,quiz_id) VALUES ('$pergunta','$link', 1)";

    $resultado = @mysqli_query($conexao,$sql);

    $id = mysqli_insert_id($conexao);

    foreach ($alternativas as $alter) {
        $sqlDois = "INSERT INTO alternativa (alternativa, correta, pergunta_id) VALUES ('$alter', true, '$id')";
        $resultadoDois = @mysqli_query($conexao, $sqlDois);
    }

    if ($resultadoDois === false){
        return "Erro ao cadastrar a pergunta";
    } else {
        return "Pergunta cadastrada com sucesso";
    }
}

function verificaUsuario($login, $senha) {

    $conexao = obterConexao();

    $sql = "SELECT id, login, senha FROM usuario WHERE login = '$login' and senha = '$senha'";

    $resultado = @mysqli_query($conexao, $sql);

    $colunas = mysqli_num_rows($resultado);

    if ($colunas < 1){
        return "Usuario não registrado";
    } else {
        return "UsuarioRegistrado";
    }
}
?>
