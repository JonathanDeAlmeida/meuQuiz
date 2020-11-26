<html>
<head>
    <?php
    include "biblioteca_banco_resultado.php";
    session_start();
    $user_id = $_SESSION['id'];
    $resultado = pegarResultado($user_id);
    if (!$resultado) {
        header('Location: ../principal/principal.php');
    }
    ?>
  <title>resultado</title>
</head>
<body>
<?php
include "../template/menu.php";
?>
<div class="container mt-70">
  <div class="row justify-content-center">
    <div class="col-md-7">
      <img class="w-100"
           src="<?=$resultado->imagem?>"
           height="300"/>
      <div class="result-quiz">
        <div class="text-left">
          <h2><?=$resultado->titulo?></h2>
          <h6 class="result-description"><?=$resultado->descricao?></h6>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
