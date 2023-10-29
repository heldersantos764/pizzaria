<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= url_base('/assets/css/estilo.css') ?>">

    <script>
        function url_base(uri = '') {
            return "<?= url_base() ?>"+uri;
        }
    </script>

    <script src="<?= url_base('/assets/js/script.js') ?>"></script>
</head>

<body>
    <div class="container"><!--container-->
        <div class="cabecalho">
            <div class="nome-sistema"><?= APP_NAME ?></div>
            <div class="nome-usuario">
                <span>Helder dos Santos Sousa</span>
                <a href="" class="btn">Sair</a>
            </div>
        </div>

        <div class="conteudo">
            <div class="menu-principal">
                <a href="<?= url_base() ?>" class="btn">Pedidos</a>
                <a href="<?= url_base('/cliente') ?>" class="btn">Clientes</a>
                <a href="<?= url_base('/cardapio') ?>" class="btn">Cardárpio</a>
                <a href="<?= url_base('/usuario') ?>" class="btn">Usuários</a>
            </div>

            <div class="titulo-pagina">
                <?= $titulo ?>
            </div>

            <div class="pagina">