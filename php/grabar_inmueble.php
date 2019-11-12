<?php
$info = explode("*", $_REQUEST['valores']);
include('datos_conexion.php');
$sql = "insert into $inmuebles (id,direccion,ciudad,telefono,codigo_postal,tipo,precio) 
values('".$info[0]."'
	,'".$info[1]."'
	,'".$info[2]."'
	,'".$info[3]."'
	,'".$info[4]."'
	,'".$info[5]."'
	,'".$info[6]."'
	)";
//echo '<br>'.$sql;
$consulta_grabar= mysql_query($sql,$conexion);

?>