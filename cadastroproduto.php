<?php require_once("C:\wamp64\www\studio\controller\Restrito.php");?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="\studio\css\style_bosstrap.css">
    <link rel="stylesheet" href="\studio\css\style_footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Studio | Sistema de Gereciamento</title>
</head>
<body>
<?php require_once("C:\wamp64\www\studio\View\Navbar.php");?>
<div class="container">
    <h1>Cadastro de Produto</h1>
    <hr>
</div>
<div class="container">
    <div class="col form-group">
    <form method="POST" action="\studio\controller\produto\Cadastro.php">
        <div class="row">
            <div class="col-2 align-self-center">
                <div class="form-group">
                        <div class="form">
                            <label class="sr-only" for="inlineFormInputName2">Código</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" id="codigo" name="codigo" placeholder="Código">
                        </div>
                </div>
            </div>
            <div class="col-2">
                <div class="form-inline">
                    <label class="sr-only" for="inlineFormInputName2">Data Cadastro</label>
                    <input type="date" class="form-control mb-2 mr-sm-2" id="dt_cadastro" name="dt_cadastro" placeholder="Código">
                </div>
            </div>
            <div class="col-2">
                <div class="form-inline">
                    <label class="sr-only" for="inlineFormInputName2">Última alteração</label>
                    <input type="date" class="form-control mb-2 mr-sm-2" id="dt_ultima_alteracao" name="dt_ultima_alteracao" placeholder="Código">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 my-1">
                <label class="sr-only py-1" for="inlineFormInputName2">Descrição do produto</label>
                <input class="form-control" type="text" id="descricao_produto" name="descricao_produto" placeholder="Nome do produto">
            </div>
        </div>
        <div class="row">
            <div class="col-4 my-1">
                <label class="sr-only py-1" for="inlineFormInputName2">Setor</label>
                <select class="form-control custom-select" name="setor" id="setor">
                    <option value="1">Setor 1</option>
                    <option value="2">Setor 2</option>
                    <option value="3">setor 3</option>
                </select>
            </div>
            <div class="col-4 my-1 align-items-center">
                <label class="sr-only py-1" for="inlineFormInputName2">Novo setor</label>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-2 my-1">
                <label class="sr-only" for="inlineFormInputName2">Valor de Venda</label>
                <input class="form-control" type="number" step="0.01" min="0.1" name="valor_venda" id="valor_venda">
            </div>
            <div class="col-2 my-1">
                <label class="sr-only" for="inlineFormInputName2">Valor de Custo</label>
                <input class="form-control" type="number" step="0.01" min="0.1" name="valor_custo" id="valor_custo">
            </div>
        </div>
        
        <div class="row">
            <div class="col-2">
                <label class="sr-only form-group" for="inlineFormInputName2">Quantidade Estoque</label>
                <input class="form-control" type="number" step="0.01" min="0.1" name="estoque" id="estoque" placeholder="Estoque Atual">
            </div>
        </div>
       
        <div class="row">
            <div class="col-6 my-2">
                <div class="form-group">
                    <label for="exempleFormControlTextarea1">Observação sobre o produto</label>
                    <textarea class="form-control" name="obs_produto" id="obs_produto" rows="3"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div col-3>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </div>
        </div>
    </form>
    </div>
</div>
<?php require_once("C:\wamp64\www\studio\View\usuario\Footer.php");?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="cadastroProduto.js"></script>
</body>
</html>

