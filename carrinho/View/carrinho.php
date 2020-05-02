<table align="center">
    <thead>
        <th>Produto</th>
        <th>Quantidade</th>
        <th>Alterar</th>
    </thead>
    <tbody>
        <?php
	     foreach($registros as $registro) { 
    	  	  $temRegistros = true;
	?>
	       	<tr>
        	    <form method="post" action="alterar-quantidade.php">
        	        <td>
        	            <?php echo $registro['nome']; ?>
        	            <input type="hidden" name="id" value="<?php echo $registro['id']; ?>">
        	        </td>
        	        <td>
        	            <select name="quantidade">
        	                <?php
				    $quantidade = $_SESSION['carrinho'][$registro['id']];
        	                    $c = 1;
        	                    while ($c < 11) {
        	                    	echo "<option value='" . $c . "'";
        	                        if ($quantidade == $c) {
        	                        	echo " selected "; 
        	                        }
        	                        echo ">" . $c . "</option>";
					$c++;
        	                    }
        	                ?>
        	            </select>
        	        </td>
        	        <td>
        	            <input type=submit name=alterar value="Alterar" />
        	        </td>
        	    </form>
                        <td>
  		            <form method=post action="remover.php">
				<br/>
 	         	        <input type="hidden" name="id" value="<?php echo $registro['id']; ?>" />

	        	        <input type="submit" name="excluir" value="Excluir" />
			    </form>
                        </td>    
        	</tr>
        <?php } ?>
    </tbody>
</table>

<form method="post" action="checkout.php">
    <center>    
        <input type="submit" value="Finalizar pedido" />
    </center>
</form>
<hr />
    <center>
	<a href="registros.php">Lista de produtos</a>
    </center>	
<hr />


<?php
if (! $temRegistros) {
     require_once "sem_registros_carrinho.php";
}
