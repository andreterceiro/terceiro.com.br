<html>
    <head>
        <script  src="https://code.jquery.com/jquery-1.12.4.min.js" crossorigin="anonymous"></script>
        <script>
	    $(function(){	
                $("#enviar").click(function() {
                    if ($("#nome").val() == "" || $("#endereco").val() == "" || $("#cidade").val() == "" || $("#estado").val() == "")  {
                       alert("por favor preencha tods campos"); 
      	            } else {	
                       $.post(
                           "finalizacao.php",
			   "",
  			   window.location.href="finalizacao.php?nome=" + $("#nome").val() + "&endereco=" + $("#endereco").val() + "&cidade=" + $("#cidade").val() + "&estado=" + $('#estado').val() 
			);
                    }

                })
            });;
         </script>
    </head>
    <body>
        <?php
	    if (gettype($registros) != 'object') {
		    echo "<center>Não se pode fazer o checkout sem produto 1</center>";
            } else {
	?>
		<table align="center" border="1">
	            <tr>
	                <th>Produto</th>
	                <th>Quantidade solicitada</th>
	                <th>Total</th>
	           </tr>
	           
	           <?php
	               foreach ($registros as $registro) { 
	                   $temRegistros = true;
	           ?>
	                   <tr>
	                       <td align="center"><?php echo $registro['nome']; ?></td>
	                       <td align="center"><?php echo $_SESSION['carrinho'][$registro['id']]; ?> </td>
			       <?php 
                                   if ($registro['id'] == 1) {
                               ?>
   	                               <td align="center"><?php echo $_SESSION['carrinho'][$registro['id']] + floor($_SESSION['carrinho'][$registro['id']] / 2); ?> </td>
                                <?php      
                                   } else {
                                ?>
                                       <td align="center"><?php echo $_SESSION['carrinho'][$registro['id']]; ?> </td>
                                <?php
                                   }
    			        ?> 
 	                  </tr>
	           <?php	
	               }	
	           ?>
	
	        </table>
	
	        <br />
	        <br />
	        <br />
	
	        <table align="Center">
	            <tr>
	                <th>Nome</th>
	                <td><input type="text" id="nome" name="nome" />
	            </tr>
	            <tr>
	                <th>Enedereço</th>
	                <td><input type="text" id="endereco" name="endereco" />
	            </tr>
	            <tr>
	                <th>Cidade</th>
	                <td><input type="text" id="cidade" name="cidade" />
	            </tr>
	            <tr>
	                <th>Estado</th>
	                <td><input type="text" id="estado" name="estado" maxlength="2" />
	            </tr>
	        </table>
	        <center>
	            <input type="button" name="enviar" id="enviar" value="Enviar" /> 	
	        </center>

<?php
	}	
	if (!$temRegistros && is_array($registros)) {
  	     echo "<center>Não se pode fazer o checkout sem produtos</center>";
        }
