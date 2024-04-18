<?php
require_once('../../consulta.php');
$IDProducto = $_POST ['IDProducto'];
$nombre = $_POST ['nombre'];
$precio = $_POST ['precio'];
$stock = $_POST ['stock'];
$categoria = $_POST ['categoria'];


$query = "INSERT INTO producto (nombre, precio, stock, categoria) VALUES ('$nombre', '$precio','$stock','$categoria')";
$conexion->query($query);
header("Location: ../../../index.php");
?>