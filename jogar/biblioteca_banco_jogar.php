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
function verificarResposta($alternativa){
    if($alternativa){
        $mensagem = "alert('certo')";
    }else{
        $mensagem = "alert('erado')";
    }
    return $mensagem;
};
