<?php

namespace Pizzaria\Models;

use PDO;

class PedidoModel extends Model{

    public function buscarTodos()
    {
        $con = $this->getConexao();
        $sql = $con->query('
            SELECT 
                pedido.*, 
                produto.*, 
                cliente.nome as nome_cliente,
                cliente.endereco
            FROM 
                pedido
            JOIN 
                produto ON pedido.id_produto = produto.id_produto
            JOIN 
                cliente ON pedido.id_cliente = cliente.id_cliente;
        ');

        $pedidos = $sql->fetchAll();

        return $pedidos;
    }

    public function deletar($idPedido)
    {
        try {
            $con = $this->getConexao();
            $sql = $con->prepare('DELETE FROM pedido WHERE id_pedido = :id');

            $sql->bindParam(':id', $idPedido);

            $sql->execute();

            return $sql->rowCount();
        } catch (\Throwable $th) {
            return false;
        }
    }

}