<?php  
session_start();   
include "../funtions.php";
	
//CONEXION A DB
$mysqli = connect_mysqli();

//CONSULTA LOS DATOS DE LA ENTIDAD CORPORACION
$consulta = "SELECT servicio_id AS 'servicio_id', nombre AS 'servicio'
	FROM servicios"; 
$result = $mysqli->query($consulta); 

if($result->num_rows>0){
	while($consulta2 = $result->fetch_assoc()){
		echo '<option value="'.$consulta2['servicio_id'].'">'.$consulta2['servicio'].'</option>';
	}
}else{
	echo '<option value="">No hay registros</option>';
}

$result->free();//LIMPIAR RESULTADO
$mysqli->close();//CERRAR CONEXIÓN