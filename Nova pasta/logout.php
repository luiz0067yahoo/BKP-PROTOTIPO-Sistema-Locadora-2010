<?php
	@session_start();
	$_SESSION["id"]		= null;
	$_SESSION["nome"]	= null;
	$_SESSION["login"]	= null;
	$_SESSION["senha"]	= null;	

	//Elimina os dados da sess�o
	session_unregister($_SESSION['id']);
	session_unregister($_SESSION['nome']);
	session_unregister($_SESSION['login']);
	session_unregister($_SESSION['senha']);
	//Encerra a sess�o
	@session_destroy();
?>											
<script type="text/javascript">
	self.location.href="./index.php";
</script>
