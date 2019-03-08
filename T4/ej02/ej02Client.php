<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Comunidades Autónomas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>

	window.onload = establecerConexion;

		function establecerConexion () {
			
			if(window.XMLHttpRequest) { // Navegadores que siguen los estándares	
				peticion_http = new XMLHttpRequest();
			}else if(window.ActiveXObject) { // Navegadores obsoletos
				peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
			}

			var ccaa = document.getElementById("ccaa").value;

			peticion_http.onreadystatechange = cargarProvincias;
			peticion_http.open("POST", "ej02Server.php", true);
			peticion_http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			peticion_http.send("ccaa=" + ccaa);
		}

		function cargarProvincias() {

			if(peticion_http.readyState == 4) {
				if(peticion_http.status == 200) {
					
					respuesta = peticion_http.responseText;

						document.getElementById("divProvincias").innerHTML = respuesta;
						
				} 
			} 

		}

	</script>
</head>
<body>
	<h1>Comunidades Autónomas</h1>
		<div id="divCCAA">
			<label for="ccaa">CCAA: </label>
			<select name="ccaa" id="ccaa" onchange="establecerConexion()">
				<option value="Andalucía">Andalucía</option>
				<option value="Aragón">Aragón</option>
				<option value="Asturias (Principado de)">Asturias (Principado de)</option>
				<option value="Canarias">Canarias</option>
				<option value="Cantabria">Cantabria</option>
				<option value="Castilla y León">Castilla y León</option>
				<option value="Castilla-La Mancha">Castilla-La Mancha</option>
				<option value="Guadalajara">Guadalajara</option>
				<option value="Cataluña">Cataluña</option>
				<option value="Ceuta (Ciudad de)">Ceuta (Ciudad de)</option>
				<option value="Comunidad Valenciana">Comunidad Valenciana</option>
				<option value="Extremadura">Extremadura</option>
				<option value="Galicia">Galicia</option>
				<option value="Islas Baleares">Islas Baleares</option>
				<option value="Madrid (Comunidad de)">Madrid (Comunidad de)</option>
				<option value="Melilla (Ciudad de)">Melilla (Ciudad de)</option>
				<option value="Murcia (Región de)">Murcia (Región de)</option>
				<option value="Navarra (Comunidad Foral de)">Navarra (Comunidad Foral de)</option>
				<option value="País Vasco">País Vasco</option>
				<option value="Rioja (La)">Rioja (La)</option>
			</select>
		</div><br>
		<div id="divProvincias">		
		</div>

</body>
</html>