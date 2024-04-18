<?php
require_once('../../consulta.php');
$IDProducto = $_POST['IDProducto'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$categoria = $_POST['categoria'];



$query = "UPDATE producto set  nombre='$nombre', precio='$precio', stock='$stock', categoria='$categoria' WHERE IDProducto= '$IDProducto' ";

$conexion->query($query);


header("location: ../../../index.php");
?>

