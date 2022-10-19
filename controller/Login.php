<?php
include("C:\wamp64\www\studio\controller\usuario\VerificaLogin.php");
include("C:\wamp64\www\studio\controller\DadosLogin.php");

$dadosLogin = new DadosLogin;
$VerificaLogin = new verificaLogin;

function login($VerificaLogin, $dadosLogin)
{
    $usuario = $VerificaLogin->verificaLogin($dadosLogin->dadosLogin());
    if (!empty($usuario)){
       // -session_start();
        sessao($usuario);
        header("Location: \studio\home.php");
        echo "<br>Parabens " . $usuario['nome']. " esta logado e seu id é: " . $usuario['id'];
    } else {
        header("Location: \studio\Errologin.php");
    }
}

function sessao($dados)
{
    session_start();
    $_SESSION['email'] = $dados['email'];
    $_SESSION['password'] = $dados['senha'];

    return $_SESSION;
}

login($VerificaLogin, $dadosLogin);

var_dump($dadosLogin->dadosLogin());
?>