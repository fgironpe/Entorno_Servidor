<?php
session_start();

if(isset($_SESSION['usuarios'])) {

	if($_GET['rem'] != "") {

		echo <<<FORM

		<form action="escribirPost.php" method="post">
		
			De:  <input type="text" name="remite" value="{$_SESSION['_activo']}" readOnly>
			Para:  <input type="text" name="recibe" value="{$_GET['rem']}" readOnly>
			<p>Escribe el contenido del mensaje:</p>
			<textarea name="mensaje" cols="28" rows="10"></textarea>
			<br/><br/>
			<input type="submit" value="enviar"/>
		
		</form>
		
FORM;

	} 
	else {
		header("location: listaUsuarios.php?status=remError");
	}



}