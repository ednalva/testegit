<div id="conteudo">

<div id="cont">

<h2>Página de noticias</h2>

<hr>

<?php
	if(!isset($_GET['op'])=="detalhes"){
	$busca = $_POST['busca'];
	$sql = mysql_query("SELECT * FROM noticias WHERE noticia like'%$busca%'");
	while($ln = mysql_fetch_array($sql)){
?>

<a href="index.php?p=noticias&op=detalhes&id=<?=$ln['id']?>"><?=$ln['titulo']?></a> <br />

<?=substr($ln['noticia'],0,190);?>... <a href="index.php?p=noticias&op=detalhes&id=<?=$ln['id']?>">[ Leia + ]</a> <?=$ln['data']?>

<hr />

<?php
	}// Fecha Loop noticias
	}else{ 
	
	$sql = mysql_query("SELECT * FROM noticias WHERE id = '".$_GET['id']."'");
	while($nl = mysql_fetch_array($sql)){
	$titulo = $nl['titulo'];
	$foto = $nl['foto'];
	$noticia = $nl['noticia'];
	$data = $nl['data'];
	}
?>

<h1><?=$titulo?></h1>
<img src="images/<?=$foto?>" />
<?=$noticia?>  <br /><br />

Publicado dia <?=$data?>

<br /><br />

<a href="javascript:history.back();">Voltar</a>

<?php
} // Fecha validação detalhes
?>

</div><!-- fim div cont -->

</div> <!-- fim div conteudo -->