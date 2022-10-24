<?php
include("studio\controller\produto\GetDados.php");

$GetDadosProduto = new GetDadosProduto;
$GetDadosProduto->getDadosProduto();

var_dump($GetDadosProduto);