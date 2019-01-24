<?php

/*
Dado dos números n y p (con p entre 1 y 10), ciclar entre el cero y el p-1 tantas veces como diga n.
	Ejemplo:
Introduce n: 3
Introduce p: 8
	0 1 2 3 4 5 6 7 0 1 2 3 4 5 6 7 0 1 2 3 4 5 6 7

*/

echo "Introduce n";
fscanf(STDIN, "%d\n",$n);
echo "Introduce p";
fscanf(STDIN, "%d\n",$p);

for($i = $n; $i > 0; $i--) {
	for($j = 0; $j < $p; $j++){
		echo $j." ";
	}
	echo "\n";
}