<?php	
	include('conecta.php')
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script type="text/javascript" src="">
	</script>
    <style type="text/css">
		@import url("");

	</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Campo</td>
      <td><label>
        <select name="campo1" id="select2">
          <option value="inscricao">Inscrição</option>
          <option value="nome">Nome</option>
          <option value="pai">Pai</option>
          <option value="mae">Mãe</option>
          <option value="depd1">Depd1</option>
          <option value="depd2">Depd2</option>
          <option value="depd3">Depd3</option>
          <option value="identidade">Identidade</option>
          <option value="cpf">CPF</option>
          <option value="datadenascimento">DatadeNascimento</option>
          <option value="endereco">Endereço</option>
          <option value="cep">CEP</option>
          <option value="bairro">Bairro</option>
          <option value="cidade">Cidade</option>
          <option value="estado">Estado</option>
          <option value="telresidencia">TelResidencia</option>
          <option value="telcomercial">TelComercial</option>
          <option value="email">Email</option>
          <option value="client1">Client1</option>
        </select>
      </label></td>
      <td>Condição</td>
      <td><label>
        <select name="condicao1" id="select">
          <option value="=">Igual</option>
          <option value="&lt;&gt;">Diferente</option>
          <option value="&gt;">Maior</option>
          <option value="&lt;">Menor</option>
          <option value="&gt;=">Maior Igua lA</option>
          <option value="&lt;=">Menor Igual A</option>
          <option value="*%">Começa Com</option>
          <option value="%*">Termina Com</option>
          <option value="%*%">Contém</option>
        </select>
      </label></td>
      <td>Valor</td>
      <td><label>
        <input type="text" name="valor1" id="textfield" />
      </label></td>
    </tr>
    <tr>
      <td >Operador</td>
      <td><label>
        <select name="operador1" id="select3">
        </select>
      </label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    	<td>Campo</td>
      <td><label>
        <select name="Campo2" id="select2">
          <option value="inscricao">Inscrição</option>
          <option value="nome">Nome</option>
          <option value="pai">Pai</option>
          <option value="mae">Mãe</option>
          <option value="depd1">Depd1</option>
          <option value="depd2">Depd2</option>
          <option value="depd3">Depd3</option>
          <option value="identindade">Indentidade</option>
          <option value="cpf">CPF</option>
          <option value="datadenascimento">DatadeNascimento</option>
          <option value="endereco">Endereço</option>
          <option value="cep">CEP</option>
          <option value="bairro">Bairro</option>
          <option value="cidade">Cidade</option>
          <option value="estado">Estado</option>
          <option value="telresidencial">TelResidencial</option>
          <option value="telcomercial">TelComercial</option>
          <option value="email">Email</option>
          <option value="client1">Client1</option>
        </select>
      </label></td>
      <td>Condição</td>
      <td><label>
        <select name="condicao2" id="select">
          <option value="=">Igual</option>
          <option value="&lt;&gt;">Diferente</option>
          <option value="&gt;">Maior</option>
          <option value="&lt;">Menor</option>
          <option value="&gt;=">Maior Igual A</option>
          <option value="&lt;=">Menor Igual A</option>
          <option value="*%">Começa Com</option>
          <option value="%*">Termina Com</option>
          <option value="%*%">Contém</option>
        </select>
      </label></td>
      <td>Valor</td>
      <td><label>
        <input type="text" name="valor2" id="textfield" />
      </label></td>
    </tr>
      <tr>
      <td colspan="6"><label>
        <input type="button" name="button" id="button" value="mais condições" />
      </label></td>
     
    </tr>
    <tr>
      <td colspan="6"><label>
        <input type="submit" name="button" id="button" value="OK" />
      </label></td>
     
    </tr>
  </table>
</form>
<table border="1">
		<tr>
			<td>Inscrição</td>
			<td>Nome</td>
			<td>Pai</td>    
			<td>Mãe</td>
			<td>Depd1</td>
            <td>Depd2</td>
            <td>Depd3</td>
            <td>Identidade</td>
            <td>CPF</td>
            <td>DatadeNascimento</td>
            <td>Endereço</td>
            <td>CEP</td>
            <td>Bairro</td>
            <td>Cidade</td>
            <td>Estado</td>
            <td>TelResidencial</td>
            <td>TelComercial</td>
            <td>Email</td>
            <td>Client1</td>
		</tr>
		<?php			
			/*if( $_POST['acao']=='buscar')*/
			if ($result!=null){
				mysql_free_result($result);
			}		
			$sql    = 'SELECT * FROM clientes order by nome asc;';
			$result = mysql_query($sql, $link);
			if (!$result) {
				echo "Erro do banco de dados, não foi possível consultar o banco de dados\n";
				echo 'Erro MySQL: ' . mysql_error();
				exit;
			}
			while ($row = mysql_fetch_assoc($result)) {
		?> 
        
        
        <tr>
			<td><?php echo $row['inscricao'];?>&nbsp </td>
			<td><?php echo $row['nome'];?>&nbsp </td>
			<td><?php echo $row['pai'];?>&nbsp </td>    
			<td><?php echo $row['mae'];?>&nbsp </td>
			<td><?php echo $row['depd1'];?>&nbsp </td>
            <td><?php echo $row['depd2'];?>&nbsp </td>
            <td><?php echo $row['depd3'];?>&nbsp </td>
            <td><?php echo $row['identidade'];?>&nbsp </td>
            <td><?php echo $row['cpf'];?>&nbsp </td>
            <td><?php echo $row['datadenascimento'];?>&nbsp </td>
            <td><?php echo $row['endereco'];?>&nbsp </td>
            <td><?php echo $row['cep'];?>&nbsp </td>
            <td><?php echo $row['bairro'];?>&nbsp </td>
            <td><?php echo $row['cidade'];?>&nbsp </td>
            <td><?php echo $row['estado'];?>&nbsp </td>
            <td><?php echo $row['telresidencial'];?>&nbsp </td>
            <td><?php echo $row['telcomercial'];?>&nbsp </td>
            <td><?php echo $row['email'];?>&nbsp </td>
            <td><?php echo $row['client1'];?>&nbsp </td>
		</tr>
				
		<?php 				
			}
			mysql_free_result($result);
		?>
		</table>
	
	</table>
</body>
</html>
<?php	
	mysql_close($link);
?>
