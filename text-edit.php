<?php
if ($_POST['content'] != "") {
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="' . $_POST['nome_do_arquivo'] . '"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	//header('Content-Length: ' . filesize($filepath));
	flush(); // Flush system output buffer
	echo $_POST['content'];
	exit;
}
?>
<form method="post">
	<textarea rows="30" cols="100" name="content">
	</textarea>
	<br />	<br />
	Noome do arquivo: <input type="text" name="nome_do_arquivo" /> (please include the extension)
	<br />	<br />
	<input type="submit" name="Send" value="Send">
</form>
