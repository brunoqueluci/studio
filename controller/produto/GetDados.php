<?php
class GetDadosProduto
{
    function getDadosProduto()
    {
        $dadosProduto = array(
            'codigo'=>$_POST['codigo'],
            'descricao_produto'=>$_POST['descricao_produto'],
            'setor'=>$_POST['setor'],
            'valor_venda'=>$_POST['valor_venda'],
            'valor_custo'=>$_POST['valor_custo'],
            'qnt_estoque'=>$_POST['qnt_estoque'],
            'obs_produto'=>$_POST['obs_produto']
        );
        return $dadosProduto;
    }
}