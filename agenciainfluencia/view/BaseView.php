<?php
class BaseView 
{
    public function render($view, $exit = true)
    { 
        $view = $view . ".html";
        if (! is_file($view)) {
             throw new InvalidArgumentException("A view " . $view . " não foi encontrada");
        }
        require_once($view);
        
        if (! is_bool($exit)) {
             throw new InvalidArgumentException("O parâmetro 'exit' deve ser um booleano (opcional)");
        }
        if ($exit) {
            exit;
        }
    }

    public function set($chave, $valor)
    {
        $registry = new Registry;
        $registry->set(
            array(
                'view' => array(
                     $chave => $valor
                )
            )
       );
   }

   public function get($chave)
   {
       return $registry->get(
           array(
               'view' => array(
                   $chave
                )
          )
      );
   }
}
