<?php
include ('config.php');

$data = json_decode($_POST['q']);
var_dump($data);

$nombreProveedor = $data[0];
$dirProveedor = $data[1];
$telProveedor = $data[2];
$emailProveedor = $data[3];

$consulta = "INSERT INTO proveedor
            (prov_nom, prov_tel, prov_dir, prov_email) 
            VALUES 
            ('$nombreProveedor','$telProveedor','$dirProveedor','$emailProveedor')";

$resultado = mysqli_query($conex,$consulta);

if($resultado){                  
    echo "Proveedor añadido exitosamente";                   
}else{
    echo "Ups, ha ocurrido un error";          
}