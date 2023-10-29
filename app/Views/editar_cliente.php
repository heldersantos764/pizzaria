<?php carregar_view('cabecalho', "Editar Cliente");?>

<?php 
    $cliente = $dados['cliente'][0];
?>

<form action="<?=url_base('/cliente/salvar')?>" method="post">

    <input type="hidden" name="id_cliente" value="<?= $cliente['id_cliente']?>">

    <div class="campo-form">
        <label for="">Nome</label>
        <input type="text" name="nome" value="<?= $cliente['nome']?>">
    </div>

    <div class="campo-form">
        <label for="">Endereço</label>
        <input type="text" name="endereco" value="<?= $cliente['endereco']?>">
    </div>

    <div class="campo-form">
        <label for="">Telefone</label>
        <input type="text" name="telefone" value="<?= $cliente['telefone']?>">
    </div>

    <br>

    <div>
        <a href="<?= url_base('/cliente') ?>" class="btn">Voltar</a>
        <button class="btn" type="submit">Salvar</button>
    </div>

</form>


<?php carregar_view('rodape');?>