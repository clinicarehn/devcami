<?php
session_start();   
include "../funtions.php";
	
//CONEXION A DB
$mysqli = connect_mysqli();

//CONSULTA LOS DATOS DE LA ENTIDAD CORPORACION
$consulta = "SELECT * FROM almacen";
$result = $mysqli->query($consulta) or die($mysqli->error);			  

if($result->num_rows>0){
	while($consulta2 = $result->fetch_assoc()){
		echo '<option value="'.$consulta2['almacen_id'].'">'.$consulta2['nombre'].'</option>';
	}	
}else{
	echo '<option value="">No se encontraron registros</option>';
}

$result->free();//LIMPIAR RESULTADO
$mysqli->close();//CERRAR CONEXIÓN