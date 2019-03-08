<?php

$nombre = isset($_POST['name']) ? $_POST['name'] : "";
$titulo = rand(1, 3);
$num_saludo = rand(0,2);
$saludos = ['Hola '. $nombre, 'Qué tal estás '. $nombre, '¡¡Qué pasa '. $nombre.'!!'];

$saludo_devuelto = "<h".$titulo.">".$saludos[$num_saludo]."</h".$titulo.">";

if($nombre == "") {
	$saludo_devuelto = "Introduce un nombre para poder saludarte";
}

echo $saludo_devuelto;