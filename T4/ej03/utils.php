<?php

$BDetiquetas=["ES"=>["Palabra","Traducción","Enviar"],
							"EN"=>["Word","Translation","Send"],
							"FR"=>["Mot","Traduction","Envoyer"]];


function pintarRadio($opcion) {

	global $BDetiquetas;
	$radio = "";

	foreach ($BDetiquetas as $key => $value) {
		
		$radio .= '<img src="../img/' . $key . '.png" heigth="30" width="60"/> <input type="radio" name="radioIdioma" value="'. $key . '"' . ($key == $opcion ? 'checked="checked"' : '') . 'onchange="cambiarIdioma()" >';
	
	}

	return $radio;

}