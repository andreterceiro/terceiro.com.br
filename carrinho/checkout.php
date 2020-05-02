<?php
    require_once "Include/conexao.php";     
    $conexao = Conexao::conectar();

    if(session_id() == '') {
        session_start();    
    }
	
    $ids = array();
    if ($_SESSION['carrinho'] == NULL) {
        $_SESSION['carrinho'] = array();
    }

    foreach ($_SESSION['carrinho'] as $id => $quantidade){
        $ids[] = $id;
    }

    $registros = $conexao->query("select * from produtos where id IN(" . substr(implode(",", $ids), 0, 100000) . ")");
    require_once "View/checkout.php";