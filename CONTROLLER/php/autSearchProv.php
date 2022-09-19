<?php

    include ("config.php");

    if(!empty($_POST['search'])){

        $response;
        
        $q= mysqli_real_escape_string($conex, $_POST['q']);

        $sql=("SELECT prov_id, prov_nom FROM proveedor WHERE prov_id='$q' OR prov_nom LIKE '".$q."%'");
         
        $resultadoBD=$conex->query($sql);
        
            while($data = $resultadoBD->fetch_array()){   
                $response = $data['prov_nom'];
                echo "<li class='search_prov list-group-item' >$response</li>";
            }
        

        mysqli_close($conex);
        
    }