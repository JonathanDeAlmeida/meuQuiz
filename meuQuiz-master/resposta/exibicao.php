<html>
<head>
  <title>responder</title>
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
  <div class="row justify-content-center">
    <div class="col-md-8">

      <div class="btn-toolbar position-questions">
        <div class="btn-group mr-1">
          <button type="button" class="btn btn-position">1</button>
        </div>
        <div class="btn-group mr-1 active">
          <button type="button" class="btn btn-position active">2</button>
        </div>
        <div class="btn-group mr-1">
          <button type="button" class="btn btn-position">3</button>
        </div>
        <div class="btn-group mr-1">
          <button type="button" class="btn btn-position">4</button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-position">5</button>
        </div>
      </div>

      <img class="w-100"
           src="https://wallpaperaccess.com/full/515948.jpg"
           height="300"/>
          <div class="title-quiz">
              Qual dessas virtudes voce considera a mais importante?
          </div>
      <div class="answer-quiz">
        <button class="btn-answer">Inteligência</button>
        <button class="btn-answer">Coragem</button>
        <button class="btn-answer">Bondade</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
