<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
	$formato = "\nContent-type: text/html; charset=utf-8";
	$email = "fabiogodoy@gmail.com";
	//$assunto = "Solicitação de suporte";
	$msg = "O Google AdSense permite que os editores de websites gerem receita através da exibição de anúncios contextuais em seus sites. O AdSense também está disponível em outros tipos de mídia on-line, como domínio e feeds.";
	
	mail("fabiogodoy89@terra.com.br", "Suporte duvidas", $msg, "from:$email".$formato );
?>

</body>
</html>