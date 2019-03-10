<?php

include("../utils.php");

$idioma = isset ( $_REQUEST ['radioIdioma'] ) ? $_REQUEST ['radioIdioma'] : 'ES';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Traductor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>

		window.onload = cambiarIdioma;

		function cambiarIdioma () {
			
			if(window.XMLHttpRequest) { // Navegadores que siguen los estándares	
				peticion_http = new XMLHttpRequest();
			}else if(window.ActiveXObject) { // Navegadores obsoletos
				peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
			}

			idioma = document.querySelector('input[name="radioIdioma"]:checked').value;

			peticion_http.onreadystatechange = traducirEtiquetas;
			peticion_http.open("POST", "ej03POST.php", true);
			peticion_http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			peticion_http.send("idioma=" + idioma);
		}

		function traducirEtiquetas() {
			
			if(peticion_http.readyState == 4) {
				if(peticion_http.status == 200) {
					
					respuesta = peticion_http.responseText;

					var traducciones = respuesta.split("#");
					
					document.getElementById("labelWord").innerHTML = traducciones[0];
					document.getElementById("labelTranslation").innerHTML = traducciones[1];
					document.getElementById("btnSubmit").value= traducciones[2];

				} 
			} 

		}

	</script>
</head>
<body>
	<div id="divRadioIdioma">
		<form action="ej03.php" method="POST" id="formulario">
			<?= 
				pintarRadio($idioma);
			?>
		</form>	
	</div>
	<div id="divForm">
	<br><br>
		<form>
			<label for="word" id="labelWord"></label>
			<input type="text" name="word" id="word"><br>
			<label for="translation" id="labelTranslation"></label>
			<input type="text" name="translation" id="translation"><br><br>
			<input type="submit" value="" id="btnSubmit"/>
		</form>
	</div>		
</body>
</html>