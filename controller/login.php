<?php
include("C:\wamp64\www\studio\controller\VerificaUsuarioLogin.php");
include("C:\wamp64\www\studio\controller\DadosLogin.php");

$dadosLogin = new DadosLogin;
$VerificaUsuarioLogin = new VerificaUsuarioLogin;

function login($VerificaUsuarioLogin, $dadosLogin)
{
    $usuario = $VerificaUsuarioLogin->verificaLogin($dadosLogin->dadosLogin());
    if (!empty($usuario)){
       // --session_start();
        sessao($usuario);
        header("Location: \studio\home.php");
        echo "<br>Parabens " . $usuario['nome']. " esta logado e seu id é: " . $usuario['id'];
    } else {
       
        header("Location: \studio\index.html");
    }
}

function sessao($dados)
{
    session_start();
    $_SESSION['email'] = $dados['email'];
    $_SESSION['password'] = $dados['senha'];

    return $_SESSION;
}

login($VerificaUsuarioLogin, $dadosLogin);

var_dump($dadosLogin->dadosLogin());
?>