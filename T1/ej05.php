<?php

/*
Similar al ejercicio 3, dado un número ciclar entre las palabras “as”, “dos”, … “siete”, “sota”, “caballo” y “rey” tantas veces como diga tal número.
	Ejemplo
Introduce n: 5
	as dos tres cuatro cinco
	
Ejemplo:
Introduce n: 16
as dos tres cuatro cinco seis siete sota caballo rey as dos tres cuatro cinco seis
*/

$cartas = ["as", 2, 3, 4, 5, 6, 7, "SOTA", "CABALLO", "REY"];
$carta = 0;

echo "Introduce un número:\n";
fscanf(STDIN, "%d\n",$num);

for($i = 0; $i < $num; $i++) {
	if($carta > 9) {
		$carta = 0;
		echo "\n";
	}
	echo $cartas[$carta]." ";
	$carta++;
}