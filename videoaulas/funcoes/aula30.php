<?php
	include "../aula22.php";
	$sql = mysql_query("UPDATE produtos SET	produto = '".$_POST['produto']."', preco = '".$_POST['preco']."'
	where id = '".$_POST['id']."'");
	header("Location: ../aula30.php");
?>