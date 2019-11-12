<?php
include('datos_conexion.php');
$sql_bienes = "select * from $inmuebles";
$consulta_inmuebles= mysql_query($sql,$conexion);
?>
<html>
<head>
	<title></title>
</head>
<body>
	asdkasjdklasjdaskljdaskldjasdklj
<table border ="1">
	<?php

     while($inmuebles= mysql_fetch_assoc($consulta_inmuebles))
     {
         echo '<tr>';	
         echo '<td>'.$inmuebles['id'].'</td>';
          echo '<td>'.$inmuebles['direccion'].'</td>';
           echo '<td>'.$inmuebles['ciudad'].'</td>';
            echo '<td>'.$inmuebles['telefono'].'</td>';
             echo '<td>'.$inmuebles['codigo_postal'].'</td>';
          echo '<td>'.$inmuebles['tipo'].'</td>';
          echo '<td>'.$inmuebles['precio'].'</td>';
          echo '</tr>';	
     }
	?>

</table>

</body>
</html>