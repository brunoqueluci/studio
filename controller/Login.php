<?php
include("C:\wamp64\www\studio\controller\usuario\VerificaUsuario.php");
include("C:\wamp64\www\studio\controller\DadosLogin.php");
//include("C:\wamp64\www\studio\model\dadossessao.php");

$dadosLogin = new DadosLogin;
$ConsultaUsuario = new ConsultaUsuario;
//$dadossessao = new dadossessao;

function login($ConsultaUsuario, $dadosLogin)
{
    $usuario = $ConsultaUsuario->consultaUsuario($dadosLogin->dadosLogin());
    if (!empty($usuario)){
        //fechaSessao();
        session_start();
        session_unset();
        sessao($usuario);
        
        //var_dump($_SESSION);
        header("Location: \studio\sitemanutecao.php");
        //echo "<br>Parabens " . $usuario['nome']. " esta logado e seu id é: " . $usuario['id'];
    } else {
        header("Location: \studio\Errologin.php");
    }
}

function fechaSessao()
{
    if (session_status() == PHP_SESSION_ACTIVE || session_status() == true)
    {
        session_unset();
        session_destroy();
    }
    
}

function sessao($dados_banco)
{
    //id, nome, email, senha, data_cadastro, status (Campos do banco);
    
    $_SESSION['id'] = $dados_banco["id"];
    $_SESSION['nome'] = $dados_banco["nome"];
    $_SESSION['status'] = $dados_banco["status"];
   
    return $_SESSION;
}

login($VerificaLogin, $dadosLogin);

//var_dump(sessao($dados['email']));
?>