<html>
<head>
  <title>criarResultado</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <meta charset="utf-8">
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../estilo/estilo.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-sm">
  <div class="container">
    <a class="navbar-brand" href="../principal/principal.php">
      <span class="logo">MEU</span>quiz</a>
    <button class="navbar-toggler">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="../quiz/cadastro.php"> CRIAR </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../login/login.php">SAIR </a>
        </li>
      </ul>
      <form class="form-inline my-3 pt-2 my-lg-0">
        <input class="form-control mr-sm-2" placeholder="Pesquisar...">
        <button class="btn btn-white mb-2" type="submit">
          <i class="fa fa-search"></i>
        </button>
        <h6 class="user-name" href="../login/login.php">LUCAS </h6>
      </form>
    </div>
  </div>
</nav>

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
