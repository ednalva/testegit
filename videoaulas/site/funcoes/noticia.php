<?php
	include "../conexao.php";
	include "caracteres.php";
	
	$titulo = $_POST['titulo'];
	$foto = str_replace($troca, $recebe, $_FILES['foto']['name']);
	$noticia = $_POST['noticia'];
	$data = date('d/m/Y - H:i');
	
	if(!eregi("^image\/(jpeg|jpg|png|gif)$", $_FILES['foto']['type'])){ echo "Formato invalido"; 
	return die;}
	
	if(file_exists("../images/$foto")){
	$i = 1;
	
	while(file_exists("../images/[$i]$foto")){
		
		$i++;
	
		}
	
		$foto = "[".$i."]".$foto;
		
	}
	
	move_uploaded_file($_FILES['foto']['tmp_name'], "../images/".$foto);

	$sql = mysql_query("INSERT INTO noticias (titulo, foto, noticia, data) values ('$titulo', 
	'$foto', '$noticia', '$data')");
	
	header("Location: ../index.php?p=noticias");
	
?>