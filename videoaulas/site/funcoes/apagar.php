<?php
	include "../conexao.php";
	
	$sql = mysql_query("SELECT * FROM noticias WHERE id = '".$_GET['id']."'");
	while($ln = mysql_fetch_array($sql)){
	$foto = $ln['foto'];
	$sql = mysql_query("DELETE FROM comentarios WHERE idnoticia = '".$_GET['id']."'");	
	}
	
	unlink("../images/".$foto);
	
	$sql = mysql_query("DELETE FROM noticias WHERE id = '".$_GET['id']."'");
	
	header("Location: ../index.php");
	
?>