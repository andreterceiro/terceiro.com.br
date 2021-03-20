<?php
// Sem o static d 5.3 vou fazer um singleton
// o singletong deu segment fault. Vai sem... 
class Conexao
{
    private $conexao;
 
   // Não vou colocar em um arquivo externo para ganhar tempo 
    private $settings = array(
        'database' => array(
            'bd' => 'bd.sqlite',
        )
    );
    
    public function conectar()
    {
        $settings = $this->settings;
        
        $this->conexao = sqlite_open(
            $settings['database']['bd'],
            0666,
            $error
        );
    }
    
    public function query($sql) 
    {
        $query = sqlite_query($sql);
        return sqlite_fetch_array($query);
    }    

    public function getConexao() 
    {
        return $this->conexao;
    }
}
