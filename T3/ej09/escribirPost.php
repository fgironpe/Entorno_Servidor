<?php

session_start();

if(isset($_SESSION['usuarios'])) {

	$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : "";
	$remite = isset($_POST['remite']) ? $_POST['remite'] : "";
	$recibe = isset($_POST['recibe']) ? $_POST['recibe'] : "";
	$fecha = date('d/m/Y (H:m:s)');

	array_push($_SESSION['usuarios'][$recibe]['mensajes'], ['remitente' => $_SESSION['_activo'], 'fecha' => $fecha, 'texto' => $mensaje] );

	header("location:listaUsuarios.php");

}