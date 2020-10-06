<?php


class UsuarioCadastrado extends Usuario
{
    var $email;
    var $senha;

    public function __construct($nome, $email, $senha)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function cadastrar($nome, $email, $senha)
    {

    }

    public function login($email, $senha)
    {

    }

    public function criarQuiz()
    {

    }

    public function avaliarQuiz()
    {

    }

    public function comentar($comentario)
    {

    }
}