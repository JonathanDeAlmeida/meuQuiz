<?php
function obterConexao(){
    $conexao = mysqli_connect('127.0.0.1','root','','meuquiz') or die('Erro ao conectar ao banco de dados');
    return $conexao;
}

function listarQuiz($id){
    $conexao = obterConexao();
    $sql = "SELECT 
                quiz.id,quiz.titulo,quiz.descricao,quiz.imagem,
                pergunta.quiz_id,pergunta.id,pergunta.pergunta,pergunta.imagem,
                alternativa.pergunta_id,alternativa.alternativa,alternativa.correta 
            FROM `quiz` 
            JOIN pergunta ON pergunta.quiz_id = quiz.id 
            JOIN alternativa on alternativa.pergunta_id = pergunta.id 
            WHERE quiz.id = '$id'";
    $resultado = mysqli_fetch_all(mysqli_query($conexao,$sql));
    $quiz = array(
        "quizId"=> $resultado[0][0],
        "quizTitulo"=> $resultado[0][1],
        "quizDescricao"=> $resultado[0][2],
        "quizImagem" => $resultado[0][3],
        "pergunta" => array(3),
    );
    $cont = 0;
    for($contPergunta = 0; $contPergunta < 12; $contPergunta = $contPergunta + 4){
        $quiz["pergunta"][$cont] = array(
            "perguntaId"=>$resultado[$contPergunta][5],
            "perguntaTitulo"=>$resultado[$contPergunta][6],
            "perguntaImagem"=>$resultado[$contPergunta][7],
            "alternativa"=>array(4),
        );
        $cont++;
    }

    foreach ($resultado as $resultados){
        for ($contPergunta = 0; $contPergunta < 3; $contPergunta++){
            if($resultados[6] == $quiz["pergunta"][$contPergunta]["perguntaTitulo"]){
                for ($contAlternativa = 0; $contAlternativa <4; $contAlternativa++){
                    if($quiz["pergunta"]["$contPergunta"]["alternativa"][$contAlternativa]["alternativaNome"] == null){
                        $quiz["pergunta"]["$contPergunta"]["alternativa"][$contAlternativa] = array(
                            "alternativaNome"=>$resultados[9],
                            "certo"=>$resultados[10],
                        );
                        break;
                    }
                }
            }
        }
    }
    return json_encode($quiz);
}

function verificarResposta($alternativa, $quizId, $usuario_id){

    $conexao = obterConexao();

    $sql = "SELECT id, pontos, usuario_id, quiz_id FROM pontos WHERE usuario_id = '$usuario_id' and quiz_id = '$quizId'";

    $resultado = @mysqli_query($conexao, $sql);

    $colunas = mysqli_num_rows($resultado);

    if ($colunas < 1){
        $pontos = intval($alternativa);
        $sql = "INSERT INTO pontos (pontos, usuario_id, quiz_id) VALUES ('$pontos', '$usuario_id', '$quizId')";
        @mysqli_query($conexao,$sql);

    } else {
        $object_pontos = mysqli_fetch_object($resultado);
        $pontos = intval($alternativa) + intval($object_pontos->pontos);
        echo $pontos;
        $sql = "UPDATE pontos SET pontos = '$pontos' WHERE id = '$object_pontos->id'";
        @mysqli_query($conexao,$sql);
    }

    return "sucesso";
};
