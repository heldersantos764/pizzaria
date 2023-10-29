<?php 
    $mensagem = $dados['mensagem'];
    $url = $dados['url'];
?>

<script>
    alert("<?= $mensagem ?>")
    window.location.href = "<?= $url ?>"
</script>