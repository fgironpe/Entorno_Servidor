<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Saludador</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>

		function establecerConexion () {
			
			if(window.XMLHttpRequest) { // Navegadores que siguen los estándares	
				peticion_http = new XMLHttpRequest();
			}else if(window.ActiveXObject) { // Navegadores obsoletos
				peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
			}

			var nombre = document.getElementById("name").value;

			peticion_http.onreadystatechange = saludar;
			peticion_http.open("POST", "ej01Server.php", true);
			peticion_http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			peticion_http.send("name=" + nombre);
		}

		function saludar() {

			if(peticion_http.readyState == 4) {
				if(peticion_http.status == 200) {
					
					respuesta = peticion_http.responseText;

						document.getElementById("divRespuesta").innerHTML = respuesta;

				} 
			} 

		}

	</script>
</head>
<body>
	<h1>Saludador</h1>

		<label for="name">Introduce tu nombre</label>
		<input type="text" name="name" id="name"/><br><br>
		<div id="divRespuesta"></div><br><br>
		<input type="button" onclick="establecerConexion()" value="Saludar">

</body>
</html>