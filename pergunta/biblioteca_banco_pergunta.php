<?php
function obterConexao(){
    $conexao = mysqli_connect('127.0.0.1','root','','meuquiz') or die('Erro ao conectar ao banco de dados');
    return $conexao;
}

function inserirPergunta($perguntas, $alternativas, $quiz_id) {

    $conexao = obterConexao();
    $ids = [];
    foreach ($perguntas as $pergun) {
        $pergunta = $pergun['pergunta'];
        $link = $pergun['link'];
        $sql = "INSERT INTO pergunta (pergunta,imagem,quiz_id) VALUES ('$pergunta','$link', '$quiz_id')";
        @mysqli_query($conexao,$sql);
        $id = mysqli_insert_id($conexao);
        array_push($ids, $id);
    }

    $array = [];

    foreach ($alternativas as $alter) {
        if ($alter['check'] == 'true') {
            $alter['check'] = 1;
        } else {
            $alter['check'] = 0;
        }
        array_push($array, $alter);
    }
    foreach ($array as $index => $alter) {
        if ($index < 4) {
            $pergunta_id = $ids[0];
        } else if ($index < 8) {
            $pergunta_id = $ids[1];
        } else {
            $pergunta_id = $ids[2];
        }

        $alternativa = $alter['alternativa'];
        $check = $alter['check'];

        $sqlDois = "INSERT INTO alternativa (alternativa, correta, pergunta_id) VALUES ('$alternativa', '$check', '$pergunta_id')";

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
