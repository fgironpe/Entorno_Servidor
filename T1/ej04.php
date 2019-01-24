<?php
/*
Obtener por teclado infinitos números hasta introducir el 0. Una vez hecho eso, pedir al usuario qué operación realizar, pudiendo ser ésta “sumar” o “multiplicar”, mostrándose a continuación la suma o multiplicación (respectivamente) de los datos previamente introducidos, y en caso de que se introduzca una operación no válida, un mensaje de error.
	Ejemplo:
	Introduce n: 1
	Introduce n: -7
	Introduce n: 0
	Operación? sumar
	La suma vale -6

*/

$numeros = [];

do {

echo "Escribe un número";
fscanf(STDIN, "%d\n",$num);

if($num!= 0){
	array_push($numeros, $num);
}

} while ($num != 0);

echo "¿operación? : ¿sumar o multiplicar?";
fscanf(STDIN, "%s\n",$operacion);

switch($operacion) {
	case 'sumar': 
		echo "La suma vale ".array_sum($numeros);
		break;
	case 'multiplicar':
		echo "La multiplicación vale ".array_product($numeros);
		break;
	default:
		echo "Operación inválida";
		break;	
}