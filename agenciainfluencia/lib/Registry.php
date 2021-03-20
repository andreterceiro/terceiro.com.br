<?php
class Registry{
    /**
     * Seta uma chave (com seu valor) no registry
     *
     * @param $string $chave Chave a ser setada
     * @param mixed   $valor Valor a ser setado
     *
     * @return null
     */
    public function set($chave, $valor)
    {
        $_SESSION['registry'][$chave] = $valor;
    }

    /**
     * Retorna o valor de uma chave (com seu valor) do registry
     *
     * @param $string $chave Chave a ser obtida
     *
     * @throws InvalodArgumentException Se a chavfe não for encontrada
     *
     * @return mixed O valor relacionado à chave
     */
    public function get($chave) 
    {
        if (isset($_SESSION['registry'][$chave])) {
            return $_SESSION['registry'][$chave];
        }

        throw new InvalidArgumentException('A chave  ' . $chave . ' não foi encontrada');
    }
}
