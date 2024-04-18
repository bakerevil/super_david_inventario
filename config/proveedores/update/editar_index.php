<?php
require_once('../../consulta.php');
$IDProveedor = $_POST['IDProveedor'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$rfc = $_POST['rfc'];
$producto = $_POST['producto'];



$query = "UPDATE proveedor set  nombre='$nombre', direccion='$direccion', telefono='$telefono', rfc='$rfc', producto='$producto' WHERE IDProveedor= '$IDProveedor' ";

$conexion->query($query);


header("location: ../../../proveedores.php");
?>

