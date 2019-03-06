<?php

session_start();

$user = isset($_POST['user'])  ? $_POST['user'] : "";
$pass = isset($_POST['pass'])  ? $_POST['pass'] : "";

if($user == "" || $pass == "") {

	header("location: registrar.php?status=registerError");

} else {

	if($_SESSION['usuarios']) {
		$_SESSION['usuarios'] += [$user => ['pwd' => $pass, 'mensajes' => []]];
	} 
	else {
		$_SESSION['usuarios'] = [$user => ['pwd' => $pass, 'mensajes' => []]];
	}

	header("location: registrar.php?status=registerOK");

}