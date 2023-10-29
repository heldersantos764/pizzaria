<?php carregar_view('cabecalho', "Novo Cliente");?>


<form action="<?=url_base('/cliente/cadastrar')?>" method="post">
    <div class="campo-form">
        <label for="">Nome</label>
        <input type="text" name="nome">
    </div>

    <div class="campo-form">
        <label for="">Endereço</label>
        <input type="text" name="endereco">
    </div>

    <div class="campo-form">
        <label for="">Telefone</label>
        <input type="text" name="telefone">
    </div>

    <br>

    <div>
        <a href="<?= url_base('cliente') ?>" class="btn">Voltar</a>
        <button class="btn" type="submit">Cadastrar</button>
    </div>

</form>


<?php carregar_view('rodape');?>