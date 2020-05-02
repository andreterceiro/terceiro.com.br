<?php
require_once('Include/conexao.php');
$conexao = Conexao::conectar();
$registros = $conexao->query('select * from produtos');
require_once 'View/registros.php';