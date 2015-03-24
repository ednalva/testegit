<?php
	session_start();
	
	if(!isset($_SESSION['acesso'])){
	header("Location: aula40.php");
	exit;	
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
	include "aula22.php";
	$sql = mysql_query("SELECT * FROM produtos");
	while($ln = mysql_fetch_array($sql)){
?>

<form method="post" action="funcoes/aula30.php">
<input type="hidden" name="id" value="<?=$ln['id']?>" />
Produto: <input type="text" name="produto" value="<?=$ln['produto']?>" />
Preço: <input type="text" name="preco" value="<?=$ln['preco']?>" />
<input type="submit" value="Alterar" />
</form>

<?php
} //Fecha Loop
?>

</body>
</html>