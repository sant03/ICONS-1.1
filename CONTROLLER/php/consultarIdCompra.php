<?php 
include ('config.php');

$consulta = "SELECT ord_fecha, MAX(ord_numero_orden) FROM ordenxproveedor;";

$resultado = mysqli_query($conex,$consulta);
$rowOrdId = mysqli_fetch_array($resultado);

$ordId = $rowOrdId['MAX(ord_numero_orden)']+1;
echo $ordId;