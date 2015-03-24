<?php
	include "../aula22.php";
	
	$sql = mysql_query("INSERT INTO produtos (produto, preco) values ('".$_POST['produto']."', '".$_POST['preco']."')");
	header("Location: ../aula29.php");
?>