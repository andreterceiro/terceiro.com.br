<?php
chdir("/home/storage/6/04/f1/terceiro2/public_html/agenciainfluencia/");
$diretorioRaiz = getcwd();

require_once $diretorioRaiz . "/Conexao.php";
require_once $diretorioRaiz . "/Registry.php";
require_once $diretorioRaiz . "/../view/BaseView.php";
require_once $diretorioRaiz . "/../model/ClienteModel.php";

$conexao = new Conexao;
$baseView = new BaseView;
