<html>
<head>
    <?php
      require_once('biblioteca_banco_principal.php');
    ?>
    <title>principal</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
          integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <meta charset="utf-8">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../estilo/estilo.css" rel="stylesheet">
</head>
<body>
<?php
include "../template/menu.php";
?>
<div class="container mt-70">
    <div class="row">
        <?=
        exibirQuizzes();
        ?>
    </div>
    <div class="row mt-70">
        <div class="col-md-4">
            <img class="w-100 img-quiz"
                 src="https://img.quizur.com/f/img5ef666432d21c5.69094061.jpg?lastEdited=1593206343"
                 height="300"/>
        </div>
        <div class="col-md-4">

            <img class="w-100 img-quiz"
                 src="https://img.quizur.com/f/img5ef649966bc885.29586417.jpg?lastEdited=1593199038"
                 height="300"/>
        </div>
        <div class="col-md-4">
            <img class="w-100 img-quiz"
                 src="https://img.quizur.com/f/img5ef511a1bfdb08.69822395.png?lastEdited=1593119144"
                 height="300"/>
        </div>
    </div>
</div>
</body>
</html>
