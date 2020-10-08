<html>
<head>
  <title>criarPergunta</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <meta charset="utf-8">
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../jquery-3.5.1.min.js" type="text/javascript"></script>
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
        <div class="card">
          <h5 class="card-header card-quiz">Perguntas</h5>
          <div class="card-body">
            <h6>Pergunta</h6>
            <input class="form-control w-100 d-inline"
                   placeholder="Coloque o link da imagem aqui..."
                   name="link">
            <input class="form-control w-100 d-inline" placeholder="Pergunta" name="pergunta">
            <table style="width:100%">
              <tr>
                <th>Alternativa</th>
                <th>Correta</th>
              </tr>
              <tr id="alternativa">
              </tr>
            </table>
            <input class="btn btn-purple" value="adicionar" type="button" onclick="adicionarAlternativa()">
            <button class="btn btn-primary" onclick="return salvarPergunta()">salvar</button>
          </div>
        </div>

      </div>
      <div class="card mt-5">
        <h5 class="card-header card-quiz">Lista de Perguntas</h5>
        <div class="card-body">
          <h6>Nenhuma pergunta adicionada até o momento</h6>
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
<script>

  function adicionarAlternativa(){
    $("table").append(
      "<tr id=\"alternativa\">\n" +
      "<div>\n" +
      " <td><input class=\"form-control w-100 d-inline alternativa\" name=\"alternativa\" placeholder=\"Alternativa\"></td>\n" +
      "<td><input name=\"resposta\" class=\"resposta\" type=\"checkbox\"></td>\n" +
      "</div>\n" +
      "</tr>");
  }

  function salvarPergunta () {
    let link = $('input[name=link]').val()
    let pergunta = $('input[name=pergunta]').val()
    alternativas = [];
    $(".alternativa").each(function(){
      alternativas.push($(this).val());
    });

    if (link === '' || pergunta === '' || alternativas.length === 0) {
      alert ('Preencha todos os campos corretamente')
    } else {
      $.ajax ({
        type: 'POST',
        dataType: 'html',
        url: 'index.php',
        data: {link: link, pergunta: pergunta, alternativas: alternativas, acao: 'inserir'},
        success: function (msg)
        {
          alert(msg)
        },
        error: function (msg) {
          alert(msg)
        }
      })
    }
    return false
  }
</script>
</html>
