<?php
use  andreterceiro\minigraficoimagem\MiniGraficoImagem;
require_once "MiniGraficoImagem.php";

$grafico = new MiniGraficoImagem;
$grafico->setarTipoBorda(1);
$grafico->setarLinhaReferencia(1);
$grafico->cadastrar(1,"Linux",255,0,0);
$grafico->cadastrar(1,"Windows",0,255,0);
$grafico->cadastrar(1,"Mac OS",0,0,0);
$grafico->gerarGrafico(255,255,200);
?>
