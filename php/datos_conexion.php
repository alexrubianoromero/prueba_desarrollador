<?php
$inmuebles = "inmuebles";
/*
$servidor = "localhost";
$usuario = "root";
$clave  = "peluche2016";
$nombrebase = "base_prueba_desarrollo";
*/
$servidor = "localhost";
$usuario = "ctwtvsxj_admin";
$clave  = "ElMejorProgramador***";
$nombrebase = "ctwtvsxj_base_prueba_desarrollo";

$conexion =mysql_connect($servidor,$usuario,$clave);
$la_base =mysql_select_db($nombrebase,$conexion);



?>