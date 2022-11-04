<?php
class ConectaBd 
{
    public function dadosConexao()
    {
        $host = 'localhost';
        $user = 'root';
        $pass = "";
        $dbname = 'studio';

        $conexao = mysqli_connect($host, $user, $pass, $dbname);
            if(!$conexao):
                echo("A conexão falhou: " . mysqli_connect_error($conexao));
            endif;
            //echo "Conectado com Sucesso!";
        return $conexao;
    }
}
