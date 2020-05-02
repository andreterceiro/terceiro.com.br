<?php
session_start();
if (is_numeric($_POST['id'])) {
	unset($_SESSION['carrinho'][$_POST['id']]);
}

require_once('carrinho.php');
