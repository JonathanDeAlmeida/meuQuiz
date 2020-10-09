<html>
<head>
  <title>criarPergunta</title>
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
            <h5 class="card-header card-quiz">Perguntas</h5>
            <div class="card-body">
              <input class="form-control w-100 d-inline link"
                     placeholder="Coloque o link da imagem aqui..."
                     name="link">
              <input class="form-control w-100 d-inline pergunta" placeholder="Pergunta" name="pergunta">
              <table style="width:100%">
                <tr>
                  <th>Alternativa</th>
                  <th>Correta</th>
                </tr>
                <tr id="alternativa">
                  <td>
                    <input class="form-control w-100 d-inline alternativa">
                    <input class="form-control w-100 d-inline alternativa">
                    <input class="form-control w-100 d-inline alternativa">
                    <input class="form-control w-100 d-inline alternativa">
                  </td>
                  <td>
                    <input name="resposta" class="resposta d-inline check1" type="checkbox">
                    <input name="resposta" class="resposta d-inline check2" type="checkbox">
                    <input name="resposta" class="resposta d-inline check3" type="checkbox">
                    <input name="resposta" class="resposta d-inline check4" type="checkbox">
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="card">
            <h5 class="card-header card-quiz">Perguntas</h5>
            <div class="card-body">
              <input class="form-control w-100 d-inline link"
                     placeholder="Coloque o link da imagem aqui..."
                     name="link">
              <input class="form-control w-100 d-inline pergunta" placeholder="Pergunta" name="pergunta">
              <table style="width:100%">
                <tr>
                  <th>Alternativa</th>
                  <th>Correta</th>
                </tr>
                <tr id="alternativa">
                  <td>
                    <input class="form-control w-100 d-inline alternativa">
                    <input class="form-control w-100 d-inline alternativa">
                    <input class="form-control w-100 d-inline alternativa">
                    <input class="form-control w-100 d-inline alternativa">
                  </td>
                  <td>
                    <input name="resposta" class="resposta d-inline check5" type="checkbox">
                    <input name="resposta" class="resposta d-inline check6" type="checkbox">
                    <input name="resposta" class="resposta d-inline check7" type="checkbox">
                    <input name="resposta" class="resposta d-inline check8" type="checkbox">
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="card">
            <h5 class="card-header card-quiz">Perguntas</h5>
            <div class="card-body">
              <input class="form-control w-100 d-inline link"
                     placeholder="Coloque o link da imagem aqui..."
                     name="link">
              <input class="form-control w-100 d-inline pergunta" placeholder="Pergunta" name="pergunta">
              <table style="width:100%">
                <tr>
                  <th>Alternativa</th>
                  <th>Correta</th>
                </tr>
                <tr id="alternativa">
                  <td>
                    <input class="form-control w-100 d-inline alternativa">
                    <input class="form-control w-100 d-inline alternativa">
                    <input class="form-control w-100 d-inline alternativa">
                    <input class="form-control w-100 d-inline alternativa">
                  </td>
                  <td>
                    <input name="resposta" class="resposta d-inline check9" type="checkbox">
                    <input name="resposta" class="resposta d-inline check10" type="checkbox">
                    <input name="resposta" class="resposta d-inline check11" type="checkbox">
                    <input name="resposta" class="resposta d-inline check12" type="checkbox">
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button class="btn btn-primary mt-20" onclick="return salvarPerguntas()">salvar</button>
</div>
</body>
<script>
  function salvarPerguntas () {
    let quiz_id = localStorage.getItem('quiz_id')
    let error = false
    let links = []
    let todasPerguntas = []
    let alternativas = [];
    let perguntas = []

    $(".link").each(function(){

      if ($(this).val() === "") {
        error = true
        alert ('Preencha todos os campos corretamente')
        return false
      }

      links.push($(this).val());
    });


    if (!error) {

      $(".pergunta").each(function () {

        if ($(this).val() === "") {
          error = true
          alert('Preencha todos os campos corretamente')
          return false
        }

        todasPerguntas.push($(this).val());
      });
    }

    for (let count = 0; count < 3; count++) {
      let obj = {link: links[count], pergunta: todasPerguntas[count]}
      perguntas.push(obj)
    }

    if (!error) {
      $(".alternativa").each(function () {

        if ($(this).val() === "") {
          error = true
          alert('Preencha todos os campos corretamente')
          return false
        }

        let obj = {alternativa: $(this).val(), check: false}
        alternativas.push(obj);
      });
    }
    if (!error) {

      alternativas[0].check = $('.check1').is(':checked')
      alternativas[1].check = $('.check2').is(':checked')
      alternativas[2].check = $('.check3').is(':checked')
      alternativas[3].check = $('.check4').is(':checked')
      alternativas[4].check = $('.check5').is(':checked')
      alternativas[5].check = $('.check6').is(':checked')
      alternativas[6].check = $('.check7').is(':checked')
      alternativas[7].check = $('.check8').is(':checked')
      alternativas[8].check = $('.check9').is(':checked')
      alternativas[9].check = $('.check10').is(':checked')
      alternativas[10].check = $('.check11').is(':checked')
      alternativas[11].check = $('.check12').is(':checked')
    }

    if (!error) {
      if (!quiz_id) {
        alert('Não há ID do quiz em que você deseja cadastrar as perguntas')
      } else {
        $.ajax({
          type: 'POST',
          dataType: 'html',
          url: 'index.php',
          data: {perguntas: perguntas, alternativas: alternativas, quiz_id: quiz_id, acao: 'inserir'},
          success: function (msg) {
            alert(msg)
            window.location.href = "/meuQuiz/resultado/cadastro.php"
          },
          error: function (msg) {
            alert(msg)
          }
        })
      }
    }
    return false
  }
</script>
</html>
