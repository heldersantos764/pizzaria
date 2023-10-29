function excluirCliente(idCliente){
    let escolha = confirm("Deseja realmente excluir o cliente de id = "+idCliente+"?");

    if(escolha){
        window.location.href = url_base('/cliente/excluir?id='+idCliente)
    }
}

function excluirPedido(idPedido){
    let escolha = confirm("Deseja realmente excluir o pedido de id = "+idPedido+"?");

    if(escolha){
        window.location.href = url_base('/pedido/excluir?id='+idPedido)
    }
}