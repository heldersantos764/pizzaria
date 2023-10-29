<?= carregar_view('cabecalho', 'Clientes') ?>

<div style="text-align:right; margin: 15px 0">
    <a href="<?= url_base('/cliente/novoCliente') ?>" class="btn">Novo Cliente</a>
</div>

<table class="tabela">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Opções</th>
        </tr>
    </thead>

    <tbody>

        <?php foreach ($dados['clientes'] as $c) : ?>

            <tr>
                <td> <?= $c['id_cliente'] ?> </td>
                <td> <?= $c['nome'] ?> </td>
                <td> <?= $c['endereco'] ?> </td>
                <td> <?= $c['telefone'] ?> </td>
                <td>
                    <a href="<?= url_base('/cliente/editarCliente?id='.$c['id_cliente']) ?>" class="btn">Editar</a>
                    <button class="btn" onclick="excluirCliente(<?= $c['id_cliente'] ?>)">Excluir</button>
                </td>
            </tr>

        <?php endforeach ?>

    </tbody>
</table>


<?= carregar_view('rodape') ?>