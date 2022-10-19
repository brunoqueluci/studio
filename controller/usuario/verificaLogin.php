<?php
include("C:\wamp64\www\studio\model\ConectaBd.php");

class VerificaUsuarioLogin extends ConectaBd
{
    public function verificaLogin($dados)
    {
        // $QueryVerificaUser = new QueryVerificaUser;
        $queryUser = "SELECT * FROM usuarios WHERE email = '".$dados['email']."' AND senha = '".$dados['password']."'";
        $query = mysqli_query($this->dadosConexao(), $queryUser);

        if (mysqli_num_rows($query) > 0) {
            return mysqli_fetch_assoc($query);
        } else {
            return false;
        }
    }
}
