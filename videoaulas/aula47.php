<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
	$arq = fopen("teste.txt", 'r');
	$ler = fgets($arq);
	fclose($arq);
	
	$txt = fopen("teste.txt", 'w');
	fwrite($txt, $ler + 1);
	
	echo "A soma do valor no txt + 1 é igual: ".$ler;
?>

</body>
</html>