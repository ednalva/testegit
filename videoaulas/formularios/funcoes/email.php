<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
	
	$formato = "\nContent-type: text/html; charset=utf-8";

	mail("fabiogodoy89@terra.com.br", $assunto, $mensagem, "from:$email'".$_POST['email']."'".$formato);
	
	echo "<meta http-equiv='refresh' content='0; URL= ../index.php'>
		  <script type=\"text/javascript\">
		  alert(\"Mensagem enviada com sucesso!\");
		  </script>
		 ";
	
?>