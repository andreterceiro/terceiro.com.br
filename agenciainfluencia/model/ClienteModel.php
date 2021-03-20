<?php
require_once "BaseModel.php";

class ClienteModel extends BaseModel
{
    private $nome;
    private $nis;
    private $email;
    private $telefone;

    public function __construct()
    {
        parent::__construct('clientes');
    }

    public function obter($id) 
    {
        if (! is_numeric($id) ) {
            throw InvalidArgumentException("O ID não é um número");
        }

        $cliente = $this->consultar($id);
    }

    public function getNome()
    {
        return $this->nome;    
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }
    
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email) 
    {
        $posicaoArroba = strpos("@", $email);
        if ($posicaoArroba < 1) {
            throw new InvalidArgumentException("O e-mail não tem @ no lugar certo");
        }

        $posicaoPrimeiroPonto = strpos(".", $email);
        if ($posicaoPrimeiroPonto < $posicaoArroba) {
            throw new InvalidArgumentException("O e-mail não tem . no lugar certo");
        }
        
        $posicaoSegundoPonto = strpos(".", $email, $primeiroPonto);
        if ($posicaoPrimeiroPonto < $posicaoSegundoPonnto) {
            throw new InvalidArgumentException("O e-mail não tem . no lugar certo");
        }
        

        $this->email = $email;
    }

    public function getNis()
    {
        return $this->nis;
    }

    public function setNis($nis)
    {
        $this->nis = $nis;
    }
}

