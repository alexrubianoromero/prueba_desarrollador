

<html>
<head>
	<title></title>
</head>
<body>
	<?php
/*	
	echo '<pre>';
	print_r($_REQUEST);
	echo '</pre>';
	*/
		$data = file_get_contents("../data-1.json");
		$products = json_decode($data, true);
		$ruta_imagen = "img/home.jpg";
		echo '<table border = "1">'; 
		if( !isset($_REQUEST['ciudad']) && !isset($_REQUEST['tipo']))
		     {  
		          pintar_resultados($products,$ruta_imagen);
		     } //fin de  if($_REQUEST['ciudad']=='' && $_REQUEST['tipo']=='' )	
		if( $_REQUEST['ciudad']=='' && $_REQUEST['tipo']=='')
		     {  
		          pintar_resultados($products,$ruta_imagen);
		     } //fin de  if($_REQUEST['ciudad']=='' && $_REQUEST['tipo']=='' )	
        if($_REQUEST['ciudad']<>'' && $_REQUEST['tipo']=='' )
		     {  
		          pintar_resultados_ciudad($products,$ruta_imagen,$_REQUEST['ciudad']);
		     } //fin de  if($_REQUEST['ciudad']=='' && $_REQUEST['tipo']=='' )	
		 if($_REQUEST['ciudad']=='' && $_REQUEST['tipo']<>'' )
		     {  
		          pintar_resultados_tipo($products,$ruta_imagen,$_REQUEST['tipo']);
		     } //fin de  if($_REQUEST['ciudad']=='' && $_REQUEST['tipo']=='' )	
    	 if($_REQUEST['ciudad']<>'' && $_REQUEST['tipo']<>'' )
		     {  
		          pintar_resultados_ciudad_tipo($products,$ruta_imagen,$_REQUEST['ciudad'],$_REQUEST['tipo']);
		     } //fin de  if($_REQUEST['ciudad']=='' && $_REQUEST['tipo']=='' )	
					
		echo '</table>';

//////////////////////////////////////////////////////////
     function pintar_resultados($products,$ruta_imagen){
     					foreach ($products as $product)
						{
									    echo '<tr>';
									    echo '<td><img src="'.$ruta_imagen.'"  width="250px" ></td>';
									    echo '<td>';
									    echo 'Direccion:'.$product['Direccion'];
									    echo '<br>Ciudad:'.$product['Ciudad'];
									    echo '<br>Telefono:'.$product['Telefono'];
									    echo '<br>Codigo Postal:'.$product['Codigo_Postal'];
									    echo '<br> Tipo:'.$product['Tipo'];
									    echo '<br> Precio:'.$product['Precio'];
									    echo '<br><button class="grabacion" value="'
									    .$product['Id'].'*'.$product['Direccion'].'*'.$product['Ciudad'].
									    '*'.$product['Telefono'].'*'.$product['Codigo_Postal'].'*'.$product['Tipo'].
									    '*'.$product['Precio'].
									    '">GRABAR</button>';
									    echo '</td>';
									    echo '</tr>';
							    
						} //fn de foreach
     }//fin de pintar resultados
      function pintar_resultados_ciudad($products,$ruta_imagen,$ciudad){
     					foreach ($products as $product)
						{
							   if($product['Ciudad']==$ciudad)
							   {
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
							    }		    
							    
						} //fn de foreach
     }//fin de pintar resultados

      function pintar_resultados_tipo($products,$ruta_imagen,$tipo){
     					foreach ($products as $product)
						{
							   if($product['Tipo']==$tipo)
							   {
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
							    }		    
							    
						} //fn de foreach
     }//fin de pintar resultados
       function pintar_resultados_ciudad_tipo($products,$ruta_imagen,$ciudad,$tipo){
     					foreach ($products as $product)
						{
							   if($product['Ciudad']==$ciudad  && $product['Tipo']==$tipo)
							   {
									    echo '<tr>';
									    echo '<td><img src="'.$ruta_imagen.'"  width="250px" ></td>';
									    echo '<td>';
									    echo 'Direccion:'.$product['Direccion'];
									    echo '<br>Ciudad:'.$product['Ciudad'];
									    echo '<br>Telefono:'.$product['Telefono'];
									    echo '<br>Codigo Postal:'.$product['Codigo_Postal'];
									    echo '<br> Tipo:'.$product['Tipo'];
									    echo '<br> Precio:'.$product['Precio'];
									    echo '<br><button class="grabacion"  "value="'.$product['Id'].'">GRABAR</button>';
									    echo '</td>';
									    echo '</tr>';
							    }		    
							    
						} //fn de foreach
     }//fin de pintar resultados
	?>

</body>
</html>
<script type="text/javascript">
  $(".grabacion").click(function(){
  	    valores = $(this).val();
              //alert(valores);

               var data =  'valores=' + valores;
                  //data += '&tipo=' + valor_tipo;
                  //alert(data);
                  $.post('php/grabar_inmueble.php',data,function(b){
                      $("#div_traer_resultados").html(b);
                  }); 
         

  });
</script>