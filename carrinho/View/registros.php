<?php
while($row = $registros->fetch(PDO::FETCH_OBJ)){
  echo "<a href='registro.php?id=" . $row->id . "'/>";
  echo "<img src='" . $row->imagem . "' width='100' /><br />"; 
  echo $row->descricao . "<br /><br /><br />";
}
