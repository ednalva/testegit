<div id="conteudo">

<div id="cont">

<h2>Página de noticias</h2>

<hr>

<?php
	if(!isset($_GET['op'])=="detalhes"){
	$sql = mysql_query("SELECT * FROM noticias ORDER BY id DESC");
	while($ln = mysql_fetch_array($sql)){
?>

<a href="index.php?p=noticias&op=detalhes&id=<?=$ln['id']?>"><?=$ln['titulo']?></a> <br />

<?=substr($ln['noticia'],0,190);?>... <a href="index.php?p=noticias&op=detalhes&id=<?=$ln['id']?>">[ Leia + ]</a> <?=$ln['data']?>

<br /> <br />

<a href="funcoes/apagar.php?id=<?=$ln['id']?>">Apagar noticia</a>

<hr />

<?php
	}// Fecha Loop noticias
	}else{ 
	
	$sql = mysql_query("SELECT * FROM noticias WHERE id = '".$_GET['id']."'");
	while($nl = mysql_fetch_array($sql)){
	$titulo = $nl['titulo'];
	$foto = $nl['foto'];
	$noticia = $nl['noticia'];
	$visitas = $nl['visitas'];
	$data = $nl['data'];
	}
	
	$cookie = $_COOKIE['contador'];
	
	if($cookie != $titulo){
	setcookie("contador", $titulo);
	$total = $visitas + 1;
	$sql = mysql_query("UPDATE noticias SET visitas = '$total' WHERE id = '".$_GET['id']."' ");
	}
?>

<h1><?=$titulo?></h1>
<img src="images/<?=$foto?>" />
<?=$noticia?>  <br /><br />

Publicado dia <?=$data?> - <?=$visitas?> Visitas

<br /><br />

<h3>Deixe seu comentário</h3>
<hr />
<form method="post" action="funcoes/comentarios.php">
Nome: <br />
<input type="text" name="nome" /> <br />
E-mail: <br />
<input type="text" name="email" /> * Não será exibido <br />
Mensagem: <br />
<textarea name="mensagem" cols="45" rows="5"></textarea> <br />

<input type="hidden" name="idnoticia" value="<?=$_GET['id']?>" />

<input type="submit" value="Enviar" />

</form>
<br /><br />

<h3>Comentários</h3>
<hr />

<?php
	$sql = mysql_query("SELECT * FROM comentarios WHERE idnoticia = '".$_GET['id']."'
	and status = 'liberado' ORDER BY id DESC");
	while($ln = mysql_fetch_array($sql)){
?>

<?=$ln['nome'];?> disse: <br />

<?=$ln['mensagem'];?> <br />

Comentou dia <?=$ln['data']?>

<hr />

<?php
}
?>
<br /><br />

<a href="javascript:history.back();">Voltar</a>

<?php
} // Fecha validação detalhes
?>

</div><!-- fim div cont -->

</div> <!-- fim div conteudo -->