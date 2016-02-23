<?php
include("../json/pais.php");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>JQUERY - PHP - MYSQL</title>
<script src="../js/jquery.js"></script>
<script src="../js/jqphpmysql.js"></script>
<link rel="stylesheet" href="../json/style.css">

<meta charset="UTF-8">
</head>

<body>

<div class="divContenedor">
	<h2>Prueba Combos JQUERY-PHP-MYSQL</h2>
	<div class="divLabels">
		<label for="pais">Pais:</label>
	</div>
	<div class="divSelects">
		<select id="pais">
			<option value="0">Seleccione Pais</option>
			<?php
				$paises = obtenerTodosLosPaises();
					foreach ($paises as $pais) { 
						echo '<option value="'.$pais->id.'">'.utf8_encode($pais->nombre).'</option>';		
					}
			
			?>
		</select>
	</div>
	<div class="divLabels">
		<label for="ciudades">Ciudad:</label>
	</div>
	<div class="divSelects">
		<select id="ciudades">
			<option value="0">Seleccione Ciudad</option>
		</select>
	</div>
	
</div>


</body>
</html>
