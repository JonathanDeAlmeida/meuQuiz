<head>
    <?php
    $quizId = $_POST['quizId'];
    $quiz = listarQuiz($quizId);
    $quizJson = json_decode($quiz)
    ?>
    <script>
        var quizJson = JSON.parse(JSON.stringify(<?=$quiz?>));
        var perguntaId1 = 0;
        var contador = 0;
    </script>

    <title>responder</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
          integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <meta charset="utf-8">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../estilo/estilo.css" rel="stylesheet">
    <script src="biblioteca.js"></script>
</head>
<body>
<?php
include "../template/menu.php";
$perguntaId = 0;
?>

<div class="container mt-70">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="btn-toolbar position-questions">

                <?php
                $cont = 0;
                foreach ($quizJson->pergunta as $pergunta) { ?>
                    <div class="btn-group mr-1">
                        <button type="button" class="btn btn-position"><?= $cont + 1 ?></button>
                    </div>
                    <?php $cont++;
                } ?>

            </div>

            <img class="w-100"
                 src="<?= $quizJson->pergunta[$perguntaId]->perguntaImagem ?>>"
                 height="300"/>
            <div class="title-quiz" id="pergunta">
                <script type="text/javascript">
                document.write(quizJson.pergunta[perguntaId1].perguntaTitulo);
                </script>
            </div>
            <div class="answer-quiz" id="respostas">
                <?php
                $contador = 0;
                foreach ($quizJson->pergunta[$perguntaId]->alternativa as $alternativa) { ?>
                    <button id="0" onclick="verificarResposta(quizJson.pergunta[perguntaId1].alternativa[<?= $contador ?>].certo)"
                            class="btn-answer">


                            

                            <script type="text/javascript">
                                 document.write(quizJson.pergunta[perguntaId1].alternativa[contador].alternativaNome);
                                 contador++;
                                 if(contador >= 4){
                                     contador = 0;
                                 }
                                 document.getElementById('0').id = contador.toString();
                            </script>
    
                            
                            
                            </button>
                    <?php $contador++;
                } ?>

            </div>
        </div>
    </div>
</div>
</body>

