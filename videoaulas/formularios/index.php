<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1>Cadastro de Produtos</h1> <a href="contato.php">Fale Conosco</a>
<hr />

<?php
	if(!isset($_GET['funcao'])=="editar"){
	$valor = "693";
	echo $preco = number_format($valor, 2, ',', '.');
?>

<form method="post" action="funcoes/funcoes.php?funcao=cadastrar">
<table width="200" border="0">
  <tr>
    <td align="right">Produto:</td>
    <td><input type="text" name="produto" /></td>
    </tr>
  <tr>
    <td align="right">Preço</td>
    <td><input type="text" name="preco" size="5" /></td>
    </tr>
  <tr>
    <td align="right">Descrição</td>
    <td><textarea name="descricao" rows="3" cols="40"></textarea></td>
    </tr>
  <tr>
    <td align="right">Estoque</td>
    <td>
    <input type="radio" name="estoque" value="sim" /> Sim &nbsp; 
    <input type="radio" name="estoque" value="nao" /> Não</td>
    </tr>
  <tr>
    <td align="right">Cor</td>
    <td>
    <select name="cor">
    	<option value="0" selected="selected">Selecione</option>
    	<option value="preto">Preto</option>
        <option value="azul">Azul</option>
        <option value="vermelho">Vermelho</option>
    </select>
    </td>
    </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td><input type="submit" value="Cadastrar" /></td>
    </tr>
</table>

</form>

<?php
	}else{

	include "conexao.php";
	$sql = mysql_query("SELECT * FROM produtos WHERE id = '".$_GET['id']."'");
	while($ln = mysql_fetch_array($sql)){
?>
<form method="post" action="funcoes/funcoes.php?funcao=editar&id=<?=$ln['id']?>">
<table width="200" border="0">
  <tr>
    <td align="right">Produto:</td>
    <td><input type="text" name="produto" value="<?=$ln['produto']?>" /></td>
    </tr>
  <tr>
    <td align="right">Preço</td>
    <td><input type="text" name="preco" size="5" value="<?=$ln['preco']?>"/></td>
    </tr>
  <tr>
    <td align="right">Descrição</td>
    <td><textarea name="descricao" rows="3" cols="40"><?=$ln['descricao']?></textarea></td>
    </tr>
  <tr>
    <td align="right">Estoque</td>
    <td>
    <input type="radio" name="estoque" value="sim" /> Sim &nbsp; 
    <input type="radio" name="estoque" value="nao" /> Não</td>
    </tr>
  <tr>
    <td align="right">Cor</td>
    <td>
    <select name="cor">
    	<option value="<?=$ln['cor']?>" selected="selected"><?=$ln['cor']?></option>
    	<option value="preto">Preto</option>
        <option value="azul">Azul</option>
        <option value="vermelho">Vermelho</option>
    </select>
    </td>
    </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td><input type="submit" value="Alterar" /></td>
    </tr>
</table>

</form>

<?php
	}// Fehca Loop
	} // Fecha else
?>

<br />

<h3>Produtos cadastrados</h3>
<hr/>
<a href="funcoes/funcoes.php?funcao=deletar">Deletar tudo</a>
<table width="600" border="0">
    <tr>
      <td align="center" bgcolor="#CCCCCC"><strong>Excluir</strong></td>
      <td align="center" bgcolor="#CCCCCC"><strong>Editar</strong></td>
    <td align="center" bgcolor="#CCCCCC"><strong>Produto</strong></td>
    <td align="center" bgcolor="#CCCCCC"><strong>Preço</strong></td>
    <td align="center" bgcolor="#CCCCCC"><strong>Descrição</strong></td>
    <td align="center" bgcolor="#CCCCCC"><strong>Estoque</strong></td>
    <td align="center" bgcolor="#CCCCCC"><strong>Cor</strong></td>
  </tr>
  <?php
	include "conexao.php";
	$sql = mysql_query("SELECT * FROM produtos ORDER BY rand()");
	while($ln = mysql_fetch_array($sql)){
?>
  <tr>
    <td align="center" bgcolor="#E9E9E9"><a href="funcoes/funcoes.php?funcao=excluir&id=<?=$ln['id']?>">Excluir</a></td>
    <td align="center" bgcolor="#E9E9E9"><a href="index.php?funcao=editar&id=<?=$ln['id']?>">Editar</a></td>
    <td align="center" bgcolor="#E9E9E9"><?=$ln['produto']?></td>
    <td align="center" bgcolor="#E9E9E9"><?=$ln['preco']?></td>
    <td align="center" bgcolor="#E9E9E9"><?=$ln['descricao']?></td>
    <td align="center" bgcolor="#E9E9E9"><?=$ln['estoque']?></td>
    <td align="center" bgcolor="#E9E9E9"><?=$ln['cor']?></td>
  </tr>
<?php
	} // Fecha Loop Produtos
?>
</table>

</body>
</html>