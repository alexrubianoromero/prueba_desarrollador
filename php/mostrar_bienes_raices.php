

<html>
<head>
	<title></title>
</head>
<body>
	<?php
	
		$data = file_get_contents("../data-1.json");
		$products = json_decode($data, true);
		$ruta_imagen = "img/home.jpg";
		echo '<table border = "1">'; 
		foreach ($products as $product) {
		  
			  
						    echo '<tr>';
						    echo '<td><img src="'.$ruta_imagen.'"  width="250px" ></td>';
						    echo '<td>';
						    echo 'Direccion:'.$product['Direccion'];
						    echo '<br>Ciudad:'.$product['Ciudad'];
						    echo '<br>Telefono:'.$product['Telefono'];
						    echo '<br>Codigo Postal:'.$product['Codigo_Postal'];
						    echo '<br> Tipo:'.$product['Tipo'];
						    echo '<br> Precio:'.$product['Precio'];
						    echo '<br><button class="grabacion" value="'.$product['Id'].'">GRABAR</button>';
						    echo '</td>';
						    echo '</tr>';
						    
			  
		} //fn de foreach
		echo '</table>';

	?>

</body>
</html>
<script type="text/javascript">
/*
  $(".grabacion").click(function(){
               // alert('dasdasdas');
							var data =  'Id=' + $("#id").val();
							data += '&Direccion=' + $("#Direccion").val();
							data += '&Ciudad=' + $("#Ciudad").val();
							data += '&Telefono=' + $("#Telefono").val();
							data += '&Codigo_Postal=' + $("#Codigo_Postal").val();
							data += '&Tipo=' + $("#Tipo").val();
							data += '&Precio=' + $("#Precio").val();
							$.post('grabar_inmueble.php',data,function(a){
							//$(window).attr('location', '../index.php);
							$("#div_traer_resultados").html(a);
								//alert(data);
							});	
					

   });
*/
<script type="text/javascript">
  $(".grabacion").click(function(){
              alert('dasdasdas');
          });
</script>
</script>