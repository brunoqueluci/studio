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
    <div class="conteiner">
        <div class="form-image">
            <img src="assets\img\bg_login.svg">
        </div>
        <div class="form">
            <form method="POST" action="controller\login.php">
                <div class="form-header">
                    <div class="input-group">
                        <div class="title">
                            <h1>Acesso ao Sistema</h1>
                        </div>
                        <div class="input-box">
                            <label for="firstname">E-mail de acesso</label>
                            <input id="email" type="email" name="email" placeholder="Digite o e-mail" required >
                        </div>
                        <div class="input-box">
                            <label for="password">Senha de acesso</label>
                            <input id="password" type="password" name="password" placeholder="Digite a senha" required >
                        </div>
                        <div class="login-button">
                            <button type="submit" name="login" value="login">ENTRAR</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>