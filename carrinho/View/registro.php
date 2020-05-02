<?php
foreach ($conexao->query($sql) as $registro) {
	$temRegistros = true;
?>
	<form method="post" action="adicionar.php">
	    <?php echo $registro['nome']; ?>
	    <hr />
	    
	    <img src="<?php echo $registro['imagem']; ?>" width=100 />
	    <hr />
	
	    <?php echo $registro['descricao']; ?>
	    <hr />
	
	    <input type="hidden" name="id" value="<?php echo $registro['id']; ?>" />
	    <input type="hidden" name="quantidade" value="1" />

	    <input type="submit" value="Adicionar" />
	</form>
<?php
}

if (! $temRegistros) {
    require_once "registro_nao_encontrado.php";
    exit;
}
?>






