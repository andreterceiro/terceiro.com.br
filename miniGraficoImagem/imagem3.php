<?php
use  andreterceiro\minigraficoimagem\MiniGraficoImagem;
require_once "MiniGraficoImagem.php";

$grafico = new MiniGraficoImagem;
$grafico->setarTipoBorda(0);
$grafico->setarLinhaReferencia(3);
$grafico->cadastrar(4,"Roxo",255,0,255);
$grafico->cadastrar(1,"Amarelo",255,255,0);
$grafico->cadastrar(1,"Cinza",150,150,150);
$grafico->cadastrar(1,"Preto",0,0,0);
$grafico->cadastrar(1,"Branco",255,255,255);
$grafico->gerarGrafico(255,255,200);

?>
