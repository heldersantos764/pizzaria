<?php

namespace Pizzaria\Controllers;

use Pizzaria\Models\ClienteModel;
use Pizzaria\Models\PedidoModel;
use Pizzaria\Models\ProdutoModel;

class Pedido{

    public function principal(){
        
    }

    //exibe a view para cadastrar um novo pedido
    public function novoPedido(){
        $clienteModel = new ClienteModel();
        $produtoModel = new ProdutoModel();

        $clientes = $clienteModel->buscarTodos();
        $produtos = $produtoModel->buscarTodos();

        $dados = [
            'produtos' => $produtos,
            'clientes' => $clientes
        ];

        carregar_view('novo_pedido', 'Novo Pedido', $dados);
    }

    public function excluir()
    {
        $idPedido = $_GET['id'];

        $pedidoModel = new PedidoModel();

        $resultado = $pedidoModel->deletar($idPedido);

        if ($resultado) {
            $dadosAlerta = [
                'mensagem' => 'Pedido excluído com Sucesso.',
                'url' => url_base()
            ];

            carregar_view('alerta', 'Sucesso', $dadosAlerta);
        } else {
            $dadosAlerta = [
                'mensagem' => 'Erro ao excluir pedido.',
                'url' => url_base()
            ];

            carregar_view('alerta', 'Sucesso', $dadosAlerta);
        }
    }

}