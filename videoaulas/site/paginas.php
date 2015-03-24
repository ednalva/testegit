<?php
	switch($_GET['p']){
	default:
	include "home.php";
	break;
	
	case 'home':
	include "home.php";
	break;
	
	case 'contato':
	include "contato.php";
	break;
	
	case 'noticias':
	include "noticias.php";
	break;
	
	case 'busca':
	include "busca.php";
	break;
	
	}
?>