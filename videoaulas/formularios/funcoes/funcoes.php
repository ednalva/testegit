<?php
 include "../conexao.php";
 
 if($_GET['funcao']=="cadastrar"){
 
 $sql = mysql_query("SELECT * FROM produtos WHERE produto = '".$_POST['produto']."'");
 if(mysql_num_rows($sql)>=1){
	 
 echo "<meta http-equiv='refresh' content='0; URL= ../index.php'>
 	
	<script type=\"text/javascript\">
	alert(\"Este registro já existe\");
	</script>
 	
 ";
 
 return die;
 
 }else{
 
 $sql = mysql_query("INSERT INTO produtos (produto, preco, descricao, estoque, cor) values 
 ('".$_POST['produto']."', '".$_POST['preco']."', '".$_POST['descricao']."', '".$_POST['estoque']."', '".$_POST['cor']."')");
 
 $msg = "Produto: ".$_POST['produto']."<br>";
 $msg.= "Preço: ".$_POST['preco']."<br>";
 $msg.= "Descrição: ".$_POST['descricao']."<br>";
 $msg.= "Estoque: ".$_POST['estoque']."<br>";
 $msg.= "Cor: ".$_POST['cor']."<br>";
 
 $formato = "\nContent-type: text/html; charset=utf-8";
 
 mail("fabiogodoy89@terra.com.br", "Novo produto cadastrado: ".$_POST['produto'], $msg, "from:estoque@nomedosite.com.br".$formato);
 
 echo "<meta http-equiv='refresh' content='0; URL= ../index.php'>
 	
	<script type=\"text/javascript\">
	alert(\"Cadastrado com Sucesso! E o e-mail enviado\");
	</script>
 	
 ";
 
 } // Fecha Validação
 
 } // Fecha Função Cadastrar
 
 
 if($_GET['funcao']=="editar"){

$sql = mysql_query("UPDATE produtos SET produto = '".$_POST['produto']."', preco = '".$_POST['preco']."', 
descricao = '".$_POST['descricao']."', estoque = '".$_POST['estoque']."', cor = '".$_POST['cor']."'
WHERE id = '".$_GET['id']."'
");	

 echo "<meta http-equiv='refresh' content='0; URL= ../index.php'>
 	
	<script type=\"text/javascript\">
	alert(\"Alterado com Sucesso!\");
	</script>
 	
 "; 
 
 }
 
 if($_GET['funcao']=="excluir"){
	
 $sql = mysql_query("DELETE FROM produtos WHERE id = '".$_GET['id']."'"); 
 
  echo "<meta http-equiv='refresh' content='0; URL= ../index.php'>
 	
	<script type=\"text/javascript\">
	alert(\"Excluído com Sucesso!\");
	</script>
 	
 ";
	 
 }
 
 if($_GET['funcao']=="deletar"){

	$sql = mysql_query("TRUNCATE TABLE produtos");

	 echo "<meta http-equiv='refresh' content='0; URL= ../index.php'>
 	
	<script type=\"text/javascript\">
	alert(\"Base de dados limpa!\");
	</script>
 	
 ";

	
 }
 
 
 
?>