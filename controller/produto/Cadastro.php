<?php
include("C:\wamp64\www\studio\controller\produto\GetDados.php");
include("C:\wamp64\www\studio\model\produto\CadastraProduto.php");

$GetDadosProduto = new GetDadosProduto;
//$GetDadosProduto->getDadosProduto();

$CadastraProduto = new CadastraProduto;
//$CadastraProduto->cadastraProduto($GetDadosProduto);

function cadastraProd($GetDadosProduto, $CadastraProduto)
{
    $CadastraProduto->cadastraProduto($GetDadosProduto);
}

var_dump($CadastraProduto->cadastraProduto($query));
//var_dump($GetDadosProduto->getDadosProduto());