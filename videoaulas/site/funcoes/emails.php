<?php
	include "../conexao.php";
	
	$lista = fopen("../lista.txt", "r");
	
	while(!feof($lista)){
	
	$ler = fgets($lista);
	
	$sql = mysql_query("INSERT INTO emails (email) value ('$ler')");
	
	}
	
	echo "Operação realizada com sucesso!";
	
?>

<a href="../index.php">Voltar</a>