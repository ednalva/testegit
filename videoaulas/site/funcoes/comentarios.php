<?php
	include "../conexao.php";
	
	$sql = mysql_query("INSERT INTO comentarios (idnoticia, nome, email, mensagem, data, status) values 
	('".$_POST['idnoticia']."', '".$_POST['nome']."', '".$_POST['email']."', '".$_POST['mensagem']."',
	'".date('d/m/Y - H:i')."', 'bloqueado') ");
	
	header("Location: ../index.php?p=noticias&op=detalhes&id=".$_POST['idnoticia']."");
	
?>