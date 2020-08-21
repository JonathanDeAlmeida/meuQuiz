<?php
	function obterConexao(){
		$conexao = mysqli_connect('127.0.0.1','root','','meuquiz') or die('Erro ao conectar ao banco de dados');
		return $conexao;
	}

	function inserirUsuario ($nome, $login, $senha) {

        $conexao = obterConexao();

        $sql = "SELECT nome, login, senha FROM usuario WHERE nome = '$nome' and login = '$login' and senha = '$senha'";

        $resultado = @mysqli_query($conexao, $sql);

        $colunas = mysqli_num_rows($resultado);

        if ($colunas < 1){

            $sql = "INSERT INTO usuario (nome,login,senha) VALUES ('$nome','$login','$senha')";

            $resultado = @mysqli_query($conexao,$sql);

            if ($resultado === false){
                echo "<h1>Erro ao Inserir Usuario</h1>";
            } else {
                echo "<h2>O usuario $nome foi cadastrado no sistema</h2>";
            }
        } else {
            echo "<h2>Usuário já cadastrado no sistema</h2>";
        }
    }

    function verificaUsuario($login, $senha) {

        $conexao = obterConexao();

        $sql = "SELECT id, login, senha FROM usuario WHERE login = '$login' and senha = '$senha'";

        $resultado = @mysqli_query($conexao, $sql);

        $colunas = mysqli_num_rows($resultado);

        if ($colunas < 1){
            echo "<h2>Usuario não registado</h2>";
            echo "<a href=\"login.php\">Ir para login</a>";
        } else {
            echo "<h2>Logado com Sucesso!</h2>";
            // header("Location: ../vendas/vendaAdministrador.php");
        }
    }
?>
