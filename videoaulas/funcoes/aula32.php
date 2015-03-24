<?php
	include "../aula22.php";
	$sql = mysql_query("TRUNCATE TABLE produtos");
	header("Location: ../aula32.php");
?>