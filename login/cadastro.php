<html>
	<head>
		<title>Cadastro</title>
		<meta charset="utf-8">
      <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		  <link href="../estilo/estilo.css" rel="stylesheet">
      <script src="../jquery-3.5.1.min.js" type="text/javascript"></script>
      <script type="text/javascript">
        function salvar () {
          let nome = $('input[name=nome]').val()
          let login = $('input[name=login]').val()
          let senha = $('input[name=senha]').val()
          let acao = $('input[name=acao]').val()

          if (nome === '' || login === '' || senha === '') {
            alert ('Preencha todos os campos corretamente')
          } else {
            $.ajax ({
              type: 'POST',
              dataType: 'html',
              url: 'index.php',
              data: {nome: nome, login: login, senha: senha, acao: acao},
              success: function (msg)
              {
                alert(msg)
                window.location.href = "/meuQuiz/login/login.php"
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
            <form onsubmit="return salvar()">
              <input type='hidden' name='acao' value='inserir'>
              <p>Nome</p>
              <input type="text" name="nome">
              <p>Login</p>
              <input type="text" name="login">
              <p>Senha</p>
              <input class="mt-20" type="password" name="senha">
              <button class="btn btn-purple">Cadastrar</button>
            </form>
          </div>
          <a class="linkLogin" href="login.php">FAZER LOGIN</a>
        </div>
      </div>
    </div>
    </body>
</html>
