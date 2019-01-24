<?php
/*
Dado un número “n”, dibujar líneas desde n caracteres hasta un carácter disminuyendo en un carácter cada línea que se dibuje. Repetir el patrón “+” “-” “.” en cada carácter que se imprima.
	Ejemplo:
Introduce n: 7
	+-.+-.+
	-.+-.+
	-.+-.
	+-.+
	-.+
	-.
	+
	
Ejemplo 
Introduce n: 2
	+-
	.

*/

$simbol = ".";

echo "Introduce un número:\n";
fscanf(STDIN, "%d\n",$num);

for($i = $num; $i > 0; $i--) {
	for ($j = 0; $j < $i; $j++){
		if($simbol === "+") {
			$simbol = "-";
		} else if ($simbol==="-"){
				$simbol = ".";
		} else {
				$simbol = "+";
		}
		echo $simbol;
	}
	echo "\n";
}