<?php
	session_start();
	$con = mysql_connect("localhost", "root", "");
	$db = mysql_select_db("phpcurso", $con);
	
	include "../docs/anti-injection.php";
	
	$email = anti_sql($_POST['email']);
	$senha = anti_sql($_POST['senha']);
	
	$nome = anti_sql($_GET['nome']);
	
	$sql = mysql_query("SELECT * FROM usuarios WHERE email = '$email' and 
	senha = '$senha'");
	if(mysql_num_rows($sql)==true){
	while($ln = mysql_fetch_array($sql)){
	
	//$_SESSION['login'] = $ln['email'];
	//$_SESSION['senha'] = $ln['senha'];
	
	setcookie("login", $ln['email']);
	setcookie("senha", $ln['senha']);
	
	header("Location: pagina-segura.php");

	}
	}else{
	echo "<meta http-equiv='refresh' content='0; URL=index.php'>
		<script type=\"text/javascript\">
		alert(\"Usuario ou senha invalidos\");
		</script>
	";
	}
	
?>