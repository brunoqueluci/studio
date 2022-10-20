<?php
include("C:\wamp64\www\studio\controller\usuario\VerificaLogin.php");

$VerificaLogin = new VerificaLogin;

class dadossessao extends verificaLogin
{
    public function dadosSessao($dados)
    {
         $this->verificaLogin($dados);
    }
}