<?php
include("C:\wamp64\www\studio\model\ConectaBd.php");

class CadastraProduto extends ConectaBd
{
    function cadastraProduto($dados)
    {
        $queryCadProd = "INSERT INTO produto
            (codigo, 
            descricao_produto, 
            setor, 
            valor_venda, 
            valor_custo, 
            estoque, 
            dt_cadastro,
            obs_produto) 
        VALUES 
            ('".$dados['codigo']."',
             '".$dados['descricao_produto']."', 
             '".$dados['setor']."', 
             '".$dados['valor_venda']."', 
             '".$dados['valor_custo']."', 
             '".$dados['estoque']."', 
             NOW(),
             '".$dados['obs_produto']."')";

        $query = mysqli_query($this->dadosConexao(), $queryCadProd);

        if ($query){
            return "Cadastrado com sucesso!";
        } else {
            return "erro ao cadastrar um produto";
        }
    }
}