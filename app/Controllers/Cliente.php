<?php

namespace Pizzaria\Controllers;

use Pizzaria\Models\ClienteModel;

class Cliente
{

    //exibe a lista de clientes cadastrados
    public function principal()
    {
        $clienteModel = new ClienteModel();
        $listaDeCliente = $clienteModel->buscarTodos();

        carregar_view('lista_clientes', 'clientes', ['clientes' => $listaDeCliente]);
    }

    //abre a view para cadastrar novos clientes
    public function novoCliente()
    {
        carregar_view('novo_cliente');
    }

    public function editarCliente()
    {
        $idCliente = $_GET['id'];

        $clienteModel = new ClienteModel();

        $cliente = $clienteModel->buscarPorId($idCliente);

        carregar_view('editar_cliente', 'Editar Cliente', ['cliente' => $cliente]);
    }

    public function salvar()
    {
        $cliente = [
            'nome' => $_POST['nome'],
            'endereco' => $_POST['endereco'],
            'telefone' => $_POST['telefone'],
        ];

        $clienteModel = new ClienteModel();

        $salvou = $clienteModel->salvar($cliente, $_POST['id_cliente']);

        if ($salvou) {
            carregar_view(
                'alerta',
                'titulo',
                [
                    'mensagem' => 'Cliente editado com sucesso!',
                    'url' => url_base('/cliente')
                ]
            );
        } else {
            echo "Erro ao editar cliente";
        }
    }

    public function cadastrar()
    {
        $cliente = [
            'nome' => $_POST['nome'],
            'endereco' => $_POST['endereco'],
            'telefone' => $_POST['telefone'],
        ];

        $clienteModel = new ClienteModel();

        $cadastrou = $clienteModel->cadastrar($cliente);

        if ($cadastrou) {
            carregar_view(
                'alerta',
                'titulo',
                [
                    'mensagem' => 'Cliente cadastrado com sucesso!',
                    'url' => url_base('/cliente')
                ]
            );
        } else {
            echo "Erro ao cadastrar cliente";
        }
    }

    public function excluir()
    {
        $idCliente = $_GET['id'];

        $clienteModel = new ClienteModel();

        $resultado = $clienteModel->deletar($idCliente);

        if ($resultado) {
            $dadosAlerta = [
                'mensagem' => 'Cliente excluído com Sucesso.',
                'url' => url_base('/cliente')
            ];

            carregar_view('alerta', 'Sucesso', $dadosAlerta);
        } else {
            $dadosAlerta = [
                'mensagem' => 'Erro ao excluir cliente.',
                'url' => url_base('/cliente')
            ];

            carregar_view('alerta', 'Sucesso', $dadosAlerta);
        }
    }
}
