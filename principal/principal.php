<html>
<head>
  <title>principal</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <meta charset="utf-8">
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../estilo/estilo.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-sm">
  <div class="container">
    <a class="navbar-brand" href="principal.php">
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
    <div class="col-md-6">
      <img class="w-100 img-quiz"
           src="https://jornal140.com/wp-content/uploads/2020/02/Harry-potter-divulga%C3%A7%C3%A3o-750x450.png"
           height="320"/>
      <div class="title-quiz">
        Quem você seria em Harry Potter?
        <button class="float-right btn btn-primary">INICIAR</button>
      </div>
    </div>
    <div class="col-md-6">
      <img class="w-100 img-quiz"
           src="https://img.elo7.com.br/product/zoom/2B94808/caneca-porcelana-casas-game-of-thrones-game-of-thrones.jpg"
           height="320"/>
      <div class="title-quiz">
        Que casa você pertenceria em GOT?
        <button class="float-right btn btn-primary">INICIAR</button>
      </div>
    </div>
  </div>
  <div class="row mt-70">
    <div class="col-md-4">
      <img class="w-100 img-quiz" src="https://img.quizur.com/f/img5ef666432d21c5.69094061.jpg?lastEdited=1593206343"
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
