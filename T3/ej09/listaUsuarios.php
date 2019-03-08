<?php session_start() ?>
<p>Usuario actual <?=$_SESSION['_activo']?></p>
<h1>Lista de Usuarios / mensajes</h1>
<a href="login.php">Volver</a>
<br><br>
<?php 

if(isset($_SESSION['usuarios'])) {

	$numMensaje = 0;

	foreach ($_SESSION['usuarios'] as $key => $value) {
	
		if($key != $_SESSION['_activo']){
			echo "<p>". $key;
			foreach($_SESSION['usuarios'][$_SESSION['_activo']]['mensajes'] as $numMensaje => $datosMensaje){
				
				if($datosMensaje['remitente'] == $key ) {
					$numMensaje++;
				} 
			}
			echo " (". $numMensaje . ") ";
			if($numMensaje > 0) {
				echo "<a href='leer.php?rem={$key}'>Leer</a>";	
			}
			echo "  <a href='escribir.php?rem={$key}'>Escribir</a>";
			echo "</p>";
		}
		
		
	}

	if(isset($_GET['status'])) {
		if($_GET['status'] == 'remError'){
			echo "<h1>El campo para está vacío</h1>";

		}
	}


}

echo 	"<br><br>";





