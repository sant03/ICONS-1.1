<?php

    include ("config.php");

    if(!empty($_POST['search'])){

        $response;
        
        $q= mysqli_real_escape_string($conex, $_POST['q']);

        $sql=("SELECT cli_id, cli_nombre FROM cliente WHERE cli_id='$q' OR cli_nombre LIKE '".$q."%'");
         
        $resultadoBD=$conex->query($sql);
        
            while($data = $resultadoBD->fetch_array()){   
                $response = $data['cli_nombre'];
                echo "<li class='search_cli list-group-item' >$response</li>";
            }
        

        mysqli_close($conex);
        
    }