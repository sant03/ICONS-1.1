<?php

    include ("config.php");

    if(!empty($_POST['search'])){

        $response;
        
        $q= mysqli_real_escape_string($conex, $_POST['q']);


        $sql=("SELECT pro_id, pro_referencia, pro_precio_compra FROM productos WHERE pro_id='$q' OR pro_referencia LIKE '".$q."%'");
       
        
        $resultadoBD=$conex->query($sql);
        
            while($data = $resultadoBD->fetch_array()){   
                $response = $data['pro_referencia'];
                $precio = $data['pro_precio_compra'];
                echo "<li class='search_pro list-group-item'>$response - $$precio</li>";
            }
        

        mysqli_close($conex);
        
    }