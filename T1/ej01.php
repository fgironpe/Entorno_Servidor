<?php
/*
Pedir infinitos números enteros (hasta que se introduzca) el cero. Indicar finalmente cuál fue el máximo y cuál fue el mínimo.
	Ejemplo:
	Introduce n: -9
	Introduce n: 1
	Introduce n: 7
	Introduce n: -10
	Introduce n: 3
	Introduce n: 0
	Máximo: 7
	Mínimo: -10
*/

$min = 0;
$max = 0;

do {
	echo "Escribe un número: ";
	fscanf(STDIN, "%d\n",$num);
	if($num < $min) {
		$min = $num;
	}else if ($num > $max){
		$max = $num;
	}
}while ($num != 0);

echo "El menor número es ".$min."\n";
echo "El mayor número es ".$max;
