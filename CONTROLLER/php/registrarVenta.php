<?php
include ('config.php');

$data = json_decode($_POST['q']);
var_dump($data);

    $cliente = $data[0];
    $fecha = $data[3];
    $estado = $data[4];
    $producto = $data[1];
    $cantidad = $data[2];
    $total = $data[6];
    $comentario = $data[5];

    $consulta1 = "SELECT cli_id, cli_nombre FROM cliente WHERE cli_nombre = '$cliente'";
    $resultado1 = mysqli_query($conex,$consulta1);
    $rowCliId = mysqli_fetch_array($resultado1);
    

    $consulta2 = "SELECT pro_id, pro_referencia FROM productos WHERE pro_referencia = '$producto'";
    $resultado2 = mysqli_query($conex,$consulta2);
    $rowProId = mysqli_fetch_array($resultado2);
    
    if(mysqli_num_rows($resultado1) > 0 && mysqli_num_rows($resultado2) > 0){
        $cliNom = $rowCliId['cli_nombre'];
        $cli_id = $rowCliId['cli_id'];
        $proRef = $rowProId['pro_referencia'];
        $pro_id = $rowProId['pro_id'];

        if($cliNom == $cliente && $proRef == $producto){

            $consulta = "INSERT INTO venta
                    (ven_cli_id, ven_pro_id, ven_cant_pro, ven_total, ven_estado_pago, ven_fecha, ven_pago, ven_debe, comentario) 
                    VALUES 
                    ('$cli_id','$pro_id','$cantidad','$total','$estado','$fecha','','','$comentario')";

            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                        
                echo "Venta registrada exitosamente";
                        
            }else{
    
                echo "Ups, ha ocurrido un error";          
            }
        }
    }else{
        $message = "El producto o cliente ingresado no existe";
        echo $message;
    }
           
    

