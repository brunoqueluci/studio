<?php
class Sessao
{
    function dadosSessao($dados_banco)
    {
        //id, nome, email, senha, data_cadastro, status (Campos do banco);
        
        $_SESSION['id'] = $dados_banco["id"];
        $_SESSION['nome'] = $dados_banco["nome"];
        $_SESSION['status'] = $dados_banco["status"];
       
        return $_SESSION;
    }
    
    function abreSessao()
    {
        session_start();
        //session_unset();
       // session_destroy();
        
    }
}
