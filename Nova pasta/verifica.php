<?php        
        //if (empty($_SESSION))
        //if (!isset($_SESSION))
		@session_start();
	session_register();
	$login=$_SESSION["login"];
	$senha=$_SESSION["senha"];
	$nome=$_SESSION["nome"];
	echo "<br> usuario logado: ".$_SESSION["nome"];
	$row_usuario=null;
	$result_usuario=null;
	$sql_usuario    = "SELECT * FROM usuarios where (login='".$login."') and( senha='".$senha."')";
	$result_usuario=mysql_query($sql_usuario, $link);	
		$row_usuario = mysql_fetch_assoc($result_usuario);		
		if (
			($login==$row_usuario["login"])
			&&($senha==$row_usuario["senha"])
			&&($senha!="")
			&&($login!="")		
			
		){
			$_SESSION["id"]		= $row_usuario["id"];
			$_SESSION["nome"]	= $row_usuario["nome"];
			$_SESSION["login"]	= $row_usuario["login"];
			$_SESSION["senha"]	= $row_usuario["senha"];		
		}
		else{
			$_SESSION["id"]		= null;
			$_SESSION["nome"]	= null;
			$_SESSION["login"]	= null;
			$_SESSION["senha"]	= null;
			?>								
				<script type="text/javascript">
					self.location.href="./logout.php";
				</script>
			<?php
		}
		
		if ($result_usuario!=null){
			mysql_free_result($result_usuario);	
		}	
?>