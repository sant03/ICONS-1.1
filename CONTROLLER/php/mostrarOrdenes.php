<?php

if(isset($_POST['function']) && !empty($_POST['function'])) {
    $function = $_POST['function'];
    
    switch($function) {
        case 'mostrarOrdenes' : function mostrarOrdenes(){
            
            include ('config.php');

            $consulta = "SELECT ord_numero_orden, ord_fecha, ord_estado FROM ordenxproveedor ORDER BY ord_numero_orden DESC";
            
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $id = $row['ord_numero_orden'];
                    $fecha = $row['ord_fecha'];
                    $estado = $row['ord_estado'];
                    echo "
                    <div class='col-lg-2 col-sm-5 card shadow text-center p-0 me-4 mb-3 rounded'>
                        <div class='card-body'>
                            <h6>Orden $id</h6>
                            <h6>Fecha: <span>$fecha</span> </h6>
                            <h6>Estado: <span class='text-info'>$estado</span> </h6>
                            <img src='../assets/imagenes/order.png' alt='' class='mt-2 mb-2' style='width:80px'>
                        </div>
                    </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }
        mostrarOrdenes();
        break;
    }
}