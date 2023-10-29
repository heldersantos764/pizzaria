<?php

namespace Pizzaria\Models;

use PDO;

class ClienteModel extends Model
{

    public function cadastrar($cliente)
    {
        $con = $this->getConexao();
        $sql = "INSERT INTO cliente (nome, endereco, telefone) VALUES (:nome, :endereco, :telefone)";

        $statement = $con->prepare($sql);

        $statement->execute([
            ':nome' => $cliente['nome'],
            ':endereco' => $cliente['endereco'],
            ':telefone' => $cliente['telefone']
        ]);

        $cadastrou = $con->lastInsertId();

        if ($cadastrou) {
            return true;
        }

        return false;
    }

    public function buscarTodos()
    {
        $con = $this->getConexao();
        $sql = $con->query('SELECT * FROM cliente ORDER BY nome');

        $clientes = $sql->fetchAll();

        return $clientes;
    }

    public function deletar($idCliente)
    {
        try {
            $con = $this->getConexao();
            $sql = $con->prepare('DELETE FROM cliente WHERE id_cliente = :id');

            $sql->bindParam(':id', $idCliente);

            $sql->execute();

            return $sql->rowCount();
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function buscarPorId($id)
    {
        $con = $this->getConexao();
        $sql = $con->query('SELECT * FROM cliente WHERE id_cliente = '.$id);

        $cliente = $sql->fetchAll();

        return $cliente;
    }

    public function salvar($cliente, $id){
        try {
            $con = $this->getConexao();

            $sql = $con->prepare('UPDATE cliente SET nome=:nome, endereco=:endereco, telefone=:telefone WHERE id_cliente=:id');

            $sql->execute([
                ":nome" => $cliente['nome'],
                ":endereco" => $cliente['endereco'],
                ":telefone" => $cliente['telefone'],
                ':id' => $id
            ]);

            return true;
        } catch (\Throwable $th) {
            return false;
        }

    }
}
