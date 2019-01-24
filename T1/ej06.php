<?php
/*
Pedir por teclado nombres de personas y sus edades, hasta que se introduzca el nombre “fin”. Mostrar a continuación el nombre de cada persona introducida y su edad (entre paréntesis). NOTA: Utilizar arrays asociativos. ¿Qué ocurre si dos personas se llaman igual? ¿Cómo podríamos ver la información anterior ordenada por nombre? ¿Y por edad descendente?
	Ejemplo:
	Nombre? Ana
	Edad de Ana? 18
	Nombre? Pepe
	Edad de Pepe? 15
	Nombre? Rosa
	Edad de Rosa? 18
	Nombre? Juan
	Edad de Juan? 17
	Nombre? fin
	Ana(18), Pepe(15), Rosa(18), Juan(17),

*/
$personas = [];

do {
	echo "Introduce un nombre:\n";
	fscanf(STDIN, "%s\n",$nombre);

	if($nombre !== "fin"){
		echo "Introduce un edad:\n";
		fscanf(STDIN, "%d\n",$edad);
		$personas[$nombre] =  $edad;
	}

} while($nombre !== "fin");
	
foreach($personas as $nombre => $edad) {
	echo $nombre."(".$edad.")\n";
}

echo "¿Cómo quieres ordenar la lista?:\n";
	fscanf(STDIN, "%s\n",$orden);

	switch($orden) {
		case "nombre":
			ksort($personas);
			break;
		case "edad":
			arsort($personas);
			break;
		default:
		echo "Orden inválido";
		break;	
	}
	
	foreach($personas as $nombre => $edad) {
		echo $nombre."(".$edad.")\n";
	}

	//Cuando repetimos el nombre, que es la clave, coge el último valor que se le haya asignado al nombre.