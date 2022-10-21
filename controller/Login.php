<?php
session_start();
include("C:\wamp64\www\studio\controller\usuario\ConsultaUsuario.php");
include("C:\wamp64\www\studio\controller\DadosLogin.php");
//include("C:\wamp64\www\studio\controller\Logout.php");
include("C:\wamp64\www\studio\controller\usuario\Sessao.php");

$dadosLogin = new DadosLogin;
$ConsultaUsuario = new ConsultaUsuario;
$Sessao = new Sessao;

function login($ConsultaUsuario, $dadosLogin, $Sessao)
{
    $usuario = $ConsultaUsuario->consultaUsuario($dadosLogin->dadosLogin());
    if (!empty($usuario)){
        $Sessao->dadosSessao($usuario);
        header("Location: \studio\home.php");
    } else {
        header("Location: \studio\View\Errologin.php");
    }
}
login($ConsultaUsuario, $dadosLogin, $Sessao);
?>