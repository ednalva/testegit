<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
	$valor1 = 10;
	$valor2 = 15;
	$valor3 = 15;
	
	if($valor1 == 15){
	echo "Verdadeiro";
	}elseif($valor3 == 10){
	echo "Variavel valor 3 é igual a 15";
	}elseif($valor2 == 10){
	echo "Variavel valor 2 é igual a 15";
	}else{
	echo "Nenhum dos resultados foram verdadeiros.";	
	}
	
?>

</body>
</html>