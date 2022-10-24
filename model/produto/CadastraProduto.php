<?php
include("C:\wamp64\www\studio\model\ConectaBd.php");

class CadastraProduto extends ConectaBd
{
    function cadastraProduto($dados)
    {
        $queryCadProd = "INSERT INTO produto (codigo, descricao_produto, setor, valor_venda, valor_custo, estoque, obs_produto) VALUES ('".$dados['codigo']."', '".$dados['descricao_produto']."', '".$dados['setor']."', '".$dados['valor_venda']."', '".$dados['valor_custo']."', '".$dados['estoque']."', '".$dados['obs_produto']."')";
        $query = mysqli_query($this->dadosConexao(), $queryCadProd);

        if (mysqli_query() == false){
            echo " erro no query : ". mysqli_error($query);
        }
        //var_dump($query);
        if (mysqli_num_rows($query) > 0) {
            return mysqli_fetch_assoc($query);
        } else {
            return false;
        }
    }
}