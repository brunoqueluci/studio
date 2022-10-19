<?php
class DadosLogin 
{
    function dadosLogin()
    {
        $dados = array(
            'email' => $_POST['email'],
            'password' => $_POST['password']
        );
        return $dados;
    }
}