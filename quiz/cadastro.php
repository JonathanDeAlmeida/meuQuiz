<html>
<head>
    <?php
        require_once "biblioteca_banco_quiz.php";
        if(isset($_REQUEST["titulo"]) && isset($_REQUEST["descricao"]) && isset($_REQUEST["imagem"])){
                session_start();
                criarQuiz($_REQUEST["titulo"], $_REQUEST["descricao"], $_REQUEST["imagem"], $_SESSION["id"]);
        }
        session_start();
        if(!isset($_SESSION["nome"])){
            echo "<script>location.href='../principal/principal.php';</script>";
        }
    ?>
    <title>criar</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
          integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <meta charset="utf-8">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../estilo/estilo.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="biblioteca.js"></script>
</head>
<body>
<?php
    include "../template/menu.php";
?>

<form method="post" name="cadastro" onsubmit="verificar(this)">
    <div class="container mt-70">
        <div class="row">
            <div class="col-md-12">
                <div class="row mb-5">
                    <div class="col-md-12 mb-4">
                        <input class="form-control d-inline" placeholder="Coloque o link da imagem..." name="imagem" id="imagem" autocomplete="off">
                    </div>
                    <div class="col-md-12">
                        <div class="mt-2">
                            <input class="form-control w-100 d-inline" placeholder="Escreva titulo..." name="titulo" id="titulo" autocomplete="off">
                        </div>
                        <textarea class="form-control w-100" rows="5" placeholder="Escreva descrição..." name="descricao" id="descricao" autocomplete="off"></textarea>
                    </div>
                </div>
            </div>
            <div class="mb-5 mt-5 row">
                <div class="col-md-6">
                    <a href="../principal/principal.php" class="btn btn-secondary btn-action w-100">Cancelar</a>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary btn-action w-100">SALVAR</button>
                </div>
            </div>
        </div>
    </div>
</form>

</body>
</html>
