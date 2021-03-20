<?php
require_once('lib/loader.php');
$cliente = new ClienteModel;

if ($_POST['cmdEnviar'] == "Cadastrar") {
    $cliente->setNome($_POST['nome']);
    $cliente->setNis($_POST['nis']);
    $cliente->setTelefone($_POST['telefone']);
    $cliente->setEmail($_POST['email']);
    $cliente->gravar();
    $baseView->render("cliente/listagem");
} elseif (! is_null ($_GET['id']))  {
    $baseView->set(
        "cliente",
	$cliente->consultar($_GET['id'])
    );
    $baseView->render("cliente/detalhes");
} else {
    $baseView->set(
        "clientes",
	$cliente->consultarTodos()
    );
    
    $baseView->render("cliente/listagem");
}
