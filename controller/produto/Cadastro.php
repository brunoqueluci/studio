<?php
include("C:\wamp64\www\studio\controller\produto\produto.php");
// include("C:\wamp64\www\studio\model\produto\CadastraProduto.php");

$Produto = new Produto;
// $CadastraProduto = new CadastraProduto;

$Produto->cadastro($_POST);
// header("Location: \studio\cadastroproduto.php");