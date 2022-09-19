<?php 

if(isset($_POST['function']) && !empty($_POST['function'])) {
    $function = $_POST['function'];
    
    switch($function) {
        case 'mostrarClientes' : function mostrarClientes(){
            
            include ('config.php');

            $consulta = "SELECT cli_nombre FROM cliente ORDER BY cli_nombre ASC";
            
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $nameCliente = $row['cli_nombre'];
                    echo "
                        <div class='col-lg-7 col-sm-5 card shadow text-center me-4 mb-3'>
                            <div class='card-body d-flex'>
                                <img src='../assets/imagenes/user-icon.png' style='width:60px'>
                                <h4 class='align-self-center ms-4'>$nameCliente</h4>
                            </div>
                        </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }
        mostrarClientes();
        break;
        case 'autSearchCli' : function autSearchCli(){

            include ('config.php');

            $q= mysqli_real_escape_string($conex, $_POST['q']);

            $consulta = "SELECT cli_id, cli_nombre FROM cliente WHERE cli_id='$q' OR cli_nombre LIKE '".$q."%'";
            
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $nameCliente = $row['cli_nombre'];
                    echo "
                        <div class='col-lg-7 col-sm-5 card shadow text-center me-4 mb-3'>
                            <div class='card-body d-flex'>
                                <img src='../assets/imagenes/user-icon.png' style='width:60px'>
                                <h4 class='align-self-center ms-4'>$nameCliente</h4>
                            </div>
                        </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }
        autSearchCli();
        break;
        case 'autSearchCliEmpty' : function autSearchCliEmpty(){
            include ('config.php');

            $q= mysqli_real_escape_string($conex, $_POST['q']);

            $consulta = "SELECT cli_nombre FROM cliente ORDER BY cli_nombre ASC";
            
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $nameCliente = $row['cli_nombre'];
                    echo "
                        <div class='col-lg-7 col-sm-5 card shadow text-center me-4 mb-3'>
                            <div class='card-body d-flex'>
                                <img src='../assets/imagenes/user-icon.png' style='width:60px'>
                                <h4 class='align-self-center ms-4'>$nameCliente</h4>
                            </div>
                        </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }autSearchCliEmpty();
        break;
        case 'mostrarRegistrosAZ' : function mostrarRegistrosAZ(){
            include ('config.php');

                $consulta = "SELECT cli_nombre FROM cliente ORDER BY cli_nombre ASC";
                

                $resultado = mysqli_query($conex,$consulta);

                if($resultado){
                    while($row = $resultado->fetch_array()){
                        $nameCliente = $row['cli_nombre'];
                        echo "
                            <div class='col-lg-7 col-sm-5 card shadow text-center me-4 mb-3'>
                                <div class='card-body d-flex'>
                                    <img src='../assets/imagenes/user-icon.png' style='width:60px'>
                                    <h4 class='align-self-center ms-4'>$nameCliente</h4>
                                </div>
                            </div>";
        
                    }
                }else{
                    echo "Resultados no encontrados";
                }
        }
        mostrarRegistrosAZ();break;
        case 'mostrarRegistrosZA' : function mostrarRegistrosZA(){
            include ('config.php');

                $consulta = "SELECT cli_nombre FROM cliente ORDER BY cli_nombre DESC";
                

                $resultado = mysqli_query($conex,$consulta);

                if($resultado){
                    while($row = $resultado->fetch_array()){
                        $nameCliente = $row['cli_nombre'];
                        echo "
                            <div class='col-lg-7 col-sm-5 card shadow text-center me-4 mb-3'>
                                <div class='card-body d-flex'>
                                    <img src='../assets/imagenes/user-icon.png' style='width:60px'>
                                    <h4 class='align-self-center ms-4'>$nameCliente</h4>
                                </div>
                            </div>";
        
                    }
                }else{
                    echo "Resultados no encontrados";
                }
        }
        mostrarRegistrosZA();break;
    }
}