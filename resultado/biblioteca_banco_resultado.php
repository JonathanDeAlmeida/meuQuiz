<?php
function obterConexao(){
    $conexao = mysqli_connect('127.0.0.1','root','','meuquiz') or die('Erro ao conectar ao banco de dados');
    return $conexao;
}

function pegarResultado ($user_id) {

    $conexao = obterConexao();

    $sql = "SELECT id, pontos, quiz_id FROM pontos WHERE usuario_id = '$user_id'";

    $resultado = @mysqli_query($conexao,$sql);

    $object_pontos = mysqli_fetch_object($resultado);

    if (intval($object_pontos->pontos) > 3) {
        $pontos = 3;
    } else {
        $pontos = $object_pontos->pontos;
    }

    $sql = "SELECT titulo, descricao, imagem FROM resultado WHERE pontos = '$pontos' and quiz_id = '$object_pontos->quiz_id'";

    $resultadoDois = @mysqli_query($conexao,$sql);

    $object_resultado = mysqli_fetch_object($resultadoDois);

    $sql = "DELETE FROM pontos WHERE id = '$object_pontos->id'";

    @mysqli_query($conexao,$sql);

    return $object_resultado;
}

function inserirResultados ($resultados, $quiz_id) {

    $conexao = obterConexao();
    $count = 0;
    foreach ($resultados as $index => $result) {
        $count++;
        $titulo = $result['titulo'];
        $descricao = $result['descricao'];
        $link = $result['link'];
        $sql = "INSERT INTO resultado (titulo,descricao,imagem, pontos, quiz_id) VALUES ('$titulo','$descricao','$link', '$count', $quiz_id)";
        $resultado = @mysqli_query($conexao,$sql);
    }

    if ($resultado === false){
        return "Erro ao cadastrar resultados";
    } else {
        return "Os resultados foram cadastrados com sucesso";
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
