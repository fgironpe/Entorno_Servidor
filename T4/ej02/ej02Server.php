<?php

$comunidades = ['Andalucía' => ['Almería','Cádiz','Córdoba','Granada','Huelva','Jaén','Málaga','Sevilla'], 
							'Aragón' => ['Huesca','Teruel','Zaragoza'], 
							'Asturias (Principado de)' => ['Asturias'], 
							'Canarias' => ['Palmas (Las)','Santa Cruz de Tenerife'], 
							'Cantabria' => ['Cantabria'], 
							'Castilla y León' => ['Ávila','Burgos','León','Palencia','Salamanca','Segovia','Soria','Valladolid','Zamora'], 
							'Castilla-La Mancha' => ['Albacete','Ciudad Real','Cuenca','Guadalajara','Toledo'], 
							'Cataluña' => ['Barcelona','Gerona','Lérida','Tarragona'], 
							'Ceuta (Ciudad de)' => ['Ceuta'], 
							'Comunidad Valenciana' => ['Alicante','Castellón','Valencia'], 
							'Extremadura' => ['Badajoz','Cáceres'], 
							'Galicia' => ['Coruña (La)','Lugo','Orense','Pontevedra'], 
							'Islas Baleares' => ['Islas Baleares'], 
							'Madrid (Comunidad de)' => ['Madrid'], 
							'Melilla (Ciudad de)' => ['Melilla'], 
							'Murcia (Región de)' => ['Murcia'], 
							'Navarra (Comunidad Foral de)' => ['Navarra'], 
							'País Vasco' => ['Álava','Guipúzcoa','Vizcaya'], 
							'Rioja (La)' => ['Rioja (La)']];

$ccaa = isset($_POST['ccaa']) ? $_POST['ccaa'] : "" ;

if(array_key_exists($ccaa , $comunidades)) {

	$select = "<label for='provincias'>Provincias: </label><select id='provincias'>";
	$options = "";

	foreach($comunidades[$ccaa] as $comunidad => $provincia) {

			$options .= "<option value='".$provincia."'>". $provincia ."</option>";
		
		}

}

	$select .= $options . "</select>";

	echo $select;

