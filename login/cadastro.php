<html>
	<head>
		<title>Cadastro</title>
		<meta charset="utf-8">
      <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		  <link href="../estilo/estilo.css" rel="stylesheet">
	</head>
    <body>
    <div class="container text-center mt-70">
      <div class="row justify-content-center">
        <div class="col-md-4 text-center border-register">
          <h2 class="logo-register">MEU<p>quiz</p></h2>
          <div class="col-md-12">
            <form method="post" action="index.php">
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
