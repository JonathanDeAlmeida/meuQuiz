<html>
<head>
  <title>criarResultado</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
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
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-12 mb-4">
          <input class="form-control d-inline" placeholder="Coloque o link da imagem...">
        </div>
        <div class="col-md-12">
          <div class="mt-2">
            <input class="form-control w-100 d-inline" placeholder="Escreva titulo...">
          </div>
          <textarea class="form-control w-100" rows="5" placeholder="Escreva descrição..."></textarea>
        </div>
      </div>
      <div class="card mt-5">
        <h5 class="card-header card-quiz">Lista de Resultados</h5>
        <div class="card-body">
          <h6>Nenhum resultado adicionado até o momento</h6>
        </div>
      </div>
      <div class="mb-5 mt-5 row">
        <div class="col-md-6">
          <a href="../quiz/cadastro.php" class="btn btn-secondary btn-action w-100">Cancelar</a>
        </div>
        <div class="col-md-6">
          <button class="btn btn-primary btn-action w-100">SALVAR</button>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
