<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	//Ex: 1
	
	//$v[0] = "Fabio";
	//$v[1] = "Bianca";
	//$v[3] = "Luis";
?>

<!-- Estava eu o <?=$v[0]?> e a <?=$v[1]?> na festa do <?=$v[3]?> -->

<?php
	//Ex: 2
	//$v = array("Fábio", "Bianca", "Luis");
?>
<!-- Estava eu o <?=$v[0]?> e a <?=$v[1]?> na festa do <?=$v[2]?>!!! -->


<?php 
	//Ex: 3
	
	$v = array("Fabio"=>"Fabio Godoy", "Bianca"=>"Bianca Paola", "Luis"=> "Luis Carlos");
?>
Estava eu o <?=$v['Fabio']?> e a <?=$v['Bianca']?> na festa do <?=$v['Luis']?>...
</body>
</html>