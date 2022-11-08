<?php
require("C:\wamp64\www\studio\model\produto\CadastraProduto.php");

class Produto
{
    public $modelProduto;

    function __construct()
    {
        $this->modelProduto = new CadastraProduto;
    }

    function getDadosProduto()
    {
        $dadosProduto = array(
            'codigo'=>$_POST['codigo'],
            'descricao_produto'=>$_POST['descricao_produto'],
            'setor'=>$_POST['setor'],
            'valor_venda'=>$_POST['valor_venda'],
            'valor_custo'=>$_POST['valor_custo'],
            'estoque'=>$_POST['estoque'],
            'obs_produto'=>$_POST['obs_produto']
        );
        return $dadosProduto;
    }

    function cadastro($dados)
    {
        // $valores = json_decode($dados);
        $this->modelProduto->cadastraProduto($this->getDadosProduto($dados));
    }
}