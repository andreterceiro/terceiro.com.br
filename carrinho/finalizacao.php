<?php
    require_once('Include/conexao.php');
    $conexao = Conexao::conectar();
    $statement = $conexao->prepare("insert into pedidos(cliente, endereco, cidade, estado) values(:nome, :endereco, :cidade, :estado)");
    $statement->bindParam(':nome', $_GET['nome']);
    $statement->bindParam(':endereco', $_GET['endereco']);
    $statement->bindParam(':cidade', $_GET['cidade']);
    $statement->bindParam(':estado', $_GET['estado']);
    $statement->execute();

    unset($_GET);	
    session_start(); 	
    session_destroy();    

    require_once('View/finalizacao.php');