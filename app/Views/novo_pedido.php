<?php carregar_view('cabecalho');?>

<form method="post" action="">
    
    <div class="campo-form">
        <label for="">Cliente</label>

        <select name="id_cliente">
            <option value="">Selecione</option>
            <?php foreach($dados['clientes'] as $c) : ?>
                <option value="<?= $c['id_cliente'] ?>"><?= $c['nome'] ?> - <?= $c['endereco'] ?> - <?= $c['telefone'] ?></option>
            <?php endforeach; ?>
        </select>

    </div>

    <div class="campo-form">
        <label for="">Produto</label>
        <select name="id_produto">
            <option value="">Selecione</option>

            <?php foreach($dados['produtos'] as $p) : ?>
                <option value="<?= $p['id_produto'] ?>"><?= $p['nome'] ?></option>
            <?php endforeach; ?>

        </select>
    </div>

    <div class="campo-form">
        <label for="">Quantidade</label>
        <input type="number" name="quantidade" min="1" max="100" value="1">
    </div>

    <br>

    <div>
        <a href="<?= url_base() ?>" class="btn">Voltar</a>
        <button class="btn" type="submit">Finalizar Pedido</button>
    </div>

</form>

<?php carregar_view('rodape');?>