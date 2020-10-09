<head>
    <?php
    $quizId = $_POST['quizId'];
    $quiz = listarQuiz($quizId);
    $quizJson = json_decode($quiz)
    ?>
    <script>
        var quizJson = JSON.parse(JSON.stringify(<?=$quiz?>));
    </script>

    <title>responder</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
          integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <meta charset="utf-8">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../estilo/estilo.css" rel="stylesheet">
</head>
<body>
<?php
include "../template/menu.php";
$perguntaId = 2;
?>

<div class="container mt-70">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="btn-toolbar position-questions">

                <?php
                $cont = 0;
                foreach ($quizJson->pergunta as $pergunta){ ?>
                    <div class="btn-group mr-1">
                        <button type="button" class="btn btn-position"><?=$cont+1 ?></button>
                    </div>
                <?php $cont++; } ?>

            </div>

            <img class="w-100"
                 src="<?=$quizJson->pergunta[$perguntaId]->perguntaImagem?>>"
                 height="300"/>
            <div class="title-quiz">
                <?= $quizJson->pergunta[$perguntaId]->perguntaTitulo ?>
            </div>
            <div class="answer-quiz">
                <?php foreach ($quizJson->pergunta[$perguntaId]->alternativa as $alternativa){ ?>
                    <button class="btn-answer"><?=$alternativa->alternativaNome ?></button>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</body>
