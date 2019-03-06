<?php
session_start();

if(isset($_SESSION['_recordar']) && $_SESSION['_recordar'] != '') {

echo <<<FORM

	<h1>LOGIN</h1><br/>
	<form action="loginPost.php" method="post">
		<label for="user">Usuario</label>
		<input type="text" name="user" value="{$_SESSION['_recordar']}"/><br/>
		<label for="pass">Contraseña</label>
		<input type="password" name="pass"><br/>
		<label for="recordar">Recordar</label>
		<input type="checkbox" name="recordar"><br/>
		<input type="submit" value="Enviar"><br/><br/>
		<a href="registrar.php">Registrar nuevo usuario</a>
	</form>

FORM;

} else {

	echo <<<FORM
	<h1>LOGIN</h1><br/>
	<form action="loginPost.php" method="post">
		<label for="user">Usuario</label>
		<input type="text" name="user"/><br/>
		<label for="pass">Contraseña</label>
		<input type="password" name="pass"><br/>
		<label for="recordar">Recordar</label>
		<input type="checkbox" name="recordar"><br/>
		<input type="submit" value="Enviar"><br/><br/>
		<a href="registrar.php">Registrar nuevo usuario</a>
	</form>

FORM;

}

if(isset($_GET['status'])) {
	
	if($_GET['status'] == 'loginVacio') {
		echo "<br/><h1>No puede haber campos vacíos</h1>";
	} 
	if ($_GET['status'] == 'userError') {
		echo "<br/><h1>Usuario incorrecto.</h1>";
	} 
	if ($_GET['status'] == 'passError') {
		echo "<br/><h1>Contraseña incorrecta.</h1>";
	}

}