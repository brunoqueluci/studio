<?php
include("C:\wamp64\www\studio\controller\usuario\ConsultaUsuario.php");

$ConsultaUsuario = new ConsultaUsuario;

class dadossessao extends ConsultaUsuario
{
    public function dadosSessao($dados)
    {
         $this->consultaUsuario($dados);
    }
}