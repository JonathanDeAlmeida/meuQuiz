<?php

function obterConexao()
{
    $conexao = mysqli_connect('127.0.0.1', 'root','', 'meuquiz') or die('Erro ao conectar ao banco de dados');
    return $conexao;
}

function inserirUsuario($nome, $login, $senha)
{

    $conexao = obterConexao();

    $sql = "SELECT nome, login, senha FROM usuario WHERE nome = '$nome' and login = '$login' and senha = '$senha'";

    $resultado = @mysqli_query($conexao, $sql);

    $colunas = mysqli_num_rows($resultado);

    if ($colunas < 1) {

        $sql = "INSERT INTO usuario (nome,login,senha) VALUES ('$nome','$login','$senha')";

        $resultado = @mysqli_query($conexao, $sql);

        if ($resultado === false) {
            return "Erro ao Inserir Usuario";
        } else {
            return "O usuario $nome foi cadastrado com sucesso";
        }
    } else {
        return "Usuário já cadastrado no sistema";
    }
}

function verificaUsuario($login, $senha)
{

    $conexao = obterConexao();

    $sql = "SELECT id, login, senha FROM usuario WHERE login = '$login' and senha = '$senha'";

    $resultado = @mysqli_query($conexao, $sql);

    $colunas = mysqli_num_rows($resultado);

    if ($colunas < 1) {
        return "Usuario não registrado";
    } else {
        return "UsuarioRegistrado";
    }
}
function listarQuiz($id){
    $conexao = obterConexao();
    $sql = "SELECT id, titulo, descricao, imagem, criador_id FROM quiz WHERE id = '$id'";
    $resultado = mysqli_query($conexao,$sql);
    $resultado = mysqli_fetch_all($resultado)[0];
    return array(
        "id"=>$resultado[0],
        "titulo"=>$resultado[1],
        "descricao"=>$resultado[2],
        "imagem"=>$resultado[3],
        "criador"=>$resultado[4],
    );
}
function exibirQuiz($id){
    $quiz = listarQuiz($id);
    return "<div class='col-md-6'>
            <img class='w-100 img-quiz'
                 src='$quiz[imagem]'
                 height='320'/>
            <div class='title-quiz'>
                $quiz[titulo]
                <button class='float-right btn btn-primary'>INICIAR</button>
            </div>
        </div>";
}

