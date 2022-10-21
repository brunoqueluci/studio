<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css\style_login.css">
    <link rel="stylesheet" href="css\signin.css">
    <link rel="stylesheet" href="\studio\css\style_footer.css">
    <title>Studio | Sistema de Gereciamento</title>
</head>
<body class="text-center">  
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="\studio\controller\login.php">
            <img class="mb-4" src="\studio\assets\brand\bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Acesso ao Sistema</h1>
            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="floatingPassword">Senha</label>
            </div>
            <div class="checkbox mb-3">
                <label><input type="checkbox" value="remember-me">Recuperar Senha</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="login" value="login">Entrar</button>
            <p class="mt-5 mb-3 text-muted">&copy; FOTO KAIZER | 2022</p>
        </form>
    </main>    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>