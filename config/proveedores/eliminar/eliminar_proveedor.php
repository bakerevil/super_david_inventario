<?php
require_once('../../consulta.php');
$IDProveedor = $_GET ['IDProveedor'];

$query = "DELETE FROM proveedor WHERE IDProveedor = '$IDProveedor'";

$conexion->query($query);

header("location: ../../../proveedores.php");
?>
