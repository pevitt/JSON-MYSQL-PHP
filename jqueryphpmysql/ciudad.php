<?php
	include("../librerias/db.php");
	
	if(isset($_POST['idPais'])) {
		$ciudadess = "";
		$sql = "SELECT idciudad, nombre 
				FROM ciudades 
				WHERE idpais = ".$_POST['idPais']; 

		$db = obtenerConexion();
		$result = ejecutarQuery($db, $sql);
		$ciudadess = "<option value='0'>Seleccione Ciudad</option>";
		while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			
		    $ciudadess .= "<option value='".$row['idciudad']."'>".$row['nombre']."</option>";
		}
		echo $ciudadess;
		cerrarConexion($db, $result);

		
	}
	
	
?>