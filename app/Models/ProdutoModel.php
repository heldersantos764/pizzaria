<?php

namespace Pizzaria\Models;

use PDO;

class ProdutoModel extends Model{

    public function buscarTodos()
    {
        $con = $this->getConexao();
        $sql = $con->query('SELECT * FROM produto ORDER BY nome');

        $produtos = $sql->fetchAll();

        return $produtos;
    }

}