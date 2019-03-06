<?php
	session_start();

?>
<p>Usuario actual <?=$_SESSION['_activo']?></p>
<h1>Lista de mensajes de <?=$_GET['rem']?></h1>

<table border="1">
	<tr>
		<td>Fecha</td>
		<td>Texto</td>
	</tr>
	
	<?php foreach ($_SESSION['usuarios'][$_SESSION['_activo']]['mensajes'] as $numMensaje => $datosMensaje): ?>
		<?php if ( $datosMensaje['remitente'] == $_GET['rem']): ?>
			<tr>
				<td><?=$datosMensaje['fecha']?></td>
				<td><?=$datosMensaje['texto']?></td>
			</tr>
		<?php endif;?>
	<?php endforeach;?>
</table>

<a href="listaUsuarios.php">Volver a la lista de usuarios</a>