<?php
include("C:\wamp64\www\studio\controller\produto\GetDados.php");
include("C:\wamp64\www\studio\model\produto\CadastraProduto.php");

$GetDadosProduto = new GetDadosProduto;
$CadastraProduto = new CadastraProduto;

$CadastraProduto->cadastraProduto($GetDadosProduto->getDadosProduto());
