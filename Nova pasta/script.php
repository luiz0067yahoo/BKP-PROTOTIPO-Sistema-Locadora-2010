<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$_UP['pasta'] = './uploads/';
	$_UP['tamanho'] = 1024 * 1024 * 2;// 2Mb
	$_UP['extensoes'] = array('jpg','png','jpeg','gif');
	$_UP['renomeia'] = false;

	$_UP['erros'] [0]= 'Não houve erro';
	$_UP['erros'] [1]= 'O arquivo do upload é maior que o limite do php';
	$_UP['erros'] [2]= 'O arquivo ultrapassa o limite do tamanho especificado no html';
	$_UP['erros'] [3]= 'O upload do arquivo foi feito parcialmente';
	$_UP['erros'] [4]= 'Não foi feito o upload do arquivo';
	if ($_FILES['arquivos'] ['erros']!=0){
		die("Não foi possivel fazer upload, erro:<br />" - $_UP['erros'][$_FILES['arquivos']['erros']]);
		exit;
	}
	$extensao = strtolower(end(explode('.',$_FILES['arquivos']['name'])));
	/*if (array_search($extensao,$_UP['extensoes']) === false){
		echo " O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
	}
	else */
	{ 
		if ($_UP['renomeia'] == true) {
			$nome_final = time ().'.jpg';
		} 
		else {
			$nome_final = $_FILES['arquivos']['name'];
			if (move_uploaded_file($_FILES['arquivos']['tmp_name'],$_UP['pasta'] . $name_final)){
				echo " Upload efetuado com sucesso!";
				echo '<br /> <href=" '.$_UP['pasta'] . $name_final.'">Clique aqui para acessar o arquivo</a>';
			} else {
				echo "Não foi possivel enviar o arquivo, tente novamente";}
		}			
		$nome = $nome_final;
		include ('conecta.php');
		$Query = "INSERT INTO $tabela VALUES ('null','$nome')";
		if (mysql_db_query($base_dados,$query,$link)){
			print("<p class=titulo_big> A inserção foi executada com sucesso!<p />");
		} else{
			print("<p class=titulo_big> A consulta não foi executada!<p />");
		}
		mysql_close($link);
	}
?>
</body>
</html>
