<?php
require_once('../../consulta.php');
$IDProveedor = $_POST ['IDProveedor'];
$nombre = $_POST ['nombre'];
$direccion = $_POST ['direccion'];
$telefono = $_POST ['telefono'];
$rfc = $_POST ['rfc'];
$producto = $_POST ['producto'];


$query = "INSERT INTO proveedor (nombre, direccion, telefono, rfc, producto) VALUES ('$nombre', '$direccion','$telefono','$rfc','$producto')";
$conexion->query($query);
header("Location: ../../../proveedores.php");
?>