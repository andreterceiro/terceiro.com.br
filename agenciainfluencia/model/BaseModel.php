<?php
class BaseModel
{
    private $db;

    function __construct($bd) 
    {
        $conexao = new Conexao;
        $conexao->conectar();
        $this->db = $conexao->getConexao();
    }

    public function consultar($id, $tabela) 
    {
        if (! is_numeric($id)) {
            throw new InvalidArgumentException("O ID não é numérico");
        }

        return sqlite_query($this->db, "select * from $tabela where id='" . $id . "'");
    }

    public function consultarTodos($tabela)
    {
        return sqlite_query($this->db, "select * from $tabela");
    }
}

