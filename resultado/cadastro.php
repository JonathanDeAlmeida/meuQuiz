<html>
<head>
  <title>criarResultado</title>
</head>
<body>
<?php
include "../template/menu.php";
?>
<div class="container mt-70">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="card-group">
          <div class="card">
            <h5 class="card-header card-quiz">Resultado</h5>
            <div class="card-body">
              <input class="form-control w-100 d-inline link"
                     placeholder="Coloque o link da imagem aqui..."
                     name="link">
              <input name="titulo" class="form-control w-100 d-inline titulo" placeholder="Escreva titulo...">
              <textarea name="descricao" class="form-control w-100 descricao" rows="2"
                        placeholder="Escreva descrição..."></textarea>
              <div class="mt-3">
                Esse será o resultado caso <strong>NENHUMA</strong> pergunta seja acertada.
              </div>
            </div>
          </div>
          <div class="card">
            <h5 class="card-header card-quiz">Resultado</h5>
            <div class="card-body">
              <input class="form-control w-100 d-inline link"
                     placeholder="Coloque o link da imagem aqui..."
                     name="link">
              <input name="titulo" class="form-control w-100 d-inline titulo" placeholder="Escreva titulo...">

              <textarea name="descricao" class="form-control w-100 descricao" rows="2"
                        placeholder="Escreva descrição..."></textarea>

              <div class="mt-3">
                Esse será o resultado caso <strong>MAIS DE UMA</strong> pergunta seja acertada.
              </div>
            </div>
          </div>
          <div class="card">
            <h5 class="card-header card-quiz">Resultado</h5>
            <div class="card-body">
              <input class="form-control w-100 d-inline link"
                     placeholder="Coloque o link da imagem aqui..."
                     name="link">
              <input name="titulo" class="form-control w-100 d-inline titulo" placeholder="Escreva titulo...">

              <textarea name="descricao" class="form-control w-100 descricao" rows="2"
                        placeholder="Escreva descrição..."></textarea>

              <div class="mt-3">
                Esse será o resultado caso <strong>TODAS</strong> pergunta seja acertada.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button class="btn btn-primary mt-20" onclick="return salvarResultado()">salvar</button>
</div>
</body>
<script>
  function salvarResultado () {
    let quiz_id = localStorage.getItem('quiz_id')
    let error = false
    let links = []
    let titulos = []
    let descricoes = []
    let resultados = []

    $(".link").each(function () {

      if ($(this).val() === "") {
        error = true
        alert('Preencha todos os campos corretamente')
        return false
      }

      links.push($(this).val());
    });

    if (!error) {
      $(".titulo").each(function () {

        if ($(this).val() === "") {
          error = true
          alert('Preencha todos os campos corretamente')
          return false
        }

        titulos.push($(this).val());
      });
    }

    if (!error) {

      $(".descricao").each(function () {

        if ($(this).val() === "") {
          error = true
          alert('Preencha todos os campos corretamente')
          return false
        }

        descricoes.push($(this).val());
      });
    }

    if (!error) {
      for (let count = 0; count < 3; count++) {
        let obj = {link: links[count], titulo: titulos[count], descricao: descricoes[count]}
        resultados.push(obj)
      }
      if (!quiz_id) {
        alert('Preencha todos os campos corretamente')
      } else {
        $.ajax({
          type: 'POST',
          dataType: 'html',
          url: 'index.php',
          data: {resultados: resultados, quiz_id: quiz_id, acao: 'inserir'},
          success: function (msg) {
            alert(msg)
          },
          error: function (msg) {
            alert(msg)
          }
        })
      }
      return false
    }
  }
</script>
</html>
