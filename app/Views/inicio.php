<?php carregar_view('cabecalho') ?>

<div style="text-align:right; margin: 15px 0">
    <a href="<?= url_base('/pedido/novoPedido')?>" class="btn">Novo Pedido</a>
</div>

<table class="tabela">
    <thead>
        <tr>
            <th>Id</th>
            <th>Cliente</th>
            <th>Endereço</th>
            <th>Pedido</th>
            <th>Opções</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($dados['pedidos'] as $p): ?>

        <tr>
            <td><?=$p['id_pedido']?></td>
            <td><?=$p['nome_cliente']?></td>
            <td><?=$p['endereco']?></td>
            <td><?=$p['nome']?></td>
            <td>
                <a href="<?= url_base('/pedido/editarPedido?id='.$p['id_pedido']) ?>" class="btn">Editar</a>
                <button class="btn" onclick="excluirPedido(<?= $p['id_pedido'] ?>)">Excluir</button>
            </td>
        </tr>

        <?php endforeach; ?>

    </tbody>
</table>
<?php carregar_view('rodape') ?>