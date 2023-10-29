<?php

namespace Pizzaria\Models;

use PDO;

class Model
{
    private $conexao;
    private $sql;

    public function __construct()
    {
        $this->conexao = new PDO("mysql:host=localhost;dbname=db_pizzaria;charset=utf8", "root", "");
        $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getConexao()
    {
        return $this->conexao;
    }
}
