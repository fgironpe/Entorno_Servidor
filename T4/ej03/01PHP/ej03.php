<?php

include("../utils.php");

$idioma = isset ( $_REQUEST ['radioIdioma'] ) ? $_REQUEST ['radioIdioma'] : 'ES';

$word = $BDetiquetas[$idioma][0];
$translation = $BDetiquetas[$idioma][1];
$button = $BDetiquetas[$idioma][2];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Traductor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>
		function cambiarIdioma() {
			formulario.submit();
		}
	</script>
</head>
<body>
	<div id="divRadioIdioma">
		<form action="ej03.php" method="POST" id="formulario">
			<?= 
				pintarRadio($idioma);
			?>
		</form>	
	</div>
	<div id="divForm">
	<br><br>
		<form>
			<label for="word"><?=$word?></label>
			<input type="text" name="word" id="word"><br>
			<label for="translation"><?= $translation ?></label>
			<input type="text" name="translation" id="translation"><br><br>
			<input type="submit" value="<?=$button?>">
		</form>
	</div>		
</body>
</html>