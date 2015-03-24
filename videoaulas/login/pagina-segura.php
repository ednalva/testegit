<?php
	session_start();
	/*if(!isset($_SESSION['login']) and !isset($_SESSION['senha'])){
	header("Location: index.php");
	exit;
	}*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1>Você está acessando o conteúdo do site</h1>
<!--
<?php if(!isset($_SESSION['login']) and !isset($_SESSION['senha'])){ ?>
É preciso estar logado para fazer o Download <br /> <br />
<?php
}else{
?>
<a href="webdesign.rar">Fazer Download do Arquivo</a> <br /> <br />
<?php
}
?>
-->

<?php if(!isset($_COOKIE['login']) and !isset($_COOKIE['senha'])){ ?>
É preciso estar logado para fazer o Download <br /> <br />
<?php
}else{
?>
<a href="webdesign.rar">Fazer Download do Arquivo</a> <br /> <br />
<?php
} 
?>

<?=$_COOKIE['login']?> <br />

<a href="pagina-segura.php?op=logout">Sair do sistema</a>

<?php
	/*if($_GET['op']=="logout"){
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header("Location: index.php");
	}*/
	
	if($_GET['op']=="logout"){
	setcookie("login", "");
	setcookie("senha", "");	
	header("Location: index.php");
	}
	
?>

</body>
</html>