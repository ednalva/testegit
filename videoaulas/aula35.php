<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form name="form" method="get" action="aula35.php?valor=<?=$_POST['valor']?>&enviar=ok">
<input type="text" name="valor" /> <input type="submit" value="Enviar" />
</form>

<?php
	
	if($_GET['enviar']=="ok"){
	
	if($_POST['valor'] == 10){
	echo "Parabéns você tirou a nota máxima";
	}else{
	echo "Você não tirou a nota máxima";
	}
	
	}
?>

</body>
</html>