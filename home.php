<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css\style.css">
    <title>Studio | Sistema de Gereciamento</title>
</head>
<body>
    <div class="alert alert-info" role="alert">
        <h3>Site em manutenção!</h3>
        <hr>
        <h4>Sistema sendo criado, aguarde, em breve será finalizado.</h4>
        <h4>
            <?php session_start();
            echo "Usuario logado " . $_SESSION["nome"] . " Esta logado e seu id é " . $_SESSION["id"];
            ?>
        </h4>
        <div class="login-button">
            <a href="\studio\controller\Logout.php">
                <button type="button" name="Logout" value="Logout">SAIR</button>
            </a>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>