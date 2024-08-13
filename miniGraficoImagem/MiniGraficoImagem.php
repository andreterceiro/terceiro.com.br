<?php
namespace andreterceiro\minigraficoimagem;

/**
 * Classe para geração de gráficos
 */ 
class Minigraficoimagem 
{    
    /**
     * Indica que a borda não deve existir
     * 
     * @const int
     */ 
    const SEM_BORDA = 0;

    /**
     * Indica que a borda deve ser justa ao valor
     * 
     * @const int
     */ 
    const BORDA_JUSTA = 1;

    /**
     * Indica que a borda deve ocupar 100%
     * 
     * @const int
     */ 
    const BORDA_100_PORCENTO = 2;

    /**
     * Índice usado internamente para controle do que já foi cadastrado
     * 
     * @var int
     */ 
    private $indice = 0;
    
    /**
     * Soma usada internamente dos valores cadastrados
     * 
     * @var int
     */ 
    private $soma = 0;

	/**
	 * Dados da linha de base (cor, espessura etc)
	 * 
	 * @var array
	 */
	private $linhaBase = array ();

	/**
	 * Dados da linha de base (cor, espessura etc)
	 * 
	 * @var array
	 */
	private $linhaReferencia = array (
		'valor' => 3
	);
	  
	/**
	 * Tipo da borda (veja o $this->setarTipoBorda())
	 * 
	 * @var array
	 */	
	private $borda = array(
		'tipo' => 2
	);
	  
    /**
     * Construtor
     */ 
    public function __construct() 
    {//minigraficoimagem() { PHP 4
    }

    /**
     * Valida um valor de cor RGB de 0 a 255 (3 valores)
     *
     * @param int $vermelho Valor do vermelho de 0 a 255
     * @param int $verde Valor do verde de 0 a 255
     * @param int $vermelho Valor do azul de 0 a 255
     * 
     * @returns bool
     */  
    public function validaCor($vermelho, $verde, $azul)
    {
        if (is_integer($vermelho) && $vermelho >=0 && $vermelho <= 255) {
            if (is_integer($verde) && $verde >=0 && $verde <= 255) {
                if (is_integer($azul) && $azul >=0 && $azul <= 255) {
                    return true;
                }
            }
        }
        
        return false;   
    }
    
    /**
     * Seta a linha de base da imagem
     * 
     * @param int $espessura Valor da espessura de 1 a 6
     * @param int $vermelho Valor do vermelho de 0 a 255 
     * @param int $verde Valor do verde de 0 a 255 
     * @param int $azul Valor do azul de 0 a 255 
     *  
     * @throws \InvalidArgumentException Se uma cor não tiver um valor de 0 a 255
     * 
     * @returns null
     */  
    public function setarLinhaBase($espessura="", $vermelho="", $verde="", $azul="") 
    {
        if ($espessura >= 0 && $espessura < 6) {
            $this->linhaBase["espessura"] = $espessura;
        } else {
            throw new \InvalidArgumentException("A espessura deve ter um valor de 1 a 6");
        }
                
        if ($this->validaCor($vermelho, $verde, $azul)) {
            $this->linhaBase["cor"]["vermelho"]=$vermelho;
            $this->linhaBase["cor"]["verde"]=$verde;
            $this->linhaBase["cor"]["azul"]=$azul;
        } else {
            throw new \InvalidArgumentException("As cores devem ter valores de 0 a 255");    
        }
    }

    /**
     * Seta a linha de referência
     * 
     * @param int $numeroDeAreas Número de áreas resultantes das linhas de referência
     * @param int $vermelho=0 Valor do vermelho de 0 a 255 
     * @param int $verde=0 Valor do verde de 0 a 255 
     * @param int $azul=0 Valor do azul de 0 a 255 
     *
     * @throws \InvalidArgumentException Se uma cor não tiver um valor de 0 a 255
     *   
     * @returns null
     */ 
    public function setarLinhaReferencia($numeroDeAreas, $vermelho=0, $verde=0, $azul=0) 
    {
        if ($numeroDeAreas >=0 && $numeroDeAreas < 6) {
			$this->linhaReferencia["valor"] = $numeroDeAreas;
		}
		
        if ($this->ValidaCor($vermelho, $verde, $azul)) {
            $this->linhaReferencia["cor"]["vermelho"]=$vermelho;
            $this->linhaReferencia["cor"]["verde"]=$verde;
            $this->linhaReferencia["cor"]["azul"]=$azul;
        } else {
            throw new \InvalidArgumentException("As cores devem ter valores de 0 a 255");    
        } 
    }

    /**
     * Seta o tipo da borda
     * 
     * @param int $tipo = 1 Deve ter um valor de 0 a 2. 
     *     TIPO 0= sem borda nas barras, 
     *     TIPO 1= com borda nas barras, 
     *     TIPO 2= borda indicando o total 
     * 
     * @throws \InvalidArgumentException Se o tipo não tiver um valor de 0 a 2
     * 
     * @returns null
     */ 
    public function setarTipoBorda($tipo = 1) 
    {
        if (is_integer($tipo) && $tipo >= 0 && $tipo <= 2){
            $this->borda["tipo"]=$tipo;
        } else {
            throw new \InvalidArgumentException("O tipo deve ter um valor de 0 a 2");    
        }
    }

    /**
     * Seta a cor da barra
     *
     * @param int $vermelho Valor do vermelho de 0 a 255 
     * @param int $verde Valor do verde de 0 a 255 
     * @param int $azul Valor do azul de 0 a 255 
     * 
     * @throws \InvalidArgumentException Se uma cor não tiver um valor de 0 a 255
     *  
     * @returns null
     */ 
    public function setarCorBarra($vermelho, $verde, $azul) 
    {
        if ($this->ValidaCor($vermelho,$verde,$azul)) {
            $this->barra["padrao"]["cor"]["vermelho"] = $vermelho ;
            $this->barra["padrao"]["cor"]["verde"] = $verde ;
            $this->barra["padrao"]["cor"]["azul"] = $azul ;
        } else {
            throw new \InvalidArgumentException("As cores devem ter valores de 0 a 255");    
        }           
    }   
    
    /**
     * Seta a cor da fonte
     * 
     * @param int $vermelho Valor do vermelho de 0 a 255 
     * @param int $verde Valor do verde de 0 a 255 
     * @param int $azul Valor do azul de 0 a 255 
     *  
       * @throws \InvalidArgumentException Se uma cor não tiver um valor de 0 a 255
     *
     * @returns null
     */
    public function setarCorFonte($vermelho, $verde, $azul) 
    {
        if ($this->validaCor($vermelho, $verde, $azul)){
           $this->fonte["padrao"]["cor"]["vermelho"] = $vermelho ;
           $this->fonte["padrao"]["cor"]["verde"] = $verde ;
           $this->fonte["padrao"]["cor"]["azul"] = $azul ;
        } else {
            throw new \InvalidArgumentException("As cores devem ter valores de 0 a 255");    
        }   
        
    }

    /**
     * Reinicia alguns valores 
     * 
     * @retuns null
     */ 
    public function reiniciar()
    {
        $this->dados="";
        $this->cor="";
        $this->rotulo="";
        $this->indice=0;
        $this->soma =0 ;
    }
    
    /**
     * Cadastra um valor para o gráfico
     * 
     * @param int $valor Valor a cadastrar
     * @param string $rotulo Texto relacionado ao valor acima
     * @param int $barraVermelha = 0. Valor do vermelho de 0 a 255 (cor da barra) 
     * @param int $barraVerde = 0. Valor do verde de 0 a 255 (cor da barra) 
     * @param int $barraAzul = 0. Valor do azul de 0 a 255 (cor da barra) 
     * @param int $fonteVermelha = 0. Valor de 0 a 255 da fonte em vermelho
     * @param int $fonteVerde = 0. Valor de 0 a 255 da fonte em verde
     * @param int $fonteAzul = 0. Valor de 0 a 255 da fonte em azul
     * @param int $bordaVermelha = 0. Valor de 0 a 255 da borda em vermelho
     * @param int $bordaVerde = 0. Valor de 0 a 255 da borda em verde
     * @param int $bordaAzul = 0. Valor de 0 a 255 da borda em azul
     * 
     * @throws \InvalidArgumentException Se alguma cor (parâmetro a partir do terceiro) não tiver um valor de 0 a 255
     * 
     * @returns null
     */     
    function cadastrar($valor, $rotulo, $barraVermelha=0, $barraVerde=0, $barraAzul=0, $fonteVermelha=0, $fonteVerde=0, $fonteAzul=0, $bordaVermelha=0, $bordaVerde=0, $bordaAzul=0)
    {
        $this->dados[$this->indice]=$valor;
        $this->rotulo[$this->indice]=$rotulo;
    
        if ($this->validaCor($barraVermelha, $barraVerde, $barraAzul)==1) {
            $this->barra["cor"]["vermelho"][$this->indice] = $barraVermelha;
            $this->barra["cor"]["verde"][$this->indice] = $barraVerde;
            $this->barra["cor"]["azul"][$this->indice] = $barraAzul;
         } else {
            throw new \InvalidArgumentException("As cores (parâmetros a partir do terceiro) devem ter valores de 0 a 255");
         }
    
         if ($this->validaCor($fonteVermelha, $fonteVerde, $fonteAzul)==1) {
            $this->fonte["cor"]["vermelho"][$this->indice] = $fonteVermelha;
            $this->fonte["cor"]["verde"][$this->indice] = $fonteVerde;
            $this->fonte["cor"]["azul"][$this->indice] = $fonteAzul;
         } else {
            throw new \InvalidArgumentException("As cores (parâmetros a partir do terceiro) devem ter valores de 0 a 255");
         }
         
    
         if ($this->validaCor($bordaVermelha,$bordaVerde,$bordaAzul)==1) {
            $this->borda["cor"]["vermelho"][$this->indice]=$bordaVermelha;
              $this->borda["cor"]["verde"][$this->indice]=$bordaVerde;
            $this->borda["cor"]["azul"][$this->indice]=$bordaAzul;
         } else {
            throw new \InvalidArgumentException("As cores (parâmetros a partir do terceiro) devem ter valores de 0 a 255");
         }
    
           $this->indice++; 
         $this->soma = $this->soma + $valor ;
    }

    /**
     * Gera o gráfico com base no que foi cadastrado anteriormente
     * 
     * @param int $fundoVermelho = 215. Valor do vermelho do fundo do gráfico. De 0 a 255
     * @param int $fundoVerde = 215. Valor do verde do fundo do gráfico. De 0 a 255
     * @param int $fundoAzul = 215. Valor do azul do fundo do gráfico. De 0 a 255
     * @param bool $porcentagemNaBarra = true. Indica se colocará a porcentagem na barra
     * 
     * @throws \UnexpectedValueException Se $this->borda['tipo'] não tiver um valor de 0 a 2
     * @throws \UnexpectedValueException Se a linha de referência ($this->linhaReferencia['valor']) não tiver um valor de 1 a 5
     * 
     * @returns @null
     */  
    public function gerarGrafico($fundovermelho=215, $fundoverde=215, $fundoazul=255, $porcentagemNaBarra=true)
    {
        if ($this->soma==0) $this->soma="1" ; // PARA EVITAR O ERRO DE DIVISÃO POR 0 - NÃo INFLUI NOS RESULTADOS
        $tamanhoTotal=count($this->dados) * 50 + 30  ; // Calculando a extensão do gráfico no eixo y (plano cartesiano)
        if ($this->linhaReferencia["valor"] != 0 ) {
             $imagem=ImageCreate(600,$tamanhoTotal+15);
        } else{
            $imagem=ImageCreate(600,$tamanhoTotal);
        }
       
        if ($this->ValidaCor($fundovermelho,$fundoverde,$fundoazul)) { // Setando a cor de fundo
            $fundo=\imageColorAllocate($imagem,$fundovermelho,$fundoverde,$fundoazul) ; // Configurando a cor de fundo
        } else { 
            $fundo=\imageColorAllocate($imagem,215,215,215) ; // Configurando a cor de fundo com um cinza padrão
        }
       
        $preto=\imageColorAllocate($imagem,0,0,0) ; // Configurando a cor da linha de base
        $cinza=\imageColorAllocate($imagem,80,80,80) ; // Configurando a para porcentagem dentro da barra 
        $corDaLinha=\imageColorAllocate(
            $imagem,
            $this->linhaBase["cor"]["vermelho"],
            $this->linhaBase["cor"]["verde"],
            $this->linhaBase["cor"]["azul"]
        );

        if ($this->linhaReferencia["valor"] == 0) {
            $linhaFinal = $tamanhoTotal - 10; 
        } else {
            $linhaFinal = $tamanhoTotal - 10 ;
        }
       
        // Colocando a área preenchida
        \imageFilledRectangle(
            $imagem,
            9-$this->linhaBase["espessura"],
            10,
            9,
            $linhaFinal + $this->linhaBase["espessura"],
            $corDaLinha
        );
       
        // Colocando a linha de base    
        \imageFilledRectangle(
            $imagem,
            9,
            $linhaFinal,
            590,
            $linhaFinal + $this->linhaBase["espessura"],
            $corDaLinha
        ); 
       
        $corPontilhado=imagecolorallocate(
            $imagem,
            $this->linhaReferencia["cor"]["vermelho"],
            $this->linhaReferencia["cor"]["verde"],
            $this->linhaReferencia["cor"]["azul"]
        );
       
        for ($cont=0; $cont < $this->indice; $cont++) {
              $porcentagem = \number_format(
                (($this->dados[$cont] / $this->soma) * 100),
                2,
                ",",
                ""
            ) . "%" ;
            
            $porcentagemComPonto = \str_replace(",",".",$porcentagem) ;
          
            if (
                $this->ValidaCor(
                    $this->barra["cor"]["vermelho"][$cont],
                    $this->barra["cor"]["verde"][$cont],
                    $this->barra["cor"]["azul"][$cont]) == 1 
            ) {
                $cor = \imageColorAllocate(
                    $imagem,
                    $this->barra["cor"]["vermelho"][$cont],
                    $this->barra["cor"]["verde"][$cont],
                    $this->barra["cor"]["azul"][$cont]
                );
               } else {
                throw new \InvalidArgumentException("A(s) cor(es) de uma barra estão com valor(es) inválido(s). Devem ser de 0 a 255");
            }
          
            $corFonte = \imageColorAllocate(
                $imagem,$this->fonte["cor"]["vermelho"][$cont],
                $this->fonte["cor"]["verde"][$cont],
                $this->fonte["cor"]["azul"][$cont]
            ); 
          
            $posicaoY= $cont * 50 + 40;
            $posicaoX = $porcentagemComPonto * 4.6 ;
            
            if ($posicaoX < 10 && $posicaoX != 0) {
                $posicaoX = 10 ;
            }
                
            if ($this->borda["tipo"]==0 ) {
                // Colocando a área preenchida
                \imageString(
                    $imagem, 
                    3, 
                    $porcentagemComPonto * 4.6 + 14, $posicaoY -2, 
                    $this->dados[$cont] . " - " . $porcentagem, 
                    $corFonte
                );
            } elseif ($this->borda["tipo"]==1) {
                // Colocando a área preenchida
                \imageRectangle(
                    $imagem,
                    10,
                    $posicaoY-1,
                    $posicaoX + 1,
                    $posicaoY + 21,
                    $preto
                );
                
                // Colocando a área preenchida
                \imageString(
                    $imagem,
                    3,
                    $porcentagemComPonto * 4.6 + 14,
                    $posicaoY -2,
                    $this->dados[$cont] . " - " . $porcentagem, $corFonte
                );
            } elseif ($this->borda["tipo"] == 2) {
                // Colocando a borda
                \imageRectangle(
                    $imagem,
                    10,
                    $posicaoY-1,
                    460,
                    $posicaoY + 21,
                    $preto
                ) ; 
                
                // Máscara com a cor de fundo para cobrir o 1px da borda esquerda
                \imageRectangle(
					$imagem,
					10, 
					$posicaoY, 
					11,
					$posicaoY + 20,
					$fundo
				);
                
                // Colocando a área preenchida 
                \imageString(
                    $imagem,
                    6,
                    474,
                    $posicaoY + 3,
                    $this->dados[$cont] . " - " . $porcentagem  ,$corFonte
                ); 
            } else {
                throw new \UnexpectedValueException("A borda não tinha um valor de 1 a 2");    
            }
          
            if ($this->dados[$cont] > 0){    
                \imageFilledRectangle($imagem, 10, $posicaoY, $posicaoX , $posicaoY + 20, $cor) ; // Colocando a área preenchida
            }

            \imageString($imagem,5,15,$posicaoY - 17, $this->rotulo[$cont]  ,$corFonte) ; // Colocando a área preenchida
          
            // Colocando a porcentagem a barra
            if ($porcentagemNaBarra != 0) {
                \imageString($imagem,6,15, $posicaoY +3, $porcentagem  ,$cinza);
            }
        }

        if ($this->linhaReferencia["valor"] < 6 && $this->linhaReferencia["valor"] > 0) {
            for($cont=1 ; $cont < $this->linhaReferencia["valor"] ; $cont++) {
                // CRIANDO A IMAGEM 
                \imageDashedLine(
                    $imagem,
                    (460 / $this->linhaReferencia["valor"]) * $cont,
                    30,
                    (460/$this->linhaReferencia["valor"]) * $cont, 
                    $tamanhoTotal-10,$corPontilhado
                );
             
                // Colocando a área preenchida
                \imageString(
                    $imagem,
                    5,
                    (460/$this->linhaReferencia["valor"]) * $cont -7,$tamanhoTotal -5,
                    round(($cont/$this->linhaReferencia["valor"])*100) . "%"  ,$corPontilhado
                ) ; 
            }
        } else {
            throw new \UnexpectedValueException('A linha de referência ($this->linhaReferencia["valor"]) não tinha um valor de 1 a 5');
        }
       
        \imagePng($imagem) ;
    }

    /** 
     * Gera uma cor aleatória
     * 
     * @returns array Retorna um array de 6 posições referente a cor gerada
     */ 
    public function gerarCor()
    {
          $numero = $this->randomico_antigo;
        while ($numero == $this->randomico_antigo) {
           $numero = round(rand(1,8));
        }
        
        if ($numero == 1) {
            //Vermelho
            $vetor[1] = 255;
            $vetor[2] = 180;
            $vetor[3] = 180;
            $vetor[4] = 255;
            $vetor[5] = 50;
            $vetor[6] = 50;
        } elseif ($numero == 2) {
             //Azul
             $vetor[1] = 180;
             $vetor[2] = 180;
             $vetor[3] = 255;
             $vetor[4] = 50;
             $vetor[5] = 50;
             $vetor[6] = 255;
        } elseif ($numero == 3) { 
             //Verde
             $vetor[1] = 180;
             $vetor[2] = 255;
             $vetor[3] = 180;
             $vetor[4] = 50;
             $vetor[5] = 180;
             $vetor[6] = 50;
        } elseif ($numero == 4) {
             //Amarelo
             $vetor[1] = 255;
             $vetor[2] = 255;
             $vetor[3] = 180;
             $vetor[4] = 180;
             $vetor[5] = 180;
             $vetor[6] = 50;
        } elseif ($numero == 5) { 
             //Laranja
             $vetor[1] = 255;
             $vetor[2] = 225;
             $vetor[3] = 180;
             $vetor[4] = 225;
             $vetor[5] = 180;
             $vetor[6] = 50;
          } elseif ($numero == 6) {
            //Violeta
            $vetor[1] = 255;
            $vetor[2] = 180;
            $vetor[3] = 255;
            $vetor[4] = 180;
            $vetor[5] = 50;
            $vetor[6] = 180;
        } elseif ($numero == 7) {
            //Cinza
            $vetor[1] = 220;
            $vetor[2] = 220;
            $vetor[3] = 220;
            $vetor[4] = 180;
            $vetor[5] = 180;
            $vetor[6] = 180;
        } elseif ($numero == 8) {
            //Marrom
            $vetor[1] = 210;
            $vetor[2] = 190;
            $vetor[3] = 170;
            $vetor[4] = 190;
            $vetor[5] = 170;
            $vetor[6] = 150;
        }
        
        return $vetor;
    }
}


