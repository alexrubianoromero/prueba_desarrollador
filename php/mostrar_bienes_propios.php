<?php
include('datos_conexion.php');
$sql_bienes = "select * from $inmuebles";
$consulta_inmuebles= mysql_query($sql_bienes,$conexion);
?>
<html>
<head>
	<title></title>
</head>
<body>

<table border ="1">
	<?php
	$ruta_imagen = "img/home.jpg";
     while($inmuebles= mysql_fetch_assoc($consulta_inmuebles))
     {
        
									    echo '<td><img src="'.$ruta_imagen.'"  width="250px" ></td>';
									    echo '<td>';
									    echo 'Id:'.$inmuebles['id'];
									    echo '<br>Direccion:'.$inmuebles['direccion'];
									    echo '<br>Ciudad:'.$inmuebles['ciudad'];
									    echo '<br>Telefono:'.$inmuebles['telefono'];
									    echo '<br>Codigo Postal:'.$inmuebles['codigo_postal'];
									    echo '<br> Tipo:'.$inmuebles['tipo'];
									    echo '<br> Precio:'.$inmuebles['precio'];
									    echo '</td>';
									    echo '</tr>';
     }
	?>

</table>

</body>
</html>