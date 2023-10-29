<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME; ?></title>
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>

<body id="login">
    <div class="fundo">
        <div class="conteudo-formulario">
            <div class="titulo-login">LOGIN</div>

            <form action="" method="post">
                <div class="campo">
                    <label for="">Usuário</label>
                    <input type="email" name="email">
                </div>

                <div class="campo">
                    <label for="">Senha</label>
                    <input type="password" name="senha">
                </div>

                <div class="campo">
                    <button type="submit" class="btn btn-block">Entrar</button>
                </div>
                
                <div class="campo">
                    <a href="">Esqueci minha senha</a>
                </div>
            </form>

        </div>
    </div>
</body>

</html>