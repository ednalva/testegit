<?php
	include "../aula22.php";
	$sql = mysql_query("DELETE FROM produtos WHERE id = '".$_GET['id']."'");
	header("Location: ../aula31.php")
?>