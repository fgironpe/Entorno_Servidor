<?php

session_start();

$user = isset($_POST['user']) ? $_POST['user'] : "" ;
$pass = isset($_POST['pass']) ? $_POST['pass'] : "" ;
$recordar = isset($_POST['recordar']) ? $_POST['recordar'] : false ;


if($user == "" || $pass == "") {

	header("location: login.php?status=loginVacio");

} else if(array_key_exists($user, $_SESSION['usuarios'])) {

	if(in_array($pass, $_SESSION['usuarios'][$user])) {
		
			$_SESSION['_activo'] = $user;

		if($recordar == true) {
			
				$_SESSION['_recordar'] = $user;

		}
		else {
			$_SESSION['_recordar'] = "";
		}
		header("location: listaUsuarios.php");
	} 
	else {
		header("location: login.php?status=passError");
	}

} 
else {
	header("location: login.php?status=userError");
}