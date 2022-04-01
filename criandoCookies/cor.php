<?php
	header("Location: index.php");

	$cor = $_POST['corSelect'];
	
	setcookie('bolacha',$cor, time()+60*60);

?>