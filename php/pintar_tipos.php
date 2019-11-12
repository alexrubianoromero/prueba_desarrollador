<?php
	
		    $data = file_get_contents("../data-1.json");
		    $products = json_decode($data, true);
		    $arr_ciudades = '';
		    echo '  <select name="tipo" id="selectTipo">';
		    echo '<option value="">Elige una tipo</option>' ;
		    $arr_ciudades =array();
		    foreach ($products as $product) {

		    	    if (in_array($product['Tipo'], $arr_ciudades)) 
		    	       {
						    
						}
					else{	
		        		echo '<option value="'.$product['Tipo'].'">'.$product['Tipo'].'</option>' ;
		        		$arr_ciudades[]= $product['Tipo'];
		        	    } 
		    }
    		echo ' </select>';
?>


                 
                  
         