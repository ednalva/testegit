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
	$produto = $ln['produto'];
	$preco = $ln['preco'];	
	
	echo $produto." => ".$preco."<br/>";
	
	}
	
?>

</body>
</html>