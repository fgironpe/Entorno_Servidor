<h1>Nuevo Usuario</h1>

<form action="registrarPost.php" method="POST">
	<label for="user">Usuario</label>
	<input type="text" id="user" name="user"><br/>

	<label for="pass">Contraseña</label>
	<input type="text" id="pass" name="pass"><br/>

	<input type="submit" value="ENVIAR"><br/><br/>

	<a href="login.php">Volver</a>
</form>

<?php

session_start();

if(isset($_GET['status'])) {

	if($_GET['status'] == 'registerError') {

		echo "<br/><h1>No puede haber campos vacíos.</h1>";
	
	} else {

		echo "<br/><h1>Usuario Registrado</h1><br>";

	}


}