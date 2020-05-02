<?php
error_reporting(E_ALL);
session_start();
$id = (int)$_POST['id'];
$quantidade = (int)$_POST['quantidade'];

if (! is_numeric($id) || ! is_numeric($quantidade)) {
    require_once('view/erro-quantidade.php');
}

$_SESSION['carrinho'][$id] = $quantidade;
require_once("Include/conexao.php");
$conexao = Conexao::conectar();
$conexao->query("update produtos set quantidade=" . $quantidade . " where id=$id");

require_once('carrinho.php');