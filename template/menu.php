<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION["nome"])){
    $autenticado = false;
}else{
    $autenticado = true;
}
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<meta charset="utf-8">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../estilo/estilo.css" rel="stylesheet">
<script src="../jquery-3.5.1.min.js" type="text/javascript"></script>
<nav class="navbar navbar-dark navbar-expand-sm">
    <div class="container">
        <a class="navbar-brand" href="../principal/principal.php">
            <span class="logo">MEU</span>quiz</a>
        <button class="navbar-toggler">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <?php if($autenticado){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="../quiz/cadastro.php"> CRIAR </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login/index.php?acao=sair">SAIR </a>
                </li>
                <?php } ?>
            </ul>
            <form class="form-inline my-3 pt-2 my-lg-0">
                <input class="form-control mr-sm-2" placeholder="Pesquisar...">
                <button class="btn btn-white mb-2" type="submit">
                    <i class="fa fa-search"></i>
                </button>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../login/login.php"> <?php
                            if($autenticado){
                                echo $_SESSION["nome"];
                            }else{
                                echo "login";
                            }
                            ?> </a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</nav>
