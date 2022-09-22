<?php
include ('config.php');

$data = json_decode($_POST['q']);
var_dump($data);

$nombreCliente = $data[0];
$dirCliente = $data[1];
$telCliente = $data[2];
$emailCliente = $data[3];

$consulta = "INSERT INTO cliente
            (cli_nombre, cli_telefono, cli_direccion, cli_email) 
            VALUES 
            ('$nombreCliente','$telCliente','$dirCliente','$emailCliente')";

$resultado = mysqli_query($conex,$consulta);

if($resultado){                  
    echo "Cliente añadido exitosamente";                   
}else{
    echo "Ups, ha ocurrido un error";          
}