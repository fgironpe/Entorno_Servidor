<?php

include("../utils.php");

$idioma = isset ( $_POST ['idioma'] ) ? $_POST ['idioma'] : 'ES';

$traducciones = $BDetiquetas[$idioma];

$respuesta = implode("#", $traducciones);

echo $respuesta;

?>