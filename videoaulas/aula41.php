<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
	// $recebe = array("á", "ç", "é", "ú", "í", "Ç", "ê");
	// $troca  = array("a", "c", "e", "u", "i", "c", "e");
	
	// $frase = "Você está estudando o Curso de PHP, Ç ú ç í é";
	
	// echo $resultado = str_replace($recebe, $troca, $frase);
	
	$recebe = array("HTML", "Godoy");
	$troca  = array("PHP", "Fabio");
	
	$frase = "Estou estudando o curso de HTML, com o Professor Godoy ";
	
	echo $resultado = str_replace($recebe, $troca, $frase);
	
?>

</body>
</html>