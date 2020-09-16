<html>
<head>
  <title>login</title>
  <meta charset="utf-8">
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../estilo/estilo.css" rel="stylesheet">

  <script src="../jquery-3.5.1.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    function logar () {
      let login = $('input[name=login]').val()
      let senha = $('input[name=senha]').val()
      let acao = $('input[name=acao]').val()
      if (login === '' || senha === '') {
        alert ('Preencha todos os campos corretamente')
      } else {
        $.ajax ({
          type: 'POST',
          dataType: 'html',
          url: 'index.php',
          data: {login: login, senha: senha, acao: acao},
          success: function (msg)
          {
            if (msg === 'UsuarioRegistrado') {
              window.location.href = "../Telas que precisam de programação/principal.html";
            } else {
              alert(msg)
            }
          },
          error: function (msg) {
            alert(msg)
          }
        })
      }
      return false
    }
  </script>
</head>
<body>
<div class="container text-center mt-70">
  <div class="row justify-content-center">
    <div class="col-md-4 text-center border-register">
      <h2 class="logo-register">MEU<p>quiz</p></h2>
      <div class="col-md-12">
        <div class="col-md-12">
          <form onsubmit="return logar()">
            <input type='hidden' name='acao' value='verificaLogin'>
            <p>Login</p>
            <input type="text" name="login">
            <p>Senha</p>
            <input type="password" name="senha">
            <button class="btn btn-purple mt-3" type="submit">Entrar</button>
          </form>
        </div>
      </div>
      <a class="linkCadastro" href="cadastro.php">
        Ainda não tenho cadastro
      </a>
    </div>
  </div>
</div>
</body>
</html>
