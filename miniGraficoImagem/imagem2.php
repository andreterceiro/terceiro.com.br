<?php
use  andreterceiro\minigraficoimagem\MiniGraficoImagem;
require_once "MiniGraficoImagem.php";

$grafico = new MiniGraficoImagem;
$grafico->setarTipoBorda(2);
$grafico->setarLinhaReferencia(2);
$grafico->cadastrar(4,"Sim",0,0,255);
$grafico->cadastrar(1,"Nao",255,0,0);
$grafico->gerarGrafico(255,255,200);

?>
