<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
	if(!$_GET['op']=="excluir"){
	
	if(file_exists('imagens/php.png')){
	
	echo "Este arquivo existe, deseja excluir? ". "<a href='aula45.php?op=excluir'>Remover</a>";	
	
	}else{
		
	echo "Arquivo não existe";
	
	}
	
	}
	
	if($_GET['op']=="excluir"){
	
	unlink('imagens/php.png');
		
	}
	
?>

</body>
</html>