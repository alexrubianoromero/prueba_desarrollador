<?php
	
		    $data = file_get_contents("../data-1.json");
		    $products = json_decode($data, true);
		    $arr_ciudades = '';
		    echo ' <select name="ciudad" id="selectCiudad">';
		    echo '<option value="">Elige una ciudad</option>' ;
		    $arr_ciudades =array();
		    foreach ($products as $product) {

		    	    if (in_array($product['Ciudad'], $arr_ciudades)) 
		    	       {
						    
						}
					else{	
		        		echo '<option value="'.$product['Ciudad'].'">'.$product['Ciudad'].'</option>' ;
		        		$arr_ciudades[]= $product['Ciudad'];
		        	    }
		    
		    }
    		echo '   </select>';


?>

<script type="text/javascript">
/*
	 $("#selectCiudad").change(function() {
	 	
	 	valorcito = $("#selectCiudad").val();
            //alert( valorcito  ); 
			var data =  'valorciudad=' + valorcito;
							
						$.post('php/mostrar_bienes_raices2.php',data,function(a){
							//$(window).attr('location', '../index.php);
							$("#div_traer_resultados").html(a);
								//alert(data);
							});	
     });
*/
</script>


                 
                  
         