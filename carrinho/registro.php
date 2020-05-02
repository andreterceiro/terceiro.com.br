<?php
require_once "Include/conexao.php";

function mostrarRegistroNaoEncontrado()
{
	require_once "View/registro_nao_encontrado.php";
	exit;
}

$id = (int) $_GET['id'];

if ($id == NULL) {
	mostrarRegistroNaoEncontrado();
}

$conexao = Conexao::conectar();
$sql = 'select * from produtos where id = "' . $id . '"';

require_once "View/registro.php";
exit;
