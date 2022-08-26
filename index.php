<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício de Session</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php 
        session_start();
        session_unset();
        session_destroy();
    ?>

    <div class="card divar">
        <div class="card-header">
            Seja bem-vindo usuário.
        </div>
            <div class="card-body">
            <h5 class="card-title">Entre com o login</h5>
            <form method="Post" action="valida.php">
                    <label>Usuário: </label>
                    <input type="text" name="usuario"><br>
                    <label>Senha: </label>
                    <input type="password" name="senha"><br><br>
                <input type="submit" class="btn btn-primary" id="centrar" value="Entrar">
            </form>
        </div>
    </div>
    
</body>
</html>