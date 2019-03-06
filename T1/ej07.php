<?php

/*
Dada una línea de texto y un número entre 1 y 6, generar una código HTML que contenga dicha línea entre tags <hX> crecientes desde 1 hasta n y luego decreciendo hasta 1 de nuevo.
	Ejemplo:
Introduce línea de texto: HOLA
Introduce n: 4
	<h1>HOLA</h1>
	<h2>HOLA</h2>
	<h3>HOLA</h3>
	<h4>HOLA</h4>
	<h3>HOLA</h3>
	<h2>HOLA</h2>
	<h1>HOLA</h1>
*/
$cont = 1;

do{
	echo "Introduce un número:\n";
	fscanf(STDIN, "%s\n",$num);
} while($num > 6 || $num < 0);

echo "Introduce una línea de texto:\n";
fscanf(STDIN, "%s\n",$texto);

$contMin = $num - 1;

for($i = 1; $i <= ($num*2) - 1; $i++) {
	
	if($i > $num) {
		echo "<h".$contMin.">".$texto."</h".$contMin.">\n";
		$contMin--;
	} else {
			echo "<h".$i.">".$texto."</h".$i.">\n";
	} 
}