<?php
require_once('../../consulta.php');
$IDProducto = $_GET ['IDProducto'];

$query = "DELETE FROM producto WHERE IDProducto = '$IDProducto'";

$conexion->query($query);

header("location: ../../../index.php");
?>

