<?php
    session_start();
    $_SESSION['carrinho'][$_POST['id']] = $_POST['quantidade']; 
    require_once "carrinho.php";